@extends("layout/master")

@section("title", "FAQ | Sky Express")

@section("content")

@section("seo")

    <style>

        #contact-srb{
            display: none;
        }

    </style>

@endsection

    @include("inc/header")


        <div class="container-fluid top_section" style="background-image: url('{{ asset('images/web/showcase.jpg') }}'); background-repeat: no-repeat;">
            <div class="row">
                <div class="about_headline" data-aos="fade-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h1>FAQ</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="faq_section">
            <div>
                <div class="row">
                    <div class="container">
                        <div class="col-md-12">
                            <p style="font-size: 18px;">Below you will find the answers to some of the most popular questions about cyber security, best practices, procedures and more. If you don't find the answer to the question you are looking for, please do get in touch with a member of the Sky Express team.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="faq_section-questions">
            <div>
                <div class="row">
                    <div class="container">
                        <div class="col-md-12">
                            <h4>Top Frequently Asked Questions</h4>
                        </div>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="row">
                    <div class="container">
                        <div class="col-md-12">
                            <ul>
                                <li>1. Why do we need cybersecurity? <img data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1" src="{{ asset('images/web/arrow-down.png') }}" alt="">
                                    <p class="collapse multi-collapse" id="multiCollapseExample1"> 
                                        The increasing reliance of our information age economies and governments on cyber (computer-based) infrastructure makes them progressively more vulnerable to cyber-attacks on our computer systems, networks and data.
                                        In their most disruptive form, cyber-attacks target the enterprise, government, military, or other infrastructural assets of a nation or its citizens. Both the volume and sophistication of cyber threats (cyber warfare, cyber terrorism, cyber espionage and malicious hacking) are monotonically increasing, and pose potent threats to our enterprise, government, military, or other infrastructural assets. Knowing that to be forewarned is to be forearmed, we are well advised to effect strong Cybersecurity defenses that will thwart rapidly evolving cyber threats.
                                    </p>
                                </li>
                                <li>2. How can I identify my organization's security requirements? <img data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2" src="{{ asset('images/web/arrow-down.png') }}" alt="">
                                    <p class="collapse multi-collapse" id="multiCollapseExample2">
                                        As a business owner, you should consider the value of your information systems and other IT assets in terms of the daily business of the organization in order to determine the appropriate level of security. The impact of any security incident to your reputation, as well as the proper continuity of your business, should be considered. A process called risk analysis is normally used to identify what assets to protect, their relative importance to the proper operation and business of the organization, and the priority ranking or level of security protection. The result should be a well-defined list of security requirements for your organization.
                                    </p>
                                </li>
                                <li>3. What Are the Costs of a Cyber Attack? <img data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3" src="{{ asset('images/web/arrow-down.png') }}" alt="">
                                    <p class="collapse multi-collapse" id="multiCollapseExample3"> 
                                        With all the news stories in recent years about big organizations and data breaches, we have a general idea of what cyber-attacks cost. Money and reputations are lost, which impacts the survival of a business. CEOs have had to step down from their jobs on several occasions. But there are hidden costs to an attack that tend to emerge later when dealing with the incident. For one, mission critical data and technology might be disrupted during the recovery process, which halts important progress at work. And the longer that your system is remedying its compliancy, the costs of an attack become steeper. In the end, keeping your networks secure is about the continuation of daily operations.
                                    </p>
                                </li>
                                <li>4. How does good cyber security operate? <img data-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false" aria-controls="multiCollapseExample4" src="{{ asset('images/web/arrow-down.png') }}" alt="">
                                    <p class="collapse multi-collapse" id="multiCollapseExample4"> 
                                        Strategically, cybersecurity should focus on protecting the identity, the device, and the data, and how to protect, detect and respond to the inevitable breach.  It’s not about the four walls of the organization and its data center security.  Considering the mobility and extensibility of the user and the organization, a strategy that protects the user accounts and their devices is key, with a shift toward protecting what ultimately really matters, the organization’s data.  
                                    </p>
                                </li>
                                <li>5. Why should cyber security matter to me? <img data-toggle="collapse" href="#multiCollapseExample5" role="button" aria-expanded="false" aria-controls="multiCollapseExample5"  src="{{ asset('images/web/arrow-down.png') }}" alt="">
                                    <p class="collapse multi-collapse" id="multiCollapseExample5"> 
                                        For most of us, the internet opens up new opportunities. We can shop, bank, research, work and connect when and where we want to. But the online world can also give criminals opportunities to steal money, information or identities. Taking care of your safety online is no more complicated than the steps you take in other aspects of your life. We all do things to safeguard our physical belongings such as locking our doors and keeping hold of our wallets. By taking the same care of your devices and when engaging online, you can protect yourself and your online assets.
                                    </p>
                                </li>
                                <li>6. What is the EU General Data Protection Regulation (GDPR)? <img data-toggle="collapse" href="#multiCollapseExample6" role="button" aria-expanded="false" aria-controls="multiCollapseExample6" src="{{ asset('images/web/arrow-down.png') }}" alt="">
                                    <p class="collapse multi-collapse" id="multiCollapseExample6">
                                        GDPR stands for General Data Protection Regulation. It's the core of Europe's digital privacy legislation. This new EU framework applies to organizationsin all member-states and has implications for businesses and individuals across Europe, and beyond. 
                                    </p>
                                    <p class="collapse multi-collapse" id="multiCollapseExample6"> 
                                        At its core, GDPR is a new set of rules designed to give EU citizens more control over their personal data. It aims to simplify the regulatory environment for business so both citizens and businesses in the European Union can fully benefit from the digital economy.The General Data Protection Regulation (GDPR) is an EU regulation that came into force in member states on 25 May 2018. 
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>









    @include("inc/footer")

@endsection
