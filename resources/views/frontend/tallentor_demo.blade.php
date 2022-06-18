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
                        <div class="dropdown custom-dropdown" custom-dropdown>
                            <a href="#" class="drop-toggle" data-bs-toggle="dropdown">
                                <div class="text" data-toggle>Select Product</div>
                                <i class="bi bi-chevron-down"></i>
                            </a>
                            <input type="hidden" name="product" data-drop-input>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="text">Main Products</div>
                                </li>
                                <li><a class="dropdown-item" data-drop-link href="#">Widget Lite</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Widget Pro</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Optimizer</a></li>
                                <li>
                                    <div class="text">Programming & Development</div>
                                </li>
                                <li><a class="dropdown-item" data-drop-link href="#">Basic Website</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Dynamic Website</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">E-commerce Website</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Wordpress Website</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Landing Page Design</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Web Banners</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Icon Pack Design</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Website Wireframes</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">ERP Solutions</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">PMS Solutions</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Payroll Management</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">POS System</a></li>
                                <li>
                                    <div class="text">Digital Marketing</div>
                                </li>
                                <li><a class="dropdown-item" data-drop-link href="#">Social Media Marketing</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Search Engine Optimization</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Search Engine Marketing</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Video Marketing</a></li>
                                <li>
                                    <div class="text">Graphic Design</div>
                                </li>
                                <li><a class="dropdown-item" data-drop-link href="#">Logo Design</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Company Branding</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Company Stationery</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Package Design</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Brochure Design</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Flyer Design</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Website Design</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">App UI Design</a></li>
                                <li>
                                    <div class="text">Art & Craft</div>
                                </li>
                                <li><a class="dropdown-item" data-drop-link href="#">Paintings</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Masks</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Wall Arts</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Canvas Wall Poster</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Wooden Handicrafts</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Batik Wall Hangings</a></li>
                                <li>
                                    <div class="text">Writing & Translation</div>
                                </li>
                                <li><a class="dropdown-item" data-drop-link href="#">Content Writing</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Copy Writing</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Translation</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Legal Writing</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Contract & Proposals</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Ghost Writing</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Speech Writing</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Technical Writing</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Script Writing</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Social Media Copy</a></li>
                                <li>
                                    <div class="text">Video & Photograpy</div>
                                </li>
                                <li><a class="dropdown-item" data-drop-link href="#">Digital Company Profiles</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Audio Visuals</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Social Media Videos</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Video Editing</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Google 360 Business View</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Local Photography</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Drone Videography</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Product Photography</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Photo Retouching</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Product Explainer Videos</a></li>
                                <li>
                                    <div class="text">Music & Audio</div>
                                </li>
                                <li><a class="dropdown-item" data-drop-link href="#">Voice Over</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Audio Tracks</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Online Music Lessons</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Song Writers</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Jingle & Intros</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Audio Ads Production</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Singers & Vocalist</a></li>
                                <li>
                                    <div class="text">Business & Sales</div>
                                </li>
                                <li><a class="dropdown-item" data-drop-link href="#">Tele Sales Executive</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Marketing Consultant</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Accounts Assistant</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Tax Consultating</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Market Research</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Legal Consulting</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Visual Assistant</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Business Documents</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Financial Consulting</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Real Estate Agent</a></li>
                                <li><a class="dropdown-item" data-drop-link href="#">Project Management</a></li>
                            </ul>
                        </div>
                    </div>
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
                        <img src="{{url('images/social_media_icons/whatsapp.png')}}"  class="form-img">
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
                <img src="{{url('images/landing_page/tallentor_demo/demo_main.png')}}" >
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
                    <img src="{{url('images/landing_page/contact_us/success.png')}}" >
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

<script>
    // Custom Dropdown
    const customDrop = document.querySelector("[custom-dropdown]")
    const dataToggle = customDrop.querySelector("[data-toggle]")
    const dataInput = customDrop.querySelector("[data-drop-input]")
    const dataDropItem = customDrop.querySelectorAll("[data-drop-link]")

    dataDropItem.forEach(function (item) {
        item.addEventListener('click', function () {
            const itemVal = item.textContent

            dataToggle.innerHTML = itemVal
            dataInput.value = itemVal
        })
    })
</script>

@endpush