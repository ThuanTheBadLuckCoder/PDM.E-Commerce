<?php 
include('../includes/connect.php');
include('../functions/common_function.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDM</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
   
    
    <!-- font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
     integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../Test_Style.css">
    <style>
    .card-img-top {
  width: 100%;
  height: 200px;
  object-fit: contain;
  border-radius: 8px;
}
</style>
<style>
  .my-div {
    margin-top: 100px; /* adjust the value to move the div down as desired */
  }
</style>
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
                          <a href="../index.php" class="">Home</a>
                        </li>
                        <li class="active">
                          <a class="display_all.php" href="../display_all.php">Product</a>
                        </li>
                        
                        <li class="nav-item">
                          <a class="nav-link" href="../cart.php"><i class="fa-sharp fa-solid fa-cart-shopping"><sup><?php cart_item();?></sup></i> </a>
                        </li>
                        <li class=" down"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Email</a></li>
                                <li><a href="#">Report a Problem</a></li>
                            </ul>
                        </li>
                    </ul>
                    
                    <ul class="nav navbar-nav pull-right">
                        
                        <?php
                          if(!isset($_SESSION['username'])){
                            echo "<li class='nav-item'>
                                    <a class='nav-link' href='#'>Welcome guest</a>
                                  </li>";
                            echo "<li class='nav-item'>
                                    <a class='nav-link' href='user_login.php'>Login</a>
                                  </li>";
                          }else{
                            echo "<li class='nav-item'>
                                    <a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a>
                                  </li>";
                            echo "<li class='nav-item'>
                                    <a class='nav-link' href='logout.php'>Logout</a>
                                  </li>";
                          }
                        ?>
                    </ul>
                    
                    <form class="navbar-form navbar-right" role="search" method="get" action="../search_product.php">
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
<!--calling cart()  -->
<?php
  cart();
?>




<div class="bg-light">
  <h3 class="text-center">Hidden Store</h3>
  <p class="text-center">Communication is at the heart of e-commerce and coummunity</p>
</div>

<div class="row my-div">
<div class="col-md-2 p-0 bg-secondary">
    <ul class="list-unstyled">
        <li>
            <a href="profile.php" class="text-white"><h4>Your Profile</h4></a>
        </li>
        <li>
            <a href="profile.php" class="text-white"><h5>Pending orders</h5></a>
        </li>
        <li>
            <a href="profile.php?edit_account" class="text-white"><h5>Edit account</h5></a>
        </li>
        <li>
            <a href="profile.php?user_orders" class="text-white"><h5>My orders</h5></a>
        </li>
        <li>
            <a href="profile.php?delete_account" class="text-white"><h5>Delete Account</h5></a>
        </li>
        <li>
            <a href="logout.php" class="text-white"><h5>Logout</h5></a>
        </li>
    </ul>
</div>


    <div class="col-md-10">
      <?php get_user_order_details();

      if(isset($_GET['edit_account'])){
        include('edit_account.php');
      }
      if(isset($_GET['user_orders'])){
        include('user_orders.php');
      }
      if(isset($_GET['delete_account'])){
        include('delete_account.php');
      }
      ?>
    </div>
</div>

  

<!-- bootstrap js link-->    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>