<?php 
if(isset($_GET['delete_category'])){

    $delete_id=$_GET['delete_category'];
    //delete query

    $delete_products="Delete from `categories` where category_id=$delete_id";
    $result_delete=mysqli_query($con,$delete_products);
    if($result_delete){
        echo "<script>alert('Delete successfully.')</script>";
        echo "<script>window.open('./index.php?view_categories','_self')</script>";
    }
}
?>