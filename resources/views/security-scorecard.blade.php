@extends("layout/master")

@section("title", "Security Scorecard | Sky Express")

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


        <div class="container about_desc security-scoredcard-first-part">
            <div class="row">
                <div class="col-12 mb-5">
                    <img src="{{ asset('images/web/security-scorecard.png') }}" alt="">
                </div>

                <div class="row">
                    <div class="col-12 mb-4">
                        <h4>Security ratings and continuous risk monitoring for vendor and third party risk assessment</h4><br>
                    </div>
                    <div class="col-12  col-md-6">
                        <div class="row">
                            <div class="col-12 mb-4 mb-md-0">
                                <p class="mb-4 pr-5">
                                        Security Scorecard enables organizations of all types and sizes, in every industry, to discover and solve complex cybersecurity, compliance and risk 
                                        management challenges. 
                                </p>
                                <p class="mb-4 pr-5">
                                        This product has some extremely useful unique 
                                        features that any organization can leverage. 
                                        Utilizing the score planning feature enables you to quickly and efficiently prioritize the issues that matter most to your organization. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="df-labs-right-first-part">
                            <h4 class="mb-4 pl-5">PLATFORM</h4>
                            <p class="mb-4 pl-5">Accurate security ratings, advanced data analytics, and actionable insights.
                                </p>
                            <p class="pl-5">Discover and remediate your IT Infrastructure risk as well as cyber security risk in your vendor and business partner environment. Work collaboratively with third parties to reduce risk and improve security posture.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>


        <div class="container-fluid df-labs-second-part carbon-black-second-part open-systems-second-part">
            <div class="df-labs-second-part-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-4 pr-5">SecurityScorecard enables users to view and 
                            continuously monitor security ratings, easily add 
                            vendors or partner organizations, and report on the 
                            cyberhealth of their ecosystems.
                         </p>
                        <p class="pr-5">The platform automatically generates a 
                            recommended action plan for issue remediation in order to achieve a “target” letter grade for customers and their vendor and partner organizations. 
                        </p>
                        
                    </div>
                    <div class="col-md-6">
                        <p class="mb-4 pl-5">Security Scorecard is a powerful tool for organsations with extensive external supplier and vendor networks:</p>
                        <ul class="security-scorecard-ul">
                            <li class="mb-4">
                                <div class="row">
                                    <div class="col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                    <div class="col-md-11"><p><span>SECURITY RATINGS</span> - It all starts with a score</p></div>
                                </div>
                            </li>
                            <li class="mb-4">
                                <div class="row">
                                    <div class="col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                    <div class="col-md-11"><p><span>ATLAS</span> - A Revolutionary Questionnaire and Evidence Exchange Platform</p></div>
                                </div>
                            </li>
                            <li class="mb-4">
                                <div class="row">
                                    <div class="col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                    <div class="col-md-11"><p><span>THREATMARKET</span> - The intelligence behind the score</p></div>
                                </div>
                            </li>
                            <li class="mb-4">
                                <div class="row">
                                    <div class="col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                    <div class="col-md-11"><p><span>API CONNECTORS</span> - Data and analytics are a pillar of our platform</p></div>
                                </div>
                            </li>
                        </ul>
                        <div class="security-scorecard-second-right-imgs pl-5">
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
                    <h1 class="orange_text">SOLUTIONS</h1>
                    <h3>Cybersecurity Risk Rating & Management Solutions</h3>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="security-scorecard-podnaslov">
                            <p class="mb-4 orange_text">Implement the capabilities you need to build a more secure ecosystem.</p>
                            <p  class="mb-5 text-white">SecurityScorecard enables organizations of all types and sizes, in every industry, to discover and solve complex cyber 
                                    security, compliance and risk management challenges.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="security-scorecard-third-left mb-4">
                            <p class="orange_text">Vendor Risk Management</p>
                            <p class="pr-5">SecurityScorecard provides instant visibility into the security posture of vendors and business partners across the entire ecosystem.</p>
                        </div>
                        <div class="security-scorecard-third-left  mb-4">
                            <p class="orange_text">Threat Reconnaissance</p>
                            <p class="pr-5">SecurityScorecard collect and analyze threat signals from across the globe to deliver the most accurate 
                                    security ratings and detailed findings possible.</p>
                        </div>
                        <div class="security-scorecard-third-left">
                            <p class="orange_text">Self Assessment</p>
                            <p class="pr-5">This platform empowers organizations to discover, monitor, and report on the cyberhealth of 
                                    IT infrastructure from the outside in -- to see what 
                                    a hacker sees.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="security-scorecard-third-left mb-4">
                            <p class="orange_text pl-5">Cyber Insurance</p>
                            <p class="pl-5">SecurityScorecard empower enterprises to take control of their risk profiles while giving insurers visibility into the cyberhealth of their policyholders.</p>
                        </div>
                        <div class="security-scorecard-third-left mb-4">
                            <p class="orange_text pl-5">Mergers & Acquisitions</p>
                            <p class="pl-5">SecurityScorecard help investors avoid getting blindsided by hidden risks and compliance issues associated with M&A targets.</p>
                        </div>
                        <div class="security-scorecard-third-left mb-4">
                            <p class="orange_text pl-5">Compliance</p>
                            <p class="pl-5">This platform help organizations prove and maintain compliance with leading standards and regulations 
                                    including PCI, NIST, SOX, GDPR, and many others.</p>
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