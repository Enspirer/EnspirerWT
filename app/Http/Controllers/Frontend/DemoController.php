<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function tallentor_demo() {
        return view('frontend.tallentor_demo');
    }
}
