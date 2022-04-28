<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use App\Models\SeoBot;
use App\Models\BillingInvoice;
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


        $add_bill = new BillingInvoice;
        
        $add_bill->project_id=$request->hidden_project_id;
        $add_bill->purchased_package='SEO Bot';
        $add_bill->is_purchased_seo_bots_id=$add->id;
        $add_bill->price=$add->total;      
        $add_bill->payment_plan=null;
        $add_bill->payment_method='Online';
        $add_bill->expire_date=null;
        $add_bill->user_id=auth()->user()->id;
        $add_bill->status='Paid'; 

        $add_bill->save();
       

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
