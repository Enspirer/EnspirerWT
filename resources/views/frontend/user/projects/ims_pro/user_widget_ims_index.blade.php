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
                                                <a class="breadcrumb-link breadcrumb-current">Index</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="section-chatWindow">
                                    <div class="row g-4">
                                        <div class="col-3">
                                            <div class="filter-section">
                                                <div class="search-input">
                                                    <i class="bi bi-search"></i>
                                                    <input type="search" placeholder="Search Chat">
                                                </div>
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
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item active">
                                                        <a href="#" class="list-link">
                                                            <div class="header">
                                                                <div class="profile">
                                                                    <div class="indicator active"></div>
                                                                    <div class="image-block">
                                                                        <img src="{{url('images/test.png')}}" alt="">
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
                                                    </li>
                                                    <li class="list-group-item">
                                                        <a href="#" class="list-link">
                                                            <div class="header">
                                                                <div class="profile">
                                                                    <div class="indicator"></div>
                                                                    <div class="image-block">
                                                                        <img src="{{url('images/test.png')}}" alt="">
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
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="chat-window">
                                                <div class="header">
                                                    <div class="profile-block">
                                                        <div class="image-block">
                                                            <img src="{{url('images/test.png')}}" alt="">
                                                        </div>
                                                        <div class="status-block">
                                                            <div class="name">Suranga Dinesh</div>
                                                            <div class="contact">(+94) 77 755 4571</div>
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
                                                            <li class="nav-item">
                                                                <a href="#" class="nav-link"><i class="bi bi-three-dots-vertical"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="body">
                                                    <div class="inner-wrapper">
                                                        <div class="date">August 21</div>
                                                        <div class="message-block incoming">
                                                            <div class="image-block">
                                                                <img src="{{url('images/test.png')}}" alt="">
                                                            </div>
                                                            <div class="message missed-call">
                                                                <i class="bi bi-telephone-x-fill"></i>
                                                                <div class="text">Missed Call</div>
                                                                <div class="duration">0:00</div>
                                                                <div class="dropdown">
                                                                    <a class="imsPro-dropdown message-dropdown" href="#" role="button" id="messageDrop" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="bi bi-chevron-down"></i>
                                                                    </a>

                                                                    <ul class="dropdown-menu" aria-labelledby="messageDrop">
                                                                        <li><a class="dropdown-item" href="#"><div class="text">Sample text</div></a></li>
                                                                        <li><a class="dropdown-item" href="#"><div class="text">Sample text</div></a></li>
                                                                        <li><a class="dropdown-item" href="#"><div class="text">Sample text</div></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="label">
                                                                <span class="text">Called from Suranga Dinesh to (+94) 77 755 4571</span>
                                                                <span class="time">12 days</span>
                                                            </div>
                                                        </div>
                                                        <div class="message-block incoming">
                                                            <div class="image-block"></div>
                                                            <div class="message">
                                                                <div class="text">Hi, will this item be shipped today ?</div>
                                                            </div>
                                                            <div class="label">
                                                                <span class="text">Called from Suranga Dinesh to (+94) 77 755 4571</span>
                                                                <span class="time">12 days</span>
                                                            </div>
                                                        </div>
                                                        <div class="message-block outgoing">
                                                            <div class="image-block">
                                                                <img src="{{url('images/test.png')}}" alt="">
                                                            </div>
                                                            <div class="message">
                                                                <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's . . .</div>
                                                            </div>
                                                            <div class="label">
                                                                <span class="text">Called from Suranga Dinesh to (+94) 77 755 4571</span>
                                                                <span class="time">12 days</span>
                                                            </div>
                                                        </div>
                                                        <div class="message-block outgoing">
                                                            <div class="image-block">
                                                                <img src="{{url('images/test.png')}}" alt="">
                                                            </div>
                                                            <div class="message outgoing-call">
                                                                <i class="bi bi-telephone-inbound-fill"></i>
                                                                <div class="text">Inbound Call</div>
                                                                <div class="duration">0:00</div>
                                                                <div class="dropdown">
                                                                    <a class="imsPro-dropdown message-dropdown" href="#" role="button" id="messageDrop" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="bi bi-chevron-down"></i>
                                                                    </a>

                                                                    <ul class="dropdown-menu" aria-labelledby="messageDrop">
                                                                        <li><a class="dropdown-item" href="#"><div class="text">Sample text</div></a></li>
                                                                        <li><a class="dropdown-item" href="#"><div class="text">Sample text</div></a></li>
                                                                        <li><a class="dropdown-item" href="#"><div class="text">Sample text</div></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="label">
                                                                <span class="text">Called from Suranga Dinesh to (+94) 77 755 4571</span>
                                                                <span class="time">12 days</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="footer"></div>
                                            </div>
                                        </div>
                                        <div class="col-3"></div>
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