@extends("layout/master")

@section("title", "Logpoint | Sky Express")

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

<div class="container-fluid top_section" style="background-image: url('{{ asset('images/web/df-labs.png') }}'); background-repeat: no-repeat; background-color: #0b0b0d;">
    <div class="row">
        <div class="about_headline" data-aos="fade-top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-white">PROIZVODI</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container about_desc logpoint-first-part">
    <div class="row">
        <div class="col-12 mb-5">
            <img class="logpoint-page-logo" src="{{ asset('images/web/logpoint-page-logo.png') }}" alt="">
        </div>
        <div class="col-12 mb-4">
            <h4>Platforma za upravljanje događajima i sigurnosnim informacijama sledeće generacije (SIEM)</h4><br>
        </div>
        <div class="col-12 col-md-6 mb-4 mb-md-0">
            <p class="pr-0 mr-md-5 mb-4">
                LogPoint maksimalno koristi naprednu analitiku, ubrzanu mašinskim učenjem, kako bi poboljšao vaše bezbednosno stanje i efikasno automatizovao relevantne odgovore na unutrašnje i spoljne pretnje.
            </p>
            <p class="pr-0 mr-md-5 mb-4">
                SIEM sistem softvera LogPoint osmišljen je od samog početka da bude jednostavan, fleksibilan i skalabilan, da obezbedi efikasnije alate za dizajn, implementaciju i integraciju kako bi se omogućila upotreba mrežnog sigurnosnog alata za sva preduzeća. To znači da se arhitektura može stalno proširivati dodatnom funkcionalnošću, bez potrebe za punim osnovnim izdanjem, kako bi se nastavila podrška za rastuće i promenljive potrebe vašeg poslovanja.
            </p>
        </div>
        <div class="col-12 col-md-6">
            <div class="df-labs-right-first-part">
                <h5 class="pl-0 pl-md-5 mb-4">Sistem LogPoint je izgrađen na osnovu skupa <br class="d-none d-md-block"> određenih principa:</h5>
                <ul class="logpoint-ul-first-part">
                    <li>
                        <div class="row">
                            <div class="col-2 col-md-1"> <img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                            <div class="col-10 col-md-11">
                                <p>Nijedna kompanija ne treba da bude ograničena količinom podataka koju može da unese u sistem SIEM</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-2 col-md-1"> <img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                            <div class="col-10 col-md-11">
                                <p>Pojednostavljeni arhitektonski principi koji omogućavaju brže i efikasnije uvođenje softvera</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-2 col-md-1"> <img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                            <div class="col-10 col-md-11">
                                <p>Na raspolaganju je podrška svetske klase 24 sata dnevno, 7 dana nedeljno kako bi klijenti dobili najveću vrednost od svog sistema SIEM</p>
                            </div>
                        </div>
                    </li>
                </ul>

                <div class="row">
                    {{-- <div class="col-3"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div> --}}
                <div class="col-12">
                    <h5 class="pl-0 pl-md-5 mb-4 orange_text">
                        <div class="row">
                            <div class="col-md-3"><img style="width: 100px;" src="{{ asset('images/web/logpoint-nagrada.png') }}" alt=""></div>
                            <div class="col-md-9 pt-3">LogPoint je rangiran na prvom mestu i imenovan liderom u recenzijama SoftwareReviews SIEM Data Quadrant za 2019. godinu</div>
                        </div>
                    </h5>
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


