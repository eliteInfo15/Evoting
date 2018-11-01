<?php 
require 'db.php';

     $pid=$_POST["party_id"];
      $pname=$_POST["party_name"];
      $status=10;
$qry_id="select * from party where party_id='".$pid."' or party_name='".$pname."'";
                  $rsid=mysqli_query($conn,$qry_id);
                     $n_id=mysqli_num_rows($rsid);
                     if ($n_id>0) {
                     	$status=20;
                     	
                     }
                     if ($status==10) {
                     	$qry="insert into party values('".$pid."','".$pname."');";
         $rs=mysqli_query($conn,$qry);
echo $rs;
                     }
                     else{
                     	echo $status;
                     }
        
 ?>