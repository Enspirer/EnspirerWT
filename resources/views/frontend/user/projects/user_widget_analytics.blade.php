@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')


    <section id="sectionMainWindow">
        @include('frontend.includes.sidebar')

        <div id="sectionBody">
        @include('frontend.includes.nav')

        <!-- Content goes here -->
            <div class="row g-0">
                <div class="section-content">
                    <div class="section-container">

                        <!-- Section Reports Main End -->

                        <div class="breadcrumb-block">
                            <ul class="breadcrumb mb-5">
                                <li class="breadcrumb-item"><a href="{{route('frontend.user.project.index')}}">Projects</a></li>
                                <li class="breadcrumb-item">{{App\Models\Projects::where('id',$project_id)->first()->name}}</li>
                                <li class="breadcrumb-item">Analytics</li>
                                <li class="breadcrumb-item active">Statics Settings</li>
                            </ul>
                        </div>

                        <section id="sectionWhatsappWidget">
                            @include('frontend.user.projects.dialogs.widget_source')
                        </section>

                        <section>
                            <div class="card" style="font-size: 15px;">
                                <div class="card-body">
                                    <form action="" method="post">
                                        {{csrf_field()}}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>URL:</label>
                                                    <input type="text" class="form-control" value="{{\App\Models\Projects::where('id',$project_id)->first()->url}}" readonly="true">
                                                </div> <br>
                                                <div class="form-group">
                                                    <label>Email Notification:</label>
                                                    <select class="form-control">
                                                        <option value="true">Enabled</option>
                                                        <option value="false">Disabled</option>
                                                    </select>
                                                </div> <br>
                                                <div class="form-group">
                                                    <label>Exclude IP:</label>
                                                    <textarea type="text" class="form-control" style="height: 100px;"></textarea>
                                                </div> <br>
                                                <div class="form-group">
                                                    <label>Exclude URL query parameters:</label>
                                                    <input type="text" class="form-control">
                                                </div> <br>
                                                <a href="{{route('frontend.user.project.analytics',$project_id)}}" class="btn btn-primary">Save Settings</a>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="i-tracking-code" >Include this code in the <code>&lt;head&gt;</code> or <code>&lt;body&gt;</code> section of your website.</label>
                                                    <textarea name="tracking_code" class="form-control"  style="height: 100px;" rows="3" onclick="this.select();" readonly="">&lt;script data-host="http://localhost/analytics_api_engine/public" data-dnt="false" src="http://localhost/analytics_api_engine/public/js/script.js" id="ZwSg9rf6GA" async defer&gt;&lt;/script&gt;</textarea>
                                                </div>
                                                <div class=""><br>
                                                    <p>The first step you’ll need to do is find your tracking ID, which is a unique ID created for your Google Analytics account.</p>
                                                    <ol>
                                                        <li>Log in to your Google Analytics account</li>
                                                        <li>On the bottom left-hand side of the page, click <strong>Admin</strong></li>
                                                        <li>From the left column titled <strong>Account</strong>, select an account from the dropdown menu</li>
                                                        <li>From the middle column titled <strong>Property</strong>, select a property from the dropdown menu</li>
                                                        <li>Under the Property column, click <strong>Tracking Info &gt; Tracking Code</strong></li>
                                                        <li>Your website’s unique tracking ID is shown at the top of the page under <strong>Tracking ID</strong> and starts with UA</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>


                                    </form>
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

<script>
    $(window).on('load', function () {
        $('#overlay').modal('show');
    });
    $("#close-btn").click(function () {
        $('#overlay').modal('hide');
    });
</script>

<script>
    $('.delete').on('click', function () {
        let link = $(this).attr('href');
        $('.modal-footer a').attr('href', link);
    })
</script>

@endpush



