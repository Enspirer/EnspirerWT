@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.passwords.reset_password_box_title'))

@section('content')
 <!--   <div class="row justify-content-center align-items-center">
        <div class="col col-sm-6 align-self-center">
            <div class="card">
                <div class="card-header">
                    <strong>
                        @lang('labels.frontend.passwords.reset_password_box_title')
                    </strong>
                </div>

                <div class="card-body">

                    @if(session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ html()->form('POST', route('frontend.auth.password.email.post'))->open() }}
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.email'))->for('email') }}

                                    {{ html()->email('email')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.email'))
                                        ->attribute('maxlength', 191)
                                        ->required()
                                        ->autofocus() }}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group mb-0 clearfix">
                                    {{ form_submit(__('labels.frontend.passwords.send_password_reset_link_button')) }}
                                </div>
                            </div>
                        </div>
                    {{ html()->form()->close() }}
                </div>
            </div>
        </div>
    </div> -->

    <link rel="stylesheet" href="{{url('css/sign_in.css')}}">

    <style>
        .alert.alert-danger {
            margin-top:80px
        }
    </style>

    @include('frontend.includes.home_nav')

    <section class="sign-up-section">
        <div class="inner-wrapper">
            <div class="sign-up-form">
                <div class="header">
                    <div class="title">Forgot Your Password?</div>
                    <div class="subtitle">Reset your password</div>
                </div>
                @if(session('status'))
                        <div class="alert alert-success" style="margin-top:80px;">
                            {{ session('status') }}
                        </div>
                @endif
                {{ html()->form('POST', route('frontend.auth.password.email.post'))->open() }}
                    <div class="inputs">
                        <label for="signInEmail" class="form-label">Your Email</label>
                        {{ html()->email('email')
                            ->class('form-control')
                            ->placeholder(__('validation.attributes.frontend.email'))
                            ->attribute('maxlength', 191)
                            ->required()
                            ->autofocus() }}
                    </div>
                    <button type="submit" class="btn-signup">Send Password Reset Link</button>
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
                <div class="sign-in-splide" id="signInSlider">
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
