<?php 
if(isset($_GET['delete_product'])){

    $delete_id=$_GET['delete_product'];
    //delete query

    $delete_products="Delete from `products` where product_id=$delete_id";
    $result_delete=mysqli_query($con,$delete_products);
    if($result_delete){
        echo "<script>alert('Delete successfully.')</script>";
        echo "<script>window.open('./index.php?view_products','_self')</script>";
    }
}
?>