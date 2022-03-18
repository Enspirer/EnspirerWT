<div class="data-header">
    <div class="inner-wrapper">
        <div class="icon-block">
            <div class="icon">
                <i class="bi bi-graph-up-arrow"></i>
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
                    <div class="precentage">20%</div>
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
                    <div class="count">{ number_format($totalPageviews, 0, __('.'), __(',')) }}</div>
                </div>
                <div class="info">
                    <div class="inner-content">
                        <div class="icon-main">
                            <i class="bi bi-activity"></i>
                        </div>
                        <div class="text">Sample Text Here</div>
                    </div>
                    <div class="precentage">20%</div>
                </div>
            </div>
        </div>
    </div>
</div>