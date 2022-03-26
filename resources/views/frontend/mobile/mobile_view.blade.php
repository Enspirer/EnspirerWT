@extends('frontend.layouts.mobile_app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    
@include('frontend.includes.home_nav')

<link rel="stylesheet" href="{{url('css/contact_us.css')}}">

    <section class="slider-section">
        <div class="container">
            <div class="header">
                <h2 class="title">Mobile View</h2>
            </div>
            
        </div>
    </section>

    




    @include('frontend.includes.footer')

    
@endsection

@push('after-scripts')


@endpush