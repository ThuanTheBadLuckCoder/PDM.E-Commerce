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
    <title>Register</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="RegisterJS.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<style>
    .colorgraph {
        height: 5px;
        border-top: 0;
        background: #c4e17f;
        border-radius: 5px;
        background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  }
</style>
<body>
    <div class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <form role="form" method="post" enctype="multipart/form-data">
                    <h2>Please Sign Up <small>It's free and always will be.</small></h2>
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="user_name" id="user_name" class="form-control input-lg" placeholder="User Name" autocomplete="off" required = "required" tabindex="1">
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="form-group">
                        <input type="email" name="user_email" id="user_email" class="form-control input-lg" placeholder="Email Address" tabindex="2">
                    </div>
                    <div class="form-group">
                        <input type="file" name="user_image" id="user_image" class="form-control input-lg"  tabindex="3">
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="4">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="5">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="user_address" id="user_address" class="form-control input-lg" placeholder="Address"  tabindex="6">
                    </div>
                    <div class="form-group">
                        <input type="text" name="user_mobile" id="user_mobile" class="form-control input-lg" placeholder="Phone Number"  tabindex="7">
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-4 col-sm-3 col-md-3">
                            <span class="button-checkbox">
                                <button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
                                <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
                            </span>
                        </div>
                        <div class="col-xs-8 col-sm-9 col-md-9">
                             By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
                        </div>
                    </div>
                    
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-md-6"><input  type="submit" value="Register" class="btn btn-primary btn-block btn-lg" name="user_register" tabindex="7"></div>
                        <div class="col-xs-12 col-md-6"><a href="user_login.php" class="btn btn-success btn-block btn-lg">Sign In</a></div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
                    </div>
                    <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        </div>
</body>
</html>

<!-- php code -->
<?php 
    if(isset($_POST['user_register'])){
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_image = $_FILES['user_image']['name'];
        $user_image_tmp= $_FILES['user_image']['tmp_name'];
        $user_password = $_POST['password'];
        $hash_password = password_hash($user_password, PASSWORD_DEFAULT);
        $password_confirmation = $_POST['password_confirmation'];
        $user_address = $_POST['user_address'];
        $user_mobile = $_POST['user_mobile'];
        $user_ip = getIPAddress();

        //select query
        $select_query="Select * from `user_table` where username='$user_name'";
        $result=mysqli_query($con,$select_query);
        $rows_count=mysqli_num_rows($result);
        if($rows_count > 0){
            echo "<script>alert('user name already exist')</script>";
        }else if($user_password != $password_confirmation){
            echo "<script>alert('Password not match')</script>";
        }
        else{

        //insert query
        move_uploaded_file($user_image_tmp,'./user_images/$user_image');
        $insert_query="insert into `user_table` (username,user_email,user_password,user_image,user_ip,user_address,user_mobile) 
        values ('$user_name','$user_email','$hash_password','$user_image','$user_ip','$user_address','$user_mobile')";

        $sql_execute=mysqli_query($con,$insert_query);

        if($sql_execute){
            echo "<script>alert('data inserted succesfully')</script>";
        }else{
            die(mysqli_errno($con));
        }
        }
        

    }
?>