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
  <link rel="stylesheet" type="text/css" href="{{ asset('public\css\bootstrap.css') }}" />
  <!-- fonts awesome style -->
  <link href="{{ asset('public\css\font-awesome.min.css') }}" rel="stylesheet" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,,600,700|Poppins:400,500,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{ asset('public\css\style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('public\css\responsive.css') }}" rel="stylesheet" />
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
  </div>
</body>

</html>
