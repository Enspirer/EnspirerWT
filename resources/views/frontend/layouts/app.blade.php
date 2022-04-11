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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://kit.fontawesome.com/aa4e69f91b.js" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.0/dist/js/splide.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.0/dist/css/splide.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

        <link rel="stylesheet" href="{{url('css/main.css')}} ">
        <link rel="stylesheet" href="{{url('css/navbar.css')}} ">
        <link rel="stylesheet" href="{{url('css/home.css')}} ">
        <link rel="stylesheet" href="{{url('css/footer.css')}} ">
        <link rel="stylesheet" href="{{url('css/card_section.css')}}">
        <!-- Hotjar Tracking Code for https://tallentor.com/ -->

        <script data-host="https://tallentor.com" data-dnt="false" src="https://tallentor.com/js/script_tracker.js" id="ZwSg9rf6GA" async defer></script>

        <script>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:2872426,hjsv:6};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        </script>
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
            <div id="7W7750702505383"></div>
            <script src="https://tallentor.com/whatsapp_widget/11/tallentorw.js"></script>
                @yield('content')
            </div><!-- container -->
        </div><!-- #app -->

        <!-- Scripts -->
        @stack('before-scripts')
        
        @stack('after-scripts')

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>

        <script src="{{url('js/script.js')}}"></script>

        @stack('after-scripts-slider')

        <!-- Hero Slider -->

        <script>
            const heroSlider = new Splide( '#heroSlider', {
                type: 'fade',
                autoplay: true,
                arrows: false,
                rewind: true,
                classes: {
                        pagination: 'splide__pagination custom__pagination',
                        page      : 'splide__pagination__page custom__pagination__page',
                },
            }, );
            
            heroSlider.mount();

            window.addEventListener('load', function () {
                const slideWrapper = document.getElementById('heroSlider')
                const indicator1 = slideWrapper.querySelector('li:nth-child(1) .custom__pagination__page')
                const indicator2 = slideWrapper.querySelector('li:nth-child(2) .custom__pagination__page')
                const indicator3 = slideWrapper.querySelector('li:nth-child(3) .custom__pagination__page')
                indicator1.textContent = 'Widget Lite';
                indicator2.textContent = 'Widget Pro';
                indicator3.textContent = 'Optimizer';
            })
        </script>

        
        <!-- Index Slider -->

        <script>
            var indexSlider = new Splide('#indexSlider', {
                type: 'loop',
                perPage: 1,
                focus: 'center',
                gap: '1rem',
                fixedWidth: '400px',
                pagination: false,
                breakpoints: {
		                        574: {
                                    fixedWidth: '300px',
                                    arrows: false,
		                            },
                            },
            });

            indexSlider.mount();
        </script>

        <!-- Marketplace Hover -->

        <script>
            const marketplace = document.getElementById("marketplaceCards");
            const cards = marketplace.querySelectorAll(".card");
            const midCard = marketplace.querySelector(".card-middle");

            cards.forEach(function (card) {
                card.addEventListener("mouseout", function () {
                    cards.forEach(function(reclass){
                        reclass.classList.remove("active");
                    });
                    midCard.classList.add("active");
                });

                card.addEventListener("mouseover", function () {
                    cards.forEach(function(reclass){
                        reclass.classList.remove("active");
                    });
                    card.classList.add("active");
                });
            });
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
                                    arrows: false,
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
            breakpoints: {
		                        767: {
                                    arrows: false,
		                            },
                            },
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

    <script>
        // Products slider
    var whatsappFeatureSlider = new Splide( '#whatsappFeatureSlider', {
        type   : 'loop',
        autoplay: true,
        pagination: false,
        arrows: false,
    });

    whatsappFeatureSlider.mount();
    </script>

    <script>
    if ($('.menu-trigger').length) {
		$(".menu-trigger").on('click', function () {
			$(this).toggleClass('active');
			$('.navigation-bar .inner-wrapper .navbar-nav').toggleClass("active");
			$('.navigation-bar .inner-wrapper').toggleClass("active");
		});
	}
    </script>
                
        @include('includes.partials.ga')
    </body>
</html>
