@extends("layout/master")

@section("title", "Kerio | Sky Express")

@section("content")

@section("seo")

    <style>

        #contact-eng{
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


        <div class="container about_desc kerio-first-part">
            <div class="row">
                <div class="col-12 mb-5">
                    <img class="kerio-page-logo" src="{{ asset('images/web/kerio-page-logo.png') }}" alt="">
                </div>
                <div class="col-12 mb-4">
                    <h4>Brzo uvođenje. Velika upotrebljivost.</h4><br>
                </div>
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <p class="pr-0 pr-md-5 mb-4">
                        Povežite se, komunicirajte i sarađujte bez kompromisa — nagrađivani proizvodi kompanije Kerio prilagođeni su potrebama malih i srednjih preduzeća. Svi proizvodi kombinuju moćne funkcije sa lakoćom korišćenja za poslovne korisnike i IT profesionalce. Naši atraktivni licencni paketi i fleksibilnost rada na mnogim hardverskim i softverskim konfiguracijama pružaju funkcionalnost poslovne klase uz niske ukupne troškove vlasništva.
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <div class="df-labs-right-first-part">
                        <p class="mb-5 pl-0 pl-md-5">
                                All products combine powerful features with ease of use for business users and IT professionals. 
                                Our attractive licensing packages and flexibility to run on many hardware and software configurations 
                                deliver enterprise-class functionality for a low total cost of ownership.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>


        <div class="df-labs-second-part carbon-black-second-part">
            <div class="df-labs-second-part-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4 class="orange_text mb-5">Proizvodi kompanije Kerio imaju tri važna principa:</h4>
                    </div>
                    <div class="col-12">
                        <div class="kerio-second-part">
                            <p class="mb-3">1. JEDNOSTAVNOST  - Robustna rešenja koja se fokusiraju na fleksibilnost, pristupačnost i funkcionalnost, bez nepotrebne IT složenosti. </p>
                            <p class="mb-3">2. STABILNOST - Pouzdana komunikacija i saradnja bez ometanja i skupih neplaniranih zastoja.</p>
                            <p>3. SIGURNOST  - Zaštita koja se širi sa mreže na preduzeće — politike zasnovane na ulogama, „kancelarijski” telefonski pozivi preusmereni na mobilne uređaje, šifrovana e-pošta — i omogućavaju korisnicima da rade bilo kada i bilo gde.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>

        <div class="avast-third-part eperi-third-part">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="kerio-third-part-left">
                            <h5 class="orange_text mb-2">Kerio Connect</h5>
                            <p class="pr-5 mb-5"> Sigurna e-pošta, kalendar i saradnja u poslovnom stilu bez visokih troškova 
                                </p>
                            <p class="mb-4">E-mail, kalendar, IM i još mnogo toga</p>
                            <ul class="eperi-first-part-ul kerio-third-part-left-ul">
                                <li class="mb-3">
                                    <div class="row">
                                        <div class="col-2 col-md-1">
                                            <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11">
                                            <p>Kerio Connect nudi sve funkcije i funkcionalnosti za rešenje za saradnju i razmenu poruka bez kompleksnosti i visokih cena drugih sistema,</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-3">
                                    <div class="row">
                                        <div class="col-2 col-md-1">
                                            <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11">
                                            <p>E-mailovi su integrisani sa zajedničkim kalendarima i zakazivanjem, upravljanjem kontaktima, zadacima, beleškama, deljenim i javnih mapa i instant porukama,
                                                    </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-3">
                                    <div class="row">
                                        <div class="col-2 col-md-1">
                                            <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11">
                                            <p>Sinhronizujte poruke direktnim transferom na vaš mobilni uređaj putem Microsoft ActiveSinc(R)</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-3">
                                    <div class="row">
                                        <div class="col-2 col-md-1">
                                            <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11">
                                            <p>Instant Messaging je kompatibilan sa XMPP i može se koristiti sa brojnim drugim aplikacijama za chat/IM aplikacije na desktop računarima ili mobilnim telefonima </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div class="kerio-third-part-left">
                            <h5 class="orange_text mb-2">Kerio Control</h5>
                            <p class="pr-0 pr-md-5 mb-5"> Otkrijte pretnje, blokirajte viruse i filtrirajte saobraćaj zaštitnim firewall-om izgrađenim za SMB 
                                </p>
                            <p class="mb-4">Next-generation firewall</p>
                            <p  class="mb-4">Sačuvajte integritet vaših servera dubinskom inspekcijom paketa i naprednim mrežnim mogućnostima usmeravanja - uključujući istovremeno IPv4 i IPv6 podršku. Napravite ulazne i odlazne politike saobraćaja, ograničavajući komunikaciju prema određenom URL-u, aplikaciji, vrsti saobraćaja, kategoriji sadržaja i vremenu. </p>
                            <p>IPS kompanije Kerio Control dodaje transparentan sloj mrežne zaštite, zasnovan na Snort-ovoj analizi ponašanja i redovno ažuriranoj bazi podataka s pravilima i sprečavaje saobraćaja od izvora pretnji.</p>
                        </div>
                    </div>
                </div>
                <div class="row row-kerio-third">
                    <div class="col-md-6">
                        <div class="kerio-card">
                            <div class="kerio-card-content text-center pt-4">
                                <h6 class="orange_text">Kerio<strong>Connect</strong></h6>
                                <p class="my-2">MAIL SERVER + MORE</p>
                                <p class="px-5">Enterprise-class email, 
                                        calendars, contacts, tasks, 
                                        & instant <br class="d-none d-md-block"> messaging 
                                        - wherever you are</p>
                            </div>
                            <img class="pt-2" src="{{ asset('images/web/kario-card-icon.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="kerio-card">
                            <div class="kerio-card-content text-center">
                                <h6 class="orange_text">Kerio<strong>Control</strong></h6>
                                <p class="my-2">FIREWALL + MORE</p>
                                <p class="px-5">Unified Threat Management and Network Intelligence for the higest level of protection </p>
                            </div>
                            <img src="{{ asset('images/web/kario-card-icon-right.png') }}" alt="">
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
                        <button class="btn btn-default orange_btn">LATEST NEWS</button>

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