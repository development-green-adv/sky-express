@extends("layout/master")

@section("title", "ISO 27001 | Sky Express")

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


<div class="container about_desc pen_services sap-first-part">
    <div class="row">
        <div class="col-12 col-md-6 mb-4 mb-md-0">
            <h4>ISO 27001</h4><br>
            <p class="pr-0 pr-md-5 mb-4">
                ISO/IEC 27001 je međunarodni standard koji se odnosi na zaštitu i bezbednost informacija. Standard podleže različitim područjima primene kao i za razlikovanje mogućih procesa u organizaciji koji su povezani sa upravljanjem kontrole bezbednosti, kao što su finansijske informacije, intelektualna svojina, detalji o zaposlenima ili informacije koje su vam poverene od trećih lica.
            </p>
            <p class="pr-0 pr-md-5 mb-4">
                ISO 27001 ide znatno dalje od sajber osnova, i pruža 114 bezbednosnih kontrola koje obuhvataju ljude, procese i tehnologiju. Standard definiše kako održavati sistem upravljanja bezbednosti informacija kako bi se osigurala poverljivost, integritet i dostupnost informacija.
            </p>
            {{-- <h5 class="mb-4 pr-5">ISO 27001 will help reduce information security and data protection risks to your organization</h5> --}}
            <h5 class="mb-4">Da li ste usaglašeni sa ISO 27001?</h5>
            <p class="mb-4">Mi u Sky Express-u nudimo analizu usaglašenosti sa propisima poput ISO 2700, GDPR, PCI DSS itd. kako bismo osigurali da vaša kompanija posluje u skladu sa odgovarajućim zakonima i propisima.</p>
            <div class="text-center mt-5">
                <div class="get-btn">
                    <a href="/sr/kontakt">Kontaktirajte naš tim</span></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <h4 class="invisible">Pen Testing & Ethical Hacking</h4><br>
            <p class="pl-0 pl-md-5 mb-4">ISO 27001 standard pruža okvir za najbolju praksu upravljanja menadžmentom informacione bezbednosti koji pomaže organizacijama u: </p>
            <ul class="iso-2700-list">
                <li class="mb-4 pl-0 pl-md-5">
                    <img class="pr-2" src="{{ asset('images/web/correct.svg') }}" alt=""> Zaštiti informacije svojih klijenata i zaposlenih
                </li>
                <li class="mb-4 pl-0 pl-md-5">
                    <img class="pr-2" src="{{ asset('images/web/correct.svg') }}" alt=""> Efikasnom upravljanju rizicima za informacionu bezbednost
                </li>
                <li class="mb-4 pl-0 pl-md-5">
                    <img class="pr-2" src="{{ asset('images/web/correct.svg') }}" alt=""> Postizanju usklađenosti sa propisima kao što je Opšta uredba o zaštiti podataka Evropske unije (EU GDPR)
                </li>
                <li class="mb-4 pl-0 pl-md-5">
                    <img class="pr-2" src="{{ asset('images/web/correct.svg') }}" alt=""> Zaštitite imidža kompanije.
                </li>
            </ul>
            <p class="pl-0 pl-md-5 mb-4">Standard je posebno pogodan tamo gde je zaštita informacija kritična, na primer u bankarskom, finansijskom, zdravstvenom, javnom i IT sektoru. Standard se takođe primenjuje na organizacije koje upravljaju velikim količinama podataka ili informacija u ime drugih organizacija, kao što su data centri i kompanije za IT outsourcing i sl. </p>
            <h5 class="mb-4 pr-5 pl-0 pl-md-5">ISO 27001 vam pomaže u smanjenju rizika bezbednosti i zaštite podataka za vašu organizaciju </h5>
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