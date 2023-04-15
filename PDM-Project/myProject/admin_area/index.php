<?php 
    include('../includes/connect.php');
    include('../functions/common_function.php');
    @session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
     <!-- font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

     <!-- css file -->
    <link rel="stylesheet" href="../style.css">

    <style>
        .admin_image{
    width: 100px;
    object-fit: contain;
    }

    body{
        overflow-x:hidden;
    }
    .product_image{
        width:100px;
        object-fit:contain;
    }
    </style>
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="" alt="" class = "logo">
                <nav class="navbar navbar-expand-lg ">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <?php
                          if(!isset($_SESSION['admin_name'])){
                            echo "<li class='nav-item'>
                                    <a class='text-light mr-3' href='#'>Welcome guest</a>
                                </li>";
                            echo "<li class='nav-item'>
                                    <a class='text-light' href='admin_login.php'>Login</a>
                                </li>";
                          }else{
                            echo "<li class='nav-item '>
                                    <a class='text-light mr-3' href=''>Welcome ".$_SESSION['admin_name']."</a>
                                  </li>";
                            echo "<li class='nav-item'>
                                    <a class='text-light' href='logout.php'>Logout</a>
                                  </li>";
                          }
                        ?>
                           
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <!-- second child -->
        <div class="bg-light">
            <h3 class="text-center p-1">Manage details</h3>
        </div>


        <!-- third child -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex 
            align-items-center">
                <div class="p-3">
                    <a href="#"><img src="../images/af11.png" alt="" 
                    class = "admin_image"></a>
                    <p class="text-light text-center"></p>
                </div>
                <div class="button text-center">
                    <button class="my-3"><a href="insert_products.php" class="nav-link text-light bg-info 
                    my-1">Insert Product</a></button>
                    <button><a href="index.php?view_products" class="nav-link text-light bg-info 
                    my-1">View Products</a></button>
                    <button><a href="index.php?insert_categories" class="nav-link text-light bg-info
                    my-1">Insert Categories</a></button>
                    <button><a href="index.php?view_categories" class="nav-link text-light bg-info 
                    my-1">View Categories</a></button>
                    <button><a href="index.php?insert_brands" class="nav-link text-light bg-info
                    my-1">Insert Brands</a></button>
                    <button><a href="index.php?view_brands" class="nav-link text-light bg-info 
                    my-1">View Brands</a></button>
                    <button><a href="index.php?list_orders" class="nav-link text-light bg-info 
                    my-1">All Orders</a></button>
                    <button><a href="index.php?list_payments" class="nav-link text-light bg-info 
                    my-1">All Payments</a></button>
                    <button><a href="index.php?list_users" class="nav-link text-light bg-info 
                    my-1">List Users</a></button>
                    
                </div> 
            </div>
        </div>

        <!-- fourth child -->
        <div class="container my-3">
            <?php 
            if(isset($_GET['insert_categories'])){
                include('insert_categories.php');
            }
            if(isset($_GET['insert_brands'])){
                include('insert_brands.php');
            }
            if(isset($_GET['view_products'])){
                include('view_products.php');
            }
            if(isset($_GET['edit_products'])){
                include('edit_products.php');
            }
            if(isset($_GET['delete_product'])){
                include('delete_product.php');
            }
            if(isset($_GET['view_categories'])){
                include('view_categories.php');
            }
            if(isset($_GET['view_brands'])){
                include('view_brands.php');
            }
            if(isset($_GET['edit_category'])){
                include('edit_category.php');
            }
            if(isset($_GET['edit_brand'])){
                include('edit_brand.php');
            }
            if(isset($_GET['delete_category'])){
                include('delete_category.php');
            }
            if(isset($_GET['delete_brand'])){
                include('delete_brand.php');
            }
            if(isset($_GET['list_orders'])){
                include('list_orders.php');
            }
            if(isset($_GET['delete_order'])){
                include('delete_order.php');
            }
            if(isset($_GET['list_payments'])){
                include('list_payments.php');
            }
            if(isset($_GET['delete_payment'])){
                include('delete_payment.php');
            }
            if(isset($_GET['list_users'])){
                include('list_users.php');
            }
            ?>
            


    </div>



<!-- bootstrap js link -->    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>