@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/analytics.css')}}">

<section class="ims__section">
        @include('frontend.user.projects.includes.analytics_sidebar')
            <div class="ims__main-col">
                @include('frontend.user.projects.includes.analytics_nav')
                <div class="row g-0">
                    <div class="col">
                        <!-- Content goes here -->
                        <div class="ims__body-container" id="ims__main-panel">
                            <div class="ims__inner-container">
                                <div class="row g-0">
                                    <div class="col">
                                        <ul class="breadcrumb">                                            
                                            <!-- <li class="breadcrumb-item">
                                                <a class="breadcrumb-link">Conversations</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#" class="breadcrumb-link breadcrumb-arrow"><i
                                                        class="bi bi-chevron-right"></i></a>
                                            </li> -->
                                            <li class="breadcrumb-item">
                                                <a class="breadcrumb-link breadcrumb-current">Analytics</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row g-0 mb-3">
                                    <div class="col">
                                        @include('frontend.user.projects.includes.analytics_dataTitle')
                                    </div>
                                </div>
                                <div class="row g-0 mb-5">
                                    <div class="col">
                                        @include('frontend.user.projects.includes.analytics_innerNav')
                                    </div>
                                </div>
                                <div class="row g-0 mb-4">
                                    <div class="col">
                                        @include('frontend.user.projects.includes.analytics_dataHeader')
                                    </div>
                                </div>














                                <div class="card-body">
                                    <div style="height: 230px">
                                        <canvas id="trend-chart"></canvas>
                                    </div>
                                    <script>
                                        'use strict';

                                        document.addEventListener("DOMContentLoaded", function() {
                                            Chart.defaults.global.defaultFontFamily = "Inter, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'";

                                            const ctx = document.querySelector('#trend-chart').getContext('2d');
                                            const gradient1 = ctx.createLinearGradient(0, 0, 0, 300);
                                            gradient1.addColorStop(0, 'rgba(0, 132, 255, 0.35)');
                                            gradient1.addColorStop(1, 'rgba(0, 123, 255, 0.01)');

                                            const gradient2 = ctx.createLinearGradient(0, 0, 0, 300);
                                            gradient2.addColorStop(0, 'rgba(220, 53, 69, 0.35)');
                                            gradient2.addColorStop(1, 'rgba(220, 53, 69, 0.01)');

                                            let tooltipTitles = [
                                                @foreach($visitorsMap as $date => $value)
                                                    @if($range['unit'] == 'hour')
                                                        '{{ \Carbon\Carbon::createFromFormat('H', $date)->format(__('H:i')) }}',
                                                    @elseif($range['unit'] == 'day')
                                                        '{{ \Carbon\Carbon::parse($date)->format(__('Y-m-d')) }}',
                                                    @elseif($range['unit'] == 'month')
                                                        '{{ \Carbon\Carbon::parse($date)->format(__('Y-m')) }}',
                                                    @else
                                                        '{{ $date }}',
                                                    @endif
                                                @endforeach
                                            ];

                                            const uniqueColor = '#3584ff';
                                            const pageViewsColor = '#dc3545';

                                            const lineOptions = {
                                                pointRadius: 4,
                                                pointHoverRadius: 6,
                                                hitRadius: 5,
                                                pointHoverBorderWidth: 3,
                                                lineTension: 0,
                                            }

                                            let trendChart = new Chart(ctx, {
                                                type: 'line',

                                                data: {
                                                    labels: [
                                                        @foreach($pageviewsMap as $date => $value)
                                                            @if($range['unit'] == 'hour')
                                                                '{{ \Carbon\Carbon::createFromFormat('H', $date)->format(__('H:i')) }}',
                                                            @elseif($range['unit'] == 'day')
                                                                '{{ __(':month :day', ['month' => mb_substr(__(\Carbon\Carbon::parse($date)->format('F')), 0, 3), 'day' => __(\Carbon\Carbon::parse($date)->format('j'))]) }}',
                                                            @elseif($range['unit'] == 'month')
                                                                '{{ __(':year :month', ['year' => \Carbon\Carbon::parse($date)->format('Y'), 'month' => mb_substr(__(\Carbon\Carbon::parse($date)->format('F')), 0, 3)]) }}',
                                                            @else
                                                                '{{ $date }}',
                                                            @endif
                                                        @endforeach
                                                    ],
                                                    datasets: [{
                                                        label: '{{ __('Visitors') }}',
                                                        data: [
                                                            @foreach($visitorsMap as $date => $value)
                                                                {{ $value }},
                                                            @endforeach
                                                        ],
                                                        backgroundColor : gradient1,
                                                        borderColor: uniqueColor,
                                                        pointBorderColor: uniqueColor,
                                                        pointBackgroundColor: uniqueColor,
                                                        pointHoverBackgroundColor: '#addfff',
                                                        pointHoverBorderColor: uniqueColor,
                                                        ...lineOptions
                                                    }, {
                                                        label: '{{ __('Pageviews') }}',
                                                        data: [
                                                            @foreach($pageviewsMap as $date => $value)
                                                                {{ $value }},
                                                            @endforeach
                                                        ],
                                                        backgroundColor : gradient2,
                                                        borderColor: pageViewsColor,
                                                        pointBorderColor: pageViewsColor,
                                                        pointBackgroundColor: pageViewsColor,
                                                        pointHoverBackgroundColor: '#ffc2c2',
                                                        pointHoverBorderColor: pageViewsColor,
                                                        ...lineOptions
                                                    }]
                                                },
                                                options: {
                                                    legend: {
                                                        rtl: {{ (__('lang_dir') == 'rtl' ? 'true' : 'false') }},
                                                        display: false,
                                                        labels: {
                                                            usePointStyle: true,
                                                            pointStyle: 'round',
                                                        }
                                                    },
                                                    tooltips: {
                                                        rtl: {{ (__('lang_dir') == 'rtl' ? 'true' : 'false') }},
                                                        mode: 'index',
                                                        intersect: false,
                                                        reverse: true,
                                                        backgroundColor: '{{ (request()->cookie('dark_mode') == 1 ? '#FFF' : '#000') }}',

                                                        xPadding: 16,
                                                        yPadding: 16,

                                                        titleFontColor: '{{ (request()->cookie('dark_mode') == 1 ? '#000' : '#FFF') }}',
                                                        titleSpacing: 30,
                                                        titleFontSize: 16,
                                                        titleFontStyle: 'normal',
                                                        titleMarginBottom: 10,

                                                        bodyFontColor: '{{ (request()->cookie('dark_mode') == 1 ? '#000' : '#FFF') }}',
                                                        bodyFontSize: 14,
                                                        bodySpacing: 10,

                                                        footerMarginTop: 10,
                                                        footerFontStyle: 'normal',
                                                        footerFontSize: 12,

                                                        cornerRadius: 4,
                                                        caretSize: 7,

                                                        callbacks: {
                                                            label: function (tooltipItem, data) {
                                                                return ' ' + data.datasets[tooltipItem.datasetIndex].label + ': ' + parseFloat(data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index]).format(0, 3, '{{ __(',') }}').toString();
                                                            },
                                                            title: function (tooltipItem) {
                                                                return tooltipTitles[tooltipItem[0].index];
                                                            }
                                                        }
                                                    },
                                                    hover: {
                                                        mode: 'index',
                                                        intersect: false
                                                    },
                                                    scales: {
                                                        xAxes: [{
                                                            gridLines: {
                                                                lineWidth: 0,
                                                                zeroLineWidth: 1,
                                                                tickMarkLength: 0
                                                            },
                                                            display: true,
                                                            ticks: {
                                                                maxTicksLimit: @if($range['unit'] == 'day') 12 @else 15 @endif,
                                                                padding: 10,
                                                            }
                                                        }],
                                                        yAxes: [{
                                                            gridLines: {
                                                                tickMarkLength: 0
                                                            },
                                                            display: true,
                                                            ticks: {
                                                                beginAtZero: true,
                                                                maxTicksLimit: 8,
                                                                padding: 10,
                                                                callback: function(value) {
                                                                    return commarize(value, 1000);
                                                                }
                                                            }
                                                        }],
                                                    },
                                                    responsive: true,
                                                    maintainAspectRatio: false
                                                }
                                            });

                                            // Update the tooltip color
                                            document.querySelector('#dark-mode').addEventListener('click', function(e) {
                                                e.preventDefault();

                                                trendChart.options.tooltips.backgroundColor = (this.dataset.darkMode == 0 ? '#FFF' : '#000');
                                                trendChart.options.tooltips.titleFontColor = (this.dataset.darkMode == 0 ? '#000' : '#FFF');
                                                trendChart.options.tooltips.bodyFontColor = (this.dataset.darkMode == 0 ? '#000' : '#FFF');
                                                trendChart.update();
                                            });
                                        });
                                    </script>
                                </div>


















                                <div class="row g-4 mb-4">
                                    <div class="col-6">                                    
                                        <div class="data-chart data-chart-feature">
                                            <div class="inner-wrapper">
                                                <div class="header">
                                                    <div class="title">Pages</div>
                                                </div>
                                                @if(count($pages) == 0)
                                                    <p class="p-3 ms-1">No Data</p>
                                                @else
                                                    <div class="content">
                                                        <div class="row-title">
                                                            <div class="title">URL</div>
                                                            <div class="title">Pageviews</div>
                                                        </div>
                                                        @foreach($pages as $page)
                                                            <div class="row-data">
                                                                <div class="row-info">
                                                                    <div class="info">
                                                                        <div class="icon-primary"><i class="bi bi-globe2"></i></div>
                                                                        <div class="text">{{ $page->value }}</div>
                                                                        <div class="icon-secondary"><a href="http://{{ $website->url . $page->value }}" target="_blank" rel="nofollow noreferrer noopener" class="text-secondary"><i class="bi bi-box-arrow-up-right"></i></a></div>
                                                                    </div>
                                                                    <div class="count">
                                                                        <div class="total-count">{{ number_format($page->count, 0, __('.'), __(',')) }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="row-progress">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: {{ (($page->count / $totalPageviews) * 100) }}%" aria-valuenow="25"
                                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endif

                                                @if(count($pages) > 0)
                                                    <div class="footer">
                                                        <a href="{{ route('frontend.user.user_widget.analytics.page', $project_id) }}" class="foote-link">
                                                            <div class="text">View all</div>
                                                            <i class="bi bi-chevron-right"></i>
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="data-chart data-chart-feature">
                                            <div class="inner-wrapper">
                                                <div class="header">
                                                    <div class="title">Referrers</div>
                                                </div>
                                                @if(count($referrers) == 0)
                                                    <p class="p-3 ms-1">No Data</p>
                                                @else
                                                    <div class="content">
                                                        <div class="row-title">
                                                            <div class="title">Website</div>
                                                            <div class="title">Visitors</div>
                                                        </div>
                                                        @foreach($referrers as $referrer)
                                                            <div class="row-data">
                                                                <div class="row-info">
                                                                    <div class="info">
                                                                        <div class="icon-primary"><img src="https://icons.duckduckgo.com/ip3/{{ $referrer->value }}.ico" rel="noreferrer" class="width-4 height-4"></div>
                                                                        <div class="text">{{ $referrer->value }}</div>
                                                                        <div class="icon-secondary"><a href="http://{{ $referrer->value }}" target="_blank" class="text-secondary"><i class="bi bi-box-arrow-up-right"></i></a></div>
                                                                    </div>
                                                                    <div class="count">
                                                                        <div class="total-count">{{ number_format($referrer->count, 0, __('.'), __(',')) }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="row-progress">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: {{ (($referrer->count / $totalReferrers) * 100) }}%" aria-valuenow="25"
                                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endif
                                                @if(count($referrers) > 0)
                                                    <div class="footer">
                                                        <a href="{{ route('frontend.user.user_widget.analytics.referrers', $project_id) }}" class="foote-link">
                                                            <div class="text">View all</div>
                                                            <i class="bi bi-chevron-right"></i>
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-4 mb-4">
                                    <div class="col-4">
                                        <div class="data-chart data-chart-feature">
                                            <div class="inner-wrapper">
                                                <div class="header">
                                                    <div class="title">Countries</div>
                                                </div>
                                                @if(count($countries) == 0)
                                                    <p class="p-3 ms-1">No Data</p>
                                                @else
                                                    <div class="content">
                                                        <div class="row-title">
                                                            <div class="title">Name</div>
                                                            <div class="title">Visitors</div>
                                                        </div>
                                                        @foreach($countries as $country)
                                                            <div class="row-data">
                                                                <div class="row-info">
                                                                    <div class="info">
                                                                        <div class="icon-primary"><img src="{{ asset('/images/icons/countries/'. formatFlag($country->value)) }}.svg" class="width-4 height-4"></div>
                                                                        <div class="text">
                                                                            @if(!empty(explode(':', $country->value)[1]))
                                                                                <a href="" class="text-body">{{ explode(':', $country->value)[1] }}</a>
                                                                            @else
                                                                                <p class="p-3 ms-1">Unknown</p>
                                                                            @endif
                                                                        </div>
                                                                        <!-- <div class="icon-secondary"><a href="#"><i class="bi bi-box-arrow-up-right"></i></a></div> -->
                                                                    </div>
                                                                    <div class="count">
                                                                        <div class="total-count">{{ number_format($country->count, 0, __('.'), __(',')) }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="row-progress">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: {{ (($country->count / $totalVisitors) * 100) }}%" aria-valuenow="25"
                                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endif
                                                @if(count($countries) > 0)
                                                    <div class="footer">
                                                        <a href="{{ route('frontend.user.user_widget.analytics.countries', $project_id) }}" class="foote-link">
                                                            <div class="text">View all</div>
                                                            <i class="bi bi-chevron-right"></i>
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="data-chart data-chart-feature">
                                            <div class="inner-wrapper">
                                                <div class="header">
                                                    <div class="title">Browsers</div>
                                                </div>
                                                @if(count($browsers) == 0)
                                                    <p class="p-3 ms-1">No Data</p>
                                                @else
                                                    <div class="content">
                                                        <div class="row-title">
                                                            <div class="title">Name</div>
                                                            <div class="title">Visitors</div>
                                                        </div>
                                                        @foreach($browsers as $browser)
                                                            <div class="row-data">
                                                                <div class="row-info">
                                                                    <div class="info">
                                                                        <div class="icon-primary"><img src="{{ asset('/images/icons/browsers/'.formatBrowser($browser->value)) }}.svg" class="width-4 height-4"></div>
                                                                        <div class="text">
                                                                            @if($browser->value)
                                                                                {{ $browser->value }}
                                                                            @else
                                                                                <p class="p-3 ms-1">Unknown</p>
                                                                            @endif
                                                                        </div>
                                                                        <!-- <div class="icon-secondary"><a href="#"><i class="bi bi-box-arrow-up-right"></i></a></div> -->
                                                                    </div>
                                                                    <div class="count">
                                                                        <div class="total-count">
                                                                            {{ number_format($browser->count, 0, __('.'), __(',')) }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row-progress">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: {{ (($browser->count / $totalVisitors) * 100) }}%" aria-valuenow="25"
                                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endif
                                                @if(count($browsers) > 0)
                                                    <div class="footer">
                                                        <a href="{{ route('frontend.user.user_widget.analytics.browsers', $project_id) }}" class="foote-link">
                                                            <div class="text">View all</div>
                                                            <i class="bi bi-chevron-right"></i>
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="data-chart data-chart-feature">
                                            <div class="inner-wrapper">
                                                <div class="header">
                                                    <div class="title">Operating systems</div>
                                                </div>
                                                @if(count($operatingSystems) == 0)
                                                    <p class="p-3 ms-1">No Data</p>
                                                @else
                                                    <div class="content">
                                                        <div class="row-title">
                                                            <div class="title">Name</div>
                                                            <div class="title">Visitors</div>
                                                        </div>
                                                        @foreach($operatingSystems as $operatingSystem)
                                                            <div class="row-data">
                                                                <div class="row-info">
                                                                    <div class="info">
                                                                        <div class="icon-primary"><img src="{{ asset('/images/icons/os/'.formatOperatingSystem($operatingSystem->value)) }}.svg" class="width-4 height-4"></div>
                                                                        <div class="text">
                                                                            @if($operatingSystem->value)
                                                                                {{ $operatingSystem->value }}
                                                                            @else
                                                                                {{ __('Unknown') }}
                                                                            @endif
                                                                        </div>
                                                                        <!-- <div class="icon-secondary"><a href="#"><i class="bi bi-box-arrow-up-right"></i></a></div> -->
                                                                    </div>
                                                                    <div class="count">
                                                                        <div class="total-count">
                                                                            {{ number_format($operatingSystem->count, 0, __('.'), __(',')) }}                                                                    
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row-progress">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: {{ (($operatingSystem->count / $totalVisitors) * 100) }}%" aria-valuenow="25"
                                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endif
                                                @if(count($operatingSystems) > 0)
                                                    <div class="footer">
                                                        <a href="{{ route('frontend.user.user_widget.analytics.operating_systems', $project_id) }}" class="foote-link">
                                                            <div class="text">View all</div>
                                                            <i class="bi bi-chevron-right"></i>
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0 mb-4">
                                    <div class="col">
                                        <div class="data-chart data-chart-feature">
                                            <div class="inner-wrapper">
                                                <div class="header">
                                                    <div class="title">Events</div>
                                                </div>
                                                @if(count($events) == 0)
                                                    <p class="p-3 ms-1">No Data</p>
                                                @else
                                                    <div class="content">
                                                        <div class="row-title">
                                                            <div class="title">Name</div>
                                                            <div class="title">Completions</div>
                                                        </div>
                                                        @foreach($events as $event)
                                                            <div class="row-data">
                                                                <div class="row-info">
                                                                    <div class="info">
                                                                        <div class="icon-primary"><i class="bi bi-globe2"></i></div>
                                                                        <div class="text"> {{ explode(':', $event->value)[0] }}</div>
                                                                        <!-- <div class="icon-secondary"><a href="#"><i class="bi bi-box-arrow-up-right"></i></a></div> -->
                                                                    </div>
                                                                    <div class="count">
                                                                        <div class="total-count">

                                                                            @if(!empty(explode(':', $event->value)[1]) || !empty(explode(':', $event->value)[2]))
                                                                                <span class="badge badge-secondary">
                                                                                    @if(!empty(explode(':', $event->value)[1]))
                                                                                        {{ number_format((explode(':', $event->value)[1] * $event->count), 2, __('.'), __(',')) }}
                                                                                    @endif

                                                                                    @if(!empty(explode(':', $event->value)[2]))
                                                                                        {{ explode(':', $event->value)[2] }}
                                                                                    @endif
                                                                                </span>
                                                                            @endif

                                                                            {{ number_format($event->count, 0, __('.'), __(',')) }}

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="row-progress">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endif
                                                @if(count($events) > 0)
                                                    <div class="footer">
                                                        <a href="{{ route('frontend.user.user_widget.analytics.events', $project_id) }}" class="foote-link">
                                                            <div class="text">View all</div>
                                                            <i class="bi bi-chevron-right"></i>
                                                        </a>
                                                    </div>
                                                @endif
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


@endpush