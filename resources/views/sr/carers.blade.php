@extends("layout/master")

@section("title", "Career | Sky Express")

@section("content")

@section("seo")

<style>
    #contact-eng {
        display: none;
    }
</style>

@endsection

@include("inc/header-sr")


<div class="container-fluid top_section" style="background-image: url('{{ asset('images/web/showcase.jpg') }}'); background-repeat: no-repeat;">
    <div class="row">
        <div class="about_headline" data-aos="fade-top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>KARIJERA</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container about_desc">
    <div class="row">
        <div class="col-12">
            <h5 style="color: #231f20; font-size: 25px;">
                <b>Sky Express vam pruža priliku da radite u naprednom i inovativnom okruženju u oblasti informacione bezbednosti, u visokospecijalizovanom timu inženjera i eksperata.</b>
            </h5>
        </div>
    </div><br>
    <div class="row">
        <div class="col-12 col-md-6">
            <h4>Zašto Sky Express?</h4><br>
            <p class="pr-0 pr-md-5">
                Raditi u Sky Express-u znači biti nagrađen za svoj doprinos. Pored profesionalnog razvoja i brojnih benefita, podstičemo naše zaposlene da koriste sve svoje potencijale i da konstantno pomeraju svoje granice.
            </p>
        </div>
        <div class="col-12 col-md-6">
            <p class="pl-0 pr-md-l">Postavljamo ispred sebe visoka očekivanja, ali u pozitivnoj, timski orijentisanoj kulturi. Brinemo jedni o drugima, dok smo u isto vreme fokusirani na rezultate i osvajanje novih uspeha.</p>
        </div>
    </div>
</div>


<div class="container-fluid rose_section">
    <div class="row">

    </div>
</div>


<div class="container-fluid video_section careers_corporate" style="background-image: url('{{ asset('images/web/careeer-corporate.jpg') }}'); background-repeat: no-repeat; background-position: center; background-size: cover;">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>Korporativna kultura</h4><br>
                    <p class="mb-4">Odnosimo se jedni prema drugima sa poštovanjem, razvijamo svoje sposobnosti i poštujemo različitosti. Ponosni smo na našu neposrednu i neformalnu komunikaciju. </p>
                    <p class="mb-4">Aktivno promovišemo i razvijamo okruženje u kom se saradnici osećaju angažovano i uvaženo, mesto gde mogu izneti svoje mišljenje i ponuditi svoje ideje otvoreno i bez ustručavanja. </p>
                    <p class="mb-4">Nastojimo da budemo jedna velika porodica, da tim bude važniji od pojedinca, da svako od nas može da menja stvari na bolje.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid rose_section">
    <div class="row">

    </div>
</div>


<div class="container-fluid carers_life">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- <h4>Life at Sky Express</h4> -->
                    <button class="btn btn-default orange_btn text-uppercase">Život u Sky Express-u</button>
                </div>
            </div><br>
            <div class="row">
                <div class="col-12 col-md-6 mt-5">
                    <img class="img-fluid" src="{{ asset('images/web/carers.png') }}" alt="">
                </div>
                <div class="col-12 col-md-6 mt-5">
                    <p class="pl-0 pl-md-5">
                        Posvećeni smo stvaranju prijatnog radnog okruženja za naše zaposlene.
                    </p><br>
                    <p class="pl-0 pl-md-5">
                        Jasno nam je da su naši zaposleni visoko motivisani tek onda kada se osećaju dobro i kad uživaju u svom poslu.
                    </p><br>
                    <p class="pl-0 pl-md-5">
                        Brinemo o zdravlju naših zaposlenih kroz organizovanje brojnih programa i inicijativa i podstičemo stvaranje ravnoteže između posla i privatnog života.
                    </p><br>
                    <p class="pl-0 pl-md-5">
                        There are many benefits at Sky Express - from
                        individual personal development opportunities to
                        a diverse health and sports program and an attractive
                        salary with special benefits.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid rose_section">
    <div class="row">

    </div>
</div>


<div class="container-fluid video_section your_career" style="background-image: url('{{ asset('images/web/career-image.jpg') }}'); background-repeat: no-repeat;">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="mb-4" style="color: #f1592a; text-align: center;">Vaša karijera</h3><br>
                    <h5>Sky Express nastoji da izgradi jači i kompetentniji tim zapošljavanjem eksperata koji nam donose nova znanja i iskustva. U tim rado uključujemo i one kojima je security strast i koji hoće da uče i razvijaju se zajedno sa nama.</h5><br><br><br>
                    <!-- <h5>Your application to Sky Express: That's how it works</h5><br> -->
                    <p>
                        Budite slobodni da nam pošaljete svoju prijavu, rado ćemo je razmotriti - možda se uskoro pridružite našem timu! Pišite nam na: posao@sky-express.rs
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid rose_section">
    <div class="row">

    </div>
</div>


<div class="container-fluid career_positions">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <button class="btn btn-default orange_btn text-uppercase">Trenutno otvorene pozicije: </button>

                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">Role</th>
                                <th scope="col">Job Family</th>
                                <th scope="col">Language</th>
                                <th scope="col">Location</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row"><a href="{{ asset('assets/pdf/Sales Consultant_Sky Express job.pdf') }}" target="_blank">Sales Consultant</a></td>
                                <td>Sales</td>
                                <td>Serbian</td>
                                <td>Belgrade</td>
                            </tr>
                            <tr>
                                <td scope="row"><a href="{{ asset('assets/pdf/ERP Consultant_Sky Express job.pdf') }}" target="_blank">ERP Consultant</a> </td>
                                <td>IT / Pre-sales</td>
                                <td>Serbian</td>
                                <td>Belgrade</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include("inc/footer-sr")

@endsection