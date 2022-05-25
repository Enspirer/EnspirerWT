@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/reports.css')}}">
<link rel="stylesheet" href="{{url('css/projects.css')}}">
<link rel="stylesheet" href="{{url('css/billing.css')}}">

@include('frontend.includes.mobile_nav')      

<section id="sectionMainWindow">
        @include('frontend.includes.sidebar')

    <div id="sectionBody">
            @include('frontend.includes.nav')
            
            <!-- Content goes here -->
        <div class="row g-0">
            <div class="section-content">
                <div class="section-container">


            <!-- Section Billing Main -->

                <div class="section-header">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item"><i class="bi bi-chevron-right"></i></li>
                        <li class="breadcrumb-item"><span>Billing</span></li>
                    </ul>
                </div>

                @if(count($projects) == 0)
                    <!-- @include('frontend.includes.not_found',[
                        'not_found_title' => 'Data not found',
                        'not_found_description' => null,
                        'not_found_button_caption' => null
                    ]) -->
                    <img src="{{url('images/dashboard/optimizer/not_found.png')}}" alt="" class="realtime_notfound">
                @else
                    @foreach($projects as $project_detail)
                        @if($project_detail->status != 'Disabled')
                            <div class="row g-0">
                                <div class="webProperty-block">
                                    <div class="header">
                                        <div class="info-block">
                                            <div class="title">{{$project_detail->name}}</div>
                                            <div class="url">{{$project_detail->url}}</div>
                                        </div>
                                        @if($project_detail->selected_package != null)
                                            <div class="sub-block">   
                                                <div class="sub-type">{{$project_detail->selected_package}}</div>
                                                <div class="lbl lbl-start">Bill Start Date</div>
                                                <div class="lbl lbl-end">Bill End Date</div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" progress-color aria-valuemin="0" style="width: {{get_expire_date($project_detail->id)['remaining_days'] / 30 * 100}}%;" aria-valuemax="100"></div>
                                                </div>
                                                <div class="date date-start">{{$project_detail->package_starting_date}}</div>
                                                <div class="date date-end">{{$project_detail->expire_date}}</div>
                                                <!-- <div class="text">Not Selected</div> -->
                                            </div>
                                        @else
                                            <div class="sub-block">  
                                                <div class="sub-type">Not Selected</div>
                                            </div>
                                        @endif

                                        <div class="button-block">
                                            <a href="{{route('frontend.user.project.chat',$project_detail->id)}}" type="button" class="btn btn-view"><i class="bi bi-x-diamond-fill"></i>View</a>
                                            <a href="{{ route('frontend.user.project_dash.destroy', $project_detail->id) }}" class="delete btn btn-delete" data-bs-toggle="modal" data-bs-target="#deletedashwidget"><i
                                                    class="bi bi-trash"></i>Delete</a>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <div class="content-block">
                                            <div class="image-block">
                                                <img src="{{url('images/dashboard/main/unpaid_invoices.png')}}" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="subtitle">Unpaid invoices</div>
                                                @if(App\Models\BillingInvoice::where('project_id',$project_detail->id)->where('status','Unpaid')->first() == null)
                                                    <div class="text">You don't have unpaid invoices</div>
                                                @else
                                                    <div class="text">You have unpaid invoices</div>
                                                @endif
                                                <a href="{{route('frontend.user.unpaid_invoices',$project_detail->id)}}" class="link">Go to Unpaid invoices</a>
                                            </div>
                                        </div>
                                        <div class="content-block">
                                            <div class="image-block">
                                                <img src="{{url('images/dashboard/main/services.png')}}" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="subtitle">Services</div>
                                                <div class="text">1 service has auto-renewal turned-off</div>
                                                <a href="#" class="link">Go to Services</a>
                                            </div>
                                        </div>
                                        <div class="content-block">
                                            <div class="image-block">
                                                <img src="{{url('images/dashboard/main/payment_history.png')}}" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="subtitle">Payment history</div>
                                                <div class="text">Find all your payments and their invoices</div>
                                                <a href="{{route('frontend.user.paid_invoices',$project_detail->id)}}" class="link">Go to Payment history</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="row g-0">
                                <div class="webProperty-block disabled">
                                    <div class="header">
                                        <div class="info-block">
                                            <div class="title">{{$project_detail->name}}</div>
                                            <div class="url">{{$project_detail->url}}</div>
                                        </div>
                                        @if($project_detail->selected_package != null)
                                            <div class="sub-block">   
                                                <div class="sub-type">{{$project_detail->selected_package}}</div>
                                                <div class="lbl lbl-start">Bill Start Date</div>
                                                <div class="lbl lbl-end">Bill End Date</div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" progress-color aria-valuemin="0" style="width: {{get_expire_date($project_detail->id)['remaining_days'] / 30 * 100}}%;" aria-valuemax="100"></div>
                                                </div>
                                                <div class="date date-start">{{$project_detail->package_starting_date}}</div>
                                                <div class="date date-end">{{$project_detail->expire_date}}</div>
                                                <!-- <div class="text">Not Selected</div> -->
                                            </div>
                                        @else
                                            <div class="sub-block">  
                                                <div class="sub-type">Not Selected</div>
                                            </div>
                                        @endif

                                        <div class="button-block">
                                            <button type="button" class="btn btn-view"><i class="bi bi-x-diamond-fill" disabled></i>View</button>
                                            <a href="{{ route('frontend.user.project_dash.destroy', $project_detail->id) }}" class="delete btn btn-delete" data-bs-toggle="modal" data-bs-target="#deletedashwidget"><i
                                                    class="bi bi-trash"></i>Delete</a>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <div class="content-block">
                                            <div class="image-block">
                                                <img src="{{url('images/dashboard/main/unpaid_invoices.png')}}" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="subtitle">Unpaid invoices</div>
                                                @if(App\Models\BillingInvoice::where('project_id',$project_detail->id)->where('status','Unpaid')->first() == null)
                                                    <div class="text">You don't have unpaid invoices</div>
                                                @else
                                                    <div class="text">You have unpaid invoices</div>
                                                @endif
                                                <a href="{{route('frontend.user.unpaid_invoices',$project_detail->id)}}" class="link">Go to Unpaid invoices</a>
                                            </div>
                                        </div>
                                        <div class="content-block">
                                            <div class="image-block">
                                                <img src="{{url('images/dashboard/main/services.png')}}" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="subtitle">Services</div>
                                                <div class="text">1 service has auto-renewal turned-off</div>
                                                <a href="#" class="link">Go to Services</a>
                                            </div>
                                        </div>
                                        <div class="content-block">
                                            <div class="image-block">
                                                <img src="{{url('images/dashboard/main/payment_history.png')}}" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="subtitle">Payment history</div>
                                                <div class="text">Find all your payments and their invoices</div>
                                                <a href="{{route('frontend.user.paid_invoices',$project_detail->id)}}" class="link">Go to Payment history</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>


    <div class="modal fade" id="deletedashwidget" tabindex="-1" aria-labelledby="deletedashwidgetLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="deletedashwidgetLabel">Delete Project</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Do you want to delete this?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div> 
    
