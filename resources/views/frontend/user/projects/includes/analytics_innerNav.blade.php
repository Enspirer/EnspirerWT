<div class="data-tab">
    <ul class="navbar-nav">        
        <li class="nav-item">
            <a class="nav-link" href="{{ route('frontend.user.user_widget.analytics.overview', $project_id) }}">
                <div class="icon-primary"><i class="bi bi-clipboard-data"></i></div>
                <div class="text">Overview</div>
                <div class="icon-secondary"></div>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" id="behaviorDrop" data-bs-toggle="dropdown"
                aria-expanded="false">
                <div class="icon-primary"><i class="bi bi-layout-text-window"></i></div>
                <div class="text">Behavior</div>
                <div class="icon-secondary"><i class="bi bi-chevron-down"></i></div>
            </a>
            <ul class="dropdown-menu" aria-labelledby="behaviorDrop">
                <li><a class="dropdown-item" href="{{ route('frontend.user.user_widget.analytics.page', $project_id) }}">Pages</a></li>
                <li><a class="dropdown-item" href="{{ route('frontend.user.user_widget.analytics.landing_page', $project_id) }}">Landing Pages</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" id="acquisitionsDrop" data-bs-toggle="dropdown"
                aria-expanded="false">
                <div class="icon-primary"><i class="bi bi-boxes"></i></div>
                <div class="text">Acquisitions</div>
                <div class="icon-secondary"><i class="bi bi-chevron-down"></i></div>
            </a>
            <ul class="dropdown-menu" aria-labelledby="acquisitionsDrop">
                <li><a class="dropdown-item" href="{{ route('frontend.user.user_widget.analytics.referrers', $project_id) }}">Referrers</a></li>
                <li><a class="dropdown-item" href="{{ route('frontend.user.user_widget.analytics.search_engines', $project_id) }}">Search engines</a></li>
                <li><a class="dropdown-item" href="{{ route('frontend.user.user_widget.analytics.social_networks', $project_id) }}">Social networks</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ route('frontend.user.user_widget.analytics.campaigns', $project_id) }}">Campaigns</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" id="geographicDrop" data-bs-toggle="dropdown"
                aria-expanded="false">
                <div class="icon-primary"><i class="bi bi-globe2"></i></div>
                <div class="text">Geographic</div>
                <div class="icon-secondary"><i class="bi bi-chevron-down"></i></div>
            </a>
            <ul class="dropdown-menu" aria-labelledby="geographicDrop">
                <li><a class="dropdown-item" href="{{ route('frontend.user.user_widget.analytics.continents', $project_id) }}">Continents</a></li>
                <li><a class="dropdown-item" href="{{ route('frontend.user.user_widget.analytics.countries', $project_id) }}">Countries</a></li>
                <li><a class="dropdown-item" href="{{ route('frontend.user.user_widget.analytics.cities', $project_id) }}">Cities</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ route('frontend.user.user_widget.analytics.languages', $project_id) }}">Languages</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" id="technologyDrop" data-bs-toggle="dropdown"
                aria-expanded="false">
                <div class="icon-primary"><i class="bi bi-laptop"></i></div>
                <div class="text">Technology</div>
                <div class="icon-secondary"><i class="bi bi-chevron-down"></i></div>
            </a>
            <ul class="dropdown-menu" aria-labelledby="technologyDrop">
                <li><a class="dropdown-item" href="{{ route('frontend.user.user_widget.analytics.operating_systems', $project_id) }}">Operating systems</a></li>
                <li><a class="dropdown-item" href="{{ route('frontend.user.user_widget.analytics.browsers', $project_id) }}">Browsers</a></li>
                <li><a class="dropdown-item" href="{{ route('frontend.user.user_widget.analytics.screen_resolutions', $project_id) }}">Screen resolutions</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ route('frontend.user.user_widget.analytics.devices', $project_id) }}">Devices</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="{{ route('frontend.user.user_widget.analytics.events', $project_id) }}">
                <div class="icon-primary"><i class="bi bi-flag"></i></div>
                <div class="text">Events</div>
                <div class="icon-secondary"></div>
            </a>
        </li>
    </ul>
</div>