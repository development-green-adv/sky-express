@extends("layout/master")

@section("title", "Logpoint | Sky Express")

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


        <div class="container about_desc logpoint-first-part">
            <div class="row">
                <div class="col-12 mb-5">
                    <img style="width: 300px;" src="{{ asset('images/web/logpoint-page-logo.png') }}" alt="">
                </div>
                <div class="col-12 mb-4">
                    <h4>Next generation security information and event management platform (SIEM)</h4><br>
                </div>
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <p class="pr-5 mb-4">
                            LogPoint leverages advanced analytics, 
                            accelerated by machine learning, to improve your cybersecurity posture and efficiently 
                            automate relevant responses to both internal and external threats.
                    </p>
                    <p class="pr-5 mb-4">
                            The LogPoint’s SIEM system is designed from the ground up to be simple, flexible, and 
                            scalable, providing streamlined design, 
                            deployment, and integration tools to open the use of a network security tool up to all 
                            businesses. This means that the architecture can be continuously extended with additional 
                            functionality without the need for a full major release, to continue to support your business’s growing and changing needs.
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <div class="df-labs-right-first-part">
                        <h5 class="pl-5 mb-4">The LogPoint system is built on a set <br> of specific tenants:</h5>
                        <ul class="logpoint-ul-first-part">
                            <li>
                                <div class="row">
                                    <div class="col-md-1"> <img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                    <div class="col-md-11"><p>No company should be limited by the amount of data they can ingest into a SIEM system</p></div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                        <div class="col-md-1"> <img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                        <div class="col-md-11"><p>Simplified architectural principles to enable faster and more efficient software deployments</p></div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-1"> <img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                    <div class="col-md-11"><p>World-class support available 24×7 to help 
                                            customers get the most value from their SIEM system</p></div>
                                </div>
                            </li>
                        </ul>

                        <h5 class="pl-5 mb-4 orange_text">LogPoint ranked #1 and named Leader 
                                in the 2019 SoftwareReviews SIEM Data Quadrant</h5>
                    </div>
                </div>
            </div>
        </div>

        

        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>


        <div class="container-fluid df-labs-second-part carbon-black-second-part">
            <div class="df-labs-second-part-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="logpoint-page-second-part-left">
                            <h5 class="mb-5">With LogPoint, you can quickly troubleshoot potential issues via:</h5>
                            <ul class="logpoint-ul-second-part">
                                <li class="mb-4">
                                    <div class="row">
                                        <div class="col-md-1"> <img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                        <div class="col-md-11"><p class="pr-5">Rapid analytic insight into incidents across the infrastructure;</p></div>
                                    </div>
                                </li>
                                <li class="mb-4">
                                    <div class="row">
                                            <div class="col-md-1"> <img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                            <div class="col-md-11"><p class="pr-5">Removed dependencies of specific personnel with restricted system access;</p></div>
                                    </div>
                                </li>
                                <li class="mb-4">
                                    <div class="row">
                                        <div class="col-md-1"> <img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                        <div class="col-md-11"><p class="pr-5">Big data analytics for sharp, easy analysis of all issues and 
                                                incidents related all aspects of information system 
                                                architecture – network, system, services and applications;</p></div>
                                    </div>
                                </li>
                                <li class="mb-4">
                                    <div class="row">
                                        <div class="col-md-1"> <img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                        <div class="col-md-11"><p class="pr-5">Reduction of the number of false positives and eliminating the hassle of maintaining and developing expert rules;</p></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-1"> <img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                        <div class="col-md-11"><p class="pr-5">Forensic investigation with the execution of custom 
                                                playbooks should an incident arise.</p></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="logpoint-page-second-part-left">
                            <h5 class="invisible mb-5">With LogPoint, you can quickly troubleshoot potential issues via:</h5>
                            <p class="mb-4 pr-5"><span class="orange_text">Ease of use</span> - Lightning-fast analytics and rich 
                                    reporting without requiring an advanced skillset.</p>
                            <p class="mb-4 pr-5"><span  class="orange_text">Cost management</span> - No extra cost related to the growth of the company’s data volume or how many events per second you receive.</p>
                            <p class="pr-5"><span  class="orange_text">Unmatched certification</span> - Has EAL 3+ certification. It’s required by NATO and in critical infrastructure organizations like the military, intelligence 
                                    agencies, utility companies and telcos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid rose_section">
            <div class="row">
            
            </div>
        </div>

        <div class="container-fluid logpoint-page-third-part">
            <div class="row">
                <div class="container text-center">
                    <button class="btn btn-default orange_btn">Key LogPoint benefits</button>
                </div>
            </div>
            <div class="container">
                <div class="row logpoint-cards-wrapper">
                    <div class="col-md-3">
                        <div class="logpoint-third-card">
                            <img src="{{ asset('images/web/logpoint-third-part-1.png') }}" alt="">
                            <p><b>Single taxonomy</b></p>
                            <p>LogPoint ensures single 
                                    taxonomy for normalisation 
                                    of log data, enabling an easy-to-use search function for the creation of 
                                    dashboards, alerts and 
                                    reports. By translating all log files into a simplified single taxonomy, searching across a wide variety of log sources is made easier and more 
                                    efficient.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="logpoint-third-card">
                            <img src="{{ asset('images/web/logpoint-third-part-2.png') }}" alt="">
                            <p><b>Simplified role-based access control</b></p>
                            <p>Administrative user access is bound into AD via LDAP for ease of permission definition. Group permissions to the system are aligned with a role based approach to 
                                    administrative rights, giving full control over access to both the log repositories and the dashboard usage.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="logpoint-third-card">
                            <img src="{{ asset('images/web/logpoint-third-part-3.png') }}" alt="">
                            <p><b>Full HA deployment</b></p>
                            <p>The LogPoint HA architecture allows synchronisation of both index and event data in a fault tolerant fashion, 
                                    providing a robust integrity to the data storage. 
                                    Any recovery has a very speedy recovery point 
                                    objective whilst the platform operates in failover mode.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="logpoint-third-card">
                            <img src="{{ asset('images/web/logpoint-third-part-4.png') }}" alt="">
                            <p><b>Agile platform design</b></p>
                            <p>The LogPoint system is agile in design with an intuitive 
                                    interface, built for 
                                    administrators with network security tool experience or ad-hoc users alike.
                                    </p>
                        </div>
                    </div>
                </div>
                <div class="row logpoint-cards-wrapper">
                    <div class="col-md-3">
                        <div class="logpoint-third-card">
                            <img src="{{ asset('images/web/logpoint-third-part-5.png') }}" alt="">
                            <p><b>Flexible / scalable architecture</b></p>
                            <p>LogPoint architecture is entirely flexible and scales linearly for large and complex 
                                    implementations. The network security tool can be deployed in either physical or virtual 
                                    environments and on premise or in the cloud</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="logpoint-third-card">
                            <img src="{{ asset('images/web/logpoint-third-part-6.png') }}" alt="">
                            <p><b>Unique license model</b></p>
                            <p>Fair and holistic license model, no hidden extra’s due to the transparent license structure. Adopting a node based model rather the EPS/MPS basis that many other SIEM vendors models follow for managed 
                                    network security.
                                    </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="logpoint-third-card">
                            <img src="{{ asset('images/web/logpoint-third-part-7.png') }}" alt="">
                            <p><b>Data Privacy mode</b></p>
                            <p>By utilising Data Privacy Mode, it is possible to ensure the context of the log files can be included on multinational searches, 
                                    without compromising the need to ensure the information 
                                    remains secure. 
                                    This functionality is particularly beneficial where data must remain</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="logpoint-third-card">
                            <img src="{{ asset('images/web/logpoint-third-part-8.png') }}" alt="">
                            <p><b>Streamlined normalisation 
                                    architecture</b></p>
                            <p>Plugin architecture, enables 
                                    dynamic development and custom enhancement. 
                                    Being vendor agnostic, logs can be collected using varying 
                                    methods and sources. If a plugin is not present prior to 
                                    deployment, LogPoint, will create it. 
                                    Development is not charged for 
                                    commercial-off-the-shelf 
                                    product.</p>
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
                            <div class="col-12 col-md-4 text-left solutions_item">
                                <img class="img-fluid" src="{{ asset('images/web/1.png') }}" alt="">
                                <h6>DFLabs Awarded with Two U.S. Patents for Its Pioneering SOAR technology</h6>
                                <p style="margin-top: 15px; margin-bottom: 15px;">
                                    Sky Express partner company, DFLabs, the award-winning Security Orchestration. Automation and
                                    Response (SOAR) vendor, annouced it has been...
                                </p>
                                <a class="link_without" href="#">READ MORE</a>
                            </div>
                            <div class="col-12 col-md-4 text-left solutions_item">
                                <img class="img-fluid" src="{{ asset('images/web/2.png') }}" alt="">
                                <h6>DFLabs Awarded with Two U.S. Patents for Its Pioneering SOAR technology</h6>
                                <p style="margin-top: 15px; margin-bottom: 15px;">
                                    Sky Express partner company, DFLabs, the award-winning Security Orchestration. Automation and
                                    Response (SOAR) vendor, annouced it has been...
                                </p>
                                <a class="link_without" href="#">READ MORE</a>
                            </div>
                            <div class="col-12 col-md-4 text-left solutions_item">
                                <img class="img-fluid" src="{{ asset('images/web/3.png') }}" alt="">
                                <h6>DFLabs Awarded with Two U.S. Patents for Its Pioneering SOAR technology</h6>
                                <p style="margin-top: 15px; margin-bottom: 15px;">
                                    Sky Express partner company, DFLabs, the award-winning Security Orchestration. Automation and
                                    Response (SOAR) vendor, annouced it has been...
                                </p>
                                <a class="link_without" href="#">READ MORE</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    @include("inc/footer")


@endsection