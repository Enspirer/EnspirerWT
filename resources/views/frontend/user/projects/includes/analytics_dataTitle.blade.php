<div class="data-title-bar">
    <h2 class="title">{{\App\Models\Projects::where('id',$project_id)->first()->url}}</h2>
    <div class="option-block">
        <a href="{{url(App\Models\Projects::where('id',$project_id)->first()->url)}}" target="_blank" class="open">
            <div class="text">Open</div>
            <i class="bi bi-box-arrow-up-right"></i>
        </a>
        <!-- <input type="text" id="dateRange" value="01/01/2018 - 01/15/2018" /> -->


            <a href="#" class="btn border text-secondary" id="date-range-selector">
                <div class="d-flex align-items-center cursor-pointer">
                   
                            
                    <span class="d-none d-lg-block text-nowrap" id="date-range-value">
                        @if($range['from'] == $range['to'])
                            @if(\Carbon\Carbon::createFromFormat('Y-m-d', $range['from'])->isToday())
                                {{ __('Today') }}
                            @elseif(\Carbon\Carbon::createFromFormat('Y-m-d', $range['from'])->isYesterday())
                                {{ __('Yesterday') }}
                            @else
                                {{ \Carbon\Carbon::createFromFormat('Y-m-d', $range['from'])->format(__('Y-m-d')) }} - {{ \Carbon\Carbon::createFromFormat('Y-m-d', $range['to'])->format(__('Y-m-d')) }}
                            @endif
                        @else
                            @if(\Carbon\Carbon::createFromFormat('Y-m-d', $range['from'])->format('Y-m-d') == \Carbon\Carbon::now()->subDays(6)->format('Y-m-d') && \Carbon\Carbon::createFromFormat('Y-m-d', $range['to'])->format('Y-m-d') == \Carbon\Carbon::now()->format('Y-m-d'))
                                {{ __('Last :days days', ['days' => 7]) }}
                            @elseif(\Carbon\Carbon::createFromFormat('Y-m-d', $range['from'])->format('Y-m-d') == \Carbon\Carbon::now()->subDays(29)->format('Y-m-d') && \Carbon\Carbon::createFromFormat('Y-m-d', $range['to'])->format('Y-m-d') == \Carbon\Carbon::now()->format('Y-m-d'))
                                {{ __('Last :days days', ['days' => 30]) }}
                            @elseif(\Carbon\Carbon::createFromFormat('Y-m-d', $range['from'])->format('Y-m-d') == \Carbon\Carbon::now()->startOfMonth()->format('Y-m-d') && \Carbon\Carbon::createFromFormat('Y-m-d', $range['to'])->format('Y-m-d') == \Carbon\Carbon::now()->endOfMonth()->format('Y-m-d'))
                                {{ __('This month') }}
                            @elseif(\Carbon\Carbon::createFromFormat('Y-m-d', $range['from'])->format('Y-m-d') == \Carbon\Carbon::now()->subMonthNoOverflow()->startOfMonth()->format('Y-m-d') && \Carbon\Carbon::createFromFormat('Y-m-d', $range['to'])->format('Y-m-d') == \Carbon\Carbon::now()->subMonthNoOverflow()->endOfMonth()->format('Y-m-d'))
                                {{ __('Last month') }}
                            @elseif(\Carbon\Carbon::createFromFormat('Y-m-d', $range['from'])->format('Y-m-d') == $website->created_at->format('Y-m-d') && \Carbon\Carbon::createFromFormat('Y-m-d', $range['to'])->format('Y-m-d') == \Carbon\Carbon::now()->format('Y-m-d'))
                                {{ __('All time') }}
                            @else
                                {{ \Carbon\Carbon::createFromFormat('Y-m-d', $range['from'])->format(__('Y-m-d')) }} - {{ \Carbon\Carbon::createFromFormat('Y-m-d', $range['to'])->format(__('Y-m-d')) }}
                             @endif
                        @endif
                    </span>

                </div>
            </a>


            <form method="GET" name="date-range" action="{{ route('frontend.user.user_widget.analytics.overview', $project_id) }}">
            {{csrf_field()}}
                <input name="from" type="hidden">
                <input name="to" type="hidden">
            </form>




    </div>
