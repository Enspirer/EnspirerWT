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
                                <li class="breadcrumb-item active">SEO Bots</li>
                            </ul>
                        </div>

                        @include('frontend.user.projects.includes.card_section')

                        @include('frontend.user.projects.includes.seo_nav')

                        <div class="bot-overview">
                            <div class="inner-wrapper">
                                <div class="graph-block">
                                    <div id="botGraph" style="width:100%;height:470px;"></div>
                                </div>
                                <div class="bot-list">
                                    <div class="header">
                                        <div class="title">Your Bots</div>
                                    </div>
                                    <div class="body">
                                        <div class="bot-item">
                                            <div class="image-block">
                                                <img src="{{url('images/dashboard/main/bot-icon.png')}}" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="title">Chat Bot Name</div>
                                                <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</div>
                                                <div class="button-block">
                                                    <a href="#" class="bot-btn btn-manage">Manage</a>
                                                    <a href="#" class="bot-btn btn-disable">Disable</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bot-item">
                                            <div class="image-block">
                                                <img src="{{url('images/dashboard/main/bot-icon.png')}}" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="title">Chat Bot Name</div>
                                                <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</div>
                                                <div class="button-block">
                                                    <a href="#" class="bot-btn btn-manage">Manage</a>
                                                    <a href="#" class="bot-btn btn-disable">Disable</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="project-section">
                            <div class="title">Current Project</div>
                            <div class="innre-wrapper">
                                <div class="project-card">
                                    <div class="header">
                                        <div class="text-block">
                                            <div class="title">Bot Name Here</div>
                                            <div class="text">SEO optimization</div>
                                        </div>
                                        <div class="bot-no">01</div>
                                    </div>
                                    <div class="progress-block">
                                        <div class="progress-item">
                                            <div class="count green">05</div>
                                            <div class="text">Completed</div>
                                        </div>
                                        <div class="progress-item">
                                            <div class="count orange">03</div>
                                            <div class="text">In Progress</div>
                                        </div>
                                        <div class="progress-item">
                                            <div class="count red">02</div>
                                            <div class="text">To Do</div>
                                        </div>
                                    </div>
                                    <div class="progress-bar">
                                        <div class="progress-indicator green" style="flex:0 0 50%"></div>
                                        <div class="progress-indicator orange" style="flex:0 0 30%"></div>
                                        <div class="progress-indicator red" style="flex:0 0 20%"></div>
                                    </div>
                                </div>
                                <div class="project-card">
                                    <div class="header">
                                        <div class="text-block">
                                            <div class="title">Bot Name Here</div>
                                            <div class="text">SEO optimization</div>
                                        </div>
                                        <div class="bot-no">01</div>
                                    </div>
                                    <div class="progress-block">
                                        <div class="progress-item">
                                            <div class="count green">05</div>
                                            <div class="text">Completed</div>
                                        </div>
                                        <div class="progress-item">
                                            <div class="count orange">03</div>
                                            <div class="text">In Progress</div>
                                        </div>
                                        <div class="progress-item">
                                            <div class="count red">02</div>
                                            <div class="text">To Do</div>
                                        </div>
                                    </div>
                                    <div class="progress-bar">
                                        <div class="progress-indicator green" style="flex:0 0 50%"></div>
                                        <div class="progress-indicator orange" style="flex:0 0 30%"></div>
                                        <div class="progress-indicator red" style="flex:0 0 20%"></div>
                                    </div>
                                </div>
                                <div class="project-card">
                                    <div class="header">
                                        <div class="text-block">
                                            <div class="title">Bot Name Here</div>
                                            <div class="text">SEO optimization</div>
                                        </div>
                                        <div class="bot-no">01</div>
                                    </div>
                                    <div class="progress-block">
                                        <div class="progress-item">
                                            <div class="count green">05</div>
                                            <div class="text">Completed</div>
                                        </div>
                                        <div class="progress-item">
                                            <div class="count orange">03</div>
                                            <div class="text">In Progress</div>
                                        </div>
                                        <div class="progress-item">
                                            <div class="count red">02</div>
                                            <div class="text">To Do</div>
                                        </div>
                                    </div>
                                    <div class="progress-bar">
                                        <div class="progress-indicator green" style="flex:0 0 50%"></div>
                                        <div class="progress-indicator orange" style="flex:0 0 30%"></div>
                                        <div class="progress-indicator red" style="flex:0 0 20%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="security-block">
                            <div class="feature-block">
                                <div class="title">Website Alerts</div>
                                <table class="security-table">
                                    <tbody>
                                        <tr>
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
                                        </tr>                                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="feature-block">
                                <div class="title">Website Alerts</div>
                                <table class="security-table">
                                    <tbody>
                                        <tr>
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
                                        </tr>                                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="feature-block">
                                <div class="title">Website Alerts</div>
                                <table class="security-table">
                                    <tbody>
                                        <tr>
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




@endsection


@push('after-scripts')

<script>
var dom = document.getElementById("botGraph");
var myChart = echarts.init(dom, null, {
  renderer: "canvas",
  useDirtyRect: false
});
var app = {};

var option;

let base = +new Date(1968, 9, 3);
let oneDay = 24 * 3600 * 1000;
let date = [];
let data = [Math.random() * 300];
for (let i = 1; i < 20000; i++) {
  var now = new Date((base += oneDay));
  date.push([now.getFullYear(), now.getMonth() + 1, now.getDate()].join("/"));
  data.push(Math.round((Math.random() - 0.5) * 20 + data[i - 1]));
}
option = {
  tooltip: {
    trigger: "axis",
    position: function (pt) {
      return [pt[0], "10%"];
    }
  },
  xAxis: {
    type: "category",
    boundaryGap: false,
    data: date
  },
  yAxis: {
    type: "value",
    boundaryGap: [0, "100%"]
  },
  series: [
    {
      name: "Fake Data",
      type: "line",
      symbol: "none",
      sampling: "lttb",
      itemStyle: {
        color: "rgb(255, 70, 131)"
      },
      areaStyle: {
        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
          {
            offset: 0,
            color: "rgb(255, 158, 68)"
          },
          {
            offset: 1,
            color: "rgb(255, 70, 131)"
          }
        ])
      },
      data: data
    }
  ]
};

if (option && typeof option === "object") {
  myChart.setOption(option);
}

window.addEventListener("resize", myChart.resize);
</script>

@endpush