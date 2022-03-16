@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<link rel="stylesheet" href="{{url('css/eShop.css')}}">
    
@include('frontend.includes.home_nav')

<section class="hero-section">
        <div class="container">
            <div class="content">
                <h2 class="title"><span>READY-TO-GO</span><br>
                Solutions built to the highest industrial standards</h2>
                <p class="text">Flexibility of customisation for your specific requirements, with premium technical support</p>
                <div class="button-block">
                    <a href="#" class="cta-btn-border"><span class="text">See Portfolio</span><i class="bi bi-arrow-right-short"></i></a>
                    <a href="#" class="cta-btn-fill"><span class="text">Contact Us</span><i class="bi bi-arrow-right-short"></i></a>
                </div>
                <div class="image-block">
                    <img src="{{url('images/eShop/f3d0c857aaf69810618821c2a799adb5.png')}}" alt="" class="img-1">
                    <img src="{{url('images/eShop/food_landing_page_header_4x.png')}}" alt="" class="img-2">
                    <img src="{{url('images/eShop/ec5929bdd46c2af2341fa16b551348c3.png')}}" alt="" class="img-3">
                </div>
            </div>
        </div>
    </section>

    <section class="services-section">
        <div class="container">
            <div class="header">
                <h3 class="title">Best Sellers at Tallentor</h3>
            </div>
            <div class="services-slider">
                <div class="splide" id="eShopSlider">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="services-card">
                                    <div class="image-block">
                                        <img src="{{url('images/landing_page/eShop/e_com_sol.png')}}" alt="">
                                    </div>
                                    <div class="content-block">
                                        <h4 class="title">E-Commerce Solutions</h4>
                                        <div class="rating">
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <div class="rate">4.9</div>
                                            <div class="amount">(1k+)</div>
                                        </div>
                                        <p class="text">Bring your business online with modern themes. Payment gateway integrations and customised delivery modules.</p>
                                        <div class="pricing">
                                            <div class="fee">From $50 <span>per month</span></div>
                                            <div class="duration">Inquire Now</div>
                                        </div>
                                        <div class="button-block">
                                            <a href="#" class="cta-btn-border"><span class="text">Customization</span><i
                                                    class="bi bi-arrow-right-short"></i></a>
                                            <a href="#" class="cta-btn-fill"><span class="text">Add to cart</span><i
                                                    class="bi bi-arrow-right-short"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="services-card">
                                    <div class="image-block">
                                        <img src="{{url('images/landing_page/eShop/multi_vendor.png')}}" alt="">
                                    </div>
                                    <div class="content-block">
                                        <h4 class="title">Multi Vendor Solutions</h4>
                                        <div class="rating">
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <div class="rate">4.9</div>
                                            <div class="amount">(1k+)</div>
                                        </div>
                                        <p class="text">The most versatile solution with advanced admin features. Wide range of IPG options, ability to integrate with account softwares.</p>
                                        <div class="pricing">
                                            <div class="fee">From $100 <span>per month</span></div>
                                            <div class="duration">Inquire Now</div>
                                        </div>
                                        <div class="button-block">
                                            <a href="#" class="cta-btn-border"><span class="text">Customization</span><i
                                                    class="bi bi-arrow-right-short"></i></a>
                                            <a href="#" class="cta-btn-fill"><span class="text">Add to cart</span><i
                                                    class="bi bi-arrow-right-short"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="services-card">
                                    <div class="image-block">
                                        <img src="{{url('images/landing_page/eShop/dynamic_web.png')}}" alt="">
                                    </div>
                                    <div class="content-block">
                                        <h4 class="title">Dynamic Website</h4>
                                        <div class="rating">
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <div class="rate">4.9</div>
                                            <div class="amount">(1k+)</div>
                                        </div>
                                        <p class="text">Fully customised web applications with admin control panel for dynamic functions with unique user interfaces.</p>
                                        <div class="pricing">
                                            <div class="fee">From $700 <span>per month</span></div>
                                            <div class="duration">Inquire Now</div>
                                        </div>
                                        <div class="button-block">
                                            <a href="#" class="cta-btn-border"><span class="text">Customization</span><i
                                                    class="bi bi-arrow-right-short"></i></a>
                                            <a href="#" class="cta-btn-fill"><span class="text">Add to cart</span><i
                                                    class="bi bi-arrow-right-short"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="services-card">
                                    <div class="image-block">
                                        <img src="{{url('images/landing_page/eShop/learning_management.png')}}" alt="">
                                    </div>
                                    <div class="content-block">
                                        <h4 class="title">Learning Managment Systems</h4>
                                        <div class="rating">
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <div class="rate">4.9</div>
                                            <div class="amount">(1k+)</div>
                                        </div>
                                        <p class="text">Unlimited number of courses and tutor accounts. Student progress management with Certificates. High bandwidth web host for video content </p>
                                        <div class="pricing">
                                            <div class="fee">From $700 <span>per month</span></div>
                                            <div class="duration">Add to cart</div>
                                        </div>
                                        <div class="button-block">
                                            <a href="#" class="cta-btn-border"><span class="text">Customization</span><i
                                                    class="bi bi-arrow-right-short"></i></a>
                                            <a href="#" class="cta-btn-fill"><span class="text">Add to cart</span><i
                                                    class="bi bi-arrow-right-short"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tallentor-shop">
        <div class="container">
            <div class="header">
                <h3 class="title">Latest from Tallentor</h3>
            </div>
            <div class="products">
                <div class="row g-5 row-cols-lg-3 row-cols-sm-2 row-cols-1 justify-content-center">
                    <div class="col">
                        <div class="product-card">
                            <a href="#">
                                <div class="image-block">
                                    <img src="{{url('images/landing_page/eShop/real_state_portal.png')}}" alt="">
                                </div>
                                <div class="content-block">
                                    <h6 class="title">Real Estate Portal</h6>
                                    <p class="text">
                                        <ul class="list-block">
                                            <li><i class="bi bi-check-circle-fill"></i>Google Map Integration</li>
                                            <li><i class="bi bi-check-circle-fill"></i>Multiple Agent Accounts</li>
                                        </ul>
                                    </p>
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <div class="rate">4.9</div>
                                        <div class="amount">(1k+)</div>
                                    </div>
                                    <div class="pricing">
                                        <div class="fee">From $75 <span>per month</span></div>
                                        <div class="duration">Inquire Now</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <a href="#">
                                <div class="image-block">
                                    <img src="{{url('images/landing_page/eShop/travel_website.png')}}" alt="">
                                </div>
                                <div class="content-block">
                                    <h6 class="title">Travel Website</h6>
                                    <p class="text">
                                        <ul class="list-block">
                                            <li><i class="bi bi-check-circle-fill"></i>Interactive Travel Map</li>
                                            <li><i class="bi bi-check-circle-fill"></i>Dynamic Travel Packages</li>
                                        </ul>
                                    </p>
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <div class="rate">4.9</div>
                                        <div class="amount">(1k+)</div>
                                    </div>
                                    <div class="pricing">
                                        <div class="fee">From $30 <span>per month</span></div>
                                        <div class="duration">Inquire Now</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <a href="#">
                                <div class="image-block">
                                    <img src="{{url('images/landing_page/eShop/car_pool_app.png')}}" alt="">
                                </div>
                                <div class="content-block">
                                    <h6 class="title">Car Pool App</h6>
                                    <p class="text">
                                        <ul class="list-block">
                                            <li><i class="bi bi-check-circle-fill"></i>Driver and Rider Apps</li>
                                            <li><i class="bi bi-check-circle-fill"></i>Map and IPG Integration</li>
                                        </ul>
                                    </p>
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <div class="rate">4.9</div>
                                        <div class="amount">(1k+)</div>
                                    </div>
                                    <div class="pricing">
                                        <div class="fee">From $100 <span>per month</span></div>
                                        <div class="duration">Inquire Now</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <a href="#">
                                <div class="image-block">
                                    <img src="{{url('images/landing_page/eShop/business_card_app.png')}}" alt="">
                                </div>
                                <div class="content-block">
                                    <h6 class="title">Business Card App</h6>
                                    <p class="text">
                                        <ul class="list-block">
                                            <li><i class="bi bi-check-circle-fill"></i>Digital Business Cards</li>
                                            <li><i class="bi bi-check-circle-fill"></i>Inquiry Management System</li>
                                        </ul>
                                    </p>
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <div class="rate">4.9</div>
                                        <div class="amount">(1k+)</div>
                                    </div>
                                    <div class="pricing">
                                        <div class="fee">From $25 <span>per month</span></div>
                                        <div class="duration">Inquire Now</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <a href="#">
                                <div class="image-block">
                                    <img src="{{url('images/landing_page/eShop/erp_solution.png')}}" alt="">
                                </div>
                                <div class="content-block">
                                    <h6 class="title">ERP Solution</h6>
                                    <p class="text">
                                        <ul class="list-block">
                                            <li><i class="bi bi-check-circle-fill"></i>Web Based Application</li>
                                            <li><i class="bi bi-check-circle-fill"></i>Customisable for any Industry</li>
                                        </ul>
                                    </p>
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <div class="rate">4.9</div>
                                        <div class="amount">(1k+)</div>
                                    </div>
                                    <div class="pricing">
                                        <div class="fee">From $250 <span>per month</span></div>
                                        <div class="duration">Inquire Now</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <a href="#">
                                <div class="image-block">
                                    <img src="{{url('images/landing_page/eShop/pos_system.png')}}" alt="">
                                </div>
                                <div class="content-block">
                                    <h6 class="title">POS System</h6>
                                    <p class="text">
                                        <ul class="list-block">
                                            <li><i class="bi bi-check-circle-fill"></i>Hotels and Restaurants</li>
                                            <li><i class="bi bi-check-circle-fill"></i>Integration with Major Account Softwares</li>
                                        </ul>
                                    </p>
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <div class="rate">4.9</div>
                                        <div class="amount">(1k+)</div>
                                    </div>
                                    <div class="pricing">
                                        <div class="fee">From $250 <span>per month</span></div>
                                        <div class="duration">Inquire Now</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="pagination-section">
        <div class="container">
            <ul class="pagination">
                <li class="pagination-item"><a href="#" class="pagination-link disbled prev"><i
                            class="bi bi-chevron-left"></i></a></li>
                <li class="pagination-item"><a href="#" class="pagination-link active">1</a></li>
                <li class="pagination-item"><a href="#" class="pagination-link">2</a></li>
                <li class="pagination-item"><a href="#" class="pagination-link">3</a></li>
                <li class="pagination-item"><a href="#" class="pagination-link next"><i
                            class="bi bi-chevron-right"></i></a></li>
            </ul>
        </div>
    </section> -->

    @include('frontend.includes.footer')

    
@endsection

