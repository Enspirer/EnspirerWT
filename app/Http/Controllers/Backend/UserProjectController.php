<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Auth\User;
use App\Models\Projects;
use App\Models\Widgets;

class UserProjectController extends Controller
{
    public function project_detail(Request $request, User $user)
    {
        // dd($user);
        $projects = Projects::where('user_id',$user->id)->orderBy('id','desc')->get();

        return view('backend.user_projects.index',[
            'user' => $user,
            'projects' => $projects
        ]);

    }

    public function widget_detail(Request $request, $id)
    {
        
        $widget_detail = Widgets::where('project_id',$id)->orderBy('id','desc')->get();
        // dd($widget_detail);
        $project = Projects::where('id',$id)->first();


        return view('backend.user_projects.widgets',[
            'widget_detail' => $widget_detail,
            'project' => $project
        ]);

    }

    



}
