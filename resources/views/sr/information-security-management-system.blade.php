@extends("layout/master")

@section("title", "Upravljanje informacionom bezbednoscu (ISMS) | Sky Express")

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


<div class="about_desc pen_services">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 mb-4 mb-md-0">
                <h4>Information Security Management Systems (ISMS)</h4><br>
                <p class="pr-0 pr-md-5">
                    Naše usluge zaštite informacija štite Vaše poslovanje od gubitka podataka, lošeg kredibiliteta i prekida servisa. Pružamo ponude i prenosimo znanja i iskustva, neophodna za sveobuhvatnu bezbednost informacija. Naše ponude uključuju najsavremenije tehnologije i servise, podršku i trening od strane sertifikovanih stručnjaka u oblasti informacione bezbednosti.
                </p>

                <h5 class="mt-4 mb-4">Postignite relevantne standarde i smanjite IT bezbednosne rizike Vaše organizacije</h5>

            </div>
            <div class="col-12 col-md-6">
                <h4 class="invisible mb-4 d-none d-md-block">Pen Testing & Ethical Hacking</h4><br>
                <p class="pl-0 pl-md-5 mb-4">Savetodavne usluge ISMS pomažu vam da razvijete koherentan skup politika, procesa i sistema za upravljanje rizicima informacionih sredstava i poboljšaju IT upravljanje. Naši konsultanti analiziraju organizaciju kroz tri osnovna parametra: tehnologije, procesa i ljudi.</p>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid rose_section">
    <div class="row">

    </div>
</div>

<div class="container-fluid benefites_pen-testing benefite-info-security">
    <div class="benefites_pen-testing-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Možemo vam pomoći u:</h3>

                <ul>
                    <li>
                        <div class="row">
                            <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                            <div class="col-10 col-md-11">Identifikaciji kritične infrastrukture i podataka;</div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                            <div class="col-10 col-md-11">Praćenju IT bezbednosnih rešenja i investiranja;</div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                            <div class="col-10 col-md-11">Pronalaženju postojećih problema i implementaciji rešenja za njihovo prevazilaženje;</div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                            <div class="col-10 col-md-11">Praćenju promena, koje dovode do zastarelosti trenutnih rešenja;</div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                            <div class="col-10 col-md-11">Procesu Izveštavanja, eskaliranja i beleženja štetnih bezbednosnih događaja;</div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                            <div class="col-10 col-md-11">Praćenju potreba za obuku osoblja i dokumentovanju relevantnih obuka;</div>
                        </div>
                    </li>
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
                    <h1>Kontaktirajte Sky Express za ISMS savetodavne usluge i dozvolite nam da vam pomognemo u zaštiti vaše najvrednije imovine. </h1>
                    <div class="get-btn">
                        <a href="/sr/kontakt">KONTAKTIRAJTE NAS</span></a>
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