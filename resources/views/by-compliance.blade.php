@extends("layout/master")

@section("title", "By Compliance | Sky Express")

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


        <div class="container about_desc pen_services by-compliance-first-part">
            <div class="row">
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <h4>By Compliance </h4><br>
                    <p class="pr-0 pr-md-5 mb-4">
                        New regulations have forced organizations around the globe to rethink data privacy and protection.
                    </p>
                </div>
                <div class="col-12 col-md-6 by-com-first-right">
                    <h4 class="invisible d-none d-md-block">Pen Testing & Ethical Hacking</h4><br class=" d-none d-md-block">
                    <p class="pl-0 pl-md-5 mb-4">Establishing an effective cybersecurity program is a major challenge for every company regardless of industry and 
                        geography. However, the challenge is much greater for businesses that operate internationally since they must comply with regulations from multiple jurisdictions and multiple regulators.</p>
                    <p class="pl-0 pl-md-5">To meet the new standards, visibility into all endpoint, 
                        network and applications activity is essential to get critical information that will reduce risk, lower liability, and prove security control assurance across the cybersecurity kill chain.</p>
                </div>
            </div>
        </div>
        


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>

        <div class="container-fluid by-compliance-second-part">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <div class="by-compliance-second-part-left">
                            <h1 class="text-white">Improve your compliance</h1>
                            <h2 class="mb-5 orange-text">Explore our cyber security compliance <br class="d-none d-md-block"> solutions</h2>
                            <p class="mb-3 text-white pr-0 pr-md-5"><b>Security Compliance</b> is primarily based on 
                                external requirements rather than organization’s own business or risk management 
                                objectives. Any obligations you have should be incorporated into your organization’s risk 
                                management plan.</p>
                            <p class="text-white pr-0 pr-md-5">Security compliance standards, like GDPR, often define minimum standards of IT governance. They do not guarantee cyber resilience or 
                                determine best practice; they merely tick the 
                                compliance.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="by-compliance-second-part-right">
                            <h1 class="text-white pl-0 pl-md-5 mb-4 mb-md-0">Choose the compliance solution that <br class=" d-none d-md-block"> your business needs</h1>
                            <h2 class="orange-text pl-5 invisible d-none d-md-block">Explore our cyber security compliance <br class=" d-none d-md-block"> solutions</h2>
                            <p class="text-white pl-0 pr-0 pl-md-5 pr-md-5">Sky Express provides security solutions that are 
                                unobtrusive, cost effective and deliver actual business value in terms of improved process efficiency,greater transparency, and increased confidence to you, your 
                                auditors and your regulators. </p>
                            <div class="text-center mt-5">
                                <div class="get-btn">
                                    <a href="/contact">GET IN TOUCH <span class="d-block">with our experts</span></a>
                                </div>
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
        

        <div class="container-fluid by-compliance-third-part">
            <div class="container">
                <div class="row by-compliance-third-part-images">
                    <div class="col-md-4">    
                        <div class="by-compliance-third-part-card align-items-center  align-items-md-start">
                            <img src="{{ asset('images/web/gdpr.png') }}" alt="">
                            <a href="/meeting-gdpr">Learn more</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="by-compliance-third-part-card align-items-center align-items-md-center">
                            <img style="margin-top: -50px;"  src="{{ asset('images/web/iso-27001.png') }}" alt="">
                            <a href="/iso-27001">Learn more</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="by-compliance-third-part-card align-items-center align-items-md-end">
                            <img src="{{ asset('images/web/sap.jpg') }}" alt="">
                            <a href="/sap-security-guidelines">Learn more</a>
                        </div>
                    </div>
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
                        <div class="col-6 col-md-3 mb-4 mb-md-0">
                            <h5>QUICK LINKS</h5>
                            <a href="/why-us">Why us?</a><br>
                            <a href="/contact">Technical support</a><br>
                            <a href="/news">News</a><br>
                            <a href="/blog">Blog</a><br>
                            <a href="/careers">Careers</a><br>
                            <a href="#">Office locations</a>
                        </div>
                        <div class="col-6 col-md-3 mb-4 mb-md-0">
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
                        <div class="col-12 text-center text-md-left col-md-3 mb-4 mb-md-0 mt-4 mt-md-0">
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
                            <div class="row">
                                <div class="col-12 col-md-4 mb-3 mb-md-0">
                                    <a class="ml-auto" href="/terms">Terms & Conditions</a>
                                    <a class="ml-auto" href="/privacy-policy">Privacy Policy</a>
                                    <a href="/cookie-policy">Cookie Policy</a>
                                </div>
                                <div class="col-12 col-md-4 mb-3 mb-md-0">
                                    <a href="#">Copyright {{ date("Y") }} www.sky-express.rs</a>
                                    <a href="#">All right reserved</a>
                                </div>
                                <div class="col-12 text-center text-md-left col-md-4">
                                    <a target="_blank" href="https://www.green-adv.rs">website development</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        



    {{-- @include("inc/footer") --}}


@endsection