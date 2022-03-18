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

<div class="pricing-section mb-5">
    <div class="container">
        <div class="header">
            <h2 class="title">Best Plans For Your Business</h2>
            <div class="subtitle">Cost-Effective, Full Service, High Security</div>
        </div>
        <div class="content">
            <div class="pricing-card basic-card">
                <div class="header">
                    <img src="{{url('images/landing_page/pricing_section/basic_icon.png')}}" alt="">
                    <div class="text-block">
                        <div class="title">Basic</div>
                        <div class="subtitle">Subtitle here</div>
                    </div>
                    <div class="pricing-block">
                        <div class="currency"></div>
                        <div class="fee">FREE</div>
                    </div>
                </div>
                <div class="body">
                    <ul class="option">
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">Lorem ipsum dolor</div>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">Lorem ipsum dolor</div>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">Lorem ipsum dolor</div>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">Lorem ipsum dolor</div>
                        </li>
                        <li>
                            <i class="bi bi-x-circle"></i>
                            <div class="text dashed">Lorem ipsum dolor</div>
                        </li>
                        <li>
                            <i class="bi bi-x-circle"></i>
                            <div class="text dashed">Lorem ipsum dolor</div>
                        </li>
                        <li>
                            <i class="bi bi-x-circle"></i>
                            <div class="text dashed">Lorem ipsum dolor</div>
                        </li>
                        <li>
                            <i class="bi bi-x-circle"></i>
                            <div class="text dashed">Lorem ipsum dolor</div>
                        </li>
                    </ul>
                </div>
                <div class="footer">
                    <a href="#" class="pricing-btn">Choose Plan</a>
                </div>
            </div>
            <div class="pricing-card standard-card">
                <div class="special">Special</div>
                <div class="header">
                    <img src="{{url('images/landing_page/pricing_section/standard_icon.png')}}" alt="">
                    <div class="text-block">
                        <div class="title">Standard</div>
                        <div class="subtitle">Subtitle here</div>
                    </div>
                    <div class="pricing-block">
                        <div class="currency">LKR</div>
                        <div class="fee">5000<span>.00</span></div>
                    </div>
                </div>
                <div class="body">
                    <ul class="option">
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">Lorem ipsum dolor</div>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">Lorem ipsum dolor</div>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">Lorem ipsum dolor</div>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">Lorem ipsum dolor</div>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">Lorem ipsum dolor</div>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">Lorem ipsum dolor</div>
                        </li>
                        <li>
                            <i class="bi bi-x-circle"></i>
                            <div class="text dashed">Lorem ipsum dolor</div>
                        </li>
                        <li>
                            <i class="bi bi-x-circle"></i>
                            <div class="text dashed">Lorem ipsum dolor</div>
                        </li>
                    </ul>
                </div>
                <div class="footer">
                    <a href="#" class="pricing-btn">Choose Plan</a>
                </div>
            </div>
            <div class="pricing-card premium-card">
                <div class="header">
                    <img src="{{url('images/landing_page/pricing_section/premium_icon.png')}}" alt="">
                    <div class="text-block">
                        <div class="title">Premium</div>
                        <div class="subtitle">Subtitle here</div>
                    </div>
                    <div class="pricing-block">
                        <div class="currency">LKR</div>
                        <div class="fee">5000<span>.00</span></div>
                    </div>
                </div>
                <div class="body">
                    <ul class="option">
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">Lorem ipsum dolor</div>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">Lorem ipsum dolor</div>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">Lorem ipsum dolor</div>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">Lorem ipsum dolor</div>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">Lorem ipsum dolor</div>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">Lorem ipsum dolor</div>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">Lorem ipsum dolor</div>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">Lorem ipsum dolor</div>
                        </li>
                    </ul>
                </div>
                <div class="footer">
                    <a href="#" class="pricing-btn">Choose Plan</a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('frontend.includes.footer')

    
@endsection

