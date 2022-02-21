@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
   

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
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ul>
                        </div>

                        <!-- Dashboard -->

                        <section id="sectionHeader">
                            <div class="row g-0">
                                <div class="header-block mb-xxl-5 mb-4">
                                    <div class="row g-0 align-items-center justify-content-between">
                                        <div class="col-auto">
                                            <h2 class="title">Good Morning, {{auth()->user()->first_name}}</h2>
                                            <span class="sub-title">Here's your websites situation for today</span>
                                        </div>
                                        <div class="col-auto my-xxl-0 my-4">
                                            <div class="row gy-0 gx-3 justify-content-end flex-sm-nowrap">
                                                <div class="col-12 col-sm-auto my-sm-0 my-2">
                                                    <div class="input-group">
                                                        <label for="datePicker" class="form-label">
                                                            <i class="bi bi-calendar3"></i>
                                                            <span>22 February 2022</span>
                                                            <i class="bi bi-chevron-down"></i>
                                                        </label>
                                                        <!-- <input type="date" class="form-control" id="datePicker"> -->
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-auto my-sm-0 my-2">
                                                    <button class="btn btn-optimize">Optimize</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        @foreach($project_details as $project_detail)
                            <section id="sectionProperties">
                                <div class="property-block mb-5">
                                    <div class="row g-0 p-4 border-bottom justify-content-between">
                                        <div class="col-12 col-xl-auto p-2">
                                            <div class="property-name">
                                                <span class="pro-name">{{$project_detail->name}}</span>
                                                <span class="pro-url">{{$project_detail->url}}</span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-auto p-2">
                                            <div class="button-block">
                                                <div
                                                        class="row gx-3 justify-content-xxl-end align-items-center flex-sm-row flex-column">
                                                    <div class="col-sm-auto col-7 my-sm-0 my-2 order-xl-1 order-2">
                                                        <a href="{{route('frontend.user.project.seo',$project_detail->id)}}" type="button" class="btn"><i
                                                                    class="bi bi-x-diamond-fill"></i>Open</a>
                                                    </div>
                                                    <div class="col-sm-auto col-7 my-sm-0 my-2 order-xl-2 order-3">
                                                        <button type="button" class="btn"><i
                                                                    class="bi bi-x-diamond-fill"></i>Sample</button>
                                                    </div>
                                                    <div class="col-12 col-xl-auto order-xl-3 order-1 my-3">
                                                        <div class="form-check form-switch">
                                                            <label class="form-check-label"
                                                                   for="flexSwitchCheckDefault">Email
                                                                Notifications</label>
                                                            <input class="form-check-input" type="checkbox" role="switch"
                                                                   id="flexSwitchCheckDefault">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-auto col-7 my-sm-0 my-2 order-4">
                                                        <button type="button" class="btn"><i
                                                                    class="bi bi-trash"></i>Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-0 py-2 align-items-center">
                                        <div class="col-xxl-4 my-3 info-blocks seo-block">
                                            <div class="row g-0 justify-content-evenly">
                                                <div class="col-md-auto col-8">
                                                    <span class="block-title">SEO Result</span>
                                                    <span class="seo-result">69/100</span>
                                                </div>
                                                <div class="col-md-6 col-8">
                                                    <span class="precentage">86.0<span class="sign">%</span></span>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 25%"
                                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 my-3 info-blocks analytics-block">
                                            <div class="block-content">
                                                <div class="row g-0 justify-content-evenly align-items-end">
                                                    <div class="col-sm-auto col-8 my-sm-0 my-2">
                                                        <span class="block-title mb-2">Analytics Result</span>
                                                        <span class="sub-title">Visitors</span>
                                                        <span class="precentage up"><i
                                                                    class="bi bi-graph-up-arrow up"></i>86.6%</span>
                                                    </div>
                                                    <div class="col-sm-auto col-8 my-sm-0 my-2">
                                                        <span class="sub-title">Pageviews</span>
                                                        <span class="precentage down"><i
                                                                    class="bi bi-graph-down-arrow down"></i>86.6%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 my-3 info-blocks statics-block">
                                            <div class="row g-0 justify-content-evenly">
                                                <div class="col-md-5 col-8">
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <div class="issues-blocks">
                                                                <div class="issue-info">
                                                                <span class="info"><i
                                                                            class="bi bi-triangle-fill red"></i>3
                                                                    high
                                                                    issues</span>
                                                                    <span class="info-prec">3.0%</span>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                                         style="width: 100%" aria-valuenow="100"
                                                                         aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <div class="issues-blocks">
                                                                <div class="issue-info">
                                                                <span class="info"><i
                                                                            class="bi bi-square-fill yellow"></i>3
                                                                    medium
                                                                    issues</span>
                                                                    <span class="info-prec">3.0%</span>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                                         style="width: 75%" aria-valuenow="75"
                                                                         aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5 col-8">
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <div class="issues-blocks">
                                                                <div class="issue-info">
                                                                <span class="info"><i
                                                                            class="bi bi-circle-fill gray"></i>2
                                                                    low issues</span>
                                                                    <span class="info-prec">2.0%</span>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-secondary"
                                                                         role="progressbar" style="width: 25%"
                                                                         aria-valuenow="25" aria-valuemin="0"
                                                                         aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <div class="issues-blocks">
                                                                <div class="issue-info">
                                                                <span class="info"><i
                                                                            class="bi bi-star-fill blue"></i>22
                                                                    test passed</span>
                                                                    <span class="info-prec">82.0%</span>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar"
                                                                         style="width: 25%" aria-valuenow="25"
                                                                         aria-valuemin="0" aria-valuemax="100"></div>
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
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </section>

    
    
@endsection
