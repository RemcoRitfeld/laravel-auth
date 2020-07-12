<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>BeeWorky</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{secure_asset('css/bootstrap.min.css')}}" >
    <!-- Font -->
    <link rel="stylesheet" type="text/css" href="{{secure_asset('css/font-awesome.min.css')}}">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="{{secure_asset('css/slicknav.css')}}">
    <!-- Owl carousel -->
    <link rel="stylesheet" type="text/css" href="{{secure_asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{secure_asset('css/owl.theme.css')}}">
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{secure_asset('css/animate.css')}}">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="{{secure_asset('css/main.css')}}">
    <!-- Extras Style -->
    <link rel="stylesheet" type="text/css" href="{{secure_asset('css/extras.css')}}">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="{{secure_asset('css/responsive.css')}}">

</head>
<body>

<!-- Header Area wrapper Starts -->
<header id="header-wrap">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="icon-menu"></span>
                    <span class="icon-menu"></span>
                    <span class="icon-menu"></span>
                </button>
                <a href="{{URL::to('/')}}" class="navbar-brand"><img src="{{asset('images\Logos\Horizontaal\Logo2kleurentekst\logo.bw.horizontaal_1.svg')}}" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
                    <li class="nav-item active">
                        <a class="nav-link" href="#sliders">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#overons">
                            Over Ons
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aandeslag">
                            Aan de Slag
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#klussen">
                            Klussen
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#feature">
                            Features
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">
                            Pricing
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu navbar-nav">
            <li>
                <a class="page-scroll" href="#sliders">
                    Home
                </a>
            </li>
            <li>
                <a class="page-scroll" href="#about">
                    About
                </a>
            </li>
            <li>
                <a class="page-scroll" href="#overons">
                    Over Ons
                </a>
            </li>
            <li>
                <a class="page-scroll " href="#voorjou">
                    Voor jou
                </a>
            </li>
            <li>
                <a class="page-scroll" href="#portfolio">
                    Portfolio
                </a>
            </li>
            <li>
                <a class="page-scroll" href="#feature">
                    Features
                </a>
            </li>
            <li>
                <a class="page-scroll" href="#team">
                    Team
                </a>
            </li>
            <li>
                <a class="page-scroll" href="#pricing">
                    Pricing
                </a>
            </li>
            <li>
                <a class="page-scroll" href="#contact">
                    Contact
                </a>
            </li>
        </ul>
        <!-- Mobile Menu End -->

    </nav>
    <!-- Navbar End -->

    <!-- sliders -->
    <div id="sliders">
        <div class="full-width">
            <!-- light slider -->
            <div id="light-slider" class="carousel slide">
                <div id="carousel-area">
                    <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-slider" data-slide-to="1"></li>
                            <li data-target="#carousel-slider" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img src="{{asset('images\homepage\carousel\horeca.jpg')}}" alt="">
                                <div class="carousel-caption">
                                    <h3 class="slide-title animated fadeInDown"><span>Helium</span> - Bootstrap 4 UI Kit</h3>
                                    <h5 class="slide-text animated fadeIn">Lorem ipsum dolor sit amet, consectetuer adipiscing elit<br> Curabitur ultricies nisi Nam eget dui. Etiam rhoncus</h5>
                                    <a href="#" class="btn btn-lg btn-border animated fadeInUp">Get Started</a>
                                    <a href="#" class="btn btn-lg btn-warning-filled animated fadeInUp">Learn More</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images\homepage\carousel\logistiek.jpg')}}" alt="">
                                <div class="carousel-caption">
                                    <h3 class="slide-title animated fadeInDown"><span>Cutting-edge</span> Features</h3>
                                    <h5 class="slide-text animated fadeIn">Lorem ipsum dolor sit amet, consectetuer adipiscing elit<br> Curabitur ultricies nisi Nam eget dui. Etiam rhoncus</h5>
                                    <a href="#" class="btn btn-lg btn-common animated fadeInUp">Download Now</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images\homepage\carousel\keuken-1.jpg')}}" alt=""">
                                <div class="carousel-caption">
                                    <h3 class="slide-title animated fadeInDown"><span>100+</span> UI Blocks & Components</h3>
                                    <h5 class="slide-text animated fadeIn">Lorem ipsum dolor sit amet, consectetuer adipiscing elit<br> Curabitur ultricies nisi Nam eget dui. Etiam rhoncus</h5>
                                    <a href="#" class="btn btn-lg btn-border animated fadeInUp">Get Started</a>
                                    <a href="#" class="btn btn-lg btn-common animated fadeInUp">Download</a>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End sliders -->

