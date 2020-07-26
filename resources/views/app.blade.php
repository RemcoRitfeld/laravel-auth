<!doctype html>
<html lang="en">
<head>
    <title>BeeWorky | Home</title>
    @include('partials.headbundle')
</head>

<body>
<!-- FB Plugin -->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId            : 'your-app-id',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v7.0'
        });
    };
</script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
<!-- END of FB plugin -->

<!-- Header Start -->
<header id="header">
    <div class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html">
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
                                    <a class="page-scroll" href="#">Home <span><i class="mdi mdi-chevron-down"></i></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#">Waar wij voor staan <span><i class="mdi mdi-chevron-down"></i></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="{{URL::to('/bedrijven')}}">Bedrijven <span><i class="mdi mdi-chevron-down"></i></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#">Klussen <span><i class="mdi mdi-chevron-down"></i></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#">Blog <span><i class="mdi mdi-chevron-down"></i></span></a>
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
                        <!-- Search Box Start -->
                        <div class="search-icon">
                <span class="open-search">
                  <i class="mdi mdi-magnify btn btn-common"></i>
                </span>
                        </div>
                        <form role="search" class="navbar-form">
                            <div class="container">
                                <div class="row">
                                    <div class="form-group has-feedback">
                                        <input type="text" placeholder="Type and search ..." class="form-control">
                                        <div class="close"><i class="mdi mdi-close"></i></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Search Box End -->
                    </nav> <!-- navbar -->

                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- navbar area -->
</header>
<!-- Header End -->

<!-- Main Carousel Section Start -->
<div id="main-slide" class="carousel slide slider-2" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#main-slide" data-slide-to="0" class="active"></li>
        <li data-target="#main-slide" data-slide-to="1"></li>
        <li data-target="#main-slide" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{secure_asset('images\homepage\carousel\keuken1.jpg')}}" alt="First slide">
            <div class="carousel-caption second-slider d-md-block text-left">
                <h1 class="wow fadeInLeft hero-heading" data-wow-delay="700ms">Keuken</h1>
                <h5 class="wow fadeInLeft hero-sub-heading" data-wow-delay="500ms">Werk als flexwerker in de keuken</h5>
                <a href="javascript:void(0)" class="fadeInLeft wow btn btn-common" data-wow-delay="300ms"><i
                        class="material-icons mdi mdi-lightbulb-outline"></i> Explore<div class="ripple-container"></div></a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images\homepage\carousel\horeca.jpg" alt="Second slide">
            <div class="carousel-caption second-slider d-md-block text-left">
                <h1 class="wow fadeInUp hero-heading" data-wow-delay="700ms">Horeca</h1>
                <h5 class="wow fadeInUp hero-sub-heading" data-wow-delay="500ms">Ga aan de slag in de horeca!
                </h5>
                <a href="javascript:void(0)" class="fadeInUp wow btn btn-common" data-wow-delay="300ms"><i
                        class="material-icons mdi mdi-cart-outline"></i> Purchase</a>
                <a href="javascript:void(0)" class="fadeInUp wow btn btn-border" data-wow-delay="500ms"><i
                        class="material-icons mdi mdi-lightbulb-outline"></i> Learn More <div class="ripple-container"></div></a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{secure_asset('images\homepage\carousel\logistiek.jpg')}}" alt="Third slide">
            <div class="carousel-caption second-slider d-md-block text-left">
                <h1 class="wow fadeInDown hero-heading" data-wow-delay="700ms">Logistiek</h1>
                <h5 class="fadeInDown wow hero-sub-heading" data-wow-delay="500ms">Als flexwerker werken in de logistiek? lees verder!</h5>
                <a href="javascript:void(0)" class="fadeInDown wow btn btn-common" data-wow-delay="300ms"><i
                        class="material-icons mdi mdi-arrow-collapse-down"></i> Download Now</a>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#main-slide" role="button" data-slide="prev">
      <span class="carousel-control" aria-hidden="true"><i class="mdi mdi-arrow-left"
                                                           data-ripple-color="#F0F0F0"></i></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#main-slide" role="button" data-slide="next">
      <span class="carousel-control" aria-hidden="true"><i class="mdi mdi-arrow-right"
                                                           data-ripple-color="#F0F0F0"></i></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Main Carousel Section End -->

