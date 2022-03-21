@extends('frontend.layouts.widget_ims_app')

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
                                                                        <div class="icon-secondary"><a href="#"><i class="bi bi-box-arrow-up-right"></i></a></div>
                                                                    </div>
                                                                    <div class="count">
                                                                        <div class="total-count"> {{ number_format($page->count, 0, __('.'), __(',')) }}</div>
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
                                                        <a href="#" class="foote-link">
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
                                                                        <div class="icon-primary"><i class="bi bi-globe2"></i></div>
                                                                        <div class="text">{{ $referrer->value }}</div>
                                                                        <div class="icon-secondary"><a href="#"><i class="bi bi-box-arrow-up-right"></i></a></div>
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
                                                        <a href="#" class="foote-link">
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
                                                                        <div class="icon-primary"><i class="bi bi-globe2"></i></div>
                                                                        <div class="text">
                                                                            @if(!empty(explode(':', $country->value)[1]))
                                                                                <a href="" class="text-body">{{ explode(':', $country->value)[1] }}</a>
                                                                            @else
                                                                                <p class="p-3 ms-1">Unknown</p>
                                                                            @endif
                                                                        </div>
                                                                        <div class="icon-secondary"><a href="#"><i class="bi bi-box-arrow-up-right"></i></a></div>
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
                                                        <a href="#" class="foote-link">
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
                                                                        <div class="icon-primary"><i class="bi bi-globe2"></i></div>
                                                                        <div class="text">
                                                                            @if($browser->value)
                                                                                {{ $browser->value }}
                                                                            @else
                                                                                <p class="p-3 ms-1">Unknown</p>
                                                                            @endif
                                                                        </div>
                                                                        <div class="icon-secondary"><a href="#"><i class="bi bi-box-arrow-up-right"></i></a></div>
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
                                                        <a href="#" class="foote-link">
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
                                                                        <div class="icon-primary"><i class="bi bi-globe2"></i></div>
                                                                        <div class="text">
                                                                            @if($operatingSystem->value)
                                                                                {{ $operatingSystem->value }}
                                                                            @else
                                                                                {{ __('Unknown') }}
                                                                            @endif
                                                                        </div>
                                                                        <div class="icon-secondary"><a href="#"><i class="bi bi-box-arrow-up-right"></i></a></div>
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
                                                        <a href="#" class="foote-link">
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
                                                                        <div class="icon-secondary"><a href="#"><i class="bi bi-box-arrow-up-right"></i></a></div>
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
                                                        <a href="#" class="foote-link">
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