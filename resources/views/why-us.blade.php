@extends("layout/master")

@section("title", "Why Us | Sky Express")

@section("content")

    @include("inc/header")

        <div class="container-fluid top_section" style="background-image: url('{{ asset('images/web/showcase.jpg') }}'); background-repeat: no-repeat;">
            <div class="row">
                <div class="about_headline" data-aos="fade-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h1>WHY US</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container about_desc pen_services">
            <div class="row">
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <h4>Deep Expretise</h4><br>
                    <p class="pr-5 mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab sit sapiente saepe iure soluta molestias eligendi omnis eius id consectetur autem, et ea. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab sit sapiente saepe iure soluta molestias eligendi omnis eius id consectetur autem, et ea. 
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <h4 class="invisible">Pen Testing & Ethical Hacking</h4><br>
                    <p class="pl-5 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium itaque repellat debitis voluptate aliquam minima labore omnis laborum repudiandae provident, voluptas aperiam sed laboriosam quasi tempore incidunt doloremque obcaecati natus!</p>
                    <p class="pl-5 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium itaque repellat debitis voluptate aliquam minima labore omnis laborum repudiandae provident, voluptas aperiam sed laboriosam quasi tempore incidunt doloremque obcaecati natus!</p>
                </div>
            </div>
        </div>
        


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>

        <div class="container-fluid why-us-second-part">
            <!-- <div class="benefites_pen-testing-overlay"></div> -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="why-us-second-part-left">
                            <p class="pr-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In sequi eaque esse distinctio quasi corporis architecto minus fugiat laborum provident fuga at, pariatur necessitatibus nemo accusantium beatae culpa velit aliquam animi porro magni quam quod totam voluptas. Ut, temporibus ipsa?</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="why-us-second-part-right">
                            <p class="pl-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In sequi eaque esse distinctio quasi corporis architecto minus fugiat laborum provident fuga at.</p>

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
                        <button class="btn btn-default orange_btn">CERTIFICATIONS</button>
                    </div>
                    <div class="col-12">
                        <div class="why-us-page-cert">
                            <div class="why-us-page-cert-card">
                                <img class="img-fluid" src="{{ asset('images/web/cert-1.png') }}" alt="">
                            </div>
                            <div class="why-us-page-cert-card">
                                <img class="img-fluid" class="mb-auto" src="{{ asset('images/web/cert-2.png') }}" alt="">
                            </div>
                            <div class="why-us-page-cert-card">
                                <img class="img-fluid" class="mb-auto" src="{{ asset('images/web/cert-3.jpg') }}" alt="">
                            </div>
                            <div class="why-us-page-cert-card">
                                <img class="img-fluid" class="mb-auto" src="{{ asset('images/web/cert-4.png') }}" alt="">
                            </div>
                            <div class="why-us-page-cert-card">
                                <img class="img-fluid" class="mb-auto" src="{{ asset('images/web/cert5.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <h3 class="why-us-cet-text">Protect your data by establishing reliable partnership with trusted IT solution <br> provider who knows how to keep your business safe and secure.</h3>
                    </div>
                </div>
            </div>
        </div>



        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>

        <div class="container-fluid about_partner_section" style="background-image: url('{{ asset('images/web/aboute-1.jpg') }}'); border-bottom:2px solid #f1592a;">
            <div class="row">
                <div class="container">
                    <div class="row slider-for">
                        <div class="col-12 col-md-3 text-center align-self-center">
                            <img class="img-fluid" src="{{ asset('images/web/carbon.png') }}">
                        </div>
                        <div class="col-12 col-md-3 text-center align-self-centers">
                            <img class="img-fluid" src="{{ asset('images/web/df.png') }}">
                        </div>
                        <div class="col-12 col-md-3 text-center align-self-center">
                            <img class="img-fluid" src="{{ asset('images/web/open.png') }}">
                        </div>
                        <div class="col-12 col-md-3 text-center align-self-center">
                            <img class="img-fluid" src="{{ asset('images/web/onapsis.png') }}">
                        </div>
                        <div class="col-12 col-md-3 text-center align-self-center">
                            <img class="img-fluid" src="{{ asset('images/web/avast-logo.png') }}">
                        </div>
                        <div class="col-12 col-md-3 text-center align-self-center">
                            <img class="img-fluid" src="{{ asset('images/web/eperi.png') }}">
                        </div>
                        <div class="col-12 col-md-3 text-center align-self-center">
                            <img class="img-fluid" src="{{ asset('images/web/kerio.png') }}">
                        </div>
                        <div class="col-12 col-md-3 text-center align-self-center">
                            <img class="img-fluid" src="{{ asset('images/web/security.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>



    @include("inc/footer")


@endsection