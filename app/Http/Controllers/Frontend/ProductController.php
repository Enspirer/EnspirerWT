<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function product_whatsapp_widget() {
        return view('frontend.product_whatsapp_widget');
    }
    
    public function product_all_in_one_chat() {
        return view('frontend.product_all_in_one_chat');
    }
}
