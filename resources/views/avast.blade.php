@extends("layout/master")

@section("title", "Avast | Sky Express")

@section("content")

    @include("inc/header")

        <div class="container-fluid top_section" style="background-image: url('{{ asset('images/web/df-labs.png') }}'); background-repeat: no-repeat; background-color: #0b0b0d;">
            <div class="row">
                <div class="about_headline" data-aos="fade-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="text-white">PRODUCTS</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container about_desc">
            <div class="row">
                <div class="col-12 mb-5">
                    <img style="width: 300px;" src="{{ asset('images/web/avast-page-logo.png') }}" alt="">
                </div>
                <div class="col-12 mb-4">
                    <h4>Security, performance and privacy solutions for consumer and business users</h4><br>
                </div>
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <p class="pr-5 mb-4">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset.
                    </p>
                    <p class="pr-5  mb-4">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset.
                    </p>
                    
                    <p class="pr-5">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset.
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <div class="df-labs-right-first-part">
                        <h4 class="mb-4">Business Security</h4>
                        <p class="mb-5">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset.
                        </p>
                        
                        <h4 class="mb-4">Avast is focused on:</h4>

                        <ul class="avast-first-part-ul">
                            <li class="mb-4">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                    </div>
                                    <div class="col-md-11">
                                        <h5 class="mt-2">Malware Detection and Blocking;</h5>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-4">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                    </div>
                                    <div class="col-md-11">
                                        <h5 class="mt-2">AI and Machine Learning;</h5>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-4">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                    </div>
                                    <div class="col-md-11">
                                        <h5 class="mt-2">Internet of Things;</h5>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-4">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                    </div>
                                    <div class="col-md-11">
                                        <h5 class="mt-2">Location Technology;</h5>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        

        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>


        <div class="container-fluid df-labs-second-part carbon-black-second-part">
            <div class="df-labs-second-part-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="mb-2 text-white">Products and Platforms</h3>
                        <p class="text-white pr-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="df-labs-second-part-left avast-page-second-part-left">
                            <div class="avast-page-second-part-card mb-4">
                                <h4 class="orange_text mb-2">Standalone Antivirus products</h4>
                                <p class="pr-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            </div>
                            <div class="avast-page-second-part-card">
                                <h4 class="orange_text mb-2">Managed Antivirus products</h4>
                                <p class="pr-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="df-labs-second-part-right carbon-black-second-part-right avast-page-second-part avast-page-second-part-right">
                            <div class="avast-page-second-part-card mb-4">
                                <h4 class="orange_text mb-2 pl-5">Managed Antivirus products</h4>
                                <p class="pl-5 pr-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            </div>
                            <div class="avast-page-second-part-card">
                                <h4 class="orange_text mb-2 pl-5">Managed Antivirus products</h4>
                                <p class="pl-5 pr-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
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

        <div class="container-fluid avast-third-part">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h4 class="orange_text mb-5">Layered cybersecurity services for complete protection</h4>
                        <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
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
                                <h6>DFLabs Awarded with Two U.S. Patents for Its Pioneering SOAR technology</h6>
                                <p style="margin-top: 15px; margin-bottom: 15px;">
                                    Sky Express partner company, DFLabs, the award-winning Security Orchestration. Automation and
                                    Response (SOAR) vendor, annouced it has been...
                                </p>
                                <a class="link_without" href="#">READ MORE</a>
                            </div>
                            <div class="col-12 col-md-4 text-left solutions_item">
                                <img class="img-fluid" src="{{ asset('images/web/2.png') }}" alt="">
                                <h6>DFLabs Awarded with Two U.S. Patents for Its Pioneering SOAR technology</h6>
                                <p style="margin-top: 15px; margin-bottom: 15px;">
                                    Sky Express partner company, DFLabs, the award-winning Security Orchestration. Automation and
                                    Response (SOAR) vendor, annouced it has been...
                                </p>
                                <a class="link_without" href="#">READ MORE</a>
                            </div>
                            <div class="col-12 col-md-4 text-left solutions_item">
                                <img class="img-fluid" src="{{ asset('images/web/3.png') }}" alt="">
                                <h6>DFLabs Awarded with Two U.S. Patents for Its Pioneering SOAR technology</h6>
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