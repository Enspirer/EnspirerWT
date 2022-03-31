<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use GeoIp2\Database\Reader as GeoIP;

class VisitorCount extends Model
{
    public static function visitor_update($widget_id,$ip_address)
    {
        $widgetDetaials = Widgets::where('id',$widget_id)->first();
        $visitorbyIP = VisitorCount::where('ip_address',$ip_address)->first();
        if($visitorbyIP)
        {



        }else{

            try {
                $geoip = (new GeoIP(storage_path('app/geoip/GeoLite2-City.mmdb')))->city($ip_address);

                $continent = $geoip->continent->code.':'.$geoip->continent->name;
                $country = $geoip->country->isoCode.':'.$geoip->country->name;
                $city = $geoip->country->isoCode.':'. $geoip->city->name .(isset($geoip->mostSpecificSubdivision->isoCode) ? ', '.$geoip->mostSpecificSubdivision->isoCode : '');
            } catch (\Exception $e) {
                $country = null;
                $city = null;
                $continent = $country = $city = null;
            }

            $vistorDetails = new VisitorCount;
            $vistorDetails->project_id = $widgetDetaials->project_id;
            $vistorDetails->widget_id = $widget_id;
            $vistorDetails->ip_address = $ip_address;
            $vistorDetails->country = $country;
            $vistorDetails->city = $city;
            $vistorDetails->save();
        }

    }
}
