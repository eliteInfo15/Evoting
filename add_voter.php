<?php 


         session_start(); 
  require 'db.php';          
             $voter_id=$_POST["voter_id"];
             
             
              $voter_name=$_POST["voter_name"];
              $voter_password=$_POST["voter_password"];
               $voter_dob=$_POST["voter_dob"];
               $voter_email=$_POST["voter_email"];
                $voter_address=$_POST["voter_address"];
                 $voter_phone=$_POST["voter_phone"];
                  $voter_gender=$_POST["group2"];
                      $voter_ward=$_POST["voter_ward"];
                      
                 
                  $tmp= $_FILES['image_file']['tmp_name'];
                    $loc="upload/".$_FILES['image_file']['name'];
                    move_uploaded_file($tmp, $loc);
                   $qry="insert into voter values('".$voter_id."','".$voter_name."','".$voter_password."','".$voter_dob."','".$voter_phone."','".$voter_email."','".$voter_gender."','".$voter_address."','".$loc."','".$voter_ward."','Not Voted')";
                   $_SESSION["qq"]=$qry;
                  $rs= mysqli_query($conn,$qry);
                  
             echo $rs;
                 
                    
              
        
           
             ?>
