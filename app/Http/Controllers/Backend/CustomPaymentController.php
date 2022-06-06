<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\BillingInvoice;
use App\Models\Projects;
use App\Models\Auth\User;
use PDF;
use Illuminate\Support\Facades\Hash;
use DB;
use Mail;  
use \App\Mail\CustomUserMail;
use \App\Mail\InvoiceMail;


class CustomPaymentController extends Controller
{
    public function index()
    {
        return view('backend.custom_payment.index');
    }

    public function create()
    {
        $projects = Projects::orderby('id','desc')->get();

        return view('backend.custom_payment.create',[
            'projects' => $projects
        ]);
    }

    public function getdetails(Request $request)
    {       
        $data = BillingInvoice::get();
        return DataTables::of($data)            
            ->addColumn('status', function($data){
                if($data->status == 'Pending'){
                    $status = '<span class="badge badge-warning">Pending</span>';
                }
                else{
                    $status = '<span class="badge badge-success">Paid</span>';
                }   
                return $status;
            })
            ->addColumn('action', function($data){
                $button = '<a href="'.route('admin.custom_payment.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Invoice </a>';
                $button .= '<a href="'.route('admin.custom_payment.view',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-success btn-sm" style="margin-right: 10px"><i class="fas fa-file"></i> Download PDF </a>';
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                return $button;
                })
            ->rawColumns(['action','status'])
            ->make(true);
        
        return back();
    }

    public function store(Request $request)
    {        
        // dd($request);

        $user = User::where('email',$request->email_address)->first();

        if($user != null){
            $user_id = $user->id;
        }
        else{
            
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $pin = mt_rand(1000000, 9999999)
                . mt_rand(1000000, 9999999)
                . $characters[rand(0, strlen($characters) - 1)];
            $string = str_shuffle($pin);

            $hashed_password = Hash::make($string); 
            
            $arr = explode(' ',trim($request->name));
            $first_name = $arr[0];

            if(isset($arr[1])){
                $last_name = $arr[1];
            }

        
            $add_user = new User;

            $add_user->first_name=$first_name;
            if(isset($arr[1])){
                $add_user->last_name=$last_name;
            }
            $add_user->email=$request->email_address;            
            $add_user->password=$hashed_password;
            $add_user->save();

            $user_details = [
                'name' => $request->name,
                'email' => $request->email_address,
                'password' => $string
            ];

            \Mail::to($request->email_address)->send(new CustomUserMail($user_details));
                       

            $user_id = $add_user->id;

        }

    
        $service_names= $request->service_name;
        $amounts = $request->amount;
        $totals = $request->total;
        $discount = $request->discount;        

        $outArray =[];
        if($service_names != null)
        {
            foreach ($service_names as $key=>$service){
                $outputArray = [
                    'service_name' => $service,
                    'amount' =>$amounts[$key],
                    'total' =>$totals[$key],
                    'discount' =>$discount[$key]
                ];
                array_push($outArray,$outputArray);
            }
        }

        // dd($outArray);

        $add = new BillingInvoice;

        $add->project_id = $request->project_id; 
        $add->due_date = $request->due_date;
        $add->payment_status = $request->payment_status;
        $add->invoice_no = $request->invoice_no;
        $add->purchased_service_list = json_encode($outArray);
        $add->state = $request->state;
        $add->city = $request->city;
        $add->country = $request->country;
        $add->name = $request->name;
        $add->phone_number = $request->phone_number;
        $add->address = $request->address;
        $add->payment_plan = 'Custom';
        $add->discount_type = $request->discount_type;
        $add->discount = $request->final_discount;
        $add->date = $request->date;
        $add->purchased_package = $request->purchased_package;
        $add->price = $request->full_total;        
        $add->payment_method = $request->payment_method;
        $add->expire_date = $request->expire_date;
        $add->user_id = $user_id;
        $add->status = 'Pending';

        $add->save();


       
        $billing_invoice = BillingInvoice::where('id',$add->id)->first(); 
        // dd($billing_invoice);   
      
        $user = User::where('id',$billing_invoice->user_id)->first();
        // dd($user);
 
        $invoice_details = [
            'created_at' => $billing_invoice->created_at->format('d M Y'),
            'purchased_package' => $billing_invoice->purchased_package,
            'price' => $billing_invoice->price,
            'payment_plan' => $billing_invoice->payment_plan,
            'payment_method' => $billing_invoice->payment_method,
            'phone_number' => $billing_invoice->phone_number,
            'address' => $billing_invoice->address,
            'status' => $billing_invoice->status,
            'name' => $billing_invoice->name,
            'country' => $billing_invoice->country,
            'state' => $billing_invoice->state,
            'city' => $billing_invoice->city,
            'discount' => $billing_invoice->discount,
            'date' => $billing_invoice->date,
            'expire_date' => $billing_invoice->expire_date,
            'due_date' => $billing_invoice->due_date,
            'discount_type' => $billing_invoice->discount_type,
            'payment_status' => $billing_invoice->payment_status,            
            'invoice_id' => $billing_invoice->invoice_no,
            'email' => $user->email,            
            'purchased_service_list' => $billing_invoice->purchased_service_list
        ];

        // dd($invoice_details);
 
        \Mail::to($request->email_address)->send(new InvoiceMail($invoice_details));

        dd('fdgdg');
 

        return redirect()->route('admin.custom_payment.index')->withFlashSuccess('Added Successfully');    
                    
    }

    public function edit($id)
    {
        $custom_payment = BillingInvoice::where('id',$id)->first(); 
        $projects = Projects::orderby('id','desc')->get();

        return view('backend.custom_payment.edit',[
            'custom_payment' => $custom_payment,
            'projects' => $projects
        ]);
    }

    public function view($id)
    {
    //    dd($id);
       $billing_invoice = BillingInvoice::where('id',$id)->first(); 
       // dd($billing_invoice);     
     
       $user = User::where('id',$billing_invoice->user_id)->first();

       $data = [
           'created_at' => $billing_invoice->created_at->format('d M Y'),
           'purchased_package' => $billing_invoice->purchased_package,
           'price' => $billing_invoice->price,
           'invoice_id' => $billing_invoice->id,
           'payment_plan' => $billing_invoice->payment_plan,
           'payment_method' => $billing_invoice->payment_method,
           'phone_number' => $billing_invoice->phone_number,
           'address' => $billing_invoice->address,
           'status' => $billing_invoice->status,
           'name' => $billing_invoice->name,
           'country' => $billing_invoice->country,
           'state' => $billing_invoice->state,
           'city' => $billing_invoice->city,
           'discount' => $billing_invoice->discount,
           'date' => $billing_invoice->date,
           'expire_date' => $billing_invoice->expire_date,
           'due_date' => $billing_invoice->due_date,
           'discount_type' => $billing_invoice->discount_type,
           'payment_status' => $billing_invoice->payment_status,            
           'invoice_no' => $billing_invoice->invoice_no,
           'email' => $user->email,            
           'purchased_service_list' => $billing_invoice->purchased_service_list
       ];

       $pdf = PDF::loadView('custom_payment',$data);

       return $pdf->download('custom_payment.pdf');
    }

    

    public function update(Request $request)
    {        
        // dd($request);                         
     
        $update = new BillingInvoice;

        $update->project_id = $request->project_id;        
        $update->due_date = $request->due_date;
        $update->payment_status = $request->payment_status;
        $update->purchased_service_list = $request->purchased_service_list;
        $update->discount_type = $request->discount_type;
        $update->discount = $request->discount;
        $update->date = $request->date;
        $update->invoice_no = $request->invoice_no;
        $update->state = $request->state;
        $update->city = $request->city;
        $update->country = $request->country;
        $update->name = $request->name;
        $update->purchased_package = $request->purchased_package;
        $update->price = $request->price;
        $update->payment_plan = $request->payment_plan;
        $update->payment_method = $request->payment_method;
        $update->expire_date = $request->expire_date;
        $update->phone_number = $request->phone_number;
        $update->address = $request->address;
        $update->user_id = auth()->user()->id;
        $update->status = 'Pending';

        BillingInvoice::whereId($request->hidden_id)->update($update->toArray());

        return redirect()->route('admin.custom_payment.index')->withFlashSuccess('Updated Successfully');            

    }

    public function destroy($id)
    {
        BillingInvoice::where('id', $id)->delete(); 
    }
}
