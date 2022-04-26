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
                                        <div class="title">{{ $string=str_replace("_"," ", ucfirst(trans($key)) ) }}</div>
                                        <div class="duration">{{$project->created_at->diffForHumans()}}</div>
                                    </div>
                                    <div class="body">
                                        <table class="seo-table">
                                            <tbody>
                                                @if($seo_result->passed == 'false')
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
                                                @else
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
                                                @endif
                                               
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
                                <a href="#" class="bot-btn" data-bs-toggle="modal" data-bs-target="#botModal">Get Your Bot</a>
                            </div>
                        </div>

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
                                            <div class="action-block slider active">
                                                <input type="hidden" slider-input>
                                                <div class="splide bot-slider" id="botSlider">
                                                    <div class="splide__track">
                                                        <ul class="splide__list">
                                                            <li class="splide__slide">
                                                                <a href="#" class="slider-link" data-bot="bot-1">
                                                                    <div class="slider-card">
                                                                        <div class="image-block">
                                                                            <img src="{{url('images/dashboard/ims_pro/bot-slide.png')}}" alt="">
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
                                                                </a>
                                                            </li>
                                                            <li class="splide__slide">
                                                                <a href="#" class="slider-link" data-bot="bot-2">
                                                                    <div class="slider-card">
                                                                        <div class="image-block">
                                                                            <img src="{{url('images/dashboard/ims_pro/bot-slide.png')}}" alt="">
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
                                                    <select class="form-select" form-select>
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
                                                    </div>
                                                    <div class="fee-row">
                                                        <div class="text">Discount</div>
                                                        <div class="amount">$20.00</div>
                                                    </div>
                                                    <div class="fee-row">
                                                        <div class="text">Taxes & Fees</div>
                                                        <div class="amount">$20.00</div>
                                                    </div>
                                                    <div class="fee-row">
                                                        <div class="text">Total</div>
                                                        <div class="amount" total-fee>$20.00</div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn-submit" btn-submit>Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="text">Get Bonus</div>
                                        <div class="bonus">$5</div>
                                    </div>
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
                value: 70
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