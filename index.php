<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <title>GT Book Shop</title>

    <!-- Bootstrap core CSS -->
    <link href="fe/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="fe/assets/css/MyStyle.css">  
    <link rel="stylesheet" href="fe/assets/css/fontawesome.css" />
    <link rel="stylesheet" href="fe/assets/css/templatemo-lugx-gaming.css" />
    <link rel="stylesheet" href="fe/assets/css/owl.css" />
    <link rel="stylesheet" href="fe/assets/css/animate.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
  </head>

  <body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <!-- ***** Logo Start ***** -->
              <a href="index.php" class="logo">
                <img
                  src="fe/assets/images/logo1.png"
                  alt=""
                  style="width: 158px"
                />
              </a>
              <!-- ***** Logo End ***** -->
              <!-- ***** Menu Start ***** -->
              <ul class="nav">
                <li><a href="index.php" class="active">Home</a></li>
                <li>
                  <a href="fe/pages/about.html">About Us</a>
                </li>
                <li><a href="fe/pages/contact.html">Contact Us</a></li>
                <li><a href="fe/pages/signin.html">Sign In</a></li>
              </ul>
              <a class="menu-trigger">
                <span>Menu</span>
              </a>
              <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="main-banner">
      <div class="container">
        <div class="row">
          <div class="caption header-text">
            <h6>Welcome to GT</h6>
            <h2>BEST BOOK STORE EVER!</h2>
          </div>
        </div>
      </div>
    </div>

    <div class="section trending">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="section-heading">
              <h2>Our Books</h2>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="main-button"></div>
          </div>
          
          <?php require_once("be/bookModel.php"); $books = GetBooks($db); ?>
          <?php
        foreach ($books as $book) { ?>
          <div class="col-lg-3 col-md-6">
            <div class="item">
              <div class="thumb">
                <img src="fe/assets/images/books/<?php echo $book->id; ?>.jpg" alt=""
                />
                <div class="price">Name: <?php echo $book->book; ?></div>
                <div class="price">Description: <?php echo $book->description; ?></div>
                <div class="price">Is Active: <?php echo $book->isActive ? 0 : 1; ?></div>
              </div>
            </div>
          </div>
          <?php
        }
        ?>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="col-lg-12">
          <p>Copyright © GT. All rights reserved. &nbsp;&nbsp;</p>
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="fe/vendor/jquery/jquery.min.js"></script>
    <script src="fe/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="fe/assets/js/isotope.min.js"></script>
    <script src="fe/assets/js/owl-carousel.js"></script>
    <script src="fe/assets/js/counter.js"></script>
    <script src="fe/assets/js/custom.js"></script>
  </body>
</html>