<!-- About Section -->
<section class="Material-about-section section-padding">
    <div class="container">
        <div class="row justify-content-md-start justify-content-center">
            <!-- Single About -->
            <div class="col-sm-8 col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".2s">
                <div class="about-single">
                    <i class="material-icons mdi mdi-account-question"></i>
                    <h2 class="subtitle">1. Op zoek naar werk?</h2>
                    <p>Ben jij op zoek naar leuk en flexibel werk?. Dat is goed! Wij hebben veel te bieden.</p>
                </div>
            </div>
            <!-- Single About -->
            <div class="col-sm-8 col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".3s">
                <div class="about-single">
                    <i class="material-icons mdi mdi-new-box"></i>
                    <h2 class="subtitle">2. Meld je aan</h2>
                    <p>Je hebt je aangemeldt en bent nu een Workbee 🐝, gefeliciteerd! 🥳</p>
                </div>
            </div>
            <!-- Single About -->
            <div class="col-sm-8 col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".4s">
                <div class="about-single">
                    <i class="material-icons mdi mdi-arrow-left-right"></i>
                    <h2 class="subtitle">3. Kies een klus</h2>
                    <p>Wij hebben een ruim aanbod aan klussen in de Horeca, Logistiek en in de Retail.</p>
                </div>
            </div>
            <!-- Single About -->
            <div class="col-sm-8 col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".5s">
                <div class="about-single">
                    <i class="material-icons mdi mdi-finance"></i>
                    <h2 class="subtitle">4. Money!</h2>
                    <p>Krijg betaalt waar jij recht op hebt!. Via BeeWorky verdien je
                        <strong>minimaal €16,-</strong> per uur</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Tabs Section -->
<section class="material-tabs-section section-padding section-dark">
    <div class="container">
        <div class="row">
            <!-- Section Titile -->
            <div class="col-md-12 material-title-section wow animated fadeInLeft" data-wow-delay=".2s">
                <h1 class="section-title">Over ons</h1>
            </div>
        </div>

        <div class="row mt-2 wow animated fadeInUp" data-wow-delay=".4s">
            <div class="col-md-12">
                <div class="Material-tab-default">
                    <!-- Nav tabs -->

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="home" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{secure_asset('images\Logos\Beeldmerk\beeldmerk.bw.png')}}" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h2 class="subtitle">Wat is BeeWorky?</h2>
                                    <p>Wij zijn een jonge en hippe start-up die zich inzet voor het werken van de toekomst.
                                        We zetten ons in voor de behoeften van zowel opdrachtnemers als opdrachtgevers.
                                        Luisteren naar wat opdrachtnemers en opdrachtgevers willen, dat telt! <br><br>
                                        Op deze unieke manier kunnen
                                        wij opdrachtgevers middels het BeeWorky platform, voorzien van kwalitatief personeel en helpen wij
                                        enthousiaste opdrachtnemers aan opdrachten naar eigen keuze. <br><br>
                                        Tegelijkertijd staat de opdrachtnemer nooit stil, want bij BeeWorky wordt de nadruk gelegd op
                                        <strong>KWALITEIT</strong> en <strong>ONTWIKKELING</strong> en daarom bieden wij structureel gratis trainingen en workshops aan die
                                        een onderdeel vormen voor de BeeWorky community. <br><br>
                                        So what are you waiting for? Meldt je nu kosteloos aan op de website en vindt jouw ideale opdracht! <br>
                                        Get Honey 🍯, #BeeWorky</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/images/portfolio/work2.jpg" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h2 class="subtitle">Wat is een Flexwerker?</h2>
                                    <p>Als flexwerker zit jij niet vast aan contracten maar bepaal jij wanneer jij wilt werken.
                                        Het flexwerken is een nog nieuw begrip in Nederland maar neemt razendsnel toe in populariteit.
                                        Het flexibele karakter in combinatie met  het variërend aanbod van potentiele klussen
                                        zorgt ervoor dat dit de ideale oplossing is om snel aan de slag te gaan.
                                    <br><br>
                                    Stem je werk af op je leven en geniet je vrijheid.</p>
                                    <a href="{{URL::to('/flexwerkers')}}" class="animated4 btn-raised btn-success btn-lg">
                                        <i class="material-icons mdi mdi-lightbulb-outline">
                                        </i> Aan de slag
                                        <div class="ripple-container">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="messages" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/images/portfolio/work3.jpg" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h2 class="subtitle">Wat voor soort klussen zijn er?</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam nesciunt dolores quibusdam,
                                        officia sed mollitia, illo, quis, vel veniam officiis qui repellendus. Perferendis et, veritatis
                                        enim voluptatem libero consequuntur eveniet alias nesciunt fugit doloremque tempora id, impedit
                                        sed earum voluptatum itaque at. Expedita impedit facere magnam commodi sed dolorem adipisci.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, aut ut totam quam inventore
                                        suscipit ullam nostrum quisquam corrupti nesciunt voluptas necessitatibus, ab porro cupiditate
                                        optio mollitia, expedita, omnis? Quasi.</p>
                                    <a href="{{URL::to('/klussen')}}" class="animated4 btn-raised btn-success btn-lg">
                                        <i class="material-icons mdi mdi-lightbulb-outline">
                                        </i> Klussen
                                        <div class="ripple-container">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tabs Section End -->

