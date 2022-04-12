<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function news() {
        return view('frontend.latest_news');
    }

    public function promotions() {
        return view('frontend.promotions');
    }
}
