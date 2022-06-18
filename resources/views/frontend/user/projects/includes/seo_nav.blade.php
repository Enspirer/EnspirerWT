<div class="seo-nav" id="seoNav">
    <ul class="navbar-nav">

        @if(Request::segment(3)=='seo_bots' ? 'active' :null)
            <li class="nav-item">
                <a href="{{route('frontend.user.project.seo',$project_id)}}" class="nav-link">
                    <div class="text-block">
                        <img src="{{url('images/dashboard/ims_pro/nav-overview.png')}}" >
                        <div class="text">Overview</div>
                    </div>
                </a>
            </li>
        @else 
            <li class="nav-item">
                <a href="#overviewSection" class="nav-link">
                    <div class="text-block">
                        <img src="{{url('images/dashboard/ims_pro/nav-overview.png')}}" >
                        <div class="text">Overview</div>
                    </div>
                </a>
            </li>
        @endif


        @if(Request::segment(3)=='seo_bots' ? 'active' :null)
            <li class="nav-item">
                <a href="{{route('frontend.user.project.seo',$project_id)}}" class="nav-link">
                    <div class="text-block">
                        <img src="{{url('images/dashboard/ims_pro/nav-behavior.png')}}" >
                        <div class="text">SEO</div>
                    </div>
                </a>
            </li>
        @else
            <li class="nav-item">
                <a href="#seoSection" class="nav-link">
                    <div class="text-block">
                        <img src="{{url('images/dashboard/ims_pro/nav-behavior.png')}}" >
                        <div class="text">SEO</div>
                    </div>
                </a>
            </li>
        @endif


        @if(Request::segment(3)=='seo_bots' ? 'active' :null)
            <li class="nav-item">
                <a href="{{route('frontend.user.project.seo',$project_id)}}" class="nav-link">
                    <div class="text-block">
                        <img src="{{url('images/dashboard/ims_pro/nav-acquisitions.png')}}" >
                        <div class="text">Performance</div>
                    </div>
                </a>
            </li>
        @else
            <li class="nav-item">
                <a href="#performanceSection" class="nav-link">
                    <div class="text-block">
                        <img src="{{url('images/dashboard/ims_pro/nav-acquisitions.png')}}" >
                        <div class="text">Performance</div>
                    </div>
                </a>
            </li>
        @endif



        @if(Request::segment(3)=='seo_bots' ? 'active' :null)
            <li class="nav-item">
                <a href="{{route('frontend.user.project.seo',$project_id)}}" class="nav-link">
                    <div class="text-block">
                        <img src="{{url('images/dashboard/ims_pro/nav-miscellaneous.png')}}" >
                        <div class="text">Miscellaneous</div>
                    </div>
                </a>
            </li>
        @else            
            <li class="nav-item">
                <a href="#miscellaneousSection" class="nav-link">
                    <div class="text-block">
                        <img src="{{url('images/dashboard/ims_pro/nav-miscellaneous.png')}}" >
                        <div class="text">Miscellaneous</div>
                    </div>
                </a>
            </li>
        @endif

        <li class="nav-item">
            <a href="{{route('frontend.user.project.seo_bots',$project_id)}}" class="nav-link">
                <div class="text-block">
                    <img src="{{url('images/dashboard/ims_pro/nav-bot.png')}}" >
                    <div class="text">SEO Bot</div>
                </div>
            </a>
        </li>
    </ul>
</div>