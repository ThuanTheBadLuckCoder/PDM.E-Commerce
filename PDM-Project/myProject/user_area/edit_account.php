<?php
    if(isset($_GET['edit_account'])){
        $user_session_name=$_SESSION['username'];
        
        $select_query="Select * from `user_table` where username='$user_session_name'";
        $result_query=mysqli_query($con,$select_query);
        $row_fetch=mysqli_fetch_assoc($result_query);
        $user_id=$row_fetch['user_id'];
        $username=$row_fetch['username'];
        $user_email=$row_fetch['user_email'];
        $user_mobile=$row_fetch['user_mobile'];
        $user_address=$row_fetch['user_address'];
    }

        if(isset($_POST['user_update'])){
            $update_id=$user_id;
            $username=$_POST['user_name'];
            $user_email=$_POST['user_email'];
            $user_mobile=$_POST['user_mobile'];
            $user_address=$_POST['user_address'];

            //update query
            $update_query="update `user_table` set username='$username',
            user_email='$user_email', user_mobile='$user_mobile',user_address='$user_address' 
            where user_id=$update_id";
            $result_query_update=mysqli_query($con,$update_query);
            if($result_query_update){
                echo "<script>alert('Update successful')</script>";
            }else {
                echo "Error: " . mysqli_error($con);
            }
        }
    

?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
<style>
  label.control-label {
    font-size: 20px; /* adjust the value as needed */
  }
</style>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2>Edit Account</h2>
        <form class="form-horizontal" method="post">
        
          <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name:</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="user_name" name="user_name" value="<?php echo $username; ?>" >
            </div>
          </div>

          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email address:</label>
            <div class="col-sm-7">
              <input type="email" class="form-control" id="user_email" name="user_email" value="<?php echo $user_email; ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="address" class="col-sm-2 control-label">User address:</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="user_address" name="user_address" value="<?php echo $user_address; ?>" >
            </div>
          </div>
          <div class="form-group">
            <label for="mobile" class="col-sm-2 control-label">User Mobile:</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="user_mobile" name="user_mobile" value="<?php echo $user_mobile; ?>" >
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-7">
              <input type="submit" class="btn btn-primary" value="Update" name="user_update">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>
</html>