<!-- Services Section -->
<section class="Material-service-section section-padding">
    <div class="container">
        <div class="row">
            <!-- Section Titile -->
            <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                <h1 class="section-title">Waar wij voor staan</h1>
            </div>
        </div>
        <!-- Services Widget Section -->
        <div class="row">
            <!-- Service Widgets -->
            <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp" data-wow-delay=".3s">
                <div class="media">
                    <div class="media-left">
                        <i class="material-icons pulse-shrink mdi mdi-arrange-send-backward"></i>
                    </div>
                    <div class="media-body">
                        <h2 class="subtitle"><a href="#">Goed Salaris!</a></h2>
                        <p>Via BeeWorky verdien je
                            <strong>minimaal €16,-</strong> per uur. Ook heb je onderhandelingsvrijheid met de
                            opdrachtgever.</p>
                    </div>
                </div>
            </div>
            <!-- Service Widgets -->
            <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp" data-wow-delay=".4s">
                <div class="media">
                    <div class="media-left">
                        <i class="material-icons pulse-shrink mdi mdi-code-tags-check"></i>
                    </div>
                    <div class="media-body">
                        <h2 class="subtitle"><a href="#">Trainingen & Workshops</a></h2>
                        <p>Volg <strong>gratis</strong> trainingen & workshops in de: Horeca, Logistiek en Retail. </p>
                    </div>
                </div>
            </div>
            <!-- Service Widgets -->
            <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp" data-wow-delay=".5s">
                <div class="media">
                    <div class="media-left">
                        <i class="material-icons pulse-shrink mdi mdi-grid"></i>
                    </div>
                    <div class="media-body">
                        <h2 class="subtitle"><a href="#">Flexibiliteit</a></h2>
                        <p>Werk wanneer en waar je wilt. Neem de regie in eigen hand!</p>
                    </div>
                </div>
            </div>
            <!-- Service Widgets -->
            <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp" data-wow-delay=".6s">
                <div class="media">
                    <div class="media-left">
                        <i class="material-icons pulse-shrink mdi mdi-update"></i>
                    </div>
                    <div class="media-body">
                        <h2 class="subtitle"><a href="#">Een leuke werksfeer</a></h2>
                        <p>Werk bij de leukste werkgevers en wordt onderdeel van de BeeWorky communitie.</p>
                    </div>
                </div>
            </div>
            <!-- Service Widgets -->
            <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp" data-wow-delay=".7s">
                <div class="media">
                    <div class="media-left">
                        <i class="material-icons pulse-shrink mdi mdi-speedometer"></i>
                    </div>
                    <div class="media-body">
                        <h2 class="subtitle"><a href="#">Binnen no-time uitbetalingen</a></h2>
                        <p>Bepaal zelf hoe snel jij uitbetaald wilt worden. Dit is al mogelijk binnen 3 werkdagen.</p>
                    </div>
                </div>
            </div>
            <!-- Service Widgets -->
            <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp" data-wow-delay=".8s">
                <div class="media">
                    <div class="media-left">
                        <i class="material-icons pulse-shrink mdi mdi-shape-plus"></i>
                    </div>
                    <div class="media-body">
                        <h2 class="subtitle"><a href="#">Ethische werksfeer</a></h2>
                        <p>Wij maken <strong>geen</strong> onderscheid tussen gender, geaardheid, etniciteit en andere
                        vormen van discriminatie.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Portfolio Section -->
