@extends("layout/master")

@section("title", "News | Sky Express")

@section("style")

    <style>
        
        .newss{
            margin-top: 30px;
        }

        .events_section{
            padding-top: 50px;
            padding-bottom: 100px;
        }  

        .event-card {
            padding-top: 75px;
            padding-bottom: 75px;
            border-bottom: 1px solid #a7a9ac;
        }

        .event-card p {
            font-size: 16px;
            font-weight: 400;
        }

        .events_section .event-card:last-child {
            border-bottom: none;
        }

        .events_section a{
            font-size: 20px;
            background-color: #f36f46;
            color: #fff;
            padding: 8px 35px;
            text-decoration: none;
            transition: all .4s;
        }

        .events_section a:hover {
            background-color: #08090b;
            color: #f1592a;
        }

        .previosuBtn{
            background-color: #f36f46;
            color: #fff;
            font-weight: bold;
            padding: 15px 50px;
        }

        .previous-events-title {
            background-color: #f1592a;
            display: inline-block;
            padding: 10px 50px;
            color: #fff;
            margin-top: 50px;
            
        }

        .previous-events-title h2 {
            font-size: 1.75rem;
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
                                <h1>EVENTS</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container events_section">

            <div class="event-card">
                <div class="row">
                    <div class="col-12 col-md-1">
                        <h3 class="orange_text">16<br>DEC<br>2019</h3>
                    </div>
                    <div class="col-12 col-md-4">
                        <h4 class="mb-3">GDPR Konferencija 2019 Podgorica</h4>
                        <p class="time-icon"><span><img src="{{ asset('images/web/clock.png') }}"></span> 8:00am - 5:00pm</p>
                        <br>
                        <p class="my-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Esse, veritatis optio quo similique facere, non laboriosam itaque 
                            nulla dolor quas fuga iure a eligendi ipsa odit est fugit. Ut, inventore?
                        </p>
                        <br>
                        <a href="#">VIEW DETAILS</a>
                    </div>
                    <div class="col-12 col-md-7">
                        <img class="img-fluid" src="{{ asset('images/web/events.png') }}">
                    </div>
                </div>
            </div>

            <div class="event-card">
                <div class="row">
                    <div class="col-12 col-md-1">
                        <h3 class="orange_text">16<br>DEC<br>2019</h3>
                    </div>
                    <div class="col-12 col-md-4">
                        <h4 class="mb-3">GDPR Konferencija 2019 Podgorica</h4>
                        <p class="time-icon"><span><img src="{{ asset('images/web/clock.png') }}"></span> 8:00am - 5:00pm</p>
                        <br>
                        <p class="my-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Esse, veritatis optio quo similique facere, non laboriosam itaque 
                            nulla dolor quas fuga iure a eligendi ipsa odit est fugit. Ut, inventore?
                        </p>
                        <br>
                        <a href="#">VIEW DETAILS</a>
                    </div>
                    <div class="col-12 col-md-7">
                        <img class="img-fluid" src="{{ asset('images/web/events.png') }}">
                    </div>
                </div>
            </div>

            <div class="event-card">
                <div class="row">
                    <div class="col-12 col-md-1">
                        <h3 class="orange_text">16<br>DEC<br>2019</h3>
                    </div>
                    <div class="col-12 col-md-4">
                        <h4 class="mb-3">GDPR Konferencija 2019 Podgorica</h4>
                        <p class="time-icon"><span><img src="{{ asset('images/web/clock.png') }}"></span> 8:00am - 5:00pm</p>
                        <br>
                        <p class="my-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Esse, veritatis optio quo similique facere, non laboriosam itaque 
                            nulla dolor quas fuga iure a eligendi ipsa odit est fugit. Ut, inventore?
                        </p>
                        <br>
                        <a href="#">VIEW DETAILS</a>
                    </div>
                    <div class="col-12 col-md-7">
                        <img class="img-fluid" src="{{ asset('images/web/events.png') }}">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12 text-center">
                    <div class="previous-events-title">
                        <h2>Previous events</h2>
                    </div>
                </div>
            </div>


            <div class="event-card">
                <div class="row">
                    <div class="col-12 col-md-1">
                        <h3 class="orange_text">16<br>DEC<br>2019</h3>
                    </div>
                    <div class="col-12 col-md-4">
                        <h4 class="mb-3">GDPR Konferencija 2019 Podgorica</h4>
                        <p class="time-icon"><span><img src="{{ asset('images/web/clock.png') }}"></span> 8:00am - 5:00pm</p>
                        <br>
                        <p class="my-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Esse, veritatis optio quo similique facere, non laboriosam itaque 
                            nulla dolor quas fuga iure a eligendi ipsa odit est fugit. Ut, inventore?
                        </p>
                        <br>
                        <a href="#">VIEW DETAILS</a>
                    </div>
                    <div class="col-12 col-md-7">
                        <img class="img-fluid" src="{{ asset('images/web/events.png') }}">
                    </div>
                </div>
            </div>

        </div>


    @include("inc/footer")

@endsection