</div>

<script>
    'use strict';

    window.addEventListener('DOMContentLoaded', function () {
        document.querySelector('#date-range-selector') && document.querySelector('#date-range-selector').addEventListener('click', function (e) {
            e.preventDefault();
        });

        jQuery('#date-range-selector').daterangepicker({
            @php
                $utcOffset = \Carbon\Carbon::now()->utcOffset();
            @endphp

            ranges: {
                "{{ __('Today') }}": [moment().utcOffset({{ $utcOffset }}), moment().utcOffset({{ $utcOffset }})],
                "{{ __('Yesterday') }}": [moment().utcOffset({{ $utcOffset }}).subtract(1, 'days'), moment().utcOffset({{ $utcOffset }}).subtract(1, 'days')],
                "{{ __('Last :days days', ['days' => 7]) }}": [moment().utcOffset({{ $utcOffset }}).subtract(6, 'days'), moment().utcOffset({{ $utcOffset }})],
                "{{ __('Last :days days', ['days' => 30]) }}": [moment().utcOffset({{ $utcOffset }}).subtract(29, 'days'), moment().utcOffset({{ $utcOffset }})],
                "{{ __('This month') }}": [moment().utcOffset({{ $utcOffset }}).startOf('month'), moment().utcOffset({{ $utcOffset }}).endOf('month')],
                "{{ __('Last month') }}": [moment().utcOffset({{ $utcOffset }}).subtract(1, 'month').startOf('month'), moment().utcOffset({{ $utcOffset }}).subtract(1, 'month').endOf('month')],
                "{{ __('All time') }}": [moment('{{ $website->created_at->format('Y-m-d') }}'),  moment().utcOffset({{ $utcOffset }})]
            },
            locale: {
                direction: "{{ (__('lang_dir') == 'rtl' ? 'rtl' : 'ltr') }}",
                format: "{{ str_ireplace(['y', 'm', 'd'], ['YYYY', 'MM', 'DD'], __('Y-m-d')) }}",
                separator: " - ",
                applyLabel: "{{ __('Apply') }}",
                cancelLabel: "{{ __('Cancel') }}",
                customRangeLabel: "{{ __('Custom') }}",
                daysOfWeek: [
                    "{{ __('Su') }}",
                    "{{ __('Mo') }}",
                    "{{ __('Tu') }}",
                    "{{ __('We') }}",
                    "{{ __('Th') }}",
                    "{{ __('Fr') }}",
                    "{{ __('Sa') }}"
                ],
                monthNames: [
                    "{{ __('January') }}",
                    "{{ __('February') }}",
                    "{{ __('March') }}",
                    "{{ __('April') }}",
                    "{{ __('May') }}",
                    "{{ __('June') }}",
                    "{{ __('July') }}",
                    "{{ __('August') }}",
                    "{{ __('September') }}",
                    "{{ __('October') }}",
                    "{{ __('November') }}",
                    "{{ __('December') }}"
                ]
            },
            startDate : "{{ \Carbon\Carbon::createFromFormat('Y-m-d', $range['from'])->format(__('Y-m-d')) }}",
            endDate : "{{ \Carbon\Carbon::createFromFormat('Y-m-d', $range['to'])->format(__('Y-m-d')) }}",
            opens: "{{ (__('lang_dir') == 'rtl' ? 'right' : 'left') }}",
            applyClass: "btn-primary",
            cancelClass: "btn-secondary",
            linkedCalendars: false,
            alwaysShowCalendars: true
        });

        jQuery('#date-range-selector').on('apply.daterangepicker', function(ev, picker) {
            document.querySelector('input[name="from"]').value = picker.startDate.format('YYYY-MM-DD');
            document.querySelector('input[name="to"]').value = picker.endDate.format('YYYY-MM-DD');

            document.querySelector('form[name="date-range"]').submit();
        });

        jQuery('#date-range-selector').on('hide.daterangepicker', function(ev, picker) {
            document.querySelector('#date-range-selector').classList.remove('active');
        });

        jQuery('#date-range-selector').on('show.daterangepicker', function(ev, picker) {
            document.querySelector('#date-range-selector').classList.add('active');
        });
    });
</script>