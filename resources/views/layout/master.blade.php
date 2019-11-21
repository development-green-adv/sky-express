<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="icon" href="{{ asset('images/web/icon.png') }}">
    <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />

    <!--<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>-->

    <title>@yield('title')</title>

    @section("style")
        @show
    
</head>
<body>
    
    @section('content')
        @show


    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>

        $('.slider-showcase').slick({
            autoplay: true,
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            infinite: true,
            accessibility: false
        });

        $('.slider-for').slick({
            autoplay: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            accessibility: false,
            dots: false,
            infinite: true,
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
                },
                {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
            ]   
        });
    </script>

    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 200,
            duration: 1000,
            disable: 'mobile'
        });
    </script>



    <script>

    $("#video_player")[0].play();
    $('#video_player').attr('loop','loop');


    </script>

    <!-- <script>

        
        $('.dropdown-menu a.dropdown-toggle').on('mouseenter', function {
            
                if (!$(this).next().hasClass('show')) {

                    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");

                }

                var $subMenu = $(this).next(".dropdown-menu");

                $subMenu.toggleClass('show');


                $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function {

                    $('.dropdown-submenu .show').removeClass("show");

                });


                return false;
        });

    </script> -->

</body>
</html>