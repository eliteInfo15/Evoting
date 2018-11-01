<?php 



require 'db.php';

$id=$_POST["pos_id"];

$qry="delete from position where position_id='".$id."' ";
 
 $rs=mysqli_query($conn,$qry);

echo $rs;
 ?>



 ?>