@extends('frontend.layouts.mobile_app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<link rel="stylesheet" href="{{url('css/mobile_main.css')}}">

<div class="section-signup">
    <div class="mobile-container">
        <div class="image-block">
            <img src="{{url('/images/mobile/login/login-hero.png')}}" >
        </div>
        <div class="title">Welcome to Tallentor !</div>
        <div class="subtitle">Keep your data safe!</div>

        {{ html()->form('POST', route('frontend.auth.login.post'))->open() }}
            <div class="signup-form">
                <div class="signup-fields">
                    <div class="label">Email</div>
                    {{ html()->email('email')
                    ->class('form-control signup-input')
                    ->attribute('maxlength', 191)
                    ->required() }} 
                </div>
                <div class="signup-fields">
                    <div class="label">Password</div>
                    {{ html()->password('password')
                    ->class('form-control signup-input')
                    ->required() }}
                    <i class="bi bi-eye-slash-fill"></i>
                </div>
                <button class="btn-mobile signup-submit">Login</button>
                <a href="#" class="forgot-password">Forgot Password?</a>
            </div>            

        {{ html()->form()->close() }}

        <div class="social-signup">
            <div class="devider">OR</div>
            <a href="#" class="btn-social-signup">
                <img src="{{url('/images/mobile/login/facebook.png')}}" >
                <div class="text">Facebook</div>
            </a>
            <a href="#" class="btn-social-signup">
                <img src="{{url('/images/mobile/login/google.png')}}" >
                <div class="text">Google</div>
            </a>
        </div>
    </div>
</div>
    
@endsection

@push('after-scripts')

@endpush