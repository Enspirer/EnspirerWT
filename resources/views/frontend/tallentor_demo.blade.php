@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    
@include('frontend.includes.home_nav')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<link rel="stylesheet" href="{{url('css/tallentor_demo.css')}}">
<link rel="stylesheet" href="{{url('css/contact_us.css')}}">


<section class="section-schedule">
    <div class="container">
        <div class="inner-wrapper">
            <div class="content-block">
                <div class="title-light">Schedule a  time for</div>
                <div class="title">Tallentor  demo</div>
                <div class="text">Make customers happy and scale customer <br> service without increasing unit costs.</div>

                <form action="{{route('frontend.tallentor_demo_store')}}" method="post" class="schedule-form row g-3" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="col-12">
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="col-md-6">
                        <input type="time" name="time" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <input type="date" name="date" class="form-control" required>
                    </div>
                    <div class="col-2 text-center">
                        <img src="{{url('images/social_media_icons/whatsapp.png')}}" alt="" class="form-img">
                    </div>
                    <div class="col-10">
                        <input type="tel" name="phone" class="form-control" placeholder="Whatsapp Number" required>
                    </div>

                    <div class="mt-5">
                        <button type="submit" class="btn rounded-pill text-light px-4 py-2 ms-2 btn-success col-12">Send <i class="bi bi-arrow-right-short"></i></button>
                    </div>
                </form>
            </div>
            <div class="image-block">
                <img src="{{url('images/landing_page/tallentor_demo/demo_main.png')}}" alt="">
            </div>
        </div>
    </div>
</section>    


@if(\Session::has('success') )

<div class="modal fade form-submit-modal" id="overlay" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <i class="bi bi-x-lg" data-bs-dismiss="modal"></i>
                <div class="image-block">
                    <img src="{{url('images/landing_page/contact_us/success.png')}}" alt="">
                </div>
                <div class="content-block">
                    <div class="title">Success !</div>
                    <p class="text">Submitted Successfully.</p>
                    <p class="text">One of our agents will be in touch shortly.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endif



@include('frontend.includes.footer')

    
@endsection

@push('after-scripts')

<script>
    $(window).on('load', function () {
        $('#overlay').modal('show');
    });
    $("#close-btn").click(function () {
        $('#overlay').modal('hide');
    });
</script>


<script>
   const phoneInputField = document.querySelector("[name=phone]");
   const phoneInput = window.intlTelInput(phoneInputField, {
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });
</script>

@endpush