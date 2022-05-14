@extends('frontend.layouts.app')

@section('title', 'Web Designers | eCommerce | PHP developers | Digital Marketing | Tallentor')
@section('meta_description','Global talent pool of Web Designers, mobile app developers,PHP developers, SEO experts, Digital Marketing consultants, Business analysis, system architects, project managers, graphic designers, wordpress developers who specializes in PHP and .net development, Python, angular, Android & iOS development')
@section('content')

<link rel="stylesheet" href="{{url('css/categories.css')}}">
<link rel="stylesheet" href="{{url('css/services.css')}}">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

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
                <!-- <img src="{{url('images/services/5721524-02.png')}}" alt=""> -->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 333.9 315.35">
                    <defs>
                        <style>
                            .cls-1 {
                                isolation: isolate;
                            }

                            #expressWeb .cls-2 {
                                fill: url(#radial-gradient);
                            }

                            #expressWeb .cls-3 {
                                mask: url(#mask);
                            }

                            #expressWeb .cls-4 {
                                opacity: 0.55;
                                mix-blend-mode: screen;
                            }

                            #expressWeb .cls-5 {
                                fill: #fff;
                            }

                            #expressWeb .cls-6 {
                                fill: url(#radial-gradient-2);
                            }

                            #expressWeb .cls-7 {
                                mask: url(#mask-2);
                            }

                            #expressWeb .cls-8 {
                                fill: url(#radial-gradient-3);
                            }

                            #expressWeb .cls-9 {
                                mask: url(#mask-3);
                            }

                            #expressWeb .cls-10 {
                                fill: url(#radial-gradient-4);
                            }

                            #expressWeb .cls-11 {
                                mask: url(#mask-4);
                            }

                            #expressWeb .cls-12 {
                                fill: url(#radial-gradient-5);
                            }

                            #expressWeb .cls-13 {
                                mask: url(#mask-5);
                            }

                            #expressWeb .cls-14 {
                                fill: url(#radial-gradient-6);
                            }

                            #expressWeb .cls-15 {
                                mask: url(#mask-6);
                            }

                            #expressWeb .cls-16 {
                                opacity: 0.28;
                            }

                            #expressWeb .cls-17 {
                                fill: url(#linear-gradient);
                            }

                            #expressWeb .cls-18 {
                                fill: none;
                                stroke: #b391ff;
                                stroke-miterlimit: 10;
                                stroke-width: 0.56px;
                            }

                            #expressWeb .cls-19 {
                                opacity: 0.42;
                                mix-blend-mode: color-dodge;
                            }

                            #expressWeb .cls-20 {
                                fill: #eff4ff;
                            }

                            #expressWeb .cls-21 {
                                fill: url(#linear-gradient-2);
                            }

                            #expressWeb .cls-22 {
                                opacity: 0.21;
                                mix-blend-mode: multiply;
                            }

                            #expressWeb .cls-23 {
                                fill: url(#linear-gradient-3);
                            }

                            #expressWeb .cls-24 {
                                fill: #ffc21a;
                            }

                            #expressWeb .cls-25 {
                                fill: #1ae5ff;
                            }

                            #expressWeb .cls-26 {
                                fill: url(#linear-gradient-4);
                            }

                            #expressWeb .cls-27 {
                                fill: #6098f0;
                            }

                            #expressWeb .cls-28 {
                                fill: #89939a;
                            }

                            #expressWeb .cls-29 {
                                fill: url(#linear-gradient-5);
                            }

                            #expressWeb .cls-30 {
                                fill: url(#linear-gradient-6);
                            }

                            #expressWeb .cls-31 {
                                fill: #ff63aa;
                            }

                            #expressWeb .cls-32 {
                                fill: url(#linear-gradient-7);
                            }

                            #expressWeb .cls-33 {
                                fill: #487dcf;
                            }

                            #expressWeb .cls-34 {
                                fill: #cad8f2;
                            }

                            #expressWeb .cls-35 {
                                fill: url(#linear-gradient-8);
                            }

                            #expressWeb .cls-36 {
                                fill: url(#linear-gradient-9);
                            }

                            #expressWeb .cls-37 {
                                fill: #a3bbe8;
                            }

                            #expressWeb .cls-38 {
                                fill: #0063c4;
                            }

                            #expressWeb .cls-39 {
                                fill: #eb9d1a;
                            }

                            #expressWeb .cls-40 {
                                fill: #fbefa0;
                            }

                            #expressWeb .cls-41 {
                                fill: #ff9ac8;
                            }

                            #expressWeb .cls-42 {
                                fill: url(#linear-gradient-10);
                            }

                            #expressWeb .cls-43 {
                                fill: url(#linear-gradient-11);
                            }

                            #expressWeb .cls-44 {
                                filter: url(#luminosity-invert);
                            }
                        </style>
                        <radialGradient id="radial-gradient" cx="193.4" cy="21.15" r="35.07"
                            gradientTransform="translate(84.71 -130.88) rotate(45)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#f8f9f9" />
                            <stop offset="0.15" stop-color="#f1f2f2" />
                            <stop offset="0.36" stop-color="#dddedf" />
                            <stop offset="0.62" stop-color="#bdbebf" />
                            <stop offset="0.91" stop-color="#909193" />
                            <stop offset="1" stop-color="#808183" />
                        </radialGradient>
                        <filter id="luminosity-invert" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feColorMatrix values="-1 0 0 0 1 0 -1 0 0 1 0 0 -1 0 1 0 0 0 1 0" />
                        </filter>
                        <mask id="mask" x="171.9" y="8.35" width="57" height="57" maskUnits="userSpaceOnUse">
                            <g class="cls-44">
                                <image width="57" height="57" transform="translate(171.9 8.35)"
                                    xlink:href="data:image/png;base64,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" />
                            </g>
                        </mask>
                        <radialGradient id="radial-gradient-2" cx="219.03" cy="47.44" r="24.2"
                            gradientTransform="matrix(1, 0, 0, 1, 0, 0)" xlink:href="#radial-gradient" />
                        <mask id="mask-2" x="203.9" y="38.35" width="40" height="40" maskUnits="userSpaceOnUse">
                            <g class="cls-44">
                                <image width="40" height="40" transform="translate(203.9 38.35)"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAAsSAAALEgHS3X78AAAFSElEQVRYR82Y63KjSAyFD75yh0Dsmnn/Z5tKSDIEMOZmG/ZH6mgEtmNnpnZ2VdUVkjStD7WkltoAMOB/LLNbE/5rWdyacE1s24ZlWVgul5jP5zAMA4ZhAACGYcAwDDidTjgcDqiqCnVd31jxsnwZ0HVdBEGAIAhg2zbW6zWWyyVms9kIkHBd16EsSxRFgaIoUJblDQ1juRvQdV2EYYgoiuD7PnzfHwHSisAYsGka7Pd77HY75HmONE2RZRmqqrqh8UNuAtq2jSAIEMcxoigS67muK4Cr1Qrz+Ryz2YdL932P4/GIruvQti2qqsJut0OWZfA8D67rIkkS5Hl+Q/sNQM/zsN1u8fj4iCiK8PDwgDAMRYlt2zBNUyw4m83E/wjYNA2qqkJZlvA8D47jiO8ahoEsyz5DuA7oeR6+f/+O7XaLzWaDKIrEgtze6RZPLcgtJqDjODBNE+v1GovFQlziM8iLgLZtY7vdYrvd4tu3b9hsNojjGGEYIggCeJ4ngKvV6swH+74XH+QWE261WmGxWMjHAB8+e227LwIGQYDHx0dsNhsZcRyL/xHQsixReA2w6zpYliVz9cfQHfq+xzAMKIrijOUM0HVdCYgoihDHMeI4Fv9jgFiWhfV6Ldt1CfB4PKJtWwkkPY9gnHc4HHA8Hs+i+wyQqeTh4QFRFAlUGIYIwxC+74uja//TgKfTSfxwtVqNtlXDEazrOvHTTwFd15VAIJgevu/DdV04jiNWYZKe+pTOhTqAAIjVdBoqyxJ5niPP8xHkCJAQ9DPf9+F5nqQVx3FG1ptu7VQIzmPwWgryfR9FUYgBLgIyIXMS8xwHHZ1+x639TDQc8Cv92LaNtm1R17V8NIdpmuM1+GBZ1ghoCkcw7ez3iGEYmM/n4oumaY4GP5x6mMwpArhcLgVivV5LQuXCtNo9lpsKIfk+dRGSOmkQbUUB1AvQ+TkWi4VYTVctXxFCUg/XpD4O6qQIoGEYmM1mssi1oaPxK8L1L+kgKJ+1jhEgBxfSTq6d/U/kkg7q0c+Uq+YYhn+3VZmufzVV8YE5Sp+Nfd+Pxul0+iPwW+tzaB0jwNPpJFmeg3/j8fW7gPrspQ6t63A4yO9938t7AshjiWdj13XyOw9yLqoXuFemMNTDkow6+UwRQL7QNA3atkXTNPLMF7nwV7dal18Eoo66ruWZ3V/TNPKuHHU8sPf7PaqqGg2eJOw9GImfncMUHm/8UALUdS1jv9/LmFY0AljXNYqiwG63w263Q1mWUqbrwlSngSmwFu3TtBgtVFWVwNAoHNP+eVTNFEWBPM+l+7pWpmuHn/Yj+v/Teo9Q2gjsl2mc/X5/HbAsS6RpegZ3qe89Ho9nHZ3+v66UuZWE04bQP6e14Bkg8NFh6ZJ+WqZTsW3b6LpuVEDosko3TQwAwqVpOhrv7+9I0/Ri43QGWFUVkiSRA/1Smc6o1i0kraiLUgIyEPTtws+fP/H29obX11ckSYKXl5eL9zcXu7o8z0eOP4VjFLJc0oDALwvquQyILMuQpine3t6QJAmen5/x9PR0saMDPmncdTOt+wvd51qWdeaHwLhx1/5H30vTFK+vr3h+fsaPHz8+vQL59Oojy7Iz67GH0L3JNMp17mvbVlJIURTIsgzv7+9IkgRPT08372duXh7leY5hGOSej5ZwHGd0ecS7FsMw0Pf96GTSgLTgy8vL1W3VYuDOK2A2VWysaEFef1zzQeY/HSR5nt99oXk3IMW2bbiuC9M05QpERzww3mL6HyP53ntBypcBtTCZs3mfRr3ufX9X/gjwb8jvdUB/Uf4Bk9MYvfA5sHcAAAAASUVORK5CYII=" />
                            </g>
                        </mask>
                        <radialGradient id="radial-gradient-3" cx="250.95" cy="36.07" r="6.41"
                            gradientTransform="matrix(1, 0, 0, 1, 0, 0)" xlink:href="#radial-gradient" />
                        <mask id="mask-3" x="244.9" y="31.35" width="15" height="15" maskUnits="userSpaceOnUse">
                            <g class="cls-44">
                                <image width="15" height="15" transform="translate(244.9 31.35)"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAACXBIWXMAAAsSAAALEgHS3X78AAABSklEQVQoU6WTvYrCUBCFPy8LMSBoDIJVILHUIla+hRBIZelb+QaCCnmQEPyrhICFjUFBG/Uqult5d7PJ/rB7yjPnY4ZhpgC88keJnwLf6eWrgu/7mKbJdrslCILcTIFPY/d6PdrtNq1Wi1KpxOl0YjabEUURw+EwBac69/t9PM+j2WxSr9cpFotcr1ccx8GyLG63G5PJJAv7vk+326XT6VCr1VRA0zQcx0FKyXK5/NjrfWGNRgPbtlOgCgmBYRgYhpEP67qOrusZ8ClN06hUKriuqzwFXy4XpJS5IICUksPhwHQ6VZ6C4zhmtVqx3+8z4OPxIEkSkiRJ+Wpho9GIarVKuVzGdV1M0wTgfD6zXq+Zz+fEcZwPAwwGA+73O8fjEcuyEEKw2+0Iw5DFYsF4PE7BmSMB8DwP27YRQrDZbDLH8VQu/Fv96zHeAHC4cKh7WJvcAAAAAElFTkSuQmCC" />
                            </g>
                        </mask>
                        <radialGradient id="radial-gradient-4" cx="29.27" cy="175.63" r="25.3"
                            gradientTransform="matrix(1, 0, 0, 1, 0, 0)" xlink:href="#radial-gradient" />
                        <mask id="mask-4" x="12.9" y="166.35" width="42" height="42" maskUnits="userSpaceOnUse">
                            <g class="cls-44">
                                <image width="42" height="42" transform="translate(12.9 166.35)"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAqCAYAAADFw8lbAAAACXBIWXMAAAsSAAALEgHS3X78AAAFoElEQVRYR9WY25LiOAyGfw4hZ0JDmvd/uZ6LaSDkHCeQ7MXU71FMOHTPbu2uqlwkkFgfkixLngEY8D+Q+bMH/iuyfPbAI3EcB67rwrIsLBYLzGYzzGYz/fswDBiGAdfrFV3Xoa5rNE3zYMb78i1Qz/OwXq+xXq/h+z5WqxWWyyWWy6WGNSHbtkVZlsjzHFmWoSzLZ2pG8iVQ13URRRG22y3W6zXCMITruiOrzue/o6nvew3aNA2qqtKgp9MJaZqirusHGn/Ly6BRFGG/32O73WKz2SCKIgRBAM/zYNu2tupisdDvXK9XXC4XtG0LpRTKskRZlkjTFEEQ4Hg84ufPn8jz/IHmX/IU1HVdbDYbxHGMOI6x3W4RRdHIorZtw7ZtLJdLzOdz7fq+73G5XKCUglIKVVWhKAr4vg/XdeE4DizLwo8fP5Bl2UOOh6C+72O/3yOOY+x2O+x2O7y9vWGz2SAMQwRBoBXSohL0er3ier2ibVvtegkq/9zHxwfSNL3LchfUcRy8v79jv9/j/f1dw9LtYRiOLLNarbBYLCZdzxit6xqe58F13VGoMFMMw3DXsndBoyjCbrdDHMeToEEQwPd9OI6jXUjrUKRFlVKo6/pumNADwzBMxuwkqO/72O122G632uW8J6jv+xp0tVppUJmeuOrbtkXbtpMhAmD0XNd12gNPQaMoQhRFOh7f3t70oNun4lMmfTOPdl03srqElOHRNA3KsnwO6vu+Blyv1xqaCT4MQ6zXax1rdKNlWSMAABrUsix0XTfKs7R413VQSunFVlUVsixDlmWjHHsDSiAJFgTBaHieB8/zblwp45MwXGCmtU1L1nWNoigQBAHCMITnefdBXdfVgBKM8Ugr0uW0plzpUgg2m83uxqRSSs9NPdQhZWQC13W1xeQLEo6AUzvRPZnNZlgsFlgul/pdzsXChl5yXRe+72sOygiUqYOxNwUnC5BXIKUwBCzL0nNRp9RNcMdx9LsjUL7If8zJLMvSQy6crwotS+uawOa1ZVn6Xa2NLrBtWwPJQQVcNHJ1f0UIO5/P9bzUIfWalZi+knE3BSaHWSB/ReTiMgeheS11aFATgg/J++/CmSLnMee/p0uDMmX0fa93FeB3OyG/+1N5NL/8XooGVUqh6zpd8bCg6Pt+cnwXmsmeCd+cV+qUOjQodwcWBpfLZTQILq3+HSEMB3cn+Ul9k6AA9E4hP2VF07bt3YleEQnG+Ux9/I06KDegTdPoIsEcjyZ6JmYpJwGndPF3ymivr+sadV2jLEtUVaXv2Y83TTPqNrkyzVQiRdalVM65WC1xsPnjtVJKzzMCZYlVFAXKstTVDLczs54chgG2baPv+0nYqeK5rmsNYgJSJxlkTXpT5vHFPM9RFAXyPB/VnRKIELSy2f9w4TFcZCcqDyPMkef5TTsyCZqmqa5DzXKO2xohaekpUKYgtsyyE82yDGmaIk1TZFmG8/k8GlVVPQZtmgaHw2FUGMu4pKV4sNC27WiPlqBccLQm3V4UhYZM0xRJkuB8PiNJEiRJ8npzl2UZPj8/R/u/aUmml6ZpRn/GdL08KSFonudI0xTn8xmn0wnH4xGn0wmHwwGHw2HymOduu5ymKTzPw2q1GkGajZhpdRNU5ktmFMZmkiQa9HA43LUm8AC0aRp8fn7q1S0hlVIIggBVVU2GB3BreS4kZhZa9Hg8aos+OtZ5eKRTFIUuFCRkVVX6pEQW2FMWZYLnQqJFpduTJEGWZTctspQZXjga53Ejz57Y299rmYFxmDCW2WmaoK+c5r0ESgnDEHEc65MSmb7MIx3pBel6pqbz+Yw8z18+H/0SKPCrZaEluWsxRpkhAIxOSAjLnSfP85s8+Uy+DCpFHulYlqWv6XallM6lco//jvwRqCncpej270JNyd8K+k/K15vzf0n+AkpSuifmsn1MAAAAAElFTkSuQmCC" />
                            </g>
                        </mask>
                        <radialGradient id="radial-gradient-5" cx="4.39" cy="187.07" r="8.24"
                            gradientTransform="matrix(1, 0, 0, 1, 0, 0)" xlink:href="#radial-gradient" />
                        <mask id="mask-5" x="-2.1" y="182.35" width="17" height="17" maskUnits="userSpaceOnUse">
                            <g class="cls-44">
                                <image width="17" height="17" transform="translate(-2.1 182.35)"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAYAAAA7bUf6AAAACXBIWXMAAAsSAAALEgHS3X78AAABtElEQVQ4T63UO6viQByG8ScXUIxRY6GgMqKd2FkqHFv9wHYWCmolWHkBhaAQREHxNiLGy6mOB0+y7C67bzX85+VHmEmiAE/+MervCn8S3W9YqVQQQhAKhVBVFSkljuPQbrf96l6kXq/z8fFBLpcjEomgaRrH45H1ek2xWGQ4HHqwN6Rer1Or1SiVSmQyGcLhMIqicL1e2W63pFIpEokEruvS6/W8SKVSoVqtUiqVKBQKWJaFqn4fmWVZBAIBXNfFtu035NXKZrPk83mEEB4AIBgMkkwmSafTJBKJt71X0zRNYrEY4XDYA3zFMAzi8ThCCMrlshfRNA1d19E0zRcAUFUVXdcJBoNYlvU9/1rc73dutxv3+90XALher5zPZw6HA7vd7jV/IafTif1+j5SS59P/JT4cDqxWK2zbptvtepH5fM5sNmOxWLDZbHg8Hm/Afr/HcRym0ymTyeRt73XFnU6HaDSKYRgApNPp1/pyubBarRiNRvT7fZrNpj8C0Gg0eD6fSCnJZrOYpomiKEgpWS6XDAYDxuMxP6Pg8xWXy2WEEG9P4jgOrVbrZxX4BfK3+S+/gk+fyKVotMQkiQAAAABJRU5ErkJggg==" />
                            </g>
                        </mask>
                        <radialGradient id="radial-gradient-6" cx="47.76" cy="194.59" r="17.46"
                            gradientTransform="translate(158.11 23.07) rotate(45)" xlink:href="#radial-gradient" />
                        <mask id="mask-6" x="35.9" y="187.35" width="31" height="30" maskUnits="userSpaceOnUse">
                            <g class="cls-44">
                                <image width="31" height="30" transform="translate(35.9 187.35)"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAAeCAYAAADU8sWcAAAACXBIWXMAAAsSAAALEgHS3X78AAAEdElEQVRIS8WXWXPaShBGj9ACEgIhsRqXnaTK//8/JcUuBEhCu0D3IaUxGBP8cFP5nmf6zPQy3SMBFf9IjUcL/qaURwtqOY5Dt9ul2WyiKAqNxu9zV1VFWZbkeU4Yhriu+8DSux7C+/0+g8GA8XhMt9ul3W6jqiqyLANwPp8py5IkSfB9H9d18TyP5XL5wPID+NPTE9++fWMymTAcDun1erTbbTRNQ1F+bz2fzxRFQRzHhGHIbrdjs9lg2zau6/7RE3fhz8/PvL298fLywtPTE4PBQMBr18M1/Hg8st/vcRyHXq/HbDZDUZS7XvgUPp1OeXt748ePH7y8vDCZTOj3+3S7XUzTRNM0VFVFkiROpxNFUZCmKWEYYlkWpmliGAaapiFJEmVZfuqBG/hwOOT79++8vr7y+vrK8/Mz4/EYx3GwLAtd169uXlUVeZ6TZRmWZdHpdNB1HU3TACiK4m4i3sD7/T7T6ZTpdMpkMmE8HjMajbBtWxhWVfXK7XW2G4ZBs9lElmXhlSzLCIKA/X7PfD6/Dx+NRkynU0ajEaPRiOFwyGAwEDGsjSuKgiRJSJJEVVXiAB8TMc9zoijicDgQBAFpmuJ53ufwwWBwBbRtm16vJ0pM13VRYrUkSUKWZRqNhqj9Og/iOMZxHAaDAbvdjtVq9TnccRyGwyG2bWNZlohfu93GMAxardYN+FKSJKGqKrquU5YlaZrS6XSErW63i2EYV3vE89rtdul0OpimiWmaAvoxwR5JURQ0TUPXdXRdxzCMqwtcSsBVVaXVatFqtWg2m2iaJmL4pxt/VKPRQFVVVFUVdlqtFoZhYFkWjuO8r73cJMsyiqIIYB1HSZI+Bd1TbUuWZVEZtUfa7fb7uo8bq+r/6bBfsSPgdbmUZUlRFJRlyel04nQ6fcnQpc7nM+fzWWR9bTPLMuI4FusEPM9zkiQhTVOyLCPLMvI8F5u/eoD6ra9hWZaRJAlRFBEEwVWpCXgYhkRRRBRFHI9H4jgmjmNxmLIsP4Vd6rK3J0lCkiTCTn2xS4n62e12bLdb9vs9vu/j+76ozcsn817J1eAaeDweCYKAIAiEvSiKrvZcWdput7iuS7/fF92p1WqJDlZVlXhs6iq4fF4v3Xs4HDgcDniex3a7ZbvdEgTBffh6vca2bWzbxjRN0UQkSbpKoHqSaTQaV40lSRIR1+12y3q9ZrPZsFwumc/n7Ha7+3AA13VZLBZiaGg0GlexrF+qurnUCZZlGWEYEgSBAK9WK5bLJYvFgtls9hF1C/c8j1+/fqGqKvAeyyzLiKII0zRpNptXoahvHYYhh8MB13VZr9fM53Nmsxnr9foGDHcmmfl8LkrrfD6TpilRFNHr9UQeXN48z3Mxw+33ezabDev1mtlsxs+fP+/OcXe7xWKxAH7X//F4xPf9mxnuEl5Pr57nsdlsWK1WNy30oyQe/FjqVjsej7Es62p0vox5HMf4vs9ms8HzPFar1Z/MAl+A16oHyM8+DUVRkOe5uPlX9WX439A//av9Bw0cys1E11A+AAAAAElFTkSuQmCC" />
                            </g>
                        </mask>
                        <linearGradient id="linear-gradient" x1="199.49" y1="26.62" x2="199.49" y2="199.51"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#8b68ff" />
                            <stop offset="0.01" stop-color="#8a67fe" stop-opacity="0.99" />
                            <stop offset="0.38" stop-color="#7553e7" stop-opacity="0.57" />
                            <stop offset="0.68" stop-color="#6543d6" stop-opacity="0.26" />
                            <stop offset="0.9" stop-color="#5c3acb" stop-opacity="0.07" />
                            <stop offset="1" stop-color="#5836c7" stop-opacity="0" />
                        </linearGradient>
                        <linearGradient id="linear-gradient-2" x1="72.36" y1="139.53" x2="257.11" y2="139.53"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#a3aeeb" />
                            <stop offset="1" stop-color="#a3bbe8" />
                        </linearGradient>
                        <linearGradient id="linear-gradient-3" x1="78.31" y1="39.78" x2="78.83" y2="207.09"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#8b68ff" />
                            <stop offset="0.61" stop-color="#6947da" />
                            <stop offset="1" stop-color="#5836c7" />
                        </linearGradient>
                        <linearGradient id="linear-gradient-4" x1="50.56" y1="177.65" x2="97.64" y2="177.65"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#0070e0" />
                            <stop offset="1" stop-color="#00a5ff" />
                        </linearGradient>
                        <linearGradient id="linear-gradient-5" x1="123.72" y1="129.64" x2="192.6" y2="129.64"
                            xlink:href="#linear-gradient-4" />
                        <linearGradient id="linear-gradient-6" x1="251.35" y1="290.84" x2="205.47" y2="62.61"
                            xlink:href="#linear-gradient-4" />
                        <linearGradient id="linear-gradient-7" x1="137.19" y1="78.18" x2="226.26" y2="78.18"
                            xlink:href="#linear-gradient-2" />
                        <linearGradient id="linear-gradient-8" x1="201.22" y1="77.74" x2="219.66" y2="115.75"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#ff63aa" />
                            <stop offset="1" stop-color="#ff4174" />
                        </linearGradient>
                        <linearGradient id="linear-gradient-9" x1="153.83" y1="178.31" x2="192.8" y2="178.31"
                            xlink:href="#linear-gradient-2" />
                        <linearGradient id="linear-gradient-10" x1="121.33" y1="195.09" x2="153.87" y2="195.09"
                            xlink:href="#linear-gradient-4" />
                        <linearGradient id="linear-gradient-11" x1="169.97" y1="195.57" x2="238.21" y2="306.15"
                            xlink:href="#linear-gradient-8" />
                    </defs>
                    <g class="cls-1">
                        <g id="Layer_2" data-name="Layer 2">
                            <g id="expressWeb">
                                <circle class="cls-2" cx="200.34" cy="36.81" r="25.62"
                                    transform="translate(32.65 152.44) rotate(-45)" />
                                <g class="cls-3">
                                    <g class="cls-4">
                                        <circle class="cls-5" cx="200.34" cy="36.81" r="25.62"
                                            transform="translate(32.65 152.44) rotate(-45)" />
                                    </g>
                                </g>
                                <circle class="cls-6" cx="223.82" cy="58.25" r="17.68" />
                                <g class="cls-7">
                                    <g class="cls-4">
                                        <circle class="cls-5" cx="223.82" cy="58.25" r="17.68" />
                                    </g>
                                </g>
                                <circle class="cls-8" cx="252.22" cy="38.93" r="4.68" />
                                <g class="cls-9">
                                    <g class="cls-4">
                                        <circle class="cls-5" cx="252.22" cy="38.93" r="4.68" />
                                    </g>
                                </g>
                                <circle class="cls-10" cx="34.28" cy="186.93" r="18.48" />
                                <g class="cls-11">
                                    <g class="cls-4">
                                        <circle class="cls-5" cx="34.28" cy="186.93" r="18.48" />
                                    </g>
                                </g>
                                <path class="cls-12" d="M12,190.75a6,6,0,1,1-6-6A6,6,0,0,1,12,190.75Z" />
                                <g class="cls-13">
                                    <g class="cls-4">
                                        <path class="cls-5" d="M12,190.75a6,6,0,1,1-6-6A6,6,0,0,1,12,190.75Z" />
                                    </g>
                                </g>
                                <circle class="cls-14" cx="51.21" cy="202.39" r="12.76"
                                    transform="translate(-128.11 95.49) rotate(-45)" />
                                <g class="cls-15">
                                    <g class="cls-4">
                                        <circle class="cls-5" cx="51.21" cy="202.39" r="12.76"
                                            transform="translate(-128.11 95.49) rotate(-45)" />
                                    </g>
                                </g>
                                <image width="161" height="137" transform="translate(172.9 176.35)"
                                    xlink:href="data:image/png;base64,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" />
                                <g class="cls-16">
                                    <g class="cls-1">
                                        <path class="cls-17"
                                            d="M283.72,98.13c4.37,2.52,7.91,8.64,7.89,13.66l-.32,114.88c0,5-3.57,7-7.94,4.52l-168.08-97c-4.38-2.53-7.91-8.64-7.89-13.66L107.7,5.61c0-5,3.57-7,7.94-4.52Z" />
                                    </g>
                                </g>
                                <g class="cls-1">
                                    <path class="cls-18"
                                        d="M262,115.38c4.38,2.52,7.91,8.64,7.89,13.67l-.32,114.87c0,5-3.57,7.05-7.94,4.52l-168.08-97c-4.37-2.52-7.91-8.64-7.89-13.66L86,22.87c0-5,3.57-7,7.94-4.53Z" />
                                </g>
                                <image class="cls-19" width="223" height="269" transform="translate(52.24 5.68)"
                                    xlink:href="data:image/png;base64,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" />
                                <g class="cls-1">
                                    <path class="cls-20"
                                        d="M246.08,122.7A17.4,17.4,0,0,1,254,136.37l-.33,114.87c0,5-3.57,7.05-7.94,4.52l-168.08-97c-4.37-2.52-7.9-8.64-7.89-13.66l.33-114.87c0-5,3.57-7,7.94-4.53Z" />
                                </g>
                                <path class="cls-21"
                                    d="M249.22,120.87l-168.08-97c-2.2-1.27-4.19-1.39-5.63-.55l-3.15,1.83c1.44-.84,3.44-.72,5.64.55l168.08,97A17.4,17.4,0,0,1,254,136.37l-.33,114.87c0,2.5-.89,4.25-2.3,5.07l3.14-1.82c1.42-.83,2.3-2.58,2.31-5.08l.32-114.87C257.13,129.52,253.59,123.4,249.22,120.87Z" />
                                <g id="side-nav">
                                    <image class="cls-22" width="101" height="204" transform="translate(36.24 39.68)"
                                        xlink:href="data:image/png;base64,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" />
                                    <path class="cls-23"
                                        d="M102.69,77.79c4.74,2.74,8.56,9.37,8.55,14.82l-.34,119c0,5.45-3.86,7.65-8.61,4.91L54.51,188.89c-4.74-2.74-8.56-9.36-8.55-14.81l.34-119c0-5.45,3.86-7.65,8.6-4.92Z" />
                                    <path class="cls-24"
                                        d="M95.56,92.21a14.65,14.65,0,0,1,6.65,11.52c0,4.24-3,6-6.69,3.83l-36.45-21A14.69,14.69,0,0,1,52.41,75c0-4.23,3-5.94,6.7-3.82Z" />
                                    <path class="cls-20"
                                        d="M95.56,121.23a14.65,14.65,0,0,1,6.65,11.52c0,4.24-3,5.95-6.69,3.83L59.07,115.53A14.69,14.69,0,0,1,52.41,104c0-4.23,3-5.94,6.7-3.82Z" />
                                    <path class="cls-20"
                                        d="M95.56,150.25a14.65,14.65,0,0,1,6.65,11.52c0,4.24-3,5.95-6.69,3.83l-36.45-21A14.69,14.69,0,0,1,52.41,133c0-4.23,3-5.94,6.7-3.82Z" />
                                    <path class="cls-25"
                                        d="M93.16,178.66l-33.9-19.58c-1.83-1.05-3.49-1.15-4.69-.46l-2.08,1.22c1.19-.7,2.85-.6,4.68.46l33.9,19.57a14.45,14.45,0,0,1,6.57,11.38c0,2.07-.73,3.53-1.92,4.22l2.09-1.21c1.18-.69,1.92-2.15,1.92-4.23A14.47,14.47,0,0,0,93.16,178.66Z" />
                                    <path class="cls-26"
                                        d="M91.07,179.87a14.45,14.45,0,0,1,6.57,11.38c0,4.18-3,5.86-6.61,3.76l-33.9-19.57a14.47,14.47,0,0,1-6.57-11.38c0-4.18,3-5.86,6.61-3.76Z" />
                                    <path class="cls-20"
                                        d="M71.29,174.62l.34.43-.19.3h0a.75.75,0,0,1,.44.12,1.65,1.65,0,0,1,.48.43,1.36,1.36,0,0,1,.2,1.62l-.74,1-.37-.47.71-1a.85.85,0,0,0-.12-1.1,1.06,1.06,0,0,0-.3-.27.44.44,0,0,0-.42,0,.33.33,0,0,0-.14.1l-.74,1-.37-.47.9-1.22C71.11,174.92,71.2,174.77,71.29,174.62Z" />
                                    <path class="cls-20"
                                        d="M70.41,173.51l.32.4c-.1.12-.2.24-.35.45l-.72,1c-.28.38-.55.5-.86.39a.82.82,0,0,1-.19-.09,2.74,2.74,0,0,1-.71-.66,3.85,3.85,0,0,1-.58-1l.26-.11a3.52,3.52,0,0,0,.51.89,1.5,1.5,0,0,0,.44.41.46.46,0,0,0,.66-.15l.14-.18,0,0a.68.68,0,0,1-.38-.11,1.88,1.88,0,0,1-.48-.44,1.67,1.67,0,0,1-.27-1.92.76.76,0,0,1,1.07-.16,1.78,1.78,0,0,1,.51.45,1.64,1.64,0,0,1,.43,1.1Zm-.47.41a1.22,1.22,0,0,0-.29-1,1,1,0,0,0-.34-.3.52.52,0,0,0-.74.15,1.13,1.13,0,0,0,.16,1.37,1.09,1.09,0,0,0,.33.29.49.49,0,0,0,.43.06l.15-.13.22-.29a.89.89,0,0,0,.08-.17" />
                                    <polygon class="cls-20" points="66.72 172.08 67.96 170.42 68.33 170.89 67.1 172.56 66.72 172.08" />
                                    <path class="cls-20"
                                        d="M66.58,167.56a2.15,2.15,0,0,1,.64.59,3.73,3.73,0,0,1,.56.92l-.28.12a3.58,3.58,0,0,0-.47-.81,1.29,1.29,0,0,0-.38-.35c-.2-.12-.34-.08-.42,0s-.06.55.24,1.17.48,1.26.23,1.6-.44.27-.79.07a2.47,2.47,0,0,1-.71-.66,4.32,4.32,0,0,1-.63-1.08l.28-.13a3.89,3.89,0,0,0,.56,1,1.71,1.71,0,0,0,.43.4c.19.11.36.1.46,0s.1-.54-.2-1.14-.51-1.29-.27-1.62S66.27,167.38,66.58,167.56Z" />
                                    <path class="cls-20"
                                        d="M68.63,170a.44.44,0,0,1,.09.49.16.16,0,0,1-.22,0,.94.94,0,0,1-.16-.14.46.46,0,0,1-.09-.48.18.18,0,0,1,.24,0A.39.39,0,0,1,68.63,170Z" />
                                    <path class="cls-20"
                                        d="M78.45,183.57a1.68,1.68,0,0,1,.24,2,.74.74,0,0,1-1.06.2,1.89,1.89,0,0,1-.54-.49,1.8,1.8,0,0,1-.44-1.06l-.68.9-.37-.47,1.33-1.81a6.48,6.48,0,0,0,.39-.56l.34.42-.2.31a1.06,1.06,0,0,1,.47.14A2,2,0,0,1,78.45,183.57Zm-.15,1.49a1.13,1.13,0,0,0-.15-1.38,1.14,1.14,0,0,0-.33-.3.52.52,0,0,0-.52,0l-.11.09-.21.29-.08.14a1.35,1.35,0,0,0,.3,1.07,1.67,1.67,0,0,0,.35.32.54.54,0,0,0,.75-.18" />
                                    <path class="cls-20"
                                        d="M75.07,178.13l.38.47-1,1.37a1.24,1.24,0,0,0,.12,1.59,1.76,1.76,0,0,0,.41.38.6.6,0,0,0,.84-.23l1-1.38.37.47-1,1.36a.8.8,0,0,1-1.15.26,2.46,2.46,0,0,1-.68-.63,1.81,1.81,0,0,1-.3-2.29Z" />
                                    <path class="cls-5"
                                        d="M60.14,74.72a20.22,20.22,0,0,1,2,1.37,4.74,4.74,0,0,1,1.71,3,17.16,17.16,0,0,1,0,4.7,1.16,1.16,0,0,1-1.72,1,15.39,15.39,0,0,1-2-1,20.22,20.22,0,0,1-2-1.37,4.74,4.74,0,0,1-1.71-3,17.16,17.16,0,0,1,0-4.7,1.16,1.16,0,0,1,1.72-1A15.39,15.39,0,0,1,60.14,74.72Z" />
                                    <path class="cls-24"
                                        d="M60.13,77l.07,0,1.55,1.76a.34.34,0,0,1,.08.2v3c0,.1-.07.14-.15.09L61,81.75a.34.34,0,0,1-.14-.26V80a.31.31,0,0,0-.15-.26l-1.09-.63c-.08,0-.15,0-.15.09v1.51c0,.09-.06.13-.14.08l-.72-.41a.3.3,0,0,1-.14-.26v-3a.09.09,0,0,1,.09-.1l1.56,0A.07.07,0,0,1,60.13,77Z" />
                                    <path class="cls-5"
                                        d="M79.08,90.5l.34.42-.18.29v0a.73.73,0,0,1,.45.1,1.5,1.5,0,0,1,.43.39,1.46,1.46,0,0,1,.35,1.08.79.79,0,0,1,.4.07l.12.06a1.62,1.62,0,0,1,.42.39,1.33,1.33,0,0,1,.17,1.59l-.71,1-.37-.46.68-1a.84.84,0,0,0-.08-1.08,1,1,0,0,0-.25-.22.46.46,0,0,0-.4-.05.31.31,0,0,0-.14.12l-.74,1.06-.37-.46.72-1a.82.82,0,0,0-.11-1,.68.68,0,0,0-.25-.21.46.46,0,0,0-.43,0,.33.33,0,0,0-.15.11l-.71,1-.37-.46L78.78,91A4.64,4.64,0,0,0,79.08,90.5Z" />
                                    <path class="cls-5"
                                        d="M77.65,88.65A1.87,1.87,0,0,1,78,90.78.72.72,0,0,1,77,91a2.43,2.43,0,0,1-.62-.55A1.87,1.87,0,0,1,76,88.29.72.72,0,0,1,77,88.12,2.25,2.25,0,0,1,77.65,88.65Zm0,1.66a1.21,1.21,0,0,0-.17-1.43,1.12,1.12,0,0,0-.33-.3.54.54,0,0,0-.77.17,1.37,1.37,0,0,0,.49,1.73.56.56,0,0,0,.78-.17" />
                                    <polygon class="cls-5"
                                        points="74.41 83.49 74.79 83.95 74.09 84.95 75.49 86.67 76.19 85.68 76.57 86.15 74.9 88.53 74.52 88.06 75.31 86.95 73.9 85.21 73.12 86.33 72.74 85.87 74.41 83.49" />
                                    <path class="cls-5"
                                        d="M83.55,95.94a1.53,1.53,0,0,1,.29,1.87.52.52,0,0,1-.11.13l-1.46-1.8a1.26,1.26,0,0,0,.3,1.47,2.91,2.91,0,0,0,.63.62l-.09.3a3.7,3.7,0,0,1-.76-.74c-.65-.8-.78-1.61-.42-2.13a.75.75,0,0,1,1.08-.2A2.09,2.09,0,0,1,83.55,95.94Zm0,1.34a.92.92,0,0,0-.17-1.15,1,1,0,0,0-.3-.27.51.51,0,0,0-.64.06l1.11,1.36" />
                                    <path class="cls-27"
                                        d="M60.14,104.14a18.54,18.54,0,0,1,2,1.36,4.74,4.74,0,0,1,1.71,3,17.16,17.16,0,0,1,0,4.7,1.16,1.16,0,0,1-1.72,1,15.39,15.39,0,0,1-2-1,20.22,20.22,0,0,1-2-1.37,4.74,4.74,0,0,1-1.71-3,17.16,17.16,0,0,1,0-4.7,1.16,1.16,0,0,1,1.72-1A14.32,14.32,0,0,1,60.14,104.14Z" />
                                    <path class="cls-20"
                                        d="M61.87,109.41a.36.36,0,0,1,.15.27v.51c0,.1-.07.14-.16.09l-.2-.12a1.16,1.16,0,0,1-.2.45l.14.25c.06.1.06.21,0,.25l-.32.18a.14.14,0,0,1-.11,0,.43.43,0,0,1-.11-.12l-.14-.24a1.22,1.22,0,0,1-.49,0v.23c0,.09-.07.13-.16.08l-.44-.25a.36.36,0,0,1-.15-.27v-.23a3,3,0,0,1-.49-.52L59,110a.09.09,0,0,1-.11,0,.36.36,0,0,1-.1-.11l-.32-.54c-.06-.11-.06-.22,0-.26l.15-.08a2.81,2.81,0,0,1-.21-.68l-.2-.11a.36.36,0,0,1-.15-.27v-.51c0-.1.07-.14.16-.09l.2.12a1.16,1.16,0,0,1,.2-.45l-.14-.25c-.06-.1-.06-.21,0-.25l.32-.18a.14.14,0,0,1,.11,0,.63.63,0,0,1,.1.12l.14.24a1.25,1.25,0,0,1,.5,0v-.23c0-.09.07-.13.16-.09l.44.26a.36.36,0,0,1,.15.27v.23a3,3,0,0,1,.49.52l.14-.08a.09.09,0,0,1,.11,0,.29.29,0,0,1,.11.11l.32.54c.06.11.06.22,0,.26l-.15.08a2.81,2.81,0,0,1,.21.68Zm-1.81.3c.43.25.79.05.79-.45a1.72,1.72,0,0,0-.79-1.36c-.43-.25-.79-.05-.79.45a1.72,1.72,0,0,0,.79,1.36" />
                                    <path class="cls-28"
                                        d="M77.93,116.7l.42.36-.32.51.54.66-.16.25-.54-.67-.63,1a.53.53,0,0,0,.06.69,2,2,0,0,0,.24.25l-.14.26a2.1,2.1,0,0,1-.37-.37,1.39,1.39,0,0,1-.32-.63.76.76,0,0,1,.15-.64l.63-1-.33-.39.17-.25.32.4Z" />
                                    <path class="cls-28"
                                        d="M76.24,115.35a1.59,1.59,0,0,1,.33,1.88l-.11.13L75,115.57a1.31,1.31,0,0,0,.32,1.49,2.82,2.82,0,0,0,.64.61l-.08.31a3.24,3.24,0,0,1-.77-.74,1.85,1.85,0,0,1-.46-2.13.75.75,0,0,1,1.09-.23A2,2,0,0,1,76.24,115.35Zm0,1.35a.93.93,0,0,0-.19-1.16,1.13,1.13,0,0,0-.29-.26.49.49,0,0,0-.63.08l1.11,1.34" />
                                    <path class="cls-28"
                                        d="M74,111.54a2.17,2.17,0,0,1,.62.55,3.61,3.61,0,0,1,.57.9l-.28.13a3.14,3.14,0,0,0-.48-.79A1.81,1.81,0,0,0,74,112c-.21-.11-.35-.07-.43,0s0,.56.28,1.18.51,1.26.27,1.62-.44.3-.8.09a2.66,2.66,0,0,1-.69-.62,4.32,4.32,0,0,1-.64-1.06l.26-.15a3.93,3.93,0,0,0,.58,1,1.5,1.5,0,0,0,.42.37c.2.12.37.1.47,0s.08-.55-.23-1.16S73,112,73.18,111.6,73.62,111.35,74,111.54Z" />
                                    <polygon class="cls-28" points="79.29 122.25 80.44 120.48 80.82 120.95 79.67 122.7 79.29 122.25" />
                                    <path class="cls-28"
                                        d="M79.37,118.43l.42.37-.32.5L80,120l-.16.24-.54-.66-.63.94a.53.53,0,0,0,.06.69,1.15,1.15,0,0,0,.24.25l-.14.27a2.53,2.53,0,0,1-.37-.37,1.38,1.38,0,0,1-.32-.64.8.8,0,0,1,.14-.64l.64-1-.32-.4.15-.25.33.4Z" />
                                    <path class="cls-28"
                                        d="M81.09,120a.44.44,0,0,1,.11.49.17.17,0,0,1-.23,0,.43.43,0,0,1-.14-.13.45.45,0,0,1-.11-.48.18.18,0,0,1,.24,0A.71.71,0,0,1,81.09,120Z" />
                                    <path class="cls-28"
                                        d="M81.44,121.69l.34.41-.17.32h0a.67.67,0,0,1,.46.11,1.62,1.62,0,0,1,.46.4,1.42,1.42,0,0,1,.25,1.65l-.69,1-.39-.47.67-1a.89.89,0,0,0-.14-1.11,1,1,0,0,0-.28-.24.39.39,0,0,0-.58.07l-.69,1.06-.38-.46.84-1.29A4.53,4.53,0,0,0,81.44,121.69Z" />
                                    <path class="cls-28"
                                        d="M85.36,126.41l.33.41a4.82,4.82,0,0,0-.33.47l-.67,1c-.27.4-.53.54-.84.44a.72.72,0,0,1-.22-.1A2.41,2.41,0,0,1,83,128a3.68,3.68,0,0,1-.61-1l.26-.12a3.38,3.38,0,0,0,.53.89,1.93,1.93,0,0,0,.41.37.45.45,0,0,0,.67-.17l.13-.19v0a.69.69,0,0,1-.41-.11,1.6,1.6,0,0,1-.45-.4,1.73,1.73,0,0,1-.34-1.94.75.75,0,0,1,1.09-.21,2,2,0,0,1,.48.41,1.83,1.83,0,0,1,.46,1.11Zm-.45.45a1.19,1.19,0,0,0-.31-1,1.31,1.31,0,0,0-.31-.28.53.53,0,0,0-.76.19,1.18,1.18,0,0,0,.21,1.38,1,1,0,0,0,.3.26.37.37,0,0,0,.59-.08l.21-.32a.51.51,0,0,0,.07-.17" />
                                    <path class="cls-27"
                                        d="M60.14,133.15a20.22,20.22,0,0,1,2,1.37,4.74,4.74,0,0,1,1.71,3,17.16,17.16,0,0,1,0,4.7,1.16,1.16,0,0,1-1.72,1,15.39,15.39,0,0,1-2-1,20.22,20.22,0,0,1-2-1.37,4.74,4.74,0,0,1-1.71-3,17.16,17.16,0,0,1,0-4.7,1.16,1.16,0,0,1,1.72-1A15.39,15.39,0,0,1,60.14,133.15Z" />
                                    <path class="cls-5"
                                        d="M60,135.16a2.45,2.45,0,0,1,1.12,1.93c0,.49-.25.78-.6.79a4.46,4.46,0,0,1,1.2,3l-3.47-2c0-1.07.52-1.67,1.22-1.57a2.47,2.47,0,0,1-.59-1.48C58.85,135.09,59.35,134.8,60,135.16Z" />
                                    <path class="cls-28"
                                        d="M72.49,141.54a1,1,0,0,1-.08.82.5.5,0,0,1-.58.24,1,1,0,0,1-.3-.12,2.85,2.85,0,0,1-.77-.7,3.27,3.27,0,0,1-.29-.39l-.65,1-.38-.46,1.61-2.4a8.68,8.68,0,0,1,.76.83A3.26,3.26,0,0,1,72.49,141.54Zm-.47.38c.22-.33,0-.81-.37-1.32a3.25,3.25,0,0,0-.37-.4l-.63.94a3.21,3.21,0,0,0,.29.4,1.85,1.85,0,0,0,.5.46c.24.14.44.12.58-.08" />
                                    <path class="cls-28"
                                        d="M75.12,145.58a1.88,1.88,0,0,1,.41,2.14.72.72,0,0,1-1.06.18,2.33,2.33,0,0,1-.6-.54,1.88,1.88,0,0,1-.41-2.12.73.73,0,0,1,1.07-.18A2.14,2.14,0,0,1,75.12,145.58Zm0,1.67a1.23,1.23,0,0,0-.17-1.44,1.72,1.72,0,0,0-.33-.3.54.54,0,0,0-.77.19,1.26,1.26,0,0,0,.18,1.45,1.09,1.09,0,0,0,.31.27.54.54,0,0,0,.78-.17" />
                                    <path class="cls-28"
                                        d="M72.82,142.85l.33.41-.21.35,0,0a.55.55,0,0,1,.52.06,1,1,0,0,1,.31.27l.1.14-.2.31-.12-.18a1.1,1.1,0,0,0-.27-.23.43.43,0,0,0-.52,0,.43.43,0,0,0-.11.12l-.63.94-.38-.47.81-1.2A4.57,4.57,0,0,0,72.82,142.85Z" />
                                    <path class="cls-28"
                                        d="M77.55,147.23a2.14,2.14,0,0,1,.57.51,3.49,3.49,0,0,1,.46.78l-.27.11a2.29,2.29,0,0,0-.38-.65,1.08,1.08,0,0,0-.31-.28.39.39,0,0,0-.56.16L77,148l1.22,1.48-1.17,1.74-.38-.46,1-1.5-.84-1-1,1.5-.38-.46,1-1.5-.3-.36.16-.24.3.36.06-.1A.59.59,0,0,1,77.55,147.23Z" />
                                    <polygon class="cls-28" points="79.4 149.39 79.79 149.85 78.07 152.41 77.68 151.94 79.4 149.39" />
                                    <path class="cls-28"
                                        d="M80.74,152.43a1.56,1.56,0,0,1,.31,1.87c0,.06-.09.1-.11.13l-1.47-1.8a1.3,1.3,0,0,0,.3,1.48,2.9,2.9,0,0,0,.65.62l-.09.31a3.83,3.83,0,0,1-.77-.75,1.84,1.84,0,0,1-.44-2.13.76.76,0,0,1,1.09-.21A2.07,2.07,0,0,1,80.74,152.43Zm0,1.34a.92.92,0,0,0-.18-1.16,1.11,1.11,0,0,0-.29-.26.51.51,0,0,0-.64.06l1.11,1.36" />
                                </g>
                                <g id="search-bar">
                                    <image class="cls-22" width="109" height="97" transform="translate(28.24 2.68)"
                                        xlink:href="data:image/png;base64,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" />
                                    <path class="cls-20"
                                        d="M105.88,49.3A12.32,12.32,0,0,1,111.46,59l0,10.65c0,3.56-2.52,5-5.62,3.2L42.87,36.48a12.26,12.26,0,0,1-5.58-9.66l0-10.66c0-3.55,2.52-5,5.61-3.2Z" />
                                    <path class="cls-27"
                                        d="M103.29,64.52c.17.38.12.73-.13.79l-.65.15a.4.4,0,0,1-.31-.07,1.07,1.07,0,0,1-.44-.51L100,61.08A3.79,3.79,0,0,1,99,60.67,7.29,7.29,0,0,1,96.06,57c-.74-2-.43-3.78.72-4.28A2.48,2.48,0,0,1,99,53a7,7,0,0,1,2.72,3.19c.87,1.92.77,3.73-.13,4.51Zm-3.19-5.21c.87-.21,1.08-1.47.47-2.83A4,4,0,0,0,99,54.62a1.54,1.54,0,0,0-1.12-.24c-.87.2-1.08,1.47-.47,2.83A4.1,4.1,0,0,0,99,59.07a1.63,1.63,0,0,0,1.12.24" />
                                    <path class="cls-28"
                                        d="M67.86,37.11a1.93,1.93,0,0,1,.37,2.34,1.08,1.08,0,0,1-.14.15l-1.83-2.26a1.62,1.62,0,0,0,.37,1.85,4,4,0,0,0,.8.78l-.11.38a4.85,4.85,0,0,1-1-.94c-.8-1-1-2-.52-2.66a1,1,0,0,1,1.36-.25A2.47,2.47,0,0,1,67.86,37.11Zm0,1.67a1.16,1.16,0,0,0-.21-1.44,1.41,1.41,0,0,0-.37-.34.65.65,0,0,0-.8.07l1.38,1.71" />
                                    <path class="cls-28"
                                        d="M65,32.29a2.93,2.93,0,0,1,.79.71,4.91,4.91,0,0,1,.7,1.14l-.36.15a4.17,4.17,0,0,0-.59-1,1.68,1.68,0,0,0-.47-.44c-.25-.14-.43-.09-.52,0-.2.29-.08.7.32,1.48.47,1,.61,1.58.31,2s-.56.35-1,.1a3.47,3.47,0,0,1-.88-.81,5.24,5.24,0,0,1-.79-1.33l.34-.18a4.51,4.51,0,0,0,.71,1.23,2.09,2.09,0,0,0,.53.49c.25.15.46.13.59-.06s.11-.68-.27-1.43c-.47-.91-.66-1.61-.37-2S64.62,32.05,65,32.29Z" />
                                    <path class="cls-28"
                                        d="M70.37,40.21c.79,1,.68,1.67.38,2.1l-.57.8a2.61,2.61,0,0,0-.31.56l-.44-.53.16-.32,0,0a.93.93,0,0,1-.43-.14,2.44,2.44,0,0,1-.59-.52c-.53-.65-.58-1.3-.36-1.6s.48-.29.86-.07a5,5,0,0,1,1.26,1.21l0,0c.13-.17.29-.57-.24-1.22a2.87,2.87,0,0,0-.73-.65l-.06,0,.07-.39.06,0A3.65,3.65,0,0,1,70.37,40.21Zm-.5,2.12.26-.37A3.65,3.65,0,0,0,69.2,41c-.21-.12-.39-.14-.51,0a.8.8,0,0,0,.18.92,1.54,1.54,0,0,0,.4.35.55.55,0,0,0,.48.07l.12-.09" />
                                    <path class="cls-28"
                                        d="M76.91,46.53l.48.59-.94,1.33a1,1,0,0,1,.54.16,2.1,2.1,0,0,1,.57.49,1.74,1.74,0,0,1,.26,2l-.89,1.27-.47-.58.86-1.23a1.09,1.09,0,0,0-.16-1.39,1.35,1.35,0,0,0-.37-.32.57.57,0,0,0-.54-.07.32.32,0,0,0-.16.15l-.91,1.28-.47-.58Z" />
                                    <path class="cls-28"
                                        d="M74.18,45.22A3.18,3.18,0,0,1,75,46a4.24,4.24,0,0,1,.58.92l-.32.16a3.19,3.19,0,0,0-.48-.77,2,2,0,0,0-.54-.5.66.66,0,0,0-1,.17,1.67,1.67,0,0,0,.35,1.92,3,3,0,0,0,.65.61l-.12.39a4.08,4.08,0,0,1-.84-.81c-.78-1-1-2-.53-2.69A.92.92,0,0,1,74.18,45.22Z" />
                                    <path class="cls-28"
                                        d="M72.07,42.4l.41.51-.27.45,0,0a.73.73,0,0,1,.65.08,1.54,1.54,0,0,1,.39.34l.13.19-.26.36a1.19,1.19,0,0,0-.15-.21,1,1,0,0,0-.34-.3.54.54,0,0,0-.64,0,.58.58,0,0,0-.15.16l-.8,1.14-.47-.58,1-1.48A6.67,6.67,0,0,0,72.07,42.4Z" />
                                </g>
                                <image class="cls-22" width="105" height="125" transform="translate(114.24 74.68)"
                                    xlink:href="data:image/png;base64,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" />
                                <path class="cls-25"
                                    d="M190.64,120.38,128.58,84.54a2.38,2.38,0,0,0-2.38-.23l-1.38.8a2.38,2.38,0,0,1,2.38.23l62.07,35.84A7.33,7.33,0,0,1,192.6,127L192.47,172a2.33,2.33,0,0,1-1,2.14l1.38-.8a2.33,2.33,0,0,0,1-2.14l.13-45.08A7.36,7.36,0,0,0,190.64,120.38Z" />
                                <path class="cls-29"
                                    d="M189.27,121.18A7.33,7.33,0,0,1,192.6,127L192.47,172c0,2.12-1.5,3-3.35,1.91L127.05,138.1a7.34,7.34,0,0,1-3.33-5.77l.13-45.08c0-2.12,1.51-3,3.35-1.91Z" />
                                <path class="cls-30"
                                    d="M246.08,122.7,205.74,99.41V232.69l40,23.07c4.37,2.53,7.93.51,7.94-4.52L254,136.37A17.4,17.4,0,0,0,246.08,122.7Z" />
                                <path class="cls-24"
                                    d="M229.72,136.58c7.62,4.4,13.78,15.07,13.76,23.82l-.18,60.32c0,8.76-6.22,12.3-13.84,7.89s-13.78-15.06-13.76-23.83l.17-60.32C215.9,135.71,222.1,132.18,229.72,136.58Z" />
                                <image class="cls-22" width="47" height="54" transform="translate(213.13 137.58)"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC8AAAA2CAYAAABX/sD/AAAACXBIWXMAAAsSAAALEgHS3X78AAAEkUlEQVRoQ+1Z7XLbMAyDkyxps+39n3RLk7TRfliIIJiy7H5tvRvveLJdOQYokJTdIaWEr2qb3oR/2b40+F1vQs+GYRj8WvokLQ5rnxOBXWIfQWgx+AD0UhLVA96TRBe8gR4aY8tSY3wXErPgA+D06NwtoQbt5+PBG0g0wQtwB7sJjnUeUINNAG7BNc57NYFetSEggtyYOxkgBk53IgCQGKi1JELwJhcFuZWRx0qE5qBfZBxQE7nfMwzDsIbABLzJReVBwLvsWxlJgKag6c95Ds8JfLIKSwm0ZDMH/Ju5EhhQwCjoq41O4lUrUIEPqovKgsD32Q95VAK8n1En4Eset3m8ylzaagJzkefIyBP8AcCDjEqA0iF4Aj/ncZePNU+GPJf30dZFPpsDV/CM+AOAx+wkwugDBfwl+1N2l5gawTKZ0Yv+Us0zSQn+EcB3AEcUAnsU6SSMkiHwA+rV0dJK09p/L7tzBO7gG3sXjTwTlJE/AviRxyOKfCLwvzEP3nuDgl0V+cHcCexRZHME8DOPjP4GNfgTCjFNaqDuBdrItJk1zcF7tfGE9aQ9YpQPJUTpAKPmzyikNKGBaSNz5/Ob0lmqea84SkD1/4DymzeUyGspJWiWUvcXlNWD3DOxFniaS8iblVYfJi91f8NYKlUubF4EehVX8Br9ZuXplUq9xkRrEdC6v8X48GdM6782rjNKD7igLqPqr4o8TQkpEZcTiexQktaBE/STOaUV9YGQQAQ+2Rgd63lEYpevc/TSeUJpbr7F8O7btCWR19KlpSyqy0qEIKjzgzn3SATu3fdNsokAskq4e51WaWmF2pvvMAW+KOpAXXeBqWRaoL1SsFookWg1KK3o2IF3CSyJPMFEoC+B6x7Hl1wTXt0LgSdraHfwKSW+S7pMNOpRmdOKQSnwdzZyv+dG5EAMNtR9K/KRzh04q8YJ48bL9y+3fJxQNyBKy5N9tS2VDR8agf+FKXAC5u8/ozQj76ROYjGZXp3XKsKHslZrqfMdI4lSQjcUmZ0xTfIo0dVCQhV40T3Qlw03XFrmgLqT6v5e36ieUN5rW6vQXYlek4rAbwMnYc69YuygXBHKiC8mp3ysUvJ8AGaAA/MJy9EJXFB3UV0pjTq7KMG/oGyRf+WR4Of6RNMm4APp3DACJHit02oa9TNq8Pz7FSXRuQIefQWv8plYr9rQSIDgvRYzsprQ+tLNOfp3lY9Hn0FbLxtrWED5MSAG7nlxRlw+dWWYuCqdKPJAg0Qz8g35ACPA+zRMwXOLwG6r4JkTJKAvI1HlARrAgX61AabyAcaHqCYdvNb+qBqRgO6P5iIffv6eBR/IBygEgBg8m5Pvzzlf5yoJ7bzJPLRu5GcIeOQVVLTN1Xs5l/O9y1bJ2v1iNmeNBG51YgUdbXGVLO/RcVHUAfT/G6gWfAJ3V8D+YkGLVuwm5xXwuQ+tq8DThISOc+7m0Y28+z+qRbJxa+QBpeSEWqYSTHa+yF4VebVASr1jYEq6utaLOO3N4GnBJ3JgPvJAEOWlwIF3BK/WINK0NYDVPgT8Z5lva7+U/Qf/t+wPxSIZaq2mWxcAAAAASUVORK5CYII=" />
                                <path class="cls-20"
                                    d="M229.16,148.43a37.12,37.12,0,0,1,4.13,2.76,9.53,9.53,0,0,1,3.46,6,34.23,34.23,0,0,1,0,9.5,2.34,2.34,0,0,1-3.48,2,31.84,31.84,0,0,1-4.13-2,38.69,38.69,0,0,1-4.13-2.77,9.53,9.53,0,0,1-3.46-6,34.23,34.23,0,0,1,0-9.5,2.34,2.34,0,0,1,3.48-2A30.69,30.69,0,0,1,229.16,148.43Z" />
                                <image class="cls-22" width="47" height="53" transform="translate(213.13 163.58)"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC8AAAA1CAYAAADRarJRAAAACXBIWXMAAAsSAAALEgHS3X78AAAEfUlEQVRoQ9VZ7XLiMBCTAxxt797/UQ9oQnw/EmF5s/6AwsyxMztOmhQkWbu22xBjxLvG0Hrhf463Br9vvVCLEEKoPY8v9mS45/NbYFvxbDJd4B3Qel8ipB+cfcmzSDTBC/DWaCM2xh+TqII3wO21JmT0wNrU5w+TKIJ3gDOHwrUNAp0L1xmJRwi43aYAfKikJaBgNQO2JAAghhDCvQRqrdIDvjM5yMh3VdkZwFWS9wGJECNStF4SG/Cms3jA907qDAA58EnGaX2PZCyJLtCMkvKez3cADiZ/ISeg4AlwAjCuOckY1ueMm516LZSBd1RX4HskwEczkgB/R1UfAXxLluqENQF0EvCUL3md4I8APiSVwG79DCpP4Jc1z9jWiI2bhVoEegq2BP5rTZI4rO+xaKk6QZ+RCLZarHe9iR7Pa6HSKp9YgP9ekzNA61B5qn4C8Bdb8EDenex6gJr6N/AVv3uep/J/sIDnDByQttkTFvBnLMQ4M3wO+MCZSs6Nkuf1ulSwVJ8EPtdn9D2VJ3jtSKowk91pQL6gFdW34D31S763BL6QW0fBaz0A23WAawGJDOhQv8fzta5j/U/rBCwgRuSqA1vQo1xzEduo70Wt2wBlAlrAaiNah8qNyOtgRgLJvn9ZRxbzDmn1vYVnnRZ4wJ8F3d+wDkjiiOT7CckuBM7ef0ZqoyTgLWJF9XvAa3jF7BU0fc9tgNf3dYE7IK3SFji/q1mwNrwW5gW/SC1FYkDy/wUJ9AfSjGkbtevAQ8pHGb3WxuTP+a5aS1VXWxEwFd/JaG1aDF0wgBwwR68fTyZ1v64qWVsxFbjaxfq9Gi3lFbwFzW2u7hjZ9rSnA363Ynqgu5S/gY8x8iRjPW5XQAV8McmfcUbZr229EFgP6CKBlvIecG11zBOSl7U17pA8r7ayBdiltI0SePU8CWiPZrvjblHbHWfvut4TPC2l9aFkPFLV8MCzY5T8rpstC5yLE8nqPket5e1nbLNoRk35km0uWMCekIOmd/n+iNRFZiygT8hX1BIJnYUimQy8FC3gKz9iAaqnIqbaZUIiqfscHkyUgNrJ1kR1Fno8rwQI/oK8zfFdfU8LmKT0VEUCuqv0bFSMDXhH/RnJtwGLWmxz2iGs6nquBZJ1zljAKwFayKpfLeJWq+RIRQPSZkvbmgIfkTZeegiZkboV1aeFvE5UBQ4UwDfUZ9jnFryeW1kP+pwzwC5EArMkwyXRs6tk6Ifpcw+83S0SvKqvfxKxhfsz25jtAtAGz97+jbz3s6htQX+bHFGxTc8BPIsGAVXGKm+PdbSYktTNnW2XXr/fRMs2NQIe+CsWsGyp9mBhZ0nzLtWBDvBAkYC3mM1YwE7YbnUZWpBXk/qsqjqA9j/UNKQDBScHbAF7BwsSVcIWNMfqPxq6lGc4e34Fzy9t7c+jydm57oq7lNcws8AxVO411BKWTNPrjIfBA/D+OFsbNWJjbAIHfgieYUgAW8D23n7pXaAZTwHPcEh0xz2gGU8F70WJ0CNgbbwc/CtjwBvHW4P/B6/TEHeF7HhXAAAAAElFTkSuQmCC" />
                                <path class="cls-20"
                                    d="M229.16,173.94a38.69,38.69,0,0,1,4.13,2.77,9.48,9.48,0,0,1,3.46,6,34.23,34.23,0,0,1,0,9.5,2.34,2.34,0,0,1-3.48,2,30.69,30.69,0,0,1-4.13-2,37.12,37.12,0,0,1-4.13-2.76,9.53,9.53,0,0,1-3.46-6,34.23,34.23,0,0,1,0-9.5,2.34,2.34,0,0,1,3.48-2A31.84,31.84,0,0,1,229.16,173.94Z" />
                                <image class="cls-22" width="47" height="54" transform="translate(213.13 188.58)"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC8AAAA2CAYAAABX/sD/AAAACXBIWXMAAAsSAAALEgHS3X78AAAEoUlEQVRoQ9VZYXfaMBBTgJWWbf//n44SCtmHWFhWznECdG/ce34H1Emks6wztBuGAa8am9aE/zleGvyuNaEVXdd1/tnwj7TYrX1OBHZJfAehxeAD0EtJFA94JokmeAPdVXIthkp+ColZ8AFwjui9x4AStL8fXzxAogpegDvYTfBa5wEl2AHANfiM8+4m0HIbAiLIjQ0nA8TAOZwIAAws1FoSIXiTi4LcSuZrJcJw0BfJHUoit2u6ruvWEJiAN7moPAh4l8ZWMgkwFDTHV5rD9wQ+WYWlBGqymQP+w4YS6JDBKOizZSdx1woU4AN3UVkQ+Fsa+5SVAK9n1Qm4T3mb8lnmMlYTmKs8MytP8HsA75KVAKVD8AR+SnmXXus+6dJcXsdYV/kUDlzBs+LvAD7SIBFWH8jg+zQ+03CJaRAsNzNa1V+qeW5Sgv8A8BPAAZnAG7J0BoySIfA9ytVRa2Wo999sd47ADXzl7KKV5wZl5Q8AfqV8QJZPBP4P5sF7b1Cwqyrf2XACb8iyOQD4nTKrv0EJ/ohMTDc1UPYCbWTazKrh4N1tfMP6pj1glA8lROkAo+ZPyKR0QwPTRuaDz69KZ6nm3XGUgOr/HfmeV+TKq5USNK3UxwV59SDXTKIGnuES8mal7sPNS91fMVqlyoXNi0DPMhS8Vr/qPC2r1M+40WoE1Pe3GB/+han/a+M6IfeAHqWN6rir8gwlpERcTiSyQ960DpygP21QWlEfCAlE4AfL0Wt9H5HYpc+Z3TqPyM3NjxjefauxpPJqXWplkS8rEYKgzvc2eEYicO++D8kmAkiX8OE+rdJSh3qzscMU+KKqA6XvAlPJ1EC7U9AtlEi0GtovtpIj4E0CSypPMBHoPhh6xtElJwntG/peV8s3axg38MMw8Luky0SrHtmcOgYPYNQ6LZMr4tpVoJ593qTT1iof6dyB0zWOGA9e3Hxqjdt0D21AF7l3LZp6B5bLhg+NwCtwtcYL8v1pk9pJ3b0YLWK3aPm8uggfSq92q6OGeR27a4d8zvnElES0yT0GAJOfRgrwonteMCebI+Iv4JzfI8uIZI4YCfBIELmUr0Z1FVpNKgK/taFuQbmcUZ5zqPsTRpmRRERgEXBgfsMyO4EeU6sjcFa4RwkeyKvBfXLE/Ao0dT8BH0jnihEcwatfq5eT4BnllxB6/jX9TV2KBGrVn928LbdhkADBqz/rxqa0TsjnFz3L64ZvVX8WOFABbw0LyACB0oO1OgpeG5a6kK4MV0C172clfc4kqpWvyAcYb15MRSmZHhm4gue1ujokoZV3x7lLNgyXDz/Tikd2qj91ELxW389GUQe+PXvNF3AAoXyAcjmBsvIKzI+5OvdLhh70nlv5GQJeeRLYoewHkSvpSjFXN2vzF7O5qGzgqBMTVHTcvd3O5l7ktRZituoA2v8N1Ah+AtehZ3LvA1p5YLpiCrgAXqs6sLDyDN6osgrMV0yBQ/JQGYt0rrGq8hrBKjA7YJ2n4UAnwOeqDjwAnjFDQnMthii3QDMeBs+o/ES+JAoAS4EDTwTPCEgsijWgGU8HH0VE6B6wHv8E/HfFBi8cLw3+L52bLXVqEZowAAAAAElFTkSuQmCC" />
                                <path class="cls-20"
                                    d="M229.16,199.46a38.69,38.69,0,0,1,4.13,2.77,9.48,9.48,0,0,1,3.46,6,34.23,34.23,0,0,1,0,9.5,2.34,2.34,0,0,1-3.48,2,30.69,30.69,0,0,1-4.13-2,37.12,37.12,0,0,1-4.13-2.76,9.53,9.53,0,0,1-3.46-6,34.23,34.23,0,0,1,0-9.5,2.34,2.34,0,0,1,3.48-2A31.84,31.84,0,0,1,229.16,199.46Z" />
                                <g class="cls-1">
                                    <path class="cls-31"
                                        d="M227.33,153.11a1.74,1.74,0,0,1,.45.39l4.38,5.45c.59.74.59,1.73,0,1.78l-4.41.38a.75.75,0,0,1-.44-.12,2,2,0,0,1-.89-1.54v-5.83C226.44,153,226.87,152.84,227.33,153.11Z" />
                                </g>
                                <path class="cls-27"
                                    d="M231.28,181.61a2.6,2.6,0,0,1,1.17,2v3.91c0,.74-.53,1-1.18.67l-4.8-2.77a2.6,2.6,0,0,1-1.17-2l0-3.92c0-.74.53-1,1.17-.67l.42.24.59-.62a.16.16,0,0,1,.21,0l2.37,1.37a.56.56,0,0,1,.21.24l.59,1.31Zm-2.41,3.87c.95.55,1.73.11,1.73-1a3.8,3.8,0,0,0-1.72-3c-.95-.55-1.73-.11-1.73,1a3.75,3.75,0,0,0,1.72,3" />
                                <path class="cls-27"
                                    d="M227.94,205.52a14.44,14.44,0,0,1,1.57,1.06,3.18,3.18,0,0,1,1.13,1.95,12.23,12.23,0,0,1,0,3.63.77.77,0,0,1-1.13.64,11.3,11.3,0,0,1-1.58-.75,14.67,14.67,0,0,1-1.58-1.07,3.15,3.15,0,0,1-1.13-1.95,12.5,12.5,0,0,1,0-3.62.78.78,0,0,1,1.14-.65A10.35,10.35,0,0,1,227.94,205.52Z" />
                                <path class="cls-27"
                                    d="M232.41,209.67a1.12,1.12,0,0,1,.49.86v2.16c0,.34-.24.44-.49.29a.84.84,0,0,1-.25-.22l-.56-.7a1.47,1.47,0,0,1-.34-.87v-1.06c0-.27.14-.45.34-.47l.57,0A.48.48,0,0,1,232.41,209.67Z" />
                                <path class="cls-20"
                                    d="M246.44,136.9a1.34,1.34,0,0,1,.6,1c0,.38-.27.54-.61.35l-4.54-2.63a1.32,1.32,0,0,1-.61-1c0-.38.28-.54.61-.34Z" />
                                <path class="cls-20"
                                    d="M246.45,134.29a1.34,1.34,0,0,1,.6,1.05c0,.38-.27.54-.61.34l-4.55-2.62a1.35,1.35,0,0,1-.6-1.05c0-.38.27-.54.61-.35Z" />
                                <path class="cls-20"
                                    d="M246.45,131.68a1.32,1.32,0,0,1,.61,1c0,.39-.28.54-.61.35l-4.55-2.63a1.33,1.33,0,0,1-.6-1c0-.39.27-.54.6-.35Z" />
                                <g id="progress-bar">
                                    <image class="cls-22" width="131" height="115" transform="translate(124.54 29.99)"
                                        xlink:href="data:image/png;base64,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" />
                                    <path class="cls-32"
                                        d="M219.51,85.79l-76.19-44c-1.88-1.09-3.59-1.19-4.82-.47l-1.31.76c1.23-.71,2.94-.61,4.82.48l76.18,44A14.88,14.88,0,0,1,225,98.25l0,12.89c0,2.14-.76,3.64-2,4.35l1.31-.76c1.22-.71,2-2.21,2-4.35l0-12.89A14.85,14.85,0,0,0,219.51,85.79Z" />
                                    <path class="cls-20"
                                        d="M218.19,86.55A14.88,14.88,0,0,1,225,98.25l0,12.89c0,4.3-3,6-6.8,3.88L141.93,71a14.91,14.91,0,0,1-6.76-11.7l0-12.89c0-4.3,3.06-6,6.8-3.87Z" />
                                    <polygon class="cls-33" points="161.62 65.02 159.35 70.67 155 68.16 157.28 62.51 161.62 65.02" />
                                    <polygon class="cls-33" points="180.14 75.71 177.87 81.36 173.53 78.85 175.8 73.2 180.14 75.71" />
                                    <polygon class="cls-33" points="152.36 59.67 150.09 65.32 145.74 62.81 148.01 57.16 152.36 59.67" />
                                    <polygon class="cls-33" points="170.88 70.37 168.61 76.02 164.26 73.51 166.53 67.86 170.88 70.37" />
                                    <path class="cls-27"
                                        d="M181.42,76.45l0,7-36.34-21a5.26,5.26,0,0,1-2.39-4.13V56.84c0-1.52,1.07-2.14,2.4-1.37L148,57.16l-2.27,5.65,4.35,2.51,2.27-5.65,4.92,2.84L155,68.16l4.34,2.51L161.62,65l4.91,2.84-2.27,5.65L168.61,76l2.27-5.65,4.92,2.83-2.27,5.65,4.34,2.51,2.27-5.65Z" />
                                    <path class="cls-34"
                                        d="M181.4,83.4l0-7L192.7,83a5.28,5.28,0,0,1,2.39,4.14v1.45c0,1.52-1.07,2.13-2.4,1.36Z" />
                                    <path class="cls-35"
                                        d="M210.08,86.09a40.71,40.71,0,0,1,4.48,3,10.27,10.27,0,0,1,3.74,6.48,36.83,36.83,0,0,1,0,10.29A2.55,2.55,0,0,1,214.5,108a32.8,32.8,0,0,1-4.47-2.18,43.08,43.08,0,0,1-4.48-3,10.32,10.32,0,0,1-3.74-6.49,36.76,36.76,0,0,1,0-10.28,2.54,2.54,0,0,1,3.77-2.15A32.71,32.71,0,0,1,210.08,86.09Z" />
                                    <path class="cls-20"
                                        d="M213.12,97.07a4.6,4.6,0,0,1,1.93,3.44c0,1.36-.94,1.9-2.11,1.23l-5.36-3.1a5.42,5.42,0,0,1-2.51-4.46c.05-1.39,1-2,2.22-1.43.53-.84,1.58-1,2.78-.33A6.93,6.93,0,0,1,213.12,97.07Zm-1.31,1c.12-.07,0-.36-.14-.46l-.78-.45V95.51a.42.42,0,0,0-.2-.33l-1.27-.74c-.11-.06-.2,0-.2.11v1.69l-.78-.45c-.18-.1-.26.09-.14.3l1.6,2.78a.41.41,0,0,0,.14.15.12.12,0,0,0,.14,0l1.62-.92" />
                                </g>
                                <g class="cls-1">
                                    <path class="cls-20"
                                        d="M176.66,123.07a2.91,2.91,0,0,1,1.33,2.3c0,.85-.6,1.2-1.34.78a3,3,0,0,1-1.32-2.32C175.33,123,175.93,122.65,176.66,123.07Z" />
                                    <path class="cls-20"
                                        d="M185,125.59a3.7,3.7,0,0,1,1.66,2.88l0,8.44c0,1.06-.76,1.49-1.68,1l-10-5.78a3.67,3.67,0,0,1-1.66-2.89l0-8.44c0-1.06.75-1.48,1.67-1Zm.31,7.56,0-5.45a.73.73,0,0,0-.33-.57l-10-5.79c-.19-.1-.34,0-.34.19l0,7.24,1.85-1a.8.8,0,0,1,.83.08,2.33,2.33,0,0,1,.83.87l.8,1.39,2.49-2a.78.78,0,0,1,.89,0,2.55,2.55,0,0,1,.9,1l2.1,4.05" />
                                </g>
                                <image class="cls-22" width="57" height="51" transform="translate(148.43 156.88)"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADkAAAAzCAYAAAAtg6DjAAAACXBIWXMAAAsSAAALEgHS3X78AAAFfklEQVRoQ+WaYVfiSBBFbxAQEB1dz+7//4O7MwrjCAjZD9WPrhQdiOhsmNk+pw+ZGGJuv3pVlXaquq753cfg1AW/wxieugCgqqpKx/UvKH1VemYHFT8B/BdquHzwAyUToObAHQu0DnOnNblU2AakAxwAV2HKvzWwA7Zu7rhg2D1kABwCI2Cc5shdWwNvwMbNNxzwpcHGcK0w1UbAFJilz2k6N8BU2wAr4DXNFbDGYN9wyl4CqIf0Kl5jgHfAF2AOTNLPdhjQD+B7mi/p368E2KqqakzU3mCjkvLiGLgB7oFH4AEDHWPhusLAFsBz+lxgwIJVKG+BuqqqHfQTwkM4yKhRyUfgLwx4mq5ZY0DPwLc0n9IUrA/jXv1aCld5coKp9wD8icHO08/fMCUF+TXNGzLsMl0j2N78Wko88uUYU26O+fIxfY6xB33FQO7T+bt0rWC/Yaou6dmvpbYugk6wh77FYCbpmg0GdhumYOfkMF7ShP1P/RrDNXY7Ct0R5tMpBnyFqakSM0vn5zRh7zBlBduLXz2k2jQ/1MoJWOqO0vkxBj8hwwpUkILuza+lcG30pW7WZJXV5qkzktITsqpR0d78GiE9WGzd1L7t0rVq3tXbCtiHtYc9x6+fEsKlcPWAat30AK80WzwpGnveGMLv8euP9Hv9on4ohIdgq5RWTJAbDOgFW2V1NjcYwFX6/igd+xCODb6UbfPrnBzC6p6Kfj03hKOSUnFNroNPZC9NyIC79G+9oUhRHccQPuZXwX7FFuSZ3BMrC59dckrhusVuqt70H+wXj7EH1zUbMvg1WdVBmF396rOwMnEM4YOS0wU0Jh6vpNo2lYwB+V1SXtUbyhSDHZOV1OzqV4WyjhXCpZIjVbddQngPmXwZPbkgP6g//8PNL2QFpjRVfY9fI6zuOSOrKtgVh35tVbWthEgtNQNSUF5VQlpi4XRP9taMrKoP4Ta/qnX0ycnPW5pZ2Pv1Nd33DVO1CNqATGqqDq51muzBFflleRnmA/aL78iqlmDb/CrYGe2ZWPd9CvdcYaMIetDxFEC1aRWVFOjCzYc0/UPNsLA85lf1yL5NjKC+3Cir6x7QrPPHIeEAVF+MoF5R1VHVuQeaIXzMrwN3rq3k+PCd0VwwaHZqdVVVlVezCAkNUL9CCts1OXSjqsdg2/waVY0lRyEcFwpySdGOoX9m4AgkNDqh/d4q+aaClaolSGXELn4VZCw5CmGFfCxnazf3raBX8ygk5K4iwWqVYvhqY8tn3SVN2K5+bSs5Q3degMoPmnqbkShAB0iNBFunTS/fHR0LYSn5Hr+WWkQf0h7Q31ulZYg9j67tDqlxJIT15hITk2Db/KquSX4ttYg+g26xxdSesBZKGdfXZeAMSDgI4S1NVb1Puvj1heZGWKlF9D7VBtvMzbg4FYB8eRakhoPdkcOjq18X7vgPMmxbyYFyTfUJyav4MSXjONOvvpE41SLKqyoLSk5++tDeA8InQWp09KveYDxsVFYlR12OXvUGHNbDk+NTIaGTX/22ikB9cvIlxycmbbvUHG6RFJsAjU+H1DjhV21W+T2ktq5pQQa9TvdakZOW3+nTojZAfxqkxgf8KlBfV2eY/zYYvLY29Y5ZBP3pkBofaBGfyJA32DPvsMXQH5oW6XuNbqdzW/eZ48wWUYqptMiX2rn4G1uIFzJkP0r68Y4QFqi2Q5V8SNcpYT2lY4VsI/P2AqlxouR4r34ndzVD8paHNtxeKISrRvE/K/UxkqrQfBPRG4g6HL2JVOS9KP+qtd/Yqh3YxUBqJFhNdTECvnI/8yHuZ13X9WUqGUeAFXBs2eTn/dZHXQC6WEgNF8bxE3JyqSFn7zguHjIOB93pTwTwC0KeMwb8D8a/E3bTf2qPnNgAAAAASUVORK5CYII=" />
                                <path class="cls-36"
                                    d="M189.85,181.63l-33.33-19.24a2.12,2.12,0,0,0-2.11-.21l-.58.34a2.09,2.09,0,0,1,2.11.21L189.27,182a6.52,6.52,0,0,1,3,5.12l0,5.64a2.06,2.06,0,0,1-.87,1.9l.58-.34a2.08,2.08,0,0,0,.87-1.9v-5.64A6.53,6.53,0,0,0,189.85,181.63Z" />
                                <path class="cls-20"
                                    d="M189.27,182a6.52,6.52,0,0,1,3,5.12l0,5.64c0,1.88-1.34,2.64-3,1.69l-33.33-19.24a6.54,6.54,0,0,1-3-5.12l0-5.64c0-1.88,1.33-2.64,3-1.69Z" />
                                <path class="cls-31"
                                    d="M164.94,171.72a2.72,2.72,0,0,1,1,1,3,3,0,0,1,.38,1.41,1.27,1.27,0,0,1-.48,1.08,4.85,4.85,0,0,1-1.21.61l-.55.22a.19.19,0,0,1-.19,0,.68.68,0,0,1-.19-.19l-.55-.87c-.48-.76-.9-1.41-1.2-2a3.69,3.69,0,0,1-.47-1.63,1.12,1.12,0,0,1,.39-1,.91.91,0,0,1,1,.07,2.46,2.46,0,0,1,.76.75,4,4,0,0,1,.3.54.84.84,0,0,1,.31-.19A1,1,0,0,1,164.94,171.72Z" />
                                <path class="cls-37"
                                    d="M173,176a1.93,1.93,0,0,1,.88,1.52c0,.56-.4.79-.88.51a1.84,1.84,0,0,1-.65-.7l-1.6.12a1.22,1.22,0,0,1,0,.32.77.77,0,0,1,0,.27l1.59,2a.62.62,0,0,1,.65,0,2,2,0,0,1,.88,1.53c0,.55-.4.78-.88.5a1.93,1.93,0,0,1-.88-1.52,1.52,1.52,0,0,1,0-.23l-1.61-2a.6.6,0,0,1-.61-.07,1.93,1.93,0,0,1-.88-1.52c0-.56.4-.78.88-.5a1.64,1.64,0,0,1,.61.64l1.62-.13a2.29,2.29,0,0,1,0-.25C172.08,176,172.48,175.72,173,176Z" />
                                <path class="cls-37"
                                    d="M182.94,186.25a.94.94,0,0,1,.42.73v.14c0,.27-.19.37-.42.24L178,184.51a.89.89,0,0,1-.42-.73v-.14c0-.27.19-.37.42-.24Z" />
                                <path class="cls-37"
                                    d="M180.78,180.57a.66.66,0,0,1,.3.52v1.59l.66.39c.16.09.24.35.13.42l-1.27.79s-.08,0-.13,0a.35.35,0,0,1-.13-.14l-1.26-2.25c-.11-.19,0-.37.13-.28l.66.39v-1.6c0-.19.13-.26.3-.17Z" />
                                <polygon class="cls-38"
                                    points="155.86 111.48 155.81 131.16 138.68 121.27 138.73 101.59 155.86 111.48" />
                                <g class="cls-1">
                                    <polygon class="cls-39"
                                        points="150.08 115.2 153.29 113.34 153.24 133.02 150.02 134.89 150.08 115.2" />
                                    <polygon class="cls-40"
                                        points="132.95 105.32 136.16 103.45 153.29 113.34 150.08 115.2 132.95 105.32" />
                                </g>
                                <polygon class="cls-24" points="150.08 115.2 150.02 134.89 132.89 125 132.95 105.32 150.08 115.2" />
                                <path class="cls-38"
                                    d="M160.57,133.43a8,8,0,0,1,3.63,6.28c0,2.31-1.64,3.24-3.65,2.08a8,8,0,0,1-3.63-6.28C156.93,133.2,158.56,132.27,160.57,133.43Z" />
                                <path class="cls-41"
                                    d="M158.59,135.06a2.59,2.59,0,0,0-2.59-.25l-1.75,1a2.57,2.57,0,0,1,2.59.26,8,8,0,0,1,3.63,6.28,2.54,2.54,0,0,1-1.06,2.33l1.74-1a2.53,2.53,0,0,0,1.06-2.33A8,8,0,0,0,158.59,135.06Z" />
                                <path class="cls-31"
                                    d="M156.84,136.08a8,8,0,0,1,3.63,6.28c0,2.31-1.64,3.24-3.65,2.08a8,8,0,0,1-3.63-6.28C153.2,135.85,154.83,134.92,156.84,136.08Z" />
                                <g id="settings">
                                    <path class="cls-25"
                                        d="M148.2,180.28,131,170.34c-2.12-1.23-4-1.34-5.43-.54l-1.93,1.13c1.38-.81,3.31-.7,5.43.53l17.21,9.94a16.73,16.73,0,0,1,7.61,13.18l-.05,19.79c0,2.4-.86,4.09-2.23,4.89l1.93-1.13c1.37-.79,2.22-2.48,2.23-4.89l.06-19.79A16.78,16.78,0,0,0,148.2,180.28Z" />
                                    <path class="cls-42"
                                        d="M146.26,181.4a16.73,16.73,0,0,1,7.61,13.18l-.05,19.79c0,4.84-3.45,6.79-7.66,4.35l-17.22-9.94a16.75,16.75,0,0,1-7.61-13.17l.06-19.79c0-4.84,3.44-6.79,7.66-4.36Z" />
                                    <path class="cls-20"
                                        d="M145.35,198.77a1.57,1.57,0,0,1,.73,1.27v2.4c0,.47-.33.66-.74.42l-.94-.54a5.4,5.4,0,0,1-1,2.12l.66,1.15c.29.49.29,1,0,1.19l-1.49.84a.5.5,0,0,1-.52-.05,1.52,1.52,0,0,1-.51-.55l-.67-1.14a5.51,5.51,0,0,1-2.33-.24v1.08c0,.47-.33.65-.74.42l-2.09-1.21a1.62,1.62,0,0,1-.73-1.26v-1.09a16,16,0,0,1-2.33-2.45l-.66.38a.52.52,0,0,1-.52,0,1.46,1.46,0,0,1-.52-.55l-1.48-2.55c-.28-.49-.28-1,0-1.19l.67-.38a15.74,15.74,0,0,1-1-3.24l-.94-.54a1.57,1.57,0,0,1-.73-1.27v-2.4c0-.47.33-.65.74-.42l.94.54a5.4,5.4,0,0,1,1-2.12l-.66-1.14c-.29-.5-.29-1,0-1.2l1.49-.84a.52.52,0,0,1,.52.05,1.52,1.52,0,0,1,.51.55l.67,1.14a5.51,5.51,0,0,1,2.33.24v-1.08c0-.47.34-.66.74-.42l2.09,1.21a1.59,1.59,0,0,1,.73,1.26v1.08a16.07,16.07,0,0,1,2.33,2.46l.66-.38a.52.52,0,0,1,.52,0,1.46,1.46,0,0,1,.52.55l1.48,2.55c.28.5.28,1,0,1.2l-.66.38a16.06,16.06,0,0,1,.95,3.23Zm-8.55,1.41c2.06,1.19,3.74.23,3.74-2.14a8.17,8.17,0,0,0-3.71-6.44c-2.06-1.18-3.74-.23-3.74,2.14a8.19,8.19,0,0,0,3.71,6.44" />
                                </g>
                                <g id="card">
                                    <image class="cls-22" width="104" height="119" transform="translate(157.91 196.35)"
                                        xlink:href="data:image/png;base64,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" />
                                    <g class="cls-1">
                                        <path class="cls-43"
                                            d="M230.61,238.61a16.06,16.06,0,0,1,7.29,12.62l-.1,35c0,4.63-3.3,6.51-7.34,4.17l-56-32.35a16,16,0,0,1-7.28-12.62l.1-34.94c0-4.64,3.29-6.51,7.33-4.18Z" />
                                    </g>
                                    <path class="cls-20"
                                        d="M200.41,241.7a2.56,2.56,0,0,1,1.15,2c0,.74-.52,1-1.16.67l-22.92-13.24a2.52,2.52,0,0,1-1.15-2c0-.73.52-1,1.16-.66Z" />
                                    <path class="cls-24"
                                        d="M224.59,248.68a2.54,2.54,0,0,1,1.15,2c0,.74-.52,1-1.15.66L177.5,224.15a2.54,2.54,0,0,1-1.15-2c0-.73.52-1,1.16-.66Z" />
                                    <path class="cls-24"
                                        d="M223.39,270.14a7.31,7.31,0,0,1,3.31,5.73c0,2.11-1.5,2.95-3.33,1.9l-17.07-9.86a7.26,7.26,0,0,1-3.31-5.73c0-2.1,1.5-2.95,3.33-1.89Z" />
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
        </div>
    </div>
