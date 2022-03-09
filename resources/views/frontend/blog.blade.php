@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    
@include('frontend.includes.home_nav')

<link rel="stylesheet" href="{{url('css/contact_us.css')}}">

    <section class="slider-section">
        <div class="container">
            <div class="header">
                <h2 class="title">Blog Posts</h2>
            </div>

            <div class="row mb-5">    

                @if(count($posts) != 0)
                    @foreach($posts as $post)
                        <div class="col-12 col-md-4 mb-5 mt-4 mb-md-0" data-aos="flip-right" data-aos-duration="500" data-aos-delay="200">
                            <div class="card p-3 custom-shadow border-0" style="height:27rem; -webkit-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); -moz-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); box-shadow: inset 0px 0.5px 14px -8px rgba(0,0,0,0.75);">
                    
                                <a href="{{ route('frontend.solo_post', $post->id) }}"><img src="{{uploaded_asset( $post->feature_image )}}" class="card-img-top w-100" alt="..." style="object-fit:cover; height:210px;"></a>
                                <div class="card-body">                           
                                            
                                    <h5 class="card-text mt-3 mb-1" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;">{{ $post->title }}</h5>  

                                    <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">
                                        <p class="mt-3 mb-1">{!! $post->description !!}</p>                                       
                                    </div>
                                                                                                                
                                </div>
                                            
                            </div>
                        </div>
                    @endforeach   
                            
                @else
                    @include('frontend.includes.not_found',[
                        'not_found_title' => 'Posts not found',
                        'not_found_description' => null,
                        'not_found_button_caption' => null
                    ])
                @endif
            
            </div>

        </div>
    </section>

    

    @include('frontend.includes.footer')

    
@endsection