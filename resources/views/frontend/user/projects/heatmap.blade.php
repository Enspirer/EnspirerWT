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

                        <div class="row g-0 my-5">
                            <div class="col">
                                <div class="heatmap-overview">
                                    <div class="pages-section">
                                        <div class="pages-block">
                                            <div class="headar">
                                                Top Pages
                                            </div>
                                            <div class="body">

                                                <!-- <div class="page-item active">
                                                    <a href="#" class="page-link">
                                                        <div class="rank">#1</div>
                                                        <div class="text-block">
                                                            <div class="title">Tallentor Home Page</div>
                                                            <div class="text">tallento.com/home</div>
                                                        </div>
                                                        <div class="count">180</div>
                                                    </a>
                                                </div> -->

                                                @if(count($heatmap_dynamic) != 0)
                                                    @foreach($heatmap_dynamic as $heatmap)
                                                        <div class="page-item">
                                                            <a href="{{$heatmap->url}}" class="page-link" target="change_url">
                                                                <!-- <div class="rank">#2</div> -->
                                                                <div class="text-block">
                                                                    <div class="title">{{$project->name}}</div>
                                                                    <div class="text">{{$heatmap->url}}</div>
                                                                </div>
                                                                <div class="count">{{count(App\Models\HeatmapDynamic::where('project_id',$project_id)->where('url',$heatmap->url)->get())}}</div>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                @endif

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
                                            <div class="wrapper" data-simplebar>
                                                @if(count($heatmap_dynamic) != 0)
                                                    @foreach($heatmap_dynamic as $heatmap)
                                                        <iframe src="{{$heatmap->url}}?heatmap=true" name="change_url" class="map-frame"></iframe>
                                                        @break
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-0 my-5">
                            <div class="col">
                                <div class="chart-section">
                                    <div class="chart-block">
                                        <div class="header">
                                            <div class="text-block">
                                                <div class="title">Actions during the session</div>
                                                <div class="text">Popular pages and left the page</div>
                                            </div>
                                            <ul class="legend">
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                        </div>
                                        <div class="body">
                                            <div id="actionChart"></div>
                                        </div>
                                    </div>
                                    <div class="chart-block">
                                        <div class="inner-chart">
                                            <div class="header">Popular Pages</div>
                                            <div class="body">
                                                <div id="pagesChart"></div>
                                            </div>
                                        </div>
                                        <div class="inner-chart">
                                            <div class="header">Event Actions</div>
                                            <div class="body">
                                                <div id="eventChart"></div>
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

