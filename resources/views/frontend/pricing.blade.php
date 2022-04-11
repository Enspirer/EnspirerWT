@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<link rel="stylesheet" href="{{url('css/pricing.css')}}">
    
@include('frontend.includes.home_nav')

<div class="pricing-section my-5">
    <div class="container">
        <div class="header">
            <h2 class="title">Best Plans For Your Business</h2>
            <div class="subtitle">Cost-Effective, Full Service, High Security</div>
        </div>
        <div class="content">
            <div class="pricing-card basic-card">
                <div class="header">
                    <img src="{{url('images/landing_page/pricing_section/premium_icon.png')}}" alt="">
                    <div class="text-block">
                        <div class="title">Basic</div>
                    </div>
                    <div class="pricing-block">
                        <div class="wrapper">
                            <div class="currency">$</div>
                            <div class="fee">05<span>.00</span></div>
                        </div>
                        <div class="duration">per month</div>
                    </div>
                </div>
                <div class="body">
                    <ul class="option desktop">
                        <div class="label">Desktop</div>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">All in one Chat Widget</div>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <a href="{{url('/widget-lite')}}">
                                <div class="text">iMS <span class="pro-cat blue">Lite</span><i class="bi bi-question-circle"></i></div>
                            </a>
                        </li>
                        <li>
                            <i class="bi bi-x-circle"></i>
                            <div class="text dashed">iMS <span class="pro-cat">Pro</span></div>
                        </li>
                        <li>
                            <i class="bi bi-x-circle"></i>
                            <div class="text dashed">Real Time View</div>
                        </li>
                        <li>
                            <i class="bi bi-x-circle"></i>
                            <div class="text dashed">Analytics Center</div>
                        </li>
                        <li>
                            <i class="bi bi-x-circle"></i>
                            <div class="text dashed">Security</div>
                        </li>
                        <li>
                            <i class="bi bi-x-circle"></i>
                            <div class="text dashed">SEO Report</div>
                        </li>
                        <li>
                            <i class="bi bi-x-circle"></i>
                            <div class="text dashed">Heatmaps</div>
                        </li>
                    </ul>
                    <ul class="option mobile">
                        <div class="label">Mobile</div>
                        <li>
                            <i class="bi bi-x-circle"></i>
                            <div class="text dashed">Realtime View</div>
                        </li>
                        <li>
                            <i class="bi bi-x-circle"></i>
                            <div class="text dashed">Invite Site View</div>
                        </li>
                        <li>
                            <i class="bi bi-x-circle"></i>
                            <div class="text dashed">Security</div>
                        </li>
                        <li>
                            <i class="bi bi-x-circle"></i>
                            <div class="text dashed">Session View</div>
                        </li>
                        <li>
                            <i class="bi bi-x-circle"></i>
                            <div class="text dashed">Heat Maps</div>
                        </li>
                    </ul>
                </div>
                <div class="footer">
                    <a href="#" class="pricing-btn">Free Trial</a>
                    <a href="#" class="pricing-btn btn-buy">Buy Now</a>
                </div>
            </div>
            <div class="pricing-card executive-card">
                <div class="header">
                    <img src="{{url('images/landing_page/pricing_section/basic_icon.png')}}" alt="">
                    <div class="text-block">
                        <div class="title">Executive</div>
                    </div>
                    <div class="pricing-block">                        
                        <div class="wrapper">
                            <div class="currency">$</div>
                            <div class="fee">15<span>.00</span></div>
                        </div>
                        <div class="duration">per month</div>
                    </div>
                </div>
                <div class="body">
                    <ul class="option desktop">
                        <div class="label">Desktop</div>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">All in one Chat Widget</div>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <a href="{{url('/widget-lite')}}">
                                <div class="text">iMS <span class="pro-cat blue">Lite</span><i class="bi bi-question-circle"></i></div>
                            </a>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <a href="{{url('/widget-pro')}}">
                                <div class="text">iMS <span class="pro-cat red">Pro</span><i class="bi bi-question-circle"></i></div>
                            </a>
                        </li>
                        <li>
                            <i class="bi bi-x-circle"></i>
                            <div class="text dashed">Real Time View</div>
                        </li>
                        <li>
                            <i class="bi bi-x-circle"></i>
                            <div class="text dashed">Analytics Center</div>
                        </li>
                        <li>
                            <i class="bi bi-x-circle"></i>
                            <div class="text dashed">Security</div>
                        </li>
                        <li>
                            <i class="bi bi-x-circle"></i>
                            <div class="text dashed">SEO Report</div>
                        </li>
                        <li>
                            <i class="bi bi-x-circle"></i>
                            <div class="text dashed">Heatmaps</div>
                        </li>
                    </ul>
                    <ul class="option mobile">
                        <div class="label">Mobile</div>
                        <li>
                            <i class="bi bi-x-circle"></i>
                            <div class="text dashed">Realtime View</div>
                        </li>
                        <li>
                            <i class="bi bi-x-circle"></i>
                            <div class="text dashed">Invite Site View</div>
                        </li>
                        <li>
                            <i class="bi bi-x-circle"></i>
                            <div class="text dashed">Security</div>
                        </li>
                        <li>
                            <i class="bi bi-x-circle"></i>
                            <div class="text dashed">Session View</div>
                        </li>
                        <li>
                            <i class="bi bi-x-circle"></i>
                            <div class="text dashed">Heat Maps</div>
                        </li>
                    </ul>
                </div>
                <div class="footer">
                    <a href="#" class="pricing-btn">Try Demo</a>
                    <a href="#" class="pricing-btn btn-buy">Buy Now</a>
                </div>
            </div>
            <div class="pricing-card premium-card">
                <div class="special">Popular</div>
                <div class="header">
                    <img src="{{url('images/landing_page/pricing_section/standard_icon.png')}}" alt="">
                    <div class="text-block">
                        <div class="title">Premium</div>
                    </div>
                    <div class="pricing-block">
                        <div class="wrapper">
                            <div class="currency">$</div>
                            <div class="fee">30<span>.00</span></div>
                        </div>
                        <div class="duration">per month</div>
                    </div>
                </div>
                <div class="body">
                    <ul class="option desktop">
                        <div class="label">Desktop</div>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">All in one Chat Widget</div>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <a href="{{url('/widget-lite')}}">
                                <div class="text">iMS <span class="pro-cat blue">Lite</span><i class="bi bi-question-circle"></i></div>
                            </a>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <a href="{{url('/widget-pro')}}">
                                <div class="text">iMS <span class="pro-cat red">Pro</span><i class="bi bi-question-circle"></i></div>
                            </a>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">Real Time View</div>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">Analytics Center</div>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">Security</div>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">SEO Report</div>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">Heatmaps</div>
                        </li>
                    </ul>
                    <ul class="option mobile">
                        <div class="label">Mobile</div>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">Realtime View</div>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">Invite Site View</div>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">Security</div>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">Session View</div>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="text">Heat Maps</div>
                        </li>
                    </ul>
                </div>
                <div class="footer">
                    <a href="#" class="pricing-btn">Try Demo</a>
                    <a href="#" class="pricing-btn btn-buy">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('frontend.includes.footer')

@endsection
