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
                                                <div class="image">
                                                    <img src="{{url('images/Tallentor.png')}}" alt="propery-image">
                                                </div>
                                                <div class="content">
                                                    <h6 class="site-name">Website Name</h6>
                                                    <span class="site-url">https://tallentor.com/</span>
                                                </div>
                                                <div class="dropdown-icon">
                                                    <i class="bi bi-chevron-down"></i>
                                                </div>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="propertyDropdown">
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <div class="property">
                                                        <div class="image">
                                                            <img src="{{url('images/Tallentor.png')}}" alt="propery-image">
                                                        </div>
                                                        <div class="content">
                                                            <h6 class="site-name">Website Name</h6>
                                                            <span class="site-url">https://tallentor.com/</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <div class="property">
                                                        <div class="image">
                                                            <img src="{{url('images/Tallentor.png')}}" alt="propery-image">
                                                        </div>
                                                        <div class="content">
                                                            <h6 class="site-name">Website Name</h6>
                                                            <span class="site-url">https://tallentor.com/</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
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
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>