<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function heatmap()
    {
        return view('frontend.user.test_heatmap.index');
    }

    public function index($id,Request $request)
    {
        // repalce venue info in the javascript as an object
        $data_pan = [
            'widget_name' => 'WhatApp Chat Function',
            'widget_id' => 'I993SEQ',
            'clint_key' => 'SDFJ238jdjsdKSEEJD',
            'type' => 'whatsapp_chat',
            'header' => 'IM Online',
        ];

        return response()
            ->view('frontend.static_widget.js_embered', ['data_pan' => $data_pan])
            ->withHeaders([
                'Content-Type' => 'application/javascript',
                'X-Venue-ID' => 'function_api'
            ]);
    }

    public function testblade( Request $request)
    {
        return view('frontend.testblade');
    }
}
