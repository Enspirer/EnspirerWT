@extends('frontend.layouts.app')

@section('title', 'Corporate web application| Mobile app development | Multivendor & E-commerce solutions')

@section('meta_description','Over 10 years of experience in the IT industry with proven track record in corporate web application development and mobile app development. Social media management and search Engine optimisation for small medium and Enterprise level businesses')



@section('content')

    <link rel="stylesheet" href="{{url('css/not_found.css')}}">

    @include('frontend.includes.home_nav')

    <section class="not-found-section">
        <div class="container">
            <div class="inner-wrapper">
                <div class="content-block">
                    <div class="title">Oops !</div>
                    <div class="subtitle">Page not found.</div>
                    <div class="text">The requested URL was not found on this server.</div>
                    <div class="button-block">
                        <a href="{{url('/')}}" class="cta-btn cta-btn-border">GO HOME</a>
                        <a href="{{url('contact')}}" class="cta-btn cta-btn-fill">Contact</a>
                    </div>
                </div>
                <div class="image-block">
                    <img src="{{url('images/404.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>

    @include('frontend.includes.footer')


@endsection

