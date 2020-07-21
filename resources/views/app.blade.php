<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>BeeWorky</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Meterial Icon CSS -->
    <link rel="stylesheet" href="{{asset('css/materialdesignicons.min.css')}}">
    <!-- Material CSS -->
    <link rel="stylesheet" href="{{asset('css/material.min.css')}}">
    <!-- Ripples CSS -->
    <link rel="stylesheet" href="{{asset('css/ripples.min.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- Color CSS Styles (default website layout color) -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/colors/blue.css')}}" media="screen">

    <!-- Google Font
    @import url("https://fonts.googleapis.com/css?family=Rubik:500,700|Roboto:400,600");
    -->
</head>

<body>

<!-- Header Start -->
<header id="header">
    <div class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{asset('images\Logos\Horizontaal\Logo2kleurentekst\logo.bw.horizontaal_1@2x.png')}}" alt="Logo">
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
                                    <a class="page-scroll" href="#">Aan de Slag <span><i class="mdi mdi-chevron-down"></i></span></a>
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
                                        <li class="nav-item"><a href="contact-us.html">Contact Us 1</a></li>
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
            <img class="d-block w-100" src="{{asset('images\homepage\carousel\keuken1.jpg')}}" alt="First slide">
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
            <img class="d-block w-100" src="{{asset('images\homepage\carousel\logistiek.jpg')}}" alt="Third slide">
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
                    <i class="material-icons mdi mdi-layers"></i>
                    <h2 class="subtitle">Goed opgeleleid & Kwalitatief personeel</h2>
                    <p>Excepteur sint occaecat cupidatat non proidt, sunt in culpa qui.</p>
                </div>
            </div>
            <!-- Single About -->
            <div class="col-sm-8 col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".3s">
                <div class="about-single">
                    <i class="material-icons mdi mdi-cards-playing-outline"></i>
                    <h2 class="subtitle">Goed Salaris!</h2>
                    <p>Excepteur sint occaecat cupidatat non proidt, sunt in culpa qui.</p>
                </div>
            </div>
            <!-- Single About -->
            <div class="col-sm-8 col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".4s">
                <div class="about-single">
                    <i class="material-icons mdi mdi-alarm-check"></i>
                    <h2 class="subtitle">Een eerlijke en leuke werksfeer</h2>
                    <p>Excepteur sint occaecat cupidatat non proidt, sunt in culpa qui.</p>
                </div>
            </div>
            <!-- Single About -->
            <div class="col-sm-8 col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".5s">
                <div class="about-single">
                    <i class="material-icons mdi mdi-responsive"></i>
                    <h2 class="subtitle">Trainingen & Workshops</h2>
                    <p>Excepteur sint occaecat cupidatat non proidt, sunt in culpa qui.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Welcome Section Start -->
<section class="welcome-section section-padding section-dark">
    <div class="container">
        <div class="row">
            <!-- Section Titile -->
            <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                <h1 class="section-title">Over Ons</h1>
            </div>
            <div class="col-md-12 col-lg-7 col-xs-12">
                <div class="Material-tab">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#startup" role="tab"><i class="mdi mdi-flash-outline"></i>
                                <br> BeeWorky</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#business" role="tab"><i
                                    class="mdi mdi-account-multiple-outline"></i> <br> Flexwerkers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#agency" role="tab"><i class="mdi mdi-all-inclusive"></i>
                                <br> Klussen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#saas" role="tab"><i class="mdi mdi-cloud-outline"></i> <br>
                                Bedrijven</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="startup" role="tabpanel">
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
                                #BeeWorky, get honey!</p>
                        </div>
                        <div class="tab-pane fade" id="business" role="tabpanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam nesciunt dolores quibusdam, officia
                                sed mollitia, illo, quis, vel veniam officiis qui repellendus. Perferendis et, veritatis enim
                                voluptatem libero consequuntur eveniet alias nesciunt fugit doloremque tempora id Lorem ipsum dolor
                                sit amet, consectetur adipisicing elit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, aut ut totam quam inventore
                                suscipit ullam nostrum quisquam corrupti nesciunt voluptas necessitatibus, ab porro cupiditate optio
                                mollitia, expedita, omnis? Quasi.</p>
                        </div>
                        <div class="tab-pane fade" id="agency" role="tabpanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam nesciunt dolores quibusdam, officia
                                sed mollitia, illo, quis, vel veniam officiis qui repellendus. Perferendis et, veritatis enim
                                voluptatem libero consequuntur eveniet alias nesciunt fugit doloremque tempora id Lorem ipsum dolor
                                sit amet, consectetur adipisicing elit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, aut ut totam quam inventore
                                suscipit ullam nostrum quisquam corrupti nesciunt voluptas necessitatibus, ab porro cupiditate optio
                                mollitia, expedita, omnis? Quasi.</p>
                        </div>
                        <div class="tab-pane fade" id="saas" role="tabpanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam nesciunt dolores quibusdam, officia
                                sed mollitia, illo, quis, vel veniam officiis qui repellendus. Perferendis et, veritatis enim
                                voluptatem libero consequuntur eveniet alias nesciunt fugit doloremque tempora id Lorem ipsum dolor
                                sit amet, consectetur adipisicing elit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, aut ut totam quam inventore
                                suscipit ullam nostrum quisquam corrupti nesciunt voluptas necessitatibus, ab porro cupiditate optio
                                mollitia, expedita, omnis? Quasi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-5 col-xs-12 welcome-column">
                <div class="video-gallery">
                    <img class="img-fluid" src="{{asset('images\homepage\commercialThumbnail.jpg')}}" alt="">
                    <div class="overlay-gallery">
                        <div class="icon-holder">
                            <div class="icon">
                                <a href="https://www.youtube.com/watch?v=zSb3F4-nO2M" class="video-popup wow fadeInUp"
                                   data-wow-duration="1000ms" data-wow-delay="0.3s"><i class="mdi mdi-play-circle-outline"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Welcome Section End -->

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
                                     class="btn btn-common pull-right">Meld je aan</button>
                            </div>
                        </form>
                        <!-- subscribe-form end  -->
                    </div>
                </div>
                <!-- /.widget -->
                <div class="widget">
                    <h5 class="widget-title">Handige Links</h5>
                    <ul class="unordered-list">
                        <li><a href="#" class="nocolor">Het bestaan van BeeWorky</a></li>
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
