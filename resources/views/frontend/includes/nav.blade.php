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

                                            </div>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="propertyDropdown">
                                            @foreach(\App\Models\Projects::where('user_id',auth()->user()->id)->get() as $project)
                                                <li>
                                                    <a class="dropdown-item" href="{{route('frontend.user.project.seo',$project->id)}}">
                                                        <div class="property">
                                                            <div class="image">
                                                                @if(get_seo_result($project->id)->favicon->value == null)
                                                                    <img src="{{url('img\frontend\globeicon.png')}}" alt="propery-image">

                                                                @else
                                                                    <img src="{{get_seo_result($project->id)->favicon->value}}" alt="propery-image">
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
                                        <a class="nav-link add-btn bi bi-plus-square-fill" href="#"></a>
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
                                        <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                                            <li><a class="dropdown-item" href="#">Preference</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="{{route('frontend.auth.logout')}}">Logout</a></li>
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