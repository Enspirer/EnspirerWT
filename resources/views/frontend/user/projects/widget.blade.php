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
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active">
                                {{App\Models\Projects::where('id',$project_id)->first()->name}}</li>
                        </ul>
                    </div>

                    <section id="sectionTabs">
                        @include('frontend.user.projects.includes.card_section')
                    </section>

                    <section id="sectionWhatsappWidget">
                        @if(count(App\Models\Widgets::where('project_id',$project_id)->get()) != 0)
                            <div class="block-2 mb-5">
                                <div class="row g-0 mb-4">
                                    <div class="col">
                                        <div class="block-title">My Applications</div>
                                    </div>
                                </div>
                                <div class="row row-cols-md-2 g-5 justify-content-between">
                                    <div class="col">
                                        <div class="innwer-wrapper px-4 dotted-border">
                                            <button type="button" class="btn-whatsapp" data-bs-toggle="modal"
                                                data-bs-target="#createWidgetModal">Create
                                                Widget</button>
                                        </div>
                                    </div>
                                    @foreach(\App\Models\Widgets::where('project_id',$project_id)->get() as $widgetlist)
                                    <div class="col">
                                        <div class="inner-wrapper px-5 pt-5 pb-4">
                                            <div class="row g-0">
                                                <div class="header">
                                                    <span class="title">{{$widgetlist->widget_type}}</span>
                                                    <img src="{{url('images/whatsapp.png')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="row g-0 mt-5 mb-4">
                                                <div class="col">
                                                    <div class="row g-0 mb-2 justify-content-between">
                                                        <div class="col-auto">
                                                            <div class="progress-label">{{$widgetlist->widget_key}}</div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="progress-amount">25%</div>
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
                                                        <a href="{{ route('frontend.user.user_widget.ims', $project_id) }}"
                                                            class="act-btn act-ims">
                                                            <i class="bi bi-file-earmark-medical"></i>
                                                            IMS
                                                        </a>
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
                                <div class="row g-0 mb-4">
                                    <div class="col">
                                        <div class="block-title">Chat Applications</div>
                                    </div>
                                </div>
                                <div class="row row-cols-md-2 g-5 justify-content-between">
                                    <div class="col">
                                        <div class="inner-wrapper px-5 py-4">
                                            <div class="row g-0">
                                                <div class="header">
                                                    <div class="title">WhatsApp Chat</div>
                                                    <div class="image-block">
                                                        <img src="{{url('images/whatsapp (1).png')}}" alt="">
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
                                                    @if(App\Models\Widgets::where('project_id',$project_id)->where('widget_type','Whatsapp Chat')->first() == null)
                                                        <form action="{{route('frontend.user.user_widget.store')}}" method="post" enctype="multipart/form-data">
                                                        {{csrf_field()}}
                                                            <input type="hidden" name="project_id" value="{{$project_id}}">
                                                            <input type="hidden" name="widget_type" value="Whatsapp Chat">
                                                            <button type="submit" class="create-widget-btn">Create Widget</button>
                                                        </form>
                                                    @else
                                                        <button type="submit" class="create-widget-btn" disabled>Already Installed</button>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="inner-wrapper px-5 py-4">
                                            <div class="row g-0">
                                                <div class="header">
                                                    <div class="title">All-in-One Chat</div>
                                                    <div class="image-block">
                                                        <img src="{{url('images/whatsapp (1).png')}}" alt="">
                                                        <img src="{{url('images/viber.png')}}" alt="">
                                                        <img src="{{url('images/instagram (1).png')}}" alt="">
                                                        <img src="{{url('images/Facebook_Messenger_logo_2020.svg (1).png')}}"
                                                            alt="">
                                                    </div>
                                                    <img src="{{url('images/messenger.png')}}" alt="" class="watermark-img">
                                                </div>
                                            </div>
                                            <div class="row g-0">
                                                <div class="col">
                                                    <p class="body-text">Let users chat with you on Facebook Messenger,
                                                        WhatsApp, Telegram, etc.</p>
                                                </div>
                                            </div>
                                            <div class="row g-0 mt-4 mb-3">
                                                <div class="button-block">
                                                    @if(App\Models\Widgets::where('project_id',$project_id)->where('widget_type','All-in-One Chat')->first() == null)
                                                        <form action="{{route('frontend.user.user_widget.store')}}" method="post" enctype="multipart/form-data">
                                                        {{csrf_field()}}
                                                            <input type="hidden" name="project_id" value="{{$project_id}}">
                                                            <input type="hidden" name="widget_type" value="All-in-One Chat">
                                                            <button type="submit" class="create-widget-btn">Create Widget</button>
                                                        </form>
                                                    @else
                                                        <button type="submit" class="create-widget-btn" disabled>Already Installed</button>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="createWidgetModal" tabindex="-1"
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

                                                            <div class="col mt-3">
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

<div class="modal fade" id="deleteFavorite" tabindex="-1" aria-labelledby="deleteFavoriteLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Delete Widget</h3>
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


@if(\Session::has('success') )

<div class="modal fade" id="overlay" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body" style="padding: 3rem">
                <h2 class="text-center">Created Successfully!</h2>
                <!-- <h5>Email Alert Sent</h5> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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