<div class="container-fluid df-labs-second-part carbon-black-second-part">
    <div class="df-labs-second-part-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="logpoint-page-second-part-left">
                    <h5 class="mb-5">Sa softverom LogPoint možete brzo da rešite potencijalne probleme pomoću sledećeg:</h5>
                    <ul class="logpoint-ul-second-part">
                        <li class="mb-4">
                            <div class="row">
                                <div class="col-2 col-md-1"> <img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                <div class="col-10 col-md-11">
                                    <p class="pr-0 pr-md-5">Brz analitički uvid u incidente u čitavoj infrastrukturi;</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-4">
                            <div class="row">
                                <div class="col-2 col-md-1"> <img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                <div class="col-10  col-md-11">
                                    <p class="pr-0 pr-md-5">Uklonjene zavisnosti određenog osoblja sa ograničenim pristupom sistemu;</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-4">
                            <div class="row">
                                <div class="col-2 col-md-1"> <img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                <div class="col-10  col-md-11">
                                    <p class="pr-0 pr-md-5">Analitika velike količine podataka za tačnu, jednostavnu analizu svih problema i incidenata vezanih za sve aspekte arhitekture informacionog sistema — mrežu, sistem, usluge i aplikacije;</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-4">
                            <div class="row">
                                <div class="col-2 col-md-1"> <img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                <div class="col-10  col-md-11">
                                    <p class="pr-0 pr-md-5">Smanjenje broja lažnih pozitivnih rezultata i izbegavanje komplikacija sa održavanjem i razvijanjem stručnih pravila;</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-5 mb-md-0">
                            <div class="row">
                                <div class="col-2 col-md-1"> <img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                <div class="col-10  col-md-11">
                                    <p class="pr-0 pr-md-5">Forenzička istraga s izvršavanjem namenskih scenarija ukoliko dođe do incidenta.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="logpoint-page-second-part-left">
                    <h5 class="invisible mb-5 d-none d-md-block">With LogPoint, you can quickly troubleshoot potential issues via:</h5>
                    <p class="mb-4 pr-0 pr-md-5"><span class="orange_text">Jednostavnost upotrebe</span> - Neverovatno brza analitika i bogato izveštavanje, bez potrebe za naprednim skupom veština.</p>
                    <p class="mb-4 pr-0 pr-md-5"><span class="orange_text">Upravljanje troškovima </span> - Nema dodatnih troškova koji se odnose na rast obima podataka kompanije ili broj događaja u sekundi koji primate.</p>
                    <p class="pr-0 pr-md-5"><span class="orange_text">Sertifikacija bez konkurencije </span> - Ima sertifikat EAL 3+. Zahteva se u NATO i u organizacijama sa kritičnom infrastrukturom poput vojske, obaveštajnih agencija, komunalnih preduzeća i telekomunikacionih kompanija.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid rose_section">
    <div class="row">

    </div>
</div>

