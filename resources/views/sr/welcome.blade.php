@extends("layout/master")

@section("title", "Ekskluzivni distributer naprednih sajber bezbednosnih rešenja")

@section("seo")

<meta name="keywords" content="ky Express, SkyExpress, Sajber Bezbednost, IT Bezbednost, Carbon Black, DFLabs, LogPoint, Onapsis, Avast, Eperi, Open Systems, Security Scorecard, PenTest, Pen Testing, SAP Security, Bezbednosna analiza, etičko hakovanje, GDPR, EndPoint Detekcija, Incident Management, Antivirus zaštita, MSSP, WAF…" />
<meta name="description" content="Sky Express nudi pažljivo odabran spektar komplementarnih, kompatibilnih i primenljivih sajber bezbednosnih rešenja, koja su prilagođena potrebama tržišta" />

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

<div class="container-fluid video_section">
    <div class="row" style="position: relative;">

        <div class="col-12 col-md-12" style="padding-left: 0px; padding-right: 0px;">
            <video width="100%" height="auto" autoplay id="video_player" muted="muted">
                <source src="{{ asset('video/particle.mp4') }}" type="video/mp4">
            </video>
        </div>

        <div class="container">
            <div class="row">
                <div id="slider-showcase" class="slider-showcase move_video_slider_text">

                    <div class="col-12 pb-3">
                        <h1 data-aos="fade-right" class="orange_text">PROFESIONALNA <b>ODBRANA</b></h1>
                        <h2 data-aos="fade-left">ZA PREDUZEĆA</h2>
                        <br>
                        <h3 data-aos="fade-right">ODBRANITE VAŠE PREDUZEĆE OD SAJBER PRETNJI</h3>
                        <br><br>
                        <a class="orange_link slider-btn-home" data-aos="fade-up" href="/sr/kontakt">Kontaktirajte nas</a>
                    </div>

                    <div class="col-12 pb-3" data-aos="fade-up">
                        <h1 class="orange_text"><b>NAPREDNA</b></h1>
                        <h2>SAJBER SIGURNOSNA REŠENJA </h2>
                        <br>
                        <h3>ODABRANI NIVO DOKAZANIH, KOMPLEMENTARNIH, KOMPATIBILNIH I PRIMENLJIVIH REŠENJA </h3>
                        <br><br>
                        <a class="orange_link  slider-btn-home" href="/sr/proizvodi">Saznajte više</a>
                    </div>

                    <div class="col-12 pb-3" data-aos="fade-up">
                        <h1 class="orange_text">SAJBER SIGURNOSNI <b>EKSPERTI</b></h1>
                        <h2>VAMA NA USLUZI</h2>
                        <br>
                        <h3>VISOKO KVALIFIKOVANI I ISKUSNI SAJBERSIGURNOSNI PROFESIONALCI</h3>
                        <br><br>
                        <a class="orange_link  slider-btn-home" href="/sr/zasto-sky-express">Saznajte više</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



<div class="container-fluid rose_section" style="margin-top: -8px;">
    <div class="row">

    </div>
</div>

<div class="container-fluid security_solutions">
    <div class="row">
        <div class="container">
            <div class="col-12 text-center">
                <button class="btn btn-default orange_btn">SAJBER SIGURNOSNA REŠENJA</button>
                <p>
                    Sky Express je ekskluzivni distributer naprednih sajber bezbednosnih rešenja i usluga u oblasti informacione bezbednosti, pokrivajući tržišta Srbije, Crne Gore, BiH, Severne Makedonije i Albanije.
                </p>
                <br><br>
                <a class="btn btn-default" href="/sr/proizvodi">Saznajte više</a>
                <br><br><br>
                <div class="row">
                    <div class="col-12 col-md-4 solutions_item solutions_item-overlay">
                        <img class="img-fluid" src="{{ asset('images/web/1.png') }}" alt="">
                        <div class="white-overlay"></div>
                        <a style="background-color: transparent !important; margin-top: -30px;" href="/sr/po-uskladjenosti">
                            <h4>Prema usklađenosti </h4>
                        </a>
                    </div>
                    <div class="col-12 col-md-4 solutions_item solutions_item-overlay">
                        <img class="img-fluid" src="{{ asset('images/web/2.png') }}" alt=""></a>
                        <div class="white-overlay"></div>
                        <a style="background-color: transparent !important; margin-top: -30px;" href="/sr/resenja">
                            <h4>Rešenja za industrije</h4>
                        </a>
                    </div>
                    <div class="col-12 col-md-4 solutions_item solutions_item-overlay">
                        <img class="img-fluid" src="{{ asset('images/web/3.png') }}" alt="">
                        <div class="white-overlay"></div>
                        <a style="background-color: transparent !important; margin-top: -30px;" href="/sr/security-and-risk-management">
                            <h4>Sigurnost i <br> upravljanje rizicima</h4>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



