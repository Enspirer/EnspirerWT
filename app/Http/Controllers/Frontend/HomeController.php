<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Widgets;
use Illuminate\Http\Request;
use Modules\WidgetManager\Entities\ImsClients;
use Modules\WidgetManager\Entities\WhatsappChatWidgetTemplate;
use Modules\WidgetManager\Entities\WhatsAppModel;

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
        return view('frontend.index');
    }

    public function save_client(Request $request)
    {
      $phone_number =  self::getPhoneNumberByWidget($request->widget_id);


        $widget = Widgets::where('id',$request->widget_id)->first();
        $client =  new ImsClients;
        $client->project_id = $widget->project_id;
        $client->client_name = $request->username;
        $client->client_email = $request->useremail;
        $client->message = $request->usermessage;
        $client->widget_id = $request->widget_id;
        $client->ip_address = $request->ip();
        $client->save();

        $incom =  urlencode($request->usermessage);


        return redirect()->to('https://wa.me/'.$phone_number.'/?text='.$incom);

    }

    public static function getPhoneNumberByWidget($id)
    {
        $widget = Widgets::where('id',$id)->first();

        $settings = json_decode($widget->settings);

        return $settings[0]->whatsapp_number;
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

    

}
