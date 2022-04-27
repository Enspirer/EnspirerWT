<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;

class SEOController extends Controller
{
    public function seo($id)
    {
        $project = Projects::where('id',$id)->first();

        return view('frontend.user.projects.seo',[
            'project_id' => $id,
            'project' => $project
        ]);
    }
}
