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
                    <li class="breadcrumb-item active">Reports</li>
                </ul>
            </div>

            <section id="sectionTabs">
                <div class="row gy-0 gx-5 mb-5">
                    <div class="col">
                        <a href="{{route('frontend.seo')}}" style="text-decoration:none">
                            <div class="tabs p-2">
                                <div class="tab-icon">
                                    <i class="bi bi-search-heart"></i>
                                </div>
                                <div class="tab-title">SEO</div>
                                <div class="tab-info">
                                    <span class="strong-text">82.0</span>
                                    Pass
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <div class="tabs p-2 active">
                            <div class="tab-icon">
                                <i class="bi bi-activity"></i>
                            </div>
                            <div class="tab-title">Analytics</div>
                            <div class="tab-info">
                                <span class="strong-text">03</span>
                                Visitors
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <a href="{{route('frontend.security')}}" style="text-decoration:none">
                            <div class="tabs p-2">
                                <div class="tab-icon">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <div class="tab-title">Security</div>
                                <div class="tab-info">
                                    <span class="strong-text">05</span>
                                    Alerts
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="{{route('frontend.chat')}}" style="text-decoration:none">
                            <div class="tabs p-2">
                                <div class="tab-icon">
                                    <i class="bi bi-chat-dots"></i>
                                </div>
                                <div class="tab-title">Chat</div>
                                <div class="tab-info">
                                    <span class="strong-text">14</span>
                                    Chats
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
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

            <section id="sectionWhatsappWidget">
                <div class="block-1 mb-5">
                    <div class="row g-0 mb-4">
                        <div class="col">
                            <div class="block-title">Chat Application</div>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="inner-wrapper p-4">
                            <div class="col">
                                <div class="row g-0 mb-3">
                                    <div class="col">
                                        <div class="header">
                                            <span class="title">Whatsapp Chat</span>
                                            <i class="bi bi-whatsapp"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row gx-4">
                                    <div class="col-8">
                                        <p class="body-text">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Mollitia sit maxime nam sapiente illum,
                                            consequuntur aperiam quia reprehenderit deserunt delectus quos
                                            nostrum expedita omnis saepe, in labore quidem numquam quaerat.
                                            Mollitia sit maxime nam sapiente illum,
                                            consequuntur aperiam quia reprehenderit.
                                        </p>
                                    </div>
                                    <div class="col-4">
                                        <div class="button-block">
                                            <button class="btn-whatsapp"></i>Create
                                                Widget</button>
                                            <i class="bi bi-whatsapp"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col">
                                        <p class="footer-text">Give users an opportunity to contact you on
                                            Whatsapp straight from your website.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="block-2 mb-5">
                    <div class="row g-0 mb-4">
                        <div class="col">
                            <div class="block-title">Chat Application</div>
                        </div>
                    </div>
                    <div class="row gx-5 justify-content-between">
                        <div class="col-6">
                            <div class="inner-wrapper px-4">
                                <div class="row g-0 mt-4">
                                    <div class="header">
                                        <span class="title">Whatsapp Chat</span>
                                        <i class="bi bi-whatsapp"></i>
                                    </div>
                                </div>
                                <div class="row g-0 my-5">
                                    <div class="col">
                                        <div class="row g-0 mb-2 justify-content-between">
                                            <div class="col-auto">
                                                <div class="progress-label">www.tallentor.com</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="progress-amount">25%</div>
                                            </div>
                                        </div>
                                        <div class="row g-0">
                                            <div class="col">
                                                <div class="progress">
                                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75"
                                                        aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col">
                                        <p class="body-text">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Mollitia sit maxime nam sapiente illum,
                                            consequuntur aperiam quia reprehenderit deserunt delectus.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="innwer-wrapper dotted-border">
                                <button class="btn-whatsapp" data-bs-toggle="modal"
                                    data-bs-target="#whatsappModal">Create
                                    Widget</button>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Modal -->
                <div class="modal fade" id="whatsappModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="block-3">
                                <div class="inner-wrapper">
                                    <div class="row g-0">
                                        <div class="col">
                                            <div class="header py-3">
                                                <i class="bi bi-send-check"></i>
                                                <span class="title">Add the widget to your website</span>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <i class="bi bi-x"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-0 m-4">
                                        <div class="col">
                                            <div class="body">
                                                <div class="body-text">Copy and paste this code into desired
                                                    place of your website (HTML editor, website template,
                                                    theme, etc.</div>
                                                <div class="script-box">
                                                    &lt;script
                                                    src=&quot;https://apps.elfsight.com/p/platform.js&quot;
                                                    defer&gt;&lt;/script&gt;<br>
                                                    &lt;div
                                                    class=&quot;elfsight-app-d0e906db-2d1c-4e4f-a7c8-6ce222c1a8a9&quot;&gt;
                                                    &lt;/div&gt;
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col">
                                            <div class="footer">
                                                <button class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#whatsappModal">I have installed
                                                    code</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>

    
    
@endsection
