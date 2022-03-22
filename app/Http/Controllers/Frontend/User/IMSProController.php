<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\Widgets;
use Modules\WidgetManager\Entities\ImsClients;

class IMSProController extends Controller
{    
    public function ims_pro_index($id)
    {     
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        return view('frontend.user.projects.ims_pro.user_widget_ims_index',[
            'project_id' => $project->id,
            'project' => $project,
            'ims_client' => $ims_client            
        ]);
    }


}
