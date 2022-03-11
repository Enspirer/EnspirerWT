@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/reports.css')}}">
<link rel="stylesheet" href="{{url('css/projects.css')}}">
<link rel="stylesheet" href="{{url('css/dashboard_settings.css')}}">


<section id="sectionMainWindow">
    @include('frontend.includes.sidebar')

    <div id="sectionBody">
        @include('frontend.includes.nav')

        <!-- Content goes here -->
        <div class="row g-0">
            <section class="section-settings">
                <div class="tab-block">
                    <div class="nav nav-pills " id="settingsTab" role="tablist" aria-orientation="vertical">
                        <!-- <button class="nav-link active" id="accounts-details-tab" data-bs-toggle="pill"
                            data-bs-target="#accounts-details" type="button" role="tab" aria-controls="accounts-details"
                            aria-selected="true">
                            <div class="inner-wrapper">
                                <i class="bi bi-person"></i>
                                <div class="text">Your Details</div>
                            </div>
                            <i class="bi bi-chevron-right"></i>
                        </button> -->
                        <button class="nav-link" id="edit-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#edit-profile" type="button" role="tab" aria-controls="edit-profile"
                            aria-selected="false">
                            <div class="inner-wrapper">
                                <i class="bi bi-pencil"></i>
                                <div class="text">General</div>
                            </div>
                            <i class="bi bi-chevron-right"></i>
                        </button>
                       
                    </div>
                </div>
                <div class="content-block">
                    <div class="tab-content" id="settingsTabContent">
                        <!-- <div class="tab-pane " id="accounts-details" role="tabpanel"
                            aria-labelledby="accounts-details-tab">
                            <div class="row g-0">
                                <div class="col">
                                    <div class="title">Account Details</div>
                                </div>
                            </div>
                            <div class="row g-0">
                                <div class="col-9">
                                    <div class="content">
                                        <div class="row g-0">
                                            <div class="col-4">
                                                <div class="profile-pic">
                                                    <img src="" alt="">
                                                    <i class="bi bi-pencil-fill"></i>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="profile-info">
                                                    <i class="bi bi-pencil-fill"></i>
                                                    <div class="info-item">
                                                        Your Name :
                                                        <span class="data"></span>
                                                    </div>
                                                    <div class="info-item">
                                                        Email :
                                                        <span class="data"></span>
                                                    </div>
                                                    <div class="info-item">
                                                        Contact Number :
                                                        <span class="data"></span>
                                                    </div>
                                                    <div class="info-item">
                                                        Address :
                                                        <span class="data"></span>
                                                    </div>
                                                    <div class="info-item">
                                                        City :
                                                        <span class="data"></span>
                                                    </div>
                                                    <div class="info-item">
                                                        Province :
                                                        <span class="data"></span>
                                                    </div>
                                                    <div class="info-item">
                                                        Zip Code :
                                                        <span class="data"></span>
                                                    </div>
                                                    <div class="info-item">
                                                        Country :
                                                        <span class="data"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="tab-pane fade show active" id="edit-profile" role="tabpanel" aria-labelledby="edit-profile-tab">
                            <div class="row g-0">
                                <div class="col">
                                    <div class="title">General</div>
                                </div>
                            </div>
                            <div class="row g-0">
                                <div class="col-6">
                                    <div class="content">
                                       
                                        <form action="{{route('frontend.user.user_widget.project_settings_update')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}

                                        
                                            <div class="col-12">
                                                <label class="form-label">Owner Email <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control" name="owner_email" required>
                                            </div>
                                            <div class="col-12 mt-3">
                                                <label class="form-label">Owner Phone Number <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="owner_phone_number" required>
                                            </div>
                                            <div class="col-12 mt-3">
                                                <label class="form-label">Company Address <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="company_address" required>
                                            </div>
                                            <div class="col-12 mt-3">
                                                <label class="form-label">Company Email <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control" name="company_email" required>
                                            </div>
                                            
                                            
                                            <div class="col-12 mt-4">
                                                <input type="hidden" name="hidden_id" value="{{ $project->id }}">
                                                <button type="submit" class="save-btn">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </section>
        </div>
    </div>



    @endsection

    @push('after-scripts')


    @endpush