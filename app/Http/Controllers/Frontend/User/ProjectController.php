<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;

class ProjectController extends Controller
{

    public function index()
    {
        $reports = Projects::where('user_id',auth()->user()->id)->get();

        return view('frontend.user.projects.index',[
            'reports' => $reports
        ]);
    }

    public function show($id)
    {
        return view('frontend.user.projects.seo');
    }
}
