<?php
 include('../Connect Database/connect.php');

 if(isset($_POST['submit_type'])){
  $type_food=$_POST['type_food'];

  if(!empty($type_food)){

  $select="SELECT * FROM typefood WHERE (Type_name='$type_food')";
  $result=mysqli_query($con,$select);
  $numrow=mysqli_num_rows($result);
   
  if($numrow>0){
    echo'<script> alert("This Type Food Is Existing :) ") </script>';
  }
  else{
         $insert="INSERT INTO typefood (Type_name) VALUES ('$type_food') ";
         $result2=mysqli_query($con,$insert);
         if($result2){
          echo'<script> alert("Type Food Insert Succesfully")</script>';
          echo "<script>window.open('admain.php?insert_type_food','_self')</script>";
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
  <span class="input-group-text bg-warning  "><i class="text-light fa-solid fa-table-list"></i></span>
  
    <input type="text" class="form-control " name="type_food"  placeholder="Insert Type Food.....">

</div>


<div class="input-group w-90 mb-3 ">

    <input class="form-control bg-warning text-light  " type="submit"  name="submit_type" value="Submit">
   
</div>

</form>