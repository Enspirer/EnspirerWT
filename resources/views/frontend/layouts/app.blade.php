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
        <title>@yield('title', app_name())</title>
        <meta name="description" content="@yield('meta_description', 'Laravel Boilerplate')">
        <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
        @yield('meta')

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.5/css/flag-icons.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://kit.fontawesome.com/aa4e69f91b.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="{{url('css/main.css')}} ">
        <link rel="stylesheet" href="{{url('css/navbar.css')}} ">
        <link rel="stylesheet" href="{{url('css/home.css')}} ">
        <link rel="stylesheet" href="{{url('css/footer.css')}} ">

        {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
        @stack('before-styles')

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->

        @stack('after-styles')
    </head>
    <body>
        @include('includes.partials.read-only')

        <div id="app">
            @include('includes.partials.logged-in-as')
            <div class="">
                <div id="45736B027404877"></div>
                <script src="https://tallentor.com/whatsapp_widget/1/tallentorw.js"></script>
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

        @stack('after-scripts-slider')

        <!-- Index Slider -->

        <script>
            var indexSlider = new Splide('#indexSlider', {
                type: 'loop',
                perPage: 1,
                focus: 'center',
                gap: '2rem',
                fixedWidth: '400px',
                pagination: false,
                breakpoints: {
		                        574: {
                                    fixedWidth: '300px',
		                            },
                            },
            });

            indexSlider.mount();
        </script>

        <!-- Sign Up Slider -->
        <script>
            var signUpSlider = new Splide('#signUpSlider', {
                arrows: false,
                classes: {
                    pagination: 'splide__pagination splide__pagination--custom',
                    page: 'splide__pagination__page indicator',
                },
            });
            signUpSlider.mount();
        </script>

         <!-- Sign In Slider -->
        <script>
            var signInSlider = new Splide('#signInSlider', {
                arrows: false,
                classes: {
                    pagination: 'splide__pagination splide__pagination--custom',
                    page: 'splide__pagination__page indicator',
                },
            });
            signInSlider.mount();
        </script>

        <!-- eShop Slider -->

        <script>
        var eShopSlider = new Splide('#eShopSlider', {
            rewind: false,
            fixedWidth: '47rem',
            gap: '2rem',
            pagination: false,
            breakpoints: {
		                        767: {
                                    fixedWidth: '300px',
		                            },
                            },
        });

        eShopSlider.mount();
        // Slider active classes
        const eShopSlidesList = document.getElementById("eShopSlider");
        const eShopSlides = eShopSlidesList.querySelectorAll('.services-card');

        eShopSlides.forEach(function (slide) {
            slide.addEventListener("click", function () {
                eShopSlides.forEach(function (tab) {
                    tab.classList.remove("active");
                });
                slide.classList.add("active");
            });
        });
    </script>

    <!-- Contact Slider -->
    <script>
        var contactSlider = new Splide('#contactSlider', {
            perPage: 3,
            rewind: false,
            fixedWidth: '300px',
            fixedHeight: '320px',
            gap: '3.5rem',
        });

        contactSlider.mount();

        // Slider active classes
        const slideList = document.getElementById("contactSlider");
        const card = slideList.querySelectorAll('.slider-card');

        card.forEach(function (item) {
            item.addEventListener("click", function () {
                card.forEach(function (tab) {
                    tab.classList.remove("active");
                });
                item.classList.add("active");
            });
        });
    </script>
                
        @include('includes.partials.ga')
    </body>
</html>
