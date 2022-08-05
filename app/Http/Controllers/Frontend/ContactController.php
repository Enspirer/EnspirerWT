<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Contact\SendContactRequest;
use App\Mail\Frontend\Contact\SendContact;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use Mail;
use \App\Mail\ContactUsMail;
use \App\Mail\ConsultationMail;
use \App\Mail\RequestQuoteMail;

/**
 * Class ContactController.
 */
class ContactController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.contact');
    }

    /**
     * @param SendContactRequest $request
     *
     * @return mixed
     */
    public function send(SendContactRequest $request)
    {
        Mail::send(new SendContact($request));

        return redirect()->back()->withFlashSuccess(__('alerts.frontend.contact.sent'));
    }


    public function store(Request $request)
    {        
        // dd($request); 

        if($request->get('g-recaptcha-response') == null){
            return back()->with('error', 'Error!.....Please fill reCAPTCHA!');
        }  

        if($request->faxonly) {
            return back()->with([
                'success' => 'success'
            ]);
        }
   
        $contactus = new ContactUs;

        $contactus->name=$request->name;
        $contactus->message=$request->inquiry;
        $contactus->email=$request->email;
        $contactus->help=$request->help;
        $contactus->status='Pending'; 

        $contactus->save();

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'help' => $request->help,
            'message' => $request->inquiry
        ];

        \Mail::to([$request->email,'hello@tallentordigital.com'])->send(new ContactUsMail($details));
       
        // session()->flash('message','Thanks!');

        return back()->with([
            'success' => 'success'
        ]);  

    }

    public function consultation_store(Request $request)
    {        
        // dd($request); 

        if($request->get('g-recaptcha-response') == null){
            return back()->withInput()->with([
                'consultation_error' => 'Error!.....Please fill reCAPTCHA!'
            ]);
        }  
   
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'company' => $request->company,
            'date' => $request->date,
            'time' => $request->time
        ];

        \Mail::to([$request->email,'hello@tallentordigital.com'])->send(new ConsultationMail($details));
       
        return back()->with([
            'index_success' => 'index_success'
        ]);   

    }



    public function request_quote_store(Request $request)
    {        
        // dd($request); 

        if($request->get('g-recaptcha-response') == null){
            return back()->withInput()->with([
                'request_quote_error' => 'Error!.....Please fill reCAPTCHA!'
            ]);
        }  
   
        $details = [
            'quote_name' => $request->quote_name,
            'quote_email' => $request->quote_email,
            'quote_phone' => $request->quote_phone,
            'country' => $request->country,
            'quote_company' => $request->quote_company,
            'brief_project' => $request->brief_project
        ];

        \Mail::to([$request->quote_email,'hello@tallentordigital.com'])->send(new RequestQuoteMail($details));
       
        return back()->with([
            'index_success' => 'index_success'
        ]);   

    }

   

}
