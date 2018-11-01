<?php 
require 'db.php';
$voter_id=$_POST["voter_id"];
              $voter_name=$_POST["voter_name"];
               $voter_mail=$_POST["voter_mail"];
                $voter_address=$_POST["voter_address"];
                 $voter_phone=$_POST["voter_phone"];
                  
                    $voter_gender=$_POST["voter_gender"];

                      



                



                    $qry="update voter set voter_name='".$voter_name."',voter_phone='".$voter_phone."', voter_email='".$voter_mail."',voter_gender='".$voter_gender."',voter_address='".$voter_address."' where voter_id='".$voter_id."' ";
                  $rs= mysqli_query($conn,$qry);
                  
    echo $qry;

 ?>