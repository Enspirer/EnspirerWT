<!-- <div class="section-cards" id="sectionCards">
    <div class="cards">
        <div class="card {{Request::segment(3)=='widget' ? 'active' :null }}">
            <a href="{{route('frontend.user.project.chat',$project_id)}}" class="card-link">
                <div class="icon"><i class="bi bi-puzzle"></i></div>
                <div class="title">Widgets</div>
                <h2 class="stats">{{count(App\Models\Widgets::where('project_id',$project_id)->where('status','Enabled')->get())}}<span>Widgets</span></h2>
            </a>
        </div>
        <div class="card {{Request::segment(3)=='widget_plus' ? 'active' :null }}">
            <a href="{{route('frontend.user.project.widget_plus',$project_id)}}" class="card-link">
                <div class="icon"><i class="bi bi-activity"></i></div>
                <div class="title">Widgets Plus</div>
                <h2 class="stats">05<span>Alerts</span></h2>
            </a>
        </div>
        <div class="card {{Request::segment(3)=='optimizer' ? 'active' :null }}">
            <a href="{{route('frontend.user.project.optimizer',$project_id)}}" class="card-link">
                <div class="icon"><i class="bi bi-clock-history"></i></div>
                <div class="title">Optimizer</div>
                <h2 class="stats">03<span>Visitors</span></h2>
            </a>
        </div>
        <div class="card {{Request::segment(3)=='optimizer_plus' ? 'active' :null }}">
            <a href="{{route('frontend.user.project.optimizer',$project_id)}}" class="card-link">
                <div class="icon"><i class="bi bi-slack"></i></div>
                <div class="title">Optimizer Plus</div>
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
            @if(App\Models\IMSProUsers::where('project_id',$project_id)->first() == null)
                <div class="inner-tab hidden">
                    <a href="#" class="tab-link">
                        <div class="icon"><i class="bi bi-gear"></i></div>
                        <div class="text">hidden</div>
                    </a>
                </div>
            @endif
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
            <div class="inner-tab hidden">
                <a href="#" class="tab-link">
                    <div class="icon"></div>
                    <div class="text"></div>
                </a>
            </div>
            <div class="inner-tab hidden">
                <a href="#" class="tab-link">
                    <div class="icon"></div>
                    <div class="text"></div>
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
                    <div class="icon"><i class="bi bi-bullseye"></i></div>
                    <div class="text">Realtime</div>
                </a>
            </div>
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
</div> -->

<div class="section-cards" id="sectionCards">
    <div class="cards">
        <div class="card {{Request::segment(3)=='widget' ? 'active' :null }}">
            <a href="{{route('frontend.user.project.chat',$project_id)}}" class="card-link">
                <i class="bi bi-ui-checks-grid"></i>
                <div class="text">Widget</div>
            </a>
        </div>
        <div class="card {{Request::segment(3)=='widget_plus' ? 'active' :null }}">
            <a href="{{route('frontend.user.project.widget_plus',$project_id)}}" class="card-link">
                <i class="bi bi-ui-checks-grid"></i>
                <div class="text">Widget Plus</div>
            </a>
        </div>
        <div class="card {{Request::segment(3)=='optimizer' ? 'active' :null }}">
            <a href="{{route('frontend.user.project.optimizer',$project_id)}}" class="card-link">
                <i class="bi bi-ui-checks-grid"></i>
                <div class="text">Optimizer</div>
            </a>
        </div>
        <div class="card {{Request::segment(3)=='optimizer_plus' ? 'active' :null }}">
            <a href="{{route('frontend.user.project.optimizer',$project_id)}}" class="card-link">
                <i class="bi bi-ui-checks-grid"></i>
                <div class="text">Optimizer Plus</div>
            </a>
        </div>
    </div>
</div>

<div class="subcription-block">
    <div class="inner-wrapper">
        <img src="{{url('images/dashboard/subscriptions/whatsapp-water-mark.png')}}" alt="" class="water-mark">
        <div class="widget-block">
            <div class="title">WhatsApp Widget</div>
            <img src="{{url('images/dashboard/subscriptions/whatsapp.png')}}" alt="" class="widget-img">
        </div>
        <div class="separator">
            <i class="bi bi-plus-lg"></i>
        </div>
        <div class="widget-block">
            <div class="title">IMS <span class="pro-cat blue">Lite</span></div>
            <img src="{{url('images/dashboard/subscriptions/ims-lite.png')}}" alt="" class="widget-img">
        </div>
        <a href="#" class="sub-btn">
            <i class="bi bi-plus"></i>
            <div class="text">Activate</div>
        </a>
    </div>
</div>

<div class="subcription-block">
    <div class="inner-wrapper">
        <img src="{{url('images/dashboard/subscriptions/messenger-water-mark.png')}}" alt="" class="water-mark">
        <div class="widget-block">
            <div class="title">All in one Widget</div>
            <img src="{{url('images/dashboard/subscriptions/all-in-one.png')}}" alt="" class="widget-img">
        </div>
        <div class="separator">
            <i class="bi bi-plus-lg"></i>
        </div>
        <div class="widget-block">
            <div class="title">IMS <span class="pro-cat blue">Lite</span></div>
            <img src="{{url('images/dashboard/subscriptions/ims-lite.png')}}" alt="" class="widget-img">
        </div>
        <a href="#" class="sub-btn">
            <i class="bi bi-plus"></i>
            <div class="text">Activate</div>
        </a>
    </div>
