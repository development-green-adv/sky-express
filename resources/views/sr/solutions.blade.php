@extends("layout/master")

@section("title", "Resenja | Sky Express")

@section("style")


@endsection

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

@section("content")

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


<div class="container solution_content">
    <div class="row">
        <div class="col-12">
            <h4>PREMA INDUSTRIJI</h4><br>
        </div>
        <div class="col-12 col-md-6">
            <h6>
                Nijedna industrija nije imuna na bezbednosne pretnje
            </h6><br>
            <p class="pr-0 pr-md-5">
                Svet postaje sve više digitalizovan i povezan, od ličnih uređaja do složenih sistema u industriji. Milijarde inteligentnih uređaja i mašina generišu i razmenjuju ogromne količine podataka. Korišćenje ovih ogromnih količina podataka za donošenje inteligentnih odluka i stvaranje vrednosti je presudno. Ali sa povećanom upotrebom podataka, ranjivost kompanija u različitim industrijama se takođe povećava i dolazi do porasta broja hakerskih napada na korporativne mreže, čiji cilj su krađa korporativnih podataka i njihova eksploatacija.
            </p>
        </div>
        <div class="col-12 col-md-6">
            <h5 class="orange_text pl-0 pl-md-5 mt-4 mt-md-0">
                Tražite rešenje za sajber bezbednost specifično za neku industriju
            </h5><br>
            <p class="pl-0 pl-md-5">
                Sky Express pruža napredna rešenja i usluge kako bi se prilagodili zahtevima različitih industrija. Naša misija je da obezbedimo sigurnost i integritet podataka u svim aspektima poslovnih oblasti kao što su obrazovanje, zdravstvo, državna uprava, vojska, policija i mnoge druge.
            </p>
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


<div class="container solution_content">
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="solution_item">
                <img class="img-fluid" src="{{ asset('images/web/gov.png') }}">
                <h4><b>Državna administracija</b></h4><br>
                <p>
                    Vladine agencije, ministarstva i kritična infrastruktura česta su meta današnjih naprednih napada. Bez obzira da li je cilj kompromitovati osetljive vladine podatke, ukrasti lične podatke ili poremetiti uobičajene operacije, sve veća sofisticiranost napada otežava zaštitu sajber kritičnih podataka.
                </p>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="solution_item">
                <img class="img-fluid" src="{{ asset('images/web/finance.png') }}">
                <h4><b>Finansije</b></h4><br>
                <p>
                    Finansijske institucije su unosni ciljevi sajber kriminala, koji pozivaju na regulatorni nadzor, kontrolu klijenta i intenzivan fokus izvršne vlasti. Stručnjaci za IT i bezbednost znaju da se uspešna kršenja dešavaju kroz kompromitovane krajnje tačke korisnika i servere i uređaje sa kojima se suočavaju potrošači, ali se bore da ostanu ispred evoluirajućih napada ransomvarea i non-malvarea.
                </p>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="solution_item">
                <img class="img-fluid" src="{{ asset('images/web/bolnica.png') }}">
                <h4><b>Zdravstvo</b></h4><br>
                <p>
                    Zdravstvena industrija jedna je od najvećih meta sajber kriminalaca, najviše zbog raznolikosti poverljivih podataka koje sadrže, poput brojeva socijalnog osiguranja, informacija vezanih za osiguranje i najvažnijih ličnih zdravstvenih kartona. Iako su zdravstvene institucije posvećene privatnosti pacijenata, ova industrija zaostaje u pogledu napretka i usvajanja tehnologija i rešenja za sajber bezbednost u cilju zaštite kritičnih i poverljivih podataka o pacijentima.
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4 offset-md-2">
            <div class="solution_item">
                <img class="img-fluid" src="{{ asset('images/web/insu.png') }}">
                <h4><b>Osiguranje</b></h4><br>
                <p>
                    Sajber napadi u sektoru osiguranja eksponencijalno rastu dok osiguravajuće kompanije prelaze na digitalne kanale u nastojanju da stvore čvršće odnose sa klijentima, ponude nove proizvode i prošire svoj udeo finansijskog portfelja klijenata
                </p>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="solution_item">
                <img class="img-fluid" src="{{ asset('images/web/energy.png') }}">
                <h4><b>Energetika</b></h4><br>
                <p>
                    Energetski sektor postao je glavna meta sajber napada. Infrastruktura za proizvodnju, transport, skladištenje i distribuciju energije nesumnjivo je jedno od najvažnijih sredstava modernog društva i okosnica je za njegove ekonomske aktivnosti, blagostanje i stabilnost. Digitalizacija donosi urođenu pretnju - što više uređaja postaju digitalni, pametni i povezani sa sistemom energije i napajanja, to više nude potencijalne pristupne tačke za sjaber napade do kritične infrastrukture.
                </p>
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
                    <a href="/sr/blogovi">Blog</a><br>
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
                        <a href="https://www.linkedin.com/company/sky-express-it-security-company/" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.facebook.com/skyexpressrs/" target="_blank"><i class="fab fa-facebook"></i></a>
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