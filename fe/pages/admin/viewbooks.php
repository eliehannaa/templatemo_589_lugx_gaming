
<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
?>
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
    <link href="../../../fe/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <!-- <link rel="stylesheet" href="../../../fe/assets/css/MyStyle.css">   -->
    <link rel="stylesheet" href="../../../fe/assets/css/fontawesome.css" />
    <link rel="stylesheet" href="../../../fe/assets/css/templatemo-lugx-gaming.css" />
    <link rel="stylesheet" href="../../../fe/assets/css/owl.css" />
    <link rel="stylesheet" href="../../../fe/assets/css/animate.css" />
    <link rel="stylesheet" href="../../../fe/assets/css/admin.css" />
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
     
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
            <h2>Welcome <?php echo $_SESSION["username"];?></h2>

              <!-- ***** Logo Start ***** -->
              <!-- <a href="index.php" class="logo">
                <img
                  src="../../../fe/assets/images/logo1.png"
                  alt=""
                  style="width: 158px"
                /> -->
              </a>
              <!-- ***** Logo End ***** -->
              <!-- ***** Menu Start ***** -->
              <ul class="nav">
                <li><a href="viewBooks.php" class="active">View Books</a></li>
                <li>
                  <a href="addBook.php">Add Book</a>
                </li>
                <li><a href="../../../index.php" target="_blank">Preview Site</a></li>
                <li><a href="../../../be/controllers/logout.php" >Log out</a></li>
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
          <h2>CMS Mode</h2>

<h4>Activate/Deactivate books</h4>
          </div>
        </div>
      </div>
    </div>

    <div class="section trending">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="section-heading">
              <h2>View Books</h2>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="main-button"></div>
          </div>
          
          <?php require_once("../../../be/models/BookModel.php"); $books = getItems(); ?>

          <div class="topbar">
            <div class="element">
id &nbsp &nbsp Book title
            </div>
            <div class="element">
                Activity
            </div>
        </div>
        <div class="users">
            <table >
                <?php
                    for($i = 0; $i < sizeof($books); $i++) {
                        echo '
                        <tr >
                            <td class="ele">
                                '.$books[$i]->id.'
                            </td>
                            <td class="ele">
                            &nbsp&nbsp&nbsp&nbsp'.$books[$i]->name.'
                            </td>
                           
                        </tr>
                        ';
                    }
                ?>
                
            </table>
            <div class="content">
            <?php
                    for ($i = 0; $i < sizeof($books); $i++) {
                            $p = 'Inactive';
                            if ($books[$i]->is_active == 1) {
                                $p = 'Active';
                            }
                            echo '
                    <div class="permissions">
                        <div class="el">
                            ' . $p . '
                        </div>
                        <form action="../../../be/controllers/isActiveController.php" method="post">
                     <input type="submit" name="button" value="Activate/Deactivate" />
                     <input type="hidden" name="id" value="'.$books[$i]->id.'"/>
                     <input type="hidden" name="is_active" value="'.$books[$i]->is_active.'"/>
                        </form>
                    </div>';
                        }
                ?>
            </div>
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
    <script src="../../../fe/vendor/jquery/jquery.min.js"></script>
    <script src="../../../fe/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../fe/assets/js/isotope.min.js"></script>
    <script src="../../../fe/assets/js/owl-carousel.js"></script>
    <script src="../../../fe/assets/js/counter.js"></script>
    <script src="../../../fe/assets/js/custom.js"></script>
  </body>
</html>
