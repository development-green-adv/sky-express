@extends("layout/master")

@section("title", "Why Us | Sky Express")

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
                        <h1>WHY US</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container about_desc pen_services">
    <div class="row">
        <div class="col-12 col-md-6 mb-4 mb-md-0">
            <h4>Deep Expretise</h4><br>
            <p class="pr-0 pr-md-5 mb-4">
                Highly qualified and experienced, our cybersecurity professionals embrace strong foundations in all
                aspects of information technology and
                cybersecurity.
            </p>
        </div>
        <div class="col-12 col-md-6">
            <h4 class="invisible d-none d-md-block">Pen Testing & Ethical Hacking</h4><br class="d-none d-md-block">
            <p class="pl-0 pl-md-5 mb-4">They bring together decades of experience in cybersecurity and significant experience from leading companies in
                diverse global markets and various areas, such as finance, military, health, insurance, government agencies and the intelligence community.</p>
            <p class="pl-0 pl-md-5 mb-4">Our professionals have spent major part of their careers protecting some of the most sensitive data and systems in different companies and are now ready to apply
                collected experience and expertise in defending your
                business and data.</p>
        </div>
    </div>
</div>



<div class="container-fluid rose_section">
    <div class="row">

    </div>
</div>

<div class="container-fluid why-us-second-part">
    <!-- <div class="benefites_pen-testing-overlay"></div> -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="why-us-second-part-left">
                    <p class="pr-0 pr-md-5">Our team members also serve as trusted
                        advisors, providing clients with expert
                        support protecting networks, computers,
                        applications and data from all kinds
                        of threats. We’re specialists in integrating
                        advanced, yet simple and efficient
                        solutions seamlessly into the clients'
                        infrastructure. </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="why-us-second-part-right">
                    <p class="pr-0 pr-md-5">Our employees are certified professionals holding OSCE, OSCP, CISSP, MBCI, CTSPA, CISA and other relevant certificates covering all aspects of information security.</p>

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
                <button class="btn btn-default orange_btn">CERTIFICATIONS</button>
            </div>
            <div class="col-12">
                <div class="why-us-page-cert">
                    <div class="why-us-page-cert-card">
                        <img class="img-fluid" src="{{ asset('images/web/cert-1.png') }}" alt="">
                    </div>
                    <div class="why-us-page-cert-card">
                        <img class="img-fluid" class="mb-auto" src="{{ asset('images/web/cert-2.png') }}" alt="">
                    </div>
                    {{-- <div class="why-us-page-cert-card">
                                <img class="img-fluid" class="mb-auto" src="{{ asset('images/web/cert-3.jpg') }}" alt="">
                </div> --}}
                <div class="why-us-page-cert-card">
                    <img class="img-fluid" class="mb-auto" src="{{ asset('images/web/cert-4.png') }}" alt="">
                </div>
                <div class="why-us-page-cert-card">
                    <img class="img-fluid" class="mb-auto" src="{{ asset('images/web/cert5.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="col-12 text-center">
            <h3 class="why-us-cet-text">Protect your data by establishing reliable partnership with trusted IT solution <br class="d-none d-md-block"> provider who knows how to keep your business safe and secure.</h3>
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