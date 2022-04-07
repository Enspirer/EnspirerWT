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
                        @if(count(App\Models\Widgets::where('project_id',$project_id)->where('category','Widgets')->get()) != 0)
                            <div class="block-2 mb-5">
                                <div class="row g-0 mb-4">
                                    <div class="col">
                                        <div class="block-title">Tallentor Widget Features</div>
                                    </div>
                                </div>
                                <div class="row g-5 justify-content-between">
                                    
                                    @foreach(\App\Models\Widgets::where('project_id',$project_id)->where('category','Widgets')->get() as $widgetlist)
                                    <div class="col-12">
                                        <div class="inner-wrapper px-5 pt-5 pb-4">
                                            <div class="row g-0">
                                                <div class="header">
                                                    
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <div class="header">
                                                                <div class="title mt-3">{{$widgetlist->widget_type}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-1">
                                                            <div class="header">
                                                                <div class="title mt-3">+</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="header">
                                                                <div class="title mt-3">IMS Lite</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-5">
                                                            @if($widgetlist->widget_type == 'Whatsapp Chat')
                                                                <div class="button-block">
                                                                    @if(App\Models\Widgets::where('project_id',$project_id)->where('widget_type','Whatsapp Chat')->first() == null)
                                                                        <form action="{{route('frontend.user.user_widget.store')}}" method="post" enctype="multipart/form-data">
                                                                        {{csrf_field()}}
                                                                            <input type="hidden" name="project_id" value="{{$project_id}}">
                                                                            <input type="hidden" name="widget_type" value="Whatsapp Chat">
                                                                            <button type="submit" class="create-widget-btn">+ Activate</button>
                                                                        </form>
                                                                    @else
                                                                        <button type="submit" class="create-widget-btn p-3" disabled>Activated</button>
                                                                    @endif
                                                                </div>
                                                            @else
                                                                <div class="button-block">
                                                                    @if(App\Models\Widgets::where('project_id',$project_id)->where('widget_type','All-in-One Chat')->first() == null)
                                                                        <form action="{{route('frontend.user.user_widget.store')}}" method="post" enctype="multipart/form-data">
                                                                        {{csrf_field()}}
                                                                            <input type="hidden" name="project_id" value="{{$project_id}}">
                                                                            <input type="hidden" name="widget_type" value="All-in-One Chat">
                                                                            <button type="submit" class="create-widget-btn">+ Activate</button>
                                                                        </form>
                                                                    @else
                                                                        <button type="submit" class="create-widget-btn p-3" disabled>Activated</button>
                                                                    @endif
                                                                </div>
                                                            @endif
                                                            <div class="button-block mt-2">
                                                                <div class="block-1">
                                                                    <a href="{{ route('frontend.user.user_widget.ims_dashboard', $project_id) }}" class="act-btn act-ims">
                                                                        <i class="bi bi-file-earmark-medical"></i>
                                                                        IMS
                                                                    </a>
                                                                    
                                                                    <a href="{{ route('frontend.user.user_widget.settings', $widgetlist->id) }}" class="act-btn act-settings">
                                                                        <i class="bi bi-gear"></i>
                                                                        Settings
                                                                    </a>
                                                                
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#get_widget_Modal{{$widgetlist->id}}" class="me-3 act-btn act-script">
                                                                        <i class="bi bi-code-slash"></i> Add Script
                                                                    </a>
                                                                    
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="button-block mt-2">                                                                
                                                                <div class="block-1">
                                                                    <input type="hidden" name="hid_id" value="{{$widgetlist->id}}">
                                                                    <a href="{{ route('frontend.user.user_widget.destroy', $widgetlist->id) }}"
                                                                        class="act-btn delete act-delete" data-bs-toggle="modal"
                                                                        data-bs-target="#deleteFavorite">
                                                                        <i class="bi bi-trash"></i>
                                                                        Deactivate
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
                                            </div>
                                            <!-- <div class="row g-0 mt-4 mb-3">
                                                
                                            </div> -->
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        <div class="row g-0">
                            <div class="chat-applications">
                                <div class="row g-0 mb-4">
                                    @if(App\Models\Widgets::where('project_id',$project_id)->where('widget_type','Whatsapp Chat')->first() == null && App\Models\Widgets::where('project_id',$project_id)->where('widget_type','All-in-One Chat')->first() == null)
                                        <div class="col">
                                            <div class="block-title">Tallentor Widget Features</div>
                                        </div>
                                    @endif
                                </div>
                                <div class="row g-5 justify-content-between mt-1">
                                    @if(App\Models\Widgets::where('project_id',$project_id)->where('widget_type','Whatsapp Chat')->first() == null)
                                        <div class="col-12">
                                            <div class="inner-wrapper px-5 py-4">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="header">
                                                            <div class="title mt-3">Whatsapp Widget</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-1">
                                                        <div class="header">
                                                            <div class="title mt-3">+</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="header">
                                                            <div class="title mt-3">IMS Lite</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="button-block">
                                                            <button type="submit" class="create-widget-btn" data-bs-toggle="modal" data-bs-target="#activateWidgetModal">Activate</button>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    @endif
                                    @if(App\Models\Widgets::where('project_id',$project_id)->where('widget_type','All-in-One Chat')->first() == null)
                                        <div class="col-12 mt-4">
                                            <div class="inner-wrapper px-5 py-4">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="header">
                                                            <div class="title mt-3">All-In-One Widget</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-1">
                                                        <div class="header">
                                                            <div class="title mt-3">+</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="header">
                                                            <div class="title mt-3">IMS Lite</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="button-block">
                                                            <button type="submit" class="create-widget-btn" data-bs-toggle="modal" data-bs-target="#activateAllInOneModal">Activate</button>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    @endif
                                    
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
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
                        @include('frontend.user.projects.dialogs.widget_source')
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="activateWidgetModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Whatsapp Widget + IMS Lite</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a type="button" class="btn btn-success">Purchase</a>
        @if(App\Models\Widgets::where('project_id',$project_id)->where('widget_type','Whatsapp Chat')->first() == null)
            <form action="{{route('frontend.user.user_widget.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
                <input type="hidden" name="project_id" value="{{$project_id}}">
                <input type="hidden" name="widget_type" value="Whatsapp Chat">
                <button type="submit" class="btn btn-primary">Free Trial</button>
            </form>
        @else
            <button type="submit" class="btn btn-primary" disabled>Free Trial</button>
        @endif
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