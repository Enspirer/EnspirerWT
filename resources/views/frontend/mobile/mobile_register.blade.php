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
        <form action="POST" class="signup-form">
            <div class="signup-fields">
                <div class="label">User Name</div>
                <input type="text" class="signup-input" name="user-name" required>
            </div>
            <div class="signup-fields">
                <div class="label">Email</div>
                <input type="email" class="signup-input" name="user-email" required>
            </div>
            <div class="signup-fields">
                <div class="label">Password</div>
                <input type="password" class="signup-input" name="user-password" required>
                <i class="bi bi-eye-slash-fill"></i>
            </div>
            <div class="signup-fields">
                <div class="label">Confirm Password</div>
                <input type="password" class="signup-input" name="user-cpassword" required>
                <i class="bi bi-eye-slash-fill"></i>
            </div>
            <button class="btn-mobile signup-submit">Register</button>
        </form>
        <div class="footer">
            <div class="text">Do you have an account? <a href="#">Login!</a></div>
        </div>
    </div>
</div>
    
@endsection

@push('after-scripts')

@endpush