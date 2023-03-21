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
    $img=$row_food['Food_image1'];

    echo'
    <div class="col-xxl-4">
    <div class="row">
    
<div  class="">
<div class="card mb-3 " style="max-width: 550px; min-height:550px; border-radius:10px; ">
  <div class="row g-0 ">
    <div class=" col-md-4">
      <img style="min-height:548.5px; max-width:100%; border-radius:10px;" src="img/'.$img.'"  alt="...">
    </div>
    <div class="col-md-8">
      <div class=" mt-0 m-3  card-body">
        <h5 class="m-2 card-title fw-bold fs-3">'.$food_name.'</h5>
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
    $select_food="SELECT * FROM food ORDER BY rand() LIMIT 0,12";
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
        $img=$row_food['Food_image1'];
  
        echo'
        <div class="col-xxl-4">
        <div class="row">
        
  <div  class="">
    <div class="test-card card mb-3 " style="max-width: 550px; min-height:550px; border-radius:10px;">
      <div class="row g-0 ">
        <div class=" col-md-4">
          <img style="min-height:548.5px; max-width:100%; border-radius:10px;" src="img/'.$img.'"  alt="...">
        </div>
        <div class="col-md-8">
          <div class=" mt-0 m-3  card-body">
            <h5 class="m-2 card-title fw-bold fs-3">'.$food_name.'</h5>
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
        $img=$row_food['Food_image1'];
  
        echo'
        <div class="col-xxl-4">
        <div class="row">
        
  <div  class="">
    <div class="card mb-3 " style="max-width: 550px; min-height:550px; border-radius:10px; ">
      <div class="row g-0 ">
        <div class=" col-md-4">
          <img style="min-height:548.5px; max-width:100%; border-radius:10px;" src="img/'.$img.'"  alt="...">
        </div>
        <div class="col-md-8">
          <div class=" mt-0 m-3 card-body">
            <h5 class="m-2 card-title fw-bold fs-3">'.$food_name.'</h5>
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
      $img=$row_food['Food_image1'];
      echo'
      <div class="col-xxl-4">
      <div class="row">
      
<div  class="">
  <div class="card mb-3 " style="max-width: 550px; min-height:550px; border-radius:10px;">
    <div class="row g-0 ">
      <div class=" col-md-4">
        <img style="min-height:548.5px; max-width:100%; border-radius:10px;" src="img/'.$img.'"  alt="...">
      </div>
      <div class="col-md-8">
        <div class=" mt-0 m-3 card-body">
          <h5 class="m-2 card-title fw-bold fs-3">'.$food_name.'</h5>
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
          $img=$row_food['Food_image1'];
          echo'
          <div class="col-xxl-4">
          <div class="row">
          
    <div  class="">
      <div class="card mb-3 " style="max-width: 550px; min-height:550px; border-radius:10px;">
        <div class="row g-0 ">
          <div class=" col-md-4">
            <img style="min-height:548.5px; max-width:100%; border-radius:10px;" src="img/'.$img.'"  alt="...">
          </div>
          <div class="col-md-8">
            <div class=" mt-0 m-3 card-body">
              <h5 class="m-2 card-title fw-bold fs-3">'.$food_name.'</h5>
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
      $img=$row_food['Food_image1'];

      echo'
      <div class="col-xxl-4">
      <div class="row">
      
<div  class="">
  <div class="card mb-5"  style="max-width: 550px; min-height:550px; border-radius:10px;">
    <div class="row g-0 ">
      <div class=" col-md-4">
        <img style="min-height:548.5px; max-width:100%; border-radius:10px;" src="img/'.$img.'"  alt="...">
      </div>
      <div class="col-md-8">
        <div class=" mt-0 m-3  card-body">
          <h5 class="m-2 card-title fw-bold fs-3">'.$food_name.'</h5>
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

      if($id==1){
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
      $img=$row_food['Food_image2'];
      }
      echo'

    <div class="card mt-5 " style="width:100%; max-height:930px;" >
  <img style="width:100%; max-height:530px;" src="img/'.$img.'" class="card-img-top ml-5" alt="...">
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
    $user_id=$_SESSION['id'];  
    
    $select_food="SELECT * FROM cart_details WHERE (Food_id=$food_id AND User_id=$user_id) ";
    $result_select=mysqli_query($con,$select_food);
    $num_food=mysqli_num_rows($result_select);
    if($num_food>0){
      echo'<script>alert("Food Already Exist in Cart")</script>';
        echo '<script>window.open("cart.php","_self")</script>';
        
       
        
      
    }else{ $insert_food="INSERT INTO cart_details (Food_id,User_id,ip_address,quantity) VALUES ($food_id,$user_id,'$ip',1)";
    $result_insert=mysqli_query($con,$insert_food);
    if($result_insert){
      echo'<script>alert("Insert Food Successfuly in Cart")</script>';
      echo '<script>window.open("cart.php","_self")</script>';
      
    }
    }
     
    }
    
  }

  

