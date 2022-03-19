<!-- Old Tabs -->

<!--
<div class="row gy-0 gx-5 mb-5">
    <div class="col">
        <a href="{{route('frontend.user.project.chat',$project_id)}}" style="text-decoration:none">
            <div class="tabs p-2  {{Request::segment(3)=='widget' ? 'active' :null }}">
                <div class="tab-icon">
                    <i class="bi bi-chat-dots"></i>
                </div>
                <div class="tab-title">Widgets</div>
                <div class="tab-info">
                    <span class="strong-text">{{count(App\Models\Widgets::where('project_id',$project_id)->where('status','Enabled')->get())}}</span>
                    Widgets
                </div>
            </div>
        </a>
    </div>

    <div class="col">
        <a href="{{route('frontend.user.project.analytics',$project_id)}}" style="text-decoration:none">
            <div class="tabs p-2 {{Request::segment(3)=='analytics' ? 'active' :null }}">
                <div class="tab-icon">
                    <i class="bi bi-activity"></i>
                </div>
                <div class="tab-title">Analytics Center</div>
                <div class="tab-info">
                    <span class="strong-text">03</span>
                    Visitors
                </div>
            </div>
        </a>
    </div>

    <div class="col">
        <a style="text-decoration:none">
            <div class="tabs disable p-2 {{Request::segment(3)=='seo' ? 'active' :null }}">
                <div class="tab-icon">
                    <i class="bi bi-search-heart"></i>
                </div>
                <div class="tab-title">SEO</div>
                <div class="tab-info">
                    <span class="strong-text">82.0</span>
                    Pass
                </div>
            </div>
        </a>
    </div>
    
    <div class="col">
        <a style="text-decoration:none">
            <div class="tabs disable p-2 {{Request::segment(3)=='security' ? 'active' :null }}">
                <div class="tab-icon">
                    <i class="bi bi-shield-check"></i>
                </div>
                <div class="tab-title">Security</div>
                <div class="tab-info">
                    <span class="strong-text">05</span>
                    Alerts
                </div>
            </div>
        </a>
    </div>
    
</div>

<div class="row g-0 mb-5">
    @if(Request::segment(3)=='widget')

        @if(App\Models\Widgets::where('project_id',$project_id)->where('widget_type','Whatsapp Chat')->first() == null && App\Models\Widgets::where('project_id',$project_id)->where('widget_type','All-in-One Chat')->first() == null)
            <a data-bs-toggle="modal" data-bs-target="#widgetdisableModal" class="ims-dashboard-btn">
                <lord-icon src="https://cdn.lordicon.com/yyecauzv.json" trigger="loop" style="width:65px;height:65px">
                </lord-icon>
                IMS Dashboard
            </a>
        @else
            <a href="{{ route('frontend.user.user_widget.ims_dashboard', $project_id) }}" target="_blank" class="ims-dashboard-btn">
                <lord-icon src="https://cdn.lordicon.com/yyecauzv.json" trigger="loop" style="width:65px;height:65px">
                </lord-icon>
                IMS Dashboard
            </a>
        @endif


        <a href="{{ route('frontend.user.project_settings', $project_id) }}" class="ims-dashboard-btn ms-5">
            <i class="bi bi-gear"></i>{{App\Models\Projects::where('id',$project_id)->first()->name}} Account Settings
        </a>
    @endif

    @if(Request::segment(3)=='analytics')

        @if(App\Models\Widgets::where('project_id',$project_id)->where('widget_type','Analytics')->first() == null)
            <a data-bs-toggle="modal" data-bs-target="#analyticsdisableModal" class="ims-dashboard-btn">
                <i class="bi bi-clipboard2-pulse"></i>
                Statistics
            </a>

        @else
            <a href="{{ route('frontend.user.user_widget.analytics', $project_id) }}" target="_blank" class="ims-dashboard-btn">
                <i class="bi bi-clipboard2-pulse"></i>
                Statistics
            </a>

        @endif

     
        <a href="{{ route('frontend.user.user_widget.analytics', $project_id) }}" target="_blank" class="ims-dashboard-btn ms-5">
            <i class="bi bi-clipboard2-pulse"></i>
            Heatmaps
        </a>

        <a href="{{ route('frontend.user.user_widget.analytics', $project_id) }}" target="_blank" class="ims-dashboard-btn ms-5">
            <i class="bi bi-clipboard2-pulse"></i>
            Session Recording
        </a>
    @endif


