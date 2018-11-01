<?php 
require 'db.php';
$status=10;
     $pid=$_POST["pos_id"];
     $qry_id="select * from position where position_id='".$pid."'";
                  $rsid=mysqli_query($conn,$qry_id);
                     $n_id=mysqli_num_rows($rsid);
                     if ($n_id>0) {
                     	$status=20;
                     	
                     }
      $pname=$_POST["pos_name"];
      if ($status==10) {
      	$qry="insert into position values('".$pid."','".$pname."');";
         $rs=mysqli_query($conn,$qry);
echo $rs;
      }
      else{
      	echo $status;
      }
        
 ?>