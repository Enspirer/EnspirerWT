<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Widgets;
use App\Models\Projects;
use App\Models\ProjectType;
use Modules\WidgetManager\Entities\WhatsappChatWidgetTemplate;

class WidgetController extends Controller
{
    public function user_widget_store(Request $request)
    {        
        // dd($request);  

        $default_settings = '[{"template_layout":"1","whatsapp_number":"0797894561","bubble_icon":"whatsapp","chat_header":"Header Example!","caption":"Typically replies in minutes","image":"1","agent_name":"Sunimal","welcome_message":"Welcome Message!","btn_text":"Start Chat","start_chat":"on","show_icon":"on","position":"Embed Bubble","alignment":"right","where_display_chat":"Excluded Pages","specific_time_selector":"on","device":["desktop","mobile_device"],"visitors":"new_visitors","date_time":["monday","friday","saturday","sunday"],"start_time":"12:05PM","end_time":"01:10PM","timezone":"Asia\/Calcutta","auto_trigger":null,"pop_up_opening_time":"4000","message_auto_reply_time":"6000","scroll_position":"right","exit_internet":"on","notification":["bubble_notification_bage"],"bubble_background_color":"#055147","bubble_icon_color":"#487662","button_color":"#79a37d","header_background_color":"#92967d","enabled_animation":"on","scroll_position_appearance":"Right","button_corner_radius":"53","custom_css":"No"}]';
        $all_in_one = '[{"whatsapp_details":[null],"fb_details":[null],"telegram_details":[null],"line_details":[null],"viber_details":[null],"tawk_details":[null],"template_layout":"1","whatsapp_number":"079147258369","default_icon":"on","bubble_icon":"envelope-fill","chat_header":"Header All in One","caption":"Typically replies within an hour","image":"3","agent_name":"Yasiru","welcome_message":"Welcome Message! All In One","btn_text":"Start Chat With:","start_chat":"on","show_icon":"on","position":"Floating Bubble","alignment":"right","where_display_chat":"Specific Pages","specific_time_selector":"on","device":["desktop"],"visitors":"all_visitors","date_time":["thursday","friday"],"start_time":"05:20PM","end_time":"08:30PM","timezone":"Asia\/Calcutta","auto_trigger":"on","pop_up_opening_time":"4000","message_auto_reply_time":"6000","scroll_position":"right","exit_internet":"on","notification":["bubble_notification_bage","show_notification_in_tab_tile"],"bubble_background_color":"#055147","bubble_icon_color":"#bfc0bf","header_background_color":"#92967d","enabled_animation":"on","scroll_position_appearance":"Right","custom_css":"No"}]';

        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $pin = mt_rand(1000000, 9999999)
            . mt_rand(1000000, 9999999)
            . $characters[rand(0, strlen($characters) - 1)];
        $widget_key = str_shuffle($pin);               

        $add = new Widgets;

        $add->status = 'Enabled';        
        $add->widget_type = $request->widget_type;
        // $add->settings = $request->settings;
        $add->widget_key = $widget_key;
        $add->load_count = $request->load_count;
        $add->project_id = $request->project_id;

        if($request->widget_type == 'Whatsapp Chat'){
            $add->settings = $default_settings;
        }elseif($request->widget_type == 'All-in-One Chat'){
            $add->settings = $all_in_one;
        }elseif($request->widget_type == 'Analytics'){
            $add->settings = $default_settings;
        }

        if($request->widget_type == 'Whatsapp Chat'){
            $add->category = 'Widgets';
        }elseif($request->widget_type == 'All-in-One Chat'){
            $add->category = 'Widgets';
        }elseif($request->widget_type == 'Analytics'){
            $add->category = 'Analytics';
        }

        $add->save();

        if($request->widget_type == 'Whatsapp Chat'){
            return redirect()->route('frontend.user.user_widget.settings', $add->id);
        }
        elseif($request->widget_type == 'All-in-One Chat'){
            return redirect()->route('frontend.user.user_widget.settings', $add->id);
        }
        elseif($request->widget_type == 'Analytics'){
            return redirect()->route('frontend.user.user_widget.settings', $add->id);
        }

        // return back()->with([
        //     'success' => 'success'
        // ]);    
                    
    }

    public function user_widget_destroy($id)
    {
        Widgets::where('id', $id)->delete(); 

        return back();
    }

    public function user_widget_settings($id)
    {
        $widget = Widgets::where('id',$id)->first();
        $project = Projects::where('id',$widget->project_id)->first();           
        $whatsapp_chat = WhatsappChatWidgetTemplate::where('status','Enabled')->get();

        if($widget->widget_type == 'Whatsapp Chat')
        {
            return view('frontend.user.projects.user_widget_settings',[
                'project' => $project,
                'widget' => $widget,
                'whatsapp_chat' => $whatsapp_chat
            ]);
        }
        elseif($widget->widget_type == 'All-in-One Chat'){
            return view('frontend.user.projects.user_widget_settings_all_in_one',[
                'project' => $project,
                'widget' => $widget,
                'whatsapp_chat' => $whatsapp_chat
            ]);
        }
        elseif($widget->widget_type == 'Analytics'){
            return view('frontend.user.projects.user_widget_analytics',[
                'project' => $project,
                'widget' => $widget,
                'whatsapp_chat' => $whatsapp_chat
            ]);
        }
    
        
        
    }

    public function user_whatsapp_chat_preview($widget_id)
    {
        $widgetDetaials = Widgets::where('id',$widget_id)->first();

        return view('backend.widget_display.whatsapp_chat.preview',[
            'widget_id' => $widget_id,
            'widget_details' => $widgetDetaials
        ]);
    }

    

}
