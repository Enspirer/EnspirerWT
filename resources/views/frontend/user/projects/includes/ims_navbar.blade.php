<div class="row g-0">
                    <div class="col">
                        <div class="ims__navbar">
                        <div class="property-block">
                                <ul class="navbar-nav">
                                    <li class="nav-item border-right dropdown">
                                        <a class="nav-link" href="#" id="propertyDropdown" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <div class="property">
                                                @if(count(App\Models\Projects::where('user_id',auth()->user()->id)->get()) != 0)
                                                    @if($project->id != null)
                                                        <div class="image">
                                                            @if(get_seo_result($project->id)->favicon->value == null)
                                                                <img src="{{url('img\frontend\globeicon.png')}}" alt="propery-image">

                                                            @else
                                                                <img src="{{get_seo_result($project->id)->favicon->value}}" alt="propery-image">
                                                            @endif
                                                        </div>
                                                        <div class="content">
                                                            <h6 class="site-name">{{\App\Models\Projects::where('id',$project->id)->first()->name}}</h6>
                                                            <span class="site-url">{{\App\Models\Projects::where('id',$project->id)->first()->url}}</span>
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
                                                @else
                                                    <div class="content">
                                                        <a type="button" data-bs-toggle="modal" data-bs-target="#project_modal">Add New Project</a>
                                                    </div>
                                                @endif

                                            </div>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="propertyDropdown">
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
                                        </ul>
                                    </li>
                                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Create Your Project">
                                    <a type="button" class="nav-link add-btn bi bi-plus-square-fill" data-bs-toggle="modal" data-bs-target="#project_modal"></a>
                                    </li>
                                    <a href="{{ route('frontend.user.project.chat',$project->id) }}" style="text-decoration:none"><p class="px-4 mt-3">Go back</p></a>
                                </ul>
                            </div>
                            <div class="profile-block">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <div class="notification-bell">
                                            <img src="{{url('images/bell (1).svg')}}" alt="">
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="imsNavDrop" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <div class="profile">
                                            <div class="profile__pic">
                                                <img src="{{auth()->user()->picture}}" alt="">
                                            </div>
                                            <div class="name">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</div>
                                            <i class="bi bi-chevron-down"></i>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu profile-dropdown-menu" aria-labelledby="imsNavDrop">
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
                            <div class="form-group">
                                <label style="font-size:16px">URL <span class="text-danger">*</span></label>
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