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
                                <h1>OUR BLOG</h1>
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
                        <div class="col-12">
                            <h4 style="color: #404041; font-weight: 400;"><b>The Second regional Cyber Security Conference was held on May 17th, 2019<br> in Podgorica</b></h4><br>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 50px;">

                        <div class="col-12 col-md-7">
                            <img class="img-fluid" src="{{ asset('images/web/network.jpg') }}"><br><br>
                            <p>
                                Read our fresh new content updated on a weekly basis to gain insight into everything about security, 
                                Orchestration, Automation and Response technology, the latest developments of cybersecurity hot topics, industry news
                                and more from our team of knowledgable exprerts.
                                Read our fresh new content updated on a weekly basis to gain insight into everything about security, 
                                Orchestration, Automation and Response technology, the latest developments of cybersecurity hot topics, industry news
                                and more from our team of knowledgable exprerts.
                                Read our fresh new content updated on a weekly basis to gain insight into everything about security, 
                                Orchestration, Automation and Response technology, the latest developments of cybersecurity hot topics, industry news
                                and more from our team of knowledgable exprerts.
                            </p><br>
                            <p>
                                Read our fresh new content updated on a weekly basis to gain insight into everything about security, 
                                Orchestration, Automation and Response technology, the latest developments of cybersecurity hot topics, industry news
                                and more from our team of knowledgable exprerts.
                                Read our fresh new content updated on a weekly basis to gain insight into everything about security, 
                                Orchestration, Automation and Response technology, the latest developments of cybersecurity hot topics, industry news
                                and more from our team of knowledgable exprerts.
                                Read our fresh new content updated on a weekly basis to gain insight into everything about security, 
                                Orchestration, Automation and Response technology, the latest developments of cybersecurity hot topics, industry news
                                and more from our team of knowledgable exprerts.
                            </p><br>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-12 col-md-4">
                            
                            <h4 style="color: #f1592a;">Recent Posts</h4><br>

                            <div class="row" style="margin-top: 0px;">
                                <div class="col-12 col-md-4">
                                    <img class="img-fluid" src="{{ asset('images/web/development.jpg') }}">
                                </div>
                                <div class="col-12 col-md-8">
                                    <p>The Second regional Cyber Security Conference was held on May 17th, 2019 in Podgorica</p>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 20px;">
                                <div class="col-12 col-md-4">
                                    <img class="img-fluid" src="{{ asset('images/web/development.jpg') }}">
                                </div>
                                <div class="col-12 col-md-8">
                                    <p>The Second regional Cyber Security Conference was held on May 17th, 2019 in Podgorica</p>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 20px;">
                                <div class="col-12 col-md-4">
                                    <img class="img-fluid" src="{{ asset('images/web/development.jpg') }}">
                                </div>
                                <div class="col-12 col-md-8">
                                    <p>The Second regional Cyber Security Conference was held on May 17th, 2019 in Podgorica</p>
                                </div>
                            </div>

                            <br><br>

                            <div class="row">
                                <div class="col-12">
                                    <h4 style="color: #f1592a;">About Us</h4><br>

                                    <img class="img-fluid" src="{{ asset('images/web/business.jpg') }}"><br><br>
        
                                    <p>
                                        <span style="color: #f1592a;">Sky Express</span> is an exclusive distributor of advanced cybersecurity solutions and services in the field
                                        of information security, covering SEE market.
                                    </p><br>
                                    <p>
                                        Sky Express offers a very selective range of complemental, compatibile.
                                    </p><br>
        
                                    <a style="background-color: #f1592a; color: #fff; padding: 5px 30px;" href="/about-us">Learn more</a>
                                </div>
                            </div>
                            

                        </div>

                    </div>

                </div>
            </div>
        </div>

    @include("inc/footer")

@endsection