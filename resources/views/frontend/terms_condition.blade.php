@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    
@include('frontend.includes.home_nav')

<section style="padding:120px 0 80px;">
    <div class="container">
        <h2 class="mb-5">Privacy Policy || Terms & Conditions</h2>

        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit accusantium ipsum cumque consequatur incidunt totam quibusdam numquam! Quas sed dicta suscipit cupiditate iure similique, nemo ratione mollitia quos odit repellendus?</p>
        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit accusantium ipsum cumque consequatur incidunt totam quibusdam numquam! Quas sed dicta suscipit cupiditate iure similique, nemo ratione mollitia quos odit repellendus?</p>
        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit accusantium ipsum cumque consequatur incidunt totam quibusdam numquam! Quas sed dicta suscipit cupiditate iure similique, nemo ratione mollitia quos odit repellendus?</p>
        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit accusantium ipsum cumque consequatur incidunt totam quibusdam numquam! Quas sed dicta suscipit cupiditate iure similique, nemo ratione mollitia quos odit repellendus?</p>
        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit accusantium ipsum cumque consequatur incidunt totam quibusdam numquam! Quas sed dicta suscipit cupiditate iure similique, nemo ratione mollitia quos odit repellendus?</p>
    </div>
</section>

@include('frontend.includes.footer')

    
@endsection