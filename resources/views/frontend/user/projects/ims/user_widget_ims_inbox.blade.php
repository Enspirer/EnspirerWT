@extends('frontend.layouts.widget_ims_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')


<section class="ims__section">
        @include('frontend.user.projects.includes.ims_sidebar')
            <div class="ims__main-col">
                @include('frontend.user.projects.includes.ims_navbar')
                
                <div class="row g-0">
                    <div class="col">
                        <!-- Content goes here -->
                        <div class="ims__body-container" id="ims__main-panel">
                            <div class="ims__inner-container">
                                <div class="row g-0">
                                    <div class="col">
                                        <ul class="breadcrumb">
                                            
                                            <li class="breadcrumb-item">
                                                <a class="breadcrumb-link">Conversations</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#" class="breadcrumb-link breadcrumb-arrow"><i
                                                        class="bi bi-chevron-right"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a class="breadcrumb-link breadcrumb-current">Inbox</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col">
                                        <section class="coversation-section ims__panel" id="ims__conversation">
                                            <div class="inbox--section ims__panel" id="ims__inbox">
                                              

                                            
                                                
                                            </div>        
                                        </section>
                                        
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </section>
    

@endsection



@push('after-scripts')

   

@endpush