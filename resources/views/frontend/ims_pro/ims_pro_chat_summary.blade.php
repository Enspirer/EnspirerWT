@extends('frontend.layouts.widget_ims_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/ims_pro.css')}}">
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


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
                                
                                <div class="row g-0">
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
                                                        <a href="#" class="control-link">
                                                            <i class="bi bi-send-fill"></i>
                                                            <div class="text">Bulk Reply</div>
                                                        </a>
                                                        <a href="#" class="control-link">
                                                            <i class="bi bi-record-circle"></i>
                                                            <div class="text">Assign</div>
                                                        </a>
                                                        <a href="#" class="control-link">
                                                            <i class="bi bi-eye-fill"></i>
                                                            <div class="text">Mark as read</div>
                                                        </a>
                                                        <a href="#" class="control-link">
                                                            <i class="bi bi-tags-fill"></i>
                                                            <div class="text">Labels</div>
                                                        </a>
                                                        <a href="#" class="control-link">
                                                            <i class="bi bi-volume-mute-fill"></i>
                                                            <div class="text">Mute</div>
                                                        </a>
                                                        <a href="#" class="control-link">
                                                            <i class="bi bi-archive-fill"></i>
                                                            <div class="text">Archive</div>
                                                        </a>
                                                        <a href="#" class="control-link">
                                                            <i class="bi bi-trash-fill"></i>
                                                            <div class="text">Delete</div>
                                                        </a>
                                                        <a href="#" class="control-link">
                                                            <i class="bi bi-three-dots"></i>
                                                        </a>
                                                    </div>
                                                    <a href="#" class="btn-status-report" type="button" data-bs-toggle="modal" data-bs-target="#reportDownload">
                                                        <i class="bi bi-download"></i>
                                                        <div class="text">Status Report</div>
                                                    </a>
                                                </div>
                                                <div class="ims__data-table">
                                                    <table class="table table-borderless">
                                                        <thead>
                                                            <tr class="data-row">
                                                                <th class="data-title"></th>
                                                                <th class="data-title"></th>
                                                                <th class="data-title"></th>
                                                                <th class="data-title">Name</th>
                                                                <th class="data-title">Date</th>
                                                                <th class="data-title">Messenger Channel</th>                                                                              
                                                                <th class="data-title">Responsible</th>
                                                                <th class="data-title">Status</th>
                                                                <th class="data-title"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="data-row">
                                                                <td class="data--select data-cell">
                                                                    <input class="form-check-input"
                                                                        type="checkbox" value="">
                                                                </td>
                                                                <td class="data--fav data-cell">
                                                                    <label class="fav-btn">
                                                                        <input type="checkbox">
                                                                        <i class="bi bi-star-fill"></i>
                                                                        <i class="bi bi-star"></i>
                                                                    </label>
                                                                </td>
                                                                <td class="data--pic data-cell">
                                                                    <img src="{{url('img/profile_avatar.jpg')}}" alt="">
                                                                </td>
                                                                <td class="data--name data-cell">
                                                                    <div class="info-block">
                                                                        <div class="header">
                                                                            <div class="name">Rayan Perera</div>
                                                                            <div class="count">10</div>
                                                                        </div>
                                                                        <div class="message"><span>You:</span>The sample text here and this is the . . .</div>
                                                                    </div>
                                                                </td>
                                                                <td class="data--date data-cell">
                                                                    <div class="text">18, Feb 2022</div>
                                                                </td>  
                                                                <td class="data--chnnel data-cell">
                                                                    <div class="channel-block">
                                                                        <div class="icon">
                                                                            <img src="{{url('images/social_media_icons/whatsapp.png')}}" alt="">
                                                                        </div>
                                                                        <div class="name">WhatsApp</div>
                                                                    </div>
                                                                </td>
                                                                <td class="data--date data-cell">
                                                                    <div class="text">Manager</div>
                                                                </td>      
                                                                <td class="data--status data-cell">
                                                                    <div class="status-block">
                                                                        <div class="indicator orange"></div>
                                                                        <div class="status">Pending</div>
                                                                    </div>
                                                                </td>
                                                                <td class="data--chat data-cell">
                                                                    <a href="#" class="chat-btn">
                                                                        <i class="bi bi-chat-dots"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>                                                                
                                                            <tr class="data-row">
                                                                <td class="data--select data-cell">
                                                                    <input class="form-check-input"
                                                                        type="checkbox" value="">
                                                                </td>
                                                                <td class="data--fav data-cell">
                                                                    <label class="fav-btn">
                                                                        <input type="checkbox">
                                                                        <i class="bi bi-star-fill"></i>
                                                                        <i class="bi bi-star"></i>
                                                                    </label>
                                                                </td>
                                                                <td class="data--pic data-cell">
                                                                    <img src="{{url('img/profile_avatar.jpg')}}" alt="">
                                                                </td>
                                                                <td class="data--name data-cell">
                                                                    <div class="info-block">
                                                                        <div class="header">
                                                                            <div class="name">Rayan Perera</div>
                                                                            <div class="count">10</div>
                                                                        </div>
                                                                        <div class="message"><span>You:</span>The sample text here and this is the . . .</div>
                                                                    </div>
                                                                </td>
                                                                <td class="data--date data-cell">
                                                                    <div class="text">18, Feb 2022</div>
                                                                </td>  
                                                                <td class="data--chnnel data-cell">
                                                                    <div class="channel-block">
                                                                        <div class="icon">
                                                                            <img src="{{url('images/social_media_icons/whatsapp.png')}}" alt="">
                                                                        </div>
                                                                        <div class="name">WhatsApp</div>
                                                                    </div>
                                                                </td>
                                                                <td class="data--date data-cell">
                                                                    <div class="text">Admin</div>
                                                                </td>     
                                                                <td class="data--status data-cell">
                                                                    <div class="status-block">
                                                                        <div class="indicator orange"></div>
                                                                        <div class="status">Pending</div>
                                                                    </div>
                                                                </td>
                                                                <td class="data--chat data-cell">
                                                                    <a href="#" class="chat-btn">
                                                                        <i class="bi bi-chat-dots"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>                                                                
                                                            <tr class="data-row">
                                                                <td class="data--select data-cell">
                                                                    <input class="form-check-input"
                                                                        type="checkbox" value="">
                                                                </td>
                                                                <td class="data--fav data-cell">
                                                                    <label class="fav-btn">
                                                                        <input type="checkbox">
                                                                        <i class="bi bi-star-fill"></i>
                                                                        <i class="bi bi-star"></i>
                                                                    </label>
                                                                </td>
                                                                <td class="data--pic data-cell">
                                                                    <img src="{{url('img/profile_avatar.jpg')}}" alt="">
                                                                </td>
                                                                <td class="data--name data-cell">
                                                                    <div class="info-block">
                                                                        <div class="header">
                                                                            <div class="name">Rayan Perera</div>
                                                                            <div class="count">10</div>
                                                                        </div>
                                                                        <div class="message"><span>You:</span>The sample text here and this is the . . .</div>
                                                                    </div>
                                                                </td>
                                                                <td class="data--date data-cell">
                                                                    <div class="text">18, Feb 2022</div>
                                                                </td>  
                                                                <td class="data--chnnel data-cell">
                                                                    <div class="channel-block">
                                                                        <div class="icon">
                                                                            <img src="{{url('images/social_media_icons/whatsapp.png')}}" alt="">
                                                                        </div>
                                                                        <div class="name">WhatsApp</div>
                                                                    </div>
                                                                </td>
                                                                <td class="data--date data-cell">
                                                                    <div class="text">Agent</div>
                                                                </td>     
                                                                <td class="data--status data-cell">
                                                                    <div class="status-block">
                                                                        <div class="indicator orange"></div>
                                                                        <div class="status">Pending</div>
                                                                    </div>
                                                                </td>
                                                                <td class="data--chat data-cell">
                                                                    <a href="#" class="chat-btn">
                                                                        <i class="bi bi-chat-dots"></i>
                                                                    </a>
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

<script>
    $('.form-control').daterangepicker({
        "singleDatePicker": true,
        "autoApply": true,
        "startDate": "03/18/2022",
        "endDate": "03/24/2022"
    }, function(start, end, label) {
    console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
    });
</script>

@endpush