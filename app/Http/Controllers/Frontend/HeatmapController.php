<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HeatmapDynamic;
use App\Models\Projects;

class HeatmapController extends Controller
{
    public function heatmap($id) {

        $heatmap_dynamic = HeatmapDynamic::where('project_id',$id)->get()->unique('url');
        $project = Projects::where('id',$id)->first();
        // dd($heatmap_dynamic);

       
        return view('frontend.user.projects.heatmap', [
            'project_id' => $id,
            'project' => $project,
            'heatmap_dynamic' => $heatmap_dynamic
        ]);
    }
}