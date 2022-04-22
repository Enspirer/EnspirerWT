@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    
@include('frontend.includes.home_nav')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<link rel="stylesheet" href="{{url('css/tallentor_demo.css')}}">


<section class="section-schedule">
    <div class="container">
        <div class="inner-wrapper">
            <div class="content-block">
                <div class="title-light">Schedule a  time for</div>
                <div class="title">Tallentor  demo</div>
                <div class="text">Make customers happy and scale customer <br> service without increasing unit costs.</div>
                <form action="POST" class="schedule-form row g-3">
                    <div class="col-12">
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="col-md-6">
                        <input type="time" name="time" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <input type="date" name="date" class="form-control">
                    </div>
                    <div class="col-2 text-center">
                        <img src="{{url('images/social_media_icons/whatsapp.png')}}" alt="" class="form-img">
                    </div>
                    <div class="col-10">
                        <input type="tel" name="phone" class="form-control" placeholder="Whatsapp Number">
                    </div>
                </form>
            </div>
            <div class="image-block">
                <img src="{{url('images/landing_page/tallentor_demo/demo_main.png')}}" alt="">
            </div>
        </div>
    </div>
</section>    

@include('frontend.includes.footer')

    
@endsection

@push('after-scripts')

<script>
   const phoneInputField = document.querySelector("[name=phone]");
   const phoneInput = window.intlTelInput(phoneInputField, {
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });
</script>

@endpush