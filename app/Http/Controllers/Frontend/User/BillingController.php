<?php

namespace App\Http\Controllers\Frontend\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    
    public function index()
    {       
        return view('frontend.user.billing.index');
    }

}
