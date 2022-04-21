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
                                        <!-- <div class="col-auto my-xxl-0 my-4">
                                            <div class="row gy-0 gx-3 justify-content-end flex-sm-nowrap">
                                                <div class="col-12 col-sm-auto my-sm-0 my-2">
                                                    <div class="input-group">
                                                        <label for="datePicker" class="form-label">
                                                            <input type="date" class="form-control" value="{{date('Y')}}-{{date('m')}}-{{date('d')}}">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-auto my-sm-0 my-2">
                                                    <button data-bs-toggle="modal" data-bs-target="#optimizeModal" class="btn btn-optimize">Optimize</button>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </section>

                        @if(count($project_details) == 0)
                           <div class="card">
                               <div class="card-body">
                                   <div class="row">
                                       <div class="col-md-6">
                                           <div style="background-image: url('{{url('images/landing_page/home/banner_1.png')}}');height: 400px;background-position: center;background-size: contain;background-repeat: no-repeat;"></div>

                                       </div>
                                       <div class="col-md-6">
                                           <div class="content-block no-projects" style="padding-top: 50px;">
                                            <h6>Upgrade your website with the most</h6>
                                            <h2 class="title">Interactive <span>Communication tool</span></h2>
                                            <h5 class="text">Improve user engagement &amp; <br> grow your business fast</h5>
                                            <h5>All-in-One Chat With <span>IMS</span></h5>
                                            <h6 class="blue-text"><span>I</span>nquiry <span>M</span>anagement <span>S</span>ystem</h6>
                                               <button data-bs-toggle="modal" data-bs-target="#project_modal" class="btn btn-primary" style="font-size: 16px;padding: 10px;margin-top: 30px;">Add your website here </button>                                    </div>
                                       </div>
                                   </div>
                               </div>
                           </div>

                        @else
                            @foreach($project_details as $project_detail)

                                <!-- <section id="sectionProperties">
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
                                                @if($project_detail->selected_package == 'All In One Widget + IMS Lite')
                                                    <img src="{{url('images/dashboard/main/widgetLite-icon.png')}}" alt="">
                                                @elseif($project_detail->selected_package == 'All In One Widget + IMS Pro')
                                                    <img src="{{url('images/dashboard/main/widgetPlus-icon.png')}}" alt="">
                                                @elseif($project_detail->selected_package == 'Optimizer')
                                                    <img src="{{url('images/dashboard/main/optimizer-icon.png')}}" alt="">
                                                @endif
                                                <div class="text-block">
                                                    <div class="title">Package</div>
                                                    @if($project_detail->selected_package != null)
                                                        <div class="package">{{$project_detail->selected_package}}</div>
                                                    @else
                                                        <div class="package">Not Selected</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 my-3 info-blocks analytics-block">
                                                <div class="block-content">
                                                    <div class="row g-0 justify-content-evenly align-items-end">
                                                        <div class="col-sm-auto col-8 my-sm-0 my-2">
                                                            <span class="block-title mb-2">Realtime</span>
                                                            <span class="sub-title">Visitors</span>
                                                            <span class="precentage up"><i class="bi bi-graph-up-arrow up"> {{ count(App\Models\VisitorCount::where('project_id',$project_detail->id)->get()) }}</i></span>
                                                           
                                                        </div>
                                                        <div class="col-sm-auto col-8 my-sm-0 my-2">
                                                            <span class="sub-title">Pageviews</span>
                                                            @if(App\Models\Widgets::where('project_id',$project_detail->id)->first() != null)
                                                             <span class="precentage down"><i class="bi bi-graph-down-arrow down"></i> {{ App\Models\Widgets::where('project_id',$project_detail->id)->first()->load_count }}</span>
                                                            @else
                                                             <span class="precentage down"><i class="bi bi-graph-down-arrow down"></i> No Details</span>
                                                            @endif                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 my-3 info-blocks statics-block">
                                                @if($project_detail->package_starting_date != null)
                                                <div class="row">
                                                    <div class="col-2">
                                                        @if($project_detail->package_type == 'Free')                                                            
                                                            <div class="lbl lbl-start mt-3">Trial</div>
                                                        @endif
                                                    </div>
                                                    <div class="col-10">
                                                        <div class="progress-wrapper">
                                                            <div class="lbl lbl-start">Start Date</div>
                                                            <div class="lbl lbl-end">End Date</div>
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" aria-valuemin="0" style="width: {{get_expire_date($project_detail->id)['remaining_days'] / 30 * 100}}%;" aria-valuemax="30"></div>
                                                            </div>
                                                            <div class="date date-start">{{$project_detail->package_starting_date}}</div>
                                                            <div class="date date-end">{{$project_detail->expire_date}}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    
                                                @else
                                                    <div class="progress-wrapper">
                                                        <div class="lbl lbl-start">Not Selected</div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </section> -->

                                <div class="webProperty-block">
                                    <div class="header">
                                        <div class="info-block">
                                            <div class="title">{{$project_detail->name}}</div>
                                            <div class="url">{{$project_detail->url}}</div>
                                        </div>
                                        <div class="sub-block">
                                            @if($project_detail->package_starting_date != null)
                                                    @if($project_detail->selected_package == 'All In One Widget + IMS Lite')
                                                        <div class="sub-type">Widget Lite</div>
                                                    @elseif($project_detail->selected_package == 'All In One Widget + IMS Pro')
                                                        <div class="sub-type">Widget Pro</div>
                                                    @elseif($project_detail->selected_package == 'Optimizer')
                                                        <div class="sub-type">Optimizer</div>
                                                    @elseif($project_detail->package_type == 'Free') 
                                                        <div class="sub-type">Trial</div>
                                                    @endif
                                                <div class="lbl lbl-start">Bill Start Date</div>
                                                <div class="lbl lbl-end">Bill End Date</div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" progress-color aria-valuemin="0" style="width: {{get_expire_date($project_detail->id)['remaining_days'] / 30 * 100}}%;" aria-valuemax="30"></div>
                                                </div>
                                                <div class="date date-start">{{$project_detail->package_starting_date}}</div>
                                                <div class="date date-end">{{$project_detail->expire_date}}</div>
                                            @else
                                                <div class="text">Not Selected</div>
                                            @endif
                                        </div>
                                        <div class="button-block">
                                            <a href="{{route('frontend.user.project.chat',$project_detail->id)}}" type="button" class="btn btn-view"><i class="bi bi-x-diamond-fill"></i>View</a>
                                            <a href="{{ route('frontend.user.project_dash.destroy', $project_detail->id) }}" class="delete btn btn-delete" data-bs-toggle="modal" data-bs-target="#deletedashwidget"><i class="bi bi-trash"></i>Delete</a>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <div class="content-block">
                                            <div class="image-block">
                                                <img src="{{url('images/dashboard/main/unpaid_invoices.png')}}" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="subtitle">Unpaid invoices</div>
                                                <div class="text">You don't have unpaid invoices</div>
                                                <a href="#" class="link">Go to Unpaid invoices</a>
                                            </div>
                                        </div>
                                        <div class="content-block">
                                            <div class="image-block">
                                                <img src="{{url('images/dashboard/main/services.png')}}" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="subtitle">Services</div>
                                                <div class="text">1 service has auto-renewal turned-off</div>
                                                <a href="#" class="link">Go to Services</a>
                                            </div>
                                        </div>
                                        <div class="content-block">
                                            <div class="image-block">
                                                <img src="{{url('images/dashboard/main/payment_history.png')}}" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="subtitle">Payment history</div>
                                                <div class="text">Find all your payments and their invoices</div>
                                                <a href="#" class="link">Go to Payment history</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                    <h3 class="modal-title" id="deletedashwidgetLabel">Delete Project</h3>
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

    <script>
        // Progressbar color changer
        const progressColor = document.querySelectorAll("[progress-color]")
        const progressWidth = {{get_expire_date($project_detail->id)['remaining_days'] / 30 * 100}}

        window.addEventListener('load', function () {
            progressColor.forEach(function (progress) {
                if (progressWidth < 51) {
                    progress.style.backgroundColor = "#33CC0D";
                } else if (progressWidth > 51 && progressWidth < 76) {
                    progress.style.backgroundColor = "#FFAC1B";
                } else {
                    progress.style.backgroundColor = "#FF0000";
                }
            })
        })
    </script>

@endpush