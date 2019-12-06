@extends("layout/master")

@section("title", "About Us | Sky Express")

@section("content")

@section("seo")

    <style>

        #contact-eng{
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
                                <h1>O NAMA</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container about_desc">
            <div class="row">
                <div class="col-12 mb-4">
                    <h2>O KOMPANIJI SKY EXPRESS</h2>
                </div>
                <div class="col-12 col-md-5 mb-4 mb-md-0">
                    <h4>Vaš pouzdan Cybersecurity partner</h4><br>
                    {{-- <p class="pr-5">
                        <b>Sky Express</b> is an exclusive distributor of <br class="d-none d-md-block">
                        advanced cybersecurity solutions and services <br class="d-none d-md-block"> in the
                        field of information security, covering SEE market.
                    </p> --}}
                    <p class="pr-5"><b>Sky Express</b> je ekskluzivni distributer naprednih sajber bezbednosnih rešenja i usluga u oblasti informacione bezbednosti, pokrivajući tržišta Srbije, Crne Gore, BiH, Severne Makedonije i Albanije. </p>
                </div>
                <div class="col-12 col-md-7">
                    <p class="pl-0 pl-md-5">
                        Kao partnerska kompanija švajcarskog fonda <b>Evolution Equity Partners</b>, Sky Express koristi jedinstvenu priliku za komunikaciju sa vodećim svetskim dobavljačima sajber sigurnosnih rešenja, prateći najnovije trendove i razvoje u oblasti informacione bezbednosti i uspostavljajući pouzdane odnose sa kupcima, zasnovane na kvalitetu i poverenju.
                    </p><br>
                    <p class="pl-0 pl-md-5"> 
                        Sky Express nudi pažljivo odabran spektar komplementarnih, kompatibilnih i primenljivih rešenja. 
                        Sva rešenja koja distribuiramo, bilo direktno ili preko prodajnih partnera su prepoznata, dokazana i prilagođena potrebama tržišta.
                    </p>
                </div>
            </div>
        </div>
        

        <div class="container-fluid rose_section_top">
            <div class="row">
                
            </div>
        </div>


        <div class="container-fluid about_partner_section" style="background-image: url('{{ asset('images/web/aboute-1.jpg') }}'); border-bottom:0px solid #f1592a;">
            <div class="container">
                <div class="slider-for slider-about">
                    <div>
                        <a href="/sr/carbon-black"><img class="img-fluid" src="{{ asset('images/web/carbon.png') }}"></a>
                    </div>
                    <div>
                        <a href="/sr/df-labs"><img class="img-fluid" src="{{ asset('images/web/df.png') }}"></a>
                    </div>
                    <div>
                        <a href="/sr/open-systems"><img class="img-fluid" src="{{ asset('images/web/open.png') }}"></a>
                    </div>
                    <div>
                        <a href="/sr/onapsis"><img class="img-fluid" src="{{ asset('images/web/onapsis.png') }}"></a>
                    </div>
                    <div>
                        <a href="/sr/avast"><img class="img-fluid" src="{{ asset('images/web/avast-logo.png') }}"></a>
                    </div>
                    <div>
                        <a href="/sr/eperi"><img class="img-fluid" src="{{ asset('images/web/eperi.png') }}"></a>
                    </div>
                    <div>
                        <a href="/sr/kerio"><img class="img-fluid" src="{{ asset('images/web/kerio.png') }}"></a>
                    </div>
                    <div>
                        <a href="/sr/security-scorecard"><img class="img-fluid" src="{{ asset('images/web/security.png') }}"></a>
                    </div>
                </div>
            </div>
        </div>



        <div class="container about_desc about_mission">
            <div class="row">
                <div class="col-12 col-md-6">
                    <p class="first-pharagraf">
                        <span class="orange_text">Naša misija</span> je da obezbedimo bezbednost, sigurnost i privatnost najvrednijeg resursa - PODATAKA u svim poslovnim oblastima kao što su finansije, osiguranje, zdravstvo, državna uprava, pravosuđe, obaveštajne agencije, obrazovanje i mnogim drugim.
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <p class="second-pharagraf">
                        <span class="orange_text">Naša vizija</span> je da korisnicima pružimo inovativna rešenja u oblasti informacione bezbednosti i kontinuirano budemo korak ispred sajber napada, obezbeđujući da integritet i reputacija
                        naših klijenata ostanu netaknuti u zahtevnom svetu sajber sigurnosti, svetu koji se neprekidno i sve brže razvija.                        
                    </p>
                </div>
            </div>
        </div>


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>


        <div class="container-fluid video_section about_solutions" style="background-image: url('{{ asset('images/web/aboute-2.jpg') }}');">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h4>Napredna sajber bezbednosnih rešenja</h4><br>
                            <h2><b>Odbranite svoju organizaciju<br> od najnovijih sajber pretnji</b></h2><br>
                            <p>
                                Zaštitite svoje podatke uspostavljanjem partnerstva sa proverenim i pouzdanim distributerom rešenja za informacionu bezbednost. Sky Express nudi pažljivo odabran spektar komplementarnih, kompatibilnih i primenljivih rešenja.
                            </p>
                            <br><br>
                            <a class="orange_link" href="/sr/proizvodi">Saznajte više</a>
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
                        <button class="btn btn-default orange_btn">POSLEDNJE VESTI</button>

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