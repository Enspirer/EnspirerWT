<?php

use App\Models\Settings;
use App\Models\Projects;
use App\Models\Widgets;
use App\Models\Notification;
use App\Models\IMSProUsers;
use App\Models\ImsProContacts;
use Illuminate\Http\Request;
use Carbon\Carbon;

if (! function_exists('app_name')) {
    /**
     * Helper to grab the application name.
     *
     * @return mixed
     */
    function app_name()
    {
        return config('app.name');
    }
}

if (! function_exists('gravatar')) {
    /**
     * Access the gravatar helper.
     */
    function gravatar()
    {
        return app('gravatar');
    }
}

if (! function_exists('home_route')) {
    /**
     * Return the route to the "home" page depending on authentication/authorization status.
     *
     * @return string
     */
    function home_route()
    {
        if (auth()->check()) {
            
            
            if(is_mobile(request()->header('user-agent')) == true){                
                return 'frontend.mobile_view';
            }

            if (auth()->user()->can('view backend')) {
                return 'admin.dashboard';
            }

            return 'frontend.user.dashboard';
        }

        return 'frontend.index';
    }
}

if (!function_exists('isHttps')) {

    function isHttps()
    {
        return !empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS']);
    }
}
        
if (!function_exists('getBaseURL')) {
    function getBaseURL()
    {
        $root = (isHttps() ? "https://" : "http://").$_SERVER['HTTP_HOST'];
        $root .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
        
        return $root;
    }
}
        
        
if (!function_exists('getFileBaseURL')) {
    function getFileBaseURL()
    {
        if(env('FILESYSTEM_DRIVER') == 's3'){
            return env('AWS_URL').'/';
        }
        else {
            return getBaseURL().'';
        }
    }
}

//return file uploaded via uploader
if (!function_exists('uploaded_asset')) {
    function uploaded_asset($id)
    {
        if (($asset = \App\Models\Upload::find($id)) != null) {
            return my_asset($asset->file_name);
        }
        return url('/').'/img/no-image.jpg';
    }
}

if (! function_exists('my_asset')) {
    /**
     * Generate an asset path for the application.
     *
     * @param  string  $path
     * @param  bool|null  $secure
     * @return string
     */
    function my_asset($path, $secure = null)
    {
         return app('url')->asset(''.$path, $secure);        
    }
}

if (! function_exists('get_settings')) {
    /**
     * Return the route to the "home" page depending on authentication/authorization status.
     *
     * @return string
     */
    function get_settings($key)
    {       
        $settings = Settings::where('key',$key)->first();
        if($settings == null){
            return null;
        }else{
            return $settings->value;
        }

    }
}


if (! function_exists('get_seo_result')) {
    /**
     * Return the route to the "home" page depending on authentication/authorization status.
     *
     * @return string
     */
    function get_seo_result($id)
    {
        $projectDetails = Projects::where('id',$id)->first();
        $seoDecode = json_decode($projectDetails->seo_result);
        if($seoDecode == null){
            return null;
        }else{
            return $seoDecode;
        }
    }
}

if (! function_exists('get_issues')) {
    /**
     * Return the route to the "home" page depending on authentication/authorization status.
     *
     * @return string
     */
    function get_issues($project_id,$importance = null)
    {

    }
}

if (! function_exists('is_mobile')) {
    /**
     * Agent Function By Sanjaya Senevirathne - Enspirer
     *
     */
    function is_mobile($agent)
    {
        $stack = preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$agent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($agent,0,4));
        return $stack;
    }
}

if (! function_exists('push_notification')) {
    /**
     * Return the route to the "home" page depending on authentication/authorization status.
     *
     * @return string
     */
    function push_notification($title, $description, $icon, $url, $user_id)
    {

        $add = new Notification;

        $add->title=$title;
        $add->description=$description;
        $add->icon=$icon;
        $add->url=$url;
        $add->user_id=$user_id;
        $add->status='Pending';

        $add->save();
      
        return 'done';
       
    }
}

if (! function_exists('calcGrowth')) {
    function calcGrowth($current, $previous)
    {
        if ($previous == 0 || $previous == null || $current == 0) {
            return 0;
        }

        return $result = (($current - $previous) / $previous * 100);
    }

}

if (! function_exists('formatFlag')) {
    function formatFlag($value)
    {
        $country = explode(':', $value);

        if (isset($country[0]) && !empty($country[0])) {
            // Return the country code
            return strtolower($country[0]);
        } else {
            return 'unknown';
        }
    }
}
if (! function_exists('formatTitle')) {
    function formatTitle($value = null)
    {
        if (is_array($value)) {
            return implode(" - ", $value);
        }

        return $value;
    }
}

if (! function_exists('formatBrowser')) {
    function formatBrowser($key)
    {
        $browsers = [
            'Chrome' => 'chrome',
            'Chromium' => 'chromium',
            'Firefox' => 'firefox',
            'Firefox Mobile' => 'firefox',
            'Edge' => 'edge',
            'Internet Explorer' => 'ie',
            'Mobile Internet Explorer' => 'ie',
            'Vivaldi' => 'vivaldi',
            'Brave' => 'brave',
            'Safari' => 'safari',
            'Opera' => 'opera',
            'Opera Mini' => 'opera',
            'Opera Mobile' => 'opera',
            'Opera Touch' => 'operatouch',
            'Yandex Browser' => 'yandex',
            'UC Browser' => 'ucbrowser',
            'Samsung Internet' => 'samsung',
            'QQ Browser' => 'qq',
            'BlackBerry Browser' => 'bbbrowser',
            'Maxthon' => 'maxthon'
        ];

        if (array_key_exists($key, $browsers)) {
            return $browsers[$key];
        } else {
            return 'unknown';
        }
    }
}

