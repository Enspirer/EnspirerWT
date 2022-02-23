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
                        <div class="inner-wrapper">
                            <div class="content-block">
                                <h2 class="title">Free WhatsApp <br> widget <br> for website</h2>
                                <h5 class="subtitle">Free WhatsApp Widget</h5>
                                <p class="content">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem
                                    Ipsum has been the industry's dummy text ever since the 1500s, when an unknown
                                    printer
                                    took a galley
                                    of type and scrambled it to make a type specimen book. It has survived not only five
                                    centuries, but
                                    also the leap into electronic typesetting</p>
                                <a href="" class="cta-plain-btn">
                                    <span class="text">Get Started</span>
                                    <i class="bi bi-arrow-right-short"></i>
                                </a>
                            </div>
                            <div class="image-block">
                                <img src="images/Group 549.png" alt="">
                            </div>
                        </div>
                    </div>
                </section>

                <section class="whatsapp-widget">
                    <div class="container">
                        <div class="inner-wrapper">
                            <div class="image-block">
                                <img src="images/Group 550.png" alt="">
                            </div>
                            <div class="content-block">
                                <h2 class="title">Free WhatsApp <br> widget for website</h2>
                                <p class="content">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem
                                    Ipsum has been the industry's dummy text ever since the 1500s,</p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Lorem Ipsum is simply dummy text of the
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> Lorem Ipsum is simply dummy</li>
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
                        <h3 class="title">Why choose Tallentor WhatsApp Widget for
                            your website ?</h3>
                        <h6 class="subtitle">Official WhatsApp Provider.</h6>
                    </div>
                    <div class="feature-block-section">
                        <div class="curves">
                            <img src="images/Path 6503.svg" alt="" class="top-curve">
                            <img src="images/Path 6507.svg" alt="" class="bottom-curve">
                        </div>
                        <div class="feature-block block-1">
                            <div class="content-block">
                                <div class="subtitle-block">
                                    <img src="images/Polygon 1.png" alt="">
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
                                <img src="images/Group 551.png" alt="">
                            </div>
                        </div>
                        <div class="feature-block block-2">
                            <div class="content-block">
                                <div class="curves">
                                    <img src="images/Path 6503.svg" alt="" class="top-curve">
                                    <img src="images/Path 6507.svg" alt="" class="bottom-curve">
                                </div>
                                <div class="subtitle-block">
                                    <img src="images/Polygon 1.png" alt="">
                                    <span class="text">Sub topic have to include here</span>
                                </div>
                                <h2 class="title">Customize your <br> widget as you want</h2>
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
                                <img src="images/Group 552.png" alt="">
                            </div>
                        </div>
                        <div class="feature-block block-3">
                            <div class="content-block">
                                <div class="subtitle-block">
                                    <img src="images/Polygon 1.png" alt="">
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
                                <img src="images/2225.png" alt="">
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>

    @include('frontend.includes.footer')

    
@endsection

