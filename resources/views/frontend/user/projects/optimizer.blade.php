@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/analytics.css')}}">

@include('frontend.includes.mobile_nav')  

<section id="sectionMainWindow">
    @include('frontend.includes.sidebar')

    <div id="sectionBody">
        @include('frontend.includes.nav')

        <!-- Content goes here -->


            <div class="row g-0">
                <div class="section-content">
                    <div class="section-container">

                        <!-- Section Reports Main End -->

                        <div class="breadcrumb-block">
                            <ul class="breadcrumb mb-5">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active">
                                    {{App\Models\Projects::where('id',$project_id)->first()->name}}</li>
                            </ul>
                        </div>

                        @include('frontend.user.projects.includes.card_section')

                        <div class="title" style="font-size: 22px;color: #333;">Tallentor Optimizer Features</div>
                        @if($project_optimizer != null)
                            @can('ims_pro')
                                <div class="imsPro-section">
                                    <div class="inner-wrapper">
                                        <div class="subtitle">Go to your</div>
                                        <div class="title">IMS Pro</div>
                                        <div class="option-block">
                                            <div class="option">
                                                <i class="bi bi-check-circle-fill"></i>
                                                <div class="text">Realtime View + Invites</div>
                                            </div>
                                            <div class="option">
                                                <i class="bi bi-check-circle-fill"></i>
                                                <div class="text">Heatmaps</div>
                                            </div>
                                            <div class="option">
                                                <i class="bi bi-check-circle-fill"></i>
                                                <div class="text">Session Recording</div>
                                            </div>
                                            <div class="option">
                                                <i class="bi bi-check-circle-fill"></i>
                                                <div class="text">Analytics Center</div>
                                            </div>
                                        </div>
                                        <a href="{{ route('frontend.user_widget.ims_pro_media_scan', $project_id) }}" class="ims-btn">IMS Pro</a>
                                    </div>
                                </div>
                            @endcan
                        @else


                        @endif


                        @if(App\Models\Projects::where('id',$project_id)->where('selected_package','Optimizer')->first() != null)
                            @can('realtime')
                                <div class="realtime-table">
                                    <div class="header">
                                        <div class="title">Realtime View</div>
                                        <!-- <div class="filter-block">
                                            <div class="filter-group">
                                                <div class="dropdown filter-dropdown status-drop">
                                                    <a class="filter-button status-btn" href="#" role="button" id="statusDrop" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Everyone
                                                        <i class="bi bi-chevron-down"></i>
                                                    </a>

                                                    <ul class="dropdown-menu" aria-labelledby="statusDrop">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </div>
                                                <div class="dropdown filter-dropdown date-drop">
                                                    <a class="filter-button date-btn" href="#" role="button" id="dateDrop" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Today
                                                        <i class="bi bi-chevron-down"></i>
                                                    </a>

                                                    <ul class="dropdown-menu" aria-labelledby="dateDrop">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="filter-group">
                                                <div class="input-group">
                                                    <input type="search" class="form-control" placeholder="Search">
                                                    <i class="bi bi-search"></i>
                                                </div>
                                                <div class="dropdown filter-dropdown filter-drop">
                                                    <a class="filter-button filter-btn" href="#" role="button" id="filterDrop" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-funnel"></i>
                                                    </a>

                                                    <ul class="dropdown-menu" aria-labelledby="filterDrop">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="body">
                                        @if(count($visitors_count) != 0)
                                            <table class="table align-middle">
                                                <thead class="tbl-header">
                                                <tr class="tbl-row">
                                                    <td class="th-col"></td>
                                                    <td class="th-col">Country</td>
                                                    <td class="th-col">Status</td>
                                                    <td class="th-col">Key Event</td>
                                                    <td class="th-col">Pages</td>
                                                    <td class="th-col"></td>
                                                </tr>
                                                </thead>
                                                <input type="hidden" name="visitor_proj" id="visitor_proj" value="{{$project_id}}">

                                                <tbody class="tbl-body" id="visitors_record">

                                                @foreach($visitors_count as $visitors)
                                                    <tr class="tbl-row">
                                                        <td class="tb-col rt-flag">
                                                            <img src="https://flagcdn.com/w40/{{strtolower($visitors->iso_code)}}.png" >
                                                        </td>
                                                        <td class="tb-col rt-country">
                                                            {{$visitors->ip_address}}
                                                        </td>
                                                        <td class="tb-col rt-status">
                                                            <div class="status-block">
                                                                <i class="bi bi-circle-fill"></i>
                                                                <div class="text">Online</div>
                                                            </div>
                                                        </td>
                                                        <td class="tb-col rt-keyEvent">
                                                            <span class="event yellow">Product Viewed</span>
                                                            <span class="event blue">Cart Viewed</span>
                                                            <span class="event purple">Top CTA</span>
                                                        </td>
                                                        <td class="tb-col rt-pages">
                                                            <div class="pages-count">10</div>
                                                        </td>
                                                        <td class="tb-col rt-invite">
                                                            @if($visitors->chat_invite == null)
                                                                <form action="{{route('user_optimizer.realtime_invite')}}" method="post" enctype="multipart/form-data">
                                                                    {{csrf_field()}}

                                                                    <input type="hidden" name="project_id" value="{{$project_id}}">
                                                                    <input type="hidden" name="visitors_id" value="{{$visitors->id}}">
                                                                    <button type="submit" style="border: none;" class="tbl-btn btn-invite">
                                                                        <img src="{{url('images/dashboard/optimizer/invite-icon.png')}}" >
                                                                        <div class="text">Invite</div>
                                                                    </button>
                                                                </form>
                                                            @else
                                                                <button type="submit" style="border: none;" class="tbl-btn btn-invite" disabled>
                                                                    <img src="{{url('images/dashboard/optimizer/invite-icon.png')}}" >
                                                                    <div class="text">Invited</div>
                                                                </button>
                                                            @endif
                                                        </td>
                                                        <input type="hidden" name="visitor_project_id" id="visitor_project_id" value="{{$visitors->project_id}}">
                                                    </tr>
                                                @endforeach
                                                <!-- <tr class="tbl-row offline">
                                                    <td class="tb-col rt-flag">
                                                        <img src="https://flagicons.lipis.dev/flags/4x3/sg.svg" >
                                                    </td>
                                                    <td class="tb-col rt-country">
                                                        Singapore
                                                    </td>
                                                    <td class="tb-col rt-status">
                                                        <div class="status-block">
                                                            <i class="bi bi-circle"></i>
                                                            <div class="text">Offline</div>
                                                        </div>
                                                    </td>
                                                    <td class="tb-col rt-keyEvent">
                                                        <span class="event yellow">Product Viewed</span>
                                                        <span class="event blue">Cart Viewed</span>
                                                        <span class="event purple">Top CTA</span>
                                                    </td>
                                                    <td class="tb-col rt-pages">
                                                        <div class="pages-count">10</div>
                                                    </td>
                                                    <td class="tb-col rt-invite">
                                                        <a href="#" class="tbl-btn btn-invite">
                                                            <img src="{{url('images/dashboard/optimizer/invite-icon.png')}}" >
                                                            <div class="text">Invite</div>
                                                        </a>
                                                    </td>
                                                </tr> -->
                                                </tbody>
                                            </table>
                                        @else
                                            <table class="table align-middle">
                                                <thead class="tbl-header">
                                                <tr class="tbl-row">
                                                    <td class="th-col"></td>
                                                    <td class="th-col">Country</td>
                                                    <td class="th-col">Status</td>
                                                    <td class="th-col">Key Event</td>
                                                    <td class="th-col">Pages</td>
                                                    <td class="th-col"></td>
                                                </tr>
                                                </thead>
                                                <input type="hidden" name="visitor_proj" id="visitor_proj" value="{{$project_id}}">

                                                <tbody class="tbl-body" id="visitors_record">
                                                <tr class="tbl-row">
                                                    <td class="tb-col" colspan="6">
                                                        <img src="{{url('images/dashboard/optimizer/not_found.png')}}"  class="realtime_notfound">
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        @endif
                                    </div>
                                </div>
                            @endcan
                        @endif

                        @if($project_optimizer != null)
                            <div class="subcription-block activated">
                                <div class="active-overlay animate__animated animate__fadeIn">
                                    <div class="button-block">
                                        <div class="btn-group">
                                            @can('ims_pro')
                                                <a href="{{ route('frontend.user_widget.ims_pro_media_scan', $project_id) }}" type="button" class="act-btn ims-pro">
                                                    <i class="bi bi-file-earmark-text"></i>
                                                    <div class="text">IMS Pro</div>
                                                </a>
                                            @endcan
                                            <a href="{{ route('frontend.user.user_widget.settings', $all_in_one->id) }}" type="button" class="act-btn">
                                                <i class="bi bi-gear"></i>
                                                <div class="text">Widget Settings</div>
                                            </a>
                                            <a href="{{ route('frontend.user.user_widget.settings', $widgetlist->id) }}" type="button" class="act-btn">
                                                <i class="bi bi-gear"></i>
                                                <div class="text">IMS Settings</div>
                                            </a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#get_widget_Modal{{$widgetlist->id}}" type="button" class="act-btn">
                                                <i class="bi bi-code-slash"></i>
                                                <div class="text">Add Widget Script</div>
                                            </a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#analyticsModal" type="button" class="act-btn">
                                                <i class="bi bi-code-slash"></i>
                                                <div class="text">Add Analytics Script</div>
                                            </a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="{{ route('frontend.user.user_optimizer.destroy', $project_optimizer->id) }}" data-bs-toggle="modal" data-bs-target="#deleteFavorite" type="button" class="act-btn delete">
                                                <i class="bi bi-trash"></i>
                                                <div class="text">Delete</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-block">
                                    <div class="widget-block">
                                        <img src="{{url('images/dashboard/subscriptions/ims-pro.png')}}"  class="widget-img">
                                        <div class="content">
                                            <div class="title">Desktop</div>
                                            <ul class="options">
                                                <li class="list-item">
                                                    <i class="bi green bi-check-circle-fill"></i>
                                                    <div class="text">Realtime View + Invites</div>
                                                </li>
                                                <li class="list-item">
                                                    <i class="bi green bi-check-circle-fill"></i>
                                                    <div class="text">Analytics Center</div>
                                                </li>
                                                <li class="list-item">
                                                    <i class="bi green bi-check-circle-fill"></i>
                                                    <div class="text">SEO Reports</div>
                                                </li>
                                                <li class="list-item">
                                                    <i class="bi green bi-check-circle-fill"></i>
                                                    <div class="text">Session Recording</div>
                                                </li>
                                                <li class="list-item">
                                                    <i class="bi green bi-check-circle-fill"></i>
                                                    <div class="text">Heatmaps</div>
                                                </li>
                                                <li class="list-item">
                                                    <i class="bi green bi-check-circle-fill"></i>
                                                    <div class="text">Security</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="widget-block">
                                        <img src="{{url('images/dashboard/subscriptions/mobile-app.png')}}"  class="widget-img">
                                        <div class="content">
                                            <div class="title">Mobile</div>
                                            <ul class="options">
                                                <li class="list-item">
                                                    <i class="bi green bi-check-circle-fill"></i>
                                                    <div class="text">Realtime View</div>
                                                </li>
                                                <li class="list-item">
                                                    <i class="bi green bi-check-circle-fill"></i>
                                                    <div class="text">Visitor Invite</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-block">
                                    <a href="#" class="sub-btn" data-bs-toggle="modal" data-bs-target="#actOptimizer">
                                        <i class="bi bi-plus"></i>
                                        <div class="text">Activated</div>
                                    </a>
                                </div>
                            </div>
                        @else
                            <div class="subcription-block">
                                <div class="active-overlay animate__animated animate__fadeIn">
                                    <div class="button-block">
                                        <div class="btn-group">
                                            <button type="button" class="act-btn ims-lite">
                                                <i class="bi bi-file-earmark-text"></i>
                                                <div class="text">IMS Lite</div>
                                            </button>
                                            <button type="button" class="act-btn">
                                                <i class="bi bi-gear"></i>
                                                <div class="text">Settings</div>
                                            </button>
                                            <button type="button" class="act-btn">
                                                <i class="bi bi-code-slash"></i>
                                                <div class="text">Add Script</div>
                                            </button>
                                        </div>
                                        <div class="btn-group">
                                            <a type="button" class="act-btn delete">
                                                <i class="bi bi-trash"></i>
                                                <div class="text">Delete</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-block">
                                    <div class="widget-block">
                                        <img src="{{url('images/dashboard/subscriptions/ims-pro.png')}}"  class="widget-img">
                                        <div class="content">
                                            <div class="title">Desktop</div>
                                            <ul class="options">
                                                <li class="list-item">
                                                    <i class="bi green bi-check-circle-fill"></i>
                                                    <div class="text">Realtime View + Invites</div>
                                                </li>
                                                <li class="list-item">
                                                    <i class="bi green bi-check-circle-fill"></i>
                                                    <div class="text">Analytics Center</div>
                                                </li>
                                                <li class="list-item">
                                                    <i class="bi green bi-check-circle-fill"></i>
                                                    <div class="text">SEO Reports</div>
                                                </li>
                                                <li class="list-item">
                                                    <i class="bi green bi-check-circle-fill"></i>
                                                    <div class="text">Session Recording</div>
                                                </li>
                                                <li class="list-item">
                                                    <i class="bi green bi-check-circle-fill"></i>
                                                    <div class="text">Heatmaps</div>
                                                </li>
                                                <li class="list-item">
                                                    <i class="bi green bi-check-circle-fill"></i>
                                                    <div class="text">Security</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="widget-block">
                                        <img src="{{url('images/dashboard/subscriptions/mobile-app.png')}}"  class="widget-img">
                                        <div class="content">
                                            <div class="title">Mobile</div>
                                            <ul class="options">
                                                <li class="list-item">
                                                    <i class="bi green bi-check-circle-fill"></i>
                                                    <div class="text">Realtime View</div>
                                                </li>
                                                <li class="list-item">
                                                    <i class="bi green bi-check-circle-fill"></i>
                                                    <div class="text">Visitor Invite</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-block">
                                    <a href="#" class="sub-btn" data-bs-toggle="modal" data-bs-target="#actOptimizer">
                                        <i class="bi bi-plus"></i>
                                        <div class="text">Activate</div>
                                    </a>
                                </div>
                            </div>
                        @endif

                        @include('frontend.user.projects.dialogs.widget_source')
                    </div>
                </div>
            </div>
    </div>