<div class="container-fluid logpoint-page-third-part">
    <div class="row">
        <div class="container text-center">
            <button class="btn btn-default orange_btn">Ključne prednosti softvera LogPoint</button>
        </div>
    </div>
    <div class="container">
        <div class="row logpoint-cards-wrapper">
            <div class="col-md-3">
                <div class="logpoint-third-card">
                    <img src="{{ asset('images/web/logpoint-third-part-1.png') }}" alt="">
                    <p><b>Jedinstvena taksonomija</b></p>
                    <p>LogPoint osigurava jedinstvenu taksonomiju za normalizaciju podataka dnevnika, omogućujući jednostavnu funkciju pretrage za izradu kontrolnih tabli, upozorenja i izveštaja. Prevođenjem svih datoteka dnevnika u pojednostavljenu jedinstvenu taksonomiju, pretraživanje po širokom spektru različitih izvora dnevnika je mnogo lakše i efikasnije.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="logpoint-third-card">
                    <img src="{{ asset('images/web/logpoint-third-part-2.png') }}" alt="">
                    <p><b>Pojednostavljena kontrola pristupa na osnovu uloga</b></p>
                    <p>Pristup administrativnog korisnika organizovan je u AD preko LDAP radi lakše definicije dozvola. Grupne dozvole za sistem su usklađene s pristupom administrativnim pravima koji se zasniva na ulogama, što daje punu kontrolu nad pristupom spremištima dnevnika i upotrebom kontrolne table.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="logpoint-third-card">
                    <img src="{{ asset('images/web/logpoint-third-part-3.png') }}" alt="">
                    <p><b>Puno uvođenje visoke dostupnosti</b></p>
                    <p>Arhitektura za visoku dostupnost (HA) softvera LogPoint omogućava sinhronizaciju podataka o indeksima i o događajima na način koji je otporan na greške, što pruža robustan integritet skladištu podataka. Bilo koji oporavak ide vrlo brzo ka cilju tačke oporavka dok platforma radi u režimu zaobilaženja grešaka.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="logpoint-third-card">
                    <img src="{{ asset('images/web/logpoint-third-part-4.png') }}" alt="">
                    <p><b>Agilan dizajn platforme</b></p>
                    <p>Sistem LogPoint ima agilan dizajn sa intuitivnim interfejsom, izrađenim za administratore koji imaju iskustva s mrežnim sigurnosnim alatom ili za ad hoc korisnike.</p>
                </div>
            </div>
        </div>
        <div class="row logpoint-cards-wrapper">
            <div class="col-md-3">
                <div class="logpoint-third-card">
                    <img src="{{ asset('images/web/logpoint-third-part-5.png') }}" alt="">
                    <p><b>Fleksibilna/skalabilna arhitektura</b></p>
                    <p>Arhitektura LogPointa je u potpunosti fleksibilna i linearno se skalira za velike i složene implementacije. Mrežni sigurnosni alat se može uvesti bilo u fizičkim ili u virtuelnim okruženjima, u prostorijama ili u oblaku.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="logpoint-third-card">
                    <img src="{{ asset('images/web/logpoint-third-part-6.png') }}" alt="">
                    <p><b>Jedinstveni model licence</b></p>
                    <p>Korektan i celovit model licence, bez skrivenih dodataka, zahvaljujući transparentnoj strukturi licence. Usvajanje modela zasnovanog na čvorovima, a ne na EPS/MPS, čega se pridržavaju mnogi drugi prodavci modela SIEM za bezbednost upravljane mreže.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="logpoint-third-card">
                    <img src="{{ asset('images/web/logpoint-third-part-7.png') }}" alt="">
                    <p><b>Režim privatnosti podataka</b></p>
                    <p>Korišćenjem režima privatnosti podataka, moguće je osigurati da kontekst datoteka dnevnika može da se uključi u multinacionalna pretraživanja, a da se pritom ne ugrozi potreba da informacije ostanu bezbedne. Ova funkcionalnost je naročito korisna kada podaci moraju da ostanu u nekoj oblasti.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="logpoint-third-card">
                    <img src="{{ asset('images/web/logpoint-third-part-8.png') }}" alt="">
                    <p><b>Efikasnije organizovana arhitektura normalizacije</b></p>
                    <p>Arhitektura dodataka omogućava dinamičan razvoj i namensko unapređenje. S obzirom na nepristrasnost u pogledu prodavaca, dnevnici se mogu prikupljati korišćenjem različitih metoda i izvora. Ako dodatni modul nije prisutan pre implementacije, LogPoint će ga napraviti. Razvoj se ne naplaćuje za komercijalne proizvode iz postojećih zaliha.</p>
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
                <button class="btn btn-default orange_btn">NAJNOVIJE VESTI</button>

                <div class="row" style="margin-top: 70px;">
                    @if(count($data) > 0)
                    @foreach($data as $new)

                    <div class="col-12 col-md-4 text-left solutions_item">
                        <div style="height: 200px; overflow: hidden;">
                            <img class="img-fluid" src="/public/images_gallery/{{ $new->main_image }}">
                        </div>

                        <h6>{{ mb_strlen($new->title) > 78 ? mb_substr($new->title,0,78)."..." : $new->title  }}</h6>

                        {!! mb_strlen($new->text) > 250 ? mb_substr($new->text,0,250)."..." : $new->text !!}

                        <a style="display: block; margin-top: 20px;" class="link_without" href="/sr/vest/{{ $new->alias }}">SAZNAJ VIŠE</a>
                    </div>

                    @endforeach
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>


@include("inc/footer-sr")


@endsection