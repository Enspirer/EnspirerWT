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
            <a href="{{ route('frontend.user.user_widget.analytics.overview', $project_id) }}" target="_blank" class="ims-dashboard-btn">
                <i class="bi bi-clipboard2-pulse"></i>
                Statistics
            </a>

        @endif

     
        <a href="{{ route('frontend.user.user_widget.analytics.overview', $project_id) }}" target="_blank" class="ims-dashboard-btn ms-5">
            <i class="bi bi-clipboard2-pulse"></i>
            Heatmaps
        </a>

        <a href="{{ route('frontend.user.user_widget.analytics.overview', $project_id) }}" target="_blank" class="ims-dashboard-btn ms-5">
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
                <div class="inner-tab active">
                    <a href="{{ route('frontend.user.user_widget.ims_dashboard', $project_id) }}" target="_blank" class="tab-link">
                        <div class="icon">
                            <img src="{{url('images/dashboard/tab_section/privacy-policy.png')}}" alt="">
                        </div>
                        <div class="text">IMS Dashboard</div>
                    </a>
                </div>
            @endif
            @if(App\Models\IMSProUsers::where('project_id',$project_id)->first() != null)
                <div class="inner-tab active">
                    <a class="tab-link" href="{{ route('frontend.user_widget.ims_pro_media_scan', $project_id) }}" target="_blank">
                        <div class="icon">
                            <img src="{{url('images/dashboard/tab_section/privacy-policy.png')}}" alt="">
                        </div>
                        <div class="text">IMS Pro</div>
                    </a>
                </div>
            @endif

            <div class="inner-tab active">
                <a href="{{ route('frontend.user.project_settings', $project_id) }}" class="tab-link">
                    <div class="icon"><i class="bi bi-gear"></i></div>
                    <div class="text">Widget Settings</div>
                </a>
            </div>
            <div class="inner-tab hidden">
                <a href="#" class="tab-link">
                    <div class="icon"><i class="bi bi-gear"></i></div>
                    <div class="text">hidden</div>
                </a>
            </div>
            <div class="inner-tab hidden">
                <a href="#" class="tab-link">
                    <div class="icon"><i class="bi bi-gear"></i></div>
                    <div class="text">hidden</div>
                </a>
            </div>
        </div>
        <div class="tab {{Request::segment(3)=='analytics' ? 'active' :null }}">
            @if(App\Models\Widgets::where('project_id',$project_id)->where('widget_type','Analytics')->first() == null)
            <div class="inner-tab">
                <a class="tab-link" data-bs-toggle="modal" data-bs-target="#analyticsdisableModal">
                    <div class="icon">
                        <img src="{{url('images/dashboard/tab_section/statistics.png')}}" alt="">
                    </i></div>
                    <div class="text">Statistics</div>
                </a>
            </div>
            @else
            <div class="inner-tab active">
                <a href="{{ route('frontend.user.user_widget.analytics.overview', $project_id) }}" target="_blank" class="tab-link">
                    <div class="icon">
                        <img src="{{url('images/dashboard/tab_section/statistics.png')}}" alt="">
                    </i></div>
                    <div class="text">Statistics</div>
                </a>
            </div>
            @endif
            <div class="inner-tab active" data-bs-toggle="modal" data-bs-target="#heatmapModel" >
                <a href="#"class="tab-link">
                    <div class="icon">
                        <img src="{{url('images/dashboard/tab_section/heatmap.png')}}" alt="">
                    </div>
                    <div class="text">Heatmaps</div>
                </a>
            </div>
            <div class="inner-tab active">
                <a href="#"class="tab-link" data-bs-toggle="modal" data-bs-target="#sessionRecordModal">
                    <div class="icon">
                        <img src="{{url('images/dashboard/tab_section/session-recording.png')}}" alt="">
                    </div>
                    <div class="text">Session Recording</div>
                </a>
            </div>
            <div class="inner-tab hidden">
                <a href="#" class="tab-link">
                    <div class="icon"><i class="bi bi-gear"></i></div>
                    <div class="text">hidden</div>
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


<div class="modal fade dashboard-modal action-modal" id="widgetdisableModal" tabindex="-1" aria-labelledby="createWidgetModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </button>
                <div class="inner-wrapper">
                    <img src="{{url('images/dashboard/popups/notification.png')}}" alt="">
                    <div class="content">
                        <div class="title">Hay, Kamal Perera</div>
                        <div class="text">In order to view WhatsApp Widget and All-in-one Widget click here.</div>
                        <div class="button-block">
                            <a type="button" href="#" class="btn-modal btn-create" data-bs-toggle="modal" data-bs-target="#createWidgetModal">Create Widget</a>
                            <a href="#" class="btn-modal btn-close" data-bs-dismiss="modal" aria-label="Close">No, I want to stay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade dashboard-modal cta-modal" id="analyticsdisableModal" tabindex="-1"
    aria-labelledby="createWidgetModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </button>
                <div class="title">
                        <h3 class="modal-title">Analytics Center</h3>
                </div>
            </div>
            <div class="modal-body">
                <div class="inner-wrapper">
                    <div class="content-block">
                        <div class="title">Statistics</div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero atque dolorem
                            aliquam pariatur odio id soluta cum, tempora consequuntur,</div>
                        <div class="button-block">
                            <a type="button" href="#" class="btn-modal btn-create-widget" data-bs-toggle="modal"
                                data-bs-target="#createAnalyticsModal">Create Widget</a>
                        </div>
                    </div>
                    <div class="image-block">
                        <img src="{{url('images/dashboard/popups/statistics.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade dashboard-modal cta-modal" id="heatmapModel" tabindex="-1"
    aria-labelledby="createWidgetModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </button>
                <div class="title">
                        <h3 class="modal-title">Analytics Center</h3>
                </div>
            </div>
            <div class="modal-body">
                <div class="inner-wrapper">
                    <div class="content-block">
                        <div class="title">Heatmaps</div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero atque dolorem
                            aliquam pariatur odio id soluta cum, tempora consequuntur,</div>
                        <div class="fee">$ 52.00</div>
                        <div class="button-block">
                            <a type="button" href="#" class="btn-modal btn-purchase">Purchase this plugin</a>
                        </div>
                    </div>
                    <div class="image-block">
                        <img src="{{url('images/dashboard/popups/heatmap.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade dashboard-modal cta-modal" id="sessionRecordModal" tabindex="-1"
    aria-labelledby="createWidgetModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </button>
                <div class="title">
                        <h3 class="modal-title">Analytics Center</h3>
                </div>
            </div>
            <div class="modal-body">
                <div class="inner-wrapper">
                    <div class="content-block">
                        <div class="title">Session Recording</div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero atque dolorem
                            aliquam pariatur odio id soluta cum, tempora consequuntur,</div>
                        <div class="fee">$ 52.00</div>
                        <div class="button-block">
                            <a type="button" href="#" class="btn-modal btn-purchase">Purchase this plugin</a>
                        </div>
                    </div>
                    <div class="image-block">
                        <img src="{{url('images/dashboard/popups/session_recording.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

