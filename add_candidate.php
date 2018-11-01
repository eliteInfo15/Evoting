<?php 


 $cnd_id=$_POST["cnd_id"];
              $cnd_name=$_POST["cnd_name"];
               $cnd_mail=$_POST["cnd_mail"];
                $cnd_address=$_POST["cnd_address"];
                 $cnd_phone=$_POST["cnd_phone"];
                  
                    $cnd_gender=$_POST["group2"];

                      



                  $loc = "upload/".$_FILES["image_file"]["name"];


// Check if image file is a actual image or fake image

    
  move_uploaded_file($_FILES["image_file"]["tmp_name"], $loc);




                    $qry="insert into candidate values('".$cnd_id."','".$cnd_name."','".$cnd_phone."','".$cnd_mail."','".$cnd_gender."','".$cnd_address."','".$loc."')";
                   mysqli_query($conn,$qry);
                  
             echo $qry;
        //echo("<script>location.href = 'manage_candidate.php'</script>");
           

 ?>