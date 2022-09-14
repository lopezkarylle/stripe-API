<?php

require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
  'sk_test_51LgIKCDB1J1j4EdTuVUazdPwuKOez5T4m50hbGaZoRvE8BNI03WXjsuXFrUmvQI0tNYiYe91P9qYciqVtvgH90cT00hLOkyjVj'
);
$product = $stripe->products->retrieve(
	'prod_MP6uiVxEapLWD0',
	[]
);
$price = $stripe->prices->retrieve('price_1LgIgUDB1J1j4EdTcvzmDOgy',[]);
#echo '<pre>';
#var_dump($product);
#var_dump($price);
#echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Flask It!</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
        <strong class="black-text"><h3><b><b>Flask It!</b></b></h3></strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link waves-effect" href="#"><b><b>Home</b></b>
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank"><b><b>Products</b></b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/getting-started/download/"
              target="_blank"><b><b>Shop</b></b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="https://mdbootstrap.com/education/bootstrap/" target="_blank"><b><b>Live View</b></b></a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a class="nav-link waves-effect">
              <span class="badge blue z-depth-1 mr-1"> 0 </span>
              <i class="fas fa-shopping-cart"></i>
              <span class="clearfix d-none d-sm-inline-block"> Cart </span>
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!--Main layout-->
  
             <section>
            <div class="container">
            <div class="row">
            <div class="product col-8 text-center">
            <img src="<?php echo array_pop($product->images); ?>" alt="<?php echo $product->name; ?>" />
            </div>
            <div class="description col-4">
            <br><br><br><br><br><br><br><br>
            <h3><?php echo $product->name; ?></h3>
            <p><?php echo $product->description; ?></p>
            <h5><?php echo strtoupper($price->currency); ?> <?php echo $price->unit_amount_decimal; ?></h5>
            <p class="lead font-weight-bold">Description</p>

            <p><b><b>Brand:</b></b>	Hydro Flask<br>
              <b><b>Capacity:</b></b>	32 Fluid Ounces<br>
              <b><b>Product Dimensions:</b></b>	4.16"W x 10.1"H<br>
              <b><b>Model Name:</b></b>	32 OZ WIDE STRAW LID<br>
            <form action="/Stripe/create-checkout-session.php" method="POST">
                <button type="submit" class="btn btn-outline-dark" id="checkout-button">Checkout</button>
            </div>
            </div>
        </div>
        </form>
        </section>

          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <hr>

      <!--Grid row-->
      <div class="row d-flex justify-content-center wow fadeIn">


      </div>


      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">


    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com/mdbootstrap" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="https://twitter.com/MDBootstrap" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="https://pinterest.com/mdbootstrap" target="_blank">
        <i class="fab fa-pinterest mr-3"></i>
      </a>

    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2022 Copyright:
      <a href="https://www.hydroflask.ph/" target="_blank"> buy.flask.it.com </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>

</html>

