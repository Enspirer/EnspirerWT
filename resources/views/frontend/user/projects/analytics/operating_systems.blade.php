@extends('frontend.layouts.widget_ims_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/analytics.css')}}">

<section class="ims__section">
        @include('frontend.user.projects.includes.analytics_sidebar')
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
                                            <!-- <li class="breadcrumb-item">
                                                <a class="breadcrumb-link">Conversations</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#" class="breadcrumb-link breadcrumb-arrow"><i
                                                        class="bi bi-chevron-right"></i></a>
                                            </li> -->
                                            <li class="breadcrumb-item">
                                                <a class="breadcrumb-link breadcrumb-current">Analytics</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row g-0 mb-3">
                                    <div class="col">
                                        <div class="data-title-bar">
                                            <h2 class="title">tallentor.com</h2>
                                            <div class="option-block">
                                                <a href="#" target="_blank" class="open">
                                                    <div class="text">Open</div>
                                                    <i class="bi bi-box-arrow-up-right"></i>
                                                </a>
                                                <input type="text" id="dateRange" value="01/01/2018 - 01/15/2018" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0 mb-5">
                                    <div class="col">
                                        @include('frontend.user.projects.includes.analytics_nav')
                                    </div>
                                </div>
                                <div class="row g-0 mb-4">
                                    <div class="col">
                                        <div class="data-header">
                                            <div class="inner-wrapper">
                                                <div class="icon-block">
                                                    <div class="icon">
                                                        <i class="bi bi-graph-up-arrow"></i>
                                                    </div>
                                                </div>
                                                <div class="info-block">
                                                    <div class="block-1">
                                                        <div class="header">
                                                            <div class="inner-content">
                                                                <div class="primary-icon">
                                                                    <i class="bi bi-check-square-fill"></i>
                                                                </div>
                                                                <div class="title">Sample Title</div>
                                                                <div class="secondary-icon">
                                                                    <i class="bi bi-info-circle"></i>
                                                                </div>
                                                            </div>
                                                            <div class="count">10</div>
                                                        </div>
                                                        <div class="info">
                                                            <div class="inner-content">
                                                                <div class="icon-main">
                                                                    <i class="bi bi-activity"></i>
                                                                </div>
                                                                <div class="text">Sample Text Here</div>
                                                            </div>
                                                            <div class="precentage">20%</div>
                                                        </div>
                                                    </div>
                                                    <div class="block-2">
                                                        <div class="header">
                                                            <div class="inner-content">
                                                                <div class="primary-icon">
                                                                    <i class="bi bi-check-square-fill"></i>
                                                                </div>
                                                                <div class="title">Sample Title</div>
                                                                <div class="secondary-icon">
                                                                    <i class="bi bi-info-circle"></i>
                                                                </div>
                                                            </div>
                                                            <div class="count">10</div>
                                                        </div>
                                                        <div class="info">
                                                            <div class="inner-content">
                                                                <div class="icon-main">
                                                                    <i class="bi bi-activity"></i>
                                                                </div>
                                                                <div class="text">Sample Text Here</div>
                                                            </div>
                                                            <div class="precentage">20%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="data-chart">
                                            <div class="inner-wrapper">
                                                <div class="header">
                                                    <div class="title">Title</div>
                                                    <div class="options">
                                                        <div class="input-group">
                                                            <input type="search" class="form-control" placeholder="Search">
                                                            <button class="dropdown-toggle filter-btn" type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false"><i class="bi bi-funnel-fill"></i></button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <div class="dropdown-wrapper">
                                                                    <div class="header">Filters</div>
                                                                    <div class="form-content">
                                                                        <form action="">
                                                                            <label for="dataFilter" class="form-label">Sort</label>
                                                                            <select id="dataFilter" class="form-select mb-3">
                                                                                <option selected>Best Profoming</option>
                                                                                <option>Least Profoming</option>
                                                                            </select>
                                                                            <button type="button" class="search-btn">Search</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </ul>
                                                        </div>
                                                        <a href="#" class="report-download">
                                                            <i class="bi bi-download"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="row-title">
                                                        <div class="title">Website</div>
                                                        <div class="title">Visitors</div>
                                                    </div>
                                                    <div class="row-subtitle">
                                                        <div class="subtitle">Total</div>
                                                        <div class="status">
                                                            <div class="total-count">37</div>
                                                            <div class="total-precentage">100%</div>
                                                        </div>
                                                    </div>
                                                    <div class="row-data">
                                                        <div class="row-info">
                                                            <div class="info">
                                                                <div class="icon-primary"><i class="bi bi-globe2"></i></div>
                                                                <div class="text">tallentor.com</div>
                                                                <div class="icon-secondary"><a href="#"><i class="bi bi-box-arrow-up-right"></i></a></div>
                                                            </div>
                                                            <div class="count">
                                                                <div class="total-count">37</div>
                                                                <div class="total-precentage">100%</div>
                                                            </div>
                                                        </div>
                                                        <div class="row-progress">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row-footer">
                                                        <div class="item-count">Showing <span class="current">1-10</span> of <span class="total">57</span></div>
                                                        <ul class="pagination">
                                                            <li class="page-item disabled"><a class="page-link" href="#"><i class="bi bi-chevron-left"></i></a></li>
                                                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                            <li class="page-item"><a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a></li>
                                                        </ul>
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
            </div>
        
    </section>
    

@endsection



@push('after-scripts')


@endpush