if (! function_exists('formatOperatingSystem')) {
    function formatOperatingSystem($key)
    {
        $operatingSystems = [
            'Windows' => 'windows',
            'Linux' => 'linux',
            'Ubuntu' => 'ubuntu',
            'Windows Phone' => 'windows',
            'iOS' => 'apple',
            'OS X' => 'apple',
            'FreeBSD' => 'freebsd',
            'Android' => 'android',
            'Chrome OS' => 'chromeos',
            'BlackBerry OS' => 'bbos',
            'Tizen' => 'tizen',
            'KaiOS' => 'kaios',
            'BlackBerry Tablet OS' => 'bbos'
        ];

        if (array_key_exists($key, $operatingSystems)) {
            return $operatingSystems[$key];
        } else {
            return 'unknown';
        }
    }
}


if (! function_exists('is_ims_pro_admin')) {
    /**
     * Return the route to the "home" page depending on authentication/authorization status.
     *
     * @return string
     */
    function is_ims_pro_admin($id)
    {
        $is_ims_pro_admin = IMSProUsers::where('status','Enabled')
            ->where('id',$id)
            ->where('role','admin')
            ->first();
        if($is_ims_pro_admin){
            return $is_ims_pro_admin;
        }
        else{
            return null;
        }
    }
}

if (! function_exists('is_ims_pro_agent')) {
    /**
     * Return the route to the "home" page depending on authentication/authorization status.
     *
     * @return string
     */
    function is_ims_pro_agent($id)
    {
        $is_ims_pro_agent = IMSProUsers::where('status','Enabled')
            ->where('id',$id)
            ->where('role','agent')
            ->first();
        if($is_ims_pro_agent){
            return $is_ims_pro_agent;
        }
        else{
            return null;
        }
    }
}


if (! function_exists('is_mobile')) {
    /**
     * Agent Function By Sanjaya Senevirathne - Enspirer
     *
     */
    function is_mobile($agent)
    {
        $stack = preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$agent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($agent,0,4));
        return $stack;
    }
}


if (! function_exists('get_contact_info')) {
    /**
     * Return the route to the "home" page depending on authentication/authorization status.
     *
     * @return string
     */
    function get_contact_info($phone_number)
    {       
        $contact_info = ImsProContacts::where('phone_number',$phone_number)->first();
        if($contact_info == null){
            return null;
        }else{
            return $contact_info->name;
        }

    }
}

if (! function_exists('is_wa_group')) {
    /**
     * Return the route to the "home" page depending on authentication/authorization status.
     *
     * @return string
     */
    function is_wa_group($phone_number)
    {
       if(strlen($phone_number) > 13){
           return 'Group Message';
       }else{
           return $phone_number;
       }

    }
}


//strlen($str)


if (! function_exists('whatsapp_server_status')) {
    /**
     * Return the route to the "home" page depending on authentication/authorization status.
     *
     * @return string
     */
    function whatsapp_server_status($project_id)
    {       

        $widget_ims_pro = Widgets::where('project_id',$project_id)->where('widget_type','IMS Pro')->first();

        if($widget_ims_pro != null){

            if($widget_ims_pro->end_point_settings != null){
                return [
                    'server_endpoint' => $widget_ims_pro->end_point_settings,
                    'connection_status' => $widget_ims_pro->connection_status,
                    'server_type' => 'dedicated_server'
                ];
            }
            else{

                $settings_server = get_settings('default_whatsapp_server');
                $settings_status = get_settings('default_wa_server_auth_status');

                if($settings_server == null ){
                    return [
                        'server_endpoint' => null,
                        'connection_status' => null,
                        'server_type' => 'default_server'
                    ];
                }
                else{
                    return [
                        'server_endpoint' => $settings_server,
                        'connection_status' => $settings_status,
                        'server_type' => 'default_server'
                    ];
                }

            }
            
        }
        else{
            return 'IMS Pro Not Activated';
        }


    }
}


if (! function_exists('get_expire_date')) {
    /**
     * Return the route to the "home" page depending on authentication/authorization status.
     *
     * @return string
     */
    function get_expire_date($project_id)
    {       

        $project = Projects::where('id',$project_id)->first();
        // dd($project);

        if($project->expire_date == null){
            return [
                'package_available_days' => null,
                'selected_package' => null,
                'package_type' => null,
                'package_starting_date' => null,
                'expire_date' => null,
                'remaining_days' => null,
                'project_name' => $project->name
            ];
            
        }else{

            $remaining_days = Carbon::now()->diffInDays(Carbon::parse($project->expire_date));
            // dd($remaining_days);

            return [
                'package_available_days' => $project->package_available_days,
                'selected_package' => $project->selected_package,
                'package_type' => $project->package_type,
                'package_starting_date' => $project->package_starting_date,
                'expire_date' => $project->expire_date,
                'remaining_days' => $remaining_days,
                'project_name' => $project->name
            ];
        }

    }
}


