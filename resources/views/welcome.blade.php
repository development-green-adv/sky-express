@extends("layout/master")

@section("title", "Sky Express")

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


@section("content")

@include("inc/header")

<div class="container-fluid video_section">
    <div class="row" style="position: relative;">

        <div class="col-12 col-md-12" style="padding-left: 0px; padding-right: 0px;">
            <video width="100%" height="auto" autoplay id="video_player" muted="muted">
                <source src="{{ asset('video/particle.mp4') }}" type="video/mp4">
            </video>
        </div>

        <div class="container">
            <div class="row">
                <div id="slider-showcase" class="slider-showcase move_video_slider_text">

                    <div class="col-12 pb-3">
                        <h1 data-aos="fade-right" class="orange_text">EXPERT <b>DEFENSE</b></h1>
                        <h2 data-aos="fade-left">FOR ENTERPRISE</h2>
                        <br>
                        <h3 data-aos="fade-right">DEFEND YOUR ORGANIZATION AGAINST CYBER THREATS</h3>
                        <br><br>
                        <a class="orange_link slider-btn-home" data-aos="fade-up" href="/contact">Contact our team</a>
                    </div>

                    <div class="col-12 pb-3" data-aos="fade-up">
                        <h1 class="orange_text">ADVANCED</h1>
                        <h2>CYBER SECURITY SOLUTIONS</h2>
                        <br>
                        <h3>SELECTIVE RANGE OF COMPLEMENTAL, COMPATIBLE AND APPLICABLE SOLUTIONS</h3>
                        <br><br>
                        <a class="orange_link  slider-btn-home" href="/all-products">Discover more</a>
                    </div>

                    <div class="col-12 pb-3" data-aos="fade-up">
                        <h1 class="orange_text">CYBER SECURITY EXPERTS</h1>
                        <h2>AT YOUR SERVICE</h2>
                        <br>
                        <h3>HIGHLY QUALIFIED AND EXPERIENCED CYBERSECURITY PROFESSIONALS </h3>
                        <br><br>
                        <a class="orange_link  slider-btn-home" href="/why-us">Learn more</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



<div class="container-fluid rose_section" style="margin-top: -8px;">
    <div class="row">

    </div>
</div>

<div class="container-fluid security_solutions">
    <div class="row">
        <div class="container">
            <div class="col-12 text-center">
                <button class="btn btn-default orange_btn">CYBERSECURITY SOLUTIONS</button>
                <p>
                    Sky Express is an exclusive distributor of advanced cybersecurity solutions and services in the field of information security for Serbian market, but also Bosnia and Herzegovina, Montenegro, and North Macedonia.
                </p>
                <br><br>
                <a class="btn btn-default" href="/all-products">Learn more</a>
                <br><br><br>
                <div class="row">
                    <div class="col-12 col-md-4 solutions_item solutions_item-overlay">
                        <img class="img-fluid" src="{{ asset('images/web/1.png') }}" alt="">
                        <div class="white-overlay"></div>
                        <a style="background-color: transparent !important; margin-top: -30px;" href="/by-compliance">
                            <h4>By Compliance</h4>
                        </a>
                    </div>
                    <div class="col-12 col-md-4 solutions_item solutions_item-overlay">
                        <img class="img-fluid" src="{{ asset('images/web/2.png') }}" alt=""></a>
                        <div class="white-overlay"></div>
                        <a style="background-color: transparent !important; margin-top: -30px;" href="/solutions">
                            <h4>Industry Solutions</h4>
                        </a>
                    </div>
                    <div class="col-12 col-md-4 solutions_item solutions_item-overlay">
                        <img class="img-fluid" src="{{ asset('images/web/3.png') }}" alt="">
                        <div class="white-overlay"></div>
                        <a style="background-color: transparent !important; margin-top: -30px;" href="/security-and-risk-management">
                            <h4>Security & <br> Risk Management</h4>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



