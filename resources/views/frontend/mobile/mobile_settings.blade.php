@extends('frontend.layouts.mobile_app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<link rel="stylesheet" href="{{url('css/mobile_main.css')}}">

@include('frontend.mobile.includes.top_nav')

<div class="section-settings">
    <div class="mobile-container">
        <div class="inner-container">
            <div class="profile">
                <div class="image-block">
                    <img src="{{url('images/mobile/home/profile-picture.png')}}" alt="">
                    <i class="bi bi-pencil-fill"></i>
                </div>
                <div class="status-block">
                    <div class="name">Amal Perera</div>
                    <div class="active-status active">Active Status</div>
                </div>
            </div>
            <div class="edit-profile">
                <div class="data-field">
                    <div class="input-field">
                        <label class="label">Display Name</label>
                        <input type="text" name="display-name" class="data-input" value="Amal Perera" readonly>
                    </div>
                    <div class="btn-field">
                        <a href="#" class="btn-mobile" onclick="editInput('display-name'),confirm(this)">Edit</a>
                    </div>
                </div>
                <div class="data-field">
                    <div class="input-field">
                        <label class="label">Email</label>
                        <input type="email" name="email" class="data-input" value="example@gmail.com" readonly>
                    </div>
                    <div class="btn-field">
                        <a href="#" class="btn-mobile" onclick="editInput('email'),confirm(this)">Edit</a>
                    </div>
                </div>
                <div class="data-field">
                    <div class="input-field">
                        <label class="label">Password</label>
                        <input type="password" name="password" class="data-input" value="password" readonly>
                    </div>
                    <div class="btn-field">
                        <a href="#" class="btn-mobile" onclick="editInput('password'),confirm(this)">Edit</a>
                    </div>
                </div>
            </div>
            <div class="subscription-block">
                <div class="header">
                    <div class="header-block">
                        <label class="label">Subscription</label>
                        <div class="info">Basic</div>
                    </div>
                    <div class="header-block">
                        <div class="subscription">Basic</div>
                    </div>
                </div>
                <div class="footer">
                    <a href="#" class="btn-mobile">
                        <div class="text">See the Pro Benefits</div>
                        <i class="bi bi-arrow-right-short"></i>
                    </a>
                </div>
            </div>
            <a href="#" class="btn-mobile btn-signout">Sign Out</a>
        </div>
    </div>
</div>

@include('frontend.mobile.includes.bottom_nav')
    
@endsection

@push('after-scripts')

<script>
function confirm(btn) {
    const text = btn.textContent;

    if (text == 'Edit') {
        btn.textContent = 'Done';
    } else {
        btn.textContent = 'Edit';
    }
}

function editInput(name) {

    const input = document.querySelector('[name=' + name + ']');
    input.toggleAttribute('readonly');
    input.classList.toggle('active');
}
</script>

@endpush