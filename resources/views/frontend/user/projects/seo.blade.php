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

                        <!-- Section Reports Main End -->

                        <div class="breadcrumb-block">
                            <ul class="breadcrumb mb-5">
                                <li class="breadcrumb-item"><a href="{{route('frontend.user.project.index')}}">Projects</a></li>
                                <li class="breadcrumb-item">{{App\Models\Projects::where('id',$project_id)->first()->name}}</li>
                                <li class="breadcrumb-item active">SEO</li>
                            </ul>
                        </div>

                        <section id="sectionTabs">
                            @include('frontend.user.projects.includes.card_section')
                        </section>

                        <!-- <section id="sectionTabNavs">
                            <div class="row g-0 mb-5">
                                <div class="col">
                                    <div class="inner-wrapper">
                                        <ul class="navbar-nav row g-0 flex-row">
                                            <div class="col">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link p-3 active">
                                                        <i class="bi bi-clipboard-data"></i>
                                                        <span class="text">Overview</span>
                                                    </a>
                                                </li>
                                            </div>
                                            <div class="col">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link p-3">
                                                        <i class="bi bi-search-heart"></i>
                                                        <span class="text">SEO</span>
                                                    </a>
                                                </li>
                                            </div>
                                            <div class="col">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link p-3">
                                                        <i class="bi bi-speedometer2"></i>
                                                        <span class="text">Performance</span>
                                                    </a>
                                                </li>
                                            </div>
                                            <div class="col">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link p-3">
                                                        <i class="bi bi-shield-check"></i>
                                                        <span class="text">Security</span>
                                                    </a>
                                                </li>
                                            </div>
                                            <div class="col">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link p-3">
                                                        <i class="bi bi-person"></i>
                                                        <span class="text">Miscellaneous</span>
                                                    </a>
                                                </li>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section> -->

                        <!-- Analytics -->


                        <!-- Visitors -->


                        <!-- SEO -->

                        <!-- <section id="sectionSEOBlock">
                            <div class="inner-wrapper p-4 mb-5">
                                <div class="row g-0 pb-3 border-bottom align-items-center justify-content-between">
                                    <div class="col-auto titile">Overview</div>
                                    <div class="col-auto duration">3 days ago</div>
                                </div>
                                <div class="row g-0">
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                        <div class="statics-block">
                                            <div class="row my-4">
                                                <div class="col">
                                                    <div class="issues-blocks">
                                                        <div class="issue-info">
                                                <span class="info"><i class="bi bi-triangle-fill red"></i>3
                                                    high
                                                    issues</span>
                                                            <span class="info-prec">3.0%</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-danger" role="progressbar"
                                                                 style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row my-4">
                                                <div class="col">
                                                    <div class="issues-blocks">
                                                        <div class="issue-info">
                                                <span class="info"><i class="bi bi-square-fill yellow"></i>3
                                                    medium
                                                    issues</span>
                                                            <span class="info-prec">3.0%</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                 style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row my-4">
                                                <div class="col">
                                                    <div class="issues-blocks">
                                                        <div class="issue-info">
                                                <span class="info"><i class="bi bi-circle-fill gray"></i>2
                                                    low issues</span>
                                                            <span class="info-prec">2.0%</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-secondary" role="progressbar"
                                                                 style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row my-4">
                                                <div class="col">
                                                    <div class="issues-blocks">
                                                        <div class="issue-info">
                                                <span class="info"><i class="bi bi-star-fill blue"></i>22
                                                    test passed</span>
                                                            <span class="info-prec">82.0%</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 25%"
                                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4"></div>
                                </div>
                            </div>
                        </section> -->

                        <!-- Whatsapp Chat Blocks -->

                        <section id="sectionWhatsappWidget">
                            @if(count(App\Models\Widgets::where('project_id',$project_id)->where('category','Analytics')->get()) != 0)
                                <div class="block-2 mb-5">
                                    <div class="row g-0 mb-4">
                                        <div class="col">
                                            <div class="block-title">My Realtime Widget</div>
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
                                                <div class="block-title">Realtime Widget</div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="row row-cols-md-2 g-5 justify-content-between">

                                        @if(App\Models\Widgets::where('project_id',$project_id)->where('widget_type','Analytics')->first() == null)
                                            <div class="col">
                                                <div class="inner-wrapper px-5 py-4">
                                                    <div class="row g-0">
                                                        <div class="header">
                                                            <div class="title">Realtime</div>
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

                            <!-- Modal -->
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
                                                                                <span class="title">Realtime</span>
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
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </section>

@foreach(\App\Models\Widgets::where('project_id',$project_id)->get() as $widgetlist)

<!-- Modal -->
<div class="modal fade get_widget_Modal" id="get_widget_Modal{{$widgetlist->id}}" tabindex="-1" role="dialog" aria-labelledby="get_widget_Lable" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <img src="{{url('images/Group 389.png')}}" alt="">
                <h5 class="modal-title" id="get_widget_Lable">Add the widget to your website</h5>
                <button type="button" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close">
                <i class="bi bi-x-lg"></i>
                </button>
            </div>
            <div class="modal-body">
                <p class="text">Copy and paste this code into desired place of your website (HTML editor, website template, theme, etc)</p>
                <code>
                    &lt;script data-host="{{url('')}}" data-dnt="false" src="{{url('js/script_tracker.js')}}" id="{{$widgetlist->widget_key}}" async defer&gt;&lt;/script&gt
                </code>
            </div>
            <div class="modal-footer">
                <a href="{{route('frontend.user.project.chat',$project_id)}}" class="modal-btn">I have installed the code</a>
            </div>
        </div>
    </div>
</div>
@endforeach

<div class="modal fade dashboard-modal delete-modal" id="deleteFavorite" tabindex="-1" aria-labelledby="deleteFavoriteLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="title">
                <h3 class="modal-title">Delete Analitycs ?</h3>
                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#fff,secondary:#fff" style="width:60px;height:60px"> </lord-icon></div>
                <button type="button" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
            </div>
            <div class="modal-footer">
                <div class="text-block">
                Do you want to delete this?
                </div>
                <div class="button-block">
                    <a type="button" class="btn btn-close btn-secondary" data-bs-dismiss="modal">Close</a>
                    <a href="" class="btn btn-delete btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>


@if(\Session::has('success') )

<div class="modal fade" id="overlay" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="title">
                    <h3 class="modal-title" >Created Successfully!</h3>
                    <i class="bi bi-check-circle"></i>
                </div>
                <button type="button" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
            </div>
            <div class="modal-body">
                <div class="content-block">
                    <div class="title">How to setup the Widget?</div>
                    <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis deserunt ab distinctio. Voluptatum deserunt blanditiis asperiores quos placeat voluptatibus illo possimus facilis.</div>
                    <a href="#" class="act-btn act-tutorial">
                    <i class="bi bi-boxes"></i>
                    Tutorials</a>
                </div>
                <div class="image-block">
                    <img src="{{url('images/tutorial.png')}}" alt="">
                </div>
            </div>
            <div class="modal-footer">
                <div class="button-block">
                    <a href="{{ route('frontend.user.user_widget.settings', $widgetlist->id) }}"
                        class="act-btn act-settings">
                        <i class="bi bi-gear"></i>
                        Settings
                    </a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#get_widget_Modal{{$widgetlist->id}}" class="act-btn act-script">
                    <i class="bi bi-code-slash"></i>
                        Add Script
                    </a>
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

@endif

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

<script>
    $('.delete').on('click', function () {
        let link = $(this).attr('href');
        $('.modal-footer a').attr('href', link);
    })
</script>

@endpush