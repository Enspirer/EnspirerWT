<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PushNotificationController extends Controller
{
    
    public function push_notification(Request $request)
    {        
        // dd($request);  
        
        push_notification($request->title, $request->description, 'fas fa-user-cog', 'https://google.com/', $request->hidden_user_id);

        return back()->withFlashSuccess('Message Sent Successfully');    
                    
    }

}
