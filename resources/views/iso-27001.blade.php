@extends("layout/master")

@section("title", "ISO 27001 | Sky Express")

@section("content")

@section("seo")

<style>
    #contact-srb {
        display: none;
    }

    #pop-up {
        display: none;
    }
</style>

@endsection

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
            <p class="pr-0 pr-md-5 mb-4">
                ISO/IEC 27001 is the best-known standard in the family providing requirements for an information security management system (ISMS). Using this family of standards will help your organization manage the security of assets such as financial
                information, intellectual property, employee details or information entrusted to you by third parties.
            </p>
            <p class="pr-0 pr-md-5 mb-4">
                ISO 27001 goes considerably further than Cyber
                Essentials, providing 114 security controls that
                encompass people, processes and technology.
                The standard defines how to maintain an
                information security management system in order to ensure confidentiality, integrity and availability of information.
            </p>
            {{-- <h5 class="mb-4 pr-5">ISO 27001 will help reduce information security and data protection risks to your organization</h5> --}}
            <h5 class="mb-4">Are you ISO 27001 compliant?</h5>
            <p class="mb-4">At Sky Express, we offer compliance analysis with
                regulations like ISO 2700, GDPR, PCI DSS, etc. to ensure that your company is operating within the relevant laws and
                regulations.</p>
            <div class="text-center mt-5">
                <div class="get-btn">
                    <a href="/contact">GET IN TOUCH <span class="d-block">with our experts</span></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <h4 class="invisible">Pen Testing & Ethical Hacking</h4><br>
            <p class="pl-0 pl-md-5 mb-4">The ISO 27001 standard provides a framework for
                information security management best practice that helps organisations to:</p>
            <ul class="iso-2700-list">
                <li class="mb-4 pl-0 pl-md-5">
                    <div class="row">
                        <div class="col-2 col-md-1">
                            <img src="{{ asset('images/web/correct.svg') }}" alt="">
                        </div>
                        <div class="col-10 col-md-11">
                            Protect client and employee information
                        </div>
                    </div>
                </li>
                <li class="mb-4 pl-0 pl-md-5">
                    <div class="row">
                        <div class="col-2 col-md-1">
                            <img src="{{ asset('images/web/correct.svg') }}" alt="">
                        </div>
                        <div class="col-10 col-md-11">
                            Manage risks to information security effectively
                        </div>
                    </div>
                </li>
                <li class="mb-4 pl-0 pl-md-5">
                    <div class="row">
                        <div class="col-2 col-md-1">
                            <img src="{{ asset('images/web/correct.svg') }}" alt="">
                        </div>
                        <div class="col-10 col-md-11">
                            Achieve compliance with regulations such as the European
                        </div>
                    </div>
                </li>
                <li class="mb-4 pl-0 pl-md-5">
                    <div class="row">
                        <div class="col-2 col-md-1">
                            <img src="{{ asset('images/web/correct.svg') }}" alt="">
                        </div>
                        <div class="col-10 col-md-11">
                            Union General Data Protection Regulation (EUGDPR)
                        </div>
                    </div>
                </li>
                <li class="mb-4 pl-0 pl-md-5">
                    <div class="row">
                        <div class="col-2 col-md-1">
                            <img src="{{ asset('images/web/correct.svg') }}" alt="">
                        </div>
                        <div class="col-10 col-md-11">
                            Protect the company's brand image
                        </div>
                    </div>
                </li>
            </ul>
            <p class="pl-0 pl-md-5 mb-4">The standard is especially suitable where the protection of information is critical, such as in the banking, financial, health, public and IT sectors. The standard is also applicable to organisations which manage high volumes of data, or
                information on behalf of other organisations such as data centres and IT outsourcing companies.</p>
            <h5 class="mb-4 pr-5 pl-0 pl-md-5">ISO 27001 will help reduce information security and data protection risks to your organization</h5>
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
                    <a href="/about-us">About us</a><br>
                    <a href="/why-us">Why us?</a><br>
                    <!-- <a href="/contact">Technical support</a><br> -->
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