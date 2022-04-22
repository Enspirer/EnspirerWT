<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectType;
use App\Models\Projects;

class ReportsController extends Controller
{
    public function index(Request $request) {
        
        $sort_search =null;
        $reports = Projects::orderBy('id', 'desc')->where('user_id',auth()->user()->id);

        if ($request->has('search_project')){
            $sort_search = $request->search_project;
            $reports = $reports->where('name', 'like', '%'.$sort_search.'%');
        }
        
        $reports = $reports->get();
        
        $project_type = ProjectType::where('status','Enabled')->get(); 

        return view('frontend.user.reports.index',[
            'reports' => $reports,
            'project_type' => $project_type
        ]);
    }

    public function project_inside(Request $request, $id) {
             
        $project = Projects::where('id',$id)->first();

        return view('frontend.user.reports.project_inside',[
            'project' => $project,
            'project_id' => $project->id
        ]);
    }

    public function inquiry_report(Request $request, $id) {
             
        $project = Projects::where('id',$id)->first();

        return view('frontend.user.reports.inquiry_report',[
            'project' => $project,
            'project_id' => $project->id
        ]);
    }


    public function seo_optimize_report(Request $request, $id) {
             
        $project = Projects::where('id',$id)->first();

        return view('frontend.user.reports.seo_optimize_report',[
            'project' => $project,
            'project_id' => $project->id
        ]);
    }


    public function security_report(Request $request, $id) {
             
        $project = Projects::where('id',$id)->first();

        return view('frontend.user.reports.security_report',[
            'project' => $project,
            'project_id' => $project->id
        ]);
    }


    public function billing_report(Request $request, $id) {
             
        $project = Projects::where('id',$id)->first();

        return view('frontend.user.reports.billing_report',[
            'project' => $project,
            'project_id' => $project->id
        ]);
    }


}
