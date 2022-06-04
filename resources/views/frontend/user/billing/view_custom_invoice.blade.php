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
                            <li class="breadcrumb-item"><span>Paid Invoices</span></li>
                        </ul>
                    </div>

                    <section class="view-invoice">
                        <div class="row g-4">
                            <div class="col-lg-8">
                                <div class="invoice">
                                    <!-- <div class="header">
                                        <img src="{{url('images/test.png')}}" alt="">
                                        <div class="text-block">
                                            <div class="name">Tallentor Website</div>
                                            <div class="url">https://tallentor.com/</div>
                                        </div>
                                    </div> -->
                                    <div class="info-block">
                                        <ul class="info">
                                            <li class="strong">Invoice ID: # {{$custom_invoice->id}}</li>
                                            <li></li>
                                            <li>Issued Date: {{$custom_invoice->date}}</li>
                                            @if($custom_invoice->status == 'Pending')
                                                <li>Status: <span style="background-color: #ff4500;padding: 1px;border-radius: 3px;padding-left: 8px;padding-right: 8px;margin-left: 10px;;">{{$custom_invoice->status}}</span> </li>
                                            @elseif($custom_invoice->status == 'Completed')
                                                <li>Status: <span style="background-color: #44d824;padding: 1px;border-radius: 3px;padding-left: 8px;padding-right: 8px;margin-left: 10px;;">{{$custom_invoice->status}}</span> </li>
                                            @endif
                                            <li>Payment Method: {{$custom_invoice->payment_method}}</li>
                                        </ul>
                                        <ul class="info text-right">
                                            <li class="strong">Billed to:  {{$custom_invoice->name}}</li>
                                            <li>{{$custom_invoice->address}}</li>
                                        </ul>
                                    </div>
                                    <div class="invoice-title">Package Details</div>
                                    <div class="package-block">
                                        <table class="package-table">
                                            <thead>
                                                <th>Service Name</th>
                                                <th>Price (USD)</th>
                                                <th>Discount (Flat)</th>
                                                <th>Total (Discounted)</th>
                                            </thead>
                                            <tbody>
                                             @if($custom_invoice)
                                                @foreach(json_decode($custom_invoice->purchased_service_list) as $servicefunc)
                                                    <tr>
                                                        <td>
                                                            <div class="text">{{$servicefunc->service_name}}</div>
                                                        </td>
                                                        <td>
                                                            <div class="text">{{number_format( $servicefunc->amount,2)}}</div>
                                                        </td>
                                                        <td>
                                                            <div class="text red">USD - {{ number_format($servicefunc->discount,2)}}</div>
                                                        </td>
                                                        <td>
                                                            <div class="text" style="font-weight: 500;"><b>USD {{number_format( $servicefunc->total,2)}}</b></div>
                                                        </td>
                                                    </tr>

                                                @endforeach
                                             @endif

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="invoice-title">Description</div>
                                        @if($custom_invoice->description)
                                            <div class="invoice-description">{{$custom_invoice->description}}</div>
                                        @else
                                            <div class="invoice-description">Description Not Found</div>
                                        @endif
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row g-4">
                                    <div class="col-12">
                                        <div class="payment-card">
                                            <div class="header">
                                                <div class="title">Summery</div>
                                            </div>
                                            <!-- <div class="sub">
                                                <div class="text">Pro (Billed monthly)</div>
                                                <div class="text">$20.00</div>
                                            </div> -->
                                            <div class="body">
                                                <!-- <div class="payment-row">
                                                    <div class="text">Last Bill </div>
                                                    <div class="text">$00.00</div>
                                                </div>
                                                <div class="payment-row">
                                                    <div class="text">Package</div>
                                                    <div class="text">$15.00</div>
                                                </div> -->
                                                <div class="payment-row">
                                                    <div class="text">Discount</div>
                                                    <div class="text">${{number_format( $custom_invoice->discount,2)}}</div>
                                                </div>
                                            </div>
                                            <div class="footer">
                                                <div class="text-block">
                                                    <div class="text">Total Amount you Pay</div>
                                                    <!-- <div class="text-light">After 30 days: $6.59</div> -->
                                                </div>
                                                <div class="text"><h4>USD {{number_format($custom_invoice->price,2)}}</h4></div>
                                            </div>
                                            <form action="{{route('frontend.user.paypal.custom_payment')}}" method="post">
                                                {{csrf_field()}}
                                                <input type="hidden" name="amount" value="{{$custom_invoice->price}}">
                                                <input type="hidden" name="id" value="{{$custom_invoice->id}}">
                                                <button  class="checkout-btn" style="border-width: inherit;width: 100%;">
                                                    Checkout <i class="bi bi-arrow-right-short"></i>
                                                </button>
                                            </form>

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="get-invoice">
                                            <div class="header">Download Invoice</div>
                                            <div class="text">Also you can download this invoice</div>
                                            <a href="{{route('frontend.user.custom_payment.invoice',$custom_invoice->id)}}" class="btn-download">
                                                Download
                                                <i class="bi bi-download"></i>
                                            </a>
                                        </div>
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

