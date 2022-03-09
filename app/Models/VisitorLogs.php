<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisitorLogs extends Model
{
    public static function visitor_update($ip_address,$widget_id,$url)
    {
        $visitorbyIP = VisitorLogs::where('ip_address',$ip_address)->first();

        if($visitorbyIP)
        {
            
        }

    }
}
