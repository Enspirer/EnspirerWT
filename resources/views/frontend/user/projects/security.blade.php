@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<link rel="stylesheet" href="{{url('css/security.css')}}">

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
                                <li class="breadcrumb-item active">Security</li>
                            </ul>
                        </div>

                        @include('frontend.user.projects.includes.card_section')
                       
                        <div class="privacy-block">
                            <div class="inner-wrapper">
                                <div class="content-block">
                                    <div class="subtitle">Go to your</div>
                                    <div class="title">Unlimited Privacy </div>
                                    <div class="text">Best solution for your website security. Get today  50% discount with Tallentor unlimited security feature.</div>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#privacyModal" class="privacy-btn" >Explore</a>
                                </div>
                                <div class="image-block">
                                    <img src="{{url('images/dashboard/main/privacy.png')}}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="overview-block">
                            <div class="inner-wrapper">
                                <div class="score-block">
                                    <div id="scoreGuage" style="width:350px;height:350px"></div>
                                </div>
                                <div class="info-block">
                                    <div class="header">
                                        <div class="title-block">
                                            <div class="text">Project Details</div>
                                            <i class="bi bi-question-circle-fill"></i>
                                        </div>
                                        <div class="content-block">
                                            <div class="image-block">
                                                @if($project->settings == null)
                                                    <img src="{{url('img/no-image.jpg')}}" alt="">
                                                @else
                                                    <img src="{{uploaded_asset(json_decode($project->settings)->logo)}}" alt="">
                                                @endif
                                            </div>
                                            <div class="content">
                                                <div class="text">Project name and Link</div>
                                                <div class="pro-name">{{$project->name}}</div>
                                                <div class="pro-url">{{$project->url}}</div>
                                            </div>
                                            <div class="info">
                                                <div class="info-row">
                                                    <span class="title">IP Address:</span>
                                                    <span class="text">192.168.8.2</span>
                                                </div>
                                                <div class="info-row">
                                                    <span class="title">CDN:</span>
                                                    <span class="text">CloudFlare</span>
                                                </div>
                                                <div class="info-row">
                                                    <span class="title">Running on:</span>
                                                    <span class="text">cloudFlare</span>
                                                </div>
                                                <div class="info-row">
                                                    <span class="title">Powered by:</span>
                                                    <span class="text">Unknown</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <div class="stats-block">
                                            <div class="guage-block">
                                                <div id="riskGuage" style="width:150px;height:150px"></div>
                                            </div>
                                            <div class="content">
                                                <div class="title red">{{$issues_summary['passed_high_risk_points']}} Risks Detected</div>
                                                <div class="subtitle">Bad performance</div>
                                            </div>
                                        </div>
                                        <div class="stats-block">
                                            <div class="guage-block">
                                                <div id="malwareGuage" style="width:150px;height:150px"></div>
                                            </div>
                                            <div class="content">
                                                <div class="title green">No Malware found</div>
                                                <div class="subtitle">100% Malware free</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="security-block">
                            <div class="feature-block">
                                <div class="title">Email Black list</div>
                                <table class="security-table">
                                    <tbody>
                                        <tr>
                                            <td class="icon-col">
                                                <img src="{{url('images/dashboard/main/icons/sheild-success.png')}}" alt="">
                                            </td>
                                            <td class="text-col">
                                                <div class="text">example@gmail.com</div>
                                            </td>
                                            <td class="info-col">
                                                <i class="bi bi-exclamation-circle"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="icon-col">
                                                <img src="{{url('images/dashboard/main/icons/sheild-warning.png')}}" alt="">
                                            </td>
                                            <td class="text-col">
                                                <div class="text">example@gmail.com</div>
                                            </td>
                                            <td class="info-col">
                                                <i class="bi bi-exclamation-circle"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="icon-col">
                                                <img src="{{url('images/dashboard/main/icons/sheild-danger.png')}}" alt="">
                                            </td>
                                            <td class="text-col">
                                                <div class="text">example@gmail.com</div>
                                            </td>
                                            <td class="info-col">
                                                <i class="bi bi-exclamation-circle"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="feature-block">
                                <div class="title">Website Alerts</div>
                                <table class="security-table">
                                    <tbody>
                                        <!-- <tr>
                                            <td class="icon-col">
                                                <img src="{{url('images/dashboard/main/icons/success.png')}}" alt="">
                                            </td>
                                            <td class="text-col">
                                                <div class="text">example@gmail.com</div>
                                                <div class="sub-text">Server <span>BN-34-HDE</span> was down </div>
                                            </td>
                                            <td class="info-col">
                                                <i class="bi bi-exclamation-circle"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="icon-col">
                                                <img src="{{url('images/dashboard/main/icons/warning.png')}}" alt="">
                                            </td>
                                            <td class="text-col">
                                                <div class="text">example@gmail.com</div>
                                                <div class="sub-text">Server <span>BN-34-HDE</span> was down </div>
                                            </td>
                                            <td class="info-col">
                                                <i class="bi bi-exclamation-circle"></i>
                                            </td>
                                        </tr> -->

                                        @foreach(json_decode($project->seo_result) as $key => $seo_result)
                                            @if($key == 'https_encryption' || $key == 'plaintext_email')                                            
                                                <tr>
                                                    <td class="icon-col">
                                                        <img src="{{url('images/dashboard/main/icons/danger.png')}}" alt="">
                                                    </td>
                                                    <td class="text-col">
                                                        @if($key == 'https_encryption')
                                                            <div class="text"><b>{{ str_replace("_"," ", ucfirst(trans($key)) ) }}</b></div>
                                                            <div class="text">The webpage uses HTTPS encryption.</div>
                                                            <a href="{{$seo_result->value}}"><div class="sub-text">{{$seo_result->value}}</div></a>                                                       
                                                        @endif 

                                                        @if($key == 'plaintext_email')
                                                            <div class="text"><b>{{ str_replace("_"," ", ucfirst(trans($key)) ) }}</b></div>                                                    
                                                            <div class="text">The webpage does not contain any plaintext emails.</div>
                                                            <div class="sub-text">{{$seo_result->value}}</div>
                                                        @endif 
                                                        <div class="text">example@gmail.com</div>
                                                        <!-- <div class="sub-text">Server <span>BN-34-HDE</span> was down </div> -->
                                                    </td>
                                                    <td class="info-col">
                                                        <i class="bi bi-exclamation-circle"></i>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach

                                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="feature-block">
                                <div class="title">Email Black list</div>
                                <table class="security-table">
                                    <tbody>
                                        <tr>
                                            <td class="icon-col">
                                                <img src="{{url('images/dashboard/main/icons/sheild-success.png')}}" alt="">
                                            </td>
                                            <td class="text-col">
                                                <div class="text">example@gmail.com</div>
                                                <div class="sub-text">Server <span>BN-34-HDE</span> was down </div>
                                            </td>
                                            <td class="info-col">
                                                <i class="bi bi-exclamation-circle"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="icon-col">
                                                <img src="{{url('images/dashboard/main/icons/sheild-warning.png')}}" alt="">
                                            </td>
                                            <td class="text-col">
                                                <div class="text">example@gmail.com</div>
                                                <div class="sub-text">Server <span>BN-34-HDE</span> was down </div>
                                            </td>
                                            <td class="info-col">
                                                <i class="bi bi-exclamation-circle"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="icon-col">
                                                <img src="{{url('images/dashboard/main/icons/sheild-danger.png')}}" alt="">
                                            </td>
                                            <td class="text-col">
                                                <div class="text">example@gmail.com</div>
                                                <div class="sub-text">Server <span>BN-34-HDE</span> was down </div>
                                            </td>
                                            <td class="info-col">
                                                <i class="bi bi-exclamation-circle"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="security-block">
                            <div class="feature-block block-lg">
                                <div class="title">Protocols</div>
                                <table class="security-table">
                                    <thead>
                                        <tr>
                                            <td class="text-col">
                                                <div class="text">Protocols</div>
                                            </td>
                                            <td class="text-col center">
                                                <div class="text">Risk</div>
                                            </td>
                                            <td class="text-col">
                                                <div class="text">Rsults</div>
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-col">
                                                <div class="text">SSLv2</div>
                                            </td>
                                            <td class="text-col center">
                                                <div class="text indicator green">Ok</div>
                                            </td>
                                            <td class="text-col">
                                                <div class="text">offered with final</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-col">
                                                <div class="text">SSLv2</div>
                                            </td>
                                            <td class="text-col center">
                                                <div class="text indicator orange">Low</div>
                                            </td>
                                            <td class="text-col">
                                                <div class="text">offered with final</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-col">
                                                <div class="text">SSLv2</div>
                                            </td>
                                            <td class="text-col center">
                                                <div class="text indicator red">High</div>
                                            </td>
                                            <td class="text-col">
                                                <div class="text">offered with final</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="feature-block block-lg">
                                <div class="title">Vulnerabilities</div>
                                <table class="security-table">
                                    <thead>
                                        <tr>
                                            <td class="text-col">
                                                <div class="text">Vulnerabilities</div>
                                            </td>
                                            <td class="text-col center">
                                                <div class="text">Risk</div>
                                            </td>
                                            <td class="text-col">
                                                <div class="text">Rsults</div>
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-col">
                                                <div class="text">SSLv2</div>
                                            </td>
                                            <td class="text-col center">
                                                <div class="text indicator green">Ok</div>
                                            </td>
                                            <td class="text-col">
                                                <div class="text">offered with final</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-col">
                                                <div class="text">SSLv2</div>
                                            </td>
                                            <td class="text-col center">
                                                <div class="text indicator orange">Low</div>
                                            </td>
                                            <td class="text-col">
                                                <div class="text">offered with final</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-col">
                                                <div class="text">SSLv2</div>
                                            </td>
                                            <td class="text-col center">
                                                <div class="text indicator red">High</div>
                                            </td>
                                            <td class="text-col">
                                                <div class="text">offered with final</div>
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
    </section>



