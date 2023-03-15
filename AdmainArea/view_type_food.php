<?php
include('../Connect Database/connect.php');

?>
<?php 
$allselect="SELECT * FROM typefood";
$check=mysqli_query($con,$allselect);
$numrow3=mysqli_num_rows($check);
if($numrow3>0){
  
echo'
<table class="table text-center table-warning table-bordered">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Type_Food</th>
      <th>Option</th>
   
    </tr>
  </thead>
  ';
}
  ?>
  <tbody class="table-group-divider">

  <?php
  $select="SELECT * From typefood";
  $result=mysqli_query($con,$select);
  $numrow=mysqli_num_rows($result);
  if($numrow>0){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $type_name=$row['Type_name'];
        echo'
        <tr>
        <td>'.$id.'</td>
        <td>'.$type_name.'</td>
        <td><a href="delete.php?type_id='.$id.'"><button  type="button" class="btn btn-danger">Delete</button><a></td>
        </tr>

        ';
    }
  }
  

    
 ?>
  </tbody>
</table>

