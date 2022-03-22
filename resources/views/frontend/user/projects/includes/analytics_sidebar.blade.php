<div class="ims__side-col">
                <div class="ims__side-nav">
                    <div class="side-nav__header">
                        <div class="logo-block">
                            <img src="{{url('images/full-logo.png')}}" alt="" class="logo">
                            <!-- <div class="logo-text">- Analytics</div> -->
                        </div>
                        <div class="caption">Tallentor Analytics Center</div>
                        <a href="{{ route('frontend.user.ims.visitor_statistics', $project_id) }}" style="text-decoration:none;">
                            <div class="live-status-block">
                                <i class="bi bi-broadcast"></i>
                                <div class="caption">Live Visitors</div>
                                <div class="count">{{\App\Models\VisitorCount::where('project_id',$project_id)->count()}}</div>
                            </div>
                        </a>
                    </div>
                    <div class="side-nav__navs" id="sideNavs">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{ route('frontend.user.user_widget.analytics.overview', $project_id) }}" class="nav-link {{Request::segment(3)=='overview' ? 'active' :null }}">
                                    <div class="nav-link__block">
                                        <i class="bi bi-chevron-down ims__hidden"></i>
                                        <i class="bi bi-clipboard-data"></i>
                                        <div class="text">Overview</div>
                                        <!-- <div class="count ims__hidden">2400</div> -->
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link {{ Request::segment(3)=='page' ? 'active' : (Request::segment(3)=='landing_page'  ? 'active' :null )   }}" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#conversationNav" aria-controls="conversationNav"
                                    aria-expanded="true" aria-label="Toggle navigation">
                                    <div class="nav-link__block">
                                        <i class="bi bi-chevron-down"></i>
                                        <i class="bi bi-layout-text-window"></i>
                                        <div class="text">Behavior</div>
                                        <!-- <div class="count"></div> -->
                                    </div>
                                </a>
                                <ul class="list-group ims__list-group collapse show" id="conversationNav">
                                    <li class="list-group-item">
                                        <a href="{{ route('frontend.user.user_widget.analytics.page', $project_id) }}" class="nav-link {{Request::segment(3)=='page' ? 'active' :null }}">
                                            <div class="nav-link__block">
                                                <i class="bi bi-layout-text-window"></i>
                                                <div class="text">Pages</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ route('frontend.user.user_widget.analytics.landing_page', $project_id) }}" class="nav-link {{Request::segment(3)=='landing_page' ? 'active' :null }}">
                                            <div class="nav-link__block">
                                                <i class="bi bi-layout-text-window"></i>
                                                <div class="text">Landing Pages</div>
                                            </div>
                                        </a>
                                    </li>                                    
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link {{ Request::segment(3)=='referrers' ? 'active' : (Request::segment(3)=='search_engines' ? 'active' :(Request::segment(3)=='social_networks' ? 'active' :(Request::segment(3)=='campaigns' ? 'active' :null) ) )   }}" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#conversationNav" aria-controls="conversationNav"
                                    aria-expanded="true" aria-label="Toggle navigation">
                                    <div class="nav-link__block">
                                        <i class="bi bi-chevron-down"></i>
                                        <i class="bi bi-boxes"></i>
                                        <div class="text">Acquisitions</div>
                                        <!-- <div class="count"></div> -->
                                    </div>
                                </a>
                                <ul class="list-group ims__list-group collapse show" id="conversationNav">
                                    <li class="list-group-item">
                                        <a href="{{ route('frontend.user.user_widget.analytics.referrers', $project_id) }}" class="nav-link {{Request::segment(3)=='referrers' ? 'active' :null }}">
                                            <div class="nav-link__block">
                                                <i class="bi bi-boxes"></i>
                                                <div class="text">Referrers</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ route('frontend.user.user_widget.analytics.search_engines', $project_id) }}" class="nav-link {{Request::segment(3)=='search_engines' ? 'active' :null }}">
                                            <div class="nav-link__block">
                                                <i class="bi bi-boxes"></i>
                                                <div class="text">Search engines</div>
                                            </div>
                                        </a>
                                    </li>  
                                    <li class="list-group-item">
                                        <a href="{{ route('frontend.user.user_widget.analytics.social_networks', $project_id) }}" class="nav-link {{Request::segment(3)=='social_networks' ? 'active' :null }}">
                                            <div class="nav-link__block">
                                                <i class="bi bi-boxes"></i>
                                                <div class="text">Social networks</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ route('frontend.user.user_widget.analytics.campaigns', $project_id) }}" class="nav-link {{Request::segment(3)=='campaigns' ? 'active' :null }}">
                                            <div class="nav-link__block">
                                                <i class="bi bi-boxes"></i>
                                                <div class="text">Campaigns</div>
                                            </div>
                                        </a>
                                    </li>                                  
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link {{ Request::segment(3)=='continents' ? 'active' : (Request::segment(3)=='countries' ? 'active' :(Request::segment(3)=='cities' ? 'active' :(Request::segment(3)=='languages' ? 'active' :null ) ) )   }}" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#conversationNav" aria-controls="conversationNav"
                                    aria-expanded="true" aria-label="Toggle navigation">
                                    <div class="nav-link__block">
                                        <i class="bi bi-chevron-down"></i>
                                        <i class="bi bi-globe2"></i>
                                        <div class="text">Geographic</div>
                                        <!-- <div class="count"></div> -->
                                    </div>
                                </a>
                                <ul class="list-group ims__list-group collapse show" id="conversationNav">
                                    <li class="list-group-item">
                                        <a href="{{ route('frontend.user.user_widget.analytics.continents', $project_id) }}" class="nav-link {{Request::segment(3)=='continents' ? 'active' :null }}">
                                            <div class="nav-link__block">
                                                <i class="bi bi-globe2"></i>
                                                <div class="text">Continents</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ route('frontend.user.user_widget.analytics.countries', $project_id) }}" class="nav-link {{Request::segment(3)=='countries' ? 'active' :null }}">
                                            <div class="nav-link__block">
                                                <i class="bi bi-globe2"></i>
                                                <div class="text">Countries</div>
                                            </div>
                                        </a>
                                    </li>       
                                    <li class="list-group-item">
                                        <a href="{{ route('frontend.user.user_widget.analytics.cities', $project_id) }}" class="nav-link {{Request::segment(3)=='cities' ? 'active' :null }}">
                                            <div class="nav-link__block">
                                                <i class="bi bi-globe2"></i>
                                                <div class="text">Cities</div>
                                            </div>
                                        </a>
                                    </li>    
                                    <li class="list-group-item">
                                        <a href="{{ route('frontend.user.user_widget.analytics.languages', $project_id) }}" class="nav-link {{Request::segment(3)=='languages' ? 'active' :null }}">
                                            <div class="nav-link__block">
                                                <i class="bi bi-globe2"></i>
                                                <div class="text">Languages</div>
                                            </div>
                                        </a>
                                    </li>                                 
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link {{ Request::segment(3)=='operating_systems' ? 'active' : (Request::segment(3)=='browsers' ? 'active' :(Request::segment(3)=='screen_resolutions' ? 'active' :(Request::segment(3)=='devices' ? 'active' :null ) ) )   }}" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#conversationNav" aria-controls="conversationNav"
                                    aria-expanded="true" aria-label="Toggle navigation">
                                    <div class="nav-link__block">
                                        <i class="bi bi-chevron-down"></i>
                                        <i class="bi bi-laptop"></i>
                                        <div class="text">Technology</div>
                                        <!-- <div class="count"></div> -->
                                    </div>
                                </a>
                                <ul class="list-group ims__list-group collapse show" id="conversationNav">
                                    <li class="list-group-item">
                                        <a href="{{ route('frontend.user.user_widget.analytics.operating_systems', $project_id) }}" class="nav-link {{Request::segment(3)=='operating_systems' ? 'active' :null }}">
                                            <div class="nav-link__block">
                                                <i class="bi bi-laptop"></i>
                                                <div class="text">Operating systems</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ route('frontend.user.user_widget.analytics.browsers', $project_id) }}" class="nav-link {{Request::segment(3)=='browsers' ? 'active' :null }}">
                                            <div class="nav-link__block">
                                                <i class="bi bi-laptop"></i>
                                                <div class="text">Browsers</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ route('frontend.user.user_widget.analytics.screen_resolutions', $project_id) }}" class="nav-link {{Request::segment(3)=='screen_resolutions' ? 'active' :null }}">
                                            <div class="nav-link__block">
                                                <i class="bi bi-laptop"></i>
                                                <div class="text">Screen resolutions</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ route('frontend.user.user_widget.analytics.devices', $project_id) }}" class="nav-link {{Request::segment(3)=='devices' ? 'active' :null }}">
                                            <div class="nav-link__block">
                                                <i class="bi bi-laptop"></i>
                                                <div class="text">Devices</div>
                                            </div>
                                        </a>
                                    </li>                                 
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('frontend.user.user_widget.analytics.events', $project_id) }}" class="nav-link {{Request::segment(3)=='events' ? 'active' :null }}">
                                    <div class="nav-link__block">
                                        <i class="bi bi-chevron-down ims__hidden"></i>
                                        <i class="bi bi-flag"></i>
                                        <div class="text">Events</div>
                                    </div>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>