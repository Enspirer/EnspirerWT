@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<link rel="stylesheet" href="{{url('css/categories.css')}}">
    
@include('frontend.includes.home_nav')

<section class="section-categories active" id="mainCat">
    <div class="container">
        <div class="header">
            <h2 class="title">Top Categories at Tallentor</h2>
            <div class="text">one place with thousands of creative talents</div>
        </div>
        <div class="row g-4 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1">
            <div class="col">
                <div class="card blue-overlay">
                    <a href="#" class="inner-wrapper" onclick="catviewer('1')">
                        <div class="overlay">
                            <span class="big-circle"></span>
                            <span class="small-circle"></span>
                        </div>
                        <div class="content">
                            <div class="icon-block">
                                <i class="bi bi-slack"></i>
                            </div>
                            <div class="title">Programming &
                                Development</div>
                            <div class="resources">3,394
                                <span>EXPERTS</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card green-overlay">
                    <a href="#" class="inner-wrapper" onclick="catviewer('2')">
                        <div class="overlay">
                            <span class="big-circle"></span>
                            <span class="small-circle"></span>
                        </div>
                        <div class="content">
                            <div class="icon-block">
                                <i class="bi bi-slack"></i>
                            </div>
                            <div class="title">Digital Marketing</div>
                            <div class="resources">3,394
                                <span>EXPERTS</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card yellow-overlay">
                    <a href="#" class="inner-wrapper" onclick="catviewer('3')">
                        <div class="overlay">
                            <span class="big-circle"></span>
                            <span class="small-circle"></span>
                        </div>
                        <div class="content">
                            <div class="icon-block">
                                <i class="bi bi-slack"></i>
                            </div>
                            <div class="title">Graphic Designing</div>
                            <div class="resources">3,394
                                <span>EXPERTS</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card red-overlay">
                    <a href="#" class="inner-wrapper" onclick="catviewer('4')">
                        <div class="overlay">
                            <span class="big-circle"></span>
                            <span class="small-circle"></span>
                        </div>
                        <div class="content">
                            <div class="icon-block">
                                <i class="bi bi-slack"></i>
                            </div>
                            <div class="title">Art & Craft</div>
                            <div class="resources">3,394
                                <span>EXPERTS</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card yellow-overlay">
                    <a href="#" class="inner-wrapper" onclick="catviewer('5')">
                        <div class="overlay">
                            <span class="big-circle"></span>
                            <span class="small-circle"></span>
                        </div>
                        <div class="content">
                            <div class="icon-block">
                                <i class="bi bi-slack"></i>
                            </div>
                            <div class="title">Writing & Translation</div>
                            <div class="resources">3,394
                                <span>EXPERTS</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card red-overlay">
                    <a href="#" class="inner-wrapper" onclick="catviewer('6')">
                        <div class="overlay">
                            <span class="big-circle"></span>
                            <span class="small-circle"></span>
                        </div>
                        <div class="content">
                            <div class="icon-block">
                                <i class="bi bi-slack"></i>
                            </div>
                            <div class="title">Video & Photography</div>
                            <div class="resources">3,394
                                <span>EXPERTS</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card green-overlay">
                    <a href="#" class="inner-wrapper" onclick="catviewer('7')">
                        <div class="overlay">
                            <span class="big-circle"></span>
                            <span class="small-circle"></span>
                        </div>
                        <div class="content">
                            <div class="icon-block">
                                <i class="bi bi-slack"></i>
                            </div>
                            <div class="title">Music & Audio</div>
                            <div class="resources">3,394
                                <span>EXPERTS</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card blue-overlay">
                    <a href="#" class="inner-wrapper" onclick="catviewer('8')">
                        <div class="overlay">
                            <span class="big-circle"></span>
                            <span class="small-circle"></span>
                        </div>
                        <div class="content">
                            <div class="icon-block">
                                <i class="bi bi-slack"></i>
                            </div>
                            <div class="title">Business & Sales</div>
                            <div class="resources">3,394
                                <span>EXPERTS</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-inner-category" id="innerCat">
    <div class="container">
        <div class="header">
            <h2 class="title">Top Categories at Tallentor</h2>
            <div class="text">one place with thousands of creative talents</div>
        </div>
        <div class="row g-5">
            <div class="col-lg-3">
                <div class="category-nav" id="categories">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" id="categoryNav1" class="nav-link" onclick="optionBlocks('1')">
                                <i class="bi bi-slack active-hide"></i>
                                <span class="active-hide">Programming &
                                    Development</span>
                                <div class="card blue-overlay">
                                    <div class="overlay">
                                        <span class="big-circle"></span>
                                        <span class="small-circle"></span>
                                    </div>
                                    <div class="content">
                                        <div class="icon-block">
                                            <i class="bi bi-slack"></i>
                                        </div>
                                        <div class="title">Programming &
                                            Development</div>
                                        <div class="resources">3,394
                                            <span>EXPERTS</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" id="categoryNav2" class="nav-link" onclick="optionBlocks('2')">
                                <i class="bi bi-slack active-hide"></i>
                                <span class="active-hide">Digital Marketing</span>
                                <div class="card green-overlay">
                                    <div class="overlay">
                                        <span class="big-circle"></span>
                                        <span class="small-circle"></span>
                                    </div>
                                    <div class="content">
                                        <div class="icon-block">
                                            <i class="bi bi-slack"></i>
                                        </div>
                                        <div class="title">Digital Marketing</div>
                                        <div class="resources">3,394
                                            <span>EXPERTS</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" id="categoryNav3" class="nav-link" onclick="optionBlocks('3')">
                                <i class="bi bi-slack active-hide"></i>
                                <span class="active-hide">Graphic Designing</span>
                                <div class="card yellow-overlay">
                                    <div class="overlay">
                                        <span class="big-circle"></span>
                                        <span class="small-circle"></span>
                                    </div>
                                    <div class="content">
                                        <div class="icon-block">
                                            <i class="bi bi-slack"></i>
                                        </div>
                                        <div class="title">Graphic Designing</div>
                                        <div class="resources">3,394
                                            <span>EXPERTS</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" id="categoryNav4" class="nav-link" onclick="optionBlocks('4')">
                                <i class="bi bi-slack active-hide"></i>
                                <span class="active-hide">Art & Craft</span>
                                <div class="card red-overlay">
                                    <div class="overlay">
                                        <span class="big-circle"></span>
                                        <span class="small-circle"></span>
                                    </div>
                                    <div class="content">
                                        <div class="icon-block">
                                            <i class="bi bi-slack"></i>
                                        </div>
                                        <div class="title">Art & Craft</div>
                                        <div class="resources">3,394
                                            <span>EXPERTS</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" id="categoryNav5" class="nav-link" onclick="optionBlocks('5')">
                                <i class="bi bi-slack active-hide"></i>
                                <span class="active-hide">Writing & Translation</span>
                                <div class="card yellow-overlay">
                                    <div class="overlay">
                                        <span class="big-circle"></span>
                                        <span class="small-circle"></span>
                                    </div>
                                    <div class="content">
                                        <div class="icon-block">
                                            <i class="bi bi-slack"></i>
                                        </div>
                                        <div class="title">Writing & Translation</div>
                                        <div class="resources">3,394
                                            <span>EXPERTS</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" id="categoryNav6" class="nav-link" onclick="optionBlocks('6')">
                                <i class="bi bi-slack active-hide"></i>
                                <span class="active-hide">Video & Photography</span>
                                <div class="card red-overlay">
                                    <div class="overlay">
                                        <span class="big-circle"></span>
                                        <span class="small-circle"></span>
                                    </div>
                                    <div class="content">
                                        <div class="icon-block">
                                            <i class="bi bi-slack"></i>
                                        </div>
                                        <div class="title">Video & Photography</div>
                                        <div class="resources">3,394
                                            <span>EXPERTS</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" id="categoryNav7" class="nav-link" onclick="optionBlocks('7')">
                                <i class="bi bi-slack active-hide"></i>
                                <span class="active-hide">Music & Audio</span>
                                <div class="card green-overlay">
                                    <div class="overlay">
                                        <span class="big-circle"></span>
                                        <span class="small-circle"></span>
                                    </div>
                                    <div class="content">
                                        <div class="icon-block">
                                            <i class="bi bi-slack"></i>
                                        </div>
                                        <div class="title">Music & Audio</div>
                                        <div class="resources">3,394
                                            <span>EXPERTS</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" id="categoryNav8" class="nav-link" onclick="optionBlocks('8')">
                                <i class="bi bi-slack active-hide"></i>
                                <span class="active-hide">Business & Sales</span>
                                <div class="card blue-overlay">
                                    <div class="overlay">
                                        <span class="big-circle"></span>
                                        <span class="small-circle"></span>
                                    </div>
                                    <div class="content">
                                        <div class="icon-block">
                                            <i class="bi bi-slack"></i>
                                        </div>
                                        <div class="title">Business & Sales</div>
                                        <div class="resources">3,394
                                            <span>EXPERTS</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row g-0">
                    <div id="categoryBlock1" class="category-options">
                        <div class="row g-4 row-cols-lg-3 row-cols-2">
                            <div class="col">
                                <div class="option-card">
                                    <a href="#">
                                        <div class="image-block">
                                            <img src="{{url('images/f3d0c857aaf69810618821c2a799adb5.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Basic Website
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="#">
                                        <div class="image-block">
                                            <img src="{{url('images/f3d0c857aaf69810618821c2a799adb5.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            Dynamic Website
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="#">
                                        <div class="image-block">
                                            <img src="{{url('images/f3d0c857aaf69810618821c2a799adb5.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            E-commerce Website
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="#">
                                        <div class="image-block">
                                            <img src="{{url('images/f3d0c857aaf69810618821c2a799adb5.png')}}" alt="">
                                        </div>
                                        <div class="content-block">
                                            WordPress Website
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="categoryBlock2" class="category-options">
                        <div class="row g-4 row-cols-lg-3">
                            <div class="col">
                                <div class="option-card">
                                    <a href="#">
                                        <div class="image-block">
                                            <img src="images/ec5929bdd46c2af2341fa16b551348c3.png" alt="">
                                        </div>
                                        <div class="content-block">
                                            Basic Website
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="#">
                                        <div class="image-block">
                                            <img src="images/ec5929bdd46c2af2341fa16b551348c3.png" alt="">
                                        </div>
                                        <div class="content-block">
                                            Dynamic Website
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="#">
                                        <div class="image-block">
                                            <img src="images/ec5929bdd46c2af2341fa16b551348c3.png" alt="">
                                        </div>
                                        <div class="content-block">
                                            E-commerce Website
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="option-card">
                                    <a href="#">
                                        <div class="image-block">
                                            <img src="images/ec5929bdd46c2af2341fa16b551348c3.png" alt="">
                                        </div>
                                        <div class="content-block">
                                            WordPress Website
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="categoryBlock3" class="category-options"></div>
                    <div id="categoryBlock4" class="category-options"></div>
                    <div id="categoryBlock5" class="category-options"></div>
                    <div id="categoryBlock6" class="category-options"></div>
                    <div id="categoryBlock7" class="category-options"></div>
                    <div id="categoryBlock8" class="category-options"></div>
                </div>
                <div class="row g-0">
                    <div class="section-project-form">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Programming & Development</a></li>
                            <li class="breadcrumb-item"><i class="bi bi-chevron-right"></i></li>
                            <li class="breadcrumb-item active">Basic Website</li>
                        </ul>

                        <form class="row g-4 project-form">
                            <div class="col-md-6">
                                <label for="jobTitle" class="form-label">Give your job a title</label>
                                <input type="text" class="form-control" id="jobTitle" placeholder="Type your title">
                            </div>
                            <div class="col-md-6">
                                <label for="clientName" class="form-label">Give your Name</label>
                                <input type="password" class="form-control" id="clientName" placeholder="Type your name">
                            </div>
                            <div class="col-md-6">
                                <label for="clientEmail" class="form-label">Give your Email Address</label>
                                <input type="email" class="form-control" id="clientEmail"
                                    placeholder="Type your Email Address">
                            </div>
                            <div class="col-md-6">
                                <label for="clientName" class="form-label">Give your Name</label>
                                <input type="password" class="form-control" id="clientName" placeholder="Type your name">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="projectFiles">Upload
                                    <span class="text">Include expected deliverables, requirements and time frame for
                                        delivery</span>
                                </label>
                                <div class="input-file-wrapper">
                                    <input type="file" id="projectFiles">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <textarea class="form-control" id="projecetBrief" placeholder="Project Brief"></textarea>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="project-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.includes.footer')

    
