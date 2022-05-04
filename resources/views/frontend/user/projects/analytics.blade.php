@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/analytics.css')}}">


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

                    @include('frontend.user.projects.includes.card_section')

                    @include('frontend.user.projects.includes.analytics_nav')

                    <div class="graph-section">
                        <div class="header">
                            <div class="title">Overview</div>
                            <div class="date">3 days ago</div>
                        </div>
                        <div class="body">
                            <div class="graph">
                                <div id="analyticsGraph" style="width: 800px;height:400px;margin:auto;"></div>
                            </div>
                            <div class="stats">
                                <div class="stats-block">
                                    <div class="content">
                                        <div class="header">
                                            <i class="bi blue bi-square-fill"></i>
                                            <div class="text">Visitors</div>
                                            <i class="bi bi-info-circle"></i>
                                        </div>
                                        <div class="precent">
                                            <i class="bi blue bi-arrow-up-right"></i>
                                            <div class="text blue">86.4%</div>
                                        </div>
                                    </div>
                                    <div class="info">{{ count(App\Models\VisitorCount::where('project_id',$project_id)->get()) }}</div>
                                </div>
                                <div class="stats-block">
                                    <div class="content">
                                        <div class="header">
                                            <i class="bi red bi-square-fill"></i>
                                            <div class="text">Pageviews</div>
                                            <i class="bi bi-info-circle"></i>
                                        </div>
                                        <div class="precent">
                                            <i class="bi red bi-arrow-down-right"></i>
                                            <div class="text red">48.2%</div>
                                        </div>
                                    </div>
                                    <div class="info">{{ count(App\Models\VisitorCount::where('project_id',$project_id)->get()) }}</div>
                                </div>
                            </div>
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
                                                            <div class="icon-primary"><img src="https://flagcdn.com/w40/{{strtolower(explode(':', $country->value)[0])}}.png" class="width-4 height-4"></div>
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

                    <!-- <section id="sectionWhatsappWidget">
                        @if(count(App\Models\Widgets::where('project_id',$project_id)->where('category','Analytics')->get()) != 0)
                            <div class="block-2 mb-5">
                                <div class="row g-0 mb-4">
                                    <div class="col">
                                        <div class="block-title">My Analytics Widget</div>
                                    </div>
                                </div>
                                <div class="row row-cols-md-2 g-5 justify-content-between">
                                    <div class="col">
                                        <div class="innwer-wrapper px-4 dotted-border">
                                            <button type="button" class="btn-whatsapp" data-bs-toggle="modal"
                                                data-bs-target="#createAnalyticsModal">Create Analytics</button>
                                        </div>
                                    </div>
                                    @foreach(\App\Models\Widgets::where('project_id',$project_id)->where('category','Analytics')->get() as $widgetlist)
                                    <div class="col">
                                        <div class="inner-wrapper px-5 pt-5 pb-4">
                                            <div class="row g-0">
                                                <div class="header">
                                                    <span class="title">{{$widgetlist->widget_type}}</span> 
                                                    @if($widgetlist->widget_type == 'Analytics')                                          
                                                        <i class="bi bi-clipboard2-pulse" style="font-size:25px;"></i>
                                                        <img src="{{url('images/whatsapp.png')}}" alt="">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row g-0 mt-5 mb-4">
                                                <div class="col">
                                                    <div class="row g-0 mb-2 justify-content-between">
                                                        <div class="col-auto">
                                                            <div class="progress-label">{{$widgetlist->widget_key}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-0">
                                                        <div class="col">
                                                            <div class="progress">
                                                                <div class="progress-bar w-75" role="progressbar"
                                                                    aria-valuenow="75" aria-valuemin="0"
                                                                    aria-valuemax="100">
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
                                            <div class="row g-0 mt-4 mb-3">
                                                <div class="button-block">
                                                    <div class="block-1">
                                                        
                                                        <a href="{{ route('frontend.user.user_widget.settings', $widgetlist->id) }}"
                                                            class="act-btn act-settings">
                                                            <i class="bi bi-gear"></i>
                                                            Settings
                                                        </a>
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#get_widget_Modal{{$widgetlist->id}}" class="me-3 act-btn act-script">
                                                        <i class="bi bi-code-slash"></i>
                                                            Add Script
                                                        </a>
                                                    </div>
                                                    <div class="block-2">
                                                        <input type="hidden" name="hid_id" value="{{$widgetlist->id}}">
                                                        <a href="{{ route('frontend.user.user_widget.destroy', $widgetlist->id) }}"
                                                            class="act-btn delete act-delete" data-bs-toggle="modal"
                                                            data-bs-target="#deleteFavorite">
                                                            <i class="bi bi-trash"></i>
                                                            Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        <div class="row g-0">
                            <div class="chat-applications">
                                <div class="row g-0 mb-5">
                                    @if(App\Models\Widgets::where('project_id',$project_id)->where('widget_type','Analytics')->first() == null)
                                        <div class="col">
                                            <div class="block-title">Analytics Widget</div>
                                        </div>
                                    @endif
                                </div>
                                <div class="row row-cols-md-2 g-5 justify-content-between">

                                    @if(App\Models\Widgets::where('project_id',$project_id)->where('widget_type','Analytics')->first() == null)
                                        <div class="col">
                                            <div class="inner-wrapper px-5 py-4">
                                                <div class="row g-0">
                                                    <div class="header">
                                                        <div class="title">Statistics</div>
                                                        <div class="image-block">
                                                            <i class="bi bi-clipboard2-pulse" style="font-size:25px;"></i>
                                                        </div>
                                                        <img src="{{url('images/whatsapp2.png')}}" alt="" class="watermark-img">
                                                    </div>
                                                </div>
                                                <div class="row g-0">
                                                    <div class="col">
                                                        <p class="body-text">Give users an opportunity to contact you on
                                                            WhatsApp
                                                            straight from your website.</p>
                                                    </div>
                                                </div>
                                                <div class="row g-0 mt-4 mb-3">
                                                    <div class="button-block">
                                                        @if(App\Models\Widgets::where('project_id',$project_id)->where('widget_type','Analytics')->first() == null)
                                                            <form action="{{route('frontend.user.user_widget.store')}}" method="post" enctype="multipart/form-data">
                                                            {{csrf_field()}}
                                                                <input type="hidden" name="project_id" value="{{$project_id}}">
                                                                <input type="hidden" name="widget_type" value="Analytics">
                                                                <button type="submit" class="create-widget-btn">Create Analytics</button>
                                                            </form>
                                                        @else
                                                            <button type="submit" class="create-widget-btn" disabled>Already Installed</button>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                        

                        <div class="modal fade widget-explorer" id="createAnalyticsModal" tabindex="-1"
                            aria-labelledby="createWidgetModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="modal-title" id="createWidgetModalLabel">Analytics</h5>
                                            <button type="button" class="btn-close-modal" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <i class="bi bi-x-lg"></i>
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <div class="block-1">
                                                <div class="row g-0">
                                                    <form action="{{route('frontend.user.user_widget.store')}}" method="post" enctype="multipart/form-data">
                                                        {{csrf_field()}}
                                                        <div class="inner-wrapper">
                                                            <div class="col">
                                                                <div class="row g-0 align-items-center justify-content-between">
                                                                    <div class="col-7">
                                                                        <div class="header">
                                                                            <span class="title">Statistics</span>
                                                                        </div>
                                                                        <p class="body-text">Give users an opportunity
                                                                            to contact you on WhatsApp straight from
                                                                            your website.
                                                                        </p>
                                                                        <div class="button-block">
                                                                            @if(App\Models\Widgets::where('project_id',$project_id)->where('widget_type','Analytics')->first() == null)
                                                                                <input type="hidden" name="project_id" value="{{$project_id}}">
                                                                                <input type="hidden" name="widget_type" value="Analytics">
                                                                                <button type="submit" class="btn-whatsapp"></i>Create Analytics</button>
                                                                            @else
                                                                                <button type="submit" class="btn-whatsapp" disabled>Already Installed</button>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="whatsapp-feature-block">
                                                                            <img src="{{url('images/whatsapp (1).png')}}" alt="">
                                                                            <div class="title">WhatsApp Chat</div>
                                                                            <div class="subtitle">Entertainment</div>
                                                                            <div class="star-rating">
                                                                                <i class="bi active bi-star"></i>
                                                                                <i class="bi active bi-star"></i>
                                                                                <i class="bi active bi-star"></i>
                                                                                <i class="bi active bi-star"></i>
                                                                                <i class="bi bi-star"></i>
                                                                            </div>
                                                                            <div class="pricing">Free</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('frontend.user.projects.dialogs.widget_source')
                    </section>                         -->

                </div>
            </div>
        </div>
    </div>
</section>

@endsection


@push('after-scripts')

<script type="text/javascript">
    // Initialize the echarts instance based on the prepared dom
    var myChart = echarts.init(document.getElementById('analyticsGraph'));

    // Specify the configuration items and data for the chart
    option = {
    tooltip: {
        trigger: 'axis'
    },
    color: [
    '#f00',
    '#017FFA',
    ],
    grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
    },
    xAxis: {
        type: 'category',
        boundaryGap: false,
        data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
        type: 'value'
    },
    series: [
        {
        name: 'Pageviews',
        type: 'line',
        stack: 'Total',
        areaStyle: {},
        data: [120, 132, 101, 134, 90, 230, 210,124,210,130,120,160,]
        },
        {
        name: 'Visitors',
        type: 'line',
        stack: 'Total',
        areaStyle: {},
        data: [220, 182, 191, 234, 290, 330, 310,148,200,120,150,164,]
        }
    ]
    };

    // Display the chart using the configuration items and data just specified.
    myChart.setOption(option);
</script>

@endpush



