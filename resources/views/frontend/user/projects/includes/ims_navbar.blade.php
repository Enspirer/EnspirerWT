<div class="row g-0">
                    <div class="col">
                        <div class="ims__navbar">
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
                                    <ul class="dropdown-menu" aria-labelledby="imsNavDrop">
                                        <li><a class="dropdown-item" href="{{route('frontend.user.project.chat',$project->id)}}">Back to Widget</a></li>
                                        <li><a class="dropdown-item" href="{{route('frontend.user.dashboard')}}">Back to Dashboard</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="{{route('frontend.auth.logout')}}">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>