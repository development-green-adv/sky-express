@extends("layout/master")

@section("title", "Security Consulting | Sky Express")

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


<div class=" about_desc pen_services">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 mb-4 mb-md-0 pr-3 pr-md-5">
                <h4>Konsultantske usluge</h4><br>
                <p class="pr-0 pr-md-5">
                    Zaštita Vašeg poslovanja i podataka od sofisticiranih sajber napada, kao i ispunjavanje regulative u oblasti bezbednosti postaju sve složeniji. Sky Express pruža sveobuhvatne konsultantske usluge u oblasti bezbednosti, uključujući procene, master planiranje, razvoj politike, kontinuitet poslovanja i strategije. Naš tim stručnjaka pomaže klijentima u sprečavanju, planiranju i adekvatnom reagovanju na mnoštvo bezbednosnih rizika.
                </p>
            </div>
            <div class="col-12 col-md-6 pl-3 pl-md-5">
                <h5 class="mt-5 mb-4">Sprečite problem pre njegove pojave.</h5>
                <p class="">Naši eksperti Vam mogu pomoći u kreiranju robusnog bezbednog okruženja sa servisima, koji uključuju trenutne I buduće procene rizika, pregled I razvoj politike, kao I master planiranje.</p>
            </div>
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
                    <h4>Radićemo zajedno sa menadžmentom u cilju usklađivanja bezbednosnih (sigurnosnih) politika i praksi sa Vašim poslovnim ciljevima</h4>
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
                    <h1>Obratite se kompaniji Sky Express radi informisanja i obuke o sajber bezbednosti i dopustite da vam pomognemo da zaštitimo vaše najdragocenije imovine.</h1>
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