</section>

<div class="modal fade plan-modal premium" id="actOptimizer" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Widget Explorer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="inner-wrapper">
                    <div class="content-block">
                        <div class="label">The Best</div>
                        <div class="header">
                            <div class="text-block">
                                <div class="plan">Executive</div>
                                <div class="fee">$ 15.00 <span>/ month</span></div>
                            </div>
                            <img src="{{url('images/dashboard/subscriptions/plan-icon.png')}}" >
                        </div>
                        <div class="option-block">
                            <ul class="options desktop">
                                <div class="device">Desktop</div>
                                <li class="list-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <div class="text">All in one Widgets</div>
                                </li>
                                <li class="list-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <div class="text">Real Time Visitors</div>
                                </li>
                                <li class="list-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <div class="text">Analytics Center </div>
                                </li>
                                <li class="list-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <div class="text">Security</div>
                                </li>
                            </ul>
                            <ul class="options mobile">
                                <div class="device">Mobile</div>
                                <li class="list-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <div class="text">Realtime View</div>
                                </li>
                                <li class="list-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <div class="text">Session View</div>
                                </li>
                                <li class="list-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <div class="text">Invite Site User</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="button-block">
                        <a href="{{route('frontend.user.paypal.index',[3,$project_id])}}" type="button" class="widget-btn btn-fill">Buy Now</a>
                        @if(App\Models\Projects::where('id',$project_id)->where('selected_package','Optimizer')->first() == null)
                            <form action="{{route('frontend.user.user_optimizer.store')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input type="hidden" name="project_id" value="{{$project_id}}">
                                <button type="submit" class="widget-btn btn-outline">Free Trial</button>
                            </form>
                        @else
                            <button type="submit" class="widget-btn btn-outline" disabled>Free Trial</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade widget-explorer" id="createWidgetModal" tabindex="-1"
    aria-labelledby="createWidgetModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card">
                <div class="card-header">
                    <h5 class="modal-title" id="createWidgetModalLabel">Widget Explorer</h5>
                    <button type="button" class="btn-close-modal" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>
                <div class="card-body">
                    <div class="block-1">
                        <div class="row g-0">
                            <form action="{{route('frontend.user.user_widget.store')}}"
                                method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="inner-wrapper">
                                    <div class="col">
                                        <div class="row g-0 align-items-center justify-content-between">
                                            <div class="col-7">
                                                <div class="header">
                                                    <span class="title">Whatsapp Chat</span>
                                                </div>
                                                <p class="body-text">Give users an opportunity
                                                    to contact you on WhatsApp straight from
                                                    your website.
                                                </p>
                                                <div class="button-block">
                                                    @if(App\Models\Widgets::where('project_id',$project_id)->where('widget_type','Whatsapp Chat')->first() == null)
                                                        <input type="hidden" name="project_id" value="{{$project_id}}">
                                                        <input type="hidden" name="widget_type" value="Whatsapp Chat">
                                                        <button type="submit" class="btn-whatsapp"></i>Create Widget</button>
                                                    @else
                                                        <button type="submit" class="btn-whatsapp" disabled>Already Installed</button>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="whatsapp-feature-block">
                                                    <img src="{{url('images/whatsapp (1).png')}}" >
                                                    <div class="title">WhatsApp Chat</div>
                                                    <div class="subtitle">Entertainment</div>
                                                    <div class="star-rating">
                                                        <i class="bi active bi-star"></i>
                                                        <i class="bi active bi-star"></i>
                                                        <i class="bi active bi-star"></i>
                                                        <i class="bi active bi-star"></i>
                                                        <i class="bi bi-star"></i>
                                                    </div>
                                                    <div class="pricing">Free</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col mt-5">
                                        <div class="row g-0 align-items-center justify-content-between">
                                            <div class="col-7">
                                                <div class="header">
                                                    <span class="title">All-in-One Chat</span>
                                                </div>
                                                <p class="body-text">Let users chat with you on Facebook Messenger, WhatsApp, Telegram, etc.</p>
                                                <div class="button-block">
                                                    @if(App\Models\Widgets::where('project_id',$project_id)->where('widget_type','All-in-One Chat')->first() == null)
                                                        <input type="hidden" name="project_id" value="{{$project_id}}">
                                                        <input type="hidden" name="widget_type" value="All-in-One Chat">
                                                        <button type="submit" class="btn-whatsapp"></i>Create Widget</button>
                                                    @else
                                                        <button type="submit" class="btn-whatsapp" disabled>Already Installed</button>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="whatsapp-feature-block">
                                                    <img src="{{url('images/social_media_icons/chat.png')}}" >
                                                    <div class="title">All-in-One Chat</div>
                                                    <div class="subtitle">Entertainment</div>
                                                    <div class="star-rating">
                                                        <i class="bi active bi-star"></i>
                                                        <i class="bi active bi-star"></i>
                                                        <i class="bi active bi-star"></i>
                                                        <i class="bi active bi-star"></i>
                                                        <i class="bi bi-star"></i>
                                                    </div>
                                                    <div class="pricing">Free</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col mt-5">
                                        <div class="row g-0 align-items-center justify-content-between">
                                            <div class="col-7">
                                                <div class="header">
                                                    <span class="title">IMS Pro</span>
                                                </div>
                                                <p class="body-text">Let users chat with you on Facebook Messenger, WhatsApp, Telegram, etc.</p>
                                                <div class="button-block">
                                                    @if(App\Models\Widgets::where('project_id',$project_id)->where('widget_type','IMS Pro')->first() == null)
                                                        <input type="hidden" name="project_id" value="{{$project_id}}">
                                                        <input type="hidden" name="widget_type" value="IMS Pro">
                                                        <button type="submit" class="btn-whatsapp"></i>Create Widget</button>
                                                    @else
                                                        <button type="submit" class="btn-whatsapp" disabled>Already Installed</button>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="whatsapp-feature-block">
                                                    <img src="{{url('images/social_media_icons/ims-logo.png')}}" style="width:80px;" >
                                                    <div class="title">IMS Pro</div>
                                                    <div class="subtitle">Entertainment</div>
                                                    <div class="star-rating">
                                                        <i class="bi active bi-star"></i>
                                                        <i class="bi active bi-star"></i>
                                                        <i class="bi active bi-star"></i>
                                                        <i class="bi active bi-star"></i>
                                                        <i class="bi bi-star"></i>
                                                    </div>
                                                    <div class="pricing">Free</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@foreach(\App\Models\Widgets::where('project_id',$project_id)->get() as $widgetlist)

