<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="tableStyle.css">
</head>
<body>
<?php 
    $username=$_SESSION['username'];
    $get_user="select * from `user_table` where username='$username'";
    $result=mysqli_query($con,$get_user);
    $row_fetch=mysqli_fetch_assoc($result);
    $user_id=$row_fetch['user_id'];
    
?>

<div class="container">
      <h2>YOUR ORDERS</h2>
      <table>
        <thead>
          <tr>
            <th class="title"><strong>#</strong></th>
            <th class="title"><strong>Amount Due</strong></th>
            <th class="title"><strong>Total products</strong></th>
            <th class="title"><strong>Invoice Number</strong></th>
            <th class="title"><strong>Date</strong></th>
            <th class="title"><strong>Complete/Incomplete</strong></th>
            <th class="title"><strong>Status</strong></th>
          </tr>
        </thead>
        <tbody>
        <?php  
            $get_order_details="select * from `user_orders` where user_id =$user_id";
            $result_orders=mysqli_query($con,$get_order_details);
            $number=0;
            while($row_orders=mysqli_fetch_assoc($result_orders)){
                $order_id=$row_orders['order_id'];
                $amount_due=$row_orders['amount_due'];
                $total_products=$row_orders['total_products'];
                $invoice_number=$row_orders['invoice_number'];
                $order_status=$row_orders['order_status'];
                if($order_status=='pending'){
                    $order_status='Incomplete';
                }else{$order_status='Complete';}
                $order_date=$row_orders['order_date'];
                $number++;
                echo "<tr>
                <td>$number</td>
                <td>$amount_due</td>
                <td>$total_products</td>
                <td>$invoice_number</td>
                <td>$order_date</td>
                <td>$order_status</td>";
               
              if($order_status=='Complete'){
                echo "<td>Paid</td>";
              }else{
                echo "<td><a href='confirm_payment.php?order_id=$order_id' class= 'text-light'>Confirm</a></td>
                      </tr>";
              $number++;
              }
            }
        ?>
        
         
          
        </tbody>
      </table>
    </div>
</body>
</html>