<div class="container-fluid antivirus_section">
    <div class="row">
        <div class="container">
            <div class="row h-100">

                <div class="col-12 text-center" style="margin-bottom: 30px;">
                    <h3>WE WORK WITH THE BEST CYBERSECURITY SOLUTIONS</h3>
                </div>
                <div class="col-12 col-md-3 text-center align-self-center antivirus_item">
                    <a href="/carbon-black"><img class="img-fluid" src="{{ asset('images/web/carbon.png') }}"></a>
                </div>
                <div class="col-12 col-md-3 text-center align-self-center antivirus_item">
                    <a href="/df-labs"><img class="img-fluid" src="{{ asset('images/web/df.png') }}"></a>
                </div>
                <div class="col-12 col-md-3 text-center align-self-center antivirus_item">
                    <a href="/open-systems"><img class="img-fluid" src="{{ asset('images/web/open.png') }}"></a>
                </div>
                <div class="col-12 col-md-3 text-center align-self-center antivirus_item">
                    <a href="/onapsis"><img class="img-fluid" src="{{ asset('images/web/onapsis.png') }}"></a>
                </div>
                <div class="col-12 col-md-3 text-center align-self-center antivirus_item">
                    <a href="/avast"><img class="img-fluid" src="{{ asset('images/web/avast-logo.png') }}"></a>
                </div>
                <div class="col-12 col-md-3 text-center align-self-center antivirus_item">
                    <a href="/eperi"> <img class="img-fluid" src="{{ asset('images/web/eperi.png') }}"></a>
                </div>
                <div class="col-12 col-md-3 text-center align-self-center antivirus_item">
                    <a href="/kerio"><img class="img-fluid" src="{{ asset('images/web/kerio.png') }}"></a>
                </div>
                <div style="margin-top: -10px;" class="col-12 col-md-3 text-center align-self-center antivirus_item">
                    <a href="/security-scorecard"><img class="img-fluid" src="{{ asset('images/web/security.png') }}"></a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid rose_section">
    <div class="row">

    </div>
</div>


