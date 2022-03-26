@extends('frontend.layouts.mobile_app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<link rel="stylesheet" href="{{url('css/mobile_main.css')}}">

<section class="section-home">
    <div class="mobile-container">

        <div class="top-nav">
            <div class="inner-wrapper">
                <div class="navs">
                    <img src="{{url('images/mobile/home/hamburger.png')}}" alt="">
                </div>
                <div class="profile">
                    <img src="{{url('images/mobile/home/profile-picture.png')}}" alt="">
                </div>
            </div>
        </div>

        <div class="header">
            <div class="welcome-msg">
                <div class="title">Good morning</div>
                <div class="name">Amal Perera</div>
            </div>
            <div class="content-block">
                <div class="properties">
                    <div class="dropdown">
                        <a class="property-dropdown" href="#" role="button" id="propertyDrop"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="property">
                                <img src="{{url('images/mobile/home/property-image.png')}}" alt="" class="property-image">
                                <div class="content">
                                    <div class="title">Tallentor</div>
                                    <div class="address">https://tallentor.com/</div>
                                </div>
                            </div>
                            <img src="{{url('images/mobile/home/chevron-down.png')}}" alt="">
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="propertyDrop">
                            <li><a class="dropdown-item" href="#">
                                    <div class="property">
                                        <img src="{{url('images/mobile/home/property-image.png')}}" alt="" class="property-image">
                                        <div class="content">
                                            <div class="title">Tallentor</div>
                                            <div class="address">https://tallentor.com/</div>
                                        </div>
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item" href="#">
                                    <div class="property">
                                        <img src="{{url('images/mobile/home/property-image.png')}}" alt="" class="property-image">
                                        <div class="content">
                                            <div class="title">Tallentor</div>
                                            <div class="address">https://tallentor.com/</div>
                                        </div>
                                    </div>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="filter">
                    <div class="dropdown">
                        <a class="filter-dropdown" href="#" role="button" id="filterDrop" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="{{url('images/mobile/home/calender.png')}}" alt="">
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="filterDrop">
                            <div class="filter-form">
                                <div class="filter-label">Sort By</div>
                                <div class="input-groups">
                                    <select class="filter-select">
                                        <option disabled>Choose...</option>
                                        <option selected>Date</option>
                                        <option>A - Z</option>
                                        <option>Z - A</option>
                                    </select>
                                    <div class="datepicker">
                                        <div class="label">From</div>
                                        <i class="bi bi-calendar-week"></i>
                                        <input type="text" name="filter-date" class="filter-date-input">
                                    </div>
                                    <div class="datepicker">
                                        <div class="label">To</div>
                                        <i class="bi bi-calendar-week"></i>
                                        <input type="text" name="filter-date" class="filter-date-input">
                                    </div>
                                </div>
                                <div class="button-block">
                                    <a href="#" class="btn-mobile btn-cancel">Cancel</a>
                                    <a href="#" class="btn-mobile btn-apply">Apply</a>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

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
                        <div class="particle-label">
                            <img src="{{url('images/mobile/home/RO.png')}}" alt="">
                            <div class="country">Country</div>
                        </div>
                        <div class="particle-indicator indicator-1"></div>
                    </div>
                    <div class="particle particle-2">
                        <div class="particle-label">
                            <img src="{{url('images/mobile/home/RO.png')}}" alt="">
                            <div class="country">Country</div>
                        </div>
                        <div class="particle-indicator indicator-2"></div>
                    </div>
                    <div class="particle particle-3">
                        <div class="particle-label">
                            <img src="{{url('images/mobile/home/RO.png')}}" alt="">
                            <div class="country">Country</div>
                        </div>
                        <div class="particle-indicator indicator-3"></div>
                    </div>
                    <div class="particle particle-4">
                        <div class="particle-label">
                            <img src="{{url('images/mobile/home/RO.png')}}" alt="">
                            <div class="country">Country</div>
                        </div>
                        <div class="particle-indicator indicator-4"></div>
                    </div>
                </div>
                <div class="visitor-count">
                    <div class="counter">04</div>
                    <div class="text">Live Visitors</div>
                </div>
            </div>
        </div>

        <div class="visitors-section">
            <table class="table align-middle">
                <tbody>
                    <tr>
                        <td class="country-flag">
                            <img src="{{url('images/mobile/home/RO.png')}}" alt="">
                        </td>
                        <td class="country-name">Country</td>
                        <td class="active-status">
                            <div class="indicator active"></div>
                            <div class="label">30 min ago</div>
                        </td>
                        <td>
                            <a href="#" class="btn-mobile btn-watch">
                                <img src="{{url('images/mobile/home/watch.png')}}" alt="">
                                <div class="text">Watch</div>
                            </a>
                        </td>
                        <td>
                            <a href="#" class="btn-mobile btn-invite">
                                <img src="{{url('images/mobile/home/invite.png')}}" alt="">
                                <div class="text">Invite</div>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="country-flag">
                            <img src="{{url('images/mobile/home/RO.png')}}" alt="">
                        </td>
                        <td class="country-name">Country</td>
                        <td class="active-status">
                            <div class="indicator active"></div>
                            <div class="label">30 min ago</div>
                        </td>
                        <td>
                            <a href="#" class="btn-mobile btn-watch">
                                <img src="{{url('images/mobile/home/watch.png')}}" alt="">
                                <div class="text">Watch</div>
                            </a>
                        </td>
                        <td>
                            <a href="#" class="btn-mobile btn-invite">
                                <img src="{{url('images/mobile/home/invite.png')}}" alt="">
                                <div class="text">Invite</div>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="country-flag">
                            <img src="{{url('images/mobile/home/RO.png')}}" alt="">
                        </td>
                        <td class="country-name">Country</td>
                        <td class="active-status">
                            <div class="indicator"></div>
                            <div class="label">30 min ago</div>
                        </td>
                        <td>
                            <a href="#" class="btn-mobile btn-watch">
                                <img src="{{url('images/mobile/home/watch.png')}}" alt="">
                                <div class="text">Watch</div>
                            </a>
                        </td>
                        <td>
                            <a href="#" class="btn-mobile btn-invite">
                                <img src="{{url('images/mobile/home/invite.png')}}" alt="">
                                <div class="text">Invite</div>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="bottom-nav">
            <div class="navbar-nav">
                <div class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-house-door"></i>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-bar-chart"></i>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-plus-lg"></i>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-bell"></i>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-gear"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection

@push('after-scripts')

<script>
    // Filter Datepicker
    $('input[name="filter-date"]').daterangepicker({
        "singleDatePicker": true,
        "autoApply": true,
        "startDate": "03/15/2022",
        "endDate": "03/21/2022",
        "opens": "left",
        "drops": "auto"
    }, function (start, end, label) {
        console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format(
            'YYYY-MM-DD') + ' (predefined range: ' + label + ')');
    });

    // Radar tooltips
    const radarSection = document.querySelector('.radar-section');
    const particle = radarSection.querySelectorAll('.particle');

    particle.forEach(function (dot) {
        dot.addEventListener("click", function () {

            particle.forEach(function (label) {
                label.classList.remove('active');
            });

            dot.classList.add('active');
        })
    });

    // Visitors List tooltip

    const visitorsSection = document.querySelector('.visitors-section');
    const indicatorTd = visitorsSection.querySelectorAll('.active-status');
    const label = visitorsSection.querySelectorAll('.label');

    indicatorTd.forEach(function (ind) {
        ind.addEventListener("click", function () {

            indicatorTd.forEach(function (ind) {
                ind.querySelector('.label').classList.remove('active');
            });

            ind.querySelector('.label').classList.add('active');
        });
    });

    // remove added active classes in the page

    // window.addEventListener("click", function (e) {

    //     const liveStatus = e.target.classList.contains('indicator');
    //     const particles = e.target.classList.contains('particle-indicator');

    //     console.log(e.target);

    //     if (liveStatus) {
    //         particle.forEach(function (label) {
    //             label.classList.remove('active');
    //         });

    //     } else if (particles) {

    //         indicatorTd.forEach(function (ind) {
    //             ind.querySelector('.label').classList.remove('active');
    //         });
    //     }
    // })
</script>

@endpush