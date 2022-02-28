<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        return view('frontend.user.projects.index');
    }

    public function show($id)
    {
        return view('frontend.user.projects.seo');
    }
}
