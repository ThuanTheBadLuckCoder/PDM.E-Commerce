<?php 
if(isset($_GET['delete_order'])){

    $delete_id=$_GET['delete_order'];
    //delete query
    
    $delete_orders = "DELETE FROM `user_orders` WHERE order_id = $delete_id";
    $result_delete=mysqli_query($con,$delete_orders);
    if($result_delete){
        echo "<script>alert('Delete successfully.')</script>";
        echo "<script>window.open('./index.php?list_orders','_self')</script>";
    }
}
?>