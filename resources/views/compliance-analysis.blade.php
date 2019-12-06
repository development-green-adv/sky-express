@extends("layout/master")

@section("title", "Compliance Analysis | Sky Express")

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


        <div class="container about_desc pen_services">
            <div class="row">
                <div class="col-12 col-md-6 mb-4 mb-md-0 pr-5">
                    <h4>Compliance Analysis</h4><br>
                    <p class="pr-0 pr-md-5 mb-4">
                        In today’s regulated business environment, compliance is essential to long-term business success. Non-compliance is not an option – loss of revenue,
                        fines, lawsuits, and penalties can be crippling.
                    </p>
                    <p class="pr-0 pr-md-5 mb-4">
                        Compliance is also not something most companies can handle on their own. It requires a tremendous
                        amount of human efforts and organizational focus.
                    </p>
                </div>
                <div class="col-12 col-md-6 pl-3 pl-md-5">
                    <h4 class="invisible d-none d-md-block">Pen Testing & Ethical Hacking</h4><br>
                    <p class="mb-4">Achieving compliance with regulatory and industry standards doesn't have to be as difficult as it seems.</p>
                    <p class="">Sky Express guides you through compliance
                        validation processes quickly and smoothly to help get your organization compliant and back to running your business.</p>
                </div>
            </div>
        </div>
        


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>

        <div class="container-fluid benefites_pen-testing security-consulting-benefites">
            <div class="benefites_pen-testing-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 position-relative">
                        <div class="security-consulting-benefites-area text-center mt-0 mt-md-5">
                            <h4 class="orange_text mb-4">Scalable & efficient compliance services, tailored to your organization's needs</h4>
                            <h5 class="text-white mb-3">If you need to comply with multiple regulatory, industry and data security compliance standards, you can leverage our experience and know-how by
                                combining your requirements into a single assessment. We work with you to make the process as simple as possible.</h5>
                            <h5 class="text-white">To learn more about our Compliance Advisory Services, request a consultation.</h5>
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