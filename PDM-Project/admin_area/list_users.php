<h3 class="text-center text-success">All Payments</h3>

<table class="table table-bordered mt-5">
    <thead class="bg-info">
        <tr class='text-center'>
            <th>No</th>
            <th>User Name</th>
            <th>User Email</th>
            <th>User Address</th>
            <th>User Mobile</th>
            
        </tr>
        </thead>
        <tbody class='bg-secondary text-light '>
        <?php
        $get_users="Select * from `user_table`";
        $result_users=mysqli_query($con,$get_users);
        $row_count=mysqli_num_rows($result_users);
       
        
        $number=0;
        while($row_data=mysqli_fetch_assoc($result_users)){
            $user_id=$row_data['user_id'];
            $user_name=$row_data['username'];
            $user_email=$row_data['user_email'];
            $user_address=$row_data['user_address'];
            $user_mobile=$row_data['user_mobile'];
            
            $number++;
            ?>
            <tr class='text-center'>
                <td><?php echo $number ?></td>
                <td><?php echo $user_name ?></td>
                <td><?php echo $user_email ?></td>
                <td><?php echo $user_address ?></td>
                <td><?php echo $user_mobile ?></td>
                
            </tr>
        <?php
        }
        
        ?>
        
    </tbody>
</table>