<div class="container-fluid about_section">
    <div class="aboute-overlay"></div>
    <div class="row">
        <div class="container">
            <div class="col-12 text-center">
                <button class="btn btn-default orange_btn">ABOUT SKY EXPRESS</button>
            </div>

            <div class="row home-aboute">
                <div class="col-12 col-md-6">
                    <h3>Your trusted <br> Cybersecurity Partner</h3>
                </div>
                <div class="col-12 col-md-6">
                    <p>
                        Sky Express is the regional leader in data protection. As an integral part of the Switzerland’s Evolution Equity Partners fund, Sky Express utilizes unique opportunity to communicate with world-leading cyber security solution providers, keeping the pace with latest trends and developments in the field of information security and establishing reliable relations with customers, based on quality and trust.
                    </p>
                    <br>
                    <br><br class="d-none d-md-block"><br class="d-none d-md-block"><br class="d-none d-md-block"><br class="d-none d-md-block">
                    <a class="btn btn-default" href="/about-us">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid service_section">
    <div class="row">
        <div class="container">
            <div class="row h-100">
                <div class="col-12 text-center" style="margin-bottom: 30px;">
                    <h3>OUR SERVICES</h3>
                </div>

                <div class="col-12 col-md-3 my-5 text-center align-self-center service_item">
                    <a href="/security-analysis">
                        <img class="img-fluid" src="{{ asset('images/web/secu.png') }}">
                        <p>Security Analysis</p>
                    </a>
                </div>
                <div class="col-12 col-md-3  my-5 text-center align-self-center service_item">
                    <a href="/compliance-analysis">
                        <img class="img-fluid" src="{{ asset('images/web/compi.png') }}">
                        <p>Compilance Analysis</p>
                    </a>
                </div>
                <div class="col-12 col-md-3  my-5 text-center align-self-center service_item">
                    <a href="/managed-security-services">
                        <img class="img-fluid" src="{{ asset('images/web/pin.png') }}">
                        <p>Managed Security Services (MSSP)</p>
                    </a>
                </div>
                <div class="col-12 col-md-3  my-5 text-center align-self-center service_item">
                    <a href="/information-security-management-system">
                        <img class="img-fluid" src="{{ asset('images/web/sec.png') }}">
                        <p>Security Management Systems (ISMS)</p>
                    </a>
                </div>

                <div class="col-12 col-md-4  my-5 text-center align-self-center service_item">
                    <a href="/security-awareness-planning">
                        <img class="img-fluid" src="{{ asset('images/web/se.png') }}">
                        <p>Security Awareness Planning</p>
                    </a>
                </div>
                <div class="col-12 col-md-4  my-5 text-center align-self-center service_item">
                    <a href="/pen-testing">
                        <img class="img-fluid" src="{{ asset('images/web/pen.png') }}">
                        <p>Pen Testing & Ethical Hacking</p>
                    </a>
                </div>
                <div class="col-12 col-md-4  my-5 text-center align-self-center service_item">
                    <a href="/security-consulting">
                        <img class="img-fluid" src="{{ asset('images/web/consult.png') }}">
                        <p>Security Consulting</p>
                    </a>
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
                <button class="btn btn-default orange_btn">WHY US</button>
                <p>
                    Highly qualified and expirienced, our cybersecurity professionals embrace strong foundation in all aspects of information technology and cybersecurity.
                    They bring together decades of experience in cybersecurity and significant expirience from leading companies in
                    cirves global markets and various areas, such as finance, health, insurance, government agencies and the inteligence community.
                </p>
                <br><br>
                <a class="btn btn-default" href="/why-us">Learn more</a>
                <br><br><br>
                <div class="row">
                    <div class="col-12 col-md-4 solutions_item">
                        <img class="img-fluid" src="{{ asset('images/web/why-us-home-1.png') }}" alt="">
                        <h3>TRUSTED <br> ADVISOR</h3>
                    </div>
                    <div class="col-12 col-md-4 solutions_item">
                        <img class="img-fluid" src="{{ asset('images/web/why-us-home-2.png') }}" alt="">
                        <h3>CERTIFIED <br> PROFFESIONALS</h3>
                    </div>
                    <div class="col-12 col-md-4 solutions_item">
                        <img class="img-fluid" src="{{ asset('images/web/why-us-home-3.png') }}" alt="">
                        <h3>SAGNIFICANT <br> EXPERIENCE</h3>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container-fluid rose_section">
    <div class="row">

    </div>
</div>


<div class="container-fluid antivirus_section references">
    <div class="row">
        <div class="container">
            <div class="row h-100">

                <div class="col-12 text-center" style="margin-bottom: 30px;">
                    <h3>REFERENCES</h3>
                </div>
                <div class="slider-for h-100" id="slick-slider">
                    <div class="text-center align-self-center antivirus_item">
                        <img style="margin-left: auto; margin-right: auto; margin-top: auto; margin-bottom: auto;" class="img-fluid" src="{{ asset('images/web/direkt.png') }}">
                    </div>
                    <div class="text-center align-self-center antivirus_item">
                        <img style="margin-left: auto; margin-right: auto; margin-top: auto; margin-bottom: auto;" class="img-fluid" src="{{ asset('images/web/medi.png') }}">
                    </div>
                    <div class="text-center align-self-center antivirus_item">
                        <img style="margin-left: auto; margin-right: auto; margin-top: auto; margin-bottom: auto;" class="img-fluid" src="{{ asset('images/web/sremska.png') }}">
                    </div>
                    <div class="text-centeralign-self-center  antivirus_item">
                        <img style="margin-left: auto; margin-right: auto; margin-top: auto; margin-bottom: auto;" class="img-fluid" src="{{ asset('images/web/moji.png') }}">
                    </div>
                    <div class="text-center align-self-center antivirus_item">
                        <img style="margin-left: auto; margin-right: auto; margin-top: auto; margin-bottom: auto;" class="img-fluid" src="{{ asset('images/web/p3.png') }}">
                    </div>
                    <div class="text-center align-self-center antivirus_item">
                        <img style="margin-left: auto; margin-right: auto; margin-top: auto; margin-bottom: auto;" class="img-fluid" src="{{ asset('images/web/vlada.png') }}">
                    </div>
                    <div class="text-center align-self-center antivirus_item">
                        <img style="margin-left: auto; margin-right: auto; margin-top: auto; margin-bottom: auto;" class="img-fluid" src="{{ asset('images/web/beograd.png') }}">
                    </div>
                    <div class="text-center align-self-center antivirus_item">
                        <img style="margin-left: auto; margin-right: auto; margin-top: auto; margin-bottom: auto;" class="img-fluid" src="{{ asset('images/web/eps.png') }}">
                    </div>
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

