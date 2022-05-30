<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Widgets;
use App\Models\Projects;
use App\Models\VisitorCount;


class ChatController extends Controller
{
    public function widget($id)
    {
        $widgetlist = Widgets::where('project_id',$id)->where('widget_type','All-in-One Chat')->where('category','Widgets')->first();

        if(Projects::where('id',$id)->first()->selected_package == 'All In One Widget + IMS Lite'){
            return view('frontend.user.projects.widget',[
                'project_id' => $id,
                'widgetlist' => $widgetlist
            ]);
        }
        elseif(Projects::where('id',$id)->first()->selected_package == 'All In One Widget + IMS Pro'){
            return redirect()->route('frontend.user.project.widget_plus',$id);
        }
        elseif(Projects::where('id',$id)->first()->selected_package == 'Optimizer'){
            return redirect()->route('frontend.user.project.optimizer',$id);
        }
        else{
            return view('frontend.user.projects.widget',[
                'project_id' => $id,
                'widgetlist' => $widgetlist
            ]);
        }

    }

    public function widget_plus($id)
    {
        $widgetlist = Widgets::where('project_id',$id)->where('widget_type','IMS Pro')->first();
        $all_in_one = Widgets::where('project_id',$id)->where('widget_type','All-in-One Chat')->first();


        return view('frontend.user.projects.widget_plus',[
            'project_id' => $id,
            'widgetlist' => $widgetlist,
            'all_in_one' => $all_in_one
        ]);
    }

    public function optimizer($id)
    {
        $project_optimizer = Projects::where('id',$id)->where('selected_package','Optimizer')->first();
        // dd($project_optimizer);

        $all_in_one = Widgets::where('project_id',$id)->where('widget_type','All-in-One Chat')->first();
        $widgetlist = Widgets::where('project_id',$id)->where('widget_type','IMS Pro')->first();

        $visitors_count = VisitorCount::where('project_id',$id)->get();

        return view('frontend.user.projects.optimizer',[
            'project_id' => $id,
            'project_optimizer' => $project_optimizer,
            'visitors_count' => $visitors_count,
            'all_in_one' => $all_in_one,
            'widgetlist' => $widgetlist
        ]);
    }
}
