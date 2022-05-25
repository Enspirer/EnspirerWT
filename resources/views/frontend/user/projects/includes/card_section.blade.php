<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<div class="section-cards" id="sectionCards">
    <div class="cards">
        @if(App\Models\Projects::where('id',$project_id)->first()->selected_package == 'Optimizer' || App\Models\Projects::where('id',$project_id)->first()->selected_package == 'All In One Widget + IMS Pro')
            <div class="card {{Request::segment(3)=='widget' ? 'active' :null }}">
                <a href="{{route('frontend.user.project.chat',$project_id)}}" class="card-link disabled">
                    <img src="{{url('images/dashboard/main/widget-lite.png')}}" alt="">
                    <div class="text">Widget Lite</div>
                </a>
            </div>
        @else
            <div class="card {{Request::segment(3)=='widget' ? 'active' :null }}">
                <a href="{{route('frontend.user.project.chat',$project_id)}}" class="card-link">
                    <img src="{{url('images/dashboard/main/widget-lite.png')}}" alt="">
                    <div class="text">Widget Lite</div>
                </a>
            </div>
        @endif

        @if(App\Models\Projects::where('id',$project_id)->first()->selected_package == 'Optimizer')
            <div class="card {{Request::segment(3)=='widget_plus' ? 'active' :null }}">
                <a href="{{route('frontend.user.project.widget_plus',$project_id)}}" class="card-link disabled">
                    <img src="{{url('images/dashboard/main/widget-pro.png')}}" alt="">
                    <div class="text">Widget Pro</div>
                </a>
            </div>
        @else
            <div class="card {{Request::segment(3)=='widget_plus' ? 'active' :null }}">
                <a href="{{route('frontend.user.project.widget_plus',$project_id)}}" class="card-link">
                    <img src="{{url('images/dashboard/main/widget-pro.png')}}" alt="">
                    <div class="text">Widget Pro</div>
                </a>
            </div>
        @endif

        @if(App\Models\Projects::where('id',$project_id)->where('selected_package','Optimizer')->first() != null)

            <div class="card {{Request::segment(3)=='optimizer' ? 'active tab-active' :null }}">
                <a href="{{route('frontend.user.project.optimizer',$project_id)}}" class="card-link">
                    <img src="{{url('images/dashboard/main/optimizer.png')}}" alt="">
                    <div class="text">Optimizer</div>
                </a>
            </div>

        @else

            <div class="card {{Request::segment(3)=='optimizer' ? 'active' :null }}">
                <a href="{{route('frontend.user.project.optimizer',$project_id)}}" class="card-link">
                    <img src="{{url('images/dashboard/main/optimizer.png')}}" alt="">
                    <div class="text">Optimizer</div>
                </a>
            </div>

        @endif      
            
            <div class="card {{Request::segment(3)=='seo' ? 'active' :null }}">
                <a href="{{ route('frontend.user.project.seo',$project_id) }}" class="card-link">
                    <img src="{{url('images/dashboard/main/seo.png')}}" alt="">
                    <div class="text">SEO</div>
                </a>
            </div>
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
           <div class="tab {{Request::segment(4)=='heatmap' ? 'active' :null }}">
                <a href="{{ route('frontend.user.projects.heatmap',$project_id) }}" class="tab-link">
                    <img src="{{url('images/dashboard/tab_section/heatmap.png')}}" alt="">
                    <div class="text">Heatmap</div>
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

