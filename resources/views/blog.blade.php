@extends("layout/master")

@section("title", "Blog | Sky Express")

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
                            <h4 style="color: #404041; font-weight: 400;">WELCOME TO THE <span style="color: #f1592a;">SKY EXPRESS</span> BLOG</h4><br>
                            <p>
                                Read our fresh new content updated on a weekly basis to gain insight into everything about security,<br>
                                Orchestration, Autination and Response technology, the latest developments of cybersecurity hot topics,
                                Industry news and more from our team of knowledgeable experts.
                            </p>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 50px;">

                        <div class="col-12 col-md-4 blog_item" style="margin-top: 40px;">
                            <div class="card" style="width: 18rem;">
                                <img class="img-fluid" src="{{ asset('images/web/network.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h6 class="card-title" style="color: #f1592a;">November 2019</h6>
                                    <p class="card-text">The Second regional Cyber Security Conference was held on May 17th, 2019 in Podgorica.</p><br><br>
                                    <a href="/single-blog" style="color: #f1592a;">Read blog</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 blog_item" style="margin-top: 40px;">
                            <div class="card" style="width: 18rem;">
                                <img class="img-fluid" src="{{ asset('images/web/network.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h6 class="card-title" style="color: #f1592a;">November 2019</h6>
                                    <p class="card-text">The Second regional Cyber Security Conference was held on May 17th, 2019 in Podgorica.</p><br><br>
                                    <a href="/single-blog" style="color: #f1592a;">Read blog</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 blog_item" style="margin-top: 40px;">
                            <div class="card" style="width: 18rem;">
                                <img class="img-fluid" src="{{ asset('images/web/network.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h6 class="card-title" style="color: #f1592a;">November 2019</h6>
                                    <p class="card-text">The Second regional Cyber Security Conference was held on May 17th, 2019 in Podgorica.</p><br><br>
                                    <a href="/single-blog" style="color: #f1592a;">Read blog</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 blog_item" style="margin-top: 40px;">
                            <div class="card" style="width: 18rem;">
                                <img class="img-fluid" src="{{ asset('images/web/network.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h6 class="card-title" style="color: #f1592a;">November 2019</h6>
                                    <p class="card-text">The Second regional Cyber Security Conference was held on May 17th, 2019 in Podgorica.</p><br><br>
                                    <a href="/single-blog" style="color: #f1592a;">Read blog</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 blog_item" style="margin-top: 40px;">
                            <div class="card" style="width: 18rem;">
                                <img class="img-fluid" src="{{ asset('images/web/network.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h6 class="card-title" style="color: #f1592a;">November 2019</h6>
                                    <p class="card-text">The Second regional Cyber Security Conference was held on May 17th, 2019 in Podgorica.</p><br><br>
                                    <a href="/single-blog" style="color: #f1592a;">Read blog</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 blog_item" style="margin-top: 40px;">
                            <div class="card" style="width: 18rem;">
                                <img class="img-fluid" src="{{ asset('images/web/network.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h6 class="card-title" style="color: #f1592a;">November 2019</h6>
                                    <p class="card-text">The Second regional Cyber Security Conference was held on May 17th, 2019 in Podgorica.</p><br><br>
                                    <a href="/single-blog" style="color: #f1592a;">Read blog</a>
                                </div>
                            </div>
                        </div>

                    </div>


                    <!--<div class="row" style="margin-top: 50px;">
                        <div class="col-12 col-md-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>-->

                </div>
            </div>
        </div>

    @include("inc/footer")

@endsection