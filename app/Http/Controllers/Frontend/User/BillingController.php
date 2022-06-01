<?php

namespace App\Http\Controllers\Frontend\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Widgets;
use App\Models\Projects;
use App\Models\BillingInvoice;
use Modules\WidgetManager\Entities\ImsClients;
use DB;
use PDF;
use App\Models\Auth\User;

class BillingController extends Controller
{
    
    public function index()
    {       
        $projects = Projects::where('user_id',auth()->user()->id)->orderBy('id','desc')->get();

        return view('frontend.user.billing.index',[
            'projects' => $projects
        ]);
    }

    public function unpaid_invoices($id)
    {       
        $project = Projects::where('user_id',auth()->user()->id)->where('id',$id)->first();
        $unpaid_invoices = BillingInvoice::where('project_id',$id)->where('status','Unpaid')->where('user_id',auth()->user()->id)->orderBy('id','desc')->get();

        return view('frontend.user.billing.unpaid_invoices',[
            'project' => $project,
            'unpaid_invoices' => $unpaid_invoices
        ]);
    }

    public function paid_invoices($id)
    {       
        $project = Projects::where('user_id',auth()->user()->id)->where('id',$id)->first();
        $paid_invoices = BillingInvoice::where('project_id',$id)->where('status','Paid')->where('user_id',auth()->user()->id)->orderBy('id','desc')->get();
        $unpaid_invoices = BillingInvoice::where('project_id',$id)->where('status','Unpaid')->where('user_id',auth()->user()->id)->orderBy('id','desc')->get();
        $pending_invoices = BillingInvoice::where('project_id',$id)->where('status','Pending')->where('user_id',auth()->user()->id)->orderBy('id','desc')->get();

        return view('frontend.user.billing.paid_invoices',[
            'project' => $project,
            'paid_invoices' => $paid_invoices,
            'unpaid_invoices' => $unpaid_invoices,
            'pending_invoices' => $pending_invoices
        ]);
    }

    public function custom_invoice() {   

        $custom_invoice = BillingInvoice::where('user_id',auth()->user()->id)->where('purchased_service_list','!=',null)->get();
// dd($custom_invoice);
        return view('frontend.user.billing.custom_invoice',[
            'custom_invoice' => $custom_invoice
        ]);
    }

    public function view_custom_invoice() {  
        return view('frontend.user.billing.view_custom_invoice');
    }

    

    public function invoice_pdf($id)
    {
        // dd($id);
        $billing_invoice = BillingInvoice::where('id',$id)->first(); 
        $project = Projects::where('id',$billing_invoice->project_id)->first();
        // dd($billing_invoice);

        $user = User::where('id',auth()->user()->id)->first();

        $data = [
            'created_at' => $billing_invoice->created_at->format('d M Y'),
            'purchased_package' => $billing_invoice->purchased_package,
            'price' => $billing_invoice->price,
            'invoice_id' => $billing_invoice->id,
            'payment_plan' => $billing_invoice->payment_plan,
            'payment_method' => $billing_invoice->payment_method,
            'expire_date' => $billing_invoice->expire_date,
            'phone_number' => $billing_invoice->phone_number,
            'address' => $billing_invoice->address,
            'status' => $billing_invoice->status,
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'email' => $user->email,
            'project_name' => $project->name
        ];

        $pdf = PDF::loadView('billing_invoice',$data);
  
        return $pdf->download('billing_invoice.pdf');
    }



}
