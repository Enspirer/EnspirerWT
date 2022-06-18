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
                                                <a class="breadcrumb-link">Conversations</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#" class="breadcrumb-link breadcrumb-arrow"><i
                                                        class="bi bi-chevron-right"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a class="breadcrumb-link breadcrumb-current">Spam</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col">
                                        <section class="coversation-section ims__panel" id="ims__conversation">
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
                                                                                <img src="{{url('images/Profile.jpg')}}" >
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
                                                                                <img src="{{url('images/Profile.jpg')}}" >
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