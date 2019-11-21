@extends("layout/master")

@section("title", "Security and Risk Management | Sky Express")

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


        <div class="container about_desc pen_services">
            <div class="row">
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <h4>Security and Risk Management</h4><br>
                    <p class="pr-5 mb-4">
                        Risk is a crucial element in all our lives. In every action we plan to take in our personal and 
                        professional lives, we need to analyze the risks 
                        associated with it. From a cyber security 
                        perspective, industries such as energy, healthcare, banking, insurance, retail, etc., involves a lot of risks which impedes the adoption of technology and which needs to be effectively managed.  
                    </p>
                    <p class="pr-5 mb-4 orange-text">
                        Cyber risk commonly refers to any risk of financial loss, disruption or damage to the reputation of an organization resulting from the failure of its 
                        information technology systems. 
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <h4 class="invisible">Pen Testing & Ethical Hacking</h4><br>
                    <p class="pl-5 mb-4">Whether you’re a small business or a multi-million euros corporation, cybercrime could be lurking right around the corner. In fact, more small businesses are being targeted by cyber criminals than you might imagine, and without the right preventative measures in place, yours could be next.</p>
                    <p class="pl-5 mb-4">Risk comes from all sides. Determined, malicious 
                        “outsiders.” Careless or disgruntled “insiders.” Either one can wreak havoc since anyone who gains possession of them to control organization resources, disable security systems, and access vast amounts of sensitive data. 
                        Unmanaged privileged access is the common vulnerability in both cases.</p>
                </div>
            </div>
        </div>
        


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>

        <div class="container-fluid sec-and-risk-management-second-part">
            <!-- <div class="benefites_pen-testing-overlay"></div> -->
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-5">
                        <div class="text-center">
                            <p>All businesses face the risk of a cyber breach at some point during their life cyclem, <br> but understanding your rist level <br> - and where the threats could come from - can go a long way to preparing and effective <br> response.</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="text-center">
                            <p>Sky Express can analyze overall security posture of your organization, identify gaps and reduce <br> identified cyber risks.</p>
                        </div>
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