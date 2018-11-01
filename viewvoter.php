<?php 
require 'db.php';
if($_GET['id']!="" )
{
	$id=$_GET['id'];
	
  $qry="select * from voter where voter_id='".$id."'";
        $data=mysqli_fetch_array(mysqli_query($conn,$qry));
}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welcome to online voting</title>
    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap <link href="css/compiled.min.css" rel="stylesheet"> -->
    <link href="css/mdb1.min.css" rel="stylesheet">
     <link href="css/compiled.min.css" rel="stylesheet">
   


    <!-- Your custom styles (optional) -->
   <style type="text/css">

body {
padding-right:0px !important;
margin-right:0px !important;
}
       .chip.chip-md {
    height: 42px;
    line-height: 42px;
    border-radius: 21px;
}
.intro-text{
    margin-top: 35px;
    margin-bottom: 35px;
}
.classic-tabs li a.active {
    border-bottom: 4px solid;
    color: rgb(25,118,210);
    font-size:17px;
}
.classic-tabs li a {
 
    color: rgb(66,66,66);
    font-size:17px;
}
.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -48px;
  position: relative;
  z-index: 2;
  font-size: 20px;
}

#image-preview {
  width: 400px;
  height: 400px;
  position: relative;
  overflow: hidden;
  background-color: #ffffff;
  color: #ecf0f1;
}
#image-preview input {
  line-height: 200px;
  font-size: 200px;
  position: absolute;
  opacity: 0;
  z-index: 10;
}
#image-preview label {
    color: white;
  position: absolute;
  z-index: 5;
  opacity: 0.8;
  cursor: pointer;
  background-color: black;
  width: 200px;
  height: 50px;
  font-size: 20px;
  line-height: 50px;
  text-transform: uppercase;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  text-align: center;
}
small{
    color: red;
    margin-left: 3rem;
}
.md-form .prefix~label {
    margin-left: 4rem;
}


#chng_pwd small{
  color: red ;
    margin-left: 0rem ;
}
#chng_pwd label{
  margin-left: 1rem !important;
}

   </style>
</head>
<body>




<!--Form without header-->

    <div class="card" id="card" style="box-shadow: none">

        <div class="card-body">

            <!--Header-->
            

            <!--Body-->
            <form class="" method="post" id="new_candi" enctype="multipart/form-data">

             
            <div class="md-form">
              <div class="col-md-8 inputGroupContainer">
            <i class="fa fa-user prefix"></i>
                <input type="text" id="voter_id" class="form-control" readonly required name="cnd_id" value="<?php echo $data['voter_id'] ?>">
                <label for="voter_id">voter id</label>
              </div>
            </div>
            
            <div class="md-form">
              <div class="col-md-8 inputGroupContainer">
            <i class="fa fa-user prefix"></i>
                <input type="text" id="voter_name" class="form-control" readonly required name="cnd_name" value="<?php echo $data['voter_name'] ?>">
                <label for="voter_name">voter name</label>
              </div>
            </div>
             
         <div class="md-form">
          <div class="col-md-8 inputGroupContainer">
              <i class="fa fa-phone prefix"></i>
                <input type="text" id="voter_phone" class="form-control" readonly required name="cnd_phone" value="<?php echo $data['voter_phone']?>">
                <label for="voter_phone">voter Phone</label>
              </div>
            </div>
             <div class="md-form">
              <div class="col-md-8 inputGroupContainer">
              <i class="fa fa-envelope prefix"></i>
                <input type="text" id="voter_email" class="form-control" readonly required name="cnd_mail" value="<?php echo $data['voter_email'] ?>">
                <label for="voter_email">voter Email</label>
              </div>
            </div>
           <?php 
                      $gender=$data["voter_gender"];
            ?>
            <div class="md-form">
              <div class="col-md-8 inputGroupContainer">
                <?php 

                    
                 ?>
                <input name="group2" type="radio" class="with-gap" id="malerb" value="male" <?php if ($gender=="male") {
                     echo "checked";
                    }  ?> >
    <label for="malerb">Male </label>
    <input name="group2" type="radio" class="with-gap" id="femalerb" value="female"  <?php if ($gender=="female") {
                     echo "checked";
                    }  ?>>
    <label for="femalerb">Female  </label>
  </div>
            </div>
<div class="md-form pb-3" style="margin-bottom: 0">
  <div class="col-md-8 inputGroupContainer">
               <i class="fa fa-home prefix"></i>  
    <textarea type="text" id="form8" class="md-textarea" name="cnd_address" readonly><?php 
      echo $data["voter_address"];
     ?></textarea>
    <label for="form8">voter address</label>
              </div>  
            </div>
            
            
            </form>
            

        </div>

        <!--Footer-->
       

    </div>
    <!--/Form without header-->










 <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript <script type="text/javascript" src="js/compiled.min.js"></script>-->
    <script type="text/javascript" src="js/mdb.min.js"></script>
  
</body>
</html>