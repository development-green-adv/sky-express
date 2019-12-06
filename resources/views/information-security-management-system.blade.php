@extends("layout/master")

@section("title", "Information Security Management Systems | Sky Express")

@section("content")

@section("seo")

    <style>

        #contact-srb{
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


        <div class="about_desc pen_services">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 mb-0 mb-md-0">
                        <h4>Information Security Management Systems (ISMS)</h4><br>
                        <p class="pr-0 pr-md-5">
                            Sky Express’ information security services protect your business from data breaches, negative publicity, damaged credibility and disruption of services. We
                            deliver world-class offerings, security knowledge and experience to provide you with comprehensive information security. Our offerings combine
                            unmatched technology, services, support and training from highly certified security experts. 
                        </p>
    
                        <h5 class="mt-4 mb-4">Achieve the standards relevant to your organization and reduce <br> your IT Security risks</h5>
    
                    </div>
                    <div class="col-12 col-md-6">
                        <h4 class="invisible mb-4 d-none d-md-block">Pen Testing & Ethical Hacking</h4><br>
                        <p class="pl-0 pl-md-5 mb-4">ISMS Advisory Services help you develop a coherent set of policies, processes and systems to manage risks to information assets and improve IT
                            governance. Our consultants look at an organization across the three core dimensions of technologies, processes and people.</p>                    
                    </div>
                </div>
            </div>
        </div>
        


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>

        <div class="container-fluid benefites_pen-testing benefite-info-security">
            <div class="benefites_pen-testing-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>We can help you to:</h3>

                        <ul>
                            <li><div class="row"><div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div><div class="col-10 col-md-11">Identity critical infrastructure and data;</div></div></li>
                            <li><div class="row"><div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div><div class="col-10 col-md-11"> Keep track of IT security solutions and investments;</div></div></li>
                            <li><div class="row"><div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div><div class="col-10 col-md-11">Indentify existing points of failure and implement solutions to mitigate them;</div></div></li>
                            <li><div class="row"><div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div><div class="col-10 col-md-11">Monitor changes that might render current solutions obsolete or inadeqate;</div></div></li>
                            <li><div class="row"><div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div><div class="col-10 col-md-11">Report, escalate and record adverse cybersecurity events;</div></div></li>
                            <li><div class="row"><div class="col-2 col-md-1"><img src="{{ asset('images/web/correct.svg') }}" alt=""></div><div class="col-10 col-md-11">Monitor staff training needs, and document relevant training programs;</div></div></li>
                        </ul>
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
                        <div class="experts_pen-left">
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