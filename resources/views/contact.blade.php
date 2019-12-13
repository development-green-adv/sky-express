@extends("layout/master")

@section("title", "Contact | Sky Express")

@section("content")

@section("seo")

<style>
    #contact-srb {
        display: none;
    }

    #pop-up {
        display: none;
    }
</style>

@endsection

@include("inc/header")

<div class="container-fluid top_section" style="background-image: url('{{ asset('images/web/showcase.jpg') }}'); background-repeat: no-repeat;">
    <div class="row">
        <div class="about_headline" data-aos="fade-top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="mb-2">CONTACT US</h1>
                        <h3>LET'S GET IN TOUCH</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container about_desc">
    <div class="row">
        <div class="col-md-5">

            <div class="contact-page-left">
                <form>
                    <input type="text" placeholder="First name" required>
                    <input type="email" placeholder="Email" required>
                    <textarea cols="30" rows="10" placeholder="Type your message here..." required></textarea>
                    <button type="submit">Submit</button>
                </form>
            </div>

        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6">

            <div class="contact-page-right pl-0 pl-md-5">
                <h5 class="mb-4">HOW TO REACH US</h5>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-11">
                        <p class="mb-4 sky-doo">Sky Express d.o.o.</p>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-2 col-md-1 mt-2">
                        <img src="{{ asset('images/web/location.svg') }}" alt="">
                    </div>
                    <div class="col-10 col-md-11 location-contact-page">
                        <p>Bulevar Milutina Milankovića 11A <br>
                            11070, Belgrade, Serbia
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12 mb-4 contact-phone-info">
                                <p>Tehnical Support for Enterprise solutions</p>
                                <a href="mailto:podrska@sky-express.rs">podrska@sky-express.rs</a> <br>
                                <a href="tel:+381646447376">+381 64 644 7376</a>
                            </div>
                            <div class="col-md-12 mb-4 contact-phone-info">
                                <p>Sales for Enterprise solutions</p>
                                <a href="mailto:prodaja@sky-express.rs">prodaja@sky-express.rs</a> <br>
                                <a href="tel:+381646446687">+381 64 6446 687</a>
                            </div>
                            <div class="col-md-12 mb-4 contact-phone-info">
                                <p>General</p>
                                <a href="mailto:administracija@sky-express.rs">administracija@sky-express.rs</a> <br>
                                <a href="tel:+381112421580">011/242 15 80</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12 mb-4 contact-phone-info">
                                <p>Tehnical Support for SMB solutions</p>
                                <a href="mailto:podrska@sky-express.rs">podrska@sky-express.rs</a> <br>
                                <a href="tel:+381646414460">+381 64 641 44 60</a>
                            </div>
                            <div class="col-md-12 mb-4 contact-phone-info">
                                <p>Sales for SMB solutions</p>
                                <a href="mailto:prodaja@sky-express.rs">prodaja@sky-express.rs</a> <br>
                                <a href="tel:+381646414460">+381 64 641 44 60</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="sky-mail" href="/">www.sky-express.rs</a>
            </div>

        </div>

    </div>
</div>

<div class="mapouter">
    <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Bulevar%20Milutina%20Milankovi%C4%87a%2011A&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.divi-discounts.com"></a></div>
    <style>
        .mapouter {
            position: relative;
            height: 500px;
            width: 100%;
        }

        .gmap_canvas {
            overflow: hidden;
            background: none !important;
            height: 500px;
            width: 100%;
        }
    </style>
</div>



@include("inc/footer")


@endsection