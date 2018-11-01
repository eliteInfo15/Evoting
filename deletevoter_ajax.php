<?php 
require 'db.php';

$id=$_POST["voter_id"];

$qry="delete from voter where voter_id='".$id."' ";
 
 $rs=mysqli_query($conn,$qry);

echo $rs;
 ?>