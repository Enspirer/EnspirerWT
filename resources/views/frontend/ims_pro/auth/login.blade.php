@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.login_box_title'))

@section('content')

   

<link rel="stylesheet" href="{{url('css/sign_in.css')}}">


<section class="sign-up-section">
<div class="inner-wrapper" style="margin-top:-80px;">
            <div class="sign-up-form">
                @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
                <div class="header">
                    <div class="title">Login to your account</div>
                    <div class="subtitle">Hello there, Welcome back</div>
                </div>
                <form action="{{ route('frontend.ims_login_check') }}" method="post" enctype="multipart/form-data" class="needs-validation">
                {{ csrf_field() }}
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
                    
                </form>

                
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
