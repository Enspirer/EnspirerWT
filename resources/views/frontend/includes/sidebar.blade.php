        <div id="sectionSideNav" class="mobile">
            <div id="sideNav" class="side-nav">
                <div class="side-nav-brands">
                    <div class="side-nav-toggle">
                        <span class="toggle-btn bi bi-list"></span>
                    </div>
                    <img src="{{url('images/full-logo.png')}}" alt="full-logo" class="full-logo">
                    <img src="{{url('images/small-logo.png')}}" alt="small-logo" class="small-logo">
                </div>
                <div class="side-navs">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('frontend.user.dashboard')}}">
                                <i class="bi bi-columns-gap"></i>
                                <span class="text">Dashboard</span>
                                <span class="tool-tip">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('frontend.user.reports')}}">
                                <i class="bi bi-clipboard2-data"></i>
                                <span class="text">Reports</span>
                                <span class="tool-tip">Reports</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('frontend.user.project.index')}}">
                                <i class="bi bi-layers"></i>
                                <span class="text">Projects</span>
                                <span class="tool-tip">Projects</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-tools"></i>
                                <span class="text">Tools</span>
                                <span class="tool-tip">Tools</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-gear"></i>
                                <span class="text">Settings</span>
                                <span class="tool-tip">Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="side-nav-footer">
                    <span class="copyright">&copy; MarketingManner.2022</span>
                    <p class="theme">Marketing Manner - analytics platform for solution of all type of business
                    </p>
                </div>
            </div>
        </div>