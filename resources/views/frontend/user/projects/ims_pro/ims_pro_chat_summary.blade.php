@extends('frontend.layouts.widget_ims_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/ims_pro.css')}}">


<section class="ims__section">
        @include('frontend.user.projects.includes.ims_sidebar')
            <div class="ims__main-col">
                @include('frontend.user.projects.includes.ims_navbar')
                
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
                                                <a class="breadcrumb-link breadcrumb-current">Chat Summery</a>
                                            </li>
                                        </ul>
                                    </div>
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
                                                        <a href="#" class="control-link">
                                                            <i class="bi bi-trash-fill"></i>
                                                            <div class="text">Delete</div>
                                                        </a>
                                                        <a href="#" class="control-link">
                                                            <i class="bi bi-three-dots"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="ims__data-table">
                                                    <table class="table table-borderless">
                                                        <thead>
                                                            <tr class="data-row">
                                                                <th class="data-title"></th>
                                                                <th class="data-title"></th>
                                                                <th class="data-title"></th>
                                                                <th class="data-title">Name</th>
                                                                <th class="data-title">Date</th>
                                                                <th class="data-title">Messenger Channel</th>                                                                              
                                                                <th class="data-title">Status</th>
                                                                <th class="data-title"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="data-row">
                                                                <td class="data--select data-cell">
                                                                    <input class="form-check-input"
                                                                        type="checkbox" value="">
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
                                                                            <div class="name">Rayan Perera</div>
                                                                            <div class="count">10</div>
                                                                        </div>
                                                                        <div class="message"><span>You:</span>The sample text here and this is the . . .</div>
                                                                    </div>
                                                                </td>
                                                                <td class="data--date data-cell">
                                                                    <div class="text">18, Feb 2022</div>
                                                                </td>  
                                                                <td class="data--chnnel data-cell">
                                                                    <div class="channel-block">
                                                                        <div class="icon">
                                                                            <img src="{{url('images/social_media_icons/whatsapp.png')}}" alt="">
                                                                        </div>
                                                                        <div class="name">WhatsApp</div>
                                                                    </div>
                                                                </td>     
                                                                <td class="data--status data-cell">
                                                                    <div class="status-block">
                                                                        <div class="indicator orange"></div>
                                                                        <div class="status">Pending</div>
                                                                    </div>
                                                                </td>
                                                                <td class="data--chat data-cell">
                                                                    <a href="#" class="chat-btn">
                                                                        <i class="bi bi-chat-dots"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>                                                                
                                                            <tr class="data-row">
                                                                <td class="data--select data-cell">
                                                                    <input class="form-check-input"
                                                                        type="checkbox" value="">
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
                                                                            <div class="name">Rayan Perera</div>
                                                                            <div class="count">10</div>
                                                                        </div>
                                                                        <div class="message"><span>You:</span>The sample text here and this is the . . .</div>
                                                                    </div>
                                                                </td>
                                                                <td class="data--date data-cell">
                                                                    <div class="text">18, Feb 2022</div>
                                                                </td>  
                                                                <td class="data--chnnel data-cell">
                                                                    <div class="channel-block">
                                                                        <div class="icon">
                                                                            <img src="{{url('images/social_media_icons/whatsapp.png')}}" alt="">
                                                                        </div>
                                                                        <div class="name">WhatsApp</div>
                                                                    </div>
                                                                </td>     
                                                                <td class="data--status data-cell">
                                                                    <div class="status-block">
                                                                        <div class="indicator orange"></div>
                                                                        <div class="status">Pending</div>
                                                                    </div>
                                                                </td>
                                                                <td class="data--chat data-cell">
                                                                    <a href="#" class="chat-btn">
                                                                        <i class="bi bi-chat-dots"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>                                                                
                                                            <tr class="data-row">
                                                                <td class="data--select data-cell">
                                                                    <input class="form-check-input"
                                                                        type="checkbox" value="">
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
                                                                            <div class="name">Rayan Perera</div>
                                                                            <div class="count">10</div>
                                                                        </div>
                                                                        <div class="message"><span>You:</span>The sample text here and this is the . . .</div>
                                                                    </div>
                                                                </td>
                                                                <td class="data--date data-cell">
                                                                    <div class="text">18, Feb 2022</div>
                                                                </td>  
                                                                <td class="data--chnnel data-cell">
                                                                    <div class="channel-block">
                                                                        <div class="icon">
                                                                            <img src="{{url('images/social_media_icons/whatsapp.png')}}" alt="">
                                                                        </div>
                                                                        <div class="name">WhatsApp</div>
                                                                    </div>
                                                                </td>     
                                                                <td class="data--status data-cell">
                                                                    <div class="status-block">
                                                                        <div class="indicator orange"></div>
                                                                        <div class="status">Pending</div>
                                                                    </div>
                                                                </td>
                                                                <td class="data--chat data-cell">
                                                                    <a href="#" class="chat-btn">
                                                                        <i class="bi bi-chat-dots"></i>
                                                                    </a>
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
            </div>
        
    </section>
    

@endsection



@push('after-scripts')



@endpush