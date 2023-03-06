<!--Disply all_food-->
<?php
function display_all(){
global $con;

$select_food="SELECT * FROM food";
$result_food=mysqli_query($con,$select_food);
$numrow_food=mysqli_num_rows($result_food);
if($numrow_food>0){
  while($row_food=mysqli_fetch_assoc($result_food)){
    $food_id=$row_food['Food_id'];
    $food_name=$row_food['Food_name'];
    $food_country=$row_food['country_name'];
    $food_type=$row_food['type_name'];
    $food_decription=$row_food['Food_description'];
    $price=$row_food['Food_price'];
    $img=$row_food['Food_image2'];

    echo'
    <div class="col-xxl-6">
    <div class="row">
    
<div  class="  m-1">
<div class="card mb-3 " style="max-width: 650px; min-height:500px; ">
  <div class="row g-0 ">
    <div class=" col-md-4">
      <img style="min-height:530px; max-width:100%;" src="img/'.$img.'"  alt="...">
    </div>
    <div class="col-md-8">
      <div class=" mt-0 m-3  card-body">
        <h5 class="m-3 card-title fw-bold fs-3">'.$food_name.'</h5>
        <p class="m-3 card-text fs-5">'.$food_country.'</p>
        <p class="m-3 card-text fs-5">'.$food_type.'</p>
         <p class=" m-3 card-text">'.$food_decription.'</p>
         <p class=" m-3 fs-4">$'.$price.'</p>
         <div class="price">
          <a href="cart.php?add_to_cart='.$food_id.'"><button type="button" class="m-3 w-100 mt-4 btn btn-outline-warning"><i class="fa-solid fa-cart-shopping"></i></button></a>
          <a href="food_details.php?details_id='.$food_id.'"><button type="button" class="m-3 w-100 mt-4 btn btn-outline-warning"><i class="fa-solid fa-eye"></i></button></a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


</div>
</div>';

  }
  }
}

?>












<!--Disply all_food-->
<?php
function all_food(){
    global $con;
    $select_food="SELECT * FROM food ORDER BY rand() LIMIT 0,10";
    $result_food=mysqli_query($con,$select_food);
    $numrow_food=mysqli_num_rows($result_food);
    if($numrow_food>0){
      while($row_food=mysqli_fetch_assoc($result_food)){
        $food_id=$row_food['Food_id'];
        $food_name=$row_food['Food_name'];
        $food_country=$row_food['country_name'];
        $food_type=$row_food['type_name'];
        $food_decription=$row_food['Food_description'];
        $price=$row_food['Food_price'];
        $img=$row_food['Food_image2'];
  
        echo'
        <div class="col-xxl-6">
        <div class="row">
        
  <div  class="  m-1">
    <div class="card mb-3 " style="max-width: 650px; min-height:500px; ">
      <div class="row g-0 ">
        <div class=" col-md-4">
          <img style="min-height:530px; max-width:100%;" src="img/'.$img.'"  alt="...">
        </div>
        <div class="col-md-8">
          <div class=" mt-0 m-3  card-body">
            <h5 class="m-3 card-title fw-bold fs-3">'.$food_name.'</h5>
            <p class="m-3 card-text fs-5">'.$food_country.'</p>
            <p class="m-3 card-text fs-5">'.$food_type.'</p>
             <p class=" m-3 card-text">'.$food_decription.'</p>
             <p class=" m-3 fs-4">$'.$price.'</p>
             <div class="price">
             <a href="cart.php?add_to_cart='.$food_id.'"><button type="button" class="m-3 w-100 mt-4 btn btn-outline-warning"><i class="fa-solid fa-cart-shopping"></i></button></a>
             <a href="food_details.php?details_id='.$food_id.'"><button type="button" class="m-3 w-100 mt-4 btn btn-outline-warning"><i class="fa-solid fa-eye"></i></button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  </div>
  </div>';
  
      }

     
    }

}

      
  ?>

