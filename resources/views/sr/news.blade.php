@extends("layout/master")

@section("title", "Vesti | Sky Express")

@section("style")

<style>
    .pagination {
        margin-left: auto;
        margin-right: auto;
    }

    .page-link {
        border: none !important;
        font-size: 25px;
        margin-top: 30px;
    }

    .page-item.active .page-link {
        background-color: transparent;
        font-size: 25px !important;
        color: #f36f46 !important;
    }
</style>

@endsection

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

@section("content")

@include("inc/header-sr")

<div class="container-fluid top_section" style="background-image: url('{{ asset('images/web/news.png') }}'); background-repeat: no-repeat; background-color: #0b0b0d;">
    <div class="row">
        <div class="about_headline" data-aos="fade-top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>VESTI</h1>
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
                        <img style="width: 100%;" class="img-fluid" src="/public/images_gallery/{{ $news->main_image }}">
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

                        <br><br>
                        <a href="/sr/vesti/{{ $news->alias }}">SAZNAJ VIŠE</a>

                    </div>

                </div>

                @endforeach

                @endif

                <div class="col-12 col-md-12 text-center">
                    {!! $data->render() !!}
                </div>

            </div>
        </div>


        <div class="col-12 pl-3 pl-md-5 col-md-3 newss newss-right">
            <h4>POSLEDNJE VESTI</h4><br><br>

            @if(count($dataRight) > 0)

            @foreach($dataRight as $right)

            <a href="/sr/vesti{{ $right->alias }}">{{ $right->alias }}</a><br><br>

            @endforeach

            @endif
        </div>
    </div>
</div>
</div>


@include("inc/footer-sr")


@endsection