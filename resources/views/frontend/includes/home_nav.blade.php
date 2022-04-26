<section class="navigation-bar {{ Request::segment(1) == '' ? 'transparent' : null }}">
        <div class="container">
            <div class="inner-wrapper">
                <div class="mobile-brand">
                    <img src="{{url('images/logo/mobile-logo.png')}}" alt="">
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{url('/')}}" class="nav-link {{ Request::segment(1) == '' ? 'active' : null }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="btn nav-link dropdown-toggle {{ Request::segment(1) == 'products' ? 'active' : null }}" href="#" role="button" id="productNav" data-bs-toggle="dropdown" aria-expanded="false">
                                Products
                            </a>
                            <ul class="dropdown-menu getstarted-dropdown-menu" aria-labelledby="productNav">
                                <li><a class="dropdown-item" href="{{url('products/widget-lite')}}">
                                    <div class="icon-block"><img src="{{url('images/dashboard/tab_section/icon-widgetLite.png')}}" alt=""></div> <div class="text">Widget Lite</div>
                                </a></li>
                                <li><a class="dropdown-item" href="{{url('products/widget-pro')}}">
                                    <div class="icon-block"><img src="{{url('images/dashboard/tab_section/icon-widgetPlus.png')}}" alt=""></div> <div class="text">Widget Pro</div>
                                </a></li>
                                <li><a class="dropdown-item" href="{{url('products/optimizer')}}">
                                    <div class="icon-block"><img src="{{url('images/dashboard/tab_section/icon-Optimizer.png')}}" alt=""></div> <div class="text">Optimizer</div>
                                </a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="btn nav-link dropdown-toggle {{ Request::segment(1) == 'services' ? 'active' : null }}" href="#" role="button" id="productNav" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu getstarted-dropdown-menu" aria-labelledby="productNav">
                                <li>
                                    <a class="dropdown-item" href="{{url('services/marketplace')}}">Marketplace</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{url('services/portfolio')}}">Portfolio</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{url('services/expert-center')}}">Expert Center</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('eshop')}}" class="nav-link {{ Request::segment(1) == 'eshop' ? 'active' : null }}">eShop</a>
                    </li>
                    <li class="nav-item mobile-none">
                        <a href="{{url('/')}}" class="nav-link brand-link">
                            <div class="brand">
                                <img src="{{url('images/logo/tallentor-logo.png')}}" alt="">
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('pricing')}}" class="nav-link {{ Request::segment(1) == 'pricing' ? 'active' : null }}">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="btn nav-link dropdown-toggle {{ Request::segment(1) == 'media' ? 'active' : null }}" href="#" role="button" id="productNav" data-bs-toggle="dropdown" aria-expanded="false">
                                Media
                            </a>
                            <ul class="dropdown-menu getstarted-dropdown-menu" aria-labelledby="productNav">
                                <li>
                                    <a class="dropdown-item" href="{{url('media/latest-news')}}">Latest News</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{url('media/promotions')}}">Promotions</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{url('media/home-blog')}}">Blog</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('contact')}}" class="nav-link {{ Request::segment(1) == 'contact' ? 'active' : null }}">Contact Us</a>
                    </li>
                    @auth
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
    </section>