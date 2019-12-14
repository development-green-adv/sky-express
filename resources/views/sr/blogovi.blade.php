@extends("layout/master")

@section("title", "Blog | Sky Express")

@section("content")

@section("seo")

<style>
    #contact-eng {
        display: none;
    }

    #pop-up-eng {
        display: none;
    }
</style>

@endsection

@include("inc/header-sr")

<div class="container-fluid top_section" style="background-image: url('{{ asset('images/web/showcase.jpg') }}'); background-repeat: no-repeat;">
    <div class="row">
        <div class="about_headline" data-aos="fade-top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>BLOG</h1>
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
                    <h4 style="color: #404041; font-weight: 400;">DOBRODOŠLI NA <span style="color: #f1592a;">SKY EXPRESS</span> BLOG STRANICU</h4><br>
                    <p>
                        Pročitajte naš novi sveži sadržaj koji se ažurira na svake nedelje da biste stekli uvid u sve što se tiče sigurnosti, <br>
                        orkestracija, tehnologija za autorizaciju i reagovanje, najnoviji razvoj aktuelnih tema o cyber-sigurnosti,
                        novosti iz industrije i više o našem timu poznatih stručnjaka.
                    </p>
                </div>
            </div>

            <div class="row" style="margin-top: 50px;">
                <div class="col-12 col-md-12">
                    <h5><b>Trenutno nemamo aktivne blogove.</b></h5>
                </div>
                <!--<div class="col-12 col-md-4 blog_item" style="margin-top: 40px;">
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
                        </div>-->

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

@include("inc/footer-sr")

@endsection