@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/seo.css')}}">

@include('frontend.includes.mobile_nav')  

    <section id="sectionMainWindow">
        @include('frontend.includes.sidebar')

        <div id="sectionBody">
        @include('frontend.includes.nav')

        <!-- Content goes here -->
            <div class="row g-0">
                <div class="section-content">
                    <div class="section-container">

                        <!-- Section Reports Main End -->

                        <div class="breadcrumb-block">
                            <ul class="breadcrumb mb-5">
                                <li class="breadcrumb-item"><a href="{{route('frontend.user.project.index')}}">Projects</a></li>
                                <li class="breadcrumb-item">{{App\Models\Projects::where('id',$project_id)->first()->name}}</li>
                                <li class="breadcrumb-item active">SEO</li>
                            </ul>
                        </div>

                        @include('frontend.user.projects.includes.card_section')

                        @include('frontend.user.projects.includes.seo_nav')


                        @if(App\Models\SeoBot::where('project_id',$project_id)->first() == null)
                            <div class="seo-section bot-block" id="botSection">
                                <div class="inner-wrapper">
                                    <div class="subtitle">Get your own</div>
                                    <div class="title">Optimizer Bot</div>
                                    <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quibusdam earum, numquam odio delectus porro nisi eos deleniti rerum asperiores?</div>
                                    <a href="#" class="bot-btn" data-bs-toggle="modal" data-bs-target="#botModal">Get Your Bot</a>
                                </div>
                            </div>
                        @else
                            <div class="card">
                                <div class="card-body">
                                    <h4>Submitted Successfully. One of our agents will be in touch shortly.</h4>
                                </div>
                            </div>
                        @endif

                        <div class="modal fade bot-modal" id="botModal" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="back-btn" btn-prev>
                                            <i class="bi bi-arrow-left-short"></i>
                                            <div class="text">Back</div>
                                        </button>
                                        <div class="modal-title">Get Your Bot</div>
                                        <i class="bi bi-x-lg" data-bs-dismiss="modal"></i>
                                    </div>
                                    <div class="modal-body">
                                        <div class="naviagtion-block">
                                            <ul class="nav-tree">
                                                <li class="list-item active">Choose a Bot
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="list-item">Quantity
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="list-item">Terms & Conditions
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="list-item">Apply your bot
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="content-block">
                                            <form action="{{route('frontend.user.bot_store')}}" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                                <div class="action-block slider active">
                                                    <input type="hidden" slider-input>
                                                    <div class="splide bot-slider" id="botSlider">
                                                        <div class="splide__track">
                                                            <ul class="splide__list">
                                                                <li class="splide__slide">
                                                                    <a href="#" class="slider-link" data-bot="bot-1">
                                                                        <div class="slider-card">
                                                                            <div class="image-block">
                                                                                <img src="{{url('images/dashboard/ims_pro/bot-slide.png')}}" >
                                                                            </div>
                                                                            <div class="content-block">
                                                                                <div class="title">Bot Name Here</div>
                                                                                <ul class="option-list">
                                                                                    <li>
                                                                                        Sample Option
                                                                                        <i class="bi bi-check-circle-fill"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        Sample Option
                                                                                        <i class="bi bi-check-circle-fill"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        Sample Option
                                                                                        <i class="bi bi-check-circle-fill"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        Sample Option
                                                                                        <i class="bi bi-check-circle-fill"></i>
                                                                                    </li>
                                                                                </ul>
                                                                                <div class="amount">$500</div>
                                                                            </div>
                                                                        </div>
                                                                        <input type="hidden" name="bot_type" value="Auto Promoting Bot">
                                                                    </a>
                                                                </li>
                                                                <li class="splide__slide">
                                                                    <a href="#" class="slider-link" data-bot="bot-2">
                                                                        <div class="slider-card">
                                                                            <div class="image-block">
                                                                                <img src="{{url('images/dashboard/ims_pro/bot-slide.png')}}" >
                                                                            </div>
                                                                            <div class="content-block">
                                                                                <div class="title">Bot Name Here</div>
                                                                                <ul class="option-list">
                                                                                    <li>
                                                                                        Sample Option
                                                                                        <i class="bi bi-check-circle-fill"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        Sample Option
                                                                                        <i class="bi bi-check-circle-fill"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        Sample Option
                                                                                        <i class="bi bi-check-circle-fill"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        Sample Option
                                                                                        <i class="bi bi-check-circle-fill"></i>
                                                                                    </li>
                                                                                </ul>
                                                                                <div class="amount">$500</div>
                                                                            </div>
                                                                        </div>
                                                                        <input type="hidden" name="bot_type" value="SEO">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="action-block quantity-block">
                                                    <input type="hidden" quantity-input>
                                                    <div class="title">How many Bots do you wish to integrate your site ?</div>
                                                    <div class="input-group">
                                                        <select class="form-select" name="activated_bot_count" form-select>
                                                            <option value="1" selected>1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                        <button type="button" class="btn-next" btn-next><i class="bi bi-arrow-right"></i></button>
                                                    </div>
                                                </div>
                                                <div class="action-block terms-block">
                                                    <input type="hidden" terms-input>
                                                    <div class="title">Terms & Conditions</div>
                                                    <div class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias exercitationem eius recusandae sint quasi? Rem ipsa iste, labore adipisci vero mollitia sunt nam totam accusamus! Eum perspiciatis doloribus cumque maxime!</div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="termsCheck" form-check>
                                                        <label class="form-check-label" for="termsCheck"> I Agreed </label>
                                                    </div>
                                                    <button type="button" class="btn-next" btn-next><i class="bi bi-arrow-right"></i></button>
                                                </div>
                                                <div class="action-block summery-block">
                                                    <input type="hidden" summery-input>
                                                    <div class="fees-block">
                                                        <div class="fee-row">
                                                            <div class="text">Subtotal</div>
                                                            <div class="amount">$20.00</div>
                                                            <input type="hidden" name="subtotal" value="20">
                                                        </div>
                                                        <div class="fee-row">
                                                            <div class="text">Discount</div>
                                                            <div class="amount">$20.00</div>
                                                            <input type="hidden" name="discount" value="20">
                                                        </div>
                                                        <div class="fee-row">
                                                            <div class="text">Taxes & Fees</div>
                                                            <div class="amount">$20.00</div>
                                                            <input type="hidden" name="taxes_fees" value="20">
                                                        </div>
                                                        <div class="fee-row">
                                                            <div class="text">Total</div>
                                                            <div class="amount" total-fee>$20.00</div>
                                                            <input type="hidden" name="total" value="20">
                                                        </div>
                                                    </div>                                                    
                                                    <input type="hidden" name="hidden_project_id" value="{{$project_id}}">
                                                    <button type="submit" class="btn-submit" btn-submit>Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="text">Get Bonus</div>
                                        <div class="bonus">$5</div>
                                    </div>
                                </div>
                                <a href="#" class="bot-btn">Get Your Bot</a>
                            </div>
                        </div>


                        <div class="seo-section overview-block" id="overviewSection">
                            <div class="heaeder">
                                <div class="title">Overview</div>
                                <div class="duration">{{$project->created_at->diffForHumans()}}</div>
                            </div>
                            <div class="body">
                                <div class="guage-block">
                                    <div id="guage" style="width:350px;height:350px;margin:auto"></div>
                                    <div class="status-block">
                                        <div class="precentage">{{number_format((float)$project->score, 2, '.', '')}}%</div>
                                        <div class="stats font-blue">Tests Passed</div>
                                        <div class="name">{{$project->name}}</div>
                                        <div class="url font-blue">{{$project->url}}</div>
                                    </div>
                                </div>
                                <div class="progress-block">
                                    <div class="inner-block">
                                        <div class="header font-gray">
                                            <div class="text">{{$issues_summary['passed_high_risk_points']}} high issues</div>
                                            <div class="precentage">{{number_format((float)($issues_summary['passed_high_risk_points']/$issues_summary['total_high_risk_points'])*100, 2, '.', '')}}%</div>
                                        </div>
                                        <div class="progress">
                                            @php
                                                $high = $issues_summary['passed_high_risk_points']/$issues_summary['total_high_risk_points']*100;
                                            @endphp
                                            <div class="progress-bar bg-red" style="width:{{$high}}%"></div>
                                        </div>
                                    </div>
                                    <div class="inner-block">
                                        <div class="header font-gray">
                                            <div class="text">{{$issues_summary['passed_medium_risk_points']}} medium issues</div>
                                            <div class="precentage">{{number_format((float)($issues_summary['passed_medium_risk_points']/$issues_summary['total_medium_risk_points'])*100, 2, '.', '')}}%</div>
                                        </div>
                                        <div class="progress">
                                            @php
                                                $medium = $issues_summary['passed_medium_risk_points']/$issues_summary['total_medium_risk_points']*100;
                                            @endphp
                                            <div class="progress-bar bg-orange" style="width:{{$medium}}%"></div>
                                        </div>
                                    </div>
                                    <div class="inner-block">
                                        <div class="header font-gray">
                                            <div class="text">{{$issues_summary['passed_low_risk_points']}} low issues</div>
                                            <div class="precentage">{{number_format((float)($issues_summary['passed_low_risk_points']/$issues_summary['total_low_risk_points'])*100, 2, '.', '')}}%</div>
                                        </div>
                                        <div class="progress">
                                            @php
                                                $low = $issues_summary['passed_low_risk_points']/$issues_summary['total_low_risk_points']*100;
                                            @endphp
                                            <div class="progress-bar bg-brown" style="width: {{$low}}%"></div>
                                        </div>
                                    </div>
                                    <div class="inner-block">
                                        <div class="header font-gray">
                                            @php
                                                $importance = $issues_summary['passed_high_risk_points'] + $issues_summary['passed_medium_risk_points'] + $issues_summary['passed_low_risk_points'];
                                                $total = $issues_summary['total_high_risk_points'] + $issues_summary['total_medium_risk_points'] + $issues_summary['total_low_risk_points'];
                                            @endphp
                                            <div class="text">{{$issues_summary['passed_high_risk_points'] + $issues_summary['passed_medium_risk_points'] + $issues_summary['passed_low_risk_points']}} test passed</div>
                                            <div class="precentage">{{ ($importance/$total)*100 }}%</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-blue" style="width:{{ ($importance/$total)*100 }}%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="infor-block">
                                    <div class="inner-wrapper">
                                        <div class="stats-block">
                                            <div class="header">
                                                <i class="bi font-blue bi-square-fill"></i>
                                                <div class="text">Pass</div>
                                                <i class="bi font-gray bi-question-circle"></i>
                                            </div>
                                            <div class="body">
                                                <i class="bi font-blue bi-arrow-up-right"></i>
                                                <div class="precentage font-blue">{{ ($importance/$total)*100 }}%</div>
                                            </div>
                                        </div>
                                        <div class="stats-block">
                                            <div class="header">
                                                <i class="bi font-gray bi-square-fill"></i>
                                                <div class="text">low</div>
                                                <i class="bi font-gray bi-question-circle"></i>
                                            </div>
                                            <div class="body">
                                                <i class="bi font-green bi-arrow-up-right"></i>
                                                <div class="precentage font-green">{{number_format((float)($issues_summary['passed_low_risk_points']/$issues_summary['total_low_risk_points'])*100, 2, '.', '')}}%</div>
                                            </div>
                                        </div>
                                        <div class="stats-block">
                                            <div class="header">
                                                <i class="bi font-orange bi-square-fill"></i>
                                                <div class="text">Medium</div>
                                                <i class="bi font-gray bi-question-circle"></i>
                                            </div>
                                            <div class="body">
                                                <i class="bi font-orange bi-arrow-down-left"></i>
                                                <div class="precentage font-orange">{{number_format((float)($issues_summary['passed_medium_risk_points']/$issues_summary['total_medium_risk_points'])*100, 2, '.', '')}}%</div>
                                            </div>
                                        </div>
                                        <div class="stats-block">
                                            <div class="header">
                                                <i class="bi font-red bi-square-fill"></i>
                                                <div class="text">Risks</div>
                                                <i class="bi font-gray bi-question-circle"></i>
                                            </div>
                                            <div class="body">
                                                <i class="bi font-red bi-arrow-up-right"></i>
                                                <div class="precentage font-red">{{number_format((float)($issues_summary['passed_high_risk_points']/$issues_summary['total_high_risk_points'])*100, 2, '.', '')}}%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        @if($project->seo_result != null)
                            <div class="seo-section seo-block" id="seoSection">
                                <div class="heaeder">
                                    <div class="title">SEO</div>
                                    <div class="duration">{{$project->created_at->diffForHumans()}}</div>
                                </div>
                                @foreach(json_decode($project->seo_result) as $key => $seo_result)
                                    @if($key == 'title' || $key == 'meta_description' || $key == 'headings' || $key == 'content_keywords' || $key == 'image_keywords' || $key == 'seo_friendly_url' || $key == '404_page' || $key == 'robots' || $key == 'noindex' || $key == 'in_page_links' || $key == 'language' || $key == 'favicon')
                                    
                                        <div class="body" style="border-bottom: 1px solid #ddd">
                                            <table class="seo-table">
                                                <tbody>
                                                    <tr>
                                                        @if($seo_result->importance == 'high')
                                                            <td class="tbCol-1"><i class="bi font-red bi-triangle-fill"></i></td>
                                                        @elseif($seo_result->importance == 'medium')
                                                            <td class="tbCol-1"><i class="bi font-orange bi-square-fill"></i></td>
                                                        @else
                                                            <td class="tbCol-1"><i class="bi font-grey bi-circle-fill"></i></td>
                                                        @endif

                                                            <td class="tbCol-2">                                                           
                                                                <div class="title">{{ str_replace("_"," ", ucfirst(trans($key)) ) }}</div>                                                            
                                                            </td>
                                                            <td class="tbCol-3">
                                                                @if($key == 'title')    
                                                                    @if(isset($seo_result->errors))
                                                                        @if(isset($seo_result->errors->length))
                                                                            @if(isset($seo_result->errors->length->min) || isset($seo_result->errors->length->max))
                                                                                @if($seo_result->errors->length->min == null || $seo_result->errors->length->max == null)
                                                                                    <div class="title">Need to added a long length title.</div>
                                                                                @else
                                                                                    <div class="title">The title tag is perfect.</div>
                                                                                @endif
                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                    <div class="text">{{$seo_result->value}}</div>
                                                                @endif

                                                                @if($key == 'meta_description')
                                                                    @if(isset($seo_result->errors))
                                                                        @if(isset($seo_result->errors->missing))
                                                                            @if($seo_result->errors->missing == null)
                                                                                <div class="title">Meta description is missing.</div>
                                                                            @else
                                                                                <div class="title">The meta description tag is good.</div>
                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                    <div class="text">{{$seo_result->value}}</div>
                                                                @endif

                                                                @if($key == 'headings')
                                                                    @if(isset($seo_result->errors))
                                                                        @if(isset($seo_result->errors->missing))
                                                                            @if($seo_result->errors->missing == null)
                                                                                <div class="title">headers are missing.</div>
                                                                            @else
                                                                                <div class="title">The h1 tag is the same with the title tag.</div>
                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                    @if(is_array($seo_result->value))
                                                                        @if(count($seo_result->value) != 0)
                                                                            @foreach($seo_result->value as $headings)
                                                                                <div class="text">{{$headings}}</div>                                                                  
                                                                            @endforeach
                                                                        @endif
                                                                    @endif
                                                                @endif

                                                                @if($key == 'content_keywords')
                                                                    <div class="title">The content has relevant keywords.</div>
                                                                    @if(is_array($seo_result->value))
                                                                        @if(count($seo_result->value) != 0)
                                                                            @foreach($seo_result->value as $content_keywords)
                                                                                <div class="text">{{$content_keywords}}</div>                                                                  
                                                                            @endforeach
                                                                        @endif
                                                                    @endif
                                                                @endif

                                                                @if($key == 'image_keywords')
                                                                    <div class="title">All images have alt attributes set.</div>
                                                                    <div class="text">{{$seo_result->value}}</div>
                                                                @endif

                                                                @if($key == 'seo_friendly_url')
                                                                    @if(isset($seo_result->errors)) 
                                                                        @if(isset($seo_result->errors->bad_format)) 
                                                                            @if($seo_result->errors->bad_format == null)
                                                                                <div class="title">The URL is not SEO friendly.</div>
                                                                            @else
                                                                                <div class="title">The URL is SEO friendly.</div>
                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                    <a href="{{$seo_result->value}}"><div class="text">{{$seo_result->value}}</div></a>
                                                                @endif 

                                                                @if($key == '404_page')
                                                                    @if(isset($seo_result->errors)) 
                                                                        @if(isset($seo_result->errors->missing))
                                                                            @if($seo_result->errors->missing == null)
                                                                                <div class="title">The website has not 404 error pages.</div>
                                                                            @else
                                                                                <div class="title">The website has 404 error pages.</div>
                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                    <a href="{{$seo_result->value}}"><div class="text">{{$seo_result->value}}</div></a>
                                                                @endif 

                                                                @if($key == 'robots')
                                                                    <div class="title">The webpage can be accessed by search engines.</div>
                                                                    <div class="text">{{$seo_result->value}}</div>
                                                                @endif 

                                                                @if($key == 'noindex')
                                                                    <div class="title">The webpage does not have a noindex tag set.</div>
                                                                    <div class="text">{{$seo_result->value}}</div>
                                                                @endif 


                                                                @if($key == 'in_page_links')
                                                                    @if(isset($seo_result->errors))
                                                                        @if(isset($seo_result->errors->too_many))
                                                                            @if(isset($seo_result->errors->too_many->max))
                                                                                @if($seo_result->errors->too_many->max == null)
                                                                                    <div class="title">The number of links on the webpage is too much.</div>
                                                                                @else
                                                                                    <div class="title">The number of links on the webpage is okay.</div>
                                                                                @endif
                                                                            @endif
                                                                        @endif
                                                                    @endif

                                                                    @if(isset($seo_result->value->Externals))
                                                                        @if(count($seo_result->value->Externals) != 0)
                                                                            <div class="title my-3">Externals</div>
                                                                            @foreach($seo_result->value->Externals as $external)
                                                                                <a href="{{$external->url}}"><div class="text">{{$external->url}}</div></a>                                                                         
                                                                            @endforeach
                                                                        @endif
                                                                    @endif

                                                                    @if(isset($seo_result->value->Internals))                                                                    
                                                                        @if(count($seo_result->value->Internals) != 0)
                                                                            <div class="title my-3">Internals</div>
                                                                            @foreach($seo_result->value->Internals as $internal)
                                                                                <a href="{{$internal->url}}"><div class="text">{{$internal->url}}</div></a>                                                                         
                                                                            @endforeach
                                                                        @endif
                                                                    @endif
                                                                                                                                         
                                                                @endif

                                                                @if($key == 'language')
                                                                    <div class="title">The webpage has the language declared.</div>
                                                                    <div class="text">{{$seo_result->value}}</div>
                                                                @endif 

                                                                @if($key == 'favicon')
                                                                    @if(isset($seo_result->errors)) 
                                                                        @if(isset($seo_result->errors->missing))
                                                                            @if($seo_result->errors->missing == null)
                                                                                <div class="title">The webpage does have a favicon.</div>
                                                                            @else
                                                                                <div class="title">The webpage does not have a favicon.</div>
                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                    <div class="text">{{$seo_result->value}}</div>
                                                                @endif 

                                                                

                                                                <!-- <div class="text">The size of the HTML webpage is 176.41 kB.</div> -->
                                                            </td>
                                                            <td class="tbCol-4">
                                                                <a href="#" class="table-btn bg-green">Suggestions</a>
                                                            </td>
                                                        </tr>                                                   
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                            <!-- ********************************************************************************** -->

                            <div class="seo-section seo-block" id="performanceSection">
                                <div class="heaeder">
                                    <div class="title">Performance</div>
                                    <div class="duration">{{$project->created_at->diffForHumans()}}</div>
                                </div>
                                @foreach(json_decode($project->seo_result) as $key => $seo_result)
                                    @if($key == 'text_compression' || $key == 'load_time' || $key == 'page_size' || $key == 'http_requests' || $key == 'image_format' || $key == 'defer_javascript' || $key == 'dom_size')
                                    
                                        <div class="body" style="border-bottom: 1px solid #ddd">
                                            <table class="seo-table">
                                                <tbody>
                                                    <tr>
                                                        @if($seo_result->importance == 'high')
                                                            <td class="tbCol-1"><i class="bi font-red bi-triangle-fill"></i></td>
                                                        @elseif($seo_result->importance == 'medium')
                                                            <td class="tbCol-1"><i class="bi font-orange bi-square-fill"></i></td>
                                                        @else
                                                            <td class="tbCol-1"><i class="bi font-grey bi-circle-fill"></i></td>
                                                        @endif

                                                            <td class="tbCol-2">                                                           
                                                                <div class="title">{{ str_replace("_"," ", ucfirst(trans($key)) ) }}</div>                                                            
                                                            </td>
                                                            <td class="tbCol-3">
                                                                @if($key == 'text_compression')
                                                                    <div class="title">The HTML file is compressed.</div>
                                                                    <div class="text">{{$seo_result->value}}</div>
                                                                @endif 

                                                                @if($key == 'load_time')
                                                                    @if(isset($seo_result->errors))
                                                                        @if(isset($seo_result->errors->too_slow))
                                                                            @if(isset($seo_result->errors->too_slow->max))
                                                                                @if($seo_result->errors->too_slow->max == null)
                                                                                    <div class="title">The webpage loading time is too slow.</div>
                                                                                @else
                                                                                    <div class="title">The webpage loading time is okay.</div>
                                                                                @endif
                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                    <div class="text">{{$seo_result->value}}</div>
                                                                @endif

                                                                @if($key == 'page_size')
                                                                    @if(isset($seo_result->errors))
                                                                        @if(isset($seo_result->errors->too_large))
                                                                            @if(isset($seo_result->errors->too_large->max))
                                                                                @if($seo_result->errors->too_large->max == null)
                                                                                    <div class="title">The size of the HTML webpage is too large.</div>
                                                                                @else
                                                                                    <div class="title">The size of the HTML webpage is okay.</div>
                                                                                @endif
                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                    <div class="text">{{$seo_result->value}}</div>
                                                                @endif

                                                                @if($key == 'http_requests')
                                                                    @if(isset($seo_result->errors))     
                                                                        @if(isset($seo_result->errors->too_many))
                                                                            @if(isset($seo_result->errors->too_many->max))
                                                                                @if($seo_result->errors->too_many->max == null)
                                                                                    <div class="title">HTTP requests on the webpage is too many.</div>
                                                                                @else
                                                                                    <div class="title">There are less HTTP requests on the webpage.</div>
                                                                                @endif
                                                                            @endif
                                                                        @endif
                                                                    @endif

                                                                    @if(isset($seo_result->value->JavaScripts))
                                                                        @if(count($seo_result->value->JavaScripts) != 0)
                                                                            @foreach($seo_result->value->JavaScripts as $JavaScripts)
                                                                                <a href="{{$JavaScripts}}"><div class="text">{{$JavaScripts}}</div></a>                                                                         
                                                                            @endforeach
                                                                        @endif 
                                                                    @endif 
                                                                    @if(isset($seo_result->value->Images))
                                                                        @if(count($seo_result->value->Images) != 0)
                                                                            @foreach($seo_result->value->Images as $Images)
                                                                                <a href="{{$Images}}"><div class="text">{{$Images}}</div></a>                                                                         
                                                                            @endforeach
                                                                        @endif
                                                                    @endif
                                                                @endif

                                                                @if($key == 'image_format')
                                                                    <div class="title">The images are served in the AVIF, WebP format.</div>
                                                                    @if(is_array($seo_result->value))
                                                                        @if(count($seo_result->value) != 0)
                                                                            @foreach($seo_result->value as $image_format)
                                                                                <div class="text">{{$image_format}}</div>                                                                  
                                                                            @endforeach
                                                                        @endif
                                                                    @endif
                                                                @endif
                                                                
                                                                @if($key == 'defer_javascript')
                                                                    <div class="title">The are some javascript resources without the defer attribute.</div>
                                                                    <div class="text">{{$seo_result->value}}</div>
                                                                @endif

                                                                @if($key == 'dom_size')
                                                                    @if(isset($seo_result->errors)) 
                                                                        @if(isset($seo_result->errors->too_many))     
                                                                            @if(isset($seo_result->errors->too_many->max))
                                                                                @if($seo_result->errors->too_many->max == null)
                                                                                    <div class="title">The DOM size is not optimal.</div>
                                                                                @else
                                                                                    <div class="title">The DOM size is optimal.</div>
                                                                                @endif
                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                    <div class="text">{{$seo_result->value}}</div>
                                                                @endif


                                                                

                                                                <!-- <div class="text">The size of the HTML webpage is 176.41 kB.</div> -->
                                                            </td>
                                                            <td class="tbCol-4">
                                                                <a href="#" class="table-btn bg-green">Suggestions</a>
                                                            </td>
                                                        </tr>                                                   
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                            <!-- **************************************************************************************** -->

                            <div class="seo-section seo-block" id="">
                                <div class="heaeder">
                                    <div class="title">Security</div>
                                    <div class="duration">{{$project->created_at->diffForHumans()}}</div>
                                </div>
                                @foreach(json_decode($project->seo_result) as $key => $seo_result)
                                    @if($key == 'https_encryption' || $key == 'plaintext_email')
                                    
                                        <div class="body" style="border-bottom: 1px solid #ddd">
                                            <table class="seo-table">
                                                <tbody>
                                                    <tr>
                                                        @if($seo_result->importance == 'high')
                                                            <td class="tbCol-1"><i class="bi font-red bi-triangle-fill"></i></td>
                                                        @elseif($seo_result->importance == 'medium')
                                                            <td class="tbCol-1"><i class="bi font-orange bi-square-fill"></i></td>
                                                        @else
                                                            <td class="tbCol-1"><i class="bi font-grey bi-circle-fill"></i></td>
                                                        @endif

                                                            <td class="tbCol-2">                                                           
                                                                <div class="title">{{ str_replace("_"," ", ucfirst(trans($key)) ) }}</div>                                                            
                                                            </td>
                                                            <td class="tbCol-3">
                                                                @if($key == 'https_encryption')
                                                                    <div class="title">The webpage uses HTTPS encryption.</div>
                                                                    <a href="{{$seo_result->value}}"><div class="text">{{$seo_result->value}}</div></a>
                                                                @endif 

                                                                @if($key == 'plaintext_email')
                                                                    <div class="title">The webpage does not contain any plaintext emails.</div>
                                                                    <div class="text">{{$seo_result->value}}</div>
                                                                @endif 
                                                                
                                                            </td>
                                                            <td class="tbCol-4">
                                                                <a href="#" class="table-btn bg-green">Suggestions</a>
                                                            </td>
                                                        </tr>                                                   
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    @endif
                                @endforeach
                            </div>


                            <!-- ********************************************************************************** -->

                            <div class="seo-section seo-block" id="miscellaneousSection">
                                <div class="heaeder">
                                    <div class="title">Miscellaneous</div>
                                    <div class="duration">{{$project->created_at->diffForHumans()}}</div>
                                </div>
                                @foreach(json_decode($project->seo_result) as $key => $seo_result)
                                    @if($key == 'structured_data' || $key == 'meta_viewport' || $key == 'charset' || $key == 'sitemap' || $key == 'social' || $key == 'content_length' || $key == 'text_html_ratio' || $key == 'inline_css' || $key == 'deprecated_html_tags')
                                    
                                        <div class="body" style="border-bottom: 1px solid #ddd">
                                            <table class="seo-table">
                                                <tbody>
                                                    <tr>
                                                        @if($seo_result->importance == 'high')
                                                            <td class="tbCol-1"><i class="bi font-red bi-triangle-fill"></i></td>
                                                        @elseif($seo_result->importance == 'medium')
                                                            <td class="tbCol-1"><i class="bi font-orange bi-square-fill"></i></td>
                                                        @else
                                                            <td class="tbCol-1"><i class="bi font-grey bi-circle-fill"></i></td>
                                                        @endif

                                                            <td class="tbCol-2">                                                           
                                                                <div class="title">{{ str_replace("_"," ", ucfirst(trans($key)) ) }}</div>                                                            
                                                            </td>
                                                            <td class="tbCol-3">
                                                                
                                                                @if($key == 'structured_data')
                                                                    @if(isset($seo_result->errors)) 
                                                                        @if(isset($seo_result->errors->missing))
                                                                            @if($seo_result->errors->missing == null)
                                                                                <div class="title">Structured data is missing.</div>
                                                                            @else
                                                                                <div class="title">The webpage has structured data.</div>
                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                    @if(is_array($seo_result->value))
                                                                        @if(count($seo_result->value) != 0)
                                                                            @foreach($seo_result->value as $structured_data)
                                                                                <div class="text">{{$structured_data}}</div>                                                                  
                                                                            @endforeach
                                                                        @endif
                                                                    @endif
                                                                @endif

                                                                @if($key == 'meta_viewport')
                                                                    @if(isset($seo_result->errors)) 
                                                                        @if(isset($seo_result->errors->missing))
                                                                            @if($seo_result->errors->missing == null)
                                                                                <div class="title">Meta viewport is missing.</div>
                                                                            @else
                                                                                <div class="title">The webpage has a meta viewport tag set.</div>
                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                    <div class="text">{{$seo_result->value}}</div>
                                                                @endif 

                                                                @if($key == 'charset')
                                                                    <div class="title">The webpage has a charset value set.</div>
                                                                    <div class="text">{{$seo_result->value}}</div>
                                                                @endif 
                                                                
                                                                @if($key == 'sitemap')
                                                                    <div class="title">The website has sitemaps.</div>
                                                                    @if(is_array($seo_result->value))
                                                                        @if(count($seo_result->value) != 0)
                                                                            @foreach($seo_result->value as $sitemap)
                                                                                <a href="{{$sitemap}}"><div class="text">Sitemap</div></a>                                                                 
                                                                            @endforeach
                                                                        @endif
                                                                    @endif
                                                                @endif

                                                                @if($key == 'social')
                                                                    @if(isset($seo_result->errors)) 
                                                                        @if(isset($seo_result->errors->missing))
                                                                            @if($seo_result->errors->missing == null)
                                                                                <div class="title">The webpage does not contain any social links..</div>
                                                                            @else
                                                                                <div class="title">The webpage does contain any social links.</div>
                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                    @if(is_array($seo_result->value))
                                                                        @if(count($seo_result->value) != 0)
                                                                            @foreach($seo_result->value as $social)
                                                                                <a href="{{$social}}"><div class="text">Social</div></a>                                                                 
                                                                            @endforeach
                                                                        @endif
                                                                    @endif
                                                                @endif

                                                                @if($key == 'content_length')
                                                                    <div class="title">The webpage has 992 words.</div>
                                                                    <div class="text">{{$seo_result->value}}</div>
                                                                @endif 

                                                                @if($key == 'text_html_ratio')
                                                                    <div class="title">The text to HTML ratio is under 10%.</div>
                                                                    <div class="text">{{$seo_result->value}}</div>
                                                                @endif 

                                                                @if($key == 'inline_css')
                                                                    @if(isset($seo_result->errors)) 
                                                                        @if(isset($seo_result->errors->failed))
                                                                            @if($seo_result->errors->failed == null)
                                                                                <div class="title">The webpage does not contain inline CSS code.</div>
                                                                            @else
                                                                                <div class="title">The webpage does contain inline CSS code.</div>
                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                    <div class="text">{{$seo_result->value}}</div>
                                                                @endif 

                                                                @if($key == 'deprecated_html_tags')
                                                                    <div class="title">There are no deprecated HTML tags on the webpage.</div>
                                                                    <div class="text">{{$seo_result->value}}</div>
                                                                @endif 

                                                                

                                                                <!-- <div class="text">The size of the HTML webpage is 176.41 kB.</div> -->
                                                            </td>
                                                            <td class="tbCol-4">
                                                                <a href="#" class="table-btn bg-green">Suggestions</a>
                                                            </td>
                                                        </tr>                                                   
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                        @endif                        

                    </div>
                </div>
            </div>
        </div>
    </section>


