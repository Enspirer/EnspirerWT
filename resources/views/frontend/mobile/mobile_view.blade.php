@extends('frontend.layouts.mobile_app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

@include('frontend.mobile.includes.mobile_nav')

<link rel="stylesheet" href="{{url('css/mobile_main.css')}}">
<link rel="stylesheet" href="{{url('css/pulldelete.css')}}">
<script src="{{url('js/pulldelete.js')}}"></script>

<section class="section-home">
    <div class="mobile-container">

        <div class="top-nav">
            <div class="inner-wrapper">
                <div class="navs">
                    <img src="{{url('images/mobile/home/hamburger.png')}}" alt="" data-bs-toggle="modal" data-bs-target="#mobileNav">
                </div>
                
                @auth
                    <div class="nav-item dropdown">
                        <a class="nav-link" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="profile">
                                <div class="profile">
                                    <img src="{{auth()->user()->picture}}" alt="">
                                </div>                                        
                            </div>
                        </a>
                        @auth
                            <ul class="dropdown-menu profile-dropdown-menu" aria-labelledby="profileDropdown">                                           
                                <li>
                                    <a class="dropdown-item" href="{{route('frontend.auth.logout')}}">
                                                        
                                        <div class="text">Sign Out</div>
                                    </a>
                                </li>
                            </ul>
                        @endauth
                    </div>
                @endauth



            </div>
        </div>

        @include('frontend.mobile.includes.property')

        <div class="radar-section">
            <div class="inner-wrapper">
                <div class="rings">
                    <div class="ring ring-1"></div>
                    <div class="ring ring-2"></div>
                    <div class="ring ring-3"></div>
                    <div class="ring ring-4"></div>
                    <div class="ring ring-5"></div>
                </div>
                <img src="{{url('images/mobile/home/radar.png')}}" alt="" class="indicator">
                <div class="particles">
                    <div class="particle particle-1">
                        <div class="particle-indicator indicator-1"></div>
                        <div class="particle-label">
                            <img src="{{url('images/mobile/home/RO.png')}}" alt="">
                            <div class="country">Country</div>
                        </div>
                    </div>
                    <div class="particle particle-2">
                        <div class="particle-indicator indicator-2"></div>
                        <div class="particle-label">
                            <img src="{{url('images/mobile/home/RO.png')}}" alt="">
                            <div class="country">Country</div>
                        </div>
                    </div>
                    <div class="particle particle-3">
                        <div class="particle-indicator indicator-3"></div>
                        <div class="particle-label">
                            <img src="{{url('images/mobile/home/RO.png')}}" alt="">
                            <div class="country">Country</div>
                        </div>
                    </div>
                    <div class="particle particle-4">
                        <div class="particle-indicator indicator-4"></div>
                        <div class="particle-label">
                            <img src="{{url('images/mobile/home/RO.png')}}" alt="">
                            <div class="country">Country</div>
                        </div>
                    </div>
                </div>
                <div class="visitor-count">
                    @if(isset($project_id))
                        <div data-counter class="counter">{{\App\Models\VisitorCount::where('project_id',$project_id)->count()}}</div>
                    @endif
                    <div class="text">Live Visitors</div>
                </div>
            </div>
        </div>

        <div class="filter-section">
            <a href="#" class="btn-sort">
                <i class="bi bi-arrow-left-right"></i>
            </a>
            <select class="sort-select">
                <option selected disabled>Sort By</option>
                <option>Name</option>
                <option>Date</option>
                <option>A-Z</option>
            </select>
            <div class="start-date">14-09-2022 </div>
            <div class="text">to</div>
            <div class="end-date">20-09-2022</div>
        </div>

        <div class="visitors-section">
            <table class="table align-middle">
                @if($project_id != null)
                    @if(count($visitors_count) != 0)
                        @foreach($visitors_count as $visitors)
                        <tbody id="liveVisitors"></tbody>
                        @endforeach
                    @endif
                @endif
            </table>
        </div>

        @include('frontend.mobile.includes.bottom_nav')
    </div>
</section>

<!-- Modal: Add Button -->
<div class="modal fade addProperty-model mobile-model" id="addProperty" tabindex="-1" aria-labelledby="addPropertyLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add to</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul class="list-group list-group-flush">
            <li class="list-group-item pull_delete active">
                <a href="#" class="list-link">
                    <div class="property">
                        <img src="{{url('images/mobile/home/property-image.png')}}" alt="" class="property-image">
                        <div class="content">
                            <div class="title">Tallentor</div>
                            <div class="address">https://tallentor.com/</div>
                        </div>
                        <i class="bi bi-chevron-right"></i>
                    </div>
                </a>
            </li>
        </ul>
      </div>
      <div class="modal-footer">
        <a href="#" type="button" class="btn-mobile btn-new-project" data-bs-toggle="modal" data-bs-target="#addPropertyInput">Add new Project</a>
      </div>
    </div>
  </div>
</div>

<!-- Modal: Add Property -->
<div class="modal fade addPropertyInput-model mobile-model" id="addPropertyInput" tabindex="-1" aria-labelledby="addPropertyInputLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add to</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <div class="list-label">Project Name</div>
                <input type="text" name="property-input" class="list-input">
            </li>
            <li class="list-group-item">
                <div class="list-label">Project Type</div>
                <input type="text" name="property-input" class="list-input">
            </li>
            <li class="list-group-item">
                <div class="list-label">URL</div>
                <input type="text" name="property-input" class="list-input">
            </li>
        </ul>
      </div>
      <div class="modal-footer">
        <a href="#" type="button" class="btn-mobile btn-project-submit">Submit</a>
        <a href="#" type="button" class="btn-mobile btn-cancel" data-bs-dismiss="modal">Close</a>
      </div>
    </div>
  </div>
</div>
    
@endsection

@push('after-scripts')

<script>

    // Radar tooltips
    // const radarSection = document.querySelector('.radar-section');
    // const particle = radarSection.querySelectorAll('.particle');

    // particle.forEach(function (dot) {
    //     dot.addEventListener("click", function () {

    //         particle.forEach(function (label) {
    //             label.classList.remove('active');
    //         });

    //         dot.classList.add('active');
    //     })
    // });

    // Visitors List tooltip

    // const visitorsSection = document.querySelector('.visitors-section');
    // const indicatorTd = visitorsSection.querySelectorAll('.active-status');
    // const label = visitorsSection.querySelectorAll('.label');

    // indicatorTd.forEach(function (ind) {
    //     ind.addEventListener("click", function () {

    //         indicatorTd.forEach(function (ind) {
    //             ind.querySelector('.label').classList.remove('active');
    //         });

    //         ind.querySelector('.label').classList.add('active');
    //     });
    // });

    // remove added active classes in the page

    // window.addEventListener("click", function (e) {

    //     const liveStatus = e.target.classList.contains('indicator');
    //     const particles = e.target.classList.contains('particle-indicator');

    //     console.log(e.target);

    //     particle.forEach(function (label) {
    //         label.classList.remove('active');
    //     });

    //     indicatorTd.forEach(function (ind) {
    //         ind.querySelector('.label').classList.remove('active');
    //     });
    // })

    // Pull Delete
    $(function () {
        $('.pull_delete').pulldelete(function ($dom) {
            $dom.remove();
        });
    })
</script>

<script>
    // RealtimeStats function
    function realtimeStats() {
        const tBody = document.getElementById('liveVisitors')
        fetch('https://tallentor.com/api/live_visitor_monitor_api/1')
            .then(res => res.json())
            .then(data => {
                document.querySelector('[data-counter').textContent = data.length;
                tBody.innerHTML = '';

                data.forEach(function (data) {
                    const countyCode = data.iso_code.toLowerCase();
                    const tRow = document.createElement('tr');

                        if (data.length != 0) {
                            if(data.chat_invite == null){                            
                                    tRow.innerHTML =
                                        `<td class="country-flag">
                                    <img src="https://flagicons.lipis.dev/flags/4x3/${countyCode}.svg">
                                </td>
                                <td class="country-name">${data.country}</td>
                                <td class="active-status">
                                    <div class="indicator active"></div>
                                    <div class="label"></div>
                                </td>
                                <td>
                                    <a href="#" class="btn-mobile btn-watch">
                                        <i class="bi bi-play"></i>
                                        <div class="text">Watch</div>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{route('user_optimizer.realtime_invite')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <input type="hidden" name="project_id" value="${data.project_id}">
                                        <input type="hidden" name="visitors_id" value="${data.id}">
                                        <button type="submit" style="border: none;" class="btn-mobile btn-invite">
                                            <i class="bi bi-node-plus"></i>
                                            <div class="text">Invite</div>
                                        </button>
                                    </form>
                                </td>`
                            }
                            else{
                                tRow.innerHTML =
                                        `<td class="country-flag">
                                    <img src="https://flagicons.lipis.dev/flags/4x3/${countyCode}.svg">
                                </td>
                                <td class="country-name">${data.country}</td>
                                <td class="active-status">
                                    <div class="indicator active"></div>
                                    <div class="label"></div>
                                </td>
                                <td>
                                    <a href="#" class="btn-mobile btn-watch">
                                        <i class="bi bi-play"></i>
                                        <div class="text">Watch</div>
                                    </a>
                                </td>
                                <td>
                                    <button type="submit" style="border: none;" class="btn-mobile btn-invite" disabled>
                                        <i class="bi bi-node-plus"></i>
                                        <div class="text">Invited</div>
                                    </button>
                                </td>`
                            }
                    } else {
                        tRow.innerHTML =
                            `<td colspan="5" class="country-name">There are no live visitors</td>`
                    }

                    tBody.appendChild(tRow);
                });
            })

        // Set Interval realtimeStats function
        setTimeout(realtimeStats, 5000);
    }

    // Run realtimeStats function on page load
    window.addEventListener('load', function () {
        realtimeStats();
    })
</script>

@endpush