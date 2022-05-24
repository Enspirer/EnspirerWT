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
                                <li class="breadcrumb-item active">Payment Checkout</li>
                            </ul>
                        </div>

                        <!-- Dashboard -->

                        <section class="section-project-reports">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default" style="margin-top: 60px;">

                                            @if ($message = Session::get('success'))
                                                <div class="custom-alerts alert alert-success fade in">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                                    {!! $message !!}
                                                </div>
                                                <?php Session::forget('success');?>
                                            @endif

                                            @if ($message = Session::get('error'))
                                                <div class="custom-alerts alert alert-danger fade in">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                                    {!! $message !!}
                                                </div>
                                                <?php Session::forget('error');?>
                                            @endif

                                            @if(isset($project_details))
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <p>Project Details</p>
                                                                        <h3>{{$project_details->name}} - {{$project_details->url}}</h3>
                                                                        <br>
                                                                        <p>Package Name</p>
                                                                        <h3>{{$package_details['package_name']}}</h3><br>

                                                                        <div>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo nunc vitae ante vestibulum varius. Vivamus in hendrerit dolor. Nullam et arcu interdum mi sagittis dignissim. Sed in arcu ex. Integer venenatis dui a sodales ultrices. Proin porta, massa vitae venenatis porttitor, justo libero eleifend orci, a iaculis massa sem vitae nisl. Fusce eu suscipit magna, id faucibus magna.</p>
                                                                            <h4>USD {{ number_format($package_details['package_cost_per_month'],2)}} - (Per Month)</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div>
                                                                            <h3>Total Cost: USD {{number_format($package_details['total_amount'],2)}}</h3><br>

                                                                            <h3>Includes</h3><br>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <ul>
                                                                                        <li style="font-size: 17px">Heatmap</li>
                                                                                        <li style="font-size: 17px">SEO</li>
                                                                                        <li style="font-size: 17px">Security</li>

                                                                                    </ul>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <ul>
                                                                                        <li style="font-size: 17px">IMS Pro</li>
                                                                                        <li style="font-size: 17px">All in One Chat Widget</li>
                                                                                        <li style="font-size: 17px">Website Analytics</li>
                                                                                    </ul>

                                                                                </div>
                                                                            </div>

                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo nunc vitae ante vestibulum varius Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo nunc vitae ante vestibulum varius</p>

                                                                        </div>

                                                                        <form class="form-horizontal" method="POST" id="payment-form" role="form" action="{{route('frontend.user.paypal.show')}}" >
                                                                            {{ csrf_field() }}

                                                                            <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                                                                                <div class="col-md-6">
                                                                                    <input id="amount" type="hidden" class="form-control" name="amount" value="{{number_format($package_details['total_amount'],2)}}" autofocus>
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <div class="col-md-6 col-md-offset-4">
                                                                                    <button type="submit" class="btn btn-primary" style="font-size: 17px">
                                                                                        USD : {{number_format($package_details['total_amount'],2)}} - Pay it Now
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>


                                                    </div>
                                            @else
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <br>
                                                                        <h1 style="text-align: center">Invalid Project</h1>
                                                                        <br>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tincidunt tristique accumsan. Vivamus purus sapien, elementum vitae cursus id, egestas sed enim. Aenean nec fringilla metus. Aenean semper arcu nisi, eu auctor ex convallis eu. Etiam vel ex congue dolor varius malesuada scelerisque sed enim</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('after-scripts')



@endpush
