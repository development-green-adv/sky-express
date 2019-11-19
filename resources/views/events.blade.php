@extends("layout/master")

@section("title", "News | Sky Express")

@section("style")


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