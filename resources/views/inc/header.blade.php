<div class="container-fluid header">
    <div class="row">
        <div class="container-header">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <a class="navbar-brand" href="/"><img src="{{ asset('images/web/logo-sky-express.png') }}" alt=""></a>
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar top-bar"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item position-relative">
                                    <a class="nav-link" href="#">Products & Solutions</a><span>|</span>
                                    <div class="dropdown-menu">
                                        <ul class="dropdown-menu-ul">
                                            <li><a href="/all-products">
                                                    <p>PRODUCTS</p>
                                                </a></li>
                                            <li><a href="/carbon-black">Carbon Black</a></li>
                                            <li><a href="/df-labs">DF Labs</a></li>
                                            <li><a href="/logpoint">Logpoint</a></li>
                                            <li><a href="/onapsis">Onapsis</a></li>
                                            <li><a href="/open-systems">Open Systems</a></li>
                                            <li><a href="/eperi">Eperi</a></li>
                                            <li><a href="/avast">Avast</a></li>
                                            <li><a href="/security-scorecard">Security Scorecard</a></li>
                                            <li><a href="/kerio">Kerio</a></li>
                                            {{-- <a href="#">View All</a> --}}
                                        </ul>
                                        <ul class="dropdown-menu-ul">
                                            <li><a href="/all-solutions">
                                                    <p>SOLUTIONS</p>
                                                </a></li>
                                            <li class="position-relative"><a href="/by-compliance">By Compliance <img class="ml-4" src="{{ asset('images/web/arrow-right.svg') }}" alt=""></a>
                                                <ul class="dropdown-sub-menu">
                                                    <li class="invisible"><a href="/all-solutions">
                                                            <p>SOLUTIONS</p>
                                                        </a></li>
                                                    <li class="gdpr-link"><a href="/meeting-gdpr">Meeting GDPR</a></li>
                                                    <li><a href="/iso-27001">ISO 27001</a></li>
                                                    <li><a href="/sap-security-guidelines">SAP Security Guidelines</a></li>
                                                </ul>
                                            </li>
                                            <li class="position-relative"><a href="/solutions">Industry Solutions</a></li>
                                            <li><a href="/security-and-risk-management">Security & Risk Management</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item position-relative">
                                    <a class="nav-link" href="#">Services & Support</a><span>|</span>
                                    <div class="dropdown-menu">
                                        <ul class="dropdown-menu-ul">
                                            <p>SERVICES</p>
                                            <li><a href="/security-analysis">Security Analysis</a></li>
                                            <li><a href="/compliance-analysis">Compliance Analysis</a></li>
                                            <li><a href="/managed-security-services">Management Security Services (MSSP)</a></li>
                                            <li><a href="/information-security-management-system">Security Management Systems (ISMS)</a></li>
                                            <li><a href="/pen-testing">Pen Testing & Ethical Hacking</a></li>
                                            <li><a href="/security-awareness-planning">Security Awareness Planning</a></li>
                                            <li><a href="/security-consulting">Security Consulting</a></li>
                                        </ul>
                                        <ul class="dropdown-menu-ul">
                                            <p class="mb-3">TEHNICAL SUPPORT</p>
                                            {{-- <h5 class="mb-4">CONTACT SUPPORT</h5> --}}
                                            {{-- <h6 class="mb-3">Sky Express's highly skilled Services organization offers a combination of technology and cyber security expertise</h6> --}}
                                            <h6 class="mb-3">Sky Express's highly skilled team of experts offers a combination of technology and cyber security expertise.</h6>
                                            <a href="/contact">Contact Support</a>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item position-relative">
                                    <a class="nav-link" href="#">Company</a><span>|</span>
                                    <div class="dropdown-menu">
                                        <ul class="dropdown-menu-ul">
                                            <p>COMPANY OVERVIEW</p>
                                            <li><a href="/about-us">About us</a></li>
                                            <li><a href="/why-us">Why us?</a></li>
                                            <li><a href="/careers">Careers</a></li>
                                            <li><a href="/contact">Contact</a></li>
                                            {{-- <li><a href="#">Office Locations</a></li> --}}
                                        </ul>
                                        <ul class="dropdown-menu-ul">
                                            <p class="mb-4">CAREERS AT SKY EXPREES</p>
                                            <h6>Sky Express is looking for talented individuals who bring a diverse range of experiance and capabilities. View our open positions below to find your next career opportunity with us.</h6>
                                            <a href="/careers">Join the team</a>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item position-relative">
                                    <a class="nav-link" href="#">News & Events</a><span>|</span>
                                    <div class="dropdown-menu">
                                        <ul style="margin-top: 0px; padding-top: 0px;" class="dropdown-menu-ul">
                                            <li style="margin-top: 15px;"><a href="/events">Events</a>
                                            </li>
                                            <li><a href="/news">In The News</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item position-relative">
                                    <a class="nav-link" href="#">In Touch with Security</a><span>|</span>
                                    <div class="dropdown-menu">
                                        <ul class="dropdown-menu-ul">
                                            <!-- <p>PRODUCTS</p> -->
                                            <li><a href="/blog">Blog</a></li>
                                            {{-- <li><a href="#">Reports</a></li> --}}
                                            <li><a href="/faq">FAQ</a></li>
                                            {{-- <li><a href="#">Case Studies</a></li> --}}
                                        </ul>
                                        {{-- <ul class="dropdown-menu-ul">
                                            <p>REQUEST DEMO</p>
                                            <h6>Register here to get a demo that can be conducted on premises.</h6>
                                        </ul> --}}
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-inline pr-0" href="/sr">SR</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>