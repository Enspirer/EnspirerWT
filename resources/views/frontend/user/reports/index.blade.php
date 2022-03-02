@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/reports.css')}}">
<link rel="stylesheet" href="{{url('css/projects.css')}}">
   

<section id="sectionMainWindow">
        @include('frontend.includes.sidebar')

    <div id="sectionBody">
            @include('frontend.includes.nav')
            
            <!-- Content goes here -->
        <div class="row g-0">
            <div class="section-content">
                <div class="section-container">


            <!-- Section Reports Main -->

                <div class="section-header">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><i class="bi bi-chevron-right"></i></li>
                        <li class="breadcrumb-item"><span>Reports</span></li>
                    </ul>
                </div>

                <div class="section-reports">
                    <div class="header">
                        <div class="title">Reports</div>
                        <div class="button-block">
                            <a class="btn-advanced" href="#"><i class="bi bi-gear"></i><span class="text">Advanced</span></a>
                            <a class="btn-options" href="#"><i class="bi bi-sliders2"></i></a>
                        </div>
                    </div>
                    <div class="body">
                        <div class="title">Privacy</div>
                        <fieldset id="reportsPrivacy">
                            <div class="form-check">
                                <input class="form-check-input" name="privacy" type="radio">
                                <label class="form-check-label">
                                    Private
                                    <span class="text">Stats accessible only by you.</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="privacy" type="radio">
                                <label class="form-check-label">
                                    Public
                                    <span class="text">Stats accessible by anyone.</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="privacy" type="radio" checked>
                                <label class="form-check-label">
                                    Password
                                    <span class="text">Stats accessible by password.</span>
                                    <div class="privacy-password-input">
                                        <div class="input-group">
                                            <span class="input-group-text" id="privacyPwInput"><i class="bi bi-lock"></i></span>
                                            <input type="password" class="form-control" aria-label="Username"
                                                aria-describedby="privacyPwInput">
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="footer">
                        <form action="{{route('frontend.user.user_projects.store')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                            <div class="row">
                                <div class="col-3">
                                    <div class="input-group">
                                        <label class="form-input-label"><i class="bi bi-search"></i></label>
                                        <input type="text" name="name" class="form-control" placeholder="Type your project name" aria-describedby="findReports" required>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="input-group">
                                        <label class="form-input-label"><i class="bi bi-search"></i></label>
                                        <select class="form-control" name="project_type" style="font-size:15px;" id="project_type" name="project_type" required>
                                            <option value="" selected disabled>Select project type...</option>
                                            @foreach($project_type as $key => $type)
                                                <option style="font-size:15px;" value="{{ $type->id }}">{{ $type->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="input-group">
                                        <label class="form-input-label"><i class="bi bi-search"></i></label>
                                        <input type="text" name="url" class="form-control" placeholder="Type your website URL here" aria-describedby="findReports" required>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="input-group">
                                        <button type="submit" class="btn col-12" style="height:4.5rem;" role="button" id="findReports">Show Results</button>                                  
                                    </div>
                                </div>
                            </div>
                        </form>
                            
                    </div>
                </div>

                <section class="section-project-reports">
                            <div class="row g-0">
                                <div class="header">
                                    <div class="title">Reports</div>
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
                                                        <!-- <img src="{{url('images/Tallentor.png')}}" alt=""> -->
                                                            @if(get_seo_result($report->id)->favicon->value == null)
                                                                <a href="{{route('frontend.user.project.seo',$report->id)}}" style="text-decoration:none;">
                                                                    <img src="{{url('img\frontend\globeicon.png')}}" alt="propery-image">
                                                                </a>
                                                            @else
                                                                <a href="{{route('frontend.user.project.seo',$report->id)}}" style="text-decoration:none;">
                                                                    <img src="{{get_seo_result($report->id)->favicon->value}}" alt="propery-image">
                                                                </a>                                                        
                                                            @endif
                                                            <div class="name">
                                                                <a href="{{route('frontend.user.project.seo',$report->id)}}" style="text-decoration:none; color:rgba(0, 0, 0, 0.5)">
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

    
    
@endsection
