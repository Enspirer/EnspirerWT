@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<link rel="stylesheet" href="{{url('css/services.css')}}">
    
@include('frontend.includes.home_nav')

<section class="hero-section">
        <div class="container">
            <div class="content-block">
                <img src="{{url('images/services/01.png')}}" alt="" class="order-no">
                <h2 class="title">Express web</h2>
                <p class="text">build a website in few hours . You can use
                    only drag and drop method for build your
                    own website <strong>Without coding</strong></p>
                <a href="#" class="cta-btn">Inquiry Now <i class="bi bi-arrow-right-short"></i></a>
            </div>
            <div class="image-block">
                <img src="{{url('images/services/5721524-02.png')}}" alt="">
            </div>
        </div>
    </section>

    <section class="enterprise-section">
        <div class="container">
            <div class="image-block">
                <img src="{{url('images/services/Drag and drop web-02.png')}}" alt="">
            </div>
            <div class="content-block">
                <img src="{{url('images/services/02.png')}}" alt="" class="order-no">
                <h2 class="title">Express web</h2>
                <p class="text">Customized web applications Enspirer
                    build a website in few hours . You can use
                    only drag and drop method for build your
                    own website With coding</p>
                <a href="#" class="cta-btn">Inquiry Now <i class="bi bi-arrow-right-short"></i></a>
            </div>
        </div>
    </section>

    <section class="feature-section">
        <div class="container">
            <div class="feature-block block-3">
                <img src="{{url('images/services/03.png')}}" alt="" class="order-no">
                <div class="image-block">
                    <img src="{{url('images/services/cdd-01.png')}}" alt="">
                </div>
                <h4 class="title">Software Development</h4>
                <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's dummy text ever since the 1500s, when an</p>
                <a href="#" class="cta-btn">Inquiry Now <i class="bi bi-arrow-right-short"></i></a>
            </div>
            <div class="feature-block block-4">
                <img src="{{url('images/services/04.png')}}" alt="" class="order-no">
                <div class="image-block">
                    <img src="{{url('images/services/xcxcx-01.png')}}" alt="">
                </div>
                <h4 class="title">Mobile App Development</h4>
                <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's dummy text ever since the 1500s, when an</p>
                <a href="#" class="cta-btn">Inquiry Now <i class="bi bi-arrow-right-short"></i></a>
            </div>
            <div class="feature-block block-5">
                <img src="{{url('images/services/05.png')}}" alt="" class="order-no">
                <div class="image-block">
                    <img src="{{url('images/services/sfsf-01.png')}}" alt="">
                </div>
                <h4 class="title">Digital Marketing</h4>
                <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's dummy text ever since the 1500s, when an</p>
                <a href="#" class="cta-btn">Inquiry Now <i class="bi bi-arrow-right-short"></i></a>
            </div>
            <div class="feature-block block-6">
                <img src="{{url('images/services/06.png')}}" alt="" class="order-no">
                <div class="image-block">
                    <img src="{{url('images/services/SEO-01.png')}}" alt="">
                </div>
                <h4 class="title">Search Engine Optimisation</h4>
                <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's dummy text ever since the 1500s, when an</p>
                <a href="#" class="cta-btn">Inquiry Now <i class="bi bi-arrow-right-short"></i></a>
            </div>
            <div class="feature-block block-7">
                <img src="{{url('images/services/08.png')}}" alt="" class="order-no">
                <div class="image-block">
                    <img src="{{url('images/services/Analytics-01.png')}}" alt="">
                </div>
                <h4 class="title">Search Engine marketing</h4>
                <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's dummy text ever since the 1500s, when an</p>
                <a href="#" class="cta-btn">Inquiry Now <i class="bi bi-arrow-right-short"></i></a>
            </div>
        </div>
    </section>

    @include('frontend.includes.footer')

    
@endsection

