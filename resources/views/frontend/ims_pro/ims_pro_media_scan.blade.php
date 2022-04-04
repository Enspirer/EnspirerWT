@extends('frontend.layouts.widget_ims_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/ims_pro-media_scan.css')}}">


<section class="ims__section">
        @include('frontend.ims_pro.ims_pro_sidebar')
            <div class="ims__main-col">
                @include('frontend.ims_pro.ims_pro_navbar')
                
                <div class="row g-0">
                    <div class="col">
                        <!-- Content goes here -->
                        <div class="ims__body-container" id="ims__main-panel">
                            <div class="ims__inner-container">
                                <div class="row g-0 mb-4">
                                    <div class="col">
                                        <ul class="breadcrumb">
                                            
                                            <li class="breadcrumb-item">
                                                <a class="breadcrumb-link">IMS Pro</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#" class="breadcrumb-link breadcrumb-arrow"><i
                                                        class="bi bi-chevron-right"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a class="breadcrumb-link breadcrumb-current">Media Scan</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- <div class="row g-0">
                                    <div class="qr-section">
                                        <div class="content-block">
                                            <div class="title">Scan the QR-code to connect your Whatsapp number</div>
                                            <ul class="steps">
                                                <li><span class="no">01.</span><div class="text">Open WhatsApp on your phone</div></li>
                                                <li><span class="no">02.</span><div class="text">Tap <span>Menu</span> or <span>Settings</span> and select <span>Linked Devices</span></div></li>
                                                <li><span class="no">03.</span><div class="text">Point your phone to this screen to capture the code</div></li>
                                            </ul>
                                            <div class="text">If you have Whatsapp MultiDevice enabled, please generate <a href="#" class="qr-section-link">Whatsapp Multidevice QR code here</a> instead.</div>
                                            <a href="#" class="qr-section-link">Need help to get started ?</a>
                                        </div>
                                        <div class="qr-code">
                                            <img src="{{url('images/ims-pro/qr-codes/code-0001.png')}}" alt="">
                                        </div>
                                    </div>
                                </div> -->

                                <div class="row g-0">
                                    <div class="welcome-section">
                                        <div class="info-block">
                                            <h2 class="title">Good Morning, Kasun !</h2>
                                            <h2 class="sub-title">How to connect your own number ?</h2>
                                            <div class="text">You must send the WhatsApp Message from your registered number +94775037754</div>
                                            <div class="text">Please use this keyword: #5bMXv to receive messages from other numbers</div>
                                        </div>
                                        <div class="steps-block">
                                            <!-- <div class="block block-1">
                                                <div class="no">1</div>
                                                <img src="{{url('images/dashboard/ims_pro/rocket-left.png')}}" alt="" class="img-rocket">
                                                <img src="{{url('images/dashboard/ims_pro/arrow.png')}}" alt="" class="img-arrow">
                                                <img src="{{url('images/dashboard/ims_pro/connect.png')}}" alt="" class="img-connect">
                                                <img src="{{url('images/dashboard/ims_pro/main-1.png')}}" alt="" class="img-main">
                                                <div class="text">Click "<span>+ Add your own number</span>" button</div>
                                            </div>
                                            <div class="block block-2">
                                                <div class="no">2</div>
                                            <img src="{{url('images/dashboard/ims_pro/main-2-background.png')}}" alt="" class="img-back">
                                            <img src="{{url('images/dashboard/ims_pro/main-2.png')}}" alt="" class="img-main">
                                                <div class="text">Select your Price Plan here</div>
                                            </div>
                                            <div class="block block-3">
                                                <div class="no">3</div>
                                                <img src="{{url('images/dashboard/ims_pro/rocket-right.png')}}" alt="" class="img-rocket">
                                                <img src="{{url('images/dashboard/ims_pro/connect.png')}}" alt="" class="img-connect">
                                                <img src="{{url('images/dashboard/ims_pro/main-3.png')}}" alt="" class="img-main">
                                                <div class="text">Drop your inquiry for us</div>
                                            </div> -->
                                            <img src="{{url('images/dashboard/ims_pro/steps.png')}}" alt="" class="img-main">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </section>
    

@endsection



@push('after-scripts')



@endpush