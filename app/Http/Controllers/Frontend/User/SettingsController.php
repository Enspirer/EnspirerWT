<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Auth\User;


class SettingsController extends Controller
{
    public function index()
    {    
        $user = User::where('id',auth()->user()->id)->first(); 

        return view('frontend.user.settings.index',[
            'user' => $user
        ]);        
    }

    public function profile_details_update(Request $request) 
    {
        // dd($request);
            
        $first_name = request('first_name');
        $last_name = request('last_name');
        $email = request('email');
        $contact_number = request('contact_number');
        $address = request('address');
        $city = request('city');
        $province = request('province');
        $zip_code = request('zip_code');
        $country = request('country');

        $users = DB::table('users') ->where('id', '=', request('hid_id'))->update(
            [
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'contact_number' => $contact_number,
                'address' => $address,
                'city' => $city,
                'province' => $province,
                'zip_code' => $zip_code,
                'country' => $country
            ]
        );

        return back();

    }


}
