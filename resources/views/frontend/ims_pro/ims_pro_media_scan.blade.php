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
                                                @if(whatsapp_server_status($project_id)['connection_status'] != 'Authenticated')
                                                    <a class="breadcrumb-link breadcrumb-current">Media Scan</a>
                                                @else
                                                    <a class="breadcrumb-link breadcrumb-current">Dashboard</a>
                                                @endif
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                               
                                @if(whatsapp_server_status( $project_id )['server_type'] == 'default_server' )
                                    @include('frontend.ims_pro.includes.ims_number')
                                @else
                                    @include('frontend.ims_pro.includes.ims_scan')
                                @endif
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </section>
    

@endsection



@push('after-scripts')



@endpush