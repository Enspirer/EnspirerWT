@if (config('services.bitbucket.active'))
    <a href='{{ route('frontend.auth.social.login', 'bitbucket') }}' class='btn btn-sm btn-outline-info m-1'><i class='fab fa-bitbucket'></i> @lang('labels.frontend.auth.login_with', ['social_media' => 'BitBucket'])</a>
@endif

@if (config('services.facebook.active'))
    <a href="{{ route('frontend.auth.social.login', 'facebook') }}" class="social-signup-btn">
        <img src="{{url('images/fb.png')}}"
             alt="">
    </a>
@endif

@if (config('services.google.active'))
    <a href="{{ route('frontend.auth.social.login', 'google') }}" class="social-signup-btn">
        <img src="{{url('images/google.png')}}" alt="">
    </a>
@endif

@if (config('services.github.active'))
    <a href="{{ route('frontend.auth.social.login', 'github') }}" class="social-signup-btn">
        <img src="{{url('images/github.png')}}"
             alt="">
    </a>
@endif

@if (config('services.linkedin.active'))
    <a href='{{ route('frontend.auth.social.login', 'linkedin') }}' class='btn btn-sm btn-outline-info m-1'><i class='fab fa-linkedin'></i> @lang('labels.frontend.auth.login_with', ['social_media' => 'LinkedIn'])</a>
@endif

@if (config('services.twitter.active'))
    <a href='{{ route('frontend.auth.social.login', 'twitter') }}' class='btn btn-sm btn-outline-info m-1'><i class='fab fa-twitter'></i> @lang('labels.frontend.auth.login_with', ['social_media' => 'Twitter'])</a>
@endif

