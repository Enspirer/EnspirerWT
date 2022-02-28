@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/projects.css')}}">
   

    <section id="sectionMainWindow">
        @include('frontend.includes.sidebar')

        <div id="sectionBody">
            @include('frontend.includes.nav')
            
            <!-- Content goes here -->
            <div class="row g-0">
                <div class="section-content">
                    <div class="section-container">
                        <div class="breadcrumb-block">
                            <ul class="breadcrumb mb-5">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Projecets</li>
                            </ul>
                        </div>

                        <!-- Dashboard -->

                        <section class="section-project-reports">
                            <div class="row g-0">
                                <div class="header">
                                    <div class="title">Reports</div>
                                    <div class="search-block">
                                        <div class="input-group">
                                            <input type="search" class="form-control">
                                            <span class="input-group-text">
                                                <a href="#" class="search-btn">
                                                    <i class="bi bi-search"></i>
                                                </a>
                                            </span>
                                        </div>
                                        <a href="#" class="report-download">
                                            <i class="bi bi-box-arrow-in-down"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th>URL</th>
                                            <th>SEO Result</th>
                                            <th>Analytics Result</th>
                                            <th>Generate at</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="col-3">
                                                <div class="propery">
                                                    <img src="{{url('images/Tallentor.png')}}" alt="">
                                                    <div class="name">
                                                        www.tallentor.com
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="col-3">
                                                <div class="seo-result">
                                                    <div class="progress">
                                                        <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="precentage">69/100</div>
                                                </div>
                                            </td>
                                            <td class="col-3">
                                                <div class="analytics-block">
                                                    <div class="visitors-block up">
                                                        <div class="name">Visitors</div>
                                                        <div class="icon-block">
                                                            <i class="bi bi-graph-up-arrow"></i>
                                                            <div class="precentage">86.6%</div>
                                                        </div>
                                                    </div>
                                                    <div class="pageviews-block down">
                                                        <div class="name">Pageviews</div>
                                                        <div class="icon-block">
                                                            <i class="bi bi-graph-down-arrow"></i>
                                                            <div class="precentage">86.6%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="col-2">
                                                <div class="time">19 hours ago</div>
                                            </td>
                                            <td class="col-1">
                                                <a href="#" class="more-option-btn">
                                                    <i class="bi bi-three-dots"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-3">
                                                <div class="propery">
                                                    <img src="{{url('images/Tallentor.png')}}" alt="">
                                                    <div class="name">
                                                        www.tallentor.com
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="col-3">
                                                <div class="seo-result">
                                                    <div class="progress">
                                                        <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="precentage">69/100</div>
                                                </div>
                                            </td>
                                            <td class="col-3">
                                                <div class="analytics-block">
                                                    <div class="visitors-block up">
                                                        <div class="name">Visitors</div>
                                                        <div class="icon-block">
                                                            <i class="bi bi-graph-up-arrow"></i>
                                                            <div class="precentage">86.6%</div>
                                                        </div>
                                                    </div>
                                                    <div class="pageviews-block down">
                                                        <div class="name">Pageviews</div>
                                                        <div class="icon-block">
                                                            <i class="bi bi-graph-down-arrow"></i>
                                                            <div class="precentage">86.6%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="col-2">
                                                <div class="time">19 hours ago</div>
                                            </td>
                                            <td class="col-1">
                                                <a href="#" class="more-option-btn">
                                                    <i class="bi bi-three-dots"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>


                    </div>
                </div>
            </div>
        </div>
    </section>

    
    
@endsection
