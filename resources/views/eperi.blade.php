@extends("layout/master")

@section("title", "Eperi | Sky Express")

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


<div class="container about_desc eperi-first-part">
    <div class="row">
        <div class="col-12 mb-5">
            <img class="eperi-page-logo" src="{{ asset('images/web/eperi-page-logo.png') }}" alt="">
        </div>
        {{-- <div class="col-12 mb-4">
                    <h4>Security, performance and privacy solutions for consumer and business users</h4><br>
                </div> --}}
        <div class="col-12 col-md-6 mb-4 mb-md-0">
            <p class="pr-0 pr-md-5 mb-4">
                Eperi is a leading provider of cloud data protection solutions (CDP). It’s pioneering solutions provides customers with the highest standards of data security and compliance for widespread cloud services, such as Office 365 and Salesforce, as well as databases and enterprise applications.
            </p>
        </div>
        <div class="col-12 col-md-6">
            <div class="df-labs-right-first-part">
                <p class="mb-5 pl-0 pl-md-5">
                    Eperi solutions help ensure that internal and external privacy and compliance requirements are enforced
                    internally and centrally and that customers can retain sole control over all their privacy processes.

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
            <div class="col-12 text-center">
                <h4 class="mb-4 text-white">DATA PROTECTION, GDPR COMPLIANCE, USABILITY.</h4>
                <h4 class="orange_text mb-4 mb-md-0">Everything from a single source with the eperi Gateway.</h4>
            </div>
            <div class="col-md-6">
                <div class="df-labs-second-part-left eperi-page-second-part-left">
                    <h4 class="mb-4 text-white pl-0 pl-md-5">Eperi guarantees:</h4>
                    <ul class="eperi-first-part-ul">
                        <li class="mb-3">
                            <div class="row">
                                <div class="col-2 col-md-1">
                                    <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                </div>
                                <div class="col-10 col-md-11">
                                    <p>Real time data encryption;</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="row">
                                <div class="col-2 col-md-1">
                                    <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                </div>
                                <div class="col-10 col-md-11">
                                    <p>Only authorized users can access protected data;</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="row">
                                <div class="col-2 col-md-1">
                                    <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                </div>
                                <div class="col-10 col-md-11">
                                    <p>Completely stand-alone security system without needs for any adaptation of existing application, database or interface;</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="row">
                                <div class="col-2 col-md-1">
                                    <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                </div>
                                <div class="col-10 col-md-11">
                                    <p>German quality;</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="df-labs-second-part-right carbon-black-second-part-right avast-page-second-part avast-page-second-part-right">
                    <div class="avast-page-second-part-card">
                        <h4 class="text-white mb-4 pl-0 pl-md-5">eperi SECURE YOUR DATA IN THE CLOUD.</h4>
                        <p class="pl-0 pr-0 pl-md-5 pr-md-5">
                            Office applications, CRM, data storage or HR software: more than 65 % of all companies use cloud applications to organize work more cost-effectively, efficiently and flexibly. How do you protect your business-critical data from unauthorized access? And do you comply with data protection regulations,
                            for example for customer, employee or development data, without exceptions? eperi Cloud Data Protection is the simple, secure encryption solution for all SaaS and web applications to master these challenges.

                        </p>
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

<div class="container-fluid avast-third-part eperi-third-part">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h4 class="mb-0 mb-md-5 text-white">HOW DOES YOUR ORGANIZATION BENEFIT <br class="d-none d-md-block"> FROM EPERI CLOUD DATA PROTECTION?</h4>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-3">
                <div class="eperi-third-part-card">
                    <img class="img-fluid office-365" src="{{ asset('images/web/eperi-card-1.png') }}" alt="">
                    <h6 class="orange_text mt-5 mb-3 pl-4">EPERI CLOUD DATA PROTECTION FOR OFFICE 365</h6>
                    <p class="pr-3 pl-4">Encrypt and tokenize critical data in mail, calendars and other Office 365
                        applications. Only you can read your data.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="eperi-third-part-card">
                    <img class="img-fluid" src="{{ asset('images/web/eperi-card-2.png') }}" alt="">
                    <h6 class="orange_text mt-5 mb-2 pl-4">EPERI CLOUD DATA PROTECTION FOR SALESFORCE</h6>
                    <p class="pr-3 pl-4">Eperi ensures that your data is never accessible to
                        unauthorized third parties. Data protection at rest, in use and in transit.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="eperi-third-part-card">
                    <img class="img-fluid" src="{{ asset('images/web/eperi-card-3.png') }}" alt="">
                    <h6 class="orange_text mt-5 mb-2 pl-4">EPERI CLOUD DATA PROTECTION FOR WEB APPLICATIONS</h6>
                    <p class="pr-3 pl-4">Central point of control for compliance: use the unique flexibility of the eperi
                        platform to protect all of your cloud apps.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="eperi-third-part-card text-center">
                    <img class="img-fluid eperi-gateway-logo" src="{{ asset('images/web/eperi-card-4.png') }}" alt="">
                    <h6 class="orange_text mt-4 mb-4 eperi-gateway-title">THE EPERI GATEWAY</h6>
                    <p class="pr-3 pl-4">The eperi Gateway is a
                        flexible template
                        architecture covering the most important functions, such as KMS, IAM,
                        pseudonymization.</p>
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