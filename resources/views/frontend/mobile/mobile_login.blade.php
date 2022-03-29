@extends('frontend.layouts.mobile_app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<link rel="stylesheet" href="{{url('css/mobile_main.css')}}">

<div class="section-signup">
    <div class="mobile-container">
        <div class="image-block">
            <img src="{{url('/images/mobile/login/login-hero.png')}}" alt="">
        </div>
        <div class="title">Welcome to Tallentor !</div>
        <div class="subtitle">Keep your data safe!</div>
        <form action="POST" class="signup-form">
            <div class="signup-fields">
                <div class="label">Email</div>
                <input type="email" class="signup-input" name="user-email" required>
            </div>
            <div class="signup-fields">
                <div class="label">Password</div>
                <input type="password" class="signup-input" name="user-password" required>
                <i class="bi bi-eye-slash-fill"></i>
            </div>
            <button class="btn-mobile signup-submit">Login</button>
            <a href="#" class="forgot-password">Forgot Password?</a>
        </form>
        <div class="social-signup">
            <div class="devider">OR</div>
            <a href="#" class="btn-social-signup">
                <img src="{{url('/images/mobile/login/facebook.png')}}" alt="">
                <div class="text">Facebook</div>
            </a>
            <a href="#" class="btn-social-signup">
                <img src="{{url('/images/mobile/login/google.png')}}" alt="">
                <div class="text">Google</div>
            </a>
        </div>
        <div class="footer">
            <div class="text">Don't have an account? <a href="#">Register!</a></div>
        </div>
    </div>
</div>
    
@endsection

@push('after-scripts')

@endpush