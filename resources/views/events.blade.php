@extends("layout/master")

@section("title", "News | Sky Express")

@section("style")

    <style>
        
        .newss{
            margin-top: 30px;
        }

        .events_section{
            padding-top: 50px;
            padding-bottom: 80px;
        }  

        .events_section a{
            font-size: 20px;
            background-color: #f36f46;
            color: #fff;
            padding: 8px 35px;
        }

        .previosuBtn{
            background-color: #f36f46;
            color: #fff;
            font-weight: bold;
            padding: 15px 50px;
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
                                <h1 class="text-white">EVENTS</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container events_section">

            <div class="row" style="border-bottom: 1px solid #a7a9ac; padding-bottom: 40px; margin-top: 30px;">
                <div class="col-12 col-md-2">
                    <h3 class="orange_text">16<br>DEC<br>2019</h3>
                </div>
                <div class="col-12 col-md-4">
                    <h3>GDPR Konferencija 2019 Podgorica</h3><br>
                    <p><span><img src="{{ asset('images/web/clock.png') }}"></span> 8:00am - 5:00pm</p>
                    <br>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Esse, veritatis optio quo similique facere, non laboriosam itaque 
                        nulla dolor quas fuga iure a eligendi ipsa odit est fugit. Ut, inventore?
                    </p>
                    <br>
                    <a href="#">VIEW DETAILS</a>
                </div>
                <div class="col-12 col-md-6">
                    <img class="img-fluid" src="{{ asset('images/web/events.png') }}">
                </div>
            </div>

            <div class="row" style="border-bottom: 1px solid #a7a9ac; padding-bottom: 40px; margin-top: 30px;">
                <div class="col-12 col-md-2">
                    <h3 class="orange_text">16<br>DEC<br>2019</h3>
                </div>
                <div class="col-12 col-md-4">
                    <h3>GDPR Konferencija 2019 Podgorica</h3><br>
                    <p><span><img src="{{ asset('images/web/clock.png') }}"></span> 8:00am - 5:00pm</p>
                    <br>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Esse, veritatis optio quo similique facere, non laboriosam itaque 
                        nulla dolor quas fuga iure a eligendi ipsa odit est fugit. Ut, inventore?
                    </p>
                    <br>
                    <a href="#">VIEW DETAILS</a>
                </div>
                <div class="col-12 col-md-6">
                    <img class="img-fluid" src="{{ asset('images/web/events.png') }}">
                </div>
            </div>

            <div class="row" style="border-bottom: 1px solid #a7a9ac; padding-bottom: 40px; margin-top: 30px;">
                <div class="col-12 col-md-2">
                    <h3 class="orange_text">16<br>DEC<br>2019</h3>
                </div>
                <div class="col-12 col-md-4">
                    <h3>GDPR Konferencija 2019 Podgorica</h3><br>
                    <p><span><img src="{{ asset('images/web/clock.png') }}"></span> 8:00am - 5:00pm</p>
                    <br>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Esse, veritatis optio quo similique facere, non laboriosam itaque 
                        nulla dolor quas fuga iure a eligendi ipsa odit est fugit. Ut, inventore?
                    </p>
                    <br>
                    <a href="#">VIEW DETAILS</a>
                </div>
                <div class="col-12 col-md-6">
                    <img class="img-fluid" src="{{ asset('images/web/events.png') }}">
                </div>
            </div>


            <div class="row" style="margin-top: 50px; margin-bottom: 50px;">
                <div class="col-12 text-center">
                    <button class="btn btn-default previosuBtn">Previous events</button>
                </div>
            </div>


            <div class="row" style="border-bottom: 1px solid #a7a9ac; padding-bottom: 40px; margin-top: 30px;">
                <div class="col-12 col-md-2">
                    <h3 class="orange_text">16<br>DEC<br>2019</h3>
                </div>
                <div class="col-12 col-md-4">
                    <h3>GDPR Konferencija 2019 Podgorica</h3><br>
                    <p><span><img src="{{ asset('images/web/clock.png') }}"></span> 8:00am - 5:00pm</p>
                    <br>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Esse, veritatis optio quo similique facere, non laboriosam itaque 
                        nulla dolor quas fuga iure a eligendi ipsa odit est fugit. Ut, inventore?
                    </p>
                    <br>
                    <a href="#">VIEW DETAILS</a>
                </div>
                <div class="col-12 col-md-6">
                    <img class="img-fluid" src="{{ asset('images/web/events.png') }}">
                </div>
            </div>

        </div>


    @include("inc/footer")

@endsection