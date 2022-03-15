<div class="row g-0 mb-5">
        <a href="{{ route('frontend.user.user_widget.ims_dashboard', $project_id) }}" target="_blank" class="ims-dashboard-btn">
            <lord-icon src="https://cdn.lordicon.com/yyecauzv.json" trigger="loop" style="width:65px;height:65px">
            </lord-icon>
            IMS Dashboard
        </a>
        <a href="{{ route('frontend.user.project_settings', $project_id) }}" class="ims-dashboard-btn ms-5">
        <i class="bi bi-gear"></i>
        {{App\Models\Projects::where('id',$project_id)->first()->name}} Account Settings
        </a>
</div>

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
        <!-- <a href="{{route('frontend.user.project.seo',$project_id)}}" style="text-decoration:none"> -->
        <a style="text-decoration:none">
            <div class="tabs p-2 {{Request::segment(3)=='seo' ? 'active' :null }}">
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
        <!-- <a href="{{route('frontend.user.project.analytics',$project_id)}}" style="text-decoration:none"> -->
        <a style="text-decoration:none">
            <div class="tabs p-2 {{Request::segment(3)=='analytics' ? 'active' :null }}">
                <div class="tab-icon">
                    <i class="bi bi-activity"></i>
                </div>
                <div class="tab-title">Analytics</div>
                <div class="tab-info">
                    <span class="strong-text">03</span>
                    Visitors
                </div>
            </div>
        </a>
    </div>
    <div class="col">
        <!-- <a href="{{route('frontend.user.project.security',$project_id)}}" style="text-decoration:none"> -->
        <a style="text-decoration:none">
            <div class="tabs p-2 {{Request::segment(3)=='security' ? 'active' :null }}">
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