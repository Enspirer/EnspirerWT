<!DOCTYPE html>
@langrtl
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
@else
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endlangrtl
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="app-url" content="{{ getBaseURL() }}">
        <meta name="file-base-url" content="{{ getFileBaseURL() }}">
        <title>@yield('title', app_name())</title>
        <meta name="description" content="@yield('meta_description', 'Laravel Boilerplate')">
        <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
        <link rel="apple-touch-icon" sizes="180x180" href="{{url('images/logo/fev/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{url('images/logo/fev/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{url('images/logo/fev/favicon-16x16.png')}}">
        <link rel="manifest" href="{{url('images/logo/fev/site.webmanifest')}}">
        <link rel="mask-icon" href="{{url('images/logo/fev/safari-pinned-tab.svg')}}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        @yield('meta')

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.5/css/flag-icons.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://kit.fontawesome.com/aa4e69f91b.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="{{url('css/jquery-clockpicker.min.css')}}">

        {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
        @stack('before-styles')

        <link rel="stylesheet" href="{{url('css/aiz-core.css')}}">  
        <link rel="stylesheet" href="{{url('css/vendors.css')}}">  
    
    <script>
        var AIZ = AIZ || {};
        AIZ.local = {
        nothing_selected: 'Nothing selected',
        nothing_found: 'Nothing found',
        choose_file: 'Choose file',
        file_selected: 'File selected',
        files_selected: 'Files selected',
        add_more_files: 'Add more files',
        adding_more_files: 'Adding more files',
        drop_files_here_paste_or: 'Drop files here, paste or',
        browse: 'Browse',
        upload_complete: 'Upload complete',
        upload_paused: 'Upload paused',
        resume_upload: 'Resume upload',
        pause_upload: 'Pause upload',
        retry_upload: 'Retry upload',
        cancel_upload: 'Cancel upload',
        uploading: 'Uploading',
        processing: 'Processing',
        complete: 'Complete',
        file: 'File',
        files: 'Files',
        }
</script>

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->

        @stack('after-styles')
    </head>
    <body>
        @include('includes.partials.read-only')

        <div id="app">
            @include('includes.partials.logged-in-as')
            <div class="">
                @include('includes.partials.messages')
                @yield('content')
            </div><!-- container -->
        </div><!-- #app -->

        <!-- Scripts -->
        @stack('before-scripts')
        
        @stack('after-scripts')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
        <script src="{{url('js/script.js')}}"></script>
        <script src="{{url('css/jquery-clockpicker.min.js')}}"></script>
        <script src="{{url('js/vendors.js')}}"></script>
        <script src="{{url('js/aiz-core.js')}}"></script>

        
        <!-- Clockpicker -->
    <script>
        $('#start_time').clockpicker({
            autoclose: true,
            twelvehour: true,
            donetext: 'Done',
        });

        $('#end_time').clockpicker({
            autoclose: true,
            twelvehour: true,
            donetext: 'Done',
        });

        $('#specific_time_selector').change(function () {
            const schTime = $('#specific_time_selector:checked').val();
            if (schTime == 'on') {
                $('.specific-time-block').show();
            } else {
                $('.specific-time-block').hide();
            }
        });
    </script>

        
        @include('includes.partials.ga')
    </body>
</html>
