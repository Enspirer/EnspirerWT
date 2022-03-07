<section class="navigation-bar">
        <div class="container">
            <div class="inner-wrapper">
                <div class="brand">
                    <a href="{{url('/')}}">
                        <img src="{{url('images/logo/Tallentor-Logo-(PNG).png')}}" alt="brand-logo">
                    </a>
                </div>
                <div class="nav-links">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{url('/')}}" class="nav-link {{ Request::segment(1) == '' ? 'active' : null }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('products')}}" class="nav-link {{ Request::segment(1) == 'products' ? 'active' : null }}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('services')}}" class="nav-link {{ Request::segment(1) == 'services' ? 'active' : null }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('market_place')}}" class="nav-link {{ Request::segment(1) == 'market_place' ? 'active' : null }}">Marketplace</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('eshop')}}" class="nav-link {{ Request::segment(1) == 'eshop' ? 'active' : null }}">eShop</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('contact')}}" class="nav-link {{ Request::segment(1) == 'contact' ? 'active' : null }}">Contact Us</a>
                        </li>
                        @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="profileDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="profile">
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
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="btn nav-link dropdown-toggle" href="#" role="button" id="getstartedNav" data-bs-toggle="dropdown" aria-expanded="false">
                                    Get Started
                                </a>
                                <ul class="dropdown-menu getstarted-dropdown-menu" aria-labelledby="getstartedNav">
                                    <li><a class="dropdown-item" href="{{url('login')}}">
                                        <div class="icon-block"><i class="bi bi-person"></i></div> <div class="text">Log In</div>
                                    </a></li>
                                    <li><a class="dropdown-item" href="{{url('register')}}">
                                    <div class="icon-block"><i class="bi bi-person-circle"></i></div> <div class="text">Sign Up</div>
                                    </a></li>
                                </ul>
                            </div>
                        </li>
                        @endif
                    </ul>
                    <a class='menu-trigger' id="menuTrigger">
                        <span>Menu</span>
                    </a>
                </div>
            </div>
        </div>
    </section>