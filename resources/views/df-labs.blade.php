@extends("layout/master")

@section("title", "Df labs | Sky Express")

@section("content")

    @include("inc/header")

        <div class="container-fluid top_section" style="background-image: url('{{ asset('images/web/df-labs.png') }}'); background-repeat: no-repeat; background-color: #0b0b0d;">
            <div class="row">
                <div class="about_headline" data-aos="fade-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="text-white">DFLABS</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container about_desc df-labs-first-part">
            <div class="row">
                <div class="col-12 mb-5">
                    <img src="{{ asset('images/web/dflabs-logo.png') }}" alt="">
                </div>
                <div class="col-12 col-md-5 mb-4 mb-md-0">
                    <h4>Automated incident response and <br> orchestration security software </h4><br>
                    <p class="pr-5">
                        DFLabs is the pioneer in Security Orchestration, Automation and Response (SOAR) Technology,
                        leveraging your existing security products to dramatically reduce the response and remediation gap
                        caused by limited resources and the increasing volume of threats and incidents.
                    </p>
                </div>
                <div class="col-12 col-md-7">
                    <div class="df-labs-right-first-part">
                        <ul>
                            <li><img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt=""> Minimize Incident resolution time by 90%</li>
                            <li><img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt=""> Improve Analyst efficiency by 80%</li>
                            <li><img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt=""> Increase handled incidents 300%</li>
                            <li><img class="mr-4 invisible" src="{{ asset('images/web/correct.svg') }}" alt="">Automated, Orchestrate & Measure</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>


        <div class="container-fluid df-labs-second-part">
            <div class="df-labs-second-part-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="df-labs-second-part-left ">
                            <h1 class="mb-5">DFLabs' Security Orchestration, <br> Automation and Response Platform</h1>
                            <p><b>DFLabs IncMan SOAR</b> is the <b>only</b> Security Orchestration, Automation and Response (SOAR) platform
                                capable of full incident lifecycle automation, that includes built-in, automated threat intelligence
                                gathering, risk assessment, triage and notification, context enrichment, hunting and investigating,
                                threat containment and more.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="df-labs-second-part-right text-center">
                            <img src="{{ asset('images/web/df-labs-second-part-right.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>

        <div class="container-fluid security_solutions df-labs-third-part-page">
            <div class="row">
                <div class="container">
                    <div class="col-12 text-center">
                        <button class="btn btn-default orange_btn">Award-Winning SOAR Platform</button>
                    </div>
                    <div class="col-12">
                        <div class="df-labs-third-part">
                            <div class="df-labs-third-part-card">
                                <img src="{{ asset('images/web/df-labs-third-part-logo-1.png') }}" alt="">
                                <p>Top 100 in Europe</p>
                            </div>
                            <div class="df-labs-third-part-card">
                                <img class="mb-auto" src="{{ asset('images/web/df-labs-third-part-logo-2.png') }}" alt="">
                                <p>Best Security Orchestration <br> Automation and Response</p>
                            </div>
                            <div class="df-labs-third-part-card">
                                <img class="mb-auto" src="{{ asset('images/web/df-labs-third-part-logo-3.png') }}" alt="">
                                <p>Security Automation <br> and Orchestration </p>
                            </div>
                            <div class="df-labs-third-part-card">
                                <img class="mb-auto" src="{{ asset('images/web/df-labs-third-part-logo-4.png') }}" alt="">
                                <p>Best Continuous <br> Monitoring & Mitigation</p>
                            </div>
                            <div class="df-labs-third-part-card">
                                <img class="mb-auto" src="{{ asset('images/web/df-labs-third-part-logo-5.png') }}" alt="">
                                <p>Security Orchestration, <br> Automation and Response</p>
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

        <div class="container-fluid df-labs-fourth-part">
            {{-- <div class="df-labs-fourth-part-overlay"></div> --}}
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="df-labs-fourth-part-left">
                            <h2 class="mb-5">Key Features & Capabilities <br> The DFLabs Difference</h2>
                            <p class="mb-4 pr-5">IncMan includes many bidirectional integrations with a variety of product categories including SIEM,
                                network defense, endpoint protection and threat intelligence, chosen to broaden the orchestration
                                and automation capabilities of companies.</p>
                            <p class="pr-5">IncMan has been designed with industry standards, regulatory frameworks and best practices in
                                mind, supporting ISO, GDPR, NIST and SEC regulations amongst others.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="df-labs-fourth-part-right">
                            <ul>
                                <li class="mb-4"><img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt=""> Automation & Orchestration</li>
                                <li class="mb-4"><img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt=""> Hunting & Investigation</li>
                                <li class="mb-4"><img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt=""> Incident Management</li>
                                <li class="mb-4"><img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt=""> Flexible Integrations & Event Parsing</li>
                                <li class="mb-4"><img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt=""> Forensic Evidence Management</li>
                                <li class="mb-4"><img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt=""> Reporting & KPIs</li>
                                <li class="mb-4"><img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt=""> Knowledge Transfer & Machine Learning</li>
                                <li><img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt=""> Community Portal & Community Edition</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>


        
        <div class="container-fluid df-labs-fifth-part">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="df-labs-fifth-part-left">
                            <h2 class="mb-4">Complete and Comprehensive <br> SOAR Platform</h2>
                            <p class="mb-4 pr-5">DFLabs covers the entire spectrum of security orchestration, automation and response components
                                as outlined by Gartner, with a unique combination of features and capabilities, driven through
                                continuous improvement and innovation.</p>
                            <p class="mb-4 pr-5">IncMan SOAR is the only platform to offer full incident
                                response lifecycle management with machine learning and threat hunting.</p>
                            <p class=" pr-5">Acting as a force multiplier, it enables security teams to do more with less, empowering security
                                analysts, while ensuring organizations stay one step ahead of any potential threat.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="df-labs-fifth-part-right text-center">
                            <img src="{{ asset('images/web/df-labs-fifth-part-right.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>


        <div class="container-fluid  df-labs-sixth-part">
            <div class="df-labs-sixth-part-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="df-labs-sixth-part-title text-center">
                            <h1 class="orange_text">Demonstrating Compliance</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="df-labs-sixth-part-middle-left">
                            <img src="{{ asset('images/web/df-labs-sixth-part-middle-left.png') }}" alt="">
                            <div><p>Intergrated GDPR incident response and <br>breach notification playbooks</p></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="df-labs-sixth-part-middle-right">
                            <img src="{{ asset('images/web/df-labs-sixth-part-middle-right.png') }}" alt="">
                            <div><p>Formalized, repeatable and enforceable incident <br> response workflows form GDPR</p></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="df-labs-sixth-part-bottom text-center">
                            <h4>How DFLabs Can Help You Meet GDPR Requirements.</h4>
                            <p>DFLabs’ SOAR solution provides capabilities to automate and prioritize incident response and related
                                enrichment and containment tasks, distribute appropriate notifications and implement an incident
                                response plan (IRP) in case of a potential data breach. IncMan SOAR handles different stages of the
                                incident response and breach notification process, including providing advanced reporting
                                capabilities with appropriate metrics and the ability to gather or share intelligence securely with
                                third parties.</p>
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