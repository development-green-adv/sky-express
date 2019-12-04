@extends("layout/master")

@section("title", "Carbon black | Sky Express")

@section("content")

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


        <div class="container about_desc carbon-black-first-part">
            <div class="row">
                <div class="col-12 mb-5">
                    <img class="carbon-black-logo-img" src="{{ asset('images/web/carbon-black-logo.png') }}" alt="">
                </div>
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <h4>Vodeći prozivođač zaštite krajnjih korisnika naredne generacije</h4><br>
                    <p class="pr-0 pr-md-5">
                        Kao cyber security inovator, Carbon Black je <br>
                        je kreirao više kategorija proizvoda<br> za zaštitu krajnjih korisnika, servera i servisa, uključujući kontrolu aplikacija, detekciju i odgovor na pretnje (EDR - Endpoint Detection and Response), sa dodatnim karakteristikama antivirusnog rešenja naredne generacije (NGAV – Next-Generation Antivirus).
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <div class="df-labs-right-first-part">
                        <p class="pl-0 pr-md-5 mb-4">VMware Carbon Black Cloud je dokazano i efikasno rešenje za zaštitu krajnjih korisnika,<br> security needs and uses a series of individual services <br> that run locally on your private network as well as <br> remotely in the cloud.</p>
                        <h5 class="pl-0 pr-md-5 mb-4">Gold Standard in Endpoint Data</h5>
                        <p class="pl-0 pr-md-5">The VMware Carbon Black Cloud is an Effective and <br> user-friendly endpoint solution for user devices. <br> It features malware and non-malware protection that <br> keeps threats at bay while protecting your computer <br> systems from hackers and viruses.</p>
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
                        <div class="df-labs-second-part-left ">
                            <h1 class="mb-5 orange_text">The VMware Carbon Black Cloud </h1>
                            <h2 class="text-white mb-3">Konsoliduje bezbednost krajnjih sistema</h2>
                            <h4 class="text-white mb-0 mb-md-3">Pojednostavljuje vašu bezbednost i obezbeđuje beskompromisnu i aktivnu zaštitu</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="df-labs-second-part-right carbon-black-second-part-right">
                            <h2 class="text-white mb-3 pl-0 pl-md-5">Endpoint Protection Platform (EPP)</h2>
                            <h4 class="text-white pl-0 pl-md-5"><b class="orange_text">The VMware Carbon Black Cloud<b> konsoliduje bezbednosne mere i obezbeđuje sve što je potrebno za zaštitu krajnjih sistema, koristeći jedinstvenog agenta za sve podržane funkcionalnosti.</h4>
                            <ul>
                                <li class="mb-4">
                                    <div class="row">
                                        <div class="col-2 col-md-1">
                                            <img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11">
                                            <p>Zaustavlja sve poznate vrste napada</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-4">
                                    <div class="row">
                                        <div class="col-2 col-md-1"><img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                        <div class="col-10 col-md-11"><p>Prepoznaje do sada nepoznate metode upada i zloupotrebe krajnjih tačaka</p></div>
                                    </div>
                                </li>
                                <li class="mb-4">
                                    <div class="row">
                                        <div class="col-2 col-md-1"><img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                        <div class="col-10 col-md-11"><p>Minimalizuje potrebe za rešenjima više proizvođača i pojednostavljuje administraciju</p></div>
                                    </div>
                                </li>
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

        <div class="container-fluid carbon-black-third-part">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="carbon-black-third-part-left">
                            <h3 class="orange_text">The VMware Carbon Black transformiše  <br> bezbednost kroz sveobuhvatnu analitiku u <br> Cloud-u</h3>
                            <h3 style="color: #231f20;">Carbon Black is leveraging the power of big <br> data and analytics to solve the challenges <br> surrounding endpoint security. With The <br> VMware Carbon Black Cloud platform, we are <br> transforming cybersecurity to deliver <br> a cloud-native endpoint protection platform <br> (EPP) designed  to protect against the most <br> advanced threats.</h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="carbon-black-third-part-right">
                            <h3 class="invisible">Carbon Black koristi centralizovanu analitiku podataka u cilju preciznije detekcije pretnji i analize događaja, zaokružujući bezbednost krajnjih sistema.</h3>
                            <img class="w-100" src="{{ asset('images/web/carbon-black-third-part-right.png') }}" alt="">
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
                <div class="carbon-black-fourth-part-top">
                    <h4 class="text-white">The VMware Carbon Black Cloud <br> CLOUD-NATIVE, EASY-TO-USE, <br> ENDPOINT PROTECTION</h4>
                    <p>Simplify Your Security Stack and Improve Your Protection</p>
                </div>
            </div>

            <div class="container-header">
                <div class="row">
                    <div class="col-md-6">
                        <img class="w-100 mb-5 mb-md-0" src="{{ asset('images/web/carbon-black-fourth-part-left.png') }}" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="carbon-black-fourth-part-right">
                            <h4 class="text-white pl-0 pr-0 pr-md-5 pl-md-5 ">The VMware Carbon Black Cloud is Carbon <br> Black's endpoint protection platform (EPP) <br> delivering next-generation security and IT <br> operations services through the cloud. <br> It applies big data analytics across all <br> endpoints to make predictions about - and <br> provide protection from - current, future, and <br> unknown attacks.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>


        
        <div class="container-fluid df-labs-fifth-part carbon-black-fifth-part">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="df-labs-fifth-part-left carbon-black-fifth-part-left">
                            <h2>CB DEFENSE</h2>
                            <h3 class="mb-5">NAPREDNI ANTIVIRUS + EDR</h3>
                            <p class="mb-5 pr-0 pr-md-5">Preventivna zaštita koja  <br class="d-none d-md-block"> zaustavlja poznate <br class="d-none d-md-block"> i nepoznate napade.</p>
                            <ul>
                                <li class="mb-3">
                                    <div class="row">
                                        <div class="col-2 col-md-1">
                                            <img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11">
                                            <p><strong>Predikciju i prevenciju:</strong> Otkriva postojeće i nove malware <br> i štiti sistem;</p>
                                        </div>
                                    </div>
                                </li>
                                <li  class="mb-3">
                                    <div class="row">
                                        <div class="col-2 col-md-1">
                                            <img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11">
                                            <p><strong>Detekciju i analizu: </strong> Carbon Black koristi prediktivnu cloud <br> tehnologiju i skladištenje;</p>
                                        </div>
                                    </div>
                                </li>
                                <li  class="mb-3">
                                    <div class="row">
                                        <div class="col-2 col-md-1">
                                            <img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11">
                                            <p><strong>Brzu reakciju:</strong> Sposobnost detekcije i reakcije u <br> realnom vremenu;</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-2 col-md-1">
                                            <img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11">
                                            <p><strong>Skalabilnost operativnih mogućnosti: </strong> Automatizacija omogućava masovnu instalaciju <br> i izvršavanje zadataka.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="df-labs-fifth-part-right text-center carbon-black-fifth-part-image">
                            <h2 class="mb-5 invisible">CB DEFENSE</h2>
                            <h3 class="invisible">NEXT-GENERATION ANTIVIRUS + EDR</h3>
                            <img class="w-100" src="{{ asset('images/web/carbon-black-fifth-part-right.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>


        <div class="container-fluid carbon-black-sixth-part">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="carbon-black-sixth-part-left">
                            <h3 class="orange_text">CB RESPONSE</h3>
                            <h3 class="mb-4">INDUSTRISKI LIDER U ODZIVU NA INCIDENTE I PRETRAGU PRETNJI</h3>
                            <p class="mb-5 pr-0 pr-md-5">Otkrite i odgovorite na napredne napade sa nefiltriranom vidljivošću</p>
                            <img class="ml-5" src="{{ asset('images/web/carbon-black-sixth-part-left.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="carbon-black-sixth-part-right">
                            <h3 class="orange_text invisible">CB RESPONSE</h3>
                            <h3 class="mb-4 invisible">NEXT-GENERATION ANTIVIRUS + EDR</h3>
                            <ul>
                                <li class="mb-3">
                                    <div class="row">
                                        <div class="col-2 col-md-1">
                                            <img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11">
                                            <p>Brži odziv sa kraja na kraj i sanacija</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-3">
                                    <div class="row">
                                        <div class="col-2 col-md-1">
                                            <img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11">
                                            <p>Ubrzan odgovor na incidente I potraga za pretnjama sa nefiltriranom vidljivošću</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-3">
                                    <div class="row">
                                        <div class="col-2 col-md-1">
                                            <img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11">
                                            <p>Ubrzana indentifikacija napadačkih aktivnosti i koren problema</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-3">
                                    <div class="row">
                                        <div class="col-2 col-md-1">
                                            <img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11">
                                            <p>Siguran udaljeni pristup zaraženim krajnjim sistemima i detaljna istraga </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-3">
                                    <div class="row">
                                        <div class="col-2 col-md-1">
                                            <img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11">
                                            <p>Bolja zaštita od budućih napada kroz automatizovano nadgledanje</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-3">
                                    <div class="row">
                                        <div class="col-2 col-md-1">
                                            <img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11">
                                            <p>Neograničeno zadržavanje i obim najvećih instalacija</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-3">
                                    <div class="row">
                                        <div class="col-2 col-md-1">
                                            <img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11">
                                            <p>Reduced IT headaches from reimaging and helpdesk <br> tickets</p>
                                        </div>
                                    </div>
                                </li>
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

                                        <a style="display: block; margin-top: 20px;" class="link_without" href="/single-news/{{ $new->alias }}">READ MORE</a>
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