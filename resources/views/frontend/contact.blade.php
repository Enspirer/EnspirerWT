@extends('frontend.layouts.app')

@section('title', 'The Best whatsapp widget | Web Optimizer | Chatbot | Tallentor')
@section('meta_description', 'Engage real-time users on your website with the best whatsapp widget integrated with inquiry management system. Increase website performance with Optimizer app. Bulk whatsapp messages | Talent pool remote developers')

@section('content')

@include('frontend.includes.home_nav')

<link rel="stylesheet" href="{{url('css/contact_us.css')}}">

<section class="branch-section">
    <div class="container">
        <div class="mega-contact">
            <div class="title">Call us or WhatsApp</div>
            <a href="tel:+971503743699">+971 50 374 3699</a>
        </div>
        <div class="header">Our Offices</div>
        <div class="inner-wrapper">
            <div class="branch-card">
                <div class="image-block">
                    <img src="{{url('images/landing_page/contact_us/uae.png')}}" >
                </div>                
                <div class="title">Tallentor International</div>
                <div class="address">B2, 202, Jumeirah village circle, <br>Dubai.<span>UAE</span></div>
                <a href="tel:+971503743699" class="phone">+971 50 374 3699</a>
                <a href="mailto:dubai@tallentordigital.com" class="email">dubai@tallentordigital.com</a>
            </div>
            <div class="branch-card">
                <div class="image-block">
                    <img src="{{url('images/landing_page/contact_us/aus.png')}}" >
                    <div class="subtitle">Head Office</div>
                </div>                
                <div class="title">Tallentor International</div>
                <div class="address">19 Koombahla Court, Rowville, <br>Victoria 3178,<span>Australia</span></div>
                <a href="tel:+61435975999" class="phone">+61 43 597 5999</a>
                <a href="mailto:info@tallentordigital.com" class="email">info@tallentordigital.com</a>
            </div>
            <div class="branch-card">
                <div class="image-block">
                    <img src="{{url('images/landing_page/contact_us/uk.png')}}" >
                </div>                
                <div class="title">Tallentor International</div>
                <div class="address">35 Melbourne Avenue <br>London W13 9BX,<span>UK</span></div>
                <!-- <a href="tel:+447741025138" class="phone">+44 774 102 5138</a> -->
                <a href="mailto:uk@tallentordigital.com" class="email">uk@tallentordigital.com</a>
            </div>
        </div>
    </div>
</section>

