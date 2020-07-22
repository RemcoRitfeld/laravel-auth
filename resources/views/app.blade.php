<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>BeeWorky</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{secure_asset('css/bootstrap.min.css')}}">
    <!-- Meterial Icon CSS -->
    <link rel="stylesheet" href="{{secure_asset('css/materialdesignicons.min.css')}}">
    <!-- Material CSS -->
    <link rel="stylesheet" href="{{secure_asset('css/material.min.css')}}">
    <!-- Ripples CSS -->
    <link rel="stylesheet" href="{{secure_asset('css/ripples.min.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{secure_asset('css/owl.carousel.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{secure_asset('css/magnific-popup.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{secure_asset('css/animate.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{secure_asset('css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{secure_asset('css/responsive.css')}}">
    <!-- Color CSS Styles (default website layout color) -->
    <link rel="stylesheet" type="text/css" href="{{secure_asset('css/colors/blue.css')}}" media="screen">

    <!-- Google Font
    @import url("https://fonts.googleapis.com/css?family=Rubik:500,700|Roboto:400,600");
    -->
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
                                    <ul class="sub-menu">
                                        <li class="nav-item"><a class="" href="index.html">Home V1</a></li>
                                        <li class="nav-item"><a class="active" href="index-2.html">Home V2</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#">Over Ons <span><i class="mdi mdi-chevron-down"></i></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item"><a href="about-us.html">About Us 1</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#">Waar wij voor staan <span><i class="mdi mdi-chevron-down"></i></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item"><a href="tab.html">Tabs</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#">Klussen <span><i class="mdi mdi-chevron-down"></i></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item"><a href="portfolio-2.html">Portfolio 2 columns</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#">Contact <span><i class="mdi mdi-chevron-down"></i></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item"><a href="blog.html">Blog Page</a></li>
                                    </ul>
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
                    <h2 class="subtitle">1. Je hebt interesse</h2>
                    <p>Je hebt interesse gekregen om een WorkBee te worden. Dat is goed! wij hebben veel te bieden.</p>
                </div>
            </div>
            <!-- Single About -->
            <div class="col-sm-8 col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".3s">
                <div class="about-single">
                    <i class="material-icons mdi mdi-new-box"></i>
                    <h2 class="subtitle">2. Je meldt je aan</h2>
                    <p>Je hebt je aangemeldt en bent nu een WorkBee 🐝, gefeliciteerd! 🥳</p>
                </div>
            </div>
            <!-- Single About -->
            <div class="col-sm-8 col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".4s">
                <div class="about-single">
                    <i class="material-icons mdi mdi-arrow-left-right"></i>
                    <h2 class="subtitle">3. Je kiest een klus</h2>
                    <p>Wij hebben een ruim aanbod aan klussen in de Horeca, Logistiek en in de Keuken.</p>
                </div>
            </div>
            <!-- Single About -->
            <div class="col-sm-8 col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".5s">
                <div class="about-single">
                    <i class="material-icons mdi mdi-finance"></i>
                    <h2 class="subtitle">4. Money!</h2>
                    <p>Hier draait het natuurlijk allemaal om. Als WorkBee verdien je via BeeWorky
                        <strong>minimaal €16,-</strong> per uur</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Tabs Section -->
