@extends("layout/master")

@section("title", "Uskladjenost sa GDPR-om | Sky Express")

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


<div class="container about_desc pen_services sap-first-part">
    <div class="row">
        <div class="col-12 col-md-6 mb-4 mb-md-0">
            <h4>USKLAĐENOST SA GDPR-OM</h4><br>
            <p class="pr-0 pr-md-5 mb-4">
                GDPR je stupio na snagu 25. maja 2018. godine i od tog datuma se primenjuje na fizička i pravna lica
                sa prebivalištem u Evropskoj Uniji. Pod određenim uslovima GDPR ima primenu i u Srbiji. Ovom direktivom se uvode različiti izazovi u vezi sa zaštitom podataka za preduzeća širom sveta.
            </p>

            <h5 class="mb-4">GDPR - Opšta uredba o zaštiti podataka o ličnosti</h5>
            <p class="pr-0 pr-md-5 mb-4">GDPR je osmišljen tako da usklađuje zakone koji se odnose na privatnost podataka širom Evrope i prilagođava način na koji organizacije širom sveta pristupaju privatnosti podataka kada se bave ličnim podacima građana EU. Uredba je stupila na snagu 25. maja 2018. godine i odnosi se ne samo na subjekte EU već i na subjekte van EU koji se bave ličnim podacima stanovnika EU.</p>
            <p class="pr-0 pr-md-5 mb-5">Na mnogo načina, GDPR olakšava stvari, pojednostavljuje postojeći paket pravila i pristupa koje nameće svaka država članica, praveći jedan skup pravila koji će vladati svima njima. Sadrži 99 članaka ili klauzula koji pokrivaju gotovo svaki aspekt poslovanja i upravljanja informacijama - sve od saglasnosti za prikupljanje i obradu informacija, do „prava na brisanje“. Glavni cilj Opšte uredbe o zaštiti podataka (GDPR) je da osigura transparentnost, sigurnost i odgovornost od strane obrađivača podataka.</p>
            <h5 class="orange_text">Za više informacija o tome kako vam Sky Express može pomoći u usaglašavanju sa GDPR-om, obratite se našim stručnjacima za bezbednost.</h5>
            <div class="text-center mt-5">
                <div class="get-btn">
                    <a href="/sr/kontakt">KONTAKTIRAJTE <span class="d-block">naš tim</span></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <h4 class="invisible">Pen Testing & Ethical Hacking</h4><br>
            <h5 class="mb-4 pl-0 pl-md-5">Zašto bi GDPR trebalo da vam bude važan?</h5>
            <p class="pl-0 pl-md-5 mb-4">Nove regulative primoravaju organizacije širom sveta da preispitaju privatnost i zaštitu podataka.</p>
            <p class="pl-0 pl-md-5 mb-4">GDPR propisuje brojne obaveze za kompanije, koje rukuju podacima o ličnosti. Propisi se odnose na to da se podaci mogu obrađivati samo u skladu sa Zakonom, da se to može vršiti samo u predviđene i dozvoljene svrhe, da se mora obezbediti tačnosti i sigurnost podataka, te da se isti moraju uništiti, nakon što je ostvarena njihova svrha. Za kompanije, koje se bave masovnim praćenjem i obradom ličnih podataka u velikom obimu, preporučljivo je da imenuju lice za zaštitu podataka o ličnosti (DPO - Data Protection Officer), a ukoliko se vrši obrada podataka građana EU, u brojnim slučajevima, postojaće obaveza imenovanja predstavnika, koji se nalazi na teritoriji EU.</p>
            <h5 class="mb-4 pl-0 pl-md-5">Primena GDPR-a u Srbiji</h5>
            <p class="pl-0 pl-md-5  mb-4">U novembru 2018. pravni sistem Srbije je usaglašen sa EU propisima o zaštiti podataka o ličnosti nakon što je Narodna skupština Republike Srbije usvojila novi Zakon o zaštiti podataka o ličnosti koji je stupio na snagu 21. avgusta 2019. godine. Zakon je obavezujući za sve organizacije, institucije i kompanije u Srbiji koje obrađuju lične podatke građana EU u svom poslovanju bez obzira gde se sedište ili predstavništvo nalazi u svetu.</p>
            <p class="pl-0 pl-md-5 mb-4">Kao deo šireg procesa harmonizacije zakonodavstva Srbije sa zakonodavstvom EU, ovaj Zakon predviđa drastično veći nivo odgovornosti za sve entitete koji prikupljaju i obrađuju lične podatke. Zakonom su obuhvaćene različite situacije, posebno slučajevi zloupotreba. U eri informacionih tehnologija i interneta, suština nove evropske zaštite ličnih podataka je da svaka kompanija koja je uključena u proces prikupljanja i analize ličnih podataka mora biti dobro informisana o pravima ovih pojedinaca, kao jedno od glavnih ljudska prava i sloboda prema Ustavu Republike Srbije.</p>
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
                    <a class="navbar-brand logo-footer" href="/sr"><img src="{{ asset('images/web/logo-sky-express.png') }}" alt=""></a>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h5>BRZI LINKOVI</h5>
                    <a href="/sr/o-nama">O nama</a><br>
                    <a href="/sr/zasto-sky-express">Zašto mi?</a><br>
                    <!-- <a href="/sr/kontakt">Tehnička podrška</a><br> -->
                    <a href="/sr/vesti">Novosti</a><br>
                    <a href="/sr/blogovi">Blog</a><br>
                    <a href="/sr/karijera">Karijera</a><br>
                    <a href="/sr/kontakt">Lokacija kancelarije</a>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h5>PROIZVODI</h5>
                    <a href="/sr/carbon-black">Carbon Black</a><br>
                    <a href="/sr/df-labs">DF Labs</a><br>
                    <a href="/sr/eperi">Eperi</a><br>
                    <a href="/sr/onapsis">Onapsys</a><br>
                    <a href="/sr/open-systems">Open Systems</a><br>
                    <a href="/sr/logpoint">Logpoint</a><br>
                    <a href="/sr/avast">Avast</a><br>
                    <a href="/sr/kerio">Kerio</a><br>
                    <a href="/sr/security-scorecard">Security Scorecard</a>
                </div>
                <div class="col-12 text-center text-md-left col-md-3 mb-4 mb-md-0 mt-4 mt-md-0">
                    <h5>Sky Express d.o.o.</h5>
                    <p>Radno vreme:</p>
                    <p>Ponedeljak - Petak</p>
                    <p>09:00 - 17:00</p>
                    <br>
                    <div class="social-icons">
                        <h5>PRATITE NAS</h5>
                        <a href="https://www.linkedin.com/company/sky-express-it-security-company/" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.facebook.com/skyexpressrs/" target="_blank"><i class="fab fa-facebook"></i></a>
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
                            <a class="ml-auto" href="/sr/odredbe-i-uslovi">Odredbe i uslovi</a>
                            <a class="ml-auto" href="/sr/politika-privatnosti">Politika privatnosti</a>
                            <a href="/sr/politika-kolacica">Politika kolačića</a>
                        </div>
                        <div class="col-12 col-md-4 mb-3 mb-md-0">
                            <a href="#">Copyright {{ date("Y") }} www.sky-express.rs</a>
                            <a href="#">All right reserved</a>
                        </div>
                        <div class="col-12 text-center text-md-left col-md-4">
                            <a target="_blank" href="https://www.green-adv.rs">websajt development</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



{{-- @include("inc/footer") --}}


@endsection