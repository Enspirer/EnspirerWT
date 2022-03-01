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
                                <li class="breadcrumb-item active">{{App\Models\Projects::where('id',$project_id)->first()->name}}</li>
                            </ul>
                        </div>

                        <section id="sectionTabs">
                            @include('frontend.user.projects.includes.card_section')
                        </section>


                        <!-- Analytics -->


                        <!-- Visitors -->


                        <!-- SEO -->


                        <!-- Whatsapp Chat Blocks -->

                        <section id="sectionWhatsappWidget">




                            <div class="block-2 mb-5">
                                <div class="row g-0 mb-4">
                                    <div class="col">
                                        <div class="block-title">Chat Application</div>
                                    </div>
                                </div>
                                <div class="row gx-5 justify-content-between">
                                    <div class="col-6">
                                        <div class="innwer-wrapper px-4 mt-4 dotted-border" style="height: 200px;">
                                            <button type="button" class="btn-whatsapp"  data-bs-toggle="modal" data-bs-target="#createWidgetModal">Create
                                                Widget</button>
                                        </div>
                                    </div>
                                    @foreach(\App\Models\Widgets::where('project_id',$project_id)->get() as $widgetlist)
                                        <div class="col-6">
                                            <div class="inner-wrapper px-4 mt-4" >
                                                <div class="row g-0 mt-4">
                                                    <div class="header">
                                                        <span class="title">{{$widgetlist->widget_type}}</span>
                                                        <i class="bi bi-whatsapp"></i>
                                                    </div>
                                                </div>
                                                <div class="row g-0 my-5">
                                                    <div class="col">
                                                        <div class="row g-0 mb-2 justify-content-between">
                                                            <div class="col-auto">
                                                                <div class="progress-label">www.tallentor.com</div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="progress-amount">25%</div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-0">
                                                            <div class="col">
                                                                <div class="progress">
                                                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75"
                                                                         aria-valuemin="0" aria-valuemax="100">
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
                                                <div class="row g-0 mt-3 mb-3">                                                    
                                                
                                                    <div class="col-2 text-center">
                                                        <a href="{{ route('frontend.user.user_widget.settings', $widgetlist->id) }}" class="edit btn btn-warning"><i class="fas fa-cog"></i> Settings </a>
                                                    </div>
                                                    <div class="col-2 text-center">
                                                        <a href="{{ route('frontend.user.user_widget.ims', $widgetlist->id) }}" class="edit btn btn-info ms-3"><i class="fas fa-cog"></i> IMS </a>
                                                    </div>
                                                    <div class="col-8 text-end">
                                                        <input type="hidden" name="hid_id" value="{{$widgetlist->id}}">
                                                        <a href="{{ route('frontend.user.user_widget.destroy', $widgetlist->id) }}" class="btn text-light delete" data-bs-toggle="modal" data-bs-target="#deleteFavorite" style="background-color: #ff2c4b"><i class="bi bi-trash-fill"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                    <!-- <div class="col-6">
                                        <div class="innwer-wrapper dotted-border" style="height: 200px;">
                                            <button type="button" class="btn-whatsapp"  data-bs-toggle="modal" data-bs-target="#exampleModal">Create
                                                Widget</button>
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                            <!-- Large modal -->
                            <!-- Button trigger modal -->
                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Launch demo modal
                            </button> -->

                            <!-- Modal -->
                            <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div> -->





<!-- Modal -->
<div class="modal fade" id="createWidgetModal" tabindex="-1" aria-labelledby="createWidgetModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="card">
            <div class="card-header">
                <h5 class="modal-title" id="createWidgetModalLabel">Widget Explorer</h5>
                <button type="button" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close">
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
                                                <span class="title">Whatsapp Chat</span>
                                            </div>
                                            <p class="body-text">Give users an opportunity to contact you on WhatsApp straight from your website. 
                                            </p>
                                            <div class="button-block">
                                                <input type="hidden" name="project_id" value="{{$project_id}}">
                                                <input type="hidden" name="widget_type" value="Whatsapp Chat">
                                                <button type="submit" class="btn-whatsapp"></i>Create Widget</button>
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
        $(window).on('load', function() {
                $('#overlay').modal('show');
            });
        $("#close-btn").click(function () {
            $('#overlay').modal('hide');
        });

    </script>

    <script>
        $('.delete').on('click', function() {
            let link = $(this).attr('href');
            $('.modal-footer a').attr('href', link);
        })
    </script>

@endpush