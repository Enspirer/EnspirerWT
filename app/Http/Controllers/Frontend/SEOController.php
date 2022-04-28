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

        $issues_summary = self::get_issues_count($project->id);
        // dd($issues_summary);

        return view('frontend.user.projects.seo',[
            'project_id' => $id,
            'project' => $project,
            'issues_summary' => $issues_summary
        ]);
    }

    public static function get_issues_count($project_id){

        $project = Projects::where('id',$project_id)->first();
        $decode = json_decode($project->seo_result);

        $high_issues_count = 0;
        $medium_issues_count = 0;
        $low_issues_count = 0;

        $high_passes_count = 0;
        $medium__passes_count = 0;
        $low_passes_count = 0;

        foreach(json_decode($project->seo_result) as $key => $seo_result){
            if(isset($seo_result->importance)){

                if($seo_result->importance == 'high'){
                    if($seo_result->passed == 'true'){
                        $high_passes_count += 1;
                    }
                    $high_issues_count += 1;
                }

                if($seo_result->importance == 'medium'){
                    if($seo_result->passed == 'true'){
                        $medium__passes_count += 1;
                    }
                    $medium_issues_count += 1;
                }

                if($seo_result->importance == 'low'){
                    if($seo_result->passed == 'true'){
                        $low_passes_count += 1;
                    }
                    $low_issues_count += 1;
                }
            }
        }

        return [
            'total_high_risk_points' => $high_issues_count,
            'passed_high_risk_points' => $high_passes_count,
            'high_risk_issue_count' => $high_issues_count - $high_passes_count,
            'total_medium_risk_points' => $medium_issues_count,
            'passed_medium_risk_points' => $medium__passes_count,
            'medium_risk_issue_count' => $medium_issues_count - $medium__passes_count,
            'total_low_risk_points' => $low_issues_count,
            'passed_low_risk_points' => $low_passes_count,
            'low_risk_issue_count' => $low_issues_count - $low_passes_count,
        ];
        
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
        $add->status='Pending'; 

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
