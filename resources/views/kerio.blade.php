@extends("layout/master")

@section("title", "Kerio | Sky Express")

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


<div class="container about_desc kerio-first-part">
    <div class="row">
        <div class="col-12 mb-5">
            <img class="kerio-page-logo" src="{{ asset('images/web/kerio-page-logo.png') }}" alt="">
        </div>
        <div class="col-12 mb-4">
            <h4>Fast deployment. High usability.</h4><br>
        </div>
        <div class="col-12 col-md-6 mb-4 mb-md-0">
            <p class="pr-0 pr-md-5 mb-4">
                Connect, communicate, and collaborate without <br class="d-none d-md-block"> compromise — Kerio’s award-winning products are tailored to the needs of small and mid-sized businesses.
            </p>
        </div>
        <div class="col-12 col-md-6">
            <div class="df-labs-right-first-part">
                <p class="mb-5 pl-0 pl-md-5">
                    All products combine powerful features with ease of use for business users and IT professionals.
                    Our attractive licensing packages and flexibility to run on many hardware and software configurations
                    deliver enterprise-class functionality for a low total cost of ownership.
                </p>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid rose_section">
    <div class="row">

    </div>
</div>


<div class="df-labs-second-part carbon-black-second-part">
    <div class="df-labs-second-part-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="orange_text mb-5">Kerio products have three important principles:</h4>
            </div>
            <div class="col-12">
                <div class="kerio-second-part">
                    <p class="mb-3">SIMPLICITY - Robust solutions that focus on flexibility, accessibility and functionality without
                        unnecessary IT complexity. </p>
                    <p class="mb-3">STABILITY - Reliable, dependable communication and collaboration without disruptive and
                        expensive unplanned downtime.</p>
                    <p>SECURITY - Protection that extends from the network to the business -- role-based policies, “office” phone calls routed to mobile devices, encrypted email -- and enables users to work
                        anytime, anywhere.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid rose_section">
    <div class="row">

    </div>
</div>

<div class="avast-third-part eperi-third-part">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="kerio-third-part-left">
                    <h5 class="orange_text mb-2">Kerio Connect</h5>
                    <p class="pr-5 mb-5"> Secure, enterprise-style email, calendar & collaboration without the high cost
                    </p>
                    <p class="mb-4">Email, calendar, IM and more - for less</p>
                    <ul class="eperi-first-part-ul kerio-third-part-left-ul">
                        <li class="mb-3">
                            <div class="row">
                                <div class="col-2 col-md-1">
                                    <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                </div>
                                <div class="col-10 col-md-11">
                                    <p>Kerio Connect delivers all the features and
                                        functionality for collaboration and messaging solution without the complexity and high price tag of other
                                        systems.</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="row">
                                <div class="col-2 col-md-1">
                                    <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                </div>
                                <div class="col-10 col-md-11">
                                    <p>Email is integrated with shared calendars and
                                        scheduling, contacts management, tasks, notes, shared and public folders, and instant messaging.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="row">
                                <div class="col-2 col-md-1">
                                    <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                </div>
                                <div class="col-10 col-md-11">
                                    <p>Synchronize messages by direct push to your choice of mobile device via Microsoft ActiveSync(R)</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="row">
                                <div class="col-2 col-md-1">
                                    <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                </div>
                                <div class="col-10 col-md-11">
                                    <p>Instant Messaging is XMPP-compatible and can be used from various 3rd party chat/IM applications on desktop and mobile phones</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="kerio-third-part-left">
                    <h5 class="orange_text mb-2">Kerio Control</h5>
                    <p class="pr-0 pr-md-5 mb-5"> Detect threats, block viruses, and filter traffic with the firewall built for SMB
                    </p>
                    <p class="mb-4">Next-generation firewall</p>
                    <p class="mb-4">Preserve the integrity of your servers with deep packet
                        inspection and advanced network routing <br class="d-none d-md-block">
                        capabilities -- including simultaneous IPv4 and IPv6
                        support. Create inbound and outbound traffic policies,
                        restricting communication by specific URL, application, traffic type, content category and time of day.</p>
                    <p>Kerio Control’s IPS adds a transparent layer of network protection, with Snort-based behavior analysis, and
                        a regularly updated database of rules and blacklisted IP addresses from Emerging Threats.</p>
                </div>
            </div>
        </div>
        <div class="row row-kerio-third">
            <div class="col-md-6">
                <div class="kerio-card">
                    <div class="kerio-card-content text-center pt-4">
                        <h6 class="orange_text">Kerio<strong>Connect</strong></h6>
                        <p class="my-2">MAIL SERVER + MORE</p>
                        <p class="px-5">Enterprise-class email,
                            calendars, contacts, tasks,
                            & instant <br class="d-none d-md-block"> messaging
                            - wherever you are</p>
                    </div>
                    <img class="pt-2" src="{{ asset('images/web/kario-card-icon.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="kerio-card">
                    <div class="kerio-card-content text-center">
                        <h6 class="orange_text">Kerio<strong>Control</strong></h6>
                        <p class="my-2">FIREWALL + MORE</p>
                        <p class="px-5">Unified Threat Management and Network Intelligence for the higest level of protection </p>
                    </div>
                    <img src="{{ asset('images/web/kario-card-icon-right.png') }}" alt="">
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