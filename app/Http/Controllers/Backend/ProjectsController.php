<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Projects;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('backend.projects.index');
    }

    public function create()
    {
        return view('backend.projects.create');
    }

    public function getdetails(Request $request)
    {       
        $data = Projects::get();
        return DataTables::of($data)
            
            ->addColumn('action', function($data){
                $button1 = '<a href="'.route('admin.projects.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                $button2 = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                return $button1.$button2;
                })
            ->rawColumns(['action'])
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

        return view('backend.projects.edit',[
            'projects' => $projects
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