<!-- Modal -->
<div class="modal fade get_widget_Modal" id="get_widget_Modal{{$widgetlist->id}}" tabindex="-1" role="dialog" aria-labelledby="get_widget_Lable" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <img src="{{url('images/Group 389.png')}}" >
                <h5 class="modal-title" id="get_widget_Lable">Add the widget to your website</h5>
                <button type="button" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close">
                <i class="bi bi-x-lg"></i>
                </button>
            </div>
            <div class="modal-body">
                <p class="text">Copy and paste this code into desired place of your website (HTML editor, website template, theme, etc)</p>
                <code>
                    &lt;div id="{{$widgetlist->widget_key}}"&gt;&lt;/div&gt; <br>
                    &lt;script src="{{url('')}}/whatsapp_widget/{{$widgetlist->id}}/tallentorw.js"&gt;&lt;/script&gt;
                </code>
            </div>
            <div class="modal-footer">
                <a href="{{route('frontend.user.project.chat',$project_id)}}" class="modal-btn">I have installed the code</a>
            </div>
        </div>
    </div>
</div>


<div class="modal fade get_widget_Modal" id="analyticsModal" tabindex="-1" role="dialog" aria-labelledby="get_widget_Lable" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <img src="{{url('images/Group 389.png')}}" >
                <h5 class="modal-title" id="get_widget_Lable">Get analytics of your Website</h5>
                <button type="button" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
            <div class="modal-body">
                <p class="text">Copy and paste this code into desired place of your website (HTML editor, website template, theme, etc)</p>
                <code>
                    &lt;div id="{{$widgetlist->widget_key}}"&gt;&lt;/div&gt; <br>
                    &lt;script data-host="https://tallentor.com" data-dnt="false" src="https://tallentor.com/js/script_tracker.js" id="ZwSg9rf6GA" async defer&gt;&lt;/script&gt;
                </code>
            </div>
            <div class="modal-footer">
                <a href="#" class="modal-btn">I have installed the code</a>
            </div>
        </div>
    </div>
