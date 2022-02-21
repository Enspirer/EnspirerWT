<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Models\Projects;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $projectDetails = Projects::where('user_id',auth()->user()->id)->get();

        return view('frontend.user.dashboard',[
            'project_details' => $projectDetails
        ]);
    }
}
