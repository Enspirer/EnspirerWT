@extends('frontend.layouts.app')

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
                            <div class="block-1 mb-5">
                                <div class="row g-0 mb-4">
                                    <div class="col">
                                        <div class="block-title">Chat Application</div>
                                    </div>
                                </div>
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
                                            <button class="btn-whatsapp" data-bs-toggle="modal"
                                                    data-bs-target="#whatsappModal">Create
                                                Widget</button>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- Modal -->
                            <div class="modal fade" id="whatsappModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="block-3">
                                            <div class="inner-wrapper">
                                                <div class="row g-0">
                                                    <div class="col">
                                                        <div class="header py-3">
                                                            <i class="bi bi-send-check"></i>
                                                            <span class="title">Add the widget to your website</span>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close">
                                                                <i class="bi bi-x"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-0 m-4">
                                                    <div class="col">
                                                        <div class="body">
                                                            <div class="body-text">Copy and paste this code into desired
                                                                place of your website (HTML editor, website template,
                                                                theme, etc.</div>
                                                            <div class="script-box">
                                                                &lt;script
                                                                src=&quot;https://apps.elfsight.com/p/platform.js&quot;
                                                                defer&gt;&lt;/script&gt;<br>
                                                                &lt;div
                                                                class=&quot;elfsight-app-d0e906db-2d1c-4e4f-a7c8-6ce222c1a8a9&quot;&gt;
                                                                &lt;/div&gt;
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-0">
                                                    <div class="col">
                                                        <div class="footer">
                                                            <button class="btn" data-bs-toggle="modal"
                                                                    data-bs-target="#whatsappModal">I have installed
                                                                code</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection