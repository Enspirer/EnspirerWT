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
                                    <h5>The Smarter way to <span>Boost</span> your </h5>
                                    <h3 class="title">Website <br> Performance</h3>
                                    <h5 class="light">All in one Widget with <strong>IMS</strong></h5>
                                    <h6>The customised Inquiry Management System</h6>

                                    <a href="{{url('register')}}" class="cta-btn">Get Started <i class="bi bi-arrow-right-short"></i></a>
                                    <!-- <div class="featured-icons">
                                        <a href="#" class="icon"><img src="{{url('images/seo.png')}}" alt="featured icon"></a>
                                        <a href="#" class="icon"><img src="{{url('images/analytics.png')}}" alt="featured icon"></a>
                                        <a href="#" class="icon"><img src="{{url('images/shield (1).png')}}" alt="featured icon"></a>
                                        <a href="#" class="icon"><img src="{{url('images/chat (1).png')}}" alt="featured icon"></a>
                                    </div> -->
                                </div>
                                <div class="image-block">
                                    <img src="{{url('images/Group 411.png')}}" alt="hero-image">
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="slide-wrapper">
                                <div class="image-block">
                                    <img src="{{url('images/Group 835.png')}}" alt="hero-image">
                                </div>
                                <div class="content-block">
                                    <h5>Automate and grow your </h5>
                                    <h3 class="title">Engage , <br>Interact, Convert</h3>
                                    <h5 class="light">Increase sales with All in one Widget <strong>IMS</strong></h5>
                                    <h6>The customised Inquiry Management System</h6>

                                    <a href="{{url('register')}}" class="cta-btn">Get Started <i class="bi bi-arrow-right-short"></i></a>
                                    <!-- <div class="featured-icons">
                                        <a href="#" class="icon"><img src="{{url('images/seo.png')}}" alt="featured icon"></a>
                                        <a href="#" class="icon"><img src="{{url('images/analytics.png')}}" alt="featured icon"></a>
                                        <a href="#" class="icon"><img src="{{url('images/shield (1).png')}}" alt="featured icon"></a>
                                        <a href="#" class="icon"><img src="{{url('images/chat (1).png')}}" alt="featured icon"></a>
                                    </div> -->
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
                <h3 class="title">Turn website visitors into customers, High Octane performance and exceptional
                    conversions</h3>
                <span class="text">Fully customizable chat widgets with popular messaging apps, Ready to go solutions to
                    grow your business faster</span>
            </div>
            <div class="body">
                <div class="feature-box">
                    <div class="content-block">
                        <div class="header">
                            <div class="title"><i class="bi bi-whatsapp"></i>WhatsApp Widget</div>
                            <span class="text">Integrate the most popular communication channel into your website and improve your customer service quality and sales conversion.</span>
                        </div>
                        <ul class="features">
                            <li><i class="bi bi-check-circle-fill"></i>Customisable ready to use widget</li>
                            <li><i class="bi bi-check-circle-fill"></i>Inquiry Management System - IMS</li>
                        </ul>
                        <a href="#" class="cta-btn-border">Get Started</a>
                    </div>
                    <div class="image-block">
                        <img src="{{url('images/Group 371.png')}}" alt="">
                    </div>
                </div>
                <div class="feature-box">
                    <div class="content-block">
                        <div class="header">
                            <div class="title"><i class="bi bi-grid-fill"></i>All in one chat</div>
                            <span class="text">Giving the customer maximum flexibility to choose the mode they like to contact you, with a super easy interface.</span>
                        </div>
                        <ul class="features">
                            <li><i class="bi bi-check-circle-fill"></i>Pick and choose the channels</li>
                            <li><i class="bi bi-check-circle-fill"></i>Quick integration with IMS option.</li>
                        </ul>
                        <a href="#" class="cta-btn-border">Get Started</a>
                    </div>
                    <div class="image-block">
                        <img src="{{url('images/Group 412.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="IMS-section">
        <div class="container">
            <h2 class="title">Inquiry Management System</h2>
            <span class="text">Keep track of all inquiries with status updates & Sales Reports</span>
            <ul class="text-block">
                <li><i class="bi bi-check-circle-fill"></i>Admin dashboard with user privileges management</li>
                <li><i class="bi bi-check-circle-fill"></i>Assign the inquiry to relevant department</li>
                <li><i class="bi bi-check-circle-fill"></i>Record of the full status of the inquiry with comments</li>
                <li><i class="bi bi-check-circle-fill"></i>Analytics of the inquiry management process with reports</li>
            </ul>
            <div class="image-block">
                <img src="{{url('images/Group 410.png')}}" alt="">
            </div>
        </div>
    </section>

    <section class="SEO-section">
        <div class="container">
            <div class="header">
                <h2 class="title">Keep your website on Top of the Game & Secured</h2>
                <span class="text">The all in one comprehensive tool to manage Google rankings, site analytics, Cyber security and general performance of the website.</span>
            </div>
            <div class="inner-wrapper">
                <div class="SEO-block">
                    <div class="header">
                        <div class="title"><i class="bi bi-whatsapp"></i>SEO</div>
                        <span class="text">The power tool to get a comprehensive report to check your website ranking, and performance.</span>
                    </div>
                    <ul class="features">
                        <li><i class="bi bi-check-circle-fill"></i>Recommendations for the issues</li>
                        <li><i class="bi bi-check-circle-fill"></i>Expert team to enhance performance</li>
                    </ul>
                    <div class="image-block">
                        <img src="{{url('images/SEO-01.png')}}" alt="">
                    </div>
                    <a href="#" class="cta-btn-border">Get Started</a>
                </div>
                <div class="SEO-block">
                    <div class="header">
                        <div class="title"><i class="bi bi-whatsapp"></i>Analytics</div>
                        <span class="text">User engagement and traffic monitoring tool provides with the critical insights of the website for digital marketing</span>
                    </div>
                    <ul class="features">
                        <li><i class="bi bi-check-circle-fill"></i>Reports with insights</li>
                        <li><i class="bi bi-check-circle-fill"></i>User behavior monitoring </li>
                    </ul>
                    <div class="image-block">
                        <img src="{{url('images/Analytics-01.png')}}" alt="">
                    </div>
                    <a href="#" class="cta-btn-border">Get Started</a>
                </div>
                <div class="SEO-block">
                    <div class="header">
                        <div class="title"><i class="bi bi-whatsapp"></i>Security</div>
                        <span class="text">The intelligent tool to protect the website from cyber attacks, spam emails and management of  blacklisting.</span>
                    </div>
                    <ul class="features">
                        <li><i class="bi bi-check-circle-fill"></i>Constant monitoring of the website</li>
                        <li><i class="bi bi-check-circle-fill"></i>Alerts and technical assistance</li>
                    </ul>
                    <div class="image-block">
                        <img src="{{url('images/Securty-01.png')}}" alt="">
                    </div>
                    <a href="#" class="cta-btn-border">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <section class="marketplace-section">
        <div class="container">
            <div class="inner-wrapper">
                <div class="button-block">
                    <div class="content">
                        <h1 class="title">The Tallent <br> Marketplace</h1>
                        <a href="{{url('market_place')}}" class="cta-btn-border">Find Tallent <i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
                <div class="card-block">
                    <div class="card card-top">
                        <div class="icon-block">
                            <i class="bi bi-check-circle-fill"></i>
                            <i class="bi bi-three-dots-vertical"></i>
                        </div>
                        <div class="image-block">
                            <img src="{{url('images/xcxcx-01.png')}}" alt="">
                        </div>
                        <div class="content">
                            <div class="title">Mobile App Development</div>
                            <div class="text">Hire the industry experts to bring your idea into reality.
                            Dedicated Android & iOS developers to work on your project</div>
                        </div>
                    </div>
                    <div class="card card-middle">
                        <div class="icon-block">
                            <i class="bi bi-check-circle-fill"></i>
                            <i class="bi bi-three-dots-vertical"></i>
                        </div>
                        <div class="image-block">
                            <img src="{{url('images/cdd-01.png')}}" alt="">
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
                            <img src="{{url('images/sfsf-01.png')}}" alt="">
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
                <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's</div>
            </div>
            <div class="slider">
                <div class="splide" id="indexSlider">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <a href="#">
                                    <div class="card">
                                        <div class="image-block">
                                            <img src="{{url('images/Ecommerce.png')}}" alt="" class="default">
                                            <img src="{{url('images/pos-hardware-options-for-every-setup@2x.png')}}" alt=""
                                                class="focused">
                                        </div>
                                        <div class="content">
                                            <div class="title">E-Commerce Solutions</div>
                                            <div class="text">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem</div>
                                            <div class="rating">
                                                <i class="bi bi-star-fill"></i>
                                                <span class="precentage">4.9</span>
                                                <span class="amount">(1k+)</span>
                                            </div>
                                            <div class="footer">
                                                <div class="fee">From 50$</div>
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
                                            <img src="{{url('images/LS-One-for-restaurants-main-header.png')}}" alt=""
                                                class="default">
                                            <img src="{{url('images/pos-hardware-options-for-every-setup@2x.png')}}" alt=""
                                                class="focused">
                                        </div>
                                        <div class="content">
                                            <div class="title">POS System</div>
                                            <div class="text">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem</div>
                                            <div class="rating">
                                                <i class="bi bi-star-fill"></i>
                                                <span class="precentage">4.9</span>
                                                <span class="amount">(1k+)</span>
                                            </div>
                                            <div class="footer">
                                                <div class="fee">From 2500$</div>
                                                <div class="period">Fully Customizable</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="splide__slide">
                                <a href="#">
                                    <div class="card">
                                        <div class="image-block">
                                            <img src="{{url('images/Article-11.png')}}" alt="" class="default">
                                            <img src="{{url('images/pos-hardware-options-for-every-setup@2x.png')}}" alt=""
                                                class="focused">
                                        </div>
                                        <div class="content">
                                            <div class="title">Payroll management sys...</div>
                                            <div class="text">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem</div>
                                            <div class="rating">
                                                <i class="bi bi-star-fill"></i>
                                                <span class="precentage">4.9</span>
                                                <span class="amount">(1k+)</span>
                                            </div>
                                            <div class="footer">
                                                <div class="fee">From 3000$</div>
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
        </div>
    </section>

    <section class="news-section">
        <div class="container">
            <div class="header">
                <h2 class="title">Latest happening at Tallentor</h2>
                <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's</div>
            </div>
            <div class="inner-wrapper">
                <div class="card">
                    <div class="image-block">
                        <img src="{{url('images/20211112131039.png')}}" alt="">
                    </div>
                    <div class="content-block">
                        <div class="header">
                            <img src="{{url('images/test.png')}}" alt="">
                            <div class="title">Tallentor Facebook </div>
                        </div>
                        <div class="text">When you use an application on your mobile phone or smart devices the
                            application connects to the Internet </div>
                        <div class="footer">
                            <div class="reactions">
                                <div class="likes"><a href="#"><i class="bi bi-heart"></i>1</a></div>
                                <div class="comments"><a href="#"><i class="bi bi-chat-left-text-fill"></i>Comment</a>
                                </div>
                            </div>
                            <a href="#" class="btn-view">View More</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="image-block">
                        <img src="{{url('images/20211112131039.png')}}" alt="">
                    </div>
                    <div class="content-block">
                        <div class="header">
                            <img src="{{url('images/test.png')}}" alt="">
                            <div class="title">Latest at Tallentor</div>
                        </div>
                        <div class="text">When you use an application on your mobile phone or smart devices the
                            application connects to the Internet </div>
                        <div class="footer">
                            <div class="reactions">
                                <div class="likes"><a href="#"><i class="bi bi-heart"></i>1</a></div>
                                <div class="comments"><a href="#"><i class="bi bi-chat-left-text-fill"></i>Comment</a>
                                </div>
                            </div>
                            <a href="#" class="btn-view">View More</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="image-block">
                        <img src="{{url('images/20211112131039.png')}}" alt="">
                    </div>
                    <div class="content-block">
                        <div class="header">
                            <img src="{{url('images/test.png')}}" alt="">
                            <div class="title">Tallentor Club</div>
                        </div>
                        <div class="text">When you use an application on your mobile phone or smart devices the
                            application connects to the Internet </div>
                        <div class="footer">
                            <div class="reactions">
                                <div class="likes"><a href="#"><i class="bi bi-heart"></i>1</a></div>
                                <div class="comments"><a href="#"><i class="bi bi-chat-left-text-fill"></i>Comment</a>
                                </div>
                            </div>
                            <a href="#" class="btn-view">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.includes.footer')

    
@endsection

