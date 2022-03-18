<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;
use DB;
use App\Models\Widgets;
use Modules\WidgetManager\Entities\ImsClients;

class AnalyticController extends Controller
{
    public function index(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        return view('frontend.user.projects.analytics.user_widget_analytics',[
            'project_id' => $project->id,
            'ims_client' => $ims_client
        ]);
    }




}
