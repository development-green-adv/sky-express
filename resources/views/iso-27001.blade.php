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
                    <h4>ISO 27001</h4><br>
                    <p class="pr-5 mb-4">
                        ISO/IEC 27001 is the best-known standard in the family providing requirements for an information security management system (ISMS). Using this family of standards will help your organization manage the security of assets such as financial 
                        information, intellectual property, employee details or information entrusted to you by third parties. 
                    </p>
                    <p class="pr-5 mb-4">
                        ISO 27001 goes considerably further than Cyber 
                        Essentials, providing 114 security controls that 
                        encompass people, processes and technology. 
                        The standard defines how to maintain an 
                        information security management system in order to ensure confidentiality, integrity and availability of information.
                    </p>
                    <h5 class="mb-4 pr-5">ISO 27001 will help reduce information security and data protection risks to your organization</h5>
                </div>
                <div class="col-12 col-md-6">
                    <h4 class="invisible">Pen Testing & Ethical Hacking</h4><br>
                    <p class="pl-5 mb-4">The ISO 27001 standard provides a framework for 
                        information security management best practice that helps organisations to:</p>
                    <ul class="iso-2700-list">
                        <li class="mb-4 pl-5">
                            <img class="pr-2" src="{{ asset('images/web/correct.svg') }}" alt=""> Protect client and employee information
                        </li>
                        <li class="mb-4 pl-5">
                            <img class="pr-2" src="{{ asset('images/web/correct.svg') }}" alt=""> Manage risks to information security effectively
                        </li>
                        <li class="mb-4 pl-5">
                            <img class="pr-2" src="{{ asset('images/web/correct.svg') }}" alt=""> Achieve compliance with regulations such as the
                        </li>
                        <li class="mb-4 pl-5">
                            <img class="pr-2" src="{{ asset('images/web/correct.svg') }}" alt=""> European Union General Data Protection Regulation (EUGDPR)
                        </li>
                        <li class="mb-4 pl-5">
                            <img class="pr-2" src="{{ asset('images/web/correct.svg') }}" alt=""> Protect the company's brand image
                        </li>
                    </ul>
                    <p class="pl-5 mb-4">The standard is especially suitable where the protection of information is critical, such as in the banking, financial, health, public and IT sectors. The standard is also applicable to organisations which manage high volumes of data, or 
                        information on behalf of other organisations such as data centres and IT outsourcing companies.</p>
                    <h5 class="mb-4 pl-5">Are you ISO 27001 compliant?</h5>
                    <p class="pl-5 mb-4">At Sky Express, we offer compliance analysis with 
                        regulations like ISO 2700, GDPR, PCI DSS, etc. to ensure that your company is operating within the relevant laws and 
                        regulations.</p>
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