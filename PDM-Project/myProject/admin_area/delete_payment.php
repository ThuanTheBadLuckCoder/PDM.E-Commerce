<?php 
if(isset($_GET['delete_payment'])){

    $delete_id=$_GET['delete_payment'];
    //delete query
    
    $delete_orders = "DELETE FROM `user_payments` WHERE order_id = $delete_id";
    $result_delete=mysqli_query($con,$delete_orders);
    if($result_delete){
        echo "<script>alert('Delete successfully.')</script>";
        echo "<script>window.open('./index.php?list_payments','_self')</script>";
    }
}
?>