</div>
-->

<div class="section-cards" id="sectionCards">
    <div class="cards">
        <div class="card {{Request::segment(3)=='widget' ? 'active' :null }}">
            <a href="{{route('frontend.user.project.chat',$project_id)}}" class="card-link">
                <div class="icon"><i class="bi bi-puzzle"></i></div>
                <div class="title">Widgets</div>
                <h2 class="stats">{{count(App\Models\Widgets::where('project_id',$project_id)->where('status','Enabled')->get())}}<span>Widgets</span></h2>
            </a>
        </div>
        <div class="card {{Request::segment(3)=='analytics' ? 'active' :null }}">
            <a href="{{route('frontend.user.project.analytics',$project_id)}}" class="card-link">
                <div class="icon"><i class="bi bi-activity"></i></div>
                <div class="title">Analytics Center</div>
                <h2 class="stats">05<span>Alerts</span></h2>
            </a>
        </div>
        <div class="card disable {{Request::segment(3)=='seo' ? 'active' :null }}">
            <a class="card-link">
            <!-- <a href="#" class="card-link"> -->
                <div class="icon"><i class="bi bi-slack"></i></div>
                <div class="title">Realtime</div>
                <h2 class="stats">03<span>Visitors</span></h2>
            </a>
        </div>
        <div class="card disable {{Request::segment(3)=='security' ? 'active' :null }}">
            <a class="card-link">
            <!-- <a href="#" class="card-link"> -->
                <div class="icon"><i class="bi bi-slack"></i></div>
                <div class="title">Security</div>
                <h2 class="stats">14<span>Alerts</span></h2>
            </a>
        </div>
    </div>
    <div class="tabs">
        <div class="tab {{Request::segment(3)=='widget' ? 'active' :null }}">
            @if(App\Models\Widgets::where('project_id',$project_id)->where('widget_type','Whatsapp Chat')->first() == null && App\Models\Widgets::where('project_id',$project_id)->where('widget_type','All-in-One Chat')->first() == null)
                <div class="inner-tab">
                    <a class="tab-link" data-bs-toggle="modal" data-bs-target="#widgetdisableModal">
                        <div class="icon">
                            <img src="{{url('images/dashboard/tab_section/privacy-policy.png')}}" alt="">
                        </div>
                        <div class="text">IMS Dashboard</div>
                    </a>
                </div>
                @else
                <div class="inner-tab">
                    <a href="{{ route('frontend.user.user_widget.ims_dashboard', $project_id) }}" target="_blank" class="tab-link">
                        <div class="icon">
                            <img src="{{url('images/dashboard/tab_section/privacy-policy.png')}}" alt="">
                        </div>
                        <div class="text">IMS Dashboard</div>
                    </a>
                </div>
            @endif
            <div class="inner-tab">
                <a href="{{ route('frontend.user.project_settings', $project_id) }}" class="tab-link">
                    <div class="icon"><i class="bi bi-gear"></i></div>
                    <div class="text">{{App\Models\Projects::where('id',$project_id)->first()->name}} Account Settings</div>
                </a>
            </div>
        </div>
        <div class="tab {{Request::segment(3)=='analytics' ? 'active' :null }}">
            @if(App\Models\Widgets::where('project_id',$project_id)->where('widget_type','Analytics')->first() == null)
            <div class="inner-tab">
                <a class="tab-link" data-bs-toggle="modal" data-bs-target="#analyticsdisableModal">
                    <div class="icon"><i class="bi bi-clipboard-pulse"></i></div>
                    <div class="text">Statics</div>
                </a>
            </div>
            @else
            <div class="inner-tab">
                <a href="{{ route('frontend.user.user_widget.analytics', $project_id) }}" target="_blank" class="tab-link">
                    <div class="icon"><i class="bi bi-clipboard-pulse"></i></div>
                    <div class="text">Statics</div>
                </a>
            </div>
            @endif
            <div class="inner-tab">
                <a href="{{ route('frontend.user.user_widget.analytics', $project_id) }}" target="_blank" class="tab-link">
                    <div class="icon"><i class="bi bi-compass"></i></div>
                    <div class="text">Heatmaps</div>
                </a>
            </div>
            <div class="inner-tab">
                <a href="{{ route('frontend.user.user_widget.analytics', $project_id) }}" target="_blank" class="tab-link">
                    <div class="icon"><i class="bi bi-clock-history"></i></div>
                    <div class="text">Session Recording</div>
                </a>
            </div>
        </div>
        <div class="tab {{Request::segment(3)=='seo' ? 'active' :null }}">
            <div class="inner-tab">
                <a href="#" class="tab-link">
                    <div class="icon"></div>
                    <div class="text"></div>
                </a>
            </div>
            <div class="inner-tab">
                <a href="#" class="tab-link">
                    <div class="icon"></div>
                    <div class="text"></div>
                </a>
            </div>
            <div class="inner-tab">
                <a href="#" class="tab-link">
                    <div class="icon"></div>
                    <div class="text"></div>
                </a>
            </div>
            <div class="inner-tab">
                <a href="#" class="tab-link">
                    <div class="icon"></div>
                    <div class="text"></div>
                </a>
            </div>
        </div>
        <div class="tab {{Request::segment(3)=='security' ? 'active' :null }}">
            <div class="inner-tab">
                <a href="#" class="tab-link">
                    <div class="icon"></div>
                    <div class="text"></div>
                </a>
            </div>
            <div class="inner-tab">
                <a href="#" class="tab-link">
                    <div class="icon"></div>
                    <div class="text"></div>
                </a>
            </div>
            <div class="inner-tab">
                <a href="#" class="tab-link">
                    <div class="icon"></div>
                    <div class="text"></div>
                </a>
            </div>
            <div class="inner-tab">
                <a href="#" class="tab-link">
                    <div class="icon"></div>
                    <div class="text"></div>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="modal fade action-modal" id="widgetdisableModal" tabindex="-1" aria-labelledby="createWidgetModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card">
                <div class="card-header">
                    <h5 class="modal-title" id="createWidgetModalLabel">Active Widget</h5>
                    <button type="button" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>
                <div class="card-body">
                    <div class="block-1">
                        <div class="row g-0">
                            <div class="inner-wrapper">
                                <div class="col">
                                    <div class="row g-0 align-items-center justify-content-between">
                                        <div class="col-12">
                                            <div class="header">
                                                <span class="title">In order to view Whatsapp Widget and All-in-one
                                                    Widget click here.
                                                </span>
                                            </div>
                                            <button type="button" class="btn-whatsapp" data-bs-toggle="modal"
                                                data-bs-target="#createWidgetModal">Create Widget</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade action-modal" id="analyticsdisableModal" tabindex="-1" aria-labelledby="createWidgetModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card">
                <div class="card-header">
                    <h5 class="modal-title" id="createWidgetModalLabel">Active Analytics</h5>
                    <button type="button" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>
                <div class="card-body">
                    <div class="block-1">
                        <div class="row g-0">
                            <div class="inner-wrapper">
                                <div class="col">
                                    <div class="row g-0 align-items-center justify-content-between">
                                        <div class="col-12">
                                            <div class="header">
                                                <span class="title">In order to view statistics, heatmaps, session
                                                    recordings click here.</span>
                                            </div>
                                            <button type="button" class="btn-whatsapp" data-bs-toggle="modal"
                                                data-bs-target="#createAnalyticsModal">Create Analytics</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
