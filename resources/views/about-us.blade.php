@extends("layout/master")

@section("title", "About Us | Sky Express")

@section("content")

@section("seo")

<style>
    #contact-srb {
        display: none;
    }

    #pop-up {
        display: none;
    }
</style>

@endsection

@include("inc/header")

<div class="container-fluid top_section" style="background-image: url('{{ asset('images/web/showcase.jpg') }}'); background-repeat: no-repeat;">
    <div class="row">
        <div class="about_headline" data-aos="fade-top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>ABOUT US</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container about_desc">
    <div class="row">
        <div class="col-12 mb-4">
            <h2>SKY EXPRESS</h2>
        </div>
        <div class="col-12 col-md-5 mb-4 mb-md-0">
            <h4>Your trusted Cybersecurity Partner</h4><br>
            {{-- <p class="pr-5">
                        <b>Sky Express</b> is an exclusive distributor of <br class="d-none d-md-block">
                        advanced cybersecurity solutions and services <br class="d-none d-md-block"> in the
                        field of information security, covering SEE market.
                    </p> --}}
            <p class="pr-0 pr-md-5"><b>Sky Express</b> is an exclusive distributor of advanced cybersecurity solutions and services in the field of information security for Serbian market, but also Bosnia and Herzegovina, Montenegro, and North Macedonia.</p>
        </div>
        <div class="col-12 col-md-7">
            <p class="pl-0 pl-md-5">
                As partner company of the Switzerland’s <b>Evolution Equity Partners</b> fund, Sky Express utilizes unique opportunity to communicate with world-leading cyber security solution providers, keeping the pace with latest trends and developments in the field of information security and establishing reliable relations with customers, based on quality and trust.
            </p><br>
            <p class="pl-0 pl-md-5">
                Sky Express offers a very selective range of
                complemental, compatible and applicable solutions.
                All the solutions we distribute, either directly or through
                sales partners, are recognized, proven and tailored to fit
                market requirements.
            </p>
        </div>
    </div>
</div>


<div class="container-fluid rose_section_top">
    <div class="row">

    </div>
</div>


<div class="container-fluid about_partner_section" style="background-image: url('{{ asset('images/web/aboute-1.jpg') }}'); border-bottom:0px solid #f1592a;">
    <div class="container">
        <div class="slider-for slider-about">
            <div>
                <a href="/carbon-black"><img class="img-fluid" src="{{ asset('images/web/carbon.png') }}"></a>
            </div>
            <div>
                <a href="/df-labs"><img class="img-fluid" src="{{ asset('images/web/df.png') }}"></a>
            </div>
            <div>
                <a href="/open-systems"><img class="img-fluid" src="{{ asset('images/web/open.png') }}"></a>
            </div>
            <div>
                <a href="/onapsis"><img class="img-fluid" src="{{ asset('images/web/onapsis.png') }}"></a>
            </div>
            <div>
                <a href="/avast"><img class="img-fluid" src="{{ asset('images/web/avast-logo.png') }}"></a>
            </div>
            <div>
                <a href="/eperi"><img class="img-fluid" src="{{ asset('images/web/eperi.png') }}"></a>
            </div>
            <div>
                <a href="/kerio"><img class="img-fluid" src="{{ asset('images/web/kerio.png') }}"></a>
            </div>
            <div>
                <a href="/security-scorecard"><img class="img-fluid" src="{{ asset('images/web/security.png') }}"></a>
            </div>
        </div>
    </div>
</div>



<div class="container about_desc about_mission">
    <div class="row">
        <div class="col-12 col-md-6">
            <p class="first-pharagraf mb-5 mb-md-0">
                <span class="orange_text">Our mission</span> is to ensure the safety,
                security and privacy of data in all
                aspects of business areas such as
                finance, insurance, health, state
                administration, law enforcement,
                intelligence agencies, education
                and many others.
            </p>
        </div>
        <div class="col-12 col-md-6">
            <p class="second-pharagraf">
                <span class="orange_text">Our vision</span> is to provide innovative
                solutions in the field of information
                security to users and continually be a
                step ahead of cyber-attacks, ensuring
                that our customers’ integrity and
                reputation stay unharmed in a
                constantly evolving and demanding
                world of cyber security.
            </p>
        </div>
    </div>
</div>


<div class="container-fluid rose_section">
    <div class="row">

    </div>
</div>


<div class="container-fluid video_section about_solutions" style="background-image: url('{{ asset('images/web/aboute-2.jpg') }}');">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>Advanced cybersecurity solutions</h4><br>
                    <h2><b>Providing impenetrable Defense<br class="d-none d-md-block"> For Enterprise Companies</b></h2><br>
                    <p>
                        Defend your organization against the latest cyber threats. Sky Express offers a very selective range<br>
                        of complemental, compatible and applicable solutions.
                    </p>
                    <br><br>
                    <a class="orange_link" href="#">View solutions</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid rose_section">
    <div class="row">

    </div>
</div>


<div class="container-fluid security_solutions">
    <div class="row">
        <div class="container">
            <div class="col-12 text-center">
                <button class="btn btn-default orange_btn">LATEST NEWS</button>

                <div class="row" style="margin-top: 70px;">
                    @if(count($data) > 0)
                    @foreach($data as $new)

                    <div class="col-12 col-md-4 text-left solutions_item">
                        <div style="height: 200px; overflow: hidden;">
                            <img class="img-fluid" src="/public/images_gallery/{{ $new->main_image }}">
                        </div>

                        <h6>{{ mb_strlen($new->title) > 78 ? mb_substr($new->title,0,78)."..." : $new->title  }}</h6>

                        {!! mb_strlen($new->text) > 250 ? mb_substr($new->text,0,250)."..." : $new->text !!}

                        <a style="display: block; margin-top: 20px;" class="link_without" href="/single-news/{{ $new->alias }}">READ MORE</a>
                    </div>

                    @endforeach
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>


@include("inc/footer")


@endsection