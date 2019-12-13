@extends("layout/master")

@section("title", "Po uskladjenosti | Sky Express")

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
                        <h1>REŠENJA</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container about_desc pen_services by-compliance-first-part">
    <div class="row">
        <div class="col-12 col-md-6 mb-4 mb-md-0">
            <h4>Po usklađenosti</h4><br>
            <p class="pr-0 pr-md-5 mb-4">
                Novi propisi primoravaju organizacije širom sveta da preispitaju privatnost i zaštitu podataka.
            </p>
            <p class="pr-0 pr-md-5">
                Uspostavljanje efikasnog programa za sajber bezbednost predstavlja glavni je izazov za svaku
                kompaniju bez obzira kojoj industriju pripada i gde se nalazi. Međutim, izazov je mnogo veći za
                kompanije koje posluju međunarodno jer one moraju da se pridržavaju propisa iz više jurisdikcija i
                više regulatora.
            </p>
        </div>
        <div class="col-12 col-md-6 by-com-first-right">
            <h4 class="invisible d-none d-md-block">Pen Testing & Ethical Hacking</h4><br class=" d-none d-md-block">
            <p class="pl-0 pl-md-5">
                Da bi se zadovoljili novi standardi, vidljivost svih krajnjih tačaka, aktivnosti mreže i
                aplikacija, od presudnog je značaja dobijanje kritičnih informacija koje će umanjiti rizik, smanjiti
                odgovornost i dokazati sigurnost kontrole kroz „kill chain” proces.
            </p>
        </div>
    </div>
</div>



<div class="container-fluid rose_section">
    <div class="row">

    </div>
</div>

<div class="container-fluid by-compliance-second-part">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-5">
                <div class="by-compliance-second-part-left">
                    <h1 class="text-white">Unapredite svoju usklađenost</h1>
                    <h2 class="mb-5 orange-text">Razmotrite naša rešenja za poštovanje sajber <br class="d-none d-md-block"> bezbednosti</h2>
                    <p class="mb-3 text-white pr-0 pr-md-5"><b>Usklađenost sa bezbednošću</b> prvenstveno se zasniva na spoljnim zahtevima, a ne na sopstvenim
                        poslovnim ciljevima ili ciljevima upravljanja rizikom. Sve obaveze koje imate treba da budu uključene
                        u plan upravljanja rizikom vaše organizacije.</p>
                    <p class="text-white pr-0 pr-md-5">Standardi usklađenosti sa sigurnošću, poput GDPR-a, često definišu minimalne standarde upravljanja
                        IT-om. Ne garantuju sajber otpornost niti određuju najbolju praksu - samo označavaju usaglašenost.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="by-compliance-second-part-right">
                    <h1 class="text-white pl-0 pl-md-5 mb-4 mb-md-0">Izaberite rešenje za usklađivanje koje je potrebno <br class=" d-none d-md-block"> vašem preduzeću</h1>
                    <h2 class="orange-text pl-5 invisible d-none d-md-block">Explore our cyber security compliance <br class=" d-none d-md-block"> solutions</h2>
                    <p class="text-white pl-0 pr-0 pl-md-5 pr-md-5 mb-4">Sky Express pruža bezbednosna rešenja koja pružaju stvarnu poslovnu vrednost u smislu poboljšane
                        efikasnosti procesa, veće transparentnosti i povećanog poverenja vama, vašim revizorima i vašim
                        regulatorima. </p>
                    <p style="font-size: 22px;" class="orange-text mb-5 pl-md-5 pl-0">Saznajte više o našim naprednim sajber bezbednosnim rešenjima i uslugama, zatražite više informacija</p>
                    <div class="text-center mt-5">
                        <div class="get-btn">
                            <a href="/sr/kontakt">KONTAKTIRAJTE NAS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid rose_section">
    <div class="row">

    </div>
</div>


<div class="container-fluid by-compliance-third-part">
    <div class="container">
        <div class="row by-compliance-third-part-images">
            <div class="col-md-4">
                <div class="by-compliance-third-part-card align-items-center  align-items-md-start">
                    <img src="{{ asset('images/web/gdpr.png') }}" alt="">
                    <a style="width: inherit;" href="/sr/meeting-gdpr">Saznajte više</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="by-compliance-third-part-card align-items-center align-items-md-center">
                    <img style="margin-top: -50px;" src="{{ asset('images/web/iso-27001.png') }}" alt="">
                    <a style="width: inherit;" href="/sr/iso-27001">Saznajte više</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="by-compliance-third-part-card align-items-center align-items-md-end">
                    <img src="{{ asset('images/web/sap.jpg') }}" alt="">
                    <a style="width: inherit;" href="/sr/sap-bezbednosne-smernice">Saznajte više</a>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid rose_section">
    <div class="row">

    </div>
