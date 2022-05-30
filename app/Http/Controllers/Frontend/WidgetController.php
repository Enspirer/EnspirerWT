<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Widgets;
use App\Models\Projects;
use App\Models\ProjectType;
use App\Models\IMSProUsers;
use Modules\WidgetManager\Entities\WhatsappChatWidgetTemplate;
use DB;
use Carbon\Carbon;
use App\Models\VisitorCount;

class WidgetController extends Controller
{
    public function user_widget_store(Request $request)
    {

        $default_settings = '[{"template_layout":"1","whatsapp_number":"0797894561","bubble_icon":"whatsapp","chat_header":"Header Example!","caption":"Typically replies in minutes","image":"1","agent_name":"Sunimal","welcome_message":"Welcome Message!","btn_text":"Start Chat","start_chat":"on","show_icon":"on","position":"Embed Bubble","alignment":"right","where_display_chat":"Excluded Pages","specific_time_selector":"on","device":["desktop","mobile_device"],"visitors":"new_visitors","date_time":["monday","friday","saturday","sunday"],"start_time":"12:05PM","end_time":"01:10PM","timezone":"Asia\/Calcutta","auto_trigger":null,"pop_up_opening_time":"4000","message_auto_reply_time":"6000","scroll_position":"right","exit_internet":"on","notification":["bubble_notification_bage"],"bubble_background_color":"#055147","bubble_icon_color":"#487662","button_color":"#79a37d","header_background_color":"#92967d","enabled_animation":"on","scroll_position_appearance":"Right","button_corner_radius":"53","custom_css":"No"}]';
        $all_in_one = '[{"whatsapp_details":[null],"fb_details":[null],"telegram_details":[null],"line_details":[null],"viber_details":[null],"tawk_details":[null],"template_layout":"1","whatsapp_number":"079147258369","default_icon":"on","bubble_icon":"envelope-fill","chat_header":"Header All in One","caption":"Typically replies within an hour","image":"3","agent_name":"Yasiru","welcome_message":"Welcome Message! All In One","btn_text":"Start Chat With:","start_chat":"on","show_icon":"on","position":"Floating Bubble","alignment":"right","where_display_chat":"Specific Pages","specific_time_selector":"on","device":["desktop"],"visitors":"all_visitors","date_time":["thursday","friday"],"start_time":"05:20PM","end_time":"08:30PM","timezone":"Asia\/Calcutta","auto_trigger":"on","pop_up_opening_time":"4000","message_auto_reply_time":"6000","scroll_position":"right","exit_internet":"on","notification":["bubble_notification_bage","show_notification_in_tab_tile"],"bubble_background_color":"#055147","bubble_icon_color":"#bfc0bf","header_background_color":"#92967d","enabled_animation":"on","scroll_position_appearance":"Right","custom_css":"No"}]';
        $ims_pro = '[{"whatsapp_number":"0700000000","logo":null,"address":"main street","company_email":"company@company.com"}]';

        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $pin = mt_rand(1000000, 9999999)
            . mt_rand(1000000, 9999999)
            . $characters[rand(0, strlen($characters) - 1)];
        $widget_key = str_shuffle($pin);

        $widget_check = Widgets::where('project_id',$request->project_id)->where('widget_type',$request->widget_type)->first();
        // dd($widget_check);

        if($widget_check == null){

            $add = new Widgets;
            $add->status = 'Enabled';
            $add->widget_type = $request->widget_type;
            $add->widget_key = $widget_key;
            $add->load_count = $request->load_count;
            $add->project_id = $request->project_id;

            if($request->widget_type == 'Whatsapp Chat'){
                $add->settings = $default_settings;
            }elseif($request->widget_type == 'All-in-One Chat'){
                $add->settings = $all_in_one;
            }elseif($request->widget_type == 'Analytics'){
                $add->settings = null;
            }elseif($request->widget_type == 'IMS Pro'){
                $add->settings = $ims_pro;
            }


            if($request->widget_type == 'Whatsapp Chat'){
                $add->category = 'Widgets';
            }elseif($request->widget_type == 'All-in-One Chat'){
                $add->category = 'Widgets';
            }elseif($request->widget_type == 'Analytics'){
                $add->category = 'Analytics';
            }elseif($request->widget_type == 'IMS Pro'){
                $add->category = 'Widgets Plus';
            }

            $add->save();


            $project = Projects::where('id',$add->project_id)->first();

            $update = new Projects;

            $update->package_available_days = 30;
            if($request->widget_type == 'All-in-One Chat'){
                $update->selected_package = 'All In One Widget + IMS Lite';
            }
            elseif($request->widget_type == 'IMS Pro'){
                $update->selected_package = 'All In One Widget + IMS Pro';
            }
            $update->package_starting_date = $add->created_at;
            $update->package_type = 'Free';
            $update->expire_date = $add->created_at->addDays(30);
            $update->status = 'Enabled';

            Projects::whereId($project->id)->update($update->toArray());
        }

        // dd($widget_check);

        $characters_two = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $pin_two = mt_rand(1000000, 9999999)
            . mt_rand(1000000, 9999999)
            . $characters_two[rand(0, strlen($characters_two) - 1)];
        $widget_key_two = str_shuffle($pin_two);

        if($request->has('widget_type_another')){
            $widget_check_another = Widgets::where('project_id',$request->project_id)->where('widget_type',$request->widget_type_another)->first();
            // dd($widget_check_another );

            if($widget_check_another == null){

                $add_another = new Widgets;
                $add_another->status = 'Enabled';
                $add_another->widget_type = $request->widget_type_another;
                $add_another->widget_key = $widget_key_two;
                $add_another->load_count = $request->load_count;
                $add_another->project_id = $request->project_id;

                if($request->widget_type_another == 'Whatsapp Chat'){
                    $add_another->settings = $default_settings;
                }elseif($request->widget_type_another == 'All-in-One Chat'){
                    $add_another->settings = $all_in_one;
                }elseif($request->widget_type_another == 'Analytics'){
                    $add_another->settings = null;
                }elseif($request->widget_type_another == 'IMS Pro'){
                    $add_another->settings = $ims_pro;
                }


                if($request->widget_type_another == 'Whatsapp Chat'){
                    $add_another->category = 'Widgets Plus';
                }elseif($request->widget_type_another == 'All-in-One Chat'){
                    $add_another->category = 'Widgets Plus';
                }elseif($request->widget_type_another == 'Analytics'){
                    $add_another->category = 'Analytics';
                }elseif($request->widget_type_another == 'IMS Pro'){
                    $add_another->category = 'Widgets Plus';
                }

                $add_another->save();


                $update = new Projects;
                $update->package_available_days = 30;
                if($request->widget_type_another == 'Whatsapp Chat'){
                    $update->selected_package = 'Whatsapp Widget + IMS Pro';
                }
                elseif($request->widget_type_another == 'All-in-One Chat'){
                    $update->selected_package = 'All In One Widget + IMS Pro';
                }
                $update->package_starting_date = $add_another->created_at;
                $update->package_type = 'Free';
                $update->expire_date = $add_another->created_at->addDays(30);
                $update->status = 'Enabled';

                Projects::whereId($request->project_id)->update($update->toArray());

            }
            else{

                $update_another = new Widgets;

                if($request->widget_type_another == 'Whatsapp Chat'){
                    $update_another->category = 'Widgets Plus';
                }elseif($request->widget_type_another == 'All-in-One Chat'){
                    $update_another->category = 'Widgets Plus';
                }elseif($request->widget_type_another == 'Analytics'){
                    $update_another->category = 'Analytics';
                }elseif($request->widget_type_another == 'IMS Pro'){
                    $update_another->category = 'Widgets Plus';
                }

                Widgets::whereId($widget_check_another->id)->update($update_another->toArray());

                // dd($widget_check_another);

                $update = new Projects;
                $update->package_available_days = 30;
                if($request->widget_type_another == 'All-in-One Chat'){
                    $update->selected_package = 'All In One Widget + IMS Pro';
                }
                $update->package_starting_date = $widget_check_another->created_at;
                $update->package_type = 'Free';
                $update->expire_date = $widget_check_another->created_at->addDays(30);
                $update->status = 'Enabled';

                Projects::whereId($widget_check_another->project_id)->update($update->toArray());

            }

        }

        DB::table('notifications')->where('user_id',auth()->user()->id)->delete();


        // dd($widget_check);

        if($widget_check != null){
            // dd($widget_check);
            if($request->widget_type == 'Whatsapp Chat'){
                return redirect()->route('frontend.user.user_widget.settings', $widget_check->id);
            }
            elseif($request->widget_type == 'All-in-One Chat'){
                return redirect()->route('frontend.user.user_widget.settings', $widget_check->id);
            }
            elseif($request->widget_type == 'Analytics'){
                return redirect()->route('frontend.user.user_widget.settings', $widget_check->id);
            }
            elseif($request->widget_type == 'IMS Pro'){
                // dd($widget_check);
                return redirect()->route('frontend.user.user_widget.settings', $widget_check->id);
            }
        }
        else{
            if($request->widget_type == 'Whatsapp Chat'){
                return redirect()->route('frontend.user.user_widget.settings', $add->id);
            }
            elseif($request->widget_type == 'All-in-One Chat'){
                return redirect()->route('frontend.user.user_widget.settings', $add->id);
            }
            elseif($request->widget_type == 'Analytics'){
                return redirect()->route('frontend.user.user_widget.settings', $add->id);
            }
            elseif($request->widget_type == 'IMS Pro'){
                return redirect()->route('frontend.user.user_widget.settings', $add->id);
            }
        }

        // return back()->with([
        //     'success' => 'success'
        // ]);

    }

