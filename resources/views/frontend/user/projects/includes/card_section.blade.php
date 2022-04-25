<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<div class="section-cards" id="sectionCards">
    <div class="cards">
        @if(App\Models\Projects::where('id',$project_id)->first()->selected_package == 'Optimizer' || App\Models\Projects::where('id',$project_id)->first()->selected_package == 'All In One Widget + IMS Pro')
            <div class="card {{Request::segment(3)=='widget' ? 'active' :null }}">
                <a href="{{route('frontend.user.project.chat',$project_id)}}" class="card-link disabled">
                    <svg class="tab-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 51 51" style="enable-background:new 0 0 51 51;" xml:space="preserve">
                        <style type="text/css">
                            .st0{fill:none;stroke-width:3;}
                        </style>
                        <g class="tab-icon">
                            <path id="Rectangle_1355" class="st0" d="M5.5,1.5h16l0,0v17c0,2.2-1.8,4-4,4h-16l0,0v-17C1.5,3.3,3.3,1.5,5.5,1.5z"/>
                            <path id="Rectangle_1361" class="st0" d="M39.5,1.5L39.5,1.5c5.5,0,10,4.5,10,10v1c0,5.5-4.5,10-10,10l0,0c-5.5,0-10-4.5-10-10v-1   C29.5,6,34,1.5,39.5,1.5z"/>
                            <path id="Rectangle_1359" class="st0" d="M1.5,28.5h16c2.2,0,4,1.8,4,4v17l0,0h-16c-2.2,0-4-1.8-4-4V28.5L1.5,28.5z"/>
                            <path id="Rectangle_1360" class="st0" d="M33.5,28.5h16l0,0v17c0,2.2-1.8,4-4,4h-16l0,0v-17C29.5,30.3,31.3,28.5,33.5,28.5z"/>
                        </g>
                    </svg>
                    <div class="text">Widget Lite</div>
                </a>
            </div>
        @else
            <div class="card {{Request::segment(3)=='widget' ? 'active' :null }}">
                <a href="{{route('frontend.user.project.chat',$project_id)}}" class="card-link">
                    <svg class="tab-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 51 51" style="enable-background:new 0 0 51 51;" xml:space="preserve">
                        <style type="text/css">
                            .st0{fill:none;stroke-width:3;}
                        </style>
                        <g class="tab-icon">
                            <path id="Rectangle_1355" class="st0" d="M5.5,1.5h16l0,0v17c0,2.2-1.8,4-4,4h-16l0,0v-17C1.5,3.3,3.3,1.5,5.5,1.5z"/>
                            <path id="Rectangle_1361" class="st0" d="M39.5,1.5L39.5,1.5c5.5,0,10,4.5,10,10v1c0,5.5-4.5,10-10,10l0,0c-5.5,0-10-4.5-10-10v-1   C29.5,6,34,1.5,39.5,1.5z"/>
                            <path id="Rectangle_1359" class="st0" d="M1.5,28.5h16c2.2,0,4,1.8,4,4v17l0,0h-16c-2.2,0-4-1.8-4-4V28.5L1.5,28.5z"/>
                            <path id="Rectangle_1360" class="st0" d="M33.5,28.5h16l0,0v17c0,2.2-1.8,4-4,4h-16l0,0v-17C29.5,30.3,31.3,28.5,33.5,28.5z"/>
                        </g>
                    </svg>
                    <div class="text">Widget Lite</div>
                </a>
            </div>
        @endif

        @if(App\Models\Projects::where('id',$project_id)->first()->selected_package == 'Optimizer')
            <div class="card {{Request::segment(3)=='widget_plus' ? 'active' :null }}">
                <a href="{{route('frontend.user.project.widget_plus',$project_id)}}" class="card-link disabled">
                    <svg class="tab-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 51 51" style="enable-background:new 0 0 51 51;" xml:space="preserve">
                        <style type="text/css">
                            .st0{fill:none;stroke-width:3;}
                            .st1{fill-rule:evenodd;clip-rule:evenodd;stroke-width:3;stroke-linecap:round;stroke-miterlimit:10;}
                        </style>
                        <g class="tab-icon">
                            <path id="Rectangle_1363" class="st0" d="M5.5,1.5h16l0,0v17c0,2.2-1.8,4-4,4h-16l0,0v-17C1.5,3.3,3.3,1.5,5.5,1.5z"/>
                            <path id="Rectangle_1364" class="st0" d="M1.5,28.5h16c2.2,0,4,1.8,4,4v17l0,0h-16c-2.2,0-4-1.8-4-4V28.5L1.5,28.5z"/>
                            <path id="Rectangle_1362" class="st0" d="M33.5,28.5h16l0,0v17c0,2.2-1.8,4-4,4h-16l0,0v-17C29.5,30.3,31.3,28.5,33.5,28.5z"/>
                            <g>
                                <line class="st1" x1="29.5" y1="11.5" x2="49.5" y2="11.5"/>
                                <line class="st1" x1="39.5" y1="21.5" x2="39.5" y2="1.5"/>
                            </g>
                        </g>
                    </svg>
                    <div class="text">Widget Pro</div>
                </a>
            </div>
        @else
            <div class="card {{Request::segment(3)=='widget_plus' ? 'active' :null }}">
                <a href="{{route('frontend.user.project.widget_plus',$project_id)}}" class="card-link">
                    <svg class="tab-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 51 51" style="enable-background:new 0 0 51 51;" xml:space="preserve">
                        <style type="text/css">
                            .st0{fill:none;stroke-width:3;}
                            .st1{fill-rule:evenodd;clip-rule:evenodd;stroke-width:3;stroke-linecap:round;stroke-miterlimit:10;}
                        </style>
                        <g class="tab-icon">
                            <path id="Rectangle_1363" class="st0" d="M5.5,1.5h16l0,0v17c0,2.2-1.8,4-4,4h-16l0,0v-17C1.5,3.3,3.3,1.5,5.5,1.5z"/>
                            <path id="Rectangle_1364" class="st0" d="M1.5,28.5h16c2.2,0,4,1.8,4,4v17l0,0h-16c-2.2,0-4-1.8-4-4V28.5L1.5,28.5z"/>
                            <path id="Rectangle_1362" class="st0" d="M33.5,28.5h16l0,0v17c0,2.2-1.8,4-4,4h-16l0,0v-17C29.5,30.3,31.3,28.5,33.5,28.5z"/>
                            <g>
                                <line class="st1" x1="29.5" y1="11.5" x2="49.5" y2="11.5"/>
                                <line class="st1" x1="39.5" y1="21.5" x2="39.5" y2="1.5"/>
                            </g>
                        </g>
                    </svg>
                    <div class="text">Widget Pro</div>
                </a>
            </div>
        @endif

       
            <div class="card {{Request::segment(3)=='optimizer' ? 'active tab-active' :null }}">
                <a href="{{route('frontend.user.project.optimizer',$project_id)}}" class="card-link">
                    <svg  class="tab-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 52.5 51.3" style="enable-background:new 0 0 52.5 51.3;" xml:space="preserve">
                        <style type="text/css">
                            .st0{fill:none;stroke-width:3;}
                            .st1{fill:none;stroke-width:2;stroke-linecap:round;}
                            .st2{fill:none;stroke-width:2;stroke-linecap:round;}
                            .st3{fill:#FFFFFF;stroke-width:1.5;}
                        </style>
                        <g  class="tab-icon">
                            <path id="Rectangle_1363" class="st0" d="M5.5,1.8h16l0,0v17c0,2.2-1.8,4-4,4h-16l0,0v-17C1.5,3.5,3.3,1.8,5.5,1.8z"/>
                            <path id="Rectangle_1364" class="st0" d="M1.5,28.8h16c2.2,0,4,1.8,4,4v17l0,0h-16c-2.2,0-4-1.8-4-4V28.8L1.5,28.8z"/>
                            <path id="Rectangle_1362" class="st0" d="M34.3,28.8h16l0,0v17c0,2.2-1.8,4-4,4h-16l0,0v-17C30.3,30.5,32,28.8,34.3,28.8z"/>
                            <path id="Path_7624" class="st1" d="M52.5,11.8"/>
                            <g>
                                <line id="Line_571" class="st2" x1="29.3" y1="20.3" x2="51.3" y2="20.3"/>
                                <line id="Line_572" class="st2" x1="29.3" y1="11.8" x2="51.3" y2="11.8"/>
                                <line id="Line_574" class="st2" x1="29.3" y1="3.8" x2="51.3" y2="3.8"/>
                                <circle id="Ellipse_421" class="st3" cx="36.3" cy="3.8" r="3"/>
                                <circle id="Ellipse_422" class="st3" cx="44.8" cy="11.8" r="3"/>
                                <circle id="Ellipse_423" class="st3" cx="36.3" cy="19.8" r="3"/>
                            </g>
                        </g>
                    </svg>
                    <div class="text">Optimizer</div>
                </a>
            </div>
        <!-- <div class="card {{Request::segment(3)=='optimizer_plus' ? 'active' :null }}">
            <a href="{{route('frontend.user.project.optimizer',$project_id)}}" class="card-link">
                <i class="bi bi-ui-checks-grid"></i>
                <div class="text">Optimizer Plus</div>
            </a>
        </div> -->
    </div>
    @if(App\Models\Projects::where('id',$project_id)->where('selected_package','Optimizer')->first() != null)
        <div class="tabs {{Request::segment(3)=='optimizer' ? 'active' :null }}">
            <div class="tab {{Request::segment(4)=='realtime' ? 'active' :null }}">
                <a href="{{ route('frontend.user.project.optimizer',$project_id) }}" class="tab-link">
                    <div class="realtime-icon"></div>
                    <div class="text">Realtime</div>
                </a>
            </div>
            <div class="tab {{Request::segment(4)=='analytics' ? 'active' :null }}">
                <a href="{{ route('frontend.user.project.analytics',$project_id) }}" class="tab-link">
                    <img src="{{url('images/dashboard/tab_section/analytics-center.png')}}" alt="">
                    <div class="text">Analytics Center</div>
                </a>
            </div>
            <div class="tab {{Request::segment(4)=='seo' ? 'active' :null }}">
                <a href="{{ route('frontend.user.project.seo',$project_id) }}" class="tab-link">
                    <img src="{{url('images/dashboard/tab_section/seo-report.png')}}" alt="">
                    <div class="text">SEO Report</div>
                </a>
            </div>
            <div class="tab {{Request::segment(4)=='security' ? 'active' :null }}">
                <a href="{{ route('frontend.user.project.security',$project_id) }}" class="tab-link">
                    <img src="{{url('images/dashboard/tab_section/security.png')}}" alt="">
                    <div class="text">Security</div>
                </a>
            </div>
        </div>
    @endif
</div>

<!-- <div class="subcription-block activated">
    <div class="active-overlay animate__animated animate__fadeIn">
        <div class="button-block">
            <div class="btn-group">
                <button type="button" class="act-btn ims-lite">
                    <i class="bi bi-file-earmark-text"></i>
                    <div class="text">iMS Lite</div>
                </button>
                <button type="button" class="act-btn">
                    <i class="bi bi-gear"></i>
                    <div class="text">Settings</div>
                </button>
                <button type="button" class="act-btn">
                    <i class="bi bi-code-slash"></i>
                    <div class="text">Add Script</div>
                </button>                
            </div>
            <div class="btn-group">
                <button type="button" class="act-btn delete">
                    <i class="bi bi-trash"></i>
                    <div class="text">Delete</div>
                </button>
            </div>
        </div>
    </div>
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
            <div class="text">Activated</div>
        </a>
    </div>
</div> -->



<!-- <div class="subcription-block">
    <div class="active-overlay animate__animated animate__fadeIn">
        <div class="button-block">
            <div class="btn-group">
                <button type="button" class="act-btn ims-lite">
                    <i class="bi bi-file-earmark-text"></i>
                    <div class="text">iMS Lite</div>
                </button>
                <button type="button" class="act-btn">
                    <i class="bi bi-gear"></i>
                    <div class="text">Settings</div>
                </button>
                <button type="button" class="act-btn">
                    <i class="bi bi-code-slash"></i>
                    <div class="text">Add Script</div>
                </button>                
            </div>
            <div class="btn-group">
                <button type="button" class="act-btn delete">
                    <i class="bi bi-trash"></i>
                    <div class="text">Delete</div>
                </button>
            </div>
        </div>
    </div>
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
</div> -->



<!-- <div class="subcription-block">
    <div class="active-overlay animate__animated animate__fadeIn">
        <div class="button-block">
            <div class="btn-group">
                <button type="button" class="act-btn ims-lite">
                    <i class="bi bi-file-earmark-text"></i>
                    <div class="text">iMS Lite</div>
                </button>
                <button type="button" class="act-btn">
                    <i class="bi bi-gear"></i>
                    <div class="text">Settings</div>
                </button>
                <button type="button" class="act-btn">
                    <i class="bi bi-code-slash"></i>
                    <div class="text">Add Script</div>
                </button>                
            </div>
            <div class="btn-group">
                <button type="button" class="act-btn delete">
                    <i class="bi bi-trash"></i>
                    <div class="text">Delete</div>
                </button>
            </div>
        </div>
    </div>
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
</div> -->



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

