@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<link rel="stylesheet" href="{{url('css/eShop.css')}}">
    
@include('frontend.includes.home_nav')

<section class="hero-section">
        <div class="container">
            <div class="content">
                <h2 class="title">We <span>design & built</span> <br>
                    Ready-made software for you</h2>
                <p class="text">We design world-class digital products that bring joy their customers, transform
                    business, and deliver results.</p>
                <div class="button-block">
                    <a href="#" class="cta-outline-btn">See Portfolio<i class="bi bi-arrow-right-short"></i></a>
                    <a href="#" class="cta-btn">Contact Us<i class="bi bi-arrow-right-short"></i></a>
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
                <h3 class="title">Most Popular Services in Tallentor</h3>
                <p class="text">Sample text here</p>
            </div>
            <div class="services-slider">
                <div class="splide" id="eShopSlider">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="services-card">
                                    <div class="image-block">
                                        <img src="{{url('images/eShop/Ecommerce.png')}}" alt="">
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
                                        <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry.Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500 ...</p>
                                        <div class="pricing">
                                            <div class="fee">From $50</div>
                                            <div class="duration">per month</div>
                                        </div>
                                        <div class="button-block">
                                            <a href="#" class="cta-outline-btn">Customization<i
                                                    class="bi bi-arrow-right-short"></i></a>
                                            <a href="#" class="cta-btn">Add to cart<i
                                                    class="bi bi-arrow-right-short"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="services-card">
                                    <div class="image-block">
                                        <img src="{{url('images/eShop/Ecommerce.png')}}" alt="">
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
                                        <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry.Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500 ...</p>
                                        <div class="pricing">
                                            <div class="fee">From $50</div>
                                            <div class="duration">per month</div>
                                        </div>
                                        <div class="button-block">
                                            <a href="#" class="cta-outline-btn">Customization<i
                                                    class="bi bi-arrow-right-short"></i></a>
                                            <a href="#" class="cta-btn">Add to cart<i
                                                    class="bi bi-arrow-right-short"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="services-card">
                                    <div class="image-block">
                                        <img src="{{url('images/eShop/Ecommerce.png')}}" alt="">
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
                                        <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry.Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500 ...</p>
                                        <div class="pricing">
                                            <div class="fee">From $50</div>
                                            <div class="duration">per month</div>
                                        </div>
                                        <div class="button-block">
                                            <a href="#" class="cta-outline-btn">Customization<i
                                                    class="bi bi-arrow-right-short"></i></a>
                                            <a href="#" class="cta-btn">Add to cart<i
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
                <h3 class="title">Tallentor Shop</h3>
                <div class="text">Sample text here</div>
            </div>
            <div class="products">
                <div class="row g-5 row-cols-lg-3 row-cols-sm-2 row-cols-1 justify-content-center">
                    <div class="col">
                        <div class="product-card">
                            <a href="#">
                                <div class="image-block">
                                    <img src="{{url('images/eShop/Ecommerce.png')}}" alt="">
                                </div>
                                <div class="content-block">
                                    <h6 class="title">E-Commerce Solutions</h6>
                                    <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.</p>
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <div class="rate">4.9</div>
                                        <div class="amount">(1k+)</div>
                                    </div>
                                    <div class="pricing">
                                        <div class="fee">From $50</div>
                                        <div class="duration">per month</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <a href="#">
                                <div class="image-block">
                                    <img src="{{url('images/eShop/Ecommerce.png')}}" alt="">
                                </div>
                                <div class="content-block">
                                    <h6 class="title">E-Commerce Solutions</h6>
                                    <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.</p>
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <div class="rate">4.9</div>
                                        <div class="amount">(1k+)</div>
                                    </div>
                                    <div class="pricing">
                                        <div class="fee">From $50</div>
                                        <div class="duration">per month</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <a href="#">
                                <div class="image-block">
                                    <img src="{{url('images/eShop/Ecommerce.png')}}" alt="">
                                </div>
                                <div class="content-block">
                                    <h6 class="title">E-Commerce Solutions</h6>
                                    <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.</p>
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <div class="rate">4.9</div>
                                        <div class="amount">(1k+)</div>
                                    </div>
                                    <div class="pricing">
                                        <div class="fee">From $50</div>
                                        <div class="duration">per month</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <a href="#">
                                <div class="image-block">
                                    <img src="{{url('images/eShop/Ecommerce.png')}}" alt="">
                                </div>
                                <div class="content-block">
                                    <h6 class="title">E-Commerce Solutions</h6>
                                    <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.</p>
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <div class="rate">4.9</div>
                                        <div class="amount">(1k+)</div>
                                    </div>
                                    <div class="pricing">
                                        <div class="fee">From $50</div>
                                        <div class="duration">per month</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <a href="#">
                                <div class="image-block">
                                    <img src="{{url('images/eShop/Ecommerce.png')}}" alt="">
                                </div>
                                <div class="content-block">
                                    <h6 class="title">E-Commerce Solutions</h6>
                                    <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.</p>
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <div class="rate">4.9</div>
                                        <div class="amount">(1k+)</div>
                                    </div>
                                    <div class="pricing">
                                        <div class="fee">From $50</div>
                                        <div class="duration">per month</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <a href="#">
                                <div class="image-block">
                                    <img src="{{url('images/eShop/Ecommerce.png')}}" alt="">
                                </div>
                                <div class="content-block">
                                    <h6 class="title">E-Commerce Solutions</h6>
                                    <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.</p>
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <div class="rate">4.9</div>
                                        <div class="amount">(1k+)</div>
                                    </div>
                                    <div class="pricing">
                                        <div class="fee">From $50</div>
                                        <div class="duration">per month</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pagination-section">
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
    </section>

    @include('frontend.includes.footer')

    
@endsection

