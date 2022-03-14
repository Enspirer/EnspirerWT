<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;
use phpDocumentor\Reflection\Project;
use App\Http\Requests\Backend\Auth\User\StoreReportRequest;
use Carbon\Carbon;


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
        $projectDetails = Projects::where('user_id',auth()->user()->id)->orderBy('id','desc')->get();

        $greetings = "";
        $time = date("H");
        $timezone = date("e");
        if ($time < "12") {
            $greetings = "Good Morning";
        } else
        if ($time >= "12" && $time < "17") {
            $greetings = "Good Afternoon";
        } else
        if ($time >= "17" && $time < "19") {
            $greetings = "Good Evening";
        } else
        if ($time >= "19") {
            $greetings = "Good Night";
        }



            $date = empty($date) ? Carbon::now() : Carbon::createFromDate($date);
            $startOfCalendar = $date->copy()->firstOfMonth()->startOfWeek(Carbon::SUNDAY);
            $endOfCalendar = $date->copy()->lastOfMonth()->endOfWeek(Carbon::SATURDAY);

            $html = '<div class="calendar">';

            $html .= '<div class="month-year">';
            $html .= '<span class="month">' . $date->format('M') . '</span>';
            $html .= '<span class="year">' . $date->format('Y') . '</span>';
            $html .= '</div>';

            $html .= '<div class="days">';

            $dayLabels = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
            foreach ($dayLabels as $dayLabel)
            {
                $html .= '<span class="day-label">' . $dayLabel . '</span>';
            }

            while($startOfCalendar <= $endOfCalendar)
            {
                $extraClass = $startOfCalendar->format('m') != $date->format('m') ? 'dull' : '';
                $extraClass .= $startOfCalendar->isToday() ? ' today' : '';

                $html .= '<span class="day '.$extraClass.'"><span class="content">' . $startOfCalendar->format('j') . '</span></span>';
                $startOfCalendar->addDay();
            }
            $html .= '</div></div>';
            // return $html;
   




        return view('frontend.user.dashboard',[
            'project_details' => $projectDetails,
            'greetings' => $greetings,
            'html' => $html
        ]);
    }

    public function user_projects_store(StoreReportRequest $request)
    {        
        $project = new Projects();
        $iresult = $project->create_seo_report($request);

        // dd($iresult);

        return redirect()->route('frontend.user.project.chat',$iresult);
                    
    }

    public function project_dash_destroy($id)
    {
        Projects::where('id', $id)->delete(); 
        return back();
    }


}
