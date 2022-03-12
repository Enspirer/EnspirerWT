@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<link rel="stylesheet" href="{{url('css/product.css')}}">
    
@include('frontend.includes.home_nav')

<div class="products-body">
        <div class="container">
            <div class="inner-container">

                <section class="hero-section">
                    <div class="container">
                    <ul class="breadcrumb">                                            
                            <li class="breadcrumb-item">
                                <a class="breadcrumb-link">Products</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#" class="breadcrumb-link breadcrumb-arrow"><i
                                        class="bi bi-chevron-right"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a class="breadcrumb-link breadcrumb-current">WhatsApp Widget</a>
                            </li>
                        </ul>
                        <div class="inner-wrapper">
                            <div class="content-block">
                                <h2 class="title"><span>WhatsApp</span><br>widget<br> for websites</h2>
                                <p class="content">Integrate the most popular communication channel into your website and improve your customer service quality and sales conversion.</p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Customisable ready to use widget</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Inquiry Management System - IMS</li>
                                </ul>
                                <a href="{{url('login')}}" class="cta-plain-btn">
                                    <span class="text">Get Started</span>
                                    <i class="bi bi-arrow-right-short"></i>
                                </a>
                            </div>
                            <div class="image-block">
                                <img src="{{url('images/products/Group 549.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </section>

                <section class="whatsapp-widget">
                    <div class="container">
                        <div class="inner-wrapper">
                            <div class="image-block">
                                <div class="splide" id="whatsappFeatureSlider">
                                    <div class="splide__track">
                                            <ul class="splide__list">
                                                <li class="splide__slide">
                                                    <img src="{{url('images/products/Group 550.png')}}" alt="">
                                                </li>
                                                <li class="splide__slide">
                                                    <img src="{{url('images/products/Group 552.png')}}" alt="">
                                                </li>
                                            </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="content-block">
                                <h2 class="title">WhatsApp Chat Features</h2>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Customisable chat box
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> Choose prefered position on website</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Choose bubble icon and add text</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Your own welcome message</li>
                                </ul>
                                <a href="" class="cta-outline-btn">
                                    <span class="text">Get Started</span>
                                    <i class="bi bi-arrow-right-short"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="more-about-widget">
                    <div class="header">
                        <h3 class="title">Manage your leads efficiently for better productivity</h3>
                    </div>
                    <div class="feature-block-section">
                        <div class="curves">
                            <img src="{{url('images/products/Path 6503.svg')}}" alt="" class="top-curve">
                            <img src="{{url('images/products/Path 6507.svg')}}" alt="" class="bottom-curve">
                        </div>
                        <div class="feature-block block-1">
                            <div class="content-block">
                                <div class="subtitle-block">
                                    <img src="{{url('images/products/Polygon 1.png')}}" alt="">
                                    <span class="text">Convert visitors into customers</span>
                                </div>
                                <h2 class="title">Inquiry Management System</h2>
                                <div class="content">
                                    <ul>
                                        <li><i class="bi bi-check-circle-fill"></i> Admin dashboard with user privileges management</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Assign the inquiry to relevant department</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Record of the full status of the inquiry with comments</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Analytics of the inquiry management process with reports</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="image-block">
                                <img src="{{url('images/landing_page/products/whatsapp_widget/ims.png')}}" alt="">
                            </div>
                        </div>
                        <div class="feature-block block-2">
                            <div class="content-block">
                                <div class="curves">
                                    <img src="{{url('images/products/Path 6503.svg')}}" alt="" class="top-curve">
                                    <img src="{{url('images/products/Path 6507.svg')}}" alt="" class="bottom-curve">
                                </div>
                                <div class="subtitle-block">
                                    <img src="{{url('images/products/Polygon 1.png')}}" alt="">
                                    <span class="text">Never miss a valuable lead</span>
                                </div>
                                <h2 class="title">The tool that marketing team Loves</h2>
                                <p class="content">It makes everybody's life easier with insights of the leads and funnel management</p>
                            </div>
                            <div class="image-block">
                                <img src="{{url('images/products/Group 551.png')}}" alt="">
                            </div>
                        </div>
                        <div class="feature-block block-3">
                            <!-- <div class="content-block">
                                <div class="subtitle-block">
                                    <img src="{{url('images/products/Polygon 1.png')}}" alt="">
                                    <span class="text">Sub topic have to include here</span>
                                </div>
                                <h2 class="title">Team inbox for <br> WhatsApp</h2>
                                <p class="content">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been
                                    the industry's dummy text ever since the 1500s, when an unknown printer took a
                                    galley of type
                                    and scrambled it to make a type specimen book. It has survived not only five
                                    centuries, but also
                                    the leap
                                </p>
                            </div>
                            <div class="image-block">
                                <img src="{{url('images/products/2225.png')}}" alt="">
                            </div> -->
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>

    @include('frontend.includes.footer')

    
@endsection

