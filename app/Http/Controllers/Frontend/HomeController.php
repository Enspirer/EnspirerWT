<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\HeatMap;
use App\Models\VisitorCount;
use App\Models\VisitorLogs;
use App\Models\Widgets;
use Illuminate\Http\Request;
use Modules\WidgetManager\Entities\ImsClients;
use Modules\WidgetManager\Entities\WhatsappChatWidgetTemplate;
use Modules\WidgetManager\Entities\WhatsAppModel;
use Modules\Blog\Entities\Category;
use Modules\Blog\Entities\Post;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
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
        $heatmapDetails->postition = json_encode([
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



    public function user_api_chat_all(Request $request)
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
        

        $whatsapp_details = $db_whatsapp_array;
        $fb_details = $db_fb_array;
        $telegram_details = $db_telegram_array;
        $line_details = $db_line_array;
        $viber_details = $db_viber_array;
        $tawk_details = $db_tawkto_array;


        if($request->delete_social_media == 'delete_whatsapp'){
            if(json_decode(Widgets::where('id',$request->hidden_id)->first()->settings)[0]->whatsapp_details == [null]){
                $whatsapp_details = $db_whatsapp_array;
            }
            else{
                $whatsapp_details = [null];
            }
        }
        if($request->delete_social_media == 'delete_fb'){
            if(json_decode(Widgets::where('id',$request->hidden_id)->first()->settings)[0]->fb_details == [null]){
                $fb_details = $db_whatsapp_array;
            }
            else{
                $fb_details = [null];
            }
        }
        if($request->delete_social_media == 'delete_telegram'){
            if(json_decode(Widgets::where('id',$request->hidden_id)->first()->settings)[0]->telegram_details == [null]){
                $telegram_details = $db_whatsapp_array;
            }
            else{
                $telegram_details = [null];
            }
        }
        if($request->delete_social_media == 'delete_line'){
            if(json_decode(Widgets::where('id',$request->hidden_id)->first()->settings)[0]->line_details == [null]){
                $line_details = $db_whatsapp_array;
            }
            else{
                $line_details = [null];
            }
        }
        if($request->delete_social_media == 'delete_viber'){
            if(json_decode(Widgets::where('id',$request->hidden_id)->first()->settings)[0]->viber_details == [null]){
                $viber_details = $db_whatsapp_array;
            }
            else{
                $viber_details = [null];
            }
        }
        if($request->delete_social_media == 'delete_tawkto'){
            if(json_decode(Widgets::where('id',$request->hidden_id)->first()->settings)[0]->tawk_details == [null]){
                $tawk_details = $db_whatsapp_array;
            }
            else{
                $tawk_details = [null];
            }
        }

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
        $time_on_page = $request->time_on_page;
        $time_on_site = $request->time_on_site;
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
            'time_on_page' => $time_on_page,
            'time_on_site' => $time_on_site,
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

    

    

    

}
