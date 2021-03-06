<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\Widgets;
use App\Models\IMSProUsers;
use App\Models\Inquiries_Status;
use App\Models\ImsProClientMessages;
use App\Models\ImsProContacts;
use DataTables;
use Modules\WidgetManager\Entities\ImsClients;
use Illuminate\Support\Facades\Hash;
use Cart;
use DB;
use PDF;

class IMSProController extends Controller
{    
    public function ims_pro_media_scan($id)
    {     
        $ims_pro_user = IMSProUsers::where('project_id',$id)->first();

        if(!empty( auth()->user()->id) === true ){
            if($ims_pro_user != null){
                if($ims_pro_user->user_id != auth()->user()->id){

                    $itemsCart = Cart::getContent();
        
                    if(count($itemsCart) == 0){
                        return redirect()->route('frontend.ims_login_page',$id);  
                    }
        
                } 
            }            
        }else{
            $itemsCart = Cart::getContent();
    
            if(count($itemsCart) == 0){
                return redirect()->route('frontend.ims_login_page',$id);  
            }
        }           

        $project = Projects::where('id',$id)->first();  
        // dd($project);

        return view('frontend.ims_pro.ims_pro_media_scan',[
            'project_id' => $project->id,
            'project' => $project          
        ]);
    }

    public function ims_pro_index($id,$phone_number,$type, Request $request)
    {     
        // dd($phone_number);
        $ims_pro_user = IMSProUsers::where('project_id',$id)->first();
        // dd($ims_pro_user);

        if(!empty( auth()->user()->id) === true ){
            if($ims_pro_user != null){
                if($ims_pro_user->user_id != auth()->user()->id){

                    $itemsCart = Cart::getContent();
        
                    if(count($itemsCart) == 0){
                        return redirect()->route('frontend.ims_login_page',$id);  
                    }
        
                } 
            }
        }else{
            $itemsCart = Cart::getContent();
    
            if(count($itemsCart) == 0){
                return redirect()->route('frontend.ims_login_page',$id);  
            }
        } 

        // $get_user = Cart::getContent();
        // // dd($get_user);

        $check_assigned_user = null;

        // if(!empty( auth()->user()->id) === true ){
        //     if($ims_pro_user->user_id == auth()->user()->id){
        //         $check_assigned_user = $ims_pro_user;
        //     }
        // }
        // else{
        //     if(count($get_user) != 0){

        //         if($phone_number != 'phone_number'){
    
        //             foreach($get_user as $get_use){
        //                 $check_assigned_user = ImsProClientMessages::where('project_id',$id)->where('phone_number',$phone_number)->where('core_type','assign')->where('type',$type)->where('user_id',$get_use->id)->first();
        //                 // dd( $check_assigned_user);                    
        //                 break;
        //             }
        //         }
                        
        //     }
        // }
        

        // dd($check_assigned_user);

        $project = Projects::where('id',$id)->first();           
        // dd($project->id);

        if($phone_number != 'phone_number'){
            $solo_ims_pro_client = ImsProClientMessages::where('project_id',$id)->where('phone_number',$phone_number)->where('type',$type)->first();
            // dd($solo_ims_pro_client);
        }
        else{
            $solo_ims_pro_client = null;
        }
        // dd($solo_ims_pro_client);

        if($phone_number != 'phone_number'){
            $solo_ims_pro_assigned = ImsProClientMessages::where('project_id',$id)->where('phone_number',$phone_number)->where('type',$type)->where('core_type','assign')->latest()->first();
            // dd($solo_ims_pro_assigned);
        }
        else{
            $solo_ims_pro_assigned = null;
        }
        // dd($solo_ims_pro_assigned);

        if($phone_number != 'phone_number'){
            $solo_ims_pro_client_messages = ImsProClientMessages::where('project_id',$id)->where('phone_number',$phone_number)->where('type',$type)->get();
            // dd($solo_ims_pro_client_messages);
        }
        else{
            $solo_ims_pro_client_messages = null;
        }
        // dd($solo_ims_pro_client_messages);

       
        $sort_search =null;
        $all_ims_pro_client_messages = ImsProClientMessages::where('project_id',$id)->orderBy('id','desc');       

        if(!empty( auth()->user()->id) === true ){
            if($ims_pro_user != null){
                if($ims_pro_user->user_id == auth()->user()->id){
                    if ($request->has('search_name')){
                        $sort_search = $request->search_name;
                        $all_ims_pro_client_messages = $all_ims_pro_client_messages->where('name', 'like', '%'.$sort_search.'%');
                    }
                    $all_ims_pro_client_messages = $all_ims_pro_client_messages->get()->unique('phone_number');
                }
                else{
                    $all_ims_pro_client_messages = null;
                }
            }
            
        }
        else{

            $get_user = Cart::getContent();
            // dd($get_user);

            if(count($get_user) != 0){    
                foreach($get_user as $get_use){

                    $ims_pro_user_checking = IMSProUsers::where('id',$get_use->id)->first();
                    // dd($ims_pro_user_checking);


                    if($ims_pro_user_checking->role == 'Admin'){
                    // dd($ims_pro_user_checking);

                        if ($request->has('search_name')){
                            $sort_search = $request->search_name;
                            $all_ims_pro_client_messages = $all_ims_pro_client_messages->where('name', 'like', '%'.$sort_search.'%');
                        }
                        $all_ims_pro_client_messages = $all_ims_pro_client_messages->get()->unique('phone_number');

                    }
                    else{
                        $check_assigned_user = ImsProClientMessages::where('project_id',$id)->where('core_type','assign')->where('user_id',$get_use->id)->first();
                        // dd($check_assigned_user);

                        if($check_assigned_user){
                            if ($request->has('search_name')){
                                $sort_search = $request->search_name;
                                $all_ims_pro_client_messages = $all_ims_pro_client_messages->where('name', 'like', '%'.$sort_search.'%');
                            }
                            $all_ims_pro_client_messages = $all_ims_pro_client_messages->where('user_id',$get_use->id)->get()->unique('phone_number');
                        }
                        else{
                            
                            $all_ims_pro_client_messages = null;
                        }
                    }
                    

                    // $check_assigned_user = ImsProClientMessages::where('project_id',$id)->where('phone_number',$phone_number)->where('core_type','assign')->where('type',$type)->where('user_id',$get_use->id)->first();
                    // dd( $check_assigned_user);     
                    
                    
                    
                    break;
                }       
            }
        }



        
        // dd($all_ims_pro_client_messages);

        // dd($phone_number);

        if($phone_number != 'phone_number'){
            $update = new ImsProClientMessages;
            $update->is_read = 'read';    
            ImsProClientMessages::where('phone_number',$phone_number)->where('project_id',$id)->where('type',$type)->update($update->toArray());
        }

        // dd($phone_number);


        // $widegt_for_ims = Widgets::where('project_id',$id)->where('widget_type','IMS Pro')->first();
        $ims_pro_users = IMSProUsers::where('project_id',$id)->get();


        return view('frontend.ims_pro.user_widget_ims_index',[
            'project_id' => $project->id,
            'project' => $project,
            'solo_ims_pro_client' => $solo_ims_pro_client,
            'all_ims_pro_client_messages' => $all_ims_pro_client_messages,
            'solo_ims_pro_client_messages' => $solo_ims_pro_client_messages,
            'ims_pro_users' => $ims_pro_users,
            'check_assigned_user' => $check_assigned_user,
            'solo_ims_pro_assigned' => $solo_ims_pro_assigned
        ]);
    }    

    

