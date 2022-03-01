<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index() {
        
        $reports = Projects::where('user_id',auth()->user()->id)->get();

        return view('frontend.user.reports.index',[
            'reports' => $reports
        ]);
    }
}
