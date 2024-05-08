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

    <title>GT Book Store - Contact Page</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css" />
    <link rel="stylesheet" href="../assets/css/templatemo-lugx-gaming.css" />
    <link rel="stylesheet" href="../assets/css/owl.css" />
    <link rel="stylesheet" href="../assets/css/animate.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
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
              <a href="../../index.php" class="logo">
                <img
                  src="../assets/images/logo1.png"
                  alt=""
                  style="width: 158px"
                />
              </a>
              <!-- ***** Logo End ***** -->
              <!-- ***** Menu Start ***** -->
              <ul class="nav">
                <li><a href="../../index.php">Our Books</a></li>
                <li>
                  <a href="about.html" >About Us</a>
                </li>
                <li><a href="contact.html" class="active">Contact Us</a></li>
                <li><a href="signin.html">Sign In</a></li>
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

    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3>Contact Us</h3>
          </div>
        </div>
      </div>
    </div>

    <div class="contact-page section">
      <div class="container" >
        <div class="row" >
          <div style="display:block;text-align:center;" >
            <div class="section-heading">
              <h6>Contact Us</h6>
              
                <form id="contact-form" action="../../be/models/ContactModel.php" method="POST">
                    <label for="fname">First Name</label>
                    <br>
                    <input type="text" name="fname" id="fname" class="text-field">
                    <br>
                    <label for="lname">Last Name</label>
                    <br>
                    <input type="text" name="lname" id="lname" class="text-field">
                    <br>
                    <label for="email">Email</label>
                    <br>
                    <input type="text" name="email" id="email" class="text-field">
                    <br>
                    <label for="message">Message</label>
                    <br>
                    <textarea class="message" rows = "5" cols = "37" name = "message"></textarea>
                    <br>
                    <br>
                    
                    <input type="submit" value="Send Message"  id="submit-button" class="submit-button">
                    <br><br>
    
            </div>
            <p>
              GT is always ready for your inquiries. Please feel free to reach
              out.
            </p>
            <ul>
              <li><span>Address</span> Nicol Hall Room 510, LAU, Lebanon</li>
              <li><span>Phone</span> +961 70 102 681</li>
              <li><span>Email</span> GT@lau.edu.lb</li>
            </ul>
          </div>
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
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/isotope.min.js"></script>
    <script src="../assets/js/owl-carousel.js"></script>
    <script src="../assets/js/counter.js"></script>
    <script src="../assets/js/custom.js"></script>
  </body>
</html>