</div>
@endforeach


<div class="modal fade dashboard-modal delete-modal" id="deleteFavorite" tabindex="-1" aria-labelledby="deleteFavoriteLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="title">
                <h3 class="modal-title">Delete Optimizer ?</h3>
                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#fff,secondary:#fff" style="width:60px;height:60px"> </lord-icon></div>
                <button type="button" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
            </div>
            <div class="modal-footer">
                <div class="text-block">
                Do you want to delete this?
                </div>
                <div class="button-block">
                    <a type="button" class="btn btn-close btn-secondary" data-bs-dismiss="modal">Close</a>
                    <a href="" class="btn btn-delete btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>


@if(\Session::has('success') )

<div class="modal fade" id="overlay" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="title">
                    <h3 class="modal-title" >Created Successfully!</h3>
                    <i class="bi bi-check-circle"></i>
                </div>
                <button type="button" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
            </div>
            <div class="modal-body">
                <div class="content-block">
                    <div class="title">How to setup the Widget?</div>
                    <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis deserunt ab distinctio. Voluptatum deserunt blanditiis asperiores quos placeat voluptatibus illo possimus facilis.</div>
                    <a href="#" class="act-btn act-tutorial">
                    <i class="bi bi-boxes"></i>
                    Tutorials</a>
                </div>
                <div class="image-block">
                    <img src="{{url('images/tutorial.png')}}" >
                </div>
            </div>
            <div class="modal-footer">
                <div class="button-block">
                    <a href="{{ route('frontend.user.user_widget.settings', $widgetlist->id) }}"
                        class="act-btn act-settings">
                        <i class="bi bi-gear"></i>
                        Settings
                    </a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#get_widget_Modal{{$widgetlist->id}}" class="act-btn act-script">
                    <i class="bi bi-code-slash"></i>
                        Add Script
                    </a>
                    <input type="hidden" name="hid_id" value="{{$widgetlist->id}}">
                    <a href="{{ route('frontend.user.user_widget.destroy', $widgetlist->id) }}"
                        class="act-btn delete act-delete" data-bs-toggle="modal"
                        data-bs-target="#deleteFavorite">
                        <i class="bi bi-trash"></i>
                        Delete
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endif


