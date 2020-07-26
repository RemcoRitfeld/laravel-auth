<!doctype html>
<html lang="en">
<head>
    <title>BeeWorky | Bedrijven</title>
    @include('partials.headbundle')
</head>
<body>
<!-- Header Start -->
<header id="header">
    <div class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{URL::to('/')}}">
                            <img src="{{secure_asset('images\Logos\Horizontaal\Logo2kleurentekst\logo.bw.horizontaal_1@2x.png')}}" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="page-scroll" href="#">Bedrijven <span><i class="mdi mdi-chevron-down"></i></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#">Onze Services <span><i class="mdi mdi-chevron-down"></i></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#">Hoe BeeWorky werkt <span><i class="mdi mdi-chevron-down"></i></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#">Onze Prijzen <span><i class="mdi mdi-chevron-down"></i></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#">Contact <span><i class="mdi mdi-chevron-down"></i></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#">Account <span><i class="mdi mdi-chevron-down"></i></span></a>
                                    <ul class="sub-menu left-menu">
                                        <li class="nav-item"><a href="{{URL::to('/login')}}">Login</a></li>
                                        <li class="nav-item"><a href="{{URL::to('/register')}}">Registreer</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div> <!-- navbar collapse -->
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- navbar area -->
</header>
<!-- Header End -->

<!-- Page Titile Area -->
<section class="page-title-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-center">
                    <div class="title-middle">
                        <h2 class="page-tagline">BeeWorky voor</h2>
                        <h1 class="page-title">Bedrijven</h1>
                    </div>
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
                <h1 class="section-title">Hoe BeeWorky werkt</h1>
            </div>
        </div>
    </div>
</section>
<!-- Hoe BeeWorky werkt Section End -->

<!-- Services Section -->
<section class="Material-service-section section-padding section-dark">
    <div class="container">
        <div class="row">
            <!-- Section Titile -->
            <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                <h1 class="section-title">Onze Services</h1>
            </div>
        </div>
        <!-- Services Widget Section -->
        <div class="row">
            <!-- Service Widgets -->
            <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget features-block wow animated fadeInUp"
                 data-wow-delay=".3s">
                <div class="media">
                    <div class="media-left">
                        <i class="material-icons pulse-shrink mdi mdi-language-html5"></i>
                    </div>
                    <div class="media-body">
                        <h2 class="subtitle"><a href="#">Gekwalificeerd personeel</a></h2>
                        <p>Garantie over de vakbewkaamheid van het personeel.</p>
                    </div>
                </div>
            </div>
            <!-- Service Widgets -->
            <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget features-block wow animated fadeInUp"
                 data-wow-delay=".4s">
                <div class="media">
                    <div class="media-left">
                        <i class="material-icons pulse-shrink mdi mdi-checkbox-multiple-blank-outline"></i>
                    </div>
                    <div class="media-body">
                        <h2 class="subtitle"><a href="#">Toegang tot de talentenpool</a></h2>
                        <p>Toegang tot onze database met in-house getrainde flexwerkers.</p>
                    </div>
                </div>
            </div>
            <!-- Service Widgets -->
            <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget features-block wow animated fadeInUp"
                 data-wow-delay=".5s">
                <div class="media">
                    <div class="media-left">
                        <i class="material-icons pulse-shrink mdi mdi-file-tree"></i>
                    </div>
                    <div class="media-body">
                        <h2 class="subtitle"><a href="#">Flexibel personeel inhuren</a></h2>
                        <p>Bekijk profielen met reviews en plan zelf een flexwerker in.</p>
                    </div>
                </div>
            </div>
            <!-- Service Widgets -->
            <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget features-block wow animated fadeInUp"
                 data-wow-delay=".6s">
                <div class="media">
                    <div class="media-left">
                        <i class="material-icons pulse-shrink mdi mdi-tune"></i>
                    </div>
                    <div class="media-body">
                        <h2 class="subtitle"><a href="#">24/7 mogelijkheid om klussen te plaatsen</a></h2>
                        <p>Op het BeeWorky platform is het 24/7 mogelijk om klussen te plaatsen.</p>
                    </div>
                </div>
            </div>
            <!-- Service Widgets -->
            <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget features-block wow animated fadeInUp"
                 data-wow-delay=".7s">
                <div class="media">
                    <div class="media-left">
                        <i class="material-icons pulse-shrink mdi mdi-package-variant"></i>
                    </div>
                    <div class="media-body">
                        <h2 class="subtitle"><a href="#">Gratis personeel overnemen</a></h2>
                        <p>Indien u zelfstandig verder wilt met een flexwerker die via het BeeWorky platform verworven is,
                        betaalt u geen overname-kosten.</p>
                    </div>
                </div>
            </div>
            <!-- Service Widgets -->
            <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget features-block wow animated fadeInUp"
                 data-wow-delay=".8s">
                <div class="media">
                    <div class="media-left">
                        <i class="material-icons pulse-shrink mdi mdi-crown"></i>
                    </div>
                    <div class="media-body">
                        <h2 class="subtitle"><a href="#">Eigen talentenpool samenstellen</a></h2>
                        <p>Stel uw eigen talentpool samen met uw favoriete flexwerkers.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Material Pricing Table -->
