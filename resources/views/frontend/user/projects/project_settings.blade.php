@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/reports.css')}}">
<link rel="stylesheet" href="{{url('css/projects.css')}}">
<link rel="stylesheet" href="{{url('css/project_settings.css')}}">


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
                                                    <img src="" >
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
                                    <div class="title" style="font-weight: 600;font-size: 26px; margin-bottom: 2rem;">General</div>
                                </div>
                            </div>
                            @if(session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session()->get('error') }}
                                </div>
                            @endif
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            <div class="row g-0">
                                <div class="col-6">
                                    <div class="card p-4" style="border-radius:20px;">
                                        <div class="content">
                                        
                                            <form action="{{route('frontend.user.user_widget.project_settings_update')}}" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}

                                                @if($project->settings != null)
                                                    
                                                    <div class="col-12 mb-3">
                                                        <div class="form-group mt-3">  
                                                            <label style="font-size:14px;" class="mb-2">Logo <span class="text-danger">*</span></label>                                                  
                                                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                                                </div>
                                                                <div class="form-control file-amount">Choose File</div>
                                                                <input type="hidden" id="logo" name="logo" value="{{ json_decode($project->settings)->logo }}" class="selected-files" >
                                                            </div>
                                                            <div class="file-preview box sm">
                                                            </div>
                                                        </div> 
                                                    </div> 

                                                    <div class="col-12 mb-3">
                                                        <label for="email_update" class="form-label">Email Update</label>
                                                        <select id="email_update" class="form-select" name="email_update" required>
                                                            <option value="" selected disabled>Select Here...</option>
                                                            <option value="Enabled" {{json_decode($project->settings)->email_update == 'Enabled' ? "selected" : ""}}>Enable</option>   
                                                            <option value="Disabled" {{json_decode($project->settings)->email_update == 'Disabled' ? "selected" : ""}}>Disable</option>  
                                                        </select>                                                
                                                    </div>

                                                    <div class="col-12 mb-3">
                                                        <label for="ims" class="form-label">IMS</label>
                                                        <select id="ims" class="form-select" name="ims" required>
                                                            <option value="" selected disabled>Select Here...</option>
                                                            <option value="Enabled" {{json_decode($project->settings)->ims == 'Enabled' ? "selected" : ""}}>Enable</option>   
                                                            <option value="Disabled" {{json_decode($project->settings)->ims == 'Disabled' ? "selected" : ""}}>Disable</option>  
                                                        </select>                                                
                                                    </div>

                                                    <div class="col-12 mb-3">
                                                        <label for="security_alert_email_notification" class="form-label">Security Alert Email Notification</label>
                                                        <select id="security_alert_email_notification" class="form-select" name="security_alert_email_notification" required>
                                                            <option value="" selected disabled>Select Here...</option>
                                                            <option value="Enabled" {{json_decode($project->settings)->security_alert_email_notification == 'Enabled' ? "selected" : ""}}>Enable</option>   
                                                            <option value="Disabled" {{json_decode($project->settings)->security_alert_email_notification == 'Disabled' ? "selected" : ""}}>Disable</option>  
                                                        </select>                                                
                                                    </div>
                                                
                                                    <div class="col-12 mb-3">
                                                        <label class="form-label">Owner Email <span class="text-danger">*</span></label>
                                                        <input type="email" class="form-control" value="{{ json_decode($project->settings)->owner_email }}" name="owner_email" required>
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <label class="form-label">Owner Phone Number <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" value="{{ json_decode($project->settings)->owner_phone_number }}" name="owner_phone_number" required>
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <label class="form-label">Company Address <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" value="{{ json_decode($project->settings)->company_address }}" name="company_address" required>
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <label class="form-label">Company Email <span class="text-danger">*</span></label>
                                                        <input type="email" class="form-control" value="{{ json_decode($project->settings)->company_email }}" name="company_email" required>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-12 mt-4">
                                                        <input type="hidden" name="hidden_id" value="{{ $project->id }}">
                                                        <button type="submit" class="save-btn">Update</button>
                                                    </div>

                                                @else

                                                    <div class="col-12 mb-3">
                                                        <div class="form-group mt-3">  
                                                            <label style="font-size:14px;" class="mb-2">Logo <span class="text-danger">*</span></label>                                                  
                                                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                                                </div>
                                                                <div class="form-control file-amount">Choose File</div>
                                                                <input type="hidden" id="logo" name="logo" value="" class="selected-files" >
                                                            </div>
                                                            <div class="file-preview box sm">
                                                            </div>
                                                        </div> 
                                                    </div> 

                                                    <div class="col-12 mb-3">
                                                        <label for="email_update" class="form-label">Email Update</label>
                                                        <select id="email_update" class="form-select" name="email_update" required>
                                                            <option value="" selected disabled>Select Here...</option>
                                                            <option value="Enabled">Enable</option>   
                                                            <option value="Disabled">Disable</option>  
                                                        </select>                                                
                                                    </div>

                                                    <div class="col-12 mb-3">
                                                        <label for="ims" class="form-label">IMS</label>
                                                        <select id="ims" class="form-select" name="ims" required>
                                                            <option value="" selected disabled>Select Here...</option>
                                                            <option value="Enabled">Enable</option>   
                                                            <option value="Disabled">Disable</option>  
                                                        </select>                                                
                                                    </div>

                                                    <div class="col-12 mb-3">
                                                        <label for="security_alert_email_notification" class="form-label">Security Alert Email Notification</label>
                                                        <select id="security_alert_email_notification" class="form-select" name="security_alert_email_notification" required>
                                                            <option value="" selected disabled>Select Here...</option>
                                                            <option value="Enabled">Enable</option>   
                                                            <option value="Disabled">Disable</option>  
                                                        </select>                                                
                                                    </div>
                                                
                                                    <div class="col-12 mb-3">
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

                                                @endif

                                            </form>
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



    @endsection

    @push('after-scripts')

    <script>
        function uploaderClose() {
            document.getElementById("aizUploaderModal").click();
        }
    </script>

    @endpush