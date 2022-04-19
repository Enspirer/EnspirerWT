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
                    <img src="{{auth()->user()->picture}}" alt="">
                    <i class="bi bi-pencil-fill"></i>
                </div>
                <div class="status-block">
                    <div class="name">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</div>
                    <div class="active-status active">Active Status</div>
                </div>
            </div>

            @if(session()->has('error_pw'))
                <div class="alert alert-danger">
                    {{ session()->get('error_pw') }}
                </div>
            @endif
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            <form action="{{ route('frontend.mobile_view.setting_update') }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="edit-profile">
                    <div class="data-field">
                        <div class="input-field">
                            <label class="label">Display Name</label>
                            <input type="text" name="first_name" class="data-input" value="{{auth()->user()->first_name}}" readonly required>
                        </div>
                        <div class="btn-field">
                            <a href="#" class="btn-mobile" onclick="editInput('first_name'),confirm(this)">Edit</a>
                        </div>
                    </div>
                    <div class="data-field">
                        <div class="input-field">
                            <label class="label">Email</label>
                            <input type="email" name="email" class="data-input" value="{{auth()->user()->email}}" readonly required>
                        </div>
                        <div class="btn-field">
                            <a href="#" class="btn-mobile" onclick="editInput('email'),confirm(this)">Edit</a>
                        </div>
                    </div>
                    <div class="data-field">
                        <div class="input-field">
                            <label class="label">Password</label>
                            <input type="password" name="password" class="data-input" readonly>
                        </div>
                        <div class="btn-field">
                            <a href="#" class="btn-mobile" onclick="editInput('password'),confirm(this)">Edit</a>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="hidden_id" class="data-input" value="{{auth()->user()->id}}">
                <button type="submit" class="btn btn-success col-12 mb-4">Update</button>
            </form>


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
            <a href="{{route('frontend.auth.logout')}}" class="btn-mobile btn-signout">Sign Out</a>
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