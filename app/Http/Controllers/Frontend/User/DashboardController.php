<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;
use phpDocumentor\Reflection\Project;
use App\Http\Requests\Backend\Auth\User\StoreReportRequest;

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

    public function user_projects_store(StoreReportRequest $request)
    {        
        $project = new Projects();
        $iresult = $project->create_seo_report($request);

        // dd($iresult);

        return redirect()->route('frontend.user.project.seo',$iresult);
                    
    }


}
