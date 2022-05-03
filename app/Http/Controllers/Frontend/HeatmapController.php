<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeatmapController extends Controller
{
    public function heatmap($id) {
        return view('frontend.user.projects.heatmap', [
            'project_id' => $id,
        ]);
    }
}