<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TermsAndPrivacyController extends Controller
{
    public function terms_condition() {
        return view('frontend.terms_condition');
    }
    
    public function privacy_policy() {
        return view('frontend.privacy_policy');
    }
}