</div>

<div class="subcription-block">
    <div class="inner-wrapper">
        <img src="{{url('images/dashboard/subscriptions/whatsapp-water-mark.png')}}" alt="" class="water-mark">
        <div class="widget-block">
            <div class="title">WhatsApp Widget</div>
            <img src="{{url('images/dashboard/subscriptions/whatsapp.png')}}" alt="" class="widget-img">
        </div>
        <div class="separator">
            <i class="bi bi-plus-lg"></i>
        </div>
        <div class="widget-block">
            <div class="title">IMS <span class="pro-cat red">Pro</span></div>
            <img src="{{url('images/dashboard/subscriptions/ims-pro.png')}}" alt="" class="widget-img">
        </div>
        <a href="#" class="sub-btn">
            <i class="bi bi-plus"></i>
            <div class="text">Activate</div>
        </a>
    </div>
</div>

<div class="subcription-block">
    <div class="inner-wrapper">
        <img src="{{url('images/dashboard/subscriptions/messenger-water-mark.png')}}" alt="" class="water-mark">
        <div class="widget-block">
            <div class="title">All in one Widget</div>
            <img src="{{url('images/dashboard/subscriptions/all-in-one.png')}}" alt="" class="widget-img">
        </div>
        <div class="separator">
            <i class="bi bi-plus-lg"></i>
        </div>
        <div class="widget-block">
            <div class="title">IMS <span class="pro-cat red">Pro</span></div>
            <img src="{{url('images/dashboard/subscriptions/ims-pro.png')}}" alt="" class="widget-img">
        </div>
        <a href="#" class="sub-btn">
            <i class="bi bi-plus"></i>
            <div class="text">Activate</div>
        </a>
    </div>
</div>

<div class="subcription-block">
    <div class="content-block">
        <div class="widget-block">
            <img src="{{url('images/dashboard/subscriptions/ims-pro.png')}}" alt="" class="widget-img">
            <div class="content">
                <div class="title">Desktop</div>
                <ul class="options">
                    <li class="list-item">
                        <i class="bi green bi-check-circle-fill"></i>
                        <div class="text">Realtime View + Invites</div>
                    </li>
                    <li class="list-item">
                        <i class="bi green bi-check-circle-fill"></i>
                        <div class="text">Analytics Center</div>
                    </li>
                    <li class="list-item">
                        <i class="bi green bi-check-circle-fill"></i>
                        <div class="text">SEO Reports</div>
                    </li>
                    <li class="list-item">
                        <i class="bi red bi-x-circle-fill"></i>
                        <div class="text">Session Recording</div>
                    </li>
                    <li class="list-item">
                        <i class="bi red bi-x-circle-fill"></i>
                        <div class="text">Heatmaps</div>
                    </li>
                    <li class="list-item">
                        <i class="bi red bi-x-circle-fill"></i>
                        <div class="text">Security</div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="widget-block">
            <img src="{{url('images/dashboard/subscriptions/mobile-app.png')}}" alt="" class="widget-img">
            <div class="content">
                <div class="title">Mobile</div>
                <ul class="options">
                    <li class="list-item">
                        <i class="bi green bi-check-circle-fill"></i>
                        <div class="text">Realtime View</div>
                    </li>
                    <li class="list-item">
                        <i class="bi green bi-check-circle-fill"></i>
                        <div class="text">Visitor Invite</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="button-block">
        <a href="#" class="sub-btn">
            <i class="bi bi-plus"></i>
            <div class="text">Activate</div>
        </a>
    </div>
</div>

<div class="subcription-block">
    <div class="content-block">
        <div class="widget-block">
            <img src="{{url('images/dashboard/subscriptions/ims-pro.png')}}" alt="" class="widget-img">
            <div class="content">
                <div class="title">Desktop</div>
                <ul class="options">
                    <li class="list-item">
                        <i class="bi green bi-check-circle-fill"></i>
                        <div class="text">Realtime View + Invites</div>
                    </li>
                    <li class="list-item">
                        <i class="bi green bi-check-circle-fill"></i>
                        <div class="text">Analytics Center</div>
                    </li>
                    <li class="list-item">
                        <i class="bi green bi-check-circle-fill"></i>
                        <div class="text">SEO Reports</div>
                    </li>
                    <li class="list-item">
                        <i class="bi green bi-check-circle-fill"></i>
                        <div class="text">Session Recording</div>
                    </li>
                    <li class="list-item">
                        <i class="bi green bi-check-circle-fill"></i>
                        <div class="text">Heatmaps</div>
                    </li>
                    <li class="list-item">
                        <i class="bi green bi-check-circle-fill"></i>
                        <div class="text">Security</div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="widget-block">
            <img src="{{url('images/dashboard/subscriptions/mobile-app.png')}}" alt="" class="widget-img">
            <div class="content">
                <div class="title">Mobile</div>
                <ul class="options">
                    <li class="list-item">
                        <i class="bi green bi-check-circle-fill"></i>
                        <div class="text">Realtime View</div>
                    </li>
                    <li class="list-item">
                        <i class="bi green bi-check-circle-fill"></i>
                        <div class="text">Visitor Invite</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="button-block">
        <a href="#" class="sub-btn">
            <i class="bi bi-plus"></i>
            <div class="text">Activate</div>
        </a>
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

