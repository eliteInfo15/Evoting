<?php 
require 'db.php';
$party_id=$_POST["party_id"];
              $party_name=$_POST["party_name"];
              
$qry="update party set party_name='".$party_name."' where party_id='".$party_id."' ";
                  $rs= mysqli_query($conn,$qry);
                  
    echo $qry;

 ?>