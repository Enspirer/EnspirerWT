@extends('frontend.layouts.widget_ims_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')


<section class="ims__section">
        <div class="row g-0">
            <div class="ims__side-col">
                <div class="ims__side-nav">
                    <div class="side-nav__header">
                        <div class="logo-block">
                            <img src="{{url('images/Tallentor Logo 2-04.png')}}" alt="" class="logo">
                            <div class="logo-text">- IMS</div>
                        </div>
                        <div class="caption">Inquiry Management Systems</div>
                        <div class="live-status-block">
                            <i class="bi bi-broadcast"></i>
                            <div class="caption">Live Visitors</div>
                            <div class="count">05</div>
                        </div>
                    </div>
                    <div class="side-nav__navs" id="sideNavs">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link active" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#conversationNav" aria-controls="conversationNav"
                                    aria-expanded="true" aria-label="Toggle navigation">
                                    <div class="nav-link__block">
                                        <i class="bi bi-chevron-down"></i>
                                        <i class="bi bi-chat-text"></i>
                                        <div class="text">Conversations</div>
                                        <div class="count">24</div>
                                    </div>
                                </a>
                                <ul class="list-group ims__list-group collapse show" id="conversationNav">
                                    <li class="list-group-item">
                                        <a href="#" class="nav-link active" onclick="controlPanel('admin')">
                                            <div class="nav-link__block">
                                                <i class="bi bi-person-lines-fill"></i>
                                                <div class="text">Admin</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="nav-link" onclick="controlPanel('inbox')">
                                            <div class="nav-link__block">
                                                <i class="bi bi-envelope"></i>
                                                <div class="text">Inbox</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="nav-link" onclick="controlPanel('assigned')">
                                            <div class="nav-link__block">
                                                <i class="bi bi-person-check"></i>
                                                <div class="text">Assigned</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="nav-link" onclick="controlPanel('unassigned')">
                                            <div class="nav-link__block">
                                                <i class="bi bi-person-x"></i>
                                                <div class="text">Unassigned</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="nav-link" onclick="controlPanel('closed')">
                                            <div class="nav-link__block">
                                                <i class="bi bi-file-earmark-check"></i>
                                                <div class="text">Closed</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="nav-link" onclick="controlPanel('spam')">
                                            <div class="nav-link__block">
                                                <i class="bi bi-exclamation-octagon"></i>
                                                <div class="text">Spam</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" onclick="controlPanel('clients')">
                                    <div class="nav-link__block">
                                        <i class="bi bi-chevron-down ims__hidden"></i>
                                        <i class="bi bi-people"></i>
                                        <div class="text">Clients</div>
                                        <div class="count">2400</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" onclick="controlPanel('analytics')">
                                    <div class="nav-link__block">
                                        <i class="bi bi-chevron-down ims__hidden"></i>
                                        <i class="bi bi-speedometer2"></i>
                                        <div class="text">Analytics</div>
                                        <div class="count ims__hidden">2400</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="ims__main-col">
                <div class="row g-0">
                    <div class="col">
                        <div class="ims__navbar">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <div class="notification-bell">
                                            <img src="{{url('images/bell (1).svg')}}" alt="">
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="imsNavDrop" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <div class="profile">
                                            <div class="profile__pic">
                                                <img src="{{url('images/Profile.jpg')}}" alt="">
                                            </div>
                                            <div class="name">John</div>
                                            <i class="bi bi-chevron-down"></i>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="imsNavDrop">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col">
                        <!-- Content goes here -->
                        <div class="ims__body-container" id="ims__main-panel">
                            <div class="ims__inner-container">
                                <div class="row g-0">
                                    <div class="col">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="#" class="breadcrumb-link">Home</a>
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
                                                <a href="#" class="breadcrumb-link breadcrumb-current">Admin</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col">
                                        <section class="coversation-section ims__panel" id="ims__conversation">
                                            <div class="admin--section ims__panel" id="ims__admin">
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
                                                                    <a href="#" class="ims__warning control-link">
                                                                        <i class="bi bi-exclamation-octagon-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="ims__download control-link">
                                                                        <i class="bi bi-download"></i>
                                                                    </a>
                                                                    <a href="#" class="ims__delete control-link">
                                                                        <i class="bi bi-trash-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="ims__option control-link">
                                                                        <i class="bi bi-three-dots-vertical"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="ims__data-table">
                                                            @if(count($ims_client) != 0)

                                                                <table class="table table-borderless">
                                                                    <thead>
                                                                        <tr class="data-row">
                                                                            <th class="data-title"></th>
                                                                            <th class="data-title"></th>
                                                                            <th class="data-title"></th>
                                                                            <th class="data-title">Name</th>
                                                                            <th class="data-title">Date</th>
                                                                            <th class="data-title">Title</th>
                                                                            <th class="data-title">Message</th>
                                                                            <th class="data-title">Assign</th>
                                                                            <th class="data-title"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach($ims_client as $key => $client)
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
                                                                                    <img src="{{url('images/Profile.jpg')}}" alt="">
                                                                                </td>
                                                                                <td class="data--name data-cell">
                                                                                    <div class="text">{{$client->client_name}}</div>
                                                                                </td>
                                                                                <td class="data--date data-cell">
                                                                                    <div class="text">{{$client->created_at->format('d M Y')}}</div>
                                                                                </td>
                                                                                <td class="data--title data-cell">
                                                                                    <div class="text">This is the sample
                                                                                        title one</div>
                                                                                </td>
                                                                                <td class="data--message data-cell">
                                                                                    <div class="text">{{$client->message}}</div>
                                                                                </td>
                                                                                <td class="data--assign data-cell">
                                                                                    <select class="form-select"
                                                                                        onchange="assignColor(this)">
                                                                                        <option selected>Choose...</option>
                                                                                        <option value="1">To Admin</option>
                                                                                        <option value="2">To Manager
                                                                                        </option>
                                                                                        <option value="3">To Agent</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td class="data--chat data-cell">
                                                                                    <a href="#" class="chat-btn">
                                                                                        <i class="bi bi-chat-dots"></i>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                        <!-- <tr class="data-row">
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
                                                                                <img src="{{url('images/Profile.jpg')}}" alt="">
                                                                            </td>
                                                                            <td class="data--name data-cell">
                                                                                <div class="text">Rayan Perera</div>
                                                                            </td>
                                                                            <td class="data--date data-cell">
                                                                                <div class="text">18, Feb 2022</div>
                                                                            </td>
                                                                            <td class="data--title data-cell">
                                                                                <div class="text">This is the sample
                                                                                    title one</div>
                                                                            </td>
                                                                            <td class="data--message data-cell">
                                                                                <div class="text">This is the
                                                                                    sample message …</div>
                                                                            </td>
                                                                            <td class="data--assign data-cell">
                                                                                <select class="form-select"
                                                                                    onchange="assignColor(this)">
                                                                                    <option selected>Choose...</option>
                                                                                    <option value="1">To Admin</option>
                                                                                    <option value="2">To Manager
                                                                                    </option>
                                                                                    <option value="3">To Agent</option>
                                                                                </select>
                                                                            </td>
                                                                            <td class="data--chat data-cell">
                                                                                <a href="#" class="chat-btn">
                                                                                    <i class="bi bi-chat-dots"></i>
                                                                                </a>
                                                                            </td>
                                                                        </tr> -->
                                                                    </tbody>
                                                                </table>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inbox--section ims__panel" id="ims__inbox"></div>
                                            <div class="assigned--section ims__panel" id="ims__assigned">
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
                                                                    <a href="#" class="ims__warning control-link">
                                                                        <i class="bi bi-exclamation-octagon-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="ims__download control-link">
                                                                        <i class="bi bi-download"></i>
                                                                    </a>
                                                                    <a href="#" class="ims__delete control-link">
                                                                        <i class="bi bi-trash-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="ims__option control-link">
                                                                        <i class="bi bi-three-dots-vertical"></i>
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
                                                                            <th class="data-title">Title</th>
                                                                            <th class="data-title">Message</th>
                                                                            <th class="data-title">Assign</th>
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
                                                                                <img src="{{url('images/Profile.jpg')}}" alt="">
                                                                            </td>
                                                                            <td class="data--name data-cell">
                                                                                <div class="text">Rayan Perera</div>
                                                                            </td>
                                                                            <td class="data--date data-cell">
                                                                                <div class="text">18, Feb 2022</div>
                                                                            </td>
                                                                            <td class="data--title data-cell">
                                                                                <div class="text">This is the sample
                                                                                    title one</div>
                                                                            </td>
                                                                            <td class="data--message data-cell">
                                                                                <div class="text">This is the
                                                                                    sample message …</div>
                                                                            </td>
                                                                            <td class="data--assign data-cell">
                                                                                <select class="form-select"
                                                                                    onchange="assignColor(this)">
                                                                                    <option selected>Choose...</option>
                                                                                    <option value="1">To Admin</option>
                                                                                    <option value="2">To Manager
                                                                                    </option>
                                                                                    <option value="3">To Agent</option>
                                                                                </select>
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
                                                                                <img src="{{url('images/Profile.jpg')}}" alt="">
                                                                            </td>
                                                                            <td class="data--name data-cell">
                                                                                <div class="text">Rayan Perera</div>
                                                                            </td>
                                                                            <td class="data--date data-cell">
                                                                                <div class="text">18, Feb 2022</div>
                                                                            </td>
                                                                            <td class="data--title data-cell">
                                                                                <div class="text">This is the sample
                                                                                    title one</div>
                                                                            </td>
                                                                            <td class="data--message data-cell">
                                                                                <div class="text">This is the
                                                                                    sample message …</div>
                                                                            </td>
                                                                            <td class="data--assign data-cell">
                                                                                <select class="form-select"
                                                                                    onchange="assignColor(this)">
                                                                                    <option selected>Choose...</option>
                                                                                    <option value="1">To Admin</option>
                                                                                    <option value="2">To Manager
                                                                                    </option>
                                                                                    <option value="3">To Agent</option>
                                                                                </select>
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
                                            <div class="unassigned--section ims__panel" id="ims__unassigned">
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
                                                                    <a href="#" class="ims__warning control-link">
                                                                        <i class="bi bi-exclamation-octagon-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="ims__download control-link">
                                                                        <i class="bi bi-download"></i>
                                                                    </a>
                                                                    <a href="#" class="ims__delete control-link">
                                                                        <i class="bi bi-trash-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="ims__option control-link">
                                                                        <i class="bi bi-three-dots-vertical"></i>
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
                                                                            <th class="data-title">Title</th>
                                                                            <th class="data-title">Message</th>
                                                                            <th class="data-title">Assign</th>
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
                                                                                <img src="{{url('images/Profile.jpg')}}" alt="">
                                                                            </td>
                                                                            <td class="data--name data-cell">
                                                                                <div class="text">Rayan Perera</div>
                                                                            </td>
                                                                            <td class="data--date data-cell">
                                                                                <div class="text">18, Feb 2022</div>
                                                                            </td>
                                                                            <td class="data--title data-cell">
                                                                                <div class="text">This is the sample
                                                                                    title one</div>
                                                                            </td>
                                                                            <td class="data--message data-cell">
                                                                                <div class="text">This is the
                                                                                    sample message …</div>
                                                                            </td>
                                                                            <td class="data--assign data-cell">
                                                                                <div class="text">Unassigned</div>
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
                                                                                <img src="{{url('images/Profile.jpg')}}" alt="">
                                                                            </td>
                                                                            <td class="data--name data-cell">
                                                                                <div class="text">Rayan Perera</div>
                                                                            </td>
                                                                            <td class="data--date data-cell">
                                                                                <div class="text">18, Feb 2022</div>
                                                                            </td>
                                                                            <td class="data--title data-cell">
                                                                                <div class="text">This is the sample
                                                                                    title one</div>
                                                                            </td>
                                                                            <td class="data--message data-cell">
                                                                                <div class="text">This is the
                                                                                    sample message …</div>
                                                                            </td>
                                                                            <td class="data--assign data-cell">
                                                                                <div class="text">Unassigned</div>
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
                                            <div class="closed--section ims__panel" id="ims__closed">
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
                                                                    <a href="#" class="ims__warning control-link">
                                                                        <i class="bi bi-exclamation-octagon-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="ims__download control-link">
                                                                        <i class="bi bi-download"></i>
                                                                    </a>
                                                                    <a href="#" class="ims__delete control-link">
                                                                        <i class="bi bi-trash-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="ims__option control-link">
                                                                        <i class="bi bi-three-dots-vertical"></i>
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
                                                                            <th class="data-title">Title</th>
                                                                            <th class="data-title">Message</th>
                                                                            <th class="data-title">Assign</th>
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
                                                                                <img src="{{url('images/Profile.jpg')}}" alt="">
                                                                            </td>
                                                                            <td class="data--name data-cell">
                                                                                <div class="text">Rayan Perera</div>
                                                                            </td>
                                                                            <td class="data--date data-cell">
                                                                                <div class="text">18, Feb 2022</div>
                                                                            </td>
                                                                            <td class="data--title data-cell">
                                                                                <div class="text">This is the sample
                                                                                    title one</div>
                                                                            </td>
                                                                            <td class="data--message data-cell">
                                                                                <div class="text">This is the
                                                                                    sample message …</div>
                                                                            </td>
                                                                            <td class="data--assign data-cell">
                                                                                <div class="text">Closed</div>
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
                                                                                <img src="{{url('images/Profile.jpg')}}" alt="">
                                                                            </td>
                                                                            <td class="data--name data-cell">
                                                                                <div class="text">Rayan Perera</div>
                                                                            </td>
                                                                            <td class="data--date data-cell">
                                                                                <div class="text">18, Feb 2022</div>
                                                                            </td>
                                                                            <td class="data--title data-cell">
                                                                                <div class="text">This is the sample
                                                                                    title one</div>
                                                                            </td>
                                                                            <td class="data--message data-cell">
                                                                                <div class="text">This is the
                                                                                    sample message …</div>
                                                                            </td>
                                                                            <td class="data--assign data-cell">
                                                                                <div class="text">Closed</div>
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
                                            <div class="spam--section ims__panel" id="ims__spam">
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
                                                                    <a href="#" class="ims__warning control-link">
                                                                        <i class="bi bi-exclamation-octagon-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="ims__download control-link">
                                                                        <i class="bi bi-download"></i>
                                                                    </a>
                                                                    <a href="#" class="ims__delete control-link">
                                                                        <i class="bi bi-trash-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="ims__option control-link">
                                                                        <i class="bi bi-three-dots-vertical"></i>
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
                                                                            <th class="data-title">Title</th>
                                                                            <th class="data-title">Message</th>
                                                                            <th class="data-title">Assign</th>
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
                                                                                <img src="{{url('images/Profile.jpg')}}" alt="">
                                                                            </td>
                                                                            <td class="data--name data-cell">
                                                                                <div class="text">Rayan Perera</div>
                                                                            </td>
                                                                            <td class="data--date data-cell">
                                                                                <div class="text">18, Feb 2022</div>
                                                                            </td>
                                                                            <td class="data--title data-cell">
                                                                                <div class="text">This is the sample
                                                                                    title one</div>
                                                                            </td>
                                                                            <td class="data--message data-cell">
                                                                                <div class="text">This is the
                                                                                    sample message …</div>
                                                                            </td>
                                                                            <td class="data--assign data-cell">
                                                                                <div class="text">Spam</div>
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
                                                                                <img src="{{url('images/Profile.jpg')}}" alt="">
                                                                            </td>
                                                                            <td class="data--name data-cell">
                                                                                <div class="text">Rayan Perera</div>
                                                                            </td>
                                                                            <td class="data--date data-cell">
                                                                                <div class="text">18, Feb 2022</div>
                                                                            </td>
                                                                            <td class="data--title data-cell">
                                                                                <div class="text">This is the sample
                                                                                    title one</div>
                                                                            </td>
                                                                            <td class="data--message data-cell">
                                                                                <div class="text">This is the
                                                                                    sample message …</div>
                                                                            </td>
                                                                            <td class="data--assign data-cell">
                                                                                <div class="text">Spam</div>
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
                                        </section>
                                        <section class="clients-section ims__panel" id="ims__clients">
                                            <div class="ims__control-panel">
                                                <div class="row g-0">
                                                    <div class="col">
                                                        <div class="control-block">
                                                            <div class="controls">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="imsSelectAll">
                                                                    <label class="form-check-label" for="imsSelectAll">
                                                                        <i class="bi bi-chevron-down"></i>
                                                                    </label>
                                                                </div>
                                                                <a href="#" class="ims__refresh control-link active">
                                                                    <i class="bi bi-arrow-clockwise"></i>
                                                                </a>
                                                            </div>
                                                            <div class="actions">
                                                                <a href="#" class="ims__warning control-link">
                                                                    <i class="bi bi-exclamation-octagon-fill"></i>
                                                                </a>
                                                                <a href="#" class="ims__download control-link">
                                                                    <i class="bi bi-download"></i>
                                                                </a>
                                                                <a href="#" class="ims__delete control-link">
                                                                    <i class="bi bi-trash-fill"></i>
                                                                </a>
                                                                <a href="#" class="ims__option control-link">
                                                                    <i class="bi bi-three-dots-vertical"></i>
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
                                                                        <th class="data-title">Comment</th>
                                                                        <th class="data-title"></th>
                                                                        <th class="data-title">Conversation</th>
                                                                        <th class="data-title">Last Access Time</th>
                                                                        <th class="data-title"></th>
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
                                                                            <img src="{{url('images/Profile.jpg')}}" alt="">
                                                                        </td>
                                                                        <td class="data--name data-cell">
                                                                            <div class="text">Rayan Perera</div>
                                                                        </td>
                                                                        <td class="data--date data-cell">
                                                                            <div class="text">18, Feb 2022</div>
                                                                        </td>
                                                                        <td class="data--comment data-cell">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="This is the sample comment ">
                                                                        </td>
                                                                        <td class="data--chat data-cell">
                                                                            <a href="#" class="chat-btn">
                                                                                <i
                                                                                    class="bi bi-chat-left-text-fill"></i>
                                                                            </a>
                                                                        </td>
                                                                        <td class="data--conversation data-cell">
                                                                            <div class="text">01</div>
                                                                        </td>
                                                                        <td class="data--last-access data-cell">
                                                                            <div class="text">19 hours ago</div>
                                                                        </td>
                                                                        <td class="data--delete data-cell">
                                                                            <a href="#" class="delete-btn">
                                                                                <i class="bi bi-trash-fill"></i>
                                                                            </a>
                                                                        </td>
                                                                        <td class="data--option data-cell">
                                                                            <a href="#" class="option-btn">
                                                                                <i class="bi bi-three-dots"></i>
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
                                                                            <img src="{{url('images/Profile.jpg')}}" alt="">
                                                                        </td>
                                                                        <td class="data--name data-cell">
                                                                            <div class="text">Rayan Perera</div>
                                                                        </td>
                                                                        <td class="data--date data-cell">
                                                                            <div class="text">18, Feb 2022</div>
                                                                        </td>
                                                                        <td class="data--comment data-cell">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="This is the sample comment ">
                                                                        </td>
                                                                        <td class="data--chat data-cell">
                                                                            <a href="#" class="chat-btn">
                                                                                <i
                                                                                    class="bi bi-chat-left-text-fill"></i>
                                                                            </a>
                                                                        </td>
                                                                        <td class="data--conversation data-cell">
                                                                            <div class="text">01</div>
                                                                        </td>
                                                                        <td class="data--last-access data-cell">
                                                                            <div class="text">19 hours ago</div>
                                                                        </td>
                                                                        <td class="data--delete data-cell">
                                                                            <a href="#" class="delete-btn">
                                                                                <i class="bi bi-trash-fill"></i>
                                                                            </a>
                                                                        </td>
                                                                        <td class="data--option data-cell">
                                                                            <a href="#" class="option-btn">
                                                                                <i class="bi bi-three-dots"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="analytics-section ims__panel" id="ims__analytics">
                                            <div class="root-section">
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
                                                                    <a href="#" class="ims__warning control-link">
                                                                        <i class="bi bi-exclamation-octagon-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="ims__download control-link">
                                                                        <i class="bi bi-download"></i>
                                                                    </a>
                                                                    <a href="#" class="ims__delete control-link">
                                                                        <i class="bi bi-trash-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="ims__option control-link">
                                                                        <i class="bi bi-three-dots-vertical"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="ims__data-table">
                                                                <table class="table table-borderless">
                                                                    <thead>
                                                                        <tr class="data-row">
                                                                            <th class="data-title"></th>
                                                                            <th class="data-title"></th>
                                                                            <th class="data-title">Action by</th>
                                                                            <th class="data-title">Action Taken</th>
                                                                            <th class="data-title">Comment</th>
                                                                            <th class="data-title">Status</th>
                                                                            <th class="data-title">Manager Comments</th>
                                                                            <th class="data-title">Report</th>
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
                                                                            <td class="data--action-by data-cell">
                                                                                <div class="text">Action by admin</div>
                                                                            </td>
                                                                            <td class="data--action-taken data-cell">
                                                                                <div class="icon-block"
                                                                                    id="ims__icon-block">
                                                                                    <i
                                                                                        class="bi call bi-telephone-fill"></i>
                                                                                    <i
                                                                                        class="bi mail bi-envelope-fill"></i>
                                                                                    <i
                                                                                        class="bi not-responding bi-dash-circle-fill"></i>
                                                                                    <i
                                                                                        class="bi meeting bi-camera-video-fill"></i>
                                                                                    <i
                                                                                        class="bi message bi-chat-right-text-fill"></i>
                                                                                    <i
                                                                                        class="bi other bi-flag-fill"></i>
                                                                                </div>
                                                                                <select class="form-select"
                                                                                    id="data_action-select">
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
                                                                            </td>
                                                                            <td class="data--comment data-cell">
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="This is the sample comment ">
                                                                            </td>
                                                                            <td class="data--Status data-cell">
                                                                                <div class="indicator"></div>
                                                                                <select class="form-select"
                                                                                    id="data_status-select">
                                                                                    <option selected>Choose...</option>
                                                                                    <option value="1">Deal close
                                                                                        successfully </option>
                                                                                    <option value="2">Pending</option>
                                                                                    <option value="3">Not responding
                                                                                    </option>
                                                                                </select>
                                                                            </td>
                                                                            <td class="data--manager-comment data-cell">
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="This is the sample comment ">
                                                                            </td>
                                                                            <td class="data--report data-cell">
                                                                                <a href="#" class="download-btn">
                                                                                    <i class="bi bi-download"></i>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="indicator-block">
                                                                <div class="label"><span
                                                                        class="green-background"></span>Deal close
                                                                    successfully</div>
                                                                <div class="label"><span
                                                                        class="yellow-background"></span>Pending</div>
                                                                <div class="label"><span
                                                                        class="red-background"></span>Not
                                                                    Responding</div>
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
        </div>
    </section>
    

@endsection



@push('after-scripts')

   

@endpush