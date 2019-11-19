@extends("layout/master")

@section("title", "Security Consulting | Sky Express")

@section("content")

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
                    <h4>Security Consulting</h4><br>
                    <p class="pr-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab sit sapiente saepe iure soluta molestias eligendi omnis eius id consectetur autem, et ea. Minus voluptatem exercitationem, deserunt cum excepturi repellat consequatur, delectus eos a modi nesciunt, dolores corrupti veniam rem sit assumenda animi nemo quo natus fugiat numquam id dolorum.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab sit sapiente saepe iure soluta molestias eligendi omnis eius id consectetur autem, et ea. Minus voluptatem exercitationem, deserunt cum excepturi repellat consequatur, delectus eos a modi nesciunt, dolores corrupti veniam rem sit assumenda animi nemo quo natus fugiat numquam id dolorum.
                    </p>
                </div>
                <div class="col-12 col-md-6 pl-5">
                    <h5 class="mt-5 mb-4">Prevent a problem before it is presented</h5>
                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium itaque repellat debitis voluptate aliquam minima labore omnis laborum repudiandae provident, voluptas aperiam sed laboriosam quasi tempore incidunt doloremque obcaecati natus!</p>
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
                        <div class="security-consulting-benefites-area text-center mt-5">
                            <h4>We'll work alongside management to best align security polices and <br> practieswith business objectives to advance your operational goals. </h4>
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
                            <h1>Talk an experienced consultant about where <br> you are on your cybersecurity journey and <br> where you'd like to improve.</h1>
                            <div class="get-btn">
                                <a href="#">GET IN TOUCH <span>with our experts</span></a>
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
                            <div class="col-12 col-md-4 text-left solutions_item">
                                <img class="img-fluid" src="{{ asset('images/web/1.png') }}" alt="">
                                <h6>DFLabs Awarded with Two U.S. Pat- <br> ents for Its Pioneering SOAR technology</h6>
                                <p style="margin-top: 15px; margin-bottom: 15px;">
                                    Sky Express partner company, DFLabs, the award-winning Security Orchestration. Automation and
                                    Response (SOAR) vendor, annouced it has been...
                                </p>
                                <a class="link_without" href="#">READ MORE</a>
                            </div>
                            <div class="col-12 col-md-4 text-left solutions_item">
                                <img class="img-fluid" src="{{ asset('images/web/2.png') }}" alt="">
                                <h6>DFLabs Awarded with Two U.S. Pat- <br> ents for Its Pioneering SOAR technology</h6>
                                <p style="margin-top: 15px; margin-bottom: 15px;">
                                    Sky Express partner company, DFLabs, the award-winning Security Orchestration. Automation and
                                    Response (SOAR) vendor, annouced it has been...
                                </p>
                                <a class="link_without" href="#">READ MORE</a>
                            </div>
                            <div class="col-12 col-md-4 text-left solutions_item">
                                <img class="img-fluid" src="{{ asset('images/web/3.png') }}" alt="">
                                <h6>DFLabs Awarded with Two U.S. Pat- <br> ents for Its Pioneering SOAR technology</h6>
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