<div class="ims__side-col">
    <div class="ims__sideNav--toggler"><i onclick="sideNavToggle()" class="bi bi-list"></i></div>
                <div class="ims__side-nav">
                    <div class="side-nav__header">
                        <div class="logo-block">
                            <img src="{{url('images/full-logo.png')}}" alt="" class="logo">
                            <div class="logo-text">- IMS</div>
                        </div>
                        <div class="caption">Inquiry Management Systems</div>
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
                                <a href="{{ route('frontend.user.user_widget.ims_dashboard', $project_id) }}" class="nav-link {{Request::segment(2)=='ims_dashboard' ? 'active' :null }}">
                                    <div class="nav-link__block">
                                        <i class="bi bi-chevron-down ims__hidden"></i>
                                        <i class="bi bi-speedometer2"></i>
                                        <div class="text">Dashboard</div>
                                        <div class="count ims__hidden">2400</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link {{ Request::segment(2)=='ims' ? 'active' : (Request::segment(2)=='ims_assigned' ? 'active' :(Request::segment(2)=='ims_unassigned' ? 'active' :(Request::segment(2)=='ims_closed' ? 'active' :(Request::segment(2)=='ims_spam' ? 'active' :null)) ) )   }}" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#conversationNav" aria-controls="conversationNav"
                                    aria-expanded="true" aria-label="Toggle navigation">
                                    <div class="nav-link__block">
                                        <i class="bi bi-chevron-down"></i>
                                        <i class="bi bi-chat-text"></i>
                                        <div class="text">Conversations</div>
                                        <div class="count">{{count(Modules\WidgetManager\Entities\ImsClients::where('project_id',$project_id)->where('assign_by', null)->get())}}</div>
                                    </div>
                                </a>
                                <ul class="list-group ims__list-group collapse show" id="conversationNav">
                                    <li class="list-group-item">
                                        <a href="{{ route('frontend.user.user_widget.ims', $project_id) }}" class="nav-link {{Request::segment(2)=='ims' ? 'active' :null }}">
                                            <div class="nav-link__block">
                                                <i class="bi bi-person-lines-fill"></i>
                                                <div class="text">Admin</div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- <li class="list-group-item">
                                        <a href="{{ route('frontend.user.user_widget.ims_inbox', $project_id) }}" class="nav-link" onclick="controlPanel('inbox')">
                                            <div class="nav-link__block">
                                                <i class="bi bi-envelope"></i>
                                                <div class="text">Inbox</div>
                                            </div>
                                        </a>
                                    </li> -->
                                    <li class="list-group-item">
                                        <a href="{{ route('frontend.user.user_widget.ims_assigned', $project_id) }}" class="nav-link {{Request::segment(2)=='ims_assigned' ? 'active' :null }}">
                                            <div class="nav-link__block">
                                                <i class="bi bi-person-check"></i>
                                                <div class="text">Assigned</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ route('frontend.user.user_widget.ims_unassigned', $project_id) }}" class="nav-link {{Request::segment(2)=='ims_unassigned' ? 'active' :null }}">
                                            <div class="nav-link__block">
                                                <i class="bi bi-person-x"></i>
                                                <div class="text">Unassigned</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ route('frontend.user.user_widget.ims_closed', $project_id) }}" class="nav-link {{Request::segment(2)=='ims_closed' ? 'active' :null }}">
                                            <div class="nav-link__block">
                                                <i class="bi bi-file-earmark-check"></i>
                                                <div class="text">Closed</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ route('frontend.user.user_widget.ims_spam', $project_id) }}" class="nav-link {{Request::segment(2)=='ims_spam' ? 'active' :null }}">
                                            <div class="nav-link__block">
                                                <i class="bi bi-exclamation-octagon"></i>
                                                <div class="text">Spam</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('frontend.user.user_widget.ims_clients', $project_id) }}" class="nav-link {{Request::segment(2)=='ims_clients' ? 'active' :null }}">
                                    <div class="nav-link__block">
                                        <i class="bi bi-chevron-down ims__hidden"></i>
                                        <i class="bi bi-people"></i>
                                        <div class="text">Clients</div>
                                        <div class="count">{{count(Modules\WidgetManager\Entities\ImsClients::where('project_id',$project_id)->get()->unique('client_email'))}}</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('frontend.user.user_widget.ims_analytics', $project_id) }}" class="nav-link {{Request::segment(2)=='ims_analytics' ? 'active' :null }}">
                                    <div class="nav-link__block">
                                        <i class="bi bi-chevron-down ims__hidden"></i>
                                        <i class="bi bi-speedometer2"></i>
                                        <div class="text">Analytics</div>
                                        <div class="count ims__hidden">2400</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>