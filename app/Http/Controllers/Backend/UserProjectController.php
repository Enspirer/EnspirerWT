<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Auth\User;
use App\Models\Projects;
use App\Models\Widgets;
use App\Models\BillingInvoice;
use DataTables;

class UserProjectController extends Controller
{
    public function project_detail(Request $request, User $user)
    {
        // dd($user);
        $projects = Projects::where('user_id',$user->id)->orderBy('id','desc')->get();

        return view('backend.user_projects.index',[
            'user' => $user,
            'projects' => $projects
        ]);

    }

    public function widget_detail(Request $request, $id)
    {
        
        $widget_detail = Widgets::where('project_id',$id)->orderBy('id','desc')->get();
        // dd($widget_detail);
        $project = Projects::where('id',$id)->first();


        return view('backend.user_projects.widgets',[
            'widget_detail' => $widget_detail,
            'project' => $project
        ]);

    }

    public function project_bills(Request $request, User $user)
    {
        // dd($user);
        $projects = Projects::where('user_id',$user->id)->orderBy('id','desc')->get();

        return view('backend.user_projects.project_bills',[
            'user' => $user,
            'projects' => $projects
        ]);

    }

    public function project_bills_getdetails(Request $request, $id)
    {       
        // dd($id);
        $data = Projects::where('user_id',$id)->orderBy('id','desc')->get();
        // dd($data);
        return DataTables::of($data)      
        ->addColumn('action', function($data){
            $button = '<a href="'.route('admin.project_bills_backend',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
            return $button;
        })     
        ->editColumn('remaining_days', function($data){
            $remaining_days = get_expire_date($data->id)['remaining_days'];             
            return $remaining_days;
        })
        ->editColumn('selected_package', function($data){
           
            $selected_package = '<span class="badge badge-danger">'.$data->selected_package.'</span>';          
            return $selected_package;
        })
        ->addColumn('action', function($data){
            $button = '<a href="'.route('admin.project_bills_backend',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-success btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-dollar-sign"></i> Bill </a>';
            return $button;
        })
        ->rawColumns(['action','remaining_days','selected_package'])
        ->make(true);
        
        return back();
    }
       

    public function project_bills_backend(Request $request, $id)
    {
        // dd($id);
        $project = Projects::where('id',$id)->first();
        $paid_invoices = BillingInvoice::where('project_id',$id)->where('status','Paid')->orderBy('id','desc')->get();

        return view('backend.user_projects.project_bills_backend',[
            'paid_invoices' => $paid_invoices,
            'project' => $project
        ]);

    }


}
