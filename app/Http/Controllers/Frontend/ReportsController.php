<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectType;
use App\Models\Projects;
use App\Models\BillingInvoice;
use App\Models\Widgets;
use App\Models\Inquiries_Status;
use App\Models\SecurityContacts;
use Modules\WidgetManager\Entities\ImsClients;
use DB;
use PDF;
use App\Models\Auth\User;

class ReportsController extends Controller
{
    public function index(Request $request) {
        
        $sort_search =null;
        $reports = Projects::orderBy('id', 'desc')->where('user_id',auth()->user()->id);

        if ($request->has('search_project')){
            $sort_search = $request->search_project;
            $reports = $reports->where('name', 'like', '%'.$sort_search.'%');
        }
        
        $reports = $reports->get();
        
        $project_type = ProjectType::where('status','Enabled')->get(); 

        return view('frontend.user.reports.index',[
            'reports' => $reports,
            'project_type' => $project_type
        ]);
    }

    public function analytics_report(Request $request, $id) {
             
        $project = Projects::where('id',$id)->first();
        $paid_invoices = BillingInvoice::where('project_id',$id)->where('status','Paid')->where('user_id',auth()->user()->id)->orderBy('id','desc')->get();
        $unpaid_invoices = BillingInvoice::where('project_id',$id)->where('status','Unpaid')->where('user_id',auth()->user()->id)->orderBy('id','desc')->get();
        $pending_invoices = BillingInvoice::where('project_id',$id)->where('status','Pending')->where('user_id',auth()->user()->id)->orderBy('id','desc')->get();

        $inquiry_status = Inquiries_Status::where('project_id',$id)->orderBy('id','desc')->get();

        return view('frontend.user.reports.analytics_report',[
            'project' => $project,
            'project_id' => $project->id,
            'paid_invoices' => $paid_invoices,
            'unpaid_invoices' => $unpaid_invoices,
            'pending_invoices' => $pending_invoices,
            'inquiry_status' => $inquiry_status
        ]);
    }

    public function inquiry_report(Request $request, $id) {
             
        $project = Projects::where('id',$id)->first();
        $paid_invoices = BillingInvoice::where('project_id',$id)->where('status','Paid')->where('user_id',auth()->user()->id)->orderBy('id','desc')->get();
        $unpaid_invoices = BillingInvoice::where('project_id',$id)->where('status','Unpaid')->where('user_id',auth()->user()->id)->orderBy('id','desc')->get();
        $pending_invoices = BillingInvoice::where('project_id',$id)->where('status','Pending')->where('user_id',auth()->user()->id)->orderBy('id','desc')->get();

        $inquiry_status = Inquiries_Status::where('project_id',$id)->orderBy('id','desc')->get();
        // dd($ims_client);

        return view('frontend.user.reports.inquiry_report',[
            'project' => $project,
            'project_id' => $project->id,
            'paid_invoices' => $paid_invoices,
            'unpaid_invoices' => $unpaid_invoices,
            'pending_invoices' => $pending_invoices,
            'inquiry_status' => $inquiry_status
        ]);
    }

    public function inquiriesPDF($id)
    {
        $inquiry_status = Inquiries_Status::where('project_id',$id)->get();
        // $widget = Widgets::where('id',$inquiry_status->widget_id)->first();
        $project = Projects::where('id',$id)->first();  
      
        $pdf = PDF::loadView('inquiries',[
            'inquiry_status' => $inquiry_status
        ]);
  
        return $pdf->download('inquiries.pdf');
    }


    public function seo_optimize_report(Request $request, $id) {
             
        $project = Projects::where('id',$id)->first();

        return view('frontend.user.reports.seo_optimize_report',[
            'project' => $project,
            'project_id' => $project->id
        ]);
    }


    public function security_report(Request $request, $id) {
             
        $project = Projects::where('id',$id)->first();       

        $paid_invoices = BillingInvoice::where('project_id',$id)->where('status','Paid')->where('user_id',auth()->user()->id)->orderBy('id','desc')->get();
        $unpaid_invoices = BillingInvoice::where('project_id',$id)->where('status','Unpaid')->where('user_id',auth()->user()->id)->orderBy('id','desc')->get();
        $pending_invoices = BillingInvoice::where('project_id',$id)->where('status','Pending')->where('user_id',auth()->user()->id)->orderBy('id','desc')->get();
        $inquiry_status = Inquiries_Status::where('project_id',$id)->orderBy('id','desc')->get();
            
        $issues_summary = self::get_issues_count($project->id);
        // dd($issues_summary);

        $blacklist_count = self::get_blacklist_count($project->id);
        // dd($blacklist_count);


        return view('frontend.user.reports.security_report',[
            'project' => $project,
            'project_id' => $project->id,
            'paid_invoices' => $paid_invoices,
            'unpaid_invoices' => $unpaid_invoices,
            'pending_invoices' => $pending_invoices,
            'inquiry_status' => $inquiry_status,
            'issues_summary' => $issues_summary,
            'blacklist_count' => $blacklist_count
        ]);
    }

    public static function get_blacklist_count($project_id){

        $project = Projects::where('id',$project_id)->first();
        $decode = json_decode($project->email_blacklist);

        $total_blacklist_count = 0;
        $ok_count = 0;
        $listed_count = 0;

        $j_decode = json_decode($project->email_blacklist);
        // dd($j_decode);

        if(isset($j_decode->blacklists)){

            foreach($j_decode->blacklists as $key => $j_code_blacklist){
                                
                if($j_code_blacklist->blacklisted == 0){                        
                    $ok_count += 1;
                }
                if($j_code_blacklist->blacklisted != 0){
                    $listed_count += 1;            
                }

            }
        }

        return [
            'ok_count' => $ok_count,
            'listed_count' => $listed_count,
            'total_blacklist_count' => $ok_count + $listed_count,
        ];
        
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


    public function billing_report(Request $request, $id) {
             
        $project = Projects::where('id',$id)->first();

        $paid_invoices = BillingInvoice::where('project_id',$id)->where('status','Paid')->where('user_id',auth()->user()->id)->orderBy('id','desc')->get();
        $unpaid_invoices = BillingInvoice::where('project_id',$id)->where('status','Unpaid')->where('user_id',auth()->user()->id)->orderBy('id','desc')->get();
        $pending_invoices = BillingInvoice::where('project_id',$id)->where('status','Pending')->where('user_id',auth()->user()->id)->orderBy('id','desc')->get();
        $inquiry_status = Inquiries_Status::where('project_id',$id)->orderBy('id','desc')->get();

        return view('frontend.user.reports.billing_report',[
            'project' => $project,
            'project_id' => $project->id,
            'paid_invoices' => $paid_invoices,
            'unpaid_invoices' => $unpaid_invoices,
            'pending_invoices' => $pending_invoices,
            'inquiry_status' => $inquiry_status
        ]);
    }


}
