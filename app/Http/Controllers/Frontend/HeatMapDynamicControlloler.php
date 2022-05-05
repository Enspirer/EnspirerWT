<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HeatmapDynamic;

class HeatMapDynamicControlloler extends Controller
{
    public function store($id, Request $request)
    {        
        // dd($request);
   
        $add = new HeatmapDynamic;

        $add->project_id=$id;
        $add->x_position=$request->position_x;
        $add->y_position=$request->position_y;
        $add->url=$request->url;
        $add->ip_address=$request->ip();

        $add->save();

        return back();  

    }
}