</div>


<div class="container-fluid about_partner_section" style="background-image: url('{{ asset('images/web/aboute-1.jpg') }}'); border-bottom:0px solid #f1592a;">
    <div class="container">
        <div class="slider-for slider-about">
            <div>
                <a href="/sr/carbon-black"><img class="img-fluid" src="{{ asset('images/web/carbon.png') }}"></a>
            </div>
            <div>
                <a href="/sr/df-labs"><img class="img-fluid" src="{{ asset('images/web/df.png') }}"></a>
            </div>
            <div>
                <a href="/sr/open-systems"><img class="img-fluid" src="{{ asset('images/web/open.png') }}"></a>
            </div>
            <div>
                <a href="/sr/onapsis"><img class="img-fluid" src="{{ asset('images/web/onapsis.png') }}"></a>
            </div>
            <div>
                <a href="/sr/avast"><img class="img-fluid" src="{{ asset('images/web/avast-logo.png') }}"></a>
            </div>
            <div>
                <a href="/sr/eperi"><img class="img-fluid" src="{{ asset('images/web/eperi.png') }}"></a>
            </div>
            <div>
                <a href="/sr/kerio"><img class="img-fluid" src="{{ asset('images/web/kerio.png') }}"></a>
            </div>
            <div>
                <a href="/sr/security-scorecard"><img class="img-fluid" src="{{ asset('images/web/security.png') }}"></a>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid footer">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 mb-4 mb-md-0">
                    <a class="navbar-brand logo-footer" href="/sr"><img src="{{ asset('images/web/logo-sky-express.png') }}" alt=""></a>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h5>BRZI LINKOVI</h5>
                    <a href="/sr/o-nama">O nama</a><br>
                    <a href="/sr/zasto-sky-express">Zašto mi?</a><br>
                    <!-- <a href="/sr/kontakt">Tehnička podrška</a><br> -->
                    <a href="/sr/vesti">Novosti</a><br>
                    <a href="#">Blog</a><br>
                    <a href="/sr/karijera">Karijera</a><br>
                    <a href="/sr/kontakt">Lokacija kancelarije</a>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h5>PROIZVODI</h5>
                    <a href="/sr/carbon-black">Carbon Black</a><br>
                    <a href="/sr/df-labs">DF Labs</a><br>
                    <a href="/sr/eperi">Eperi</a><br>
                    <a href="/sr/onapsis">Onapsys</a><br>
                    <a href="/sr/open-systems">Open Systems</a><br>
                    <a href="/sr/logpoint">Logpoint</a><br>
                    <a href="/sr/avast">Avast</a><br>
                    <a href="/sr/kerio">Kerio</a><br>
                    <a href="/sr/security-scorecard">Security Scorecard</a>
                </div>
                <div class="col-12 text-center text-md-left col-md-3 mb-4 mb-md-0 mt-4 mt-md-0">
                    <h5>Sky Express d.o.o.</h5>
                    <p>Radno vreme:</p>
                    <p>Ponedeljak - Petak</p>
                    <p>09:00 - 17:00</p>
                    <br>
                    <div class="social-icons">
                        <h5>PRATITE NAS</h5>
                        <a href="https://www.linkedin.com/company/sky-express-it-security-company/?viewAsMember=true" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.facebook.com/skyexpressrs/?ref=bookmarks" target="_blank"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid footer_line">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-4 mb-3 mb-md-0">
                            <a class="ml-auto" href="/sr/odredbe-i-uslovi">Odredbe i uslovi</a>
                            <a class="ml-auto" href="/sr/politika-privatnosti">Politika privatnosti</a>
                            <a href="/sr/politika-kolacica">Politika kolačića</a>
                        </div>
                        <div class="col-12 col-md-4 mb-3 mb-md-0">
                            <a href="#">Copyright {{ date("Y") }} www.sky-express.rs</a>
                            <a href="#">All right reserved</a>
                        </div>
                        <div class="col-12 text-center text-md-left col-md-4">
                            <a target="_blank" href="https://www.green-adv.rs">websajt development</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





{{-- @include("inc/footer") --}}


@endsection