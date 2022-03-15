<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Widgets;
use App\Models\Projects;
use Modules\WidgetManager\Entities\ImsClients;
use DB;

class VisitorStatisticsController extends Controller
{
    
    public function index($id)
    {
        // dd($id);
        $project = Projects::where('id',$id)->first();           


        // $widget = Widgets::where('id',$project)->first();

        // $ims_client = ImsClients::where('project_id',$project->id)->orderBy('id','desc')->get();
        // dd($ims_client);
    
        return view('frontend.user.projects.ims.user_widget_visitor_statistics',[
            'project' => $project,
            // 'widget' => $widget,
            // 'ims_client' => $ims_client
        ]);
        
    }

}
