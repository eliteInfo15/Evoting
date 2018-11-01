<?php 
require 'db.php';

     $pid=$_POST["ward_id"];
      $pname=$_POST["ward_name"];
      $status=10;
$qry_id="select * from ward where ward_id='".$pid."' or ward_name='".$pname."'";
                  $rsid=mysqli_query($conn,$qry_id);
                     $n_id=mysqli_num_rows($rsid);
                     if ($n_id>0) {
                     	$status=20;
                     	
                     }
         if ($status==10) {
                     	$qry="insert into ward values('".$pid."','".$pname."');";
         $rs=mysqli_query($conn,$qry);
echo $rs;
                     }
                     else{
                     	echo $status;
                     }
        
 ?>