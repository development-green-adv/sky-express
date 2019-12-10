@extends("layout/master")

@section("title", "Kontakt | Sky Express")

@section("content")

@section("seo")

<style>
    #contact-eng {
        display: none;
    }

    #pop-up-eng {
        display: none;
    }
</style>

@endsection

@include("inc/header-sr")

<div class="container-fluid top_section" style="background-image: url('{{ asset('images/web/showcase.jpg') }}'); background-repeat: no-repeat;">
    <div class="row">
        <div class="about_headline" data-aos="fade-top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="mb-2">KONTAKTIRAJTE NAS</h1>
                        {{-- <h3>LET'S GET IN TOUCH</h3> --}}
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
                    <input type="text" placeholder="Ime" required>
                    <input type="email" placeholder="Email" required>
                    <textarea cols="30" rows="10" placeholder="Vaša poruka..." required></textarea>
                    <button type="submit">Pošalji</button>
                </form>
            </div>

        </div>
        <div class="col-md-2"></div>
        <div class="col-md-5">

            <div class="contact-page-right pl-0 pl-md-5">
                <h5 class="mb-4">KAKO DA DODJETE DO NAS</h5>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-11">
                        <p class="mb-4 sky-doo">Sky Express d.o.o</p>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-2 col-md-1 mt-2">
                        <img src="{{ asset('images/web/location.svg') }}" alt="">
                    </div>
                    <div class="col-10 col-md-11 location-contact-page">
                        <p>Bulevar Milutina Milankovića 11A <br>
                            11070, Beograd, Srbija
                        </p>
                    </div>
                </div>
                <!-- <ul class="phone-email-contact-page">
                    <li class="mb-3 mb-4"><img class="mr-3" src="{{ asset('images/web/phone.svg') }}"> <a class="mb-3" href="tel:+381646414461"> +381 64 641 44 61</a></li>
                    <li class="mb-4"> <img class="mr-3" src="{{ asset('images/web/mail.svg') }}"><a href="mailto:prodaja@sky-express.rs">sales@sky-express.rs</a></li>
                </ul> -->
                <a class="sky-mail" href="/">www.sky-express.rs</a>
            </div>

        </div>

    </div>
</div>



@include("inc/footer-sr")


@endsection