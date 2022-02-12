<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Projects;
use App\Models\ProjectType;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('backend.projects.index');
    }

    public function create()
    {
        $project_type = ProjectType::where('status','Enabled')->get();

        return view('backend.projects.create',[
            'project_type' => $project_type
        ]);
    }

    public function show($id)
    {        
        $projects = Projects::where('id',$id)->first(); 

        return view('backend.projects.show',[
            'projects' => $projects
        ]);
    }

    public function getdetails(Request $request)
    {       
        $data = Projects::get();
        return DataTables::of($data)

            ->addColumn('project_type', function($data){
                $project_type = ProjectType::where('id',$data->project_type)->first();
                if($project_type == null){
                    $type_name = '<span class="badge badge-danger">Not Set</span>';
                    return $type_name;
                }
                elseif($project_type->status == 'Disabled'){
                    $type_name = '<span class="badge badge-warning">Project Type is Disabled</span>';
                    return $type_name;
                }
                else{
                    $type_name = $project_type->name;
                    return $type_name;
                }                    
            })
            ->addColumn('action', function($data){
                $button1 = '<a href="'.route('admin.projects.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                $button2 = '<a href="'.route('admin.projects.show',$data->id).'" name="show" id="'.$data->id.'" class="edit btn btn-info btn-sm" style="margin-right: 10px"><i class="fas fa-info-circle"></i> Show </a>';
                $button3 = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                return $button1.$button2.$button3;
                })
            ->rawColumns(['action','project_type'])
            ->make(true);
        
        return back();
    }

    public function store(Request $request)
    {        
        // dd($request);  
        
        $add = new Projects;

        $add->name = $request->name;        
        $add->project_type = $request->project_type;
        $add->url = $request->url;
        $add->seo_result = $request->seo_result;
        $add->user_id = auth()->user()->id;

        $add->save();

        return redirect()->route('admin.projects.index')->withFlashSuccess('Added Successfully');    
                    
    }

    public function edit($id)
    {
        $projects = Projects::where('id',$id)->first(); 
        $project_type = ProjectType::where('status','Enabled')->get();

        return view('backend.projects.edit',[
            'projects' => $projects,
            'project_type' => $project_type
        ]);
    }

    public function update(Request $request)
    {        
        // dd($request);                         
     
        $update = new Projects;

        $update->name = $request->name;        
        $update->project_type = $request->project_type;
        $update->url = $request->url;
        $update->seo_result = $request->seo_result;
        $update->user_id = auth()->user()->id;

        Projects::whereId($request->hidden_id)->update($update->toArray());

        return redirect()->route('admin.projects.index')->withFlashSuccess('Updated Successfully');            

    }

    public function destroy($id)
    {
        Projects::where('id', $id)->delete(); 
    }
}
