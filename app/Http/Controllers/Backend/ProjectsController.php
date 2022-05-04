<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Widgets;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Projects;
use App\Models\ProjectType;
use App\Models\SeoBot;
use App\Models\HeatmapDynamic;
use App\Models\Auth\User;
use phpDocumentor\Reflection\Project;
use App\Http\Requests\Backend\Auth\User\StoreReportRequest;
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

        $project = Projects::where('id',$id)->first();

        return view('backend.projects.show',[
            'project' => $project
        ]);
    }

    public function seo_report($id, Request $request)
    {

        $project = Projects::where('id',$id)->first();
        return view('backend.projects.sections.seo_report',[
            'project' => $project
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
                $button = '<a href="'.route('admin.projects.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                $button .= '<a href="'.route('admin.projects.show',$data->id).'" name="show" id="'.$data->id.'" class="edit btn btn-info btn-sm" style="margin-right: 10px"><i class="fas fa-info-circle"></i> Show </a>';
                $button .= '<a href="'.route('admin.auth.user.project_detail',User::where('id',$data->user_id)->first()).'" name="Details" id="'.$data->id.'" class="edit btn btn-primary btn-sm" style="margin-right: 10px"><i class="fas fa-list"></i> Details </a>';
                $button .= '<a href="'.route('admin.auth.user.project_bills',User::where('id',$data->user_id)->first()).'" name="details" id="'.$data->id.'" class="edit btn btn-success btn-sm" style="margin-right: 10px"><i class="fas fa-dollar-sign"></i> Bills </a>';
                $button .= '<a href="'.route('admin.projects.bots',$data->id).'" name="bots" id="'.$data->id.'" class="edit btn btn-warning btn-sm" style="margin-right: 10px"><i class="fas fa-robot"></i> Bots </a>';
                $button .= '<a href="'.route('admin.projects.security_backend',$data->id).'" name="security" id="'.$data->id.'" class="edit btn btn-dark btn-sm" style="margin-right: 10px"><i class="fas fa-lock"></i> Security </a>';
                $button .= '<a href="'.route('admin.projects.heatmap',$data->id).'" name="heatmap" id="'.$data->id.'" class="edit btn btn-light btn-sm" style="margin-right: 10px"><i class="fas fa-fire"></i> Heatmap </a>';
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                return $button;
                })
            ->rawColumns(['action','project_type'])
            ->make(true);
        
        return back();
    }

    public function store(StoreReportRequest $request)
    {        

        $project = new Projects();
        $iresult = $project->create_seo_report($request);

        // dd($iresult);

        return redirect()->route('admin.projects.show',$iresult)->withFlashSuccess('Added Successfully');    
                    
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

    public function whatsapp_chat_preview($widget_id)
    {
        $widgetDetaials = Widgets::where('id',$widget_id)->first();

        return view('backend.widget_display.whatsapp_chat.preview',[
            'widget_id' => $widget_id,
            'widget_details' => $widgetDetaials
        ]);
    }



    public function bots($id, Request $request)
    {
        $project = Projects::where('id',$id)->first();

        return view('backend.projects.bots',[
            'project' => $project
        ]);
    }


    public function bots_getdetails(Request $request, $id)
    {       
        $data = SeoBot::where('project_id',$id)->get();
        return DataTables::of($data)

            ->editColumn('status', function($data){
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
            ->addColumn('action', function($data){
                $button = '<a href="'.route('admin.projects.bots_edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                return $button;
                })
            ->rawColumns(['action','status'])
            ->make(true);
        
        return back();
    }

    public function bots_edit($id)
    {
        $bots = SeoBot::where('id',$id)->first(); 
        $project = Projects::where('id',$bots->project_id)->first();

        return view('backend.projects.bots_edit',[
            'bots' => $bots,
            'project' => $project
        ]);
    }

    public function bots_update(Request $request)
    {        
        // dd($request);                    
     
        $update = new SeoBot;

        $update->bot_type = $request->bot_type;        
        $update->activated_bot_count = $request->activated_bot_count;
        $update->total_score = $request->total_score;
        $update->starting_time = $request->starting_time;
        $update->ending_time = $request->ending_time;
        $update->status = $request->status;

        SeoBot::whereId($request->hidden_id)->update($update->toArray());

        return redirect()->route('admin.projects.bots',$request->hidden_project_id)->withFlashSuccess('Updated Successfully');            

    }

    public function bots_destroy($id)
    {
        SeoBot::where('id', $id)->delete(); 
    }


    public function security_backend($id)
    {
        $project = Projects::where('id',$id)->first();
        $project_type = ProjectType::where('id',$project->project_type)->first();

        return view('backend.projects.security',[
            'project' => $project,
            'project_type' => $project_type
        ]);
    }





























    public function heatmap($id)
    {
        $project = Projects::where('id',$id)->first();        

        return view('backend.projects.heatmap',[
            'project' => $project
        ]);
    }

    
    public function heatmap_getdetails(Request $request, $id)
    {       
        $data = HeatmapDynamic::where('project_id',$id)->get()->unique('url');
        return DataTables::of($data)

            ->addColumn('action', function($data){
                $button = '<a href="'.route('admin.projects.heatmap_edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Show </a>';
                return $button;
                })
            ->rawColumns(['action'])
            ->make(true);
        
        return back();
    }

    public function heatmap_edit($id)
    {
        // dd($id);

        $heat = HeatmapDynamic::where('id',$id)->first();
        $heatmap = HeatmapDynamic::where('url',$heat->url)->get();
        $project = Projects::where('id',$heat->project_id)->first();

        return view('backend.projects.heatmap_edit',[
            'heatmap' => $heatmap,
            'project' => $project,
            'heat' => $heat
        ]);
    }

}
