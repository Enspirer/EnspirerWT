@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/projects.css')}}">
   

    <section id="sectionMainWindow">
        @include('frontend.includes.sidebar')

        <div id="sectionBody">
            @include('frontend.includes.nav')
            
            <!-- Content goes here -->
            <div class="row g-0">
                <div class="section-content">
                    <div class="section-container">
                        <div class="breadcrumb-block">
                            <ul class="breadcrumb mb-5">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active">Notifications</li>
                            </ul>
                        </div>

                        <!-- Dashboard -->

                        <section class="section-project-reports">
                            <div class="row g-0">
                                <div class="header">
                                    <div class="title">Notifications</div>
                                    
                                </div>
                            </div>

                            @if(count(App\Models\Notification::where('user_id',auth()->user()->id)->get()) != 0)
                                @foreach(App\Models\Notification::where('user_id',auth()->user()->id)->orderBy('id','desc')->take(15)->get() as $notification)
                                    @if($notification->status == 'Pending')                                                        
                                        <a href="{{route('frontend.user.user_notifications_status',$notification->id)}}" class="list-group-item list-group-item-action" aria-current="true">
                                            <div class="w-100 justify-content-between">

                                                <div class="row p-2">
                                                    <div class="col-1">
                                                        <i class="{{$notification->icon}} mt-2 ms-3" style="font-size:24px;"></i>
                                                    </div>
                                                    <div class="col-9">
                                                        <h5 class="mb-1 ms-1" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;">{{$notification->title}}</h5>
                                                        <p class="mb-1 ms-1" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                            {{$notification->description}}
                                                        </p>
                                                        <!-- <small>And some small print.</small> -->
                                                    </div>
                                                    <div class="col-2 mt-3">
                                                        <small>{{$notification->created_at->diffForHumans()}}</small>
                                                    </div>
                                                </div>

                                            </div>                                                                   
                                        </a>
                                    @else
                                        <a href="{{route('frontend.user.user_notifications_status',$notification->id)}}" class="list-group-item list-group-item-action" style="color: #999;" aria-current="true">
                                            <div class="w-100 justify-content-between">
                                                                        
                                                <div class="row p-2">
                                                    <div class="col-1">
                                                        <i class="{{$notification->icon}} mt-2 ms-3" style="font-size:24px;"></i>
                                                    </div>
                                                    <div class="col-9">
                                                        <h5 class="mb-1 ms-1" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;">{{$notification->title}}</h5>
                                                        <p class="mb-1 ms-1" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                            {{$notification->description}}
                                                        </p>
                                                        <!-- <small>And some small print.</small> -->
                                                    </div>
                                                    <div class="col-2 mt-3">
                                                        <small>{{$notification->created_at->diffForHumans()}}</small>
                                                    </div>
                                                </div>

                                            </div>
                                        </a>
                                    @endif
                                @endforeach
                            @endif
                                                 
                            
                        </section>


                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@push('after-scripts')

   

@endpush