</header>
<!-- Header Area wrapper End -->

<!-- About Section Start -->
<div id="about" class="section-padding">
    <div class="container">
        <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Waar staan wij voor?</h2>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="about block text-center">
                    <img src="img/about/img1.png" alt="">
                    <h5><a href="#">Goed opgeleleid & Kwalitatief personeel</a></h5>
                    <p>Quisque sit amet libero purus. Nulla a dignissim quam. In hac habitasse platea dictumst.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="about block text-center">
                    <img src="img/about/img2.png" alt="">
                    <h5><a href="#">Goed Salaris!</a></h5>
                    <p>Quisque sit amet libero purus. Nulla a dignissim quam. In hac habitasse platea dictumst.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="about block text-center">
                    <img src="img/about/img3.png" alt="">
                    <h5><a href="#">Een eerlijke en leuke werksfeer</a></h5>
                    <p>Quisque sit amet libero purus. Nulla a dignissim quam. In hac habitasse platea dictumst.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="about block text-center">
                    <img src="img/about/img4.png" alt="">
                    <h5><a href="#">Trainingen & Workshops</a></h5>
                    <p>Quisque sit amet libero purus. Nulla a dignissim quam. In hac habitasse platea dictumst.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->

<!-- Commercial Section Start -->
<section id="overons" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Over Ons</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                {{--                <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>--}}
                <p class="lead">We zijn een jong en hippe start-up die zich inzet voor het werken van de toekomst.
                    We zetten ons in voor de behoeften van zowel opdrachtnemers als opdrachtgevers.
                    Luisteren naar wat opdrachtnemers en opdrachtgevers willen, dat telt! <br><br>
                    Op deze unieke manier kunnen
                    wij opdrachtgevers middels het BeeWorky platform, voorzien van kwalitatief personeel en helpen wij
                    enthousiaste opdrachtnemers aan opdrachten naar eigen keuze. <br><br>
                    Tegelijkertijd staat de opdrachtnemer nooit stil, want bij BeeWorky wordt de nadruk gelegd op
                    <strong>KWALITEIT</strong> en <strong>ONTWIKKELING</strong> en daarom bieden wij structureel gratis trainingen en workshops aan die
                    een onderdeel vormen voor de BeeWorky community. <br><br>
                    So what are you waiting for? Meldt je nu kosteloos aan op de website en vindt jouw ideale opdracht!
                    #BeeWorky, get honey!</p>
            </div>
            <div class="col-md-5">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/0o7thHc-pxY"
                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
<!-- Commercial Section End -->

