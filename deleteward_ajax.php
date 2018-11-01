<?php 
require 'db.php';

$id=$_POST["ward_id"];

$qry="delete from ward where ward_id='".$id."' ";
 
 $rs=mysqli_query($conn,$qry);

echo $rs;
 ?>