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

    {{-- <script src="{{ asset('assets/image-map/js/jquery.maphilight.min') }}"></script> --}}

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="icon" href=" {{ asset('images/web/icon.png') }} ">



    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />

    <title>@yield('title')</title>

    @section("")
        @show

    @section("style")
        @show
    
</head>
<body>
    
    @section('content')
        @show

    <div class="contact-us-right-wrapper">
        <div id="contact-us-right" onclick="moveContact(this)" br="0" class="contact-us-right">
            <p>CONTACT US</p>
        </div>
        <div id="contact-us-right-inner" class="contact-us-right-inner">
            <h4>Get In Touch</h4>
            <p>We look forward to <br> hearing from you.</p>
            <a href="/contact">CONTACT US</a>
        </div>
    </div>

    <script>

        $(document).ready(function(){
        $("#contact-us-right").click(function(){
            $(this).toggleClass('toggle-btn-contact');
            $("#contact-us-right-inner").toggle();
        });
        });
        // function moveContact(el){

        //     $('#contact-us-right').css('right', '125px');
        //     $('#contact-us-right-inner').css('display', 'block');

        // }



        // $('#contact-us-right').click(function() {
            
        //     $('#contact-us-right').css('right', '125px');
        //     $('#contact-us-right-inner').css('display', 'block');
            
        // });

    </script>

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