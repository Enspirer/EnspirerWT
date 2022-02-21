<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Projects;
use App\Models\ProjectType;
use App\Models\Widgets;
use Modules\WidgetManager\Entities\WhatsappChatWidgetTemplate;

class WidgetController extends Controller
{
    public function index($id)
    {
        $project = Projects::where('id',$id)->first();

        return view('backend.projects.sections.widget_manager',[
            'project' => $project
        ]);
    }

    public function chat_preview($widget_id)
    {
        return view('backend.projects.includes.whatsapp_chat_preview.blade');
    }
    
    public function create($id)
    {
        $project = Projects::where('id',$id)->first();
        // dd($project);

        return view('backend.projects.sections.widget_manager_create',[
            'project' => $project
        ]);
    }
    

    public function getdetails(Request $request, $id)
    {       
        $data = Widgets::where('project_id',$id)->get();
        // dd($data);
        return DataTables::of($data)
            ->addColumn('status', function($data){
                if($data->status == 'Enabled'){
                    $status = '<span class="badge badge-success">Enabled</span>';
                }
                else{
                    $status = '<span class="badge badge-danger">Disabled</span>';
                }   
                return $status;
            })
            ->addColumn('action', function($data){
                $button = '<a href="'.route('admin.projects.widget_manager.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                
                if($data->widget_type == 'Whatsapp Chat'){
                    $button .= '<a href="'.route('admin.projects.widget_manager.settings',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-warning btn-sm" style="margin-right: 10px"><i class="fas fa-cog"></i> Settings </a>';
                    $button .= '<a href="'.route('admin.ims.index',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-info btn-sm" style="margin-right: 10px"><i class="fas fa-cog"></i> IMS </a>';
                }
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                return $button;
                })
            ->rawColumns(['action','status'])
            ->make(true);
        
        return back();
    }

    public function store(Request $request)
    {        
        // dd($request);  

        $default_settings = '[{"template_layout":"1","whatsapp_number":"0791111111","bubble_icon":"gem","chat_header":"mnkjhkhkjhk","caption":"chat","image":"1","welcome_message":"Welcome Message","start_chat":"Enabled","show_icon":"Enabled","position":"Floating Bubble","where_display_chat":"All","device":["desktop"],"visitors":"all_visitors","date_time":["friday","saturday","sunday"],"start_time":"2022-02-01","end_time":"2022-05-31","timezone":"Asia\/Calcutta","time_on_page":"20s","time_on_site":"30s","scroll_position":"Center","exit_internet":"on","notification":["bubble_notification_bage"],"bubble_background_color":"#055147","bubble_icon_color":"#487662","button_color":"#79a37d","header_background_color":"#92967d","enabled_animation":"on","scroll_position_appearance":"Right","button_corner_radius":"53","custom_css":"No"}]';
        
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $pin = mt_rand(1000000, 9999999)
            . mt_rand(1000000, 9999999)
            . $characters[rand(0, strlen($characters) - 1)];
        $widget_key = str_shuffle($pin);               

        $add = new Widgets;

        $add->status = $request->status;        
        $add->widget_type = $request->widget_type;
        $add->settings = $request->settings;
        $add->widget_key = $widget_key;
        $add->load_count = $request->load_count;
        $add->project_id = $request->hidden_id;
        if($request->widget_type == 'Whatsapp Chat'){
            $add->settings = $default_settings;
        }

        $add->save();

        return redirect()->route('admin.projects.widget_manager',$request->hidden_id)->withFlashSuccess('Added Successfully');    
                    
    }

    public function edit($id)
    {
        // dd($id);
        $widget = Widgets::where('id',$id)->first();
        $project = Projects::where('id',$widget->project_id)->first(); 
        // dd($project);        

        return view('backend.projects.sections.widget_manager_edit',[
            'project' => $project,
            'widget' => $widget
        ]);
    }
    

    public function update(Request $request)
    {        
        // dd($request);    
                    
        $update = new Widgets;

        $update->status = $request->status;        
        $update->widget_type = $request->widget_type;
        $update->settings = $request->settings;
        $update->load_count = $request->load_count;
        $update->project_id = $request->project_hidden_id;

        Widgets::whereId($request->hidden_id)->update($update->toArray());

        return redirect()->route('admin.projects.widget_manager',$request->project_hidden_id)->withFlashSuccess('Updated Successfully');            

    }

    public function destroy($id)
    {
        Widgets::where('id', $id)->delete(); 
    }


    public function settings($id)
    {
        $widget = Widgets::where('id',$id)->first();
        $project = Projects::where('id',$widget->project_id)->first();           
        $whatsapp_chat = WhatsappChatWidgetTemplate::where('status','Enabled')->get();

        return view('backend.projects.sections.widget_manager_settings',[
            'project' => $project,
            'widget' => $widget,
            'whatsapp_chat' => $whatsapp_chat
        ]);
    }

    public function settings_update(Request $request)
    {        
        // dd($request);

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
