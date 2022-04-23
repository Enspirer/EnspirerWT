@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/reports.css')}}">
<link rel="stylesheet" href="{{url('css/projects.css')}}">
<link rel="stylesheet" href="{{url('css/billing.css')}}">
   

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
                        <li class="breadcrumb-item"><span>Billing Report</span></li>
                    </ul>
                </div>

                <div class="row g-0 mt-5">
                    <div class="ims__control-panel">
                        <div class="row g-0">
                            <div class="col">
                                <div class="control-block">
                                    <div class="controls">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                value="" id="imsSelectAll">
                                            <label class="form-check-label"
                                                for="imsSelectAll">
                                                <i class="bi bi-chevron-down"></i>
                                            </label>
                                        </div>
                                        <a href="#"
                                            class="ims__refresh control-link active">
                                            <i class="bi bi-arrow-clockwise"></i>
                                        </a>
                                    </div>
                                    <div class="actions">
                                        <a href="#" class="control-link" data-delete-modal data-bs-toggle="modal" data-bs-target="#deleteInquiry">
                                            <i class="bi bi-trash-fill"></i>
                                            <div class="text">Delete</div>
                                        </a>
                                        <a href="#" class="control-link">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="ims__data-table">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr class="data-row">
                                                <th class="data-title"></th>
                                                <th class="data-title">Invoice ID</th>
                                                <th class="data-title">Status</th>
                                                <th class="data-title">Created at</th>
                                                <th class="data-title">Paid at</th>
                                                <th class="data-title">Last Month Bill</th>                                                                              
                                                <th class="data-title">Total Price</th>
                                                <th class="data-title"></th>
                                            </tr>
                                        </thead>
                                        <tbody data-body>
                                            <tr class="data-row" data-row>
                                                <td class="data--select data-cell">
                                                    <input class="form-check-input inquiry-check"
                                                    id="#" type="checkbox" value="">
                                                </td>
                                                <td class="data--id data-cell">
                                                    <div class="text">2522</div>
                                                </td>
                                                <td class="data--status data-cell">
                                                    <div class="status">
                                                        <i class="bi unpaid bi-exclamation-circle-fill"></i>
                                                        <i class="bi paid bi-check-circle-fill"></i>
                                                        <div class="text">paid</div>
                                                    </div>
                                                </td>
                                                <td class="data-cell">
                                                    <div class="text">18, Feb 2022</div>
                                                </td>
                                                <td class="data-cell">
                                                    <div class="text">18, Feb 2022</div>
                                                </td>  
                                                <td class="data-cell">
                                                    <div class="text">$ 20.00</div>
                                                </td>
                                                <td class="data-cell">
                                                    <div class="text">$10.00</div>
                                                </td>                                               
                                                <td class="data-cell">
                                                    <i class="bi bi-chevron-down"></i>
                                                </td>                                               
                                            </tr> 
                                            <tr class="data-row hidden" data-inner-row>
                                                <td colspan="8">
                                                    <div class="invoice-block">
                                                        <table class="table table-borderless">
                                                            <thead>
                                                                <tr class="data-row">
                                                                    <th class="data-title">Product</th>
                                                                    <th class="data-title">Quantity (Period)</th>
                                                                    <th class="data-title">Unit Price</th>
                                                                    <th class="data-title">Discount (%)</th>
                                                                    <th class="data-title">Total Price</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="data-row">
                                                                    <td class="data-cell">
                                                                        <div class="text">Tallentor Pro Chat Widget + Analytic</div>
                                                                    </td>
                                                                    <td class="data-cell">
                                                                        <div class="text">12 Months</div>
                                                                    </td>
                                                                    <td class="data-cell">
                                                                        <div class="text">$20.00</div>
                                                                    </td>
                                                                    <td class="data-cell">
                                                                        <div class="text">$5.00</div>
                                                                    </td>
                                                                    <td class="data-cell">
                                                                        <div class="text">$15.00</div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="data-row">
                                                                    <td class="data-cell">
                                                                        <div class="text">Real time Visitors</div>
                                                                    </td>
                                                                    <td class="data-cell">
                                                                        <div class="text">12 Months</div>
                                                                    </td>
                                                                    <td class="data-cell">
                                                                        <div class="text">$20.00</div>
                                                                    </td>
                                                                    <td class="data-cell">
                                                                        <div class="text">$5.00</div>
                                                                    </td>
                                                                    <td class="data-cell">
                                                                        <div class="text">$15.00</div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="billing-info">
                                                            <div class="description">
                                                                <div class="title">Bill Description</div>
                                                                <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised</div>
                                                            </div>
                                                            <div class="fare">
                                                                <div class="fare-row">
                                                                    <div class="text">Subtotal</div>
                                                                    <div class="amount">$20.00</div>
                                                                </div>
                                                                <div class="fare-row">
                                                                    <div class="text">Discount</div>
                                                                    <div class="amount">$20.00</div>
                                                                </div>
                                                                <div class="fare-row">
                                                                    <div class="text">Taxes & Fees</div>
                                                                    <div class="amount">$20.00</div>
                                                                </div>
                                                                <div class="fare-row total">
                                                                    <div class="text">Total</div>
                                                                    <div class="amount">$20.00</div>
                                                                </div>

                                                                <div class="button-block">
                                                                    <a href="#" class="btn btn-payNow">Pay Now</a>
                                                                    <a href="#" class="btn btn-view">View Invoice</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </td>
                                            </tr>                                                                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
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