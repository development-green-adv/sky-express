@extends("layout/master")

@section("title", "Events | Sky Express")

@section("style")

    <style>
    
        .event-card a{
            background-color: transparent !important;
            padding: 0px !important;
            color: #000 !important;
        }    

        .org_link{
            background-color: #f1592a !important;
            color: #fff !important;
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

            @if(count($data) > 0)

                @foreach($data as $event)

                    @if($event->b_n == "sledi")

                        <div class="event-card">
                            <div class="row">

                                <?php 

                                    $ev = explode("-", $event->date);

                                ?>

                                <div class="col-12 col-md-1">
                                    <h3 class="orange_text">{{ $ev[2] }}<br>{{ $ev[1] }}<br>{{ $ev[0] }}</h3>
                                </div>
                                <div class="col-12 col-md-4">
                                    <h4 class="mb-3">{{ $event->title }}</h4>
                                    <p class="time-icon"><span><img src="{{ asset('images/web/clock.png') }}"></span> {{ $event->time_from }} - {{ $event->time_to }}</p>
                                    <br>

                                    {!! $event->text !!}

                                    <br>
                                    <a class="org_link" target="_blank" href="{{ $event->link }}">VIEW DETAILS</a>
                                </div>
                                <div class="col-12 col-md-7">
                                    @if($event->main_image != "") <img class="img-fluid" src="images_gallery/{{ $event->main_image }}"> @else <img class="img-fluid" src="{{ asset('images/web/single-news-image.png') }}"> @endif
                                </div>
                            </div>
                        </div>

                    @endif

                @endforeach

            @endif


            <div class="row">
                <div class="col-12 text-center">
                    <div class="previous-events-title">
                        <h2>Previous events</h2>
                    </div>
                </div>
            </div>


            @if(count($data) > 0)

                @foreach($data as $event)

                    @if($event->b_n == "prosao")

                        <div class="event-card">
                            <div class="row">

                                <?php 

                                    $ev = explode("-", $event->date);

                                ?>

                                <div class="col-12 col-md-1">
                                    <h3 class="orange_text">{{ $ev[2] }}<br>{{ $ev[1] }}<br>{{ $ev[0] }}</h3>
                                </div>
                                <div class="col-12 col-md-4">
                                    <h4 class="mb-3">{{ $event->title }}</h4>
                                    <p class="time-icon"><span><img src="{{ asset('images/web/clock.png') }}"></span> {{ $event->time_from }} - {{ $event->time_to }}</p>
                                    <br>

                                    {!! $event->text !!}

                                    <br>
                                    <a target="_blank" href="{{ $event->link }}">VIEW DETAILS</a>
                                </div>
                                <div class="col-12 col-md-7">
                                    @if($event->main_image != "") <img class="img-fluid" src="images_gallery/{{ $event->main_image }}"> @else <img class="img-fluid" src="{{ asset('images/web/single-news-image.png') }}"> @endif
                                </div>
                            </div>
                        </div>

                    @endif

                @endforeach

            @endif

        </div>


    @include("inc/footer")

@endsection