<div class="container-fluid antivirus_section">
    <div class="row">
        <div class="container">
            <div class="row h-100">

                <div class="col-12 text-center" style="margin-bottom: 30px;">
                    <h3>NAŠ PORTFOLIO ČINE NAPREDNA REŠENJA ZA SAJBER BEZBEDNOST</h3>
                </div>
                <div class="col-12 col-md-3 text-center align-self-center antivirus_item">
                    <a href="/sr/carbon-black"><img class="img-fluid" src="{{ asset('images/web/carbon.png') }}"></a>
                </div>
                <div class="col-12 col-md-3 text-center align-self-center antivirus_item">
                    <a href="/sr/df-labs"><img class="img-fluid" src="{{ asset('images/web/df.png') }}"></a>
                </div>
                <div class="col-12 col-md-3 text-center align-self-center antivirus_item">
                    <a href="/sr/open-systems"><img class="img-fluid" src="{{ asset('images/web/open.png') }}"></a>
                </div>
                <div class="col-12 col-md-3 text-center align-self-center antivirus_item">
                    <a href="/sr/onapsis"><img class="img-fluid" src="{{ asset('images/web/onapsis.png') }}"></a>
                </div>
                <div class="col-12 col-md-3 text-center align-self-center antivirus_item">
                    <a href="/sr/avast"><img class="img-fluid" src="{{ asset('images/web/avast-logo.png') }}"></a>
                </div>
                <div class="col-12 col-md-3 text-center align-self-center antivirus_item">
                    <a href="/sr/eperi"> <img class="img-fluid" src="{{ asset('images/web/eperi.png') }}"></a>
                </div>
                <div class="col-12 col-md-3 text-center align-self-center antivirus_item">
                    <a href="/sr/kerio"><img class="img-fluid" src="{{ asset('images/web/kerio.png') }}"></a>
                </div>
                <div style="margin-top: -10px;" class="col-12 col-md-3 text-center align-self-center antivirus_item">
                    <a href="/sr/security-scorecard"><img class="img-fluid" src="{{ asset('images/web/security.png') }}"></a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid rose_section">
    <div class="row">

    </div>
</div>


<div class="container-fluid about_section">
    <div class="aboute-overlay"></div>
    <div class="row">
        <div class="container">
            <div class="col-12 text-center">
                <button class="btn btn-default orange_btn">O KOMPANIJI SKY EXPRESS</button>
            </div>

            <div class="row" style="margin-top: 160px;">
                <div class="col-12 col-md-6">
                    <h3>Vaš pouzdan partner<br> za sajber bezbednost</h3>
                </div>
                <div class="col-12 col-md-6">
                    <p>
                        Sky Express je regionalni lider u zaštiti digitalnih podataka. Kao partnerska kompanija švajcarskog fonda Evolution Equity Partners, Sky Express koristi jedinstvenu priliku za saradnju sa vodećim svetskim dobavljačima sajber sigurnosnih rešenja, prateći najnovije trendove i razvoje u oblasti informacione bezbednosti i uspostavljajući pouzdane odnose sa kupcima, zasnovane na kvalitetu i poverenju.
                    </p>

                    <br><br><br><br><br>
                    <a class="btn btn-default" href="/sr/o-nama">Saznajte više</a>
                </div>
            </div>
        </div>
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
                <button class="btn btn-default orange_btn">ZAŠTO SKY EXPRESS?</button>
                <p>
                    Visoko kvalifikovan i iskusan, naš tim inženjera i eksperata odlikuje posvećenost, efikasnost i izuzetno poznavanje svih oblasti informacione tehnologije i informacione bezbednosti. Sa sobom nose i decenije iskustva i značajno iskustvo iz vodećih kompanija sa različitih globalnih tržišta i iz različitih oblasti, kao što su finansije, vojska, zdravstvo, osiguranje i vladine agencije.
                </p>
                <br><br>
                <a class="btn btn-default" href="/why-us">Saznajte više</a>
                <br><br><br>
                <div class="row">
                    <div class="col-12 col-md-4 solutions_item">
                        <img class="img-fluid" src="{{ asset('images/web/why-us-home-1.png') }}" alt="">
                        <h3>POUZDANI <br> SAVETNICI</h3>
                    </div>
                    <div class="col-12 col-md-4 solutions_item">
                        <img class="img-fluid" src="{{ asset('images/web/why-us-home-2.png') }}" alt="">
                        <h3>SERTIFIKOVANI <br> PROFESIONALCI</h3>
                    </div>
                    <div class="col-12 col-md-4 solutions_item">
                        <img class="img-fluid" src="{{ asset('images/web/why-us-home-3.png') }}" alt="">
                        <h3>ZNAČAJNO <br> ISKUSTVO</h3>
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


