@extends("layout/master")

@section("title", "By Compliance | Sky Express")

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
                                <h1>REŠENJA</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container about_desc pen_services by-compliance-first-part all-solutions-first-part">
            <div class="row">
                <div class="col-12 mb-4 mb-md-0">
                    <h4>Napredna cyber security rešenja</h4>
                    <p>Sky Express nudi pažljivo odabran spektar komplementarnih, kompatibilnih i primenljivih rešenja. Sva rešenja koja distribuiramo, bilo direktno ili preko prodajnih partnera su prepoznata, dokazana i prilagođena potrebama tržišta</p>
                </div>
            </div>
        </div>
        


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>

        <div class="container-fluid by-compliance-second-part all-solutions-second-part">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="all-solutions-card">
                            <h3 class="orange_text">PREMA USKLAĐENOSTI</h3>
                            <p>Standardi usklađenosti sa regulativima, poput GDPR-a, često definišu minimalne standarde upravljanja IT-om. Ne garantuju sajber otpornost niti određuju najbolju praksu; samo označavaju usaglašenost.</p>
                            <p>Sky Express pruža bezbednosna rešenja koja su napredna, ekonomična i pružaju stvarnu poslovnu vrednost. Poslujte u skladu sa najnovijom regulativom, industrijskim standardima i standardima u oblasti bezbednosti podataka. </p>
                            <ul>
                                <li><a href="/sr/meeting-gdpr">U skladu sa GDPR</a></li>
                                <li><a href="/sr/iso-27001">ISO 27001</a></li>
                                <li><a href="/sr/sap-bezbednosne-smernice">SAP Bezbednosne smernice</a></li>
                            </ul>
                            <div class="delatis-btn"><a href="/sr/by-compliance">Saznajte više</a></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="all-solutions-card">
                            <h3 class="orange_text">REŠENJA ZA RAZLIČITE INDUSTRIJE</h3>
                            <p>Sajber pretnje su postale složenije i sofisticiranije. Mnoge organizacije se danas suočavaju sa prikrivenim napadima u svojim mrežama. Ovi napadi su usmereni na krađu informacija o intelektualnom vlasništvu i klijentima ili šifriranje kritičnih podataka za otkupninu. Nijedna organizacija niti industrija nisu imune na pitanja bezbednosti.</p>
                            <p>Sky Express nudi rešenja koja mogu odgovarati različitim zahtevima različitih industrija i bezbednosnih procesa.</p>
                            <ul class="invisible">
                                <li>Meeting GDPR</li>
                                <li>ISO 27001</li>
                                <li>SAP Security Guidelines</li>
                            </ul>
                            <div style="margin-top: -20px"  class="delatis-btn"><a href="/sr/resenja">Saznajte više</a></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="all-solutions-card">
                            <h3 class="orange_text">SECURITY & RISK MANAGEMENT</h3>
                            <p>Bezbednost i upravljanje rizicima predstavljaju neke od najvećih izazova poslovanja u današnjem sve nestabilnijem okruženju sajber bezbednosti. Neuspesi u ovoj oblasti mogu da dovedu do potencijalno nepovratne finansijske i reputacijske štete.</p>
                            <p>Sky Express pruža usluge i rešenja koja kompanije treba da obezbede bezbednosti i privatnost podataka u svim aspektima poslovanja.</p>
                            <ul class="invisible">
                                <li>Meeting GDPR</li>
                                <li>ISO 27001</li>
                                <li>SAP Security Guidelines</li>
                            </ul>
                            <div class="delatis-btn"><a href="/security-and-risk-management">Saznajte više</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid all-solutions-third-part">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3>Da biste napravili adekvatnu procenu i analizu sajber bezbednosti vaše kompanije, odnosno usklađenost sa direktivama, kontaktirajte tim Sky Express-a.</h3>
                    </div>
                </div>
            </div>
        </div>


    @include("inc/footer-sr")


@endsection