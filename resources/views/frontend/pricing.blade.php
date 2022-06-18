@extends('frontend.layouts.app')

@section('title', 'Web Optimizer | Whatsapp chat widget | Heatmaps | Realtime users | Tallentor')
@section('meta_description', 'Optimise web performance with Tallentor Optimizer | real time user engagement with Optimizer mobile app, user heat maps, user session records, Chat invites, Analytic reports, SEO reports
Whatsapp chat widget to improve user engagement with inquiry management system')

@section('content')

<link rel="stylesheet" href="{{url('css/pricing.css')}}">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

@include('frontend.includes.home_nav')

<div class="pricing-section my-5">
    <div class="header">
        <h2 class="title">Best Plans For Your Business</h2>
        <div class="subtitle">Cost-Effective, Full Service, High Security</div>
    </div>
    <div class="content">
        <div data-aos-easing="ease" data-aos="zoom-in"  class="pricing-card basic-card">
            <div class="header">
                <img src="{{url('images/landing_page/pricing_section/basic-icon.png')}}" >
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
                    <div class="label blue">Desktop</div>
                    <li>
                        <i class="bi blue bi-check-circle-fill"></i>
                        <div class="text">All in one Chat Widget</div>
                    </li>
                    <li>
                        <i class="bi blue bi-check-circle-fill"></i>
                        <a href="{{url('/widget-lite')}}">
                            <div class="text">iMS <span class="pro-cat bg-blue">Lite</span><i class="bi bi-question-circle"></i></div>
                        </a>
                    </li>
                </ul>
                <img src="{{url('images/landing_page/pricing_section/basic-watermark.png')}}"  class="watermark">
            </div>
            <div class="footer">
                <a href="#" class="pricing-btn br-blue blue">Try Demo</a>
                <a href="#" class="pricing-btn bg-blue br-blue">Buy Now</a>
            </div>
        </div>
        <div data-aos-easing="ease" data-aos="zoom-in" data-aos-delay="300" class="pricing-card executive-card">
            <div class="header">
                <img src="{{url('images/landing_page/pricing_section/executive-icon.png')}}" >
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
                    <div class="label green">Desktop</div>
                    <li>
                        <i class="bi green bi-check-circle-fill"></i>
                        <div class="text">All in one Chat Widget</div>
                    </li>
                    <li>
                        <i class="bi green bi-check-circle-fill"></i>
                        <a href="{{url('/widget-pro')}}">
                            <div class="text">iMS <span class="pro-cat bg-red">Pro</span><i class="bi bi-question-circle"></i></div>
                        </a>
                    </li>
                </ul>
                <img src="{{url('images/landing_page/pricing_section/executive-watermark.png')}}"  class="watermark">
            </div>
            <div class="footer">
                <a href="#" class="pricing-btn br-green green">Try Demo</a>
                <a href="#" class="pricing-btn bg-green br-green">Buy Now</a>
            </div>
        </div>
        <div data-aos-easing="ease" data-aos="zoom-in" data-aos-delay="900" class="pricing-card optimizer-card">
            <div class="header">
                <img src="{{url('images/landing_page/pricing_section/optimizer-icon.png')}}" >
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
                    <div class="label purple">Desktop</div>
                    <li>
                        <i class="bi purple bi-check-circle-fill"></i>
                        <div class="text">All in one Chat Widget</div>
                    </li>
                    <li>
                        <i class="bi purple bi-check-circle-fill"></i>
                        <a href="{{url('/widget-pro')}}">
                            <div class="text">iMS <span class="pro-cat bg-red">Pro</span><i class="bi bi-question-circle"></i></div>
                        </a>
                    </li>
                    <li>
                        <i class="bi purple bi-check-circle-fill"></i>
                        <div class="text">Real Time View</div>
                    </li>
                    <li>
                        <i class="bi purple bi-check-circle-fill"></i>
                        <div class="text">Analytics Center</div>
                    </li>
                    <li>
                        <i class="bi purple bi-check-circle-fill"></i>
                        <div class="text">SEO Report</div>
                    </li>
                    <li>
                        <i class="bi purple bi-check-circle-fill"></i>
                        <div class="text">Session View</div>
                    </li>
                </ul>
                <ul class="option mobile">
                    <div class="label purple">Mobile</div>
                    <li>
                        <i class="bi purple bi-check-circle-fill"></i>
                        <div class="text">Realtime View</div>
                    </li>
                    <li>
                        <i class="bi purple bi-check-circle-fill"></i>
                        <div class="text">Invite Site View</div>
                    </li>
                    <li>
                        <i class="bi purple bi-check-circle-fill"></i>
                        <div class="text">Session View</div>
                    </li>
                </ul>
            </div>
            <div class="footer">
                <a href="#" class="pricing-btn br-purple purple">Try Demo</a>
                <a href="#" class="pricing-btn bg-purple br-purple">Buy Now</a>
            </div>
        </div>
        <div data-aos-easing="ease" data-aos="zoom-in" data-aos-delay="600" class="pricing-card premium-card">
            <div class="special">Popular</div>
            <div class="header">
                <img src="{{url('images/landing_page/pricing_section/premium-icon.png')}}" >
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
                    <div class="label yellow">Desktop</div>
                    <li>
                        <i class="bi yellow bi-check-circle-fill"></i>
                        <div class="text">All in one Chat Widget</div>
                    </li>
                    <li>
                        <i class="bi yellow bi-check-circle-fill"></i>
                        <a href="{{url('/widget-pro')}}">
                            <div class="text">iMS <span class="pro-cat bg-red">Pro</span><i class="bi bi-question-circle"></i></div>
                        </a>
                    </li>
                    <li>
                        <i class="bi yellow bi-check-circle-fill"></i>
                        <div class="text">Real Time View</div>
                    </li>
                    <li>
                        <i class="bi yellow bi-check-circle-fill"></i>
                        <div class="text">Analytics Center</div>
                    </li>
                    <li>
                        <i class="bi yellow bi-check-circle-fill"></i>
                        <div class="text">SEO Report</div>
                    </li>
                    <li>
                        <i class="bi yellow bi-check-circle-fill"></i>
                        <div class="text">Session View</div>
                    </li>
                    <li>
                        <i class="bi yellow bi-check-circle-fill"></i>
                        <div class="text">Security</div>
                    </li>
                    <li>
                        <i class="bi yellow bi-check-circle-fill"></i>
                        <div class="text">Heatmaps</div>
                    </li>
                </ul>
                <ul class="option mobile">
                    <div class="label yellow yellow">Mobile</div>
                    <li>
                        <i class="bi yellow bi-check-circle-fill"></i>
                        <div class="text">Realtime View</div>
                    </li>
                    <li>
                        <i class="bi yellow bi-check-circle-fill"></i>
                        <div class="text">Invite Site View</div>
                    </li>
                    <li>
                        <i class="bi yellow bi-check-circle-fill"></i>
                        <div class="text">Session View</div>
                    </li>
                </ul>
            </div>
            <div class="footer">
                <a href="#" class="pricing-btn br-yellow yellow">Try Demo</a>
                <a href="#" class="pricing-btn bg-yellow br-yellow">Buy Now</a>
            </div>
        </div>
        <div data-aos-easing="ease" data-aos="zoom-in" data-aos-delay="1200" class="pricing-card enterprise-card">
            <div class="header">
                <img src="{{url('images/landing_page/pricing_section/enterprise-icon.png')}}" >
                <div class="text-block">
                    <div class="title">Executive</div>
                </div>
            </div>
            <div class="body">
                <div class="para">Fully customized solution for <br> Corporates and Agencies</div>
                <img src="{{url('images/landing_page/pricing_section/enterprise-watermark.png')}}"  class="watermark">
            </div>
            <div class="footer">
                <a href="{{url('contact')}}" class="pricing-btn bg-dark-blue br-dark-blue">Contact</a>
            </div>
        </div>
    </div>
</div>

@include('frontend.includes.footer')

@endsection

@push('after-scripts')

<script>
  AOS.init();
</script>

@endpush
