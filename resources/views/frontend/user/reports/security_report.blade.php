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
                        <li class="breadcrumb-item"><span>Security Report</span></li>
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
                

                    <div class="mt-3 text-left mb-5">                  
                        <a href="{{route('frontend.user.reports.analytics_report', $project->id)}}" class="btn btn-info rounded-pill text-light px-5 py-2" style="font-size:15px">Back</a>&nbsp;&nbsp;
                    </div>
                
                    <div class="row g-0 mt-5">
                        <div class="ims__control-panel">
                            <div class="row g-0">
                                <div class="col">
                                    <div class="control-block">
                                        <div class="controls">
                                            
                                            
                                        </div>
                                        
                                        <!-- <a href="{{ url('inquiriesPDF',$project_id) }}" class="btn-status-report">
                                            <i class="bi bi-download"></i>
                                            <div class="text">Status Report</div>
                                        </a> -->
                                    </div>
                                    <div class="ims__data-table">
                                        <table class="table table-borderless" id="inquirySummery">
                                            <thead>
                                                <tr class="data-row">
                                                    <th class="data-title"></th>
                                                    <th class="data-title"></th>
                                                    <th class="data-title">Security</th>
                                                    <th class="data-title">Summary</th>                                                                           
                                                    <th class="data-title">Action</th>        
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="data-row" data-href="#">
                                                    <td class="data--select data-cell">
                                                        <input class="form-check-input inquiry-check" id="12315780" type="checkbox" value="">
                                                    </td>
                                                    <td class="data--fav data-cell">
                                                        <label class="fav-btn">
                                                            <input type="checkbox">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star"></i>
                                                        </label>
                                                    </td>
                                                    <td class="data--name data-cell">
                                                        <div class="info-block">
                                                            <div class="header">
                                                                <div class="name">Website Risk Score</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="data--name data-cell">
                                                        <div class="info-block">
                                                            <div class="header">
                                                                <div class="name"> {{number_format((float)($issues_summary['passed_high_risk_points']/$issues_summary['total_high_risk_points'])*100, 2, '.', '')}}% | Last Update: {{ $project->updated_at->format('d M Y') }}  {{date('h:i A', strtotime($project->created_at))}}</div>
                                                                 <!-- <div class="count">10</div> -->
                                                            </div>
                                                            <!-- <div class="message"><span>You:</span>The sample text here and this is the . . .</div> -->
                                                        </div>
                                                    </td>                                                    
                                                    <td class="data--date data-cell">
                                                        <button class="btn btn-success">View</button>                                                               
                                                    </td>                                            
                                                </tr>   

                                                <tr class="data-row" data-href="#">
                                                    <td class="data--select data-cell">
                                                        <input class="form-check-input inquiry-check" id="12315780" type="checkbox" value="">
                                                    </td>
                                                    <td class="data--fav data-cell">
                                                        <label class="fav-btn">
                                                            <input type="checkbox">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star"></i>
                                                        </label>
                                                    </td>
                                                    <td class="data--name data-cell">
                                                        <div class="info-block">
                                                            <div class="header">
                                                                <div class="name">Detected Risks</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="data--name data-cell">
                                                        <div class="info-block">
                                                            <div class="header">
                                                                <div class="name"> {{$issues_summary['passed_high_risk_points']}} Risks Detected</div>
                                                                 <!-- <div class="count">10</div> -->
                                                            </div>
                                                            <!-- <div class="message"><span>You:</span>The sample text here and this is the . . .</div> -->
                                                        </div>
                                                    </td>                                                    
                                                    <td class="data--date data-cell">
                                                        <button class="btn btn-success">View</button>                                                               
                                                    </td>                                            
                                                </tr>

                                                <tr class="data-row" data-href="#">
                                                    <td class="data--select data-cell">
                                                        <input class="form-check-input inquiry-check" id="12315780" type="checkbox" value="">
                                                    </td>
                                                    <td class="data--fav data-cell">
                                                        <label class="fav-btn">
                                                            <input type="checkbox">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star"></i>
                                                        </label>
                                                    </td>
                                                    <td class="data--name data-cell">
                                                        <div class="info-block">
                                                            <div class="header">
                                                                <div class="name">Malware</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="data--name data-cell">
                                                        <div class="info-block">
                                                            <div class="header">
                                                                <div class="name"> 100% Malware free</div>
                                                                 <!-- <div class="count">10</div> -->
                                                            </div>
                                                            <!-- <div class="message"><span>You:</span>The sample text here and this is the . . .</div> -->
                                                        </div>
                                                    </td>                                                    
                                                    <td class="data--date data-cell">
                                                        <button class="btn btn-success">View</button>                                                               
                                                    </td>                                            
                                                </tr>

                                                <tr class="data-row" data-href="#">
                                                    <td class="data--select data-cell">
                                                        <input class="form-check-input inquiry-check" id="12315780" type="checkbox" value="">
                                                    </td>
                                                    <td class="data--fav data-cell">
                                                        <label class="fav-btn">
                                                            <input type="checkbox">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star"></i>
                                                        </label>
                                                    </td>
                                                    <td class="data--name data-cell">
                                                        <div class="info-block">
                                                            <div class="header">
                                                                <div class="name">Https encryption</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="data--name data-cell">
                                                        <div class="info-block">
                                                            <div class="header">
                                                                <div class="name"> The webpage uses HTTPS encryption. 
                                                                    @if(isset(json_decode($project->seo_result)->https_encryption))
                                                                        @if(isset(json_decode($project->seo_result)->https_encryption->value))
                                                                            <a href="{{json_decode($project->seo_result)->https_encryption->value}}"><div class="sub-text">{{json_decode($project->seo_result)->https_encryption->value}}</div></a>
                                                                        @endif                                           
                                                                    @endif
                                                                </div>
                                                                 <!-- <div class="count">10</div> -->
                                                            </div>
                                                            <!-- <div class="message"><span>You:</span>The sample text here and this is the . . .</div> -->
                                                        </div>
                                                    </td>                                                    
                                                    <td class="data--date data-cell">
                                                        <button class="btn btn-success">View</button>                                                               
                                                    </td>                                            
                                                </tr>

                                                <tr class="data-row" data-href="#">
                                                    <td class="data--select data-cell">
                                                        <input class="form-check-input inquiry-check" id="12315780" type="checkbox" value="">
                                                    </td>
                                                    <td class="data--fav data-cell">
                                                        <label class="fav-btn">
                                                            <input type="checkbox">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star"></i>
                                                        </label>
                                                    </td>
                                                    <td class="data--name data-cell">
                                                        <div class="info-block">
                                                            <div class="header">
                                                                <div class="name">Plaintext email</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="data--name data-cell">
                                                        <div class="info-block">
                                                            <div class="header">
                                                                <div class="name"> The webpage does not contain any plaintext emails.
                                                                    @if(isset(json_decode($project->seo_result)->plaintext_email))
                                                                        @if(isset(json_decode($project->seo_result)->plaintext_email->value))
                                                                            <a href="{{json_decode($project->seo_result)->plaintext_email->value}}"><div class="sub-text">{{json_decode($project->seo_result)->https_encryption->value}}</div></a>
                                                                        @endif                                           
                                                                    @endif
                                                                </div>
                                                                 <!-- <div class="count">10</div> -->
                                                            </div>
                                                            <!-- <div class="message"><span>You:</span>The sample text here and this is the . . .</div> -->
                                                        </div>
                                                    </td>                                                    
                                                    <td class="data--date data-cell">
                                                        <button class="btn btn-success">View</button>                                                               
                                                    </td>                                            
                                                </tr>

                                                <tr class="data-row" data-href="#">
                                                    <td class="data--select data-cell">
                                                        <input class="form-check-input inquiry-check" id="12315780" type="checkbox" value="">
                                                    </td>
                                                    <td class="data--fav data-cell">
                                                        <label class="fav-btn">
                                                            <input type="checkbox">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star"></i>
                                                        </label>
                                                    </td>
                                                    <td class="data--name data-cell">
                                                        <div class="info-block">
                                                            <div class="header">
                                                                <div class="name">Email Blacklist</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="data--name data-cell">
                                                        <div class="info-block">
                                                            <div class="header">
                                                                <div class="name"> 
                                                                    @if($project->email_blacklist != null)
                                                                        @foreach(json_decode($project->email_blacklist) as $key => $blacklist)
                                                                            @if($key == 'blacklists')
                                                                                @if(count($blacklist) != 0)

                                                                                    Total: {{$blacklist_count['total_blacklist_count']}} | Ok: {{$blacklist_count['ok_count']}} | Listed: {{$blacklist_count['listed_count']}}
                                                                                
                                                                                @endif
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                </div>
                                                                 <!-- <div class="count">10</div> -->
                                                            </div>
                                                            <!-- <div class="message"><span>You:</span>The sample text here and this is the . . .</div> -->
                                                        </div>
                                                    </td>                                                    
                                                    <td class="data--date data-cell">
                                                        <a href="{{route('frontend.user.view_email_blacklist',$project->id)}}" class="btn btn-success">View</a>                                                               
                                                    </td>                                            
                                                </tr>


                                            </tbody>
                                        </table>
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