@extends("layout/master")

@section("title", "Eperi | Sky Express")

@section("content")

@section("seo")

    <style>

        #contact-eng{
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


        <div class="container about_desc eperi-first-part">
            <div class="row">
                <div class="col-12 mb-5">
                    <img class="eperi-page-logo" src="{{ asset('images/web/eperi-page-logo.png') }}" alt="">
                </div>
                {{-- <div class="col-12 mb-4">
                    <h4>Security, performance and privacy solutions for consumer and business users</h4><br>
                </div> --}}
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <p class="pr-0 pr-md-5 mb-4">
                        Kompanija eperi je vodeći dobavljač rešenja za zaštitu podataka u oblaku (CDP). Pionirska rešenja ove kompanije pružaju klijentima najviše standarde sigurnosti podataka i usklađenosti za široko prisutne usluge oblaka, kao što su Office 365 i Salesforce, kao i baze podataka i poslovne aplikacije.  
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <div class="df-labs-right-first-part">
                        <p class="mb-5 pl-0 pl-md-5">
                            Rešenja kompanije eperi pomažu da se osigura da se unutrašnji i spoljni zahtevi za privatnost i usklađenost sprovode interno i centralno i da klijenti mogu da zadrže isključivu kontrolu nad svim procesima zaštite privatnosti.   
                        </p>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>


        <div class="df-labs-second-part carbon-black-second-part">
            <div class="df-labs-second-part-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h4 class="mb-4 text-white">ZAŠTITA PODATAKA, USKLAĐENOST SA GDPR, UPOTREBLJIVOST.</h4>
                        <h4 class="orange_text mb-4 mb-md-0">Sve iz jednog izvora sa mrežnim prolazom kompanije eperi.</h4>
                    </div>
                    <div class="col-md-6">
                        <div class="df-labs-second-part-left eperi-page-second-part-left">
                            <h4  class="mb-4 text-white pl-0 pl-md-5">Eperi garantuje sledeće:</h4>
                            <ul class="eperi-first-part-ul">
                                    <li class="mb-3">
                                        <div class="row">
                                            <div class="col-2 col-md-1">
                                                <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                            </div>
                                            <div class="col-10 col-md-11">
                                                <p>Šifrovanje podataka u realnom vremenu;</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="row">
                                            <div class="col-2 col-md-1">
                                                <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                            </div>
                                            <div class="col-10 col-md-11">
                                                <p>Samo ovlašćeni korisnici mogu da pristupe zaštićenim podacima;</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="row">
                                            <div class="col-2 col-md-1">
                                                <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                            </div>
                                            <div class="col-10 col-md-11">
                                                <p>Potpuno samostalan bezbednosni sistem, bez potrebe za bilo kakvim prilagođavanjem postojeće aplikacije, baze podataka ili interfejsa;</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="row">
                                            <div class="col-2 col-md-1">
                                                <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                            </div>
                                            <div class="col-10 col-md-11">
                                                <p>Nemački kvalitet.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="df-labs-second-part-right carbon-black-second-part-right avast-page-second-part avast-page-second-part-right">
                            <div class="avast-page-second-part-card">
                                <h4 class="text-white mb-4 pl-0 pl-md-5">EPERI ŠTITI VAŠE PODATKE U OBLAKU</h4>
                                <p class="pl-0 pr-0 pl-md-5 pr-md-5">
                                    Office aplikacije, CRM, skladištenje podataka ili HR softver: više od 65% svih kompanija koristi aplikacije oblaka kako bi posao organizovale ekonomičnije, efikasnije i fleksibilnije. Kako štitite od neovlašćenog pristupa svoje podatke koji su kritični za poslovanje? I da li se pridržavate propisa o zaštiti podataka, na primer za podatke o klijentu, zaposlenom ili razvoju, bez izuzetaka? Zaštita podataka u oblaku koju nudi kompanija eperi je jednostavno i sigurno rešenje za šifrovanje za sve SaaS i web aplikacije kako bi se savladali ovi izazovi.   
                                </p>
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

        <div class="container-fluid avast-third-part eperi-third-part">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h4 class="mb-0 mb-md-5 text-white">KAKO VAŠA ORGANIZACIJA IMA KORISTI <br class="d-none d-md-block"> OD ZAŠTITE PODATAKA U OBLAKU KOJU NUDI EPERI</h4>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3">
                        <div class="eperi-third-part-card">
                            <img class="img-fluid office-365"  src="{{ asset('images/web/eperi-card-1.png') }}" alt="">
                            <h6 class="orange_text mt-5 mb-3 pl-4">ZAŠTITA PODATAKA U OBLAKU KOMPANIJE EPERI ZA OFFICE 365</h6>
                            <p class="pr-3 pl-4">Šifrujte i upotrebite tokene za kritične podatke u pošti, kalendarima i drugim Office 365 aplikacijama. Samo vi možete da čitate svoje podatke.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="eperi-third-part-card">
                            <img class="img-fluid" src="{{ asset('images/web/eperi-card-2.png') }}" alt="">
                            <h6 class="orange_text mt-5 mb-2 pl-4">ZAŠTITA PODATAKA U OBLAKU KOMPANIJE EPERI ZA SALESFORCE</h6>
                            <p class="pr-3 pl-4">Eperi se stara da vaši podaci nikada ne budu dostupni neovlašćenim trećim licima. Zaštita podataka u mirovanju, u upotrebi i u tranzitu.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="eperi-third-part-card">
                            <img class="img-fluid" src="{{ asset('images/web/eperi-card-3.png') }}" alt="">
                            <h6 class="orange_text mt-5 mb-2 pl-4">ZAŠTITA PODATAKA U OBLAKU KOMPANIJE EPERI ZA WEB APLIKACIJE</h6>
                            <p class="pr-3 pl-4">Centralna tačka kontrole usklađenosti: koristite jedinstvenu fleksibilnost platforme koju nudi eperi da biste zaštitili sve svoje aplikacije u oblaku.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="eperi-third-part-card text-center">
                            <img class="img-fluid eperi-gateway-logo" src="{{ asset('images/web/eperi-card-4.png') }}" alt="">
                            <h6 class="orange_text mt-4 mb-4 eperi-gateway-title">MREŽNI PROLAZ KOMPANIJE EPERI</h6>
                            <p class="pr-3 pl-4">Mrežni prolaz koji nudi eperi je arhitektura sa fleksibilnim šablonima koji pokrivaju najvažnije funkcije, kao što su KMS, IAM, pseudonimizacija.</p>
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