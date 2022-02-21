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

                        <!-- Section Reports Main End -->

                        <div class="breadcrumb-block">
                            <ul class="breadcrumb mb-5">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Reports</li>
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

                        <section id="sectionTabStatics">
                            <div class="inner-wrapper p-4 mb-5">
                                <div class="row g-0 pb-3 border-bottom align-items-center justify-content-between">
                                    <div class="col-auto titile">Overview</div>
                                    <div class="col-auto duration">3 days ago</div>
                                </div>
                                <div class="row g-0">
                                    <div class="col-8">
                                        <div>
                                            <canvas id="myChart"></canvas>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="row g-0 flex-column">
                                            <div class="col my-3">
                                                <div class="info-block-wrapper">
                                                    <div class="row g-0 p-3">
                                                        <div class="col">
                                                            <div class="chart-info-block">
                                                                <div class="title mb-2">
                                                                    <i class="bi bi-square-fill up"></i>
                                                                    <div class="text">Visitors</div>
                                                                    <i class="bi bi-info-circle"></i>
                                                                </div>
                                                                <div class="info">
                                                        <span class="precentage up"><i
                                                                    class="bi bi-graph-up-arrow up"></i>86.6%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="count">15</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col my-3">
                                                <div class="info-block-wrapper">
                                                    <div class="row g-0 p-3">
                                                        <div class="col">
                                                            <div class="chart-info-block">
                                                                <div class="title mb-2">
                                                                    <i class="bi bi-square-fill down"></i>
                                                                    <div class="text">Pageviews</div>
                                                                    <i class="bi bi-info-circle"></i>
                                                                </div>
                                                                <div class="info">
                                                        <span class="precentage down"><i
                                                                    class="bi bi-graph-down-arrow down"></i>86.6%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="count">02</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Visitors -->

                        <section id="sectionVisitors">
                            <div class="row g-4 mb-5">
                                <div class="col-4 h-100">
                                    <div class="visitors-block">
                                        <div class="row g-0 border-bottom py-4 px-5">
                                            <div class="title">Countries</div>
                                        </div>
                                        <div class="row g-0">
                                            <div class="col p-4">
                                                <div class="row g-0 pb-3 border-bottom">
                                                    <div class="header">
                                                        <div class="thead">
                                                            Name
                                                        </div>
                                                        <div class="thead">
                                                            Visitors
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-0 py-3 border-bottom">
                                                    <div class="body">
                                                        <ul class="visitors-list">
                                                            <li class="visitor-item pb-3">
                                                                <div class="row g-0 my-2 justify-content-between">
                                                                    <div class="col-auto">
                                                                        <div class="label">
                                                                            <span class="flag flag-icon flag-icon-lk"></span>
                                                                            <span class="name">Sri Lanka</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="count">4</div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-0 mb-2">
                                                                    <div class="col">
                                                                        <div class="progress">
                                                                            <div class="progress-bar w-75" role="progressbar"
                                                                                 aria-valuenow="75" aria-valuemin="0"
                                                                                 aria-valuemax="100">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="visitor-item pb-3">
                                                                <div class="row g-0 my-2 justify-content-between">
                                                                    <div class="col-auto">
                                                                        <div class="label">
                                                                            <span class="flag flag-icon flag-icon-lk"></span>
                                                                            <span class="name">Sri Lanka</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="count">4</div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-0 mb-2">
                                                                    <div class="col">
                                                                        <div class="progress">
                                                                            <div class="progress-bar w-75" role="progressbar"
                                                                                 aria-valuenow="75" aria-valuemin="0"
                                                                                 aria-valuemax="100">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row g-0 pt-4">
                                                    <div class="footer">
                                                        <a href="#" class="footer-link">View all</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 h-100">
                                    <div class="visitors-block">
                                        <div class="row g-0 border-bottom py-4 px-5">
                                            <div class="title">Browsers</div>
                                        </div>
                                        <div class="row g-0">
                                            <div class="col p-4">
                                                <div class="row g-0 pb-3 border-bottom">
                                                    <div class="header">
                                                        <div class="thead">
                                                            Name
                                                        </div>
                                                        <div class="thead">
                                                            Visitors
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-0 py-3 border-bottom">
                                                    <div class="body">
                                                        <ul class="visitors-list">
                                                            <li class="visitor-item pb-3">
                                                                <div class="row g-0 my-2 justify-content-between">
                                                                    <div class="col-auto">
                                                                        <div class="label">
                                                                            <span class="flag flag-icon flag-icon-lk"></span>
                                                                            <span class="name">Sri Lanka</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="count">4</div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-0 mb-2">
                                                                    <div class="col">
                                                                        <div class="progress">
                                                                            <div class="progress-bar w-75" role="progressbar"
                                                                                 aria-valuenow="75" aria-valuemin="0"
                                                                                 aria-valuemax="100">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="visitor-item pb-3">
                                                                <div class="row g-0 my-2 justify-content-between">
                                                                    <div class="col-auto">
                                                                        <div class="label">
                                                                            <span class="flag flag-icon flag-icon-lk"></span>
                                                                            <span class="name">Sri Lanka</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="count">4</div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-0 mb-2">
                                                                    <div class="col">
                                                                        <div class="progress">
                                                                            <div class="progress-bar w-75" role="progressbar"
                                                                                 aria-valuenow="75" aria-valuemin="0"
                                                                                 aria-valuemax="100">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row g-0 pt-4">
                                                    <div class="footer">
                                                        <a href="#" class="footer-link">View all</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 h-100">
                                    <div class="visitors-block">
                                        <div class="row g-0 border-bottom py-4 px-5">
                                            <div class="title">Operating System</div>
                                        </div>
                                        <div class="row g-0">
                                            <div class="col p-4">
                                                <div class="row g-0 pb-3 border-bottom">
                                                    <div class="header">
                                                        <div class="thead">
                                                            Name
                                                        </div>
                                                        <div class="thead">
                                                            Visitors
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-0 py-3 border-bottom">
                                                    <div class="body">
                                                        <ul class="visitors-list">
                                                            <li class="visitor-item pb-3">
                                                                <div class="row g-0 my-2 justify-content-between">
                                                                    <div class="col-auto">
                                                                        <div class="label">
                                                                            <span class="flag flag-icon flag-icon-lk"></span>
                                                                            <span class="name">Sri Lanka</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="count">4</div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-0 mb-2">
                                                                    <div class="col">
                                                                        <div class="progress">
                                                                            <div class="progress-bar w-75" role="progressbar"
                                                                                 aria-valuenow="75" aria-valuemin="0"
                                                                                 aria-valuemax="100">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="visitor-item pb-3">
                                                                <div class="row g-0 my-2 justify-content-between">
                                                                    <div class="col-auto">
                                                                        <div class="label">
                                                                            <span class="flag flag-icon flag-icon-lk"></span>
                                                                            <span class="name">Sri Lanka</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="count">4</div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-0 mb-2">
                                                                    <div class="col">
                                                                        <div class="progress">
                                                                            <div class="progress-bar w-75" role="progressbar"
                                                                                 aria-valuenow="75" aria-valuemin="0"
                                                                                 aria-valuemax="100">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row g-0 pt-4">
                                                    <div class="footer">
                                                        <a href="#" class="footer-link">View all</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- SEO -->


                        <!-- Whatsapp Chat Blocks -->

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection