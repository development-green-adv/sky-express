@extends("layout/master")

@section("title", "SAP bezbednosne smernice | Sky Express")

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
            <h4>SAP BEZBEDNOSNE SMERNICE</h4><br>
            <p class="pr-0 pr-md-5 mb-4">
                Sajber kriminal neprestano raste i napada vitalne delove svake kompanije – kao što je SAP. Često zaštita SAP sistema nije na zadovoljavajućem nivou.
            </p>
            <h6 style="font-size: 18px;" class="mb-5">Postoji nekoliko razloga, koji uzrokuju ranjivost SAP klijenata na sajber napade:</h6>
            <ul>
                <li class="mb-3">
                    <div class="row">
                        <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                        <div class="col-10 col-md-11">
                            <p><b>Velika napadna površina</b>. Kada se u SAP sistemima povežu brojne IoT, mreže i alati za skladištenje, to može postati privlačan cilj hakerima, a osiguranje svih sistema može biti izazovno;</p>
                        </div>
                    </div>
                </li>
                <li class="mb-3">
                    <div class="row">
                        <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                        <div class="col-10 col-md-11">
                            <p><b>Primamljive mete</b>. Hakeri znaju da je implementacija SAP rešenja od strane klijenata prouzrokovana potrebom za upravljanjem tokovima podataka od velike vrednosti, stoga su njihovi napori da dobiju pristup tim podacima razumljivi</p>
                        </div>
                    </div>
                </li>
                <li class="mb-3">
                    <div class="row">
                        <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                        <div class="col-10 col-md-11">
                            <p><b>Loše procedure ažuriranja</b>. SAP rešenja moraju se zakrpiti i ažurirati redovno, kao i bilo koja druga rešenja. Ove zakrpe se ne primenjuju uvek, je povećavaju rizike povezane sa sajber napadima. Kompanije se često opiru potrebi da im je potrebna zakrpa i radije izbegavaju gnjavažu poremećaja CRM-a ili platnih sistema, na žalost ponekad s pogubnim rezultatima.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="mb-3">
                    <div class="row">
                        <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                        <div class="col-10 col-md-11">
                            <p><b>Loša sajber bezbednosna strategija</b>.U nekim slučajevima kompanije se odlučuju za implementaciju skupih SAP rešenja, ali ne uspevaju to da povežu sa ulaganjem u sajber bezbednost. Nekoliko tehničkih lica je možda upoznato sa rizicima, ali širokoj korporativnoj strukturi verovatno nedostaje bezbednosno znanje.</p>
                        </div>
                    </div>
                </li>
                <li class="mb-3">
                    <div class="row">
                        <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                        <div class="col-10 col-md-11">
                            <p><b>Neodgovorno ponašanje zaposlenih</b>. Ovo značajno povećava rizik. Mnoge firme se oslanjaju na rad SAP softvera, ali imaju zastarelu bezbednosnu politiku zaposlenih, što utiče na upotrebu lozinki i opštu mrežnu sigurnost.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-12 col-md-6">
            <h4 class="invisible">Pen Testing & Ethical Hacking</h4><br>
            <p class="pl-0 pl-md-5 mb-4">Ovo značajno povećava rizik. Mnoge firme se oslanjaju na rad SAP softvera, ali imaju zastarelu bezbednosnu politiku zaposlenih, što utiče na upotrebu lozinki i opštu mrežnu sigurnost.</p>
            <p class="pl-0 pl-md-5 mb-4">Sky Express nudi sveobuhvatno rešenje kao što je Onapsis, koji pruža operativnu inteligenciju, kontinuirano nadgledanje i automatizovano upravljanje i na taj način omogućava bezbedno funkcionisanje SAP Sistema. Osim toga, Onapsis eleminiše operativne rizike vezane za održavanje i modernizaciju ERP sistema, intergrisanim rešenjem za SAP bazirane (orijentisane) timove za osiguravanje procesa prenosa, pristup prilagođenom kodu i proaktivno identifikovanje nepravilne konfiguracije i ranjivosti sistema.</p>
            <p class="pl-0 pl-md-5 mb-4 orange-text">Osigurajte vaše SAP i Oracle EBS aplikacije od internih i eksternih sajber pretnji i uverite se da vaše aplikacije postižu najbolje performanse.</p>
            <div class="text-center mt-5">
                <div class="get-btn">
                    <a href="/sr/kontakt">KONTAKTIRAJTE NAS</span></a>
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