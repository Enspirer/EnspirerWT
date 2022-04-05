@extends('frontend.layouts.widget_ims_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/ims_pro.css')}}">
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<link rel="stylesheet" href="{{url('css/ims_pro-media_scan.css')}}">

<section class="ims__section">
        @include('frontend.ims_pro.ims_pro_sidebar')
            <div class="ims__main-col">
                @include('frontend.ims_pro.ims_pro_navbar')
                
                <div class="row g-0">
                    <div class="col">
                        <!-- Content goes here -->
                        <div class="ims__body-container" id="ims__main-panel">
                            <div class="ims__inner-container">
                                <div class="row g-0 mb-4">
                                    <div class="col">
                                        <ul class="breadcrumb">
                                            
                                            <li class="breadcrumb-item">
                                                <a class="breadcrumb-link">IMS Pro</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#" class="breadcrumb-link breadcrumb-arrow"><i
                                                        class="bi bi-chevron-right"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a class="breadcrumb-link breadcrumb-current">Chat Summery</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                @if(whatsapp_server_status( $project_id )['server_type'] == 'default_server' )
                                    @include('frontend.ims_pro.includes.ims_inquiry_summery_default_server')
                                @else
                                    @include('frontend.ims_pro.includes.ims_chat_summary')
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </section>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reportDownload">
  Launch demo modal
</button>

<!--Report Download Modal -->
<div class="modal get_widget_Modal fade" id="reportDownload" tabindex="-1" aria-labelledby="reportDownloadLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close">
            <i class="bi bi-x-lg"></i>
        </button>
        <i class="bi bi-download"></i>
        <div class="text">Download Report File</div>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-title">Select Fields</div>
            <div class="form-row">
                <select class="form-select" required>
                    <option disabled>Choose...</option>
                    <option selected>Custom Date</option>
                    <option>Task Status</option>
                    <option>Sample Text</option>
                </select>
                <div class="form-input">
                    <i class="bi bi-calendar4-week"></i>
                    <input type="text" class="form-control"  required>
                </div>
                <div class="form-input">
                    <i class="bi bi-calendar4-week"></i>
                    <input type="text" class="form-control"  required>
                </div>
                <a href="#" class="form-add-btn">
                    <i class="bi bi-plus-lg"></i>
                </a>
                <a href="#" class="form-delete-btn">
                    <i class="bi bi-trash"></i>
                </a>
            </div>
            <div class="form-row">
                <select class="form-select" required>
                    <option disabled>Choose...</option>
                    <option selected>Task Status</option>
                    <option>Task Status</option>
                    <option>Sample Text</option>
                </select>
                <select class="form-select" required>
                    <option selected disabled>Choose...</option>
                    <option selected>Pending</option>
                    <option>Task Status</option>
                    <option>Sample Text</option>
                </select>
                <a href="#" class="form-add-btn">
                    <i class="bi bi-plus-lg"></i>
                </a>
                <a href="#" class="form-delete-btn">
                    <i class="bi bi-trash"></i>
                </a>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <div class="button-block">
            <a href="#" class="btn-save-filter">
                <i class="bi bi-sliders2-vertical"></i>
                <div class="text">Save Filter</div>
            </a>
        </div>
        <div class="button-block">
            <a href="#" class="btn-cancel">Cancel</a>
            <a href="#" class="btn-download">
                <i class="bi bi-download"></i>
                <div class="text">Download Report File</div>
            </a>
        </div>
      </div>
    </div>
  </div>
</div>
    

@endsection



@push('after-scripts')

<!-- <script>
    $('.form-control').daterangepicker({
        "singleDatePicker": true,
        "autoApply": true,
        "startDate": "03/18/2022",
        "endDate": "03/24/2022"
    }, function(start, end, label) {
    console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
    });
</script> -->

<script>
    // Dara row href
    jQuery(document).ready(function($) {
        $(".data-row[data-href]").click(function() {
            window.location = $(this).data("href");
        });
    });
</script>

@endpush