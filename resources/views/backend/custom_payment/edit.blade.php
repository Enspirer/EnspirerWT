@extends('backend.layouts.app')

@section('title', __('Edit'))

@section('content')

<style>
    body{
        margin-top:20px;
        color: #484b51;
    }
    .text-secondary-d1 {
        color: #728299!important;
    }
    .page-header {
        margin: 0 0 1rem;
        padding-bottom: 1rem;
        padding-top: .5rem;
        border-bottom: 1px dotted #e2e2e2;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -ms-flex-align: center;
        align-items: center;
    }
    .page-title {
        padding: 0;
        margin: 0;
        font-size: 1.75rem;
        font-weight: 300;
    }
    .brc-default-l1 {
        border-color: #dce9f0!important;
    }

    .ml-n1, .mx-n1 {
        margin-left: -.25rem!important;
    }
    .mr-n1, .mx-n1 {
        margin-right: -.25rem!important;
    }
    .mb-4, .my-4 {
        margin-bottom: 1.5rem!important;
    }

    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid rgba(0,0,0,.1);
    }

    .text-grey-m2 {
        color: #888a8d!important;
    }

    .text-success-m2 {
        color: #86bd68!important;
    }

    .font-bolder, .text-600 {
        font-weight: 600!important;
    }

    .text-110 {
        font-size: 110%!important;
    }
    .text-blue {
        color: #478fcc!important;
    }
    .pb-25, .py-25 {
        padding-bottom: .75rem!important;
    }

    .pt-25, .py-25 {
        padding-top: .75rem!important;
    }
    .bgc-default-tp1 {
        background-color: rgba(121,169,197,.92)!important;
    }
    .bgc-default-l4, .bgc-h-default-l4:hover {
        background-color: #f3f8fa!important;
    }
    .page-header .page-tools {
        -ms-flex-item-align: end;
        align-self: flex-end;
    }

    .btn-light {
        color: #757984;
        background-color: #f5f6f9;
        border-color: #dddfe4;
    }
    .w-2 {
        width: 1rem;
    }

    .text-120 {
        font-size: 120%!important;
    }
    .text-primary-m1 {
        color: #4087d4!important;
    }

    .text-danger-m1 {
        color: #dd4949!important;
    }
    .text-blue-m2 {
        color: #68a3d5!important;
    }
    .text-150 {
        font-size: 150%!important;
    }
    .text-60 {
        font-size: 60%!important;
    }
    .text-grey-m1 {
        color: #7b7d81!important;
    }
    .align-bottom {
        vertical-align: bottom!important;
    }

