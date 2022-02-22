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

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection