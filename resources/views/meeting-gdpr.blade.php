@extends("layout/master")

@section("title", "Meeting GDPR | Sky Express")

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


        <div class="container about_desc pen_services sap-first-part">
            <div class="row">
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <h4>Meeting GDPR</h4><br>
                    <p class="pr-5 mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab sit sapiente saepe iure soluta molestias eligendi omnis eius id consectetur autem, et ea. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab sit sapiente saepe iure soluta molestias eligendi omnis eius id consectetur autem, et ea. 
                    </p>

                    <h5 class="mb-4">The GDPR Compliance</h5>
                    <p class="pr-5 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, ex commodi, fugiat minima voluptates impedit dicta doloremque, reprehenderit sequi deleniti quasi repellendus sit soluta. Ea doloribus, quisquam dolore eum quibusdam voluptatibus deserunt sit reprehenderit necessitatibus alias nemo ab dolorem doloremque quo quam pariatur nostrum ullam eius dolorum, eos sunt quod?</p>
                    <p class="pr-5 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, laboriosam facere dolore quam repudiandae recusandae doloremque aliquid non facilis consequatur nihil, voluptatem quo distinctio porro obcaecati, sint iusto vero asperiores dicta provident repellat error dolorum. Blanditiis reprehenderit recusandae sunt ipsa? Unde fugiat dignissimos quos tempora quibusdam quae, non eius eos.</p>
                </div>
                <div class="col-12 col-md-6">
                    <h4 class="invisible">Pen Testing & Ethical Hacking</h4><br>
                    <h5 class="mb-4 pl-5">Why GDPR Should Matter to You?</h5>
                    <p class="pl-5 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium itaque repellat debitis voluptate aliquam minima labore omnis laborum repudiandae provident.</p>
                    <p class="pl-5 mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos, quos molestiae doloremque eius atque accusantium magnam praesentium eaque. Explicabo possimus, nam est voluptatibus adipisci tenetur quaerat voluptates alias delectus nobis molestiae fugiat maiores recusandae, magnam error? Impedit culpa repudiandae quas blanditiis deserunt accusamus porro, maiores dicta enim consequatur odio asperiores! voluptas aperiam sed laboriosam quasi tempore incidunt doloremque obcaecati natus!</p>
                    <h5 class="mb-4 pl-5">GDPR Compliance in Serbia</h5>
                    <p class="pl-5 mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos, quos molestiae doloremque eius atque accusantium magnam praesentium eaque. Explicabo possimus, nam est voluptatibus adipisci tenetur quaerat voluptates alias delectus nobis molestiae fugiat maiores recusandae, magnam error? Impedit culpa repudiandae quas blanditiis deserunt accusamus porro, maiores dicta enim consequatur odio asperiores! voluptas aperiam sed laboriosam quasi tempore incidunt doloremque obcaecati natus!</p>
                    <p class="pl-5 mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos, quos molestiae doloremque eius atque accusantium magnam praesentium eaque. Explicabo possimus, nam est voluptatibus adipisci tenetur quaerat voluptates alias delectus nobis molestiae fugiat maiores recusandae, magnam error? Impedit culpa repudiandae quas blanditiis deserunt accusamus porro, maiores dicta enim consequatur odio asperiores! voluptas aperiam sed laboriosam quasi tempore incidunt doloremque obcaecati natus!</p>
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