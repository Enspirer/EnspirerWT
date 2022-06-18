@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/reports.css')}}">
<link rel="stylesheet" href="{{url('css/projects.css')}}">
<link rel="stylesheet" href="{{url('css/inquiry_report.css')}}">
<link rel="stylesheet" href="{{url('css/billing.css')}}">

@include('frontend.includes.mobile_nav')

<section id="sectionMainWindow">
        @include('frontend.includes.sidebar')

    <div id="sectionBody">
            @include('frontend.includes.nav')
            
            <!-- Content goes here -->
        <div class="row g-0">
            <div class="section-content">
                <div class="section-container">


            <!-- Section Billing Main -->

                <div class="section-header">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item"><i class="bi bi-chevron-right"></i></li>
                        <li class="breadcrumb-item"><span>{{$project->name}} </span></li>
                    </ul>
                </div>

                <div class="billing-summery">
                    <div class="inner-wrapper">
                        <div class="package-block">
                            <div class="header">
                                <div class="text">Project Details</div>
                                <i class="bi bi-question-circle-fill"></i>
                            </div>
                            <div class="body">
                                <div class="image-block">
                                @if($project->settings != null)
                                    <img src="{{uploaded_asset(json_decode($project->settings)->logo)}}"  width="100%">
                                @else
                                    <img src="https://fakeimg.pl/250x100/"  width="100%">
                                @endif
                                </div>
                                <div class="property-block">
                                    <div class="title">Project name and Link</div>
                                    <div class="pro-name">{{$project->name}}</div>
                                    <div class="pro-url">{{$project->url}}</div>
                                </div>
                                <div class="package">
                                    <div class="title">Package Details</div>
                                    <div class="inner-block">
                                        <div class="image-block">
                                            @if($project->selected_package == 'All In One Widget + IMS Lite')
                                                <img src="{{url('images/dashboard/main/widgetLite-icon.png')}}" >
                                            @elseif($project->selected_package == 'All In One Widget + IMS Pro')
                                                <img src="{{url('images/dashboard/main/widgetPlus-icon.png')}}" >
                                            @elseif($project->selected_package == 'Optimizer')
                                                <img src="{{url('images/dashboard/main/optimizer-icon.png')}}" >
                                            @endif
                                        </div>
                                        <div class="content-block">
                                            <div class="title">Package</div>
                                                @if($project->selected_package != null)
                                                    <div class="name">{{$project->selected_package}}</div>
                                                @else
                                                    <div class="name">Not Selected</div>
                                                @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="summery-block">
                            <div class="header">
                                <div class="text">Payment Details</div>
                                <i class="bi bi-question-circle-fill"></i>
                            </div>
                            <div class="body">
                                <div class="title">Payment Status</div>
                                <div class="content-block">
                                    <div class="status-block green">
                                        <i class="bi bi-circle-fill"></i>
                                        <div class="text">Paid Bills</div>
                                        <div class="count">{{count($paid_invoices)}}</div>
                                    </div>
                                    <div class="status-block red">
                                        <i class="bi bi-circle-fill"></i>
                                        <div class="text">Unpaid Bills</div>
                                        <div class="count">{{count($unpaid_invoices)}}</div>
                                    </div>
                                    <div class="status-block orange">
                                        <i class="bi bi-circle-fill"></i>
                                        <div class="text">Pending Bills</div>
                                        <div class="count">{{count($pending_invoices)}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-reports" style="margin-bottom: 50px;">
                    <h4>Analytics Report</h4>

                    <div class="footer">                      
                        <div class="row">
                            <div class="col-3">
                                <div class="input-group d-flex justify-content-center">
                                    <a href="{{ route('frontend.user.reports.inquiry_report',$project_id) }}" style="text-decoration:none;" class="tab-link">
                                        <h5 class="p-3 mt-1" style="color:black;">Inquiry Report</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group d-flex justify-content-center">
                                    <a href="{{ route('frontend.user.reports.seo_optimize_report',$project_id) }}" style="text-decoration:none;" class="tab-link">
                                        <h5 class="p-3 mt-1" style="color:black;">SEO Optimize Report</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group d-flex justify-content-center">
                                        <a href="{{ route('frontend.user.reports.security_report',$project_id) }}" style="text-decoration:none;" class="tab-link">
                                        <h5 class="p-3 mt-1" style="color:black;">Security Report</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group d-flex justify-content-center">
                                    <a href="{{ route('frontend.user.reports.billing_report',$project_id) }}" style="text-decoration:none;" class="tab-link">
                                        <h5 class="p-3 mt-1" style="color:black;">Billing Report</h5>
                                    </a>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>



                
            </div>
        </div>
    </div>
</div>


  
    
@endsection


@push('after-scripts')




@endpush