@extends('frontend.layouts.dashboard_app')

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

                        <!-- Section Reports Main End -->

                        <div class="breadcrumb-block">
                            <ul class="breadcrumb mb-5">
                                <li class="breadcrumb-item"><a href="{{route('frontend.user.project.index')}}">Projects</a></li>
                                <li class="breadcrumb-item">{{App\Models\Projects::where('id',$project_id)->first()->name}}</li>
                                <li class="breadcrumb-item active">SEO</li>
                            </ul>
                        </div>

                        <section id="sectionTabs">
                            @include('frontend.user.projects.includes.card_section')
                        </section>

                        <section id="sectionTabNavs">
                            <div class="row g-0 mb-5">
                                <div class="col">
                                    <div class="inner-wrapper">
                                        <ul class="navbar-nav row g-0 flex-row">
                                            <div class="col">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link p-3 active">
                                                        <i class="bi bi-clipboard-data"></i>
                                                        <span class="text">Overview</span>
                                                    </a>
                                                </li>
                                            </div>
                                            <div class="col">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link p-3">
                                                        <i class="bi bi-search-heart"></i>
                                                        <span class="text">SEO</span>
                                                    </a>
                                                </li>
                                            </div>
                                            <div class="col">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link p-3">
                                                        <i class="bi bi-speedometer2"></i>
                                                        <span class="text">Performance</span>
                                                    </a>
                                                </li>
                                            </div>
                                            <div class="col">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link p-3">
                                                        <i class="bi bi-shield-check"></i>
                                                        <span class="text">Security</span>
                                                    </a>
                                                </li>
                                            </div>
                                            <div class="col">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link p-3">
                                                        <i class="bi bi-person"></i>
                                                        <span class="text">Miscellaneous</span>
                                                    </a>
                                                </li>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Analytics -->


                        <!-- Visitors -->


                        <!-- SEO -->

                        <section id="sectionSEOBlock">
                            <div class="inner-wrapper p-4 mb-5">
                                <div class="row g-0 pb-3 border-bottom align-items-center justify-content-between">
                                    <div class="col-auto titile">Overview</div>
                                    <div class="col-auto duration">3 days ago</div>
                                </div>
                                <div class="row g-0">
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                        <div class="statics-block">
                                            <div class="row my-4">
                                                <div class="col">
                                                    <div class="issues-blocks">
                                                        <div class="issue-info">
                                                <span class="info"><i class="bi bi-triangle-fill red"></i>3
                                                    high
                                                    issues</span>
                                                            <span class="info-prec">3.0%</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-danger" role="progressbar"
                                                                 style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row my-4">
                                                <div class="col">
                                                    <div class="issues-blocks">
                                                        <div class="issue-info">
                                                <span class="info"><i class="bi bi-square-fill yellow"></i>3
                                                    medium
                                                    issues</span>
                                                            <span class="info-prec">3.0%</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                 style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row my-4">
                                                <div class="col">
                                                    <div class="issues-blocks">
                                                        <div class="issue-info">
                                                <span class="info"><i class="bi bi-circle-fill gray"></i>2
                                                    low issues</span>
                                                            <span class="info-prec">2.0%</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-secondary" role="progressbar"
                                                                 style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row my-4">
                                                <div class="col">
                                                    <div class="issues-blocks">
                                                        <div class="issue-info">
                                                <span class="info"><i class="bi bi-star-fill blue"></i>22
                                                    test passed</span>
                                                            <span class="info-prec">82.0%</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 25%"
                                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4"></div>
                                </div>
                            </div>
                        </section>

                        <!-- Whatsapp Chat Blocks -->

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection