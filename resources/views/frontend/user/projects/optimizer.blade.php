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
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active">
                                {{App\Models\Projects::where('id',$project_id)->first()->name}}</li>
                        </ul>
                    </div>

                    <section id="sectionTabs">
                        @include('frontend.user.projects.includes.card_section')
                    </section>

                    <section id="sectionWhatsappWidget">

                        <div class="title">Tallentor Optimizer Features</div>

                        <div class="realtime-table">
                            <div class="header">
                                <div class="title">Realtime View</div>
                                <div class="filter-block">
                                    <div class="filter-group">
                                        <div class="dropdown filter-dropdown status-drop">
                                            <a class="filter-button status-btn" href="#" role="button" id="statusDrop" data-bs-toggle="dropdown" aria-expanded="false">
                                                Everyone
                                                <i class="bi bi-chevron-down"></i>
                                            </a>

                                            <ul class="dropdown-menu" aria-labelledby="statusDrop">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown filter-dropdown date-drop">
                                            <a class="filter-button date-btn" href="#" role="button" id="dateDrop" data-bs-toggle="dropdown" aria-expanded="false">
                                                Today
                                                <i class="bi bi-chevron-down"></i>
                                            </a>

                                            <ul class="dropdown-menu" aria-labelledby="dateDrop">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="filter-group">
                                        <div class="input-group">
                                            <input type="search" class="form-control" placeholder="Search">
                                            <i class="bi bi-search"></i>
                                        </div>
                                        <div class="dropdown filter-dropdown filter-drop">
                                            <a class="filter-button filter-btn" href="#" role="button" id="filterDrop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-funnel"></i>
                                            </a>

                                            <ul class="dropdown-menu" aria-labelledby="filterDrop">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="body">
                                <table class="table align-middle">
                                    <thead class="tbl-header">
                                        <tr class="tbl-row">
                                            <td class="th-col"></td>
                                            <td class="th-col">Country</td>
                                            <td class="th-col">Status</td>
                                            <td class="th-col">Key Event</td>
                                            <td class="th-col">Pages</td>
                                            <td class="th-col"></td>
                                        </tr>
                                    </thead>
                                    <tbody class="tbl-body">
                                        <tr class="tbl-row">
                                            <td class="tb-col rt-flag">
                                                <img src="https://flagicons.lipis.dev/flags/4x3/lk.svg" alt="">
                                            </td>
                                            <td class="tb-col rt-country">
                                                Sri Lanka
                                            </td>
                                            <td class="tb-col rt-status">
                                                <div class="status-block">
                                                    <i class="bi bi-circle-fill"></i>
                                                    <div class="text">Online</div>
                                                </div>
                                            </td>
                                            <td class="tb-col rt-keyEvent">
                                                <span class="event yellow">Product Viewed</span>
                                                <span class="event blue">Cart Viewed</span>
                                                <span class="event purple">Top CTA</span>
                                            </td>
                                            <td class="tb-col rt-pages">
                                                <div class="pages-count">10</div>
                                            </td>
                                            <td class="tb-col rt-invite">
                                                <a href="#" class="tbl-btn btn-invite">
                                                    <img src="{{url('images/dashboard/optimizer/invite-icon.png')}}" alt="">
                                                    <div class="text">Invite</div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="tbl-row offline">
                                            <td class="tb-col rt-flag">
                                                <img src="https://flagicons.lipis.dev/flags/4x3/sg.svg" alt="">
                                            </td>
                                            <td class="tb-col rt-country">
                                                Singapore
                                            </td>
                                            <td class="tb-col rt-status">
                                                <div class="status-block">
                                                    <i class="bi bi-circle"></i>
                                                    <div class="text">Offline</div>
                                                </div>
                                            </td>
                                            <td class="tb-col rt-keyEvent">
                                                <span class="event yellow">Product Viewed</span>
                                                <span class="event blue">Cart Viewed</span>
                                                <span class="event purple">Top CTA</span>
                                            </td>
                                            <td class="tb-col rt-pages">
                                                <div class="pages-count">10</div>
                                            </td>
                                            <td class="tb-col rt-invite">
                                                <a href="#" class="tbl-btn btn-invite">
                                                    <img src="{{url('images/dashboard/optimizer/invite-icon.png')}}" alt="">
                                                    <div class="text">Invite</div>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="subcription-block">
                            <div class="active-overlay animate__animated animate__fadeIn">
                                <div class="button-block">
                                    <div class="btn-group">
                                        <button type="button" class="act-btn ims-lite">
                                            <i class="bi bi-file-earmark-text"></i>
                                            <div class="text">iMS Lite</div>
                                        </button>
                                        <button type="button" class="act-btn">
                                            <i class="bi bi-gear"></i>
                                            <div class="text">Settings</div>
                                        </button>
                                        <button type="button" class="act-btn">
                                            <i class="bi bi-code-slash"></i>
                                            <div class="text">Add Script</div>
                                        </button>                
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="act-btn delete">
                                            <i class="bi bi-trash"></i>
                                            <div class="text">Delete</div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="content-block">
                                <div class="widget-block">
                                    <img src="{{url('images/dashboard/subscriptions/ims-pro.png')}}" alt="" class="widget-img">
                                    <div class="content">
                                        <div class="title">Desktop</div>
                                        <ul class="options">
                                            <li class="list-item">
                                                <i class="bi green bi-check-circle-fill"></i>
                                                <div class="text">Realtime View + Invites</div>
                                            </li>
                                            <li class="list-item">
                                                <i class="bi green bi-check-circle-fill"></i>
                                                <div class="text">Analytics Center</div>
                                            </li>
                                            <li class="list-item">
                                                <i class="bi green bi-check-circle-fill"></i>
                                                <div class="text">SEO Reports</div>
                                            </li>
                                            <li class="list-item">
                                                <i class="bi green bi-check-circle-fill"></i>
                                                <div class="text">Session Recording</div>
                                            </li>
                                            <li class="list-item">
                                                <i class="bi green bi-check-circle-fill"></i>
                                                <div class="text">Heatmaps</div>
                                            </li>
                                            <li class="list-item">
                                                <i class="bi green bi-check-circle-fill"></i>
                                                <div class="text">Security</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget-block">
                                    <img src="{{url('images/dashboard/subscriptions/mobile-app.png')}}" alt="" class="widget-img">
                                    <div class="content">
                                        <div class="title">Mobile</div>
                                        <ul class="options">
                                            <li class="list-item">
                                                <i class="bi green bi-check-circle-fill"></i>
                                                <div class="text">Realtime View</div>
                                            </li>
                                            <li class="list-item">
                                                <i class="bi green bi-check-circle-fill"></i>
                                                <div class="text">Visitor Invite</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="button-block">
                                <a href="#" class="sub-btn" data-bs-toggle="modal" data-bs-target="#actOptimizer">
                                    <i class="bi bi-plus"></i>
                                    <div class="text">Activate</div>
                                </a>
                            </div>
                        </div>

                        @include('frontend.user.projects.dialogs.widget_source')
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade plan-modal premium" id="actOptimizer" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Widget Explorer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="inner-wrapper">
                    <div class="content-block">
                        <div class="label">The Best</div>
                        <div class="header">
                            <div class="text-block">
                                <div class="plan">Executive</div>
                                <div class="fee">$ 15.00 <span>/ month</span></div>
                            </div>
                            <img src="{{url('images/dashboard/subscriptions/plan-icon.png')}}" alt="">
                        </div>
                        <div class="option-block">
                            <ul class="options desktop">
                                <div class="device">Desktop</div>
                                <li class="list-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <div class="text">All in one Widgets</div>
                                </li>
                                <li class="list-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <div class="text">Real Time Visitors</div>
                                </li>
                                <li class="list-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <div class="text">Analytics Center </div>
                                </li>
                                <li class="list-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <div class="text">Security</div>
                                </li>
                            </ul>
                            <ul class="options mobile">
                                <div class="device">Mobile</div>
                                <li class="list-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <div class="text">Realtime View</div>
                                </li>
                                <li class="list-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <div class="text">Session View</div>
                                </li>
                                <li class="list-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <div class="text">Invite Site User</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="button-block">
                        <a href="#" type="button" class="widget-btn btn-fill">Buy Now</a>
                        @if(App\Models\Widgets::where('project_id',$project_id)->where('widget_type','IMS Pro')->first() ==
                        null)
                        <form action="{{route('frontend.user.user_widget.store')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="project_id" value="{{$project_id}}">
                            <input type="hidden" name="widget_type_another" value="All-in-One Chat">
                            <input type="hidden" name="widget_type" value="IMS Pro">
                            <button type="submit" class="widget-btn btn-outline">Free Trial</button>
                        </form>
                        @else
                        <button type="submit" class="widget-btn btn-outline" disabled>Free Trial</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade widget-explorer" id="createWidgetModal" tabindex="-1"
    aria-labelledby="createWidgetModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card">
                <div class="card-header">
                    <h5 class="modal-title" id="createWidgetModalLabel">Widget Explorer</h5>
                    <button type="button" class="btn-close-modal" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>
                <div class="card-body">
                    <div class="block-1">
                        <div class="row g-0">
                            <form action="{{route('frontend.user.user_widget.store')}}"
                                method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="inner-wrapper">
                                    <div class="col">
                                        <div class="row g-0 align-items-center justify-content-between">
                                            <div class="col-7">
                                                <div class="header">
                                                    <span class="title">Whatsapp Chat</span>
                                                </div>
                                                <p class="body-text">Give users an opportunity
                                                    to contact you on WhatsApp straight from
                                                    your website.
                                                </p>
                                                <div class="button-block">
                                                    @if(App\Models\Widgets::where('project_id',$project_id)->where('widget_type','Whatsapp Chat')->first() == null)
                                                        <input type="hidden" name="project_id" value="{{$project_id}}">
                                                        <input type="hidden" name="widget_type" value="Whatsapp Chat">
                                                        <button type="submit" class="btn-whatsapp"></i>Create Widget</button>
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

                                    <div class="col mt-5">
                                        <div class="row g-0 align-items-center justify-content-between">
                                            <div class="col-7">
                                                <div class="header">
                                                    <span class="title">All-in-One Chat</span>
                                                </div>
                                                <p class="body-text">Let users chat with you on Facebook Messenger, WhatsApp, Telegram, etc.</p>
                                                <div class="button-block">
                                                    @if(App\Models\Widgets::where('project_id',$project_id)->where('widget_type','All-in-One Chat')->first() == null)
                                                        <input type="hidden" name="project_id" value="{{$project_id}}">
                                                        <input type="hidden" name="widget_type" value="All-in-One Chat">
                                                        <button type="submit" class="btn-whatsapp"></i>Create Widget</button>
                                                    @else
                                                        <button type="submit" class="btn-whatsapp" disabled>Already Installed</button>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="whatsapp-feature-block">
                                                    <img src="{{url('images/social_media_icons/chat.png')}}" alt="">
                                                    <div class="title">All-in-One Chat</div>
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

                                    <div class="col mt-5">
                                        <div class="row g-0 align-items-center justify-content-between">
                                            <div class="col-7">
                                                <div class="header">
                                                    <span class="title">IMS Pro</span>
                                                </div>
                                                <p class="body-text">Let users chat with you on Facebook Messenger, WhatsApp, Telegram, etc.</p>
                                                <div class="button-block">
                                                    @if(App\Models\Widgets::where('project_id',$project_id)->where('widget_type','IMS Pro')->first() == null)
                                                        <input type="hidden" name="project_id" value="{{$project_id}}">
                                                        <input type="hidden" name="widget_type" value="IMS Pro">
                                                        <button type="submit" class="btn-whatsapp"></i>Create Widget</button>
                                                    @else
                                                        <button type="submit" class="btn-whatsapp" disabled>Already Installed</button>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="whatsapp-feature-block">
                                                    <img src="{{url('images/social_media_icons/ims-logo.png')}}" style="width:80px;" alt="">
                                                    <div class="title">IMS Pro</div>
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

<!-- Modal -->
<div class="modal fade" id="activateAllInOneModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">All In One Widget + IMS Lite</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a type="button" class="btn btn-success">Purchase</a>
        @if(App\Models\Widgets::where('project_id',$project_id)->where('widget_type','All-in-One Chat')->first() == null)
            <form action="{{route('frontend.user.user_widget.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
                <input type="hidden" name="project_id" value="{{$project_id}}">
                <input type="hidden" name="widget_type" value="All-in-One Chat">
                <button type="submit" class="btn btn-primary">Free Trial</button>
            </form>
        @else
            <button type="submit" class="btn btn-primary" disabled>Free Trial</button>
        @endif
      </div>
    </div>
  </div>
</div>

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
                    &lt;div id="{{$widgetlist->widget_key}}"&gt;&lt;/div&gt; <br>
                    &lt;script src="{{url('')}}/whatsapp_widget/{{$widgetlist->id}}/tallentorw.js"&gt;&lt;/script&gt;
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
                <h3 class="modal-title">Delete Widget ?</h3>
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