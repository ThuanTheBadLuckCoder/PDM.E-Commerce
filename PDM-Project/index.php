<?php 
include('includes/connect.php');
include('functions/common_function.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDM</title>
    <link rel="stylesheet" href="Test_Style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
     integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!------ Include the above in your HEAD tag ---------->
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!--Navigation Bar Section-->
<div class="navbar-wrapper">
    <div class="container-fluid">
        <nav class="navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="Test.html">Logo</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                          <a href="index.php" class="">Home</a>
                        </li>
                        <li class="active">
                          <a class="" href="display_all.php">Product</a>
                        </li>
                        <li>
                          <a href="./user_area/user_registration.php">Register</a>
                        </li>
                        <li class=" dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <?php getcategories();?>
                            </ul>
                        </li>
                        <li class=" dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Brands<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <?php getbrands();?>
                            </ul>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="cart.php"><i class="fa-sharp fa-solid fa-cart-shopping"><sup><?php cart_item();?></sup></i> </a>
                        </li>
                        <li class=" down"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Email</a></li>
                                <li><a href="#">Report a Problem</a></li>
                            </ul>
                        </li>
                    </ul>
                    
                    <ul class="nav navbar-nav pull-right">
                        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Signed in as  <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Change Password</a></li>
                                <li><a href="#">My Profile</a></li>
                            </ul>
                        </li>
                        <?php
                          if(!isset($_SESSION['username'])){
                            echo "<li class='nav-item'>
                                    <a class='nav-link' href='#'>Welcome guest</a>
                                  </li>";
                            echo "<li class='nav-item'>
                                    <a class='nav-link' href='./user_area/user_login.php'>Login</a>
                                  </li>";
                          }else{
                            echo "<li class='nav-item'>
                                    <a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a>
                                  </li>";
                            echo "<li class='nav-item'>
                                    <a class='nav-link' href='./user_area/logout.php'>Logout</a>
                                  </li>";
                          }
                        ?>
                    </ul>
                    
                    <form class="navbar-form navbar-right" role="search" method="get" action="search_product.php">
                      <div class="form-group">
                        <input name="search_data" aria-label="Search" type="search" class="search-query form-control" placeholder="Search...">
                        <input type="submit"  value = "Search" class="btn btn-outline-light" name="search_data_product">
                      </div>
                    </form>
		            </div>
  
                </div>
            </div>
        </nav>
    </div>


  <div class="container">
    <h1></h1>
    
    <!--Youtube Video -->
   <!-- <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/RlNhD0oS5pk"></iframe></div>
   </div> -->
    
    
    
<!--Entire Picture Setting-->    
<head><script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'>
  </script>
  <script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'>
  </script>
  <script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'>
  </script>
  <meta charset='UTF-8'><meta name="robots" content="noindex">
  <link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
  <link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
  <link rel="canonical" href="https://codepen.io/kkanyingi/pen/vLowwB?limit=all&page=2&q=page" />
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400italic,700italic' rel='stylesheet' type='text/css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Playfair+Display:400italic,700italic'>
<style class="cp-pen-styles">html {
  font-size: 62.5%;
}

body {
  font-size: 1.4rem;
}

/* =14px */
h1 {
  font-size: 2.4rem;
}

/* =24px */
.container__item {
  margin: 0 auto 40px;
}

.landing-page-container {
  width: 100%;
  min-height: 100%;
  height: 90rem;
  background-image: url("https://s29.postimg.org/vho8xb2pj/landing_bg.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: bottom;
  overflow: hidden;
  font-family: 'Montserrat', sans-serif;
  color: #09383E;
}

.content__wrapper {
  max-width: 1200px;
  width: 90%;
  height: 100%;
  margin: 0 auto;
  position: relative;
}

.header {
  width: 100%;
  height: 2rem;
  padding: 4.5rem 0;
  display: block;
}

.menu-icon {
  width: 2.5rem;
  height: 1.5rem;
  display: inline-block;
  cursor: pointer;
}

.header__item {
  display: inline-block;
  float: left;
}

.menu-icon__line {
  width: 1.5rem;
  height: 0.2rem;
  background-color: #0C383E;
  display: block;
}
.menu-icon__line:before, .menu-icon__line:after {
  content: '';
  width: 1.5rem;
  height: 0.2rem;
  background-color: #0C383E;
  display: inline-block;
  position: relative;
}
.menu-icon__line:before {
  left: 0.5rem;
  top: -0.6rem;
}
.menu-icon__line:after {
  top: -1.8rem;
}

.heading {
  width: 90%;
  font-size: 2rem;
  font-weight: bold;
  margin: 0;
  line-height: 1.7rem;
  margin: 0 auto;
  text-align: center;
}

.social-container {
  width: 7.25rem;
  list-style: none;
  overflow: hidden;
  padding: 0;
  margin: 0;
  float: right;
}
.social-container .social__icon {
  width: 1.5rem;
  float: left;
  cursor: pointer;
}
.social-container .social__icon.social__icon--dr {
  margin-left: 1.25rem;
}
.social-container .social__icon.social__icon--in {
  margin-left: 1.5rem;
}
.social-container .social__icon.social__icon--fb img {
  margin: 0 0.25rem;
}

.coords {
  font-size: 1rem;
  display: inline-block;
  -webkit-transform: rotate(-90deg) translateY(50%);
          transform: rotate(-90deg) translateY(50%);
  float: left;
  position: relative;
  top: 40%;
  letter-spacing: 0.2rem;
  left: -11.5rem;
  margin: 0;
}

.ellipses-container {
  width: 50rem;
  height: 50rem;
  border-radius: 50%;
  margin: 0 auto;
  position: relative;
  top: 10.5rem;
}
.ellipses-container .greeting {
  position: absolute;
  top: 11.6rem;
  left: 13rem;
  right: 0;
  margin: 0 auto;
  text-transform: uppercase;
  letter-spacing: 4rem;
  font-size: 2.2rem;
  font-weight: 400;
  opacity: 0.5;
}
.ellipses-container .greeting:after {
  content: '';
  width: 0.3rem;
  height: 0.3rem;
  border-radius: 50%;
  display: inline-block;
  background-color: #0C383E;
  position: relative;
  top: -0.65rem;
  left: -5.05rem;
}

.ellipses {
  border-radius: 50%;
  position: absolute;
  top: 0;
  border-style: solid;
}

.ellipses__outer--thin {
  width: 100%;
  height: 100%;
  border-width: 1px;
  border-color: rgba(9, 56, 62, 0.1);
  -webkit-animation: ellipsesOrbit 15s ease-in-out infinite;
          animation: ellipsesOrbit 15s ease-in-out infinite;
}
.ellipses__outer--thin:after {
  content: "";
  background-image: url("https://s29.postimg.org/5h0r4ftkn/ellipses_dial.png");
  background-repeat: no-repeat;
  background-position: center;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: absolute;
  opacity: 0.15;
}

.ellipses__outer--thick {
  width: 99.5%;
  height: 99.5%;
  border-color: #09383E transparent;
  border-width: 2px;
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
  -webkit-animation: ellipsesRotate 15s ease-in-out infinite;
          animation: ellipsesRotate 15s ease-in-out infinite;
}

.ellipses__orbit {
  width: 2.5rem;
  height: 2.5rem;
  border-width: 2px;
  border-color: #09383E;
  top: 5rem;
  right: 6.75rem;
}
.ellipses__orbit:before {
  content: '';
  width: 0.7rem;
  height: 0.7rem;
  border-radius: 50%;
  display: inline-block;
  background-color: #09383E;
  margin: 0 auto;
  left: 0;
  right: 0;
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

.scroller {
  width: 7.5rem;
  display: inline-block;
  float: right;
  position: relative;
  top: -15%;
  -webkit-transform: translateY(50%);
          transform: translateY(50%);
  overflow: hidden;
}
.scroller .page-title {
  font-family: 'Playfair Display', serif;
  letter-spacing: 0.5rem;
  display: inline-block;
  float: left;
  margin-top: 1rem;
}
.scroller .timeline {
  width: 1.5rem;
  height: 9rem;
  display: inline-block;
  float: right;
}
.scroller .timeline .timeline__unit {
  width: 100%;
  height: 0.1rem;
  display: block;
  background-color: #0C383E;
  margin: 0 0 2rem;
  opacity: 0.2;
}
.scroller .timeline .timeline__unit.timeline__unit--active {
  opacity: 1;
}
.scroller .timeline .timeline__unit.timeline__unit--active:after {
  opacity: 0.2;
}
.scroller .timeline .timeline__unit:after {
  content: '';
  width: 70%;
  height: 0.1rem;
  display: block;
  position: relative;
  float: right;
  background-color: #0C383E;
  top: 1rem;
}

@-webkit-keyframes ellipsesRotate {
  0% {
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
  }
  100% {
    -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg);
  }
}

@keyframes ellipsesRotate {
  0% {
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
  }
  100% {
    -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg);
  }
}
@-webkit-keyframes ellipsesOrbit {
  0% {
    -webkit-transform: rotate(0);
            transform: rotate(0);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
@keyframes ellipsesOrbit {
  0% {
    -webkit-transform: rotate(0);
            transform: rotate(0);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
</style></head><body>
<html>
    <head>
        <meta charset="UTF-8"/>
    </head>

    <body>
        <div class="container">
            <div class="container__item landing-page-container">
                <div class="content__wrapper">

                    <header class="header">
                        <div class="menu-icon header__item">
                            <span class="menu-icon__line"></span>
                        </div>

                        <h1 class="heading header__item">Hello World</h1>

                        <ul class="social-container header__item">
                            <li class="social__icon social__icon--fb">
                                <img src="https://s29.postimg.org/3ldyta4qb/image.png" alt="facebook">
                            </li>
                            <li class="social__icon social__icon--dr">
                                <img src="https://s29.postimg.org/vqltn8fhv/image.png" alt="dribbble">
                            </li>
                            <li class="social__icon social__icon--in">
                                <img src="https://s29.postimg.org/p1fa77u5v/image.png" alt="instagram">
                            </li>
                        </ul>
                    </header>

                    <p class="coords">Anything you looking for is here</p>

                    <div class="ellipses-container">

                        <h2 class="greeting">
                          WELCOME
                        </h2>

                        <div class="ellipses ellipses__outer--thin">

                            <div class="ellipses ellipses__orbit"></div>

                        </div>

                        <div class="ellipses ellipses__outer--thick"></div>
                    </div>

                    <div class="scroller">
                        <p class="page-title"></p>

                        <div class="timeline">
                            <span class="timeline__unit"></span>
                            <span class="timeline__unit timeline__unit--active"></span>
                            <span class="timeline__unit"></span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    
    

<!-- DECORATE HERE -->
    

    

<!--Footer Section-->
    <footer id="footer" class="clearfix">
      <div id="footer-widgets">

        <div class="container">

        <div id="footer-wrapper">

          <div class="row">
            <div class="col-sm-6 col-md-2">
              <div id="meta-3" class="widget widgetFooter widget_meta">
              <h4 class="widgettitle">Importent Page:</h4>
              <ul>
    		  <li><a href="#"><i class="fa fa-home fa-fw"></i> Home</a></li>
			  <li><a href="privacypolicy.php"><i class="fa fa-link"></i>   Privacy Policy</a></li>
			  <li><a href="#"><i class="fa fa-envelope fa-fw"></i> Contact</a></li>
             </ul>
</div>      </div> <!-- end widget1 -->

            <div class="col-sm-6 col-md-2">
              		<div id="recent-posts-3" class="widget widgetFooter widget_recent_entries">
                    <h4 class="widgettitle">Social media:</h4>
                    <ul>
					<li>
				     <a href="" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
					</li>
					<li>
				      <a href="" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
					</li>
					<li>
				      <a href="" target="_blank"><i class="fa fa-youtube"></i> Youtube</a>
				   </li>
				</ul>
		</div>            </div> <!-- end widget1 -->

            <div class="col-sm-6 col-md-4">
              <div id="meta-4" class="widget widgetFooter widget_meta">
              <h4 class="widgettitle">Subscribe:</h4>

              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">E-mail :</span>
                  <input class="form-control" placeholder="Write your email .." type="text">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="button">Subscribe!</button>
                  </span>
                </div>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">Phone  :</span>
                  <input class="form-control" placeholder="+96777000000" type="text">
                   <span class="input-group-btn">
                    <button class="btn btn-primary" type="button">Subscribe!</button>
                  </span>
                </div>
              </div>


              </div>
             </div> <!-- end widget1 -->

             <!-- end widget1 -->

          </div> <!-- end .row -->

        </div> <!-- end #footer-wrapper -->

        </div> <!-- end .container -->
      </div> <!-- end #footer-widgets -->

      <div id="sub-floor">
        <div class="container">
          <div class="row">
            <div class="col-md-4 copyright">
              © 2023
            </div>
            <div class="col-md-4 col-md-offset-4 attribution">
             Developer by Kiên  <a target="_blank" href="#"></a>
            </div>
        
        <!--Validation anf Full Screen Mode Links-->
        
          </div> <!-- end .row -->
        </div>
      </div>

    </footer>
</body>
</html>