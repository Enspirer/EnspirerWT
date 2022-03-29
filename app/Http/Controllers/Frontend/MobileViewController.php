<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MobileViewController extends Controller
{
    public function index() {
        return view('frontend.mobile.mobile_view');
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
        return view('frontend.mobile.mobile_login');
    }

}
