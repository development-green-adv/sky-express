@extends("layout/master")

@section("title", "Eperi | Sky Express")

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


        <div class="container about_desc eperi-first-part">
            <div class="row">
                <div class="col-12 mb-5">
                    <img style="width: 300px;" src="{{ asset('images/web/eperi-page-logo.png') }}" alt="">
                </div>
                {{-- <div class="col-12 mb-4">
                    <h4>Security, performance and privacy solutions for consumer and business users</h4><br>
                </div> --}}
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <p class="pr-5 mb-4">
                            Eperi is a leading provider of cloud data protection solutions (CDP). It’s pioneering solutions provides customers with the highest standards of data security and compliance for widespread cloud services, such as Office 365 and Salesforce, as well as databases and enterprise applications. 
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <div class="df-labs-right-first-part">
                        <p class="mb-5 pl-5">
                                Eperi solutions help ensure that internal and external privacy and compliance requirements are enforced 
                                internally and centrally and that customers can retain sole control over all their privacy processes. 
                                
                        </p>
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
                    <div class="col-12 text-center">
                        <h4 class="mb-4 text-white">DATA PROTECTION, GDPR COMPLIANCE, USABILITY.</h4>
                        <h4 class="orange_text">Everything from a single source with the eperi Gateway.</h4>
                    </div>
                    <div class="col-md-6">
                        <div class="df-labs-second-part-left eperi-page-second-part-left">
                            <h4  class="mb-4 text-white pl-5 ">Eperi guarantees:</h4>
                            <ul class="eperi-first-part-ul">
                                    <li class="mb-3">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                            </div>
                                            <div class="col-md-11">
                                                <p>Real time data encryption;</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                            </div>
                                            <div class="col-md-11">
                                                <p>Only authorized users can access protected data;</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                            </div>
                                            <div class="col-md-11">
                                                <p>Completely stand-alone security system without needs for any  adaptation of existing application, database or interface;</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                            </div>
                                            <div class="col-md-11">
                                                <p>German quality;</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="df-labs-second-part-right carbon-black-second-part-right avast-page-second-part avast-page-second-part-right">
                            <div class="avast-page-second-part-card">
                                <h4 class="text-white mb-4 pl-5">eperi SECURE YOUR DATA IN THE CLOUD.</h4>
                                <p class="pl-5 pr-5">
                                        Office applications, CRM, data storage or HR software: more than 65 % of all companies use cloud applications to organize work more cost-effectively, efficiently and flexibly. How do you protect your business-critical data from unauthorized access? And do you comply with data protection regulations, 
                                        for example for customer, employee or development data, without exceptions? eperi Cloud Data Protection is the simple, secure encryption solution for all SaaS and web applications to master these challenges.
                                        
                                </p>
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

        <div class="container-fluid avast-third-part eperi-third-part">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h4 class="mb-5 text-white">HOW DOES YOUR ORGANIZATION BENEFIT <br> FROM EPERI CLOUD DATA PROTECTION?</h4>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3">
                        <div class="eperi-third-part-card">
                            <img class="img-fluid office-365"  src="{{ asset('images/web/eperi-card-1.png') }}" alt="">
                            <h6 class="orange_text mt-5 mb-3 pl-4">EPERI CLOUD DATA PROTECTION FOR OFFICE 365</h6>
                            <p class="pr-3 pl-4">Encrypt and tokenize critical data in mail, calendars and other Office 365 
                                    applications. Only you can read your data.
                                    </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="eperi-third-part-card">
                            <img class="img-fluid" src="{{ asset('images/web/eperi-card-2.png') }}" alt="">
                            <h6 class="orange_text mt-5 mb-2 pl-4">EPERI CLOUD DATA PROTECTION FOR SALESFORCE</h6>
                            <p class="pr-3 pl-4">Eperi ensures that your data is never accessible to 
                                    unauthorized third parties. Data protection at rest, in use and in transit.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="eperi-third-part-card">
                            <img class="img-fluid" src="{{ asset('images/web/eperi-card-3.png') }}" alt="">
                            <h6 class="orange_text mt-5 mb-2 pl-4">EPERI CLOUD DATA PROTECTION FOR WEB APPLICATIONS</h6>
                            <p class="pr-3 pl-4">Central point of control for compliance: use the unique flexibility of the eperi 
                                    platform to protect all of your cloud apps.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="eperi-third-part-card text-center">
                            <img class="img-fluid eperi-gateway-logo" src="{{ asset('images/web/eperi-card-4.png') }}" alt="">
                            <h6 class="orange_text mt-4 mb-4 eperi-gateway-title">THE EPERI GATEWAY</h6>
                            <p class="pr-3 pl-4">The eperi Gateway is a 
                                    flexible template 
                                    architecture covering the most important functions, such as KMS, IAM, 
                                    pseudonymization.</p>
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