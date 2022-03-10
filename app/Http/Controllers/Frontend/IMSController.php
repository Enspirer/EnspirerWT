<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Widgets;
use App\Models\Projects;
use Modules\WidgetManager\Entities\ImsClients;
use DB;
use PDF;
use Carbon\Carbon;
use App\Exports\ExportImsClients;
use Maatwebsite\Excel\Facades\Excel;

class IMSController extends Controller
{    
    public function ims_dashboard($id)
    {
        $date = Carbon::now()->subDays(7);

        $ims_clienrt = ImsClients::where('created_at', '>=', Carbon::now()->subMonth())
                            ->groupBy('date')
        ->orderBy('date', 'DESC')
        ->get(array(
            DB::raw('COUNT(status = "Deal close successfully") as "responded_count" '),
            DB::raw('Date(created_at) as date'),
            DB::raw('COUNT(*) as "count"'),
        ));

        //dd($id);
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($ims_client);

        $count_all = count(ImsClients::where('project_id',$project->id)->get());
        $count_success = count(ImsClients::where('project_id',$project->id)->where('status','Deal close successfully')->get());
        // dd($count_success);
       

        return view('frontend.user.projects.ims.user_widget_ims_dashboard',[
            'chart_data' => $ims_clienrt,
            'project' => $project,
            'ims_client' => $ims_client,
            'count_all' => $count_all,
            'count_success' => $count_success
        ]);
        
    }


    public function index($id)
    {
        // dd($id);
        $project = Projects::where('id',$id)->first();           


        // $widget = Widgets::where('id',$project)->first();

        $ims_client = ImsClients::where('project_id',$project->id)->orderBy('id','desc')->get();
        // dd($ims_client);
    
        return view('frontend.user.projects.ims.user_widget_ims',[
            'project' => $project,
            // 'widget' => $widget,
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
        $ims_client = ImsClients::where('widget_id',$widget->id)->orderBy('id','desc')->get();
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
        $project = Projects::where('id',$id)->first();   
        $ims_client = ImsClients::where('project_id',$project->id)->where('assign_by','!=', null)->orderBy('id','desc')->get();
        // dd($ims_client);
    
        return view('frontend.user.projects.ims.user_widget_ims_assigned',[
            'project' => $project,
            'ims_client' => $ims_client
        ]);
        
    }

    public function ims_unassigned($id)
    {
        // dd($id);
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->where('assign_by', null)->orderBy('id','desc')->get();
        // dd($ims_client);
    
        return view('frontend.user.projects.ims.user_widget_ims_unassigned',[
            'project' => $project,
            'ims_client' => $ims_client
        ]);
        
    }

    public function ims_closed($id)
    {
        // dd($id);
        $project = Projects::where('id',$id)->first();      
        $ims_client = ImsClients::where('project_id',$project->id)->where('status','Deal close successfully')->orderBy('id','desc')->get();
        // dd($ims_client);
    
        return view('frontend.user.projects.ims.user_widget_ims_closed',[
            'project' => $project,
            'ims_client' => $ims_client
        ]);
        
    }

    public function ims_spam($id)
    {
        // dd($id);
        $project = Projects::where('id',$id)->first();         
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($ims_client);
    
        return view('frontend.user.projects.ims.user_widget_ims_spam',[
            'project' => $project,
            'ims_client' => $ims_client
        ]);
        
    }

    public function ims_clients($id)
    {
        // dd($id);
        
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get()->unique('client_email');
        // dd($ims_client);
    
        return view('frontend.user.projects.ims.user_widget_ims_clients',[
            'project' => $project,
            'ims_client' => $ims_client
        ]);
        
    }

    public function ims_clients_destroy($id)
    {
        $delete = ImsClients::where('id', $id)->first(); 
        $delete_all = ImsClients::where('client_email', $delete->client_email)->delete(); 
      
        return back();
    }

    public function ims_analytics(Request $request, $id)
    {

        $date = Carbon::now()->subDays(7);

        $ims_clienrt = ImsClients::where('created_at', '>=', Carbon::now()->subMonth())
                            ->groupBy('date')
        ->orderBy('date', 'DESC')
        ->get(array(
            DB::raw('COUNT(status = "Deal close successfully") as "responded_count" '),
            DB::raw('Date(created_at) as date'),
            DB::raw('COUNT(*) as "count"'),
        ));




//         dd($id);
        $project = Projects::where('id',$id)->first();           
        // $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($ims_client);


        $sort_search =null;
        $ims_client = ImsClients::where('project_id',$project->id);

        if ($request->has('start_date')){
            $sort_search = $request->start_date;
            $sort_search_two = $request->end_date;
            $ims_client = $ims_client->whereBetween('created_at', [$sort_search, $sort_search_two]);
        }
        
        // $ims_client = ImsClients::orderBy('created_at','DESC')->whereBetween('created_at', [$request->start_date, $request->end_date])->get(); 


        $ims_client = $ims_client->get();


        // dd($ims_client);



        return view('frontend.user.projects.ims.user_widget_ims_analytics',[
            'chart_data' => $ims_clienrt,
            'project' => $project,
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


    public function generatePDF($id)
    {
        $ims_client = ImsClients::where('id',$id)->first();
        $widget = Widgets::where('id',$ims_client->widget_id)->first();
        $project = Projects::where('id',$ims_client->project_id)->first();  

        $data = [
            'client_name' => $ims_client->client_name,
            'phone_number' => $ims_client->phone_number,
            'client_email' => $ims_client->client_email,
            'message' => $ims_client->message,
            'contact_via' => $ims_client->contact_via,
            'ip_address' => $ims_client->ip_address,
            'assign_by' => $ims_client->assign_by,
            'manager_comment' => $ims_client->manager_comment,
            'comment' => $ims_client->comment,
            'action_taken' => $ims_client->action_taken,
            'status' => $ims_client->status,
            'date' => $ims_client->created_at->format('d M Y'),
            'project_name' => $project->name
        ];

        $pdf = PDF::loadView('myPDF', $data);
  
        return $pdf->download('ims_client.pdf');
    }


    public function analytics_generatePDF()
    {
        $ims_client = ImsClients::orderBy('created_at','DESC')->get(); 

        // $data = [
        //     'ims_client' => $ims_client
        // ];
        // dd($data);

        $pdf = PDF::loadView('ims_clients_all', [
            'ims_client' => $ims_client
        ]);
  
        return $pdf->download('ims_clients_all.pdf');
    }

    public function ims_dates_report(Request $request)
    {
        // dd($request);
        
        $ims_client = ImsClients::orderBy('created_at','DESC')->whereBetween('created_at', [$request->start_date, $request->end_date])->get(); 
        // dd($ims_client);
       
        // $data = [
        //     'ims_client' => $ims_client
        // ];
        // dd($data);

        $pdf = PDF::loadView('ims_clients_dates', [
            'ims_client' => $ims_client,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ]);
  
        return $pdf->download('ims_clients_dates.pdf');
    }


    public function export_ims_client() 
    {
        return Excel::download(new ExportImsClients, 'ims_client.csv');
    }
    

}
