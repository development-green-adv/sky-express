@extends("layout/master")

@section("title", "SAP Security Guidelines | Sky Express")

@section("content")

    @include("inc/header")

        <div class="container-fluid top_section" style="background-image: url('{{ asset('images/web/showcase.jpg') }}'); background-repeat: no-repeat;">
            <div class="row">
                <div class="about_headline" data-aos="fade-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h1>SOLUTIONS</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container about_desc pen_services sap-first-part">
            <div class="row">
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <h4>SAP Security Guidelines</h4><br>
                    <p class="pr-5 mb-4">
                        Cybercrime is steadily increasing and targeting the very 
                        heart of every company—its SAP footprint. 
                        Yet protection for SAP systems is often inadequate. 
                    </p>
                    <h6 class="mb-5">There are several reasons why SAP clients are 
                        vulnerable to cyberattacks:</h6>
                    <ul>
                        <li class="mb-3">
                            <div class="row">
                                <div class="col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                <div class="col-md-11"><p>Large attack surface. When numerous IoT, 
                                    networks, and storage tools are connected in SAP
                                    systems, this can present an appetizing target for hackers, and securing all systems can be 
                                    challenging.</p></div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="row">
                                <div class="col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                <div class="col-md-11"><p>Tempting targets. Hackers know that when clients 
                                    implement SAP solutions, they do so because they need to manage high-value data flows, so it’s 
                                    usually worth expending effort to hack into these 
                                    networks.</p></div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="row">
                                <div class="col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                <div class="col-md-11"><p>Poor updating procedures. SAP solutions need to be patched and updated regularly, just like any other IT solution. These patches aren’t always implemented, raising the risks associated with cyberattacks. 
                                    Companies often resist the need to patch, preferring to avoid the hassle of disrupting CRM or payment 
                                    systems – sometimes with devastating results.
                                    </p></div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="row">
                                <div class="col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                <div class="col-md-11"><p>Poor cybersecurity strategy. In some cases, 
                                    companies choose to implement costly SAP 
                                    solutions but fail to couple this with an investment 
                                    in cybersecurity. A few technicians may be familiar with the risks but security knowledge may be lacking in the wider corporate structure.</p></div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="row">
                                <div class="col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                <div class="col-md-11"><p>Careless employee behavior. This feeds into a final risk-magnifier. Many firms rely on SAP software but have outdated employee security policy, leading to lax password and general network security.</p></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6">
                    <h4 class="invisible">Pen Testing & Ethical Hacking</h4><br>
                    <p class="pl-5 mb-4">There is no doubt cybersecurity has been and will continue to be a big deal for everybody and keeping ERP applications secure is a big part of how to protect organization against both cyberattacks and other types of data fraud and theft.</p>
                    <p class="pl-5 mb-4">Sky Express offers a comprehensive solution such is 
                        Onapsis, that delivers actionable intelligence, continuous monitoring and automated governance to ensure the secure operations of your SAP systems, but also eliminates the 
                        operational risks associated with ERP maintenance and modernization with an integrated solution for SAP Basis teams to fortify the application transport process, assess custom-code and proactively identify system 
                        misconfigurations and vulnerabilities.</p>
                    <p class="pl-5 mb-4 orange-text">Ensure your SAP and Oracle EBS applications are 
                        safeguarded from internal and external cyber threats and make sure they achieve the highest possible application performance.</p>
                </div>
            </div>
        </div>


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>

        <div class="container-fluid about_partner_section" style="background-image: url('{{ asset('images/web/aboute-1.jpg') }}'); border-bottom:2px solid #f1592a;">
            <div class="row">
                <div class="container">
                    <div class="row slider-for">
                        <div class="col-12 col-md-3 text-center align-self-center">
                            <img class="img-fluid" src="{{ asset('images/web/carbon.png') }}">
                        </div>
                        <div class="col-12 col-md-3 text-center align-self-centers">
                            <img class="img-fluid" src="{{ asset('images/web/df.png') }}">
                        </div>
                        <div class="col-12 col-md-3 text-center align-self-center">
                            <img class="img-fluid" src="{{ asset('images/web/open.png') }}">
                        </div>
                        <div class="col-12 col-md-3 text-center align-self-center">
                            <img class="img-fluid" src="{{ asset('images/web/onapsis.png') }}">
                        </div>
                        <div class="col-12 col-md-3 text-center align-self-center">
                            <img class="img-fluid" src="{{ asset('images/web/avast-logo.png') }}">
                        </div>
                        <div class="col-12 col-md-3 text-center align-self-center">
                            <img class="img-fluid" src="{{ asset('images/web/eperi.png') }}">
                        </div>
                        <div class="col-12 col-md-3 text-center align-self-center">
                            <img class="img-fluid" src="{{ asset('images/web/kerio.png') }}">
                        </div>
                        <div class="col-12 col-md-3 text-center align-self-center">
                            <img class="img-fluid" src="{{ asset('images/web/security.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>



    @include("inc/footer")


@endsection