<section class="Material-portfolio-section section-padding section-dark">
    <div class="container">
        <div class="row">
            <!-- Section Titile -->
            <div class="col-md-4 col-lg-4 col-xl-6  Material-title-section wow animated fadeInLeft" data-wow-delay=".2s">
                <h1 class="section-title">Klussen</h1>
            </div>
            <!-- Section Quote -->
            <div class="col-md-8 col-lg-8 col-xl-6  portfolio-nav mb-3 wow animated fadeInRight" data-wow-delay=".2s">
                <ul class="nav nav-pills">
                    <li><a class="filter active" data-filter="all">Alles</a></li>
                    <li><a class="filter" data-filter=".business">Horeca</a></li>
                    <li><a class="filter" data-filter=".development">Logistiek</a></li>
                    <li><a class="filter" data-filter=".creative">Agrarisch</a></li>
                    <li><a class="filter" data-filter=".more">Vrijwilligerswerk</a></li>
                </ul>
            </div>
            <div class="portfolio-item-wrapper clearfix wow animated fadeInUp" data-wow-delay=".5s" id="Material-portfolio">
                <!-- Single Portfolio Image -->
                <div class="col-md-6 col-lg-4 col-xl-4 pb-4 mix business">
                    <figure class="single-portfolio">
                        <img class="img-fluid" src="assets/images/portfolio/work1.jpg" alt="">
                        <figcaption class="hover-content">
                            <a class="btn btn-round btn-fab btn-xs" href="portfolio-single.html"><i
                                    class="material-icons mdi mdi-arrow-right"></i>
                                <div class="ripple-container"></div>
                            </a>
                            <a href="portfolio-single.html">
                                <h2 class="subtitle">Business Cards</h2>
                            </a>
                            <p>Asus Inc.</p>
                        </figcaption>
                    </figure>
                </div>
                <!-- Single Portfolio Image -->
                <div class="col-md-6 col-lg-4 col-xl-4 mix development more">
                    <figure class="single-portfolio">
                        <img class="img-fluid" src="assets/images/portfolio/work2.jpg" alt="">
                        <figcaption class="hover-content">
                            <a class="btn btn-round btn-fab btn-xs" href="portfolio-single.html"><i
                                    class="material-icons mdi mdi-arrow-right"></i>
                                <div class="ripple-container"></div>
                            </a>
                            <a href="portfolio-single.html">
                                <h2 class="subtitle">Brochure Design</h2>
                            </a>
                            <p>Tesla Motors</p>
                        </figcaption>
                    </figure>
                </div>
                <!-- Single Portfolio Image -->
                <div class="col-md-6 col-lg-4 col-xl-4 mix creative business">
                    <figure class="single-portfolio">
                        <img class="img-fluid" src="assets/images/portfolio/work3.jpg" alt="">
                        <figcaption class="hover-content">
                            <a class="btn btn-round btn-fab btn-xs" href="portfolio-single.html"><i
                                    class="material-icons mdi mdi-arrow-right"></i>
                                <div class="ripple-container"></div>
                            </a>
                            <a href="portfolio-single.html">
                                <h2 class="subtitle">Coffee Cup</h2>
                            </a>
                            <p>Starbucks USA</p>
                        </figcaption>
                    </figure>
                </div>
                <!-- Single Portfolio Image -->
                <div class="col-md-6 col-lg-4 col-xl-4 mix creative more development">
                    <figure class="single-portfolio">
                        <img class="img-fluid" src="assets/images/portfolio/work4.jpg" alt="">
                        <figcaption class="hover-content">
                            <a class="btn btn-round btn-fab btn-xs" href="portfolio-single.html"><i
                                    class="material-icons mdi mdi-arrow-right"></i>
                                <div class="ripple-container"></div>
                            </a>
                            <a href="portfolio-single.html">
                                <h2 class="subtitle">Landing Page</h2>
                            </a>
                            <p>Uniliver, India</p>
                        </figcaption>
                    </figure>
                </div>
                <!-- Single Portfolio Image -->
                <div class="col-md-6 col-lg-4 col-xl-4 mix more development">
                    <figure class="single-portfolio">
                        <img class="img-fluid" src="assets/images/portfolio/work5.jpg" alt="">
                        <figcaption class="hover-content">
                            <a class="btn btn-round btn-fab btn-xs" href="portfolio-single.html"><i
                                    class="material-icons mdi mdi-arrow-right"></i>
                                <div class="ripple-container"></div>
                            </a>
                            <a href="portfolio-single.html">
                                <h2 class="subtitle">Dashboard Design</h2>
                            </a>
                            <p>Linode Inc.</p>
                        </figcaption>
                    </figure>
                </div>
                <!-- Single Portfolio Image -->
                <div class="col-md-6 col-lg-4 col-xl-4 mix creative business">
                    <figure class="single-portfolio">
                        <img class="img-fluid" src="assets/images/portfolio/work6.jpg" alt="">
                        <figcaption class="hover-content">
                            <a class="btn btn-round btn-fab btn-xs" href="portfolio-single.html"><i
                                    class="material-icons mdi mdi-arrow-right"></i>
                                <div class="ripple-container"></div>
                            </a>
                            <a href="portfolio-single.html">
                                <h2 class="subtitle">Re-Branding</h2>
                            </a>
                            <p>Alphabet Inc.</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
        <div class="row mt-4 wow animated fadeInUp" data-wow-delay=".3s">
            <div class="col-md-12 text-center">
                <a href="{{URL::to('/klussen')}}" class="animated4 btn btn-common" data-ripple-color="#000"><i
                        class="material-icons mdi mdi-lightbulb-outline"></i> Alle klussen<div class="ripple-container"></div></a>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio Section End -->

