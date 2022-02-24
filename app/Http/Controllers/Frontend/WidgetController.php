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

        $default_settings = '[{"template_layout":"1","whatsapp_number":"079555","bubble_icon":null,"chat_header":null,"caption":"Typically replies in minutes","image":"1","agent_name":"30s","welcome_message":"Welcome Message!","btn_text":"30s","start_chat":null,"show_icon":null,"position":"Floating Bubble","alignment":"left","where_display_chat":"Specific Pages","device":["desktop"],"visitors":"all_visitors","date_time":["friday","saturday","sunday"],"start_time":"01:05PM","end_time":"02:20PM","timezone":"Asia\/Calcutta","time_on_page":"20s","time_on_site":"30s","scroll_position":"Center","exit_internet":"on","notification":["bubble_notification_bage"],"bubble_background_color":"#b31e14","bubble_icon_color":"#ffffff","button_color":"#0224bd","header_background_color":"#92967d","enabled_animation":"on","scroll_position_appearance":"Right","button_corner_radius":"53","custom_css":"No"}]';
        
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

    public function user_widget_update(Request $request)
    {        
        dd($request);

        $request->validate(
            [
                'welcome_message' => 'required',
                'device' => 'required',
                'date_time' => 'required',
                'notification' => 'required',
                'image' => 'required'
            ],
            [
                'welcome_message.required' => 'Fill Welcome Message Section',
                'device.required' => 'Fill Device Section',
                'date_time.required' => 'Fill Date and Time Section',
                'notification.required' => 'Fill Notification Section',
                'image.required' => 'Select an Image'
            ]
        );

        $device = $request->device;
        $device_array = [];
                    
        foreach($device as $key => $dev){

            array_push($device_array,$dev);
        } 
        
        $date_time = $request->date_time;
        $date_time_array = [];
                    
        foreach($date_time as $key => $date){

            array_push($date_time_array,$date);
        }  

        $notification = $request->notification;
        $notify_array = [];
                    
        foreach($notification as $key => $notify){

            // $item_group = [                            
            //     $notify
            // ];

            array_push($notify_array,$notify);
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

        return back()->withFlashSuccess('Updated Successfully');      

    }




}
