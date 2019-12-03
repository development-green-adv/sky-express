@extends("layout/master")

@section("title", "All Products | Sky Express")

@section("content")

    @include("inc/header")

        <div class="container-fluid top_section" style="background-image: url('{{ asset('images/web/df-labs.png') }}'); background-repeat: no-repeat; background-color: #0b0b0d;">
            <div class="row">
                <div class="about_headline" data-aos="fade-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="text-white">PRODUCTS</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid all-products">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center position-relative all-products-links">
                        <h3>Sky Express offers a very selective range of complemental, compatible 
                            and applicable solutions. <br> 
                            All the solutions we distribute, either directly or through sales partners, are recognized, 
                            proven and tailored to fit market requirements.</h3>
                            {{-- <a id="carbon-black-link" href="/carbon-black"></a>
                            <a id="df-labs-link" href="/df-labs"></a>
                            <a id="open-systems-link" href="#">open systems</a>
                            <a href="#">onapsis</a>
                            <a href="#">logpoint</a>
                            <a href="#">eperi</a>
                            <a href="#">avast</a>
                            <a href="#">sec-score</a>
                            <a href="#">kerio</a> --}}
                        <img src="{{ asset('images/web/all-products-image.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

    @include("inc/footer")


@endsection