@extends("layout/master")

@section("title", "Open Systems | Sky Express")

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


<div class="container-fluid about_desc open-systems-first-page">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <img class="open-systems-page-logo" src="{{ asset('images/web/open-systems-page-logo.png') }}" alt="">
            </div>

            <div class="row">
                <div class="col-12  col-md-6">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <h4>Vodeća platforma za upravljanje security servisima</h4><br>
                        </div>
                        <div class="col-12 mb-4 mb-md-0">
                            <p class="mb-4 pr-0 pr-md-5">
                                Sa automatizacijom uz pomoć veštačke inteligencije i ekspertskim menadžmentom koji daju više slobode IT resursima, Open Systems pruža kompletan uvid u sistem, fleksibilnost i kontrolu nad sistemom, uz maksimalne performanse, jednostavnost i bezbednost.
                            </p>
                            <p class="mb-4 pr-0 pr-md-5">
                                AI tehnologija deluje preventivno i proaktivno, tako da detektuje i prijavljuje više od 80% svih potencijalnih problema na mrežama, dajući signal ekspertima da se fokusiraju na rešavanje istih blagovremeno. Efektivnim kombinovanjem ljudske i mašinske inteligencije, 90% svih registrovanih bagova se rešava bez intervencije klijenta.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="df-labs-right-first-part">
                        <h4 class="invisible">Leading Managed Security Service Provider</h4><br class="d-none d-md-block"><br class="d-none d-md-block">
                        <ul class="open-systems-first-ul">
                            <li>
                                <div class="row">
                                    <div class="col-2 col-md-1">
                                        <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                    </div>
                                    <div class="col-10 col-md-11">
                                        <p>Open Systems pruža sve potrebne performanse i zaštitu</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-2 col-md-1">
                                        <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                    </div>
                                    <div class="col-10 col-md-11">
                                        <p>Smanjuje ranjivosti od potencijalnih sajber napada</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
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


<div class="container-fluid df-labs-second-part carbon-black-second-part open-systems-second-part">
    <div class="df-labs-second-part-overlay"></div>
    <div class="container">
        <div class="row ">
            <div class="col-12 text-center">
                <p class="mb-4">
                    Osigurajte bezbedno sprovođenje vaših pristupnih procedura za resurse koji se nalaze na internetu. Integrisani
                    Secure Web Gateway, sa funkcijama SSL skeniranja, URL filtriranja i malware zaštite,
                    unapređuje stepen zaštite mašinske inteligencije klijenata od štetnih sadržaja i virusa i ograničava
                    pristup URL kategorijama.
                </p>
                <p class="mb-5">
                    <b>The Mission Control WAF</b> proverava sve pokušaje pristupa od interneta do web aplikacije na mrežnoj infrastrukturi. WAF prekida SSL konekciju, verifikuje HTTP zahtev za validiranjem protokola, spaja ga sa zahtevima za određenu aplikaciju i ako je neophodno vrši redirekciju korisnika ka servisu za registraciju.
                </p>
                <h4>Open Systems garantuje 99,9% pouzdanosti sistema u procesu rada ICT korisničkog servisa.</h4>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid rose_section">
    <div class="row">

    </div>
</div>

<div class="avast-third-part eperi-third-part open-system-third-part">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="open-system-third-part-left">
                    <h3>NADGLEDANJE SIGURNOSTI MREŽE (NETWORK SECURITY MONITORING)</h3>
                    <h4 class="mb-4">Eliminišite „slepe tačke“ u svojoj mreži</h4>
                    <p>
                        Da bi efikasno kontrolisali kompromitujuće događaje u mreži, najvažnije je da se oni brzo otkriju. Open Systems usluga nadgledanja sigurnosti mreže (Network Security Monitoring) daje brojne prednosti u odnosu na tradicionalne metode detekcije, a značajno je jednostavnija od kompleksnih SIEM/SOC rešenja.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="open-system-third-part-right">
                    <h3 class="mb-5 text-white">Detekcija u realnom vremenu</h3>
                    <h4 class="mb-2">Nadgledanje celokupne korporativne mreže</h4>
                    <p class="mb-4">
                        Omogućite holistički pogled na pretnje iz cele mreže.
                    </p>
                    <h4 class="mb-2">Sagledajte sve detalje</h4>
                    <p class="mb-4">Od globalnog stepenovanja rizika do detalja na nivou mrežnih paketa.</p>
                    <h4 class="mb-2">Omogućite brzu analizu i reakciju</h4>
                    <p class="mb-4">Izvršićemo trijažu događaja za vas i eskalirati ukoliko je to potrebno.</p>
                    <h4 class="mb-2">Mašinsko učenje omogućava bolju analizu</h4>
                    <p>Kontinuirano podešavanje za više pravih podataka a manje „šuma“.</p>
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