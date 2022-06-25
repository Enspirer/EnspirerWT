@extends('frontend.layouts.app')

@section('title', 'The Best whatsapp widget | Web Optimizer | Chatbot | Tallentor')
@section('meta_description','Engage real-time users on your website with the best whatsapp widget integrated with inquiry management system. Increase website performance with Optimizer app. Bulk whatsapp messages | Talent pool remote developers')
@section('content')

@include('frontend.includes.home_nav')

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script async src="https://unpkg.com/typer-dot-js@0.1.0/typer.js"></script>

    <section class="hero-section home">
        <div class="container">
            <div class="splide" id="heroSlider">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="header">
                            <div class="title">Empower your brand with the innovative <br class="des-br"> Digital Marketing <br class="mob-br"> <span class="typer" data-words="ideas,strategies,solutions" data-colors="#fff" data-delay="100" data-deleteDelay="1000"></span></div>
                            <p>Digital Marketing in the UAE <br>At it’s Best</p>
                            </div>
                            <div class="slide-wrapper">
                                <div class="content-block">
                                    <!-- <div class="inner-wrapper uae-wrapper">
                                        <div class="tallentor">Tallentor</div>
                                        <div class="is-now-in">Is now in</div>
                                        <div class="dubai">Dubai</div>
                                    </div> -->
                                </div>
                                <div class="image-block slide-1">
                                    <img src="{{url('images/landing_page/home/hero_slides/main.png')}}" class="back-img">
                                    <!-- <img src="{{url('images/landing_page/home/hero_slides/uae-tile-1.png')}}" class="size-img tile tile-1">
                                    <img src="{{url('images/landing_page/home/hero_slides/uae-tile-2.png')}}" class="size-img tile tile-2">
                                    <img src="{{url('images/landing_page/home/hero_slides/uae-tile-3.png')}}" class="size-img tile tile-3">
                                    <img src="{{url('images/landing_page/home/hero_slides/uae-tile-4.png')}}" class="size-img tile tile-4"> -->
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="slide-wrapper">
                                <div class="content-block">
                                    <div class="inner-wrapper">
                                        <h2 class="title">Widget <span>Lite</span></h2>
                                        <div class="caption">WhatsApp widget <br> All in one widget</div>
                                        <div class="product">iMS <span class="blue pro-cat">Lite</span></div>
                                        <div class="text blue">Inquiry Management System</div>

                                        <a href="{{url('/tallentor-demo')}}" class="cta-btn-fill"><span class="text">Request Demo</span> <i class="bi bi-arrow-right-short"></i></a>
                                    </div>
                                </div>
                                <div class="image-block slide-2">
                                    <img src="{{url('images/landing_page/home/hero_slides/main.png')}}" class="back-img">
                                    <img src="{{url('images/landing_page/home/hero_slides/slide_1/desktop.png')}}" class="main-img size-img">
                                    <img src="{{url('images/landing_page/home/hero_slides/slide_1/imslite.png')}}" class="imslite-img size-img inL">
                                    <img src="{{url('images/landing_page/home/hero_slides/slide_1/whatsapp.png')}}" class="wapp-img size-img inR10">
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="slide-wrapper">
                                <div class="content-block">
                                    <div class="inner-wrapper">
                                        <h2 class="title">Widget <span>Pro</span></h2>
                                        <div class="caption">All in one widget with <div class="product">iMS <span class="red pro-cat">Pro</span></div> <br> Whatsapp integrated</div>
                                        <div class="product">iMS <span class="red pro-cat">Pro</span></div>
                                        <div class="text">conversation records <br> status reports</div>

                                        <a href="{{url('/tallentor-demo')}}" class="cta-btn-fill"><span class="text">Request Demo</span> <i class="bi bi-arrow-right-short"></i></a>
                                    </div>
                                </div>
                                <div class="image-block slide-3">
                                    <img src="{{url('images/landing_page/home/hero_slides/main.png')}}" class="back-img">
                                    <img src="{{url('images/landing_page/home/hero_slides/slide_2/desktop.png')}}" class="main-img size-img">
                                    <img src="{{url('images/landing_page/home/hero_slides/slide_2/imspro.png')}}" class="imslite-img size-img inL">
                                    <img src="{{url('images/landing_page/home/hero_slides/slide_2/whatsapp.png')}}" class="wapp-img size-img inR10">
                                    <img src="{{url('images/landing_page/home/hero_slides/slide_2/allin1.png')}}" class="allin1-img size-img inR20">
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="slide-wrapper">
                                <div class="content-block">
                                    <div class="inner-wrapper">
                                        <h2 class="title">Optimizer</h2>
                                        <div class="caption">Widget with <div class="product">iMS <span class="red pro-cat">Pro</span></div> <br> User session view <br>HeatMaps</div>
                                        <div class="product blue">Mobile App</div>
                                        <div class="text">Real time visitors <br> Chat invite</div>

                                        <a href="{{url('/tallentor-demo')}}" class="cta-btn-fill"><span class="text">Request Demo</span> <i class="bi bi-arrow-right-short"></i></a>
                                    </div>
                                </div>
                                <div class="image-block slide-4">
                                    <img src="{{url('images/landing_page/home/hero_slides/main.png')}}" class="back-img">
                                    <img src="{{url('images/landing_page/home/hero_slides/slide_3/dashboard.png')}}" class="main-img size-img">
                                    <img src="{{url('images/landing_page/home/hero_slides/slide_3/imspro.png')}}" class="imslite-img size-img inL">
                                    <img src="{{url('images/landing_page/home/hero_slides/slide_3/heatmap.png')}}" class="heatmap-img size-img inR30">
                                    <img src="{{url('images/landing_page/home/hero_slides/slide_3/mobapp.png')}}" class="mobapp-img size-img inR10">
                                    <img src="{{url('images/landing_page/home/hero_slides/slide_3/realtime.png')}}" class="realtime-img size-img inR40">
                                    <img src="{{url('images/landing_page/home/hero_slides/slide_3/record.png')}}" class="record-img size-img inR50">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<section class="marketplace-section">
    <div class="container">
        <div class="inner-wrapper">
            <div class="button-block">
                <div class="content">
                    <h1 class="title">The leading <br> Digital Marketing Agency <br> in the UAE!</h1>
                </div>
            </div>
            <div class="card-block">
                <div class="wrapper">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas praesentium ullam magnam optio, veritatis impedit officia sed, aliquam et est exercitationem eum recusandae suscipit ducimus incidunt itaque similique totam libero, commodi sit consequatur pariatur magni odit. Consectetur dicta enim, cupiditate officiis excepturi laudantium ipsa aliquid voluptatibus unde voluptatem minima iure?</p>
                    <div class="card-section">
                        <div class="market-card">
                            <a href="#">
                                <div class="card-wrapper">
                                    <img src="{{url('images/landing_page/home/market-1.png')}}"  class="card-img">
                                    <div class="title">Digital Marketing</div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam minus laborum, amet commodi sequi quasi?</p>
                                </div>
                            </a>
                        </div>
                        <div class="market-card">
                            <a href="#">
                                <div class="card-wrapper">
                                    <img src="{{url('images/landing_page/home/market-2.png')}}"  class="card-img">
                                    <div class="title">Software Development</div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam minus laborum, amet commodi sequi quasi?</p>
                                </div>
                            </a>
                        </div>
                        <div class="market-card">
                            <a href="#">
                                <div class="card-wrapper">
                                    <img src="{{url('images/landing_page/home/market-3.png')}}"  class="card-img">
                                    <div class="title">Mobile App Development</div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam minus laborum, amet commodi sequi quasi?</p>
                                </div>
                            </a>
                        </div>
                        <div class="market-card">
                            <a href="#">
                                <div class="card-wrapper">
                                    <img src="{{url('images/landing_page/home/market-4.png')}}"  class="card-img">
                                    <div class="title">Web Application Development</div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam minus laborum, amet commodi sequi quasi?</p>
                                </div>
                            </a>
                        </div>
                        <div class="market-card">
                            <a href="#">
                                <div class="card-wrapper">
                                    <img src="{{url('images/landing_page/home/market-5.png')}}"  class="card-img">
                                    <div class="title">Whatsapp Widget</div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam minus laborum, amet commodi sequi quasi?</p>
                                </div>
                            </a>
                        </div>
                        <div class="market-card">
                            <a href="#">
                                <div class="card-wrapper">
                                    <img src="{{url('images/landing_page/home/market-6.png')}}"  class="card-img">
                                    <div class="title">Web Optimizer app</div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam minus laborum, amet commodi sequi quasi?</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <section class="feature-section">
        <div class="container">
            <div class="header">
                <h3 class="title">Turn website visitors into customers</h3>
                <span class="text">Delivering exceptional performance & conversions. Fully customizable chat widgets with popular messaging apps, Ready to go solutions to
                    grow your business faster</span>
            </div>
            <div class="body">
                <div class="feature-box">
                    <div class="inner-wrapper">
                        <div class="content-block">
                            <div class="header">
                                <div class="title"><img src="{{url('images/landing_page/home/whatsapp-blue.png')}}"  width="30"> WhatsApp Widget</div>
                                <span class="text">Integrate the most popular communication channel into your website and improve your customer service quality and sales conversion.</span>
                            </div>
                            <ul class="features">
                                <li><i class="bi bi-check-circle-fill"></i>Customisable ready to use widget</li>
                                <li><i class="bi bi-check-circle-fill"></i>Inquiry Management System - IMS</li>
                            </ul>
                        </div>
                        <div class="image-block">
                            <img src="{{url('images/landing_page/home/whatsapp-widget.png')}}" >
                        </div>
                    </div>
                    <div class="button-block">
                        <a href="{{url('register')}}" class="cta-btn-border"><span class="text">Get Started</span> <i class="bi bi-arrow-right-short"></i></a>
                        <a href="{{url('contact')}}" class="cta-btn-fill"><span class="text">Inquire Now</span> <i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
                <div class="feature-box">
                    <div class="inner-wrapper">
                        <div class="content-block">
                            <div class="header">
                                <div class="title"><img src="{{url('images/landing_page/home/open-menu.png')}}"  width="30"> All-in-One chat</div>
                                <span class="text">Giving the customer maximum flexibility to choose the mode they like to contact you, with a super easy interface.</span>
                            </div>
                            <ul class="features">
                                <li><i class="bi bi-check-circle-fill"></i>Pick and choose the channels</li>
                                <li><i class="bi bi-check-circle-fill"></i>Quick integration with IMS option.</li>
                            </ul>
                        </div>
                        <div class="image-block">
                            <img src="{{url('images/landing_page/home/all-in-one-chat.png')}}" >
                        </div>
                    </div>
                    <div class="button-block">
                        <a href="{{url('register')}}" class="cta-btn-border"><span class="text">Get Started</span> <i class="bi bi-arrow-right-short"></i></a>
                        <a href="{{url('contact')}}" class="cta-btn-fill"><span class="text">Inquire Now</span> <i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="IMS-section">
        <div class="container">
            <div class="heading">iMS <span class="pro-cat">Pro</span></div>
            <h2 class="title">The Inquiry Management System</h2>
            <span class="text">Keep track of all inquiries with status updates & Sales Reports</span>
            <div class="card-block">
                <div data-aos-easing="ease" data-aos="flip-right" class="card">
                    <img src="{{url('images/landing_page/home/ims_admin.png')}}" >
                    <div class="text">Admin dashboard with user privileges management</div>
                </div>
                <div data-aos-easing="ease" data-aos="flip-right" data-aos-delay="300" class="card">
                    <img src="{{url('images/landing_page/home/ims_analytics.png')}}" >
                    <div class="text">Analytics of the inquiry process with reports</div>
                </div>
                <div data-aos-easing="ease" data-aos="flip-right" data-aos-delay="600" class="card">
                    <img src="{{url('images/landing_page/home/ims_record.png')}}" >
                    <div class="text">Record of the full status of the inquiry with comments</div>
                </div>
                <div data-aos-easing="ease" data-aos="flip-right" data-aos-delay="900" class="card">
                    <img src="{{url('images/landing_page/home/ims_assign.png')}}" >
                    <div class="text">Assign the inquiry to relevant department</div>
                </div>
            </div>
            <div class="image-block">
                <img src="{{url('images/landing_page/home/ims-section/ims-background.png')}}" class="back-img">
                <img data-aos-easing="ease" data-aos="fade-right" src="{{url('images/landing_page/home/ims-section/monitor.png')}}" class="main-img size-img">
                <img data-aos-easing="ease" data-aos="fade-left" data-aos-delay="300" src="{{url('images/landing_page/home/ims-section/dashboard.png')}}" class="dashboard-img size-img">
                <img data-aos-easing="ease" data-aos="zoom-in" data-aos-delay="600" src="{{url('images/landing_page/home/ims-section/arrow.svg')}}" class="arrow-img size-img">
                <img data-aos-easing="ease" data-aos="zoom-in" data-aos-delay="900" src="{{url('images/landing_page/home/ims-section/blue-leaves.svg')}}" class="bLeaves-img size-img">
                <img data-aos-easing="ease" data-aos="zoom-in" data-aos-delay="900" src="{{url('images/landing_page/home/ims-section/yellow-leaves.svg')}}" class="yLeaves-img size-img">
            </div>
            <div class="button-block">
                <a href="{{url('tallentor-demo')}}" class="cta-btn-border">
                    <span class="text">Request Demo</span>
                    <i class="bi bi-arrow-right-short"></i>
                </a>
                <a href="{{url('contact')}}" class="cta-btn-fill">
                    <span class="text">Inquire now</span>
                    <i class="bi bi-arrow-right-short"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="section-optimizer">
        <div class="header">
            <div class="title">Tallentor Optimizer</div>
            <div class="subtitle">Keep track of all inquiries with status updates & Sales Reports</div>
        </div>
        <div class="subcription-block">
            <div class="active-overlay animate__animated animate__fadeIn">
                <div class="button-block">
                    <div class="btn-group">
                        <button type="button" class="act-btn ims-lite">
                            <i class="bi bi-file-earmark-text"></i>
                            <div class="text">iMS Lite</div>
                        </button>
                        <button type="button" class="act-btn">
                            <i class="bi bi-gear"></i>
                            <div class="text">Settings</div>
                        </button>
                        <button type="button" class="act-btn">
                            <i class="bi bi-code-slash"></i>
                            <div class="text">Add Script</div>
                        </button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="act-btn delete">
                            <i class="bi bi-trash"></i>
                            <div class="text">Delete</div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="content-block">
                <div class="widget-block">
                    <img src="{{url('images/dashboard/subscriptions/ims-pro.png')}}"  class="widget-img">
                    <div class="content">
                        <div class="title">Desktop</div>
                        <ul class="options">
                            <li class="list-item">
                                <i class="bi green bi-check-circle-fill"></i>
                                <div class="text">Realtime View + Invites</div>
                            </li>
                            <li class="list-item">
                                <i class="bi green bi-check-circle-fill"></i>
                                <div class="text">Analytics Center</div>
                            </li>
                            <li class="list-item">
                                <i class="bi green bi-check-circle-fill"></i>
                                <div class="text">SEO Reports</div>
                            </li>
                            <li class="list-item">
                                <i class="bi green bi-check-circle-fill"></i>
                                <div class="text">Session Recording</div>
                            </li>
                            <li class="list-item">
                                <i class="bi green bi-check-circle-fill"></i>
                                <div class="text">Heatmaps</div>
                            </li>
                            <li class="list-item">
                                <i class="bi green bi-check-circle-fill"></i>
                                <div class="text">Security</div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="widget-block">
                    <img src="{{url('images/dashboard/subscriptions/mobile-app.png')}}"  class="widget-img">
                    <div class="content">
                        <div class="title">Mobile</div>
                        <ul class="options">
                            <li class="list-item">
                                <i class="bi green bi-check-circle-fill"></i>
                                <div class="text">Realtime View</div>
                            </li>
                            <li class="list-item">
                                <i class="bi green bi-check-circle-fill"></i>
                                <div class="text">Visitor Invite</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="button-block">
            <a href="{{url('tallentor-demo')}}" class="cta-btn-border">
                <span class="text">Request Demo</span>
                <i class="bi bi-arrow-right-short"></i>
            </a>
            <a href="{{url('contact')}}" class="cta-btn-fill">
                <span class="text">Inquire Now</span>
                <i class="bi bi-arrow-right-short"></i>
            </a>
        </div>
    </section>

    <!-- <section class="SEO-section">
        <div class="container">
            <div class="header">
                <h2 class="title">Keep your website on Top of the Game</h2>
                <span class="text">The All-in-One comprehensive tool to manage Google rankings, <br> site analytics, Cyber security and general performance of the website.</span>
            </div>
            <div class="inner-wrapper">
                <div class="SEO-block">
                    <div class="header">
                        <div class="title"><img src="{{url('images/landing_page/home/seo-icon.png')}}" >SEO</div>
                        <span class="text">The power tool to get a comprehensive report to check your website ranking, and performance.<br/> &nbsp;</span>
                    </div>
                    <ul class="features">
                        <li><i class="bi bi-check-circle-fill"></i>Recommendations for the issues</li>
                        <li><i class="bi bi-check-circle-fill"></i>Expert team to enhance performance</li>
                    </ul>
                    <div class="image-block">
                        <img src="{{url('images/landing_page/home/seo.png')}}" >
                    </div>
                    <a href="{{url('contact')}}" class="cta-btn-border"><span class="text">Get Started</span> <i class="bi bi-arrow-right-short"></i></a>
                </div>
                <div class="SEO-block">
                    <div class="header">
                        <div class="title"><img src="{{url('images/landing_page/home/analytics-icon.png')}}" >Analytics</div>
                        <span class="text">User engagement and traffic monitoring tool provides with the critical insights of the website for digital marketing</span>
                    </div>
                    <ul class="features">
                        <li><i class="bi bi-check-circle-fill"></i>Reports with insights</li>
                        <li><i class="bi bi-check-circle-fill"></i>User behavior monitoring </li>
                    </ul>
                    <div class="image-block">
                        <img src="{{url('images/landing_page/home/analytics.png')}}" >
                    </div>
                    <a href="{{url('contact')}}" class="cta-btn-border"><span class="text">Get Started</span> <i class="bi bi-arrow-right-short"></i></a>
                </div>
                <div class="SEO-block">
                    <div class="header">
                        <div class="title"><img src="{{url('images/landing_page/home/security-icon.png')}}" >Security</div>
                        <span class="text">The intelligent tool to protect the website from cyber attacks, spam emails and management of  blacklisting.</span>
                    </div>
                    <ul class="features">
                        <li><i class="bi bi-check-circle-fill"></i>Constant monitoring of the website</li>
                        <li><i class="bi bi-check-circle-fill"></i>Alerts and technical assistance</li>
                    </ul>
                    <div class="image-block">
                        <img src="{{url('images/landing_page/home/security.png')}}" >
                    </div>
                    <a href="{{url('contact')}}" class="cta-btn-border"><span class="text">Get Started</span> <i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>
        </div>
    </section> -->


    <section class="shop-section">
        <div class="container">
            <div class="header">
                <h2 class="title">Tallentor Shop</h2>
                <div class="text">Get started in No time with Industry standard ready-to-use solutions</div>
            </div>
            <div class="slider">
                <div class="splide" id="indexSlider">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <a href="{{url('/eshop')}}">
                                    <div class="card">
                                        <div class="image-block">
                                            <img src="{{url('images/landing_page/home/payroll.png')}}"  class="default">
                                        </div>
                                        <div class="content">
                                            <div class="title">Payroll Management Systems</div>
                                            <div class="text">
                                                <ul class="list-block">
                                                    <li><i class="bi bi-check-circle-fill"></i>Customisable options</li>
                                                    <li><i class="bi bi-check-circle-fill"></i>Monthly subscription facility</li>
                                                </ul>
                                            </div>
                                            <div class="rating">
                                                <i class="bi bi-star-fill"></i>
                                                <span class="precentage">4.1</span>
                                                <span class="amount">(1k+)</span>
                                            </div>
                                            <div class="footer">
                                                <div class="fee">From $2000</div>
                                                <div class="period">Fully Customisable</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="splide__slide">
                                <a href="{{url('/eshop')}}">
                                    <div class="card">
                                        <div class="image-block">
                                            <img src="{{url('images/landing_page/home/ecommerce.png')}}" 
                                                class="default">
                                        </div>
                                        <div class="content">
                                            <div class="title">E-Commerce Solutions</div>
                                            <div class="text">Global payment gateway integrations with customised delivery module</div>
                                            <div class="rating">
                                                <i class="bi bi-star-fill"></i>
                                                <span class="precentage">4.9</span>
                                                <span class="amount">(1k+)</span>
                                            </div>
                                            <div class="footer">
                                                <div class="fee">From $50</div>
                                                <div class="period">Per Month</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="splide__slide">
                                <a href="{{url('/eshop')}}">
                                    <div class="card">
                                        <div class="image-block">
                                            <img src="{{url('images/landing_page/home/multi-vendor.png')}}"  class="default">
                                        </div>
                                        <div class="content">
                                            <div class="title">Multi Vendor Solutions</div>
                                            <div class="text">Customised themes with fully functional multi store module</div>
                                            <div class="rating">
                                                <i class="bi bi-star-fill"></i>
                                                <span class="precentage">4.5</span>
                                                <span class="amount">(1k+)</span>
                                            </div>
                                            <div class="footer">
                                                <div class="fee">From $100</div>
                                                <div class="period">Per Month</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer">
                <a href="{{url('/eshop')}}" class="cta-btn-fill"><span class="text">Visit Shop</span> <i class="bi bi-arrow-right-short"></i></a>
            </div>
        </div>
    </section>

    <section class="news-section">
        <div class="container">
            <div class="header">
                <h2 class="title">Latest at Tallentor</h2>
                <div class="text">New Product releases, Promotions and articles from Tallentor members club</div>
            </div>
            <div class="inner-wrapper">

                @if($news_post != null)
                    <div class="card">
                        <div class="image-block">
                            <img src="{{uploaded_asset($news_post->feature_image)}}" >
                        </div>
                        <div class="content-block">
                            <div class="header">
                                <img src="{{uploaded_asset(Modules\Blog\Entities\Category::where('id',$news_post->category)->first()->image)}}" >
                                <div class="title">{{$news_post->title}}</div>
                            </div>
                            <div class="text">{!! $news_post->description !!}</div>
                        </div>
                        <div class="button-block">
                            <a href="{{route('frontend.latest_news')}}" class="cta-btn-border">
                                <span class="text">View All News</span>
                                <i class="bi bi-arrow-right-short"></i>
                            </a>
                        </div>
                    </div>
                @endif

                @if($promo_post != null)
                    <div class="card">
                        <div class="image-block">
                            <img src="{{uploaded_asset($promo_post->feature_image)}}" >
                        </div>
                        <div class="content-block">
                            <div class="header">
                                <img src="{{uploaded_asset(Modules\Blog\Entities\Category::where('id',$promo_post->category)->first()->image)}}" >
                                <div class="title">{{$promo_post->title}}</div>
                            </div>
                            <div class="text">{!! $promo_post->description !!}</div>
                        </div>
                        <div class="button-block">
                            <a href="{{route('frontend.promotions')}}" class="cta-btn-border">
                                <span class="text">View Promo</span>
                                <i class="bi bi-arrow-right-short"></i>
                            </a>
                        </div>
                    </div>
                @endif

                @if($blog_post != null)
                    <div class="card">
                        <div class="image-block">
                            <img src="{{uploaded_asset($blog_post->feature_image)}}" >
                        </div>
                        <div class="content-block">
                            <div class="header">
                                <img src="{{uploaded_asset(Modules\Blog\Entities\Category::where('id',$blog_post->category)->first()->image)}}" >
                                <div class="title">{{$blog_post->title}}</div>
                            </div>
                            <div class="text">{!! $blog_post->description !!}</div>
                        </div>
                        <div class="button-block">
                            <a href="{{route('frontend.home_blog')}}" class="cta-btn-border">
                                <span class="text">All Articles</span>
                                <i class="bi bi-arrow-right-short"></i>
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    @include('frontend.includes.footer')


