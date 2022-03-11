@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
   

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
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ul>
                        </div>

                        <!-- Dashboard -->

                        <section id="sectionHeader">
                            <div class="row g-0">
                                <div class="header-block mb-xxl-5 mb-4">
                                    <div class="row g-0 align-items-center justify-content-between">
                                        <div class="col-auto">
                                            <h2 class="title">{{$greetings}}, {{auth()->user()->first_name}}</h2>
                                            <span class="sub-title">Here's your websites situation for today</span>
                                        </div>
                                        <div class="col-auto my-xxl-0 my-4">
                                            <div class="row gy-0 gx-3 justify-content-end flex-sm-nowrap">
                                                <div class="col-12 col-sm-auto my-sm-0 my-2">
                                                    <div class="input-group">
                                                        <label for="datePicker" class="form-label">
                                                            <i class="bi bi-calendar3"></i>
                                                            <span>22 February 2022</span>
                                                            <i class="bi bi-chevron-down"></i>
                                                        </label>
                                                        <!-- <input type="date" class="form-control" id="datePicker"> -->
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-auto my-sm-0 my-2">
                                                    <button data-bs-toggle="modal" data-bs-target="#optimizeModal" class="btn btn-optimize">Optimize</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        @if(count($project_details) == 0)
                           <div class="card">
                               <div class="card-body">
                                   <div class="row">
                                       <div class="col-md-6">
                                           <div style="background-image: url('{{url('images/Group 411.png')}}');height: 400px;background-position: center;background-size: contain;background-repeat: no-repeat;"></div>

                                       </div>
                                       <div class="col-md-6">
                                           <div class="content-block" style="padding-top: 50px;">
                                               <h5 style="font-size: 20px;">The Smarter way to <span style="font-size: 30px;">Boost</span> your</h5>
                                               <h3 class="title" style="font-size: 26px;">Website  Performance</h3>
                                               <h5 class="light" style="font-size: 20px;padding-top: 30px;">WhatsApp Widget with </h5>
                                               <h5 style="font-size: 27px;color: #3d4a85;">Inquiry Management System (IMS)</h5>
                                               <button data-bs-toggle="modal" data-bs-target="#project_modal" class="btn btn-primary" style="font-size: 16px;padding: 10px;margin-top: 30px;">Add your website here </button>                                    </div>
                                       </div>
                                   </div>
                               </div>
                           </div>

                        @else
                            @foreach($project_details as $project_detail)

                                <section id="sectionProperties">
                                    <div class="property-block mb-5">
                                        <div class="row g-0 p-4 border-bottom">
                                            <div class="inner-wrapper">
                                                <div class="col-4">
                                                    <div class="name-block">
                                                        <div class="property-name">
                                                            <span class="pro-name">{{$project_detail->name}}</span>
                                                            <span class="pro-url">{{$project_detail->url}}</span>
                                                        </div>
                                                        <a href="{{route('frontend.user.project.chat',$project_detail->id)}}" type="button" class="btn btn-open"><i class="bi bi-x-diamond-fill"></i>View</a>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="button-block">
                                                        <div class="form-check form-switch">
                                                            <label class="form-check-label" for="flexSwitchCheckDefault">Email
                                                                Notifications</label>
                                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                                        </div>
                                                        <a href="{{ route('frontend.user.project_dash.destroy', $project_detail->id) }}" class="delete btn btn-delete"
                                                            data-bs-toggle="modal" data-bs-target="#deletedashwidget"><i class="bi bi-trash"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 py-2 align-items-center">
                                            <div class="col-xxl-4 my-3 info-blocks seo-block">
                                                <div class="row g-0 justify-content-evenly">
                                                    <div class="col-md-auto col-8">
                                                        <span class="block-title">SEO Result</span>
                                                        <span class="seo-result">{{$project_detail->score}}/100</span>
                                                    </div>
                                                    <div class="col-md-6 col-8">
                                                        @if($project_detail->score < 25)
                                                            <span class="precentage">{{$project_detail->score}}<span class="sign">%</span></span>
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="background-color:red; width: {{$project_detail->score}}%"
                                                                     aria-valuenow="{{$project_detail->score}}" aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                        @elseif($project_detail->score < 50)
                                                            <span class="precentage">{{$project_detail->score}}<span class="sign">%</span></span>
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="background-color:#ffc11e; width: {{$project_detail->score}}%"
                                                                     aria-valuenow="{{$project_detail->score}}" aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                        @elseif($project_detail->score < 65)
                                                            <span class="precentage">{{$project_detail->score}}<span class="sign">%</span></span>
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="background-color:#008f23; width: {{$project_detail->score}}%"
                                                                     aria-valuenow="{{$project_detail->score}}" aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                        @elseif($project_detail->score < 85)
                                                            <span class="precentage">{{$project_detail->score}}<span class="sign">%</span></span>
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="background-color:green; width: {{$project_detail->score}}%"
                                                                     aria-valuenow="{{$project_detail->score}}" aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                        @endif


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 my-3 info-blocks analytics-block">
                                                <div class="block-content">
                                                    <div class="row g-0 justify-content-evenly align-items-end">
                                                        <div class="col-sm-auto col-8 my-sm-0 my-2">
                                                            <span class="block-title mb-2">Analytics Result</span>
                                                            <span class="sub-title">Website</span>
                                                            @if(App\Models\Widgets::where('project_id',$project_detail->id)->first() != null)
                                                            <span class="precentage up"><i class="bi bi-graph-up-arrow up"> {{ App\Models\Widgets::where('project_id',$project_detail->id)->first()->load_count }}</i></span>
                                                            @else
                                                            <span class="precentage up"><i class="bi bi-graph-up-arrow up"> No Details</i></span>
                                                            @endif
                                                        </div>
                                                        <div class="col-sm-auto col-8 my-sm-0 my-2">
                                                            <span class="sub-title">Pageviews</span>
                                                            <span class="precentage down"><i class="bi bi-graph-down-arrow down"></i>{{ count(App\Models\VisitorCount::where('project_id',$project_detail->id)->get()) }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 my-3 info-blocks statics-block">
                                                <div class="row g-0 justify-content-evenly">
                                                    <div class="col-md-5 col-8">
                                                        <div class="row mb-3">
                                                            <div class="col">
                                                                <div class="issues-blocks">
                                                                    <div class="issue-info">
                                                                <span class="info"><i
                                                                            class="bi bi-triangle-fill red"></i>3
                                                                    high
                                                                    issues</span>
                                                                        <span class="info-prec">3.0%</span>
                                                                    </div>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                                             style="width: 100%" aria-valuenow="100"
                                                                             aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col">
                                                                <div class="issues-blocks">
                                                                    <div class="issue-info">
                                                                <span class="info"><i
                                                                            class="bi bi-square-fill yellow"></i>3
                                                                    medium
                                                                    issues</span>
                                                                        <span class="info-prec">3.0%</span>
                                                                    </div>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                                             style="width: 75%" aria-valuenow="75"
                                                                             aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 col-8">
                                                        <div class="row mb-3">
                                                            <div class="col">
                                                                <div class="issues-blocks">
                                                                    <div class="issue-info">
                                                                <span class="info"><i
                                                                            class="bi bi-circle-fill gray"></i>2
                                                                    low issues</span>
                                                                        <span class="info-prec">2.0%</span>
                                                                    </div>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-secondary"
                                                                             role="progressbar" style="width: 25%"
                                                                             aria-valuenow="25" aria-valuemin="0"
                                                                             aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col">
                                                                <div class="issues-blocks">
                                                                    <div class="issue-info">
                                                                <span class="info"><i
                                                                            class="bi bi-star-fill blue"></i>22
                                                                    test passed</span>
                                                                        <span class="info-prec">82.0%</span>
                                                                    </div>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar"
                                                                             style="width: 25%" aria-valuenow="25"
                                                                             aria-valuemin="0" aria-valuemax="100"></div>
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
                            @endforeach
                        @endif




                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="optimizeModal" tabindex="-1" aria-labelledby="optimizeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="optimizeModalLabel">Optimize</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="deletedashwidget" tabindex="-1" aria-labelledby="deletedashwidgetLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="deletedashwidgetLabel">Delete Widget</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Do you want to delete this?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div> 


@endsection

@push('after-scripts')

    <script>
        $('.delete').on('click', function() {
            let link = $(this).attr('href');
            $('.modal-footer a').attr('href', link);
        })
    </script>

@endpush