<section class="material-tabs-section section-padding">
    <div class="container">
        <div class="row">
            <!-- Section Titile -->
            <div class="col-md-12 material-title-section wow animated fadeInLeft" data-wow-delay=".2s">
                <h1 class="section-title">Over Ons</h1>
            </div>
        </div>

        <div class="row mt-2 wow animated fadeInUp" data-wow-delay=".4s">
            <div class="col-md-12">
                <div class="Material-tab-default">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs text-center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home" role="tab">BeeWorky</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Flexwerkers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#messages" role="tab">Klussen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Voor Bedrijven</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#payrolling" role="tab">Payrolling</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="home" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{secure_asset('images\Logos\Beeldmerk\beeldmerk.bw.svg')}}" alt="">
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
                                        So what are you waiting for? Meldt je nu kosteloos aan op de website en vindt jouw ideale opdracht!
                                        Get Honey 🍯, #BeeWorky!</p>
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam nesciunt dolores quibusdam,
                                        officia sed mollitia, illo, quis, vel veniam officiis qui repellendus. Perferendis et, veritatis
                                        enim voluptatem libero consequuntur eveniet alias nesciunt fugit doloremque tempora id, impedit
                                        sed earum voluptatum itaque at. Expedita impedit facere magnam commodi sed dolorem adipisci.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, aut ut totam quam inventore
                                        suscipit ullam nostrum quisquam corrupti nesciunt voluptas necessitatibus, ab porro cupiditate
                                        optio mollitia, expedita, omnis? Quasi.</p>
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
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="settings" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/images/portfolio/work4.jpg" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h2 class="subtitle">Waarom BeeWorky voor jouw bedrijf?</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam nesciunt dolores quibusdam,
                                        officia sed mollitia, illo, quis, vel veniam officiis qui repellendus. Perferendis et, veritatis
                                        enim voluptatem libero consequuntur eveniet alias nesciunt fugit doloremque tempora id, impedit
                                        sed earum voluptatum itaque at. Expedita impedit facere magnam commodi sed dolorem adipisci.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, aut ut totam quam inventore
                                        suscipit ullam nostrum quisquam corrupti nesciunt voluptas necessitatibus, ab porro cupiditate
                                        optio mollitia, expedita, omnis? Quasi.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="payrolling" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/images/portfolio/work4.jpg" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h2 class="subtitle">Waarom Payrolling?</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam nesciunt dolores quibusdam,
                                        officia sed mollitia, illo, quis, vel veniam officiis qui repellendus. Perferendis et, veritatis
                                        enim voluptatem libero consequuntur eveniet alias nesciunt fugit doloremque tempora id, impedit
                                        sed earum voluptatum itaque at. Expedita impedit facere magnam commodi sed dolorem adipisci.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, aut ut totam quam inventore
                                        suscipit ullam nostrum quisquam corrupti nesciunt voluptas necessitatibus, ab porro cupiditate
                                        optio mollitia, expedita, omnis? Quasi.</p>
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
                        <h2 class="subtitle"><a href="#">Goed opgeleid & gewkalificeerd personeel</a></h2>
                        <p>Excepteur sint occaecat cupi datat non proidt, sunt in culpa qui offi cia deserunt</p>
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
                        <h2 class="subtitle"><a href="#">Goed Salaris!</a></h2>
                        <p>Excepteur sint occaecat cupi datat non proidt, sunt in culpa qui offi cia deserunt</p>
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
                        <h2 class="subtitle"><a href="#">Een Eerlijke werksfeer</a></h2>
                        <p>Excepteur sint occaecat cupi datat non proidt, sunt in culpa qui offi cia deserunt</p>
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
                        <p>Excepteur sint occaecat cupi datat non proidt, sunt in culpa qui offi cia deserunt</p>
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
                        <h2 class="subtitle"><a href="#">Trainingen & Workshops</a></h2>
                        <p>Excepteur sint occaecat cupi datat non proidt, sunt in culpa qui offi cia deserunt</p>
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
                        <h2 class="subtitle"><a href="#">Flexibiliteit</a></h2>
                        <p>Excepteur sint occaecat cupi datat non proidt, sunt in culpa qui offi cia deserunt</p>
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