<!--Disply country_food-->
<?php
function country_food(){
  if(isset($_GET['country_name'])){
   $country_name=$_GET['country_name'];
    global $con;
    $select_food="SELECT * FROM food WHERE(country_name='$country_name')";
    $result_food=mysqli_query($con,$select_food);
    $numrow_food=mysqli_num_rows($result_food);
    if($numrow_food>0){
      while($row_food=mysqli_fetch_assoc($result_food)){
        $food_id=$row_food['Food_id'];
        $food_name=$row_food['Food_name'];
        $food_country=$row_food['country_name'];
        $food_type=$row_food['type_name'];
        $food_decription=$row_food['Food_description'];
        $price=$row_food['Food_price'];
        $img=$row_food['Food_image2'];
  
        echo'
        <div class="col-xxl-6">
        <div class="row">
        
  <div  class="  m-1">
    <div class="card mb-3 " style="max-width: 650px; min-height:500px; ">
      <div class="row g-0 ">
        <div class=" col-md-4">
          <img style="min-height:530px; max-width:100%;" src="img/'.$img.'"  alt="...">
        </div>
        <div class="col-md-8">
          <div class=" mt-0 m-3 card-body">
            <h5 class="m-3 card-title fw-bold fs-3">'.$food_name.'</h5>
            <p class="m-3 card-text fs-5">'.$food_country.'</p>
            <p class="m-3 card-text fs-5">'.$food_type.'</p>
             <p class=" m-3 card-text">'.$food_decription.'</p>
             <p class=" m-3 fs-4">$'.$price.'</p>
             <div class="price">
             <a href="cart.php?add_to_cart='.$food_id.'"><button type="button" class="m-3 w-100 mt-4 btn btn-outline-warning"><i class="fa-solid fa-cart-shopping"></i></button></a>
             <a href="food_details.php?details_id='.$food_id.'"><button type="button" class="m-3 w-100 mt-4 btn btn-outline-warning"><i class="fa-solid fa-eye"></i></button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  </div>
  </div>';
  
        
      }
    }
  }
}
  ?>
<!--Disply type_food-->
<?php

function type_food(){
  if(isset($_GET['type_name'])){
  global $con;
  $type_name=$_GET['type_name'];
  
  $select_food="SELECT * FROM food WHERE(type_name='$type_name')";
  $result_food=mysqli_query($con,$select_food);
  $numrow_food=mysqli_num_rows($result_food);
  if($numrow_food>0){
    while($row_food=mysqli_fetch_assoc($result_food)){
      $food_id=$row_food['Food_id'];
      $food_name=$row_food['Food_name'];
      $food_country=$row_food['country_name'];
      $food_type=$row_food['type_name'];
      $food_decription=$row_food['Food_description'];
      $price=$row_food['Food_price'];
      $img=$row_food['Food_image2'];
      echo'
      <div class="col-xxl-6">
      <div class="row">
      
<div  class="  m-1">
  <div class="card mb-3 " style="max-width: 650px; min-height:500px; ">
    <div class="row g-0 ">
      <div class=" col-md-4">
        <img style="min-height:530px; max-width:100%;" src="img/'.$img.'"  alt="...">
      </div>
      <div class="col-md-8">
        <div class=" mt-0 m-3 card-body">
          <h5 class="m-3 card-title fw-bold fs-3">'.$food_name.'</h5>
          <p class="m-3 card-text fs-5">'.$food_country.'</p>
          <p class="m-3 card-text fs-5">'.$food_type.'</p>
           <p class=" m-3 card-text">'.$food_decription.'</p>
           <p class=" m-3 fs-4">$'.$price.'</p>
           <div class="price">
           <a href="cart.php?add_to_cart='.$food_id.'"><button type="button" class="m-3 w-100 mt-4 btn btn-outline-warning"><i class="fa-solid fa-cart-shopping"></i></button></a>
           <a href="food_details.php?details_id='.$food_id.'"><button type="button" class="m-3 w-100 mt-4 btn btn-outline-warning"><i class="fa-solid fa-eye"></i></button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


</div>
</div>';

     }
   }
 }
}

?>

<!--for search-->
<?php
function search_food(){
  global $con;
  if(isset($_POST['serch_submit'])){
    if(!empty($_POST['search_food'])){
    $serch=$_POST['search_food'];
    
      
      $select_food="SELECT * FROM food WHERE (Food_keywords LIKE'%$serch%')";
      $result_food=mysqli_query($con,$select_food);
      $numrow_food=mysqli_num_rows($result_food);
      if($numrow_food>0){
        while($row_food=mysqli_fetch_assoc($result_food)){
          $food_id=$row_food['Food_id'];
          $food_name=$row_food['Food_name'];
          $food_country=$row_food['country_name'];
          $food_type=$row_food['type_name'];
          $food_decription=$row_food['Food_description'];
          $price=$row_food['Food_price'];
          $img=$row_food['Food_image2'];
          echo'
          <div class="col-xxl-6">
          <div class="row">
          
    <div  class="  m-1">
      <div class="card mb-3 " style="max-width: 650px; min-height:500px; ">
        <div class="row g-0 ">
          <div class=" col-md-4">
            <img style="min-height:530px; max-width:100%;" src="img/'.$img.'"  alt="...">
          </div>
          <div class="col-md-8">
            <div class=" mt-0 m-3 card-body">
              <h5 class="m-3 card-title fw-bold fs-3">'.$food_name.'</h5>
              <p class="m-3 card-text fs-5">'.$food_country.'</p>
              <p class="m-3 card-text fs-5">'.$food_type.'</p>
               <p class=" m-3 card-text">'.$food_decription.'</p>
               <p class=" m-3 fs-4">$'.$price.'</p>
               <div class="price">

                <a href="cart.php?add_to_cart='.$food_id.'"><button type="button" class="m-3 w-100 mt-4 btn btn-outline-warning"><i class="fa-solid fa-cart-shopping"></i></button></a>
                <a href="food_details.php?details_id='.$food_id.'"><button type="button" class="m-3 w-100 mt-4 btn btn-outline-warning"><i class="fa-solid fa-eye"></i></button></a>
              
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    </div>
    </div>';
    

        }

      }else{
        echo"<script>alert('The Search is not Identical :( ')</script>";
        display_all();
      }

    }
   
  }
}


