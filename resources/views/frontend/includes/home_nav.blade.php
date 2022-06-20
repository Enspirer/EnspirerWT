<section class="navigation-bar">
    <div class="container">
        <div class="inner-wrapper">
            <div class="mobile-brand">
                <img src="{{url('images/logo/tallentor-digital.svg')}}" >
            </div>
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{url('images/logo/tallentor-digital.svg')}}" >
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{url('/')}}" class="nav-link {{ Request::segment(1) == '' ? 'active' : null }}">Home</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown" data-bs-toggle="modal" data-bs-target="#productsNavModal">
                        <a class="btn nav-link dropdown-toggle {{ Request::segment(1) == 'products' ? 'active' : null }}" href="#" role="button" id="productNav" data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu getstarted-dropdown-menu mega-menu-trigger" aria-labelledby="productNav">
                            <li><a class="dropdown-item" href="{{url('products/widget-lite')}}">
                                <div class="icon-block"><img src="{{url('images/dashboard/tab_section/icon-widgetLite.png')}}" ></div> <div class="text">Widget Lite</div>
                            </a></li>
                            <li><a class="dropdown-item" href="{{url('products/widget-pro')}}">
                                <div class="icon-block"><img src="{{url('images/dashboard/tab_section/icon-widgetPlus.png')}}" ></div> <div class="text">Widget Pro</div>
                            </a></li>
                            <li><a class="dropdown-item" href="{{url('products/optimizer')}}">
                                <div class="icon-block"><img src="{{url('images/dashboard/tab_section/icon-Optimizer.png')}}" ></div> <div class="text">Optimizer</div>
                            </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown" data-bs-toggle="modal" data-bs-target="#servicesNavModal">
                        <a class="btn nav-link dropdown-toggle {{ Request::segment(1) == 'services' ? 'active' : null }}" href="#" role="button" id="productNav" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu getstarted-dropdown-menu mega-menu-trigger" aria-labelledby="productNav">
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

<!-- Products Modal -->
<div class="modal fade mega-menu-modal" id="productsNavModal" tabindex="-1" aria-labelledby="productsNavModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
        <i class="bi bi-x-lg" data-bs-dismiss="modal"></i>
        <div class="wrapper">
            <div class="content-block">
                <div class="header">Tallentor<span>Products</span></div>
                <div class="inner-wrapper">
                    <div class="nav-menu">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{url('products/widget-lite')}}" class="nav-link active">
                                    <img src="{{url('images/landing_page/nav/widget-lite-icon.svg')}}" class="nav-img">
                                    <div class="text-block">
                                        <div class="title">Widget Lite</div>
                                        <div class="text">All in one widget with iMS Lite</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('products/widget-pro')}}" class="nav-link">
                                    <img src="{{url('images/landing_page/nav/widget-pro-icon.svg')}}" class="nav-img">
                                    <div class="text-block">
                                        <div class="title">Widget Pro</div>
                                        <div class="text">All in one widget with iMS Pro</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('products/optimizer')}}" class="nav-link">
                                    <img src="{{url('images/landing_page/nav/optimizer-icon.svg')}}" class="nav-img">
                                    <div class="text-block">
                                        <div class="title">Optimizer</div>
                                        <div class="text">All in one widget with iMS Pro + Features</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="info-block active">
                        <div class="image-block">
                            <img src="{{url('images/landing_page/nav/widget-lite.png')}}">
                        </div>
                        <div class="details-block">
                            <div class="title">Widget Lite</div>
                            <div class="subtitle">All in one widget</div>
                            <div class="ims">iMS <span class="cat blue">Lite</span></div>
                            <div class="text">Inquiry Management <br> System</div>
                        </div>
                    </div>
                    <div class="info-block">
                        <div class="image-block">
                            <img src="{{url('images/landing_page/nav/widget-pro.png')}}">
                        </div>
                        <div class="details-block">
                            <div class="title">Widget Pro</div>
                            <div class="subtitle">All in one widget with <span class="ims">iMS <span class="cat red">Pro</span></span><br>Whatsapp integrated</div>
                            <div class="ims">iMS <span class="cat red">Pro</span></div>
                            <div class="text">Conversation Records <br> Status Reports</div>
                        </div>
                    </div>
                    <div class="info-block">
                        <div class="image-block">
                            <img src="{{url('images/landing_page/nav/optimizer.png')}}">
                        </div>
                        <div class="details-block">
                            <div class="title">Optimizer</div>
                            <div class="subtitle">Widget with <span class="ims">iMS <span class="cat red">Pro</span></span><br>User Session View <br>Heatmaps</div>
                            <div class="text">Mobile App <br> Realtime Visitors <br> Chat Invite</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="modal fade mega-menu-modal" id="servicesNavModal" tabindex="-1" aria-labelledby="servicesNavModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
        <i class="bi bi-x-lg" data-bs-dismiss="modal"></i>
        <div class="wrapper">
            <div class="content-block">
                <div class="header">Tallentor<span>Services</span></div>
                <div class="inner-wrapper">
                    <div class="nav-menu">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{url('services/marketplace')}}" class="nav-link active">
                                    <img src="{{url('images/landing_page/nav/marketplace-icon.svg')}}" class="nav-img">
                                    <div class="text-block">
                                        <div class="title">Marketplace</div>
                                        <div class="text">One place with thousands of creative talents</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('services/portfolio')}}" class="nav-link">
                                    <img src="{{url('images/landing_page/nav/portfolio-icon.svg')}}" class="nav-img">
                                    <div class="text-block">
                                        <div class="title">Portfolio</div>
                                        <div class="text">Here are few hand picked projects.</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('services/expert-center')}}" class="nav-link">
                                    <img src="{{url('images/landing_page/nav/expert-center-icon.svg')}}" class="nav-img">
                                    <div class="text-block">
                                        <div class="title">Expert Center</div>
                                        <div class="text"> The best team of experts to plan your project</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="info-block active">
                        <div class="image-block" style="border-right:none;">
                            <img src="{{url('images/landing_page/nav/marketplace.png')}}" style="margin-left:7.5rem;">
                        </div>
                    </div>
                    <div class="info-block">
                        <div class="image-block" style="border-right:none;">
                            <img src="{{url('images/landing_page/nav/portfolio.png')}}" style="margin-left:7.5rem;">
                        </div>
                    </div>
                    <div class="info-block">
                        <div class="image-block" style="border-right:none;">
                            <img src="{{url('images/landing_page/nav/expert-center.png')}}" style="margin-left:7.5rem;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>