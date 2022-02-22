@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    
@include('frontend.includes.home_nav')

    <h3 style="padding:100px;">Products</h3>

    @include('frontend.includes.footer')

    
@endsection

