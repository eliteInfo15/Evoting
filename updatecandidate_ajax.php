<?php 
require 'db.php';
$cnd_id=$_POST["cnd_id"];
              $cnd_name=$_POST["cnd_name"];
               $cnd_mail=$_POST["cnd_mail"];
                $cnd_address=$_POST["cnd_address"];
                 $cnd_phone=$_POST["cnd_phone"];
                  
                    $cnd_gender=$_POST["cnd_gender"];
$cnd_party=$_POST["cnd_party"];
                      



                



                    $qry="update candidate set candidate_name='".$cnd_name."',candidate_phone='".$cnd_phone."', candidate_email='".$cnd_mail."',candidate_gender='".$cnd_gender."',candidate_address='".$cnd_address."',party_id='".$party_id."' where candidate_id='".$cnd_id."' ";
                  $rs= mysqli_query($conn,$qry);
                  
    echo $qry;

 ?>