<!-- work-counter area -->
<section class="work-counter-section section-padding">
    <div class="container">
        <div class="row">
            <!-- Single Counter -->
            <div class="col-md-3 col-sm-6 work-counter-widget text-center wow animated fadeInUp" data-wow-delay=".2s">
                <div class="counter">
                    <div class="icon"><i class="material-icons mdi mdi-check-all"></i></div>
                    <div class="timer">32</div>
                    <p>Voltooide Klussen</p>
                </div>
            </div>
            <!-- Single Counter -->
            <div class="col-md-3 col-sm-6 work-counter-widget text-center wow animated fadeInUp" data-wow-delay=".3s">
                <div class="counter">
                    <div class="icon"><i class="material-icons mdi mdi-clock"></i></div>
                    <div class="timer">217</div>
                    <p>Gewerkte Uren</p>
                </div>
            </div>
            <!-- Single Counter -->
            <div class="col-md-3 col-sm-6 work-counter-widget text-center wow animated fadeInUp" data-wow-delay=".4s">
                <div class="counter">
                    <div class="icon"><i class="material-icons mdi mdi-account-multiple-outline"></i></div>
                    <div class="timer">107</div>
                    <p>Workbees</p>
                </div>
            </div>
            <!-- Single Counter -->
            <div class="col-md-3 col-sm-6 work-counter-widget text-center wow animated fadeInUp" data-wow-delay=".5s">
                <div class="counter">
                    <div class="icon"><i class="material-icons mdi mdi-sticker-emoji"></i></div>
                    <div class="timer">13</div>
                    <p>Tevreden Klanten</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- work-counter area end -->

<!-- Start Client Section -->
<div class="client section-padding section-dark">
    <div class="container">
        <div class="row">
            <div id="client-logo" class="owl-carousel">
                <div class="client-logo item">
                    <a href="#">
                        <img class="img-fluid" src="" alt="" />
                    </a>
                </div>
                <div class="client-logo item">
                    <a href="#">
                        <img class="img-fluid" src="https://preview.uideck.com/items/material/assets/images/clients/client1.png" alt="" />
                    </a>
                </div>
                <div class="client-logo item">
                    <a href="#">
                        <img class="img-fluid" src="https://preview.uideck.com/items/material/assets/images/clients/client2.png" alt="" />
                    </a>
                </div>
                <div class="client-logo item">
                    <a href="#">
                        <img class="img-fluid" src="https://preview.uideck.com/items/material/assets/images/clients/client3.png" alt="" />
                    </a>
                </div>
                <div class="client-logo item">
                    <a href="#">
                        <img class="img-fluid" src="https://preview.uideck.com/items/material/assets/images/clients/client4.png" alt="" />
                    </a>
                </div>
                <div class="client-logo item">
                    <a href="#">
                        <img class="img-fluid" src="https://preview.uideck.com/items/material/assets/images/clients/client1.png" alt="" />
                    </a>
                </div>
                <div class="client-logo item">
                    <a href="#">
                        <img class="img-fluid" src="https://preview.uideck.com/items/material/assets/images/clients/client2.png" alt="" />
                    </a>
                </div>
                <div class="client-logo item">
                    <a href="#">
                        <img class="img-fluid" src="https://preview.uideck.com/items/material/assets/images/clients/client4.png" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Client Section -->