<!-- Services Section Start -->
<section id="aandeslag" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Aan de slag</h2>
                <p></p>
                <a class="btn btn-warning-filled std-btn btn-xlg btn-info-filled" href="{{URL::to('/flexwerkers')}}" role="button">Flexwerkers</a>
                <a class="btn btn-dark std-btn btn-xlg btn-info-filled" href="{{URL::to('publicwebsite/bedrijven')}}" role="button">Bedrijven</a>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section id="klussen" class="section-padding">
    <!-- Container Starts -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Klussen</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- Portfolio Controller/Buttons -->
                <div class="controls text-center wow fadeInUpQuick" data-wow-delay=".6s">
                    <a class="filter active btn btn-common" data-filter="all">
                        All
                    </a>
                    <a class="filter btn btn-common" data-filter=".horeca">
                        Horeca
                    </a>
                    <a class="filter btn btn-common" data-filter=".retail">
                        Retail
                    </a>
                    <a class="filter btn btn-common" data-filter=".logistiek">
                        Logistiek
                    </a>
                    <a class="filter btn btn-common" data-filter=".vrijwilligerswerk">
                        Vrijwilligerswerk
                    </a>
                </div>
                <!-- Portfolio Controller/Buttons Ends-->
            </div>

            <!-- Portfolio Recent Projects -->
            <div id="portfolio" class="row wow fadeInUpQuick" data-wow-delay="0.8s">
                <div class="col-lg-4 col-md-6 col-xs-12 mix marketing planning">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <img src="img/portfolio/img1.jpg" alt="" />
                        </div>
                        <div class="portfoli-content">
                            <div class="sup-desc-wrap">
                                <div class="sup-desc-inner">
                                    <div class="sup-link">
                                        <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                                        <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                    <div class="sup-meta-wrap">
                                        <a class="sup-title" href="#">
                                            <h4>TITLE HERE</h4>
                                        </a>
                                        <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12 mix branding planning">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <img src="img/portfolio/img2.jpg" alt="" />
                        </div>
                        <div class="portfoli-content">
                            <div class="sup-desc-wrap">
                                <div class="sup-desc-inner">
                                    <div class="sup-link">
                                        <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                                        <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                    <div class="sup-meta-wrap">
                                        <a class="sup-title" href="#">
                                            <h4>TITLE HERE</h4>
                                        </a>
                                        <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12 mix branding research">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <img src="img/portfolio/img3.jpg" alt="" />
                        </div>
                        <div class="portfoli-content">
                            <div class="sup-desc-wrap">
                                <div class="sup-desc-inner">
                                    <div class="sup-link">
                                        <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                                        <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                    <div class="sup-meta-wrap">
                                        <a class="sup-title" href="#">
                                            <h4>TITLE HERE</h4>
                                        </a>
                                        <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12 mix marketing research">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <img src="img/portfolio/img4.jpg" alt="" />
                        </div>
                        <div class="portfoli-content">
                            <div class="sup-desc-wrap">
                                <div class="sup-desc-inner">
                                    <div class="sup-link">
                                        <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                                        <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                    <div class="sup-meta-wrap">
                                        <a class="sup-title" href="#">
                                            <h4>TITLE HERE</h4>
                                        </a>
                                        <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12 mix marketing planning">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <img src="img/portfolio/img5.jpg" alt="" />
                        </div>
                        <div class="portfoli-content">
                            <div class="sup-desc-wrap">
                                <div class="sup-desc-inner">
                                    <div class="sup-link">
                                        <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                                        <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                    <div class="sup-meta-wrap">
                                        <a class="sup-title" href="#">
                                            <h4>TITLE HERE</h4>
                                        </a>
                                        <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12 mix planning research">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <img src="img/portfolio/img6.jpg" alt="" />
                        </div>
                        <div class="portfoli-content">
                            <div class="sup-desc-wrap">
                                <div class="sup-desc-inner">
                                    <div class="sup-link">
                                        <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                                        <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                    <div class="sup-meta-wrap">
                                        <a class="sup-title" href="#">
                                            <h4>TITLE HERE</h4>
                                        </a>
                                        <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container Ends -->
</section>
<!-- Portfolio Section Ends -->

<!-- Feature Section Start -->
<div id="feature" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Features</h2>
            </div>
        </div>
        <div class="row">
            <!-- Start featured -->
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="featured-box-item">
                    <div class="featured-icon">
                        <i class="fa fa-bolt"></i>
                    </div>
                    <div class="featured-content">
                        <h4>Bootstrap 4</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
                    </div>
                </div>
            </div>
            <!-- End featured -->

            <!-- Start featured -->
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="featured-box-item">
                    <div class="featured-icon">
                        <i class="fa fa-diamond"></i>
                    </div>
                    <div class="featured-content">
                        <h4>Clean Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
                    </div>
                </div>
            </div>
            <!-- End featured -->

            <!-- Start featured -->
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="featured-box-item">
                    <div class="featured-icon">
                        <i class="fa fa-cubes"></i>
                    </div>
                    <div class="featured-content">
                        <h4>100+ Components</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
                    </div>
                </div>
            </div>
            <!-- End featured -->

            <!-- Start featured -->
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="featured-box-item">
                    <div class="featured-icon">
                        <i class="fa fa-cogs"></i>
                    </div>
                    <div class="featured-content">
                        <h4>Easy to Customize</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
                    </div>
                </div>
            </div>
            <!-- End featured -->

            <!-- Start featured -->
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="featured-box-item">
                    <div class="featured-icon">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="featured-content">
                        <h4>Pixel Perfect</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
                    </div>
                </div>
            </div>
            <!-- End featured -->

            <!-- Start featured -->
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="featured-box-item">
                    <div class="featured-icon">
                        <i class="fa fa-cloud"></i>
                    </div>
                    <div class="featured-content">
                        <h4>Cloud Backup</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
                    </div>
                </div>
            </div>
            <!-- End featured -->
        </div>
    </div>
