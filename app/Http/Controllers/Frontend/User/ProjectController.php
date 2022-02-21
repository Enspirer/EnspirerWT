<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function show($id)
    {
        return view('frontend.user.projects.show');
    }
}
