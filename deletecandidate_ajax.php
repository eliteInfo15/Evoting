<?php 
require 'db.php';

$id=$_POST["cnd_id"];

$qry="delete from candidate where candidate_id='".$id."' ";
 
 $rs=mysqli_query($conn,$qry);

echo $rs;
 ?>