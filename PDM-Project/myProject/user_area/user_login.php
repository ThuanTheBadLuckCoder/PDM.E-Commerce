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
    <link rel="stylesheet" href="Login_main.css">
    <title>Login Page</title>
    <link rel = "icon" href = "" type = "image/x-icon"><!-- thêm icon title -->
</head>
<body>
    
    <form class="form" method = "post">
        <p class="form-title">Sign in to your account</p>
         <div class="input-container">
           <input type="text" name="user_name" id="user_name"  placeholder="User Name" autocomplete="off" required = "required">
           <span>
             <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
             </svg>
           </span>
       </div>
       <div class="input-container">
           <input type="password" name="user_password" id="user_password" placeholder="Password">
 
           <span>
             <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
               <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
             </svg>
           </span>
         </div>
          <input class = "submit" type="submit" value="Login" class="btn btn-primary btn-block btn-lg"  name="user_login">
        
       
 
       <p class="signup-link">
         OR
         <a href="user_registration.php">Create an account</a>
       </p>
    </form>
 
</body>
</html>
<?php
  if(isset($_POST['user_login'])){
    $user_name=$_POST['user_name'];
    $user_password=$_POST['user_password'];
    $user_ip=getIPAddress();

    $select_query="Select * from `user_table` where username='$user_name'";
    $result=mysqli_query($con,$select_query);
    $row_count=mysqli_num_rows($result);
    $row_data=mysqli_fetch_assoc($result);

    //cart item
    $select_query_cart="Select * from `cart_details` where ip_address='$user_ip'";
    $select_cart=mysqli_query($con,$select_query_cart);
    $row_count_cart=mysqli_num_rows($select_cart);

    if($row_count>0){
      $_SESSION['username']=$user_name;
      if(password_verify($user_password,$row_data['user_password'])){
        /* echo "<script>alert('Login successful')</script>"; */
        if($row_count==1 and $row_count_cart==0){
          $_SESSION['username']=$user_name;
          echo "<script>alert('Login successful')</script>";
          echo "<script>window.open('../index.php','_self')</script>";
        }else{
          $_SESSION['username']=$user_name;
          echo "<script>alert('Login successful')</script>";
          echo "<script>window.open('../index.php','_self')</script>";
        }
      }else{
        echo "<script>alert('invalid credentials')</script>";
      }

    }else{
      echo "<script>alert('invalid credentials')</script>";
    }
  }
?>