<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HeatmapDynamic;
use Phpml\Clustering\KMeans;

class HeatMapDynamicControlloler extends Controller
{
    public function test_heatmap()
    {
//        $dataobject = HeatmapDynamic::where('url','https://tallentor.com/')
//            ->select('x_position', 'y_position')
//            ->get()->toArray();
        $dataobject = [[123,477],[3774,9933],[3322,6000],[884,332], [332,355]];
        $kmeans = new KMeans(2);

        dd($kmeans->cluster($dataobject));
    }

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

    public function get_heatmap_dynamic(Request $request)
    {        
        $filtered_url = str_replace("?heatmap=true", "",$request->url);        
        // dd($filtered_url);

        $heat_dynamic = HeatmapDynamic::where('project_id',$request->project_id)->where('url',$filtered_url)->get();
        // dd($heat_dynamic);
        
        if(count($heat_dynamic) != 0){
            return $heat_dynamic;
        }else{
            return null;
        }

    }

    
}
