<?php 
include('includes/connect.php');
include('functions/common_function.php');
session_start();
?>
<!-- <style>
        .cart_img{
        width: 80px;
        height: 80px;
        object-fit:contain;
        }
    </style> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website Cart_details</title>
    <!-- bootstrap CSS link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
     integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css file -->
    <link rel="stylesheet" href="style.css">
    <style>
        .cart_img{
        width: 80px;
        height: 80px;
        object-fit:contain;
        }
    </style>
</head>
<body>

<!-- navbar --> 
<div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
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
          <a class="nav-link" href="./user_area/user_registration.php" target="_blank">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-sharp fa-solid fa-cart-shopping"><sup><?php cart_item();?></sup></i> </a>
        </li>
        
       
      </ul>
      <form class="navbar-form navbar-right" role="search" method="get" action="search_product.php">
                      <div class="form-group">
                        <input name="search_data" aria-label="Search" type="search" class="search-query form-control" placeholder="Search...">
                        <input type="submit"  value = "Search" class="btn btn-outline-light" name="search_data_product">
                      </div>
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
                    <a class='nav-link' href='./user_area/profile.php'>Welcome ".$_SESSION['username']."</a>
                  </li>";
            echo "<li class='nav-item'>
                    <a class='nav-link' href='./user_area/logout.php'>Logout</a>
                  </li>";
          }
        ?>
  </ul>
</nav>

<!-- third child -->
<!-- <div class="bg-light">
  <h3 class="text-center">Hidden Store</h3>
  <p class="text-center">Communication is at the heart of e-commerce and coummunity</p>
</div> -->

<!-- fourth child table -->
<div class="container">
    <div class="row">
        <form action="" method = "post">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>Product Title</th>
                    <th>Product Image</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Remove</th>
                    <th colspan ="2">Operations</th>
                </tr>
            </thead>
            <tbody>
                <!-- php code to display dynamic data -->
                <?php 
                
                $get_ip_add = getIPAddress();
                $total_price=0;
                $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
                $result=mysqli_query($con,$cart_query);
                while($row=mysqli_fetch_array($result)){
                  $product_id = $row['product_id'];
                  $select_products="Select * from `products` where product_id='$product_id'";
                  $result_products=mysqli_query($con,$select_products);
                  while($row_product_price=mysqli_fetch_array($result_products)){
                    $product_price=array($row_product_price['product_price']);
                    $price_table=$row_product_price['product_price'];
                    $product_title=$row_product_price['product_title'];
                    $product_image1=$row_product_price['product_image1'];
                    $product_values=array_sum($product_price);
                    $total_price+=$product_values;
                  
                ?>
                <tr>
                    <td><?php echo $product_title?></td>
                    <td><img src="./admin_area/product_images/<?php echo $product_image1?>" alt="" class="cart_img"></td>
                    <td><input type="text" name="qty" id="" class="form-input w-50"></td>
                    <?php 
                        $get_ip_add = getIPAddress();
                        if(isset($_POST['update_cart'])){
                            $quantities=$_POST['qty'];
                            $update_cart="update `cart_details` set quantity=$quantities 
                            where ip_address='$get_ip_add'";
                            $result_products_quantity=mysqli_query($con,$update_cart);
                            $total_price=$total_price*$quantities;
                        }
                    ?>
                    <td><?php echo $price_table?></td>
                    <td><input type="checkbox" name="removeitem[]" value="<?php
                    echo $product_id?>"></td>
                    <td>
                        <!-- <button class="bg-info px-3 py-2">Update</button> -->
                        <input type="submit" value="Update Cart" class="bg-info px-3 py-2" name="update_cart">
                        <input type="submit" value="Remove Cart" class="bg-info px-3 py-2" name="remove_cart">
                    </td>
                </tr>
                <?php
                }
            }
            ?>
            </tbody>
        </table>
        <!-- subtotal -->
        <div class="d-flex">
            <h4 class="px-3">Subtotal: <strong><?php echo $total_price?></strong></h4>
            <button class="bg-info px-3 py-2"><a href="display_all.php">Continue Shopping</a></button>
            <button class="bg-info p-3 py-2"><a href="./user_area/checkout.php">Checkout</a></button>

        </div>
    </div>
</div>
</form>
<!-- function to remove item -->
<?php 
    function remove_cart_item(){
        global $con;
        if(isset($_POST['remove_cart'])){
            foreach($_POST['removeitem'] as $remove_id ){
                echo $remove_id;
                $delete_query="Delete from `cart_details` where product_id=$remove_id";
                $run_delete=mysqli_query($con,$delete_query);
                if($run_delete){
                    echo "<script>window.open('cart.php','_self')</script>";
                }
            }
        }
    }    

    echo $remove_item=remove_cart_item();
?>

  

<!-- bootstrap js link-->    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>