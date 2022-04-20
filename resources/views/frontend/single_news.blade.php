@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<link rel="stylesheet" href="{{url('css/news.css')}}">
    
@include('frontend.includes.home_nav')

<div class="section-singleNews">
    <div class="container">
        <div class="inner-wrapper">
            <img src="{{uploaded_asset($post_details->feature_image)}}" alt="" class="feature-img">
            <div class="content-block">
                <!-- <h2 class="title-light">Introducing</h2> -->
                <h2 class="title">{{$post_details->title}}</h2>
                <p class="text">{!!$post_details->description!!}</p>
            </div>
        </div>
    </div>
</div>

@include('frontend.includes.footer')

    
@endsection