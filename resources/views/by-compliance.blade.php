@extends("layout/master")

@section("title", "By Compliance | Sky Express")

@section("content")

    @include("inc/header")

        <div class="container-fluid top_section" style="background-image: url('{{ asset('images/web/showcase.jpg') }}'); background-repeat: no-repeat;">
            <div class="row">
                <div class="about_headline" data-aos="fade-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h1>SOLUTIONS</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container about_desc pen_services">
            <div class="row">
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <h4>By Compliance </h4><br>
                    <p class="pr-5 mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab sit sapiente saepe iure soluta molestias.
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

        <div class="container-fluid by-compliance-second-part">
            <div class="container">
                <div class="row">
                    <div class="col-6 mb-5">
                        <div class="by-compliance-second-part-left">
                            <h1 class="text-white">Improve your compliance</h1>
                            <h2 class="mb-5 orange-text">Explore our cyber security compliance <br> solutions</h2>
                            <p class="mb-3 text-white pr-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto blanditiis enim quod minus optio eos culpa veniam. Earum dicta libero eveniet rem incidunt, minus, distinctio similique eius ex saepe, deleniti debitis officiis! Et quam temporibus, labore earum nemo rem illo!</p>
                            <p class="text-white pr-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum dolorum quod dicta ab atque tempora suscipit praesentium harum quidem. Minima enim facilis aliquam, provident, officia adipisci quae similique ea alias vel omnis dolorum quis labore hic, consequuntur dignissimos nemo itaque!</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="by-compliance-second-part-right">
                            <h1 class="text-white pl-5">Choose the compliance solution that <br> your business needs</h1>
                            <h2 class="orange-text pl-5 invisible">Explore our cyber security compliance <br> solutions</h2>
                            <p class="text-white pl-5 pr-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum dolorum quod dicta ab atque tempora suscipit praesentium harum quidem. Minima enim facilis aliquam, provident, officia adipisci quae similique ea alias vel omnis dolorum quis labore hic, consequuntur dignissimos nemo itaque!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>
        

        <div class="container-fluid by-compliance-third-part">
            <div class="container">
                <div class="row by-compliance-third-part-images">
                    <div class="col-md-4">    
                        <div class="by-compliance-third-part-card align-items-start">
                            <img src="{{ asset('images/web/gdpr.png') }}" alt="">
                            <a href="#">Learn more</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="by-compliance-third-part-card align-items-center">
                            <img style="margin-top: -50px;"  src="{{ asset('images/web/iso-27001.png') }}" alt="">
                            <a href="#">Learn more</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="by-compliance-third-part-card align-items-end">
                            <img src="{{ asset('images/web/sap.jpg') }}" alt="">
                            <a href="#">Learn more</a>
                        </div>
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