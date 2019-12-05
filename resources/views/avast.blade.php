@extends("layout/master")

@section("title", "Avast | Sky Express")

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


        <div class="container about_desc avast-first-part">
            <div class="row">
                <div class="col-12 mb-5">
                    <img class="avast-page-logo" src="{{ asset('images/web/avast-page-logo.png') }}" alt="">
                </div>
                <div class="col-12 mb-4">
                    <h4>Security, performance and privacy solutions for consumer and business users</h4><br>
                </div>
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <p class="pr-0 pr-md-5 mb-4">
                            Avast is one of the largest security companies in the world using <br class="d-none d-md-block"> next-gen technologies to fight cyber
                            attacks in real time. It combines artificial intelligence with human ingenuity to create the world‘s largest
                            cybersecurity network protecting people and
                            businesses from attacks online.
                    </p>
                    <p class="pr-0 pr-md-5  mb-4">
                            Avast, the global leader in next-gen cybersecurity products for businesses and consumers, protects hundreds of millions of people online. Avast offers products under the Avast and AVG brands that protect people from threats on the internet and the evolving IoT threat landscape.
                    </p>
                    
                    <p class="pr-0 pr-md-5">
                            The company’s threat detection network is among the most advanced in the world, using machine learning and artificial intelligence technologies to detect and stop threats in real time. Avast creates <br class="d-none d-md-block"> top-ranked 
                            digital security products for Mobile, PC, and Mac.
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <div class="df-labs-right-first-part avast-right-first-part">
                        <h4 class="mb-4 pl-0 pl-md-5">Business Security</h4>
                        <p class="mb-5 pl-0 pl-md-5">
                            Safeguarding businesses with top-rated endpoint 
                            protection and managed services solutions, including on-premise and cloud security as well as remote 
                            management and monitoring tools and services.
                        </p>
                        
                        <h4 class="mb-4 pl-0 pl-md-5">Avast is focused on:</h4>

                        <ul class="avast-first-part-ul pl-0 pl-md-5">
                            <li class="mb-4">
                                <div class="row">
                                    <div class="col-2 col-md-1">
                                        <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                    </div>
                                    <div class="col-10 col-md-11">
                                        <h5 class="mt-2">Malware Detection and Blocking;</h5>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-4">
                                <div class="row">
                                    <div class="col-2 col-md-1">
                                        <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                    </div>
                                    <div class="col-10 col-md-11">
                                        <h5 class="mt-2">AI and Machine Learning;</h5>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-4">
                                <div class="row">
                                    <div class="col-2 col-md-1">
                                        <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                    </div>
                                    <div class="col-10 col-md-11">
                                        <h5 class="mt-2">Internet of Things;</h5>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-4">
                                <div class="row">
                                    <div class="col-2 col-md-1">
                                        <img src="{{ asset('images/web/correct.svg') }}" alt="">
                                    </div>
                                    <div class="col-10 col-md-11">
                                        <h5 class="mt-2">Location Technology;</h5>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        

        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>


        <div class=" df-labs-second-part carbon-black-second-part">
            <div class="df-labs-second-part-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="mb-4 mb-md-2 text-white">Products and Platforms</h3>
                        <p style="font-size: 18px; font-weight: 400;" class="text-white pr-0 pr-md-5">Choose from a range of powerful, easy-to-deploy security products and management platforms designed to keep small and medium businesses protected from any cyberthreat.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="df-labs-second-part-left avast-page-second-part-left">
                            <div class="avast-page-second-part-card mb-4">
                                <h4 class="orange_text mb-2">Standalone Antivirus products</h4>
                                <p class="pr-0 pr-md-5">Protect your business from malware and hackers 
                                        without Management Console. Install your chosen 
                                        antivirus on your devices and forget it.</p>
                            </div>
                            <div class="avast-page-second-part-card">
                                <h4 class="orange_text mb-2">Managed Antivirus products</h4>
                                <p class="pr-0 pr-md-5">Keep data, devices, and people in your network safe from cyberthreats with advanced antivirus protection and intuitive Management Console.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="df-labs-second-part-right carbon-black-second-part-right avast-page-second-part avast-page-second-part-right">
                            <div class="avast-page-second-part-card mb-4">
                                <h4 class="orange_text mb-2 pl-0 pl-md-0">CloudCare</h4>
                                <p class="pl-0 pr-0 pr-md-5 pl-md-5">Deliver layered endpoint and network security services, monitor threats, and resolve issues -- all from a single, cloud-based platform.</p>
                            </div>
                            <div class="avast-page-second-part-card">
                                <h4 class="orange_text mb-2 pl-0 pl-md-0">Management Console</h4>
                                <p class="pl-0 pr-0 pr-md-5 pl-md-5">Easily deploy endpoint protection solutions to devices in your network and monitor them from a central 
                                        dashboard.</p>
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

        <div class="container-fluid avast-third-part">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h4 class="orange_text mb-5">Layered cybersecurity services for complete protection</h4>
                        <p class="text-white">Avast Business provides advanced, integrated endpoint and network security solutions for businesses and IT 
                                service providers. Backed by the largest, most globally dispersed threat detection network in the world, the Avast Business security portfolio makes it easy and affordable to secure, manage, and monitor changing business networks. 
                                The result is superior protection that businesses can count on.</p>
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