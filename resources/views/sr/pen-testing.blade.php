@extends("layout/master")

@section("title", "Pentesting i eticko hakovanje | Sky Express")

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
                <h4>Pentesting i Etičko hakovanje</h4><br>
                <p class="pr-0 pr-md-5">
                    Budite proaktivni i ojačajte svoju odbranu SkyExpress uslugom pentestinga i etičkog hakovanja.
                </p>

                <h5 class="mt-4 mb-4">Ovo je jedini test koji želite da prođe neuspešno.</h5>
                <p class="mb-4 pr-0 pr-md-5">Pri penetration testiranju, naši sertifikovani stručnjaci za informacionu bezbednost koriste dokazane metodologije i najbolje prakse u industriji. Sky Express inženjeri znaju na koji način razmišljaju zlonamerni hakeri što pomaže u lociranju slabosti sistema. Naše usluge pentestinga i etičkog hakovanja utvrđuju da li je neku slabost zaista moguće iskoristiti i dovesti do kompromitacije osetljivih podataka. </p>
                <p class="pr-0 pr-md-5">
                    Sa našom mogućnošću da testiramo sa udaljene lokacije, u mogućnosti smo da vam pružimo uslugu
                    brzo i ekonomski isplativo. Sky Express vam omogućava da se fokusirate na vaš biznis, preuzimajući
                    na sebe komplikovano izvođenje Pentesta.
                </p>
            </div>
            <div class="col-12 col-md-6">
                <h4 class="invisible">Pen Testing & Ethical Hacking</h4><br>
                <p class="pl-0 pl-md-5 mb-4">
                    Vaši Pentesta rezultati mogu biti usklađeni sa tekućim Sky Express programom za pretragu slabosti
                    sistema.
                </p>
                <p class="pl-0 pl-md-5 mb-4">
                    Usluga etičkog hakovanja simulira spoljnog ili unutrašnjeg napadača. Naše strategije napada mogu
                    biti fokusirane na tehnološki deo, ali takođe i na ono što je obično najslabija karika u sistemu, ljudski
                    faktor. Ovo znači da ne-konvencionalne tehnike napada mogu biti korišćene, od socijalnog
                    inženjeringa, iskorišćavanja “rupa” u fizičkom obezbeđenju i procedurama, presretanje
                    komunikacija….
                </p>
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
                <h3>Prednosti pentestinga:</h3>
                <ul>
                    <li>
                        <div class="row">
                            <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                            <div class="col-10 col-md-11">Inteligentno upravljanje ranjivostima sistema</div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                            <div class="col-10 col-md-11">Izbegnite troškove koji nastaju zbog pada informacionog sistema</div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                            <div class="col-10 col-md-11">Usaglasite se sa regulativom, izbegnite novčane kazne</div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                            <div class="col-10 col-md-11">Sačuvajte korporativni imidž i lojalnost kupaca</div>
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
                    <h1>Za usluge pentestinga i etičkog hakovanja kontaktirajte nas i zaštitite vaše dragocene podatke.</h1>
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