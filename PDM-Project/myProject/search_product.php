<?php 
include('includes/connect.php');
include('functions/common_function.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Produts</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="icomoon/icomoon.css">
    <link rel="stylesheet" type="text/css" href="css/vendor.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  
    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
  </head>
  <body>
    <div class="search-box">
      <div class="search-wrap">
        <div class="close-button">
          <i class="icon icon-close"></i>
        </div>
        <form id="search-form" class="text-center" method="get" action="search_product.php">
         
          <input id="search-data-input" name="search_data" aria-label="Search" type="search" class="search-input" placeholder="" />
          <input type="submit" value="Search" class="button-submit" name="search_data_product">
        </form>

      </div>
    </div>
    <header id="header">
      <div id="header-wrap">
      <nav class="secondary-nav border-bottom">
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-sm-12">
                <div class="header-contact">
                  <p>Hotline: <strong>0915922072</strong>
                  </p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="shipping-purchase text-center">
                  <p>ĐÂY LÀ TRANG THỬ NGHIỆM</p>
                </div>
              </div>
              
           
              <div class="col-md-4 col-sm-6">
                <div class="user-items">
                  <ul class="d-flex justify-content-end list-unstyled">
                    <li>
                    <?php
                          if(!isset($_SESSION['username'])){
                            echo "<li>
                                  <a href='./user_area/user_login.php'>
                                    <i class='icon icon-user'>
                                      SIGN IN
                                    </i>
                                  </a>
                                </li>";
                          }else{
                            echo "<li>
                                  <a href='./user_area/logout.php'>
                                    <i class='icon icon-user'>
                                      SIGN OUT
                                    </i>
                                  </a>
                                </li>";
                          }
                        ?>
             

                    
                    <!-- <li>
                      <a href="cart.html">
                        <i class="icon icon-shopping-cart"></i>
                      </a>
                    </li>-->
                    
                    <li class="user-items">
                      <i class="icon icon-search"></i>
                    </li> 
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </nav>
        <!--thanh bar bao gồm logo -->
        <nav class="primary-nav padding-small">
          <div class="container">
            <div class="row d-flex">
              <div class="col-lg-2 col-md-2">
                <div class="main-logo">
                  <a href="Main page.html">
                    <img src="images/main-logo.png" alt="logo">
                  </a>

                </div>
              </div>
              <div class="col-lg-10 col-md-10">
               <!-- Phần các mục -->
               <div class="container">
                  <div class="main-menu stellarnav">
                    <ul class="menu-list list-unstyled">
                      <li class="menu-item active">
                        <a href="display_all.php" data-effect="product">Products</a>
                      </li>
                      <li class="menu-item">
                        <a class="item-anchor" data-effect="Categories">Categories</a>
                        <ul class="dropdown-menu" style="background: white;"> <!-- Phần drop down -->
                          <?php getcategories();?>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a  class="item-anchor" data-effect="Brands">Brands</a>
                        <ul class="dropdown-menu" style="background: white;"> <!-- Phần drop down -->
                          <?php getbrands();?>
                        </ul>
                      </li>
                      <li>
                        <a href="cart.php">
                          <i class="icon icon-shopping-cart"></i>
                        </a>
                      </li>
                      
                    </ul>
                    <div class="hamburger">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
        <!--calling cart()  -->
<?php
  cart();
?>
    
    
    
    <section id="selling-products" class="product-store bg-light-grey padding-large">
      <div class="container">
        <div class="row">
          <div class="section-header">
            <h2 class="section-title">Products</h2>
          </div>
        
          <div class="tab-content">
            <div id="all" data-tab-content class="active">
              <div class="row d-flex flex-wrap">
                
              <?php
      // call function
      search_product();
      get_unique_categories();
      get_unique_brands();
      
      ?>
                
                
              </div>
            </div>
            <!-- Đưa sản phẩm ở đây -->
          </div>
        </div>
      </div>
    </section> <!-- Kết thúc phần PRODUCTS -->
    <!-- =========================================================================== -->
  
    <hr>
    <section id="brand-collection" class="padding-medium bg-light-grey"> <!-- ẢNH CÁC BRAND -->
      <div class="container">
        <div class="row d-flex flex-wrap justify-content-between">
          <img src="images/brand1.png" alt="phone" class="brand-image">
          <img src="images/brand2.png" alt="phone" class="brand-image">
          <img src="images/brand3.png" alt="phone" class="brand-image">
          <img src="images/brand4.png" alt="phone" class="brand-image">
          <img src="images/brand5.png" alt="phone" class="brand-image">
        </div>
      </div>
    </section>
    
    
    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="footer-menu-list">
            <div class="row d-flex flex-wrap justify-content-between">
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer-menu">
                  <h5 class="widget-title">Ultras</h5>
                  <ul class="menu-list list-unstyled">
                    <li class="menu-item">
                      <a href="#">About us</a>
                    </li>
                    <li class="menu-item">
                      <a href="#">Conditions </a>
                    </li>
                    <li class="menu-item">
                      <a href="#">Our Journals</a>
                    </li>
                    <li class="menu-item">
                      <a href="#">Careers</a>
                    </li>
                    <li class="menu-item">
                      <a href="#">Affiliate Programme</a>
                    </li>
                    <li class="menu-item">
                      <a href="#">Ultras Press</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer-menu">
                  <h5 class="widget-title">Customer Service</h5>
                  <ul class="menu-list list-unstyled">
                    <li class="menu-item">
                      <a href="#">FAQ</a>
                    </li>
                    <li class="menu-item">
                      <a href="#">Contact</a>
                    </li>
                    <li class="menu-item">
                      <a href="#">Privacy Policy</a>
                    </li>
                    <li class="menu-item">
                      <a href="#">Returns & Refunds</a>
                    </li>
                    <li class="menu-item">
                      <a href="#">Cookie Guidelines</a>
                    </li>
                    <li class="menu-item">
                      <a href="#">Delivery Information</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer-menu">
                  <h5 class="widget-title">Contact Us</h5>
                  <p>Do you have any questions or suggestions? <a href="#" class="email">ourservices@ultras.com</a>
                  </p>
                  <p>Do you need assistance? Give us a call. <br>
                    <strong>+57 444 11 00 35</strong>
                  </p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer-menu">
                  <h5 class="widget-title">Forever 2018</h5>
                  <p>Cras mattis sit ornare in metus eu amet adipiscing enim. Ullamcorper in orci, ultrices integer eget arcu. Consectetur leo dignissim lacus, lacus sagittis dictumst.</p>
                  <div class="social-links">
                    <ul class="d-flex list-unstyled">
                      <li>
                        <a href="#">
                          <i class="icon icon-facebook"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="icon icon-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="icon icon-youtube-play"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="icon icon-behance-square"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
    </footer>
    
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>