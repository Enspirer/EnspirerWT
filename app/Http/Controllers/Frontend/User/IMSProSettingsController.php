<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\Widgets;
use App\Models\IMSProUsers;
use DataTables;
use Modules\WidgetManager\Entities\ImsClients;
use Illuminate\Support\Facades\Hash;

class IMSProSettingsController extends Controller
{    
  
    public function user_widget_ims_pro_role_management_store(Request $request)
    {        
        // dd($request); 

        $password = $request->password;
        $confirm_password = $request->confirm_password;

        if($password != $confirm_password){
            return back()->with([
                'error_pw' => 'The password confirmation does not match.'
            ]); 
        }

        $password_count = strlen($password);

        if($password_count < 8){
            return back()->with([
                'error_pw' => 'The password must be at least 8 characters.'
            ]);             
        }

        $hashed_password = Hash::make($password);
       
        $add = new IMSProUsers;

        $add->name=$request->name;
        $add->email=$request->email;
        $add->phone_number=$request->phone_number;
        $add->role=$request->role;
        $add->project_id=$request->project_id;
        $add->widget_id=$request->widget_id;
        $add->password=$hashed_password;
        $add->status='Enabled'; 
        $add->user_id=auth()->user()->id; 

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
                    $button = '<button data-bs-toggle="modal" data-bs-target="#exampleModaledit'.$data->id.'" name="edit" id="'.$data->id.'" class="btn btn-secondary text-light table-btn "><i class="fas fa-edit"></i> Edit</button>';
                    $button .= '<input type="hidden" name="hid_id" value="'.$data->id.'">';
                    $button .= '<a href="'.route('frontend.user.user_widget_ims_pro_role_management.destroy', $data->id).'" name="delete" id="'.$data->id.'" class="btn btn-danger text-light table-btn disapprove ms-1" data-bs-toggle="modal" data-bs-target="#exampleModaldelete"><i class="fas fa-trash"></i> Delete</a>';
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
