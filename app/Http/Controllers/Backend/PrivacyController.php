<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\SecurityContacts;

class PrivacyController extends Controller
{    
    public function index()
    {
        return view('backend.privacy.index');
    }

    public function getDetails(Request $request)
    {
        
        $data = SecurityContacts::get();
        return DataTables::of($data)
            
            ->addColumn('action', function($data){
                       
                $button = '<a href="'.route('admin.privacy.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-info-circle"></i> View </a>';
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
        
        return back();
    }

    public function edit($id)
    {
        $privacy = SecurityContacts::where('id',$id)->first();                 
        
        return view('backend.privacy.edit',[
            'privacy' => $privacy         
        ]);  
    }

    public function update(Request $request)
    {    
        // dd($request);     
   
        $update = new SecurityContacts;

        $update->status='Seen';        
        
        SecurityContacts::whereId($request->hidden_id)->update($update->toArray());

        return redirect()->route('admin.privacy.index')->withFlashSuccess('Updated Successfully');                             

    }

    public function destroy($id)
    {        
        $data = SecurityContacts::findOrFail($id);
        $data->delete();   
    }

}