    public function user_widget_destroy($id)
    {
        $chech_whether_ims = Widgets::where('id',$id)->first();
        // dd($chech_whether_ims);

        $project = Projects::where('id',$chech_whether_ims->project_id)->first();

        $update = new Projects;
        $update->package_available_days = null;
        $update->selected_package = null;
        $update->package_starting_date = null;
        $update->package_type = null;
        $update->expire_date = null;
        $update->status = null;

        Projects::whereId($project->id)->update($update->toArray());


        DB::table('widgets')->where('project_id',$chech_whether_ims->project_id)->delete();

        return back();
    }


    // **************************************optimizer***********************************************

    public function user_optimizer_store(Request $request)
    {
        // dd($request);

        // get the current time
        $current = Carbon::now();
        // dd($current);

        $update = new Projects;
        $update->package_available_days = 30;
        $update->selected_package = 'Optimizer';
        $update->package_starting_date = $current;
        $update->package_type = 'Free';
        $update->expire_date = null;
        $update->status = 'Enabled';

        Projects::whereId($request->project_id)->update($update->toArray());

        $project = Projects::where('id',$request->project_id)->first();
        $update_expire = new Projects;
        $update_expire->expire_date = $project->updated_at->addDays(30);
        Projects::whereId($request->project_id)->update($update_expire->toArray());


        $optimizer_widget_ims_pro = Widgets::where('project_id',$request->project_id)->where('widget_type','IMS Pro')->first();
        $optimizer_widget_all_in_one = Widgets::where('project_id',$request->project_id)->where('widget_type','All-in-One Chat')->first();

        $all_in_one = '[{"whatsapp_details":[null],"fb_details":[null],"telegram_details":[null],"line_details":[null],"viber_details":[null],"tawk_details":[null],"template_layout":"1","whatsapp_number":"079147258369","default_icon":"on","bubble_icon":"envelope-fill","chat_header":"Header All in One","caption":"Typically replies within an hour","image":"3","agent_name":"Yasiru","welcome_message":"Welcome Message! All In One","btn_text":"Start Chat With:","start_chat":"on","show_icon":"on","position":"Floating Bubble","alignment":"right","where_display_chat":"Specific Pages","specific_time_selector":"on","device":["desktop"],"visitors":"all_visitors","date_time":["thursday","friday"],"start_time":"05:20PM","end_time":"08:30PM","timezone":"Asia\/Calcutta","auto_trigger":"on","pop_up_opening_time":"4000","message_auto_reply_time":"6000","scroll_position":"right","exit_internet":"on","notification":["bubble_notification_bage","show_notification_in_tab_tile"],"bubble_background_color":"#055147","bubble_icon_color":"#bfc0bf","header_background_color":"#92967d","enabled_animation":"on","scroll_position_appearance":"Right","custom_css":"No"}]';
        $ims_pro = '[{"whatsapp_number":"0700000000","logo":null,"address":"main street","company_email":"company@company.com"}]';


        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $pin = mt_rand(1000000, 9999999)
            . mt_rand(1000000, 9999999)
            . $characters[rand(0, strlen($characters) - 1)];
        $widget_key = str_shuffle($pin);

        if($optimizer_widget_ims_pro == null){

            $add = new Widgets;
            $add->status = 'Enabled';
            $add->widget_type = 'IMS Pro';
            $add->widget_key = $widget_key;
            $add->load_count = null;
            $add->project_id = $request->project_id;
            $add->settings = $ims_pro;
            $add->category = 'Widgets Plus';

            $add->save();

        }

        $characters_two = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $pin_two = mt_rand(1000000, 9999999)
            . mt_rand(1000000, 9999999)
            . $characters_two[rand(0, strlen($characters_two) - 1)];
        $widget_key_two = str_shuffle($pin_two);

        if($optimizer_widget_all_in_one == null){

            $add_another = new Widgets;
            $add_another->status = 'Enabled';
            $add_another->widget_type = 'All-in-One Chat';
            $add_another->widget_key = $widget_key_two;
            $add_another->load_count = null;
            $add_another->project_id = $request->project_id;
            $add_another->settings = $all_in_one;
            $add_another->category = 'Widgets Plus';

            $add_another->save();

        }
        else{

            $update_another = new Widgets;
            $update_another->category = 'Widgets Plus';

            Widgets::whereId($optimizer_widget_all_in_one->id)->update($update_another->toArray());

        }


        return back()->with([
            'success' => 'success'
        ]);

    }

