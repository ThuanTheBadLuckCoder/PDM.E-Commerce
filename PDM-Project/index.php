<?php 
include('includes/connect.php');
include('functions/common_function.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    <!-- bootstrap CSS link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
     integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- navbar --> 
<div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid">
    <img src="./images/logo.png" alt="" class='logo'>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
    aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Register.ht ml" target="_blank">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-sharp fa-solid fa-cart-shopping"><sup><?php cart_item();?></sup></i> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price: <?php total_cart_price(); ?></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search" action="search_product.php" method = "get">
        <input class="form-control me-2" type="search" 
        placeholder="Search" aria-label="Search" name="search_data">
      <input type="submit"  value = "Search" 
      class="btn btn-outline-light" name="search_data_product">
      </form>
    </div>
  </div>
</nav>

<!--calling cart()  -->
<?php
  cart();
?>

<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">
  <li class="nav-item">
          <a class="nav-link" href="#">Welcome guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./user_area/user_login.php">Login</a>
        </li>
  </ul>
</nav>

<!-- third child -->
<div class="bg-light">
  <h3 class="text-center">Hidden Store</h3>
  <p class="text-center">Communication is at the heart of e-commerce and coummunity</p>
</div>

<!-- fourth child -->
<div class="row px-1">
  <div class="col-md-10">
    <!-- products -->
    <div class="row">
  <!-- fetching products -->
  <?php
      // call function
      getproducts();
      get_unique_categories();
      get_unique_brands();
     /*  $ip = getIPAddress();  
      echo 'User Real IP Address - '.$ip; 
       */
      ?>

<!-- row end -->

  </div>
<!-- column end -->
  </div>
  <div class="col-md-2 bg-secondary p-0">
    <!-- sidenav -->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h4>Delivery Brand</h4></a>
      </li>
      <?php 
      getbrands();
      ?>

      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
      </li>
      <?php 
      getcategories();
      
      ?>
      
    </ul>
  </div>
</div>
  

<!-- bootstrap js link-->    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>