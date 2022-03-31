@extends('frontend.layouts.mobile_app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<link rel="stylesheet" href="{{url('css/mobile_main.css')}}">
<link rel="stylesheet" href="{{url('css/mobile_analytics.css')}}">
<script src="https://cdn.jsdelivr.net/npm/echarts@5.3.1/dist/echarts.js"></script>

@include('frontend.mobile.includes.top_nav')

<div class="section-analytics">
    <div class="mobile-container">
        <div class="inner-container">
            @include('frontend.mobile.includes.analytics_dropdown')
            @include('frontend.mobile.includes.property')
            <div class="data-header">
                <div class="data-row">
                    <div class="info-block">
                        <div class="info-header">
                            <i class="bi bi-square-fill blue"></i>
                            <div class="text">Visitors</div>
                            <i class="bi bi-info-circle"></i>
                        </div>
                        <div class="precentage">
                            <i class="bi bi-arrow-up-right green"></i>
                            <div class="text green">10.9%</div>
                        </div>
                    </div>
                    <div class="count">61</div>
                </div>
                <div class="data-row">
                    <div class="info-block">
                        <div class="info-header">
                            <i class="bi bi-square-fill red"></i>
                            <div class="text">Pageviews</div>
                            <i class="bi bi-info-circle"></i>
                        </div>
                        <div class="precentage">
                            <i class="bi bi-arrow-down-right red"></i>
                            <div class="text red">10.9%</div>
                        </div>
                    </div>
                    <div class="count">341</div>
                </div>
            </div>
            <div class="analytic-card">
                <div class="header">
                    <div class="title">Title</div>
                    <div class="options">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search">
                            <button class="filter-btn" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="bi bi-funnel-fill"></i></button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <div class="dropdown-wrapper">
                                    <div class="header">Filters</div>
                                    <div class="form-content">
                                        <form action="">
                                            <label for="dataFilter" class="form-label">Sort</label>
                                            <select id="dataFilter" class="form-select">
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
                        <div class="title">Name</div>
                        <div class="title">Visitors</div>
                    </div>
                    <div class="row-subtitle">
                        <div class="subtitle">Total</div>
                        <div class="status">
                            <div class="total-count">67</div>
                            <div class="total-precentage">10%</div>
                        </div>
                    </div>
                    <div class="row-data">
                        <a href="#" class="row-link">
                            <div class="info-row">
                                <div class="info">
                                    <i class="bi bi-link-45deg"></i>
                                    <div class="text">tallentor.com/</div>
                                </div>
                                <div class="status">
                                    <div class="total-count">67</div>
                                    <div class="total-precentage">10%</div>
                                </div>
                            </div>
                            <div class="row-progress">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row-data">
                        <a href="#" class="row-link">
                            <div class="info-row">
                                <div class="info">
                                    <i class="bi bi-link-45deg"></i>
                                    <div class="text">tallentor.com/</div>
                                </div>
                                <div class="status">
                                    <div class="total-count">67</div>
                                    <div class="total-precentage">10%</div>
                                </div>
                            </div>
                            <div class="row-progress">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row-footer">
                        <a href="#" class="row-link">View All</a>
                        <div class="data-nav">
                            <div class="page-count">Showing <span>1</span> - <span>10</span> of <span>85</span></div>
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('frontend.mobile.includes.bottom_nav')
    
@endsection

@push('after-scripts')

@endpush