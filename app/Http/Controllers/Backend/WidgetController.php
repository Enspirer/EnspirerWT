<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Projects;
use App\Models\ProjectType;
use App\Models\Widgets;

class WidgetController extends Controller
{
    public function index($id)
    {
        $project = Projects::where('id',$id)->first();

        return view('backend.projects.sections.widget_manager',[
            'project' => $project
        ]);
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
                $button1 = '<a href="'.route('admin.projects.widget_manager.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                $button2 = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                return $button1.$button2;
                })
            ->rawColumns(['action','status'])
            ->make(true);
        
        return back();
    }

    public function store(Request $request)
    {        
        // dd($request);  
        
        $add = new Widgets;

        $add->status = $request->status;        
        $add->widget_type = $request->widget_type;
        $add->settings = $request->settings;
        $add->load_count = $request->load_count;
        $add->project_id = $request->hidden_id;

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

}
