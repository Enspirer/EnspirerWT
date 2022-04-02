@extends('frontend.layouts.widget_ims_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/ims_pro.css')}}">


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
                                                <a class="breadcrumb-link breadcrumb-current">Index</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="section-chatWindow">
                                    <div class="row g-4">
                                        <div class="col-3">
                                            <div class="chat-list-window">
                                                <div class="filter-section">

                                                    <form action="{{route('frontend.user_widget.ims_pro_index',[$project_id,'phone_number','type'])}}" method="get" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                        <div class="search-input">
                                                            <i class="bi bi-search"></i>
                                                            <input type="search" class="form-control" name="search_name" id="search_name" placeholder="Search Chat" required>
                                                        </div>
                                                    </form>
                                                    
                                                    <div class="filter dropdown">
                                                        <a class="filter-dropdown imsPro-dropdown" href="#" role="button" id="filterDrop" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="bi bi-funnel"></i>
                                                        </a>

                                                        <ul class="dropdown-menu" aria-labelledby="filterDrop">
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-check2"></i>
                                                                    <div class="text">All Chat</div>
                                                                </a></li>
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-check2"></i>
                                                                    <div class="text">Active Chat</div>
                                                                </a></li>
                                                            <li><a class="dropdown-item active" href="#"><i class="bi bi-check2"></i>
                                                                    <div class="text">Unassigned</div>
                                                                </a></li>
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-check2"></i>
                                                                    <div class="text">Last 24 Hours</div>
                                                                </a></li>
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-check2"></i>
                                                                    <div class="text">Assigned to me</div>
                                                                </a></li>
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-check2"></i>
                                                                    <div class="text">Favorite only</div>
                                                                </a></li>
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-check2"></i>
                                                                    <div class="text">New</div>
                                                                </a></li>
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-check2"></i>
                                                                    <div class="text">Open</div>
                                                                </a></li>
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-check2"></i>
                                                                    <div class="text">Pending</div>
                                                                </a></li>
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-check2"></i>
                                                                    <div class="text">Closed</div>
                                                                </a></li>
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-check2"></i>
                                                                    <div class="text">Spam</div>
                                                                </a></li>
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-check2"></i>
                                                                    <div class="text">Blocked Chats</div>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="chat-list">
                                                    <div class="inner-wrapper">
                                                        <ul class="list-group list-group-flush">

                                                            @if(count($all_ims_pro_client_messages) != 0)
                                                                @foreach($all_ims_pro_client_messages as $ims_pro_client_message)
                                                                    @if($solo_ims_pro_client == null)
                                                                        <li class="list-group-item">
                                                                            <a href="{{route('frontend.user_widget.ims_pro_index',[$ims_pro_client_message->project_id,$ims_pro_client_message->phone_number,$ims_pro_client_message->type])}}" class="list-link">
                                                                                <div class="header">
                                                                                    <div class="profile">
                                                                                        <div class="indicator active"></div>
                                                                                        <div class="image-block">
                                                                                            <img src="{{url('images/test.png')}}" alt="">
                                                                                            <img src="{{url('images/social_media_icons/whatsapp.png')}}" alt="" class="chat-client">
                                                                                        </div>
                                                                                        <div class="status-block">

                                                                                            <div class="row">
                                                                                                <div class="col-8">
                                                                                                    @if(get_contact_info($ims_pro_client_message->phone_number))
                                                                                                        <div class="name" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;">{{ get_contact_info($ims_pro_client_message->phone_number) }}</div>
                                                                                                        <div class="contact">{{$ims_pro_client_message->phone_number}}</div>
                                                                                                        <div class="contact">{{$ims_pro_client_message->type}}</div>
                                                                                                    @else
                                                                                                        <div class="name" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;">{{$ims_pro_client_message->phone_number}}</div>
                                                                                                        <div class="contact">{{$ims_pro_client_message->type}}</div>
                                                                                                    @endif
                                                                                                </div>
                                                                                                <div class="col-4">
                                                                                                    <div class="active-status">{{$ims_pro_client_message->created_at->diffForHumans(null,true)}}</div>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="message" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">{{$ims_pro_client_message->message}}</div>
                                                                            </a>
                                                                        </li>
                                                                    @else
                                                                        @if($ims_pro_client_message->phone_number == $solo_ims_pro_client->phone_number)
                                                                            <li class="list-group-item active">
                                                                                <a href="{{route('frontend.user_widget.ims_pro_index',[$ims_pro_client_message->project_id,$ims_pro_client_message->phone_number,$ims_pro_client_message->type])}}" class="list-link">
                                                                                    <div class="header">
                                                                                        <div class="profile">

                                                                                            <div class="indicator active"></div>
                                                                                            <div class="image-block">
                                                                                                <img src="{{url('images/test.png')}}" alt="">
                                                                                                <img src="{{url('images/social_media_icons/whatsapp.png')}}" alt="" class="chat-client">
                                                                                            </div>

                                                                                            <div class="status-block">
                                                                                                <div class="row">
                                                                                                    <div class="col-8">
                                                                                                        @if(get_contact_info($ims_pro_client_message->phone_number))
                                                                                                            <div class="name" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;">{{ get_contact_info($ims_pro_client_message->phone_number) }}</div>
                                                                                                            <div class="contact">{{$ims_pro_client_message->phone_number}}</div>
                                                                                                            <div class="contact">{{$ims_pro_client_message->type}}</div>
                                                                                                        @else
                                                                                                            <div class="name" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;">{{$ims_pro_client_message->phone_number}}</div>
                                                                                                            <div class="contact">{{$ims_pro_client_message->type}}</div>
                                                                                                        @endif
                                                                                                    </div>
                                                                                                    <div class="col-4">
                                                                                                        <div class="active-status">{{$ims_pro_client_message->created_at->diffForHumans(null,true)}}</div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="message" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">{{$ims_pro_client_message->message}}</div>
                                                                                </a>
                                                                            </li>
                                                                        @else
                                                                            <li class="list-group-item">
                                                                                <a href="{{route('frontend.user_widget.ims_pro_index',[$ims_pro_client_message->project_id,$ims_pro_client_message->phone_number,$ims_pro_client_message->type])}}" class="list-link">
                                                                                    <div class="header">
                                                                                        <div class="profile">
                                                                                            <div class="indicator active"></div>
                                                                                            <div class="image-block">
                                                                                                <img src="{{url('images/test.png')}}" alt="">
                                                                                                <img src="{{url('images/social_media_icons/whatsapp.png')}}" alt="" class="chat-client">
                                                                                            </div>
                                                                                            <div class="status-block">

                                                                                                <div class="row">
                                                                                                    <div class="col-8">
                                                                                                        @if(get_contact_info($ims_pro_client_message->phone_number))
                                                                                                            <div class="name" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;">{{ get_contact_info($ims_pro_client_message->phone_number) }}</div>
                                                                                                            <div class="contact">{{$ims_pro_client_message->phone_number}}</div>
                                                                                                            <div class="contact">{{$ims_pro_client_message->type}}</div>
                                                                                                        @else
                                                                                                            <div class="name" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;">{{$ims_pro_client_message->phone_number}}</div>
                                                                                                            <div class="contact">{{$ims_pro_client_message->type}}</div>
                                                                                                        @endif
                                                                                                    </div>
                                                                                                    <div class="col-4">
                                                                                                        <div class="active-status">{{$ims_pro_client_message->created_at->diffForHumans(null,true)}}</div>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="message" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">{{$ims_pro_client_message->message}}</div>
                                                                                </a>
                                                                            </li>
                                                                        @endif
                                                                    @endif
                                                                @endforeach
                                                            @else
                                                                @include('frontend.includes.not_found',[
                                                                    'not_found_title' => 'Chats Not Found',
                                                                    'not_found_description' => null,
                                                                    'not_found_button_caption' => null
                                                                ])
                                                            @endif



                                                            <!-- <li class="list-group-item">
                                                                <a href="#" class="list-link">
                                                                    <div class="header">
                                                                        <div class="profile">
                                                                            <div class="indicator active"></div>
                                                                            <div class="image-block">
                                                                                <img src="{{url('images/test.png')}}" alt="">
                                                                                <img src="{{url('images/social_media_icons/whatsapp.png')}}" alt="" class="chat-client">
                                                                            </div>
                                                                            <div class="status-block">
                                                                                <div class="name">Suranga Dinesh</div>
                                                                                <div class="contact">(+94) 77 755 4571</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="active-status">5m</div>
                                                                    </div>
                                                                    <div class="message">Hi, will this item be shipped today ?</div>
                                                                </a>
                                                            </li> -->

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            @if($solo_ims_pro_client != null)
                                                <div class="chat-window">
                                                    <div class="header">
                                                        <div class="profile-block">
                                                            <div class="image-block">
                                                                <img src="{{url('images/test.png')}}" alt="">
                                                            </div>
                                                            <div class="status-block">
                                                                <div class="name">{{$solo_ims_pro_client->phone_number}}</div>
                                                                <div class="contact">{{$solo_ims_pro_client->type}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="option-block">
                                                            <ul class="navbar-nav">
                                                                <li class="nav-item">
                                                                    <a href="#" class="nav-link"><i class="bi bi-telephone-fill"></i></a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="#" class="nav-link"><i class="bi bi-bookmark-fill"></i></a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="#" class="nav-link"><i class="bi bi-trash"></i></a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <div href="#" class="nav-link dropdown">
                                                                        <a class="progress-dropdown imsPro-dropdown" href="#" role="button" id="progressDrop" data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="bi bi-journal-medical"></i>
                                                                        </a>

                                                                        <ul class="dropdown-menu" aria-labelledby="progressDrop">
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    <div class="indicator pending"></div>
                                                                                    <div class="text">Pending</div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    <div class="indicator inprogress"></div>
                                                                                    <div class="text">In Progress</div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    <div class="indicator closed"></div>
                                                                                    <div class="text">Closed</div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    <div class="indicator spam"></div>
                                                                                    <div class="text">Spam</div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                @if(App\Models\ImsProContacts::where('phone_number',$solo_ims_pro_client->phone_number)->first() == null)
                                                                    <li class="nav-item">
                                                                        <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#createModal"><i class="bi bi-journal-medical"></i></a>
                                                                    </li>
                                                                @endif
                                                                <li class="nav-item">
                                                                    <a href="#" class="nav-link"><i class="bi bi-three-dots-vertical"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="body">
                                                        <div class="date">August 21</div>
                                                        <div class="inner-wrapper" id="incoming_outgoing_chat_messages">

                                                            @if(count($solo_ims_pro_client_messages) != 0)
                                                                @foreach($solo_ims_pro_client_messages as $solo_ims_pro_client_message)
                                                                    @if($solo_ims_pro_client_message->user_id == null)
                                                                        <div class="message-block incoming" >
                                                                            <div class="image-block">
                                                                                <img src="{{url('images/test.png')}}" alt="">
                                                                            </div>
                                                                            <div class="message">
                                                                                <div class="text" >{{$solo_ims_pro_client_message->message}}</div>
                                                                            </div>
                                                                            <input type="hidden" name="incoming_mobile_number" id="incoming_mobile_number" value="{{$solo_ims_pro_client_message->phone_number}}">
                                                                            <input type="hidden" name="incoming_type" id="incoming_type" value="{{$solo_ims_pro_client_message->type}}">
                                                                            <input type="hidden" name="incoming_project_id" id="incoming_project_id" value="{{$solo_ims_pro_client_message->project_id}}">
                                                                            <input type="hidden" name="incoming_widget_id" id="incoming_widget_id" value="{{$solo_ims_pro_client_message->wideget_id}}">
                                                                            {{--<div class="label">--}}
                                                                                {{--<span class="text">Called from Suranga Dinesh to (+94) 77 755 4571</span>--}}
                                                                                {{--<span class="time">12 days</span>--}}
                                                                            {{--</div>--}}
                                                                        </div>
                                                                    @else
                                                                        <div class="message-block outgoing">
                                                                            <div class="image-block">
                                                                                <img src="{{url('images/test.png')}}" alt="">
                                                                            </div>
                                                                            <div class="message">
                                                                                <div class="text">{{$solo_ims_pro_client_message->message}}</div>
                                                                            </div>
                                                                            {{--<div class="label">--}}
                                                                                {{--<span class="text">Called from Suranga Dinesh to (+94) 77 755 4571</span>--}}
                                                                                {{--<span class="time">12 days</span>--}}
                                                                            {{--</div>--}}
                                                                        </div>
                                                                    @endif
                                                                @endforeach
                                                            @endif

                                                        </div>
                                                    </div>
                                                    @if($solo_ims_pro_client->type == 'WhatsApp')
                                                        <form method="post" action="{{route('frontend.user.submit_chat')}}">
                                                            <div class="footer">

                                                                    {{csrf_field()}}
                                                                    <input type="hidden" name="phone_number" value="{{$solo_ims_pro_client->phone_number}}">
                                                                    <input type="hidden" name="project_id" value="{{$solo_ims_pro_client->project_id}}">
                                                                    <input type="hidden" name="widget_id" value="{{$solo_ims_pro_client->widget_id}}">
                                                                    <input type="text" name="message" class="msg-input" placeholder="Type your message here...">
                                                                    <button type="submit" class="btn-send"><i class="bi bi-send-fill"></i></button>

                                                            </div>
                                                        </form>
                                                    @endif

                                                </div>
                                                @else
                                                    @include('frontend.includes.not_found',[
                                                        'not_found_title' => 'Chats Details Not Found',
                                                        'not_found_description' => null,
                                                        'not_found_button_caption' => null
                                                    ])
                                                @endif
                                        </div>
                                        <div class="col-4">
                                            @if($solo_ims_pro_client != null)
                                                <div class="info-window">
                                                    <div class="header">
                                                        <div class="status">In Progress</div>
                                                        <div class="image-block">
                                                            <img src="{{url('images/test.png')}}" alt="">
                                                        </div>
                                                        <div class="name">{{$solo_ims_pro_client->name}}</div>
                                                        <div class="chat-client">
                                                            <img src="{{url('images/social_media_icons/whatsapp.png')}}" alt="">
                                                            <div class="text green">WhatsApp</div>
                                                        </div>
                                                    </div>
                                                    <div class="inner-wrapper">
                                                        <div class="info-block">
                                                            <table class="table table-borderless">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="icons"><i class="bi bi-briefcase-fill"></i></td>
                                                                        <td class="title">Company</td>
                                                                        <td class="inputs"><input class="table-input" type="text" placeholder="Set a company ..."></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="icons"><i class="bi bi-person-fill"></i></td>
                                                                        <td class="title">Role</td>
                                                                        <td class="inputs"><input class="table-input" type="text" placeholder="Set a role ..."></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="icons"><i class="bi bi-telephone-fill"></i></td>
                                                                        <td class="title">Phone</td>
                                                                        <td class="inputs"><input class="table-input" type="text" value="{{$solo_ims_pro_client->phone_number}}" disabled readonly></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="icons"><span class="bi">&commat;</span></td>
                                                                        <td class="title">Email</td>
                                                                        @if($solo_ims_pro_client->email != null)
                                                                            <td class="inputs"><input class="table-input" type="text" value="{{$solo_ims_pro_client->email}}" disabled readonly></td>
                                                                        @else
                                                                            <td class="inputs"><input class="table-input" type="text" value="-" disabled readonly></td>
                                                                        @endif
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="icons"><i class="bi bi-tags-fill"></i></td>
                                                                        <td class="title">Tags</td>
                                                                        <td class="inputs"><input class="table-input" type="text" placeholder="Set a tags ..."></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="dropdown">
                                                                <a class="add-property-dropdown btn-add-property" href="#" role="button" id="addPropertyDrop" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="bi bi-plus-lg"></i>
                                                                    <div class="text">Add a property</div>
                                                                </a>

                                                                <ul class="dropdown-menu" aria-labelledby="addPropertyDrop">
                                                                    <li><a class="dropdown-item" href="#"><div class="text">Sample text</div></a></li>
                                                                    <li><a class="dropdown-item" href="#"><div class="text">Sample text</div></a></li>
                                                                    <li><a class="dropdown-item" href="#"><div class="text">Sample text</div></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="optioin-block">
                                                            <table class="table table-borderless align-middle">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="icons"><i class="bi bi-people-fill"></i></td>
                                                                        <td class="title">Responsible</td>
                                                                        <td class="inputs">
                                                                            <div class="dropdown">
                                                                                <a class="assign-dropdown" href="#" role="button" id="assignDrop" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <div class="text">Not assigned</div>
                                                                                    <i class="bi bi-chevron-down"></i>
                                                                                </a>

                                                                                <ul class="dropdown-menu" aria-labelledby="assignDrop">
                                                                                    <li><a class="dropdown-item" href="#"><div class="text">Sample Text</div></a></li>
                                                                                    <li><a class="dropdown-item" href="#"><div class="text">Sample Text</div></a></li>
                                                                                    <li><a class="dropdown-item" href="#"><div class="text">Sample Text</div></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                        <td class="role">
                                                                            <a href="#" class="btn-add-role">
                                                                                <i class="bi bi-plus-lg"></i>
                                                                                <div class="text">Add Role</div>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="icons"><i class="bi bi-link-45deg"></i></td>
                                                                        <td class="title" colspan="3">Chat URL</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="icons"></i></td>
                                                                        <td class="inputs" colspan="3"><input class="table-input" type="text" value="https://app.timelines.ai/chat/174548/messages/" disabled readonly></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="icons blue-icon"><i class="bi bi-bookmark-fill"></i></td>
                                                                        <td class="title" colspan="3">
                                                                            <a href="#" class="table-link">
                                                                                <div class="text">Bookmarked Messages</div>
                                                                                <i class="bi bi-chevron-right"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="icons blue-icon"><i class="bi bi-easel2-fill"></i></td>
                                                                        <td class="title" colspan="3">
                                                                            <a href="#" class="table-link">
                                                                                <div class="text">Media, Links and Docs</div>
                                                                                <i class="bi bi-chevron-right"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="icons blue-icon"><i class="bi bi-share-fill"></i></td>
                                                                        <td class="title" colspan="3">
                                                                            <a href="#" class="table-link">
                                                                                <div class="text">Sharing Links</div>
                                                                                <i class="bi bi-chevron-right"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <a href="#" class="btn-report-download">
                                                                <i class="bi bi-download"></i>
                                                                <div class="text">Download Report File</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                @include('frontend.includes.not_found',[
                                                    'not_found_title' => 'Chats Details Not Found',
                                                    'not_found_description' => null,
                                                    'not_found_button_caption' => null
                                                ])
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>


    @if($solo_ims_pro_client != null)
    <!-- Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('frontend.user_widget.ims_pro_contacts_store')}}" method="post" enctype="multipart/form-data">                
                {{csrf_field()}}

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Add to Contacts</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <!-- <span aria-hidden="true">&times;</span> -->
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group mt-3">
                            <label>Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="form-group mt-3">
                            <label>Phone Number <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="phone_number" value="{{$solo_ims_pro_client->phone_number}}" name="phone_number" required>
                        </div>                    
                        <div class="form-group mt-3">
                            <label>Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                                        
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" class="form-control" id="hidden_project_id" name="hidden_project_id" value="{{$project_id}}">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif



    @if(\Session::has('success') )
   
    <div class="modal fade" id="overlay" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Added Successfully</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                This Number Added To The Contacts Successfully. <a href="{{ route('frontend.user_widget.ims_pro_contacts', $project_id) }}" style="text-decoration:none">Click Here</a> ro go to Contacts Page.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
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

    function chat_message() {

        incoming_mobile_number = $('#incoming_mobile_number').val();
        incoming_project_id = $('#incoming_project_id').val();
        incoming_widget_id = $('#incoming_widget_id').val();
        incoming_type = $('#incoming_type').val();


        $.post("{{url('/')}}/api/ims_chat", {
                incoming_mobile_number:incoming_mobile_number,
                incoming_project_id:incoming_project_id,
                incoming_widget_id:incoming_widget_id,
                incoming_type:incoming_type
            },

            function(content, status){
                // console.log(content);
                var obj = JSON.parse(content);
                // console.log(obj);
                $('#incoming_outgoing_chat_messages').html(obj);

            }
        );



    }


    setInterval(function(){chat_message();
        // console.log('refresh_data');
    }, 3000);


</script>


@endpush