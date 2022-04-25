<div class="seo-nav">
    <ul class="navbar-nav">
        <li class="nav-item {{Request::segment(5)=='overview' ? 'active' :null }}">
            <a href="#" class="nav-link">
                <div class="text-block">
                    <img src="{{url('images/dashboard/ims_pro/nav-overview.png')}}" alt="">
                    <div class="text">Overview</div>
                </div>
            </a>
        </li>
        <li class="nav-item {{Request::segment(5)=='seo' ? 'active' :null }}">
            <a href="#" class="nav-link">
                <div class="text-block">
                    <img src="{{url('images/dashboard/ims_pro/nav-behavior.png')}}" alt="">
                    <div class="text">SEO</div>
                </div>
            </a>
        </li>
        <li class="nav-item {{Request::segment(5)=='performance' ? 'active' :null }}">
            <a href="#" class="nav-link">
                <div class="text-block">
                    <img src="{{url('images/dashboard/ims_pro/nav-acquisitions.png')}}" alt="">
                    <div class="text">Performance</div>
                </div>
            </a>
        </li>
        <li class="nav-item {{Request::segment(5)=='miscellaneous' ? 'active' :null }}">
            <a href="#" class="nav-link">
                <div class="text-block">
                    <img src="{{url('images/dashboard/ims_pro/nav-miscellaneous.png')}}" alt="">
                    <div class="text">Miscellaneous</div>
                </div>
            </a>
        </li>
        <li class="nav-item {{Request::segment(5)=='seo-bot' ? 'active' :null }}">
            <a href="#" class="nav-link">
                <div class="text-block">
                    <img src="{{url('images/dashboard/ims_pro/nav-bot.png')}}" alt="">
                    <div class="text">SEO Bot</div>
                </div>
            </a>
        </li>
    </ul>
</div>