?>
    
  
    
    
  
 


<!-- number food in cart-->
<?php
    
    function number_cart_food(){
      global $con;
      $ip= getIPAddress(); 
      $user_id=$_SESSION['id'];
      $select_food="SELECT * FROM cart_details WHERE (ip_address='$ip'AND User_id=$user_id )";
       $result_food=mysqli_query($con,$select_food);
       $num_food=mysqli_num_rows($result_food);
       return $num_food;

    }

?>

<!--total cart price-->
<?php

function total_cart_price(){
  global $con;
  $ip= getIPAddress(); 
  $total_price=0;
  $user_id=$_SESSION['id'];
  $select_user="SELECT * FROM cart_details WHERE (ip_address='$ip' AND User_id=$user_id )";
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
function update_cart(){
  global $con;
  $ip=getIPAddress();
  $user_id=$_SESSION['id'];
  if(isset($_GET['qty'])){
    if(isset($_GET['id'])){
      $qty=$_GET['qty'];
      $cart_id=$_GET['id'];
      $select_user="SELECT * FROM cart_details WHERE(User_id=$user_id AND ip_address='$ip')";
      $result_user=mysqli_query($con,$select_user);
      $num_user=mysqli_num_rows($result_user);
      if($num_user>0){
        $update="UPDATE cart_details SET quantity=$qty WHERE(Cart_id=$cart_id)";
        $result_update=mysqli_query($con,$update);
        if($result_update){
          echo '<script>window.open("cart.php","_self")</script>';
        }
      }
    }
  }
}
        
        


?>

<!--end update_quntity-->


<?php
function remove_cart_item(){
  global $con;
  $user_id=$_SESSION['id'];
  if(isset($_GET['remove'])){
    $Cart_id=$_GET['remove'];
      $delete="DELETE FROM cart_details WHERE (Cart_id=$Cart_id AND User_id=$user_id)";
      $result_delete=mysqli_query($con,$delete);
      if($result_delete){
        echo'<script>alert("Food Delete From Cart")</script>';
        echo '<script>window.open("cart.php","_self")</script>';
        
      }
    }
  }


?>


<?php
function empty_cart(){
  global $con;
  $user_id=$_SESSION['id'];
  if(isset($_GET['empty_cart'])){
    $delete_all="DELETE FROM cart_details WHERE (User_id=$user_id)";
    $result_delete=mysqli_query($con,$delete_all);
    if($result_delete){
      echo'<script>alert("All Food Delete From Cart")</script>';
      echo '<script>window.open("cart.php","_self")</script>';
      
    }
  }
}


?>



<?php

function insert_user(){
  global $con;
  $ip=getIPAddress();
  if(isset($_POST['submit'])){
    $user_name=$_POST['user_name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $hash_password=password_hash($password,PASSWORD_DEFAULT);
    $phone=$_POST['phone'];
    $re_password=$_POST['re_password'];
    if($password===$re_password){
    if(!empty($user_name) AND !empty($email) AND !empty($password) AND !empty($phone) ){
   $select_user="SELECT * FROM user WHERE (User_email='$email')";
   $result_user=mysqli_query($con,$select_user);
   $number_row_user=mysqli_num_rows($result_user);
   if($number_row_user>0){
    echo'<script>alert("This User Name is exisit")</script>';
    echo'<script>window.open("register.php","_SELf")</script>';
   }else{

    $insert="INSERT INTO user (User_name,User_email,User_password,User_phone,User_ip)
     VALUES('$user_name','$email','$hash_password','$phone','$ip')";
    $result_insert=mysqli_query($con,$insert);
    if($result_insert){
      echo"<script>alert('Register User Successfuly')</script>";
    }
   else{
      echo'<script>window.open("login.php","_SELF")</script>';
    }

   }
  }else{
    echo"<script>alert('Plese Fill Your Information ')</script>";
  }
}else{
  echo"<script>alert('No Match Password ')</script>";
}
}
}


?>




<?php

function login(){
  global $con;
 $ip=getIPAddress();
  if(isset($_POST['login'])){
    
    $user_name=$_POST['user_name'];
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
    if(!empty($user_name) AND !empty($user_email) AND !empty($user_password)){
    $select_user="SELECT * FROM user WHERE(User_email='$user_email' AND User_name='$user_name')";
    $result=mysqli_query($con,$select_user);
    $num_row_user=mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);
    
    if($num_row_user>0){
      $_SESSION['username']=$row['User_name'];
        $_SESSION['id']=$row['User_id'];
      if(password_verify($user_password,$row['User_password'])){
        $_SESSION['username']=$row['User_name'];
        $_SESSION['id']=$row['User_id'];
        $id=$_SESSION['id'];
        $select_cart="SELECT * FROM cart_details WHERE (User_id=$id ) ";
        $result_cart=mysqli_query($con,$select_cart);
        $num_cart_item=mysqli_num_rows($result_cart);
        if($num_row_user==1 AND $num_cart_item==0){
          $_SESSION['username']=$row['User_name'];
        $_SESSION['id']=$row['User_id'];
          echo'<script>alert("Login Successfuly")</script>';
          echo'<script>window.open("../home.php","_SELF")</script>';

        }else{
          $_SESSION['username']=$row['User_name'];
        $_SESSION['id']=$row['User_id'];
          echo'<script>alert("Login Successfuly")</script>';
          echo'<script>window.open("check_payment.php","_SELF")</script>';
        }
      }else{
        echo'<script>alert("Invalid Information")</script>';
      }
    }else{
      echo'<script>alert("Invalid Information")</script>';
    }
  }else{
    echo'<script>alert("Plese Fill Your Information")</script>';
  }
  
}
}




?>






<?php
function order(){
  global $con;
  $user_id=$_SESSION['id'];
  $total_price=0;
  $ip= getIPAddress(); 

if(isset($_SESSION['id'])){
  if(isset($_POST['submit'])){
  $number_card=$_POST['NumberCard'];
  $cvv=$_POST['cvv'];
  $select_card="SELECT * FROM card_payment";
  $result_card=mysqli_query($con,$select_card);
    while($row_card=mysqli_fetch_assoc($result_card)){
  $card_number=$row_card['Card_number'];
  $Cvv_card=$row_card['Cvv'];
  if($card_number==$number_card && $Cvv_card==$cvv){


    
    $user_id=$_SESSION['id'];
    $select_user="SELECT * FROM cart_details WHERE (ip_address='$ip' AND User_id=$user_id )";
    $result_user=mysqli_query($con,$select_user);
    while($row_user=mysqli_fetch_array($result_user)){
      $food_id=$row_user['Food_id'];
      $food_quantity=$row_user['quantity'];
      $select_food="SELECT * FROM food WHERE(Food_id=$food_id)";
      $result_food=mysqli_query($con,$select_food);
      while($row_food=mysqli_fetch_array($result_food)){
        if($food_quantity>1){
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

    

    $invoice=mt_rand();
    $select_user="SELECT * FROM cart_details WHERE(User_id=$user_id)";
    $result_user=mysqli_query($con,$select_user);
    $number_user=mysqli_num_rows($result_user);
    
    if($number_user>0){
    
    $insert_order="INSERT INTO orders (User_id,amount_due,invoice_number,total_food,order_date)
    VALUES ($user_id,$total_price,$invoice,$number_user,now())";
    $result_insert_order=mysqli_query($con,$insert_order);
    
   
        $select_cart="SELECT * FROM cart_details WHERE (User_id=$user_id)";
        $result_cart=mysqli_query($con,$select_cart);

          
          while($row_cart=mysqli_fetch_assoc($result_cart)){
           
            $Food_id=$row_cart['Food_id'];
            $quantity=$row_cart['quantity'];
            $insert_user_order="INSERT INTO ordres_user (User_id,Food_id,quantity,order_date)
            VALUES ($user_id,$Food_id,$quantity,now())";
            $result_user_order=mysqli_query($con,$insert_user_order);
            
            $delete_cart="DELETE  FROM cart_details WHERE(User_id=$user_id)";
            $result_delete=mysqli_query($con,$delete_cart);
            if($result_delete){
              echo'<script>alert("Payment Done")</script>';
              echo '<script>window.open("check_payment.php","_self")</script>';
              
            }
            
          }

          
              
        }

      }else{
        echo'<script>alert("No Match Information Card")</script>';
    }
      
    
    }
  }
   
  }
}

?>

<?php

function profile_info(){
  global $con;
  $user_id=$_SESSION['id'];

$select_user="SELECT * FROM user WHERE(User_id=$user_id)";
$result_user=mysqli_query($con,$select_user);
if($result_user){
  while($row_result_user=mysqli_fetch_assoc($result_user)){
    $User_name=$row_result_user['User_name'];
    $User_phone=$row_result_user['User_phone'];
    $User_email=$row_result_user['User_email'];
    $Image_usre=$row_result_user['Image_usre'];


    echo'
   
      
        <div class="text-profile">
            <p class="fs-2 fw-bold">'.$User_name.'</p>
            <p class="fs-5">'.$User_phone.'</p>
            <p class="fs-5">'.$User_email.'</p>
          
        </div>
    ';
  }
}
}

?>


<?php

function profile_img(){
  global $con;
  $user_id=$_SESSION['id'];
  $select_user="SELECT * FROM user WHERE(User_id=$user_id)";
$result_user=mysqli_query($con,$select_user);
if($result_user){
  while($row_result_user=mysqli_fetch_assoc($result_user)){
    $Image_usre=$row_result_user['Image_usre'];


    if(!empty($Image_usre)){


    echo'
     
    <div class="imge-profile">
        
    <img class="rounded-circle" src="img/'.$Image_usre.'">

    </div>
    ';
  }else{
    echo ' 
    <div class="imge-profile">
        
    <img class="rounded-circle" src="img/profile.jpg">

  </div>';

  }
  }
}
}
?>


<?php
function show_order(){

  global $con;
  $user_id=$_SESSION['id'];

  $select_order="SELECT * FROM ordres_user WHERE(User_id=$user_id)";
  $result_order=mysqli_query($con,$select_order);
  $number_order=mysqli_num_rows($result_order);
  if($number_order>0){
    while($row_order=mysqli_fetch_assoc($result_order)){
      $Food_id=$row_order['Food_id'];
      $quantity=$row_order['quantity'];
      $order_date=$row_order['order_date'];

      $select_food="SELECT * FROM food WHERE(Food_id=$Food_id)";
      $result_food=mysqli_query($con,$select_food);
      $number_food=mysqli_num_rows($result_food);
      if($number_food>0){
        while($row_food=mysqli_fetch_assoc($result_food)){
          $food_name=$row_food['Food_name'];
          $food_price=$row_food['Food_price'];
          $food_img=$row_food['Food_image1'];

          $total_price=$quantity*$food_price;


          echo'
          <div class="col-xxl-4">
    <div class=" card mb-4" style="width:100%; height:460px; ">
    <img style="height:250px;" src="img/'.$food_img.'" class="card-img-top" alt="...">
    <div class="card-body mb-0">
      <h5 class="card-title fs-4 ">'.$food_name.'</h5>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item ">Quntity: '.$quantity.'</li>
      <li class="list-group-item">Price: $'.$total_price.'</li>
      <li class="list-group-item">'.$order_date.'</li>
    </ul>
 </div>
 </div>


';
}

        }
      }
    }
  }





?>
<?php
function delete_user(){
  global $con;
  $user_id=$_SESSION['id'];
  if(isset($_GET['delete_acount'])){
   
    echo $user_id;
    $delete_user="DELETE FROM user WHERE (User_id=$user_id)";
    $result_delete=mysqli_query($con,$delete_user);
    if($result_delete){
        echo'<script>window.open("login.php","_self")</script>';
    }else{
        die(mysqli_error($con));
    }
}
}


?>






