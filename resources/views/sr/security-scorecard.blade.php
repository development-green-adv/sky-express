@extends("layout/master")

@section("title", "Security Scorecard | Sky Express")

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


<div class="container about_desc security-scoredcard-first-part">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <img class="security-scorecard-page-logo" src="{{ asset('images/web/security-scorecard.png') }}" alt="">
            </div>

            <div class="row">
                <div class="col-12 mb-4">
                    <h4>Ocene bezbednosti i stalno praćenje rizika za procenu rizika prodavaca i trećih lica</h4><br>
                </div>
                <div class="col-12  col-md-6">
                    <div class="row">
                        <div class="col-12 mb-4 mb-md-0">
                            <p class="mb-4 pr-0 pr-md-5">
                                Security Scorecard (sistem bezbednosnih pokazatelja) omogućava organizacijama svih vrsta i veličina, u svakoj delatnosti, da otkriju i rešavaju složene izazove kibernetičke sigurnosti, usaglašenosti i upravljanja rizikom.
                            </p>
                            <p class="mb-4 pr-0 pr-md-5">
                                Ovaj proizvod ima neke izuzetno korisne jedinstvene karakteristike koje svaka organizacija može da iskoristi. Korišćenje funkcije planiranja rezultata omogućava vam da brzo i efikasno odredite prioritete za pitanja koja su najvažnija za vašu organizaciju.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="df-labs-right-first-part sscard-right-first-part">
                        <h4 class="mb-4 pl-0 pl-md-5">PLATFORMA</h4>
                        <p class="mb-4 pl-0 pl-md-5"><b>Tačne ocene bezbednosti, napredna analitika podataka i primenljivi uvidi</b>
                        </p>
                        <p class="pl-0 pl-md-5">Otkrijte i otklonite rizik za vašu IT infrastrukturu kao i rizik za kibernetičku sigurnost u okruženju vašeg prodavca i poslovnog partnera. Sarađujte sa trećim licima kako biste smanjili rizik i poboljšali bezbednosno stanje.</p>

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


<div class="df-labs-second-part carbon-black-second-part open-systems-second-part">
    <div class="df-labs-second-part-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="mb-4 pr-0 pr-md-5">
                    SecurityScorecard omogućava korisnicima da pregledaju i neprekidno prate ocene bezbednosti, lako dodaju prodavce ili partnerske organizacije i izveštavaju o kibernetičkom zdravlju svojih ekosistema. Platforma automatski generiše preporučeni akcioni plan za otklanjanje problema kako bi se postigla „ciljnaʺ slovna ocena za klijente i njihove prodavce i partnerske organizacije.
                </p>
                <p class="pr-0 pr-md-5 mb-4 mb-md-0">
                    Ona takođe omogućava pristup uvidima o prekršajima i pokazuje jasnu evidenciju o problemima koji su tokom vremena uticali na rezultate. Dodatni alati za saradnju pomažu preduzećima da bolje upravljaju bezbednošću i da se pobrinu za stalno poštovanje regulatornih standarda i okvira.
                </p>

            </div>
            <div class="col-md-6">
                <p class="mb-4 pl-0 pl-md-5"><b>Security Scorecard</b> je alat velikih mogućnosti za organizacije sa širokim mrežama spoljnih isporučilaca i prodavaca:</p>
                <ul class="security-scorecard-ul">
                    <li class="mb-4">
                        <div class="row">
                            <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                            <div class="col-10 col-md-11">
                                <p><span>OCENE BEZBEDNOSTI </span> - Sve počinje očekivanim rezultatom</p>
                            </div>
                        </div>
                    </li>
                    <li class="mb-4">
                        <div class="row">
                            <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                            <div class="col-10 col-md-11">
                                <p><span>ATLAS</span> - Revolucionarna platforma za upitnike i razmenu dokaza</p>
                            </div>
                        </div>
                    </li>
                    <li class="mb-4">
                        <div class="row">
                            <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                            <div class="col-10 col-md-11">
                                <p><span>THREATMARKET</span> - Inteligencija koja stoji iza očekivanog rezultata</p>
                            </div>
                        </div>
                    </li>
                    <li class="mb-4">
                        <div class="row">
                            <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                            <div class="col-10 col-md-11">
                                <p><span>API KONEKTORI </span> - Podaci i analitika su stub naše platforme</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="security-scorecard-second-right-imgs pl-0 pl-md-5">
                    <img src="{{ asset('images/web/security-scorecard-second-right-1.png') }}" alt="">
                    <img src="{{ asset('images/web/security-scorecard-second-right-2.png') }}" alt="">
                    <img src="{{ asset('images/web/security-scorecard-second-right-3.png') }}" alt="">
                    <img src="{{ asset('images/web/security-scorecard-second-right-4.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid rose_section">
    <div class="row">

    </div>
