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
                            @foreach(json_decode($project->seo_result) as $key => $seo_result)
                                <div class="seo-block">
                                    <div class="heaeder">
                                        <div class="title">{{ str_replace("_"," ", ucfirst(trans($key)) ) }}</div>
                                        <div class="duration">{{$project->created_at->diffForHumans()}}</div>
                                    </div>
                                    <div class="body">
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

                                                        <td class="tbCol-2"><div class="title">Meta Description</div></td>
                                                        <td class="tbCol-3">
                                                            @if($key == 'title')
                                                                @if($seo_result->importance == 'high')
                                                                    <div class="title">The meta description tag have high issues.</div>
                                                                @elseif($seo_result->importance == 'medium')
                                                                    <div class="title">The meta description tag have medium issues.</div>
                                                                @else
                                                                    <div class="title">The meta description tag have low issues.</div>
                                                                @endif
                                                                <div class="text">{{$seo_result->value}}</div>
                                                            @endif

                                                            @if($key == 'meta_description')
                                                                @if($seo_result->importance == 'high')
                                                                    <div class="title">The meta description tag have high issues.</div>
                                                                @elseif($seo_result->importance == 'medium')
                                                                    <div class="title">The meta description tag have medium issues.</div>
                                                                @else
                                                                    <div class="title">The meta description tag have low issues.</div>
                                                                @endif
                                                                <div class="text">{{$seo_result->value}}</div>
                                                            @endif

                                                            @if($key == 'headings')
                                                                @if(count($seo_result->value) != 0)
                                                                    @foreach($seo_result->value as $headings)
                                                                        <div class="text">{{$headings}}</div>                                                                  
                                                                    @endforeach
                                                                @endif
                                                            @endif

                                                            @if($key == 'content_keywords')
                                                                @if(count($seo_result->value) != 0)
                                                                    <div class="title">The content has relevant keywords.</div>
                                                                    @foreach($seo_result->value as $content_keywords)
                                                                        <div class="text">{{$content_keywords}}</div>                                                                  
                                                                    @endforeach
                                                                @endif
                                                            @endif

                                                            @if($key == 'image_keywords')
                                                                <div class="text">{{$seo_result->value}}</div>
                                                            @endif

                                                            @if($key == 'image_format')
                                                                @if(count($seo_result->value) != 0)
                                                                    @foreach($seo_result->value as $image_format)
                                                                        <div class="text">{{$image_format}}</div>                                                                  
                                                                    @endforeach
                                                                @endif
                                                            @endif
                                                            
                                                            @if($key == 'in_page_links')
                                                                @if(count($seo_result->value->Externals) != 0)
                                                                    <div class="title" style="color:black">Externals.</div>
                                                                    @foreach($seo_result->value->Externals as $external)
                                                                        <a href="{{$external->url}}"><div class="text">{{$external->text}}</div></a>                                                                         
                                                                    @endforeach
                                                                @endif
                                                            @endif
                                                            @if($key == 'in_page_links')
                                                                @if(count($seo_result->value->Internals) != 0)
                                                                    <div class="title" style="color:black">Internals.</div>
                                                                    @foreach($seo_result->value->Internals as $internal)
                                                                        <a href="{{$internal->url}}"><div class="text">{{$internal->text}}</div></a>                                                                         
                                                                    @endforeach
                                                                @endif
                                                            @endif

                                                            @if($key == 'load_time')
                                                                <div class="text">{{$seo_result->value}}</div>
                                                            @endif

                                                            @if($key == 'page_size')
                                                                <div class="text">{{$seo_result->value}}</div>
                                                            @endif

                                                            @if($key == 'http_requests')
                                                                @if(count($seo_result->value->JavaScripts) != 0)
                                                                    @foreach($seo_result->value->JavaScripts as $JavaScripts)
                                                                        <a href="{{$JavaScripts}}"><div class="text">JavaScripts</div></a>                                                                         
                                                                    @endforeach
                                                                @endif
                                                            @endif
                                                            @if($key == 'http_requests')
                                                                @if(count($seo_result->value->Images) != 0)
                                                                    @foreach($seo_result->value->Images as $Images)
                                                                        <a href="{{$Images}}"><div class="text">Images</div></a>                                                                         
                                                                    @endforeach
                                                                @endif
                                                            @endif

                                                            @if($key == 'defer_javascript')
                                                                <div class="text">{{$seo_result->value}}</div>
                                                            @endif

                                                            @if($key == 'dom_size')
                                                                <div class="text">{{$seo_result->value}}</div>
                                                            @endif

                                                            @if($key == 'text_compression')
                                                                <div class="text">{{$seo_result->value}}</div>
                                                            @endif 

                                                            @if($key == 'structured_data')
                                                                @if(count($seo_result->value) != 0)
                                                                    @foreach($seo_result->value as $structured_data)
                                                                        <div class="text">{{$structured_data}}</div>                                                                  
                                                                    @endforeach
                                                                @endif
                                                            @endif

                                                            @if($key == 'meta_viewport')
                                                                <div class="text">{{$seo_result->value}}</div>
                                                            @endif 

                                                            @if($key == 'https_encryption')
                                                                <a href="{{$seo_result->value}}"><div class="text">Https Encryption</div></a>
                                                            @endif 

                                                            @if($key == 'seo_friendly_url')
                                                                <a href="{{$seo_result->value}}"><div class="text">Seo Friendly Url</div></a>
                                                            @endif 

                                                            @if($key == 'language')
                                                                <div class="text">{{$seo_result->value}}</div>
                                                            @endif 

                                                            @if($key == 'favicon')
                                                                <div class="text">{{$seo_result->value}}</div>
                                                            @endif 

                                                            @if($key == 'content_length')
                                                                <div class="text">{{$seo_result->value}}</div>
                                                            @endif 

                                                            @if($key == 'text_html_ratio')
                                                                <div class="text">{{$seo_result->value}}</div>
                                                            @endif 

                                                            @if($key == 'charset')
                                                                <div class="text">{{$seo_result->value}}</div>
                                                            @endif 

                                                            @if($key == 'deprecated_html_tags')
                                                                <div class="text">{{$seo_result->value}}</div>
                                                            @endif 

                                                            @if($key == '404_page')
                                                                <a href="{{$seo_result->value}}"><div class="text">404 Page</div></a>
                                                            @endif 

                                                            @if($key == 'noindex')
                                                                <div class="text">{{$seo_result->value}}</div>
                                                            @endif 

                                                            @if($key == 'robots')
                                                                <div class="text">{{$seo_result->value}}</div>
                                                            @endif 

                                                            @if($key == 'sitemap')
                                                                @if(count($seo_result->value) != 0)
                                                                    @foreach($seo_result->value as $sitemap)
                                                                        <a href="{{$sitemap}}"><div class="text">Sitemap</div></a>                                                                 
                                                                    @endforeach
                                                                @endif
                                                            @endif

                                                            @if($key == 'plaintext_email')
                                                                <div class="text">{{$seo_result->value}}</div>
                                                            @endif 

                                                            @if($key == 'social')
                                                                @if(count($seo_result->value) != 0)
                                                                    @foreach($seo_result->value as $social)
                                                                        <a href="{{$social}}"><div class="text">Social</div></a>                                                                 
                                                                    @endforeach
                                                                @endif
                                                            @endif

                                                            @if($key == 'inline_css')
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
                                </div>
                            @endforeach
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