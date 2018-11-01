<?php 
require 'db.php';
$pos_id=$_POST["pos_id"];
              $pos_name=$_POST["pos_name"];
              
$qry="update position set position_name='".$pos_name."' where position_id='".$pos_id."' ";
                  $rs= mysqli_query($conn,$qry);
                  
    echo $qry;

 ?>