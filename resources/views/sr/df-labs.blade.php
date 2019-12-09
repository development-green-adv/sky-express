@extends("layout/master")

@section("title", "DfLabs | Sky Express")

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


        <div class="container about_desc df-labs-first-part">
            <div class="row">
                <div class="col-12 mb-5">
                    <img class="df-labs-page-logo" src="{{ asset('images/web/dflabs-logo.png') }}" alt="">
                </div>
                <div class="col-12 col-md-5 mb-4 mb-md-0">
                    <h4>Automatizovani odgovor i koordinacija  <br class="d-none d-md-block"> bezbednosnih incidenata </h4><br>
                    <p class="pr-0 pr-md-5">
                        DFLabs je globalni lider u oblasti automatizacije i organizacije bezbednosnih sistema i reakcija na incidente (SOAR - Security Orchestration, Automation and Response). Upotreba DF Labs proizvoda omogućava vam dramatično bržu i efikasniju reakciju na incidente kao i oporavak, smanjujući probleme izazvane ograničenim resursima ili mogućim pretnjama.
                    </p>
                </div>
                <div class="col-12 col-md-7">
                    <div class="df-labs-right-first-part">
                        <ul>
                            <li><div class="row"><div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div><div class="col-10 col-md-11">90% brže rešavanje incidenata</div></div></li>
                            <li><div class="row"><div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div><div class="col-10 col-md-11">80% efikasnija analiza</div></div></li>
                            <li><div class="row"><div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div><div class="col-10 col-md-11">300% povećanje broja obrađenih incidenata</div></div></li>
                            <li><img class="mr-0 mr-md-4 invisible d-none d-md-block " src="{{ asset('images/web/correct.svg') }}" alt="">AUTOMATIZUJE, ORGANIZUJE I OBRAĐUJE</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>


        <div class="container-fluid df-labs-second-part">
            <div class="df-labs-second-part-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="df-labs-second-part-left ">
                            <h1 class="mb-5">Platforma za automatizaciju  i organizaciju bezbednosnih sistema i reakcije na incidente</h1>
                            <p><b>DFLabs IncMan je jedina SOAR platforma, koja pruža mogućnost kompletne automatizacije životnog ciklusa, uključujući automatizovano prikupljanje podataka o pretnjama, procenu rizika, trijažu i obaveštavanje, proširenje konteksta, pretragu i istraživanje, sprečavanje pretnji i još mnogo toga. </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="df-labs-second-part-right text-center mt-5 mt-md-0">
                            <img src="{{ asset('images/web/df-labs-second-part-right.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>

        <div class="container-fluid security_solutions df-labs-third-part-page">
            <div class="row">
                <div class="container">
                    <div class="col-12 text-center">
                        <button class="btn btn-default orange_btn">Award-Winning SOAR Platform</button>
                    </div>
                    <div class="col-12">
                        <div class="df-labs-third-part">
                            <div class="df-labs-third-part-card">
                                <img src="{{ asset('images/web/df-labs-third-part-logo-1.png') }}" alt="">
                                <p>Top 100 in Europe</p>
                            </div>
                            <div class="df-labs-third-part-card">
                                <img class="mb-auto" src="{{ asset('images/web/df-labs-third-part-logo-2.png') }}" alt="">
                                <p>Best Security Orchestration <br> Automation and Response</p>
                            </div>
                            <div class="df-labs-third-part-card">
                                <img class="mb-auto" src="{{ asset('images/web/df-labs-third-part-logo-3.png') }}" alt="">
                                <p>Security Automation <br> and Orchestration </p>
                            </div>
                            <div class="df-labs-third-part-card">
                                <img class="mb-auto" src="{{ asset('images/web/df-labs-third-part-logo-4.png') }}" alt="">
                                <p>Best Continuous <br> Monitoring & Mitigation</p>
                            </div>
                            <div class="df-labs-third-part-card">
                                <img class="mb-auto" src="{{ asset('images/web/df-labs-third-part-logo-5.png') }}" alt="">
                                <p>Security Orchestration, <br> Automation and Response</p>
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

        <div class="container-fluid df-labs-fourth-part">
            {{-- <div class="df-labs-fourth-part-overlay"></div> --}}
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="df-labs-fourth-part-left">
                            <h2 class="mb-5">Ključne karakteristike i mogućnosti</h2>
                            <p class="mb-4 pr-0 pr-md-5">IncMan podržava dvosmernu integraciju sa različitim kategorijama proizvoda uključujući mrežnu i zaštitu krajnjih korisnika, a i rešenja za detekciju pretnji i SIEM rešenja. Ovaj skup integracija odabran je tako da učini proces koordinacije i automatizacije incidenata što sveobuhvatnijim.</p>
                            <p class="pr-0 pr-md-5 mb-5 mb-md-0 ">IncMan je dizajniran u skladu sa odgovarajućim standardima, regulativom i preporučenom praksom. Zbog toga podržava ISO, GDPR, NIST i SEC regulative i preporuke. </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="df-labs-fourth-part-right">
                            <ul>
                                <li class="mb-4"><div class="row"><div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div><div class="col-10 col-md-11">Automatizacija i organizacija</div></div></li>
                                <li class="mb-4"><div class="row"><div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div><div class="col-10 col-md-11">Pretraga i istraživanje</div></div></li>
                                <li class="mb-4"><div class="row"><div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div><div class="col-10 col-md-11">Upravljanje incidentima</div></div></li>
                                <li class="mb-4"><div class="row"><div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div><div class="col-10 col-md-11">Fleksibilne integracije i segmentacija događaja</div></div></li>
                                <li class="mb-4"><div class="row"><div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div><div class="col-10 col-md-11">Upravljanje forenzičkim dokazima</div></div></li>
                                <li class="mb-4"><div class="row"><div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div><div class="col-10 col-md-11">Izveštavanje i ključni pokazatelji učinaka</div></div></li>
                                <li class="mb-4"><div class="row"><div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div><div class="col-10 col-md-11">Transfer znanja i mašinsko učenje </div></div></li>
                                <li><div class="row"><div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div><div class="col-10 col-md-11">Community portal i Community publikacija</div></div></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>


        
        <div class="container-fluid df-labs-fifth-part">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="df-labs-fifth-part-left mb-5 mb-md-0">
                            <h2 class="mb-4">Sveobuhvatna SOAR Platforma</h2>
                            <p class="mb-4 pr-0 pr-md-5">DFLabs obuhvata celokupan spektar komponenti za bezbednu automatizaciju, organizaciju i reakciju, kako je to opisao Gartner, sa jedinstvenom kombinacijom inovativnih karateristika i mogućnosti. </p>
                            <p class="mb-4 pr-0 pr-md-5">IncMan SOAR je jedina platforma, koja pruža mogućnost upravljanja celokupnim životnim ciklusom reakcija na incidente, uključujući mašinsko učenje i pretragu pretnji.</p>
                            <p class="pr-0 pr-md-5">DFLabs IncMan SOAR unpaređuje efektivnost bezbednosnih timova i na taj način omogućava organizaciji da bude korak ispred bilo koje potencijalne pretnje.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="df-labs-fifth-part-right text-center">
                            <img class="w-100" src="{{ asset('images/web/df-labs-fifth-part-right.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>


        <div class="container-fluid  df-labs-sixth-part">
            <div class="df-labs-sixth-part-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="df-labs-sixth-part-title text-center">
                            <h1 class="orange_text">Demonstracija usklađenosti</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="df-labs-sixth-part-middle-left">
                            <img src="{{ asset('images/web/df-labs-sixth-part-middle-left.png') }}" alt="">
                            <div ><p>Integrisani šabloni za postupanje u skladu sa <br class="d-none d-md-block" >GDPR regulativom</p></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="df-labs-sixth-part-middle-right">
                            <img src="{{ asset('images/web/df-labs-sixth-part-middle-right.png') }}" alt="">
                            <div><p>Formalizovan i upotrebljiv šablon za postupanje <br class="d-none d-md-block"> po odredbama GDPR-a</p></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="df-labs-sixth-part-bottom text-center">
                            <h4>Kako DFLabs omogućava ispunjavanje GDPR uslova</h4>
                            <p>DFLabs SOAR rešenje pruža mogućnosti za automatizaciju i određivanje prioriteta reagovanja na incidente i aktivnosti na njihovom suzbijanju, distribuciju odgovarajućih obaveštenja i implementaciju  plana reagovanja na incidente (IRP – Incident Response Plan), u slučaju potencijalnoog gubitka podataka. IncMan SOAR upravlja različitim fazama procesa reakcije na incidente  i obaveštavanja, uključujući pružanje naprednih mogućnosti izveštavanja, bezbednog prikupljanja obaveštajnih podataka i deljenja istih sa trećim stranama.</p>
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