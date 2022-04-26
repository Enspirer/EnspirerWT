<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectType;
use App\Models\Projects;
use App\Models\BillingInvoice;
use App\Models\Widgets;
use App\Models\Inquiries_Status;
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

        return view('frontend.user.reports.analytics_report',[
            'project' => $project,
            'project_id' => $project->id
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

        return view('frontend.user.reports.security_report',[
            'project' => $project,
            'project_id' => $project->id
        ]);
    }


    public function billing_report(Request $request, $id) {
             
        $project = Projects::where('id',$id)->first();

        return view('frontend.user.reports.billing_report',[
            'project' => $project,
            'project_id' => $project->id
        ]);
    }


}