<!-- Contact Us Section -->
<section class="Material-contact-section section-padding">

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
                            <h3>Address</h3>
                            <address>
                                <p>4435 Berkshire Circle</p>
                                <p>Knoxville</p>
                                <p>TN 27912</p>
                            </address>
                        </div>
                    </div>
                    <!-- Single Contact Widget -->
                    <div class="col-sm-6 wow fadeInUp animated" data-wow-delay=".3s">
                        <div class="single-contact-widget">
                            <i class="material-icons mdi mdi-phone"></i>
                            <h3>Phone</h3>
                            <address>
                                <p>879-890-9767</p>
                                <p>234-890-1213</p>
                            </address>
                        </div>
                    </div>
                    <!-- Single Contact Widget -->
                    <div class="col-sm-6 wow fadeInUp animated" data-wow-delay=".4s">
                        <div class="single-contact-widget">
                            <i class="material-icons mdi mdi-email-open"></i>
                            <h3>Email</h3>
                            <address>
                                <p>mail@Material.com</p>
                                <p>support@Material.com</p>
                            </address>
                        </div>
                    </div>
                    <!-- Single Contact Widget -->
                    <div class="col-sm-6 wow fadeInUp animated" data-wow-delay=".5s">
                        <div class="single-contact-widget">
                            <i class="material-icons mdi mdi-clock"></i>
                            <h3>Opening Hours</h3>
                            <address>
                                <p>Mon - Fri: 8 AM - 3 PM</p>
                                <p>Sat: 8 AM - 12 PM</p>
                                <p>Sun: Closed</p>
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
                        <label class="control-label" for="name">Name</label>
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
                        <label for="msgSubject" class="control-label">Subject</label>
                        <input class="form-control" id="msg_subject" type="text" name="subject" required
                               data-error="Please enter your message subject">
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- Message -->
                    <div class="form-group label-floating">
                        <label for="message" class="control-label">Message</label>
                        <textarea class="form-control" rows="8" id="message" name="message" required
                                  data-error="Write your message"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- Form Submit -->
                    <div class="form-submit mt-4">
                        <button class="btn btn-common" type="submit" id="form-submit"><i
                                class="material-icons mdi mdi-message-outline"></i> Send Message</button>
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
                <h3>Wij zijn te bereiken op FB Messenger.</h3>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12 mt-4 text-right wow animated fadeInRight" data-wow-delay=".3s">
                <a href="javascript:void(0)" class="animated4 btn btn-common"><i class="material-icons mdi mdi-phone"></i>
                    Contact us</a>
            </div>
        </div>
    </div>
</section>
<!-- Call to action Section End -->

