<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use App\Models\SeoBot;
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

    public function bot_store(Request $request)
    {        
        // dd($request);
   
        $add = new SeoBot;
        
        $add->project_id=$request->hidden_project_id;
        $add->bot_type=$request->bot_type;
        $add->activated_bot_count=$request->activated_bot_count;
        $add->starting_time= date('H:i');      
        $add->subtotal=$request->subtotal;
        $add->discount=$request->discount;
        $add->taxes_fees=$request->taxes_fees;
        $add->total=$request->total;
        $add->status='Activated'; 

        $add->save();

        // dd('done');

        return back()->with([
            'success' => 'success'
        ]);  

    }

    public function seo_bots($id)
    {
        $project = Projects::where('id',$id)->first();
        
        return view('frontend.user.projects.seo_bots',[
            'project_id' => $id,
            'project' => $project
        ]);
    }


}