@endsection


@push('after-scripts')

<script>
    $('.delete').on('click', function() {
        let link = $(this).attr('href');
        $('.modal-footer a').attr('href', link);
    })
</script>

<script>
const dataRow = document.querySelectorAll("[data-row]")
const dataInnerRow = document.querySelectorAll("[data-inner-row]")
const dataBody = document.querySelector("[data-body]")
const dataRowClass = dataBody.querySelectorAll(".data-row")

dataRow.forEach(function (arr1, index) {
    const arr2 = dataInnerRow[index]

    arr1.addEventListener("click", function () {

        dataRowClass.forEach(function (c) {
            c.classList.remove("active")
        });

        arr1.classList.toggle("active")
        arr2.classList.toggle("active")
    });
});
</script>  

@if(count($projects) != 0)
    @foreach($projects as $project_detail)
    <script>
            // Progressbar color changer
            const progressColor = document.querySelectorAll("[progress-color]")
            const progressWidth = {{get_expire_date($project_detail->id)['remaining_days'] / 30 * 100}};

            window.addEventListener('load', function () {
                progressColor.forEach(function (progress) {
                    if (progressWidth < 51) {
                        progress.style.backgroundColor = "#33CC0D";
                    } else if (progressWidth > 51 && progressWidth < 76) {
                        progress.style.backgroundColor = "#FFAC1B";
                    } else {
                        progress.style.backgroundColor = "#FF0000";
                    }
                })
            })
        </script>
    @endforeach
@endif


@endpush