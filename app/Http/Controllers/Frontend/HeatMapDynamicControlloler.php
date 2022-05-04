<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HeatmapDynamic;

class HeatMapDynamicControlloler extends Controller
{
    public function store(Request $request)
    {        
        // dd($request); 
   
        $add = new HeatmapDynamic;

        $add->project_id=$request->project_id;
        $add->x_position=$request->x_position;
        $add->y_position=$request->y_position;

        $add->save();

        return back();  

    }
}
