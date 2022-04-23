<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TallentorDemo;

class DemoController extends Controller
{
    public function tallentor_demo() {
        return view('frontend.tallentor_demo');
    }

    public function tallentor_demo_store(Request $request)
    {        
        // dd($request);

        $add = new TallentorDemo;

        $add->name=$request->name;
        $add->time=$request->time;
        $add->date=$request->date;
        $add->phone=$request->phone;
        $add->status='Pending'; 

        $add->save();

        return back()->with([
            'success' => 'success'
        ]);  

    }

}
