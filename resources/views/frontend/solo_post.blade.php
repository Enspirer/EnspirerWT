@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    
@include('frontend.includes.home_nav')

<link rel="stylesheet" href="{{url('css/contact_us.css')}}">

    <section class="slider-section">
        <div class="container">
           
            <div class="row mt-5 p-3 mb-5"> 
                <div class="col-9">
                    <img src="{{uploaded_asset($post->feature_image)}}" width="100%" style="height:400px; object-fit:cover;"/>
                    <h3 class="mt-4">{{$post->title}}</h3>
                    <p>{{ $post->created_at->format('M d Y') }}</p>
                    
                    <p class="mt-5">{!!$post->description!!}</p>
                </div>


                <div class="col-3"></div>            
            </div>

        </div>
    </section>

    

    @include('frontend.includes.footer')

    
@endsection