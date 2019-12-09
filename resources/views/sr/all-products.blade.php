@extends("layout/master")

@section("title", "All Products | Sky Express")

@section("content")

@section("seo")

<style>
    #contact-eng {
        display: none;
    }
</style>

@endsection

@include("inc/header-sr")

<div class="container-fluid top_section" style="background-image: url('{{ asset('images/web/df-labs.png') }}'); background-repeat: no-repeat; background-color: #0b0b0d;">
    <div class="row">
        <div class="about_headline" data-aos="fade-top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-white">PROIZVODI</h1>
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
                <h3>Sky Express nudi veoma pažljivo odabran niz komplementarnih, kompatibilnih i primjenjivih rešenja. Sva rešenja koja distribuiramo, bilo direktno ili preko prodajnih partnera, su priznata, dokazana i prilagođena zahtevima tržišta.</h3>
                <img src="{{ asset('images/web/all-products-image-map.png') }}" alt="" usemap="#skymap">
                <map name="skymap">
                    <area target="" alt="carbon black" title="carbon black" href="/sr/carbon-black" coords="326,0,290,60,325,120,393,119,427,60,392,1" shape="poly">
                    <area target="" alt="dflabs" title="dflabs" href="/sr/df-labs" coords="456,75,423,134,456,194,526,194,560,134,525,75" shape="poly">
                    <area target="" alt="open systems" title="open systems" href="/sr/open-systems" coords="568,189,534,248,568,309,638,308,672,248,637,189" shape="poly">
                    <area target="" alt="onapsis" title="onapsis" href="/sr/onapsis" coords="571,339,535,400,570,459,639,459,674,399,638,339" shape="poly">
                    <area target="" alt="logpoint" title="logpoint" href="/sr/logpoint" coords="522,489,488,548,521,609,591,608,626,548,590,489" shape="poly">
                    <area target="" alt="eperi" title="eperi" href="/sr/eperi" coords="398,574,363,633,398,693,466,693,501,634,466,574" shape="poly">
                    <area target="" alt="avast" title="avast" href="/sr/avast" coords="203,576,170,634,204,695,273,695,307,635,273,576" shape="poly">
                    <area target="" alt="security scorecard" title="security scorecard" href="/sr/security-scorecard" coords="80,491,46,551,80,610,150,610,184,551,149,491" shape="poly">
                    <area target="" alt="kerio" title="kerio" href="/sr/kerio" coords="35,342,1,401,36,461,105,461,139,402,104,342" shape="poly">
                </map>
            </div>
        </div>
    </div>
</div>

@include("inc/footer-sr")


@endsection