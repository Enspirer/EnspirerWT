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
                                            <button class="btn-whatsapp"  data-toggle="modal" data-target=".bd-example-modal-lg">Create
                                                Widget</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @include('frontend.user.projects.dialogs.widget_manager')

                            @include('frontend.user.projects.dialogs.widget_source')

                        </section>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection