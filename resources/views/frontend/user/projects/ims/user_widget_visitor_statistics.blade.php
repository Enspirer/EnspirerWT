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
                                            
                                            <li class="breadcrumb-item">
                                                <!-- <a class="breadcrumb-link">Visitor Statistics</a> -->
                                            </li>
                                            <!-- <li class="breadcrumb-item">
                                                <a href="#" class="breadcrumb-link breadcrumb-arrow"><i
                                                        class="bi bi-chevron-right"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a class="breadcrumb-link breadcrumb-current">Inbox</a>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col">
                                        <section class="coversation-section ims__panel" id="ims__conversation">
                                            <div class="inbox--section ims__panel" id="ims__inbox">
                                              
                                            <div class="row g-0">
                                                <div class="col-6">
                                                    <div class="card p-4" style="border-radius:20px;">
                                                        <div class="content">
                                                        
                                                            <div class="chart-section">
                                                                <div id="analyticsChart" style="width: 100%;height: 350px;"></div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="card p-4 ms-3" style="border-radius:20px;">
                                                        <div class="content"> 

                                                            <div class="caption"><i class="bi bi-broadcast"></i> Live Visitors</div>
                                                            <h4 class="count">{{\App\Models\VisitorCount::where('project_id',$project->id)->count()}}</h4>
                                
                                                            @if(count($visitors) != 0)                                                               
                                                                <div class="ims__data-table">
                                                                    <table class="table table-borderless">
                                                                        <thead>
                                                                            <tr class="data-row">
                                                                               
                                                                                <th class="data-title">Project ID</th>
                                                                                <th class="data-title">Widget ID</th>
                                                                                <th class="data-title">IP Address</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach($visitors as $key => $visitor)
                                                                                <tr class="data-row">
                                                                                                                                                                        
                                                                                    <td class="data--name data-cell">
                                                                                        <div class="text">{{$visitor->project_id}}</div>
                                                                                    </td>
                                                                                    <td class="data--date data-cell">
                                                                                        <div class="text">{{$visitor->widget_id}}</div>
                                                                                    </td>
                                                                                    <td class="data--date data-cell">
                                                                                        <div class="text">{{$visitor->ip_address}}</div>
                                                                                    </td>                                                                                    
                                                                                </tr>
                                                                            @endforeach
                                                                            
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            @endif
                                                        </div>
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