<script>
    // Action Chart
    // Initialize the echarts instance based on the prepared dom
    var actionChart = echarts.init(document.getElementById('actionChart'));

    window.onresize = function() {
        actionChart.resize();
    };

    // Specify the configuration items and data for the chart

    // prettier-ignore
    const days = [
        'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'
    ];
    // prettier-ignore
    const actions = [
        'Portfolio View', 'Change setting', 'Sending Inquiries', 'Contact Search',
        'Service Search', 'View feed', 'Profile Filling', 'Registration'
    ];
    // prettier-ignore
    const data = [
            [0, 0, 5],
            [0, 1, 1],
            [0, 2, 0],
            [0, 3, 0],
            [0, 4, 0],
            [0, 5, 0],
            [0, 6, 0],
            [0, 7, 0],
            [0, 8, 0],
            [0, 9, 0],
            [0, 10, 0],
            [0, 11, 2],
            [0, 12, 4],
            [0, 13, 1],
            [0, 14, 1],
            [0, 15, 3],
            [0, 16, 4],
            [0, 17, 6],
            [0, 18, 4],
            [0, 19, 4],
            [0, 20, 3],
            [0, 21, 3],
            [0, 22, 2],
            [0, 23, 5],
            [1, 0, 7],
            [1, 1, 0],
            [1, 2, 0],
            [1, 3, 0],
            [1, 4, 0],
            [1, 5, 0],
            [1, 6, 0],
            [1, 7, 0],
            [1, 8, 0],
            [1, 9, 0],
            [1, 10, 5],
            [1, 11, 2],
            [1, 12, 2],
            [1, 13, 6],
            [1, 14, 9],
            [1, 15, 11],
            [1, 16, 6],
            [1, 17, 7],
            [1, 18, 8],
            [1, 19, 12],
            [1, 20, 5],
            [1, 21, 5],
            [1, 22, 7],
            [1, 23, 2],
            [2, 0, 1],
            [2, 1, 1],
            [2, 2, 0],
            [2, 3, 0],
            [2, 4, 0],
            [2, 5, 0],
            [2, 6, 0],
            [2, 7, 0],
            [2, 8, 0],
            [2, 9, 0],
            [2, 10, 3],
            [2, 11, 2],
            [2, 12, 1],
            [2, 13, 9],
            [2, 14, 8],
            [2, 15, 10],
            [2, 16, 6],
            [2, 17, 5],
            [2, 18, 5],
            [2, 19, 5],
            [2, 20, 7],
            [2, 21, 4],
            [2, 22, 2],
            [2, 23, 4],
            [3, 0, 7],
            [3, 1, 3],
            [3, 2, 0],
            [3, 3, 0],
            [3, 4, 0],
            [3, 5, 0],
            [3, 6, 0],
            [3, 7, 0],
            [3, 8, 1],
            [3, 9, 0],
            [3, 10, 5],
            [3, 11, 4],
            [3, 12, 7],
            [3, 13, 14],
            [3, 14, 13],
            [3, 15, 12],
            [3, 16, 9],
            [3, 17, 5],
            [3, 18, 5],
            [3, 19, 10],
            [3, 20, 6],
            [3, 21, 4],
            [3, 22, 4],
            [3, 23, 1],
            [4, 0, 1],
            [4, 1, 3],
            [4, 2, 0],
            [4, 3, 0],
            [4, 4, 0],
            [4, 5, 1],
            [4, 6, 0],
            [4, 7, 0],
            [4, 8, 0],
            [4, 9, 2],
            [4, 10, 4],
            [4, 11, 4],
            [4, 12, 2],
            [4, 13, 4],
            [4, 14, 4],
            [4, 15, 14],
            [4, 16, 12],
            [4, 17, 1],
            [4, 18, 8],
            [4, 19, 5],
            [4, 20, 3],
            [4, 21, 7],
            [4, 22, 3],
            [4, 23, 0],
            [5, 0, 2],
            [5, 1, 1],
            [5, 2, 0],
            [5, 3, 3],
            [5, 4, 0],
            [5, 5, 0],
            [5, 6, 0],
            [5, 7, 0],
            [5, 8, 2],
            [5, 9, 0],
            [5, 10, 4],
            [5, 11, 1],
            [5, 12, 5],
            [5, 13, 10],
            [5, 14, 5],
            [5, 15, 7],
            [5, 16, 11],
            [5, 17, 6],
            [5, 18, 0],
            [5, 19, 5],
            [5, 20, 3],
            [5, 21, 4],
            [5, 22, 2],
            [5, 23, 0],
            [6, 0, 1],
            [6, 1, 0],
            [6, 2, 0],
            [6, 3, 0],
            [6, 4, 0],
            [6, 5, 0],
            [6, 6, 0],
            [6, 7, 0],
            [6, 8, 0],
            [6, 9, 0],
            [6, 10, 1],
            [6, 11, 0],
            [6, 12, 2],
            [6, 13, 1],
            [6, 14, 3],
            [6, 15, 4],
            [6, 16, 0],
            [6, 17, 0],
            [6, 18, 0],
            [6, 19, 0],
            [6, 20, 1],
            [6, 21, 2],
            [6, 22, 2],
            [6, 23, 6]
        ]
        .map(function (item) {
            return [item[1], item[0], item[2] || '-'];
        });
    var actionChartOption = {
        tooltip: {
            position: 'top'
        },
        xAxis: {
            type: 'category',
            data: days,
            splitArea: {
                show: true
            }
        },
        yAxis: {
            type: 'category',
            data: actions,
            splitArea: {
                show: true
            }
        },
        visualMap: {
            min: 0,
            max: 10,
            calculable: true,
            show: false,
            inRange: {
                color: [
                    '#F4F5F9',
                    '#EFEBFA',
                    '#E8DFFE',
                    '#D2C0FC',
                    '#BAA4F9',
                    '#A189F9',
                    '#836FF5'
                ]
            }
        },
        series: [{
            name: 'Punch Card',
            type: 'heatmap',
            data: data,
            label: {
                show: true
            },
            emphasis: {
                itemStyle: {
                    shadowBlur: 10,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                }
            }
        }]
    };


    // Display the chart using the configuration items and data just specified.
    actionChart.setOption(actionChartOption);
