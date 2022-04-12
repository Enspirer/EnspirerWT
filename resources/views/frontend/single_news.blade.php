@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<link rel="stylesheet" href="{{url('css/news.css')}}">
    
@include('frontend.includes.home_nav')

<div class="section-singleNews">
    <div class="container">
        <div class="inner-wrapper">
            <img src="{{url('images/landing_page/news/feature-img-1.png')}}" alt="" class="feature-img">
            <div class="content-block">
                <h2 class="title-light">Introducing</h2>
                <h2 class="title">All in one widgets</h2>
                <p class="text">When you use an application on your mobile phone or smart devices the application connects to the Internet and sends When you use anapplion on your mobile phone or smart devices the application connects to the Internet and sends When you use an When you use an application on your mobile phone or smart devices the application connects to the Internet and sends When you use anapplion on your mobile phone or smart devices the application connects to the Internet and sends When you use an application on your mobile phone or smart devices the application connects to the Internet and sends When you use an application on your mobile phone or smart devices the application connects to the Internet and sends When you use an application on your mobile phone or smart devices the application connects to the Internet and sends When you use anapplion on your mobile phone or smart devices the application connects to the Internet and sends When you use an When you use an application on your mobile phone or smart devices the application connects to the Internet and sends When you use anapplion on your mobile phone or smart devices the application connects to the Internet and sends When you use an application on your mobile phone or smart devices the application connects to the Internet and sends When you use an application on your mobile phone or smart devices the application connects to the Internet and sends</p>
            </div>
        </div>
    </div>
</div>

@include('frontend.includes.footer')

    
@endsection