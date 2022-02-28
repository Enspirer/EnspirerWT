<div class="ims__side-col">
                <div class="ims__side-nav">
                    <div class="side-nav__header">
                        <div class="logo-block">
                            <img src="{{url('images/Tallentor Logo 2-04.png')}}" alt="" class="logo">
                            <div class="logo-text">- IMS</div>
                        </div>
                        <div class="caption">Inquiry Management Systems</div>
                        <div class="live-status-block">
                            <i class="bi bi-broadcast"></i>
                            <div class="caption">Live Visitors</div>
                            <div class="count">05</div>
                        </div>
                    </div>
                    <div class="side-nav__navs" id="sideNavs">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link active" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#conversationNav" aria-controls="conversationNav"
                                    aria-expanded="true" aria-label="Toggle navigation">
                                    <div class="nav-link__block">
                                        <i class="bi bi-chevron-down"></i>
                                        <i class="bi bi-chat-text"></i>
                                        <div class="text">Conversations</div>
                                        <div class="count">24</div>
                                    </div>
                                </a>
                                <ul class="list-group ims__list-group collapse show" id="conversationNav">
                                    <li class="list-group-item">
                                        <a href="{{ route('frontend.user.user_widget.ims', $widget->id) }}" class="nav-link active" onclick="controlPanel('admin')">
                                            <div class="nav-link__block">
                                                <i class="bi bi-person-lines-fill"></i>
                                                <div class="text">Admin</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ route('frontend.user.user_widget.ims_inbox', $widget->id) }}" class="nav-link" onclick="controlPanel('inbox')">
                                            <div class="nav-link__block">
                                                <i class="bi bi-envelope"></i>
                                                <div class="text">Inbox</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ route('frontend.user.user_widget.ims_assigned', $widget->id) }}" class="nav-link" onclick="controlPanel('assigned')">
                                            <div class="nav-link__block">
                                                <i class="bi bi-person-check"></i>
                                                <div class="text">Assigned</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ route('frontend.user.user_widget.ims_unassigned', $widget->id) }}" class="nav-link" onclick="controlPanel('unassigned')">
                                            <div class="nav-link__block">
                                                <i class="bi bi-person-x"></i>
                                                <div class="text">Unassigned</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ route('frontend.user.user_widget.ims_closed', $widget->id) }}" class="nav-link" onclick="controlPanel('closed')">
                                            <div class="nav-link__block">
                                                <i class="bi bi-file-earmark-check"></i>
                                                <div class="text">Closed</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ route('frontend.user.user_widget.ims_spam', $widget->id) }}" class="nav-link" onclick="controlPanel('spam')">
                                            <div class="nav-link__block">
                                                <i class="bi bi-exclamation-octagon"></i>
                                                <div class="text">Spam</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('frontend.user.user_widget.ims_clients', $widget->id) }}" class="nav-link" onclick="controlPanel('clients')">
                                    <div class="nav-link__block">
                                        <i class="bi bi-chevron-down ims__hidden"></i>
                                        <i class="bi bi-people"></i>
                                        <div class="text">Clients</div>
                                        <div class="count">2400</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('frontend.user.user_widget.ims_analytics', $widget->id) }}" class="nav-link" onclick="controlPanel('analytics')">
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