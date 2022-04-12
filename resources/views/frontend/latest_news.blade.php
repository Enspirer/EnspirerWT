@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<link rel="stylesheet" href="{{url('css/news.css')}}">
    
@include('frontend.includes.home_nav')

<section class="splide section-news" id="newsSlider">
  <div class="splide__track">
	<ul class="splide__list">
		<li class="splide__slide">
			<div class="feature-block">
				<div class="image-block">
					<div class="label">Latest News</div>
					<img src="{{url('images/landing_page/news/feature-img-1.png')}}" alt="" class="feature-img">
				</div>
				<div class="content-block">
					<h2 class="title-light">Introducing</h2>
					<h2 class="title">All in one widgets</h2>
					<div class="text">When you use an application on your mobile phone or smart devices the application connects to the Internet and sends When you use an …</div>
					<a href="#" class="cta-btn-border">
						<span class="text">Read Story</span>
						<i class="bi bi-arrow-right-short"></i>
					</a>
				</div>
				<span class="count">01</span>
			</div>
		</li>
		<li class="splide__slide">
			<div class="feature-block">
				<div class="image-block">
					<img src="{{url('images/landing_page/news/feature-img-2.png')}}" alt="" class="feature-img">
				</div>
				<div class="content-block">
					<h2 class="title-light">Introducing</h2>
					<h2 class="title">All in one widgets</h2>
					<div class="text">When you use an application on your mobile phone or smart devices the application connects to the Internet and sends When you use an …</div>
					<a href="#" class="cta-btn-border">
						<span class="text">Read Story</span>
						<i class="bi bi-arrow-right-short"></i>
					</a>
				</div>
				<span class="count">02</span>
			</div>
		</li>
		<li class="splide__slide">
			<div class="feature-block">
				<div class="image-block">
					<img src="{{url('images/landing_page/news/feature-img-3.png')}}" alt="" class="feature-img">
				</div>
				<div class="content-block">
					<h2 class="title-light">Introducing</h2>
					<h2 class="title">All in one widgets</h2>
					<div class="text">When you use an application on your mobile phone or smart devices the application connects to the Internet and sends When you use an …</div>
					<a href="#" class="cta-btn-border">
						<span class="text">Read Story</span>
						<i class="bi bi-arrow-right-short"></i>
					</a>
				</div>
				<span class="count">03</span>
			</div>
		</li>
		<li class="splide__slide">
			<div class="feature-block">
				<div class="allNews-section">
					<div class="title">All News</div>
					<div class="splide news-slider" role="group" id="allNewsSlider">
						<div class="splide__track">
							<ul class="splide__list">
								<li class="splide__slide">
									<div class="news-card">
										<div class="image-block">
											<img src="{{url('images/landing_page/news/feature-img-2.png')}}" alt="" class="feature-img">
										</div>
										<div class="content-block">
											<div class="title">Introducing WhatsApp widget</div>
											<div class="text">When you use an application on your mobile phone or smart devices the application connects to the Internet</div>
											<div class="footer">
												<a href="#" class="btn-viewMore">View More</a>
											</div>
										</div>
									</div>
								</li>
								<li class="splide__slide">
									<div class="news-card">
										<div class="image-block">
											<img src="{{url('images/landing_page/news/feature-img-1.png')}}" alt="" class="feature-img">
										</div>
										<div class="content-block">
											<div class="title">Introducing WhatsApp widget</div>
											<div class="text">When you use an application on your mobile phone or smart devices the application connects to the Internet</div>
											<div class="footer">
												<a href="#" class="btn-viewMore">View More</a>
											</div>
										</div>
									</div>
								</li>
								<li class="splide__slide">
									<div class="news-card">
										<div class="image-block">
											<img src="{{url('images/landing_page/news/feature-img-3.png')}}" alt="" class="feature-img">
										</div>
										<div class="content-block">
											<div class="title">Introducing WhatsApp widget</div>
											<div class="text">When you use an application on your mobile phone or smart devices the application connects to the Internet</div>
											<div class="footer">
												<a href="#" class="btn-viewMore">View More</a>
											</div>
										</div>
									</div>
								</li>
								<li class="splide__slide">
									<div class="news-card">
										<div class="image-block">
											<img src="{{url('images/landing_page/news/feature-img-3.png')}}" alt="" class="feature-img">
										</div>
										<div class="content-block">
											<div class="title">Introducing WhatsApp widget</div>
											<div class="text">When you use an application on your mobile phone or smart devices the application connects to the Internet</div>
											<div class="footer">
												<a href="#" class="btn-viewMore">View More</a>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</li>
	</ul>
  </div>
</section>
    
@endsection

@push('after-scripts')

<script>
	var newsSlider = new Splide( '#newsSlider', {
	direction: 'ttb',
	height   : '100vh',
	wheel    : true,
	arrows	 : false,
	waitForTransition : true,
	classes: {
		pagination: 'splide__pagination slider-pagination',
		page      : 'splide__pagination__page slide-indicator',
  	},
	} );

	newsSlider.mount();

	var allNewsSlider = new Splide( '#allNewsSlider', {
	perPage: 3,
	rewind : false,
	arrows: true,
	pagination : false,
	fixedWidth : '400px',
	width : '1245px',
	gap: '1rem',
	breakpoints: {
		1349: {
			fixedWidth : '250px',
			width : '795px',
		},

		991: {
			width : '520px',
		},

		991: {
			fixedWidth : '300px',
			width : '350px',
		},
	}
	} );

	allNewsSlider.mount();
</script>

@endpush