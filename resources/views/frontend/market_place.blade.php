@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<link rel="stylesheet" href="{{url('css/categories.css')}}">
    
@include('frontend.includes.home_nav')

<section class="section-categories">
        <div class="container">
            <div class="header">
                <h2 class="title">Top Categories at Tallentor</h2>
                <div class="text">one place with thousands of creative talents</div>
            </div>
            <div class="row gx-0 gy-4 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1">
                <div class="col">
                    <div class="card blue-overlay">
                        <a href="#" class="inner-wrapper">
                            <div class="overlay">
                                <span class="big-circle"></span>
                                <span class="small-circle"></span>
                            </div>
                            <div class="content">
                                <div class="icon-block">
                                    <i class="bi bi-slack"></i>
                                </div>
                                <div class="title">Programming &
                                    Development</div>
                                <div class="resources">3,394
                                    <span>EXPERTS</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card green-overlay">
                        <a href="#" class="inner-wrapper">
                            <div class="overlay">
                                <span class="big-circle"></span>
                                <span class="small-circle"></span>
                            </div>
                            <div class="content">
                                <div class="icon-block">
                                    <i class="bi bi-slack"></i>
                                </div>
                                <div class="title">Digital Marketing</div>
                                <div class="resources">3,394
                                    <span>EXPERTS</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card yellow-overlay">
                        <a href="#" class="inner-wrapper">
                            <div class="overlay">
                                <span class="big-circle"></span>
                                <span class="small-circle"></span>
                            </div>
                            <div class="content">
                                <div class="icon-block">
                                    <i class="bi bi-slack"></i>
                                </div>
                                <div class="title">Graphic Designing</div>
                                <div class="resources">3,394
                                    <span>EXPERTS</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card red-overlay">
                        <a href="#" class="inner-wrapper">
                            <div class="overlay">
                                <span class="big-circle"></span>
                                <span class="small-circle"></span>
                            </div>
                            <div class="content">
                                <div class="icon-block">
                                    <i class="bi bi-slack"></i>
                                </div>
                                <div class="title">Art & Craft</div>
                                <div class="resources">3,394
                                    <span>EXPERTS</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card yellow-overlay">
                        <a href="#" class="inner-wrapper">
                            <div class="overlay">
                                <span class="big-circle"></span>
                                <span class="small-circle"></span>
                            </div>
                            <div class="content">
                                <div class="icon-block">
                                    <i class="bi bi-slack"></i>
                                </div>
                                <div class="title">Writing & Translation</div>
                                <div class="resources">3,394
                                    <span>EXPERTS</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card red-overlay">
                        <a href="#" class="inner-wrapper">
                            <div class="overlay">
                                <span class="big-circle"></span>
                                <span class="small-circle"></span>
                            </div>
                            <div class="content">
                                <div class="icon-block">
                                    <i class="bi bi-slack"></i>
                                </div>
                                <div class="title">Video & Photography</div>
                                <div class="resources">3,394
                                    <span>EXPERTS</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card green-overlay">
                        <a href="#" class="inner-wrapper">
                            <div class="overlay">
                                <span class="big-circle"></span>
                                <span class="small-circle"></span>
                            </div>
                            <div class="content">
                                <div class="icon-block">
                                    <i class="bi bi-slack"></i>
                                </div>
                                <div class="title">Music & Audio</div>
                                <div class="resources">3,394
                                    <span>EXPERTS</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card blue-overlay">
                        <a href="#" class="inner-wrapper">
                            <div class="overlay">
                                <span class="big-circle"></span>
                                <span class="small-circle"></span>
                            </div>
                            <div class="content">
                                <div class="icon-block">
                                    <i class="bi bi-slack"></i>
                                </div>
                                <div class="title">Business & Sales</div>
                                <div class="resources">3,394
                                    <span>EXPERTS</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('frontend.includes.footer')

    
@endsection