<section class="form-section">
    <div class="container">
        <div class="row g-lg-5">
            <div class="col-lg-5">
                <div class="mobile-header">
                    <div class="title">We are here to help</div>
                    <div class="text">Fill up the form and our Team will get back <br> to you within 24 hours.</div>
                </div>
                <form action="{{route('frontend.contact_us.store')}}" method="post" class="contact-form" enctype="multipart/form-data">
                    {{csrf_field()}}

                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif

                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" name="inquiry" placeholder="Your Inquiry" required></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="help" placeholder="How can we help you ?">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" id="tick" class="form-check-input">
                        <label class="form-check-label" for="tick">I would like to receive information and updates from Tallentor in relation to my enquiry, <br> I understand Tallentor will never share my information</label>
                    </div>
                    <div class="button-block">
                        <div class="g-recaptcha" data-callback="checked" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR" ></div>
                        <button type="submit" class="form-submit-btn" disabled>Send Message <i class="bi bi-arrow-right-short"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-lg-7">
                <div class="inner-wrapper">
                    <div class="header">
                        <div class="title">We are here to help</div>
                        <div class="text">Fill up the form and our Team will get back <br> to you within 24 hours.</div>
                    </div>
                    <div class="social address">
                        <a href="https://web.whatsapp.com/send?phone=971583017648" rel="noopener noreferrer" target="_blank" class="contact-link">
                            <img src="{{url('images/social_media_icons/whatsapp.png')}}" >
                            <div class="text">Chat on WhatsApp</div>
                        </a>
                    </div>
                    <div class="social email">
                        <a href="https://www.messenger.com/t/tallentor" class="contact-link" target="_blank" rel="noopener noreferrer">
                            <img src="{{url('images/social_media_icons/messenger.png')}}" >
                            <div class="text">Connect on Messenger</div>
                        </a>
                    </div>
                    <div class="social email">
                        <a href="mailto:hello@tallentordigital.com" class="contact-link">
                            <img src="{{url('images/contact-us/email (2).png')}}" >
                            <div class="text">hello@tallentordigital.com</div>
                        </a>
                    </div>
                    <img src="{{url('images/landing_page/contact_us/contact_background.png')}}"  class="background-img">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slider-section">
    <div class="container">
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
                                    <img src="{{url('images/contact-us/Group 440.png')}}" >
                                </div>
                                <h5 class="title">Sales Inquires</h5>
                                <p class="text">Product information and Corporate inquiries</p>
                                <a href="mailto:sales@tallentordigital.com" class="contact">sales@tallentordigital.com</a>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="slider-card">
                                <div class="icon-block">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <i class="bi bi-three-dots-vertical"></i>
                                </div>
                                <div class="main-icon">
                                    <img src="{{url('images/contact-us/Group 457.png')}}" >
                                </div>
                                <h5 class="title">Billing</h5>
                                <p class="text">Account information and bulk purchases</p>
                                <a href="mailto:billing@tallentordigital.com" class="contact">billing@tallentordigital.com</a>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="slider-card">
                                <div class="icon-block">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <i class="bi bi-three-dots-vertical"></i>
                                </div>
                                <div class="main-icon">
                                    <img src="{{url('images/contact-us/Group 483.png')}}" >
                                </div>
                                <h5 class="title">Support</h5>
                                <p class="text">Technical support and assistance with installations</p>
                                <a href="mailto:support@tallentordigital.com" class="contact">support@tallentordigital.com</a>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="slider-card">
                                <div class="icon-block">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <i class="bi bi-three-dots-vertical"></i>
                                </div>
                                <div class="main-icon">
                                    <img src="{{url('images/contact-us/Group 508.png')}}" >
                                </div>
                                <h5 class="title">Partnership</h5>
                                <p class="text">Become a partner in your region with Tallentor</p>
                                <a href="mailto:partner@tallentordigital.com" class="contact">partner@tallentordigital.com</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@if(\Session::has('success') )

<div class="modal fade form-submit-modal" id="overlay" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <i class="bi bi-x-lg" data-bs-dismiss="modal"></i>
                <div class="image-block">
                    <img src="{{url('images/landing_page/contact_us/success.png')}}" >
                </div>
                <div class="content-block">
                    <div class="title">Success !</div>
                    <p class="text">Your message submitted successfully.</p>
                    <p class="text">One of our agents will be in touch shortly.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@else

<!-- <div class="modal fade form-submit-modal unsuccess" id="overlay" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <i class="bi bi-x-lg" data-bs-dismiss="modal"></i>
                <div class="image-block">
                    <img src="{{url('images/landing_page/contact_us/unsuccess.png')}}" >
                </div>
                <div class="content-block">
                    <div class="title">Ooopsie !</div>
                    <p class="text">Your message Failed to deliver.</p>
                    <p class="text">Please try again later.</p>
                </div>
            </div>
        </div>
    </div>
</div> -->

@endif

    @include('frontend.includes.footer')


@endsection

@push('after-scripts')

<script>
    $(window).on('load', function () {
        $('#overlay').modal('show');
    });
    $("#close-btn").click(function () {
        $('#overlay').modal('hide');
    });
</script>

<script>
window.oncontextmenu = () => {
  var captcha = grecaptcha.getResponse();
};

function checked() {
    $('.form-submit-btn').removeAttr('disabled');
    };
</script>

@endpush
