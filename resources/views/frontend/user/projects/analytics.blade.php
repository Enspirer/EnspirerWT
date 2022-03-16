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
                                <li class="breadcrumb-item active">Analytics</li>
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
                        
                        <section id="sectionStaticsHeader" class="mb-5">
                            <div class="inner-wrapper">
                                <div class="icon-block">
                                    <div class="icon">
                                        <i class="bi bi-graph-up-arrow"></i>
                                    </div>
                                </div>
                                <div class="info-block">
                                    <div class="block-1">
                                        <div class="content">
                                            <div class="header">
                                                <div class="primary-icon">
                                                    <i class="bi bi-check-square-fill"></i>
                                                </div>
                                                <div class="title">Sample Title</div>
                                                <div class="secondary-icon">
                                                    <i class="bi bi-info-circle"></i>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <div class="icon-main">
                                                    <i class="bi bi-activity"></i>
                                                </div>
                                                <div class="text">Sample Text Here</div>
                                            </div>
                                        </div>
                                        <div class="status">
                                            <div class="count">10</div>
                                            <div class="precentage">20%</div>
                                        </div>
                                    </div>
                                    <div class="block-2">
                                        <div class="content">
                                            <div class="header">
                                                <div class="primary-icon">
                                                    <i class="bi bi-check-square-fill"></i>
                                                </div>
                                                <div class="title">Sample Title</div>
                                                <div class="secondary-icon">
                                                    <i class="bi bi-info-circle"></i>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <div class="icon-main">
                                                    <i class="bi bi-activity"></i>
                                                </div>
                                                <div class="text">Sample Text Here</div>
                                            </div>
                                        </div>
                                        <div class="status">
                                            <div class="count">10</div>
                                            <div class="precentage">20%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> 

                        <section id="sectionDataChart">
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
                                    <div class="data-row-wrapper">
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
                                    </div>
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