<!-- Payment Modal -->
<div class="modal fade payment-modal" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
        <div class="inner-wrapper">
            <div class="header">
                <div class="title">Payment Details</div>
            </div>
            <div class="body">
                <div class="row g-4">
                    <div class="col-8">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="label">Card Holder</div>
                                <div class="text">Enter your name in here</div>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" name="ch_name">
                            </div>
                            <div class="col-12">
                                <div class="label">Card Number</div>
                                <div class="text">Enter the 16-digit card number on the card</div>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" name="card_number">
                            </div>
                            <div class="col-7">
                                <div class="label">CSV Number</div>
                                <div class="text">Enter the 3 or 4 digit number on the card</div>
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control" name="csv_no" placeholder="327">
                            </div>
                            <div class="col-7">
                                <div class="label">Expiry Date</div>
                                <div class="text">Enter the expiration date of the card</div>
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control" name="exp_date">
                            </div>
                        </div>
                    </div>
                    <div class="col-4 align-self-center">
                        <div class="payment-card">
                            <div class="header">
                                <div class="title">Summery</div>
                            </div>
                            <div class="sub">
                                <div class="text">Pro (Billed monthly)</div>
                                <div class="text">$20.00</div>
                            </div>
                            <div class="body">
                                <div class="payment-row">
                                    <div class="text">Last Bill </div>
                                    <div class="text">$00.00</div>
                                </div>
                                <div class="payment-row">
                                    <div class="text">Package</div>
                                    <div class="text">$15.00</div>
                                </div>
                                <div class="payment-row">
                                    <div class="text">Discount (20% OFF)</div>
                                    <div class="text">-$5.00</div>
                                </div>
                            </div>
                            <div class="footer">
                                <div class="text-block">
                                    <div class="text">Today you pay</div>
                                    <div class="text-light">After 30 days: $6.59</div>
                                </div>
                                <div class="text">$25.00</div>
                            </div>
                            <form action="{{route('frontend.user.paypal.custom_payment')}}">
                                {{csrf_field()}}
                                <button type="submit" class="checkout-btn">
                                    Checkout <i class="bi bi-arrow-right-short"></i>
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="footer-text">
                    <i class="bi bi-lock-fill"></i>
                    Your transaction is secured with SSL encryption
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<!-- Payment Success Modal -->
<div class="modal fade pay-sucess-modal" id="paySucModal" tabindex="-1" aria-labelledby="paySucModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="inner-wrapper">
            <img src="{{url('images/dashboard/main/payment-success.svg')}}" alt="">
            <div class="title">Payment Transfer Successful!</div>
            <div class="text">All Good... Thank You! Your payment of $25.00 has been received successfully.</div>
            <a href="#" class="pay-sucess-btn" data-bs-toggle="modal" data-bs-target="#payCanModal">
            Back to Dashboard <i class="bi bi-arrow-right-short"></i>
            </a>
        </div>
    </div>
  </div>
</div>
<!-- Payment Cancel Modal -->
<div class="modal fade pay-cancel-modal" id="payCanModal" tabindex="-1" aria-labelledby="payCanModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="inner-wrapper">
            <img src="{{url('images/dashboard/main/payment-cancel.svg')}}" alt="">
            <div class="title">Payment Transfer Failed!</div>
            <div class="text">Bad... Sorry! Your payment was Failed! Please check billing information again and retry.</div>
            <a href="#" class="pay-cancel-btn" data-bs-toggle="modal" data-bs-target="#paymentModal">
            Try again <i class="bi bi-arrow-right-short"></i>
            </a>
        </div>
    </div>
  </div>
</div>
@if(session()->has('message'))
    @if(session()->get('message') == 'success')
        <script>
            $(window).on('load', function() {
                $('#paySucModal').modal({backdrop: 'static', keyboard: false})

                $('#paySucModal').modal('show');
            });
        </script>
    @else
        <script>
            $(window).on('load', function() {
                $('#payCanModal').modal({backdrop: 'static', keyboard: false})

                $('#payCanModal').modal('show');
            });
        </script>
    @endif

@endif
    
@endsection


@push('after-scripts')

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

<script>
        // Progressbar color changer
        const progressColor = document.querySelectorAll("[progress-color]")
        const progressWidth = 75;

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

@endpush