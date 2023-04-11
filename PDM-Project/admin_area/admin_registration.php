<?php 
    include('../includes/connect.php');
    include('../functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
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
        <h2 class="text-center mb-5">Admin Registration</h2>
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
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter email"
                        required="required" class="form-control">
                    </div>
                    
                    <div class="form-outline mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter password"
                        required="required" class="form-control">
                    </div>

                    <div class="form-outline mb-4">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" name="confirm_password" id="confirm_password" placeholder="Enter password"
                        required="required" class="form-control">
                    </div>
                    <div>
                        <input type="submit" name="admin_registration" value="Register" id="" class="bg-info py-2 px-3">
                        <p class="small">Don't you have an account? <a href="admin_login.php">Login</a></p>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>


<!-- php code -->
<?php 
    if(isset($_POST['admin_registration'])){
        $admin_name = $_POST['user_name'];
        $admin_email = $_POST['email'];
        
        
        $admin_password = $_POST['password'];
        $hash_password = password_hash($admin_password, PASSWORD_DEFAULT);
        $password_confirmation = $_POST['confirm_password'];
        $user_ip = getIPAddress();

        //select query
        $select_query="Select * from `admin_table` where admin_name='$admin_name'";
        $result=mysqli_query($con,$select_query);
        $rows_count=mysqli_num_rows($result);
        if($rows_count > 0){
            echo "<script>alert('user name already exist')</script>";
        }else if($admin_password != $password_confirmation){
            echo "<script>alert('Password not match')</script>";
        }
        else{

        //insert query
        
        $insert_query="insert into `admin_table` (admin_name, admin_email, admin_password) 
        values ('$admin_name','$admin_email','$hash_password')";

        $sql_execute=mysqli_query($con,$insert_query);
        }

        
    }
?>