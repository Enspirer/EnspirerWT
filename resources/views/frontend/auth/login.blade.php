@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.login_box_title'))

@section('content')

    <link rel="stylesheet" href="{{url('css/sign_in.css')}}">

    @include('frontend.includes.home_nav')

    <section class="sign-up-section">
    <div class="inner-wrapper">
                <div class="sign-up-form">
                    <div class="header">
                        <div class="title">Login to your account</div>
                        <div class="subtitle">Hello there, Welcome back</div>
                    </div>
                    {{ html()->form('POST', route('frontend.auth.login.post'))->open() }}
                        <div class="inputs">
                            <label for="signInEmail" class="form-label">Your Email</label>
                            {{ html()->email('email')
                                ->class('form-control')
                                ->attribute('maxlength', 191)
                                ->placeholder('Enter Your Email')
                                ->required() }} 
                        </div>
                        <div class="inputs">
                            <label for="signInPassword" class="form-label">Your Password</label>
                            {{ html()->password('password')
                                ->class('form-control')
                                ->placeholder('Enter Your Password')
                                ->required() }}

                            @include('includes.partials.messages')
                        </div>
                        <button type="submit" class="btn-signup">Sign In</button>
                        <div class="inputs">
                            <div class="inner-wrapper">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="signUpCheck">
                                    <label class="form-check-label" for="signUpCheck"> Remember me</label>
                                </div>
                                <a href="{{ route('frontend.auth.password.reset') }}" class="forgot-passowrd">Forgot Password?</a>
                            </div>
                        </div>
                    {{ html()->form()->close() }}

                    <div class="footer">
                        <div class="devider">or do it via other accounts</div>
                        <div class="button-block">
                            @include('frontend.auth.includes.socialite')


                        </div>
                        <div class="signin-text">Don't have an account yet? <a href="{{url('register')}}">Register Now</a></div>
                    </div>
                </div>
                <div class="slider">
                    <div class="splide sign-in-splide" id="signInSlider">
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
    </section>
    @include('frontend.includes.footer')


@endsection

@push('after-scripts')
    @if(config('access.captcha.login'))
        @captchaScripts
    @endif
@endpush
