@extends("layout/master")

@section("title", "About Us | Sky Express")

@section("content")

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
                            <input type="email" placeholder="email" required>
                            <textarea cols="30" rows="10" placeholder="Type your message here..." required></textarea>
                            <button type="submit">Submit</button>
                        </form>
                    </div>

                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5">

                    <div class="contact-page-right pl-5">
                        <h5 class="mb-4">HOW TO REACH US</h5>
                        <p class="ml-5 mb-4 sky-doo">Sky Express d.o.o</p>
                        <div class="row mb-4">
                            <div class="col-md-1 mt-2">
                                <img src="{{ asset('images/web/location.svg') }}" alt="">
                            </div>
                            <div class="col-md-11">
                                <p>Bulevar Milutina Milankovića 11A <br>
                                1107, Belgrade, Serbia
                                </p>
                            </div>
                        </div>
                        <ul>
                            <li class="mb-3 mb-4"><img class="mr-3"  src="{{ asset('images/web/phone.svg') }}"> <a class="mb-3" href="tel:+381646414461"> +381 64 641 44 61</a></li>
                            <li class="mb-4"> <img class="mr-3" src="{{ asset('images/web/mail.svg') }}"><a href="mailto:prodaja@sky-express.rs">prodaja@sky-express.rs</a></li>
                        </ul>
                        <a class="sky-mail" href="mailto:www.sky-express.rs">www.sky-express.rs</a>
                    </div>

                </div>

            </div>
        </div>



    @include("inc/footer")


@endsection