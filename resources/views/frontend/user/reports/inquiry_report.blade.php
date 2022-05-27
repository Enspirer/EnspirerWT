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
                        <li class="breadcrumb-item"><span>Inquiry Report</span></li>
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
                                    <img src="{{uploaded_asset(json_decode($project->settings)->logo)}}" alt="" width="100%">
                                @else
                                    <img src="https://fakeimg.pl/250x100/" alt="" width="100%">
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
                                                <img src="{{url('images/dashboard/main/widgetLite-icon.png')}}" alt="">
                                            @elseif($project->selected_package == 'All In One Widget + IMS Pro')
                                                <img src="{{url('images/dashboard/main/widgetPlus-icon.png')}}" alt="">
                                            @elseif($project->selected_package == 'Optimizer')
                                                <img src="{{url('images/dashboard/main/optimizer-icon.png')}}" alt="">
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

                @if(count($inquiry_status) == 0)
                    @include('frontend.includes.not_found',[
                        'not_found_title' => 'Data not found',
                        'not_found_description' => null,
                        'not_found_button_caption' => null
                    ])
                @else
                    <div class="row g-0 mt-5">
                        <div class="ims__control-panel">
                            <div class="row g-0">
                                <div class="col">
                                    <div class="control-block">
                                        <div class="controls">
                                                                                       
                                        </div>
                                        
                                        <a href="{{ url('inquiriesPDF',$project_id) }}" class="btn-status-report">
                                            <i class="bi bi-download"></i>
                                            <div class="text">Status Report</div>
                                        </a>
                                    </div>
                                    <div class="ims__data-table">
                                        <table class="table table-borderless" id="inquirySummery">
                                            <thead>
                                                <tr class="data-row">
                                                    <th class="data-title"></th>
                                                    <th class="data-title"></th>
                                                    <th class="data-title"></th>
                                                    <th class="data-title">Name</th>
                                                    <th class="data-title">Date</th>
                                                    <th class="data-title">Messenger Channel</th>                                                                              
                                                    <th class="data-title">Responsible</th>
                                                    <th class="data-title">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($inquiry_status as $key => $inquiry)
                                                    <tr class="data-row" data-href="#">
                                                        <td class="data--select data-cell">
                                                            <input class="form-check-input inquiry-check"
                                                            id="12315780" type="checkbox" value="">
                                                        </td>
                                                        <td class="data--fav data-cell">
                                                            <label class="fav-btn">
                                                                <input type="checkbox">
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star"></i>
                                                            </label>
                                                        </td>
                                                        <td class="data--pic data-cell">
                                                            <img src="{{url('img/profile_avatar.jpg')}}" alt="">
                                                        </td>
                                                        <td class="data--name data-cell">
                                                            <div class="info-block">
                                                                <div class="header">
                                                                    @if($inquiry->assign_user == null)
                                                                        <div class="name">{{$inquiry->phone_number}}</div>
                                                                    @else
                                                                        <div class="name">{{$inquiry->assign_user}}</div>
                                                                    @endif
                                                                    <!-- <div class="count">10</div> -->
                                                                </div>
                                                                <!-- <div class="message"><span>You:</span>The sample text here and this is the . . .</div> -->
                                                            </div>
                                                        </td>
                                                        <td class="data--date data-cell">
                                                            <div class="text">{{$inquiry->created_at->format('d M Y')}}</div>
                                                        </td>  
                                                        <td class="data--chnnel data-cell">
                                                            @if($inquiry->assign_user_type == 'WhatsApp')
                                                                <div class="channel-block">
                                                                    <div class="icon">
                                                                        <img src="{{url('images/social_media_icons/whatsapp.png')}}" alt="">
                                                                    </div>
                                                                    <div class="name">WhatsApp</div>
                                                                </div>
                                                            @elseif($inquiry->assign_user_type == 'Messenger')
                                                                <div class="channel-block">
                                                                    <div class="icon">
                                                                        <img src="{{url('images/social_media_icons/messenger.png')}}" alt="">
                                                                    </div>
                                                                    <div class="name">Messenger</div>
                                                                </div>
                                                            @elseif($inquiry->assign_user_type == 'Telegram')
                                                                <div class="channel-block">
                                                                    <div class="icon">
                                                                        <img src="{{url('images/social_media_icons/telegram.png')}}" alt="">
                                                                    </div>
                                                                    <div class="name">Telegram</div>
                                                                </div>
                                                            @elseif($inquiry->assign_user_type == 'Line')
                                                                <div class="channel-block">
                                                                    <div class="icon">
                                                                        <img src="{{url('images/social_media_icons/line.png')}}" alt="">
                                                                    </div>
                                                                    <div class="name">Line</div>
                                                                </div>
                                                            @elseif($inquiry->assign_user_type == 'Viber')
                                                                <div class="channel-block">
                                                                    <div class="icon">
                                                                        <img src="{{url('images/social_media_icons/viber.png')}}" alt="">
                                                                    </div>
                                                                    <div class="name">Viber</div>
                                                                </div>
                                                            @elseif($inquiry->assign_user_type == 'Tawkto')
                                                                <div class="channel-block">
                                                                    <div class="icon">
                                                                        <img src="{{url('images/social_media_icons/tawkto.png')}}" alt="">
                                                                    </div>
                                                                    <div class="name">Tawkto</div>
                                                                </div>
                                                            @endif
                                                            
                                                        </td>
                                                        <td class="data--date data-cell">
                                                            <div class="text">{{$inquiry->role}}</div>
                                                        </td>      
                                                        <td class="data--status data-cell">
                                                            <div class="status-block">
                                                                <!-- <div class="indicator green"></div> -->
                                                                <div class="status">{{$inquiry->status}}</div>
                                                            </div>
                                                        </td>                                                
                                                    </tr> 
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>


  
    
@endsection


@push('after-scripts')




@endpush