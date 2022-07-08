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
                        <li class="splide__slide" data-splide-interval="7000">
                            <div class="header">
                            <div class="title">Empower your brand with the innovative <br class="des-br"> Digital Marketing <br class="mob-br"> <span class="typer" data-words="ideas,strategies,solutions" data-colors="#fff" data-delay="100" data-deleteDelay="1000"></span></div>
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
                        <li class="splide__slide" data-splide-interval="3000">
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
                        <li class="splide__slide" data-splide-interval="3000">
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
                        <li class="splide__slide" data-splide-interval="3000">
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
                </div>
                <div class="card-block">
                    <div class="wrapper">
                        <div class="text-block">
                            <h1 class="title">THE CREATIVE <br> DIGITAL MARKETING AGENCY <br> IN THE UAE</h1>
                            <p>Building a new brand or enhancing the existing customer base of a business is extremely challenging in competitive industries. With  creatively crafted and wisely selected strategies any business can thrive in the digital space. <br><br> Our trained specialists will make sure they understand your business  goals precisely and  Advise you with the best digital plan, from developing your website or mobile app, Social media marketing, SEO services, and lead generation campaigns with the best possible growth of your business.</p>
                            <div class="buttons">
                                <button class="cta-btn-border" data-bs-toggle="modal" data-bs-target="#consultationModal">
                                    <span class="text">Free consultation</span>
                                </button>
                                <button class="cta-btn-fill" data-bs-toggle="modal" data-bs-target="#quoteFormModal">
                                    <span class="text">Request Quote</span>
                                </button>
                            </div>
                        </div>
                        <div class="card-section">
                            <div class="market-card">
                                <a href="{{url('services/marketplace')}}">
                                    <div class="card-wrapper">
                                        <img src="{{url('images/landing_page/home/market-1.png')}}"  class="card-img">
                                        <div class="title">Digital Marketing</div>
                                        <p>For any business to thrive in modern digital world, needs an exceptional digital strategy.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="market-card">
                                <a href="{{url('services/marketplace')}}">
                                    <div class="card-wrapper">
                                        <img src="{{url('images/landing_page/home/market-2.png')}}"  class="card-img">
                                        <div class="title">Software Development</div>
                                        <p>Fully customized web based software to cater specific needs of your business</p>
                                    </div>
                                </a>
                            </div>
                            <div class="market-card">
                                <a href="{{url('services/marketplace')}}">
                                    <div class="card-wrapper">
                                        <img src="{{url('images/landing_page/home/market-3.png')}}"  class="card-img">
                                        <div class="title">Mobile App Development</div>
                                        <p>Custom mobile apps and IoT solutions to interact customers with your services.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="market-card">
                                <a href="{{url('services/marketplace')}}">
                                    <div class="card-wrapper">
                                        <img src="{{url('images/landing_page/home/market-4.png')}}"  class="card-img">
                                        <div class="title">Web Application Development</div>
                                        <p>From eCommerce solutions to comprehensive web portals to manage complex business needs</p>
                                    </div>
                                </a>
                            </div>
                            <div class="market-card">
                                <a href="{{url('services/marketplace')}}">
                                    <div class="card-wrapper">
                                        <img src="{{url('images/landing_page/home/market-5.png')}}"  class="card-img">
                                        <div class="title">Whatsapp Widget</div>
                                        <p>Integrate whatsapp chat to your website with inquiry management system for effective communication</p>
                                    </div>
                                </a>
                            </div>
                            <div class="market-card">
                                <a href="{{url('services/marketplace')}}">
                                    <div class="card-wrapper">
                                        <img src="{{url('images/landing_page/home/market-6.png')}}"  class="card-img">
                                        <div class="title">Web Optimizer app</div>
                                        <p>Monitor and enhance the performance of your website with powerful optimizer app</p>
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

    <!-- Modals -->
    
    <div class="modal fade" id="quoteFormModal" tabindex="-1" aria-labelledby="quoteFormModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-inner-wrapper">
                    <div class="image-block">
                        <img src="{{url('images/landing_page/home/quote-form.png')}}">
                    </div>
                    <div class="content-block">
                        <form action="{{route('frontend.request_quote.store')}}" method="post" class="contact-form" enctype="multipart/form-data">
                        {{csrf_field()}}

                            @if(session()->has('request_quote_error'))
                                <div class="alert alert-danger">
                                    {{ session()->get('request_quote_error') }}
                                </div>
                            @endif
                            <i class="bi bi-x-lg" data-bs-dismiss="modal" aria-label="Close"></i>
                            <div class="title">Request Quote</div>
                            <div class="row g-2 mt-3">
                                <div class="col-12">
                                    <label class="form-label">Full Name: </label>
                                    <input type="text" class="form-control" name="quote_name" value="{{old('quote_name')}}" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Email: </label>
                                    <input type="email" class="form-control" name="quote_email" value="{{old('quote_email')}}" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">phone: </label>
                                    <input type="tel" class="form-control" name="quote_phone" value="{{old('quote_phone')}}" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Country: </label>
                                    <select class="form-select" name="country" id="country" required>
                                        <option value="" selected disabled>Choose...</option>
                                        <option value="" selected disabled hidden>Choose Country</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bonaire">Bonaire</option>
                                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Canary Islands">Canary Islands</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Channel Islands">Channel Islands</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos Island">Cocos Island</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote DIvoire">Cote DIvoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Curaco">Curacao</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands">Falkland Islands</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Ter">French Southern Ter</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Great Britain">Great Britain</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Hawaii">Hawaii</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="India">India</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea North">Korea North</option>
                                        <option value="Korea Sout">Korea South</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia">Macedonia</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Midway Islands">Midway Islands</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Nambia">Nambia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                        <option value="Nevis">Nevis</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau Island">Palau Island</option>
                                        <option value="Palestine">Palestine</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Phillipines">Philippines</option>
                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="St Barthelemy">St Barthelemy</option>
                                        <option value="St Eustatius">St Eustatius</option>
                                        <option value="St Helena">St Helena</option>
                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                        <option value="St Lucia">St Lucia</option>
                                        <option value="St Maarten">St Maarten</option>
                                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                        <option value="Saipan">Saipan</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="Samoa American">Samoa American</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Tahiti">Tahiti</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                        <option value="United States of America">United States of America</option>
                                        <option value="Uraguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Vatican City State">Vatican City State</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                        <option value="Wake Island">Wake Island</option>
                                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zaire">Zaire</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Company: </label>
                                    <input type="text" class="form-control" name="quote_company" value="{{old('quote_company')}}" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Brief of your project: </label>
                                    <textarea name="brief_project" class="form-control" id="brief_project" rows="2" required>{{old('brief_project')}}</textarea>
                                </div>
                                <div class="col-12 my-4">
                                    <div class="g-recaptcha" data-callback="checked" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR" ></div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button type="button" class="cta-btn-fill mx-auto" data-bs-dismiss="modal">
                                            <span class="text">Cancel</span>
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button type="submit" class="cta-btn-fill mx-auto">
                                            <span class="text">Submit</span>
                                        </button>
                                    </div>
                                </div>   
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="consultationModal" tabindex="-1" aria-labelledby="consultationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-inner-wrapper">
                    <div class="image-block">
                        <img src="{{url('images/landing_page/home/consultation-form.png')}}">
                    </div>
                    <div class="content-block">
                        <form action="{{route('frontend.consultation.store')}}" method="post" class="contact-form" enctype="multipart/form-data">
                        {{csrf_field()}}

                            @if(session()->has('consultation_error'))
                                <div class="alert alert-danger">
                                    {{ session()->get('consultation_error') }}
                                </div>
                            @endif
                            <i class="bi bi-x-lg" data-bs-dismiss="modal" aria-label="Close"></i>
                            <div class="title">Free Consultation</div>
                            <div class="subtitle">Book your consultation with a Tallentor Expert</div>
                            <div class="row g-2 mt-3">
                                <div class="col-12">
                                    <label class="form-label">Full Name: </label>
                                    <input type="text" class="form-control" name="name" value="{{old('name')}}" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Email: </label>
                                    <input type="email" class="form-control" name="email" value="{{old('email')}}" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">phone: </label>
                                    <input type="tel" class="form-control" name="phone" value="{{old('phone')}}" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Company: </label>
                                    <input type="text" class="form-control" name="company" value="{{old('company')}}" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Date: </label>
                                    <input type="date" class="form-control" name="date" value="{{old('date')}}" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Time: </label>
                                    <input type="time" class="form-control" name="time" value="{{old('time')}}" required>
                                </div>
                                <div class="col-12 my-4">
                                    <div class="g-recaptcha" data-callback="checked" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR" ></div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="consultation_check" name="" required>
                                        <label class="form-check-label" for="consultation_check">
                                            Acceptance * <br> I would like to receive information & updates from Tallentor Digital in relation to my enquiry. I understand that Tallentor will never share my information.
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button type="button" class="cta-btn-fill mx-auto" data-bs-dismiss="modal">
                                            <span class="text">Cancel</span>
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button type="submit" class="cta-btn-fill mx-auto">
                                            <span class="text">Submit</span>
                                        </button>
                                    </div>
                                </div>                               
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@if(\Session::has('index_success'))

    <div class="modal fade form-submit-modal" id="overlay" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" style="width: 90%; max-width: 600px; margin: 0; top: 50%; left: 50%; transform: translate(-50%, -50%) !important;">
            <div class="modal-content" style="background: linear-gradient(60deg, #E4F2FB, #9ACDFF); border: 2px solid #0C75FF; border-radius: 15px;">
                <div class="modal-body" style="display: flex; flex-direction: row; align-items: center; justify-content: center; gap: 30px;">
                    <i class="bi bi-x-lg" data-bs-dismiss="modal" style="position: absolute; top: -15px; right: -15px; color: #fff; font-size: 16px; background-color: rgba(255, 255, 255, 0.5); width: 35px; height: 35px; border-radius: 50%; display: flex; flex-direction: row; justify-content: center; align-items: center; backdrop-filter: blur(5px);"></i>
                    <div class="image-block">
                        <img src="{{url('images/landing_page/contact_us/success.png')}}" alt="modal img">
                    </div>
                    <div class="content-block">
                        <div class="title" style="font-size: 40px; color: #0C75FF; font-weight: 400; margin-bottom: 10px;">Success !</div>
                        <p class="text" style="font-size: 16px; ont-weight 300; margin: 0; color: #333;">Your message submitted successfully.</p>
                        <p class="text" style="font-size: 16px; ont-weight 300; margin: 0; color: #333;">One of our agent will be in touch shortly.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif


@endsection

@push('after-scripts')

<script>
    $(window).on('load', function () {
        $('#overlay').modal('show');
    });
    $("#close-btn").click(function () {
        $('#overlay').modal('hide');
    });
</script>

<script>
    $(document).ready(function () {

        let country = <?php echo json_encode (old('country')) ?>

        $('#country option').each(function (i) {
            if ($(this).val() == country) {
                $(this).attr('selected', 'selected');
            }
        });

    });
</script>

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
    autoplay: true,
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