@endsection

@push('after-scripts')

<script>
    // nav scroll function
    // document.addEventListener('scroll', function(){
    //     const navigationBar = document.querySelector('.navigation-bar')

    //     if(window.scrollY != 0) {
    //         navigationBar.classList.remove("transparent")
    //     } else if (window.scrollY == 0) {
    //         navigationBar.classList.add("transparent")
    //     } else {
    //         return;
    //     }
    // })
</script>

<!-- Hero Slider -->
<script>
    
const heroSlider = new Splide('#heroSlider', {
    type: 'fade',
    autoplay: false,
    arrows: false,
    rewind: true,
    classes: {
        pagination: 'splide__pagination custom__pagination',
        page: 'splide__pagination__page custom__pagination__page',
    },
}, );

heroSlider.mount();

window.addEventListener('DOMContentLoaded', function () {
    const slideWrapper = document.getElementById('heroSlider')
    const indicator1 = slideWrapper.querySelector('li:nth-child(1) .custom__pagination__page')
    const indicator2 = slideWrapper.querySelector('li:nth-child(2) .custom__pagination__page')
    const indicator3 = slideWrapper.querySelector('li:nth-child(3) .custom__pagination__page')
    const indicator4 = slideWrapper.querySelector('li:nth-child(4) .custom__pagination__page')
    indicator1.textContent = 'Trending';
    indicator2.textContent = 'Widget Lite';
    indicator3.textContent = 'Widget Pro';
    indicator4.textContent = 'Optimizer';
})