</div>
<!-- Feature Section End -->

<!-- facts Section Start -->
<div id="counter">
    <div class="container">
        <div class="row count-to-sec">
            <div class="col-lg-3 col-md-6 col-xs-12 count-one">
                <span class="icon"><i class="fa fa-download"> </i></span>
                <h3 class="timer count-value" data-to="561" data-speed="1000">561</h3>
                <hr class="width25-divider">
                <small class="count-title">Downloads</small>
            </div>

            <div class="col-lg-3 col-md-6 col-xs-12 count-one">
                <span class="icon"><i class="fa fa-user"> </i></span>
                <h3 class="timer count-value" data-to="950" data-speed="1000">950</h3>
                <hr class="width25-divider">
                <small class="count-title">Developers</small>
            </div>

            <div class="col-lg-3 col-md-6 col-xs-12 count-one">
                <span class="icon"><i class="fa fa-desktop"> </i></span>
                <h3 class="timer count-value" data-to="978" data-speed="1000">978</h3>
                <hr class="width25-divider">
                <small class="count-title">Lines of code written</small>
            </div>

            <div class="col-lg-3 col-md-6 col-xs-12 count-one">
                <span class="icon"><i class="fa fa-coffee"> </i></span>
                <h3 class="timer count-value" data-to="1700" data-speed="1000">1700</h3>
                <hr class="width25-divider">
                <small class="count-title">Cups of coffee consumed</small>
            </div>
        </div>
    </div>
</div>
<!-- facts Section End -->

<!-- Team Section Start -->
<div id="team" class="team-members-tow section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Our Team</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-xs-12">
                <!-- Team Item Starts -->
                <figure>
                    <img src="img/team/team-05.jpg" alt="">
                    <div class="image-overlay">
                        <div class="overlay-text text-center">
                            <div class="info-text">
                                <strong>Melody Clark</strong>
                                <span>UX Specialist</span>
                            </div>
                            <hr class="small-divider">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </figure>
                <!-- Team Item Ends -->
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
                <!-- Team Item Starts -->
                <figure>
                    <img src="img/team/team-06.jpg" alt="">
                    <div class="image-overlay">
                        <div class="overlay-text text-center">
                            <div class="info-text">
                                <strong>Danny Burton</strong>
                                <span>Senior Designer</span>
                            </div>
                            <hr class="small-divider">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </figure>
                <!-- Team Item Ends -->
            </div>

            <div class="col-lg-4 col-md-6 col-xs-12">
                <!-- Team Item Starts -->
                <figure>
                    <img src="img/team/team-07.jpg" alt="">
                    <div class="image-overlay">
                        <div class="overlay-text text-center">
                            <div class="info-text">
                                <strong>Elizabeth Jones</strong>
                                <span>Art Director</span>
                            </div>
                            <hr class="small-divider">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </figure>
                <!-- Team Item Ends -->
            </div>
        </div>
    </div>
</div>
<!-- Team Section End -->

<!-- Pricing section Start -->
<section id="pricing" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Pricing Table</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="pricing-table-item">
                    <div class="plan-name">
                        <h3>Basic</h3>
                    </div>
                    <div class="plan-price">
                        <div class="price-value">$ 10</div>
                        <div class="interval">per month</div>
                    </div>
                    <div class="plan-list">
                        <ul>
                            <li><i class="fa fa-check"></i>2GB Disk Space</li>
                            <li><i class="fa fa-check"></i>3 Sub Domains</li>
                            <li><i class="fa fa-check"></i>12 Database</li>
                            <li><i class="fa fa-check"></i>Unlimited Users</li>
                        </ul>
                    </div>
                    <div class="plan-signup">
                        <a href="#" class="btn btn-common">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="pricing-table-item table-active">
                    <div class="plan-name">
                        <h3>Premium</h3>
                    </div>
                    <div class="plan-price">
                        <div class="price-value">$ 69 </div>
                        <div class="interval">per month</div>
                    </div>
                    <div class="plan-list">
                        <ul>
                            <li><i class="fa fa-check"></i>10GB Disk Space</li>
                            <li><i class="fa fa-check"></i>5 Sub Domains</li>
                            <li><i class="fa fa-check"></i>12 Database</li>
                            <li><i class="fa fa-check"></i>Unlimited Users</li>
                        </ul>
                    </div>
                    <div class="plan-signup">
                        <a href="#" class="btn btn-common">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="pricing-table-item">
                    <div class="plan-name">
                        <h3>Unltimate</h3>
                    </div>
                    <div class="plan-price">
                        <div class="price-value">$ 79 </div>
                        <div class="interval">per month</div>
                    </div>
                    <div class="plan-list">
                        <ul>
                            <li><i class="fa fa-check"></i>50GB Disk Space</li>
                            <li><i class="fa fa-check"></i>20 Sub Domains</li>
                            <li><i class="fa fa-check"></i>36 Database</li>
                            <li><i class="fa fa-check"></i>Unlimited Users</li>
                        </ul>
                    </div>
                    <div class="plan-signup">
                        <a href="#" class="btn btn-common">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pricing Table Section End -->

