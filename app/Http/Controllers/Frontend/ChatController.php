<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Widgets;

class ChatController extends Controller
{
    public function widget($id)
    {
        $widgetlist = Widgets::where('project_id',$id)->where('widget_type','All-in-One Chat')->where('category','Widgets')->first();

        return view('frontend.user.projects.widget',[
            'project_id' => $id,
            'widgetlist' => $widgetlist
        ]);
    }

    public function widget_plus($id)
    {
        $widgetlist = Widgets::where('project_id',$id)->where('widget_type','IMS Pro')->first();

        return view('frontend.user.projects.widget_plus',[
            'project_id' => $id,
            'widgetlist' => $widgetlist
        ]);
    }

    public function optimizer($id)
    {
        return view('frontend.user.projects.optimizer',[
            'project_id' => $id
        ]);
    }
}
