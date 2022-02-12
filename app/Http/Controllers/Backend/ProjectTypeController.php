<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\ProjectType;

class ProjectTypeController extends Controller
{
    public function index()
    {
        return view('backend.project_type.index');
    }

    public function create()
    {
        return view('backend.project_type.create');
    }

    public function getdetails(Request $request)
    {       
        $data = ProjectType::get();
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
                $button1 = '<a href="'.route('admin.project_type.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
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
        
        $add = new ProjectType;

        $add->name = $request->name;        
        $add->keyword = $request->keyword;
        $add->description = $request->description;
        $add->status = $request->status;

        $add->save();

        return redirect()->route('admin.project_type.index')->withFlashSuccess('Added Successfully');    
                    
    }

    public function edit($id)
    {
        $project_type = ProjectType::where('id',$id)->first(); 

        return view('backend.project_type.edit',[
            'project_type' => $project_type
        ]);
    }

    public function update(Request $request)
    {        
        // dd($request);                         
     
        $update = new ProjectType;

        $update->name = $request->name;        
        $update->keyword = $request->keyword;
        $update->description = $request->description;
        $update->status = $request->status;

        ProjectType::whereId($request->hidden_id)->update($update->toArray());

        return redirect()->route('admin.project_type.index')->withFlashSuccess('Updated Successfully');            

    }

    public function destroy($id)
    {
        ProjectType::where('id', $id)->delete(); 
    }
}
