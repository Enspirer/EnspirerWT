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

                    <div class="row g-0">
                        <div class="col">
                            <div class="data-chart">
                                <div class="inner-wrapper">
                                    <div class="header">
                                        <div class="title">Referrers</div>
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
                                        @if(count($referrers) == 0)
                                            <p class="p-3 ms-1">No Data</p>
                                        @else
                                            <div class="row-title">
                                                <div class="title">Website</div>
                                                <div class="title">Visitors</div>
                                            </div>
                                            <div class="row-subtitle">
                                                <div class="subtitle">Total</div>
                                                <div class="status">
                                                    @if( $total->count == null)
                                                        <div class="total-count">0</div>
                                                        <div class="total-precentage">0%</div>
                                                    @else
                                                        <div class="total-count">{{ number_format($referrers->count(), 0, __('.'), __(',')) }}</div>
                                                        <div class="total-precentage">{{ number_format((($referrers->count() / $total->count) * 100), 1, __('.'), __(',')) }}%</div>
                                                    @endif

                                                </div>
                                            </div>
                                            @foreach($referrers as $referrer)
                                                <div class="row-data">
                                                    <div class="row-info">
                                                        <div class="info">
                                                            <div class="icon-primary"><i class="bi bi-globe2"></i></div>
                                                                @if($referrer->value)
                                                                    <div class="text">
                                                                        <img src="https://icons.duckduckgo.com/ip3/{{ $referrer->value }}.ico" rel="noreferrer" class="width-4 height-4">
                                                                        <div class="text">{{ $referrer->value }}</div>
                                                                    </div>
                                                                @else
                                                                    <div class="text">
                                                                        <img src="{{ url('images/analytics/unknown.svg') }}" rel="noreferrer" class="width-4 height-4">
                                                                        <div class="text">Direct, Email, SMS</div>
                                                                    </div>
                                                                @endif

                                                            <div class="icon-secondary"><a href="#"><i class="bi bi-box-arrow-up-right"></i></a></div>
                                                        </div>
                                                        <div class="count">
                                                            <div class="total-count">{{ number_format($referrer->count, 0, __('.'), __(',')) }}</div>
                                                            <div class="total-precentage">{{ number_format((($referrer->count / $total->count) * 100), 1, __('.'), __(',')) }}%</div>
                                                        </div>
                                                    </div>
                                                    <div class="row-progress">
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: {{ (($referrer->count / $total->count) * 100) }}%" aria-valuenow="25"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="row-footer">
                                                <div class="item-count">Showing <span class="current">1-10</span> of <span class="total">57</span></div>
                                                <!-- <ul class="pagination">
                                                    <li class="page-item disabled"><a class="page-link" href="#"><i class="bi bi-chevron-left"></i></a></li>
                                                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a></li>
                                                </ul> -->
                                                
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