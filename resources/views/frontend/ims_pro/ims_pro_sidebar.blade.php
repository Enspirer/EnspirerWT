<div class="ims__side-col">
                <div class="ims__sideNav--toggler">
                    <i onclick="sideNavToggle()" class="bi bi-list"></i>
                </div>
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
                                <a href="{{ route('frontend.user_widget.ims_pro_media_scan', $project_id) }}" class="nav-link {{Request::segment(2)=='ims_pro_media_scan' ? 'active' :null }}">
                                    <div class="nav-link__block">
                                        <i class="bi bi-chevron-down ims__hidden"></i>
                                        <i class="bi bi-speedometer2"></i>
                                        <div class="text">Media Scan</div>
                                        <!-- <div class="count ims__hidden">2400</div> -->
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('frontend.user_widget.ims_pro_index', $project_id) }}" class="nav-link {{Request::segment(2)=='ims_pro_index' ? 'active' :null }}">
                                    <div class="nav-link__block">
                                        <i class="bi bi-chevron-down ims__hidden"></i>
                                        <i class="bi bi-speedometer2"></i>
                                        <div class="text">Index</div>
                                        <!-- <div class="count ims__hidden">2400</div> -->
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('frontend.user_widget.ims_pro_chat_summary', $project_id) }}" class="nav-link {{Request::segment(2)=='ims_pro_chat_summary' ? 'active' :null }}">
                                    <div class="nav-link__block">
                                        <i class="bi bi-chevron-down ims__hidden"></i>
                                        <i class="bi bi-speedometer2"></i>
                                        <div class="text">Chat Summary</div>
                                        <!-- <div class="count ims__hidden">2400</div> -->
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('frontend.user_widget.ims_pro_inquiry_summary', $project_id) }}" class="nav-link {{Request::segment(2)=='ims_pro_inquiry_summary' ? 'active' :null }}">
                                    <div class="nav-link__block">
                                        <i class="bi bi-chevron-down ims__hidden"></i>
                                        <i class="bi bi-speedometer2"></i>
                                        <div class="text">Inquiry Summary</div>
                                        <!-- <div class="count ims__hidden">2400</div> -->
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>