<!--Footer-->
<footer class="page-footer center-on-small-only  pt-0 footer-widget-container">
    <!--Footer Links-->
    <div class="container pt-5 mb-5">
        <div class="row">
            <!--First column-->
            <div class="col-md-6 col-lg-3 col-xl-3 footer-contact-widget">
                <h3 class="footer-title">Bedrijfsgegevens</h3>
                <p><i class="mdi mdi-office-building"></i> KvK-nummer: <strong>77935535</strong>
                    <br><i class="mdi mdi-map-marker"></i> Locatie: <strong>Amsterdam</strong>
                    <br><i class="mdi mdi-email"></i> Email: <a href="mailto:info@beeworky.nl" class="nocolor">info@beeworky.nl</a>
                </p>
                <br><br>
                <h3 class="footer-title">Reach out to us</h3>
                <ul>
                    <li>
                        <a href="{{URL('https://www.linkedin.com/company/beeworky')}}"><i class="mdi mdi-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="{{URL('https://www.instagram.com/beeworky')}}"><i class="mdi mdi-instagram"></i></a>
                    </li>
                    <li>
                        <a href="{{URL('https://www.facebook.com/BeeWorky')}}"><i class="mdi mdi-facebook"></i></a>
                    </li>
                    <li>
                        <a href="{{URL('https://twitter.com/beeworky')}}"><i class="mdi mdi-twitter"></i></a>
                    </li>
{{--                    <li>--}}
{{--                        <a href="{{URL('https://www.youtube.com/channel/UCkhiaCxssWiRm2L9t8a2I9Q')}}"><i class="mdi mdi-youtube"></i></a>--}}
{{--                    </li>--}}
                    <li>
                        <a href="{{URL('https://wa.me/1XXXXXXXXXX')}}"><i class="mdi mdi-whatsapp"></i></a>
                    </li>
                </ul>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-6 col-lg-3 col-xl-3 recent-widget">
                <h3 class="footer-title">Voor Flexwerkers</h3>
                <ul class="image-list">
                    <li>
                        <figure class="overlay">
                            <img class="img-fluid" src="assets/images/art/a1.jpg" alt="">
                            <figcaption><a href="blog-single.html"><i class="mdi mdi-link-variant from-top icon-xs"></i></a>
                            </figcaption>
                        </figure>
                        <div class="post-content">
                            <h6 class="post-title"> <a href="blog-single.html">Fusce gravida tortor felis</a> </h6>
                            <div class="meta"><span class="date">12 Jan 2019</span></div>
                        </div>
                    </li>
                    <li>
                        <figure class="overlay">
                            <img class="img-fluid" src="assets/images/art/a2.jpg" alt="">
                            <figcaption><a href="blog-single.html"><i class="mdi mdi-link-variant from-top icon-xs"></i></a>
                            </figcaption>
                        </figure>
                        <div class="post-content">
                            <h6 class="post-title"><a href="blog-single.html">Ornare Nullam Risus Cursus</a></h6>
                            <div class="meta"><span class="date">12 Jan 2019</span></div>
                        </div>
                    </li>
                    <li>
                        <figure class="overlay">
                            <img class="img-fluid" src="assets/images/art/a3.jpg" alt="">
                            <figcaption><a href="blog-single.html"><i class="mdi mdi-link-variant from-top icon-xs"></i></a>
                            </figcaption>
                        </figure>
                        <div class="post-content">
                            <h6 class="post-title"> <a href="blog-single.html">Euismod Nullam Fusce Dapibus</a> </h6>
                            <div class="meta"><span class="date">12 Jan 2019</span></div>
                        </div>
                    </li>
                </ul>
            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-md-6 col-lg-3 col-xl-3 link-widget">
                <h3 class="footer-title">Voor Bedrijven</h3>
                <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Etiam porta sem malesuada
                    magna mollis euismod. Praesent commodo cursus.</p>
                <div class="mt-3"></div>
                <ul class="icon-list">
                    <li><i class="mdi mdi-map-marker"></i> 548 San Francisco, CA </li>
                    <li><i class="mdi mdi-email"></i> <a href="mailto:mail@material.com" class="nocolor">mail@material.com</a>
                    </li>
                    <li><i class="mdi mdi-phone-classic"></i> +00 (123) 456 78 90 </li>
                    <li><i class="mdi mdi-cellphone-iphone"></i> +00 (121) 455 47 54 </li>
                </ul>
            </div>
            <!--/.Third column-->

            <!--Fourth column-->
            <div class="col-md-6 col-lg-3 col-xl-3 footer-contact">
                <h3 class="footer-title">Nieuwsbrief</h3>
                <div class="widget">
                    <div class="newsletter-wrapper">
                        <!-- subscribe-form start  -->
                        <form
                            action="https://beeworky.us19.list-manage.com/subscribe/post?u=d1a66409489d376e3aed8d11b&amp;id=4059db5f77"
                            method="post" id="subscribe-form" name="subscribe-form"
                            class="subscribe-form subscribe-form-1 validate wow fadeInDown" data-wow-delay=".6s"
                            target="_blank" novalidate="">
                            <div class="form-group">
                            <input type="email" value="" name="EMAIL" class="email form-control required email" id="EMAIL"
                                   placeholder="Typ hier je email adres" required="">

                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>

                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input
                                    type="text" name="b_4dbefd9d3a1d6a570020b1e85_e16d098ae8" tabindex="-1"
                                    value=""></div>
                            <button type="submit" name="subscribe" id="subscribe"
                                     class="btn btn-common pull-right">Meld je aan!</button>
                            </div>
                        </form>
                        <!-- subscribe-form end  -->
                    </div>
                </div>
                <!-- /.widget -->
                <div class="widget">
                    <h5 class="widget-title">Handige Links</h5>
                    <ul class="unordered-list">
                        <li><a href="#" class="nocolor">Het ontstaan van BeeWorky</a></li>
                        <li><a href="#" class="nocolor">Voorwaarden</a></li>
                        <li><a href="#" class="nocolor">Privacy</a></li>
                        <li><a href="#" class="nocolor">Disclaimer</a></li>
                    </ul>
                </div>
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <!-- Copyright-->
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="copyright-text">Copyright &#9400; <script>document.write(new Date().getFullYear())</script> BeeWorky
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--/.Copyright -->

</footer>
<!--/.Footer-->

<!-- Back To Top -->
<a href="#" class="back-to-top">
    <div class="ripple-container"></div>
    <i class="mdi mdi-arrow-up">
    </i>
</a>

<!-- Preloader -->
<div id="preloader">
    <div class="loader" id="loader-1"></div>
</div>
<!-- End Preloader -->

@include('partials.javascriptbundle')
</body>
</html>
