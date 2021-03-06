<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;
use DB;
use App\Models\Auth\User;

class ProjectController extends Controller
{

    public function index(Request $request)
    {

        $sort_search =null;
        $reports = Projects::orderBy('id', 'desc')->where('user_id',auth()->user()->id);

        if ($request->has('search_project')){
            $sort_search = $request->search_project;
            $reports = $reports->where('name', 'like', '%'.$sort_search.'%');
        }
        
        $reports = $reports->get();



        return view('frontend.user.projects.index',[
            'reports' => $reports
        ]);
    }

    public function show($id)
    {
        return view('frontend.user.projects.seo');
    }

    public function project_settings($id)
    {
        $project = Projects::where('id',$id)->first();
        $user = User::where('id',auth()->user()->id)->first(); 


        return view('frontend.user.projects.project_settings',[
            'project' => $project,
            'project_id' => $project->id,
            'user' => $user
        ]);
    }

    public function project_settings_update(Request $request)
    {        
        // dd($request);

        if($request->logo == null){
            return back()->with([
                'error' => 'Add a Logo'
            ]); 
        }

        $array = [
            'logo' => $request->logo,
            'email_update' => $request->email_update,
            'ims' => $request->ims,
            'security_alert_email_notification' => $request->security_alert_email_notification,
            'owner_email' => $request->owner_email,
            'owner_phone_number' => $request->owner_phone_number,
            'company_address' => $request->company_address,
            'company_email' => $request->company_email
        ];
        
        $update = new Projects;

        $update->settings = json_encode($array);

        Projects::whereId($request->hidden_id)->update($update->toArray());


        return back()->with([
            'success' => 'Updated Successfully'
        ]);    
                    
    }


}
