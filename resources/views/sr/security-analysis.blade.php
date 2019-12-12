@extends("layout/master")

@section("title", "Bezbednosna analiza | Sky Express")

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
                        <h1>USLUGE</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container about_desc pen_services">
    <div class="row">
        <div class="col-12 col-md-6 mb-4 mb-md-0">
            <h4>Bezbednosna analiza </h4><br>
            <p class="pr-0 pr-md-5 mb-4">
                Nakon analize postojeće bezbednosne slike vaše organizacije, možemo vam dati preporuke za unapređenje, koje su usklađene sa vašim poslovnim sistemima i aplikacijama, imajući u vidu vaš budžet i planove proširenja.
            </p>

            <h4>Zaštita Vašeg informacionog sistema</h4><br>
        </div>
        <div class="col-12 col-md-6">
            <h4 class="invisible">Pen Testing & Ethical Hacking</h4><br>
            <p class="pl-0 pl-md-5 mb-4">Dugoročna zaštita vaših podataka ima veliki značaj: Osim ažuriranja, nadogradnji i završetka podrške, vaša infrastruktura se stalno menja. </p>
            <p class="pl-0 pl-md-5 mb-4">Mi pružamo preventivne usluge, kako u obliku sveobuhvatnih analiza rizika, tako i u obliku dubljih i naprednijih sigurnosnih analiza.</p>
        </div>
    </div>
</div>



<div class="container-fluid rose_section">
    <div class="row">

    </div>
</div>

<div class=" benefites_pen-testing">
    <div class="benefites_pen-testing-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="solutions-second-left">
                    <h3>Naše specijalnosti su:</h3>
                    <ul>
                        <li>
                            <div class="row">
                                <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                <div class="col-10 col-md-11">Bezbednosno upravljanje;</div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                <div class="col-10 col-md-11">Analiza pretnji i procena rizika;</div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                <div class="col-10 col-md-11">IT Bezbednost;</div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                <div class="col-10 col-md-11">Upravljanje incidentima;</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="invisible">Benefitsof Penetration Testing</h3>
                <div class="solutions-second-right">
                    <ul>
                        <li>
                            <div class="row">
                                <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                <div class="col-10 col-md-11">Identifikacija ranjivosti;</div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                <div class="col-10 col-md-11">Unapređenje bezbednosti organizacije;</div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                <div class="col-10 col-md-11">Pregled nivoa bezbednosti;</div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                <div class="col-10 col-md-11">Testiranje eskalacionih scenarija;</div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""> </div>
                                <div class="col-10 col-md-11">Dizajn i uvođenje bezbednosnih smernica;</div>
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


<div class="container-fluid exprerts_pen_testing">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="experts_pen-left ">
                    <h1>Kontaktirajte iskusnog konsultanta i unapredite nivo bezbednosti vaše kompanije.</h1>
                    <div class="get-btn">
                        <a href="/sr/kontakt">KONTAKTIRAJTE NAS</a>
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
                    <h3>NAŠE USLUGE </h3>
                </div>

                <div class="col-12 col-md-3 my-5 text-center align-self-center service_item">
                    <a href="/sr/bezbedonosna-analiza">
                        <img class="img-fluid" src="{{ asset('images/web/secu.png') }}">
                        <p>Bezbednosna analiza</p>
                    </a>
                </div>
                <div class="col-12 col-md-3  my-5 text-center align-self-center service_item">
                    <a href="/sr/analiza-uskladjenosti">
                        <img class="img-fluid" src="{{ asset('images/web/compi.png') }}">
                        <p>Analiza usklađenosti sa regulativama</p>
                    </a>
                </div>
                <div class="col-12 col-md-3  my-5 text-center align-self-center service_item">
                    <a href="/sr/managed-security-services">
                        <img class="img-fluid" src="{{ asset('images/web/pin.png') }}">
                        <p>Managed Security Services (MSSP)</p>
                    </a>
                </div>
                <div class="col-12 col-md-3  my-5 text-center align-self-center service_item">
                    <a href="/sr/information-security-management-system">
                        <img class="img-fluid" src="{{ asset('images/web/sec.png') }}">
                        <p>Upravljanje informacionom bezbednošću (ISMS)</p>
                    </a>
                </div>

                <div class="col-12 col-md-4  my-5 text-center align-self-center service_item">
                    <a href="/sr/pentesting-i-hakovanje">
                        <img class="img-fluid" src="{{ asset('images/web/se.png') }}">
                        <p>Pentest i etičko hakovanje </p>
                    </a>
                </div>
                <div class="col-12 col-md-4  my-5 text-center align-self-center service_item">
                    <a href="/sr/planiranje-svesti-o-bezbednosti">
                        <img class="img-fluid" src="{{ asset('images/web/pen.png') }}">
                        <p>Podizanje svesti o bezbednosti</p>
                    </a>
                </div>
                <div class="col-12 col-md-4  my-5 text-center align-self-center service_item">
                    <a href="/sr/konsultantske-usluge">
                        <img class="img-fluid" src="{{ asset('images/web/consult.png') }}">
                        <p>Konsalting u oblasti informacione bezbednosti</p>
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