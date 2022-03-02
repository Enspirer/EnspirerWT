<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectType;
use App\Models\Projects;

class ReportsController extends Controller
{
    public function index() {
        
        $reports = Projects::where('user_id',auth()->user()->id)->get();
        $project_type = ProjectType::where('status','Enabled')->get(); 

        return view('frontend.user.reports.index',[
            'reports' => $reports,
            'project_type' => $project_type
        ]);
    }
}
