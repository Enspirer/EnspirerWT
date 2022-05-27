@extends('frontend.layouts.widget_ims_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/ims_pro.css')}}">
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
                                            <a class="breadcrumb-link breadcrumb-current">Broadcast</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- <div class="row g-0">
                                <div class="welcome-block section-broadcast">
                                    <div class="steps-block">
                                        <img src="{{url('images/dashboard/ims_pro/section-broadcast.png')}}" alt="" class="img-main">
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

                            <div class="row">
                                <div class="col my-4">
                                    <a href="#" class="new-template-btn" data-bs-toggle="modal" data-bs-target="#newTemp">New Template</a>
                                </div>
                            </div>

                            <div class="broadcast-title">Template list</div>

                            <div class="broadcast-list-section">
                                <div class="header">
                                    <div class="filter-block">
                                        <select class="form-select">
                                            <option selected disbled>Sort By</option>
                                            <option>Date</option>
                                            <option>Name</option>
                                            <option>name</option>
                                        </select>
                                    </div>
                                    <div class="filter-block">
                                        <div class="search-group">
                                            <input type="text" class="form-control" name="search" placeholder="Search">
                                            <i class="bi bi-search"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="body">
                                    <table class="broadcast-list-table">
                                        <thead>
                                            <th>Broadcast Name</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Language</th>
                                            <th>Last Updated</th>
                                            <th>Actions</th>
                                        </thead>
                                        <tbody>
                                            <td>
                                                <div class="text">Untitled_240254</div>
                                            </td>
                                            <td>
                                                <div class="text">Account Update</div>
                                            </td>
                                            <td>
                                                <div class="status"><i class="bi bi-check-circle-fill"></i>Approved</div>
                                            </td>
                                            <td>
                                                <div class="text">English</div>
                                            </td>
                                            <td>
                                                <div class="text">01-05-2022</div>
                                            </td>
                                            <td>
                                                <button class="action-btn btn-copy"><i class="bi bi-files"></i></button>
                                                <button class="action-btn btn-seen"><i class="bi bi-eye"></i></button>
                                                <button class="action-btn btn-delete"><i class="bi bi-trash"></i></button>                                               
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
<div class="modal fade new-br-modal" id="newTemp" tabindex="-1" aria-labelledby="newTempLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="inner-wrapper">
            <div class="content-block">
                <div class="wrapper">
                    <div class="header">
                        <div class="title">Create template message</div>
                    </div>
                    <div class="body">
                        <div class="form-section">
                            <div class="row g-3">
                                <div class="col-lg-6">
                                    <label class="form-label">Template Name</label>
                                    <input type="text" class="form-control" name="temp_name" placeholder="Template Name">
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label">Category</label>
                                    <select class="form-select" name="temp_category">
                                        <option selected disabled>Alert Update</option>
                                        <option>Marketing</option>
                                        <option>Business</option>
                                        <option>Promotion</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label">Language</label>
                                    <select class="form-select" name="temp_lang">
                                        <option selected disabled>English</option>
                                        <option>Spanish</option>
                                        <option>Hindi</option>
                                        <option>Sinhala</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Header <span class="light-text">(Optional)</span></label>
                                    <div class="light-text">Add a title or choose which type of media you'll use for this header. Your title can't include more than one variable.</div>
                                </div>
                                <div class="col-lg-6">
                                    <select class="form-select" name="temp_header">
                                        <option selected disabled>Text</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="temp_type_header" placeholder="Type your header">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Body</label>
                                    <div class="light-text">To add a custom variable, please add a variable in double curly brackets without a space. Example: </div>
                                </div>
                                <div class="col-12">
                                    <div class="char-count">12/1024</div>
                                    <textarea class="form-control" name="temp_body" style="height: 100px;" rows="3" placeholder="Text"></textarea>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Footer <span class="light-text">(Optional)</span></label>
                                    <div class="light-text">Add a short line of text to the bottom of your message template.</div>
                                </div>
                                <div class="col-12">
                                    <div class="char-count">01/60</div>
                                    <input type="text" class="form-control" name="temp_footer" placeholder="Text">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Buttons <span class="light-text">(Optional)</span></label>
                                    <div class="light-text">Create buttons that let customers respond to your message or take action.</div>
                                </div>
                                <div class="col-12">
                                    <select class="form-select" name="temp_buttons">
                                        <option selected disabled>Quick Reply</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <div class="char-count">01/20</div>
                                    <input type="text" class="form-control" name="temp_button_text" placeholder="Text">
                                </div>
                                <div class="col-4">
                                    <button type="button" class="btn-save">Save as Draft</button>
                                </div>
                                <div class="col-4">
                                    <button type="button" class="btn-submit">Save and Submit</button>
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
                        <img src="https://via.placeholder.com/300x200.png" alt="">
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

@endpush