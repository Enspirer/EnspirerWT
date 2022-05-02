@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<link rel="stylesheet" href="{{url('css/categories.css')}}">
<link rel="stylesheet" href="{{url('css/services.css')}}">
    
@include('frontend.includes.home_nav')

<section class="section-categories active" id="mainCat">
    <div class="container">
        <div class="header">
            <h2 class="title">Top Categories at Tallentor</h2>
            <div class="text">one place with thousands of creative talents</div>
        </div>
        <div class="row g-4 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1">
            <div class="col">
                <div class="card blue-overlay">
                    <a href="#" class="inner-wrapper" onclick="catviewer('1')">
                        <div class="overlay">
                            <span class="big-circle"></span>
                            <span class="small-circle"></span>
                        </div>
                        <div class="content">
                            <div class="icon-block">
                                <img src="{{url('images/landing_page/marketplace/icons/programming.png')}}" alt="">
                            </div>
                            <div class="title">Programming &
                                Development</div>
                            <div class="resources">3,394
                                <span>EXPERTS</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card green-overlay">
                    <a href="#" class="inner-wrapper" onclick="catviewer('2')">
                        <div class="overlay">
                            <span class="big-circle"></span>
                            <span class="small-circle"></span>
                        </div>
                        <div class="content">
                            <div class="icon-block">
                                <img src="{{url('images/landing_page/marketplace/icons/digital_marketing.png')}}" alt="">
                            </div>
                            <div class="title">Digital Marketing</div>
                            <div class="resources">3,394
                                <span>EXPERTS</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card yellow-overlay">
                    <a href="#" class="inner-wrapper" onclick="catviewer('3')">
                        <div class="overlay">
                            <span class="big-circle"></span>
                            <span class="small-circle"></span>
                        </div>
                        <div class="content">
                            <div class="icon-block">
                                <img src="{{url('images/landing_page/marketplace/icons/graphic_design.png')}}" alt="">
                            </div>
                            <div class="title">Graphic Designing</div>
                            <div class="resources">3,394
                                <span>EXPERTS</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card red-overlay">
                    <a href="#" class="inner-wrapper" onclick="catviewer('4')">
                        <div class="overlay">
                            <span class="big-circle"></span>
                            <span class="small-circle"></span>
                        </div>
                        <div class="content">
                            <div class="icon-block">
                                <img src="{{url('images/landing_page/marketplace/icons/art_craft.png')}}" alt="">
                            </div>
                            <div class="title">Art & Craft</div>
                            <div class="resources">3,394
                                <span>EXPERTS</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card yellow-overlay">
                    <a href="#" class="inner-wrapper" onclick="catviewer('5')">
                        <div class="overlay">
                            <span class="big-circle"></span>
                            <span class="small-circle"></span>
                        </div>
                        <div class="content">
                            <div class="icon-block">
                                <img src="{{url('images/landing_page/marketplace/icons/translate.png')}}" alt="">
                            </div>
                            <div class="title">Writing & Translation</div>
                            <div class="resources">3,394
                                <span>EXPERTS</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card red-overlay">
                    <a href="#" class="inner-wrapper" onclick="catviewer('6')">
                        <div class="overlay">
                            <span class="big-circle"></span>
                            <span class="small-circle"></span>
                        </div>
                        <div class="content">
                            <div class="icon-block">
                                <img src="{{url('images/landing_page/marketplace/icons/video.png')}}" alt="">
                            </div>
                            <div class="title">Video & Photography</div>
                            <div class="resources">3,394
                                <span>EXPERTS</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card green-overlay">
                    <a href="#" class="inner-wrapper" onclick="catviewer('7')">
                        <div class="overlay">
                            <span class="big-circle"></span>
                            <span class="small-circle"></span>
                        </div>
                        <div class="content">
                            <div class="icon-block">
                                <img src="{{url('images/landing_page/marketplace/icons/music.png')}}" alt="">
                            </div>
                            <div class="title">Music & Audio</div>
                            <div class="resources">3,394
                                <span>EXPERTS</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card blue-overlay">
                    <a href="#" class="inner-wrapper" onclick="catviewer('8')">
                        <div class="overlay">
                            <span class="big-circle"></span>
                            <span class="small-circle"></span>
                        </div>
                        <div class="content">
                            <div class="icon-block">
                                <img src="{{url('images/landing_page/marketplace/icons/business.png')}}" alt="">
                            </div>
                            <div class="title">Business & Sales</div>
                            <div class="resources">3,394
                                <span>EXPERTS</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-inner-category" id="innerCat">
    <div class="container">
        <div class="header">
            <h2 class="title">Top Categories at Tallentor</h2>
            <div class="text">one place with thousands of creative talents</div>
        </div>
        <div class="row g-5">
            <div class="col-lg-3">
                <div class="category-nav" id="categories">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" id="categoryNav1" class="nav-link" onclick="optionBlocks('1')">
                                <img src="{{url('images/landing_page/marketplace/icons/programming.png')}}" alt="">
                                <span class="active-hide">Programming &
                                    Development</span>
                                <div class="card blue-overlay">
                                    <div class="overlay">
                                        <span class="big-circle"></span>
                                        <span class="small-circle"></span>
                                    </div>
                                    <div class="content">
                                        <div class="icon-block">
                                            <img src="{{url('images/landing_page/marketplace/icons/programming.png')}}" alt="">
                                        </div>
                                        <div class="title">Programming &
                                            Development</div>
                                        <div class="resources">3,394
                                            <span>EXPERTS</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" id="categoryNav2" class="nav-link" onclick="optionBlocks('2')">
                                <img src="{{url('images/landing_page/marketplace/icons/digital_marketing.png')}}" alt="">
                                <span class="active-hide">Digital Marketing</span>
                                <div class="card green-overlay">
                                    <div class="overlay">
                                        <span class="big-circle"></span>
                                        <span class="small-circle"></span>
                                    </div>
                                    <div class="content">
                                        <div class="icon-block">
                                            <img src="{{url('images/landing_page/marketplace/icons/digital_marketing.png')}}" alt="">
                                        </div>
                                        <div class="title">Digital Marketing</div>
                                        <div class="resources">3,394
                                            <span>EXPERTS</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" id="categoryNav3" class="nav-link" onclick="optionBlocks('3')">
                                <img src="{{url('images/landing_page/marketplace/icons/graphic_design.png')}}" alt="">
                                <span class="active-hide">Graphic Designing</span>
                                <div class="card yellow-overlay">
                                    <div class="overlay">
                                        <span class="big-circle"></span>
                                        <span class="small-circle"></span>
                                    </div>
                                    <div class="content">
                                        <div class="icon-block">
                                            <img src="{{url('images/landing_page/marketplace/icons/graphic_design.png')}}" alt="">
                                        </div>
                                        <div class="title">Graphic Designing</div>
                                        <div class="resources">3,394
                                            <span>EXPERTS</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" id="categoryNav4" class="nav-link" onclick="optionBlocks('4')">
                                <img src="{{url('images/landing_page/marketplace/icons/art_craft.png')}}" alt="">
                                <span class="active-hide">Art & Craft</span>
                                <div class="card red-overlay">
                                    <div class="overlay">
                                        <span class="big-circle"></span>
                                        <span class="small-circle"></span>
                                    </div>
                                    <div class="content">
                                        <div class="icon-block">
                                            <img src="{{url('images/landing_page/marketplace/icons/art_craft.png')}}" alt="">
                                        </div>
                                        <div class="title">Art & Craft</div>
                                        <div class="resources">3,394
                                            <span>EXPERTS</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" id="categoryNav5" class="nav-link" onclick="optionBlocks('5')">
                                <img src="{{url('images/landing_page/marketplace/icons/translate.png')}}" alt="">
                                <span class="active-hide">Writing & Translation</span>
                                <div class="card yellow-overlay">
                                    <div class="overlay">
                                        <span class="big-circle"></span>
                                        <span class="small-circle"></span>
                                    </div>
                                    <div class="content">
                                        <div class="icon-block">
                                            <img src="{{url('images/landing_page/marketplace/icons/translate.png')}}" alt="">
                                        </div>
                                        <div class="title">Writing & Translation</div>
                                        <div class="resources">3,394
                                            <span>EXPERTS</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" id="categoryNav6" class="nav-link" onclick="optionBlocks('6')">
                                <img src="{{url('images/landing_page/marketplace/icons/video.png')}}" alt="">
                                <span class="active-hide">Video & Photography</span>
                                <div class="card red-overlay">
                                    <div class="overlay">
                                        <span class="big-circle"></span>
                                        <span class="small-circle"></span>
                                    </div>
                                    <div class="content">
                                        <div class="icon-block">
                                            <img src="{{url('images/landing_page/marketplace/icons/video.png')}}" alt="">
                                        </div>
                                        <div class="title">Video & Photography</div>
                                        <div class="resources">3,394
                                            <span>EXPERTS</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" id="categoryNav7" class="nav-link" onclick="optionBlocks('7')">
                                <img src="{{url('images/landing_page/marketplace/icons/music.png')}}" alt="">
                                <span class="active-hide">Music & Audio</span>
                                <div class="card green-overlay">
                                    <div class="overlay">
                                        <span class="big-circle"></span>
                                        <span class="small-circle"></span>
                                    </div>
                                    <div class="content">
                                        <div class="icon-block">
                                            <img src="{{url('images/landing_page/marketplace/icons/music.png')}}" alt="">
                                        </div>
                                        <div class="title">Music & Audio</div>
                                        <div class="resources">3,394
                                            <span>EXPERTS</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" id="categoryNav8" class="nav-link" onclick="optionBlocks('8')">
                                <img src="{{url('images/landing_page/marketplace/icons/business.png')}}" alt="">
                                <span class="active-hide">Business & Sales</span>
                                <div class="card blue-overlay">
                                    <div class="overlay">
                                        <span class="big-circle"></span>
                                        <span class="small-circle"></span>
                                    </div>
                                    <div class="content">
                                        <div class="icon-block">
                                            <img src="{{url('images/landing_page/marketplace/icons/business.png')}}" alt="">
                                        </div>
                                        <div class="title">Business & Sales</div>
                                        <div class="resources">3,394
                                            <span>EXPERTS</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row g-0">
                    <div id="categoryBlock1" class="category-options">
                        <div class="row g-4 row-cols-lg-3 row-cols-2">
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/programming/basic_website.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Basic Website
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/programming/dynamic_website.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Dynamic Website
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/programming/e_commerce_website.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            E-commerce Website
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/programming/wordpress_website.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            WordPress Website
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/programming/landing_page.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Landing Page Design
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/programming/web_banner.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Web Banners
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/programming/icon_pack.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Icon Pack Design
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/programming/wireframes.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Website Wireframes
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/programming/erp.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            ERP Solutions
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/programming/pms.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            PMS Solutions
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/programming/payroll_management.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Payroll Management 
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/programming/pos.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            POS System 
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="categoryBlock2" class="category-options">
                        <div class="row g-4 row-cols-lg-3">
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/digital_marketing/social_media_marketing.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Social Media Marketing
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/digital_marketing/seo.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Search Engine Optimization
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/digital_marketing/sem.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Search Engine Marketing
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/digital_marketing/video_marketing.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Video Marketing
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="categoryBlock3" class="category-options">
                        <div class="row g-4 row-cols-lg-3 row-cols-2">
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/graphic_design/logo_design.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Logo Design
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/graphic_design/branding.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Company Branding 
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/graphic_design/stationery.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Company Stationery
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/graphic_design/package_design.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Package Design
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/graphic_design/brochure_design.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Brochure Design
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/graphic_design/flyer_design.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Flyer Design
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/graphic_design/web_design.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Website Design
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/graphic_design/app_ui.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            App UI Design
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="categoryBlock4" class="category-options">
                        <div class="row g-4 row-cols-lg-3 row-cols-2">
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/art_craft/painting.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Paintings
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/art_craft/masks.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Masks
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/art_craft/wall_arts.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Wall Arts
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/art_craft/wall_poster.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Canvas Wall Poster
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/art_craft/handicrafts.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Wooden Handicrafts
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/art_craft/batik.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Batik Wall Hangings
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="categoryBlock5" class="category-options">
                        <div class="row g-4 row-cols-lg-3 row-cols-2">
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/writing_translation/content_writing.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Content Writing
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/writing_translation/copywriting.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Copy Writing
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/writing_translation/translation.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Translation
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/writing_translation/legal_writing.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Legal Writing
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/writing_translation/contract.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Contract  & Proposals
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/writing_translation/ghostwriting.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Ghostwriting
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/writing_translation/speechwriting.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Speechwriting 
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/writing_translation/technical_writing.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Technical writing
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/writing_translation/scriptwriting.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Scriptwriting 
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/writing_translation/sm_copy.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Social media copy
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="categoryBlock6" class="category-options">
                        <div class="row g-4 row-cols-lg-3 row-cols-2">
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/video_photography/company_profile.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Digital Company profiles
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/video_photography/audio_visuals.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Audio Visuals
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/video_photography/smv.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Social Media Videos
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/video_photography/video_editing.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Video Editing 
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/video_photography/360_business.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Google 360 Business View
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/video_photography/photography.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Local photography
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/video_photography/drone_videography.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Drone Videography
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/video_photography/product_photograpy.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Product Photography 
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/video_photography/photo_retouching.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Photo Retouching
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/video_photography/product_explainer.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Product Explainer Videos
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="categoryBlock7" class="category-options">
                        <div class="row g-4 row-cols-lg-3 row-cols-2">
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/music_audio/voice_over.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Voice Over
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/music_audio/audio_tracks.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Audio Tracks
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/music_audio/music_lessons.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Online Music Lessons
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/music_audio/song_writing.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Song writers
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/music_audio/intros.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Jingles & Intros
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/music_audio/ads_production.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Audio Ads Productions
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/music_audio/singers.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Singers & Vocalists
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="categoryBlock8" class="category-options">
                        <div class="row g-4 row-cols-lg-3 row-cols-2">
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/business_sales/tele_sales.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Tele Sales Executive
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/business_sales/marketing_consultant.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Marketing Consultant
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/business_sales/accounts_assistant.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Accounts Assistant
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/business_sales/tax_consultant.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Tax Consultanting
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/business_sales/market_research.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Market Research
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/business_sales/legal_consultant.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Legal Consulting
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/business_sales/virtual_assistant.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Virtual Assistant
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/business_sales/business_docs.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Business Documents
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/business_sales/financial_consulting.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Financial Consulting
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/business_sales/real_state.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Real Estate Agent
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="{{url('/contact')}}">
                                        <div class="image-block">
                                            <div class="overlay">
                                                <div class="overlay-btn">Contact</div>
                                            </div>
                                            <img src="{{url('images/landing_page/marketplace/business_sales/project_management.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Project Management
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="section-project-form">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Programming & Development</a></li>
                            <li class="breadcrumb-item"><i class="bi bi-chevron-right"></i></li>
                            <li class="breadcrumb-item active">Basic Website</li>
                        </ul>

                        <form class="row g-4 project-form">
                            <div class="col-md-6">
                                <label for="jobTitle" class="form-label">Give your job a title</label>
                                <input type="text" class="form-control" id="jobTitle" placeholder="Type your title">
                            </div>
                            <div class="col-md-6">
                                <label for="clientName" class="form-label">Give your Name</label>
                                <input type="password" class="form-control" id="clientName" placeholder="Type your name">
                            </div>
                            <div class="col-md-6">
                                <label for="clientEmail" class="form-label">Give your Email Address</label>
                                <input type="email" class="form-control" id="clientEmail"
                                    placeholder="Type your Email Address">
                            </div>
                            <div class="col-md-6">
                                <label for="clientName" class="form-label">Give your Name</label>
                                <input type="password" class="form-control" id="clientName" placeholder="Type your name">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="projectFiles">Upload
                                    <span class="text">Include expected deliverables, requirements and time frame for
                                        delivery</span>
                                </label>
                                <div class="input-file-wrapper">
                                    <input type="file" id="projectFiles">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <textarea class="form-control" id="projecetBrief" placeholder="Project Brief"></textarea>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="project-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="hero-section">
    <div class="container">
        <div class="inner-wrapper">
            <div class="content-block">
                <img src="{{url('images/services/01.png')}}" alt="" class="order-no">
                <h1>Express Web</h1>
                <h2 class="title">Built it, the way <br> you want</h2>
                <p class="text">The fastest way create your online presence in few hours on Drag &amp; Drop method <strong>Without coding</strong></p>
                <a href="{{url('/contact')}}" class="cta-btn-border"><span class="text">Inquire Now</span> <i class="bi bi-arrow-right-short"></i></a>
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
                <a href="{{url('/contact')}}" class="cta-btn-border"><span class="text">Talk to Expert Centre</span> <i class="bi bi-arrow-right-short"></i></a>
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
            <a href="{{url('/contact')}}" class="cta-btn-border"><span class="text">Inquire Now</span> <i class="bi bi-arrow-right-short"></i></a>
        </div>
        <div class="feature-block block-4">
            <img src="{{url('images/services/04.png')}}" alt="" class="order-no">
            <div class="image-block">
                <img src="{{url('images/services/xcxcx-01.png')}}" alt="">
            </div>
            <h4 class="title">Mobile App Development</h4>
            <p class="text">Hire the industry experts to bring your idea into reality. Dedicated Android & iOS developers to work on your project</p>
            <a href="{{url('/contact')}}" class="cta-btn-border"><span class="text">Inquire Now</span> <i class="bi bi-arrow-right-short"></i></a>
        </div>
        <div class="feature-block block-5">
            <img src="{{url('images/services/05.png')}}" alt="" class="order-no">
            <div class="image-block">
                <img src="{{url('images/services/sfsf-01.png')}}" alt="">
            </div>
            <h4 class="title">Digital Marketing</h4>
            <p class="text">SEO experts, Social media strategists and creative designers all under one package with a dedicated account manager</p>
            <a href="{{url('/contact')}}" class="cta-btn-border"><span class="text">Inquire Now</span> <i class="bi bi-arrow-right-short"></i></a>
        </div>
        <div class="feature-block block-6">
            <img src="{{url('images/services/06.png')}}" alt="" class="order-no">
            <div class="image-block">
                <img src="{{url('images/services/SEO-01.png')}}" alt="">
            </div>
            <h4 class="title">Search Engine Optimisation</h4>
            <p class="text">Put your website ahead of your competitors organically. Tallentor SEO tool will scan through the website and generate a report in minutes and our SEO specialists will give you a plan to get you on track fast.</p>
            <a href="{{url('/contact')}}" class="cta-btn-border"><span class="text">Inquire Now</span> <i class="bi bi-arrow-right-short"></i></a>
        </div>
        <div class="feature-block block-7">
            <img src="{{url('images/services/08.png')}}" alt="" class="order-no">
            <div class="image-block">
                <img src="{{url('images/services/Analytics-01.png')}}" alt="">
            </div>
            <h4 class="title">Search Engine Marketing</h4>
            <p class="text">The fastest method to get your website visibility on search engines. We will make sure every penny spent wisely with paid digital campaigns with our tested and proven strategies.</p>
            <a href="{{url('/contact')}}" class="cta-btn-border"><span class="text">Inquire Now</span> <i class="bi bi-arrow-right-short"></i></a>
        </div>
    </div>
