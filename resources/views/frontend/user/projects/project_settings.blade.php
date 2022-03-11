@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/projects.css')}}">
   

    <section id="sectionMainWindow">
        @include('frontend.includes.sidebar')

        <div id="sectionBody">
            @include('frontend.includes.nav')
            
            <!-- Content goes here -->
            <div class="row g-0">
                <div class="section-content">
                    <div class="section-container">
                        <div class="breadcrumb-block">
                            <ul class="breadcrumb mb-5">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active">Projects Settings</li>
                            </ul>
                        </div>

                        <!-- Dashboard -->

                        <section class="section-project-reports">
                            <div class="row g-0">
                                <div class="header">
                                    <div class="title">Projects Settings</div>
                                    <div class="search-block">
                                        
                                    </div>
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


                            <form action="{{route('frontend.user.user_widget.project_settings_update')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">

                                                @if($project->settings != null)
                                                
                                                    <div class="form-group mt-3">  
                                                        <label>Logo <span class="text-danger">*</span></label>                                                  
                                                        <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                                            </div>
                                                            <div class="form-control file-amount">Choose File</div>
                                                            <input type="hidden" id="logo" value="{{ json_decode($project->settings)->logo }}" name="logo" value="" class="selected-files" >
                                                        </div>
                                                        <div class="file-preview box sm">
                                                        </div>
                                                    </div> 

                                                    <div class="form-group mt-3">
                                                        <label>Email Update <span class="text-danger">*</span></label>
                                                        <select class="form-select" name="email_update" required>
                                                            <option value="Enabled" {{json_decode($project->settings)->email_update == 'Enabled' ? "selected" : ""}}>Enable</option>   
                                                            <option value="Disabled" {{json_decode($project->settings)->email_update == 'Disabled' ? "selected" : ""}}>Disable</option>                                
                                                        </select>
                                                    </div>

                                                    <div class="form-group mt-3">
                                                        <label>IMS <span class="text-danger">*</span></label>
                                                        <select class="form-select" name="ims" required>
                                                            <option value="Enabled" {{json_decode($project->settings)->ims == 'Enabled' ? "selected" : ""}}>Enable</option>   
                                                            <option value="Disabled" {{json_decode($project->settings)->ims == 'Disabled' ? "selected" : ""}}>Disable</option>                                
                                                        </select>
                                                    </div>

                                                    <div class="form-group mt-3">
                                                        <label>Security Alert Email Notification <span class="text-danger">*</span></label>
                                                        <select class="form-select custom-select" name="security_alert_email_notification" required>
                                                            <option value="Enabled" {{json_decode($project->settings)->security_alert_email_notification == 'Enabled' ? "selected" : ""}}>Enable</option>   
                                                            <option value="Disabled" {{json_decode($project->settings)->security_alert_email_notification == 'Disabled' ? "selected" : ""}}>Disable</option>                                
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="form-group mt-3">
                                                        <label>Owner Email <span class="text-danger">*</span></label>
                                                        <input type="email" value="{{ json_decode($project->settings)->owner_email }}" class="form-control" name="owner_email" required>
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label>Owner Phone Number <span class="text-danger">*</span></label>
                                                        <input type="text" value="{{ json_decode($project->settings)->owner_phone_number }}" class="form-control" name="owner_phone_number" required>
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label>Company Address <span class="text-danger">*</span></label>
                                                        <input type="text" value="{{ json_decode($project->settings)->company_address }}" class="form-control" name="company_address" required>
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label>Company Email <span class="text-danger">*</span></label>
                                                        <input type="email" value="{{ json_decode($project->settings)->company_email }}" class="form-control" name="company_email" required>
                                                    </div>

                                                @else

                                                    <div class="form-group mt-3">  
                                                            <label>Logo <span class="text-danger">*</span></label>                                                  
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

                                                        <div class="form-group mt-3">
                                                            <label>Email Update <span class="text-danger">*</span></label>
                                                            <select class="form-select" name="email_update" required>
                                                                <option value="Enabled">Enable</option>   
                                                                <option value="Disabled">Disable</option>                                
                                                            </select>
                                                        </div>

                                                        <div class="form-group mt-3">
                                                            <label>IMS <span class="text-danger">*</span></label>
                                                            <select class="form-select" name="ims" required>
                                                                <option value="Enabled">Enable</option>   
                                                                <option value="Disabled">Disable</option>                                
                                                            </select>
                                                        </div>

                                                        <div class="form-group mt-3">
                                                            <label>Security Alert Email Notification <span class="text-danger">*</span></label>
                                                            <select class="form-select custom-select" name="security_alert_email_notification" required>
                                                                <option value="Enabled">Enable</option>   
                                                                <option value="Disabled">Disable</option>                                
                                                            </select>
                                                        </div>
                                                        
                                                        <div class="form-group mt-3">
                                                            <label>Owner Email <span class="text-danger">*</span></label>
                                                            <input type="email" class="form-control" name="owner_email" required>
                                                        </div>
                                                        <div class="form-group mt-3">
                                                            <label>Owner Phone Number <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="owner_phone_number" required>
                                                        </div>
                                                        <div class="form-group mt-3">
                                                            <label>Company Address <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="company_address" required>
                                                        </div>
                                                        <div class="form-group mt-3">
                                                            <label>Company Email <span class="text-danger">*</span></label>
                                                            <input type="email" class="form-control" name="company_email" required>
                                                        </div>
                                                @endif

                                                
                                            </div>
                                        </div>

                                        <input type="hidden" name="hidden_id" value="{{ $project->id }}" />
                                        <div align="right">
                                            <button type="submit" class="btn btn-success pull-right btn-lg mt-4">Update</button><br>
                                        </div>

                                    </div><br>            
                                                
                                </div>

                            </form>


                            
                        </section>


                    </div>
                </div>
            </div>
        </div>
    </section>

    
    
@endsection
