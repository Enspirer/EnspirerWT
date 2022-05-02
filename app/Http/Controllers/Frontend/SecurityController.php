<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SecurityContacts;
use App\Models\Projects;
use App\Models\Inquiries_Status;
use App\Models\BillingInvoice;
use App\Models\ProjectType;
use GuzzleHttp\Client;


class SecurityController extends Controller
{
    public function security($id)
    {
        $project = Projects::where('id',$id)->first();

        $issues_summary = self::get_issues_count($project->id);
        // dd($issues_summary);
      
        if($project->email_blacklist == null){
            try {
                $client = new Client();
                $res = $client->request('GET', 'http://api.whoapi.com/?domain=tallentor.com&r=blacklist&apikey=5b6b85e2ae3d3e82c8bb431089f37d1f');
                $response = $res->getBody()->getContents();
                // dd($response);
    
                $update = new Projects;
                $update->email_blacklist = $response;
                Projects::whereId($id)->update($update->toArray());
              
            } catch (\Exception $e) {              
                return $e->getMessage();
            }
        }
        
        return view('frontend.user.projects.security',[
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


    public function unlimited_privacy($id)
    {
        $project = Projects::where('id',$id)->first();
              
        return view('frontend.user.projects.unlimited_privacy',[
            'project_id' => $id,
            'project' => $project
        ]);
    }

    public function view_email_blacklist($id)
    {
        $project = Projects::where('id',$id)->first();
        $project_type = ProjectType::where('id',$project->project_type)->first();
        $paid_invoices = BillingInvoice::where('project_id',$id)->where('status','Paid')->where('user_id',auth()->user()->id)->orderBy('id','desc')->get();
        $unpaid_invoices = BillingInvoice::where('project_id',$id)->where('status','Unpaid')->where('user_id',auth()->user()->id)->orderBy('id','desc')->get();
        $pending_invoices = BillingInvoice::where('project_id',$id)->where('status','Pending')->where('user_id',auth()->user()->id)->orderBy('id','desc')->get();
        $inquiry_status = Inquiries_Status::where('project_id',$id)->orderBy('id','desc')->get();
              
        return view('frontend.user.projects.view_email_blacklist',[
            'project_id' => $id,
            'project' => $project,
            'project_type' => $project_type,
            'paid_invoices' => $paid_invoices,
            'unpaid_invoices' => $unpaid_invoices,
            'pending_invoices' => $pending_invoices,
            'inquiry_status' => $inquiry_status
        ]);
    }

    

    public function unlimited_privacy_store(Request $request)
    {        
        // dd($request); 
  
        $add = new SecurityContacts;

        $add->project_id=$request->hidden_project_id;
        $add->user_id=auth()->user()->id;
        $add->package=$request->package;
        $add->technology=$request->technology;
        $add->phone_number=$request->phone_number;    
        $add->time_period=$request->time_period;    
        $add->status='Pending'; 

        $add->save();

        return back()->with([
            'success' => 'success'
        ]);  

    }


    public function email_blacklist_update(Request $request, $id)
    {        
        // dd($request);

        try {

            $client = new Client();
            $res = $client->request('GET', 'http://api.whoapi.com/?domain=tallentor.com&r=blacklist&apikey=5b6b85e2ae3d3e82c8bb431089f37d1f');
            $response = $res->getBody()->getContents();
            // dd($response);

            $update = new Projects;
            $update->email_blacklist = $response;
            Projects::whereId($id)->update($update->toArray());

            return back();
          
        } catch (\Exception $e) {
          
            return $e->getMessage();
        }

    }

    


}
