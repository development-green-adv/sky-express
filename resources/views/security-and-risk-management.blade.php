@extends("layout/master")

@section("title", "Security and Risk Management | Sky Express")

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


        <div class="container about_desc pen_services sec-risk-management-first-part">
            <div class="row">
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <h4>Security and Risk Management</h4><br>
                    <p class="pr-0 pr-md-5 mb-4">
                        Risk is a crucial element in all our lives. In every action we plan to take in our personal and 
                        professional lives, we need to analyze the risks 
                        associated with it. From a cyber security 
                        perspective, industries such as energy, healthcare, banking, insurance, retail, etc., involves a lot of risks which impedes the adoption of technology and which needs to be effectively managed.  
                    </p>
                    <p class="pr-0 pr-md-5 mb-4 orange-text">
                        Cyber risk commonly refers to any risk of financial loss, disruption or damage to the reputation of an organization resulting from the failure of its 
                        information technology systems. 
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <h4 class="invisible d-none d-md-block">Pen Testing & Ethical Hacking</h4><br class="d-none d-md-block">
                    <p class="pl-0 pl-md-5 mb-4">Whether you’re a small business or a multi-million euros corporation, cybercrime could be lurking right around the corner. In fact, more small businesses are being targeted by cyber criminals than you might imagine, and without the right preventative measures in place, yours could be next.</p>
                    <p class="pl-0 pl-md-5 mb-4">Risk comes from all sides. Determined, malicious 
                        “outsiders.” Careless or disgruntled “insiders.” Either one can wreak havoc since anyone who gains possession of them to control organization resources, disable security systems, and access vast amounts of sensitive data. 
                        Unmanaged privileged access is the common vulnerability in both cases.</p>
                </div>
            </div>
        </div>
        


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>

        <div class="container-fluid sec-and-risk-management-second-part">
            <!-- <div class="benefites_pen-testing-overlay"></div> -->
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-5">
                        <div class="text-center">
                            <p>All businesses face the risk of a cyber breach at some point during their life cyclem, <br> but understanding your rist level <br> - and where the threats could come from - can go a long way to preparing and effective <br> response.</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="text-center">
                            <p>Sky Express can analyze overall security posture of your organization, identify gaps and reduce <br> identified cyber risks.</p>
                        </div>
                        <div class="text-center mt-5">
                                <div class="get-btn">
                                    <a href="/contact">GET IN TOUCH <span class="d-block">with our experts</span></a>
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
                        <div class="col-12 col-md-3 mb-4 mb-md-0">
                            <h5>QUICK LINKS</h5>
                            <a href="/why-us">Why Us?</a><br>
                            <a href="#">Technical support</a><br>
                            <a href="/news">News</a><br>
                            <a href="/blog">Blog</a><br>
                            <a href="/careers">Careers</a><br>
                            <a href="#">Office locations</a>
                        </div>
                        <div class="col-12 col-md-3 mb-4 mb-md-0">
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
                        <div class="col-12 col-md-3 mb-4 mb-md-0">
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
                            <a href="/terms">Terms & Conditions</a> 
                            <a href="/privacy-policy">Privacy Policy</a>
                            <a href="/cookie-policy">Cookie Policy</a>
                            <a href="#">Copyright {{ date("Y") }} www.sky-express.rs</a>
                            <a href="#">All right reserved</a>
                            <a target="_blank" href="https://www.green-adv.rs">website development</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    {{-- @include("inc/footer") --}}


@endsection