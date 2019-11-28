@extends("layout/master")

@section("title", "Single blog | Sky Express")

@section("content")

    @include("inc/header")

        <div class="container-fluid top_section" style="background-image: url('{{ asset('images/web/showcase.jpg') }}'); background-repeat: no-repeat;">
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

        <div class="container-fluid about_desc">
            <div class="row">
                <div class="container">

                    <div class="row">
                        <div class="col-7">
                            <h4 class="orange_color">
                                {{ $data->title }}
                            </h4>
                        </div>
                        <div class="col-5">
                        </div>
                    </div>

                    <div class="row" style="margin-top: 40px;">

                        <div class="col-12 col-md-7">
                            <img class="img-fluid" src="/public/images_gallery/{{ $data->main_image }}"><br><br>

                            {!! $data->text !!}

                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-12 col-md-4">
                            
                            <h4 style="color: #f1592a;">Previous news</h4><br>


                            @if(count($all) > 0)

                                @foreach($all as $allNews)

                                    <div class="row" style="margin-top: 0px;">
                                        <div class="col-12 col-md-8">
                                            <a style="color: #000; text-decoration: none; margin-bottom: 10px;" href="/single-news/{{ $allNews->alias }}">{{ $allNews->title }}</a>
                                        </div>
                                    </div><br>

                                @endforeach

                            @endif
                            

                        </div>

                    </div>

                </div>
            </div>
        </div>

    @include("inc/footer")

@endsection