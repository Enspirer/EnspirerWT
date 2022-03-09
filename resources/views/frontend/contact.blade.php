@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    
@include('frontend.includes.home_nav')

<link rel="stylesheet" href="{{url('css/contact_us.css')}}">

    <section class="slider-section">
        <div class="container">
            <div class="header">
                <h2 class="title">We are here to help</h2>
                <h6 class="subtitle">Contact Tallentor</h6>
            </div>
            <div class="slider">
                <div class="splide" id="contactSlider">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="slider-card">
                                    <div class="icon-block">
                                        <i class="bi bi-check-circle-fill"></i>
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </div>
                                    <div class="main-icon">
                                        <img src="{{url('images/contact-us/Group 440.png')}}" alt="">
                                    </div>
                                    <h5 class="title">Sales Inquires</h5>
                                    <p class="text">Product information and Corporate inquiries</p>
                                    <a href="mailto:sales@tallentor.com" class="contact">sales@tallentor.com</a>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="slider-card">
                                    <div class="icon-block">
                                        <i class="bi bi-check-circle-fill"></i>
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </div>
                                    <div class="main-icon">
                                        <img src="{{url('images/contact-us/Group 457.png')}}" alt="">
                                    </div>
                                    <h5 class="title">Billing</h5>
                                    <p class="text">Account information and bulk purchases</p>
                                    <a href="mailto:billing@tallentor.com" class="contact">billing@tallentor.com</a>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="slider-card">
                                    <div class="icon-block">
                                        <i class="bi bi-check-circle-fill"></i>
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </div>
                                    <div class="main-icon">
                                        <img src="{{url('images/contact-us/Group 483.png')}}" alt="">
                                    </div>
                                    <h5 class="title">Support</h5>
                                    <p class="text">Technical support and assistance with installations</p>
                                    <a href="mailto:support@tallentor.com" class="contact">support@tallentor.com</a>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="slider-card">
                                    <div class="icon-block">
                                        <i class="bi bi-check-circle-fill"></i>
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </div>
                                    <div class="main-icon">
                                        <img src="{{url('images/contact-us/Group 508.png')}}" alt="">
                                    </div>
                                    <h5 class="title">Partnership</h5>
                                    <p class="text">Become a partner in your region with Tallentor</p>
                                    <a href="mailto:partner@tallentor.com" class="contact">partner@tallentor.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form">
        <div class="container">
            <div class="header">
                <h2 class="title">Contact Us</h2>
                <h6 class="subtitle">Have any questions ? We'd love to hear from you.</h6>
            </div>
            <div class="row g-5">
                <div class="col-lg-6">
                    <form class="contact-form">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Your Inquiry"></textarea>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="How can we help you ?">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">I would like to receive information and updates from Tallentor in relation to my enquiry, <br> I understand Tallentor will never share my information</label>
                        </div>
                        <div class="button-block">
                            <div class="g-recaptcha" data-callback="checked" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR" ></div>
                            <button type="submit" class="form-submit-btn" disabled>Send Message <i class="bi bi-arrow-right-short"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="inner-wrapper">
                        <div class="address">
                            <img src="{{url('images/contact-us/location (1).png')}}" alt="">
                            <div class="text">19 Koombahla Court, Rowville, <br> Victoria 3178, Australia</div>
                        </div>
                        <div class="email">
                            <img src="{{url('images/contact-us/email (2).png')}}" alt="">
                            <a href="mailto:info@tallentor.com">info@tallentor.com</a>
                        </div>
                        <div class="images">
                            <img src="{{url('images/contact-us/Group 549.png')}}" alt="" class="large">
                            <img src="{{url('images/contact-us/679.png')}}" alt="" class="medium">
                            <img src="{{url('images/contact-us/679 [Converted]-03.png')}}" alt="" class="small">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.includes.footer')

    
@endsection

@push('after-scripts')

<script>
window.oncontextmenu = () => {
  var captcha = grecaptcha.getResponse();
};

function checked() {
    $('.form-submit-btn').removeAttr('disabled');
    };
</script>

@endpush