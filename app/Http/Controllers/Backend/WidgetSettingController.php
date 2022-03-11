<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Widgets;
use DB;

class WidgetSettingController extends Controller
{
    public function index()
    {
        return view('backend.widget_settings_update.widget_settings_update');
    }

    public function update(Request $request)
    {        
        // dd($request);

        if($request->widget_type == 'All-in-One Chat'){

            DB::table('widgets')->where('widget_type',$request->widget_type)->update(array('settings' => $request->settings));

        }
    
        return back()->withFlashSuccess('Updated Successfully');            

    }



}
