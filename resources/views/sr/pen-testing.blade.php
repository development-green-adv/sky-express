@extends("layout/master")

@section("title", "Pen Testing & Ethical Hacking | Sky Express")

@section("content")

    @include("inc/header-sr")

        <div class="container-fluid top_section" style="background-image: url('{{ asset('images/web/showcase.jpg') }}'); background-repeat: no-repeat;">
            <div class="row">
                <div class="about_headline" data-aos="fade-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h1>USLUGE</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="about_desc pen_services">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 mb-4 mb-md-0">
                        <h4>Pentesting & Etičko hakovanje</h4><br>
                        <p class="pr-0 pr-md-5">
                            Budite proaktivni i ojačajte svoju odbranu SkyExpress uslugom pentestinga i etičkog hakovanja.
                        </p>
    
                        <h5 class="mt-4 mb-4">Ovo je jedini test koji želite da prođe neuspešno.</h5>
                        <p class="mb-4 pr-0 pr-md-5">Pri penetration testiranju, naši sertifikovani stručnjaci za informacionu bezbednost koriste dokazane metodologije i najbolje prakse u industriji. Sky Express inženjeri znaju na koji način razmišljaju zlonamerni hakeri što pomaže u lociranju slabosti sistema. Naše usluge pentestinga i etičkog hakovanja utvrđuju da li je neku slabost zaista moguće iskoristiti i dovesti do kompromitacije osetljivih podataka. </p>
                        <p class="pr-0 pr-md-5">The test process is the combination of several different activities that ultimately provide your organization with a clear view of exploitable threats that can
                            easily compromise your system.</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <h4 class="invisible">Pen Testing & Ethical Hacking</h4><br>
                        <p class="pl-0 pl-md-5 mb-4">With our ability to test remotely, we are able to service you quickly and cost effectively. Sky Express allows you to focus on your core business, removing
                            the burden of performing penetration testing with complicated tools.</p>
                        <p class="pl-0 pl-md-5 mb-4">Your penetration test results can be reconciled with your ongoing Sky Express vulnerability scanning program. No more digging through dense reports that
                            are difficult to manage and interpret.</p>
                        <p class="pl-0 pl-md-5">The Ethical Hacking service simulates an external or internal attacker. Our attack strategies can be focused on the technology layer, but also on what is
                            often the weakest link of the system: the human factor. This means that non-conventional attack techniques can be used – Social Engineering, exploiting
                            loopholes in physical security and procedures, intercepting communications...</p>
                    </div>
                </div>
            </div>
        </div>
        


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>

        <div class="benefites_pen-testing">
            <div class="benefites_pen-testing-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Benefitsof Penetration Testing</h3>
                        <h4 class="text-white">Prednosti pentestinga:</h4>
                        <ul>
                            <li><div class="row"><div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div><div class="col-10 col-md-11">Inteligentno upravljanje ranjivostima sistema</div></div></li>
                            <li><div class="row"><div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div><div class="col-10 col-md-11">Izbegnite troškove koji nastaju zbog pada informacionog sistema</div></div></li>
                            <li><div class="row"><div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div><div class="col-10 col-md-11">Usaglasite se sa regulativom, izbegnite novčane kazne</div></div></li>
                            <li><div class="row"><div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div><div class="col-10 col-md-11">Sačuvajte korporativni imidž i lojalnost kupaca</div></div></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>

    
        <div class="container-fluid exprerts_pen_testing">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="experts_pen-left">
                            <h1>Za usluge pentestinga i etičkog hakovanja, pišite nam na sales@sky-express.rs i zaštitite vaše dragocene podatke.</h1>
                            <div class="get-btn">
                                <a href="/contact">KONTAKTIRAJTE NAS</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="experts_pen-right">
                            <img src="{{ asset('images/web/pen-key.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>


        <div class="container-fluid service_section">
            <div class="row">
                <div class="container">
                    <div class="row h-100">
                        <div class="col-12 text-center" style="margin-bottom: 30px;">
                            <h3>OUR SERVICES</h3>
                        </div>
                        
                        <div class="col-12 col-md-3 my-5 text-center align-self-center service_item">
                            <a href="/security-analysis">
                                <img class="img-fluid" src="{{ asset('images/web/secu.png') }}">
                                <p>Security Analysis</p>
                            </a>
                        </div>
                        <div class="col-12 col-md-3  my-5 text-center align-self-center service_item">
                            <a href="/compliance-analysis">
                                <img class="img-fluid" src="{{ asset('images/web/compi.png') }}">
                                <p>Compilance Analysis</p>
                            </a>
                        </div>
                        <div class="col-12 col-md-3  my-5 text-center align-self-center service_item">
                            <a href="/managed-security-services">
                                <img class="img-fluid" src="{{ asset('images/web/pin.png') }}">
                                <p>Managed Security Services (MSSP)</p>
                            </a>
                        </div>
                        <div class="col-12 col-md-3  my-5 text-center align-self-center service_item">
                            <a href="/information-security-management-system">
                                <img class="img-fluid" src="{{ asset('images/web/sec.png') }}"> 
                                <p>Security Management Systems (ISMS)</p>
                            </a>
                        </div>
                        
                        <div class="col-12 col-md-4  my-5 text-center align-self-center service_item">
                            <a href="/security-awareness-planning">
                                <img class="img-fluid" src="{{ asset('images/web/se.png') }}">
                                <p>Security Awareness Planning</p>
                            </a>
                        </div>
                        <div class="col-12 col-md-4  my-5 text-center align-self-center service_item">
                            <a href="/pen-testing">
                                <img class="img-fluid" src="{{ asset('images/web/pen.png') }}">
                                <p>Pen Testing & Ethical Hacking</p>
                            </a>
                        </div>
                        <div class="col-12 col-md-4  my-5 text-center align-self-center service_item">
                            <a href="/security-consulting">
                                <img class="img-fluid" src="{{ asset('images/web/consult.png') }}">
                                <p>Security Consulting</p>
                            </a>
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