<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\TallentorDemo;
use App\Models\ContactUs;

class TallentorDemoController extends Controller
{
    public function index()
    {
        return view('backend.tallentor_demo.index');
    }

    public function getDetails(Request $request)
    {
       
        if($request->ajax())
        {
            $data = TallentorDemo::get();            
            return DataTables::of($data)
            
                ->addColumn('action', function($data){
                       
                    $button = '<a href="'.route('admin.tallentor_demo.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-info-circle"></i> View </a>';
                    $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                    return $button;
                })
                    
                ->editColumn('status', function($data){
                    if($data->status == 'Pending'){
                        $status = '<span class="badge badge-warning">Pending</span>';
                    }
                    else{
                        $status = '<span class="badge badge-success">Seen</span>';
                    }   
                    return $status;
                })
                    
                ->rawColumns(['action','status'])
                ->make(true);
        }
        return back();
    }

    public function edit($id)
    {
        $tallentor_demo = TallentorDemo::where('id',$id)->first();                 
        
        return view('backend.tallentor_demo.edit',[
            'tallentor_demo' => $tallentor_demo         
        ]);  
    }

    public function update(Request $request)
    {    
        // dd($request);     
   
        $update = new TallentorDemo;

        $update->status='Seen';        
        
        TallentorDemo::whereId($request->hidden_id)->update($update->toArray());

        return redirect()->route('admin.tallentor_demo.index')->withFlashSuccess('Updated Successfully');                             

    }

    public function destroy($id)
    {        
        $data = TallentorDemo::findOrFail($id);
        $data->delete();   
    }
}
