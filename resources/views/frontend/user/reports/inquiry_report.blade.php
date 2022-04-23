@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/reports.css')}}">
<link rel="stylesheet" href="{{url('css/projects.css')}}">
<link rel="stylesheet" href="{{url('css/inquiry_report.css')}}">
   

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

                <div class="row g-0">
                    <div class="ims__control-panel">
                        <div class="row g-0">
                            <div class="col">
                                <div class="control-block">
                                    <div class="controls">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                value="" id="imsSelectAll">
                                            <label class="form-check-label"
                                                for="imsSelectAll">
                                                <i class="bi bi-chevron-down"></i>
                                            </label>
                                        </div>
                                        <a href="#"
                                            class="ims__refresh control-link active">
                                            <i class="bi bi-arrow-clockwise"></i>
                                        </a>
                                    </div>
                                    <div class="actions">
                                        <a href="#" class="control-link">
                                            <i class="bi bi-send-fill"></i>
                                            <div class="text">Bulk Reply</div>
                                        </a>
                                        <a href="#" class="control-link">
                                            <i class="bi bi-record-circle"></i>
                                            <div class="text">Assign</div>
                                        </a>
                                        <a href="#" class="control-link">
                                            <i class="bi bi-eye-fill"></i>
                                            <div class="text">Mark as read</div>
                                        </a>
                                        <a href="#" class="control-link">
                                            <i class="bi bi-tags-fill"></i>
                                            <div class="text">Labels</div>
                                        </a>
                                        <a href="#" class="control-link">
                                            <i class="bi bi-volume-mute-fill"></i>
                                            <div class="text">Mute</div>
                                        </a>
                                        <a href="#" class="control-link">
                                            <i class="bi bi-archive-fill"></i>
                                            <div class="text">Archive</div>
                                        </a>
                                        <a href="#" class="control-link" data-delete-modal data-bs-toggle="modal" data-bs-target="#deleteInquiry">
                                            <i class="bi bi-trash-fill"></i>
                                            <div class="text">Delete</div>
                                        </a>
                                        <a href="#" class="control-link">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                    </div>
                                    <a href="#" class="btn-status-report" type="button" data-bs-toggle="modal" data-bs-target="#reportDownload">
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
                                                            <div class="name">Name</div>
                                                            <div class="count">10</div>
                                                        </div>
                                                        <div class="message"><span>You:</span>The sample text here and this is the . . .</div>
                                                    </div>
                                                </td>
                                                <td class="data--date data-cell">
                                                    <div class="text">15/04/2022</div>
                                                </td>  
                                                <td class="data--chnnel data-cell">
                                                    <div class="channel-block">
                                                        <div class="icon">
                                                            <img src="{{url('images/social_media_icons/whatsapp.png')}}" alt="">
                                                        </div>
                                                        <div class="name">WhatsApp</div>
                                                    </div>
                                                </td>
                                                <td class="data--date data-cell">
                                                    <div class="text">Manager</div>
                                                </td>      
                                                <td class="data--status data-cell">
                                                    <div class="status-block">
                                                        <div class="indicator orange"></div>
                                                        <div class="status">Pending</div>
                                                    </div>
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