@extends("layout/master")

@section("title", "Security Analysis | Sky Express")

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
                        <h1>SERVICES</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container about_desc pen_services">
    <div class="row">
        <div class="col-12 col-md-6 mb-4 mb-md-0">
            <h4>Security Analysis</h4><br>
            <p class="pr-0 pr-md-5 mb-4">
                After creating a clear overview of your current security posture,
                we can provide recommendations for
                improvement that are aligned with your business critical
                systems and applications, while taking into consideration your
                budget and growth plans.
            </p>

            <h4>Keep your information System Secured</h4><br class="d-none d-md-bock">
        </div>
        <div class="col-12 col-md-6">
            <h4 class="invisible d-none d-md-block">Pen Testing & Ethical Hacking</h4><br>
            <p class="pl-0 pl-md-5 mb-4">Protecting the value of your company data in a long
                term takes all-round attention: Between updates,
                upgrades and end of support, your infrastructure is
                constantly changing.</p>
            <p class="pl-0 pl-md-5 mb-4">We provide preventative services both in the form
                of comprehensive risk analyses and deeper and more
                advanced security analyses.</p>
        </div>
    </div>
</div>



<div class="container-fluid rose_section">
    <div class="row">

    </div>
</div>

<div class=" benefites_pen-testing">
    <div class="benefites_pen-testing-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="solutions-second-left">
                    <h3>Our specialties are:</h3>
                    <ul>
                        <li>
                            <div class="row">
                                <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                <div class="col-10 col-md-11">Security management;</div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                <div class="col-10 col-md-11">Threat analysis and risk assessment;</div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                <div class="col-10 col-md-11">IT Security;</div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                <div class="col-10 col-md-11">Incident management;</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="invisible d-none d-md-block">Benefitsof Penetration Testing</h3>
                <div class="solutions-second-right">
                    <ul>
                        <li>
                            <div class="row">
                                <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                <div class="col-10 col-md-11"> Enhancement of company's security;</div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                <div class="col-10 col-md-11">Overview of the Security Level;</div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                <div class="col-10 col-md-11"> Improvement of security awareness;</div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                <div class="col-10 col-md-11">Testing of escalation scenarios;</div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""> </div>
                                <div class="col-10 col-md-11">Design and introduction of security <span>quidelines;</span></div>
                            </div>
                        </li>
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


<div class="container-fluid exprerts_pen_testing">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="experts_pen-left ">
                    <h1>Talk an experienced consultant about where <br class="d-none d-md-block"> you are on your cybersecurity journey and <br class="d-none d-md-block"> where you'd like to improve.</h1>
                    <div class="get-btn">
                        <a href="/contact">GET IN TOUCH <span>with our experts</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="experts_pen-right">
                    <img src="{{ asset('images/web/pen-key.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid rose_section">
    <div class="row">

    </div>
</div>


<div class="container-fluid service_section">
    <div class="row">
        <div class="container">
            <div class="row h-100">
                <div class="col-12 text-center" style="margin-bottom: 30px;">
                    <h3>OUR SERVICES</h3>
                </div>

                <div class="col-12 col-md-3 my-5 text-center align-self-center service_item">
                    <a href="/security-analysis">
                        <img class="img-fluid" src="{{ asset('images/web/secu.png') }}">
                        <p>Security Analysis</p>
                    </a>
                </div>
                <div class="col-12 col-md-3  my-5 text-center align-self-center service_item">
                    <a href="/compliance-analysis">
                        <img class="img-fluid" src="{{ asset('images/web/compi.png') }}">
                        <p>Compilance Analysis</p>
                    </a>
                </div>
                <div class="col-12 col-md-3  my-5 text-center align-self-center service_item">
                    <a href="/managed-security-services">
                        <img class="img-fluid" src="{{ asset('images/web/pin.png') }}">
                        <p>Managed Security Services (MSSP)</p>
                    </a>
                </div>
                <div class="col-12 col-md-3  my-5 text-center align-self-center service_item">
                    <a href="/information-security-management-system">
                        <img class="img-fluid" src="{{ asset('images/web/sec.png') }}">
                        <p>Security Management Systems (ISMS)</p>
                    </a>
                </div>

                <div class="col-12 col-md-4  my-5 text-center align-self-center service_item">
                    <a href="/security-awareness-planning">
                        <img class="img-fluid" src="{{ asset('images/web/se.png') }}">
                        <p>Security Awareness Planning</p>
                    </a>
                </div>
                <div class="col-12 col-md-4  my-5 text-center align-self-center service_item">
                    <a href="/pen-testing">
                        <img class="img-fluid" src="{{ asset('images/web/pen.png') }}">
                        <p>Pen Testing & Ethical Hacking</p>
                    </a>
                </div>
                <div class="col-12 col-md-4  my-5 text-center align-self-center service_item">
                    <a href="/security-consulting">
                        <img class="img-fluid" src="{{ asset('images/web/consult.png') }}">
                        <p>Security Consulting</p>
                    </a>
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