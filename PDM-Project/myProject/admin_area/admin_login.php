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
    <title>Admin Login</title>
</head>
<!-- bootstrap css link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
     <!-- font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        body{
            overflow:hidden;
        }
    </style>
<body>
    <div class="container-fluid m-3">
        <h2 class="text-center mb-5">Admin Login</h2>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-6 col-xl-5">
                <img src="adminreg.png" alt="Admin Registration"
                class="img-fluid">
            </div>
            <div class="col-lg-6 col-xl-5">
                <form action="" method="post">
                    <div class="form-outline mb-4">
                        <label for="user_name" class="form-label">Username</label>
                        <input type="text" name="user_name" id="user_name" placeholder="Enter user name"
                        required="required" class="form-control">
                    </div>
                    
                    <div class="form-outline mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter password"
                        required="required" class="form-control">
                    </div>

                    <div>
                        <input type="submit" name="admin_login" value="Login" id="" class="bg-info py-2 px-3">
                        <p class="small">Don you already have an account? <a href="admin_registration.php">Register</a></p>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
  if(isset($_POST['admin_login'])){
    $admin_name=$_POST['user_name'];
    $admin_password=$_POST['password'];
    $user_ip=getIPAddress();

    $select_query="Select * from `admin_table` where admin_name='$admin_name'";
    $result=mysqli_query($con,$select_query);
    $row_count=mysqli_num_rows($result);
    $row_data=mysqli_fetch_assoc($result);

    if($row_count>0){
      $_SESSION['admin_name']=$admin_name;
      if(password_verify($admin_password,$row_data['admin_password'])){
        echo "<script>alert('Login successful')</script>";
        echo "<script>window.open('index.php','_self')</script>";
      }else{
        echo "<script>alert('invalid credentials')</script>";
      }

    }else{
      echo "<script>alert('invalid credentials')</script>";
    }
  }
?>