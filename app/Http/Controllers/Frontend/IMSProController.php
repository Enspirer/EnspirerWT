<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\Widgets;
use App\Models\IMSProUsers;
use App\Models\ImsProClientMessages;
use App\Models\ImsProContacts;
use DataTables;
use Modules\WidgetManager\Entities\ImsClients;
use Illuminate\Support\Facades\Hash;
use Cart;

class IMSProController extends Controller
{    
    public function ims_pro_media_scan($id)
    {     
        $ims_pro_user = IMSProUsers::where('project_id',$id)->first();

        if(!empty( auth()->user()->id) === true ){
            if($ims_pro_user->user_id != auth()->user()->id){

                $itemsCart = Cart::getContent();
    
                if(count($itemsCart) == 0){
                    return redirect()->route('frontend.ims_login_page',$id);  
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

        if(!empty( auth()->user()->id) === true ){
            if($ims_pro_user->user_id != auth()->user()->id){

                $itemsCart = Cart::getContent();
    
                if(count($itemsCart) == 0){
                    return redirect()->route('frontend.ims_login_page',$id);  
                }
    
            } 
        }else{
            $itemsCart = Cart::getContent();
    
            if(count($itemsCart) == 0){
                return redirect()->route('frontend.ims_login_page',$id);  
            }
        } 

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

        if ($request->has('search_name')){
            $sort_search = $request->search_name;
            $all_ims_pro_client_messages = $all_ims_pro_client_messages->where('name', 'like', '%'.$sort_search.'%');
        }
        $all_ims_pro_client_messages = $all_ims_pro_client_messages->get()->unique('phone_number');
        // dd($all_ims_pro_client_messages);

        // dd($phone_number);

        if($phone_number != 'phone_number'){
            $update = new ImsProClientMessages;
            $update->is_read = 'read';    
            ImsProClientMessages::where('phone_number',$phone_number)->where('project_id',$id)->where('type',$type)->update($update->toArray());
        }

        // dd($phone_number);


        $widegt_for_ims = Widgets::where('project_id',$id)->where('widget_type','IMS Pro')->first();
        $ims_pro_users = IMSProUsers::where('project_id',$id)->where('widget_id',$widegt_for_ims->id)->get();


        return view('frontend.ims_pro.user_widget_ims_index',[
            'project_id' => $project->id,
            'project' => $project,
            'solo_ims_pro_client' => $solo_ims_pro_client,
            'all_ims_pro_client_messages' => $all_ims_pro_client_messages,
            'solo_ims_pro_client_messages' => $solo_ims_pro_client_messages,
            'ims_pro_users' => $ims_pro_users,
            'solo_ims_pro_assigned' => $solo_ims_pro_assigned
        ]);
    }    

    public function ims_pro_chat_summary($id)
    {     
        $ims_pro_user = IMSProUsers::where('project_id',$id)->first();

        if(!empty( auth()->user()->id) === true ){
            if($ims_pro_user->user_id != auth()->user()->id){

                $itemsCart = Cart::getContent();
    
                if(count($itemsCart) == 0){
                    return redirect()->route('frontend.ims_login_page',$id);  
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
            if($ims_pro_user->user_id != auth()->user()->id){

                $itemsCart = Cart::getContent();
    
                if(count($itemsCart) == 0){
                    return redirect()->route('frontend.ims_login_page',$id);  
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
            if($ims_pro_user->user_id != auth()->user()->id){

                $itemsCart = Cart::getContent();
    
                if(count($itemsCart) == 0){
                    return redirect()->route('frontend.ims_login_page',$id);  
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
            if($ims_pro_user->user_id != auth()->user()->id){

                $itemsCart = Cart::getContent();
    
                if(count($itemsCart) == 0){
                    return redirect()->route('frontend.ims_login_page',$id);  
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

        // $url = "https://whatapi.tallentor.com/send-message";

        $myBody['number'] = $phone_number;
        $myBody['message'] = $message;
        $submit_data = $client->post($url,  [
            'form_params'=>$myBody
        ]);
        $response = $submit_data->getStatusCode();
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

    }


    
  

    


}