<!-- Our BLog Section -->
<section class="Material-blog-section section-padding">
    <div class="container">
        <div class="row">
            <!-- Section Titile -->
            <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                <h1 class="section-title">Blog Posts</h1>
            </div>
        </div>

        <div class="row">
            <!-- Single Article -->
            <div class="col-md-6 col-lg-4 col-xl-4 wow animated fadeInUp" data-wow-delay=".3s">
                <article class="single-blog-post">
                    <!-- Featured Image -->
                    <div class="featured-image">
                        <a href="#">
                            <img src="assets/images/blog/featured1.jpg" alt="">
                        </a>
                    </div>
                    <!-- Post Meta -->
                    <div class="post-meta">
                        <!-- Title -->
                        <a href="blog-single.html">
                            <h2 class="subtitle">12+ Amazing Growth Hacking Tips and Tricks</h2>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio perferendis assumenda ipsum maiores
                            dolorum similique obcaecati perspiciatis.</p>
                    </div>
                    <div class="meta-tags">
                        <span class="comments"><a href="#"><i class="mdi mdi-comment-outline"></i> 24 Comments</a></span>
                        <!-- Read More -->
                        <a class="btn btn-round btn-fab" href="blog-single.html"><i
                                class="material-icons mdi mdi-arrow-right"></i>
                            <div class="ripple-container"></div>
                        </a>
                    </div>
                </article>
            </div>
            <!-- Single Article -->
            <div class="col-md-6 col-lg-4 col-xl-4 wow animated fadeInUp" data-wow-delay=".4s">
                <article class="single-blog-post">
                    <!-- Featured Image -->
                    <div class="featured-image">
                        <a href="#">
                            <img src="assets/images/blog/featured2.jpg" alt="">
                        </a>
                    </div>
                    <!-- Post Meta -->
                    <div class="post-meta">
                        <!-- Title -->
                        <a href="blog-single.html">
                            <h2 class="subtitle">10 Tips to Validate Your Next Startup Idea</h2>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio perferendis assumenda ipsum maiores
                            dolorum similique obcaecati perspiciatis.</p>
                    </div>
                    <div class="meta-tags">
                        <span class="comments"><a href="#"><i class="mdi mdi-comment-outline"></i> 24 Comments</a></span>
                        <!-- Read More -->
                        <a class="btn btn-round btn-fab" href="blog-single.html"><i
                                class="material-icons mdi mdi-arrow-right"></i>
                            <div class="ripple-container"></div>
                        </a>
                    </div>
                </article>
            </div>
            <!-- Single Article -->
            <div class="col-md-6 col-lg-4 col-xl-4 wow animated fadeInUp" data-wow-delay=".5s">
                <article class="single-blog-post">
                    <!-- Featured Image -->
                    <div class="featured-image">
                        <a href="#">
                            <img src="assets/images/blog/featured3.jpg" alt="">
                        </a>
                    </div>
                    <!-- Post Meta -->
                    <div class="post-meta">
                        <!-- Title -->
                        <a href="blog-single.html">
                            <h2 class="subtitle">How to Create Successful Website for Your Agency</h2>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio perferendis assumenda ipsum maiores
                            dolorum similique obcaecati perspiciatis.</p>
                    </div>
                    <div class="meta-tags">
                        <span class="comments"><a href="#"><i class="mdi mdi-comment-outline"></i> 24 Comments</a></span>
                        <!-- Read More -->
                        <a class="btn btn-round btn-fab" href="blog-single.html"><i
                                class="material-icons mdi mdi-arrow-right"></i>
                            <div class="ripple-container"></div>
                        </a>
                    </div>
                </article>
            </div>
        </div>
        <div class="row mt-5 wow animated fadeInUp" data-wow-delay=".6s">
            <!-- Button -->
            <div class="col-md-12 text-center">
                <a href="{{URL::to('/socialcorner')}}" class="animated4 btn btn-common" data-ripple-color="#000"><i
                        class="material-icons mdi mdi-library-books"></i> Check onze Social Corner<div class="ripple-container"></div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Our BLog Section End -->