    public function user_optimizer_destroy($id)
    {
        $update = new Projects;
        $update->package_available_days = null;
        $update->selected_package = null;
        $update->package_starting_date = null;
        $update->package_type = null;
        $update->expire_date = null;
        $update->status = null;

        Projects::whereId($id)->update($update->toArray());

        DB::table('widgets')->where('project_id',$id)->delete();

        return back();
    }


    public function optimizer_realtime_view(Request $request)
    {

        $visitor_project_id = $request->visitor_project_id;

        $visitors_count = VisitorCount::where('project_id',$visitor_project_id)->get();
        // dd($visitors_count);

        $content = null;

        foreach($visitors_count as $visitors){

            if($visitors->chat_invite == null){

                $content = $content.'<tr class="tbl-row">'.
                    '<td class="tb-col rt-flag">'.
                        '<img src="https://flagcdn.com/w40/'.strtolower($visitors->iso_code).'.png" alt="">'.
                    '</td>'.
                    '<td class="tb-col rt-country">'.
                        $visitors->ip_address.'
                    </td>'.
                    '<td class="tb-col rt-status">'.
                        '<div class="status-block">'.
                            '<i class="bi bi-circle-fill"></i>'.
                            '<div class="text">Online</div>'.
                        '</div>'.
                    '</td>'.
                    '<td class="tb-col rt-keyEvent">'.
                        '<span class="event yellow">Product Viewed</span>'.
                        '<span class="event blue">Cart Viewed</span>'.
                        '<span class="event purple">Top CTA</span>'.
                    '</td>'.
                    '<td class="tb-col rt-pages">'.
                        '<div class="pages-count">10</div>'.
                    '</td>'.
                    '<td class="tb-col rt-invite">'.
                        '<form action="'.url("api/user_optimizer/realtime_invite").'" method="post" enctype="multipart/form-data">'.
                        csrf_field().
                            '<input type="hidden" name="project_id" value="'.$visitors->project_id.'">'.
                            '<input type="hidden" name="visitors_id" value="'.$visitors->id.'">'.
                            '<button type="submit" style="border: none;" class="tbl-btn btn-invite">'.
                                '<img src="'.url("images/dashboard/optimizer/invite-icon.png").'" alt="">'.
                                '<div class="text">Invite</div>'.
                            '</button>'.
                        '</form>'.
                    '</td>'.
                    '<input type="hidden" name="visitor_project_id" id="visitor_project_id" value="'.$visitors->project_id.'">'.
                '</tr>';

            }
            else{
                $content = $content.'<tr class="tbl-row">'.
                    '<td class="tb-col rt-flag">'.
                        '<img src="https://flagcdn.com/w40/'.strtolower($visitors->iso_code).'.png" alt="">'.
                    '</td>'.
                    '<td class="tb-col rt-country">'.
                        $visitors->ip_address.'
                    </td>'.
                    '<td class="tb-col rt-status">'.
                        '<div class="status-block">'.
                            '<i class="bi bi-circle-fill"></i>'.
                            '<div class="text">Online</div>'.
                        '</div>'.
                    '</td>'.
                    '<td class="tb-col rt-keyEvent">'.
                        '<span class="event yellow">Product Viewed</span>'.
                        '<span class="event blue">Cart Viewed</span>'.
                        '<span class="event purple">Top CTA</span>'.
                    '</td>'.
                    '<td class="tb-col rt-pages">'.
                        '<div class="pages-count">10</div>'.
                    '</td>'.
                    '<td class="tb-col rt-invite">'.
                        '<button type="submit" style="border: none;" class="tbl-btn btn-invite" disabled>'.
                            '<img src="'.url("images/dashboard/optimizer/invite-icon.png").'" alt="">'.
                            '<div class="text">Invited</div>'.
                        '</button>'.
                    '</td>'.
                    '<input type="hidden" name="visitor_project_id" id="visitor_project_id" value="'.$visitors->project_id.'">'.
                '</tr>';

            }


        }


        return json_encode($content);

    }