<section class="Material-pricing-table-section section-padding">
    <div class="container">
        <h1 class="section-title text-center">
            Prijzen
        </h1>
        <div class="row gg-pricing-table icon-table">
            <!-- Single Table -->
            <div class="col-lg-3 col-md-6 wow fadeInUp animated" data-wow-delay=".3s">
                <div class="single-pricing-table text-center clearfix">
                    <!-- Heading -->
                    <div class="pricing-table-heading">
                        <div class="pricing-icon">
                            <img src="assets/images/bicycle.png" alt="" class="center-block img-fluid">
                        </div>
                        <h2>Basis</h2>
                    </div>
                    <!-- Price -->
                    <div class="price">
                        <span>€49,95</span>
                    </div>
                    <div>per maand</div>
                    <!-- Price Item -->
                    <div class="pricing-item">
                        <ul>
                            <li>
                                <p><strong>10</strong> Klussen</p>
                            </li>
                            <li>
                                <p><strong>1</strong> Locatie</p>
                            </li>
                            <li>
                                <p><strong>1</strong> Flexpool</p>
                            </li>
                        </ul>
                    </div>
                    <!-- Button -->
                    <div class="pricing-button">
                        <a href="javascript:void(0)" class="btn btn-common"><i class="fa fa-check"></i> Kies Dit Pakket<div
                                class="ripple-container"></div></a>
                    </div>
                </div>
            </div>
            <!-- Single Table -->
            <div class="col-lg-3 col-md-6 wow fadeInUp animated" data-wow-delay=".4s">
                <div class="single-pricing-table text-center clearfix table-dark table-active">
                    <!-- Heading -->
{{--                    <div>Meest gekozen</div>--}}
                    <div class="pricing-table-heading">
                        <div class="pricing-icon">
                            <img src="assets/images/vespa-1.png" alt="" class="center-block img-fluid">
                        </div>
                        <h2>Standaard</h2>
                    </div>
                    <!-- Price -->
                    <div class="price">
                        <span>€89,95</span>
                    </div>
                    <div>per maand</div>
                    <!-- Price Item -->
                    <div class="pricing-item">
                        <ul>
                            <li>
                                <p><strong>20</strong> Klussen</p>
                            </li>
                            <li>
                                <p><strong>3</strong> Locaties</p>
                            </li>
                            <li>
                                <p><strong>3</strong> Flexpools</p>
                            </li>
                        </ul>
                    </div>
                    <!-- Button -->
                    <div class="pricing-button">
                        <a href="javascript:void(0)" class="btn btn-common"><i class="fa fa-check"></i> Kies Dit Pakket<div
                                class="ripple-container"></div></a>
                    </div>
                </div>
            </div>
            <!-- Single Table -->
            <div class="col-lg-3 col-md-6 wow fadeInUp animated" data-wow-delay=".5s">
                <div class="single-pricing-table text-center clearfix">
                    <!-- Heading -->
                    <div class="pricing-table-heading">
                        <div class="pricing-icon">
                            <img src="assets/images/car.png" alt="" class="center-block img-fluid">
                        </div>
                        <h2>Geavanceerd</h2>
                    </div>
                    <!-- Price -->
                    <div class="price">
                        <span>€119,95</span>
                    </div>
                    <div>per maand</div>
                    <!-- Price Item -->
                    <div class="pricing-item">
                        <ul>
                            <li>
                                <p><strong>35</strong> Klussen</p>
                            </li>
                            <li>
                                <p><strong>5</strong> Locaties</p>
                            </li>
                            <li>
                                <p><strong>5</strong> Flexpools</p>
                            </li>
                        </ul>
                    </div>
                    <!-- Button -->
                    <div class="pricing-button">
                        <a href="javascript:void(0)" class="btn btn-common"><i class="fa fa-check"></i> Kies Dit Pakket<div
                                class="ripple-container"></div></a>
                    </div>
                </div>
            </div>
            <!-- Single Table -->
            <div class="col-lg-3 col-md-6 wow fadeInUp animated" data-wow-delay=".5s">
                <div class="single-pricing-table text-center clearfix">
                    <!-- Heading -->
                    <div class="pricing-table-heading">
                        <div class="pricing-icon">
                            <img src="assets/images/car.png" alt="" class="center-block img-fluid">
                        </div>
                        <h2>Enterprise</h2>
                    </div>
                    <!-- Price -->
                    <div class="price">
                        <span>In Overleg</span>
                    </div>
                    <div>per maand</div>
                    <!-- Price Item -->
                    <div class="pricing-item">
                        <ul>
                            <li>
                                <p><strong>Onbeperkt</strong> Klussen</p>
                            </li>
                            <li>
                                <p><strong>Onbeperkt</strong> Locaties</p>
                            </li>
                            <li>
                                <p><strong>Onbeperkt</strong> Flexpools</p>
                            </li>
                        </ul>
                    </div>
                    <!-- Button -->
                    <div class="pricing-button">
                        <a href="javascript:void(0)" class="btn btn-common"><i class="fa fa-check"></i> Neem Contact Op<div
                                class="ripple-container"></div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Material Pricing Table End -->

@include('partials.footer')
@include('partials.javascriptbundle')
</body>
</html>
