@extends("layout/master")

@section("title", "Career | Sky Express")

@section("content")

    @include("inc/header")


        <div class="container-fluid top_section" style="background-image: url('{{ asset('images/web/showcase.jpg') }}'); background-repeat: no-repeat;">
            <div class="row">
                <div class="about_headline" data-aos="fade-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h1>CAREERS</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container about_desc">
            <div class="row">
                <div class="col-12">
                    <h5 style="color: #231f20; font-size: 25px;">
                        <b>Get the opportunity to work in one of the most exciting and advancing areas <br class="d-none d-md-block"> within the cyber security industries with Sky Express</b>
                    </h5>
                </div>
            </div><br>
            <div class="row">
                <div class="col-12 col-md-6">
                    <h4>Why work at Sky Express?</h4><br>
                    <p class="pr-0 pr-md-5">
                        Working at Sky Express means being rewarded for your
                        contributions. In addition to competitive benefits and
                        professional development, our people are empowered to use all
                        their potential, creating meaningful change for themselves and
                        our clients.
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <p class="pl-0 pr-md-l">We set high expectations for our work and our people, but in a
                        positive, team-oriented culture. We care about each other as we
                        focus on our journey ahead.</p>
                </div>
            </div>
        </div>


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>


        <div class="container-fluid video_section careers_corporate" style="background-image: url('{{ asset('images/web/careeer-corporate.jpg') }}'); background-repeat: no-repeat; background-position: center; background-size: cover;">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h4>Corporate Culture</h4><br>
                            <p class="mb-4">We believe in respecting and celebrating each person's uniqueness: their ideas, perspectives and
                                contributions - empowering them to bring their "whole selves" to work.</p>
                            <p class="mb-4">We actively promote and continually shape an environment where associates feel truly engaged and
                                understood; a place where they can share their point of view and offer ideas openly and fearlessly.<br class="d-none d-md-block">
                                That means being the best for the team, not necessarily the best in the team.</p>
                            <p class="mb-4">We strive to build a stronger, smarter team by hiring people who are better than us.
                                A winning team is more than just our work: a strong social bond often helps overcome
                                communication challenges.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>


        <div class="container-fluid carers_life">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <!-- <h4>Life at Sky Express</h4> -->
                            <button class="btn btn-default orange_btn text-uppercase">Life at Sky Express</button>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-12 col-md-6 mt-5">
                            <img class="img-fluid" src="{{ asset('images/web/carers.png') }}" alt="">
                        </div>
                        <div class="col-12 col-md-6 mt-5">
                            <p class="pl-0 pl-md-5">
                                We are committed to a working and organisational
                                culture that supports our employee’s wellbeing.
                            </p><br>
                            <p class="pl-0 pl-md-5">
                                We understand that when our employees feel fit in
                                body and mind and enjoy their work, they become
                                empowered and motivated.
                            </p><br>
                            <p class="pl-0 pl-md-5">
                                We care about our employee’s wellbeing which is why
                                we work hard to build a positive health culture and
                                encourage a good work-life balance.
                            </p><br>
                            <p class="pl-0 pl-md-5">
                                There are many benefits at Sky Express - from
                                individual personal development opportunities to
                                a diverse health and sports program and an attractive
                                salary with special benefits.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>


        <div class="container-fluid video_section your_career" style="background-image: url('{{ asset('images/web/career-image.jpg') }}'); background-repeat: no-repeat;">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h3 class="mb-4" style="color: #f1592a; text-align: center;">YOUR CAREER</h3><br>
                            <h5>We offer a first-line view on the future of cyber security. Choose to fully develop your potential!</h5><br><br><br>
                            <!-- <h5>Your application to Sky Express: That's how it works</h5><br> -->
                            <p>
                                Sky Express is looking for talented individuals who will bring diverse range of experience and capabilities. <br class="d-none d-md-block">
                                We are glad that you are interested in us as an employer - maybe you will join the team soon! <br class="d-none d-md-block">
                                Check out our job openings below to find your next career opportunity with us.
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>


        <div class="container-fluid career_positions">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <button class="btn btn-default orange_btn text-uppercase">Open Positions</button>

                                <table class="table table-borderless">
                                    <thead>
                                      <tr>
                                        <th scope="col">Role</th>
                                        <th scope="col">Job Family</th>
                                        <th scope="col">Language</th>
                                        <th scope="col">Location</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                      <td scope="row"><a href="{{ asset('assets/pdf/Sales Consultant_Sky Express job.pdf') }}" target="_blank">Sales Consultant</a></td>
                                        <td>Sales</td>
                                        <td>Serbian</td>
                                        <td>Belgrade</td>
                                      </tr>
                                      <tr>
                                        <td scope="row"><a href="{{ asset('assets/pdf/ERP Consultant_Sky Express job.pdf') }}" target="_blank">ERP Consultant</a> </td>
                                        <td>IT / Pre-sales</td>
                                        <td>Serbian</td>
                                        <td>Belgrade</td>
                                      </tr>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include("inc/footer")

@endsection

