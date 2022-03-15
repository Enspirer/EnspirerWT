@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<link rel="stylesheet" href="{{url('css/services.css')}}">
    
@include('frontend.includes.home_nav')

<section class="hero-section">
    <div class="container">
        <div class="inner-wrapper">
            <div class="content-block">
                <img src="{{url('images/services/01.png')}}" alt="" class="order-no">
                <h1>Express Web</h1>
                <h2 class="title">Built it, the way <br> you want</h2>
                <p class="text">The fastest way create your online presence in few hours on Drag &amp; Drop method <strong>Without coding</strong></p>
                <a href="#" class="cta-btn-border"><span class="text">Inquire Now</span> <i class="bi bi-arrow-right-short"></i></a>
            </div>
            <div class="image-block">
                <img src="{{url('images/services/5721524-02.png')}}" alt="">
            </div>
        </div>
    </div>
</section>

<section class="enterprise-section">
    <div class="container">
        <div class="inner-wrapper">
            <div class="image-block">
                <img src="{{url('images/services/Drag and drop web-02.png')}}" alt="">
            </div>
            <div class="content-block">
                <img src="{{url('images/services/02.png')}}" alt="" class="order-no">
                <h1>Enterprise Web</h1>
                <h2 class="title">Customized Web Applications</h2>
                <p class="text">Build to perfection by a Team of experts with a blend of creativity & technology</p>
                <p class="text">Consult out Expert Centre for a FREE analysis of your system requirements.</p>
                <a href="#" class="cta-btn-border"><span class="text">Talk to Expert Centre</span> <i class="bi bi-arrow-right-short"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="feature-section">
    <div class="container inner-wrapper">
        <div class="feature-block block-3">
            <img src="{{url('images/services/03.png')}}" alt="" class="order-no">
            <div class="image-block">
                <img src="{{url('images/services/cdd-01.png')}}" alt="">
            </div>
            <h4 class="title">Software Development</h4>
            <p class="text">Experienced software developers to work individually or as a part of your team. Save Big with remote working environment, yer achieve the Best results.</p>
            <a href="#" class="cta-btn-border"><span class="text">Inquire Now</span> <i class="bi bi-arrow-right-short"></i></a>
        </div>
        <div class="feature-block block-4">
            <img src="{{url('images/services/04.png')}}" alt="" class="order-no">
            <div class="image-block">
                <img src="{{url('images/services/xcxcx-01.png')}}" alt="">
            </div>
            <h4 class="title">Mobile App Development</h4>
            <p class="text">Hire the industry experts to bring your idea into reality. Dedicated Android & iOS developers to work on your project</p>
            <a href="#" class="cta-btn-border"><span class="text">Inquire Now</span> <i class="bi bi-arrow-right-short"></i></a>
        </div>
        <div class="feature-block block-5">
            <img src="{{url('images/services/05.png')}}" alt="" class="order-no">
            <div class="image-block">
                <img src="{{url('images/services/sfsf-01.png')}}" alt="">
            </div>
            <h4 class="title">Digital Marketing</h4>
            <p class="text">SEO experts, Social media strategists and creative designers all under one package with a dedicated account manager</p>
            <a href="#" class="cta-btn-border"><span class="text">Inquire Now</span> <i class="bi bi-arrow-right-short"></i></a>
        </div>
        <div class="feature-block block-6">
            <img src="{{url('images/services/06.png')}}" alt="" class="order-no">
            <div class="image-block">
                <img src="{{url('images/services/SEO-01.png')}}" alt="">
            </div>
            <h4 class="title">Search Engine Optimisation</h4>
            <p class="text">Put your website ahead of your competitors organically. Tallentor SEO tool will scan through the website and generate a report in minutes and our SEO specialists will give you a plan to get you on track fast.</p>
            <a href="#" class="cta-btn-border"><span class="text">Inquire Now</span> <i class="bi bi-arrow-right-short"></i></a>
        </div>
        <div class="feature-block block-7">
            <img src="{{url('images/services/08.png')}}" alt="" class="order-no">
            <div class="image-block">
                <img src="{{url('images/services/Analytics-01.png')}}" alt="">
            </div>
            <h4 class="title">Search Engine Marketing</h4>
            <p class="text">The fastest method to get your website visibility on search engines. We will make sure every penny spent wisely with paid digital campaigns with our tested and proven strategies.</p>
            <a href="#" class="cta-btn-border"><span class="text">Inquire Now</span> <i class="bi bi-arrow-right-short"></i></a>
        </div>
    </div>
</section>

@include('frontend.includes.footer')

    
@endsection

