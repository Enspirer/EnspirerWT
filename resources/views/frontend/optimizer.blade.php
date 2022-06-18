@extends('frontend.layouts.app')

@section('title', 'Web Optimizer | Whatsapp chat widget | Heatmaps | Realtime users | Tallentor ')
@section('meta_description','Optimise web performance with Tallentor Optimizer | real time user engagement with Optimizer mobile app, user heat maps, user session records, Chat invites, Analytic reports, SEO reports
Whatsapp chat widget to improve user engagement with inquiry management system')

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
                                <a class="breadcrumb-link breadcrumb-current">All-in-One Chat</a>
                            </li>
                        </ul>
                        <div class="inner-wrapper">
                            <div class="content-block">
                                <h2 class="title">Optimizer</h2>
                                <div class="caption">Widget with <div class="product">iMS <span class="red pro-cat">Pro</span></div> <br> User session view <br>HeatMaps</div>
                                <div class="product blue">Mobile App</div>
                                <div class="text">Real time visitors <br> Chat invite</div>

                                <a href="{{url('login')}}" class="cta-btn-fill"><span class="text">Get Started</span> <i class="bi bi-arrow-right-short"></i></a>
                            </div>
                            <div class="image-block">
                                <img src="{{url('images/landing_page/products/hero-optimizer.png')}}" >
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
                                                    <img src="{{url('images/landing_page/products/slide_1.png')}}" >
                                                </li>
                                            </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="content-block">
                                <h2 class="title">All-in-One Chat Features</h2>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> The choice of multiple messenger options</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Customisable chat bow and welcome note</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Setting a chat-opening trigger</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Integration into your website with IMS</li>
                                </ul>
                                <a href="" class="cta-btn-border">
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
                            <img src="{{url('images/products/Path 6503.svg')}}"  class="top-curve">
                            <img src="{{url('images/products/Path 6507.svg')}}"  class="bottom-curve">
                        </div>
                        <div class="optimizer-slide-wrapper">
                            <div id="optimizerSlide" class="splide optimizer-slide">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                            <img src="{{url('images/landing_page/products/slide-imsPro.png')}}" >
                                        </li>
                                        <li class="splide__slide">
                                            <img src="{{url('images/landing_page/products/slide-heatmap.png')}}" >
                                        </li>
                                        <li class="splide__slide">
                                            <img src="{{url('images/landing_page/products/slide-sessionRec.png')}}" >
                                        </li>
                                        <li class="splide__slide">
                                            <img src="{{url('images/landing_page/products/slide-realtime.png')}}" >
                                        </li>
                                        <li class="splide__slide">
                                            <img src="{{url('images/landing_page/products/slide-allin1.png')}}" >
                                        </li>
                                        <li class="splide__slide">
                                            <img src="{{url('images/landing_page/products/slide-analytics.png')}}" >
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="optimizerThumb" class="splide optimizer-thumb">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                            <div class="thumb-card">
                                                <div class="title">iMS <span class="pro-cat">Pro</span></div>
                                                <p class="text">Giving the customer maximum flexibility to choose the</p>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <div class="thumb-card">
                                                <div class="title">Heatmaps</div>
                                                <p class="text">Giving the customer maximum flexibility to choose the</p>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <div class="thumb-card">
                                                <div class="title">Session Records</div>
                                                <p class="text">Giving the customer maximum flexibility to choose the</p>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <div class="thumb-card">
                                                <div class="title">Realtime Visitors</div>
                                                <p class="text">Giving the customer maximum flexibility to choose the</p>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <div class="thumb-card">
                                                <div class="title">All in one Widget</div>
                                                <p class="text">Giving the customer maximum flexibility to choose the</p>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <div class="thumb-card">
                                                <div class="title">Analytics Report</div>
                                                <p class="text">Giving the customer maximum flexibility to choose the</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="splide__progress">
                                    <div class="splide__progress__bar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>

    @include('frontend.includes.footer')


@endsection

@push('after-scripts')

<script>
var optimizerSlide = new Splide( '#optimizerSlide', {
    type    : 'loop',
    autoplay: true,
    rewind : true,
    arrows: false,
    pagination: false,
  } );

var optimizerThumb = new Splide( '#optimizerThumb', {
    type    : 'loop',
    perPage: 4,
    rewind : true,
    autoplay: true,
    arrows: false,
    pagination: false,
    isNavigation: true,
    breakpoints: {
            1199: {
              perPage: 3,

            },
            767: {
              perPage: 2,

            },
            640: {
              perPage: 1,

            },
          },
  } );

optimizerSlide.sync( optimizerThumb );
optimizerSlide.mount();
optimizerThumb.mount();
</script>

@endpush

