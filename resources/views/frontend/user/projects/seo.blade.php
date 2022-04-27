@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/seo.css')}}">

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

                        <div class="overview-block">
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
                                            <div class="text">3 high issues</div>
                                            <div class="precentage">3.0%</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-red" style="width:40%"></div>
                                        </div>
                                    </div>
                                    <div class="inner-block">
                                        <div class="header font-gray">
                                            <div class="text">3 medium issues</div>
                                            <div class="precentage">3.0%</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-orange" style="width:70%"></div>
                                        </div>
                                    </div>
                                    <div class="inner-block">
                                        <div class="header font-gray">
                                            <div class="text">2 low issues</div>
                                            <div class="precentage">3.0%</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-brown" style="width:20%"></div>
                                        </div>
                                    </div>
                                    <div class="inner-block">
                                        <div class="header font-gray">
                                            <div class="text">22 test passed</div>
                                            <div class="precentage">3.0%</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-blue" style="width:80%"></div>
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
                                                <div class="precentage font-blue">82.0%</div>
                                            </div>
                                        </div>
                                        <div class="stats-block">
                                            <div class="header">
                                                <i class="bi font-green bi-square-fill"></i>
                                                <div class="text">Normal</div>
                                                <i class="bi font-gray bi-question-circle"></i>
                                            </div>
                                            <div class="body">
                                                <i class="bi font-green bi-arrow-up-right"></i>
                                                <div class="precentage font-green">82.0%</div>
                                            </div>
                                        </div>
                                        <div class="stats-block">
                                            <div class="header">
                                                <i class="bi font-orange bi-square-fill"></i>
                                                <div class="text">Issues</div>
                                                <i class="bi font-gray bi-question-circle"></i>
                                            </div>
                                            <div class="body">
                                                <i class="bi font-orange bi-arrow-down-left"></i>
                                                <div class="precentage font-orange">82.0%</div>
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
                                                <div class="precentage font-red">82.0%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if($project->seo_result != null)
                            <div class="seo-block">
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
                                                                        @if($seo_result->errors->length->min == null || $seo_result->errors->length->max == null)
                                                                            <div class="title">Need to added a long length title.</div>
                                                                        @else
                                                                            <div class="title">The title tag is perfect.</div>
                                                                        @endif
                                                                    @endif
                                                                    <div class="text">{{$seo_result->value}}</div>
                                                                @endif

                                                                @if($key == 'meta_description')
                                                                    @if(isset($seo_result->errors))
                                                                        @if($seo_result->errors->missing == null)
                                                                            <div class="title">Meta description is missing.</div>
                                                                        @else
                                                                            <div class="title">The meta description tag is good.</div>
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
                                                                        @if($seo_result->errors->bad_format == null)
                                                                            <div class="title">The URL is not SEO friendly.</div>
                                                                        @else
                                                                            <div class="title">The URL is SEO friendly.</div>
                                                                        @endif
                                                                    @endif
                                                                    <a href="{{$seo_result->value}}"><div class="text">Seo Friendly Url</div></a>
                                                                @endif 

                                                                @if($key == '404_page')
                                                                    @if(isset($seo_result->errors)) 
                                                                        @if($seo_result->errors->missing == null)
                                                                            <div class="title">The website has not 404 error pages.</div>
                                                                        @else
                                                                            <div class="title">The website has 404 error pages.</div>
                                                                        @endif
                                                                    @endif
                                                                    <a href="{{$seo_result->value}}"><div class="text">404 Page</div></a>
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
                                                                        @if($seo_result->errors->too_many->max == null)
                                                                            <div class="title">The number of links on the webpage is too much.</div>
                                                                        @else
                                                                            <div class="title">The number of links on the webpage is okay.</div>
                                                                        @endif
                                                                    @endif

                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            @if(count($seo_result->value->Externals) != 0)
                                                                                <div class="title" style="color:black">Externals.</div>
                                                                                @foreach($seo_result->value->Externals as $external)
                                                                                    <a href="{{$external->url}}"><div class="text">{{$external->text}}</div></a>                                                                         
                                                                                @endforeach
                                                                            @endif
                                                                        </div>
                                                                        <div class="col-6">
                                                                            @if(count($seo_result->value->Internals) != 0)
                                                                                <div class="title" style="color:black">Internals.</div>
                                                                                @foreach($seo_result->value->Internals as $internal)
                                                                                    <a href="{{$internal->url}}"><div class="text">{{$internal->text}}</div></a>                                                                         
                                                                                @endforeach
                                                                            @endif
                                                                        </div>
                                                                    </div>                                                                
                                                                @endif

                                                                @if($key == 'language')
                                                                    <div class="title">The webpage has the language declared.</div>
                                                                    <div class="text">{{$seo_result->value}}</div>
                                                                @endif 

                                                                @if($key == 'favicon')
                                                                    @if(isset($seo_result->errors)) 
                                                                        @if($seo_result->errors->missing == null)
                                                                            <div class="title">The webpage does have a favicon.</div>
                                                                        @else
                                                                            <div class="title">The webpage does not have a favicon.</div>
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

                            <div class="seo-block">
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
                                                                        @if($seo_result->errors->too_slow->max == null)
                                                                            <div class="title">The webpage loading time is too slow.</div>
                                                                        @else
                                                                            <div class="title">The webpage loading time is okay.</div>
                                                                        @endif
                                                                    @endif
                                                                    <div class="text">{{$seo_result->value}}</div>
                                                                @endif

                                                                @if($key == 'page_size')
                                                                    @if(isset($seo_result->errors))
                                                                        @if($seo_result->errors->too_large->max == null)
                                                                            <div class="title">The size of the HTML webpage is too large.</div>
                                                                        @else
                                                                            <div class="title">The size of the HTML webpage is okay.</div>
                                                                        @endif
                                                                    @endif
                                                                    <div class="text">{{$seo_result->value}}</div>
                                                                @endif

                                                                @if($key == 'http_requests')
                                                                    @if(isset($seo_result->errors))                                                            
                                                                        @if($seo_result->errors->too_many->max == null)
                                                                            <div class="title">HTTP requests on the webpage is too many.</div>
                                                                        @else
                                                                            <div class="title">There are less HTTP requests on the webpage.</div>
                                                                        @endif
                                                                    @endif

                                                                    @if(count($seo_result->value->JavaScripts) != 0)
                                                                        @foreach($seo_result->value->JavaScripts as $JavaScripts)
                                                                            <a href="{{$JavaScripts}}"><div class="text">JavaScripts</div></a>                                                                         
                                                                        @endforeach
                                                                    @endif 
                                                                    @if(count($seo_result->value->Images) != 0)
                                                                        @foreach($seo_result->value->Images as $Images)
                                                                            <a href="{{$Images}}"><div class="text">Images</div></a>                                                                         
                                                                        @endforeach
                                                                    @endif
                                                                @endif

                                                                @if($key == 'image_format')
                                                                    <div class="title">The images are served in the AVIF, WebP format.</div>
                                                                    @if(count($seo_result->value) != 0)
                                                                        @foreach($seo_result->value as $image_format)
                                                                            <div class="text">{{$image_format}}</div>                                                                  
                                                                        @endforeach
                                                                    @endif
                                                                @endif
                                                                
                                                                @if($key == 'defer_javascript')
                                                                    <div class="title">The are some javascript resources without the defer attribute.</div>
                                                                    <div class="text">{{$seo_result->value}}</div>
                                                                @endif

                                                                @if($key == 'dom_size')
                                                                    @if(isset($seo_result->errors)) 
                                                                        @if($seo_result->errors->too_many->max == null)
                                                                            <div class="title">The DOM size is not optimal.</div>
                                                                        @else
                                                                            <div class="title">The DOM size is optimal.</div>
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

                            <div class="seo-block">
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
                                                                    <a href="{{$seo_result->value}}"><div class="text">Https Encryption</div></a>
                                                                @endif 

                                                                @if($key == 'plaintext_email')
                                                                    <div class="title">The webpage does not contain any plaintext emails.</div>
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

                        <!-- <div class="seo-block">
                            <div class="heaeder">
                                <div class="title">Performance</div>
                                <div class="duration">3 days ago</div>
                            </div>
                            <div class="body">
                                <table class="seo-table">
                                    <tbody>
                                        <tr>
                                            <td class="tbCol-1"><i class="bi font-blue bi-triangle-fill"></i></td>
                                            <td class="tbCol-2"><div class="title">Meta Description</div></td>
                                            <td class="tbCol-3">
                                                <div class="title">The meta description tag have medium issues.</div>
                                                <div class="text">The size of the HTML webpage is 176.41 kB.</div>
                                            </td>
                                            <td class="tbCol-4">
                                                <a href="#" class="table-btn bg-green">Suggestions</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tbCol-1"><i class="bi font-orange bi-square-fill"></i></td>
                                            <td class="tbCol-2"><div class="title">Meta Description</div></td>
                                            <td class="tbCol-3">
                                                <div class="title">The meta description tag have medium issues.</div>
                                                <div class="text">The size of the HTML webpage is 176.41 kB.</div>
                                            </td>
                                            <td class="tbCol-4">
                                                <i class="bi bi-exclamation-circle"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="seo-block">
                            <div class="heaeder">
                                <div class="title">Miscellaneous</div>
                                <div class="duration">3 days ago</div>
                            </div>
                            <div class="body">
                                <table class="seo-table">
                                    <tbody>
                                        <tr>
                                            <td class="tbCol-1"><i class="bi font-blue bi-triangle-fill"></i></td>
                                            <td class="tbCol-2"><div class="title">Meta Description</div></td>
                                            <td class="tbCol-3">
                                                <div class="title">The meta description tag have medium issues.</div>
                                                <div class="text">The size of the HTML webpage is 176.41 kB.</div>
                                            </td>
                                            <td class="tbCol-4">
                                                <a href="#" class="table-btn bg-green">Suggestions</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tbCol-1"><i class="bi font-orange bi-square-fill"></i></td>
                                            <td class="tbCol-2"><div class="title">Meta Description</div></td>
                                            <td class="tbCol-3">
                                                <div class="title">The meta description tag have medium issues.</div>
                                                <div class="text">The size of the HTML webpage is 176.41 kB.</div>
                                            </td>
                                            <td class="tbCol-4">
                                                <i class="bi bi-exclamation-circle"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> -->

                        <div class="bot-block">
                            <div class="inner-wrapper">
                                <div class="subtitle">Get your own</div>
                                <div class="title">Optimizer Bot</div>
                                <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quibusdam earum, numquam odio delectus porro nisi eos deleniti rerum asperiores?</div>
                                <a href="#" class="bot-btn">Get Your Bot</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection


@push('after-scripts')

    <script type="text/javascript">
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

@endpush