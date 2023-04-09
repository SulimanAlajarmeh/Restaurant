<?php
include('../Connect Database/connect.php');

if(isset($_POST['submit_country'])){

  $country_name=$_POST['country_name'];
  if(!empty($country_name)){
    $select="SELECT * FROM country WHERE (Country_name='$country_name')";
    $result=mysqli_query($con,$select);
    $numrow=mysqli_num_rows($result);
    if($numrow>0){
      echo'<script>alert("This Country Name Is Existing :)")</script>';

    }
    else{
          $insert="INSERT INTO country (Country_name) VALUES ('$country_name')";
          $result2=mysqli_query($con,$insert);
          if($result2){
            echo'<script>alert("Insert Country Name Sucessfully :)")</script>';
            echo "<script>window.open('admain.php?insert_food_country','_self')</script>";
          }
          else{
            die(mysqli_error($con));
          }

    }
  }
}



?>



<form action="" method="post">
<div class="input-group w-90 h-80 mb-3 ">
  <span class="input-group-text bg-warning  "><i class="text-light fa-solid fa-font-awesome"></i></span>
  
    <input type="text" class="form-control " name="country_name"  placeholder="Insert Country Food.....">

</div>


<div class="input-group w-90 mb-3 ">

    <input class="form-control bg-warning  " type="submit"  name="submit_country" value="Submit">
   
</div>

</form>