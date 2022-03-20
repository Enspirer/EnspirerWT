<div class="data-header">
    <div class="inner-wrapper">

        <div class="icon-block">
            <div class="icon">
                @if(calcGrowth($totalVisitors, $totalVisitorsOld) > 0)
                    <i class="bi bi-graph-up-arrow"></i>
                @elseif(calcGrowth($totalVisitors, $totalVisitorsOld) < 0)
                    <i class="bi bi-graph-down-arrow"></i>
                @else
                    @if($totalVisitors == $totalVisitorsOld && $totalVisitors > 0)
                    <!-- Constant -->
                        <div class="text-muted">
                            —
                        </div>
                    @elseif(!$totalVisitorsOld)
                        <div class="text-muted text-truncate">
                            {{ __('No prior data') }}
                        </div>
                    @else
                        <div class="text-muted text-truncate">
                            {{ __('No current data') }}
                        </div>
                    @endif
                @endif


            </div>
        </div>
        <div class="info-block">
            <div class="block-1">
                <div class="header">
                    <div class="inner-content">
                        <div class="primary-icon">
                            <i class="bi bi-check-square-fill"></i>
                        </div>
                        <div class="title">Total Visitors</div>
                        <div class="secondary-icon">
                            <i class="bi bi-info-circle"></i>
                        </div>
                    </div>
                    <div class="count">{{ number_format($totalVisitors, 0, __('.'), __(',')) }}</div>
                </div>
                <div class="info">
                    <div class="inner-content">
                        <div class="icon-main">
                            <i class="bi bi-activity"></i>
                        </div>
                        <div class="text">Sample Text Here</div>
                    </div>
                    <div class="precentage"> {{ str_replace(['-', __('.') . '0'], '', number_format(calcGrowth($totalPageviews, $totalPageviewsOld), 1, __('.'), __(','))) }}%</div>
                </div>
            </div>
            <div class="block-2">
                <div class="header">
                    <div class="inner-content">
                        <div class="primary-icon">
                            <i class="bi bi-check-square-fill"></i>
                        </div>
                        <div class="title">Page Views</div>
                        <div class="secondary-icon">
                            <i class="bi bi-info-circle"></i>
                        </div>
                    </div>
                    <div class="count">{{ number_format($totalPageviews, 0, __('.'), __(',')) }}</div>
                </div>
                <div class="info">
                    <div class="inner-content">
                        <div class="icon-main">
                            <i class="bi bi-activity"></i>
                        </div>
                        <div class="text">Sample Text Here</div>
                    </div>
                    <div class="precentage">{{ str_replace(['-', __('.') . '0'], '', number_format(calcGrowth($totalPageviews, $totalPageviewsOld), 1, __('.'), __(','))) }}%</div>
                </div>
            </div>
        </div>
    </div>
</div>