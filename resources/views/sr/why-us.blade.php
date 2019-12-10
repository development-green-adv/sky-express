@extends("layout/master")

@section("title", "Zasto Sky Express | Sky Express")

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
                        <h1>ZAŠTO SKY EXPRESS</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container about_desc pen_services">
    <div class="row">
        <div class="col-12 col-md-6 mb-4 mb-md-0">
            <h4>Ekspertiza i profesionalizam</h4><br>
            <p class="pr-0 pr-md-5 mb-4">
                Visoko kvalifikovan i iskusan, naš tim inženjera i eksperata odlikuje posvećenost, efikasnost i izuzetno poznavanje svih oblasti informacione tehnologije i informacione bezbednosti.
            </p>
        </div>
        <div class="col-12 col-md-6">
            <h4 class="invisible">Pen Testing & Ethical Hacking</h4><br class="d-none d-md-block">
            <p class="pl-0 pl-md-5 mb-4">Sa sobom nose i decenije iskustva i značajno iskustvo iz vodećih kompanija sa različitih globalnih tržišta i iz različitih oblasti, kao što su finansije, vojska, zdravstvo, osiguranje i vladine agencije.</p>
            <p class="pl-0 pl-md-5 mb-4">Naši profesionalci proveli su veliki deo svojih karijera obezbeđujući neke od najosetljivijih poslovnih Sistema u različitim kompanijama, i spremni su da primene stečeno znanje i iskustvo u cilju potpune zaštite vašeg poslovanja i podataka.</p>
        </div>
    </div>
</div>



<div class="container-fluid rose_section">
    <div class="row">

    </div>
</div>

<div class="container-fluid why-us-second-part">
    <!-- <div class="benefites_pen-testing-overlay"></div> -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="why-us-second-part-left">
                    <p class="pr-0 pr-md-5">
                        Članovi našeg tima su pouzdani savetnici i izvršioci, koji pružaju klijentima stručnu podršku u oblasti zaštite mreža, računara, aplikacija i podataka od svih vrsta sajber pretnji. Mi smo specijalisti u implementaciji naprednih, ali istovremeno jednostavnih i efikasnih rešenja namenjenih očuvanju poverljivosti, integriteta i dostupnosti podataka u okviru poslovnih informacionih sistema.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="why-us-second-part-right">
                    <p class="pr-0 pr-md-5">Naši zaposleni su sertifikovani profesionalci koji poseduju OEBS, OSCP, CISSP, MBCI, CTSPA, CISA i druge priznate sertifikate koji pokrivaju sve aspekte informacione bezbednosti.</p>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid rose_section">
    <div class="row">

    </div>
</div>


<div class="container-fluid security_solutions">
    <div class="row">
        <div class="container">
            <div class="col-12 text-center">
                <button class="btn btn-default orange_btn">SERTIFIKATI</button>
            </div>
            <div class="col-12">
                <div class="why-us-page-cert">
                    <div class="why-us-page-cert-card">
                        <img class="img-fluid" src="{{ asset('images/web/cert-1.png') }}" alt="">
                    </div>
                    <div class="why-us-page-cert-card">
                        <img class="img-fluid" class="mb-auto" src="{{ asset('images/web/cert-2.png') }}" alt="">
                    </div>
                    {{-- <div class="why-us-page-cert-card">
                                <img class="img-fluid" class="mb-auto" src="{{ asset('images/web/cert-3.jpg') }}" alt="">
                </div> --}}
                <div class="why-us-page-cert-card">
                    <img class="img-fluid" class="mb-auto" src="{{ asset('images/web/cert-4.png') }}" alt="">
                </div>
                <div class="why-us-page-cert-card">
                    <img class="img-fluid" class="mb-auto" src="{{ asset('images/web/cert5.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="col-12 text-center">
            <h3 class="why-us-cet-text">Zaštitite svoje podatke uspostavljanjem partnerstva sa proverenim i pouzdanim distributerom rešenja za informacionu bezbednost, koji zna kako da da obezbedi i sačuva vaše poslovanje i vaše podatke.</h3>
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
                    <!-- <h5>SKY EXPRESS LOGO</h5> -->
                    <a class="navbar-brand logo-footer" href="/"><img src="{{ asset('images/web/logo-sky-express.png') }}" alt=""></a>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h5>BRZI LINKOVI</h5>
                    <a href="/sr/zasto-sky-express">Zašto mi?</a><br>
                    <a href="/sr/kontakt">Tehnička podrška</a><br>
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