<?php
    if(isset($_GET['edit_category'])){
        $edit_category=$_GET['edit_category'];
       
        $get_category="Select * from `categories` where category_id=$edit_category";
        $result_category=mysqli_query($con,$get_category);
        $row=mysqli_fetch_assoc($result_category);
        $category_title=$row['category_title'];
        
    }

if(isset($_POST['edit_cat'])){
    $cat_title=$_POST['category_title'];

    $update_query="Update `categories` set category_title='$cat_title' where category_id=$edit_category";
    $result_update=mysqli_query($con,$update_query);
    if($result_update){
        echo "<script>alert('Update category successfully.')</script>";
        echo "<script>window.open('./index.php?view_categories','_self')</script>";
    }

}


?>

<div class="container mt-3">
    <h1 class="text-center">Edit Category</h1>
    <form action="" method="post" class="text-center">
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="category_title" class="form-label">Category Title</label>
            <input type="text" name="category_title" value=<?php echo $category_title;?> id="category_title" class="form-control" required="required">

        </div>
        <input type="submit" value="Update category" class="btn btn-info px-3 mb-3" name="edit_cat" id="">
    </form>
</div>