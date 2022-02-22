@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    
<section class="navigation-bar">
        <div class="container">
            <div class="inner-wrapper">
                <div class="brand">
                    <a href="#">
                        <img src="{{url('images/Tallentor New PNG.png')}}" alt="brand-logo">
                    </a>
                </div>
                <div class="nav-links">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Products</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Marketplace</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">eShop</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Resources</a>
                        </li>
                        <li class="nav-item">
                            <form>
                                <input class="form-control" type="search" placeholder="| Search for products"
                                    aria-label="Search">
                                <button class="btn" type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </li>
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{auth()->user()->first_name}} {{auth()->user()->last_name}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        @else
                            <a href="{{url('login')}}" style="text-decoration:none;font-size: 14px;font-weight: 300;color: #000;">
                                Log in
                            </a>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="hero-section">
        <div class="container">
            <div class="inner-wrapper">
                <div class="content-block">
                    <h5>The Smarter way to <span>Boost</span> your</h5>
                    <h3 class="title">Website <br> Performance</h3>
                    <h5 class="light">WhatsApp Widget with </h5>
                    <h5>Inquiry Management System (IMS)</h5>

                    <a href="{{url('register')}}" class="cta-btn">Get Started <i class="bi bi-arrow-right-short"></i></a>
                    <div class="featured-icons">
                        <a href="#" class="icon"><img src="{{url('images/seo.png')}}" alt="featured icon"></a>
                        <a href="#" class="icon"><img src="{{url('images/analytics.png')}}" alt="featured icon"></a>
                        <a href="#" class="icon"><img src="{{url('images/shield (1).png')}}" alt="featured icon"></a>
                        <a href="#" class="icon"><img src="{{url('images/chat (1).png')}}" alt="featured icon"></a>
                    </div>
                </div>
                <div class="image-block">
                    <img src="{{url('images/Group 411.png')}}" alt="hero-image">
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
                            <span class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the</span>
                        </div>
                        <ul class="features">
                            <li><i class="bi bi-check-circle-fill"></i>Lorem Ipsum is simply dummy text of
                                the</li>
                            <li><i class="bi bi-check-circle-fill"></i>Lorem Ipsum is simply dummy</li>
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
                            <div class="title"><i class="bi bi-grid-fill"></i>All in one</div>
                            <span class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the</span>
                        </div>
                        <ul class="features">
                            <li><i class="bi bi-check-circle-fill"></i>Lorem Ipsum is simply dummy text of
                                the</li>
                            <li><i class="bi bi-check-circle-fill"></i>Lorem Ipsum is simply dummy</li>
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
            <span class="text">How it's works ...</span>
            <div class="image-block">
                <img src="{{url('images/Group 410.png')}}" alt="">
            </div>
        </div>
    </section>

    <section class="SEO-section">
        <div class="container">
            <div class="header">
                <h2 class="title">SEO Managing</h2>
                <span class="text">Fully customizable chat widgets with popular messaging apps, Ready to go solutions to
                    grow your business faster</span>
            </div>
            <div class="inner-wrapper">
                <div class="SEO-block">
                    <div class="header">
                        <div class="title"><i class="bi bi-whatsapp"></i>SEO</div>
                        <span class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum</span>
                    </div>
                    <ul class="features">
                        <li><i class="bi bi-check-circle-fill"></i>Lorem Ipsum is simply dummy text of
                            the</li>
                        <li><i class="bi bi-check-circle-fill"></i>Lorem Ipsum is simply dummy</li>
                    </ul>
                    <div class="image-block">
                        <img src="{{url('images/SEO-01.png')}}" alt="">
                    </div>
                    <a href="#" class="cta-btn-border">Get Started</a>
                </div>
                <div class="SEO-block">
                    <div class="header">
                        <div class="title"><i class="bi bi-whatsapp"></i>Analytics</div>
                        <span class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum</span>
                    </div>
                    <ul class="features">
                        <li><i class="bi bi-check-circle-fill"></i>Lorem Ipsum is simply dummy text of
                            the</li>
                        <li><i class="bi bi-check-circle-fill"></i>Lorem Ipsum is simply dummy</li>
                    </ul>
                    <div class="image-block">
                        <img src="{{url('images/Analytics-01.png')}}" alt="">
                    </div>
                    <a href="#" class="cta-btn-border">Get Started</a>
                </div>
                <div class="SEO-block">
                    <div class="header">
                        <div class="title"><i class="bi bi-whatsapp"></i>Security</div>
                        <span class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum</span>
                    </div>
                    <ul class="features">
                        <li><i class="bi bi-check-circle-fill"></i>Lorem Ipsum is simply dummy text of
                            the</li>
                        <li><i class="bi bi-check-circle-fill"></i>Lorem Ipsum is simply dummy</li>
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
                        <a href="" class="cta-btn">Find Tallent <i class="bi bi-arrow-right-short"></i></a>
                        <a href="" class="cta-btn-border">Find Work <i class="bi bi-arrow-right-short"></i></a>
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
                            <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's dummy text ever since the 1500s</div>
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
                            <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's dummy text ever since the 1500s</div>
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
                            <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's dummy text ever since the 1500s</div>
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
                <div class="splide">
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

    <section class="footer-section">
        <div class="container">
            <div class="row g-0">
                <div class="col-8">
                    <div class="links">
                        <div class="header">
                            <img src="{{url('images/Tallentor Logo 2-04.png')}}" alt="">
                        </div>
                        <div class="body">
                            <div class="company">
                                <ul class="navbar-nav">
                                    <li class="nav-item">Company</li>
                                    <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Expert Center</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Live Auction</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Terms & Conditions</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Privacy Policy</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Contact us</a></li>
                                </ul>
                            </div>
                            <div class="resources">
                                <ul class="navbar-nav">
                                    <li class="nav-item">Resources</li>
                                    <li class="nav-item"><a href="#" class="nav-link">Help & Support</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Partner with us</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Events</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Sitemap</a></li>
                                </ul>
                            </div>
                            <div class="quick-links">
                                <ul class="navbar-nav">
                                    <li class="nav-item">Quick Links</li>
                                    <li class="nav-item"><a href="#" class="nav-link">Mobile app development</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">ERP Solutions</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Web applications</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Digital Marketing</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Architecture</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Video animations</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer">
                            <div class="social-media">
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-facebook"></i></a>
                                    </li>
                                    <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-linkedin"></i></a>
                                    </li>
                                    <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-youtube"></i></a>
                                    </li>
                                    <li class="nav-item"><a href="#" class="nav-link"><i
                                                class="bi bi-pinterest"></i></a>
                                    </li>
                                    <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="contact-info">
                        <div class="header">
                            <i class="bi bi-telephone-fill"></i>
                            <div class="title">Let's Talk</div>
                        </div>
                        <div class="body">
                            <div class="business">
                                <div class="image-block"><i class="bi bi-envelope-check"></i></div>
                                <div class="content">
                                    <div class="title">Business Inquiries</div>
                                    <a href="mailto:hello@tallentor.com" class="email">hello@tallentor.com</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="image-block">
                                    <i class="bi bi-send"></i>
                                </div>
                                <div class="content">
                                    <div class="title">PR or Media</div>
                                    <a href="mailto:hello@tallentor.com" class="email">hello@tallentor.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <div class="newsletter">
                                <label for="newsletter"><button type="submit"
                                        class="submit-btn">SUBSCRIBE</button></label>
                                <input type="email" name="newsletter" id="newsletter" placeholder="Enter Your Email">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="copyright">Copyright @2021 | Tallentor Global Ltd</div>
            </div>
        </div>
    </section>


@endsection


<!-- @push('after-scripts')

    <script>
            var splide = new Splide('.splide', {
                type: 'loop',
                perPage: 1,
                focus: 'center',
                gap: '50px',
                fixedWidth: '415px',
            });

            splide.mount();
        </script>

@endpush -->