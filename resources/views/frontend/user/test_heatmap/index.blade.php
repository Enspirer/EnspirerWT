@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
    <style>
        body, html { margin:0; padding:0; height:100%;}
        body { font-family:sans-serif; }
        body * { font-weight:200;}
        #heatmapContainerWrapper { width:100%; height:100%; position:absolute; }
        #heatmapContainer { width:100%; height:100%;}
        h1 { position:absolute; background:black; color:white; padding:10px; font-weight:200; z-index:10000;}
        #all-examples-info { position:absolute; background:white; font-size:16px; padding:20px; top:100px; width:350px; line-height:150%; border:1px solid rgba(0,0,0,.2);}
    </style>

    <section id="sectionMainWindow">
        @include('frontend.includes.sidebar')

        <div id="sectionBody">
        @include('frontend.includes.nav')

        <!-- Content goes here -->
            <div class="row g-0">
                <div class="section-content" id="stack_overflow">

                </div>
            </div>
        </div>
    </section>




@endsection

@push('after-scripts')



<script>
    $('.delete').on('click', function() {
        let link = $(this).attr('href');
        $('.modal-footer a').attr('href', link);
    })
</script>

@endpush





<script src="{{url('js/heatmap.min.js')}}"></script>
<script>
    window.onload = function() {
        // create a heatmap instance
        var heatmap = h337.create({
            container: document.getElementById('tocking'),
            maxOpacity: .6,
            radius: 50,
            blur: .90,
            // backgroundColor with alpha so you can see through it
            backgroundColor: 'rgba(0, 0, 58, 0.10)',

        });
        var heatmapContainer = document.getElementById('heatmapContainerWrapper');


        heatmap.addData({ x: 500, y: 467, value: 1 });
        heatmap.addData({ x: 700, y: 200, value: 1 });
        heatmap.addData({ x: 400, y: 1000, value: 1 });



    };
</script>
</body>
</html>