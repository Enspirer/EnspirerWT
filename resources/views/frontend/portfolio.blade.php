@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<link rel="stylesheet" href="{{url('css/portfolio.css')}}">
    
@include('frontend.includes.home_nav')

<section class="hero-section">
    <div class="container">
        <div class="inner-wrapper">
            <div class="content-block">
                <h1 class="title"><span>Design. Integrate. Convert</span> <br>
                We believe in customer focused unique experiences</h1>
                <p class="text">Here are few hand picked projects.</p>
                <div class="image-block">
                    <img src="{{url('images/portfolio/Group 557.png')}}" alt="">
                </div>
            </div>
            <div class="image-block">
                <img src="{{url('images/portfolio/Group 757.png')}}" alt="">
            </div>
        </div>
    </div>
</section>

<section class="portfolio-section">
    <div class="container">
        <h2 class="title">Portfolio</h2>
        <div class="row g-4">
            <div class="portfolio-block col-md-6 col-12">
                <div class="image-block">
                    <img src="{{url('images/portfolio/Group 761.png')}}" alt="">
                </div>
                <div class="content-block">
                    <div class="text">Full system integrate</div>
                    <h5 class="title">Lanka Tiles Website</h5>
                </div>
            </div>
            <div class="portfolio-block col-md-6 col-12">
                <div class="image-block">
                    <img src="{{url('images/portfolio/Ceylon Beatz 2.png')}}" alt="">
                </div>
                <div class="content-block light">
                    <div class="text">Full system integrate</div>
                    <h5 class="title">Ceylon Beatz</h5>
                </div>
            </div>
            <div class="portfolio-block col-md-3 col-12">
                <div class="image-block">
                    <img src="{{url('images/portfolio/SkyCard.png')}}" alt="">
                </div>
                <div class="content-block">
                    <div class="text"></div>
                    <h5 class="title"></h5>
                </div>
            </div>
            <div class="portfolio-block col-md-6 col-12">
                <div class="image-block">
                    <img src="{{url('images/portfolio/Group 759.png')}}" alt="">
                </div>
                <div class="content-block">
                    <div class="text">Full system integrate</div>
                    <h5 class="title">Hotel Sapphire</h5>
                </div>
            </div>
            <div class="portfolio-block col-md-3 col-12">
                <div class="image-block">
                    <img src="{{url('images/portfolio/Component 2 – 1.png')}}" alt="">
                </div>
                <div class="content-block">
                    <div class="text"></div>
                    <h5 class="title"></h5>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.includes.footer')

    
@endsection