</style>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">     
               
           
                        <div class="page-content container">
                            <div class="page-header text-blue-d2">
                                <h1 class="page-title text-secondary-d1">
                                    Invoice
                                    <small class="page-info">
                                        <i class="fa fa-angle-double-right text-80"></i>
                                        ID: {{$custom_payment->invoice_no}}
                                    </small>
                                </h1>

                                <!-- <div class="page-tools">
                                    <div class="action-buttons">
                                        <a class="btn bg-white btn-light mx-1px text-95" href="#" data-title="Print">
                                            <i class="mr-1 fa fa-print text-primary-m1 text-120 w-2"></i>
                                            Print
                                        </a>
                                        <a class="btn bg-white btn-light mx-1px text-95" href="#" data-title="PDF">
                                            <i class="mr-1 fa fa-file-pdf-o text-danger-m1 text-120 w-2"></i>
                                            Export
                                        </a>
                                    </div>
                                </div> -->
                            </div>

                            <div class="container px-0">
                                <div class="row mt-4">
                                    <div class="col-12 col-lg-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="text-center text-150">
                                                   <img src="{{url('images/logo/mobile-logo.png')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .row -->

                                        <hr class="row brc-default-l1 mx-n1 mb-4 mt-3" />

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div>
                                                    <span class="text-sm text-grey-m2 align-middle">To:</span>
                                                    <span class="text-600 text-110 text-blue align-middle">{{$custom_payment->name}}</span>
                                                </div>
                                                <div class="text-grey-m2">
                                                    <div class="my-1">
                                                        {{$custom_payment->city}} {{$custom_payment->country}} 
                                                    </div>
                                                    <div class="my-1">
                                                        {{$custom_payment->address}}
                                                    </div>
                                                    <div class="my-1">
                                                        {{App\Models\Auth\User::where('id',$custom_payment->user_id)->first()->email}}
                                                    </div>
                                                    
                                                    <div class="my-1"><i class="fa fa-phone fa-flip-horizontal text-secondary"></i> <b class="text-600">{{$custom_payment->phone_number}}</b></div>
                                                </div>
                                            </div>
                                            <!-- /.col -->

                                            <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                                                <hr class="d-sm-none" />
                                                <div class="text-grey-m2">
                                                    <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                                        Invoice
                                                    </div>

                                                    <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">ID:</span> {{$custom_payment->invoice_no}}</div>

                                                    <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Issue Date:</span> {{$custom_payment->date}}</div>

                                                    <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Status:</span> 
                                                        @if($custom_payment->status == 'Paid')
                                                            <span class="badge badge-success badge-pill px-25">{{$custom_payment->status}}</span>
                                                        @else
                                                            <span class="badge badge-warning badge-pill px-25">{{$custom_payment->status}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.col -->
                                        </div>

                                        <div class="mt-4">
                                            <div class="row text-600 text-white bgc-default-tp1 py-25">
                                                <div class="d-none d-sm-block col-1">#</div>
                                                <div class="col-9 col-sm-5">Service Name</div>
                                                <div class="d-none d-sm-block col-4 col-sm-2">Price</div>
                                                <div class="d-none d-sm-block col-sm-2">Discount</div>
                                                <div class="col-2">Total</div>
                                            </div>

                                            <div class="text-95 text-secondary-d3">
                                                @if($custom_payment != null)
                                                    @foreach(json_decode($custom_payment->purchased_service_list) as $key => $custom)
                                                        <div class="row mb-2 mb-sm-0 py-25">
                                                            <div class="d-none d-sm-block col-1">{{$key}}</div>
                                                            <div class="col-9 col-sm-5">{{ str_replace("_"," ", ucfirst(trans($custom->service_name)) ) }}</div>
                                                            <div class="d-none d-sm-block col-2">USD {{number_format((float)$custom->amount, 2, '.', '')}}</div>
                                                            <div class="d-none d-sm-block col-2 text-95">USD {{number_format((float)$custom->discount, 2, '.', '')}}</div>
                                                            <div class="col-2 text-secondary-d2">USD {{number_format((float)$custom->total, 2, '.', '')}}</div>
                                                        </div>
                                                    @endforeach
                                                @endif

                                                <!-- <div class="row mb-2 mb-sm-0 py-25 bgc-default-l4">
                                                    <div class="d-none d-sm-block col-1">2</div>
                                                    <div class="col-9 col-sm-5">Web hosting</div>
                                                    <div class="d-none d-sm-block col-2">1</div>
                                                    <div class="d-none d-sm-block col-2 text-95">$15</div>
                                                    <div class="col-2 text-secondary-d2">$15</div>
                                                </div> -->

                                                
                                            </div>

                                            <div class="row border-b-2 brc-default-l2"></div>


                                            <div class="row mt-3">
                                                <div class="col-12 col-sm-7 text-grey-d2 text-95 mt-2 mt-lg-0">
                                                    Extra note such as company or payment information...
                                                </div>

                                                <div class="col-12 col-sm-5 text-grey text-90 order-first order-sm-last">
                                                    <!-- <div class="row my-2">
                                                        <div class="col-7 text-right">
                                                            SubTotal
                                                        </div>
                                                        <div class="col-5">
                                                            <span class="text-120 text-secondary-d1">$2,250</span>
                                                        </div>
                                                    </div>

                                                    <div class="row my-2">
                                                        <div class="col-7 text-right">
                                                            Tax (10%)
                                                        </div>
                                                        <div class="col-5">
                                                            <span class="text-110 text-secondary-d1">$225</span>
                                                        </div>
                                                    </div> -->

                                                    <div class="row my-2 align-items-center bgc-primary-l3 p-2">
                                                        <div class="col-7 text-right">
                                                            Total Amount
                                                        </div>
                                                        <div class="col-5">
                                                            <span class="text-150 text-success-d3 opacity-2">USD {{number_format($custom_payment->price,2)}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr />

                                            <div>
                                                <span class="text-secondary-d1 text-105">Thank you for your business</span>
                                                <!-- <a href="#" class="btn btn-info btn-bold px-4 float-right mt-3 mt-lg-0">Pay Now</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div><br>
        </div>        


<br><br>



@endsection
