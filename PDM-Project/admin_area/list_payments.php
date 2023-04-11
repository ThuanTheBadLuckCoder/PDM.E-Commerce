<h3 class="text-center text-success">All Payments</h3>

<table class="table table-bordered mt-5">
    <thead class="bg-info">
        <tr class='text-center'>
            <th>No</th>
            <th>Invoice Number</th>
            <th>Amount</th>
            <th>Payment Mode</th>
            <th>Order Date</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody class='bg-secondary text-light '>
        <?php
        $get_payments="Select * from `user_payments`";
        $result_payments=mysqli_query($con,$get_payments);
        $row_count=mysqli_num_rows($result_payments);
       
        
        $number=0;
        while($row_data=mysqli_fetch_assoc($result_payments)){
            $order_id=$row_data['order_id'];
            $payment_id=$row_data['payment_id'];
            $amount=$row_data['amount'];
            $invoice_number=$row_data['invoice_number'];
            $payment_mode=$row_data['payment_mode'];
            $order_date=$row_data['date'];
            
            $number++;
            ?>
            <tr class='text-center'>
                <td><?php echo $number ?></td>
                <td><?php echo $invoice_number ?></td>
                <td><?php echo $amount ?></td>
                <td><?php echo $payment_mode ?></td>
                <td><?php echo $order_date ?></td>
                <td><a href='index.php?delete_payment=<?php echo $order_id;?>' class='text-light'> <i class='fa-solid fa-trash'></i></a></td>
            </tr>
        <?php
        }
        
        ?>
        
    </tbody>
</table>