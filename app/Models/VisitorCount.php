<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisitorCount extends Model
{
    public static function visitor_update($widget_id,$ip_address)
    {
        $widgetDetaials = Widgets::where('id',$widget_id)->first();
        $visitorbyIP = VisitorCount::where('ip_address',$ip_address)->first();
        if($visitorbyIP)
        {


        }else{

            $vistorDetails = new VisitorCount;
            $vistorDetails->project_id = $widgetDetaials->project_id;
            $vistorDetails->widget_id = $widget_id;
            $vistorDetails->ip_address = $ip_address;
            $vistorDetails->save();
        }

    }
}