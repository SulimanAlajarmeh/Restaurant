<?php

include('../Connect Database/connect.php');

if(isset($_GET['update_food'])){
    $food_id_update=$_GET['update_food'];
    $select_food="SELECT * FROM food WHERE (Food_id=$food_id_update)";
    $result_food=mysqli_query($con,$select_food);
    $number_food=mysqli_num_rows($result_food);
    if($number_food>0){
        $row_food=mysqli_fetch_assoc($result_food);
        $food_name=$row_food['Food_name'];
        $food_description=$row_food['Food_description'];
        $food_keywords=$row_food['Food_keywords'];
        $country_name=$row_food['country_name'];
        $type_name=$row_food['type_name'];
        $food_price=$row_food['Food_price'];
        $food_image1=$row_food['Food_image1'];
        $food_image2=$row_food['Food_image2'];
    }

    if(isset($_POST['Update_food'])){
        $update_name=$_POST['food_name'];
        $update_description=$_POST['description'];
        $update_kewords=$_POST['keywords'];
        $update_country=$_POST['food_country'];
        $update_type=$_POST['type_food'];
        $update_price=$_POST['price'];

        $update_image1=$_FILES['food_img1']['name'];
        $update_image2=$_FILES['food_img2']['name'];

        $temp_image1=$_FILES['food_img1']['name'];
        $temp_image2=$_FILES['food_img2']['name'];

        move_uploaded_file($temp_image1,"../img/$update_image1");
        move_uploaded_file($temp_image2,"../img/$update_image2");

        if(!empty($update_name) OR !empty($update_description) OR !empty($update_kewords) OR !empty($update_country) OR !empty($update_type) OR !empty($update_price) OR !empty($update_image1) OR !empty($update_image2) ){


            $update="UPDATE food SET Food_name='$update_name',Food_description='$update_description',Food_keywords='$update_kewords',country_name='$update_country',type_name='$update_type',Food_price='$update_price',Food_image1='$update_image1',Food_image2='$update_image2' WHERE Food_id=$food_id_update";
            $result_update=mysqli_query($con,$update);
            if($result_update){
                echo '<script>alert("Update Done ")</script>';
                echo '<script>window.open("admain.php?view_food","_self")</script>';
            }












        }else{
            echo '<script>alert("Please Fill All Information ")</script>';
        }
        
    }
}


?>

<form class="border border-warning border-1 p-2 mb-3" style="border-radius:8px;" action="" method="post" enctype="multipart/form-data">
        <!--Name-->
        <div class="form-outline  mt-4 mb-4 ">
            <label for="food_name" class="fs-4 form-label">Food Name:</label>
            <input type="text" name="food_name" id="food_name"
            class="form-control" autocomplete="off" required="required" placeholder="<?php echo $food_name; ?>" >
        </div>

        <!--description-->
        <div class="form-outline mt-4 mb-4">
            <label for="description" class="fs-4 form-label">Description:</label>
            <input type="text" name="description" id="description" 
            class="form-control" autocomplete="off" required="required" placeholder="<?php echo $food_description; ?>">
        </div>


        <div class="form-outline mt-4 mb-4">
            <label for="keywords" class="fs-4 form-label">Keywords:</label>
            <input type="text" name="keywords" id="keywords" 
            class="form-control" autocomplete="off" required="required" placeholder="<?php echo $food_keywords; ?>">
        </div>

        <!--select country-->
        <div class="form-outline mt-4 mb-4">
            <select name="food_country" class="form-select" required="required">

            
                
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
            <select name="type_food" class="form-select" required="required" placeholder="<?php echo$type_name;?>">
                
                
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
            class="form-control" autocomplete="off" required="required" placeholder="<?php echo $food_price; ?>">
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
            <input class=" w-100 btn btn-warning" type="submit" name="Update_food" value="Update Food">
        </div>
    

    </form>
