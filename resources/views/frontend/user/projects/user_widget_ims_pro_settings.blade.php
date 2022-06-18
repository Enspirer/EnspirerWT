@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')


<link rel="stylesheet" href="{{url('css/project_settings.css')}}">

@include('frontend.includes.mobile_nav')  

<section id="sectionMainWindow">
    @include('frontend.includes.sidebar')

    <div id="sectionBody">
        
    

            <div class="row g-0">
                <div class="nav-bar px-4" id="navBar">
                    <div class="row g-0 align-items-center justify-content-lg-between flex-lg-row flex-column-reverse">
                        <div class="col-auto ms-lg-0 ms-auto">
                            <div class="property-block">
                                <ul class="navbar-nav">
                                    <li class="nav-item border-right dropdown">
                                        <a class="nav-link" href="#" id="propertyDropdown" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <div class="property">
                                            @if(count(\App\Models\Projects::where('user_id',auth()->user()->id)->get()) == 0)
                                                <div class="image"></div>
                                                <div class="content">
                                                    <h6 class="site-name" data-bs-toggle="modal" data-bs-target="#project_modal">Create New Project</h6>
                                                </div>
                                                <div class="dropdown-icon">
                                                    <i class="bi"></i>
                                                </div>
                                            @else
                                                    @if(isset($project_id))
                                                        <div class="image">
                                                            @if(get_seo_result($project_id)->favicon->value == null)
                                                                <img src="{{url('img\frontend\globeicon.png')}}" alt="propery-image" onerror="this.src='{{url('globeicon.png')}}';">

                                                            @else
                                                                <img src="{{get_seo_result($project_id)->favicon->value}}" alt="propery-image" onerror="this.src='{{url('globeicon.png')}}';">
                                                            @endif
                                                        </div>
                                                        <div class="content">
                                                            <h6 class="site-name">{{\App\Models\Projects::where('id',$project_id)->first()->name}}</h6>
                                                            <span class="site-url">{{\App\Models\Projects::where('id',$project_id)->first()->url}}</span>
                                                        </div>
                                                        <div class="dropdown-icon">
                                                            <i class="bi bi-chevron-down"></i>
                                                        </div>
                                                    @else
                                                        <div class="image"></div>
                                                        <div class="content">
                                                            <h6 class="site-name">Select Your Project</h6>
                                                        </div>
                                                        <div class="dropdown-icon">
                                                            <i class="bi bi-chevron-down"></i>
                                                        </div>
                                                    @endif

                                            @endif
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="propertyDropdown">
                                            @if(count(\App\Models\Projects::where('user_id',auth()->user()->id)->get()) == 0)
                                            @else
                                            @foreach(\App\Models\Projects::where('user_id',auth()->user()->id)->get() as $project)
                                                <li>
                                                    <a class="dropdown-item" href="{{route('frontend.user.project.chat',$project->id)}}">
                                                        <div class="property">
                                                            <div class="image">

                                                                @if(get_seo_result($project->id) != null)
                                                                    @if(get_seo_result($project->id)->favicon->value == null)
                                                                        <img src="{{url('img\frontend\globeicon.png')}}" alt="propery-image" onerror="this.src='{{url('globeicon.png')}}';">
                                                                    @else
                                                                        <img src="{{get_seo_result($project->id)->favicon->value}}" alt="propery-image" onerror="this.src='{{url('globeicon.png')}}';">
                                                                    @endif
                                                                @endif
                                                                
                                                            </div>
                                                            <div class="content">
                                                                <h6 class="site-name">{{$project->name}}</h6>
                                                                <span class="site-url">{{$project->url}}</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            @endforeach
                                            @endif
                                        </ul>
                                    </li>
                                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Create Your Project" id="create_project_button">
                                        <a type="button" class="nav-link add-btn bi bi-plus-square-fill" data-bs-toggle="modal" data-bs-target="#project_modal"></a>
                                    </li>
                                    <a href="{{ route('frontend.user.project.widget_plus',$project_id) }}" style="text-decoration:none"><h4 class="px-4 mt-3">Go back</h4></a>
                                </ul>
                            </div>
                        </div>
                        <div class="col-auto ms-lg-0 ms-auto">
                            <div class="profile-block">
                                <ul class="navbar-nav">
                                    @auth()

                                    <li class="nav-item dropdown">
                                        @if(count(App\Models\Notification::where('user_id',auth()->user()->id)->where('status','Pending')->get()) != 0)
                                            <a class="nav-link notification-bell notify bi bi-bell dropdown-toggle" href="#" role="button" id="notifyDrop" data-bs-toggle="dropdown" aria-expanded="false"></a>
                                        @else
                                            <a class="nav-link notification-bell bi bi-bell dropdown-toggle" href="#" role="button" id="notifyDrop" data-bs-toggle="dropdown" aria-expanded="false"></a>
                                        @endif

                                        <ul class="dropdown-menu" aria-labelledby="notifyDrop">
                                            <div class="inner-wrapper">
                                                <div class="list-group">
                                                    @if(count(App\Models\Notification::where('user_id',auth()->user()->id)->get()) != 0)
                                                        @foreach(App\Models\Notification::where('user_id',auth()->user()->id)->orderBy('id','desc')->take(15)->get() as $notification)
                                                            @if($notification->status == 'Pending')                                                        
                                                                <a href="{{route('frontend.user.user_notifications_status',$notification->id)}}" class="list-group-item list-group-item-action" aria-current="true">
                                                                    <div class="d-flex w-100 justify-content-between">

                                                                        <div class="row">
                                                                            <div class="col-1">
                                                                                <i class="{{$notification->icon}} mt-4" style="font-size:24px;"></i>
                                                                            </div>
                                                                            <div class="col-8">
                                                                                <h5 class="mb-1 ms-1" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;">{{$notification->title}}</h5>
                                                                                <p class="mb-1 ms-1" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                                                    {{$notification->description}}
                                                                                </p>
                                                                                <!-- <small>And some small print.</small> -->
                                                                            </div>
                                                                            <div class="col-3">
                                                                                <small>{{$notification->created_at->diffForHumans()}}</small>
                                                                            </div>
                                                                        </div>

                                                                    </div>                                                                   
                                                                </a>
                                                            @else
                                                                <a href="{{route('frontend.user.user_notifications_status',$notification->id)}}" class="list-group-item list-group-item-action seen_status" aria-current="true">
                                                                    <div class="d-flex w-100 justify-content-between">
                                                                        
                                                                        <div class="row">
                                                                            <div class="col-1">
                                                                                <i class="{{$notification->icon}} mt-4" style="font-size:24px;"></i>
                                                                            </div>
                                                                            <div class="col-8">
                                                                                <h5 class="mb-1 ms-1" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;">{{$notification->title}}</h5>
                                                                                <p class="mb-1 ms-1" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                                                    {{$notification->description}}
                                                                                </p>
                                                                                <!-- <small>And some small print.</small> -->
                                                                            </div>
                                                                            <div class="col-3">
                                                                                <small>{{$notification->created_at->diffForHumans()}}</small>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </a>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                </div>
                                                @if(count(App\Models\Notification::where('user_id',auth()->user()->id)->get()) != 0)
                                                    <a href="{{route('frontend.user.notifications.index')}}" class="view-more">View More</a>
                                                @else
                                                    <a class="view-more" disabled>No Any Notifications</a>
                                                @endif
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="profileDropdown" role="button"
                                           data-bs-toggle="dropdown" aria-expanded="false">
                                            <div class="profile">
                                                <div class="image">
                                                    <img src="{{auth()->user()->picture}}" alt="profile-picture">
                                                </div>
                                                <div class="name">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</div>
                                                <div class="dropdown-icon">
                                                    <i class="bi bi-chevron-down"></i>
                                                </div>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu profile-dropdown-menu" aria-labelledby="profileDropdown">
                                            <li>
                                                <a class="dropdown-item" href="{{url('dashboard')}}">
                                                    <div class="icon-block">
                                                        <i class="bi bi-speedometer"></i>
                                                    </div>
                                                    <div class="text">Dashboard</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('reports')}}">
                                                    <div class="icon-block">
                                                        <i class="bi bi-journal-text"></i>
                                                    </div>
                                                    <div class="text">Reports</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('projects')}}">
                                                    <div class="icon-block">
                                                        <i class="bi bi-card-checklist"></i>
                                                    </div>
                                                    <div class="text">Projects</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('settings')}}">
                                                    <div class="icon-block">
                                                        <i class="bi bi-person"></i>
                                                    </div>
                                                    <div class="text">Your Details</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('settings')}}">
                                                    <div class="icon-block">
                                                        <i class="bi bi-pencil"></i>
                                                    </div>
                                                    <div class="text">Edit Profile</div>
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('settings')}}">
                                                    <div class="icon-block">
                                                        <i class="bi bi-shield-check"></i>
                                                    </div>
                                                    <div class="text">Password & Security</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('settings')}}">
                                                    <div class="icon-block">
                                                        <i class="bi bi-box-seam"></i>
                                                    </div>
                                                    <div class="text">Choose Plan</div>
                                                </a>
                                            </li>
                                            
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{route('frontend.auth.logout')}}">
                                                    <div class="icon-block">
                                                        <i class="bi bi-box-arrow-right"></i>
                                                    </div>
                                                    <div class="text">Sign Out</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    @else

                                    @endauth

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <!-- Modal -->
        <div class="modal fade" id="project_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    
                    <form action="{{route('frontend.user.user_projects.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel"><img src="{{url('images/idea.png')}}" > Create your project</h4>
                            <button type="button" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label style="font-size:16px">Project Name<span class="text-danger">*</span></label>
                                <input type="text" style="font-size:15px;" id="name" class="form-control mt-2" name="name" placeholder="Type your project name" required>
                            </div>
                            <div class="form-group mt-3">
                                <label style="font-size:16px">Project Type <span class="text-danger">*</span></label>
                                <select class="form-control mt-2" style="font-size:15px;" id="project_type" name="project_type" required>
                                    <option value="" selected disabled>Select...</option>
                                    @foreach(App\Models\ProjectType::get() as $type)
                                        <option style="font-size:15px;" value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label style="font-size:16px">URL (With https://) <span class="text-danger">*</span></label>
                                <input type="text" style="font-size:15px;" id="url" class="form-control mt-2" name="url" placeholder="Type your URL" required>
                            </div>
                        </div>
                        <div class="modal-footer mt-3">
                            <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success btn-lg">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Content goes here -->
        <div class="row g-0">
            <section class="section-settings">
                <div class="tab-block">
                    <div class="nav nav-pills " id="settingsTab" role="tablist" aria-orientation="vertical">
                        
                    
                        <button class="nav-link active" id="general-tab" data-bs-toggle="pill"
                            data-bs-target="#general" type="button" role="tab" aria-controls="general"
                            aria-selected="false">
                            <div class="inner-wrapper">
                                <i class="bi bi-pencil"></i>
                                <div class="text">General</div>
                            </div>
                            <i class="bi bi-chevron-right"></i>
                        </button>
                        <button class="nav-link" id="role-tab" data-bs-toggle="pill"
                            data-bs-target="#role" type="button" role="tab" aria-controls="role"
                            aria-selected="false">
                            <div class="inner-wrapper">
                                <i class="bi bi-shield-check"></i>
                                <div class="text">Role Mangement</div>
                            </div>
                            <i class="bi bi-chevron-right"></i>
                        </button>
                       
                        
                    </div>
                </div>
                <div class="content-block">
                    <div class="tab-content" id="settingsTabContent">
                            
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
                            @if(session()->has('success_stored'))
                                <div class="alert alert-success">
                                    {{ session()->get('success_stored') }}
                                </div>
                            @endif
                            @if(session()->has('success_update'))
                                <div class="alert alert-success">
                                    {{ session()->get('success_update') }}
                                </div>
                            @endif
                            @if(session()->has('error_pw'))
                                <div class="alert alert-danger">
                                    {{ session()->get('error_pw') }}
                                </div>
                            @endif
                            
                            
                        
                        <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                            <div class="row g-0">
                                <div class="col">
                                    <div class="title" style="font-weight: 600;font-size: 26px; margin-bottom: 2rem;">General</div>
                                </div>
                            </div>
                           
                            <div class="row g-0">
                                <form action="{{route('frontend.user.user_widget_ims_pro_settings.update')}}" class="row" method="post" enctype="multipart/form-data" >
                                {{csrf_field()}}

                                    <div class="card p-5" style="border-radius:20px;">
                                        <div class="row">
                                            @if($widget->settings == null)
                                                <div class="col-6">
                                                    <label for="whatsapp_number" class="form-label" style="font-size:14px;">Whatsapp Number:</label>
                                                    <input type="text" class="form-control" style="font-size:14px;" name="whatsapp_number" id="whatsapp_number" required>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">  
                                                        <label style="font-size:14px;" class="mb-2" style="font-size:14px;">Logo:</label>                                                  
                                                        <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                                            </div>
                                                            <div class="form-control file-amount">Choose File</div>
                                                            <input type="hidden" id="logo" name="logo" class="selected-files" >
                                                        </div>
                                                        <div class="file-preview box sm">
                                                        </div>
                                                    </div> 
                                                </div> 
                                                        
                                            @else
                                                <div class="col-6">
                                                    <label for="whatsapp_number" class="form-label" style="font-size:14px;">Whatsapp Number:</label>
                                                    <input type="text" class="form-control" style="font-size:14px;" name="whatsapp_number" value="{{ json_decode($widget->settings)[0]->whatsapp_number }}" id="whatsapp_number" required>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">  
                                                        <label style="font-size:14px;" class="mb-2" style="font-size:14px;">Logo:</label>                                                  
                                                        <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                                            </div>
                                                            <div class="form-control file-amount">Choose File</div>
                                                            <input type="hidden" id="logo" name="logo" value="{{ json_decode($widget->settings)[0]->logo }}" class="selected-files" >
                                                        </div>
                                                        <div class="file-preview box sm">
                                                        </div>
                                                    </div> 
                                                </div>                                                     
                                            @endif                                                   
                                                        
                                        </div>                                                                            
                                   
                                        <div class="row mt-3">                                                                                       

                                            @if($widget->settings == null)                                                            
                                                <div class="col-6">
                                                    <label for="address" class="form-label" style="font-size:14px;">Address:</label>
                                                    <input type="text" class="form-control" style="font-size:14px;" name="address" id="address" required>
                                                </div>
                                                <div class="col-6">
                                                    <label for="company_email" class="form-label" style="font-size:14px;">Company Email:</label>
                                                    <input type="email" class="form-control" style="font-size:14px;" name="company_email" id="company_email" required>
                                                </div>
                                            @else                                                        
                                                <div class="col-6">
                                                    <label for="address" class="form-label" style="font-size:14px;">Address:</label>
                                                    <input type="text" class="form-control" style="font-size:14px;" name="address" value="{{ json_decode($widget->settings)[0]->address }}" id="address" required>
                                                </div>
                                                <div class="col-6">
                                                    <label for="company_email" class="form-label" style="font-size:14px;">Company Email:</label>
                                                    <input type="email" class="form-control" style="font-size:14px;" name="company_email" value="{{ json_decode($widget->settings)[0]->company_email }}" id="company_email" required>
                                                </div>
                                            @endif                                      
                                                     
                                        </div>  
                                    </div>

                                    <div class="col-12 mt-1">
                                        <input type="hidden" class="form-control" name="hidden_id" value="{{ $widget->id}}">                                                    
                                        <button type="submit" class="btn btn-success" style="font-size:14px;">Update</button>
                                    </div>

                                </form>


                            </div>
                        </div>
                        <div class="tab-pane fade" id="role" role="tabpanel"
                            aria-labelledby="role-tab">
                            
                            <div class="row g-0">
                                <div class="col">
                                    <div class="title" style="font-weight: 600;font-size: 26px; margin-bottom: 2rem;">Role Mangement</div>
                                </div>
                            </div>
                            <div class="row g-0">
                                <form action="{{route('frontend.user.user_widget_ims_pro_role_management.store')}}" class="row g-4" method="post" enctype="multipart/form-data" >
                                {{csrf_field()}}
                                    <div class="card p-5" style="border-radius:20px;">

                                        <div class="row">                                            
                                            <div class="col-6">
                                                <label for="name" class="form-label" style="font-size:14px;">Name:</label>
                                                <input type="text" class="form-control" name="name" style="font-size:14px;" id="name" required>
                                            </div>
                                            <div class="col-6">
                                                <label for="email" class="form-label" style="font-size:14px;">Email:</label>
                                                <input type="email" class="form-control" name="email" style="font-size:14px;" id="email" required>
                                            </div>  
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-6">
                                                <label for="phone_number" class="form-label" style="font-size:14px;">Phone Number:</label>
                                                <input type="text" class="form-control" style="font-size:14px;" name="phone_number" id="phone_number" required>
                                            </div>                                                            
                                            <div class="col-6">
                                                <label for="role" class="form-label" style="font-size:14px;">Role:</label>
                                                <select id="role" class="form-select" name="role" required>
                                                    <option style="font-size:14px;" value="" selected disabled>Select Here...</option>
                                                    <option style="font-size:14px;" value="Admin">Admin</option>
                                                    <option style="font-size:14px;" value="Agent">Agent</option>
                                                    <option style="font-size:14px;" value="Manager">Manager</option>                                                       
                                                </select>                                                
                                            </div> 
                                        </div>

                                        <div class="row mt-3">                                            
                                            <div class="col-6">
                                                <label for="password" class="form-label"  style="font-size:14px;">Password:</label>
                                                <input type="password" class="form-control" name="password" style="font-size:14px;" id="password" required>
                                            </div>
                                            <div class="col-6">
                                                <label for="confirm_password" class="form-label" style="font-size:14px;">Confirm Password:</label>
                                                <input type="password" class="form-control" name="confirm_password" style="font-size:14px;" id="confirm_password" required>
                                            </div>  
                                        </div>

                                    </div>


                                    <div class="col-12 mt-4 mb-5">
                                        <input type="hidden" class="form-control" name="project_id" value="{{ $project_id}}">      
                                        <input type="hidden" class="form-control" name="widget_id" value="{{ $widget->id}}">          
                                        <button type="submit" class="btn btn-primary" style="font-size:14px;">Submit</button>
                                    </div> 
                                </form> 

                            </div>

                            <div class="row">
                                <div class="col">

                                    <div class="card">
                                        <div class="card-header">
                                            <strong>IMS Pro Users&nbsp;</strong>
                                            
                                        </div><!--card-header-->

                                        <div class="card-body">
                                            <table class="table table-striped table-bordered" id="villadatatable" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#ID</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Phone Number</th>
                                                        <th scope="col">Role</th>
                                                        <th scope="col">Option</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!--card-->
                                </div><!--col-->
                            </div><!--row-->



                        </div>
                        
                    </div>
                </div>
            </section>
        </div>
    </div>


    @if(count($ims_pro_users) != 0)          
        @foreach($ims_pro_users as $key => $ims_pro_user)
   
            <div class="modal fade" id="exampleModaledit{{$ims_pro_user->id}}" tabindex="-1" aria-labelledby="exampleModalLabeledit" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                    <form action="{{route('frontend.user.user_widget_ims_pro_role_management.update',$ims_pro_user->id)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabeledit">Edit IMS Pro User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        
                        <div class="p-3">
                            <div class="col-12">
                                <label for="name" class="form-label"  style="font-size:14px;">Name</label>
                                <input type="text" class="form-control" name="name" style="font-size:14px;" value="{{$ims_pro_user->name}}" id="name" required>
                            </div>
                            <div class="col-12 mt-4">
                                <label for="email" class="form-label" style="font-size:14px;">Email</label>
                                <input type="email" class="form-control" value="{{$ims_pro_user->email}}" name="email" style="font-size:14px;" id="email" required>
                            </div>
                            <div class="col-12 mt-4">
                                <label for="phone_number" class="form-label" style="font-size:14px;">Phone Number</label>
                                <input type="text" class="form-control" value="{{$ims_pro_user->phone_number}}" style="font-size:14px;" name="phone_number" id="phone_number" required>
                            </div>                                                    
                            <div class="col-12 mt-4">
                                <label for="role" class="form-label" style="font-size:14px;">Role</label>
                                <select id="role" class="form-select" name="role" required>
                                    <option style="font-size:14px;" value="" selected disabled>Select Here...</option>
                                    <option style="font-size:14px;" value="Admin" {{  $ims_pro_user->role == 'Admin' ? "selected" : "" }}>Admin</option>
                                     <option style="font-size:14px;" value="Agent" {{  $ims_pro_user->role == 'Agent' ? "selected" : "" }}>Agent</option>
                                    <option style="font-size:14px;" value="Manager" {{  $ims_pro_user->role == 'Manager' ? "selected" : "" }}>Manager</option>                                                       
                                </select>                                                
                            </div>                         

                        </div>                        

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="hidden" class="form-control" name="hidden_id" value="{{ $ims_pro_user->id}}">
                            <input type="submit" class="btn btn-success" value="Update">
                        </div>
                    </form>     
                    </div>
                </div>
            </div>

        @endforeach  
    @endif

    <!-- Modal delete -->
    <div class="modal fade" id="exampleModaldelete" tabindex="-1" aria-labelledby="exampleModalLabeldelete" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabeldelete">Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Do you want to delete this?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('after-scripts')


    <script>
        // Edit profile tab trigger 
        function editProf() {
            document.getElementById("edit-profile-tab").click();
        }
    </script>
    
    <script>
        function uploaderClose() {
            document.getElementById("aizUploaderModal").click();
        }
    </script>

<script>
    function loadTable() {
        var table = $('#villadatatable').DataTable({
            processing: true,
            ajax: "{{route('frontend.user.user_widget_ims_pro_role_management.getdetails',$widget->id)}}",
            serverSide: true,
            responsive: true,
            autoWidth: true,
            order: [[0, "desc"]],
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'phone_number', name: 'phone_number'},
                {data: 'role', name: 'role'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            "fnDrawCallback": function( oSettings ) {
                dispprove();
            }
        });
    };


    $(document).ready(function() {
        loadTable();
    });



    function dispprove() {
        $('.disapprove').on('click', function() {
        let value = $(this).attr('href');

        // console.log(value);

        $('.modal-footer a').attr('href', value);
    })
    }
</script>

@endpush



