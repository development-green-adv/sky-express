@extends("layout/master")

@section("title", "About Us | Sky Express")

@section("content")

    @include("inc/header")

        <div class="container-fluid top_section" style="background-image: url('{{ asset('images/web/showcase.jpg') }}'); background-repeat: no-repeat;">
            <div class="row">
                <div class="about_headline" data-aos="fade-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h1>ABOUT US</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container about_desc">
            <div class="row">
                <div class="col-12 mb-4">
                    <h2>SKY EXPRESS</h2>
                </div>
                <div class="col-12 col-md-5 mb-4 mb-md-0">
                    <h4>Your trusted Cybersecurity Partner</h4><br>
                    <p class="pr-5">
                        Sky Express is an exclusive distributor of <br class="d-none d-md-block">
                        advanced cybersecurity solutions and services <br class="d-none d-md-block"> in the
                        field of information security, covering SEE market.
                    </p>
                </div>
                <div class="col-12 col-md-7">
                    <p class="pl-0 pl-md-5">
                        As an integral part of the Switzerland’s Evolution Equity
                        Partners fund, Sky Express utilizes unique opportunity to
                        communicate with world-leading cyber security solution
                        providers, keeping the pace with latest trends and
                        developments in the field of information security and
                        establishing reliable relations with customers, based on
                        quality and trust.
                    </p><br>
                    <p class="pl-0 pl-md-5"> 
                        Sky Express offers a very selective range of
                        complemental, compatible and applicable solutions.
                        All the solutions we distribute, either directly or through
                        sales partners, are recognized, proven and tailored to fit
                        market requirements.
                    </p>
                </div>
            </div>
        </div>
        

        <div class="container-fluid rose_section_top">
            <div class="row">
                
            </div>
        </div>


        <div class="container-fluid about_partner_section" style="background-image: url('{{ asset('images/web/aboute-1.jpg') }}');">
            <div class="row">
                <div class="container">
                    <div class="row slider-for">
                        <div class="col-12 col-md-3 text-center align-self-center">
                            <img class="img-fluid" src="{{ asset('images/web/carbon.png') }}">
                        </div>
                        <div class="col-12 col-md-3 text-center align-self-centers">
                            <img class="img-fluid" src="{{ asset('images/web/df.png') }}">
                        </div>
                        <div class="col-12 col-md-3 text-center align-self-center">
                            <img class="img-fluid" src="{{ asset('images/web/open.png') }}">
                        </div>
                        <div class="col-12 col-md-3 text-center align-self-center">
                            <img class="img-fluid" src="{{ asset('images/web/onapsis.png') }}">
                        </div>
                        <div class="col-12 col-md-3 text-center align-self-center">
                            <img class="img-fluid" src="{{ asset('images/web/avast-logo.png') }}">
                        </div>
                        <div class="col-12 col-md-3 text-center align-self-center">
                            <img class="img-fluid" src="{{ asset('images/web/eperi.png') }}">
                        </div>
                        <div class="col-12 col-md-3 text-center align-self-center">
                            <img class="img-fluid" src="{{ asset('images/web/kerio.png') }}">
                        </div>
                        <div class="col-12 col-md-3 text-center align-self-center">
                            <img class="img-fluid" src="{{ asset('images/web/security.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container about_desc about_mission">
            <div class="row">
                <div class="col-12 col-md-6">
                    <p class="first-pharagraf">
                        <span class="orange_text">Our mission</span> is to ensure the safety,
                        security and privacy of data in all
                        aspects of business areas such as
                        finance, insurance, health, state
                        administration, law enforcement,
                        intelligence agencies, education
                        and many others.
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <p class="second-pharagraf">
                        <span class="orange_text">Our vision</span> is to provide innovative
                        solutions in the field of information
                        security to users and continually be a
                        step ahead of cyber-attacks, ensuring
                        that our customers’ integrity and
                        reputation stay unharmed in a
                        constantly evolving and demanding
                        world of cyber security.
                    </p>
                </div>
            </div>
        </div>


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>


        <div class="container-fluid video_section about_solutions" style="background-image: url('{{ asset('images/web/aboute-2.jpg') }}');">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h4>Advanced cybersecurity solutions</h4><br>
                            <h2><b>Providing impenetrable Defense<br> For Enterprise Companies</b></h2><br>
                            <p>
                                Defend your organization against the latest cyber threats. Sky Express offers a very selective range<br>
                                of complemental, compatible and applicable solutions.
                            </p>
                            <br><br>
                            <a class="orange_link" href="#">View solutions</a>
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