@endsection

@push('after-scripts')

<script>
    $(window).on('load', function () {
        $('#overlay').modal('show');
    });
    $("#close-btn").click(function () {
        $('#overlay').modal('hide');
    });
</script>

<script>
    $('.delete').on('click', function () {
        let link = $(this).attr('href');
        $('.modal-footer a').attr('href', link);
    })
</script>

<script>

    function optimizer_realtime_view() {

        visitor_project_id = $('#visitor_proj').val();
        console.log('contratic_apis_visitor');
        console.log(visitor_project_id);
        // incoming_widget_id = $('#incoming_widget_id').val();


        $.post("{{url('/')}}/api/optimizer_realtime_view", {
                visitor_project_id:visitor_project_id
            },

            function(content, status){
                // console.log(content);
                var obj = JSON.parse(content);
                // console.log(obj);
                if(obj != null){
                    $('#visitors_record').html(obj);
                }
                else{
                    $('#visitors_record').html(`
                    <tr class="tbl-row"><td class="tb-col" colspan="6">
                    <img src="{{url('images/searching.gif')}}"  style="display:block;width:250px;margin:0 auto;">
                    <h2 style="text-align:center;">Connecting Realtime Data...</h2>
                    </td></tr>
                    `);
                }

            }
        );

    }

    setInterval(function(){optimizer_realtime_view();
        // console.log('refresh_data');
    }, 3000);

</script>

@endpush
