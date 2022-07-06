<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Contact\SendContactRequest;
use App\Mail\Frontend\Contact\SendContact;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use Mail;
use \App\Mail\ContactUsMail;

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


}