    public function ims_pro_chat_summary($id)
    {     
        $ims_pro_user = IMSProUsers::where('project_id',$id)->first();

        if(!empty( auth()->user()->id) === true ){
            if($ims_pro_user != null){
                if($ims_pro_user->user_id != auth()->user()->id){

                    $itemsCart = Cart::getContent();
        
                    if(count($itemsCart) == 0){
                        return redirect()->route('frontend.ims_login_page',$id);  
                    }
        
                } 
            }
        }else{
            $itemsCart = Cart::getContent();
    
            if(count($itemsCart) == 0){
                return redirect()->route('frontend.ims_login_page',$id);  
            }
        }  

        $project = Projects::where('id',$id)->first();  

        $all_ims_pro_client_messages = ImsProClientMessages::where('project_id',$id)->get()->unique('phone_number');
        // dd($all_ims_pro_client_messages);


        return view('frontend.ims_pro.ims_pro_chat_summary',[
            'project_id' => $project->id,
            'project' => $project,
            'all_ims_pro_client_messages' => $all_ims_pro_client_messages
        ]);
    }

    public function ims_pro_my_inquiry($id)
    {     
        $ims_pro_user = IMSProUsers::where('project_id',$id)->first();

        if(!empty( auth()->user()->id) === true ){
            if($ims_pro_user != null){
                if($ims_pro_user->user_id != auth()->user()->id){

                    $itemsCart = Cart::getContent();
        
                    if(count($itemsCart) == 0){
                        return redirect()->route('frontend.ims_login_page',$id);  
                    }
        
                } 
            }
        }else{
            $itemsCart = Cart::getContent();
    
            if(count($itemsCart) == 0){
                return redirect()->route('frontend.ims_login_page',$id);  
            }
        } 
        
        $project = Projects::where('id',$id)->first();  

        return view('frontend.ims_pro.ims_pro_my_inquiry',[
            'project_id' => $project->id,
            'project' => $project          
        ]);
    }

    

