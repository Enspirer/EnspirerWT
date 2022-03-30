<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VisitorCount;

class MobileViewController extends Controller
{
    public function index($id, Request $request) {
        // dd($request);

        
        if($id != 'project_id'){

            $visitors_count = VisitorCount::where('project_id',$id)->get();

            return view('frontend.mobile.mobile_view',[
                'visitors_count' => $visitors_count,
                'project_id' => $id
            ]);

        }
        else{
            return view('frontend.mobile.mobile_view',[
                'visitors_count' => null,
                'project_id' => null
            ]);
        }


    }

    public function mobile_notification() {
        return view('frontend.mobile.mobile_notification');
    }
    
    public function mobile_settings() {
        return view('frontend.mobile.mobile_settings');
    }

    public function mobile_register() {
        return view('frontend.mobile.mobile_register');
    }

    public function mobile_login() {
        // dd('dddddd');
        return view('frontend.mobile.mobile_login');
    }

    public function mobile_analytics() {
        return view('frontend.mobile.mobile_analytics');
    }

}
