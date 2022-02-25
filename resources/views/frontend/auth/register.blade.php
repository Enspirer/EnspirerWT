@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.register_box_title'))

@section('content')

    <link rel="stylesheet" href="{{url('css/sign_up.css')}}">

    @include('frontend.includes.home_nav')

    <section class="sign-up-section">
        <div class="container">
            <div class="inner-wrapper">
                <div class="sign-up-form">
                    <div class="header">
                        <div class="title">Join with us</div>
                        <div class="subtitle">Hello there, Welcome back</div>
                    </div>
                    <form action="{{ route('frontend.auth.register.post') }}" method="post" enctype="multipart/form-data" class="needs-validation">
                    {{ csrf_field() }}
                        <div class="inputs">
                            <label for="first_name" class="form-label">Your First Name</label>
                            <input type="text" name="first_name" class="form-control" id="first_name" aria-describedby="first_name" placeholder="Enter Your First Name" required>
                        </div>
                        <div class="inputs">
                            <label for="last_name" class="form-label">Your Last Name</label>
                            <input type="text" name="last_name" class="form-control" id="last_name" aria-describedby="last_name" placeholder="Enter Your Last Name" required>
                        </div>
                        <div class="inputs">
                            <label for="signUpEmail" class="form-label">Your Email</label>
                            <input type="email" name="email" class="form-control" id="signUpEmail" aria-describedby="emailHelp" placeholder="Enter Your Email" required>
                        </div>
                        <div class="inputs">
                            <label for="signUpPassword" class="form-label">Your Password</label>
                            <input type="password" name="password" class="form-control" id="signUpPassword" placeholder="Enter Your Password" required>
                        </div>
                        <div class="inputs">
                            <label for="signUpConfirmPassword" class="form-label">Confirm Your Password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="signUpConfirmPassword" placeholder="Confirm Your Password" required>
                        </div>
                        <div class="inputs form-check">
                            <input type="checkbox" class="form-check-input" id="signUpCheck" required>
                            <label class="form-check-label" for="signUpCheck">By Creating an account means you agree
                                to the <a href="#">Terms and Conditions</a>, and our <a href="#">Privacy Policy</a></label>
                        </div>
                        <button type="submit" class="btn-signup">Sign Up</button>
                    </form>
                    <div class="footer">
                        <div class="devider">or do it via other accounts</div>
                        <div class="button-block">
                            <a href="#" class="social-signup-btn">
                                <img src="{{url('images/google.png')}}" alt="">
                            </a>
                            <a href="#" class="social-signup-btn">
                                <img src="{{url('images/fb.png')}}" alt="">
                            </a>
                        </div>
                        <div class="signin-text">Do you have an account? <a href="{{url('login')}}">Login Now</a></div>
                    </div>
                </div>
                <div class="slider">
                    <div class="sign-up-splide" id="signUpSlider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <img src="{{url('images/Group 413.png')}}" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{url('images/Group 413.png')}}" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{url('images/Group 413.png')}}" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.includes.footer')

   
@endsection

@push('after-scripts')
    @if(config('access.captcha.registration'))
        @captchaScripts
    @endif

    
@endpush
