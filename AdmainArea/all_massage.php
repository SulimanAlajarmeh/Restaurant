


<div class="row row-cols-1 row-cols-md-3 g-4">



<?php
include('../Connect Database/connect.php');

if(isset($_GET['AllMassages'])){
$select_massage="SELECT * FROM feedback";
$result_massage=mysqli_query($con,$select_massage);
$number_massage=mysqli_num_rows($result_massage);
if($number_massage>0){
    while($row_massage=mysqli_fetch_assoc($result_massage)){
        $User_id=$row_massage['User_id'];
        $User_name=$row_massage['User_name'];
        $User_email=$row_massage['User_email'];
        $Feedback=$row_massage['Feedback'];

        $select_user="SELECT * FROM user WHERE (User_id=$User_id)";
        $result_user=mysqli_query($con,$select_user);
        $row_user=mysqli_fetch_assoc($result_user);
        if(!empty($row_user)){
        $image=$row_user['Image_usre'];
       
        if(!empty($image)){

          echo '
          <div class="col mb-3 ">
          <div class="card h-90 rounded-5">
          <div class="text-center">
          <h5 class="card-title fw-bold  mt-3">'.$User_id.'</h5>
          <h5 class="card-title fw-bold  mt-3">User Name:'.$User_name.'</h5>
          <p class="card-text fs-6">Email: '.$User_email.'</p>
          <img src="../img/'.$image.'" style="max-width:280px;  border: 5px solid rgba(223, 223, 223, 0.347);;
          box-shadow: 0px 2px 10px black;" class=" rounded-circle mt-3  "  alt="...">
          
          </div>
          <hr>
            <div class="card-body">
              
              
             
              <p class="card-text fs-5 text-center">Massage:'.$Feedback.'</p>
             
            </div>
          </div>
        </div>';
         

        
        }
      }else{
        echo '
        <div class="col mb-3 ">
        <div class="card h-90 rounded-5">
        <div class="text-center">
        <h5 class="card-title fw-bold  mt-3">'.$User_id.'</h5>
        <h5 class="card-title fw-bold  mt-3">User Name:'.$User_name.'</h5>
        <p class="card-text fs-6 ">Email: '.$User_email.'</p>
        <img src="../img/profile.jpg" style="max-width:280px;  border: 5px solid rgba(223, 223, 223, 0.347);;
        box-shadow: 0px 2px 10px black;" class=" rounded-circle mt-3  "  alt="...">
        
        </div>
        <hr>
          <div class="card-body">
            
            
           
            <p class="card-text fs-5 text-center">Massage:'.$Feedback.'</p>
           
          </div>
        </div>
      </div>';
        
    }
}
}
}


?>




</div>

