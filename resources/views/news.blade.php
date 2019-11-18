@extends("layout/master")

@section("title", "News | Sky Express")

@section("style")

    <style>
        
        .newss{
            margin-top: 30px;
        }

        .news_section{
            padding-top: 50px;
            padding-bottom: 80px;
        }   
        
        .news_section a{
            color: #000;
            transition: all .2s;
            text-decoration: none;
        }

        .news_section a:hover{
            color: #f36f46;
        }

        .news_item{
            border: 1px solid #000;
            padding: 15px;
        }

        .news_item a{
            color: #f36f46;
            font-size: 20px;
        }

    </style>

@endsection

@section("content")

    @include("inc/header")

        <div class="container-fluid top_section" style="background-image: url('{{ asset('images/web/news.png') }}'); background-repeat: no-repeat; background-color: #0b0b0d;">
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


        <div class="container news_section">
            <div class="row">
                <div class="col-12 col-md-9">
                    <div class="row">

                        <div class="col-12 col-md-6 newss">
                            <img class="img-fluid" src="{{ asset('images/web/news.jpg') }}" alt="">
                            <div class="news_item">
                                <h3 class="orange_text">November 2019</h3> <br>

                                <h3>
                                    The Second regional Cyber Security Conference was held on May 17th, 2019 in Podgorica
                                </h3><br>
                                <p>
                                    The Second regional Cyber Security Conference was held on May 17th, 2019 in Podgorica, Montenegro,
                                    organized by Vision Event, patronized by Ministry of Public Administration of Montenegro. The conference was host 
                                    around 130 participants from South East Europe, including representatives of NATO, state institutions and private IT 
                                    representatives and cyber security.
                                </p><br>

                                <a href="#">Read more</a>
                            </div> 
                        </div>

                        <div class="col-12 col-md-6 newss">
                            <img class="img-fluid" src="{{ asset('images/web/news.jpg') }}" alt="">
                            <div class="news_item">
                                <h3 class="orange_text">November 2019</h3> <br>

                                <h3>
                                    The Second regional Cyber Security Conference was held on May 17th, 2019 in Podgorica
                                </h3><br>
                                <p>
                                    The Second regional Cyber Security Conference was held on May 17th, 2019 in Podgorica, Montenegro,
                                    organized by Vision Event, patronized by Ministry of Public Administration of Montenegro. The conference was host 
                                    around 130 participants from South East Europe, including representatives of NATO, state institutions and private IT 
                                    representatives and cyber security.
                                </p><br>

                                <a href="#">Read more</a>
                            </div> 
                        </div>


                        <div class="col-12 col-md-6 newss">
                            <img class="img-fluid" src="{{ asset('images/web/news.jpg') }}" alt="">
                            <div class="news_item">
                                <h3 class="orange_text">November 2019</h3> <br>

                                <h3>
                                    The Second regional Cyber Security Conference was held on May 17th, 2019 in Podgorica
                                </h3><br>
                                <p>
                                    The Second regional Cyber Security Conference was held on May 17th, 2019 in Podgorica, Montenegro,
                                    organized by Vision Event, patronized by Ministry of Public Administration of Montenegro. The conference was host 
                                    around 130 participants from South East Europe, including representatives of NATO, state institutions and private IT 
                                    representatives and cyber security.
                                </p><br>

                                <a href="#">Read more</a>
                            </div> 
                        </div>

                        <div class="col-12 col-md-6 newss">
                            <img class="img-fluid" src="{{ asset('images/web/news.jpg') }}" alt="">
                            <div class="news_item">
                                <h3 class="orange_text">November 2019</h3> <br>

                                <h3>
                                    The Second regional Cyber Security Conference was held on May 17th, 2019 in Podgorica
                                </h3><br>
                                <p>
                                    The Second regional Cyber Security Conference was held on May 17th, 2019 in Podgorica, Montenegro,
                                    organized by Vision Event, patronized by Ministry of Public Administration of Montenegro. The conference was host 
                                    around 130 participants from South East Europe, including representatives of NATO, state institutions and private IT 
                                    representatives and cyber security.
                                </p><br>

                                <a href="#">Read more</a>
                            </div> 
                        </div>
    
    
                        
                    </div>
                </div>
                <div class="col-12 offset-md-1 col-md-2 newss">
                    <h4>Previous news</h4><br><br>

                    <a href="#">The Second regional Cyber Security Conference was held on May 17th, 2019 in Podgorica</a><br><br>
                    <a href="#">The Second regional Cyber Security</a><br><br>
                    <a href="#">The Second regional Cyber Security</a><br><br>
                    <a href="#">The Second regional Cyber Security</a><br><br>
                    <a href="#">The Second regional Cyber Security</a><br><br>
                </div>
            </div>
        </div>


        @include("inc/footer")


@endsection