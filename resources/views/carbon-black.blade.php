@extends("layout/master")

@section("title", "Carbon black | Sky Express")

@section("content")

@section("seo")

    <style>

        #contact-srb{
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


        <div class="container about_desc carbon-black-first-part">
            <div class="row">
                <div class="col-12 mb-5">
                    <img class="carbon-black-logo-img" src="{{ asset('images/web/carbon-black-logo.png') }}" alt="">
                </div>
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <h4>Leading provider of next-generation endpoint security.</h4><br>
                    <p class="pr-0 pr-md-5">
                        As a cybersecurity innovator, Carbon Black has<br class="d-none d-md-block">
                        pioneered multiple endpoint security categories,<br class="d-none d-md-block"> including application control, endpoint detection and <br class="d-none d-md-block"> response (EDR), and next-generation antivirus (NGAV).
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <div class="df-labs-right-first-part">
                        <p class="pl-0 pr-md-5 mb-4">Carbon Black offers solutions to all of organization's <br class="d-none d-md-block"> security needs and uses a series of individual services <br class="d-none d-md-block"> that run locally on your private network as well as <br class="d-none d-md-block"> remotely in the cloud.</p>
                        <h5 class="pl-0 pr-md-5 mb-4">Gold Standard in Endpoint Data</h5>
                        <p class="pl-0 pr-md-5">The VMware Carbon Black Cloud is an Effective and <br class="d-none d-md-block"> user-friendly endpoint solution for user devices. <br class="d-none d-md-block"> It features malware and non-malware protection that <br class="d-none d-md-block"> keeps threats at bay while protecting your computer <br class="d-none d-md-block"> systems from hackers and viruses.</p>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>


        <div class="container-fluid df-labs-second-part carbon-black-second-part">
            <div class="df-labs-second-part-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="df-labs-second-part-left ">
                            <h1 class="mb-5 orange_text">The VMware Carbon Black Cloud</h1>
                            <h2 class="text-white mb-3">Consolidated Endpoint Security</h2>
                            <h4 class="text-white mb-0 mb-md-3">Simplify Your Security Stack <br class="d-none d-md-block"> and Improve Your Protection</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="df-labs-second-part-right carbon-black-second-part-right">
                            <h2 class="text-white mb-3 pl-0 pl-md-5">Endpoint Protection Platform (EPP)</h2>
                            <h4 class="text-white pl-0 pl-md-5">The VMware Carbon Black Cloud consolidates security and provides you with what you need to secure your endpoints, using a single lightweight agent.</h4>
                            <ul>
                                <li class="mb-4">
                                    <div class="row">
                                        <div class="col-2 col-md-1">
                                            <img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11">
                                            <p>Stop more attacks, take back control over your <br class="d-none d-md-block"> endpoint, and worry less</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-4">
                                    <div class="row">
                                        <div class="col-2 col-md-1"><img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                        <div class="col-10 col-md-11"><p>Cut down the guesswork and close security gaps fast</p></div>
                                    </div>
                                </li>
                                <li class="mb-4">
                                    <div class="row">
                                        <div class="col-2 col-md-1"><img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt=""></div>
                                        <div class="col-10 col-md-11"><p>Minimize multi-vendor complexity and agent fatigue</p></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>

        <div class="container-fluid carbon-black-third-part">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="carbon-black-third-part-left">
                            <h3 class="orange_text">The VMware Carbon Black is Transforming <br class="d-none d-md-block"> Security Through Big Data and Analytics in <br class="d-none d-md-block"> the Cloud</h3>
                            <h3 style="color: #231f20;">Carbon Black is leveraging the power of big <br class="d-none d-md-block"> data and analytics to solve the challenges <br class="d-none d-md-block"> surrounding endpoint security. With The <br class="d-none d-md-block"> VMware Carbon Black Cloud platform, we are <br class="d-none d-md-block"> transforming cybersecurity to deliver <br class="d-none d-md-block"> a cloud-native endpoint protection platform <br class="d-none d-md-block"> (EPP) designed  to protect against the most <br class="d-none d-md-block"> advanced threats.</h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="carbon-black-third-part-right">
                            <h3 class="invisible">The VMware Carbon Black is Transforming Security Through Big Data and Analytics in <br class="d-none d-md-block"> the Cloud</h3>
                            <img class="w-100" src="{{ asset('images/web/carbon-black-third-part-right.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>

        

        <div class="container-fluid df-labs-fourth-part"> 
            {{-- <div class="df-labs-fourth-part-overlay"></div> --}}
            <div class="container">
                <div class="carbon-black-fourth-part-top">
                    <h4 class="text-white">The VMware Carbon Black Cloud <br class="d-none d-md-block"> CLOUD-NATIVE, EASY-TO-USE, <br class="d-none d-md-block"> ENDPOINT PROTECTION</h4>
                    <p>Simplify Your Security Stack and Improve Your Protection</p>
                </div>
            </div>

            <div class="container-header">
                <div class="row">
                    <div class="col-md-6">
                        <img class="w-100 mb-5 mb-md-0" src="{{ asset('images/web/carbon-black-fourth-part-left.png') }}" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="carbon-black-fourth-part-right">
                            <h4 class="text-white pl-0 pr-0 pr-md-5 pl-md-5 ">The VMware Carbon Black Cloud is Carbon <br class="d-none d-md-block"> Black's endpoint protection platform (EPP) <br class="d-none d-md-block"> delivering next-generation security and IT <br class="d-none d-md-block"> operations services through the cloud. <br class="d-none d-md-block"> It applies big data analytics across all <br class="d-none d-md-block"> endpoints to make predictions about - and <br class="d-none d-md-block"> provide protection from - current, future, and <br class="d-none d-md-block"> unknown attacks.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>


        
        <div class="container-fluid df-labs-fifth-part carbon-black-fifth-part">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="df-labs-fifth-part-left carbon-black-fifth-part-left">
                            <h2>CB DEFENSE</h2>
                            <h3 class="mb-5">NEXT-GENERATION ANTIVIRUS + EDR</h3>
                            <p class="mb-5 pr-0 pr-md-5">Highly-scalable, real-time threat hunting and incident <br class="d-none d-md-block"> response (IR) solution delivering unfiltered visibility for <br class="d-none d-md-block"> top security operations centers and IR teams </p>
                            <ul>
                                <li class="mb-3">
                                    <div class="row">
                                        <div class="col-2 col-md-1">
                                            <img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11">
                                            <p><strong>Predict and Prevent:</strong> Finds new and existing malware <br class="d-none d-md-block"> and protects systems;</p>
                                        </div>
                                    </div>
                                </li>
                                <li  class="mb-3">
                                    <div class="row">
                                        <div class="col-2 col-md-1">
                                            <img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11">
                                            <p><strong>Capture and Analyze:</strong> Carbon Black uses predictive <br class="d-none d-md-block"> cloud technology and storage;</p>
                                        </div>
                                    </div>
                                </li>
                                <li  class="mb-3">
                                    <div class="row">
                                        <div class="col-2 col-md-1">
                                            <img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11">
                                            <p><strong>Quick Response:</strong> Detection and response capabilities <br class="d-none d-md-block"> work in real time;</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-2 col-md-1">
                                            <img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11">
                                            <p><strong>Operate at Scale:</strong> Automation enables mass deployment <br class="d-none d-md-block"> and task completion.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="df-labs-fifth-part-right text-center carbon-black-fifth-part-image">
                            <h2 class="mb-5 invisible">CB DEFENSE</h2>
                            <h3 class="invisible">NEXT-GENERATION ANTIVIRUS + EDR</h3>
                            <img class="w-100" src="{{ asset('images/web/carbon-black-fifth-part-right.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>


        <div class="container-fluid carbon-black-sixth-part">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="carbon-black-sixth-part-left">
                            <h3 class="orange_text">CB RESPONSE</h3>
                            <h3 class="mb-4">NEXT-GENERATION ANTIVIRUS + EDR</h3>
                            <p class="mb-5 pr-0 pr-md-5">Highly-scalable, real-time threat hunting and incident <br class="d-none d-md-block"> response (IR) solution delivering unfiltered visibility for <br class="d-none d-md-block"> top security operations centers and IR teams </p>
                            <img class="ml-5" src="{{ asset('images/web/carbon-black-sixth-part-left.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="carbon-black-sixth-part-right">
                            <h3 class="orange_text invisible">CB RESPONSE</h3>
                            <h3 class="mb-4 invisible">NEXT-GENERATION ANTIVIRUS + EDR</h3>
                            <ul>
                                <li class="mb-3">
                                    <div class="row">
                                        <div class="col-2 col-md-1">
                                            <img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11">
                                            <p>Faster end-to-end response and remediation</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-3">
                                    <div class="row">
                                        <div class="col-2 col-md-1">
                                            <img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11">
                                            <p>Accelerated IR and theat hunting with unfilterd <br class="d-none d-md-block"> endpoint visibility</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-3">
                                    <div class="row">
                                        <div class="col-2 col-md-1">
                                            <img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11">
                                            <p>Rapid indentification of attacer activities and root <br class="d-none d-md-block"> cause</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-3">
                                    <div class="row">
                                        <div class="col-2 col-md-1">
                                            <img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11">
                                            <p>Secure remote access to infected endpoints for <br class="d-none d-md-block"> in-depth investigation</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-3">
                                    <div class="row">
                                        <div class="col-2 col-md-1">
                                            <img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11">
                                            <p>Better protection from future attacks through <br class="d-none d-md-block"> automated hunting</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-3">
                                    <div class="row">
                                        <div class="col-2 col-md-1">
                                            <img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11">
                                            <p>Unlimited retention and scale for the largest installations</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-3">
                                    <div class="row">
                                        <div class="col-2 col-md-1">
                                            <img class="mr-4" src="{{ asset('images/web/correct.svg') }}" alt="">
                                        </div>
                                        <div class="col-10 col-md-11">
                                            <p>Reduced IT headaches from reimaging and helpdesk <br class="d-none d-md-block"> tickets</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
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