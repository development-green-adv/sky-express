@extends("layout/master")

@section("title", "ISO 27001 | Sky Express")

@section("content")

    @include("inc/header")

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


        <div class="container about_desc pen_services sap-first-part">
            <div class="row">
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <h4>ISO 27001</h4><br>
                    <p class="pr-0 pr-md-5 mb-4">
                        ISO/IEC 27001 je međunarodni standard koji se odnosi na zaštitu i bezbednost informacija. Standard podleže različitim područjima primene kao i za razlikovanje mogućih procesa u organizaciji koji su povezani sa upravljanjem kontrole bezbednosti, kao što su finansijske informacije, intelektualna svojina, detalji o zaposlenima ili informacije koje su vam poverene od trećih lica. 
                    </p>
                    <p class="pr-0 pr-md-5 mb-4">
                        ISO 27001 ide znatno dalje od sajber osnova, i pruža 114 bezbednosnih kontrola koje obuhvataju ljude, procese i tehnologiju. Standard definiše kako održavati sistem upravljanja bezbednosti informacija kako bi se osigurala poverljivost, integritet i dostupnost informacija.
                    </p>
                    {{-- <h5 class="mb-4 pr-5">ISO 27001 will help reduce information security and data protection risks to your organization</h5> --}}
                    <h5 class="mb-4">Da li ste usaglašeni sa ISO 27001?</h5>
                    <p class="mb-4">Mi u Sky Express-u nudimo analizu usaglašenosti sa propisima poput ISO 2700, GDPR, PCI DSS itd. kako bismo osigurali da vaša kompanija posluje u skladu sa odgovarajućim zakonima i propisima.</p>
                    <div class="text-center mt-5">
                            <div class="get-btn">
                                <a href="/contact">Kontaktirajte naš tim</span></a>
                            </div>
                        </div>
                </div>
                <div class="col-12 col-md-6">
                    <h4 class="invisible">Pen Testing & Ethical Hacking</h4><br>
                    <p class="pl-0 pl-md-5 mb-4">ISO 27001 standard pruža okvir za najbolju praksu upravljanja menadžmentom informacione bezbednosti koji pomaže organizacijama u: </p>
                    <ul class="iso-2700-list">
                        <li class="mb-4 pl-0 pl-md-5">
                            <img class="pr-2" src="{{ asset('images/web/correct.svg') }}" alt=""> Zaštiti informacije svojih klijenata i zaposlenih
                        </li>
                        <li class="mb-4 pl-0 pl-md-5">
                            <img class="pr-2" src="{{ asset('images/web/correct.svg') }}" alt=""> Efikasnom upravljanju rizicima za informacionu bezbednost
                        </li>
                        <li class="mb-4 pl-0 pl-md-5">
                            <img class="pr-2" src="{{ asset('images/web/correct.svg') }}" alt=""> Postizanju usklađenosti sa propisima kao što je Opšta uredba o zaštiti podataka Evropske unije (EU GDPR)
                        </li>
                        <li class="mb-4 pl-0 pl-md-5">
                            <img class="pr-2" src="{{ asset('images/web/correct.svg') }}" alt=""> Union General Data Protection Regulation (EUGDPR)
                        </li>
                        <li class="mb-4 pl-0 pl-md-5">
                            <img class="pr-2" src="{{ asset('images/web/correct.svg') }}" alt=""> Zaštitite imidža kompanije. 
                        </li>
                    </ul>
                    <p class="pl-0 pl-md-5 mb-4">Standard je posebno pogodan tamo gde je zaštita informacija kritična, na primer u bankarskom, finansijskom, zdravstvenom, javnom i IT sektoru. Standard se takođe primenjuje na organizacije koje upravljaju velikim količinama podataka ili informacija u ime drugih organizacija, kao što su data centri i kompanije za IT outsourcing i sl. </p>
                    <h5 class="mb-4 pr-5 pl-0 pl-md-5">ISO 27001 vam pomaže u smanjenju rizika bezbednosti i zaštite podataka za vašu organizaciju </h5>
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
                        <a href="/carbon-black"><img class="img-fluid" src="{{ asset('images/web/carbon.png') }}"></a>
                    </div>
                    <div>
                        <a href="/df-labs"><img class="img-fluid" src="{{ asset('images/web/df.png') }}"></a>
                    </div>
                    <div>
                        <a href="/open-systems"><img class="img-fluid" src="{{ asset('images/web/open.png') }}"></a>
                    </div>
                    <div>
                        <a href="/onapsis"><img class="img-fluid" src="{{ asset('images/web/onapsis.png') }}"></a>
                    </div>
                    <div>
                        <a href="/avast"><img class="img-fluid" src="{{ asset('images/web/avast-logo.png') }}"></a>
                    </div>
                    <div>
                        <a href="/eperi"><img class="img-fluid" src="{{ asset('images/web/eperi.png') }}"></a>
                    </div>
                    <div>
                        <a href="/kerio"><img class="img-fluid" src="{{ asset('images/web/kerio.png') }}"></a>
                    </div>
                    <div>
                        <a href="/security-scorecard"><img class="img-fluid" src="{{ asset('images/web/security.png') }}"></a>
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
                        <div class="col-12 col-md-3 mb-4 mb-md-0">
                            <h5>QUICK LINKS</h5>
                            <a href="/why-us">Why Us?</a><br>
                            <a href="#">Technical support</a><br>
                            <a href="/news">News</a><br>
                            <a href="/blog">Blog</a><br>
                            <a href="/careers">Careers</a><br>
                            <a href="#">Office locations</a>
                        </div>
                        <div class="col-12 col-md-3 mb-4 mb-md-0">
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
                        <div class="col-12 col-md-3 mb-4 mb-md-0">
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
                            <a href="/terms">Terms & Conditions</a> 
                            <a href="/privacy-policy">Privacy Policy</a>
                            <a href="/cookie-policy">Cookie Policy</a>
                            <a href="#">Copyright {{ date("Y") }} www.sky-express.rs</a>
                            <a href="#">All right reserved</a>
                            <a target="_blank" href="https://www.green-adv.rs">website development</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    {{-- @include("inc/footer") --}}


@endsection