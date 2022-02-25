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

        $default_settings = '[{"template_layout":"1","whatsapp_number":"0797894561","bubble_icon":"chat-left-text-fill","chat_header":"Header Example!","caption":"Typically replies in minutes","image":"1","agent_name":"Sunimal","welcome_message":"Welcome Message!","btn_text":"Start Chat","start_chat":"on","show_icon":"on","position":"Embed Bubble","alignment":"right","where_display_chat":"Excluded Pages","specific_time_selector":"on","device":["desktop","mobile_device"],"visitors":"new_visitors","date_time":["monday","friday","saturday","sunday"],"start_time":"12:05PM","end_time":"01:10PM","timezone":"Asia\/Calcutta","time_on_page":"10s","time_on_site":"20s","scroll_position":"right","exit_internet":"on","notification":["bubble_notification_bage"],"bubble_background_color":"#055147","bubble_icon_color":"#487662","button_color":"#79a37d","header_background_color":"#92967d","enabled_animation":"on","scroll_position_appearance":"Right","button_corner_radius":"53","custom_css":"No"}]';
        
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
        }

        $add->save();

        return back()->with([
            'success' => 'success'
        ]);    
                    
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
    
        return view('frontend.user.projects.user_widget_settings',[
            'project' => $project,
            'widget' => $widget,
            'whatsapp_chat' => $whatsapp_chat
        ]);
        
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