<div class="container-fluid rose_section_image">
    <div class="row">
        <div class="col-12 col-md-12" style="padding-left: 0px; padding-right: 0px;">
            <video height="140px" width="100%" autoplay id="video_player" muted="muted" style="object-fit: fill;">
                <source src="{{ asset('video/small_video.mp4') }}" type="video/mp4">
            </video>
        </div>
    </div>
</div>


<div class="container-fluid contact-form">
    <div class="container">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-11">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-form-top">
                            <h4 class="mb-5">CONTACT US:</h4>

                            <p class="mb-5">Sky Express d.o.o.</p>

                            <div class="row mb-3 mb-md-0">
                                <div class="col-2 col-sm-1 col-md-1 mt-2">
                                    <img src="{{ asset('images/web/location.svg') }}" alt="">
                                </div>
                                <div class="col-10 col-sm-11 col-md-11 location-div">
                                    <p>Bulevar Milutina Milankovića 11A <br>
                                        11070, Belgrade, Serbia
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 my-auto">
                        <!-- 
                        <div class="contact-form-top-middle">
                            <ul>
                                <li class="mb-3"><img class="mr-3" src="{{ asset('images/web/phone.svg') }}"> <a class="mb-3" href="tel:+381646414461"> +381 64 641 44 61</a></li>
                                <li> <img class="mr-3" src="{{ asset('images/web/mail.svg') }}"><a href="mailto:prodaja@sky-express.rs">sales@sky-express.rs</a></li>
                            </ul>
                        </div> -->

                    </div>

                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-4 mb-md-0">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-12 mb-4 contact-phone-info">
                        <p class="orange_text">Tehnical Support for Enterprise solutions</p>
                        <a class="text-white" href="mailto:podrska@sky-express.rs">podrska@sky-express.rs</a> <br>
                        <a class="text-white" href="tel:+381646447376">+381 64 644 7376</a>
                    </div>
                    <div class="col-md-12 mb-4 contact-phone-info">
                        <p class="orange_text">Sales for Enterprise solutions</p>
                        <a class="text-white" href="mailto:prodaja@sky-express.rs">prodaja@sky-express.rs</a> <br>
                        <a class="text-white" href="tel:+381646446687">+381 64 6446 687</a>
                    </div>
                    <div class="col-md-12 mb-4 contact-phone-info">
                        <p class="orange_text">General</p>
                        <a class="text-white" href="mailto:administracija@sky-express.rs">administracija@sky-express.rs</a> <br>
                        <a class="text-white" href="tel:+381112421580">011/242 15 80</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12 mb-4 contact-phone-info">
                        <p class="orange_text">Tehnical Support for SMB solutions</p>
                        <a class="text-white" href="mailto:podrska@sky-express.rs">podrska@sky-express.rs</a> <br>
                        <a class="text-white" href="tel:+381646414460">+381 64 641 44 60</a>
                    </div>
                    <div class="col-md-12 mb-4 contact-phone-info">
                        <p class="orange_text">Sales for SMB solutions</p>
                        <a class="text-white" href="mailto:prodaja@sky-express.rs">prodaja@sky-express.rs</a> <br>
                        <a class="text-white" href="tel:+381646414460">+381 64 641 44 60</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-6">

                <form class="form-home-page">
                    <input type="text" placeholder="First name">
                    <input type="email" placeholder="Email">
                    <textarea placeholder="Type your message here..."></textarea>
                    <button type="submit">Submit</button>
                </form>

            </div>
            <div class="col-md-5"></div>
        </div>
    </div>
</div>


@include("inc/footer")

@endsection