<!-- Single testimonial Start -->
<div class="single-testimonial-area">
    <div class="container">
        <div id="single-testimonial-item" class="owl-carousel">
            <!-- Single testimonial Item -->
            <div class="item">
                <div class="row justify-content-md-center">
                    <div class="col-lg-8 col-md-12 col-xs-12 col-md-auto">
                        <div class="testimonial-inner text-md-center">
                            <blockquote>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id ipsam, non ut molestiae rerum praesentium repellat debitis iure reiciendis, eius culpa beatae commodi facere ad numquam. Quisquam dignissimos similique sunt iure fugit, omnis vel cupiditate repellendus magni nihil molestiae quam, delectus
                            </blockquote>
                            <div class="testimonial-images">
                                <img class="img-circle text-md-center" src="img/testimonial/img1.jpg" alt="">
                            </div>
                            <div class="testimonial-footer">
                                <i class="fa fa-user"></i> Arman
                                <a href="#"> UIdeck</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single testimonial Item -->
            <div class="item">
                <div class="row justify-content-md-center">
                    <div class="col-lg-8 col-md-12 col-xs-12 col-md-auto">
                        <div class="testimonial-inner text-md-center">
                            <blockquote>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id ipsam, non ut molestiae rerum praesentium repellat debitis iure reiciendis, eius culpa beatae commodi facere ad numquam. Quisquam dignissimos similique sunt iure fugit, omnis vel cupiditate repellendus magni nihil molestiae quam, delectus
                            </blockquote>
                            <div class="testimonial-images">
                                <img class="img-circle text-md-center" src="img/testimonial/img2.jpg" alt="">
                            </div>
                            <div class="testimonial-footer">
                                <i class="fa fa-user"></i> Jeniffer
                                <a href="#"> GrayGrids</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single testimonial Item -->
            <div class="item">
                <div class="row justify-content-md-center">
                    <div class="col-lg-8 col-md-12 col-xs-12 col-md-auto">
                        <div class="testimonial-inner text-md-center">
                            <blockquote>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id ipsam, non ut molestiae rerum praesentium repellat debitis iure reiciendis, eius culpa beatae commodi facere ad numquam. Quisquam dignissimos similique sunt iure fugit, omnis vel cupiditate repellendus magni nihil molestiae quam, delectus
                            </blockquote>
                            <div class="testimonial-images">
                                <img class="img-circle text-md-center" src="img/testimonial/img3.jpg" alt="">
                            </div>
                            <div class="testimonial-footer">
                                <i class="fa fa-user"></i> Elon Musk<a href="#"> Tesla</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end -->

