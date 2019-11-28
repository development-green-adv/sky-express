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


        <div class="container about_desc pen_services by-compliance-first-part all-solutions-first-part">
            <div class="row">
                <div class="col-12 mb-4 mb-md-0">
                    <h4>Advanced cybersecurity solutions</h4>
                    <p>Sky Express offers a very selective range of complemental, compatible and applicable solutions. 
                        All the solutions we distribute, either directly or through sales partners, are recognized, proven and tailored to fit market requirements.</p>
                </div>
            </div>
        </div>
        


        <div class="container-fluid rose_section">
            <div class="row">
                
            </div>
        </div>

        <div class="container-fluid by-compliance-second-part all-solutions-second-part">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="all-solutions-card">
                            <h3 class="orange_text">BY COMPILANCE</h3>
                            <ul>
                                <li>Meeting GDPR</li>
                                <li>ISO 27001</li>
                                <li>SAP Security Guidelines</li>
                            </ul>
                            <a href="/by-compliance">VIEW DETAILS</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="all-solutions-card">
                            <h3 class="orange_text">INDUSTRY SOLUTIONS</h3>
                            <ul class="invisible">
                                <li>Meeting GDPR</li>
                                <li>ISO 27001</li>
                                <li>SAP Security Guidelines</li>
                            </ul>
                            <a href="/solutions">VIEW DETAILS</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="all-solutions-card">
                            <h3 class="orange_text">SECURITY & RISK MANAGEMENT</h3>
                            <ul class="invisible">
                                <li>Meeting GDPR</li>
                                <li>ISO 27001</li>
                                <li>SAP Security Guidelines</li>
                            </ul>
                            <a href="/security-and-risk-management">VIEW DETAILS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid all-solutions-third-part">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3>Actual business value in terms of improved process efficiency,greater transparency, and increased confidence to you, your 
                                auditors and your regulators.</h3>
                    </div>
                </div>
            </div>
        </div>


    @include("inc/footer")


@endsection