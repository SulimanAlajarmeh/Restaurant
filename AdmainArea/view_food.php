

<div class="row row-cols-1 row-cols-md-3 g-4 ">

<?php
include('../Connect Database/connect.php');

$select_food="SELECT * FROM food ";
$result_food=mysqli_query($con,$select_food);
$num_food=mysqli_num_rows($result_food);
if($num_food>0){
    while($row_food=mysqli_fetch_assoc($result_food)){
        $food_id=$row_food['Food_id'];
        $food_name=$row_food['Food_name'];
        $food_country_name=$row_food['country_name'];
        $food_type_name=$row_food['type_name'];
        $food_price=$row_food['Food_price'];
        $food_image1=$row_food['Food_image1'];
        $food_date=$row_food['date'];

        $total_quntity=0;
        $select_food_order="SELECT * FROM ordres_user WHERE(Food_id=$food_id)";
        $result_food_order=mysqli_query($con,$select_food_order);
        $num_food_order=mysqli_num_rows($result_food_order);
        if($num_food_order>0){
            while($row_food_order=mysqli_fetch_assoc($result_food_order)){
                $quntity=$row_food_order['quantity'];
                $total_quntity+=$quntity;
            }
        }
                echo'
        
                
                <div class="col mb-3">
                <div class="card h-100 border-warning ">
                  <img src="../img/'.$food_image1.'" class="card-img-top" alt="..." style="height:400px;">
                  <div class="card-body">
                    <h5 class="card-title fw-bold">Food_Name: '.$food_name.'</h5>
                    <p class="card-text fs-6">Food_id: '.$food_id.'</p>
                   
                    <p class="card-text fs-6">Food_Country: '.$food_country_name.'</p>
                    <p class="card-text fs-6">Food_Type: '.$food_type_name.'</p>
                    <p class="card-text fs-6">Food_Price: $'.$food_price.'</p>
                    <p class="card-text fs-6">Food_Order: '.$num_food_order.'</p>
                    <p class="card-text fs-6">All Quntity Order: '.$total_quntity.'</p>
                  </div>

                  <div class="d-grid gap-2 ">
                         <a href="admain.php?update_food='.$food_id.'"><button class="btn btn-warning  m-3" style="width:93%" type="button"><i class="fa-solid fa-gear fs-5" style="color: #f5f5f5;"></i></button></a>
                         <a href="delete.php?delete_food='.$food_id.'"><button class="btn btn-danger m-3 mt-0 " style="width:93%" type="button"><i class="fa-solid fa-trash fs-6" ></i></button></a>
                  </div>

                  <div class="card-footer">
                    <small class="text-muted">Team Food Insert: '.$food_date.'</small>
                  </div>
                </div>
              </div>
              

                ';

            
        }
    }



?>
</div>
