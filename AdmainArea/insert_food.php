 <?php
  include('../Connect Database/connect.php');
 ?>




<?php
      if(isset($_POST['insert_food'])){


        $food_name=$_POST['food_name'];
        $food_description=$_POST['description'];
        $food_keywords=$_POST['keywords'];
        $food_country=$_POST['food_country'];
        $type_food=$_POST['type_food'];
        $price=$_POST['price'];

        #img 
        $food_img1=$_FILES['food_img1']['name'];
        $food_img2=$_FILES['food_img2']['name'];
        
        $temp_img1=$_FILES['food_img1']['name'];
        $temp_img2=$_FILES['food_img2']['name'];
                        

        if((empty($food_name) or empty($food_description) or empty($food_keywords) or empty($food_country) or empty($type_food) or empty($price) or empty($food_img1) or empty($temp_img2))){
            echo'<script>alert("Please Fill All Form")</script>';
            exit();
        }

        else{
            move_uploaded_file($temp_img1,"./food_image/$food_img1");
            move_uploaded_file($temp_img2,"./food_image/$food_img2");

            $insert="INSERT INTO food (Food_name,Food_description,Food_keywords,country_name,type_name,Food_price,Food_image1,Food_image2,date)

            VALUES ('$food_name','$food_description','$food_keywords','$food_country','$type_food','$price','$food_img1','$food_img2',Now())";

            $result=mysqli_query($con,$insert);
            if($result){
                echo'<script>alert("Insert Food Successfully :) ")</script>';
                echo "<script>window.open('admain.php?insert_food','_self')</script>";
            }else{
                die(mysqli_error($result));
            }
        }
      }
    



?>




    <form class="border border-1 p-2" action="" method="post" enctype="multipart/form-data">
        <!--Name-->
        <div class="form-outline  mt-4 mb-4 ">
            <label for="food_name" class="fs-4 form-label">Food Name:</label>
            <input type="text" name="food_name" id="food_name"
            class="form-control" autocomplete="off" required="required" placeholder="Enter Food Name.." >
        </div>

        <!--description-->
        <div class="form-outline mt-4 mb-4">
            <label for="description" class="fs-4 form-label">Description:</label>
            <input type="text" name="description" id="description" 
            class="form-control" autocomplete="off" required="required" placeholder="Enter Food Description..">
        </div>


        <div class="form-outline mt-4 mb-4">
            <label for="keywords" class="fs-4 form-label">Keywords:</label>
            <input type="text" name="keywords" id="keywords" 
            class="form-control" autocomplete="off" required="required" placeholder="Enter Food Keywords..">
        </div>

        <!--select country-->
        <div class="form-outline mt-4 mb-4">
            <select name="food_country" class="form-select">

                <option>Select Food Country</option>

                <?php
                $select_country="SELECT * FROM country";
                $result_country=mysqli_query($con,$select_country);
                $numrow=mysqli_num_rows($result_country);
                if($numrow>0){
                    while($row_country=mysqli_fetch_assoc($result_country)){
                        $country_id=$row_country['id'];
                        $country_name=$row_country['Country_name'];
                        echo'<option value='.$country_name.'>'.$country_name.'</option>';
                    }
                }
            ?>
              
               
    </select>
        </div>
        
        <!--select type-food-->
        <div class="form-outline mt-4 mb-4">
            <select name="type_food" class="form-select">
                <option>Select Type Food </option>
                
                <?php
                        $select_type="SELECT * FROM typefood";
                        $result_type=mysqli_query($con,$select_type);
                        $numrow2=mysqli_num_rows($result_type);
                        if($numrow2>0){
                            while($row_type=mysqli_fetch_assoc($result_type)){
                                $type_id=$row_type['id'];
                                $type_name=$row_type['Type_name'];
                                echo' <option value='.$type_name.'>'.$type_name.'</option>';
                            }
                        }


                ?>
                
               
    </select>
        </div>
            <!--price-->
        <div class="form-outline mt-4 mb-4 ">
            <label for="price" class="fs-4 form-label">Price:</label>
            <input type="text" name="price" id="price" 
            class="form-control" autocomplete="off" required="required" placeholder="Enter Food Price..">
        </div>

        <!--img1-->

        <div class="form-outline mt-4 mb-4 ">
            <label for="food_img1" class="fs-4 form-label">First Image Food</label>
            <input type="file" name="food_img1" id="food_img1" class="form-control" required="required" >
        </div>
        <!--img1-->
        <div class="form-outline mt-4 mb-4">
            <label for="food_img2" class="fs-4 form-label">Secoand Image Food</label>
            <input type="file" name="food_img2" id="food_img2" class="form-control" required="required" >
        </div>
        

        <div class="mt-3 mb-2 ">
            <input class=" w-100 btn btn-warning" type="submit" name="insert_food" value="Insert Food">
        </div>
    

    </form>