<!-- Contact Form Section Start -->
<section id="contact" class="contact-form section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Contact Us</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-6 col-xs-12">
                <h3 class="title-head text-left">Get in touch</h3>
                <form class="contact-form" data-toggle="validator">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-xs-12">
                            <div class="form-group">
                                <i class="contact-icon fa fa-user"></i>
                                <input type="text" class="form-control" id="name" placeholder="Full Name" required data-error="Please enter your name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-xs-12">
                            <div class="form-group">
                                <i class="contact-icon fa fa-envelope-o"></i>
                                <input type="email" class="form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-xs-12">
                            <div class="form-group">
                                <i class="contact-icon fa fa-pencil-square-o"></i>
                                <input type="text" class="form-control" id="subject" placeholder="Subject" required data-error="Please enter your Subject">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <textarea class="form-control" id="message" rows="4" placeholder="Message" required data-error="Please enter your message"></textarea>
                            <div class="help-block with-errors"></div>
                            <button type="submit" id="form-submit" class="btn btn-common btn-form-submit">Send Message</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-4 col-md-6 col-xs-12">
                <h4 class="contact-info-title text-left">Contact Information</h4>
                <div class="contact-info">
                    <address>
                        <i class="lni-map-marker icons cyan-color contact-info-icon"></i>
                        Level 13, 2 Elizabeth St, Melbourne,
                    </address>
                    <div class="tel-info">
                        <a href="tel:1800452308"><i class="lni-mobile icons cyan-color contact-info-icon"></i>1800 452 308</a>
                        <a href="tel:+61(8)82343555"><i class="lni-phone icons cyan-color contact-info-icon"></i>+61 (8) 8234 3555</a>
                    </div>
                    <a href="mailto:hello@spiritapp.com"><i class="lni-envelope icons cyan-color contact-info-icon"></i>admin@uideck.com</a>
                    <a href="#"><i class="lni-tab icons cyan-color contact-info-icon"></i>www.uideck.com</a>
                    <ul class="social-links">
                        <li>
                            <a href="#" class="fa fa-facebook"></a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-twitter"></a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-instagram"></a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-linkedin"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Form Section End -->

<!-- Footer Section -->
<footer class="footer">
    <!-- Container Starts -->
    <div class="container">
        <!-- Row Starts -->
        <div class="row section">
            <!-- Footer Widget Starts -->
            <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn">
                <h3 class="small-title">
                    About Us
                </h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis veritatis eius porro modi hic. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>
                <div class="social-footer">
                    <a href="{{URL('https://www.linkedin.com/company/beeworky')}}"><i class="fa fa-linkedin fa-2x"></i></a>
                    <a href="{{URL('https://www.instagram.com/beeworky')}}"><i class="fa fa-instagram fa-2x"></i></a>
                    <a href="{{URL('https://www.facebook.com/BeeWorky')}}"><i class="fa fa-facebook fa-2x"></i></a>
                    <a href="{{URL('https://twitter.com/beeworky')}}"><i class="fa fa-twitter fa-2x"></i></a>
                    <a href="{{URL('https://wa.me/1XXXXXXXXXX')}}"><i class="fa fa-whatsapp fa-2x"></i></a>
                </div>
            </div>
            <!-- Footer Widget Ends -->

            <!-- Footer Widget Starts -->
            <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn" data-wow-delay=".2s">
                <h3 class="small-title">
                    Links
                </h3>
                <ul class="menu">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Works</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <!-- Footer Widget Ends -->

            <!-- Footer Widget Starts -->
            <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn" data-wow-delay=".5s">
                <h3 class="small-title">
                    GALLERY
                </h3>
                <div class="plain-flicker-gallery">
                    <a href="#"><img src="img/flicker/img1.jpg" alt=""></a>
                    <a href="#"><img src="img/flicker/img2.jpg" alt=""></a>
                    <a href="#"><img src="img/flicker/img3.jpg" alt=""></a>
                    <a href="#"><img src="img/flicker/img4.jpg" alt=""></a>
                    <a href="#"><img src="img/flicker/img5.jpg" alt=""></a>
                    <a href="#"><img src="img/flicker/img6.jpg" alt=""></a>
                </div>
            </div>
            <!-- Footer Widget Ends -->

            <!-- Footer Widget Starts -->
            <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn" data-wow-delay=".8s">
                <h3 class="small-title">
                    SUBSCRIBE US
                </h3>
                <div class="contact-us">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputName2" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter your email">
                        </div>
                        <button type="submit" class="btn btn-common">Submit</button>
                    </form>
                </div>
            </div>
            <!-- Footer Widget Ends -->
        </div>
        <!-- Row Ends -->
    </div>
    <!-- Container Ends -->

    <!-- Copyright -->
    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <p class="copyright-text">&#9400; <script>document.write(new Date().getFullYear())</script> BeeWorky
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <ul class="nav nav-inline  justify-content-end ">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sitemap</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Privacy Policy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Terms of services</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright  End-->

</footer>
<!-- Footer Section End-->

<!-- Go to Top Link -->
<a href="#" class="back-to-top">
    <i class="fa fa-arrow-up"></i>
</a>

{{--<!-- Preloader -->--}}
{{--<div id="preloader">--}}
{{--    <div class="loader" id="loader-1"></div>--}}
{{--</div>--}}
{{--<!-- End Preloader -->--}}

@include('partials.javascriptbundle')

</body>
</html>

