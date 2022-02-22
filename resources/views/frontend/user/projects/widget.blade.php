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
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Reports</li>
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
                                        <div class="inner-wrapper px-4">
                                            <div class="row g-0 mt-4">
                                                <div class="header">
                                                    <span class="title">Whatsapp Chat</span>
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
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="innwer-wrapper dotted-border">
                                            <button type="button" class="btn-whatsapp"  data-bs-toggle="modal" data-bs-target="#exampleModal">Create
                                                Widget</button>
                                        </div>
                                    </div>
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width: 1090px;height: 120px;max-width: 1010px;max-height: 1000px;">
    <div class="modal-content">
        <div class="card">
            <div class="card-header" style="font-size: 20px;padding-left: 30px;padding-top: 10px;padding-bottom: 10px;">
                Widget Explorer
            </div>
            <div class="card-body" style="height: 500px;overflow-y: scroll;">
                <div class="block-1 mb-5" style="border-style: solid;border-width: 1px;border-color: gray;">
                    <div class="row g-0">
                        <div class="inner-wrapper p-4">
                            <div class="col">
                                <div class="row g-0 mb-3">
                                    <div class="col">
                                        <div class="header">
                                            <span class="title">Whatsapp Chat</span>
                                            <i class="bi bi-whatsapp"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row gx-4">
                                    <div class="col-8">
                                        <p class="body-text">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Mollitia sit maxime nam sapiente illum,
                                            consequuntur aperiam quia reprehenderit deserunt delectus quos
                                            nostrum expedita omnis saepe, in labore quidem numquam quaerat.
                                            Mollitia sit maxime nam sapiente illum,
                                            consequuntur aperiam quia reprehenderit.
                                        </p>
                                    </div>
                                    <div class="col-4">
                                        <div class="button-block">
                                            <button class="btn-whatsapp"></i>Create
                                                Widget</button>
                                            <i class="bi bi-whatsapp"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col">
                                        <p class="footer-text">Give users an opportunity to contact you on
                                            Whatsapp straight from your website.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-1 mb-5" style="border-style: solid;border-width: 1px;border-color: gray;">
                    <div class="row g-0">
                        <div class="inner-wrapper p-4">
                            <div class="col">
                                <div class="row g-0 mb-3">
                                    <div class="col">
                                        <div class="header">
                                            <span class="title">Facebook Chat</span>
                                            <i class="bi bi-facebook" style="color: darkblue"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row gx-4">
                                    <div class="col-8">
                                        <p class="body-text">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Mollitia sit maxime nam sapiente illum,
                                            consequuntur aperiam quia reprehenderit deserunt delectus quos
                                            nostrum expedita omnis saepe, in labore quidem numquam quaerat.
                                            Mollitia sit maxime nam sapiente illum,
                                            consequuntur aperiam quia reprehenderit.
                                        </p>
                                    </div>
                                    <div class="col-4">
                                        <div class="button-block">
                                            <button class="btn-whatsapp"></i>Create
                                                Widget</button>
                                            <i class="bi bi-facebook"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col">
                                        <p class="footer-text">Give users an opportunity to contact you on
                                            Whatsapp straight from your website.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-1 mb-5" style="border-style: solid;border-width: 1px;border-color: gray;">
                    <div class="row g-0">
                        <div class="inner-wrapper p-4">
                            <div class="col">
                                <div class="row g-0 mb-3">
                                    <div class="col">
                                        <div class="header">
                                            <span class="title">Facebook Chat</span>
                                            <i class="bi bi-facebook" style="color: darkblue"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row gx-4">
                                    <div class="col-8">
                                        <p class="body-text">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Mollitia sit maxime nam sapiente illum,
                                            consequuntur aperiam quia reprehenderit deserunt delectus quos
                                            nostrum expedita omnis saepe, in labore quidem numquam quaerat.
                                            Mollitia sit maxime nam sapiente illum,
                                            consequuntur aperiam quia reprehenderit.
                                        </p>
                                    </div>
                                    <div class="col-4">
                                        <div class="button-block">
                                            <button class="btn-whatsapp"></i>Create
                                                Widget</button>
                                            <i class="bi bi-facebook"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col">
                                        <p class="footer-text">Give users an opportunity to contact you on
                                            Whatsapp straight from your website.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-1 mb-5" style="border-style: solid;border-width: 1px;border-color: gray;">
                    <div class="row g-0">
                        <div class="inner-wrapper p-4">
                            <div class="col">
                                <div class="row g-0 mb-3">
                                    <div class="col">
                                        <div class="header">
                                            <span class="title">Facebook Chat</span>
                                            <i class="bi bi-facebook" style="color: darkblue"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row gx-4">
                                    <div class="col-8">
                                        <p class="body-text">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Mollitia sit maxime nam sapiente illum,
                                            consequuntur aperiam quia reprehenderit deserunt delectus quos
                                            nostrum expedita omnis saepe, in labore quidem numquam quaerat.
                                            Mollitia sit maxime nam sapiente illum,
                                            consequuntur aperiam quia reprehenderit.
                                        </p>
                                    </div>
                                    <div class="col-4">
                                        <div class="button-block">
                                            <button class="btn-whatsapp"></i>Create
                                                Widget</button>
                                            <i class="bi bi-facebook"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col">
                                        <p class="footer-text">Give users an opportunity to contact you on
                                            Whatsapp straight from your website.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
@endsection