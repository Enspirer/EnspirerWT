<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecurityController extends Controller
{
    public function security($id)
    {
        return view('frontend.user.projects.secutiry',[
            'project_id' => $id
        ]);
    }
}
