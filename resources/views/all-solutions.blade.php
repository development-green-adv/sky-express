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
                            <p>Security compliance standards, like GDPR, often define minimum standards of IT governance. They do not guarantee cyber resilience or determine best practice; they merely tick the compliance.</p>
                            <p>Sky Express provides security solutions that are unobtrusive, cost effective and deliver actual business value in terms of improved process efficiency, greater transparency, and increased confidence to you, your auditors and your regulators. </p>
                            <ul>
                                <li><a href="/meeting-gdpr">Meeting GDPR</a></li>
                                <li><a href="/iso-27001">ISO 27001</a></li>
                                <li><a href="/sap-security-guidelines">SAP Security Guidelines</a></li>
                            </ul>
                            <div class="delatis-btn"><a href="/by-compliance">Learn more</a></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="all-solutions-card">
                            <h3 class="orange_text">INDUSTRY SOLUTIONS</h3>
                            <p>Cyber threats have become more complex and sophisticated. Many organizations now face stealthy attacks in their networks. These attacks are targeted towards intellectual property and customer information theft or encryption of critical data for ransom. No business is immune from security issues.</p>
                            <p>Sky Express offers solutions that can fit different industry requirements, and security processes.</p>
                            <ul class="invisible">
                                <li>Meeting GDPR</li>
                                <li>ISO 27001</li>
                                <li>SAP Security Guidelines</li>
                            </ul>
                            <div  class="delatis-btn"><a href="/solutions">Learn more</a></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="all-solutions-card">
                            <h3 class="orange_text">SECURITY & RISK MANAGEMENT</h3>
                            <p>Security and risk management provide a means of better understanding the nature of security threats and their interaction at an individual, organizational, or community level. Security and risk management are two of business’ biggest considerations in today’s increasingly volatile cyber security landscape. Failings in this arena will lead to potentially irreversible financial and reputational damage.</p>
                            <p>Sky Express provides services and solutions companies need to ensure the safety, security and privacy of data in all aspects of business areas.</p>
                            <ul class="invisible">
                                <li>Meeting GDPR</li>
                                <li>ISO 27001</li>
                                <li>SAP Security Guidelines</li>
                            </ul>
                            <div style="margin-top: -80px" class="delatis-btn"><a href="/security-and-risk-management">Learn more</a></div>
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