</script>

<script>
    // Pages Chart
    // Initialize the echarts instance based on the prepared dom
    var pagesChart = echarts.init(document.getElementById('pagesChart'));

    window.onresize = function() {
        pagesChart.resize();
    };

    // Specify the configuration items and data for the chart
    var pagesChartOption = {
        tooltip: {
            trigger: 'axis',
            axisPointer: {
                type: 'cross',
                crossStyle: {
                    color: '#999'
                }
            }
        },
        legend: {
            bottom: '0%',
            data: ['Most Visited', 'Leaving Page']
        },
        xAxis: [{
            type: 'category',
            data: ['Search', 'Expert', 'Services', 'Profile', 'Payment'],
            axisPointer: {
                type: 'shadow'
            }
        }],
        yAxis: [{
            type: 'value',
            name: 'Leaving Page',
            min: 0,
            max: 250,
            interval: 50,
            axisLabel: {
                formatter: '{value} k'
            }
        }],
        series: [{
                name: 'Most Visited',
                type: 'bar',
                barWidth: 15,
                itemStyle: {
                    color: '#2A48EE',
                    barBorderRadius: [50, 50, 0, 0]
                },
                tooltip: {
                    valueFormatter: function (value) {
                        return value + ' k';
                    }
                },
                data: [
                    2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3
                ]
            },
            {
                name: 'Leaving Page',
                type: 'bar',
                barWidth: 15,
                itemStyle: {
                    color: '#00AEEF',
                    barBorderRadius: [50, 50, 0, 0]
                },
                tooltip: {
                    valueFormatter: function (value) {
                        return value + ' k';
                    }
                },
                data: [
                    2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3
                ]
            }
        ]
    };

    // Display the chart using the configuration items and data just specified.
    pagesChart.setOption(pagesChartOption);
</script>

