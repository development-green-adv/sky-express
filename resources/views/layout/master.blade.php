<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="icon" href="{{ asset('images/web/icon.png') }}">
    <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/image-map/jquery.maphilight.min.js') }}"></script>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="icon" href=" {{ asset('images/web/icon.png') }} ">



    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />

    <title>@yield('title')</title>

    @section("seo")
    @show

    @section("style")
    @show

</head>

<body>

    @section('content')
    @show


    <div id="contact-eng" class="contact-us-right-wrapper">
        <div id="contact-us-right" class="contact-us-right">
            <p>CONTACT US</p>
        </div>
        <div id="contact-us-right-inner" class="contact-us-right-inner">
            <h4>Get In Touch</h4>
            <p>We look forward to <br> hearing from you.</p>
            <a href="/contact">CONTACT US</a>
        </div>
    </div>


    <div id="contact-srb" class="contact-us-right-wrapper">
        <div id="contact-us-right1" class="contact-us-right">
            <p>KONTAKT</p>
        </div>
        <div id="contact-us-right-inner1" class="contact-us-right-inner">
            <h4>Kontakt</h4>
            <p>Želimo da vas čujemo.</p>
            <a href="/sr/kontakt">KONTAKTIRAJTE NAS</a>
        </div>
    </div>



    @if(Cookie::get('prvi') == "")

    <div id="pop-up" class="pop-up-srb">
        <div id="remove-pop-up" class="remove-pop-up">x</div>
        <div class="container">
            <h5>
                Sky Express koristi kolačiće (cookies) koji služe poboljšanju funkcionalnosti sajta i ne sadrže lične
                podatke. Više o kolačićima pročitajte u <a href="/sr/politika-privatnosti">Politici privatnosti</a>.
            </h5>
        </div>
    </div>

    @endif

    @if(Cookie::get('prvi') == "")

    <div id="pop-up-eng" class="pop-up-srb pop-up-eng">
        <div id="remove-pop-up-eng" class="remove-pop-up">x</div>
        <div class="container">
            <h5>
                Sky Express uses cookies to improve the functionality of the site and do not contain personal
                information. Read more about cookies in our <a href="/privacy-policy">Privacy Policy</a>.
            </h5>
        </div>
    </div>

    @endif


    <script>
        $(document).ready(function() {

            $("#remove-pop-up").click(function() {
                $('#pop-up').css('display', 'none');
            });
        });
    </script>

    <script>
        $(document).ready(function() {

            $("#remove-pop-up-eng").click(function() {
                $('#pop-up-eng').css('display', 'none');
            });
        });
    </script>



    <script>
        $(document).ready(function() {

            $("#contact-us-right").click(function() {
                $(this).toggleClass('toggle-btn-contact');
                $("#contact-us-right-inner").toggle();
            });

            $("#contact-us-right1").click(function() {
                $(this).toggleClass('toggle-btn-contact');
                $("#contact-us-right-inner1").toggle();
            });
        });
    </script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        // image map
        $('img[usemap]').maphilight({
            fillColor: 'ffffff',
            strokeColor: '#ffffff',
            responsive: [{
                breakpoint: 768,
                settings: {
                    fill: false,
                    fillColor: 'transparent'
                }
            }]
        });

        if ($(window).width() < 768) {
            document.getElementById("imgmap").setAttribute('usemap', 'disabled');
        }
        if ($(window).width() > 768) {
            document.getElementById("imgmap").setAttribute('usemap', '#skymap');
        }
    </script>


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
            responsive: [{
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
        $('#video_player').attr('loop', 'loop');
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