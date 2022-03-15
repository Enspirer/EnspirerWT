<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Widgets;
use App\Models\Projects;
use App\Models\VisitorCount;
use Modules\WidgetManager\Entities\ImsClients;
use DB;
use Carbon\Carbon;

class VisitorStatisticsController extends Controller
{
    
    public function index($id)
    {
        // dd($id);
        $date = Carbon::now()->subDays(7);

        $ims_clienrt = ImsClients::where('project_id',$id)->where('created_at', '>=', Carbon::now()->subMonth())
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

        $visitors = VisitorCount::where('project_id',$id)->get();
    
        return view('frontend.user.projects.ims.user_widget_visitor_statistics',[
            'chart_data' => $ims_clienrt,
            'project' => $project,
            'ims_client' => $ims_client,
            'visitors' => $visitors
        ]);
        
    }

}
