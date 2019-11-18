@extends("layout/master")

@section("title", "About Us | Sky Express")

@section("content")

    @include("inc/header")

        <div class="container-fluid top_section" style="background-image: url('{{ asset('images/web/df-labs.png') }}'); background-repeat: no-repeat; background-color: #0b0b0d;">
            <div class="row">
                <div class="about_headline" data-aos="fade-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="text-white">DFLABS</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container about_desc">
            <div class="row">
                <div class="col-12 mb-5">
                    <img src="{{ asset('images/web/dflabs-logo.png') }}" alt="">
                </div>
                <div class="col-12 col-md-5 mb-4 mb-md-0">
                    <h4>Automated incident response and <br> orchestration security software </h4><br>
                    <p class="pr-5">
                        Sky Express is an exclusive distributor of <br class="d-none d-md-block">
                        advanced cybersecurity solutions and services <br class="d-none d-md-block"> in the
                        field of information security, covering SEE market.
                    </p>
                </div>
                <div class="col-12 col-md-7">
                    <div class="df-labs-right-first-part">
                        <ul>
                            <li><img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt=""> Minimize Incident resolution time by 90%</li>
                            <li><img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt=""> Improve Analyst efficiency by 80%</li>
                            <li><img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt=""> Increase handled incidents 300%</li>
                            <li><img class="mr-4 invisible" src="{{ asset('images/web/correct.svg') }}" alt="">Automated, Orchestrate & Measure</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>


        <div class="container-fluid df-labs-second-part">
            <div class="df-labs-second-part-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="df-labs-second-part-left ">
                            <h1 class="mb-5">DFLabs' Security Orchestration, <br> Automation and Response Platform</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci corrupti obcaecati velit accusamus amet, quae ut ducimus! Aut voluptatibus repellendus impedit dolores aperiam. Quaerat doloremque quia nihil blanditiis, recusandae suscipit, officiis optio adipisci pariatur culpa voluptatem ratione voluptatibus unde beatae impedit numquam dolores nemo necessitatibus nobis maiores. Minima, eius sint?</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="df-labs-second-part-right text-center">
                            <img src="{{ asset('images/web/df-labs-second-part-right.png') }}" alt="">
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
                        <button class="btn btn-default orange_btn">Award-Winning SOAR Platform</button>
                    </div>
                    <div class="col-12">
                        <div class="df-labs-third-part">
                            <div class="df-labs-third-part-card">
                                <img src="{{ asset('images/web/df-labs-third-part-logo-1.png') }}" alt="">
                                <p>Top 100 in Europe</p>
                            </div>
                            <div class="df-labs-third-part-card">
                                <img class="mb-auto" src="{{ asset('images/web/df-labs-third-part-logo-2.png') }}" alt="">
                                <p>Best Security Orchestration <br> Automation and Response</p>
                            </div>
                            <div class="df-labs-third-part-card">
                                <img class="mb-auto" src="{{ asset('images/web/df-labs-third-part-logo-3.png') }}" alt="">
                                <p>Security Automation <br> and Orchestration </p>
                            </div>
                            <div class="df-labs-third-part-card">
                                <img class="mb-auto" src="{{ asset('images/web/df-labs-third-part-logo-4.png') }}" alt="">
                                <p>Best Continuous <br> Monitoring & Mitigation</p>
                            </div>
                            <div class="df-labs-third-part-card">
                                <img class="mb-auto" src="{{ asset('images/web/df-labs-third-part-logo-5.png') }}" alt="">
                                <p>Security Orchestration, <br> Automation and Response</p>
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

        <div class="container-fluid df-labs-fourth-part">
            <div class="df-labs-fourth-part-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="df-labs-fourth-part-left">
                            <h2 class="mb-5">Key Features & Capabilities <br> The DFLabs Difference</h2>
                            <p class="mb-4 pr-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi rem sunt ipsum sequi explicabo, mollitia ut provident nesciunt voluptate iusto? Facilis nostrum vero fuga beatae tempora sed laboriosam reiciendis incidunt.</p>
                            <p class="pr-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio alias vel facere velit sint voluptate totam, ratione adipisci aliquid beatae? Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dolor pariatur quisquam unde aspernatur quod reiciendis commodi in enim ducimus?</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="df-labs-fourth-part-right">
                            <ul>
                                <li class="mb-4"><img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt=""> Automation & Orchestration</li>
                                <li class="mb-4"><img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt=""> Hunting & Investigation</li>
                                <li class="mb-4"><img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt=""> Incident Management</li>
                                <li class="mb-4"><img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt=""> Flexible Integrations & Event Parsing</li>
                                <li class="mb-4"><img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt=""> Forensic Evidence Management</li>
                                <li class="mb-4"><img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt=""> Reporting & KPIs</li>
                                <li class="mb-4"><img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt=""> Knowledge Transfer & Machine Learning</li>
                                <li><img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt=""> Community Portal & Community Edition</li>
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


        
        <div class="container-fluid df-labs-fifth-part">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="df-labs-fifth-part-left">
                            <h2 class="mb-4">Complete and Comprehensive <br> SOAR Platform</h2>
                            <p class="mb-4 pr-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, vel rerum mollitia aliquam omnis numquam, similique amet delectus, iure excepturi repudiandae rem odit. A quo dolore nihil, officiis possimus quidem excepturi quisquam dolor asperiores rem architecto nemo! Beatae ex veniam cum?</p>
                            <p class="mb-4 pr-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus vel ipsa dolore, placeat nisi minus soluta enim blanditiis excepturi molestias et commodi itaque. Quibusdam, architecto illum, quam officiis necessitatibus laudantium doloremque.</p>
                            <p class=" pr-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et velit, repellat enim reiciendis mollitia maxime eum vero, sapiente suscipit esse voluptates odit quis alias nam possimus, dolor unde voluptatibus quia?</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="df-labs-fifth-part-right text-center">
                            <img src="{{ asset('images/web/df-labs-fifth-part-right.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>


        <div class="container-fluid  df-labs-sixth-part">
            <div class="df-labs-sixth-part-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="df-labs-sixth-part-title text-center">
                            <h1>Demonstrating Compliance</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="df-labs-sixth-part-middle-left">
                            <img src="{{ asset('images/web/df-labs-sixth-part-middle-left.png') }}" alt="">
                            <div><p>Intergrated GDPR incident response and <br>breach notification playbooks</p></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="df-labs-sixth-part-middle-right">
                            <img src="{{ asset('images/web/df-labs-sixth-part-middle-right.png') }}" alt="">
                            <div><p>Formalized, repeatable and enforceable incident <br> response workflows form GDPR</p></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="df-labs-sixth-part-bottom text-center">
                            <h4>How DFLabs Can Help You Meet GDPR Requirements.</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione quas sunt ipsum, deserunt adipisci reiciendis, inventore pariatur maiores explicabo beatae, rerum illo? Fugit dicta dolor dignissimos, eveniet ab saepe aliquam, totam adipisci doloremque error fugiat ut laboriosam hic? Modi nemo minus nulla perspiciatis accusantium iusto magni fugit consequatur itaque amet?</p>
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