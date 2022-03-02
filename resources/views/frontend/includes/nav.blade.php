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
                                                    <div class="image">

                                                    </div>
                                                    <div class="content">
                                                        <h6 class="site-name">Select Your Project</h6>
                                                    </div>
                                                    <div class="dropdown-icon">
                                                        <i class="bi bi-chevron-down"></i>
                                                    </div>
                                                @endif

                                            </div>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="propertyDropdown">
                                            @foreach(\App\Models\Projects::where('user_id',auth()->user()->id)->get() as $project)
                                                <li>
                                                    <a class="dropdown-item" href="{{route('frontend.user.project.seo',$project->id)}}">
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
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a type="button" class="nav-link add-btn bi bi-plus-square-fill" data-bs-toggle="modal" data-bs-target="#project_modal"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-auto ms-lg-0 ms-auto">
                            <div class="profile-block">
                                <ul class="navbar-nav">
                                    @auth()
                                    <li class="nav-item">
                                        <a class="nav-link notification-bell bi bi-bell" href="#"></a>
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
                                                <a class="dropdown-item" href="#">
                                                    <div class="icon-block">
                                                        <i class="bi bi-person"></i>
                                                    </div>
                                                    <div class="text">Your Details</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
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
                                                <a class="dropdown-item" href="#">
                                                    <div class="icon-block">
                                                        <i class="bi bi-shield-check"></i>
                                                    </div>
                                                    <div class="text">Password & Security</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <div class="icon-block">
                                                        <i class="bi bi-box-seam"></i>
                                                    </div>
                                                    <div class="text">Choose Plan</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <div class="icon-block">
                                                        <i class="bi bi-trash3"></i>
                                                    </div>
                                                    <div class="text">Delete Your Account</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <div class="icon-block">
                                                        <i class="bi bi-gear"></i>
                                                    </div>
                                                    <div class="text">Admin Settings</div>
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
                        <div class="modal-footer mt-3">
                            <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success btn-lg">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>