@extends('frontend.layouts.mobile_app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<link rel="stylesheet" href="{{url('css/mobile_main.css')}}">

@include('frontend.mobile.includes.top_nav')

<div class="section-notification">
    <div class="mobile-container">
        <div class="inner-container">
            <div class="notification-block">
                <div class="title">Today</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a href="#" class="list-link active">
                            <img src="{{url('images/mobile/home/profile-picture.png')}}" >
                            <div class="text"><span class="name">Suranga Dinesh</span>
                            Hi, will this item be shipped today ?  Hi, will this item be shipped today ?</div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="list-link">
                            <img src="{{url('images/mobile/home/profile-picture.png')}}" >
                            <div class="text"><span class="name">Suranga Dinesh</span>
                            Hi, will this item be shipped today ?  Hi, will this item be shipped today ?</div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="notification-block">
                <div class="title">Yesterday</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a href="#" class="list-link">
                            <img src="{{url('images/mobile/home/profile-picture.png')}}" >
                            <div class="text"><span class="name">Suranga Dinesh</span>
                            Hi, will this item be shipped today ?  Hi, will this item be shipped today ?</div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="list-link">
                            <img src="{{url('images/mobile/home/profile-picture.png')}}" >
                            <div class="text"><span class="name">Suranga Dinesh</span>
                            Hi, will this item be shipped today ?  Hi, will this item be shipped today ?</div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="list-link">
                            <img src="{{url('images/mobile/home/profile-picture.png')}}" >
                            <div class="text"><span class="name">Suranga Dinesh</span>
                            Hi, will this item be shipped today ?  Hi, will this item be shipped today ?</div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="list-link">
                            <img src="{{url('images/mobile/home/profile-picture.png')}}" >
                            <div class="text"><span class="name">Suranga Dinesh</span>
                            Hi, will this item be shipped today ?  Hi, will this item be shipped today ?</div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="list-link">
                            <img src="{{url('images/mobile/home/profile-picture.png')}}" >
                            <div class="text"><span class="name">Suranga Dinesh</span>
                            Hi, will this item be shipped today ?  Hi, will this item be shipped today ?</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@include('frontend.mobile.includes.bottom_nav')
    
@endsection

@push('after-scripts')

@endpush