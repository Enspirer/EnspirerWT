<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Widgets;
use App\Models\Projects;
use Modules\WidgetManager\Entities\ImsClients;

class IMSController extends Controller
{
    public function index($id)
    {
        // dd($id);
        $widget = Widgets::where('id',$id)->first();
        $project = Projects::where('id',$widget->project_id)->first();           
        $ims_client = ImsClients::where('widget_id',$widget->id)->get();
        // dd($ims_client);
    
        return view('frontend.user.projects.user_widget_ims',[
            'project' => $project,
            'widget' => $widget,
            'ims_client' => $ims_client
        ]);
        
    }

}