?>


<?php

function all_menu(){
  global $con;
  $select_food="SELECT * FROM food";
  $result_food=mysqli_query($con,$select_food);
  $numrow_food=mysqli_num_rows($result_food);
  if($numrow_food>0){
    while($row_food=mysqli_fetch_assoc($result_food)){
      $food_id=$row_food['Food_id'];
      $food_name=$row_food['Food_name'];
      $food_country=$row_food['country_name'];
      $food_type=$row_food['type_name'];
      $food_decription=$row_food['Food_description'];
      $price=$row_food['Food_price'];
      $img=$row_food['Food_image2'];

      echo'
      <div class="col-xxl-6">
      <div class="row">
      
<div  class=" m-1 ">
  <div class="card mb-5  " style="max-width: 650px; min-height:500px; ">
    <div class="row g-0 ">
      <div class=" col-md-4">
        <img style="min-height:530px; max-width:100%;" src="img/'.$img.'"  alt="...">
      </div>
      <div class="col-md-8">
        <div class=" mt-0 m-3  card-body">
          <h5 class="m-3 card-title fw-bold fs-3">'.$food_name.'</h5>
          <p class="m-3 card-text fs-5">'.$food_country.'</p>
          <p class="m-3 card-text fs-5">'.$food_type.'</p>
           <p class=" m-3 card-text">'.$food_decription.'</p>
           <p class=" m-3 fs-4">$'.$price.'</p>
           <div class="price">
           
            <a href="cart.php?add_to_cart='.$food_id.'"><button type="button" class="m-3  w-100 mt-4 btn btn-outline-warning"><i class="fa-solid fa-cart-shopping"></i></button></a>
            <a href="food_details.php?details_id='.$food_id.'"><button type="button" class="m-3  w-100 mt-4 btn btn-outline-warning"><i class="fa-solid fa-eye"></i></button></a>
         
            </div>
        </div>
      </div>
    </div>
  </div>
</div>


</div>
</div>';

    }
  }

}



?>



<?php

function details_food(){
  global $con;
  if(isset($_GET['details_id'])){
    $id=$_GET['details_id'];
    
  $select_food="SELECT * FROM food WHERE (Food_id=$id)";
  $result_food=mysqli_query($con,$select_food);
  $numrow_food=mysqli_num_rows($result_food);
  if($numrow_food>0){
    while($row_food=mysqli_fetch_assoc($result_food)){

      if($id==2){
        $food_id=$row_food['Food_id'];
        $food_name=$row_food['Food_name'];
        $food_country=$row_food['country_name'];
        $food_type=$row_food['type_name'];
        $food_decription=$row_food['Food_description'];
        $price=$row_food['Food_price'];
        $img=$row_food['Food_image2'];
      }else{

      $food_id=$row_food['Food_id'];
      $food_name=$row_food['Food_name'];
      $food_country=$row_food['country_name'];
      $food_type=$row_food['type_name'];
      $food_decription=$row_food['Food_description'];
      $price=$row_food['Food_price'];
      $img=$row_food['Food_image1'];
      }
      echo'

    <div class="card mt-5">
  <img style="max-width:100%; max-height:530px;" src="img/'.$img.'" class="card-img-top ml-5" alt="...">
  <div class="card-body">
    <h5 class="card-title fw-bold fs-4">'.$food_name.'</h5>
    <p class="card-text fs-5">'.$food_country.'</p>
    <p class="card-text fs-5">'.$food_type.'</p>
    <p class="card-text fs-5">'.$food_decription.'</p>
    <p class="card-text fs-4">$'.$price.'</p>
    <a href="cart.php?add_to_cart='.$food_id.'"><button type="button" class="m-2  w-100 mt-4 btn btn-outline-warning"><i class="fa-solid fa-cart-shopping"></i></button></a>
  
  </div>
  </div>

      ';

    }
  }
}
}

