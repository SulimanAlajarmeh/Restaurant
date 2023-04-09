<?php
include('../Connect Database/connect.php');
$select_user="SELECT * FROM user";
$result_user=mysqli_query($con,$select_user);
$number_user=mysqli_num_rows($result_user);
if($number_user>0){
    while($row_user=mysqli_fetch_assoc($result_user)){

    $User_id=$row_user['User_id'];
    $User_name=$row_user['User_name'];
    $User_email=$row_user['User_email'];
    $User_phone=$row_user['User_phone'];
    $User_ip=$row_user['User_ip'];
    $Image_usre=$row_user['Image_usre'];

    $total_price=0;
    $select_user_payment="SELECT * FROM orders WHERE(User_id=$User_id)";
    $result_payment=mysqli_query($con,$select_user_payment);
    $num_payment=mysqli_num_rows($result_payment);
    if($result_payment){
        while($row_payment=mysqli_fetch_assoc($result_payment)){
            $amount_due=array($row_payment['amount_due']);

            $value=array_sum($amount_due);
            $total_price+=$value;

        }
    }

    if(empty($Image_usre)){
        echo '
        <div class="col mb-3 ">
        <div class="card h-90 rounded-5">
        <div class="text-center">
        <h5 class="card-title fw-bold  mt-3">User ID: '.$User_id.'</h5>
        
        <img src="../img/profile.jpg" style="max-width:280px;  border: 5px solid rgba(223, 223, 223, 0.347);;
        box-shadow: 0px 2px 10px black;" class=" rounded-circle mt-3  "  alt="...">
        
        </div>
        <hr>
          <div class="card-body">
          
          <h5 class="card-title text-center fw-bold  mt-3">User Name:       '.$User_name.'</h5>
          <h5 class="card-title text-center  fw-bold mt-3">User Email:       '.$User_email.'</h5>
          <h5 class="card-title  text-center fw-bold mt-3">User Phone:       '.$User_phone.'</h5>
          <h5 class="card-title  text-center fw-bold mt-3">User Ip:     '.$User_ip.'</h5>
          <h5 class="card-title  text-center fw-bold mt-3">Payment Number: '.$num_payment.'</h5>
          <h5 class="card-title  text-center fw-bold mt-3">Price Payment:  $'.$total_price.'</h5>
          <a  href="delete.php?delete_user='.$User_id.'" class="btn text-center w-100 btn-danger  mb-2 mt-3 m-2" >Delete User</a>
          </div>

         
        </div>
      </div>';
    }else{
        echo '
        <div class="col mb-3 ">
        <div class="card h-90 rounded-5">
        <div class="text-center">
        <h5 class="card-title fw-bold  mt-3">User ID: '.$User_id.'</h5>
       
        
        <img src="../img/'.$Image_usre.'" style="max-width:280px;  border: 5px solid rgba(223, 223, 223, 0.347);;
        box-shadow: 0px 2px 10px black;" class=" rounded-circle mt-3  "  alt="...">
        
        </div>
        <hr>
          <div class="card-body">
          <h5 class="card-title fw-bold text-center  mt-3">User Name:       '.$User_name.'</h5>
          <h5 class="card-title fw-bold text-center   mt-3">User Email:       '.$User_email.'</h5>
          <h5 class="card-title fw-bold text-center  mt-3">User Phone:         '.$User_phone.'</h5>
          <h5 class="card-title fw-bold  text-center mt-3">User Ip :     '.$User_ip.'</h5>
          <h5 class="card-title  text-center fw-bold mt-3">Payment Number: '.$num_payment.'</h5>
          <h5 class="card-title  text-center fw-bold mt-3">Price Payment:  $'.$total_price.'</h5>
          <a href="delete.php?delete_user='.$User_id.'" class="btn text-center w-100 btn-danger mb-2 mt-3 m-2" >Delete User</a>
          </div>
          
        </div>
      </div>';
    }

    }
}

?>