@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/seo.css')}}">
<link rel="stylesheet" href="{{url('css/inquiry_report.css')}}">
<link rel="stylesheet" href="{{url('css/billing.css')}}">

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
                                <li class="breadcrumb-item active">View Email Blacklist</li>
                            </ul>
                        </div>

                        <div class="billing-summery">
                            <div class="inner-wrapper">
                                <div class="package-block">
                                    <div class="header">
                                        <div class="text">Project Details</div>
                                        <i class="bi bi-question-circle-fill"></i>
                                    </div>
                                    <div class="body">
                                        <div class="image-block">
                                        @if($project->settings != null)
                                            <img src="{{uploaded_asset(json_decode($project->settings)->logo)}}" alt="" width="100%">
                                        @else
                                            <img src="https://fakeimg.pl/250x100/" alt="" width="100%">
                                        @endif
                                        </div>
                                        <div class="property-block">
                                            <div class="title">Project name and Link</div>
                                            <div class="pro-name">{{$project->name}}</div>
                                            <div class="pro-url">{{$project->url}}</div>
                                        </div>
                                        <div class="package">
                                            <div class="title">Package Details</div>
                                            <div class="inner-block">
                                                <div class="image-block">
                                                    @if($project->selected_package == 'All In One Widget + IMS Lite')
                                                        <img src="{{url('images/dashboard/main/widgetLite-icon.png')}}" alt="">
                                                    @elseif($project->selected_package == 'All In One Widget + IMS Pro')
                                                        <img src="{{url('images/dashboard/main/widgetPlus-icon.png')}}" alt="">
                                                    @elseif($project->selected_package == 'Optimizer')
                                                        <img src="{{url('images/dashboard/main/optimizer-icon.png')}}" alt="">
                                                    @endif
                                                </div>
                                                <div class="content-block">
                                                    <div class="title">Package</div>
                                                        @if($project->selected_package != null)
                                                            <div class="name">{{$project->selected_package}}</div>
                                                        @else
                                                            <div class="name">Not Selected</div>
                                                        @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="summery-block">
                                    <div class="header">
                                        <div class="text">Payment Details</div>
                                        <i class="bi bi-question-circle-fill"></i>
                                    </div>
                                    <div class="body">
                                        <div class="title">Payment Status</div>
                                        <div class="content-block">
                                            <div class="status-block green">
                                                <i class="bi bi-circle-fill"></i>
                                                <div class="text">Paid Bills</div>
                                                <div class="count">{{count($paid_invoices)}}</div>
                                            </div>
                                            <div class="status-block red">
                                                <i class="bi bi-circle-fill"></i>
                                                <div class="text">Unpaid Bills</div>
                                                <div class="count">{{count($unpaid_invoices)}}</div>
                                            </div>
                                            <div class="status-block orange">
                                                <i class="bi bi-circle-fill"></i>
                                                <div class="text">Pending Bills</div>
                                                <div class="count">{{count($pending_invoices)}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body"> 
                                    
                                        <div class="security-block">
                                            <div class="feature-block">
                                                <h3 class="title mb-3">Email Black list</h3>
                                                <table class="security-table">
                                                    <tbody>                                       
                                                        @if($project->email_blacklist != null)
                                                            @foreach(json_decode($project->email_blacklist) as $key => $blacklist)
                                                                @if($key == 'blacklists')
                                                                    @if(count($blacklist) != 0)
                                                                        @foreach($blacklist as $key => $back)
                                                                            <tr>
                                                                                <td class="icon-col">
                                                                                    @if($back->blacklisted == 0)
                                                                                        <img src="{{url('images/dashboard/main/icons/sheild-success.png')}}" class="me-3" alt="">
                                                                                    @else
                                                                                        <img src="{{url('images/dashboard/main/icons/sheild-danger.png')}}" class="me-3" alt="">
                                                                                    @endif
                                                                                </td>
                                                                                <td class="text-col">
                                                                                    <h4 class="text p-1">{{$back->tracker }} : 
                                                                                        @if($back->blacklisted == 0)
                                                                                            <span style="color:green">Ok</span>
                                                                                        @else
                                                                                            <span style="color:red">Listed</span>                                                                            
                                                                                        @endif
                                                                                    </h4>
                                                                                    <!-- <div class="sub-text"></div> -->
                                                                                </td>
                                                                                <!-- <td class="info-col">
                                                                                    <i class="bi bi-exclamation-circle"></i>
                                                                                </td> -->
                                                                            </tr>
                                                                        @endforeach    
                                                                    @endif
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="mt-3 text-left">
                                    <input type="hidden" name="hidden_project_id" value="{{ $project->id }}"/>                    
                                    <a href="{{route('frontend.user.reports.security_report', $project->id)}}" class="btn btn-info rounded-pill text-light" style="font-size:15px">Back</a>&nbsp;&nbsp;
                                </div>
                            </div><br> 

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body"> 
                                    
                                        <div class="security-block">
                                            <div class="feature-block">
                                                <h3 class="title mb-3">Project Details</h3>
                                                <table class="security-table">
                                                    <tbody>
                                                        <tr>                                          
                                                            <td class="text-col">
                                                                <h5 class="text mb-4"><bullet>Name</bullet> : {{$project->name}}</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>                                          
                                                            <td class="text-col">
                                                                <h5 class="text mb-4"><bullet>Project Type</bullet> : {{$project_type->name}}</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>                                          
                                                            <td class="text-col">
                                                                <h5 class="text mb-4"><bullet>URL</bullet> : {{$project->url}}</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>                                          
                                                            <td class="text-col">
                                                                <h5 class="text mb-4"><bullet>Host Ip</bullet> : {{$project->host_ip}}</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>                                          
                                                            <td class="text-col">
                                                                <h5 class="text mb-4"><bullet>Selected Package</bullet> : {{$project->selected_package}}</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>                                          
                                                            <td class="text-col">
                                                                <h5 class="text mb-4"><bullet>Start Date</bullet> : {{$project->package_starting_date}}</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>                                          
                                                            <td class="text-col">
                                                                <h5 class="text mb-4"><bullet>Expire Date</bullet> : {{$project->expire_date}}</h5>
                                                            </td>
                                                        </tr>
                                                                
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                            </div><br> 

                        </div>
                                         

                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection


@push('after-scripts')

    <script>
        $(window).on('load', function () {
            $('#overlay').modal('show');
        });
        $("#close-btn").click(function () {
            $('#overlay').modal('hide');
        });
    </script>
   
@endpush