<!-- Modal -->
<!-- <div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <form action="{{route('frontend.user.unlimited_privacy.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Unlimited Privacy</h4>
                    <button type="button" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close"><i
                            class="bi bi-x-lg"></i></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label style="font-size:16px">Project Name<span class="text-danger">*</span></label>
                        <input type="text" style="font-size:15px;" id="name" class="form-control mt-2" name="name"
                            placeholder="Type your project name" required>
                    </div>
                    <div class="form-group mt-3">
                        <label style="font-size:16px">Project Type <span class="text-danger">*</span></label>
                        <select class="form-control mt-2" style="font-size:15px;" id="project_type" name="project_type"
                            required>
                            <option value="" selected disabled>Select...</option>
                            @foreach(App\Models\ProjectType::get() as $type)
                            <option style="font-size:15px;" value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label style="font-size:16px">URL (With https://) <span class="text-danger">*</span></label>
                        <input type="text" style="font-size:15px;" id="url" class="form-control mt-2" name="url"
                            placeholder="Type your URL" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success btn-lg">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div> -->

<!-- Modal -->
<div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('frontend.user.unlimited_privacy.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Unlimited Privacy</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label style="font-size:15px">Package <span class="text-danger">*</span></label>
                        <select class="form-control mt-2" id="package" name="package" required>
                            <option value="" selected disabled>Select...</option>
                            <option value="Security">Security</option>
                            <option value="Security Checking">Security Checking</option>
                        </select>
                    </div>

                    <div class="form-group mt-3">
                        <label style="font-size:15px">Technology <span class="text-danger">*</span></label>
                        <select class="form-control mt-2" id="technology" name="technology" required>
                            <option value="" selected disabled>Select...</option>
                            <option value="HTML">HTML</option>
                            <option value="CSS">CSS</option>
                            <option value="JavaScript">JavaScript</option>
                            <option value="Python">Python</option>
                            <option value="Java">Java</option>
                            <option value="Typescript">Typescript</option>
                            <option value="Objective C">Objective C</option>
                            <option value="C++">C++</option>
                            <option value="SQL">SQL</option>
                            <option value="PHP">PHP</option>
                            <option value="C#">C#</option>
                            <option value="Angular">Angular</option>
                            <option value="Ruby Rails">Ruby Rails</option>
                            <option value="Golang">Golang</option>
                            <option value="Scala">Scala</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label style="font-size:15px">Phone Number <span class="text-danger">*</span></label>
                        <input type="text" id="phone_number" class="form-control" name="phone_number" required>
                    </div>
                </div>  
                <div class="modal-footer">
                    <input type="hidden" name="hidden_project_id" value="{{$project_id}}">
                    <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success btn-lg">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


@if(\Session::has('success') )

<div class="modal fade form-submit-modal" id="overlay" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <i class="bi bi-x-lg" data-bs-dismiss="modal"></i>
                <div class="image-block">
                    <img src="{{url('images/landing_page/contact_us/success.png')}}" alt="">
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

<!-- Score Guage -->
<script type="text/javascript">
    // Initialize the echarts instance based on the prepared dom
    var scoreGuage = echarts.init(document.getElementById('scoreGuage'));

    // Specify the configuration items and data for the chart

    var scoreGuageOption = {
    title: {
        text: 'Website Risk Score',
        left: 'center'
    },
    series: [
        {
        type: 'gauge',
        itemStyle: {
            color: '#31AE0B'
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
        axisTick: {
            show: false
        },
        splitLine: {
            show: false
        },
        axisLabel: {
            distance: 10,
            color: '#999',
            fontSize: 12
        },
        anchor: {
            show: true,
            showAbove: true,
            size: 25,
            itemStyle: {
                color: '#333',
            }
        },
        pointer: {
            icon: 'path://M5.764,0H17l6.628,99.756H0Z',
            width: 25,
            itemStyle: {
                color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
                    {
                        offset: 0,
                        color: 'rgba(0,0,0,0.0)'
                    },
                    {
                        offset: 1,
                        color: '#333'
                    }
                ])
            }
        },
        title: {
            show: true
        },
        detail: {
            valueAnimation: true,
            fontSize: 14,
            offsetCenter: [0, '70%']
        },
        data: [
            {
            value: 60,
            name: 'Last Update : 28 April 2022  3.56 PM',
            title: {
                fontSize: 12,
                offsetCenter: ['0%', '100%']
            },
            detail: {
                width: 40,
                height: 20,
                fontSize: 12,
                color: '#fff',
                backgroundColor: '#31AE0B',
                borderRadius: 3,
                formatter: 'Good',
                offsetCenter: ['0%', '70%']
            }
            }
        ]
        }
    ]
    };

    // Display the chart using the configuration items and data just specified.
    scoreGuage.setOption(scoreGuageOption);
</script>

<!-- Risk Guage -->
<script type="text/javascript">
    // Initialize the echarts instance based on the prepared dom
    var riskGuage = echarts.init(document.getElementById('riskGuage'));

    // Specify the configuration items and data for the chart

    var riskGuageOption = {
        series: [
            {
            type: 'gauge',
            startAngle: -90,
            endAngle: 270,
            itemStyle: {
                color: '#f00'
            },
            pointer: {
                show: false
            },
            progress: {
                show: true,
                overlap: false,
                roundCap: true,
                clip: false
            },
            axisLine: {
                lineStyle: {
                width: 10
                }
            },
            splitLine: {
                show: false,
                distance: 0,
                length: 10
            },
            axisTick: {
                show: false
            },
            axisLabel: {
                show: false,
                distance: 50
            },
            data: [
                {
                value: {{number_format((float)($issues_summary['passed_high_risk_points']/$issues_summary['total_high_risk_points'])*100, 2, '.', '')}},
                detail: {
                    valueAnimation: true,
                    offsetCenter: ['0%', '5%']
                }
                }
            ],
            detail: {
                fontSize: 20,
                color: '#f00',
                formatter: '{value}%'
            }
            }
        ]
    };

    // Display the chart using the configuration items and data just specified.
    riskGuage.setOption(riskGuageOption);
</script>

<!-- Malware Guage -->
<script type="text/javascript">
    // Initialize the echarts instance based on the prepared dom
    var malwareGuage = echarts.init(document.getElementById('malwareGuage'));

    // Specify the configuration items and data for the chart

    var malwareGuageOption = {
        series: [
            {
            type: 'gauge',
            startAngle: -90,
            endAngle: 270,
            itemStyle: {
                color: '#31AE0B'
            },
            pointer: {
                show: false
            },
            progress: {
                show: true,
                overlap: false,
                roundCap: true,
                clip: false
            },
            axisLine: {
                lineStyle: {
                width: 10
                }
            },
            splitLine: {
                show: false,
                distance: 0,
                length: 10
            },
            axisTick: {
                show: false
            },
            axisLabel: {
                show: false,
                distance: 50
            },
            data: [
                {
                value: 100,
                detail: {
                    valueAnimation: true,
                    offsetCenter: ['0%', '5%']
                }
                }
            ],
            detail: {
                fontSize: 20,
                color: '#31AE0B',
                formatter: '{value}%'
            }
            }
        ]
    };

    // Display the chart using the configuration items and data just specified.
    malwareGuage.setOption(malwareGuageOption);
</script>

@endpush