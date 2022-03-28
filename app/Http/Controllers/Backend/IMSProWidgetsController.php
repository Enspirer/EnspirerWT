<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\IMSProUsers;
use App\Models\Projects;
use App\Models\Widgets;

class IMSProWidgetsController extends Controller
{
    public function index()
    {
        return view('backend.ims_pro_widgets.index');
    }

    public function getdetails(Request $request)
    {       
        $data = Widgets::where('widget_type','IMS Pro')->get();
        return DataTables::of($data)
                              
            ->addColumn('project', function($data){
                $project = Projects::where('id',$data->project_id)->first();
                if($project == null){
                    $project_name = '<span class="badge badge-danger">Not Found</span>';
                    return $project_name;
                }
                else{
                    $project_name = $project->name;
                    return $project_name;
                }                  
            })
            ->addColumn('action', function($data){
                $button1 = '<a href="'.route('admin.ims_pro_widgets.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                $button2 = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                return $button1.$button2;
            })
            ->rawColumns(['action','project'])
            ->make(true);
        
        return back();
    }

    public function edit($id)
    {
        $widget = Widgets::where('id',$id)->first(); 
        // dd($widget);

        return view('backend.ims_pro_widgets.edit',[
            'widget' => $widget
        ]);
    }

    public function update(Request $request)
    {        
        // dd($request);                         
     
        if($request->logo == null){
            return back()->withErrors('Add a Logo'); 
        }

        $whatsapp_number = $request->whatsapp_number;
        $logo = $request->logo;
        $address = $request->address;
        $company_email = $request->company_email;
       
        $array = [
            'whatsapp_number' => $whatsapp_number,
            'logo' => $logo,
            'address' => $address,
            'company_email' => $company_email            
        ];

        $final_array = [$array];         
     
        $update = new Widgets;

        $update->settings = json_encode($final_array);

        Widgets::whereId($request->hidden_id)->update($update->toArray());

   
        return redirect()->route('admin.ims_pro_widgets.index')->withFlashSuccess('Updated Successfully');            

    }

    public function destroy($id)
    {
        Widgets::where('id', $id)->delete(); 
    }


}
