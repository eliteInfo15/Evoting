<?php 
require 'db.php';

$id=$_POST["party_id"];

$qry="delete from party where party_id='".$id."' ";
 
 $rs=mysqli_query($conn,$qry);

echo $rs;
 ?>