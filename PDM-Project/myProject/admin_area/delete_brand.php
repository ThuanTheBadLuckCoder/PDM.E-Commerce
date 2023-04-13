<?php 
if(isset($_GET['delete_brand'])){

    $delete_id=$_GET['delete_brand'];
    //delete query

    $delete_products="Delete from `brands` where brand_id=$delete_id";
    $result_delete=mysqli_query($con,$delete_products);
    if($result_delete){
        echo "<script>alert('Delete successfully.')</script>";
        echo "<script>window.open('./index.php?view_categories','_self')</script>";
    }
}
?>