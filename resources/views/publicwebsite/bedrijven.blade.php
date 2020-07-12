<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BeeWorky</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" >
    <!-- Font -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/slicknav.css')}}">
    <!-- Owl carousel -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.css')}}">
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <!-- Extras Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/extras.css')}}">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
    <script id="mcjs">
        !function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],
            m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,
            "script","https://chimpstatic.com/mcjs-connected/js/users/d1a66409489d376e3aed8d11b/4611a75c1c96ba4a566b9bf44.js");
    </script>
</head>
<body>

<div class="header-style-2">
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
                            Bedrijven
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#onzeservices">
                            Onze Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#onzeprijzen">
                            Onze Prijzen
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#prijzen">
                            Prijzen
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
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="hero-content-v2">
                    <h3><a class="text-warning">Bee</a>Worky<strong>Bedrijven</strong></h3>
                    <p> Wij bieden veel voordelen voor jouw bedrijf! Schrijf je nu in voor onze Bedrijven-nieuwsbrief.
                    </p>
                </div>
                <a class="page-scroll btn btn-lg btn-warning-filled animated fadeInUp"
                   data-toggle="modal" data-target="#probeergratis">Probeer het gratis</a>
                <a class="page-scroll btn btn-lg  btn-warning animated fadeInUp"
                   data-toggle="modal" data-target="#praatmetexpert">Praat met een expert</a>
            </div>
            <div class="col-xs-12 col-sm-6">
                <figure>
                    <img src="{{asset('images\Icons\office-building.svg')}}" alt="">
                </figure>
            </div>
        </div>
    </div>
</div>

{{-- probeergratis modal --}}
<div class="modal fade" id="probeergratis" tabindex="-1" role="dialog" aria-labelledby="probeergratis" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content overlay bg-white">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="pb-4 pr-4 pl-4 text-center">
                    <img src="{{URL::to('images/')}}">
                    <h3 class="heading mt-4">Bedrijven Nieuwsbrief</h3>
                    <!-- Begin Mailchimp Signup Form -->
                    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                    <style type="text/css">
                        #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                        /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                           We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                    </style>
                    <div id="mc_embed_signup">
                        <form action="https://beeworky.us19.list-manage.com/subscribe/post?u=d1a66409489d376e3aed8d11b&amp;id=e76edc2a01" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                                <div class="indicates-required"><span class="asterisk">*</span> verplichte velden</div>
                                <div class="mc-field-group">
                                    <label for="mce-EMAIL">Email Adres  <span class="asterisk">*</span>
                                    </label>
                                    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                                </div>
                                <div class="mc-field-group">
                                    <label for="mce-MMERGE5">Bedrijfsnaam </label>
                                    <input type="text" value="" name="MMERGE5" class="" id="mce-MMERGE5">
                                </div>
                                <div class="mc-field-group">
                                    <label for="mce-FNAME">Voornaam </label>
                                    <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                                </div>
                                <div class="mc-field-group">
                                    <label for="mce-LNAME">Achternaam </label>
                                    <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
                                </div>
                                <div id="mce-responses" class="clear">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d1a66409489d376e3aed8d11b_e76edc2a01" tabindex="-1" value=""></div>
                                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                            </div>
                        </form>
                    </div>
                    <!--End mc_embed_signup-->
                    <p>
                        <em class="text-muted"><i>#BeeCool </i>😎</em><br>
                        <em class="text-muted"><i>#BeeWorky </i>🐝</em>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="onzeservices" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Onze Services</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="service-box">
                    <div class="service-icon">
                        <i class="fa fa-cogs"></i>
                    </div>
                    <div class="service-content">
                        <h4><a href="#">Gekwalificeerd personeel</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto officiis consequuntur vero error excepturi.
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="service-box">
                    <div class="service-icon">
                        <i class="fa fa-cubes"></i>
                    </div>
                    <div class="service-content">
                        <h4><a href="#">Toegang tot de talentenpool</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto officiis consequuntur vero error excepturi.
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="service-box">
                    <div class="service-icon">
                        <i class="fa fa-tachometer"></i>
                    </div>
                    <div class="service-content">
                        <h4><a href="#">Flexibel personeel inhuren</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto officiis consequuntur vero error excepturi.
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="service-box">
                    <div class="service-icon">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="service-content">
                        <h4><a href="#">24/7 mogelijkheid om klussen te plaatsen</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto officiis consequuntur vero error excepturi.
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="service-box">
                    <div class="service-icon">
                        <i class="fa fa-flash"></i>
                    </div>
                    <div class="service-content">
                        <h4><a href="#">Gratis personeel overnemen</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto officiis consequuntur vero error excepturi.
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="service-box">
                    <div class="service-icon">
                        <i class="fa fa-hand-pointer-o"></i>
                    </div>
                    <div class="service-content">
                        <h4><a href="#">Eigen talentenpool samenstellen</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto officiis consequuntur vero error excepturi.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="onzeprijzen" class="section-padding">
<div class="container">
<div class="row">
    <div class="col-md-12">
        <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Onze Prijzen</h2>
    </div>
    <div class="col-lg-4 col-md-4 col-xs-12">
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
    <div class="col-lg-4 col-md-4 col-xs-12">
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
    <div class="col-lg-4 col-md-4 col-xs-12">
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

<!-- Preloader -->
<div id="preloader">
    <div class="loader" id="loader-1"></div>
</div>
<!-- End Preloader -->

@include('partials.javascriptbundle')

</body>
</html>

