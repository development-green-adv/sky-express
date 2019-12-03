@extends("layout/master")

@section("title", "Onapsis | Sky Express")

@section("content")

    @include("inc/header")

        <div class="container-fluid top_section" style="background-image: url('{{ asset('images/web/df-labs.png') }}'); background-repeat: no-repeat; background-color: #0b0b0d;">
            <div class="row">
                <div class="about_headline" data-aos="fade-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="text-white">PRODUCTS</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container about_desc onapsis-first-page">
            <div class="row">
                <div class="col-12 mb-5">
                    <img style="width: 300px;" src="{{ asset('images/web/onapsis-page-logo.png') }}" alt="">
                </div>
                <div class="col-12 mb-4">
                    <h4>Cyber security and compliance solutions for cloud and on-premise ERP <br class="d-none d-md-block"> 
                            and mission critical business applications</h4><br>
                </div>
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <p class="pr-0 pr-md-5 mb-4">
                        Critical business applications such as SAP®, SAP S/4HANA® and Oracle® EBS are the engines that drive the world’s economy. 
                        It’s critical that these applications are stable, secure against internal and external cyber threats and compliant with regulations. 
                    </p>
                    <p class="pr-0 pr-md-5 mb-4">
                        That’s why more than 300 of the world’s leading 
                        organizations protect their most critical 
                        systems with Onapsis change assurance and 
                        cybersecurity solutions today, and as they 
                        transition to the cloud-based future.
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <div class="df-labs-right-first-part">
                        <h5 class="pl-0 pl-md-5 mb-4">ONAPSIS PROTECTS</h5>

                        <h5 class="pl-0 pl-md-5 mb-2 orange_text">SAP</h5>
                        <p class="pl-0 pl-md-5 mb-4">Inspect, control and secure SAP NetWeaver®, ABAP®, J2EE, SAP HANA® and S/4HANA® platforms to ensure stability and performance. Continuously monitor your SAP infrastructure whether on-prem or in a private, public or hybrid cloud environment.
                            </p>

                        <h5 class="pl-0 pl-md-5 mb-2 orange_text">ORACLE E-BUSINESS SUITE</h5>
                        <p class="pl-0 pl-md-5">Automate monitoring and protection to gain visibility into blind spots and get actionable information to keep these systems compliant and protected </p>
                    </div>
                </div>
            </div>
        </div>

        

        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>


        <div class="container-fluid df-labs-second-part onapsis-second-part">
            <div class="df-labs-second-part-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3>ONAPSIS SECURITY PLATFORM</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                            <ul class="onapsis-second-part-ul">
                                    <li class="mb-3">
                                            <div class="row">
                                                <div class="col-2 col-md-1">
                                                    <img class="invisible" src="{{ asset('images/web/correct.svg') }}" alt="">
                                                </div>
                                                <div class="col-10 col-md-11">
                                                    <p class="orange_text">AUTOMATE</p>
                                                </div>
                                            </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="row">
                                            <div class="col-2 col-md-1">
                                                <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                            </div>
                                            <div class="col-10 col-md-11">
                                                <p>Continuous vulnerability scanning and alerts proactively identify and bring attention to misconfigurations and outside threats.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="row">
                                            <div class="col-2 col-md-1">
                                                <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                            </div>
                                            <div class="col-10 col-md-11">
                                                <p>Improve work flows to reduce resources committed to audit and compliance data tasks.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="row">
                                            <div class="col-2 col-md-1">
                                                <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                            </div>
                                            <div class="col-10 col-md-11">
                                                <p>Compensating controls help satisfy regulators and maintain compliance between audits.</p>
                                            </div>
                                        </div>
                                    </li>
                            </ul>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-12">
                                <ul class="onapsis-second-part-ul">
                                        <li class="mb-3">
                                                <div class="row">
                                                    <div class="col-2 col-md-1">
                                                        <img class="invisible" src="{{ asset('images/web/correct.svg') }}" alt="">
                                                    </div>
                                                    <div class="col-10 col-md-11">
                                                        <p class="orange_text">INTEGRATE</p>
                                                    </div>
                                                </div>
                                        </li>
                                        <li class="mb-3">
                                            <div class="row">
                                                <div class="col-2 col-md-1">
                                                    <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                                </div>
                                                <div class="col-10 col-md-11">
                                                    <p>Implementation and customer success services accelerate the maturity of an enterprise’s cybersecurity organization.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-3">
                                            <div class="row">
                                                <div class="col-2 col-md-1">
                                                    <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                                </div>
                                                <div class="col-10 col-md-11">
                                                    <p>Custom data links feed your existing SIEM tools, including Splunk and QRadar, to provide a unified view of risk.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-3">
                                            <div class="row">
                                                <div class="col-2 col-md-1">
                                                    <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                                </div>
                                                <div class="col-10 col-md-11">
                                                    <p>SAP-certified add-on assures BASIS teams of system compatibility.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                                <ul class="onapsis-second-part-ul">
                                        <li class="mb-3">
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <img class="invisible" src="{{ asset('images/web/correct.svg') }}" alt="">
                                                    </div>
                                                    <div class="col-md-11">
                                                        <p class="orange_text">ANTICIPATE</p>
                                                    </div>
                                                </div>
                                        </li>
                                        <li class="mb-3">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                                </div>
                                                <div class="col-md-11">
                                                    <p>Onapsis Research Labs provides industry-defining threat intelligence to prepare our customers for what’s next.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-3">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                                </div>
                                                <div class="col-md-11">
                                                    <p>Research feeds development of new features to address emerging needs.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-3">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                                </div>
                                                <div class="col-md-11">
                                                    <p>More than 300 SAP and Oracle vulnerabilities reported to date.</p>
                                                </div>
                                            </div>
                                        </li>
                            </ul>
                        </div>
                    </div>
    


                <div class="row onapsis-second-part-card-wrapper">
                    <div class="col-md-4">
                        <div class="onapsis-second-part-card text-center">
                            <img src="{{ asset('images/web/onapsis-second-logo-1.png') }}" alt="">
                            <h5>AUTOMATE</h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="onapsis-second-part-card text-center">
                            <img src="{{ asset('images/web/onapsis-second-logo-2.png') }}" alt="">
                            <h5>INTEGRATE</h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="onapsis-second-part-card text-center">
                            <img src="{{ asset('images/web/onapsis-second-logo-3.png') }}" alt="">
                            <h5>ANTICIPATE</h5>
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

                                            <a style="display: block; margin-top: 20px;" class="link_without" href="/single-news/{{ $new->alias }}">READ MORE</a>
                                        </div>
                                        
                                    @endforeach
                                @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>


    @include("inc/footer")


@endsection