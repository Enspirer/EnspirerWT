<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    public function analytics($id)
    {
        return view('frontend.user.projects.analytics',[
            'project_id' => $id
        ]);
    }
}
