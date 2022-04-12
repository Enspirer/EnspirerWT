<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function marketplace() {
        return view('frontend.marketplace');
    }

    public function portfolio() {
        return view('frontend.portfolio');
    }

    public function expertCenter() {
        return view('frontend.expert_center');
    }

    public function services() {
        return view('frontend.services');
    }
}
