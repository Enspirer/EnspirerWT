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
                                                <a class="breadcrumb-link breadcrumb-current">Analytics</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col">                                        
                                    
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
        
    </section>
    

@endsection



@push('after-scripts')

   

@endpush