<div class="container-fluid antivirus_section references">
    <div class="row">
        <div class="container">
            <div class="row h-100">

                <div class="col-12 text-center" style="margin-bottom: 30px;">
                    <h3>REFERENCE</h3>
                </div>
                <div class="slider-for h-100" id="slick-slider">
                    <div class="text-center align-self-center antivirus_item">
                        <img style="margin-left: auto; margin-right: auto; margin-top: auto; margin-bottom: auto;" class="img-fluid" src="{{ asset('images/web/direkt.png') }}">
                    </div>
                    <div class="text-center align-self-center antivirus_item">
                        <img style="margin-left: auto; margin-right: auto; margin-top: auto; margin-bottom: auto;" class="img-fluid" src="{{ asset('images/web/medi.png') }}">
                    </div>
                    <div class="text-center align-self-center antivirus_item">
                        <img style="margin-left: auto; margin-right: auto; margin-top: auto; margin-bottom: auto;" class="img-fluid" src="{{ asset('images/web/sremska.png') }}">
                    </div>
                    <div class="text-centeralign-self-center  antivirus_item">
                        <img style="margin-left: auto; margin-right: auto; margin-top: auto; margin-bottom: auto;" class="img-fluid" src="{{ asset('images/web/moji.png') }}">
                    </div>
                    <div class="text-center align-self-center antivirus_item">
                        <img style="margin-left: auto; margin-right: auto; margin-top: auto; margin-bottom: auto;" class="img-fluid" src="{{ asset('images/web/p3.png') }}">
                    </div>
                    <div class="text-center align-self-center antivirus_item">
                        <img style="margin-left: auto; margin-right: auto; margin-top: auto; margin-bottom: auto;" class="img-fluid" src="{{ asset('images/web/vlada.png') }}">
                    </div>
                    <div class="text-center align-self-center antivirus_item">
                        <img style="margin-left: auto; margin-right: auto; margin-top: auto; margin-bottom: auto;" class="img-fluid" src="{{ asset('images/web/beograd.png') }}">
                    </div>
                    <div class="text-center align-self-center antivirus_item">
                        <img style="margin-left: auto; margin-right: auto; margin-top: auto; margin-bottom: auto;" class="img-fluid" src="{{ asset('images/web/eps.png') }}">
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

<div class="container-fluid rose_section_image">
    <div class="row">
        <div class="col-12 col-md-12" style="padding-left: 0px; padding-right: 0px;">
            <video height="140px" width="100%" autoplay id="video_player" muted="muted" style="object-fit: fill;">
                <source src="{{ asset('video/small_video.mp4') }}" type="video/mp4">
            </video>
        </div>
    </div>
</div>


<div class="container-fluid contact-form">
    <div class="container">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-11">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-form-top">
                            <h4 class="mb-5">KONTAKTIRAJTE NAS:</h4>

                            <p class="mb-5">Sky Express d.o.o</p>

                            <div class="row mb-3 mb-md-0">
                                <div class="col-2 col-sm-1 col-md-1 mt-2">
                                    <img src="{{ asset('images/web/location.svg') }}" alt="">
                                </div>
                                <div class="col-10 col-sm-11 col-md-11 location-div">
                                    <p>Bulevar Milutina Milankovića 11A <br>
                                        11070, Beograd, Srbija
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 my-auto">

                        <div class="contact-form-top-middle">
                            <ul>
                                <li class="mb-3"><img class="mr-3" src="{{ asset('images/web/phone.svg') }}"> <a class="mb-3" href="tel:+381646414461"> +381 64 641 44 61</a></li>
                                <li> <img class="mr-3" src="{{ asset('images/web/mail.svg') }}"><a href="mailto:prodaja@sky-express.rs">prodaja@sky-express.rs</a></li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">

                <form class="form-home-page">
                    <input type="text" placeholder="Ime">
                    <input type="email" placeholder="Email">
                    <textarea placeholder="Vaša poruka..."></textarea>
                    <button type="submit">Pošalji</button>
                </form>

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>


@include("inc/footer-sr")

@endsection