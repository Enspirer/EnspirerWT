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
                                                <th>Name</th>
                                                <th>Sent Date</th>
                                                <th>Due Date</th>
                                                <th>Note</th>
                                                <th>Amount</th>
                                            </thead>
                                            <tbody>
                                                <td>
                                                    <div class="text">{{$custom_invoice->name}}</div>
                                                </td>
                                                <td>
                                                    <div class="text">{{$custom_invoice->date}}</div>
                                                </td>
                                                <td>
                                                    <div class="text">{{$custom_invoice->due_date}}</div>
                                                </td>
                                                <td>
                                                    <div class="text">{{$custom_invoice->note}}</div>
                                                </td>
                                                <td>
                                                    <div class="text red">$ {{$custom_invoice->price}}</div>
                                                </td>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="invoice-title">Description</div>
                                    <div class="invoice-description">{{$custom_invoice->description}}</div>
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
                                                    <div class="text">${{$custom_invoice->discount}}</div>
                                                </div>
                                            </div>
                                            <div class="footer">
                                                <div class="text-block">
                                                    <div class="text">Today you pay</div>
                                                    <!-- <div class="text-light">After 30 days: $6.59</div> -->
                                                </div>
                                                <div class="text">${{$custom_invoice->price}}</div>
                                            </div>
                                            <a href="#" class="checkout-btn" data-bs-toggle="modal" data-bs-target="#paySucModal">
                                                Checkout <i class="bi bi-arrow-right-short"></i>
                                            </a>
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
                            <a href="#" class="checkout-btn" data-bs-toggle="modal" data-bs-target="#paySucModal">
                                Checkout <i class="bi bi-arrow-right-short"></i>
                            </a>
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
<div class="modal fade pay-sucess-modal" id="paySucModal" tabindex="-1" aria-labelledby="paySucModalLabel" aria-hidden="true">
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