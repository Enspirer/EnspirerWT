<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Projects;
use App\Models\ProjectType;
use App\Models\SeoBot;
use App\Models\Auth\User;

class SeoManagementController extends Controller
{
    public function index()
    {
        return view('backend.seo_management.index');
    }

    public function getDetails(Request $request)
    {     
        $data = SeoBot::get();   
        return DataTables::of($data)

            ->addColumn('project_name', function($data){
                $project = Projects::where('id',$data->project_id)->first();
                if($project != null){
                    $status = $project->name;
                } 
                else{
                    $status = '<span class="badge badge-danger">Not Availabale</span>';
                }
                return $status;
            })
            ->addColumn('status', function($data){
                if($data->status == 'Activated'){
                    $status = '<span class="badge badge-success">Activated</span>';
                }
                elseif($data->status == 'Deactivated'){
                    $status = '<span class="badge badge-warning">Deactivated</span>';
                } 
                elseif($data->status == 'Pending'){
                    $status = '<span class="badge badge-primary">Pending</span>';
                } 
                else{
                    $status = '<span class="badge badge-danger">Failed</span>';
                }   
                return $status;
            })     
            ->addColumn('created_date', function($data){               
                $created_date = $data->created_at;           
                return $created_date;
            })       
            ->addColumn('action', function($data){                    
                $button = '<a href="'.route('admin.projects.bots_edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                return $button;
            })                                                              
            ->rawColumns(['action','project_name','status','created_date'])
            ->make(true);
        
        return back();
    }

}
