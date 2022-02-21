<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SEOController extends Controller
{
    public function seo($id)
    {
        return view('frontend.user.projects.seo',[
            'project_id' => $id
        ]);
    }
}