<!-- Contact Us Section -->
<section class="Material-contact-section section-padding section-dark">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="contact-title wow animated fadeInRight" data-wow-delay=".3s">Contact
                </h1>
            </div>
        </div>
        <div class="row justify-content-between mt-3">
            <!-- Section Titile -->
            <div class="col-md-12 col-lg-7 col-xs-12 contact-widget-section">
                <div class="row">
                    <!-- Single Contact Widget -->
                    <div class="col-sm-6 wow fadeInUp animated" data-wow-delay=".2s">
                        <div class="single-contact-widget">
                            <i class="material-icons mdi mdi-map-marker"></i>
                            <h3>Adres</h3>
                            <address>
                                <p>Eerste Boerhaavestraat 33E</p>
                                <p>1091 RZ</p>
                                <p>Amsterdam</p>
                            </address>
                        </div>
                    </div>
                    <!-- Single Contact Widget -->
                    <div class="col-sm-6 wow fadeInUp animated" data-wow-delay=".3s">
                        <div class="single-contact-widget">
                            <i class="material-icons mdi mdi-phone"></i>
                            <h3>Telefoon</h3>
                            <address>
                                <p>+31610825684</p>
                                <p>+31642285144</p>
                                <p><em>Ook bereikbaar via WhatsApp</em></p>
                            </address>
                        </div>
                    </div>
                    <!-- Single Contact Widget -->
                    <div class="col-sm-6 wow fadeInUp animated" data-wow-delay=".4s">
                        <div class="single-contact-widget">
                            <i class="material-icons mdi mdi-email-open"></i>
                            <h3>Email</h3>
                            <address>
                                <p>info@beeworky.nl</p>
                                <p>support@beeworky.nl</p>
                            </address>
                        </div>
                    </div>
                    <!-- Single Contact Widget -->
                    <div class="col-sm-6 wow fadeInUp animated" data-wow-delay=".5s">
                        <div class="single-contact-widget">
                            <i class="material-icons mdi mdi-clock"></i>
                            <h3>Openingstijden</h3>
                            <address>
                                <p>24/7 beschikbaar!</p>
                            </address>
                        </div>
                    </div>
                </div>
            </div>

            <!-- contact form -->
            <div class="col-md-12 col-lg-5 col-xs-12 wow fadeInUp animated" data-wow-delay=".4s">
                <form class="shake" role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                    <!-- Name -->
                    <div class="form-group label-floating">
                        <label class="control-label" for="name">Naam</label>
                        <input class="form-control" id="name" type="text" name="name" required
                               data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- email -->
                    <div class="form-group label-floating">
                        <label class="control-label" for="email">Email</label>
                        <input class="form-control" id="email" type="email" name="email" required
                               data-error="Please enter your Email">
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- Subject -->
                    <div class="form-group label-floating">
                        <label for="msgSubject" class="control-label">Onderwerp</label>
                        <input class="form-control" id="msg_subject" type="text" name="subject" required
                               data-error="Please enter your message subject">
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- Message -->
                    <div class="form-group label-floating">
                        <label for="message" class="control-label">Bericht</label>
                        <textarea class="form-control" rows="8" id="message" name="message" required
                                  data-error="Write your message"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- Form Submit -->
                    <div class="form-submit mt-4">
                        <button class="btn btn-common" type="submit" id="form-submit"><i
                                class="material-icons mdi mdi-message-outline"></i> Verstuur bericht</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<!-- Contact Us Section End -->

<!-- Call to action Section -->
<section class="call-to-action-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-8 col-xs-12 text-left wow animated fadeInLeft" data-wow-delay=".2s">
                <h1>Chat live met ons!</h1>
                <h3>En join de Workbee Facebook groep.</h3>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12 mt-4 text-right wow animated fadeInRight" data-wow-delay=".3s">
                <a href="javascript:void(0)" class="animated4 btn btn-common"><i class="material-icons mdi mdi-phone"></i>
                    Join</a>
            </div>
            <!-- Start facebook fab-->
            <a href="javascript:void(0)" class="btn btn-info btn-fab wow animated fadeInRight" data-wow-delay=".3s">
                <i class="material-icons mdi mdi-facebook-messenger">
                </i>
            </a>
            <!-- END facebook fab -->
        </div>
    </div>
</section>
<!-- Call to action Section End -->

@include('partials.footer')
@include('partials.javascriptbundle')
</body>
</html>
