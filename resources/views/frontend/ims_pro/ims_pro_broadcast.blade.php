@extends('frontend.layouts.widget_ims_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/ims_pro.css')}}">
<link rel="stylesheet" href="{{url('css/ims_pro-media_scan.css')}}">

@include('frontend.ims_pro.includes.ims_pro_mobile_nav')

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
                                            <a class="breadcrumb-link breadcrumb-current">Broadcast</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- <div class="row g-0">
                                <div class="welcome-block section-broadcast">
                                    <div class="steps-block">
                                        <img src="{{url('images/dashboard/ims_pro/section-broadcast.png')}}"  class="img-main">
                                    </div>
                                    <div class="info-block">
                                        <h2 class="sub-title">Do you want use this service ?</h2>
                                        <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an</p>
                                        <p class="text">unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also </p>
                                        <a href="#" class="btn-inquire">
                                            <div class="text">Drop your Inquiry</div>
                                            <i class="bi bi-arrow-right-short"></i>
                                        </a>
                                    </div>
                                </div>
                            </div> -->

                            <div class="history-header">
                                <div class="row g-4">
                                    <div class="col-lg-9">
                                        <div class="welcome-block">
                                            <div class="content-block">
                                                <div class="title">Welcome Back, User</div>
                                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione dolorum nam at minus architecto recusandae iure reprehenderit quas accusantium fugiat.</div>
                                                <a href="#" class="cta-btn" data-bs-toggle="modal" data-bs-target="#newBrModal">New Broadcast</a>
                                            </div>
                                            <div class="image-block">
                                                <img src="{{url('images/ims-pro/broadcast/welcome.png')}}" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="msg-summery">
                                            <div class="text">Overall Bulk Message</div>
                                            <div class="count">468</div>
                                            <div class="title">Total SMS Sent </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="broadcast-title">Data range filter</div>

                            <div class="history-filter-section">
                                <div class="row g-5">
                                    <div class="col-md-8">
                                        <div class="data-filter">
                                            <div class="row g-4">
                                                <div class="col-lg-4">
                                                    <div class="label">Date picker from</div>
                                                    <input type="date" class="form-control" name="date_from">
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="label">Date picker to</div>
                                                    <input type="date" class="form-control" name="date_to">
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="label">Period</div>
                                                    <select class="form-select">
                                                        <option selected disbled>Choose...</option>
                                                        <option>Yesterday</option>
                                                        <option>Last Week</option>
                                                        <option>Last 7 Days</option>
                                                        <option>Last Month</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 align-self-center">
                                        <div class="button-block">
                                            <a href="#" class="cta-btn" data-bs-toggle="modal" data-bs-target="#newBrModal">New Broadcast</a>
                                            <i class="bi bi-exclamation-circle"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="broadcast-title">Overview</div>

                            <div class="history-overview-block">
                                <div class="overviw-block">
                                    <div class="text">Overall Bulk Message</div>
                                    <div class="count">468</div>
                                    <div class="title">Total SMS Sent</div>
                                </div>
                                <div class="info-blocks">
                                    <div class="info-block green">
                                        <img src="{{url('images/ims-pro/broadcast/sent.svg')}}" >
                                        <div class="count">200</div>
                                        <div class="text">Sent Message</div>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="info-block blue">
                                        <img src="{{url('images/ims-pro/broadcast/delivered.svg')}}" >
                                        <div class="count">200</div>
                                        <div class="text">Delivered Message</div>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="info-block orange">
                                        <img src="{{url('images/ims-pro/broadcast/read.svg')}}" >
                                        <div class="count">200</div>
                                        <div class="text">Read Message</div>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="info-block pink">
                                        <img src="{{url('images/ims-pro/broadcast/replied.svg')}}" >
                                        <div class="count">200</div>
                                        <div class="text">Replied</div>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="info-block gray">
                                        <img src="{{url('images/ims-pro/broadcast/sending.svg')}}" >
                                        <div class="count">200</div>
                                        <div class="text">Sending</div>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="info-block red">
                                        <img src="{{url('images/ims-pro/broadcast/failed.svg')}}" >
                                        <div class="count">200</div>
                                        <div class="text">Failed</div>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="info-block green">
                                        <img src="{{url('images/ims-pro/broadcast/processing.svg')}}" >
                                        <div class="count">200</div>
                                        <div class="text">Processing</div>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="info-block dark-blue">
                                        <img src="{{url('images/ims-pro/broadcast/queued.svg')}}" >
                                        <div class="count">200</div>
                                        <div class="text">Queued</div>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="broadcast-title">Broadcast list</div>

                            <div class="broadcast-list-section">
                                <div class="header">
                                    <div class="filter-block">
                                        <select class="form-select">
                                            <option selected disbled>Choose...</option>
                                            <option>Everyone</option>
                                        </select>
                                        <select class="form-select">
                                            <option selected disbled>Choose...</option>
                                            <option>Yesterday</option>
                                            <option>Last Week</option>
                                            <option>Last 7 Days</option>
                                            <option>Last Month</option>
                                        </select>
                                    </div>
                                    <div class="filter-block">
                                        <div class="search-group">
                                            <input type="text" class="form-control" name="search" placeholder="Search">
                                            <i class="bi bi-search"></i>
                                        </div>
                                        <button type="button" class="filter-btn">
                                            <i class="bi bi-funnel"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="body">
                                    <table class="broadcast-list-table">
                                        <thead>
                                            <th>Broadcast Name</th>
                                            <th>Scheduled</th>
                                            <th>Successful</th>
                                            <th>Read</th>
                                            <th>Replied</th>
                                            <th>Recipients</th>
                                            <th>Failed</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </thead>
                                        <tbody>
                                            <td>
                                                <div class="text">Untitled_240254</div>
                                            </td>
                                            <td>
                                                <div class="text">2022-05-24  05:42 PM</div>
                                            </td>
                                            <td>
                                                <div class="progress green">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="progress orange">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="progress pink">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text">1 Contacts</div>
                                            </td>
                                            <td>
                                                <div class="text">1 Contacts</div>
                                            </td>
                                            <td>
                                                <div class="text">Completed</div>
                                            </td>
                                            <td>
                                                <button class="action-btn btn-chart"><i class="bi bi-bar-chart"></i></button>
                                                <button class="action-btn btn-seen"><i class="bi bi-eye"></i></button>                                           
                                            </td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
