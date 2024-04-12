<section class="info_section layout_padding section_pl">
    <div class="container">
        <div class="info_logo">
            <a href="#">
                AgriConnect
            </a>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="info_contact">
                    <h4>
                        Adresse
                    </h4>
                    <div class="contact_link_box">
                        <a href="#">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>
                                Location
                            </span>
                        </a>
                        <a href="#">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                                Contactez-nous +01 1234567890
                            </span>
                        </a>
                        <a href="#">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>
                                Email : demo@gmail.com
                            </span>
                        </a>
                    </div>
                </div>
                <div class="info_social">
                    <a href="#">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info_link_box">
                    <h4>
                        Links
                    </h4>
                    <div class="info_links">
                        <a class="" href="{{ url('/') }}">
                            Acceuil
                        </a>
                        <a class="" href="{{ url('/Marketplace') }}">
                            Marketplace
                        </a>
                        <a class="" href="{{ url('/Gestiondesfermes') }}">
                            Gestion des fermes
                        </a>
                        <a class="" href="{{ url('/InscriptionAgriculteur') }}">
                            Inscription
                        </a>
                        <a class="" href="{{ url('/ConnexionAgriculteur') }}">
                            Connexion
                        </a>
                        <a class="" href="{{ url('/jeudesimulation') }}">
                            Jeu de simulation
                        </a>
                        <a class="" href="{{ url('/contact') }}">
                            Contact
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info_detail">
                    <h4>
                        Produits
                    </h4>
                    <p>
                        necessary, making this the first true generator on the Internet. It uses a dictionary of
                        over
                        200 Latin words, combined with a handful
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <h4>
                    Subscribe
                </h4>
                <form action="">
                    <input type="text" placeholder="Your Email" />
                    <button type="submit">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- end info section -->

<!-- footer section -->
<footer class="footer_section">
    <div class="container">
        <p>
            &copy; <span id="displayYear"></span> All Rights Reserved. Design by
            <a href="https://html.design/">Free Html Templates</a>
        </p>
    </div>
</footer>
<!-- footer section -->

<script src="{{ asset('public\js\jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('public\js\bootstrap.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{ asset('public\js\custom.js') }}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
<!-- End Google Map -->

</body>

</html>
