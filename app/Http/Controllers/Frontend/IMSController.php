<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Widgets;
use App\Models\Projects;
use Modules\WidgetManager\Entities\ImsClients;

class IMSController extends Controller
{
    public function index($id)
    {
        // dd($id);
        $widget = Widgets::where('id',$id)->first();
        $project = Projects::where('id',$widget->project_id)->first();           
        $ims_client = ImsClients::where('widget_id',$widget->id)->get();
        // dd($ims_client);
    
        return view('frontend.user.projects.ims.user_widget_ims',[
            'project' => $project,
            'widget' => $widget,
            'ims_client' => $ims_client
        ]);
        
    }

    public function ims_individual_inbox($id)
    {
        // dd($id);

        $ims_client = ImsClients::where('id',$id)->first();

        $widget = Widgets::where('id',$ims_client->widget_id)->first();
        $project = Projects::where('id',$ims_client->project_id)->first();           
        // dd($ims_client);
    
        return view('frontend.user.projects.ims.user_widget_ims_inbox_individual',[
            'project' => $project,
            'widget' => $widget,
            'ims_client' => $ims_client
        ]);
        
    }

    public function ims_inbox($id)
    {
        // dd($id);
        $widget = Widgets::where('id',$id)->first();
        $project = Projects::where('id',$widget->project_id)->first();           
        $ims_client = ImsClients::where('widget_id',$widget->id)->get();
        // dd($ims_client);
    
        return view('frontend.user.projects.ims.user_widget_ims_inbox',[
            'project' => $project,
            'widget' => $widget,
            'ims_client' => $ims_client
        ]);
        
    }

    public function ims_assigned($id)
    {
        // dd($id);
        $widget = Widgets::where('id',$id)->first();
        $project = Projects::where('id',$widget->project_id)->first();           
        $ims_client = ImsClients::where('widget_id',$widget->id)->where('assign_by','!=', null)->get();
        // dd($ims_client);
    
        return view('frontend.user.projects.ims.user_widget_ims_assigned',[
            'project' => $project,
            'widget' => $widget,
            'ims_client' => $ims_client
        ]);
        
    }

    public function ims_unassigned($id)
    {
        // dd($id);
        $widget = Widgets::where('id',$id)->first();
        $project = Projects::where('id',$widget->project_id)->first();           
        $ims_client = ImsClients::where('widget_id',$widget->id)->where('assign_by', null)->get();
        // dd($ims_client);
    
        return view('frontend.user.projects.ims.user_widget_ims_unassigned',[
            'project' => $project,
            'widget' => $widget,
            'ims_client' => $ims_client
        ]);
        
    }

    public function ims_closed($id)
    {
        // dd($id);
        $widget = Widgets::where('id',$id)->first();
        $project = Projects::where('id',$widget->project_id)->first();           
        $ims_client = ImsClients::where('widget_id',$widget->id)->where('status','Deal close successfully')->get();
        // dd($ims_client);
    
        return view('frontend.user.projects.ims.user_widget_ims_closed',[
            'project' => $project,
            'widget' => $widget,
            'ims_client' => $ims_client
        ]);
        
    }

    public function ims_spam($id)
    {
        // dd($id);
        $widget = Widgets::where('id',$id)->first();
        $project = Projects::where('id',$widget->project_id)->first();           
        $ims_client = ImsClients::where('widget_id',$widget->id)->get();
        // dd($ims_client);
    
        return view('frontend.user.projects.ims.user_widget_ims_spam',[
            'project' => $project,
            'widget' => $widget,
            'ims_client' => $ims_client
        ]);
        
    }

    public function ims_clients($id)
    {
        // dd($id);
        $widget = Widgets::where('id',$id)->first();
        $project = Projects::where('id',$widget->project_id)->first();           
        $ims_client = ImsClients::where('widget_id',$widget->id)->get();
        // dd($ims_client);
    
        return view('frontend.user.projects.ims.user_widget_ims_clients',[
            'project' => $project,
            'widget' => $widget,
            'ims_client' => $ims_client
        ]);
        
    }

    public function ims_analytics($id)
    {
        // dd($id);
        $widget = Widgets::where('id',$id)->first();
        $project = Projects::where('id',$widget->project_id)->first();           
        $ims_client = ImsClients::where('widget_id',$widget->id)->get();
        // dd($ims_client);
    
        return view('frontend.user.projects.ims.user_widget_ims_analytics',[
            'project' => $project,
            'widget' => $widget,
            'ims_client' => $ims_client
        ]);
        
    }


    public function assigned_by(Request $request)
    {     
        // dd($request);
        
        $id = $request->id;
        $value = $request->value;
   
        $update = new ImsClients;
        $update->assign_by = $value;

        ImsClients::whereId($id)->update($update->toArray());

        // return json_encode($output);                  

    }




    public function ims_individual_store(Request $request)
    {
        // dd($request);

        $add = new ImsClients;

        $add->action_taken = $request->action_taken;
        $add->comment = $request->comment;
        $add->status = $request->status;
        $add->manager_comment = $request->manager_comment;      
        
        ImsClients::whereId($request->hidden_id)->update($add->toArray());

        return back();
        
    }

}
