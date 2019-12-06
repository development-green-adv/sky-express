@extends("layout/master")

@section("title", "Onapsis | Sky Express")

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


        <div class="container about_desc onapsis-first-page">
            <div class="row">
                <div class="col-12 mb-5">
                    <img class="onapsis-page-logo" src="{{ asset('images/web/onapsis-page-logo.png') }}" alt="">
                </div>
                <div class="col-12 mb-4">
                    <h4>Rešenja za informatičku bezbednost i regulatornu usaglašenost za cloud i lokalne (on-premise)<br class="d-none d-md-block"> 
                        ERP platforme i kritične poslovne aplikacije</h4><br>
                </div>
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <p class="pr-0 pr-md-5 mb-4">
                        Kritične poslovne informacije kao što su SAP®, SAP S/4HANA® i Oracle® EBS su motori koji pokreću svetsku ekonomiji. Od izuzetne je važnosti da su ove aplikacije stabilne, bezbedne od internih i eksternih informatičkih pretnji i usaglašene sa regulativom.  
                    </p>
                    <p class="pr-0 pr-md-5 mb-4">
                        Iz tog razloga, više od 300 vodećih svetskih organizacija u tranziciji ka sveprisutnim cloud rešenjima štite svoje najkritičnije sisteme uz pomoć Onapsis rešenja.
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <div class="df-labs-right-first-part">
                        <h5 class="pl-0 pl-md-5 mb-4">ONAPSIS ŠTITI</h5>

                        <h5 class="pl-0 pl-md-5 mb-2 orange_text">SAP</h5>
                        <p class="pl-0 pl-md-5 mb-4">
                            Inspekcija, kontrola i obezbeđenje SAP NetWeaver®, ABAP®, J2EE, SAP HANA® i S/4HANA® platformi osigurava njihovu stabilnost i visoke performanse. Pratite vašu SAP infrastrukturu kontinuirano, bilo da je ona u okviru vaše organizacije ili u privatnom ili u hibridnom cloudu.
                        </p>

                        <h5 class="pl-0 pl-md-5 mb-2 orange_text">ORACLE E-BUSINESS SUITE</h5>
                        <p class="pl-0 pl-md-5">
                            Automatizujete praćenje i zaštitu u cilju dobijanja punog uvida u potencijalne ranjivosti sistema. Omogućite kontinuiranu regulativnu usaglašenost sistema i obezbeđenje od informatičkih pretnji. Podržane su lokalne (on-prem) i cloud implementacije.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        

        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>


        <div class="df-labs-second-part onapsis-second-part">
            <div class="df-labs-second-part-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3>ONAPSIS SIGURNOSNA PLATFORMA</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <ul class="onapsis-second-part-ul">
                            <li class="mb-3">
                                <div class="row">
                                    <div class="col-2 col-md-1">
                                        <img class="invisible" src="{{ asset('images/web/correct.svg') }}" alt="">
                                    </div>
                                    <div class="col-10 col-md-11">
                                        <p class="orange_text">AUTOMATIZACIJA</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="row">
                                    <div class="col-2 col-md-1">
                                        <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                    </div>
                                    <div class="col-10 col-md-11">
                                        <p>Kontinuirano skeniranje ranjivosti i proaktivno izveštavanje u cilju identifikacije i ukazivanja na pogrešne konfiguracije sistema i spoljne pretnje</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="row">
                                    <div class="col-2 col-md-1">
                                        <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                    </div>
                                        <div class="col-10 col-md-11">
                                            <p>Poboljšanje standardnih procesa i tokova aktivnosti u cilju smanjenja ljudskih resursa koji rade sa revizorima i na zadacima dokazivanja usaglašenosti sa regulativom</p>
                                        </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="row">
                                    <div class="col-2 col-md-1">
                                         <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                    </div>
                                    <div class="col-10 col-md-11">
                                        <p>Implementacija kompenzujućih kontrola pomaže u ispunjenju regulativnih zahteva i održava usaglašenost između dve revizije.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="onapsis-second-part-ul">
                            <li class="mb-3">
                                <div class="row">
                                    <div class="col-2 col-md-1">
                                        <img class="invisible" src="{{ asset('images/web/correct.svg') }}" alt="">
                                    </div>
                                    <div class="col-10 col-md-11">
                                        <p class="orange_text">INTEGRACIJA</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="row">
                                    <div class="col-2 col-md-1">
                                        <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                    </div>
                                    <div class="col-10 col-md-11">
                                        <p>Besprekorna implementacija i najviši nivo zadovoljstva naših korisnika ubrzava sazrevanje korporativne informatičke bezbednosti,</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="row">
                                    <div class="col-2 col-md-1">
                                        <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                    </div>
                                    <div class="col-10 col-md-11">
                                        <p>Namenski izvori informacija o pretnjama se integrišu u vaša SIEM rešenja, uključujući Splunk i QRadar, u cilju unificiranog prikaza potencijalnih rizika,</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="row">
                                    <div class="col-2 col-md-1">
                                        <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                    </div>
                                    <div class="col-10 col-md-11">
                                        <p>SAP sertifikovani dodaci garantuju sistemsku kompatibilnost BASIS timovima.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <ul class="onapsis-second-part-ul">
                            <li class="mb-3">
                                <div class="row">
                                    <div class="col-2 col-md-1">
                                        <img class="invisible" src="{{ asset('images/web/correct.svg') }}" alt="">
                                    </div>
                                    <div class="col-10 col-md-11">
                                        <p class="orange_text">PRIPREMLJENOST</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="row">
                                    <div class="col-2 col-md-1">
                                        <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                    </div>
                                    <div class="col-10 col-md-11">
                                         <p>Kontinuirano proučavanje novih pretnji koje vrši Onapsis Research Labs sektor daje korisnicima robusne informacije koje omogućavaju organizacijama da budu spremne za nove vrste pretnji</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="row">
                                    <div class="col-2 col-md-1">
                                        <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                    </div>
                                    <div class="col-10 col-md-11">
                                        <p>Onapsis Research Labs rade sa našim razvojnim timovima u cilju poboljšanja proizvoda</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="row">
                                    <div class="col-2 col-md-1">
                                        <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                    </div>
                                    <div class="col-10 col-md-11">
                                        <p>Više od 300 otkrivenih i prijavljenih SAP i Oracle ranjivosti</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
    


                <div class="row onapsis-second-part-card-wrapper">
                    <div class="col-md-4">
                        <div class="onapsis-second-part-card text-center">
                            <img src="{{ asset('images/web/onapsis-second-logo-1.png') }}" alt="">
                            <h5>PRIPREMLJENOST</h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="onapsis-second-part-card text-center">
                            <img src="{{ asset('images/web/onapsis-second-logo-2.png') }}" alt="">
                            <h5>INTEGRACIJA</h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="onapsis-second-part-card text-center">
                            <img src="{{ asset('images/web/onapsis-second-logo-3.png') }}" alt="">
                            <h5>PRIPREMLJENOST</h5>
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

                                            <a style="display: block; margin-top: 20px;" class="link_without" href="/sr/vest/{{ $new->alias }}">SAZNAJTE VIŠE</a>
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