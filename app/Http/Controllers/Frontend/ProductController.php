<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function widget_lite() {
        return view('frontend.widget_lite');
    }
    
    public function widget_pro() {
        return view('frontend.widget_pro');
    }

    public function optimizer() {
        return view('frontend.optimizer');
    }
}
