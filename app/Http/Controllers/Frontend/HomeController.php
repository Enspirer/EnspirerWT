<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\HeatMap;
use App\Models\SessionRecord;
use App\Models\VisitorCount;
use App\Models\VisitorLogs;
use App\Models\ImsProClientMessages;
use App\Models\Widgets;
use App\Models\Projects;
use Illuminate\Http\Request;
use Modules\WidgetManager\Entities\ImsClients;
use Modules\WidgetManager\Entities\WhatsappChatWidgetTemplate;
use Modules\WidgetManager\Entities\WhatsAppModel;
use Modules\Blog\Entities\Category;
use Modules\Blog\Entities\Post;
use DB;
use WhichBrowser\Parser as UserAgent;
use Carbon\Carbon;
use GeoIp2\Database\Reader as GeoIP;
/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function analytics_post(Request $request)
    {

        $page = $this->parseUrl($request->input('page'));
        $website = DB::table('projects')
            ->select(['projects.id', 'projects.url', 'projects.user_id', 'projects.exclude_bots', 'projects.exclude_ips', 'projects.exclude_params','projects.can_track'])
            ->join('users', 'users.id', '=', 'projects.user_id')
            ->where('projects.url', '=', $page['scheme'].'://'.$page['non_www_host'].'/' ?? null)
            ->first();

    




        // If the user's account exceeded the limit
        if (isset($website->can_track) && !$website->can_track) {
            return 403;
        }

        // If the website does not exist
        if (isset($website->can_track) == false) {
            return 404;
        }

        // If the website has any excluded IPs
        if ($website->exclude_ips) {
            $excludedIps = preg_split('/\n|\r/', $website->exclude_ips, -1, PREG_SPLIT_NO_EMPTY);

            if (IpUtils::checkIp($request->ip(), $excludedIps)) {
                return 403;
            }
        }

        $ua = new UserAgent(getallheaders());

        // If the website is excluding bots
        if ($website->exclude_bots) {
            if ($ua->device->type == 'bot') {
                return 403;
            }
        }

        // If the UA is not of a BOT
        $data = $values = [];

        $now =  Carbon::now();

        $date = $now->format('Y-m-d');
        $time = $now->format('H');

        if ($request->input('event')) {
            $event = $request->input('event');

            if (isset($event['name']) == false) {
                return;
            }

            $event = [str_replace(':', ' ', $event['name']), (isset($event['value']) && (int)$event['value'] > 0 && strlen($event['value']) <= 10 ? $event['value'] : null), (isset($event['unit']) && mb_strlen($event['unit']) <= 32 ? $event['unit'] : null)];

            $data['event'] = implode(':', $event);
        } else {
            // If the request has a referrer that's not an internal page
            $referrer = $this->parseUrl($request->input('referrer'));

            // Add the pageview
            $data['pageviews'] = $date;

            // Add the pageview by hour
            $data['pageviews_hours'] = $time;

            // Parse the query data
            parse_str($page['query'] ?? null, $params);

            // If the website has any excluded query parameters
            if ($website->exclude_params) {
                $excludeQueries = preg_split('/\n|\r/', $website->exclude_params, -1, PREG_SPLIT_NO_EMPTY);

                // If a match all rule is set
                if (in_array('&', $excludeQueries)) {
                    // Remove all parameters
                    $page['query'] = null;
                } else {
                    foreach ($excludeQueries as $param) {
                        // If the excluded parameter exists
                        if (isset($params[$param])) {
                            // Remove the excluded parameter
                            unset($params[$param]);
                        }
                    }

                    // Rebuild the query parameters
                    $page['query'] = http_build_query($params);
                }
            }

            // Add the page
            $data['page'] = mb_substr((isset($page['query']) && !empty($page['query']) ? $page['path'].'?'.$page['query'] : $page['path'] ?? '/'), 0, 255);

            // Get the user's geolocation
            try {
                $geoip = (new GeoIP(storage_path('app/geoip/GeoLite2-City.mmdb')))->city($request->ip());

                $continent = $geoip->continent->code.':'.$geoip->continent->name;
                $country = $geoip->country->isoCode.':'.$geoip->country->name;
                $city = $geoip->country->isoCode.':'. $geoip->city->name .(isset($geoip->mostSpecificSubdivision->isoCode) ? ', '.$geoip->mostSpecificSubdivision->isoCode : '');
            } catch (\Exception $e) {
                $continent = $country = $city = null;
            }

            $browser = mb_substr($ua->browser->name ?? null, 0, 64);
            $os = mb_substr($ua->os->name ?? null, 0, 64);
            $device = mb_substr($ua->device->type ?? null, 0, 64);
            $language = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? mb_substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) : null;
            $screenResolution = $request->input('screen_resolution') ?? null;

            // If the request is unique
            if (isset($referrer['non_www_host']) == false || $referrer['non_www_host'] != $website->url) {
                // Add the campaign
                if (isset($params['utm_campaign']) && !empty($params['utm_campaign'])) {
                    $data['campaign'] = $params['utm_campaign'];
                }

                // Add the continent
                $data['continent'] = $continent;

                // Add the country
                $data['country'] = $country;

                // Add the city
                $data['city'] = $city;

                // Add the browser
                $data['browser'] = $browser;

                // Add the OS
                $data['os'] = $os;

                // Add the device
                $data['device'] = $device;

                // Add the language
                $data['language'] = $language;

                // Add the visitor
                $data['visitors'] = $date;

                // Add the visitor by hour
                $data['visitors_hours'] = $time;

                // Add the screen-resolution
                $data['resolution'] = $screenResolution;

                // Add the landing page
                $data['landing_page'] = $data['page'];

                // Add the referrer
                $data['referrer'] = mb_substr($referrer['host'] ?? null, 0, 255);
            }
        }

        foreach ($data as $name => $value) {
            $values[] = "({$website->id}, '{$name}', " . DB::connection()->getPdo()->quote(mb_substr($value, 0, 255)) . ", '{$date}')";
        }

        $values = implode(', ', $values);

        // Stats
        DB::statement("INSERT INTO `stats` (`website_id`, `name`, `value`, `date`) VALUES {$values} ON DUPLICATE KEY UPDATE `count` = `count` + 1;");

        if (empty($request->input('event'))) {
            // Recent traffic
            DB::statement("INSERT INTO `recents` (`id`, `website_id`, `page`, `referrer`, `os`, `browser`, `device`, `country`, `city`, `language`, `created_at`) VALUES (NULL, :website_id, :page, :referrer, :os, :browser, :device, :country, :city, :language, :timestamp)", ['website_id' => $website->id, 'page' => $data['page'], 'referrer' => $referrer['host'] ?? null, 'os' => $os, 'browser' => $browser, 'device' => $device, 'country' => $country, 'city' => $city, 'language' => $language, 'timestamp' => $now]);
        }

        return 200;
    }

    private function parseUrl($url)
    {
        $url = parse_url($url);

        // If the URL has a host
        if (isset($url['host'])) {
            // If the URL starts with "www."
            if(substr($url['host'], 0, 4 ) == "www.") {
                $url['non_www_host'] = str_replace('www.', '', $url['host']);
            } else {
                $url['non_www_host'] = $url['host'];
            }
            return $url;
        } else {
            return null;
        }
    }

    public function session_player(Request $request)
    {
//        $sessionDetails = SessionRecord::where('ip_address','127.0.0.1')->first();
//        $infact = json_decode($sessionDetails->event);
        return view('frontend.user.test_heatmap.session_rec');
    }

    public function session_rec(Request $request)
    {

        if(count($request->events) == 0){
            return 'stack flow';
        }else{
            $steampanel = new SessionRecord;
            $steampanel->ip_address = $request->ip();
            $steampanel->event = json_encode($request->events);
            $steampanel->widget_id = 1;
            $steampanel->project_id = 1;
            $steampanel->save();
            return 'stack flow';

        }

    }

    public function index()
    {
        $posts = Post::where('status','Enabled')->take(2)->latest()->get();
        $featured_post = Post::where('status','Enabled')->where('featured','Enabled')->first();
        // dd($posts);

        return view('frontend.index',[
            'posts' => $posts,
            'featured_post' => $featured_post
        ]);
    }

    public function save_client(Request $request)
    {
      $phone_number =  self::getPhoneNumberByWidget($request->widget_id);


        $widget = Widgets::where('id',$request->widget_id)->first();
        $client =  new ImsClients;
        $client->project_id = $widget->project_id;
        $client->contact_via = 'Whatsapp';
        $client->client_name = $request->username;
        $client->client_email = $request->useremail;
        $client->phone_number = $request->phone_number;
        $client->message = $request->usermessage;
        $client->widget_id = $request->widget_id;
        $client->ip_address = $request->ip();
        $client->save();

        $project = Projects::where('id',$widget->project_id)->first();
        push_notification('New Message From Tallentor Whatsapp Widget', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'fab fa-whatsapp', url('user_widget/ims/individual_inbox',$client->id), $project->user_id);


        $incom =  urlencode($request->usermessage);


//        return redirect()->to('https://web.whatsapp.com/send?phone='.$phone_number.'&text='.$incom);
        return redirect()->to('https://api.whatsapp.com/send/?phone='.$phone_number.'/?text='.$incom);

    }

    public static function getPhoneNumberByWidget($id)
    {
        $widget = Widgets::where('id',$id)->first();

        $settings = json_decode($widget->settings);

        return $settings[0]->whatsapp_number;
    }

    public function heatmapdata(Request $request)
    {
        $widget = Widgets::where('id',$request->widget_id)->first();
        $heatmapDetails = new HeatMap;
        $heatmapDetails->position = json_encode([
            'x' => $request->position_x,
            'y' => $request->position_y,
        ]);
        $heatmapDetails->widget_id = $request->widget_id;
        $heatmapDetails->url = $request->url;
        $heatmapDetails->ip_address =$request->ip();
        $heatmapDetails->project_id =$widget->project_id;
        $heatmapDetails->save();
    }



    public function all_in_one_save_client(Request $request)
    {
        // dd($request);
      $phone_number =  self::all_in_one_getPhoneNumberByWidget($request->widget_id);

      $getSettings = self::get_widget_settings($request->widget_id);


        $widget = Widgets::where('id',$request->widget_id)->first();
        $client = new ImsClients;
        $client->project_id = $widget->project_id;
        $client->contact_via = $request->contact_via;
        $client->client_name = $request->username;
        $client->client_email = $request->useremail;
        $client->phone_number = $request->phone_number;
        $client->message = $request->usermessage;
        $client->widget_id = $request->widget_id;
        $client->ip_address = $request->ip();
        $client->save();


        $project = Projects::where('id',$widget->project_id)->first();
        push_notification('New Message From Tallentor All-In-One Widget', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'far fa-comment-dots', url('user_widget/ims/individual_inbox',$client->id), $project->user_id);


        $incom =  urlencode($request->usermessage);


//

        if($request->contact_via == 'Whatsapp'){
            if ($getSettings[0]->whatsapp_details[0] !=null) {
                if(is_mobile(request()->header('user-agent')) != true){
                    return redirect()->to('https://web.whatsapp.com/send?phone='.$phone_number.'&text='.$incom);
                }else{
                    return redirect()->to('https://api.whatsapp.com/send/?phone='.$phone_number.'/?text='.$incom);
                }

            }
        }else if ($request->contact_via == 'Messenger'){
            if ($getSettings[0]->fb_details[0] !=null) {
                $facebook_url = $getSettings[0]->fb_details;
                return redirect()->to('https://www.messenger.com/t/'.$facebook_url[1].'/?text='.$incom);
            }
        }else if ($request->contact_via == 'Telegram'){
            if ($getSettings[0]->telegram_details[0] !=null) {
                $telegram = $getSettings[0]->telegram_details;
                return redirect()->to('https://telegram.me/'.$telegram[1]);
            }
        }else if ($request->contact_via == 'Line'){
            if ($getSettings[0]->line_details[0] !=null) {
                $line_number = $getSettings[0]->line_details;
                return redirect()->to('https://line.me/R/ti/p/'.$line_number[1].'/?text='.$incom);
            }
        }else if ($request->contact_via == 'Viber'){
            if ($getSettings[0]->viber_details[0] !=null) {
                $viberchat = $getSettings[0]->viber_details;
                return redirect()->to('viber://chat?number='.$viberchat[1]);
            }

        }

    }

    public static function all_in_one_getPhoneNumberByWidget($id)
    {
        $widget = Widgets::where('id',$id)->first();

        $settings = json_decode($widget->settings);

        return $settings[0]->whatsapp_number;
    }

    public function log_checker(Request $request)
    {

       $visitorLogs = VisitorLogs::visitor_update($request->ip(),$request->widget_id,$request->current_url);
       VisitorCount::visitor_update($request->widget_id,$request->ip());
    }





    public function tawk_details_store(Request $request)
    {
        // dd($request);

        $phone_number =  self::tawk_details_number_ByWidget($request->widget_id);
        $widget = Widgets::where('id',$request->widget_id)->first();

        $widget = Widgets::where('id',$request->widget_id)->first();
        $client = new ImsClients;
        $client->project_id = $widget->project_id;
        $client->contact_via = 'Tawkto';
        $client->client_name = $request->username;
        $client->client_email = $request->useremail;
        $client->phone_number = $request->phone_number;
        $client->message = $request->usermessage;
        $client->widget_id = $request->widget_id;
        $client->ip_address = $request->ip();
        $client->save();

        $project = Projects::where('id',$widget->project_id)->first();
        push_notification('New Message From Tallentor All-In-One Widget', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'far fa-comment-dots', url('user_widget/ims/individual_inbox',$client->id), $project->user_id);

        $incom =  urlencode($request->usermessage);       
       

    }

    public static function tawk_details_number_ByWidget($id)
    {
        $widget = Widgets::where('id',$id)->first();

        $settings = json_decode($widget->settings);

        return $settings[0]->whatsapp_number;
    }






    public static function get_widget_settings($id)
    {
        $widget = Widgets::where('id',$id)->first();

        $settings = json_decode($widget->settings);

        return $settings;
    }

    // ******************************  api  *****************************************************

    public function theme_changers(Request $request)
    {
        $template_layout = $request->template_layout;
        $widget_id = $request->widget_id;
        $whatsapp_theme = WhatsappChatWidgetTemplate::where('id',$template_layout)->first();
        $themeArray = json_decode( $whatsapp_theme->source);
        $whatsappWidgetSettings = Widgets::where('id',$widget_id)->first()->settings;
        $widgetDtails = json_decode($whatsappWidgetSettings);

        $widgetDtails[0]->template_layout = $template_layout;
        $widgetDtails[0]->bubble_background_color = $themeArray->bubble_background_color;
        $widgetDtails[0]->bubble_icon_color = $themeArray->bubble_icon_color;
        $widgetDtails[0]->button_color = $themeArray->button_color;
        $widgetDtails[0]->header_background_color = $themeArray->header_background_color;
        $widgetDtails[0]->button_corner_radius = $themeArray->button_corner_radius;
        $widgetDtails[0]->custom_css = $themeArray->custom_css;        
        $netype = json_encode($widgetDtails);


        Widgets::where('id',$widget_id)->update([
            'settings' => $netype
        ]);

        return $netype;
    }

    public function api_chat(Request $request)
    {     
        // dd($request);   

        $template_layout_details = WhatsappChatWidgetTemplate::where('id',$request->template_layout)->first();
        // dd($template_layout_details);
      

        $device_array = [];

        if($request->desktop != null){            
            array_push($device_array,$request->desktop);
        }
        if($request->mobile_device != null){            
            array_push($device_array,$request->mobile_device);
        }

        $date_time_array = [];

        if($request->monday != null){            
            array_push($date_time_array,$request->monday);
        }
        if($request->tuesday != null){            
            array_push($date_time_array,$request->tuesday);
        }
        if($request->wednesday != null){            
            array_push($date_time_array,$request->wednesday);
        }
        if($request->thursday != null){            
            array_push($date_time_array,$request->thursday);
        }
        if($request->friday != null){            
            array_push($date_time_array,$request->friday);
        }
        if($request->saturday != null){            
            array_push($date_time_array,$request->saturday);
        }
        if($request->sunday != null){            
            array_push($date_time_array,$request->sunday);
        }

        $notify_array = [];

        if($request->bubble_notification_bage != null){            
            array_push($notify_array,$request->bubble_notification_bage);
        }
        if($request->show_notification_in_tab_tile != null){            
            array_push($notify_array,$request->show_notification_in_tab_tile);
        }
      
        
        $template_layout = $request->template_layout;
        $whatsapp_number = $request->whatsapp_number;
        $bubble_icon = $request->bubble_icon;
        $chat_header = $request->chat_header;
        $caption = $request->caption;
        $image = $request->image;
        $welcome_message = $request->welcome_message;
        $start_chat = $request->start_chat;
        $show_icon = $request->show_icon;
        $position = $request->position;
        $alignment = $request->alignment;
        $where_display_chat = $request->where_display_chat;
        $visitors = $request->visitors;
        $visitors = $request->visitors;
        $start_time = $request->start_time;
        $end_time = $request->end_time;
        $timezone = $request->timezone;
        $time_on_page = $request->time_on_page;
        $time_on_site = $request->time_on_site;
        $scroll_position = $request->scroll_position;
        $exit_internet = $request->exit_internet;
        $bubble_background_color = $request->bubble_background_color;
        $bubble_icon_color = $request->bubble_icon_color;
        $button_color = $request->button_color;
        $header_background_color = $request->header_background_color;
        $enabled_animation = $request->enabled_animation;
        $scroll_position_appearance = $request->scroll_position_appearance;
        $button_corner_radius = $request->button_corner_radius;
        $custom_css = $request->custom_css;

        $array = [
            'template_layout' => $template_layout,
            'whatsapp_number' => $whatsapp_number,
            'bubble_icon' => $bubble_icon,
            'chat_header' => $chat_header,
            'caption' => $caption,
            'image' => $image,
            'welcome_message' => $welcome_message,
            'start_chat' => $start_chat,
            'show_icon' => $show_icon,
            'position' => $position,
            'alignment' => $alignment,
            'where_display_chat' => $where_display_chat,
            'device' => $device_array,
            'visitors' => $visitors,
            'date_time' => $date_time_array,
            'start_time' => $start_time,
            'end_time' => $end_time,
            'timezone' => $timezone,
            'time_on_page' => $time_on_page,
            'time_on_site' => $time_on_site,
            'scroll_position' => $scroll_position,
            'exit_internet' => $exit_internet,
            'notification' => $notify_array,
            'bubble_background_color' => $bubble_background_color,
            'bubble_icon_color' => $bubble_icon_color,
            'button_color' => $button_color,
            'header_background_color' => $header_background_color,
            'enabled_animation' => $enabled_animation,
            'scroll_position_appearance' => $scroll_position_appearance,
            'button_corner_radius' => $button_corner_radius,
            'custom_css' => $custom_css,
        ];

        $final_array = [$array];         
     
        $update = new Widgets;

        $update->settings = json_encode($final_array);

        Widgets::whereId($request->hidden_id)->update($update->toArray());

        // return json_encode($output);                  

    }

    public function user_api_chat(Request $request)
    {     
        // dd($request);
        // dd($request->bubble_icon);

        $template_layout_details = WhatsappChatWidgetTemplate::where('id',$request->template_layout)->first();
        // dd($template_layout_details);
      

        $device_array = [];

        if($request->desktop != null){            
            array_push($device_array,$request->desktop);
        }
        if($request->mobile_device != null){            
            array_push($device_array,$request->mobile_device);
        }

        $date_time_array = [];

        if($request->monday != null){            
            array_push($date_time_array,$request->monday);
        }
        if($request->tuesday != null){            
            array_push($date_time_array,$request->tuesday);
        }
        if($request->wednesday != null){            
            array_push($date_time_array,$request->wednesday);
        }
        if($request->thursday != null){            
            array_push($date_time_array,$request->thursday);
        }
        if($request->friday != null){            
            array_push($date_time_array,$request->friday);
        }
        if($request->saturday != null){            
            array_push($date_time_array,$request->saturday);
        }
        if($request->sunday != null){            
            array_push($date_time_array,$request->sunday);
        }

        $notify_array = [];

        if($request->bubble_notification_bage != null){            
            array_push($notify_array,$request->bubble_notification_bage);
        }
        if($request->show_notification_in_tab_tile != null){            
            array_push($notify_array,$request->show_notification_in_tab_tile);
        }

        if($request->bubble_icon == null){            
            $pre_bubble_icon = json_decode(Widgets::where('id',$request->hidden_id)->first()->settings)[0]->bubble_icon;
        }else{
            $pre_bubble_icon = $request->bubble_icon;
        }

        // dd($pre_bubble_icon);
      
        
        $template_layout = $request->template_layout;
        $whatsapp_number = $request->whatsapp_number;
        $bubble_icon = $pre_bubble_icon;
        $chat_header = $request->chat_header;
        $caption = $request->caption;
        $image = $request->image;
        $agent_name = $request->agent_name;        
        $welcome_message = $request->welcome_message;
        $btn_text = $request->btn_text;        
        $start_chat = $request->start_chat;
        $show_icon = $request->show_icon;
        $position = $request->position;
        $alignment = $request->alignment;
        $where_display_chat = $request->where_display_chat;
        $specific_time_selector = $request->specific_time_selector;        
        $visitors = $request->visitors;
        $start_time = $request->start_time;
        $end_time = $request->end_time;
        $timezone = $request->timezone;
        $auto_trigger = $request->auto_trigger;
        $pop_up_opening_time = $request->pop_up_opening_time;
        $message_auto_reply_time = $request->message_auto_reply_time;
        $scroll_position = $request->scroll_position;
        $exit_internet = $request->exit_internet;
        $bubble_background_color = $request->bubble_background_color;
        $bubble_icon_color = $request->bubble_icon_color;
        $button_color = $request->button_color;
        $header_background_color = $request->header_background_color;
        $enabled_animation = $request->enabled_animation;
        $scroll_position_appearance = $request->scroll_position_appearance;
        $button_corner_radius = $request->button_corner_radius;
        $custom_css = $request->custom_css;

        $array = [
            'template_layout' => $template_layout,
            'whatsapp_number' => $whatsapp_number,
            'bubble_icon' => $bubble_icon,
            'chat_header' => $chat_header,
            'caption' => $caption,
            'image' => $image,
            'agent_name' => $agent_name,            
            'welcome_message' => $welcome_message,
            'btn_text' => $btn_text,            
            'start_chat' => $start_chat,
            'show_icon' => $show_icon,
            'position' => $position,
            'alignment' => $alignment,
            'where_display_chat' => $where_display_chat,
            'specific_time_selector' => $specific_time_selector,
            'device' => $device_array,
            'visitors' => $visitors,
            'date_time' => $date_time_array,
            'start_time' => $start_time,
            'end_time' => $end_time,
            'timezone' => $timezone,
            'auto_trigger' => $auto_trigger,
            'pop_up_opening_time' => $pop_up_opening_time,
            'message_auto_reply_time' => $message_auto_reply_time,
            'scroll_position' => $scroll_position,
            'exit_internet' => $exit_internet,
            'notification' => $notify_array,
            'bubble_background_color' => $bubble_background_color,
            'bubble_icon_color' => $bubble_icon_color,
            'button_color' => $button_color,
            'header_background_color' => $header_background_color,
            'enabled_animation' => $enabled_animation,
            'scroll_position_appearance' => $scroll_position_appearance,
            'button_corner_radius' => $button_corner_radius,
            'custom_css' => $custom_css,
        ];

        $final_array = [$array];         
     
        $update = new Widgets;

        $update->settings = json_encode($final_array);

        Widgets::whereId($request->hidden_id)->update($update->toArray());

        // return json_encode($output);                  

    }



    public function user_api_chat_all(Request $request)
    {     
        // dd($request);
        // dd($request->get_tawkto_array);

        $template_layout_details = WhatsappChatWidgetTemplate::where('id',$request->template_layout)->first();
        // dd($template_layout_details);
      

        $device_array = [];

        if($request->desktop != null){            
            array_push($device_array,$request->desktop);
        }
        if($request->mobile_device != null){            
            array_push($device_array,$request->mobile_device);
        }

        $date_time_array = [];

        if($request->monday != null){            
            array_push($date_time_array,$request->monday);
        }
        if($request->tuesday != null){            
            array_push($date_time_array,$request->tuesday);
        }
        if($request->wednesday != null){            
            array_push($date_time_array,$request->wednesday);
        }
        if($request->thursday != null){            
            array_push($date_time_array,$request->thursday);
        }
        if($request->friday != null){            
            array_push($date_time_array,$request->friday);
        }
        if($request->saturday != null){            
            array_push($date_time_array,$request->saturday);
        }
        if($request->sunday != null){            
            array_push($date_time_array,$request->sunday);
        }

        $notify_array = [];

        if($request->bubble_notification_bage != null){            
            array_push($notify_array,$request->bubble_notification_bage);
        }
        if($request->show_notification_in_tab_tile != null){            
            array_push($notify_array,$request->show_notification_in_tab_tile);
        }

        if($request->bubble_icon == null){            
            $pre_bubble_icon = json_decode(Widgets::where('id',$request->hidden_id)->first()->settings)[0]->bubble_icon;
        }else{
            $pre_bubble_icon = $request->bubble_icon;
        }

        // dd($pre_bubble_icon);

        if($request->get_whatsapp_array == null){            
            $db_whatsapp_array = json_decode(Widgets::where('id',$request->hidden_id)->first()->settings)[0]->whatsapp_details;
        }else{
            // $db_whatsapp_array = [];        
            // array_push($db_whatsapp_array,$request->get_whatsapp_array);   
            $db_whatsapp_array = $request->get_whatsapp_array;     
        }
        if($request->get_fb_array == null){            
            $db_fb_array = json_decode(Widgets::where('id',$request->hidden_id)->first()->settings)[0]->fb_details;
        }else{
            $db_fb_array = $request->get_fb_array; 
        }
        if($request->get_telegram_array == null){            
            $db_telegram_array = json_decode(Widgets::where('id',$request->hidden_id)->first()->settings)[0]->telegram_details;
        }else{ 
            $db_telegram_array = $request->get_telegram_array; 
        }
        if($request->get_line_array == null){            
            $db_line_array = json_decode(Widgets::where('id',$request->hidden_id)->first()->settings)[0]->line_details;
        }else{
            $db_line_array = $request->get_line_array; 
        }
        if($request->get_viber_array == null){            
            $db_viber_array = json_decode(Widgets::where('id',$request->hidden_id)->first()->settings)[0]->viber_details;
        }else{
            $db_viber_array = $request->get_viber_array; 
        }
        if($request->get_tawkto_array == null){            
            $db_tawkto_array = json_decode(Widgets::where('id',$request->hidden_id)->first()->settings)[0]->tawk_details;
        }else{
            $db_tawkto_array = $request->get_tawkto_array; 
        }

        // dd($db_viber_array);

        $whatsapp_details = $db_whatsapp_array;
        $fb_details = $db_fb_array;
        $telegram_details = $db_telegram_array;
        $line_details = $db_line_array;
        $viber_details = $db_viber_array;
        $tawk_details = $db_tawkto_array;




        if($request->delete_social_media == 'delete_whatsapp' && $request->get_whatsapp_array == null){
            if(json_decode(Widgets::where('id',$request->hidden_id)->first()->settings)[0]->whatsapp_details == [null]){
                $whatsapp_details = $db_whatsapp_array;
            }
            else{
                $whatsapp_details = [null];
            }
        }
        if($request->delete_social_media == 'delete_fb' && $request->get_fb_array == null){
            if(json_decode(Widgets::where('id',$request->hidden_id)->first()->settings)[0]->fb_details == [null]){
                $fb_details = $db_fb_array;
            }
            else{
                $fb_details = [null];
            }
        }
        if($request->delete_social_media == 'delete_telegram' && $request->get_telegram_array == null){
            if(json_decode(Widgets::where('id',$request->hidden_id)->first()->settings)[0]->telegram_details == [null]){
                $telegram_details = $db_telegram_array;
            }
            else{
                $telegram_details = [null];
            }
        }
        if($request->delete_social_media == 'delete_line' && $request->get_line_array == null){
            if(json_decode(Widgets::where('id',$request->hidden_id)->first()->settings)[0]->line_details == [null]){
                $line_details = $db_line_array;
            }
            else{
                $line_details = [null];
            }
        }
        if($request->delete_social_media == 'delete_viber' && $request->get_viber_array == null){
            if(json_decode(Widgets::where('id',$request->hidden_id)->first()->settings)[0]->viber_details == [null]){
                $viber_details = $db_viber_array;
            }
            else{
                $viber_details = [null];
            }
        }
        if($request->delete_social_media == 'delete_tawkto' && $request->get_tawkto_array == null){
            if(json_decode(Widgets::where('id',$request->hidden_id)->first()->settings)[0]->tawk_details == [null]){
                $tawk_details = $db_tawkto_array;
            }
            else{
                $tawk_details = [null];
            }
        }

        // dd($tawk_details);
        // dd($whatsapp_details);
      
        
        $template_layout = $request->template_layout;
        $whatsapp_number = $request->whatsapp_number;
        $bubble_icon = $pre_bubble_icon;
        $default_icon = $request->default_icon;        
        $chat_header = $request->chat_header;
        $caption = $request->caption;
        $image = $request->image;
        $agent_name = $request->agent_name;        
        $welcome_message = $request->welcome_message;
        $btn_text = $request->btn_text;        
        $start_chat = $request->start_chat;
        $show_icon = $request->show_icon;
        $position = $request->position;
        $alignment = $request->alignment;
        $where_display_chat = $request->where_display_chat;
        $specific_time_selector = $request->specific_time_selector;        
        $visitors = $request->visitors;
        $start_time = $request->start_time;
        $end_time = $request->end_time;
        $timezone = $request->timezone;        
        $auto_trigger = $request->auto_trigger;
        $pop_up_opening_time = $request->pop_up_opening_time;
        $message_auto_reply_time = $request->message_auto_reply_time;
        $scroll_position = $request->scroll_position;
        $exit_internet = $request->exit_internet;
        $bubble_background_color = $request->bubble_background_color;
        $bubble_icon_color = $request->bubble_icon_color;
        $header_background_color = $request->header_background_color;
        $enabled_animation = $request->enabled_animation;
        $scroll_position_appearance = $request->scroll_position_appearance;
        $custom_css = $request->custom_css;

        $array = [
            'whatsapp_details' => $whatsapp_details,
            'fb_details' => $fb_details,
            'telegram_details' => $telegram_details,
            'line_details' => $line_details,
            'viber_details' => $viber_details,
            'tawk_details' => $tawk_details,            
            'template_layout' => $template_layout,
            'whatsapp_number' => $whatsapp_number,
            'default_icon' => $default_icon,   
            'bubble_icon' => $bubble_icon,         
            'chat_header' => $chat_header,
            'caption' => $caption,
            'image' => $image,
            'agent_name' => $agent_name,            
            'welcome_message' => $welcome_message,
            'btn_text' => $btn_text,            
            'start_chat' => $start_chat,
            'show_icon' => $show_icon,
            'position' => $position,
            'alignment' => $alignment,
            'where_display_chat' => $where_display_chat,
            'specific_time_selector' => $specific_time_selector,
            'device' => $device_array,
            'visitors' => $visitors,
            'date_time' => $date_time_array,
            'start_time' => $start_time,
            'end_time' => $end_time,
            'timezone' => $timezone,            
            'auto_trigger' => $auto_trigger,
            'pop_up_opening_time' => $pop_up_opening_time,
            'message_auto_reply_time' => $message_auto_reply_time,
            'scroll_position' => $scroll_position,
            'exit_internet' => $exit_internet,
            'notification' => $notify_array,
            'bubble_background_color' => $bubble_background_color,
            'bubble_icon_color' => $bubble_icon_color,
            'header_background_color' => $header_background_color,
            'enabled_animation' => $enabled_animation,
            'scroll_position_appearance' => $scroll_position_appearance,
            'custom_css' => $custom_css,
        ];

        $final_array = [$array];         
     
        $update = new Widgets;

        $update->settings = json_encode($final_array);

        Widgets::whereId($request->hidden_id)->update($update->toArray());


    }

    

    public function ims_chat(Request $request)
    {     
        // dd($request); 
            
        $incoming_mobile_number = $request->incoming_mobile_number;
        $incoming_project_id = $request->incoming_project_id;
        $incoming_widget_id = $request->incoming_widget_id;
        $incoming_type = $request->incoming_type;
        // dd($incoming_mobile_number);

        $new_messages = ImsProClientMessages::where('phone_number',$incoming_mobile_number)
        ->where('project_id',$incoming_project_id)
        ->where('widget_id',$incoming_widget_id)
        ->where('type',$incoming_type)
        ->get();

        // dd($new_messages);
        
        $content = null;

        foreach($new_messages as $new_message){

         
            $content = $content.'<div class="message-block incoming">'.
                '<div class="image-block">'.
                    '<img src="{{url("images/test.png")}}" alt="">'.
                '</div>'.
                '<div class="message">'.
                    '<div class="text">'.$new_message->message.'</div>'.
                '</div>'.
                '<input type="hidden" name="incoming_mobile_number" id="incoming_mobile_number" value="'.$new_message->phone_number.'">'.
                '<input type="hidden" name="incoming_type" id="incoming_type" value="'.$new_message->type.'">'.
                '<input type="hidden" name="incoming_project_id" id="incoming_project_id" value="'.$new_message->project_id.'">'.
                '<input type="hidden" name="incoming_widget_id" id="incoming_widget_id" value="'.$new_message->widget_id.'">'.
                '<div class="label">'.
                    '<span class="text">Called from Suranga Dinesh to (+94) 77 755 4571</span>'.
                    '<span class="time">12 days</span>'.
                '</div>'.
            '</div>';

        }

        // dd($content);

        return json_encode($content); 

    }


    public function ims_chat_insert(Request $request)
    {     
        $phone_number = $request->phone_number;
        $name = $request->name;
        $type = $request->type;
        $email = $request->email;        
        $status = $request->status;
        $project_id = $request->project_id;
        $widget_id = $request->widget_id;
        $facebook_user_name = $request->facebook_user_name;
        $message = $request->message;
        $user_id = $request->user_id;        
        

        $add = new ImsProClientMessages;

        $add->phone_number = $phone_number;
        $add->name = $name;
        $add->type = $type;
        $add->email = $email;
        $add->status = $status;
        $add->project_id = $project_id;
        $add->wideget_id = $widget_id;
        $add->facebook_user_name = $facebook_user_name;
        $add->message = $message;
        $add->user_id = $user_id;

        $add->save();

    }

    

}
