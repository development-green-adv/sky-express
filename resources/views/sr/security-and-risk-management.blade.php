@extends("layout/master")

@section("title", "Sigurnost i upravljanje rizicima | Sky Express")

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
                        <h1>REŠENJA</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container about_desc pen_services sec-risk-management-first-part">
    <div class="row">
        <div class="col-12 col-md-6 mb-4 mb-md-0">
            <h4>Upravljanje rizicima i
                informacionom bezbednoscu</h4><br>
            <p class="pr-0 pr-md-5 mb-4">
                Rizik je sastavni deo naše svakodnevnice. Na svakom koraku koji planiramo u našim
                privatnim i profesionalnim životima moramo da analiziramo rizike koji dolaze uz to. Iz ugla
                cyber bezbednosti, industrije kao što su energetska, bankarska, osiguravajuća, maloprodaja
                itd..., uključuju dosta rizika koji iziskuje prihvatanje tehnologije i koji mora biti efikasno
                kontrolisan.
            </p>
            <p class="pr-0 pr-md-5 mb-4 orange-text" style="font-weight: 700;">
                Cyber rizik se obično odnosi na finansijki gubitak bilo koje vrste poremećaj\uzurpaciju ili
                načinjenu štetu reputaciji organizacije do koje je došlo propustom informacionih sistema.
            </p>
        </div>
        <div class="col-12 col-md-6">
            <h4 class="invisible d-none d-md-block">Pen Testing & Ethical Hacking</h4><br class="d-none d-md-block">
            <p class="pl-0 pl-md-5 mb-4">
                Bilo da ste mali biznis ili više miliona eura vredna korporacija, cyber kriminal može biti
                odmah “iza ugla”. Mali biznisi su zapravo ciljani od strane hakera više nego što bi ste u
                trenutku pomislili, i bez odgovarajuće preventivne mere vaš (bizis) bi mogao biti sledeći.
            </p>
            <p class="pl-0 pl-md-5 mb-4">
                Rizici dolaze sa svih strana. Odlučan i maliciozni spoljni faktor (haker), ili nemarani i
                nezadovoljani unutrašnji (zaposleni). Bilo ko od njih može da izazove haos pristupom
                osetljivim podacima. Nekontrolisan privilegovan pristup je uobičajena ranjivost u oba
                slučaja.
            </p>
        </div>
    </div>
</div>



<div class="container-fluid rose_section">
    <div class="row">

    </div>
</div>

<div class="container-fluid sec-and-risk-management-second-part">
    <!-- <div class="benefites_pen-testing-overlay"></div> -->
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <div class="text-center">
                    <p>Svi biznisi se suočavaju sa rizikom cyber provale u sistem, ali razumevanje vašeg rizika i
                        odakle pretnje mogu da dođu umnogome pomaže u kreiranju efektivne odbrane.</p>
                </div>
            </div>
            <div class="col-12">
                <div class="text-center">
                    <p>Sky Express tim može da analizira  postojeću bezbednosnu sliku vaše organizacije,
                        identifikuje nedostatke i umanji identifikovane informacione rizike.</p>
                </div>
                <div class="text-center mt-5">
                    <div class="get-btn">
                        <a href="/sr/kontakt">KONTAKTIRAJTE NAS</a>
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

<div class="container-fluid footer">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 mb-4 mb-md-0">
                    <!-- <h5>SKY EXPRESS LOGO</h5> -->
                    <a class="navbar-brand logo-footer" href="/"><img src="{{ asset('images/web/logo-sky-express.png') }}" alt=""></a>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h5>QUICK LINKS</h5>
                    <a href="/why-us">Why us?</a><br>
                    <a href="/contact">Technical support</a><br>
                    <a href="/news">News</a><br>
                    <a href="/blog">Blog</a><br>
                    <a href="/careers">Careers</a><br>
                    <a href="#">Office locations</a>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h5>PRODUCTS</h5>
                    <a href="/carbon-black">Carbon Black</a><br>
                    <a href="/df-labs">DF Labs</a><br>
                    <a href="/eperi">Eperi</a><br>
                    <a href="/onapsis">Onapsys</a><br>
                    <a href="/open-systems">Open Systems</a><br>
                    <a href="/logpoint">Logpoint</a><br>
                    <a href="/avast">Avast</a><br>
                    <a href="/kerio">Kerio</a><br>
                    <a href="/security-scorecard">Security Scorecard</a>
                </div>
                <div class="col-12 text-center text-md-left col-md-3 mb-4 mb-md-0 mt-4 mt-md-0">
                    <h5>Sky Express d.o.o.</h5>
                    <p>Work hours:</p>
                    <p>Monday - Friday</p>
                    <p>09:00 - 17:00</p>
                    <br>
                    <div class="social-icons">
                        <h5>FOLLOW US</h5>
                        <a href="https://www.linkedin.com/company/sky-express-it-security-company/?viewAsMember=true" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.facebook.com/skyexpressrs/?ref=bookmarks" target="_blank"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid footer_line">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-4 mb-3 mb-md-0">
                            <a class="ml-auto" href="/terms">Terms & Conditions</a>
                            <a class="ml-auto" href="/privacy-policy">Privacy Policy</a>
                            <a href="/cookie-policy">Cookie Policy</a>
                        </div>
                        <div class="col-12 col-md-4 mb-3 mb-md-0">
                            <a href="#">Copyright {{ date("Y") }} www.sky-express.rs</a>
                            <a href="#">All right reserved</a>
                        </div>
                        <div class="col-12 text-center text-md-left col-md-4">
                            <a target="_blank" href="https://www.green-adv.rs">website development</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



{{-- @include("inc/footer-sr") --}}


@endsection