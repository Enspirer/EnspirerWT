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

        $default_settings = '[{"template_layout":"1","whatsapp_number":"0791111111","bubble_icon":"gem","chat_header":"Chat Header","caption":"Chat Caption","image":"1","welcome_message":"Welcome Message!","start_chat":"Enabled","show_icon":"Enabled","position":"Floating Bubble","alignment":"Right","where_display_chat":"All","device":["desktop"],"visitors":"all_visitors","date_time":["friday","saturday","sunday"],"start_time":"2022-02-01","end_time":"2022-05-31","timezone":"Asia\/Calcutta","time_on_page":"20s","time_on_site":"30s","scroll_position":"Center","exit_internet":"on","notification":["bubble_notification_bage"],"bubble_background_color":"#055147","bubble_icon_color":"#487662","button_color":"#79a37d","header_background_color":"#92967d","enabled_animation":"on","scroll_position_appearance":"Right","button_corner_radius":"53","custom_css":"No"}]';
        
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




}