    public function ims_pro_contacts($id, Request $request)
    {     
        $ims_pro_user = IMSProUsers::where('project_id',$id)->first();

        if(!empty( auth()->user()->id) === true ){
            if($ims_pro_user != null){
                if($ims_pro_user->user_id != auth()->user()->id){

                    $itemsCart = Cart::getContent();
        
                    if(count($itemsCart) == 0){
                        return redirect()->route('frontend.ims_login_page',$id);  
                    }
        
                } 
            }
        }else{
            $itemsCart = Cart::getContent();
    
            if(count($itemsCart) == 0){
                return redirect()->route('frontend.ims_login_page',$id);  
            }
        } 
        
        $project = Projects::where('id',$id)->first();  


        $sort_search =null;
        $all_ims_pro_contacts = ImsProContacts::where('project_id',$id)->orderBy('id','desc');

        if ($request->has('search_name')){
            $sort_search = $request->search_name;
            $all_ims_pro_contacts = $all_ims_pro_contacts->where('name', 'like', '%'.$sort_search.'%');
        }
        
        $all_ims_pro_contacts = $all_ims_pro_contacts->get();
        

        return view('frontend.ims_pro.ims_pro_contacts',[
            'project_id' => $project->id,
            'project' => $project,            
            'all_ims_pro_contacts' => $all_ims_pro_contacts
        ]);
    }

    public function ims_pro_broadcast($id)
    {     
        $ims_pro_user = IMSProUsers::where('project_id',$id)->first();

        if(!empty( auth()->user()->id) === true ){
            if($ims_pro_user != null){
                if($ims_pro_user->user_id != auth()->user()->id){

                    $itemsCart = Cart::getContent();
        
                    if(count($itemsCart) == 0){
                        return redirect()->route('frontend.ims_login_page',$id);  
                    }
        
                } 
            }
        }else{
            $itemsCart = Cart::getContent();
    
            if(count($itemsCart) == 0){
                return redirect()->route('frontend.ims_login_page',$id);  
            }
        } 
        
        $project = Projects::where('id',$id)->first();  

        return view('frontend.ims_pro.ims_pro_broadcast',[
            'project_id' => $project->id,
            'project' => $project          
        ]);
    }