// Slider animation
window.addEventListener('DOMContentLoaded', function () {
    const heroSlider = document.getElementById("heroSlider")
    const isActive = heroSlider.querySelectorAll(".splide__slide")

    isActive.forEach(function (slide) {
        const slideConfig = {
            attributes: true
        }

        function callback(mutationList, observer) {
            mutationList.forEach(function (mutation) {
                if (mutation.target.classList.contains("is-active")) {
                    const inL = slide.querySelector(".inL")
                    const inR10 = slide.querySelector(".inR10")
                    const inR20 = slide.querySelector(".inR20")
                    const inR30 = slide.querySelector(".inR30")
                    const inR40 = slide.querySelector(".inR40")
                    const inR50 = slide.querySelector(".inR50")
                    const tile1 = slide.querySelector(".tile-1")
                    const tile2 = slide.querySelector(".tile-2")
                    const tile3 = slide.querySelector(".tile-3")
                    const tile4 = slide.querySelector(".tile-4")

                    if (inL) {
                        inL.classList.add("animate__animated", "animate__fadeInLeft")
                    }

                    if (inR10) {
                        inR10.classList.add("animate__animated", "animate__fadeInRight", "animate__delay-1s")
                    }

                    if (inR20) {
                        inR20.classList.add("animate__animated", "animate__fadeInRight", "animate__delay-2s")
                    }

                    if (inR30) {
                        inR30.classList.add("animate__animated", "animate__fadeIn", "animate__delay-2s")
                    }

                    if (inR40) {
                        inR40.classList.add("animate__animated", "animate__fadeIn", "animate__delay-3s")
                    }

                    if (inR50) {
                        inR50.classList.add("animate__animated", "animate__fadeIn", "animate__delay-4s")
                    }

                    if (tile1) {
                        tile1.classList.add("animate__animated", "animate__flipInY")
                    }

                    if (tile2) {
                        tile2.classList.add("animate__animated", "animate__flipInY", "animate__delay-1s")
                    }

                    if (tile3) {
                        tile3.classList.add("animate__animated", "animate__flipInY", "animate__delay-2s")
                    }

                    if (tile4) {
                        tile4.classList.add("animate__animated", "animate__flipInY", "animate__delay-3s")
                    }

                } else {
                    const sizeImg = slide.querySelectorAll(".size-img")
                    sizeImg.forEach(function (img) {
                        img.classList.remove("animate__animated", "animate__fadeInLeft", "animate__fadeInRight", "animate__fadeIn", "animate__delay-1s", "animate__delay-2s", "animate__delay-3s", "animate__delay-4s", "animate__delay-5s", "animate__flipInY")
                    })
                }
            })
        }

        const observer = new MutationObserver(callback)
        observer.observe(slide, slideConfig)
    })
})

// Slide 1 background
window.addEventListener('DOMContentLoaded', function () {
    const heroSection = document.querySelector(".hero-section.home")
    const slide1 = document.getElementById("heroSlider-slide01")
    const pageNav = heroSection.querySelector(".custom__pagination")

    const options = {
        attributes: true
    }

    function callback(mutationList, observer) {
        mutationList.forEach(function (mutation) {
            if (mutation.target.classList.contains("is-active")) {
                heroSection.classList.remove("svg-back")
                pageNav.classList.add("uae")
            } else {
                heroSection.classList.add("svg-back")
                pageNav.classList.remove("uae")
            }
        })
    }

    const observer = new MutationObserver(callback)
    observer.observe(slide1, options)
})

</script>

<script>
  AOS.init();
</script>

@endpush

