<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\IMSProUsers;
use App\Models\Projects;
use App\Models\Widgets;
use App\Models\Inquiries_Status;

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
                $button2 = '<a href="'.route('admin.ims_pro_widgets.endpoint_settings',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-warning btn-sm" style="margin-right: 10px"><i class="fas fa-cogs"></i> End Point Settings </a>';
                $button3 = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                return $button1.$button2.$button3;
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

    public function endpoint_settings($id)
    {
        $widget = Widgets::where('id',$id)->first(); 
        // dd($widget);
        $project = Projects::where('id',$widget->project_id)->first();
        // dd($project);

        return view('backend.ims_pro_widgets.endpoint_settings',[
            'widget' => $widget,
            'project' => $project
        ]);
    }

    public function endpoint_settings_update(Request $request)
    {        
        // dd($request);   
     
        $update = new Widgets;

        $update->end_point_settings = $request->url;
        $update->connection_status = $request->connection_status;        

        Widgets::whereId($request->hidden_id)->update($update->toArray());
   
        return redirect()->route('admin.ims_pro_widgets.index')->withFlashSuccess('Updated Successfully');            

    }

    public function endpoint_settings_update_null(Request $request, $id)
    {        
        // dd($request);   
     
        $update = new Widgets;

        $update->end_point_settings = null;
        $update->connection_status = null;

        Widgets::whereId($id)->update($update->toArray());
   
        return back()->withFlashSuccess('Disabled Successfully');            

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



    public function all_inquiries($id)
    {
        $widget = Widgets::where('id',$id)->first(); 
        // dd($widget);
        $project = Projects::where('id',$widget->project_id)->first();
        // dd($project);
        $all_inquiries = Inquiries_Status::where('widget_id',$id)->get();        

        return view('backend.ims_pro_widgets.all_inquiries',[
            'widget' => $widget,
            'project' => $project,
            'all_inquiries' => $all_inquiries
        ]);
    }

    public function all_inquiries_getdetails(Request $request, $id)
    {       
        $data = Inquiries_Status::where('widget_id',$id)->get();
        // dd($data);
        return DataTables::of($data)           
            
        ->make(true);
        
        return back();
    }


}