    public function ims_pro_broadcast_template($id) {
        $project = Projects::where('id',$id)->first();  
        
        return view('frontend.ims_pro.ims_pro_broadcast_template',[
            'project_id' => $project->id,
            'project' => $project          
        ]);
    }

    public function ims_pro_broadcast_schedule($id) {
        $project = Projects::where('id',$id)->first();  

        return view('frontend.ims_pro.ims_pro_broadcast_schedule',[
            'project_id' => $project->id,
            'project' => $project          
        ]);
    }

    public function ims_pro_contacts_store(Request $request)
    {        
        // dd($request);               

        $add = new ImsProContacts;

        $add->name = $request->name;
        $add->address = $request->address;                
        $add->phone_number = $request->phone_number;        
        $add->email = $request->email;
        $add->project_id = $request->hidden_project_id;
        $add->user_id = auth()->user()->id;

        $add->save();

        return back()->with([
            'success' => 'success'
        ]);
    }

    public function ims_pro_contacts_update(Request $request)
    {        
        // dd($request);               

        $update = new ImsProContacts;

        $update->name = $request->name;
        $update->address = $request->address;                
        $update->phone_number = $request->phone_number;        
        $update->email = $request->email;
        $update->project_id = $request->hidden_project_id;
        $update->user_id = auth()->user()->id;

        ImsProContacts::whereId($request->hidden_id)->update($update->toArray());

        return back();          
    }

    public function ims_pro_contacts_delete($id)
    {
        ImsProContacts::where('id', $id)->delete();
        return back();
    }
    

    

    public function send_message(Request $request){
        $phone_number = $request->phone_number;
        $message = $request->message;



    }

    public function submit_chat(Request $request){
        // dd($request);
        $phone_number = $request->phone_number;
        $name = $request->name;
        $type = 'WhatsApp';
        $email = $request->hidden_user_email;
        $status = 'Pending';
        $is_read = 'Pending';
        $project_id = $request->project_id;
        $widget_id = $request->widget_id;
        $message = $request->message;
        $user_id = $request->hidden_user_id;
        $core_type = $request->core_type;
        $hidden_user_type = $request->hidden_user_type;
        

        $add = new ImsProClientMessages;

        $add->phone_number = $phone_number;
        $add->name = $name;
        $add->type = $type;
        $add->email = $email;
        $add->status = $status;
        $add->is_read = $is_read;
        $add->project_id = $project_id;
        $add->wideget_id = $widget_id;
        $add->message = $message;
        $add->user_id = $user_id;
        $add->core_type = $core_type;
        $add->user_type = $hidden_user_type;
        

        $add->save();

        
        $client = new \GuzzleHttp\Client(['defaults' => [
            'verify' => false
        ]]);

        if(whatsapp_server_status($project_id)['server_type'] == 'default_server' ){
            $url = "https://".whatsapp_server_status($project_id)['server_endpoint']."/send-message";
        }
        else{
            $url = "https://".whatsapp_server_status($project_id)['server_endpoint']."/send-message";
        }

        // dd($url);


        // $url = "https://whatapi.tallentor.com/send-message";

        $myBody['number'] = $phone_number;
        $myBody['message'] = $message;
        $submit_data = $client->post($url,  [
            'form_params'=>$myBody
        ]);
        $response = $submit_data->getStatusCode();

        dd($response);

        return back();
    }

