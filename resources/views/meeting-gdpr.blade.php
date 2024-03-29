@extends("layout/master")

@section("title", "Meeting GDPR | Sky Express")

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
            <h4>Meeting GDPR</h4><br>
            <p class="pr-0 pr-md-5 mb-4">
                The European Union’s General Data Protection
                Regulation (EU GDPR) came into effect in May 2018. The law introduces a variety of data
                protection challenges for businesses all around
                the world.
            </p>

            <h5 class="mb-4">The GDPR Compliance</h5>
            <p class="pr-0 pr-md-5 mb-4">The GDPR, is been designed to harmonize laws
                surrounding data privacy across Europe and it
                reshapes the way organizations across the globe approach data privacy when dealing with EU
                systems. It comes into effect on May the 25th 2018 and applies not only to EU entities dealing with
                personal data anywhere in the world, but also
                entities outside of the EU dealing with personal data of EU residents.</p>
            <p class="pr-0 pr-md-5 mb-5">In many ways, GDPR makes things easier,
                simplifying the existing conglomerate of rules and approaches imposed by each member state, by making one set of rules to rule them all.
                It includes 99 articles or clauses covering virtually every aspect of business and information
                management – everything from the consent to
                collect and process information, to the “right to be deleted”.</p>
            <h5 class="orange_text">For more information on how Sky Express can help you meet GDPR compliance, contact our Security Expert.</h5>
            <div class="text-center mt-5">
                <div class="get-btn">
                    <a href="/contact">GET IN TOUCH <span class="d-block">with our experts</span></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <h4 class="invisible">Pen Testing & Ethical Hacking</h4><br>
            <h5 class="mb-4 pl-0 pl-md-5">Why GDPR Should Matter to You?</h5>
            <p class="pl-0 pl-md-5 mb-4">New regulations have forced organizations around the globe to rethink data privacy and protection.</p>
            <p class="pl-0 pl-md-5 mb-4">The main goal of the General Data Protection Regulation (GDPR) is to ensure transparency, security and
                accountability by data controllers. It applies to all data
                processors, stipulating that they have to implement
                specific procedures and processes that are ultimately aimed at protecting data and consumer privacy, as well as ensuring an effective and timely response by organizations in the event of a data breach. Organizations that do not adhere to the GDPR requirements can be subject to severe fines and other consequences.</p>
            <h5 class="mb-4 pl-0 pl-md-5">GDPR Compliance in Serbia</h5>
            <p class="pl-0 pl-md-5  mb-4">In light of the new EU data protection scheme, shaped by the GDPR, on 9 November 2018, which is applicable as of 21 August 2019. The outline of this law is in accordance with GDPR regulations to a great extent, which further
                emphasizes that Serbian citizens and residents need to completely start applying these regulations in all aspects eventually. </p>
            <p class="pl-0 pl-md-5 mb-4">Even though Serbia is on its way of becoming a member
                of the European Union and is not directly obliged to apply GDPR standards which came into effect on May 25th, 2018, there are numerous legal and business reasons
                because of which companies and business owners in Serbia need to consider legal applications of GDPR in Serbia.</p>
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