</section>

<!-- New Broadcast Modal -->
<div class="modal fade new-br-modal" id="newBrModal" tabindex="-1" aria-labelledby="newBrModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="inner-wrapper">
            <div class="content-block">
                <div class="wrapper">
                    <div class="header">
                        <div class="title">New Broadcast</div>
                    </div>
                    <div class="body">
                        <div class="form-section section-1">
                            <div class="row g-3">
                                <div class="col-10">
                                    <label class="form-label">Broadcast Name</label>
                                    <input type="text" class="form-control" name="broadcast_name" placeholder="name_451254786210">
                                </div>
                                <div class="col-2 align-self-end" style="height: 30px;">
                                    <i class="bi bi-question-circle"></i>
                                </div>
                                <div class="col-10">
                                    <label class="form-label">Select Template Message</label>
                                    <select class="form-select" name="broadcast_template">
                                        <option selected disabled>Template Message</option>
                                        <option>Template 1</option>
                                        <option>Template 2</option>
                                        <option>Template 3</option>
                                    </select>
                                </div>
                                <div class="col-2 align-self-end" style="height: 30px;">
                                    <i class="bi bi-question-circle"></i>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Schedule Start Date</label>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label">Date Picker From</label>
                                    <input type="date" class="form-control" name="start_date">
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label">Date Picker To</label>
                                    <input type="date" class="form-control" name="end_date">
                                </div>
                                <div class="col-lg-4">
                                    <button type="button" class="btn-next">Next</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-section section-2">
                            <div class="row g-3">
                                <div class="col-lg-9">
                                    <label class="form-label">Add Contact</label>
                                    <input type="text" class="form-control" name="broadcast_Contacts" placeholder="Kasun Siripala">
                                </div>
                                <div class="col-3 align-self-end">
                                    <button type="button" class="cta-btn">Add</button>
                                </div>
                                <div class="col-lg-6 mt-5">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="select_all"> 
                                        <label class="form-check-label">
                                            Select All
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-5">
                                    <label class="form-check-label">
                                        2 Contacts Selected
                                    </label>
                                </div>
                                <div class="col-12">
                                    <div class="selected-contacts-block">
                                        <div class="contact-block">
                                            <div class="name">Kasun Lakmal</div>
                                            <button type="button" class="remove-contact">
                                                <i class="bi bi-x"></i>
                                            </button>
                                        </div>
                                        <div class="contact-block">
                                            <div class="name">Supun Dilshan</div>
                                            <button type="button" class="remove-contact">
                                                <i class="bi bi-x"></i>
                                            </button>
                                        </div>
                                        <div class="contact-block">
                                            <div class="name">Avishka Supun</div>
                                            <button type="button" class="remove-contact">
                                                <i class="bi bi-x"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-5">
                                    <button type="button" class="btn-back">Back</button>
                                </div>
                                <div class="col-xl-4 col-lg-5">
                                    <button type="submit" class="btn-add">Add Broadcast</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="preview-block">
                <div class="wrapper">
                    <div class="title">Preview</div>
                    <div class="preview-card">
                        <img src="https://via.placeholder.com/300x200.png" >
                        <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime sequi quidem obcaecati sapiente ab debitis. Ipsa illo, ratione ut perferendis reprehenderit consequatur, ab assumenda est doloremque et nisi id. Itaque delectus sed deleniti amet libero modi, magnam doloremque illo quod!</div>
                        <div class="copyright">
                            <div class="text">Powered by Tallentor</div>
                            <div class="text">17:11</div>
                        </div>
                        <a href="#" class="cta-link"><i class="bi bi-link-45deg"></i> Visit tallentor.com</a>
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
const brNavigation = window.addEventListener('DOMContentLoaded', function () {
    const brModal = document.getElementById("newBrModal")
    const btnNext = brModal.querySelector(".btn-next")
    const btnBack = brModal.querySelector(".btn-back")
    const section1 = brModal.querySelector(".section-1")
    const section2 = brModal.querySelector(".section-2")

    btnNext.addEventListener('click', function(){
        section1.style.display = "none";
        section2.style.display = "block";
    })

    btnBack.addEventListener('click', function(){
        section1.style.display = "block";
        section2.style.display = "none";
    })
})
</script>

@endpush