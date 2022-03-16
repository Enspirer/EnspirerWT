<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationsController extends Controller
{
    public function index(Request $request)
    {
        return view('frontend.user.notifications');
    }

    public function user_notifications_status(request $request, $id)
    {
        // dd($request);

        $ims_url = Notification::where('id',$id)->first()->url;
        // dd($prop);

        $update = new Notification;
        
        $update->status = 'Seen';
        $update->user_id = auth()->user()->id;

        Notification::whereId($id)->update($update->toArray());

        return redirect()->route('frontend.user.user_widget.ims_dashboard',[$ims_url]); 
        
    }

    
}
