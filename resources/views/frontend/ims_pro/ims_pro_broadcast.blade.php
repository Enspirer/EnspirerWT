@extends('frontend.layouts.widget_ims_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/ims_pro.css')}}">
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
                                                <a class="breadcrumb-link breadcrumb-current">Broadcast</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                
                                <div class="row g-0">
                                    <div class="welcome-block section-broadcast">
                                        <div class="steps-block">
                                            <img src="{{url('images/dashboard/ims_pro/section-broadcast.png')}}" alt="" class="img-main">
                                        </div>
                                        <div class="info-block">
                                            <h2 class="sub-title">Do you want use this service ?</h2>
                                            <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an</p>
                                            <p class="text">unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also </p>
                                            <a href="#" class="btn-inquire">
                                                <div class="text">Drop your Inquiry</div>
                                                <i class="bi bi-arrow-right-short"></i>
                                            </a>
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