@extends('frontend.layouts.app')

@section('title', 'Project scope | Business analysis | system design |scope document| system architecture')
@section('meta_description', 'The project scope documentation is vital for the best productivity of the project. The Expert Team consist of project Manager, Business Analyst, System designer, QA Specialist | system architect ')

@section('content')

<link rel="stylesheet" href="{{url('css/expert_center.css')}}">

@include('frontend.includes.home_nav')

<section class="hero-section">
    <div class="container">
        <div class="inner-wrapper">
            <div class="content-block">
                <h2 class="title-light">Tallentor</h2>
                <h2 class="title">Expert Center</h2>
                <p class="text">The efficiency of the project largely depends on precision planning of the scope. Hire the best team of experts to plan your project to achieve maximum results</p>
                <a href="{{url('/contact')}}" class="cta-btn-border">
                    <span class="text">Contact Expert Center</span>
                    <i class="bi bi-arrow-right-short"></i>
                </a>
            </div>
            <div class="image-block">
                <img src="{{url('images/landing_page/expert_center/hero-img.png')}}" alt="">
            </div>
        </div>
    </div>
</section>

<section class="section-steps">
    <div class="container">
        <div class="title">Tallentor Expert Center</div>
        <div class="card-body desktop">
            <div class="cards cardsL">
                <div class="card active">
                    <div class="number">01</div>
                    <div class="title">Free Consultation</div>
                    <div class="text">Brief consultation to analyze the scale of the project</div>
                    <a href="#" class="card-btn">Request for 15 min free consultation</a>
                </div>
                <div class="card">
                    <div class="number">03</div>
                    <div class="title">Submit The Documents On Tallentor</div>
                    <div class="text">Submit all the documents and attachments on Tallentor</div>
                </div>
                <div class="card">
                    <div class="number">05</div>
                    <div class="title">Evaluation Process by Tallentor experts</div>
                    <div class="text">The Tallentor Expert team will help the companies to evaluate the quotations.</div>
                </div>
                <div class="card">
                    <div class="number">07</div>
                    <div class="title">Monitor the Progress of the Project</div>
                    <div class="text">Comprehensive Project Management tool monitor and manage the entire process of the project lifecycle.</div>
                </div>
            </div>
            <div class="indicator">
                <div class="progressV">
                    <div class="progressBarV"></div>
                </div>
            </div>
            <div class="cards cardsR">
                <div class="card">
                    <div class="number">02</div>
                    <div class="title">Project Planing</div>
                    <div class="text">Comprehensive evaluation of the project with all necessary documentation</div>
                    <a href="#" class="card-btn">Book your Consultation</a>
                </div>
                <div class="card">
                    <div class="number">04</div>
                    <div class="title">Receive Bids or Project Quotes</div>
                    <div class="text">Qualified agencies will submit their bids for the Live Auction and Project quotes for the projects submitted by Companies.</div>
                </div>
                <div class="card">
                    <div class="number">06</div>
                    <div class="title">Award the project to the selected agency</div>
                    <div class="text">This is the content of the last section</div>
                </div>
                <div class="card">
                    <div class="number">08</div>
                    <div class="title">Q&A and Testing of the final Project by Tallentor Experts</div>
                    <div class="text">Making sure the standards of the project are met, our panel of experts overview of the project</div>
                </div>
            </div>
        </div>
        <div class="card-body mobile">
            <div class="cards">
                <div class="card active">
                    <div class="number">01</div>
                    <div class="title">Free Consultation</div>
                    <div class="text">Brief consultation to analyze the scale of the project</div>
                    <a href="#" class="card-btn">Request for 15 min free consolations</a>
                </div>
                <div class="card">
                    <div class="number">02</div>
                    <div class="title">Project Planing</div>
                    <div class="text">Comprehensive evaluation of the project with all necessary documentation</div>
                    <a href="#" class="card-btn">Book your Consultation</a>
                </div>
                <div class="card">
                    <div class="number">03</div>
                    <div class="title">Submit The Documents On Tallentor</div>
                    <div class="text">Submit all the documents and attachments on Tallentor</div>
                </div>
                <div class="card">
                    <div class="number">04</div>
                    <div class="title">Receive Bids or Project Quotes</div>
                    <div class="text">Qualified agencies will submit their bids for the Live Auction and Project quotes for the projects submitted by Companies.</div>
                </div>
                <div class="card">
                    <div class="number">05</div>
                    <div class="title">Evaluation Process by Tallentor experts</div>
                    <div class="text">The Tallentor Expert team will help the companies to evaluate the quotations.</div>
                </div>
                <div class="card">
                    <div class="number">06</div>
                    <div class="title">Award the project to the selected agency</div>
                    <div class="text">This is the content of the last section</div>
                </div>
                <div class="card">
                    <div class="number">07</div>
                    <div class="title">Monitor the Progress of the Project</div>
                    <div class="text">Comprehensive Project Management tool monitor and manage the entire process of the project lifecycle.</div>
                </div>
                <div class="card">
                    <div class="number">08</div>
                    <div class="title">Q&A and Testing of the final Project by Tallentor Experts</div>
                    <div class="text">Making sure the standards of the project are met, our panel of experts overview of the project</div>
                </div>
            </div>
            <div class="indicator">
                <div class="progressV">
                    <div class="progressBarV"></div>
                </div>
            </div>
        </div>
        <div class="title">Contact Expert Center</div>
        <div class="button-block">
            <a href="#" class="cta-btn-border">
                <i class="bi bi-whatsapp"></i>
                <span class="text">Via Whatsapp</span>
            </a>
            <a href="{{url('/contact')}}" class="cta-btn-fill">
                <i class="bi bi-telephone-forward"></i>
                <span class="text">Contact Us</span>
            </a>
        </div>
    </div>
</section>

@include('frontend.includes.footer')


@endsection

@push('after-scripts')

@endpush
