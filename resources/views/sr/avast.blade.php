@extends("layout/master")

@section("title", "Avast | Sky Express")

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


<div class="container about_desc avast-first-part">
    <div class="row">
        <div class="col-12 mb-5">
            <img class="avast-page-logo" src="{{ asset('images/web/avast-page-logo.png') }}" alt="">
        </div>
        <div class="col-12 mb-4">
            <h4>Rešenja za bezbednost, performanse i privatnost za privatne i poslovne korisnike</h4><br>
        </div>
        <div class="col-12 col-md-6 mb-4 mb-md-0">
            <p class="pr-0 pr-md-5 mb-4">
                Avast je jedna od najvećih bezbednosnih kompanija na svetu koja koristi tehnologije sledećeg generacije za borbu protiv kiberbnetičkih napada u realnom vremenu. Ona kombinuje veštačku inteligenciju i ljudsku inventivnost kako bi stvorila najveću svetsku mrežu kibernetičke zaštite koja štiti ljude i preduzeća od mrežnih napada.
            </p>
            <p class="pr-0 pr-md-5  mb-4">
                Avast, svetski lider u proizvodima za kibernetičku sigurnost sledeće generacije za preduzeća i pojedince, štiti stotine miliona ljudi na mreži. Avast nudi proizvode pod robnim markama Avast i AVG koji štite ljude od opasnosti na internetu i opasnosti rastućeg okruženja interneta stvari (IoT).
            </p>

            <p class="pr-0 pr-md-5">
                Avast, svetski lider u proizvodima za kibernetičku sigurnost sledeće generacije za preduzeća i pojedince, štiti stotine miliona ljudi na mreži. Avast nudi proizvode pod robnim markama Avast i AVG koji štite ljude od opasnosti na internetu i opasnosti rastućeg okruženja interneta stvari (IoT).
            </p>
        </div>
        <div class="col-12 col-md-6">
            <div class="df-labs-right-first-part avast-right-first-part">
                <h4 class="mb-4 pl-0 pl-md-5">Poslovna sigurnost</h4>
                <p class="mb-5 pl-0 pl-md-5">
                    Očuvanje poslovanja sa vrhunskom Avast
                    endpoint zaštitom i rešenjem upravljivih
                    servisa, uključujući lokalnu ili cloud zaštitu,
                    kao i upravljanje sa udaljenih lokacija, alati za
                    monitoring i servise.
                </p>

                <h4 class="mb-4 pl-0 pl-md-5">Avast je fokusiran na sledeće:</h4>

                <ul class="avast-first-part-ul pl-0 pl-md-5">
                    <li class="mb-4">
                        <div class="row">
                            <div class="col-2 col-md-1">
                                <img src="{{ asset('images/web/correct.svg') }}" alt="">
                            </div>
                            <div class="col-10 col-md-11">
                                <h5 class="mt-2">Detekcija i blokiranje zlonamernog softvera;</h5>
                            </div>
                        </div>
                    </li>
                    <li class="mb-4">
                        <div class="row">
                            <div class="col-2 col-md-1">
                                <img src="{{ asset('images/web/correct.svg') }}" alt="">
                            </div>
                            <div class="col-10 col-md-11">
                                <h5 class="mt-2">Veštačka inteligencija (AI) i mašinsko učenje;</h5>
                            </div>
                        </div>
                    </li>
                    <li class="mb-4">
                        <div class="row">
                            <div class="col-2 col-md-1">
                                <img src="{{ asset('images/web/correct.svg') }}" alt="">
                            </div>
                            <div class="col-10 col-md-11">
                                <h5 class="mt-2">IoT;</h5>
                            </div>
                        </div>
                    </li>
                    <li class="mb-4">
                        <div class="row">
                            <div class="col-2 col-md-1">
                                <img src="{{ asset('images/web/correct.svg') }}" alt="">
                            </div>
                            <div class="col-10 col-md-11">
                                <h5 class="mt-2">Geolociranje.</h5>
                            </div>
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


<div class=" df-labs-second-part carbon-black-second-part">
    <div class="df-labs-second-part-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="mb-4 mb-md-2 text-white">Proizvodi i platforme</h3>
                <p style="font-size: 18px; font-weight: 400;" class="text-white pr-0 pr-md-5">Birajte iz palete moćnih sigurnosnih proizvoda i upravljačkih platformi koji se lako implementiraju, a osmišljeni su tako da omoguće zaštitu malih i srednjih preduzeća od bilo koje informatičke pretnje.</p>
            </div>
            <div class="col-md-6">
                <div class="df-labs-second-part-left avast-page-second-part-left">
                    <div class="avast-page-second-part-card mb-4">
                        <h4 class="orange_text mb-2">Samostalni antivirusni proizvodi</h4>
                        <p class="pr-0 pr-md-5">Zaštitite svoje poslovanje od zlonamernog softvera i hakera bez upravljačke konzole. Instalirajte odabrani antivirusni program na svoje uređaje i zaboravite na njega.</p>
                    </div>
                    <div class="avast-page-second-part-card">
                        <h4 class="orange_text mb-2">Upravljani antivirusni proizvodi</h4>
                        <p class="pr-0 pr-md-5">Sačuvajte podatke, uređaje i ljude u vašoj mreži od IT pretnji naprednom antivirusnom zaštitom i intuitivnom upravljačkom konzolom.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="df-labs-second-part-right carbon-black-second-part-right avast-page-second-part avast-page-second-part-right">
                    <div class="avast-page-second-part-card mb-4">
                        <h4 class="orange_text mb-2 pl-0 pl-md-5">CloudCare</h4>
                        <p class="pl-0 pr-0 pr-md-5 pl-md-5">Obezbedite slojevite usluge zaštite endpoint klijenata i mrežne sigurnosti, pratite opasnosti i rešavajte probleme — sve sa jedne platforme zasnovane na cloud-u.</p>
                    </div>
                    <div class="avast-page-second-part-card">
                        <h4 class="orange_text mb-2 pl-0 pl-md-5">Konzola za upravljanje</h4>
                        <p class="pl-0 pr-0 pr-md-5 pl-md-5">Na jednostavan način uvedite rešenja zaštite endpoint klijenata na uređajima u vašoj mreži i nadgledajte ih sa centralne kontrolne table.</p>
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

<div class="container-fluid avast-third-part">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h4 class="orange_text mb-5">Slojevite usluge informacione sigurnosti za potpunu zaštitu</h4>
                <p class="text-white">Avast Business pruža napredna, integrisana rešenja za bezbednost endpoint klijenata
                    i mreže za preduzeća i dobavljače IT usluga. Podržan od strane najveće mreže za detekciju na svetu
                    Avast Business security portfolio čini lakim i pristupačnim da obezbedi, upravlja i vrši monitoring
                    uvek promenljivih poslovnih mreža. Rezultat je vrhunska zaštita na koju organizacije mogu da
                    računaju.</p>
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