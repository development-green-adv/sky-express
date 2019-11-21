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
                        The European Union’s General Data Protection 
                        Regulation (EU GDPR) came into effect in May 2018. The law introduces a variety of data 
                        protection challenges for businesses all around 
                        the world. 
                    </p>

                    <h5 class="mb-4">The GDPR Compliance</h5>
                    <p class="pr-5 mb-4">The GDPR, is been designed to harmonize laws 
                        surrounding data privacy across Europe and it 
                        reshapes the way organizations across the globe approach data privacy when dealing with EU 
                        systems. It comes into effect on May the 25th 2018 and applies not only to EU entities dealing with 
                        personal data anywhere in the world, but also 
                        entities outside of the EU dealing with personal data of EU residents.</p>
                    <p class="pr-5 mb-4">In many ways, GDPR makes things easier, 
                        simplifying the existing conglomerate of rules and approaches imposed by each member state, by making one set of rules to rule them all. 
                        It includes 99 articles or clauses covering virtually every aspect of business and information 
                        management – everything from the consent to 
                        collect and process information, to the “right to be deleted”.</p>
                </div>
                <div class="col-12 col-md-6">
                    <h4 class="invisible">Pen Testing & Ethical Hacking</h4><br>
                    <h5 class="mb-4 pl-5">Why GDPR Should Matter to You?</h5>
                    <p class="pl-5 mb-4">New regulations have forced organizations around the globe to rethink data privacy and protection.</p>
                    <p class="pl-5 mb-4">The main goal of the General Data Protection Regulation (GDPR) is to ensure transparency, security and 
                        accountability by data controllers. It applies to all data 
                        processors, stipulating that they have to implement 
                        specific procedures and processes that are ultimately aimed at protecting data and consumer privacy, as well as ensuring an effective and timely response by organizations in the event of a data breach. Organizations that do not adhere to the GDPR requirements can be subject to severe fines and other consequences.</p>
                    <h5 class="mb-4 pl-5">GDPR Compliance in Serbia</h5>
                    <p class="pl-5 mb-4">In light of the new EU data protection scheme, shaped by the GDPR, on 9 November 2018, which is applicable as of 21 August 2019. The outline of this law is in accordance with GDPR regulations to a great extent, which further 
                        emphasizes that Serbian citizens and residents need to completely start applying these regulations in all aspects eventually. </p>
                    <p class="pl-5 mb-4">Even though Serbia is on its way of becoming a member 
                        of the European Union and is not directly obliged to apply GDPR standards which came into effect on May 25th, 2018, there are numerous legal and business reasons 
                        because of which companies and business owners in Serbia need to consider legal applications of GDPR in Serbia.</p>
                </div>
            </div>
        </div>


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>

        <div class="container-fluid about_partner_section" style="background-image: url('{{ asset('images/web/aboute-1.jpg') }}'); border-bottom:2px solid #f1592a;">
            <div class="container">
                <div class="slider-for">
                    <div>
                        <img class="img-fluid" src="{{ asset('images/web/carbon.png') }}">
                    </div>
                    <div>
                        <img class="img-fluid" src="{{ asset('images/web/df.png') }}">
                    </div>
                    <div>
                        <img class="img-fluid" src="{{ asset('images/web/open.png') }}">
                    </div>
                    <div>
                        <img class="img-fluid" src="{{ asset('images/web/onapsis.png') }}">
                    </div>
                    <div>
                        <img class="img-fluid" src="{{ asset('images/web/avast-logo.png') }}">
                    </div>
                    <div>
                        <img class="img-fluid" src="{{ asset('images/web/eperi.png') }}">
                    </div>
                    <div>
                        <img class="img-fluid" src="{{ asset('images/web/kerio.png') }}">
                    </div>
                    <div>
                        <img class="img-fluid" src="{{ asset('images/web/security.png') }}">
                    </div>
                </div>
            </div>
        </div>



    @include("inc/footer")


@endsection