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
                $country = $geoip->country->name;
                $iso_code = $geoip->country->isoCode;
                $city = $geoip->city->name .(isset($geoip->mostSpecificSubdivision->isoCode) ? ', '.$geoip->mostSpecificSubdivision->isoCode : '');
            } catch (\Exception $e) {
                $country = null;
                $city = null;
                $iso_code = null;
                $continent = $country = $city = null;
            }

            $vistorDetails = new VisitorCount;
            $vistorDetails->project_id = $widgetDetaials->project_id;
            $vistorDetails->widget_id = $widget_id;
            $vistorDetails->ip_address = $ip_address;
            $vistorDetails->country = $country;
            $vistorDetails->iso_code = $iso_code;
            $vistorDetails->city = $city;
            $vistorDetails->save();
        }

    }
}
