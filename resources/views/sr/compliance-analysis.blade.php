@extends("layout/master")

@section("title", "Compliance Analysis | Sky Express")

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
                                <h1>USLUGE</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container about_desc pen_services">
            <div class="row">
                <div class="col-12 col-md-6 mb-4 mb-md-0 pr-5">
                    <h4>Analiza usklađenosti</h4><br>
                    <p class="pr-0 pr-md-5 mb-4">
                        U regulisanom poslovnom okruženju, usklađenost ima suštinsku važnost za dugoročni poslovni uspeh. Gubitak prihoda, tužbe i novčane kazne, prouzrokovane nedostatkom usklađenosti mogu značajno uticati na vaše poslovanje. Pored toga, kompanije ne mogu postići usklađenost samostalno, imajući u vidu ogromne ljudske napore i organizacionu usredsređenost, koji su za to potrebni. 
                    </p>
                    <p class="pr-0 pr-md-5 mb-4">
                        
                    </p>
                </div>
                <div class="col-12 col-md-6 pl-3 pl-md-5">
                    <h4 class="invisible">Pen Testing & Ethical Hacking</h4><br>
                    <p class="mb-4">Postizanje usklađenosti sa regulativom i industrijskim standardima ne mora biti toliko teško, kao što deluje na prvi pogled. Sky Express će vas voditi kroz proces validacije usklađenosti i pomoći u dostizanju iste.</p>
                    <p class=""></p>
                </div>
            </div>
        </div>
        


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>

        <div class="container-fluid benefites_pen-testing security-consulting-benefites">
            <div class="benefites_pen-testing-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 position-relative">
                        <div class="security-consulting-benefites-area text-center mt-5">
                            <h4 class="orange_text mb-4">Skalabilne & efikasne usluge postizanja usklađenosti, prilagođene potrebama vaše organizacije</h4>
                            <h5 class="text-white mb-3">Poslujte u skladu sa najnovijom regulativom, industrijskim standardima i standardima u oblasti bezbednosti podataka. Iskoristite naše znanje i iskustvo. Radimo sa vama, kako bismo proces učinili što jednostavnijim.</h5>
                            <h5 class="text-white">Kontaktirajte nas i saznajte više o uslugama postizanja usklađenosti. </h5>
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
                        <div class="experts_pen-left">
                            <h1>Kontaktirajte iskusnog konsultanta i unapredite nivo bezbednosti vaše kompanije.</h1>
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

                                            <a style="display: block; margin-top: 20px;" class="link_without" href="/sr/vest/{{ $new->alias }}">READ MORE</a>
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