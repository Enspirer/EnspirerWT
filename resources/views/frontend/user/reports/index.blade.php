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


            <!-- Section Reports Main -->

            <div class="section-header">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><i class="bi bi-chevron-right"></i></li>
                                <li class="breadcrumb-item"><span>Reports</span></li>
                            </ul>
                        </div>

                        <div class="section-reports">
                            <div class="header">
                                <div class="title">Reports</div>
                                <div class="button-block">
                                    <a class="btn-advanced" href="#"><i class="bi bi-gear"></i><span
                                            class="text">Advanced</span></a>
                                    <a class="btn-options" href="#"><i class="bi bi-sliders2"></i></a>
                                </div>
                            </div>
                            <div class="body">
                                <div class="title">Privacy</div>
                                <fieldset id="reportsPrivacy">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="private" id="privacy_1">
                                        <label class="form-check-label" for="privacy_1">
                                            Private
                                            <span class="text">Stats accessible only by you.</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="public" id="privacy_2">
                                        <label class="form-check-label" for="privacy_2">
                                            Public
                                            <span class="text">Stats accessible by anyone.</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="password" id="privacy_3"
                                            checked>
                                        <label class="form-check-label" for="privacy_3">
                                            Password
                                            <span class="text">Stats accessible by password.</span>
                                            <div class="privacy-password-input">
                                                <div class="input-group">
                                                    <span class="input-group-text" id="privacyPwInput"><i
                                                            class="bi bi-lock"></i></span>
                                                    <input type="password" class="form-control" aria-label="Username"
                                                        aria-describedby="privacyPwInput">
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="footer">
                                <div class="input-group">
                                    <label class="form-input-label"><i class="bi bi-search"></i></label>
                                    <input type="text" class="form-control" placeholder="Type your website URL here"
                                        aria-describedby="findReports">
                                    <a class="btn" role="button" id="findReports">Show Results</a>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>

    
    
@endsection
