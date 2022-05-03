@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<!-- Datepicker -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<link rel="stylesheet" href="{{url('css/heatmap.css')}}">

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
                                <li class="breadcrumb-item active">Heatmaps</li>
                            </ul>
                        </div>

                        @include('frontend.user.projects.includes.card_section')
                        
                        <div class="row g-0 my-5">
                            <div class="col">
                                <div class="heatmap-header">
                                    <a class="datepicker" href="#">
                                        <div class="text">
                                            <i class="bi bi-calendar4-week"></i>
                                            <div class="date" data-date>22 February 2022</div>
                                            <i class="bi bi-chevron-down"></i>
                                        </div>
                                        <input type="text" name="date-filter" class="filter-date-input">
                                    </a>
                                    <a href="#" class="btn-export">Export</a>
                                </div>
                            </div>
                        </div>

                        <div class="row g-0">
                            <div class="col">
                                <div class="heatmap-overview">
                                    <div class="pages-section">
                                        <div class="pages-block">
                                            <div class="headar">
                                                Top Pages
                                            </div>
                                            <div class="body">
                                                <div class="page-item active">
                                                    <a href="#" class="page-link">
                                                        <div class="rank">#1</div>
                                                        <div class="text-block">
                                                            <div class="title">Tallentor Home Page</div>
                                                            <div class="text">tallento.com/home</div>
                                                        </div>
                                                        <div class="count">180</div>
                                                    </a>
                                                </div>
                                                <div class="page-item">
                                                    <a href="#" class="page-link">
                                                        <div class="rank">#2</div>
                                                        <div class="text-block">
                                                            <div class="title">Tallentor Home Page</div>
                                                            <div class="text">tallento.com/home</div>
                                                        </div>
                                                        <div class="count">180</div>
                                                    </a>
                                                </div>
                                                <div class="page-item">
                                                    <a href="#" class="page-link">
                                                        <div class="rank">#2</div>
                                                        <div class="text-block">
                                                            <div class="title">Tallentor Home Page</div>
                                                            <div class="text">tallento.com/home</div>
                                                        </div>
                                                        <div class="count">180</div>
                                                    </a>
                                                </div>
                                                <div class="page-item">
                                                    <a href="#" class="page-link">
                                                        <div class="rank">#2</div>
                                                        <div class="text-block">
                                                            <div class="title">Tallentor Home Page</div>
                                                            <div class="text">tallento.com/home</div>
                                                        </div>
                                                        <div class="count">180</div>
                                                    </a>
                                                </div>
                                                <div class="page-item">
                                                    <a href="#" class="page-link">
                                                        <div class="rank">#2</div>
                                                        <div class="text-block">
                                                            <div class="title">Tallentor Home Page</div>
                                                            <div class="text">tallento.com/home</div>
                                                        </div>
                                                        <div class="count">180</div>
                                                    </a>
                                                </div>
                                                <div class="page-item">
                                                    <a href="#" class="page-link">
                                                        <div class="rank">#2</div>
                                                        <div class="text-block">
                                                            <div class="title">Tallentor Home Page</div>
                                                            <div class="text">tallento.com/home</div>
                                                        </div>
                                                        <div class="count">180</div>
                                                    </a>
                                                </div>
                                                <div class="page-item">
                                                    <a href="#" class="page-link">
                                                        <div class="rank">#2</div>
                                                        <div class="text-block">
                                                            <div class="title">Tallentor Home Page</div>
                                                            <div class="text">tallento.com/home</div>
                                                        </div>
                                                        <div class="count">180</div>
                                                    </a>
                                                </div>
                                                <div class="page-item">
                                                    <a href="#" class="page-link">
                                                        <div class="rank">#2</div>
                                                        <div class="text-block">
                                                            <div class="title">Tallentor Home Page</div>
                                                            <div class="text">tallento.com/home</div>
                                                        </div>
                                                        <div class="count">180</div>
                                                    </a>
                                                </div>
                                                <div class="page-item">
                                                    <a href="#" class="page-link">
                                                        <div class="rank">#2</div>
                                                        <div class="text-block">
                                                            <div class="title">Tallentor Home Page</div>
                                                            <div class="text">tallento.com/home</div>
                                                        </div>
                                                        <div class="count">180</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="legend-block">
                                            <div class="title">Color legend</div>
                                            <ul class="legend-bar">
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="heatmap-block">
                                        <div class="header">
                                            <div class="button-block btns-left">
                                                <a href="#" class="btn-link">
                                                    <i class="bi bi-filter"></i>
                                                    <div class="text">Segments</div>
                                                </a>
                                                <a href="#" class="btn-link">
                                                    <i class="bi bi-display"></i>
                                                    <div class="text">Device</div>
                                                </a>
                                            </div>
                                            <div class="button-block btns-middle">
                                                <a href="#" class="btn-link active">
                                                    <i class="bi bi-newspaper"></i>
                                                    <div class="text">Heatmap</div>
                                                </a>
                                                <a href="#" class="btn-link">
                                                    <i class="bi bi-file-earmark-text"></i>
                                                    <div class="text">Forms</div>
                                                </a>
                                                <a href="#" class="btn-link">
                                                    <i class="bi bi-layout-wtf"></i>
                                                    <div class="text">Elements</div>
                                                </a>
                                                <a href="#" class="btn-link">
                                                    <i class="bi bi-camera-video-fill"></i>
                                                    <div class="text">Recording</div>
                                                </a>
                                            </div>
                                            <div class="button-block btns-right">
                                                <a href="#" class="btn-link">
                                                    <i class="bi bi-question-circle"></i>
                                                </a>
                                                <a href="#" class="btn-screencap">
                                                    <i class="bi bi-camera-fill"></i>
                                                    <div class="text">Screenshot</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <iframe src="https://tallentor.com/" class="map-frame"></iframe>
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

<script>
    // Filter Datepicker
    window.addEventListener('DOMContentLoaded', function () {

        jQuery('.filter-date-input').daterangepicker({
            
            locale: {
                direction: "ltr",
                format: "YYYY-MM-DD",
                separator: " - ",
                applyLabel: "Apply",
                cancelLabel: "Cancel",
                customRangeLabel: "Custom",
                daysOfWeek: [
                    "Su",
                    "Mo",
                    "Tu",
                    "We",
                    "Th",
                    "Fr",
                    "Sa"
                ],
                monthNames: [
                    "January",
                    "February",
                    "March",
                    "April",
                    "May",
                    "June",
                    "July",
                    "August",
                    "September",
                    "October",
                    "November",
                    "December"
                ]
            },
            "startDate": "2022-05-02",
            "endDate": "2022-05-07",
            "opens": "left",
            "linkedCalendars": false,
            "alwaysShowCalendars": true
        });
    });
</script>

@endpush