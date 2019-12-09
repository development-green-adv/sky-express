@extends("layout/master")

@section("title", "Dogadjaji | Sky Express")

@section("style")

    <style>
    
        .event-card a{
            background-color: transparent !important;
            padding: 0px !important;
            color: #f1592a !important;
        }    

        .org_link{
            background-color: #f1592a !important;
            color: #fff !important;
        }

        

    </style>

@endsection

@section("seo")

    <style>

        #contact-eng{
            display: none;
        }

    </style>

@endsection

@section("content")

    @include("inc/header-sr")

        <div class="container-fluid top_section" style="background-image: url('{{ asset('images/web/news.png') }}'); background-repeat: no-repeat; background-color: #0b0b0d;">
            <div class="row">
                <div class="about_headline" data-aos="fade-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h1>Dogadjaji</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container events_section">

            @if(count($dataNext) > 0)

                @foreach($dataNext as $event)

                    @if($event->b_n == "sledi")

                        <div class="event-card">
                            <div class="row">

                                <?php 

                                    $ev = explode("-", $event->date);

                                    switch ($ev[1]) {

                                        case '1':
                                            $ev[1] = "Jan";
                                            break;

                                        case '2':
                                            $ev[1] = "Feb";
                                            break;
                                        
                                        case '3':
                                            $ev[1] = "Mar";
                                            break;

                                        case '4':
                                            $ev[1] = "Apr";
                                            break;

                                        case '5':
                                            $ev[1] = "Maj";
                                            break;

                                        case '6':
                                            $ev[1] = "Jun";
                                            break;
                                        
                                        case '7';
                                            $ev[1] = "Jul";
                                            break;

                                        case '8';
                                            $ev[1] = "Aug";
                                            break;

                                        case '9':
                                            $ev[1] = "Sep";
                                            break;

                                        case '10':
                                            $ev[1] = "Oct";
                                            break;

                                        case '11':
                                            $ev[1] = "Nov";
                                            break;

                                        case '12':
                                            $ev[1] = "Dec";
                                        
                                        default:
                                            # code...
                                            break;
                                    }

                                ?>

                                <div class="col-12 col-md-1 mb-3 mb-md-0">
                                    <h3 class="orange_text">{{ $ev[2] }} <br class="d-none d-md-block">{{ $ev[1] }} <br class="d-none d-md-block">{{ $ev[0] }}</h3>
                                </div>
                                <div class="col-12 col-md-4">
                                    <h4 class="mb-3">{{ $event->title }}</h4>
                                    <p class="time-icon"><span><img src="{{ asset('images/web/clock.png') }}"></span> {{ $event->time_from }} - {{ $event->time_to }}</p>
                                    <br>

                                    {!! $event->text !!}

                                    <br><br><br class="d-none d-md-block">
                                    <a class="org_link" target="_blank" href="{{ $event->link }}">DETALJNIJE</a>
                                </div>
                                <div class="col-12 col-md-7 mt-5 mt-md-0">
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
                        <h2>Prethodni dogadjaji</h2>
                    </div>
                </div>
            </div>


            @if(count($dataPrevious) > 0)

                @foreach($dataPrevious as $event)

                    @if($event->b_n == "prosao")

                        <div class="event-card">
                            <div class="row">

                                <?php 

                                    $ev = explode("-", $event->date);

                                    switch ($ev[1]) {

                                        case '1':
                                            $ev[1] = "Jan";
                                            break;

                                        case '2':
                                            $ev[1] = "Feb";
                                            break;

                                        case '3':
                                            $ev[1] = "Mar";
                                            break;

                                        case '4':
                                            $ev[1] = "Apr";
                                            break;

                                        case '5':
                                            $ev[1] = "Maj";
                                            break;

                                        case '6':
                                            $ev[1] = "Jun";
                                            break;

                                        case '7';
                                            $ev[1] = "Jul";
                                            break;

                                        case '8';
                                            $ev[1] = "Aug";
                                            break;

                                        case '9':
                                            $ev[1] = "Sep";
                                            break;

                                        case '10':
                                            $ev[1] = "Oct";
                                            break;

                                        case '11':
                                            $ev[1] = "Nov";
                                            break;

                                        case '12':
                                            $ev[1] = "Dec";

                                        default:
                                            # code...
                                            break;
                                        }

                                ?>

                                <div class="col-12 col-md-1">
                                    <h3 class="orange_text">{{ $ev[2] }} <br class="d-none d-md-block">{{ $ev[1] }} <br class="d-none d-md-block">{{ $ev[0] }}</h3>
                                </div>
                                <div class="col-12 col-md-4">
                                    <h4 class="mb-3">{{ $event->title }}</h4>
                                    <p class="time-icon"><span><img src="{{ asset('images/web/clock.png') }}"></span> {{ $event->time_from }} - {{ $event->time_to }}</p>
                                    <br>

                                    {!! $event->text !!}

                                    <br>
                                    @if($event->link != "") <a target="_blank" href="{{ $event->link }}">VIEW DETAILS</a> @else @endif
                                </div>
                                <div class="col-12 col-md-7 mt-5 mt-md-0">
                                    @if($event->main_image != "") <img class="img-fluid" src="images_gallery/{{ $event->main_image }}"> @else <img class="img-fluid" src="{{ asset('images/web/single-news-image.png') }}"> @endif
                                </div>
                            </div>
                        </div>

                    @endif

                @endforeach

            @endif

        </div>


    @include("inc/footer-sr")

@endsection