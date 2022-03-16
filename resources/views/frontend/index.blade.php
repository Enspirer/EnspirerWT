@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    
@include('frontend.includes.home_nav')

    <section class="hero-section">
        <div class="container">
            <div class="splide" id="heroSlider">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="slide-wrapper">
                                <div class="content-block">
                                    <h6>Upgrade your website with the most</h6>
                                    <h2 class="title">Interactive <span>Communication tool</span></h2>
                                    <h5 class="text">Improve user engagement &amp; <br> grow your business fast</h5>
                                    <h5>All-in-One Chat With <span>IMS</span></h5>
                                    <h6 class="blue-text"><span>I</span>nquiry <span>M</span>anagement <span>S</span>ystem</h6>

                                    <a href="{{url('login')}}" class="cta-btn-fill"><span class="text">Get Started</span> <i class="bi bi-arrow-right-short"></i></a>
                                    <!-- <div class="featured-icons">
                                        <a href="#" class="icon"><img src="{{url('images/seo.png')}}" alt="featured icon"></a>
                                        <a href="#" class="icon"><img src="{{url('images/analytics.png')}}" alt="featured icon"></a>
                                        <a href="#" class="icon"><img src="{{url('images/shield (1).png')}}" alt="featured icon"></a>
                                        <a href="#" class="icon"><img src="{{url('images/chat (1).png')}}" alt="featured icon"></a>
                                    </div> -->
                                </div>
                                <div class="image-block slide-01">
                                    <img src="{{url('images/landing_page/home/banner_1.png')}}" alt="hero-image">
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="slide-wrapper">
                                <div class="content-block">
                                    <h6>The Smarter way to <span class="strong">Boost</span> your </h6>
                                    <h2 class="title">Website <br> Performance</h2>
                                    <h5 class="text">WhatsApp Widget with <span>IMS</span></h5>
                                    <h6 class="blue-text"><span>I</span>nquiry <span>M</span>anagement <span>S</span>ystem</h6>

                                    <a href="{{url('login')}}" class="cta-btn-fill"><span class="text">Get Started</span> <i class="bi bi-arrow-right-short"></i></a>
                                    <!-- <div class="featured-icons">
                                        <a href="#" class="icon"><img src="{{url('images/seo.png')}}" alt="featured icon"></a>
                                        <a href="#" class="icon"><img src="{{url('images/analytics.png')}}" alt="featured icon"></a>
                                        <a href="#" class="icon"><img src="{{url('images/shield (1).png')}}" alt="featured icon"></a>
                                        <a href="#" class="icon"><img src="{{url('images/chat (1).png')}}" alt="featured icon"></a>
                                    </div> -->
                                </div>
                                <div class="image-block">
                                    <img src="{{url('images/landing_page/home/banner_2.png')}}" alt="hero-image">
                                </div>
                            </div>
                        </li>
                    </ul>
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
                    <div class="content-block">
                        <div class="header">
                            <div class="title"><img src="{{url('images/landing_page/home/whatsapp-blue.png')}}" alt="" width="30"> WhatsApp Widget</div>
                            <span class="text">Integrate the most popular communication channel into your website and improve your customer service quality and sales conversion.</span>
                        </div>
                        <ul class="features">
                            <li><i class="bi bi-check-circle-fill"></i>Customisable ready to use widget</li>
                            <li><i class="bi bi-check-circle-fill"></i>Inquiry Management System - IMS</li>
                        </ul>
                        <a href="#" class="cta-btn-border"><span class="text">Get Started</span> <i class="bi bi-arrow-right-short"></i></a>
                    </div>
                    <div class="image-block">
                        <img src="{{url('images/landing_page/home/whatsapp-widget.png')}}" alt="">
                    </div>
                </div>
                <div class="feature-box">
                    <div class="content-block">
                        <div class="header">
                            <div class="title"><img src="{{url('images/landing_page/home/open-menu.png')}}" alt="" width="30"> All-in-One chat</div>
                            <span class="text">Giving the customer maximum flexibility to choose the mode they like to contact you, with a super easy interface.</span>
                        </div>
                        <ul class="features">
                            <li><i class="bi bi-check-circle-fill"></i>Pick and choose the channels</li>
                            <li><i class="bi bi-check-circle-fill"></i>Quick integration with IMS option.</li>
                        </ul>
                        <a href="#" class="cta-btn-border"><span class="text">Get Started</span> <i class="bi bi-arrow-right-short"></i></a>
                    </div>
                    <div class="image-block">
                        <img src="{{url('images/landing_page/home/all-in-one-chat.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="IMS-section">
        <div class="container">
            <h2 class="title">Inquiry Management System</h2>
            <span class="text">Keep track of all inquiries with status updates & Sales Reports</span>
            <div class="card-block">
                <div class="card">
                    <img src="{{url('images/landing_page/home/ims_admin.png')}}" alt="">
                    <div class="text">Admin dashboard with user privileges management</div>
                </div>
                <div class="card">
                    <img src="{{url('images/landing_page/home/ims_analytics.png')}}" alt="">
                    <div class="text">Analytics of the inquiry process with reports</div>
                </div>
                <div class="card">
                    <img src="{{url('images/landing_page/home/ims_record.png')}}" alt="">
                    <div class="text">Record of the full status of the inquiry with comments</div>
                </div>
                <div class="card">
                    <img src="{{url('images/landing_page/home/ims_assign.png')}}" alt="">
                    <div class="text">Assign the inquiry to relevant department</div>
                </div>
            </div>
            <div class="image-block">
                <img src="{{url('images/landing_page/home/ims-banner.png')}}" alt="">
            </div>
        </div>
    </section>

    <section class="SEO-section">
        <div class="container">
            <div class="header">
                <h2 class="title">Keep your website on Top of the Game</h2>
                <span class="text">The All-in-One comprehensive tool to manage Google rankings, <br> site analytics, Cyber security and general performance of the website.</span>
            </div>
            <div class="inner-wrapper">
                <div class="SEO-block">
                    <div class="header">
                        <div class="title"><img src="{{url('images/landing_page/home/seo-icon.png')}}" alt="">SEO</div>
                        <span class="text">The power tool to get a comprehensive report to check your website ranking, and performance.<br/> &nbsp;</span>
                    </div>
                    <ul class="features">
                        <li><i class="bi bi-check-circle-fill"></i>Recommendations for the issues</li>
                        <li><i class="bi bi-check-circle-fill"></i>Expert team to enhance performance</li>
                    </ul>
                    <div class="image-block">
                        <img src="{{url('images/landing_page/home/seo.png')}}" alt="">
                    </div>
                    <a href="{{url('contact')}}" class="cta-btn-border"><span class="text">Get Started</span> <i class="bi bi-arrow-right-short"></i></a>
                </div>
                <div class="SEO-block">
                    <div class="header">
                        <div class="title"><img src="{{url('images/landing_page/home/analytics-icon.png')}}" alt="">Analytics</div>
                        <span class="text">User engagement and traffic monitoring tool provides with the critical insights of the website for digital marketing</span>
                    </div>
                    <ul class="features">
                        <li><i class="bi bi-check-circle-fill"></i>Reports with insights</li>
                        <li><i class="bi bi-check-circle-fill"></i>User behavior monitoring </li>
                    </ul>
                    <div class="image-block">
                        <img src="{{url('images/landing_page/home/analytics.png')}}" alt="">
                    </div>
                    <a href="{{url('contact')}}" class="cta-btn-border"><span class="text">Get Started</span> <i class="bi bi-arrow-right-short"></i></a>
                </div>
                <div class="SEO-block">
                    <div class="header">
                        <div class="title"><img src="{{url('images/landing_page/home/security-icon.png')}}" alt="">Security</div>
                        <span class="text">The intelligent tool to protect the website from cyber attacks, spam emails and management of  blacklisting.</span>
                    </div>
                    <ul class="features">
                        <li><i class="bi bi-check-circle-fill"></i>Constant monitoring of the website</li>
                        <li><i class="bi bi-check-circle-fill"></i>Alerts and technical assistance</li>
                    </ul>
                    <div class="image-block">
                        <img src="{{url('images/landing_page/home/security.png')}}" alt="">
                    </div>
                    <a href="{{url('contact')}}" class="cta-btn-border"><span class="text">Get Started</span> <i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="marketplace-section">
        <div class="container">
            <div class="inner-wrapper">
                <div class="button-block">
                    <div class="content">
                        <h1 class="title">The Talent <br> Marketplace</h1>
                        <a href="{{url('market_place')}}" class="cta-btn-border"><span class="text">Find Talent</span> <i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
                <div class="card-block" id="marketplaceCards">
                    <div class="card card-top">
                        <div class="icon-block">
                            <i class="bi bi-check-circle-fill"></i>
                            <i class="bi bi-three-dots-vertical"></i>
                        </div>
                        <div class="image-block">
                            <img src="{{url('images/landing_page/home/mobile-app-development.png')}}" alt="">
                        </div>
                        <div class="content">
                            <div class="title">Mobile App Development</div>
                            <div class="text">Hire the industry experts to bring your idea into reality.
                            Dedicated Android & iOS developers to work on your project</div>
                        </div>
                    </div>
                    <div class="card active card-middle">
                        <div class="icon-block">
                            <i class="bi bi-check-circle-fill"></i>
                            <i class="bi bi-three-dots-vertical"></i>
                        </div>
                        <div class="image-block">
                            <img src="{{url('images/landing_page/home/software-development.png')}}" alt="">
                        </div>
                        <div class="content">
                            <div class="title">Software Development</div>
                            <div class="text">Experienced software developers to work individually or as a part of your team. Save Big with remote working environment, yer achieve the Best results.</div>
                        </div>
                    </div>
                    <div class="card card-bottom">
                        <div class="icon-block">
                            <i class="bi bi-check-circle-fill"></i>
                            <i class="bi bi-three-dots-vertical"></i>
                        </div>
                        <div class="image-block">
                            <img src="{{url('images/landing_page/home/digital-marketing.png')}}" alt="">
                        </div>
                        <div class="content">
                            <div class="title">Digital Marketing</div>
                            <div class="text">SEO experts, Social media strategists and creative designers all under one package with a dedicated account manager</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                                <a href="#">
                                    <div class="card">
                                        <div class="image-block">
                                            <img src="{{url('images/landing_page/home/payroll.png')}}" alt="" class="default">
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
                                <a href="#">
                                    <div class="card">
                                        <div class="image-block">
                                            <img src="{{url('images/landing_page/home/ecommerce.png')}}" alt=""
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
                                <a href="#">
                                    <div class="card">
                                        <div class="image-block">
                                            <img src="{{url('images/landing_page/home/multi-vendor.png')}}" alt="" class="default">
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
                <a href="{{url('contact')}}" class="cta-btn-fill"><span class="text">Talk to Our Team</span> <i class="bi bi-arrow-right-short"></i></a>
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
                @if(count($posts) != 0)
                    @foreach($posts as $key => $post)
                        <div class="card">
                            <div class="image-block">
                                <img src="{{uploaded_asset($post->feature_image)}}" style="height:254px; width:100%; object-fit:cover;" alt="">
                            </div>
                            <div class="content-block">
                                <div class="header">
                                    <img src="{{uploaded_asset(Modules\Blog\Entities\Category::where('id',$post->category)->first()->image)}}" alt="">
                                    <div class="title">{{$post->title}}</div>
                                </div>
                                <div class="text" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">{!! $post->description !!}</div>
                                <div class="footer">
                                    <a href="{{route('frontend.solo_post',$post->id)}}" class="btn-view">View More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

                @if($featured_post != null)
                    <div class="card">
                        <div class="image-block">
                            <img src="{{uploaded_asset($featured_post->feature_image)}}" style="height:254px; width:100%; object-fit:cover;" alt="">
                        </div>
                        <div class="content-block">
                            <div class="header">
                                <img src="{{uploaded_asset(Modules\Blog\Entities\Category::where('id',$featured_post->category)->first()->image)}}" alt="">
                                <div class="title">{{$featured_post->title}}</div>
                            </div>
                            <div class="text" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">{!! $featured_post->description !!}</div>
                            <div class="footer">
                                <a href="{{route('frontend.solo_post',$featured_post->id)}}" class="btn-view">View More</a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    @include('frontend.includes.footer')

    
@endsection

