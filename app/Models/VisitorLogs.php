<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisitorLogs extends Model
{
    public static function visitor_update($ip_address,$widget_id,$url)
    {
        $widgetDetaials = Widgets::where('id',$widget_id)->first();
        $visitorbyIP = VisitorLogs::where('ip_address',$ip_address)->first();
        if($visitorbyIP)
        {
            $visitorbyIP = VisitorLogs::where('ip_address',$ip_address)
                ->where('url',$url)
                ->first();
            if($visitorbyIP){
                return 'same ip address and same url';

            }else{
                $vistorDetails = new VisitorLogs;
                $vistorDetails->project_id = $widgetDetaials->project_id;
                $vistorDetails->widget_id = $widget_id;
                $vistorDetails->ip_address = $ip_address;
                $vistorDetails->url = $url;
                $vistorDetails->save();
                return 'same ip address and but url changed - log successful';
            }

        }else{
            $vistorDetails = new VisitorLogs;
            $vistorDetails->project_id = $widgetDetaials->project_id;
            $vistorDetails->widget_id = $widget_id;
            $vistorDetails->ip_address = $ip_address;
            $vistorDetails->url = $url;
            $vistorDetails->save();
            return 'ip address changed - log successful';

        }

    }
}
