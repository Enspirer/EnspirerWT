<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\Widgets;
use App\Models\IMSProUsers;
use DataTables;
use Modules\WidgetManager\Entities\ImsClients;

class IMSProController extends Controller
{    
    public function ims_pro_media_scan($id)
    {     
        $project = Projects::where('id',$id)->first();  

        return view('frontend.user.projects.ims_pro.ims_pro_media_scan',[
            'project_id' => $project->id,
            'project' => $project          
        ]);
    }

    public function ims_pro_index($id)
    {     
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        return view('frontend.user.projects.ims_pro.user_widget_ims_index',[
            'project_id' => $project->id,
            'project' => $project,
            'ims_client' => $ims_client            
        ]);
    }

    

    public function ims_pro_chat_summary($id)
    {     
        $project = Projects::where('id',$id)->first();  

        return view('frontend.user.projects.ims_pro.ims_pro_chat_summary',[
            'project_id' => $project->id,
            'project' => $project          
        ]);
    }

    public function ims_pro_inquiry_summary($id)
    {     
        $project = Projects::where('id',$id)->first();  

        return view('frontend.user.projects.ims_pro.ims_pro_inquiry_summary',[
            'project_id' => $project->id,
            'project' => $project          
        ]);
    }

  




    // *************************************** Settings ***********************************************


    public function user_widget_ims_pro_role_management_store(Request $request)
    {        
        // dd($request); 

        $add = new IMSProUsers;

        $add->name=$request->name;
        $add->email=$request->email;
        $add->phone_number=$request->phone_number;
        $add->role=$request->role;
        $add->project_id=$request->project_id;
        $add->widget_id=$request->widget_id;
        $add->status='Enabled'; 

        $add->save();

        return back()->with([
            'success_stored' => 'Added Successfully'
        ]);  

    }

    public function user_widget_ims_pro_role_management_details(Request $request,$id)
    {
        if($request->ajax())
        {
            $data = IMSProUsers::where('widget_id',$id)->get();
            return DataTables::of($data)
                ->addColumn('action', function($data){
                    $button = '<button data-bs-toggle="modal" data-bs-target="#exampleModaledit'.$data->id.'" name="edit" id="'.$data->id.'" class="btn text-light table-btn me-4" style="background-color: #4195E1"><i class="fas fa-edit"></i> Edit</button>';
                    $button .= '<input type="hidden" name="hid_id" value="'.$data->id.'">';
                    $button .= '<a href="'.route('frontend.user.user_widget_ims_pro_role_management.destroy', $data->id).'" name="delete" id="'.$data->id.'" class="btn text-light table-btn disapprove ms-1" style="background-color: #FF2C4B;" data-bs-toggle="modal" data-bs-target="#exampleModaldelete"><i class="fas fa-trash"></i> Delete</a>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return back();
    }

    public function user_widget_ims_pro_role_management_update(Request $request)
    {    
        $update = new IMSProUsers;

        $update->name=$request->name;
        $update->email=$request->email;
        $update->phone_number=$request->phone_number;
        $update->role=$request->role;

        IMSProUsers::whereId($request->hidden_id)->update($update->toArray());

        return back()->with([
            'success_update' => 'Updated Successfully'
        ]);  
                

    }

    public function user_widget_ims_pro_role_management_edit($id)
    {
        if(request()->ajax())
        {
            $data = IMSProUsers::findOrFail($id);
            return response()->json(['result' => $data]);
        }
    }

    public function user_widget_ims_pro_role_management_destroy($id)
    {
        // dd($id);
        // IMSProUsers::where('id', $id)->delete(); 

    
        $data = IMSProUsers::findOrFail($id);
        $data->delete();   

        return back();
    }


    


}
