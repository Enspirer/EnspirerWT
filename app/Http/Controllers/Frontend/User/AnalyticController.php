<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;
use DB;
use App\Models\Widgets;
use Modules\WidgetManager\Entities\ImsClients;

class AnalyticController extends Controller
{
    public function index(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        return view('frontend.user.projects.analytics.index',[
            'project_id' => $project->id,
            'ims_client' => $ims_client
        ]);
    }

    public function page(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        return view('frontend.user.projects.analytics.page',[
            'project_id' => $project->id,
            'ims_client' => $ims_client
        ]);
    }

    public function landing_page(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        return view('frontend.user.projects.analytics.landing_page',[
            'project_id' => $project->id,
            'ims_client' => $ims_client
        ]);
    }

    public function referrers(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        return view('frontend.user.projects.analytics.referrers',[
            'project_id' => $project->id,
            'ims_client' => $ims_client
        ]);
    }

    public function search_engines(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        return view('frontend.user.projects.analytics.search_engines',[
            'project_id' => $project->id,
            'ims_client' => $ims_client
        ]);
    }

    public function social_networks(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        return view('frontend.user.projects.analytics.social_networks',[
            'project_id' => $project->id,
            'ims_client' => $ims_client
        ]);
    }

    public function campaigns(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        return view('frontend.user.projects.analytics.campaigns',[
            'project_id' => $project->id,
            'ims_client' => $ims_client
        ]);
    }

    public function continents(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        return view('frontend.user.projects.analytics.continents',[
            'project_id' => $project->id,
            'ims_client' => $ims_client
        ]);
    }

    public function countries(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        return view('frontend.user.projects.analytics.countries',[
            'project_id' => $project->id,
            'ims_client' => $ims_client
        ]);
    }

    public function cities(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        return view('frontend.user.projects.analytics.cities',[
            'project_id' => $project->id,
            'ims_client' => $ims_client
        ]);
    }

    public function languages(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        return view('frontend.user.projects.analytics.languages',[
            'project_id' => $project->id,
            'ims_client' => $ims_client
        ]);
    }

    public function operating_systems(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        return view('frontend.user.projects.analytics.operating_systems',[
            'project_id' => $project->id,
            'ims_client' => $ims_client
        ]);
    }

    public function browsers(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        return view('frontend.user.projects.analytics.browsers',[
            'project_id' => $project->id,
            'ims_client' => $ims_client
        ]);
    }

    public function screen_resolutions(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        return view('frontend.user.projects.analytics.screen_resolutions',[
            'project_id' => $project->id,
            'ims_client' => $ims_client
        ]);
    }

    public function devices(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        return view('frontend.user.projects.analytics.devices',[
            'project_id' => $project->id,
            'ims_client' => $ims_client
        ]);
    }

    public function events(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        return view('frontend.user.projects.analytics.events',[
            'project_id' => $project->id,
            'ims_client' => $ims_client
        ]);
    }




}
