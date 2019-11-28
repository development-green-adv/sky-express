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
                                <h1>NEWS</h1>
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
                        
                        @if(count($data) > 0)

                            @foreach($data as $news)

                                <div class="col-12 col-md-6 newss">
                                    <div style="width: 100%; height: 200px; overflow: hidden;">
                                        <img style="width: 100%;" class="img-fluid" src="images_gallery/{{ $news->main_image }}">
                                    </div>
                                    
                                    <div class="news_item">
                                        <h3 class="orange_text">{{ $news->date }}</h3> <br>

                                        <h3>
                                            {{ strlen($news->title) > 50? substr($news->title,0,50)."..." : $news->title }}
                                        </h3><br>
                                    
                                        <h5>
                                            {{ $news->subtitle }}
                                        </h5>
                                        <br>

                                        {!! mb_strlen($news->text) > 500 ? mb_substr($news->text,0,500)."..." : $news->text !!}
                                    </div>
                                    <a href="/single-news/{{ $news->alias }}">Read more</a>
                                </div> 

                            @endforeach
                        
                        @endif
                    
                    </div>   
                </div>
            

                <div class="col-12 offset-md-1 col-md-2 newss newss-right">
                    <h4>Previous news</h4><br><br>

                    @if(count($data) > 0)

                        @foreach($data as $news)

                            <a href="#">{{ $news->title }}</a><br><br>

                        @endforeach

                    @endif
                </div>
            </div>
        </div>
    </div>


    @include("inc/footer")


@endsection