@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/projects.css')}}">
   

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
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active">Projects</li>
                            </ul>
                        </div>

                        <!-- Dashboard -->

                        <section class="section-project-reports">
                            <div class="row g-0">
                                <div class="header">
                                    <div class="title">Projects</div>
                                    <div class="search-block">
                                        <div class="input-group">
                                            <input type="search" class="form-control">
                                            <span class="input-group-text">
                                                <a href="#" class="search-btn">
                                                    <i class="bi bi-search"></i>
                                                </a>
                                            </span>
                                        </div>
                                        <a href="#" class="report-download">
                                            <i class="bi bi-box-arrow-in-down"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @if(count($reports) == 0)
                                @include('frontend.includes.not_found',[
                                    'not_found_title' => 'Data not found',
                                    'not_found_description' => null,
                                    'not_found_button_caption' => null
                                ])
                            @else
                                <div class="row g-0">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>URL</th>
                                                <th>SEO Result</th>
                                                <th>Analytics Result</th>
                                                <th>Generate at</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($reports as $report)
                                                <tr>
                                                    <td class="col-3">
                                                        <div class="propery">
                                                            @if(get_seo_result($report->id)->favicon->value == null)
                                                                <a href="{{route('frontend.user.project.chat',$report->id)}}" style="text-decoration:none;">
                                                                    <img src="{{url('img\frontend\globeicon.png')}}" alt="propery-image">
                                                                </a>
                                                            @else
                                                                <a href="{{route('frontend.user.project.chat',$report->id)}}" style="text-decoration:none;">
                                                                    <img src="{{get_seo_result($report->id)->favicon->value}}" alt="propery-image">
                                                                </a>                                                        
                                                            @endif
                                                            <div class="name">
                                                                <a href="{{route('frontend.user.project.chat',$report->id)}}" style="text-decoration:none; color:rgba(0, 0, 0, 0.5)">
                                                                    {{$report->url}}
                                                                </a>  
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="col-3">
                                                        <div class="seo-result">
                                                            <div class="progress">
                                                                <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                            <div class="precentage">69/100</div>
                                                        </div>
                                                    </td>
                                                    <td class="col-3">
                                                        <div class="analytics-block">
                                                            <div class="visitors-block up">
                                                                <div class="name">Visitors</div>
                                                                <div class="icon-block">
                                                                    <i class="bi bi-graph-up-arrow"></i>
                                                                    <div class="precentage">86.6%</div>
                                                                </div>
                                                            </div>
                                                            <div class="pageviews-block down">
                                                                <div class="name">Pageviews</div>
                                                                <div class="icon-block">
                                                                    <i class="bi bi-graph-down-arrow"></i>
                                                                    <div class="precentage">86.6%</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="col-2">
                                                        <div class="time">19 hours ago</div>
                                                    </td>
                                                    <td class="col-1">
                                                        <a href="#" class="more-option-btn">
                                                            <i class="bi bi-three-dots"></i>
                                                        </a>
                                                    </td>
                                                </tr>                                            
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </section>


                    </div>
                </div>
            </div>
        </div>
    </section>

    
    
@endsection
