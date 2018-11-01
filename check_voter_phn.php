<?php 

require 'db.php';


 $qry_phn="select * from voter where voter_phone='".$_POST["voter_phone"]."'";
                  $rsphn=mysqli_query($conn,$qry_phn);
                     $n_phn=mysqli_num_rows($rsphn);
                     $qry_id="select * from voter where voter_id='".$_POST["voter_id"]."'";
                  $rsid=mysqli_query($conn,$qry_id);
                     $n_id=mysqli_num_rows($rsid);
                     
                     if ($n_id>0) {
                      echo 2;
                      
                     }
if ($n_phn>0) {
	echo 1;
}
else{
	echo 0;
}

 ?>