@if(\Session::has('success') )

<div class="modal fade form-submit-modal" id="overlay" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <i class="bi bi-x-lg" data-bs-dismiss="modal"></i>
                <div class="image-block">
                    <img src="{{url('images/landing_page/contact_us/success.png')}}" >
                </div>
                <div class="content-block">
                    <div class="title">Success !</div>
                    <p class="text">Your message submitted successfully.</p>
                    <p class="text">One of our agents will be in touch shortly.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endif


@endsection


@push('after-scripts')

    <script>
        $(window).on('load', function () {
            $('#overlay').modal('show');
        });
        $("#close-btn").click(function () {
            $('#overlay').modal('hide');
        });
    </script>

    <script>
      // Initialize the echarts instance based on the prepared dom
      var myChart = echarts.init(document.getElementById('guage'));

      // Specify the configuration items and data for the chart
      option = {
        series: [
            {
            type: 'gauge',
            center: ['50%', '60%'],
            startAngle: 200,
            endAngle: -20,
            itemStyle: {
                color: '#017FFA'
            },
            progress: {
                show: true,
                width: 20
            },
            axisLine: {
                lineStyle: {
                width: 20
                }
            },
            pointer: {
                show: false
            },
            axisTick: {
                show: false
            },
            splitLine: {
                show: false
            },
            axisLabel: {
                show: false
            },
            anchor: {
                show: false
            },
            title: {
                show: false
            },
            detail: {
                show: false
            },
            data: [
                {
                value: {{$project->score}}
                }
            ]
            }
        ]
        };

      // Display the chart using the configuration items and data just specified.
      myChart.setOption(option);
    </script>

    <script>
        // Bot Slider
        var botSlider = new Splide( '#botSlider', {
            type   : 'loop',
            width: '450px',
            } );

            botSlider.mount();
    </script>

    <script>
        // Modal Function
        const actionBlock = document.querySelectorAll(".action-block")
        const listItem = document.querySelectorAll(".list-item")
        const btnNext =document.querySelectorAll("[btn-next]")
        const btnPrev =document.querySelector("[btn-prev]")
        const btnSubmit =document.querySelector("[btn-submit]")
        const formSelect = document.querySelector("[form-select]")
        const formCheck = document.querySelector("[form-check]")
        const sliderInput = document.querySelector("[slider-input]")
        const quantityInput = document.querySelector("[quantity-input]")
        const termsInput = document.querySelector("[terms-input]")
        const summeryInput = document.querySelector("[summery-input]")
        const totalFee = document.querySelector("[total-fee]")
        const dataBot = document.querySelectorAll("[data-bot]")

        let counter = 0;

        dataBot.forEach(function(bot){
            bot.addEventListener('click', function() {
                const dataVal = bot.getAttribute("data-bot")
                sliderInput.value = dataVal
                counter += 1;
                btnPrev.classList.add('active')
                actionBlock[counter].classList.add('active')
                actionBlock[counter - 1].classList.remove('active')
                listItem[counter].classList.add('active')
            })
        });

        btnNext[0].addEventListener('click', function(){
            const dataVal = formSelect.value
            quantityInput.value = dataVal
            counter += 1;
            actionBlock[counter].classList.add('active')
            actionBlock[counter - 1].classList.remove('active')
            listItem[counter].classList.add('active')
        })

        btnNext[1].addEventListener('click', function(){
            
            if(formCheck.checked) {
                termsInput.value = '1'

                counter += 1;

                actionBlock[counter].classList.add('active')
                actionBlock[counter - 1].classList.remove('active')
                listItem[counter].classList.add('active')
            } else {
                return;
            }
            
        })

        btnSubmit.addEventListener('click', function(){
            const dataVal = totalFee.textContent
            summeryInput.value = dataVal
            btnSubmit.textContent = 'Done'
        })

        btnPrev.addEventListener('click', function(){
            if(counter>0) {
                counter -= 1;
                actionBlock[counter].classList.add('active')
                actionBlock[counter + 1].classList.remove('active')
                listItem[counter].classList.add('active')
                listItem[counter + 1].classList.remove('active')

                if(counter == 0 ) {
                    btnPrev.classList.remove('active')
                } else {
                    return;
                }

            } else {
                return;
            }
        })
    </script>

@endpush