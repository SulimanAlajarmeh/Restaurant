<?php
include('../Connect Database/connect.php');
?>
<?php
$allselect="SELECT * FROM country";
$check=mysqli_query($con,$allselect);
$numrow3=mysqli_num_rows($check);
if($numrow3>0){
  

echo'
<table class="table text-center table-warning table-bordered">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Country_name</th>
      <th>Option</th>
    </tr>
  </thead>
  <?php
  ';}?>
  <?php
 
$select="SELECT * FROM country";
$result=mysqli_query($con,$select);
$numrow=mysqli_num_rows($result);
if($numrow>0){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $country_name=$row['Country_name'];

            echo'
            <tbody>
            <tr>
              <td>'.$id.'</td>
              <td>'.$country_name.'</td>
              <td><a href="delete.php?country_id='.$id.'"><i class="fa-solid fa-trash text-danger"></i><a></td>
            </tr>
           
         ';

         
        }
}




?>
 </tbody>
        </table>

  
 
