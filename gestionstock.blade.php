<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>AgriConnect</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
  <!-- fonts awesome style -->
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,,600,700|Poppins:400,500,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <div class="custom_menu-btn">
          <button onclick="openNav()">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
          </button>
        </div>
        <div id="myNav" class="overlay">
          <div class="menu_btn-style ">
            <button onclick="closeNav()">
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>
          </div>
          <div class="overlay-content">
            <a class="active" href="{{ url('/') }}">
              Acceuil
            </a>
            <a class="" href="{{ url('/marketplace') }}">
              Marketplace
            </a>
            <a class="" href="{{ url('/Gestiondesfermes') }}">
              Gestion des fermes
            </a>
            <a class="" href="{{ url('/inscriptionagriculteur') }}">
              Inscription
            </a>
            <a class="" href="{{ url('/connexionagriculteur') }}">
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
        <a class="navbar-brand" href="{{ url('/') }}">
          <span>
            AgriConnect
          </span>
        </a>
        <div class="user_option">
          <form class="form-inline">
            <button class="btn  nav_search-btn" type="submit">
              <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </form>
          <a href="">
            <i class="fa fa-user" aria-hidden="true"></i>
          </a>
        </div>
      </nav>
    </header>
    <!-- end header section -->
  </div>

  <section class="contact_section layout_padding section_pl ">
    <div class="container py_mobile_45">
        <div class="heading_container">
            <h2><span>Remplissez le formulaire suivant pour enregistrer les détails de stocks :</span></h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form_container">
                <form action="{{ route('submit_stock') }}" method="POST">
    @csrf

    <label for="product_name">Nom du produit:</label><br>
    <input type="text" id="product_name" name="product_name" required placeholder="Nom du produit">
    @error('product_name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br><br>

    <label for="quantity">Quantité:</label><br>
    <input type="number" id="quantity" name="quantity" required placeholder="Quantité">
    @error('quantity')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br><br>

    <label for="purchase_date">Date d'achat:</label><br>
    <input type="date" id="purchase_date" name="purchase_date" required placeholder="Date d'achat">
    @error('purchase_date')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br><br>

    <label for="supplier">Fournisseur:</label><br>
    <input type="text" id="supplier" name="supplier" placeholder="Fournisseur">
    @error('supplier')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br><br>

    <button type="submit">Enregistrer</button>
</form>

                </div>
            </div>
        </div>
    </div>
</section>










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

<script src="{{ asset('js\jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js\bootstrap.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{ asset('js\custom.js') }}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
<!-- End Google Map -->

</body>

</html>