    public function realtime_invite(Request $request)
    {
        // dd($request);

        $update = new VisitorCount;

        $update->chat_invite = 1;

        VisitorCount::whereId($request->visitors_id)->update($update->toArray());

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
                'project_id' => $project->id,
                'project' => $project,
                'widget' => $widget,
                'whatsapp_chat' => $whatsapp_chat
            ]);
        }
        elseif($widget->widget_type == 'All-in-One Chat'){
            return view('frontend.user.projects.user_widget_settings_all_in_one',[
                'project' => $project,
                'project_id' => $project->id,
                'widget' => $widget,
                'whatsapp_chat' => $whatsapp_chat
            ]);
        }
        elseif($widget->widget_type == 'Analytics'){
            return view('frontend.user.projects.user_widget_analytics',[
                'project' => $project,
                'project_id' => $project->id,
                'widget' => $widget,
                'whatsapp_chat' => $whatsapp_chat
            ]);
        }
        elseif($widget->widget_type == 'IMS Pro'){

            $ims_pro_users = IMSProUsers::where('project_id',$project->id)->where('widget_id',$widget->id)->get();

            return view('frontend.user.projects.user_widget_ims_pro_settings',[
                'project' => $project,
                'project_id' => $project->id,
                'widget' => $widget,
                'whatsapp_chat' => $whatsapp_chat,
                'ims_pro_users' => $ims_pro_users
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


    public function user_widget_ims_pro_settings_update(Request $request)
    {
        // dd($request);

        if($request->logo == null){
            return back()->with([
                'error' => 'Add a Logo'
            ]);
        }

        $whatsapp_number = $request->whatsapp_number;
        $logo = $request->logo;
        $address = $request->address;
        $company_email = $request->company_email;

        $array = [
            'whatsapp_number' => $whatsapp_number,
            'logo' => $logo,
            'address' => $address,
            'company_email' => $company_email
        ];

        $final_array = [$array];

        $update = new Widgets;

        $update->settings = json_encode($final_array);

        Widgets::whereId($request->hidden_id)->update($update->toArray());


        return back()->with([
            'success' => 'Updated Successfully'
        ]);

    }



}