</div>

<div class="container-fluid avast-third-part eperi-third-part open-system-third-part">
    <div class="container">
        <div class="security-scorecard-third-title text-center mb-5">
            <h1 class="orange_text">REŠENJA</h1>
            <h3>Ocena rizika za kibernetičku sigurnost i rešenja za upravljanje</h3>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="security-scorecard-podnaslov">
                    <p class="mb-4 orange_text">Implementirajte mogućnosti koje su vam potrebne za izgradnju sigurnijeg ekosistema</p>
                    <p class="mb-5 text-white">SecurityScorecard omogućava organizacijama svih vrsta i veličina, u svakoj delatnosti, da otkriju i reše složene izazove kibernetičke sigurnosti, usaglašenosti i upravljanja rizikom.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="security-scorecard-third-left mb-4">
                    <p class="orange_text">Upravljanje rizikom prodavaca</p>
                    <p class="pr-0 pr-md-5">SecurityScorecard obezbeđuje trenutnu vidljivost bezbednosnog stanja prodavaca i poslovnih partnera u čitavom ekosistemu.</p>
                </div>
                <div class="security-scorecard-third-left  mb-4">
                    <p class="orange_text">Istraživanje pretnji</p>
                    <p class="pr-0 pr-md-5">SecurityScorecard prikuplja i analizira signale pretnji širom sveta kako bi se dobile najtačnije ocene bezbednosti i najdetaljniji mogući nalazi.</p>
                </div>
                <div class="security-scorecard-third-left">
                    <p class="orange_text">Samoprocena</p>
                    <p class="pr-0 pr-md-5">Ova platforma omogućava organizacijama da otkriju, nadgledaju i izveštavaju o kibernetičkom zdravlju IT infrastrukture spolja — da bi se videlo šta haker vidi.</p>
                </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
                <div class="security-scorecard-third-left mb-4">
                    <p class="orange_text pl-0 pl-md-5">Kibernetičko osiguranje</p>
                    <p class="pl-0 pl-md-5">SecurityScorecard daje mogućnost preduzećima da preuzmu kontrolu nad svojim profilima rizika, omogućavajući u isto vreme osiguravačima da sagledaju kibernetičko zdravlje svojih osiguranika.</p>
                </div>
                <div class="security-scorecard-third-left mb-4">
                    <p class="orange_text pl-0 pl-md-5">Spajanja i preuzimanja</p>
                    <p class="pl-0 pl-md-5">SecurityScorecard pomaže investitorima da spreče iznenađenja usled skrivenih rizika i pitanja usklađenosti koji su povezani sa ciljevima spajanja i preuzimanja.</p>
                </div>
                <div class="security-scorecard-third-left mb-4">
                    <p class="orange_text pl-0 pl-md-5">Usklađenost</p>
                    <p class="pl-0 pl-md-5">Ova platforma pomaže organizacijama da dokažu i održavaju usklađenost sa vodećim standardima i propisima uključujući PCI, NIST, SOX, GDPR i mnoge druge.</p>
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