</section>

@include('frontend.includes.footer')

    
@endsection

@push('after-scripts')

<script>
const mainCat = document.getElementById("mainCat");
const innerSec = document.getElementById("innerCat");
const catOptions = innerSec.querySelectorAll(".category-options");
const optCard = innerSec.querySelectorAll(".option-card");
const projectForm = innerSec.querySelector(".section-project-form");

// Navbar active classes
const categories = document.getElementById("categories");
const items = categories.querySelectorAll('.nav-link');

items.forEach(function (item) {
    item.addEventListener("click", function () {
        items.forEach(function (tab) {
            tab.classList.remove("active");
        });
        item.classList.add("active");
        projectForm.classList.remove("active");
    });
});

// Show Hide Blocks

function catviewer(id) {
    mainCat.classList.remove("active");
    innerSec.classList.add("active");
    document.getElementById("categoryNav" + id).classList.add("active");
    document.getElementById("categoryBlock" + id).classList.add("active");
}

function optionBlocks(id) {
    catOptions.forEach(function (cat) {
        cat.classList.remove("active");
    });
    document.getElementById("categoryBlock" + id).classList.add("active");
}

// optCard.forEach(function (option) {
//     option.addEventListener("click", function () {
//         catOptions.forEach(function (cat) {
//             cat.classList.remove("active");
//         });
//         projectForm.classList.add("active");
//     });
// });
</script>

@endpush

