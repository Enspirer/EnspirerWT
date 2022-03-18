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
                                <a href="" class="nav-link">
                                    <div class="nav-link__block">
                                        <i class="bi bi-chevron-down ims__hidden"></i>
                                        <i class="bi bi-speedometer2"></i>
                                        <div class="text">Dashboard</div>
                                        <div class="count ims__hidden">2400</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#conversationNav" aria-controls="conversationNav"
                                    aria-expanded="true" aria-label="Toggle navigation">
                                    <div class="nav-link__block">
                                        <i class="bi bi-chevron-down"></i>
                                        <i class="bi bi-chat-text"></i>
                                        <div class="text">Conversations</div>
                                        <div class="count"></div>
                                    </div>
                                </a>
                                <ul class="list-group ims__list-group collapse show" id="conversationNav">
                                    <li class="list-group-item">
                                        <a href="" class="nav-link">
                                            <div class="nav-link__block">
                                                <i class="bi bi-person-lines-fill"></i>
                                                <div class="text">Admin</div>
                                            </div>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>