@endsection

@push('after-scripts')

<script>
const mainCat = document.getElementById("mainCat");
const innerSec = document.getElementById("innerCat");
const catOptions = innerSec.querySelectorAll(".category-options");
const optCard = innerSec.querySelectorAll(".option-card");
const projectForm = innerSec.querySelector(".section-project-form");

// Navbar active classes
const categories = document.getElementById("categories");
const items = categories.querySelectorAll('.nav-link');

items.forEach(function (item) {
    item.addEventListener("click", function () {
        items.forEach(function (tab) {
            tab.classList.remove("active");
        });
        item.classList.add("active");
        projectForm.classList.remove("active");
    });
});

// Show Hide Blocks

function catviewer(id) {
    mainCat.classList.remove("active");
    innerSec.classList.add("active");
    document.getElementById("categoryNav" + id).classList.add("active");
    document.getElementById("categoryBlock" + id).classList.add("active");
}

function optionBlocks(id) {
    catOptions.forEach(function (cat) {
        cat.classList.remove("active");
    });
    document.getElementById("categoryBlock" + id).classList.add("active");
}

optCard.forEach(function (option) {
    option.addEventListener("click", function () {
        catOptions.forEach(function (cat) {
            cat.classList.remove("active");
        });
        projectForm.classList.add("active");
    });
});
</script>

@endpush

