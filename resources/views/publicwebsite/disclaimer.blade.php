<!doctype html>
<html lang="en">
<head>
    @include('partials.headbundle')
    <title>BeeWorky | Disclaimer</title>
</head>
<body>

<!-- Page Titile Area -->
<section class="page-title-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-center">
                    <div class="title-middle">
                        <h2 class="page-tagline">Formeel document.</h2>
                        <h1 class="page-title">Disclaimer</h1>
                    </div>
                    <a href="{{URL::to('/')}}" class="animated4 btn btn-common" data-ripple-color="#000"><i
                            class="material-icons mdi mdi-lightbulb-outline">
                        </i> Terug naar homepage<div class="ripple-container"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page Titile Area End -->

<!-- Hoe BeeWorky werkt Section -->
<section class="Material-service-section section-padding">
    <div class="container">
        <div class="row">
            <!-- Section Titile -->
            <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                <h1 class="section-title">Let's start.</h1>
            </div>
            <p data-aos="fade-up">BeeWorky met KvK-nummer 77935535 ( BeeWorky ), wil je hartelijk welkom heten op www.beeworky.nl ( Website ).
                Door onze Website te gebruiken stem je met deze disclaimer in. BeeWorky kan de inhoud van de Website en deze disclaimer altijd aanpassen zonder dat jij daarover bericht ontvangt.
                <br><br>
                De inhoud van onze Website is zorgvuldig door ons samengesteld, maar je gebruikt onze Website voor eigen risico.
                BeeWorky zal zich naar beste vermogen inspannen om de inhoud van de Website zo correct mogelijk te houden,
                maar we staan er niet voor in dat onze Website altijd juist of volledig zal zijn. Informatie, dus ook ons aanbod van diensten, kan fouten omvatten of achterhaald zijn.
                <br><br>
                BeeWorky is niet aansprakelijk voor schade of andere nadelige gevolgen door gebruik of onbereikbaarheid van (informatie op) onze Website.
                Handelingen die je op basis van onze Website of de door ons verstrekte informatie verricht, komen voor je eigen rekening en risico.
                Op grond van die fouten of achterhaalde informatie, kan dus ook geen overeenkomst tussen BeeWorky en jou tot stand komen.
                <br><br>
                BeeWorky controleert de inhoud die gebruikers van de Website zelf op onze website plaatsen niet, maar BeeWorky kan deze gebruikersinhoud wel aanpassen.
                Als je een klacht hebt, dan horen we dat graag. Stuur je klacht over de inhoud naar <a href="mailto:info@beeworky.nl">info@beeworky.nl</a>.
                Je mag onze Website gebruiken, maar je kunt geen aanspraak maken op onze Intellectuele Eigendomsrechten en die van de gebruikers van onze Website.
                BeeWorky behoudt zich alle rechten met betrekking tot (de inhoud van) de Website voor.
                Toestemming voor het gebruik van inhoud van onze Website op publiekelijk toegankelijke plaatsen kan je altijd via <a href="mailto:info@beeworky.nl">info@beeworky.nl</a> aan ons vragen.
            </p>
        </div>
    </div>
</section>
<!-- Hoe BeeWorky werkt Section End -->

@include('partials.footer')
@include('partials.javascriptbundle')
</body>
</html>
