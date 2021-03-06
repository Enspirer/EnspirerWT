@extends('frontend.layouts.widget_ims_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<section class="ims__section">
        @include('frontend.user.projects.includes.ims_sidebar')
            <div class="ims__main-col">
                @include('frontend.user.projects.includes.ims_navbar')
                
                <div class="row g-0">
                    <div class="col">
                        <!-- Content goes here -->
                        <div class="ims__body-container" id="ims__main-panel">
                            <div class="ims__inner-container">
                                <div class="row g-0">
                                    <div class="col">
                                        <ul class="breadcrumb">                                            
                                            <!-- <li class="breadcrumb-item">
                                                <a class="breadcrumb-link">Conversations</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#" class="breadcrumb-link breadcrumb-arrow"><i
                                                        class="bi bi-chevron-right"></i></a>
                                            </li> -->
                                            <li class="breadcrumb-item">
                                                <a class="breadcrumb-link breadcrumb-current">Analytics</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col">                                        
                                    
                                        <section class="analytics-section ims__panel" id="ims__analytics">
                                            <div class="root-section">
                                                <div class="chart-section">
                                                    <div id="analyticsChart" style="width: 100%;height: 400px;"></div>
                                                </div>
                                                <div class="ims__control-panel">
                                                    <div class="row g-0">
                                                        <div class="col">
                                                            @if(count($ims_client) == 0)
                                                                @include('frontend.includes.not_found',[
                                                                    'not_found_title' => 'Data not found',
                                                                    'not_found_description' => null,
                                                                    'not_found_button_caption' => null
                                                                ])
                                                            @else
                                                                <div class="control-block">
                                                                    <!-- <div class="controls">
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
                                                                    </div> -->
                                                                    <!-- <div class="actions">
                                                                        <a href="#" class="ims__warning control-link">
                                                                            <i class="bi bi-exclamation-octagon-fill"></i>
                                                                        </a>
                                                                        <a href="#" class="ims__download control-link">
                                                                            <i class="bi bi-download"></i>
                                                                        </a>
                                                                        <a href="#" class="ims__delete control-link">
                                                                            <i class="bi bi-trash-fill"></i>
                                                                        </a>
                                                                        <a href="#" class="ims__option control-link">
                                                                            <i class="bi bi-three-dots-vertical"></i>
                                                                        </a>
                                                                    </div> -->
                                                                    <div class="">
                                                                        <a class="btn btn-success ms-4" href="{{ url('analytics_generatePDF') }}">Export PDF</a>
                                                                    </div>
                                                                    <div class="">
                                                                        <a class="btn btn-warning ms-4" href="{{ url('export_ims_client') }}">Export CSV</a>
                                                                    </div>
                                                                    <form action="{{ route('frontend.user.user_widget.ims_analytics', $project->id) }}" method="get" enctype="multipart/form-data">
                                                                    {{csrf_field()}}
                                                                        <div class="row ms-4">
                                                                            <div class="col-4">
                                                                                <div class="form-group">
                                                                                    <input class="form-control" type="text" onfocus="(this.type='date')" name="start_date" id="start_date" placeholder="Start Date" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-4">
                                                                                <div class="form-group">
                                                                                    <input class="form-control" type="text" onfocus="(this.type='date')" name="end_date" id="end_date" placeholder="End Date" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-4">
                                                                                <div class="form-group">
                                                                                    <button type="submit" class="btn btn-info">Search</button>          
                                                                                </div>
                                                                            </div>                                                                            
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="ims__data-table">
                                                                    <table class="table table-borderless">
                                                                        <thead>
                                                                            <tr class="data-row">
                                                                                <th class="data-title"></th>
                                                                                <th class="data-title"></th>
                                                                                <th class="data-title">Name</th>
                                                                                <th class="data-title">Email</th>
                                                                                <th class="data-title">Phone Number</th>
                                                                                <th class="data-title">Assigned by</th>
                                                                                <th class="data-title">Action Taken</th>                                                                                
                                                                                <th class="data-title">Status</th>
                                                                                <th class="data-title">Date</th>
                                                                                <th class="data-title">Report</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach($ims_client as $key => $client)
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
                                                                                    <td class="data--comment data-cell">
                                                                                        <div class="text">{{$client->client_name}}</div>
                                                                                        <!-- <input type="text" class="form-control" placeholder="This is the sample comment "> -->
                                                                                    </td>                                                                                   
                                                                                    <td class="data--manager-comment data-cell">
                                                                                        <div class="text">{{$client->client_email}}</div>
                                                                                        <!-- <input type="text" class="form-control" placeholder="This is the sample comment "> -->
                                                                                    </td>
                                                                                    <td class="data--manager-comment data-cell">
                                                                                        <div class="text">{{$client->phone_number}}</div>
                                                                                    </td>
                                                                                    <td class="data--action-by data-cell">
                                                                                        @if($client->assign_by == null)
                                                                                            <div class="text text-danger">Not Assigned</div>
                                                                                        @else
                                                                                            <div class="text">{{$client->assign_by}}</div>
                                                                                        @endif
                                                                                    </td>
                                                                                    <td class="data--action-by data-cell">
                                                                                        <!-- <td class="data--action-taken data-cell"> -->
                                                                                        <!-- <div class="icon-block"
                                                                                            id="ims__icon-block">
                                                                                            <i
                                                                                                class="bi call bi-telephone-fill"></i>
                                                                                            <i
                                                                                                class="bi mail bi-envelope-fill"></i>
                                                                                            <i
                                                                                                class="bi not-responding bi-dash-circle-fill"></i>
                                                                                            <i
                                                                                                class="bi meeting bi-camera-video-fill"></i>
                                                                                            <i
                                                                                                class="bi message bi-chat-right-text-fill"></i>
                                                                                            <i
                                                                                                class="bi other bi-flag-fill"></i>
                                                                                        </div>
                                                                                        <select class="form-select"
                                                                                            id="data_action-select">
                                                                                            <option selected>Choose...</option>
                                                                                            <option value="1">Call
                                                                                            </option>
                                                                                            <option value="2">Mail
                                                                                            </option>
                                                                                            <option value="3">Not responding
                                                                                            </option>
                                                                                            <option value="4">Meeting</option>
                                                                                            <option value="5">Message</option>
                                                                                            <option value="6">Other</option>
                                                                                        </select> -->
                                                                                        
                                                                                        @if($client->action_taken == null)
                                                                                            <div class="text text-danger">Not Taken</div>
                                                                                        @else
                                                                                            <div class="text">{{$client->action_taken}}</div>
                                                                                        @endif
                                                                                    </td>
                                                                                    <td class="data--Status data-cell">
                                                                                        <!-- <div class="indicator"></div> -->
                                                                                        @if($client->status == null)
                                                                                            <div class="text text-danger">Not Changed</div>
                                                                                        @else
                                                                                            <div class="text">{{$client->status}}</div>
                                                                                        @endif
                                                                                        <!-- <select class="form-select"
                                                                                            id="data_status-select">
                                                                                            <option selected>Choose...</option>
                                                                                            <option value="1">Deal close
                                                                                                successfully </option>
                                                                                            <option value="2">Pending</option>
                                                                                            <option value="3">Not responding
                                                                                            </option>
                                                                                        </select> -->
                                                                                    </td>
                                                                                    <td class="data--date data-cell">
                                                                                        <div class="text">{{$client->created_at->format('d M Y')}}</div>
                                                                                    </td>   
                                                                                    <td class="data--report data-cell">
                                                                                        <a href="{{url('generatePDF',$client->id)}}" class="download-btn">
                                                                                            <i class="bi bi-download"></i>
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            
                                                                <div class="indicator-block">
                                                                    <div class="label"><span class="green-background"></span>Deal close successfully</div>
                                                                    <div class="label"><span class="yellow-background"></span>Pending</div>
                                                                    <div class="label"><span class="red-background"></span>Not Responding</div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>                                        
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </section>
    

@endsection



@push('after-scripts')

<script>
   function exportTasks(_this) {
      let _url = $(_this).data('href');
      window.location.href = _url;
   }
</script>

<script type="text/javascript">

    var chartDom = document.getElementById('analyticsChart');
    var myChart = echarts.init(chartDom);
    var option;

    option = {
    tooltip: {
        trigger: 'axis',
        axisPointer: {
        type: 'cross',
        crossStyle: {
            color: '#999'
        }
        }
    },
    color: [
        '#44BC8E',
        '#1B3D6B',
        '#0d6efd',
    ],
    legend: {
        data: ['Respond Leeds', 'Total Leeds',  'Rates']
    },
    xAxis: [
        {
        type: 'category',
        data: [
            @foreach($chart_data as $chartFunc)
            '{{$chartFunc->date}}',
            @endforeach
        ],
        axisPointer: {
            type: 'shadow'
        }
        }
    ],
    yAxis: [
        {
        type: 'value',
        name: 'Total Leeds',
        min: 0,
        interval: 50,
        axisLabel: {
            formatter: '{value}'
        }
        },
        {
        type: 'value',
        name: 'Respond Leeds',
        min: 0,
        interval: 5,
        axisLabel: {
            formatter: '{value}'
        }
        }
    ],
    series: [
        {
        name: 'Respond Leeds',
        type: 'bar',
        tooltip: {
            valueFormatter: function (value) {
            return value + '';
            }
        },
        data: [
            @foreach($chart_data as $chartFunc)
            {{$chartFunc->responded_count}},
            @endforeach
        ]
        },
        {
        name: 'Total Leeds',
        type: 'bar',
        tooltip: {
            valueFormatter: function (value) {
            return value + '';
            }
        },
        data: [
            @foreach($chart_data as $chartFunc)
            {{$chartFunc->count}},
            @endforeach
        ]
        },
        {
        name: 'Rates',
        type: 'line',
        smooth: true,
        yAxisIndex: 1,
        tooltip: {
            valueFormatter: function (value) {
            return value + '';
            }
        },
        data: [
            @foreach($chart_data as $chartFunc)
            {{$chartFunc->count}},
            @endforeach
        ]
        }
    ]
    };

    option && myChart.setOption(option);

    </script>

@endpush