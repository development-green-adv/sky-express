@extends("layout/master")

@section("title", "Open Systems | Sky Express")

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


        <div class="container-fluid about_desc open-systems-first-page">
            <div class="container">
                    <div class="row">
                            <div class="col-12 mb-5">
                                <img class="open-systems-page-logo" src="{{ asset('images/web/open-systems-page-logo.png') }}" alt="">
                            </div>
            
                            <div class="row">
                                <div class="col-12  col-md-6">
                                    <div class="row">
                                        <div class="col-12 mb-4">
                                            <h4>Leading Managed Security Service Provider</h4><br>
                                        </div>
                                        <div class="col-12 mb-4 mb-md-0">
                                            <p class="mb-4 pr-0 pr-md-5">
                                                With assured security, AI-assisted automation, and expert management that free valuable IT resources, Open Systems delivers the visibility, flexibility, and control you want with the performance, simplicity, and security you absolutely need.
                                            </p>
                                            <p class="mb-4 pr-0 pr-md-5">
                                                More than 80% of all network problems are proactively detected and ticketed by AI-based automated monitoring technology, so our experts are free to focus on resolving them quickly. By effectively combining human and machine intelligence, 90% of all tickets are resolved without customer intervention.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="df-labs-right-first-part">
                                        <h4 class="invisible">Leading Managed Security Service Provider</h4><br class="d-none d-md-block"><br class="d-none d-md-block">
                                        <ul class="open-systems-first-ul">
                                            <li>
                                                <div class="row">
                                                    <div class="col-2 col-md-1">
                                                        <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                                    </div>
                                                    <div class="col-10 col-md-11"><p>Open Systems Delivers All the Performance and Protection You’ll Need</p></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-2 col-md-1">
                                                        <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                                    </div>
                                                    <div class="col-10 col-md-11"><p>Remove the competitive disadvantage of vulnerability to cyber attack</p></div>
                                                </div>
                                            </li>
                                        </ul>
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


        <div class="container-fluid df-labs-second-part carbon-black-second-part open-systems-second-part">
            <div class="df-labs-second-part-overlay"></div>
            <div class="container">
                <div class="row ">
                    <div class="col-12 text-center">
                            <p class="mb-4">Securely enforce your organization's internet access security policy for resources located in the public internet. 
                                    Their integrated Secure Web Gateway, which includes SSL scanning, URL filtering, and malware protection, increases the level of protection of client machines against malicious content and restricts access to URL categories.</p>
                            <p class="mb-5"><b>The Mission Control WAF</b> is the safeguard that checks all access attempts from the internet to web applications in the network 
                                    infrastructure. The WAF first terminates the SSL connection and verifies the HTTP request for protocol validity, matches 
                                    the request with the defined authorization requirements for the specific application and, if necessary, 
                                    redirects the user to a login service.</p>
                            <h4>Open Systems guarantees 99, 9% up time ICT user communications.</h4>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>

        <div class="avast-third-part eperi-third-part open-system-third-part">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="open-system-third-part-left">
                            <h3 >NETWORK SECURITY MONITORING</h3>
                            <h4 class="mb-4">Eliminate Your Network Blind Spots</h4>
                            <p class="mb-5 mb-md-0">The key to managing network breaches is finding them quickly. Open Systems Network Security Monitoring closes the gap between traditional detection and 
                                    security monitoring and more complex SIEM/SOC 
                                    solutions.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="open-system-third-part-right">
                            <h3 class="mb-5 text-white">Accelerate to Real-Time Detection</h3>
                            <h4  class="mb-2">Aggregate Enterprise-Wide Monitoring</h4>
                            <p class="mb-4">
                                Get a holistic view of threats across your network
                            </p>
                            <h4  class="mb-2">See Everything in Detail</h4>
                            <p class="mb-4">From global risk scores to packet-level details</p>
                            <h4  class="mb-2">Enable Fast Analysis and Response</h4>
                            <p class="mb-4">We’ll triage events for you, and escalate as needed</p>
                            <h4  class="mb-2">Machine Learning Drives Better Analysis</h4>
                            <p>We’re continuously tuning for more signal, less noise</p>
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