</section>

<section class="enterprise-section">
    <div class="container">
        <div class="inner-wrapper">
            <div class="image-block">
                <!-- <img src="{{url('images/services/Drag and drop web-02.png')}}" alt=""> -->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 410.75 334.96">
                    <defs>
                        <style>
                            .cls-1 {
                                isolation: isolate;
                            }

                            .cls-2,
                            .cls-3,
                            .cls-56,
                            .cls-6,
                            .cls-62,
                            .cls-76 {
                                mix-blend-mode: multiply;
                            }

                            .cls-3,
                            .cls-56,
                            .cls-62,
                            .cls-76,
                            .cls-8 {
                                opacity: 0.5;
                            }

                            .cls-4 {
                                fill: url(#linear-gradient);
                            }

                            .cls-5 {
                                fill: #f5f7f9;
                            }

                            .cls-6 {
                                fill: url(#linear-gradient-2);
                            }

                            .cls-7 {
                                fill: url(#linear-gradient-3);
                            }

                            .cls-9 {
                                fill: url(#linear-gradient-4);
                            }

                            .cls-10 {
                                fill: #fff;
                            }

                            .cls-11 {
                                fill: url(#linear-gradient-5);
                            }

                            .cls-12 {
                                fill: url(#linear-gradient-6);
                            }

                            .cls-13,
                            .cls-38,
                            .cls-68,
                            .cls-77 {
                                mix-blend-mode: screen;
                            }

                            .cls-13 {
                                fill: url(#linear-gradient-7);
                            }

                            .cls-14 {
                                fill: url(#linear-gradient-8);
                            }

                            .cls-15 {
                                fill: url(#linear-gradient-9);
                            }

                            .cls-16 {
                                fill: url(#linear-gradient-10);
                            }

                            .cls-17 {
                                fill: url(#linear-gradient-11);
                            }

                            .cls-18 {
                                fill: #9bbcfe;
                            }

                            .cls-19 {
                                fill: url(#linear-gradient-12);
                            }

                            .cls-20 {
                                fill: url(#linear-gradient-13);
                            }

                            .cls-21 {
                                fill: url(#linear-gradient-14);
                            }

                            .cls-22 {
                                fill: #b8cbfe;
                            }

                            .cls-23 {
                                fill: url(#linear-gradient-15);
                            }

                            .cls-24 {
                                fill: url(#linear-gradient-16);
                            }

                            .cls-25 {
                                fill: url(#linear-gradient-17);
                            }

                            .cls-26 {
                                fill: url(#linear-gradient-18);
                            }

                            .cls-27 {
                                fill: url(#linear-gradient-19);
                            }

                            .cls-28 {
                                fill: url(#linear-gradient-20);
                            }

                            .cls-29 {
                                fill: url(#linear-gradient-21);
                            }

                            .cls-30 {
                                fill: url(#linear-gradient-22);
                            }

                            .cls-31 {
                                fill: url(#linear-gradient-23);
                            }

                            .cls-32 {
                                fill: url(#linear-gradient-24);
                            }

                            .cls-33 {
                                fill: url(#linear-gradient-25);
                            }

                            .cls-34 {
                                fill: url(#linear-gradient-26);
                            }

                            .cls-35 {
                                fill: url(#linear-gradient-27);
                            }

                            .cls-36 {
                                fill: url(#linear-gradient-28);
                            }

                            .cls-37 {
                                fill: url(#linear-gradient-29);
                            }

                            .cls-38 {
                                opacity: 0.53;
                            }

                            .cls-39 {
                                fill: #c6adfe;
                            }

                            .cls-40 {
                                fill: url(#linear-gradient-30);
                            }

                            .cls-41 {
                                fill: url(#linear-gradient-31);
                            }

                            .cls-42 {
                                fill: url(#linear-gradient-32);
                            }

                            .cls-43 {
                                fill: url(#linear-gradient-33);
                            }

                            .cls-44 {
                                fill: url(#linear-gradient-34);
                            }

                            .cls-45 {
                                fill: url(#linear-gradient-35);
                            }

                            .cls-46 {
                                fill: url(#linear-gradient-36);
                            }

                            .cls-47 {
                                fill: #ec82a3;
                            }

                            .cls-48 {
                                fill: url(#linear-gradient-37);
                            }

                            .cls-49 {
                                fill: url(#linear-gradient-38);
                            }

                            .cls-50 {
                                fill: #f699b3;
                            }

                            .cls-51 {
                                fill: url(#linear-gradient-39);
                            }

                            .cls-52 {
                                fill: url(#linear-gradient-40);
                            }

                            .cls-53 {
                                fill: #8942da;
                            }

                            .cls-54 {
                                fill: #d3bdf3;
                            }

                            .cls-55 {
                                fill: url(#linear-gradient-41);
                            }

                            .cls-56 {
                                fill: url(#linear-gradient-42);
                            }

                            .cls-57 {
                                fill: #feaabe;
                            }

                            .cls-58 {
                                fill: #a254ef;
                            }

                            .cls-59 {
                                fill: #ebdbfe;
                            }

                            .cls-60 {
                                fill: url(#linear-gradient-43);
                            }

                            .cls-61 {
                                fill: #5252cd;
                            }

                            .cls-62 {
                                fill: url(#linear-gradient-44);
                            }

                            .cls-63 {
                                fill: url(#linear-gradient-45);
                            }

                            .cls-64 {
                                fill: url(#linear-gradient-46);
                            }

                            .cls-65 {
                                fill: url(#linear-gradient-47);
                            }

                            .cls-66 {
                                fill: url(#linear-gradient-48);
                            }

                            .cls-67 {
                                fill: url(#linear-gradient-49);
                            }

                            .cls-68 {
                                opacity: 0.45;
                            }

                            .cls-69 {
                                fill: url(#linear-gradient-50);
                            }

                            .cls-70 {
                                fill: url(#linear-gradient-51);
                            }

                            .cls-71 {
                                fill: url(#linear-gradient-52);
                            }

                            .cls-72 {
                                fill: url(#linear-gradient-53);
                            }

                            .cls-73 {
                                fill: url(#linear-gradient-54);
                            }

                            .cls-74 {
                                fill: url(#linear-gradient-55);
                            }

                            .cls-75 {
                                fill: url(#linear-gradient-56);
                            }

                            .cls-76 {
                                fill: url(#linear-gradient-57);
                            }

                            .cls-77 {
                                fill: url(#linear-gradient-58);
                            }

                            .cls-78 {
                                fill: #f9a3b8;
                            }
                        </style>
                        <linearGradient id="linear-gradient" x1="35.77" y1="66.99" x2="35.77" y2="-25.23"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#8a87fe" />
                            <stop offset="1" stop-color="#8a87fe" stop-opacity="0.3" />
                        </linearGradient>
                        <linearGradient id="linear-gradient-2" x1="354.33" y1="524.14" x2="204.83" y2="292.79"
                            xlink:href="#linear-gradient" />
                        <linearGradient id="linear-gradient-3" x1="216.76" y1="293.28" x2="216.76" y2="240.64"
                            xlink:href="#linear-gradient" />
                        <linearGradient id="linear-gradient-4" x1="168.82" y1="284.77" x2="168.82" y2="243.06"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#fd6894" />
                            <stop offset="1" stop-color="#f88de4" />
                        </linearGradient>
                        <linearGradient id="linear-gradient-5" x1="214.87" y1="284.77" x2="214.87" y2="243.06"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#fe5d85" />
                            <stop offset="1" stop-color="#fead6e" />
                        </linearGradient>
                        <linearGradient id="linear-gradient-6" x1="261.99" y1="284.77" x2="261.99" y2="243.06"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#53c4e9" />
                            <stop offset="1" stop-color="#63ffec" />
                        </linearGradient>
                        <linearGradient id="linear-gradient-7" x1="207.99" y1="249.07" x2="207.99" y2="-22.53"
                            gradientTransform="matrix(-1, 0, 0, 1, 391.58, 0)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#5d5ddb" />
                            <stop offset="1" stop-color="#7ab7f9" />
                        </linearGradient>
                        <linearGradient id="linear-gradient-8" x1="278.37" y1="155.89" x2="148.79" y2="4.72"
                            gradientTransform="matrix(-1, 0, 0, 1, 391.58, 0)" xlink:href="#linear-gradient-5" />
                        <linearGradient id="linear-gradient-9" x1="289.2" y1="73.39" x2="289.2" y2="69.48"
                            gradientTransform="matrix(-1, 0, 0, 1, 391.58, 0)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#feb103" />
                            <stop offset="0.05" stop-color="#feb30b" />
                            <stop offset="0.35" stop-color="#fec237" />
                            <stop offset="0.62" stop-color="#fecc58" />
                            <stop offset="0.85" stop-color="#fed36c" />
                            <stop offset="1" stop-color="#fed573" />
                        </linearGradient>
                        <linearGradient id="linear-gradient-10" x1="297.14" y1="73.39" x2="297.14" y2="69.48"
                            xlink:href="#linear-gradient-9" />
                        <linearGradient id="linear-gradient-11" x1="304.57" y1="73.39" x2="304.57" y2="69.48"
                            xlink:href="#linear-gradient-9" />
                        <linearGradient id="linear-gradient-12" x1="146.49" y1="153.43" x2="146.49" y2="125.27"
                            gradientTransform="matrix(-1, 0, 0, 1, 391.58, 0)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#8a66ee" />
                            <stop offset="1" stop-color="#d48cfb" />
                        </linearGradient>
                        <linearGradient id="linear-gradient-13" x1="163.05" y1="121.13" x2="163.05" y2="110.88"
                            gradientTransform="matrix(-1, 0, 0, 1, 391.58, 0)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#feb103" />
                            <stop offset="1" stop-color="#fed573" />
                        </linearGradient>
                        <linearGradient id="linear-gradient-14" x1="143.28" y1="161.39" x2="128.72" y2="145.43"
                            gradientTransform="matrix(-1, 0, 0, 1, 391.58, 0)" xlink:href="#linear-gradient-5" />
                        <linearGradient id="linear-gradient-15" x1="157" y1="202.82" x2="144.85" y2="188.81"
                            xlink:href="#linear-gradient-13" />
                        <linearGradient id="linear-gradient-16" x1="206.33" y1="152.31" x2="206.33" y2="137.2"
                            gradientTransform="matrix(-1, 0, 0, 1, 391.58, 0)" xlink:href="#linear-gradient-5" />
                        <linearGradient id="linear-gradient-17" x1="208.53" y1="137.52" x2="208.53" y2="102.6"
                            xlink:href="#linear-gradient-13" />
                        <linearGradient id="linear-gradient-18" x1="247.33" y1="151.38" x2="247.33" y2="139.32"
                            xlink:href="#linear-gradient-12" />
                        <linearGradient id="linear-gradient-19" x1="253.23" y1="130.47" x2="253.23" y2="103.1"
                            gradientTransform="matrix(-1, 0, 0, 1, 391.58, 0)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#cd66ee" />
                            <stop offset="1" stop-color="#fdaddf" />
                        </linearGradient>
                        <linearGradient id="linear-gradient-20" x1="288.33" y1="159.25" x2="288.33" y2="92.16"
                            gradientTransform="matrix(-1, 0, 0, 1, 391.58, 0)" xlink:href="#linear-gradient" />
                        <linearGradient id="linear-gradient-21" x1="298.85" y1="150" x2="298.85" y2="127.31"
                            gradientTransform="matrix(-1, 0, 0, 1, 391.58, 0)" xlink:href="#linear-gradient-6" />
                        <linearGradient id="linear-gradient-22" x1="298.85" y1="127.71" x2="298.85" y2="84.98"
                            gradientTransform="matrix(-1, 0, 0, 1, 391.58, 0)" xlink:href="#linear-gradient-6" />
                        <linearGradient id="linear-gradient-23" x1="247.34" y1="236.41" x2="247.34" y2="146.73"
                            gradientTransform="matrix(-1, 0, 0, 1, 391.58, 0)" xlink:href="#linear-gradient" />
                        <linearGradient id="linear-gradient-24" x1="271.7" y1="198.21" x2="246.94" y2="155.23"
                            xlink:href="#linear-gradient-13" />
                        <linearGradient id="linear-gradient-25" x1="216.64" y1="189.66" x2="212.82" y2="172.76"
                            gradientTransform="matrix(-1, 0, 0, 1, 391.58, 0)" xlink:href="#linear-gradient-6" />
                        <linearGradient id="linear-gradient-26" x1="52.37" y1="192.57" x2="52.37" y2="-60.26"
                            gradientTransform="translate(287.12)" xlink:href="#linear-gradient" />
                        <linearGradient id="linear-gradient-27" x1="58.08" y1="146.35" x2="50.51" y2="126.63"
                            gradientTransform="translate(287.12)" xlink:href="#linear-gradient-6" />
                        <linearGradient id="linear-gradient-28" x1="81.6" y1="133.97" x2="33.42" y2="74.29"
                            gradientTransform="translate(287.12)" xlink:href="#linear-gradient-4" />
                        <linearGradient id="linear-gradient-29" x1="76.93" y1="129.28" x2="35.71" y2="78.21"
                            gradientTransform="translate(287.12)" xlink:href="#linear-gradient-4" />
                        <linearGradient id="linear-gradient-30" x1="212.29" y1="88.6" x2="212.29" y2="-67.17"
                            gradientTransform="matrix(-1, 0, 0, 1, 391.58, 0)" xlink:href="#linear-gradient" />
                        <linearGradient id="linear-gradient-31" x1="212.29" y1="14.76" x2="212.29" y2="50.9"
                            gradientTransform="matrix(-1, 0, 0, 1, 391.58, 0)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#c6adfe" />
                            <stop offset="1" stop-color="#c6adfe" stop-opacity="0.1" />
                        </linearGradient>
                        <linearGradient id="linear-gradient-32" x1="191.79" y1="58.23" x2="188.53" y2="52.27"
                            xlink:href="#linear-gradient-13" />
                        <linearGradient id="linear-gradient-33" x1="203.29" y1="58.23" x2="200.03" y2="52.27"
                            xlink:href="#linear-gradient-13" />
                        <linearGradient id="linear-gradient-34" x1="214.35" y1="58.23" x2="211.1" y2="52.27"
                            xlink:href="#linear-gradient-13" />
                        <linearGradient id="linear-gradient-35" x1="225.85" y1="58.23" x2="222.59" y2="52.27"
                            xlink:href="#linear-gradient-13" />
                        <linearGradient id="linear-gradient-36" x1="236.88" y1="58.23" x2="233.62" y2="52.27"
                            xlink:href="#linear-gradient-13" />
                        <linearGradient id="linear-gradient-37" x1="323.65" y1="164.46" x2="331.32" y2="153.91"
                            gradientTransform="matrix(-1, 0, 0, 1, 391.58, 0)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#f699b3" />
                            <stop offset="1" stop-color="#feb5c2" />
                        </linearGradient>
                        <linearGradient id="linear-gradient-38" x1="339.54" y1="170.57" x2="341" y2="184.17"
                            gradientTransform="matrix(-1, 0, 0, 1, 391.58, 0)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#ec72a1" />
                            <stop offset="1" stop-color="#f699b3" stop-opacity="0.3" />
                        </linearGradient>
                        <linearGradient id="linear-gradient-39" x1="300.55" y1="169.25" x2="305.45" y2="157.52"
                            gradientTransform="matrix(-1, 0, 0, 1, 391.58, 0)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#feaabe" />
                            <stop offset="1" stop-color="#fec7c8" />
                        </linearGradient>
                        <linearGradient id="linear-gradient-40" x1="328.58" y1="161.44" x2="325.28" y2="179.21"
                            xlink:href="#linear-gradient-38" />
                        <linearGradient id="linear-gradient-41" x1="356.63" y1="256.73" x2="335.95" y2="257.58"
                            gradientTransform="matrix(-1, 0, 0, 1, 391.58, 0)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#2d278a" />
                            <stop offset="1" stop-color="#3f3fc0" />
                        </linearGradient>
                        <linearGradient id="linear-gradient-42" x1="346.49" y1="263.59" x2="334.24" y2="290.58"
                            gradientTransform="matrix(-1, 0, 0, 1, 391.58, 0)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#2d278a" />
                            <stop offset="1" stop-color="#2d278a" stop-opacity="0.3" />
                        </linearGradient>
                        <linearGradient id="linear-gradient-43" x1="370.89" y1="254.62" x2="349.15" y2="261.87"
                            gradientTransform="matrix(-1, 0, 0, 1, 391.58, 0)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#3232a4" />
                            <stop offset="1" stop-color="#4949d5" />
                        </linearGradient>
                        <linearGradient id="linear-gradient-44" x1="339.94" y1="205.67" x2="367.71" y2="205.67"
                            xlink:href="#linear-gradient-42" />
                        <linearGradient id="linear-gradient-45" x1="360.81" y1="125.2" x2="357.18" y2="103.46"
                            gradientTransform="matrix(-1, 0, 0, 1, 391.58, 0)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#3232a4" />
                            <stop offset="1" stop-color="#7f6add" />
                        </linearGradient>
                        <linearGradient id="linear-gradient-46" x1="359.53" y1="125.42" x2="355.9" y2="103.67"
                            gradientTransform="matrix(-0.71, -0.71, -0.71, 0.71, 370.6, 288.24)" xlink:href="#linear-gradient-45" />
                        <linearGradient id="linear-gradient-47" x1="364.54" y1="135.29" x2="347.77" y2="128.54"
                            xlink:href="#linear-gradient-39" />
                        <linearGradient id="linear-gradient-48" x1="356.37" y1="137.14" x2="353.57" y2="144.25"
                            xlink:href="#linear-gradient-38" />
                        <linearGradient id="linear-gradient-49" x1="367.44" y1="179.23" x2="343" y2="169.28"
                            gradientTransform="matrix(-1, 0, 0, 1, 391.58, 0)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#feb131" />
                            <stop offset="1" stop-color="#fed573" />
                        </linearGradient>
                        <linearGradient id="linear-gradient-50" x1="349.01" y1="135.98" x2="412.3" y2="181.72"
                            gradientTransform="matrix(-1, 0, 0, 1, 391.58, 0)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#fed450" />
                            <stop offset="1" stop-color="#feb103" stop-opacity="0.3" />
                        </linearGradient>
                        <linearGradient id="linear-gradient-51" x1="322.39" y1="157.89" x2="377.74" y2="197.89"
                            xlink:href="#linear-gradient-50" />
                        <linearGradient id="linear-gradient-52" x1="329.73" y1="151.7" x2="392.02" y2="196.71"
                            xlink:href="#linear-gradient-50" />
                        <linearGradient id="linear-gradient-53" x1="335.98" y1="139.84" x2="453.58" y2="224.83"
                            xlink:href="#linear-gradient-50" />
                        <linearGradient id="linear-gradient-54" x1="344.41" y1="156.69" x2="433.46" y2="221.05"
                            xlink:href="#linear-gradient-50" />
                        <linearGradient id="linear-gradient-55" x1="336.34" y1="166.49" x2="447.62" y2="246.91"
                            xlink:href="#linear-gradient-50" />
                        <linearGradient id="linear-gradient-56" x1="337.1" y1="180.34" x2="439.67" y2="254.47"
                            xlink:href="#linear-gradient-50" />
                        <linearGradient id="linear-gradient-57" x1="349.12" y1="165.07" x2="302.56" y2="229.39"
                            gradientTransform="matrix(-1, 0, 0, 1, 391.58, 0)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#fe7b03" />
                            <stop offset="1" stop-color="#fe7b03" stop-opacity="0.3" />
                        </linearGradient>
                        <linearGradient id="linear-gradient-58" x1="313.68" y1="162.75" x2="359" y2="146.71"
                            gradientTransform="matrix(-1, 0, 0, 1, 391.58, 0)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#feed85" />
                            <stop offset="1" stop-color="#feb103" stop-opacity="0.3" />
                        </linearGradient>
                        <image id="image" width="61" height="78"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAD0AAABOCAYAAACT1B6GAAAACXBIWXMAAAsSAAALEgHS3X78AAAFaUlEQVR4Xu2cXXLbOBCEm7LsOE42tZfY6/jNp9y3XMen2MR/siVxH4AWGqMB/wSmykV21RQhWuTgwwxApjJQ07YtlqZt3xeG6P7hsen7Tg39/PefKhFqxka6A3BucLejUwZiELQBLbW9z7VkO6mfT+2hA9AJLbDescH5+bnVyrHU7oUvQhtgtY1zbm54C6h2dM51grvQEZgAhNx02JzgFviIBHown7MBKIGfQZsIK9hVtK20r3AOPge0BT50WC946ZGlwIS7jt+/lrYOwBzgJeB9tI9obDdI8ADQ3j88NhY8g5a01vlL4BsAX8yRA+CB15AHTND3aLt4bOJ5XneM50ZHWoFvo32NdosEz6gzO3iPS+VF+AMB9C0as43+NDsaALh/eMwWNg/aRnmLAHcL4JvYHQK8gteMtnaeKcvovkZ7RvLJazhIG7k+0wnaWbE3SHP4BgHwG4C/xBSc87xGtFs5apQZ4VcATwg+6csucIQ/S/Ehkb5GgFLovwH8APA9nrtFHu1LFzR20s7lHVKEuZZwYHRh28Zr6L/RFB8CvUWa03cI0D+Qg2u054LmovWM4OsqfocD8i72gZRxfISdZKG9lZspzmjfIYASnGmu0JfOawvNKL4h+GG/9wiQTHlOsc4+9K3e3iOLaf4dKep3SCmuDoFp4B70O/IIc44z3b11RfuQr97Ov6JstDXNuZIz6oy8Bz0FGMgXMi5i70hzeI8Q3RekR6d9ZyhOMY20/aOX5rqaf0EaAA6CjnQNaI20zuEd8veEQcB8O/PmtD3aVFd4DsCNtBVa7zVUuugw0nwsHZD7K70Od/ovzWkgHy0F15RXs87Hwlplb1UIEd8as6CaYTbSTbxfJzSlFxPeGwgdEB3pS3SMR8+PZ6UpdQIGhkFTFn6IXaoNQme7Iumlcqf/MdCUB9Y1wlPFyNh79Pnv9bnB5VInvQ4vlAc22mcN6D8hL5KdKdylzwJdVSv0UrRCL0Ur9FK0Qi9FK/RStEIvRSv0UrRCL0Ur9FK0Qi9FK/RStEIvRSv0UvRZoLXyT49n1YBDNAW67bE5ZcFte5DG/v/0WAdjv+/J3sMbZC8TihoCXXJQMtZj1hCr/Y5inj8LrP09Uxd0CcjawRwJPGXqqLp8lqwEm52z0KURs861uv5gjryORTJjo64dbJH7smYrfr1M0HsByKFb5B3UC3lzrbS1FfZa3KYlVWOhgdRBgrBi0Ba9ciuDNwA2gCdtgbCdR0olbXQ94B1S7bWtyL20eA7IO6xlkixuZ1U/tzKwX+yrF+nO0mfgHJrArLhlXaYFZm3oXJF+Qyh+fYnGAdhhIDjgz2kFJrTum3hBqrrl9azXtLWhQD1olj4/A/iFUNn/hNAfBd/LdW6Ke5G2UWaEbZmxLUG2pcc1oW2R+xOA/wD8Roq8QnNuD4o0ZVNbU4vVtkCKsNZb2zLJWtB2O8OvaL+RUp3g3oJ2Ul9661x+RZqvQAJmzTWrcjeoB20H325ceUKK9htCP7maZ+ntblGSFdxbxHZIMEAaeUafpchMbX5vCjClAeDi5G1RYnoTWiM9Kr2PCB0mnFbn6RzjCj5o78QE2QWVmaeb0fQRxkgXUxsoL2RAAt8jAbATjLJGuHcbwQSVniT6UrSTtvvI6txr6bykHOXPmmocbd1CYIFrQnsR15cltglcTG0AvfunG6Q5ukFexd9XVV9LJfCSKfCorcRAnubW8QHdsLWheVRwZp1+7gUGCpEGir+HYAG9dK4JTFlwGwR7bvzPA6gK8KX23LLwXnv6D0GonN820c9df6sl20n9fGr3wVKDoFU9v14zBzDldnQoqGo0dEl/4qd8pgB6qgb9mfQ/mgA7s75UAB0AAAAASUVORK5CYII=" />
                    </defs>
                    <g class="cls-1">
                        <g id="Layer_2" data-name="Layer 2">
                            <g id="OBJECTS">
                                <g id="enterpriseWeb">
                                    <g id="code">
                                        <g class="cls-2">
                                            <image class="cls-3" width="75" height="61" transform="translate(0 11)"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEsAAAA9CAYAAADlNZQ2AAAACXBIWXMAAAsSAAALEgHS3X78AAAFbklEQVR4Xu2c33qTQBDFDzFpbdWqD+HreOdTeufr+BbW5k/bBC+Wkz07zAIbK6Byvm++hZAE+HFmoGVIVdc1Fg3Tuu8NJfr85XvV954p9O3rpxdxRHWJs3qgzA1YdgdLIQ6GZQDlprtem0J253Q+WTYEXC8sB1KVmdZxbqplzE33AuuEJaAqJ1ZmHmZ6DrJgvDiZ92WhZWE1oLjjBLPKhAUJTA/NA3XqCH2fC8w9GwooddEKwKtMWHDAPGB5kI5NPMt0Jcv52ZZazjKpp5DWEhsZuWxOwGyqHSWeEEDZ8QjjMuuu3HWWB2oD4EriuhkJzgLj90whDxTBPEoc0K6z51T8/OV7pcASWE5BXyGCum7iBsBrCUJbI6alrV9jS9NPQR2a2APYIc0C60bICMB3loKiq+ikWwBvZLxp4hrRYaxhU8HiDjKl1FGE9IC4nfwM4aojE5XAukEA9BbAuyYI7gYxJS2sMYGpIwjrqYk9gC0CKG4n5H10IOcrALWm4hmWuVRQWKxVrxHAvAPwAcBdEwSm7rLOGguYhcWCztR7QNhOgtKir4VeD7Rfsxp5xf0aAdYbBFh3AD4CeN/M3zbLWbvmAktr1RZtUJqeB6RZ0dKQNFRnMRXvEEDRYaxfHqyxQAF5WHsEUNzfI6LbtsiXkEQWlpeGBMYzIYs7HfYeKawN5uEsptgjUkc9IzqNaamg7IHuTUN1F6+heEYkMEJj0b9F6qwprrU8Zz0iTb0DAiSWjcFn8dxFKZDWLr1yJzSmJeHZNCQsftcY8pxlQfF6cYMUVPYszjPimjOIss6yxZ4rucrEXGDRWUAARRdpDLmQPqeiOqsP2CuJtcTGzHtnw7HF6yQggCKUtUyrESwoHbM1y9s5ArNOGxJTiftRI4KxgDxQnQe4r2bl3GbDrpzjlFohOiwXcOaz6oJFda3MW4kFPLaSP357VLR9l6SKB6NopSOq5CD36hJYQNvG9rV/UpfC+i+1wCrQAqtAC6wCLbAKtMAq0AKrQAusAi2wCrTAKtACq0CXwKp7Yk7S7fntbRvyLxpV6QpL3/8npAfxtw7sEFj2y/ucpf/SnUp922j3ZZC6YOVA2DiakaAuSfGXUo2030pD96UImoVVO6MHik0UzzLNkZ87NdNjuky3m3d3tMNPwwPYCU1h1Uh3TD9sG8I02Bim9+d4awkYFxaQHlzbwKYNIG63n3yHjgAaWN++fqrl3qF1kwdKm8Jss4XeCgOmhcXb93vE5o8DIjgLzXPWeT5Xs+wKbUMYGyosqCukNy2BcWHZNFRY2yZ2iOAekaapTUkAsXPZq1kKiivUHidtqODneWvc9mcB48IC2gdaW47uAfxE2P4dUpfZlGzJc5a3MjarssXQ60rxmtmA6WDVSGHtEED9aEa67IB2x3LLXUB3GmoK0sq2xZCO8lp35gLLbj+B3SMA2yNNx1zt6k1DrVU7xHoERFBbhI4aNlvonWlgGlhATCnt/tshpuM90nTUVHRhJQ8NSF+pNoBoS7d2KrOBzfY5ERYwPijKlhK6S4E9SOzQTskTgFO2D150QthR5rzeQNWzDM+IgxvCRpLnLgXGFm89MxanIZCuqEL4Er0GOyH2adrOua4+p7Fl3cUDrycsHW0atpR7dofBlNJGNjtq31aF+cGywOgyvZp/kuXny4feZ3eaq3nOnmSRFv1npK2FWtTnAIqywBQawVlIRddZlKajd5S6IM0JFkcF5gWXA/CfN+x7OBNIAVgwXtrNBRRlgdkDb18rf5KVykDLTc9ZHjT7eudz0r2wAPenCXS+a9kcZHdQ58/TfQ+TAwNhqf6y33Sg3J0cAkhVDCunuf5aCFUKxtOLwfof9AuCVRVjcDLdWgAAAABJRU5ErkJggg==" />
                                            <rect class="cls-4" x="10.7" y="19.55" width="50.14" height="36.41" rx="4.32" />
                                        </g>
                                        <path class="cls-5" d="M20.25,37.43l9.23-4.68v2.57l-6.62,3.23,6.62,3.32v2.58L20.25,39.7Z" />
                                        <path class="cls-5" d="M31.79,45.32,37.36,30.2h2.4L34.2,45.32Z" />
                                        <path class="cls-5" d="M51.29,39.77l-9.23,4.68V41.86l6.62-3.22-6.62-3.32V32.75l9.23,4.75Z" />
                                    </g>
                                    <ellipse class="cls-6" cx="225.47" cy="324.72" rx="185.28" ry="10.23" />
                                    <g id="bottom-menu">
                                        <g class="cls-2">
                                            <image class="cls-3" width="180" height="78" transform="translate(129 222)"
                                                xlink:href="data:image/png;base64,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" />
                                            <rect class="cls-7" x="139.22" y="230.9" width="155.1" height="52.64" rx="9.14" />
                                        </g>
                                        <image class="cls-8" width="59" height="59" transform="translate(141 232)"
                                            xlink:href="data:image/png;base64,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" />
                                        <rect class="cls-9" x="151.91" y="240.43" width="33.82" height="33.82" rx="7.13" />
                                        <path class="cls-10"
                                            d="M177.16,255.88l-8-7a.47.47,0,0,0-.61,0l-8,7a.46.46,0,0,0,.3.81h1.72a.46.46,0,0,1,.46.46v8.28a.47.47,0,0,0,.47.46h3.1a.47.47,0,0,0,.47-.46v-3.56a.45.45,0,0,1,.46-.46h2.7a.46.46,0,0,1,.46.46v3.56a.47.47,0,0,0,.46.46h3.12a.47.47,0,0,0,.46-.46v-8.28a.47.47,0,0,1,.46-.46h1.73A.46.46,0,0,0,177.16,255.88Z" />
                                        <image class="cls-8" width="59" height="59" transform="translate(187 232)"
                                            xlink:href="data:image/png;base64,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" />
                                        <rect class="cls-11" x="197.96" y="240.43" width="33.82" height="33.82" rx="7.13" />
                                        <path class="cls-10"
                                            d="M214.87,247.77a5.83,5.83,0,0,0-5.83,5.84c0,3.48,2.94,9.43,4.65,12.58a1.35,1.35,0,0,0,2.39,0c1.71-3.12,4.62-9,4.62-12.58A5.83,5.83,0,0,0,214.87,247.77Zm0,8.93a2.87,2.87,0,1,1,2.86-2.86A2.87,2.87,0,0,1,214.87,256.7Z" />
                                        <image class="cls-8" width="58" height="59" transform="translate(235 232)"
                                            xlink:href="data:image/png;base64,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" />
                                        <rect class="cls-12" x="245.08" y="240.43" width="33.82" height="33.82" rx="7.13" />
                                        <path class="cls-10"
                                            d="M262.18,250.3a8.26,8.26,0,0,1,2.89-3.41,2.16,2.16,0,0,1,3.07.75l1.08,1.92a11,11,0,0,1,.47,10.08,15.34,15.34,0,0,1-2.54,3.84,10.84,10.84,0,0,1-11.63,2.73l-.45-.17a2.65,2.65,0,0,1-1.16-4.2,8.57,8.57,0,0,1,1.68-1.51,2,2,0,0,1,2.46.15l.91.83a2.48,2.48,0,0,0,3.07.2,8.92,8.92,0,0,0,3.7-4.71,2.44,2.44,0,0,0-1.05-2.75l-1.75-1.12A2.06,2.06,0,0,1,262.18,250.3Z" />
                                    </g>
                                    <g id="dashboard">
                                        <path class="cls-13"
                                            d="M73.26,74.65V215.32a4.49,4.49,0,0,0,4.5,4.49H289.42a4.49,4.49,0,0,0,4.49-4.49V74.65a10.31,10.31,0,0,0-10.3-10.31h-200A10.32,10.32,0,0,0,73.26,74.65Z" />
                                        <path class="cls-14"
                                            d="M73.26,74.65v2.08H293.91V74.65a10.31,10.31,0,0,0-10.3-10.31h-200A10.32,10.32,0,0,0,73.26,74.65Z" />
                                        <path class="cls-15"
                                            d="M100.66,70.53a1.72,1.72,0,1,0,1.72-1.71A1.72,1.72,0,0,0,100.66,70.53Z" />
                                        <path class="cls-16" d="M92.72,70.53a1.72,1.72,0,1,0,1.72-1.71A1.72,1.72,0,0,0,92.72,70.53Z" />
                                        <path class="cls-17" d="M85.29,70.53A1.72,1.72,0,1,0,87,68.82,1.72,1.72,0,0,0,85.29,70.53Z" />
                                        <image class="cls-3" width="92" height="131" transform="translate(201 86)"
                                            xlink:href="data:image/png;base64,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" />
                                        <rect class="cls-10" x="211.65" y="95.42" width="66.86" height="105.96" rx="4.46" />
                                        <path class="cls-18"
                                            d="M218.19,105.78v30.15a3.3,3.3,0,0,0,3.3,3.3h47.19a3.31,3.31,0,0,0,3.3-3.3V105.78a3.3,3.3,0,0,0-3.3-3.3H221.49A3.3,3.3,0,0,0,218.19,105.78Z" />
                                        <path class="cls-19"
                                            d="M218.19,128.5v7.43a3.31,3.31,0,0,0,3.3,3.3h47.19a3.31,3.31,0,0,0,3.3-3.3V128.5l-14.72-14.25a2.57,2.57,0,0,0-3.66.08L240.7,128a2.23,2.23,0,0,1-3.12.11l-7.72-7a3.09,3.09,0,0,0-4.26.09Z" />
                                        <circle class="cls-20" cx="228.52" cy="112.44" r="3.83" />
                                        <path class="cls-21"
                                            d="M246,154.11h23.15a2.85,2.85,0,0,0,2.85-2.85h0a2.86,2.86,0,0,0-2.85-2.86H246a2.86,2.86,0,0,0-2.86,2.86h0A2.85,2.85,0,0,0,246,154.11Z" />
                                        <path class="cls-22"
                                            d="M251.67,161.79h19.22A1.08,1.08,0,0,0,272,160.7h0a1.08,1.08,0,0,0-1.08-1.08H251.67a1.08,1.08,0,0,0-1.08,1.08h0A1.08,1.08,0,0,0,251.67,161.79Z" />
                                        <path class="cls-22"
                                            d="M229.61,167h41.28a1.08,1.08,0,0,0,1.08-1.08h0a1.08,1.08,0,0,0-1.08-1.08H229.61a1.08,1.08,0,0,0-1.09,1.08h0A1.08,1.08,0,0,0,229.61,167Z" />
                                        <path class="cls-22"
                                            d="M229.61,172.22h41.28a1.08,1.08,0,0,0,1.08-1.08h0a1.08,1.08,0,0,0-1.08-1.09H229.61a1.09,1.09,0,0,0-1.09,1.09h0A1.09,1.09,0,0,0,229.61,172.22Z" />
                                        <path class="cls-22"
                                            d="M237.7,177.44h33.19a1.08,1.08,0,0,0,1.08-1.09h0a1.08,1.08,0,0,0-1.08-1.08H237.7a1.08,1.08,0,0,0-1.08,1.08h0A1.09,1.09,0,0,0,237.7,177.44Z" />
                                        <path class="cls-23"
                                            d="M232.6,194.2h25a3.5,3.5,0,0,0,3.5-3.5h0a3.5,3.5,0,0,0-3.5-3.5h-25a3.5,3.5,0,0,0-3.51,3.5h0A3.51,3.51,0,0,0,232.6,194.2Z" />
                                        <use class="cls-3" transform="translate(157 86)" xlink:href="#image" />
                                        <path class="cls-10"
                                            d="M167.29,98.84V145a3.43,3.43,0,0,0,3.42,3.43h29.06a3.43,3.43,0,0,0,3.42-3.43V98.84a3.42,3.42,0,0,0-3.42-3.41H170.71A3.41,3.41,0,0,0,167.29,98.84Z" />
                                        <path class="cls-24"
                                            d="M203.19,138.19h-35.9V145a3.43,3.43,0,0,0,3.42,3.43h29.06a3.43,3.43,0,0,0,3.42-3.43Z" />
                                        <path class="cls-18"
                                            d="M185.24,104.9a11.8,11.8,0,1,1-11.79,11.8A11.8,11.8,0,0,1,185.24,104.9Zm0,20.9a9.1,9.1,0,1,0-9.09-9.1A9.07,9.07,0,0,0,185.24,125.8Z" />
                                        <path class="cls-25"
                                            d="M173.45,116.7a11.79,11.79,0,0,0,19.2,9.18l-1.69-2.1a9.1,9.1,0,1,1-5.72-16.18v-2.7A11.79,11.79,0,0,0,173.45,116.7Z" />
                                        <rect class="cls-18" x="181.39" y="117.96" width="7.71" height="1.13"
                                            transform="translate(370.49 237.05) rotate(180)" />
                                        <rect class="cls-18" x="179.29" y="115.06" width="11.91" height="1.13"
                                            transform="translate(370.49 231.25) rotate(180)" />
                                        <use class="cls-3" transform="translate(116 86)" xlink:href="#image" />
                                        <path class="cls-10"
                                            d="M126.29,98.84V145a3.43,3.43,0,0,0,3.42,3.43h29.06a3.43,3.43,0,0,0,3.42-3.43V98.84a3.42,3.42,0,0,0-3.42-3.41H129.71A3.41,3.41,0,0,0,126.29,98.84Z" />
                                        <path class="cls-26"
                                            d="M162.19,138.19h-35.9V145a3.43,3.43,0,0,0,3.42,3.43h29.06a3.43,3.43,0,0,0,3.42-3.43Z" />
                                        <path class="cls-18"
                                            d="M144.24,104.9a11.81,11.81,0,1,1-11.79,11.8A11.8,11.8,0,0,1,144.24,104.9Zm0,20.9a9.09,9.09,0,1,0-7.49-3.94A9.07,9.07,0,0,0,144.24,125.8Z" />
                                        <path class="cls-27"
                                            d="M132.45,116.7a11.69,11.69,0,0,0,2.08,6.7l2.22-1.54a9.1,9.1,0,0,1,7.49-14.26v-2.7A11.79,11.79,0,0,0,132.45,116.7Z" />
                                        <rect class="cls-18" x="140.39" y="117.96" width="7.71" height="1.13"
                                            transform="translate(288.49 237.05) rotate(180)" />
                                        <rect class="cls-18" x="138.29" y="115.06" width="11.91" height="1.13"
                                            transform="translate(288.49 231.25) rotate(180)" />
                                        <g class="cls-2">
                                            <use class="cls-3" transform="translate(75 86)" xlink:href="#image" />
                                            <path class="cls-28"
                                                d="M85.29,98.84V145a3.43,3.43,0,0,0,3.43,3.43h29.05a3.43,3.43,0,0,0,3.42-3.43V98.84a3.41,3.41,0,0,0-3.42-3.41h-29A3.41,3.41,0,0,0,85.29,98.84Z" />
                                        </g>
                                        <image class="cls-3" width="69" height="90" transform="translate(60 67)"
                                            xlink:href="data:image/png;base64,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" />
                                        <path class="cls-10"
                                            d="M70.76,80.38v56.46A4.19,4.19,0,0,0,75,141h35.54a4.19,4.19,0,0,0,4.19-4.19V80.38a4.18,4.18,0,0,0-4.19-4.18H75A4.18,4.18,0,0,0,70.76,80.38Z" />
                                        <path class="cls-29"
                                            d="M70.76,128.53v8.31A4.19,4.19,0,0,0,75,141h35.54a4.19,4.19,0,0,0,4.19-4.19v-8.31Z" />
                                        <path class="cls-18"
                                            d="M92.72,87.79a14.44,14.44,0,0,1,14.44,14.45v.1A14.44,14.44,0,1,1,92.72,87.79Zm-9.16,20.75a11.12,11.12,0,0,0,20.29-6.23v-.07a11.13,11.13,0,1,0-22.26,0A11,11,0,0,0,83.56,108.54Z" />
                                        <path class="cls-30"
                                            d="M78.29,102.24a14.44,14.44,0,0,0,28.87.1l-3.31,0a11.12,11.12,0,0,1-20.29,6.23,11,11,0,0,1-2-6.3A11.13,11.13,0,0,1,92.72,91.1V87.79A14.44,14.44,0,0,0,78.29,102.24Z" />
                                        <rect class="cls-18" x="88.01" y="103.78" width="9.43" height="1.38"
                                            transform="translate(185.44 208.93) rotate(180)" />
                                        <rect class="cls-18" x="85.43" y="100.23" width="14.58" height="1.38"
                                            transform="translate(185.44 201.83) rotate(180)" />
                                        <g class="cls-2">
                                            <image class="cls-3" width="143" height="67" transform="translate(75 150)"
                                                xlink:href="data:image/png;base64,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" />
                                            <rect class="cls-31" x="85.29" y="159.77" width="117.9" height="41.6" rx="5.28" />
                                        </g>
                                        <rect class="cls-10" x="158.33" y="163.42" width="1.1" height="33.43"
                                            transform="translate(317.75 360.27) rotate(180)" />
                                        <path class="cls-32"
                                            d="M125.36,173.41h21.48a3.36,3.36,0,0,0,3.36-3.36h0a3.36,3.36,0,0,0-3.36-3.36H125.36a3.36,3.36,0,0,0-3.36,3.36h0A3.36,3.36,0,0,0,125.36,173.41Z" />
                                        <rect class="cls-18" x="120.7" y="180.14" width="29.5" height="1.97"
                                            transform="translate(270.9 362.24) rotate(180)" />
                                        <rect class="cls-18" x="102.33" y="185.9" width="47.87" height="1.97"
                                            transform="translate(252.53 373.77) rotate(180)" />
                                        <rect class="cls-10" x="168.1" y="166.77" width="27.67" height="27.67" rx="2.82"
                                            transform="translate(363.86 361.2) rotate(180)" />
                                        <path class="cls-18" d="M173.75,180.6a8.18,8.18,0,1,0,8.18-8.18v8.18Z" />
                                        <path class="cls-33" d="M172.28,180.6h9.65V171A9.65,9.65,0,0,0,172.28,180.6Z" />
                                    </g>
                                    <g id="video">
                                        <g class="cls-2">
                                            <image class="cls-3" width="95" height="125" transform="translate(294 54)"
                                                xlink:href="data:image/png;base64,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" />
                                            <rect class="cls-34" x="304.14" y="62.52" width="70.7" height="99.84" rx="8.5" />
                                        </g>
                                        <path class="cls-35"
                                            d="M352.92,135.09H326.06a3.62,3.62,0,0,1-3.62-3.62h0a3.62,3.62,0,0,1,3.62-3.62h26.86a3.62,3.62,0,0,1,3.62,3.62h0A3.62,3.62,0,0,1,352.92,135.09Z" />
                                        <rect class="cls-36" x="313.2" y="74.67" width="52.58" height="46.19" rx="3.06" />
                                        <circle class="cls-10" cx="339.49" cy="97.76" r="12.9"
                                            transform="translate(30.31 268.69) rotate(-45)" />
                                        <path class="cls-37"
                                            d="M344.92,98.79l-7.52,4.71a1.21,1.21,0,0,1-1.86-1V93.05a1.21,1.21,0,0,1,1.86-1l7.52,4.71A1.22,1.22,0,0,1,344.92,98.79Z" />
                                        <g class="cls-38">
                                            <rect class="cls-39" x="324.57" y="141.1" width="29.85" height="2.93" />
                                            <rect class="cls-39" x="317.07" y="147.51" width="44.84" height="2.93" />
                                        </g>
                                    </g>
                                    <g id="rating">
                                        <g class="cls-2">
                                            <image class="cls-3" width="105" height="86" transform="translate(129)"
                                                xlink:href="data:image/png;base64,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" />
                                            <rect class="cls-40" x="139.09" y="8.47" width="80.4" height="61.52" rx="7.11" />
                                        </g>
                                        <path class="cls-41"
                                            d="M167.44,29.5a11.85,11.85,0,1,0,11.85-11.85A11.83,11.83,0,0,0,167.44,29.5Z" />
                                        <path class="cls-5" d="M175.4,25a3.89,3.89,0,1,0,3.89-3.88A3.89,3.89,0,0,0,175.4,25Z" />
                                        <path class="cls-5" d="M171.11,38.09a11.83,11.83,0,0,0,16.35,0,8.46,8.46,0,0,0-16.35,0Z" />
                                        <path class="cls-42"
                                            d="M201.36,50.69l-.9,1.83a.53.53,0,0,1-.39.29l-2,.29a.52.52,0,0,0-.29.89l1.46,1.42a.52.52,0,0,1,.15.46l-.34,2a.52.52,0,0,0,.75.55l1.8-1a.53.53,0,0,1,.49,0l1.8,1a.53.53,0,0,0,.76-.55l-.35-2a.52.52,0,0,1,.15-.46L205.89,54a.52.52,0,0,0-.29-.89l-2-.29a.51.51,0,0,1-.39-.29l-.91-1.83A.52.52,0,0,0,201.36,50.69Z" />
                                        <path class="cls-43"
                                            d="M189.86,50.69l-.9,1.83a.53.53,0,0,1-.39.29l-2,.29a.52.52,0,0,0-.29.89l1.46,1.42a.52.52,0,0,1,.15.46l-.34,2a.52.52,0,0,0,.75.55l1.81-1a.51.51,0,0,1,.48,0l1.8,1a.52.52,0,0,0,.76-.55l-.34-2a.5.5,0,0,1,.15-.46L194.39,54a.52.52,0,0,0-.28-.89l-2-.29a.51.51,0,0,1-.39-.29l-.9-1.83A.53.53,0,0,0,189.86,50.69Z" />
                                        <path class="cls-44"
                                            d="M178.79,50.69l-.9,1.83a.51.51,0,0,1-.39.29l-2,.29a.52.52,0,0,0-.28.89l1.45,1.42a.5.5,0,0,1,.15.46l-.34,2a.52.52,0,0,0,.76.55l1.8-1a.51.51,0,0,1,.48,0l1.81,1a.52.52,0,0,0,.75-.55l-.34-2a.52.52,0,0,1,.15-.46L183.33,54a.52.52,0,0,0-.29-.89l-2-.29a.53.53,0,0,1-.39-.29l-.9-1.83A.53.53,0,0,0,178.79,50.69Z" />
                                        <path class="cls-45"
                                            d="M167.3,50.69l-.91,1.83a.51.51,0,0,1-.39.29l-2,.29a.52.52,0,0,0-.29.89l1.46,1.42a.52.52,0,0,1,.15.46l-.35,2a.53.53,0,0,0,.76.55l1.8-1a.53.53,0,0,1,.49,0l1.8,1a.52.52,0,0,0,.75-.55l-.34-2a.52.52,0,0,1,.15-.46L171.83,54a.52.52,0,0,0-.29-.89l-2-.29a.53.53,0,0,1-.39-.29l-.9-1.83A.52.52,0,0,0,167.3,50.69Z" />
                                        <path class="cls-46"
                                            d="M156.27,50.69l-.9,1.83a.53.53,0,0,1-.39.29l-2,.29a.52.52,0,0,0-.29.89l1.46,1.42a.52.52,0,0,1,.15.46l-.34,2a.52.52,0,0,0,.75.55l1.81-1a.51.51,0,0,1,.48,0l1.8,1a.52.52,0,0,0,.76-.55l-.34-2a.5.5,0,0,1,.15-.46L160.8,54a.52.52,0,0,0-.28-.89l-2-.29a.51.51,0,0,1-.39-.29l-.9-1.83A.53.53,0,0,0,156.27,50.69Z" />
                                    </g>
                                    <g id="person">
                                        <path class="cls-47" d="M74.63,134.31s3.89.47,3.69,1.08-4,.43-4.36.47-3.15,1.42-3.15,1.42Z" />
                                        <path class="cls-47" d="M72.9,133.58s5.11-2.39,5.89-2.08-3,2.4-3,2.4l-4.46,2.91Z" />
                                        <path class="cls-48"
                                            d="M46.84,162.76l6.95,4.4,10-23.69s5.61-8.51,7.89-11.36,3.22-4.92,4-4.8-.89,4.23-1.87,5.78-2.6,5.18-2.6,6.31.93,1.34,4.39-.36c2.65-1.3,1.36,1,0,2.27-.87.84-7.29,5.17-7.29,5.17s-4.84,29.23-8.63,32.89-20.39-6.47-20.39-6.47Z" />
                                        <path class="cls-49"
                                            d="M39.26,172.9a83.93,83.93,0,0,0,10.84,5.49c4,1.6,7.94,2.54,9.55,1s3.27-7.22,4.76-13.49c.45-1.93.89-3.89,1.29-5.8L63,158l-.54-.42h0L59,154.88l-5.19,12.28-6.95-4.4Z" />
                                        <path class="cls-50"
                                            d="M99.57,150.56a9,9,0,0,1,0-3.27c.34-1.5.19-2.68-.08-2.8s-1,1.71-1.86,4.19a22.32,22.32,0,0,0-.69,6.21Z" />
                                        <path class="cls-51"
                                            d="M66.34,160.91l8.59,5.58,21.27-12s4.83-8.31,6.17-9.35,5.19-4.34,6.17-4.15-.49,2-.49,2,2.44-1.83,3-1.4-1.1,2.5-1.1,2.5,1.22-.73,1.65-.43-.79,2-.79,2,.85-.49.88.61-4.43,4.7-5.4,6.35-2.76,4.63-3.92,5.67a10.32,10.32,0,0,1-2.86,1.65S82,176.46,77,178.47s-16.59-6.87-16.59-6.87Z" />
                                        <polygon class="cls-52" points="66.94 161.3 62.97 173.41 61 172.03 66.94 161.3" />
                                        <polygon class="cls-50"
                                            points="43.89 319.98 47.19 321.93 52.29 319.63 51.63 311.49 42.69 311.49 43.89 319.98" />
                                        <path class="cls-53"
                                            d="M43.64,329.77H66.08a1.67,1.67,0,0,0,1.59-2.22l-.06-.16a4,4,0,0,0-1.61-2c-2.2-1.34-13-6-13-6s-.15-.94-.21-2.08c0-.95-.8-.94-.8-.94s-1.1,3-3.3,3.64a8.38,8.38,0,0,1-4.78-.51l-.37-1.75c-1.46,1.8-1.58,6.7-1.84,9.67,0,.1,0,.19,0,.28A1.93,1.93,0,0,0,43.64,329.77Z" />
                                        <path class="cls-54"
                                            d="M43.33,329.77H66.88a1.06,1.06,0,0,0,1.05-1.22,6,6,0,0,0-.32-1.16H41.73c0,.21,0,.42,0,.61A1.65,1.65,0,0,0,43.33,329.77Z" />
                                        <path class="cls-54"
                                            d="M54.14,324a.37.37,0,0,0,.27-.13,5.59,5.59,0,0,1,3-2.25.34.34,0,0,0,.27-.4.34.34,0,0,0-.39-.28,6.22,6.22,0,0,0-3.41,2.51.35.35,0,0,0,.07.48A.31.31,0,0,0,54.14,324Z" />
                                        <path class="cls-54"
                                            d="M50.55,322.84a.31.31,0,0,0,.24-.1c2.4-2.34,4.23-2.24,4.25-2.24a.34.34,0,0,0,.37-.31.35.35,0,0,0-.31-.37c-.09,0-2.14-.15-4.78,2.43a.35.35,0,0,0,0,.49A.34.34,0,0,0,50.55,322.84Z" />
                                        <path class="cls-55"
                                            d="M21.79,199.52a58.23,58.23,0,0,0-2.15,14.54c0,7.32,16.28,58.78,16.28,58.78l4.88,41.69H53.51s-1-45.27-2.28-54.39-7.82-60.62-7.82-60.62Z" />
                                        <path class="cls-56"
                                            d="M21.79,199.52a58.23,58.23,0,0,0-2.15,14.54c0,7.32,16.28,58.78,16.28,58.78l4.88,41.69H53.51s-1-45.27-2.28-54.39-7.82-60.62-7.82-60.62Z" />
                                        <polygon class="cls-57"
                                            points="19.23 319.98 22.53 321.93 26.84 319.98 28.9 311.49 20.02 311.49 19.23 319.98" />
                                        <path class="cls-58"
                                            d="M19,329.77H41.42A1.68,1.68,0,0,0,43,327.55l-.06-.16a4,4,0,0,0-1.61-2c-2.2-1.34-13-6-13-6s.2-1.17.25-2.06-1.13-1-1.13-1-1.24,3-3.43,3.64a8.38,8.38,0,0,1-4.78-.51l.16-1.76c-1.46,1.81-2.11,6.71-2.37,9.68,0,.1,0,.19,0,.28A1.93,1.93,0,0,0,19,329.77Z" />
                                        <path class="cls-59"
                                            d="M18.67,329.77H42.22a1,1,0,0,0,1-1.22,5.92,5.92,0,0,0-.31-1.16H17.07c0,.21,0,.42-.05.61A1.64,1.64,0,0,0,18.67,329.77Z" />
                                        <path class="cls-59"
                                            d="M30.38,324.23a.32.32,0,0,0,.27-.13,5.7,5.7,0,0,1,3-2.25.34.34,0,0,0,.28-.39.33.33,0,0,0-.39-.28,6.1,6.1,0,0,0-3.41,2.5.34.34,0,0,0,.06.48A.35.35,0,0,0,30.38,324.23Z" />
                                        <path class="cls-59"
                                            d="M26.8,323A.36.36,0,0,0,27,323c2.39-2.34,4.22-2.24,4.25-2.24a.35.35,0,0,0,.37-.32.34.34,0,0,0-.32-.36c-.08,0-2.14-.16-4.78,2.43a.34.34,0,0,0,0,.48A.31.31,0,0,0,26.8,323Z" />
                                        <path class="cls-60"
                                            d="M17.58,314.52h14s13.35-44,14.49-51.94c.56-4,3.32-27,4.75-39,.17-1.46.31-2.92.44-4.39.25-3.06.39-6.14.42-9.21V204l-17.48-2.62-9.71-1.46c-.24,1.78-.43,3.37-.58,4.85-.8,7.66-.56,11.94.81,21.18l1.81,36.47Z" />
                                        <path class="cls-61"
                                            d="M23.81,314.53h.71c.84-3.3,8.59-33.66,10.42-42.27,1.93-9.07,7.05-66.1,7.1-66.68l-.68-.06c0,.58-5.17,57.56-7.09,66.6C32.41,280.89,24.37,312.35,23.81,314.53Z" />
                                        <path class="cls-62"
                                            d="M23.86,204.77s11,5.73,27.77,5.16c0-.32,0-.65,0-1V204l-17.49-2.62C28.52,203.21,23.86,204.77,23.86,204.77Z" />
                                        <path class="cls-63"
                                            d="M44.77,119.55s2.24-3.87,2.06-7.41-5.92-5.49-5.92-5.49.49-5.56-9.22-4.34-11.54,11.24-11.54,11.24-2.1.1-2.14,4.52c0,4.7,1,6.89,5,10.56,3.8,3.47,4.25,5.94,4.25,5.94Z" />
                                        <circle class="cls-64" cx="33.15" cy="118.8" r="11.17"
                                            transform="translate(-74.29 58.24) rotate(-45)" />
                                        <path class="cls-65"
                                            d="M44,116a24.76,24.76,0,0,1,1.82,9.58c.06,5.79.43,14.29-7,12.94l.55,4.95H27l.29-8.9,5.88-7.28A3.76,3.76,0,0,1,29.31,123c.28-4.09,4.64-1.89,4.82.31L36,126.13s2.08-1.35,1.89-6.42Z" />
                                        <path class="cls-66" d="M38.77,138.52a17.54,17.54,0,0,1-6.35-2.4,7.06,7.06,0,0,0,6.9,7.35Z" />
                                        <path class="cls-67"
                                            d="M17.46,157.4v.68c0,3.39.16,7.25.4,11.19a.57.57,0,0,0,0,.13l0,.57c.29,4.4.7,8.88,1.11,12.93,0,.25,0,.5.07.76.46,4.43.92,8.28,1.24,10.86,0,.25.06.51.09.73.21,1.69.34,2.67.34,2.67S18.55,200,18.8,201a17.53,17.53,0,0,0,2.08,3.42c10.13,1.4,21.79,1.84,30.75-.39l-.16-11v-.72l-.2-13.11v-.71l-.12-8.09v-.14l4.3,2.09.65.32,3.63,1.76.77-1.4,3.92-7.08,1.29-2.33L67,161.12l-1.34-1.05L63,158l-.54-.42h0L59,154.88l-4.19-3.2-.56-.42c-2.93-2.21-5.51-4.11-6.67-4.86a8.87,8.87,0,0,0-.94-.55h0a7.91,7.91,0,0,0-.82-.42h0a24.5,24.5,0,0,0-4.71-1.6,16.91,16.91,0,0,0-1.67-.34l-.08,0s-10.94-2.46-17.14.63a1.3,1.3,0,0,0-.26.14.42.42,0,0,0-.14.06l-.08,0a4.94,4.94,0,0,0-.49.3A7.18,7.18,0,0,0,19.63,146a6.79,6.79,0,0,0-.89,1.36C17.87,149.16,17.5,152.82,17.46,157.4Z" />
                                        <g class="cls-68">
                                            <path class="cls-69"
                                                d="M21.21,144.65a8.43,8.43,0,0,1,1-.56,52.89,52.89,0,0,0,17.22-.6,16.91,16.91,0,0,1,1.67.34,54.27,54.27,0,0,1-12.15,1.38A52.73,52.73,0,0,1,21.21,144.65Z" />
                                            <path class="cls-70"
                                                d="M62.43,157.54,63,158a25.3,25.3,0,0,0-6.88,14.64l-.66-.32a26.08,26.08,0,0,1,7-14.74Z" />
                                            <path class="cls-71"
                                                d="M46.41,168a20.39,20.39,0,0,1,7.82-16.7l.56.43a19.73,19.73,0,0,0-7.68,16.59Z" />
                                            <path class="cls-72"
                                                d="M37.81,156.06c-.06.25-.13.49-.19.75a28.06,28.06,0,0,0-.7,6.53h-.69a29.28,29.28,0,0,1,.65-6.37,67.39,67.39,0,0,1-13.59,1.41,56,56,0,0,1-5.83-.3v-.68a64.52,64.52,0,0,0,19.6-1.17,16.61,16.61,0,0,1,4.28-7.78,15.16,15.16,0,0,1,4.44-3h0a9,9,0,0,1,.82.41A14.17,14.17,0,0,0,41.82,149,15.74,15.74,0,0,0,37.81,156.06Z" />
                                            <path class="cls-73"
                                                d="M40.25,167.72c1.55-.4,2.74-.78,3.48-1l.9.43c-.48.17-1.86.65-3.88,1.19a61.81,61.81,0,0,1-15.7,2.15,50.42,50.42,0,0,1-7.14-.49c0-.23,0-.46-.05-.69A58.57,58.57,0,0,0,40.25,167.72Z" />
                                            <path class="cls-74"
                                                d="M50.43,178.67l.7-.21.13,0v.71a4.56,4.56,0,0,1-.57.17c-11.6,3.44-20.67,4.51-27.48,4.51-1.48,0-2.87-.05-4.13-.15l-.09-.77C26.05,183.42,36.41,182.79,50.43,178.67Z" />
                                            <path class="cls-75"
                                                d="M51.46,192.24V193A68,68,0,0,1,31,196.37a48,48,0,0,1-10.54-1.12c0-.23-.06-.47-.1-.73C32.52,197.33,44.66,194.48,51.46,192.24Z" />
                                        </g>
                                        <polygon class="cls-76"
                                            points="36.23 163.34 40.25 167.72 40.75 168.31 51.28 180.35 51.13 170.19 44.63 167.12 43.73 166.69 36.23 163.34" />
                                        <path class="cls-77"
                                            d="M22.18,144.1a1.3,1.3,0,0,0-.26.14c1.31-.6,9.49-.74,19.5,3.24,8.75,3.48,23.84,16.85,23.84,16.85L67,161.12l-1.34-1.05L63,158l-.54-.42h0L59,154.88l-4.19-3.2-.56-.42c-2.93-2.21-5.51-4.11-6.67-4.86a8.87,8.87,0,0,0-.94-.55h0a7.91,7.91,0,0,0-.82-.42h0a24.5,24.5,0,0,0-4.71-1.6,16.91,16.91,0,0,0-1.67-.34l-.08,0S28.38,141,22.18,144.1Z" />
                                        <path class="cls-78"
                                            d="M102.16,148.63a.23.23,0,0,0,.19-.09,15.53,15.53,0,0,1,1.49-1.71c.61-.53,4.29-3.6,4.33-3.63a.24.24,0,0,0,0-.33.23.23,0,0,0-.34,0c-.15.12-3.72,3.09-4.34,3.63a15.88,15.88,0,0,0-1.55,1.78.23.23,0,0,0,0,.33A.19.19,0,0,0,102.16,148.63Z" />
                                        <path class="cls-78"
                                            d="M104.39,149.53a.26.26,0,0,0,.21-.11,11.1,11.1,0,0,1,1.2-1.6c.61-.64,4.22-3.48,4.25-3.51a.23.23,0,0,0,0-.34.23.23,0,0,0-.33,0c-.15.12-3.68,2.89-4.31,3.56a13.27,13.27,0,0,0-1.26,1.67.23.23,0,0,0,.08.33A.19.19,0,0,0,104.39,149.53Z" />
                                        <path class="cls-78"
                                            d="M105.63,151.14a.23.23,0,0,0,.2-.12,15.61,15.61,0,0,1,1.67-2.24c.61-.54,3.56-3,3.59-3a.24.24,0,0,0-.31-.37s-3,2.49-3.6,3a15.55,15.55,0,0,0-1.76,2.35.24.24,0,0,0,.08.33A.2.2,0,0,0,105.63,151.14Z" />
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
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
        <div data-aos-easing="ease" data-aos="fade-right" class="feature-block block-3">
            <img src="{{url('images/services/03.png')}}" alt="" class="order-no">
            <div class="image-block">
                <img src="{{url('images/services/cdd-01.png')}}" alt="">
            </div>
            <h4 class="title">Software Development</h4>
            <p class="text">Experienced software developers to work individually or as a part of your team. Save Big with remote working environment, yer achieve the Best results.</p>
            <a href="{{url('/contact')}}" class="cta-btn-border"><span class="text">Inquire Now</span> <i class="bi bi-arrow-right-short"></i></a>
        </div>
        <div data-aos-easing="ease" data-aos="fade-left" class="feature-block block-4">
            <img src="{{url('images/services/04.png')}}" alt="" class="order-no">
            <div class="image-block">
                <img src="{{url('images/services/xcxcx-01.png')}}" alt="">
            </div>
            <h4 class="title">Mobile App Development</h4>
            <p class="text">Hire the industry experts to bring your idea into reality. Dedicated Android & iOS developers to work on your project</p>
            <a href="{{url('/contact')}}" class="cta-btn-border"><span class="text">Inquire Now</span> <i class="bi bi-arrow-right-short"></i></a>
        </div>
        <div data-aos-easing="ease" data-aos="fade-right" class="feature-block block-5">
            <img src="{{url('images/services/05.png')}}" alt="" class="order-no">
            <div class="image-block">
                <img src="{{url('images/services/sfsf-01.png')}}" alt="">
            </div>
            <h4 class="title">Digital Marketing</h4>
            <p class="text">SEO experts, Social media strategists and creative designers all under one package with a dedicated account manager</p>
            <a href="{{url('/contact')}}" class="cta-btn-border"><span class="text">Inquire Now</span> <i class="bi bi-arrow-right-short"></i></a>
        </div>
        <div data-aos-easing="ease" data-aos="fade-left" class="feature-block block-6">
            <img src="{{url('images/services/06.png')}}" alt="" class="order-no">
            <div class="image-block">
                <img src="{{url('images/services/SEO-01.png')}}" alt="">
            </div>
            <h4 class="title">Search Engine Optimisation</h4>
            <p class="text">Put your website ahead of your competitors organically. Tallentor SEO tool will scan through the website and generate a report in minutes and our SEO specialists will give you a plan to get you on track fast.</p>
            <a href="{{url('/contact')}}" class="cta-btn-border"><span class="text">Inquire Now</span> <i class="bi bi-arrow-right-short"></i></a>
        </div>
        <div data-aos-easing="ease" data-aos="fade-right" class="feature-block block-7">
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

<script>
  AOS.init();
</script>

@endpush

