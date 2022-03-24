<div class="row g-0">
                    <div class="col">
                        <div class="ims__navbar">
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
                                                    @if($project_id != null)
                                                        <div class="image">
                                                            @if(get_seo_result($project_id)->favicon->value == null)
                                                                <img src="{{url('img\frontend\globeicon.png')}}" alt="propery-image">

                                                            @else
                                                                <img src="{{get_seo_result($project_id)->favicon->value}}" alt="propery-image">
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
                                                        <div class="image">

                                                        </div>
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
                                                                        <img src="{{url('img\frontend\globeicon.png')}}" alt="propery-image">
                                                                    @else
                                                                        <img src="{{get_seo_result($project->id)->favicon->value}}" alt="propery-image">
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
                                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Create Your Project">
                                    <a type="button" class="nav-link add-btn bi bi-plus-square-fill" data-bs-toggle="modal" data-bs-target="#project_modal"></a>
                                    </li>
                                    <a href="{{ route('frontend.user.project.chat',$project_id) }}" style="text-decoration:none"><p class="px-4 mt-3">Go back</p></a>
                                </ul>
                            </div>
                            <div class="profile-block">
                            <ul class="navbar-nav">
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
                                                                                <i class="{{$notification->icon}} mt-3" style="font-size:24px;"></i>
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
                                                                                <i class="{{$notification->icon}} mt-3" style="font-size:24px;"></i>
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
                               
                                    





                                    
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>

        <div class="modal fade" id="project_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    
                    <form action="{{route('frontend.user.user_projects.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel"><img src="{{url('images/idea.png')}}" alt=""> Create your project</h4>
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
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success btn-lg">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>