?>





<!--get  ip_address  function--> 
<?php
  
    function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}
?>

<!--add cart  function--> 
<?php
  function add_cart(){
    global $con;
     $ip= getIPAddress();   
    if(isset($_GET['add_to_cart'])){
      $food_id=$_GET['add_to_cart'];
      $select_food="SELECT * FROM cart_details WHERE(Food_id=$food_id AND ip_address='$ip')";
      $result_food=mysqli_query($con,$select_food);
      $num_food=mysqli_num_rows($result_food);

      if($num_food>0){
        echo "<script>alert('This Food Already Present Into Cart')</script>";
        echo "<script>window.open('cart.php','_self')</script>";
      }else{
        $insert_food="INSERT INTO cart_details (Food_id,ip_address,quantity) VALUES ($food_id,'$ip',1)";
        $result_insert=mysqli_query($con,$insert_food);
        if($result_insert){
          echo "<script>alert('Food Added Into Cart')</script>";
          echo "<script>window.open('cart.php','_self')</script>";
        }
      }

    }
  }
  ?>


<!-- number food in cart-->
<?php
    
    function number_cart_food(){
      global $con;
      $ip=getIPAddress();
      $select_food="SELECT * FROM cart_details WHERE (ip_address='$ip')";
       $result_food=mysqli_query($con,$select_food);
       $num_food=mysqli_num_rows($result_food);
       return $num_food;

    }

?>

<!--total cart price-->
<?php

function total_cart_price(){
  global $con;
  $ip=getIPAddress();
  $total_price=0;
  $select_user="SELECT * FROM cart_details WHERE (ip_address='$ip')";
  $result_user=mysqli_query($con,$select_user);
  while($row_user=mysqli_fetch_array($result_user)){
    $food_id=$row_user['Food_id'];
    $food_quantity=$row_user['quantity'];
    $select_food="SELECT * FROM food WHERE(Food_id=$food_id)";
    $result_food=mysqli_query($con,$select_food);
    while($row_food=mysqli_fetch_array($result_food)){
      if($food_quantity>0){
        $food_price=$row_food['Food_price'];
        $food_values=$food_price*$food_quantity;
        $all_price=array($food_values);
        $final_price=array_sum($all_price);
        $total_price+=$final_price;
        
      }else{
      $food_price=array($row_food['Food_price']);
      $all_price=array_sum($food_price);
      $total_price+=$all_price;
      }
      
    }
    
  }
  
  echo $total_price;



}

?>
<!--update_quntity-->
<?php
function update_quntity(){
 global $con;
 $ip=getIPAddress();
 $total=0;
 $ip_select="SELECT * FROM cart_details WHERE ip_address='$ip'";
 $ip_run=mysqli_query($con,$ip_select);
 while($ip_row=mysqli_fetch_array($ip_run)){
  $food_id=$ip_row['Food_id'];
  $food_select="SELECT * FROM food WHERE Food_id ='$food_id'";
  $food_run=mysqli_query($con,$food_select);
  while($food_row=mysqli_fetch_array($food_run)){
    $food_price=array($food_row['Food_price']);
    $values=array_sum($food_price);
    $total+=$values;
   
 
    if (isset($_POST['update_cart'])){
      $qty=$_POST['quantity'];
      $update_qty="UPDATE cart_details SET quantity=$qty";
      $run_qty=mysqli_query($con,$update_qty);
      $total=$values*$qty;
      echo'<script>window.open("cart.php","_self")</script>';

    }
    
    
  }
}

}

?>

<!--end update_quntity-->


<?php
function remove_cart_item(){
  global $con;
  if(isset($_POST['remove'])){
    if(isset($_POST['removeitem'])){
    foreach($_POST['removeitem'] as $remove_id){
      
      $delete="DELETE FROM cart_details WHERE (Food_id=$remove_id)";
      $result_delete=mysqli_query($con,$delete);
      if($result_delete){
        echo'<script>alert("Food Delete From Cart")</script>';
        echo '<script>window.open("cart.php","_self")</script>';
        
      }
    }
  }
}
}

?>
<?php
function empty_cart(){
  global $con;
  $ip= getIPAddress(); 
  if(isset($_GET['empty_cart'])){
    $delete_all="DELETE FROM cart_details WHERE (ip_address='$ip')";
    $result_delete=mysqli_query($con,$delete_all);
    if($result_delete){
      echo'<script>alert("All Food Delete From Cart")</script>';
      echo '<script>window.open("cart.php","_self")</script>';
      
    }
  }
}

?>


