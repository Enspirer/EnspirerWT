@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/reports.css')}}">
<link rel="stylesheet" href="{{url('css/projects.css')}}">
   

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