@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<link rel="stylesheet" href="{{url('css/news.css')}}">
    
@include('frontend.includes.home_nav')

<section class="splide section-news" id="newsSlider">
  <div class="splide__track">
	<ul class="splide__list">

		@if($posts == null || count($posts) == 0)
			<li class="splide__slide">
				<div class="feature-block">
					@include('frontend.includes.not_found',[
						'not_found_title' => 'Data not found',
						'not_found_description' => null,
						'not_found_button_caption' => null
					])
				</div>
			</li>
        @else
			@foreach($posts as $key => $post)
				<li class="splide__slide">
					<div class="feature-block">
						<div class="image-block">
							<!-- <div class="label">Latest News</div> -->
							<img src="{{uploaded_asset($post->feature_image)}}" alt="" class="feature-img">
						</div>
						<div class="content-block">
							<!-- <h2 class="title-light">Introducing</h2> -->
							<h2 class="title">{{$post->title}}</h2>
							<div class="text" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">{!!$post->description!!}</div>
							<a href="{{route('frontend.single_news',$post->id)}}" class="cta-btn-border">
								<span class="text">Read Story</span>
								<i class="bi bi-arrow-right-short"></i>
							</a>
						</div>
						<span class="count">{{$key + 1}}</span>
					</div>
				</li>
			@endforeach
		@endif
		
		<li class="splide__slide">
			<div class="feature-block">
				<div class="allNews-section">
					<div class="title">All News</div>
					<div class="splide news-slider" role="group" id="allNewsSlider">
						<div class="splide__track">
							<ul class="splide__list">
								@if($all_posts == null || count($all_posts) == 0)								
									@include('frontend.includes.not_found',[
										'not_found_title' => 'Data not found',
										'not_found_description' => null,
										'not_found_button_caption' => null
									])
								@else
									@foreach($all_posts as $all_post)
										<li class="splide__slide">
											<div class="news-card">
												<div class="image-block">
													<img src="{{uploaded_asset($all_post->feature_image)}}" alt="" class="feature-img">
												</div>
												<div class="content-block">
													<div class="title">{{$post->title}}</div>
													<div class="text" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">{!!$post->description!!}</div>
													<div class="footer">
														<a href="{{route('frontend.single_news',$all_post->id)}}" class="btn-viewMore">View More</a>
													</div>
												</div>
											</div>
										</li>
									@endforeach
								@endif								
								
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