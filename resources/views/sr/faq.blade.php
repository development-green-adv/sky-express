@extends("layout/master")

@section("title", "FAQ | Sky Express")

@section("content")

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
                                <li>1. Zašto je sajber bezbednost bitna za mene?
                                        <img data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1" src="{{ asset('images/web/arrow-down.png') }}" alt="">
                                    <p class="collapse multi-collapse" id="multiCollapseExample1"> 
                                        Za većinu nas internet otvara nove mogućnosti. Možemo kupovati, plaćati račune, istraživati, raditi i povezivati se kada i gde želimo. Ali online svet ujedno daje kriminalcima šansu da nam ukradu novac, informacije i identitet. Briga o vašoj bezbednosti na mreži nije složenija od koraka koje preuzimate u drugim aspektima života. Svi radimo na zaštiti fizičkih stvari kao što su zaključavanje vrata i čuvanje naših novčanika. Uz istu brigu o svojim uređajima i kada ste online, možete zaštititi sebe i vaše mrežne resurse. Kompanije se danas suočavaju ne samo sa napadima hakera i sajber kriminalaca, već i sa kompanijama koje koristeći sajber napade pokušavaju da ostvare svoje ciljeve pomoću korporativne špijunaže. Motivi koji se nalaze iza sajber napada nisu više samo novac ili osveta već i strateško ometanje, kao i sticanje prednosti u odnosu na konkurenciju. Upravo zbog toga je neophodno preduzeti dodatne korake kako bi se računarska mreža obezbedila na svim nivoima.
                                    </p>
                                </li>
                                <li>2. Kako mogu da identifikujem bezbednosne zahteve moje organizacije? <img data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2" src="{{ asset('images/web/arrow-down.png') }}" alt="">
                                    <p class="collapse multi-collapse" id="multiCollapseExample2">
                                        Kao neko ko vodi biznis, trebali biste razmotriti vrednost svog informacionog sistema i drugih IT sredstava, u smislu dnevnih poslova organizacije da bi se donela odluka o odgovarajućem nivou sigurnosti. Treba uzeti u obzir uticaj bilo kog bezbednosnog incidenta na vašu reputaciju kao i pravilan kontinuitet vašeg poslovanja. Proces koji se zove analiza rizika obično se koristi za indentifikaciju imovine koju treba zaštititi, njihov relativni značaj za pravilno funkcionisanje i poslovanje organizacije kao i rangiranje prioriteta ili nivo zaštite. Rezultat ove analize bi trebao da bude dobro definisana lista bezbednosnih zahteva vaše organizacije. 
                                    </p>
                                </li>
                                <li>3. Koja je cena sajber napada? <img data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3" src="{{ asset('images/web/arrow-down.png') }}" alt="">
                                    <p class="collapse multi-collapse" id="multiCollapseExample3"> 
                                        Usled razvoja interneta, komunikacionih kanala i digitalne tehnologije, svake godine dolazi do porasta broja hakerskih napada na korporativne mreže, čiji cilj su krađa korporativnih podataka i njihova eksploatacija. Brojne vesti u poslednje vreme o hakerskim napadima na velike organizacije i njihove ekspoziture, daju nam barem delimičan uvid u cenu koliko može da nas košta sajber napad. Novac i reputacija se gube, a to u velikoj meri može da utiče i na opstanak poslovanja. Ujedno, postoje i skriveni troškovi napada, koji će se pojaviti kasnije u toku analize. Kao prvo, kritični podaci I tehnologija mogu biti poremećeni u toku procesa oporavka sto može da zaustavi važan napredak u poslu. Što duže tvoj sistem ostaje uređen cena napada postaje veća. S obzirom na brojne izazove i potencijalne pretnje, nijedan napor nije suviše skup ili zahtevan kada je u pitanju sprečavanje i ograničavanje sajber napada na poslovanje vaše kompanije.
                                    </p>
                                </li>
                                <li>4. Kako sajber bezbednost funkcioniše? <img data-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false" aria-controls="multiCollapseExample4" src="{{ asset('images/web/arrow-down.png') }}" alt="">
                                    <p class="collapse multi-collapse" id="multiCollapseExample4"> 
                                        Strateški, sajber bezbednost treba da bude fokusirana na uređaje za zaštitu identiteta, računara i podataka, i kako zaštititi, detektovati i odgovoriti na neizbežni prekršaj. Ne radi se samo o zaštiti unutar četiri zida kompanije i bezbednosti njenog data centra. Obzirom na mobilnost i proširivost korisnika i organizacije, ključna je strategija koja štiti korisničke naloge i njihove uređaje, sa pomakom prema zaštiti onoga što je na kraju zaista bitno, podaci organizacije. Ako ste vlasnik ili menadžer kompanije, vaša je odgovornost da se uverite da su svi osetljivi podaci zaštićeni. Postoji mnogo ličnih podataka koje hakeri mogu koristiti za kreiranje i upotrebu lažnih identiteta. Sada po zakonu koji štiti ove podatke i kompanije mogu biti kažnjene ukoliko neadekvatno štite podatke klijenata ili zaposlenih.  
                                    </p>
                                </li>
                                <li>5. Zašto nam je potrebna sajber bezbednost? <img data-toggle="collapse" href="#multiCollapseExample5" role="button" aria-expanded="false" aria-controls="multiCollapseExample5"  src="{{ asset('images/web/arrow-down.png') }}" alt="">
                                    <p class="collapse multi-collapse" id="multiCollapseExample5"> 
                                        Sajber bezbednost više ne može da se posmatra odvojeno od bezbednosti u realnom svetu. Šteta koja nastane kao rezultat sajber napada je vrlo stvarna i izaziva stvarne posledice i u fizičkom svetu. Ipak, zbog specifičnosti vezanih za tehnologiju, vrste, počinioce i žrtve ovakvih napada pitanje sajber bezbednosti zahteva posebnu brigu svih u organizaciji. Podaci su postali najvredniji predmet zaštite, a sajber bezbednost u svim aspektima je nešto što mora biti procenjeno, zaštićeno i razvijano maksimalnom brzinom. Organizacije koje poznaju svoje pretnje i koje su svesne svojih jakih strana i slabosti, imaju više šansi za uspeh u ratu za sajber bezbednost koji neprekidno traje. Ne čekajte da vaša organizacija bude napadnuta, pa da tek onda podižete nivo sajber bezbednosti.
                                    </p>
                                </li>
                                <li>6. Šta je opšta uredba o zaštiti podataka koje je propisala EU? (GDPR) <img data-toggle="collapse" href="#multiCollapseExample6" role="button" aria-expanded="false" aria-controls="multiCollapseExample6" src="{{ asset('images/web/arrow-down.png') }}" alt="">
                                    <p class="collapse multi-collapse" id="multiCollapseExample6">
                                        Opšta uredba EU o zaštiti podataka o ličnosti (GDPR – General Data Protection Regulation) predstavlja jedan od najznačajnijih međunarodnih akata u oblasti zaštite podataka o ličnosti. U osnovi GDPR je novi set pravila koja imaju za cilj da građanima EU daju veću kontrolu nad njihovim ličnim podacima. Njegov cilj da pojednostavi regulatorno okruženje za poslovanje tako da i građani i preduzeća u Evropskoj uniji mogu u potpunosti imati koristi od digitalne ekonomije. Opšta uredba o zaštiti podataka GDPR je stupila na snagu 25. maja 2018.godine. Teritorijalno važenje ovog akta je prošireno, pa se Uredba primenjuje i na podatke o ličnosti lica koja se nalaze u Evropskoj uniji, a koju obavlja rukovalac ili obrađivač podataka koji nema poslovno sedište u Evropskoj uniji, ukoliko su aktivnosti povezane s nuđenjem roba i usluga licima u Evropskoj uniji ili praćenjem njihovog ponašanja dokle god se njihovo ponašanje odvija unutar Unije. To praktično znači da i privredna društva koja imaju poslovno sedište u Srbiji moraju da poštuju pravila Uredbe ukoliko obrađuju podatke o ličnosti lica u Evropskoj uniji. 
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
