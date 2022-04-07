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

                        @if($widgetlist != null)
                            <div class="subcription-block activated">
                                <div class="active-overlay animate__animated animate__fadeIn">
                                    <div class="button-block">
                                        <div class="btn-group">
                                            <a href="{{ route('frontend.user.user_widget.ims_dashboard', $project_id) }}" type="button" class="act-btn ims-lite">
                                                <i class="bi bi-file-earmark-text"></i>
                                                <div class="text">iMS Lite</div>
                                            </a>
                                            <a href="{{ route('frontend.user.user_widget.settings', $widgetlist->id) }}" type="button" class="act-btn">
                                                <i class="bi bi-gear"></i>
                                                <div class="text">Settings</div>
                                            </a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#get_widget_Modal{{$widgetlist->id}}" type="button" class="act-btn">
                                                <i class="bi bi-code-slash"></i>
                                                <div class="text">Add Script</div>
                                            </a>                
                                        </div>
                                        <div class="btn-group">
                                            <a href="{{ route('frontend.user.user_widget.destroy', $widgetlist->id) }}" data-bs-toggle="modal" data-bs-target="#deleteFavorite" type="button" class="act-btn delete">
                                                <i class="bi bi-trash"></i>
                                                <div class="text">Delete</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="inner-wrapper">
                                    <img src="{{url('images/dashboard/subscriptions/messenger-water-mark.png')}}" alt="" class="water-mark">
                                    <div class="widget-block">
                                        <div class="title">All in one Widget</div>
                                        <img src="{{url('images/dashboard/subscriptions/all-in-one.png')}}" alt="" class="widget-img">
                                    </div>
                                    <div class="separator">
                                        <i class="bi bi-plus-lg"></i>
                                    </div>
                                    <div class="widget-block">                                    
                                        @if($widgetlist->widget_type == 'IMS Pro')
                                            <div class="title">IMS <span class="pro-cat red">Pro</span></div>
                                        @endif
                                        <img src="{{url('images/dashboard/subscriptions/ims-pro.png')}}" alt="" class="widget-img">
                                    </div>
                                    <a href="#" class="sub-btn">
                                        <i class="bi bi-plus"></i>
                                        <div class="text">Activate</div>
                                    </a>
                                </div>
                            </div>
                        @else

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
                                <div class="inner-wrapper">
                                    <img src="{{url('images/dashboard/subscriptions/messenger-water-mark.png')}}" alt="" class="water-mark">
                                    <div class="widget-block">
                                        <div class="title">All in one Widget</div>
                                        <img src="{{url('images/dashboard/subscriptions/all-in-one.png')}}" alt="" class="widget-img">
                                    </div>
                                    <div class="separator">
                                        <i class="bi bi-plus-lg"></i>
                                    </div>
                                    <div class="widget-block">
                                        <div class="title">IMS <span class="pro-cat red">Pro</span></div>
                                        <img src="{{url('images/dashboard/subscriptions/ims-pro.png')}}" alt="" class="widget-img">
                                    </div>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#activateAllInOneModal" class="sub-btn">
                                        <i class="bi bi-plus"></i>
                                        <div class="text">Activate</div>
                                    </a>
                                </div>
                            </div>
                        @endif


                        
                        @include('frontend.user.projects.dialogs.widget_source')
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Modal -->
<div class="modal fade" id="activateAllInOneModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">All In One Widget + IMS Pro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a type="button" class="btn btn-success">Purchase</a>
        @if(App\Models\Widgets::where('project_id',$project_id)->where('widget_type','IMS Pro')->first() == null)
            <form action="{{route('frontend.user.user_widget.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
                <input type="hidden" name="project_id" value="{{$project_id}}">
                <input type="hidden" name="widget_type_another" value="All-in-One Chat">
                <input type="hidden" name="widget_type" value="IMS Pro">
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