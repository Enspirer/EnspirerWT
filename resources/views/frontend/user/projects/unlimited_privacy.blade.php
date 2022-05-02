@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/seo.css')}}">

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
                                <li class="breadcrumb-item active">Unlimited Privacy</li>
                            </ul>
                        </div>

                        @include('frontend.user.projects.includes.card_section')


                                         

                    </div>
                </div>
            </div>
        </div>
    </section>



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
   
@endpush