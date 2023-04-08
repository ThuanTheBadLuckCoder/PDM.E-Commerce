<!DOCTYPE html>
<html>
<head>
  <title>Delete Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2>Delete Account</h2>
        <form class="form-horizontal" method="post">
          <div class="form-group text-center">
            <div class="col-sm-7">
              <input type="submit" class="form-control"  name="delete" value="Delete Account" >
            </div>
          </div>
          <div class="form-group text-center">
            <div class="col-sm-7">
              <input type="submit" class="form-control"  name="not_delete" value="Not Delete Account">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>
</html>

<?php 
$username_session = $_SESSION['username'];
if(isset($_POST['delete'])){
    $delete_query="Delete from `user_table` where username='$username_session' ";
    $result=mysqli_query($con,$delete_query);
    if($result){
        session_destroy();
        echo "<script>alert('Account Deleted')</script>";
        echo "<script>window.open('../index.php','_self')</script>";
    }
}

if(isset($_POST['not_delete'])){
    echo "<script>window.open('profile.php','_self')</script>";
}

?>