    public function responsible_ims_pro(Request $request){
        // dd($request);        

        $ims_pro_user = IMSProUsers::where('id',$request->ims_pro_user)->first();      

        $name = $ims_pro_user->name;
        $type = 'WhatsApp';
        $email = $ims_pro_user->email;
        $status = 'Pending';
        $is_read = 'Pending';
        $message = $ims_pro_user->name.' Assigned to the chat';
        $user_id = $ims_pro_user->id;
        $core_type = 'assign';       
        $ims_pro_phone_number = $request->ims_pro_phone_number;
        $ims_pro_project_id = $request->ims_pro_project_id;
        $ims_pro_widget_id = $request->ims_pro_widget_id; 

        $add = new ImsProClientMessages;

        $add->phone_number = $ims_pro_phone_number;
        $add->name = $name;
        $add->type = $type;
        $add->email = $email;
        $add->status = $status;
        $add->is_read = $is_read;
        $add->project_id = $ims_pro_project_id;
        $add->wideget_id = $ims_pro_widget_id;
        $add->message = $message;
        $add->user_id = $user_id;
        $add->core_type = $core_type;

        $add->save();


        $inquiries_status = Inquiries_Status::where('project_id',$ims_pro_project_id)->where('phone_number',$ims_pro_phone_number)->first();
        
        if($inquiries_status == null){

            $add = new Inquiries_Status;

            $add->phone_number = $ims_pro_phone_number;
            $add->email = $email;
            $add->assign_user = $name;
            $add->assign_user_type = $type;
            $add->bookmarked_messages = $message;
            $add->status = 'Pending';
            $add->role = $ims_pro_user->role;
            $add->project_id = $ims_pro_project_id;
            $add->widget_id = $ims_pro_widget_id;
    
            $add->save();
        }
        else{

            $update = new Inquiries_Status;

            $update->phone_number = $ims_pro_phone_number;
            $update->email = $email;
            $update->assign_user = $name;
            $update->assign_user_type = $type;
            $update->bookmarked_messages = $message;
            $update->status = 'Pending';
            $update->role = $ims_pro_user->role;
            $update->project_id = $ims_pro_project_id;
            $update->widget_id = $ims_pro_widget_id;

            Inquiries_Status::whereId($inquiries_status->id)->update($update->toArray());
        }

    }


    public function chat_user_details(Request $request){
        // dd($request);
           
        $company = $request->company;
        $tags = $request->tags; 

        $update = new Inquiries_Status;

        $update->company = $company;
        $update->tags = $tags;

        Inquiries_Status::where('phone_number',$request->phone_number)->where('project_id',$request->project_id)->where('widget_id',$request->widget_id)->update($update->toArray());

    }

    public function conversation_delete(Request $request)
    {
        ImsProClientMessages::where('phone_number', $request->hid_chat_phone_number)->where('project_id', $request->hid_chat_project_id)->delete(); 
        return back();
    }

    public function generate_report_file_pdf($phone_number, $project_id)
    {
        // dd($project_id);
        $solo_ims_pro_client = ImsProClientMessages::where('phone_number', $phone_number)->where('project_id', $project_id)->first(); 

        $solo_ims_pro_client_messages = ImsProClientMessages::where('project_id',$project_id)->where('phone_number',$phone_number)->get();

        // dd($solo_ims_pro_client);

        $pdf = PDF::loadView('solo_ims_pro_client', [
            'solo_ims_pro_client' => $solo_ims_pro_client,
            'solo_ims_pro_client_messages' => $solo_ims_pro_client_messages
        ]);
  
        return $pdf->download('solo_ims_pro_client.pdf');
    }

     public function generate_pdf_inquiry(Request $request)
    {
        // dd($request);

        // Inquiries_Status;
        
        $client_messages = ImsProClientMessages::orderBy('created_at','DESC')->whereBetween('created_at', [$request->start_date, $request->end_date])->get(); 
        // dd($client_messages);
       
        // $data = [
        //     'ims_client' => $ims_client
        // ];
        // dd($data);

        $pdf = PDF::loadView('generate_pdf_inquiry', [
            'client_messages' => $client_messages,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ]);
  
        return $pdf->download('generate_pdf_inquiry.pdf');
    }
    

    


}
