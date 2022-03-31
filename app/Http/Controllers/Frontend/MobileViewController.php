<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VisitorCount;

class MobileViewController extends Controller
{
    public function index($id, Request $request) {
        // dd($request);

        
        if($id != 'project_id'){

            $visitors_count = VisitorCount::where('project_id',$id)->get();

            return view('frontend.mobile.mobile_view',[
                'visitors_count' => $visitors_count,
                'project_id' => $id
            ]);

        }
        else{
            return view('frontend.mobile.mobile_view',[
                'visitors_count' => null,
                'project_id' => null
            ]);
        }


    }

    public function mobile_notification() {
        return view('frontend.mobile.mobile_notification');
    }

    public function mobile_view_armap(){
        return redirect()->route('frontend.mobile_login');
    }
    
    public function mobile_settings() {
        return view('frontend.mobile.mobile_settings');
    }

    public function mobile_register() {
        return view('frontend.mobile.mobile_register');
    }

    public function mobile_login() {
        // dd('dddddd');
        return view('frontend.mobile.mobile_login');
    }

    public function mobile_analytics() {
        return view('frontend.mobile.mobile_analytics');
    }
    public function mobile_analytics_browsers() {
        return view('frontend.mobile.sub_pages.analytics_browsers');
    }
    public function mobile_analytics_campaigns() {
        return view('frontend.mobile.sub_pages.analytics_campaigns');
    }
    public function mobile_analytics_cities() {
        return view('frontend.mobile.sub_pages.analytics_cities');
    }
    public function mobile_analytics_continents() {
        return view('frontend.mobile.sub_pages.analytics_continents');
    }
    public function mobile_analytics_countries() {
        return view('frontend.mobile.sub_pages.analytics_countries');
    }
    public function mobile_analytics_devices() {
        return view('frontend.mobile.sub_pages.analytics_devices');
    }
    public function mobile_analytics_events() {
        return view('frontend.mobile.sub_pages.analytics_events');
    }
    public function mobile_analytics_landing_pages() {
        return view('frontend.mobile.sub_pages.analytics_landing_pages');
    }
    public function mobile_analytics_languages() {
        return view('frontend.mobile.sub_pages.analytics_languages');
    }
    public function mobile_analytics_operating_systems() {
        return view('frontend.mobile.sub_pages.analytics_operating_systems');
    }
    public function mobile_analytics_pages() {
        return view('frontend.mobile.sub_pages.analytics_pages');
    }
    public function mobile_analytics_referrers() {
        return view('frontend.mobile.sub_pages.analytics_referrers');
    }
    public function mobile_analytics_screen_resolutions() {
        return view('frontend.mobile.sub_pages.analytics_screen_resolutions');
    }
    public function mobile_analytics_search_engines() {
        return view('frontend.mobile.sub_pages.analytics_search_engines');
    }
    public function mobile_analytics_social_networks() {
        return view('frontend.mobile.sub_pages.analytics_social_networks');
    }

}
