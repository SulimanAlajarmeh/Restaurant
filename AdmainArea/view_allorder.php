
<div class="row row-cols-1 row-cols-md-3 g-4">

<?php

include('../Connect Database/connect.php');

if(isset($_GET['allorder'])){
    $select_order="SELECT * FROM orders";
    $result_order=mysqli_query($con,$select_order);
    $number_order=mysqli_num_rows($result_order);
    if($number_order>0){
        while($row_fetch=mysqli_fetch_assoc($result_order)){
            $order_id=$row_fetch['Order_id'];
            $user_id=$row_fetch['User_id'];
            $amount_due=$row_fetch['amount_due'];
            $invoice_number=$row_fetch['invoice_number'];
            $total_food=$row_fetch['total_food'];
            $order_date=$row_fetch['order_date'];

            $select_user="SELECT * FROM user WHERE (User_id=$user_id)";
            $result_user=mysqli_query($con,$select_user);
            if($result_user){
                $user_fetch=mysqli_fetch_assoc($result_user);
                
                if(!empty($user_fetch)){
                  $user_name=$user_fetch['User_name'];
                }else{
                  $user_name="User Delelet";
                }
            }


            echo '
            <div class="col">
            
    <div class="card h-10">
    <h5 class="text-center mt-4 mb-0 fw-bold">Invoice Number: '.$invoice_number.'</h5>
      <img src="../img/inovice0.jpg"  class="card-img-top " alt="...">
      <div class="card-body">
        
        <p class="card-text fw-bold fs-5 text-center">User Name: '.$user_name.' </p>
        <ul class="list-group list-group-flush">
        
        <li class="list-group-item text-center">Total Food : '.$total_food.'</li>
        <li class="list-group-item text-center">Total Price : $'.$amount_due.'</li>
        
      </ul>
      </div>
      <div class="card-footer text-center">
        <small class="text-muted ">'.$order_date.'</small>
      </div>
    </div>
  </div>
            ';

        }
    }

}


?>
 
</div>




