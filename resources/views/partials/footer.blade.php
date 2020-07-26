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
                    <br><i class="mdi mdi-email"></i> Email: <a href="mailto:info@beeworky.nl" class="text-white">info@beeworky.nl</a>
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
                <ul>
                    <li><a class="text-white" href="{{URL('/flexwerkers')}}">Zo werkt BeeWorky</a></li>
                    <li><a class="text-white" href="{{URL('/klussen')}}">Klussen zoeken</a></li>
                    <li><a class="text-white" href="{{URL('/academy')}}">BeeWorky Academy</a></li>
                    <li><a class="text-white" href="{{URL('/support')}}">Helpdesk</a></li>
                </ul>
            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-md-6 col-lg-3 col-xl-3 link-widget">
                <h3 class="footer-title">Voor Bedrijven</h3>
                <ul>
                    <li><a class="text-white" href="{{URL('/bedrijven')}}">Waarom BeeWorky</a></li>
                    <li><a class="text-white" href="{{URL('/academy')}}">BeeWorky Academy</a></li>
                    <li><a class="text-white" href="{{URL('/support')}}">Helpdesk</a></li>
                </ul>
            </div>
            <!--/.Third column-->

            <!--Fourth column-->
            <div class="col-md-6 col-lg-3 col-xl-3 footer-contact">
                <h3 class="footer-title">BeeWorky Nieuwsbrief</h3>
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
                        <li><a href="{{URL::to('/verhaal')}}" class="nocolor">Het ontstaan van BeeWorky</a></li>
                        <li><a href="{{URL::to('/voorwaarden')}}" class="nocolor">Voorwaarden</a></li>
                        <li><a href="{{URL::to('/privacy')}}" class="nocolor">Privacy</a></li>
                        <li><a href="#" class="nocolor" data-toggle="modal" data-target="#disclaimerModal">Disclaimer</a></li>
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

{{-- Disclaimer modal --}}
<div class="modal fade" id="disclaimerModal" tabindex="-1" role="dialog" aria-labelledby="Disclaimer" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content overlay bg-white">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="pb-4 pr-4 pl-4 text-center">
                    <img src="{{URL::to('images/undraw_Data_points_ubvs.ico')}}">
                    <h3 class="heading mt-4">Disclaimer</h3>
                    <p>
                        BeeWorky streeft naar juiste en volledige informatie op de website maar verleent geen garantie
                        ten aanzien van de juist- en volledigheid daarvan en wijst alle aansprakelijkheid van fouten en
                        het ontbreken van informatie van de hand.
                        <br>
                        <a href="{{URL('/disclaimer')}}">Lees hier de volledige versie</a>
                    </p>
                    <p>
                        <em class="text-muted"><i>#BeeResponsible </i>🧠</em><br>
                        <em class="text-muted"><i>#BeeWorky </i>🐝</em>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