<script>
    // Initialize the echarts instance based on the prepared dom
    var eventChart = echarts.init(document.getElementById('eventChart'));

    window.onresize = function() {
        eventChart.resize();
    };

    // Specify the configuration items and data for the chart
    // prettier-ignore
    const eventChartdays = [
        'Apr 6', 'Apr 7', 'Apr 8', 'Apr 9', 'Apr 10', 'Apr 11', 'Apr 12'
    ];
    // prettier-ignore
    const eventChartevents = [
        'Payment', 'Scan', 'Activate', 'Search'
    ];
    // prettier-ignore
    const eventChartdata = [
            [0, 0, 5],
            [0, 1, 1],
            [0, 2, 0],
            [0, 3, 0],
            [0, 4, 0],
            [0, 5, 0],
            [0, 6, 0],
            [0, 7, 0],
            [0, 8, 0],
            [0, 9, 0],
            [0, 10, 0],
            [0, 11, 2],
            [0, 12, 4],
            [0, 13, 1],
            [0, 14, 1],
            [0, 15, 3],
            [0, 16, 4],
            [0, 17, 6],
            [0, 18, 4],
            [0, 19, 4],
            [0, 20, 3],
            [0, 21, 3],
            [0, 22, 2],
            [0, 23, 5],
            [1, 0, 7],
            [1, 1, 0],
            [1, 2, 0],
            [1, 3, 0],
            [1, 4, 0],
            [1, 5, 0],
            [1, 6, 0],
            [1, 7, 0],
            [1, 8, 0],
            [1, 9, 0],
            [1, 10, 5],
            [1, 11, 2],
            [1, 12, 2],
            [1, 13, 6],
            [1, 14, 9],
            [1, 15, 11],
            [1, 16, 6],
            [1, 17, 7],
            [1, 18, 8],
            [1, 19, 12],
            [1, 20, 5],
            [1, 21, 5],
            [1, 22, 7],
            [1, 23, 2],
            [2, 0, 1],
            [2, 1, 1],
            [2, 2, 0],
            [2, 3, 0],
            [2, 4, 0],
            [2, 5, 0],
            [2, 6, 0],
            [2, 7, 0],
            [2, 8, 0],
            [2, 9, 0],
            [2, 10, 3],
            [2, 11, 2],
            [2, 12, 1],
            [2, 13, 9],
            [2, 14, 8],
            [2, 15, 10],
            [2, 16, 6],
            [2, 17, 5],
            [2, 18, 5],
            [2, 19, 5],
            [2, 20, 7],
            [2, 21, 4],
            [2, 22, 2],
            [2, 23, 4],
            [3, 0, 7],
            [3, 1, 3],
            [3, 2, 0],
            [3, 3, 0],
            [3, 4, 0],
            [3, 5, 0],
            [3, 6, 0],
            [3, 7, 0],
            [3, 8, 1],
            [3, 9, 0],
            [3, 10, 5],
            [3, 11, 4],
            [3, 12, 7],
            [3, 13, 14],
            [3, 14, 13],
            [3, 15, 12],
            [3, 16, 9],
            [3, 17, 5],
            [3, 18, 5],
            [3, 19, 10],
            [3, 20, 6],
            [3, 21, 4],
            [3, 22, 4],
            [3, 23, 1],
            [4, 0, 1],
            [4, 1, 3],
            [4, 2, 0],
            [4, 3, 0],
            [4, 4, 0],
            [4, 5, 1],
            [4, 6, 0],
            [4, 7, 0],
            [4, 8, 0],
            [4, 9, 2],
            [4, 10, 4],
            [4, 11, 4],
            [4, 12, 2],
            [4, 13, 4],
            [4, 14, 4],
            [4, 15, 14],
            [4, 16, 12],
            [4, 17, 1],
            [4, 18, 8],
            [4, 19, 5],
            [4, 20, 3],
            [4, 21, 7],
            [4, 22, 3],
            [4, 23, 0],
            [5, 0, 2],
            [5, 1, 1],
            [5, 2, 0],
            [5, 3, 3],
            [5, 4, 0],
            [5, 5, 0],
            [5, 6, 0],
            [5, 7, 0],
            [5, 8, 2],
            [5, 9, 0],
            [5, 10, 4],
            [5, 11, 1],
            [5, 12, 5],
            [5, 13, 10],
            [5, 14, 5],
            [5, 15, 7],
            [5, 16, 11],
            [5, 17, 6],
            [5, 18, 0],
            [5, 19, 5],
            [5, 20, 3],
            [5, 21, 4],
            [5, 22, 2],
            [5, 23, 0],
            [6, 0, 1],
            [6, 1, 0],
            [6, 2, 0],
            [6, 3, 0],
            [6, 4, 0],
            [6, 5, 0],
            [6, 6, 0],
            [6, 7, 0],
            [6, 8, 0],
            [6, 9, 0],
            [6, 10, 1],
            [6, 11, 0],
            [6, 12, 2],
            [6, 13, 1],
            [6, 14, 3],
            [6, 15, 4],
            [6, 16, 0],
            [6, 17, 0],
            [6, 18, 0],
            [6, 19, 0],
            [6, 20, 1],
            [6, 21, 2],
            [6, 22, 2],
            [6, 23, 6]
        ]
        .map(function (item) {
            return [item[1], item[0], item[2]];
        });
    var eventChartOption = {
        tooltip: {
            position: 'top',
            formatter: function (params) {
                return (
                    params.value[2] +
                    ' commits in ' +
                    eventChartdays[params.value[0]] +
                    ' of ' +
                    eventChartevents[params.value[1]]
                );
            }
        },
        grid: {
            left: 2,
            bottom: 10,
            right: 10,
            containLabel: true
        },
        xAxis: {
            type: 'category',
            data: eventChartdays,
            boundaryGap: false,
            splitLine: {
                show: true
            },
            axisLine: {
                show: false
            }
        },
        yAxis: {
            type: 'category',
            data: eventChartevents,
            axisLine: {
                show: false
            }
        },
        series: [{
            name: 'Punch Card',
            type: 'scatter',
            color: '#00AEEF',
            symbolSize: function (val) {
                return val[2] * 2;
            },
            data: eventChartdata,
            animationDelay: function (idx) {
                return idx * 5;
            }
        }]
    };

    // Display the chart using the configuration items and data just specified.
    eventChart.setOption(eventChartOption);
</script>



@endpush