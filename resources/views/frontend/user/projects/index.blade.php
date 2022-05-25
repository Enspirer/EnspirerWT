@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/projects.css')}}">
   
@include('frontend.includes.mobile_nav')  

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
                                        <form action="{{ route('frontend.user.project.index') }}" method="get" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="search_project" id="search_project" placeholder="Search Name Here" required>
                                                <span class="input-group-text">                                                    
                                                    <button type="submit" class="search-btn" style="border: none; background-color: #A5A5A5; color: #fff;">
                                                        <i class="bi bi-search" style="color: #fff;"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </form>

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
                                <div class="row g-0 scroll-row">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Name</th>
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
                                                    <td class="col-2">
                                                        <div class="time">{{$report->name}}</div>
                                                    </td>
                                                    <td class="col-2">
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
                                                    <td class="col-2">
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
                                                                    @if(App\Models\Widgets::where('project_id',$report->id)->first() != null)
                                                                        @if(App\Models\Widgets::where('project_id',$report->id)->first()->load_count == null)
                                                                            <div class="precentage">0</div>
                                                                        @else
                                                                            <div class="precentage">{{ App\Models\Widgets::where('project_id',$report->id)->first()->load_count }}</div>
                                                                        @endif
                                                                    @else
                                                                        <div class="precentage"> No Details</i></div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="pageviews-block down">
                                                                <div class="name">Pageviews</div>
                                                                <div class="icon-block">
                                                                    <i class="bi bi-graph-down-arrow"></i>
                                                                    <div class="precentage">{{ count(App\Models\VisitorCount::where('project_id',$report->id)->get()) }}</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="col-2">
                                                        <div class="time">{{$report->created_at->toDateString()}}</div>
                                                    </td>
                                                    <td class="col-1">
                                                        <a href="{{ route('frontend.user.project_dash.destroy', $report->id) }}" class="delete btn btn-danger btn-delete" data-bs-toggle="modal" data-bs-target="#deletedashwidget"><i class="bi bi-trash"></i> Delete</a>
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

@endpush