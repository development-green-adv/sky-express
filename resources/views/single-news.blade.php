@extends("layout/master")

@section("title", "Single blog | Sky Express")

@section("content")

    @include("inc/header")

        <div class="container-fluid top_section" style="background-image: url('{{ asset('images/web/showcase.jpg') }}'); background-repeat: no-repeat;">
            <div class="row">
                <div class="about_headline" data-aos="fade-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="text-white">NEWS</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid about_desc">
            <div class="row">
                <div class="container">

                    <div class="row">
                        <div class="col-7">
                            <h4 class="orange_color">The Second regional Cyber Security Conference was held on 
                                    May 17th, 2019 in Podgorica</h4>
                        </div>
                        <div class="col-5">
                        </div>
                    </div>

                    <div class="row" style="margin-top: 40px;">

                        <div class="col-12 col-md-7">
                            <img class="img-fluid" src="{{ asset('images/web/single-news-image.png') }}"><br><br>
                            <p>
                                The Second regional Cyber Security Conference was held on May 17th, 2019 in Podgorica, Montenegro, organized by Vision Event,  patronized by Ministry of Public Administration of Montenegro. The conference hosted around 130 participants from South East Europe, including representatives of NATO, state institutions and private IT representatives and cyber security. The main theme of the conference was "Strengthening of national cyber security in the context of countering hybrid threats based on established standards of NATO and EU on a global level."
                            </p><br>
                            <p>
                                Company Sky Express participated as a partner at this regional event, and Tiodor Jovovic, the company's CBO, gave a presentation on "Simple solutions for complex threats". Speaking of the biggest threats to the security of information systems, both globally and at the regional level, he pointed out as a key problem the lack of quality trained staff, the ease of attack and the complexity of modern information systems.
                                "Creating an appropriate response to such threats can not be reduced only by selection and implementation of products, but it is necessary to establish a more comprehensive partnership between the private and public sectors, and the lack of skilled personnel, even in the medium term, compensate for the use of Managed Security Services Provider solutions," emphasized Jovovic in his presentation.
                                    
                            </p><br>
                            <p>The second Regional Cyber Security Conference was opened by the Minister of Public Administration of Montenegro, Suzana Pribilovic. The conference was also addressed by cyber security experts from Montenegro and Europe on the latest challenges, threats and ways in which cyber attacks in all business systems can be performed, on the roles, responsibilities and achievements of governments and state institutions in establishing a secure cyber environments and ways of strengthening national cyber security through international cooperation.</p>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-12 col-md-4">
                            
                            <h4 style="color: #f1592a;">Previous news</h4><br>

                            <div class="row" style="margin-top: 0px;">
                                <div class="col-12 col-md-8">
                                    <p>The Second regional Cyber 
                                            Security</p>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 20px;">
                                <div class="col-12 col-md-8">
                                    <p>The Second 
                                        regional Cyber 
                                        Security Conference was held on May 17th, 2019 in 
                                        Podgorica</p>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 20px;">
                                <div class="col-12 col-md-8">
                                    <p class="orange_text">The Second regional Cyber 
                                            Security</p>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 20px;">
                                <div class="col-12 col-md-8">
                                    <p>The Second regional Cyber 
                                        Security</p>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 20px;">
                                <div class="col-12 col-md-8">
                                    <p>The Second regional Cyber 
                                        Security</p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

    @include("inc/footer")

@endsection