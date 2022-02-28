@extends('frontend.layouts.widget_ims_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')


<section class="ims__section">
        @include('frontend.user.projects.includes.ims_sidebar')
            <div class="ims__main-col">
                @include('frontend.user.projects.includes.ims_navbar')
                
                <div class="row g-0">
                    <div class="col">
                        <!-- Content goes here -->
                        <div class="ims__body-container" id="ims__main-panel">
                            <div class="ims__inner-container">
                                <div class="row g-0">
                                    <div class="col">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="{{url('/')}}" class="breadcrumb-link">Home</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#" class="breadcrumb-link breadcrumb-arrow"><i
                                                        class="bi bi-chevron-right"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#" class="breadcrumb-link">Chat</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#" class="breadcrumb-link breadcrumb-arrow"><i
                                                        class="bi bi-chevron-right"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#" class="breadcrumb-link">Conversations</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#" class="breadcrumb-link breadcrumb-arrow"><i
                                                        class="bi bi-chevron-right"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a class="breadcrumb-link breadcrumb-current">Inbox</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col">
                                        <section class="coversation-section ims__panel" id="ims__conversation">
                                            <div class="inbox--section ims__panel" id="ims__inbox">
                                              
                                                <div class="row g-0 justify-content-evenly">
                                                    <div class="col-5">
                                                        <div class="ims__action-panel">
                                                            <div class="title">Action Panel</div>
                                                            <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    <div class="action-block">
                                                                        <div class="label">Action by</div>
                                                                        <div class="action">
                                                                            <div class="text">Action by admin</div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="action-block">
                                                                        <div class="label">Action Taken</div>
                                                                        <div class="action data--action-taken">
                                                                            <div class="icon-block" id="ims__icon-block">
                                                                                <i class="bi call bi-telephone-fill"></i>
                                                                                <i class="bi mail bi-envelope-fill"></i>
                                                                                <i class="bi not-responding bi-dash-circle-fill"></i>
                                                                                <i class="bi meeting bi-camera-video-fill"></i>
                                                                                <i class="bi message bi-chat-right-text-fill"></i>
                                                                                <i class="bi other bi-flag-fill"></i>
                                                                            </div>
                                                                            <select class="form-select" id="data_action-select">
                                                                                <option selected>Choose...</option>
                                                                                <option value="1">Call
                                                                                </option>
                                                                                <option value="2">Mail
                                                                                </option>
                                                                                <option value="3">Not responding
                                                                                </option>
                                                                                <option value="4">Meeting</option>
                                                                                <option value="5">Message</option>
                                                                                <option value="6">Other</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="action-block">
                                                                        <div class="label">Comment</div>
                                                                        <div class="action">
                                                                            <input type="text" class="form-control" placeholder="This is the sample comment ">
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="action-block">
                                                                        <div class="label">Status</div>
                                                                        <div class="action data--Status">
                                                                            <div class="indicator"></div>
                                                                            <select class="form-select" id="data_status-select">
                                                                                <option selected>Choose...</option>
                                                                                <option value="1">Deal close
                                                                                    successfully </option>
                                                                                <option value="2">Pending</option>
                                                                                <option value="3">Not responding
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="action-block">
                                                                        <div class="label">Manager Comments</div>
                                                                        <div class="action">
                                                                            <input type="text" class="form-control" placeholder="This is the sample comment ">
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="action-block">
                                                                        <div class="label">Report</div>
                                                                        <div class="action">
                                                                            <a href="#" class="download-btn">
                                                                                <i class="bi bi-download"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="ims__chat-window">
                                                            <div class="header">
                                                                <div class="profile-block">
                                                                    <div class="image-block">
                                                                        <img src="{{url('img/profile_avatar.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="profile">
                                                                        <div class="name">{{$ims_client->client_name}}</div>
                                                                        <div class="status">Online</div>
                                                                    </div>
                                                                </div>
                                                                <div class="control-block">
                                                                    <a href="#" class="ctrl-call">
                                                                        <i class="bi bi-telephone-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="ctrl-bookmark">
                                                                        <i class="bi bi-bookmark-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="ctrl-delete">
                                                                        <i class="bi bi-trash-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="ctrl-option">
                                                                        <i class="bi bi-three-dots-vertical"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="msg-body">
                                                                <div class="received-msg">
                                                                    <!-- <div class="title">How to integrate Widget</div> -->
                                                                    <div class="message">
                                                                        {{$ims_client->message}}
                                                                    </div>
                                                                    <div class="time">{{ $ims_client->created_at->format('d M') }} {{date('h:i A', strtotime($ims_client->created_at))}}</div>
                                                                </div> 
                                                            </div>
                                                            <div class="footer">
                                                                <div class="text-input">
                                                                    <div class="input-group">
                                                                        <span class="input-group-text">
                                                                            <a href="#" class="input-att-btn">
                                                                                <i class="bi bi-paperclip"></i>
                                                                            </a>
                                                                        </span>
                                                                        <input type="text" class="form-control" placeholder="Type your message here...">
                                                                        <span class="input-group-text">
                                                                            <a href="#" class="cam-btn">
                                                                                <i class="bi bi-camera"></i>
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="voice-input">
                                                                    <a href="#" class="voice-input-btn">
                                                                        <i class="bi bi-mic-fill"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>                                   
                                            
                                        </section>
                                        
                                       
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