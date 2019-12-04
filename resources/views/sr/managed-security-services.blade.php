@extends("layout/master")

@section("title", "Managed Security Services | Sky Express")

@section("content")

    @include("inc/header")

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
                        <h4>Managed Security Services (MSSP)</h4><br>
                        <p class="pr-0 pr-md-5 mb-4">
                            Bez obzira da li se suočavate sa prevazilaženjem nedostatka veština, borite se protiv novih protivnika pretnji ili tražite više vrednosti od svojih IT inicijativa, mi razumemo da su sve organizacije različite i zato su naše MSSP usluge dizajnirane za fleksibilnost.
                        </p>
                        <p class="pr-0 pr-md-5 mb-4">
                            Usluge upravljanja bezbednošću odnose se na aspekte neprestanih sajber-bezbednosnih aktivnosti organizacije koje su dodeljene nezavisnim provajderima. Mnoge organizacije iskorištavaju prednosti MSS-a zato što pružaju pristup talentima i resursima kibernetičke sigurnosti koji prevazilaze ono što organizacija može raditi interno
                        </p>
                    </div>
                    <div class="col-12 col-md-6">
                        <h4 class="invisible">Pen Testing & Ethical Hacking</h4><br>
                        <p class="pl-0 pl-md-5 mb-4">Ključna funkcija upravljanih bezbednosnih službi je da klijentu obezbede informacije, resurse i pristup osoblju koje im je potrebno da adekvatno obezbede svoju mrežu i resurse.</p>
                        <p class="pl-0 pl-md-5 mb-4">Sky Express Managed Security Services (MSS) pruža raznovrstan portfelj usluga kako bi udovoljio potrebama širokog spektra organizacija kroz prilagođeni pristup radu sa nasleđenim tehnologijama koje pruža klijent.</p>
                    </div>
                </div>
            </div>
        </div>
        


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>

        <div class="container-fluid benefites_pen-testing">
            <div class="benefites_pen-testing-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Benefiti:</h3>
                        <ul>
                            <li><div class="row"><div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div><div class="col-10 col-md-11">Nadgledanje (Monitoring) infrastrukture i detekcija</div></div></li>
                            <li><div class="row"><div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div><div class="col-10 col-md-11">Napredni nivo bezbednosti</div></div></li>
                            <li><div class="row"><div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div><div class="col-10 col-md-11">Skalabilnost i efikasnost</div></div></li>
                            <li><div class="row"><div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div><div class="col-10 col-md-11">Usklađenost sa najnovijim dostignućima</div></div></li>
                            <li><div class="row"><div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div><div class="col-10 col-md-11">Potpuna posvećenost naših stručnjaka</div></div></li>
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
                            <h1>Kontaktirajte Sky Express i saznajte više o Managed Security servisima, a mi ćemo obezbediti zaštitu Vašeg poslovanja. </h1>
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


    @include("inc/footer")


@endsection