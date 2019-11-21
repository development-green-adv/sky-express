@extends("layout/master")

@section("title", "Solution | Sky Express")

@section("style")


@endsection

@section("content")

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


        <div class="container solution_content">
            <div class="row">
                <div class="col-12">
                    <h4>By Industry</h4><br>
                </div>
                <div class="col-12 col-md-6">
                    <h6>
                        No industry is immune from security issues. 
                    </h6><br>
                    <p class="pr-5">
                        The world is becoming ever more digitized and connected, from personal devices to complex systems in industry. Billions of inteligent devices and 
                        machines generate and exchange massive amounts of data. Using these vast amounts of data to make inteligent decisions and to create
                        value is crucial. But with the increased use of data, the vulnerability increases, too.
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <h5 class="orange_text pl-5">
                        Looking for industry Specific Cyber Security?
                    </h5><br>
                    <p class="pl-5">
                        Sky Express provides advanced solutions and services to fit different industry requirements. Our mission is to ensure the security and integrity of data in all aspects 
                        of business areas such as education, health, state administration, military, police and many others.
                    </p>
                </div>
            </div>
        </div>


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>


        <div class="container solution_content">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="solution_item">
                        <img class="img-fluid" src="{{ asset('images/web/gov.png') }}">
                        <h4><b>Government</b></h4><br>
                        <p>
                            Government agencies, departments and critical infrastructure are frequent targets in today's advanced attacks. Whether the goal
                            is to compromise sensitive Government data, steal personally identifiable information or disrupt normal operations, the increasing
                            sophistication of attacks is making it more difficult to safeguard the Government's cyber critical.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="solution_item">
                        <img class="img-fluid" src="{{ asset('images/web/finance.png') }}">
                        <h4><b>Finance</b></h4><br>
                        <p>
                            Financial institutions are lucrative cybercrime targets, inviting regulatory oversight, customer scrutiny, and intensive executive focus.
                            Financial IT and security professionals know successful user endpoints and consumer-facing servers and devices, but struggle to stay ahead of evolving
                            ransomware and non-malware attacks.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="solution_item">
                        <img class="img-fluid" src="{{ asset('images/web/bolnica.png') }}">
                        <h4><b>Healthcare</b></h4><br>
                        <p>
                            The Healthcare Industry is one of the biggest targets of cyber criminals, mostly due to the variety of confidential information it contains,
                            such as social security numbers, insurance-related information, and most important personal medical records. Even through healthcare institutes are committed
                            to patient privacy, this industry is behind in terms of advanement and adoption of cyber security 
                            technologies and solutions to protect critical and confidential patient data.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 offset-md-2">
                    <div class="solution_item">
                        <img class="img-fluid" src="{{ asset('images/web/insu.png') }}">
                        <h4><b>Insurance</b></h4><br>
                        <p>
                            Cyber-attacks in the insurance sector are growing exponentially as insurance companies migrate toward digital channels in an effort to create
                            tighter customer relationships, offer new products and expand their share of customers financial portfolios.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="solution_item">
                        <img class="img-fluid" src="{{ asset('images/web/energy.png') }}">
                        <h4><b>Energy</b></h4><br>
                        <p>
                            The energy sector has become a primary target for cyber attacks. The infrastructure to produce, transport, store, and distribute energy is inarguably one of
                            the most critical assets for a modern society and a backbone fot its economic activities, welfare and stability. Digitalization brings and inherent threat - the 
                            more devices are getting digital, smart and connected to the energy and power system, the more do they offer potential access points for cyberattacks to a critical infrastructure.
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>

        <div class="container-fluid about_partner_section" style="background-image: url('{{ asset('images/web/aboute-1.jpg') }}'); border-bottom:2px solid #f1592a;">
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


    @include("inc/footer")

@endsection