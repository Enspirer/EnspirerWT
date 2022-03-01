<section class="navigation-bar">
        <div class="container">
            <div class="inner-wrapper">
                <div class="brand">
                    <a href="#">
                        <img src="{{url('images/Tallentor New PNG.png')}}" alt="brand-logo">
                    </a>
                </div>
                <div class="nav-links">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{url('/')}}" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('products')}}" class="nav-link">Products</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('services')}}" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('market_place')}}" class="nav-link">Marketplace</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('eshop')}}" class="nav-link">eShop</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('resources')}}" class="nav-link">Resources</a>
                        </li>
                        <li class="nav-item">
                            <form>
                                <input class="form-control" type="search" placeholder="| Search for products"
                                    aria-label="Search">
                                <button class="btn" type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </li>
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{auth()->user()->first_name}} {{auth()->user()->last_name}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{url('dashboard')}}">Dashboard</a></li>
                                    <!-- <li><a class="dropdown-item" href="#">Settings</a></li> -->
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="{{route('frontend.auth.logout')}}">Logout</a></li>
                                </ul>
                            </li>
                        @else
                            <a href="{{url('login')}}" style="text-decoration:none;font-size: 14px;font-weight: 300;color: #000;">
                                Log in
                            </a>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>