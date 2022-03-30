@extends('frontend.layouts.mobile_app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<link rel="stylesheet" href="{{url('css/mobile_main.css')}}">
<link rel="stylesheet" href="{{url('css/mobile_analytics.css')}}">

@include('frontend.mobile.includes.top_nav')

<div class="section-analytics">
    <div class="mobile-container">
        <div class="inner-container">
            <div class="dropdown analytics-dropdown">
                <a class="analytics-dropdown-btn" href="#" role="button" id="analyticsDrop" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-bar-chart-fill"></i>
                    <div class="text">Overview</div>
                    <i class="bi bi-list"></i>
                </a>

                <ul class="dropdown-menu" aria-labelledby="analyticsDrop">
                    <li><a class="dropdown-item dropdown-cat" href="#">Overview</a></li>
                    <li><a class="dropdown-item dropdown-cat" href="#">Behavior</a></li>
                    <li><a class="dropdown-item" href="#">Pages</a></li>
                    <li><a class="dropdown-item" href="#">Landing Pages</a></li>
                    <li><a class="dropdown-item dropdown-cat" href="#">Acquisitions</a></li>
                    <li><a class="dropdown-item" href="#">Referrers</a></li>
                    <li><a class="dropdown-item" href="#">Search engines</a></li>
                    <li><a class="dropdown-item" href="#">Social networks</a></li>
                    <li><a class="dropdown-item" href="#">Campaigns</a></li>
                    <li><a class="dropdown-item dropdown-cat" href="#">Geographic</a></li>
                    <li><a class="dropdown-item" href="#">Continents</a></li>
                    <li><a class="dropdown-item" href="#">Countries</a></li>
                    <li><a class="dropdown-item" href="#">Cities</a></li>
                    <li><a class="dropdown-item" href="#">Languages</a></li>
                    <li><a class="dropdown-item dropdown-cat" href="#">Technology</a></li>
                    <li><a class="dropdown-item" href="#">Operating systems</a></li>
                    <li><a class="dropdown-item" href="#">Browsers</a></li>
                    <li><a class="dropdown-item" href="#">Screen resolutions</a></li>
                    <li><a class="dropdown-item" href="#">Devices</a></li>
                    <li><a class="dropdown-item dropdown-cat" href="#">Events</a></li>
                </ul>
            </div>
            <div class="header">
                <div class="content-block">
                    <div class="properties">
                        <div class="dropdown">
                            <a class="property-dropdown" href="#" role="button" id="propertyDrop"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="property">
                                    <img src="{{url('images/mobile/home/property-image.png')}}" alt="" class="property-image">
                                    <div class="content">
                                        <div class="title">Tallentor</div>
                                        <div class="address">https://tallentor.com/</div>
                                    </div>
                                </div>
                                <img src="{{url('images/mobile/home/chevron-down.png')}}" alt="">
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="propertyDrop">
                                <li><a class="dropdown-item" href="#">
                                        <div class="property">
                                            <img src="{{url('images/mobile/home/property-image.png')}}" alt="" class="property-image">
                                            <div class="content">
                                                <div class="title">Tallentor</div>
                                                <div class="address">https://tallentor.com/</div>
                                            </div>
                                            <i class="bi bi-chevron-right"></i>
                                        </div>
                                    </a>
                                </li>
                                <li><a class="dropdown-item" href="#">
                                        <div class="property">
                                            <img src="{{url('images/mobile/home/property-image.png')}}" alt="" class="property-image">
                                            <div class="content">
                                                <div class="title">Tallentor</div>
                                                <div class="address">https://tallentor.com/</div>
                                            </div>
                                            <i class="bi bi-chevron-right"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="filter">
                        <a class="datepicker" href="#">
                            <img src="{{url('images/mobile/home/calender.png')}}" alt="">
                            <input type="text" name="date-filter" class="filter-date-input">
                        </a>
                    </div>
                </div>
            </div>
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
                            <div class="text">Visitors</div>
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
        </div>
    </div>
</div>

@include('frontend.mobile.includes.bottom_nav')
    
@endsection

@push('after-scripts')

<script>
    // Filter Datepicker
    window.addEventListener('DOMContentLoaded', function () {

        jQuery('.filter-date-input').daterangepicker({

            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            },
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
            "startDate": "2022-03-22",
            "endDate": "2022-03-28",
            "opens": "left",
            "linkedCalendars": false,
            "alwaysShowCalendars": true
        });
    });

    // Radar tooltips
    // const radarSection = document.querySelector('.radar-section');
    // const particle = radarSection.querySelectorAll('.particle');

    // particle.forEach(function (dot) {
    //     dot.addEventListener("click", function () {

    //         particle.forEach(function (label) {
    //             label.classList.remove('active');
    //         });

    //         dot.classList.add('active');
    //     })
    // });

    // Visitors List tooltip

    // const visitorsSection = document.querySelector('.visitors-section');
    // const indicatorTd = visitorsSection.querySelectorAll('.active-status');
    // const label = visitorsSection.querySelectorAll('.label');

    // indicatorTd.forEach(function (ind) {
    //     ind.addEventListener("click", function () {

    //         indicatorTd.forEach(function (ind) {
    //             ind.querySelector('.label').classList.remove('active');
    //         });

    //         ind.querySelector('.label').classList.add('active');
    //     });
    // });

    // remove added active classes in the page

    // window.addEventListener("click", function (e) {

    //     const liveStatus = e.target.classList.contains('indicator');
    //     const particles = e.target.classList.contains('particle-indicator');

    //     console.log(e.target);

    //     particle.forEach(function (label) {
    //         label.classList.remove('active');
    //     });

    //     indicatorTd.forEach(function (ind) {
    //         ind.querySelector('.label').classList.remove('active');
    //     });
    // })
</script>

@endpush