<?php 
require 'db.php';


 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welcome to Digital voting</title>
    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap <link href="css/compiled.min.css" rel="stylesheet"> -->
    <link href="css/mdb1.min.css" rel="stylesheet">
     <link href="css/compiled.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js">
    </script>


    <!-- Your custom styles (optional) -->
   <style type="text/css">
 .select-wrapper {
    position: relative;
    margin-left: 3rem;
}
.dropdown-content li>span {
    font-size: 16px;
    color: #26a69a;
    display: block;
    line-height: 22px;
    padding: 14px 16px;
}
li:hover{
  //background-color: #eee;
}
ul{
  //box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2);
}
.select-wrapper span.caret {
    color: initial;
    position: absolute;
    right: 0;
    top: 0;
    bottom: 0;
    height: 10px;
    margin: auto 0;
    font-size: 10px;
    line-height: 10px;
}
.select-wrapper input.select-dropdown {
    position: relative;
    cursor: pointer;
    background-color: transparent;
    border: none;
    border-bottom: 1px solid #9e9e9e;
    outline: none;
    height: 3rem;
    line-height: 3rem;
    width: 100%;
    font-size: 1rem;
    margin: 0 0 20px 0;
    padding: 0;
    display: block;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
ul:not(.browser-default) {
    padding-left: 0;
    list-style-type: none;
}
.dropdown-content {
    background-color: #fff;
    margin: 0;
    display: none;
    min-width: 100px;
    max-height: 650px;
    overflow-y: auto;
    opacity: 0;
    position: absolute;
    z-index: 999;
    will-change: width, height;
}
select {
    background-color: rgba(255,255,255,0.9);
    width: 100%;
    padding: 5px;
    border: 1px solid #f2f2f2;
    border-radius: 2px;
    height: 3rem;
}
select {
    display: none;
}
.select-dropdown li.disabled, .select-dropdown li.disabled>span, .select-dropdown li.optgroup {
    color: rgba(0,0,0,0.3);
    background-color: transparent;
}
ul:not(.browser-default)>li {
    list-style-type: none;
}
.dropdown-content li {
    clear: both;
    color: rgba(0,0,0,0.87);
    cursor: pointer;
    min-height: 50px;
    line-height: 1.5rem;
    width: 100%;
    text-align: left;
    text-transform: none;
}

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

<body class="fixed-sn white-skin" data-gr-c-s-loaded="true" style="background:#eee;">

    <!--Main Navigation-->
    <header>

                <!-- Navbar -->
        <nav class="mb-1 navbar navbar-expand-lg z-depth-2 navbar-fixed-top">
                <a class="navbar-brand" href="#" style="color: black;"><img src="img/vote4.png">  Digital voting</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars" style="color: black;"></i>
                        </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="adminhome.php" class="nav-link js-scroll-trigger">
                           <div class="chip btn " style="color: rgba(0,0,0,.6) !important;">
    <i class="fa fa-dashboard" style="font-size: 20px"></i> Dashboard
</div>
</a>
                        </li>
                         <li class="nav-item active"><a href="adminhome.php#dash2"  class="nav-link js-scroll-trigger">
                           <div class="chip btn" style="color: rgba(0,0,0,.6) !important;">
    <i class="fa fa-pie-chart" style="font-size: 20px"></i> Analytics
</div></a>
                        </li>
                        <li class="nav-item active"><a href="" class="nav-link">
                           <div class="chip btn" style="color: rgba(0,0,0,.6) !important;">
    <i class="fa fa-sign-out" style="font-size: 20px"></i> Logout
</div></a>
                        </li>
                        
                        
                    </ul>
                </div>
            </nav>

    </header>
    <!--Main Navigation-->
    

<div class="container" style="margin-top: 40px; margin-bottom: 40px">
<div class="tabs-wrapper"> 
    <ul class="nav classic-tabs tabs-white nav-justified" role="tablist">
        <li class="nav-item" style="margin-left: 0">
            <a class="nav-link waves-light active" data-toggle="tab" href="#panel51" role="tab"><i class="fa fa-eye" aria-hidden="true" style="font-size: 30px;vertical-align: middle;"></i> &nbsp;&nbsp;View Voters</a>
        </li>
        <li class="nav-item">
            <a class="nav-link waves-light" data-toggle="tab" href="#panel52" role="tab"><i class="fa fa-user-plus" aria-hidden="true" style="font-size: 30px;vertical-align: middle;"></i> &nbsp;&nbsp;Add Voter</a>
        </li>
       
        
    </ul>
</div>

<!-- Tab panels -->
<div class="tab-content card">

    <!--Panel 1-->
    <div class="tab-pane fade in show active" id="panel51" role="tabpanel">
        <div class="card" style="//margin: 0px auto; //width: 50%;box-shadow: none">

                <!--Card image-->
        <?php 

             $select_qry="select * from voter;";
            $result_data= mysqli_query($conn,$select_qry);
         ?>

        <!--Card content-->
        <div class="card-body">
            <!--Title-->
            <table class="table">"
            
                <!--Table head-->
                <thead style="background: #0D47A1" align="center">
                    <tr class="text-white">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Mobile</th>
                       
                        <th>Options</th>
                    </tr>
                </thead>
                <!--Table head-->
            
                <!--Table body-->
                <tbody align="center">
                  <?php while ($row=mysqli_fetch_assoc($result_data)) {
                    ?>
                      
                       <tr>
                        <th scope="row"><?php echo $row["voter_id"]; ?></th>
                        <td><?php echo $row["voter_name"]; ?></td>
                        <td><?php echo $row["voter_phone"]; ?></td>
                        
                        <td>
                          <a href="" data-toggle="modal" data-target="#view_modal_voters"  class="btn btn-primary btn-sm" onclick="modal_view_voters('View','<?php echo $row['voter_id'];?>')"><i class="fa fa-eye"></i> View</a>

              <a href="" data-toggle="modal" data-target="#update_modal_voters"  class="btn btn-success btn-sm" onclick="modal_update_voters('Update','<?php echo $row['voter_id'];?>')"><i class="fa fa-pencil"></i> Edit</a>
              
              <a  href="#" data-toggle="modal" data-target="#centralModalDanger" class="btn btn-danger btn-sm" onclick="modal_delete_voters('Update','<?php echo $row['voter_id'];?>')"  ><i class="fa fa-times"></i> Remove</a></td>
        </tr>

        <?php
      

      } 


      ?>
       
        
    </tbody>
    <!--Table body-->

</table>

<!--Table-->
        </div>

    </div>

    </div>
    <!--/.Panel 1-->



    <!--Panel 2-->
    <div class="tab-pane fade" id="panel52" role="tabpanel">
       <section class="form-elegant">

    <!--Form without header-->

    <div class="card" id="card" style="box-shadow: none">

        <div class="card-body">

            <!--Header-->
            

            <!--Body-->
            <form class="" method="post" id="add_voter" enctype="multipart/form-data">

             
            <div class="md-form">
              <div class="col-md-8 inputGroupContainer">
            <i class="fa fa-user prefix"></i>

                <input type="text" id="voter_id" class="form-control" required name="voter_id">
                <label for="voter_id">Voter id</label>

            </div>
            </div>
            <div class="md-form">
              <div class="col-md-8 inputGroupContainer">
            <i class="fa fa-user prefix"></i>
                <input type="text" id="voter_name" class="form-control" required name="voter_name">
                <label for="voter_name">Voter name</label>
            </div>
             </div>
              <div class="md-form">
              <div class="col-md-8 inputGroupContainer">
            <i class="fa fa-user prefix"></i>
                <input type="password" id="voter_password" class="form-control" required name="voter_password">
                <label for="voter_password">Voter password</label>
            </div>
             </div>
             <div class="md-form" style="margin-top: 34px">
              <div class="col-md-8 inputGroupContainer">
     <i class="fa fa-calendar prefix"></i>       
    <input  type="date" name="voter_dob" id="voter_dob">
    <label for="date-picker-example" style="position: absolute;top: -17px">Date of birth</label>
</div>
</div>
         <div class="md-form">
          <div class="col-md-8 inputGroupContainer">
              <i class="fa fa-phone prefix"></i>
                <input type="text" id="voter_phone" class="form-control" required name="voter_phone">
                <label for="voter_phone">Voter Phone</label>
            </div>
          </div>
          <div class="md-form">
               <div class="col-md-8 inputGroupContainer">
              <i class="fa fa-mortar-board prefix"></i>
             <div class="select-wrapper">
<span class="caret">▼</span>
<input type="text" class="select-dropdown" readonly="true" data-activates="select-options-d10efa92-7e52-007b-ec3a-57361a26ef36" value="Choose your option"><ul id="select-options-d10efa92-7e52-007b-ec3a-57361a26ef36" class="dropdown-content select-dropdown ">
  <li class="disabled "><span>Choose ward</span></li>
 

<?php 
       $qry="select * from ward;";
       $rs=mysqli_query($conn,$qry);

        while($data=mysqli_fetch_assoc($rs)){
          ?>

<li class=""><span><?php echo $data["ward_name"]; ?></span></li>

          <?php
        }
   ?>

     

</ul>
<select data-select-id="d10efa92-7e52-007b-ec3a-57361a26ef36" class="initialized" name="voter_ward">
                  <option value="" disabled="" selected="">Choose Ward</option>
                
                          
        <?php 
                            $qry="select * from ward;";
       $rs=mysqli_query($conn,$qry);

                          while ($data=mysqli_fetch_assoc($rs)) {
                           ?>
                          
        <option value="<?php echo $data["ward_id"]; ?>"><?php echo $data["ward_name"]; ?></option>
                           <?php

                          }

                  ?>
                  
                </select></div>
                
            </div>
          </div>
             <div class="md-form">
              <div class="col-md-8 inputGroupContainer">
              <i class="fa fa-envelope prefix"></i>
                <input type="text" id="voter_email" class="form-control" required name="voter_email">
                <label for="voter_email">Voter Email</label>
            </div>
           </div>
            <div class="md-form">
              <div class="col-md-8 inputGroupContainer">
                <input name="group2" type="radio" class="with-gap" id="malerb" value="male">
    <label for="malerb">Male</label>
    <input name="group2" type="radio" class="with-gap" id="femalerb" value="female">
    <label for="femalerb">Female</label>
            </div>
          </div>
<div class="md-form pb-3" style="margin-bottom: 0">
  <div class="col-md-8 inputGroupContainer">
               <i class="fa fa-home prefix"></i>  
    <textarea type="text" id="form8" class="md-textarea" name="voter_address"></textarea>
    <label for="form8">Voter address</label>
                
            </div>
          </div>

         <div class="md-form">
              <div class="col-md-8 inputGroupContainer">
                 <div id="image-preview">
  <label for="image-upload" id="image-label">Choose File</label>
  <input type="file" name="image_file" id="image-upload" />
</div>
             </div>
</div>    
            <div class="  col-lg-4 text-center">
                <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-2" style="margin-right: auto;margin-left: auto" name="Register_btn">Add Voter</button>
            </div>
            </form>
            

                

        </div>

        <!--Footer-->
        

    </div>
    <!--/Form without header-->

</section>

       
    </div>
    <!--/.Panel 2-->



   

</div>
</div>

        <!--Footer-->
    <footer class="page-footer  center-on-small-only" style="background: #eee;">
        <div class="footer-copyright primary-color-dark" id="footer_content">
        <div class="container-fluid">
            © 2018 Copyright:  <a>Digital Voting System</a> 

        </div>
    </div>
    </footer>
    <!--/.Footer-->

<!-- Central Modal Medium Danger -->
  <div class="modal fade" id="centralModalDanger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-danger" role="document">
      <!--Content-->
      <div class="modal-content">
          <!--Header-->
          <div class="modal-header">
              <p class="heading lead">Confirmation</p>
  
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="white-text">&times;</span>
              </button>
          </div>
  
          <!--Body-->
          <div class="modal-body">
              <div class="text-center">
                  <i class="fa fa-exclamation-circle fa-4x mb-3 animated rotateIn"></i>
                  <p>Do you really want to remove voter?</p>
              </div>
          </div>
  
          <!--Footer-->
          <div class="modal-footer justify-content-center">
               <form method="post" id="deleteForm">
              <input type="text" name="delete_voter_name" id="modal-input-delete" style="visibility: hidden;" >
              <button type="submit" name="delete_btn" class="btn btn-danger">Remove <i class="fa fa-times ml-1"></i></button>
            </form>
              <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Close</a>
          </div>
      </div>
      <!--/.Content-->
  </div>
  </div>
  <!-- Central Modal Medium Danger-->

<!-- Central Modal Medium Danger -->
  <div class="modal fade" id="centralModalDangerage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-danger" role="document">
      <!--Content-->
      <div class="modal-content">
          <!--Header-->
          <div class="modal-header">
              <p class="heading lead">Confirmation</p>
  
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="white-text">&times;</span>
              </button>
          </div>
  
          <!--Body-->
          <div class="modal-body">
              <div class="text-center">
                  <i class="fa fa-exclamation-circle fa-4x mb-3 animated rotateIn"></i>
                  <p>Voter is not 18+</p>
              </div>
          </div>
  
          <!--Footer-->
          <div class="modal-footer justify-content-center">
              
              <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Close</a>
          </div>
      </div>
      <!--/.Content-->
  </div>
  </div>

<div class="modal fade" id="update_modal_voters" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-success" role="document">
      <!--Content-->
      <div class="modal-content">
          <!--Header-->
          <div class="modal-header">
             <div id="modal-tablesLabel_question" style="color:#fff; font-size:16px;">&nbsp; </div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="white-text">&times;</span>
              </button>
          </div>
  
          <!--Body-->
          <div class="modal-body">
              <div class="text-center" id="modal-body-update">
                  
              </div>
          </div>
  
          <!--Footer-->
          
      </div>
      <!--/.Content-->
  </div>
  </div>
<div class="modal fade" id="removed_voter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-success" role="document">
      <!--Content-->
      <div class="modal-content">
          <!--Header-->
          <div class="modal-header">
             <div id="modal-tablesLabel_question" style="color:#fff; font-size:16px;">&nbsp; </div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="white-text">&times;</span>
              </button>
          </div>
  
          <!--Body-->
          <div class="modal-body">
              <div class="text-center">
                  <h3>voter removed</h3>
              </div>
          </div>
  
          <!--Footer-->
          
      </div>
      <!--/.Content-->
  </div>
  </div>
<div class="modal fade" id="view_modal_voters" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
      <!--Content-->
      <div class="modal-content">
          <!--Header-->
          <div class="modal-header">
             <div id="modal-tablesLabel_question" style="color:#fff; font-size:16px;">&nbsp; </div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="white-text">&times;</span>
              </button>
          </div>
  
          <!--Body-->
          <div class="modal-body">
              <div class="text-center" id="modal-body-voter">
                  
              </div>
          </div>
  
          <!--Footer-->
          <div class="modal-footer justify-content-center">
              
              <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">OK</a>
          </div>
      </div>
      <!--/.Content-->
  </div>
  </div>




  <!-- Central Modal Medium Danger-->
  <!-- Central Modal Medium Danger -->
  <div class="modal fade" id="centralModalDangerotp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-danger" role="document">
      <!--Content-->
      <div class="modal-content">
          <!--Header-->
          <div class="modal-header">
              <p class="heading lead">Confirmation</p>
  
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="white-text">&times;</span>
              </button>
          </div>
  
          <!--Body-->
          <div class="modal-body">
              <div class="text-center">
                  <i class="fa fa-exclamation-circle fa-4x mb-3 animated rotateIn"></i>
                  <p>Invalid OTP</p>
              </div>
          </div>
  
          <!--Footer-->
          <div class="modal-footer justify-content-center">
              
              <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Close</a>
              
              
          </div>
      </div>
      <!--/.Content-->
  </div>
  </div>
   
  <!-- Central Modal Medium Danger-->
  <div class="modal fade" id="OTPmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Enter the OTP recieved</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <h5>OTP has been sent to voter phone no.</h5>
                <form method="post" id="verify_otp_form">
                   <div class="md-form"  style="margin-top: 20px">
               <div class="col-md-8 inputGroupContainer">
            <i class="fa fa-key prefix"></i>
                <input type="text" id="voter_verify_otp" name="voter_verify_otp" class="form-control">
                <label for="voter_verify_otp">OTP HERE</label>
              </div>
              <div class="md-form" id="container_pwd" style="visibility: hidden;display: none;">
              
            </div>
            </div>
            <div class="  col-lg-4 text-center">
                <button type="submit" name="verify_otp_btn" class="btn btn-primary btn-block btn-rounded z-depth-1" style="margin-right: auto;margin-left:auto">Verify</button>
            </div>
                </form>
            </div>
            
        </div>
    </div>
</div>



<div class="modal fade" id="inserted_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-success" role="document">
      <!--Content-->
      <div class="modal-content">
          <!--Header-->
          <div class="modal-header">
              <p class="heading lead"> Success</p>
  
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="white-text">&times;</span>
              </button>
          </div>
  
          <!--Body-->
          <div class="modal-body">
              <div class="text-center">
                  <i class="fa fa-check fa-4x mb-3 animated rotateIn"></i>
                  <h2>Voter Regsitered</h2>
              </div>
          </div>
  
          <!--Footer-->
          <div class="modal-footer justify-content-center">
              
              <a href="manage_voter.php" class="btn btn-outline-success waves-effect">OK</a>
          </div>
      </div>
      <!--/.Content-->
  </div>
  </div>
    <!-- SCRIPTS -->
   
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript <script type="text/javascript" src="js/compiled.min.js"></script>-->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript" src="js/compiled.min.js"></script>
    <script type="text/javascript">
        new WOW().init();
    </script>
    <script type="text/javascript">
                   $(document).ready(function() {
    $('select').material_select();
  });
       
                </script>
     <script type="text/javascript" src="js/upload.min.js"></script>
  <script type="text/javascript">
$(document).ready(function() {
  $.uploadPreview({
    input_field: "#image-upload",   // Default: .image-upload
    preview_box: "#image-preview",  // Default: .image-preview
    label_field: "#image-label",    // Default: .image-label
    label_default: "Choose Image",   // Default: Choose File
    label_selected: "Change Image",  // Default: Change File
    no_label: false                 // Default: false
  });
});
</script>
<script type="text/javascript">
  function modal_view_voters(param1 ,param2)
{
  document.getElementById('modal-body-voter').innerHTML = 
    '<iframe id="frame1" src="viewvoter.php?id='+param2+'" width="100%" height="400" frameborder="0"></iframe>';
  document.getElementById('modal-tablesLabel_question').innerHTML = param1.replace("_"," ");
}
function modal_delete_voters(param1 ,param2)
{
  document.getElementById('modal-input-delete').value = param2;
  
  document.getElementById('modal-tablesLabel_question').innerHTML = param1.replace("_"," ");
}

function modal_update_voters(param1 ,param2)
{
  document.getElementById('modal-body-update').innerHTML = 
    '<iframe id="frame1" src="updatevoter.php?id='+param2+'" width="100%" height="400" frameborder="0"></iframe>';
  document.getElementById('modal-tablesLabel_question').innerHTML = param1.replace("_"," ");
}
</script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
<script type="text/javascript">
          $(document).ready(function() {
    $('#deleteForm').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
          submitHandler: function(validator, form, submitButton) {
               var voter_id= $('#modal-input-delete').val();

 /* GET THE VALUE OF THE SELECTED DATA */
      var dataString = "voter_id="+voter_id; /* STORE THAT TO A DATA STRING */

      $.ajax({ /* THEN THE AJAX CALL */
        type: "POST", /* TYPE OF METHOD TO USE TO PASS THE DATA */
        url: "deletevoter_ajax.php", /* PAGE WHERE WE WILL PASS THE DATA */
        data: dataString, /* THE DATA WE WILL BE PASSING */
        success: function(result){
             if(result) {
              //$('#update_modal_candidates').modal('hide');
              //$('#updated_modal').modal('show');
             $('#centralModalDanger').modal('hide');
             
             location.href="manage_voter.php";
             }     /* GET THE TO BE RETURNED DATA */
            /* THE RETURNED DATA WILL BE SHOWN IN THIS DIV */
         
           
        }
      });
          },
        fields: {
            voter_id: {
                validators: {
                        stringLength: {
                        min: 1,
                    },
                    
                        notEmpty: {
                        message: 'Please enter candidate id'
                    }
                }
            },
             voter_name: {
                validators: {
                     stringLength: {
                        min: 3,
                    },
                    notEmpty: {
                        message: 'Please enter candidate name'
                    }
                }
            },
         
             voter_address: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                     
                        notEmpty: {
                        message: 'Please supply your address'
                    }
                    

                }
            },
            
            voter_mail: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
            voter_phone: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
                    },
                    
                }
            },
           admin_address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please supply your street address'
                    }
                }
            },
            city: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Please supply your city'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Please select your state'
                    }
                }
            },
            zip: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your zip code'
                    },
                    zipCode: {
                        country: 'US',
                        message: 'Please supply a vaild zip code'
                    }
                }
            }
            
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});


    </script>
<script type="text/javascript">



</script>
<script type="text/javascript">
          $(document).ready(function() {
    $('#add_voter').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
         submitHandler: function(validator, form, submitButton) {

               var voter_id= $('#voter_id').val();
               var voter_name= $('#voter_name').val();
               var voter_email= $('#voter_email').val();
               var voter_phone= $('#voter_phone').val();
               var voter_password= $('#voter_password').val();
               var voter_dob= $('#voter_dob').val();
                var voter_pic_name=$('#image-upload').attr('name');
               if (document.getElementById('malerb').checked) {
               var voter_gender= "male";
               }
               if (document.getElementById('femalerb').checked) {
               var voter_gender= "female";
               }
               
               var voter_address= $('#form8').val();
 /* GET THE VALUE OF THE SELECTED DATA */




  var cur_date = new Date();
  var voter_date = new Date(voter_dob);
   years = Math.floor((cur_date.getTime() - voter_date.getTime()) / (365.25 * 24 * 60 * 60 * 1000));
       if (years>=18) {
             

            $.ajax({
          url: "check_voter_phn.php",
      type: "POST",
      data:"voter_phone="+voter_phone+"&voter_id="+voter_id,
      
      
      success: function(data)
        {
        
        if (data==1) {
          alert('Mobile number already registered');
        }
        if (data==2) {
           alert('Voter id already registered');
        }

        if(data==0){
          
          $.ajax({
          url: "send_sms.php",
      type: "POST",
      data: "voter_phone="+voter_phone+"&voter_name="+voter_name,
      
      
      success: function(data)
        {
          alert(data);
         $('#OTPmodal').modal('show'); 
         $("#verify_otp_form").on('submit',(function(e) {
    //var formElement = document.querySelector("#add_voter");
    var voter_otp= $('#voter_verify_otp').val();
    if (data==voter_otp) {
      

        var formElement = document.querySelector("#add_voter");
    
         obj=new FormData(formElement);
       alert('registering voter');
$.ajax({
          url: "add_voter.php",
      type: "POST",

      data:  obj,
      
      contentType: false,
          processData:false,
      success: function(data)
        {
          if (data==1) {
            alert(data +" voter registered");
          }
          else if (data==20) {
            alert("please select a file");
          }
          
         //alert('voter registered');
      },
        error: function() 
        {
          alert('error');
        }           
     });



    }
    else{
      alert('invalid otp');
      //$('#centralModalDangerotp').modal('show'); 
    }
    
  
  }));

      },
        error: function() 
        {
          alert("error");
        }           
     });
        }
          
      },
        error: function() 
        {
        }           
     });
       

                

 

           
               //var dataString = "voter_id="+voter_id+"&voter_name="+voter_name+"&voter_email="+voter_email+"&voter_phone="+voter_phone+"&voter_password="+voter_password+"&voter_dob="+voter_dob+"&voter_gender="+voter_gender+"&voter_address="+voter_address+"&voter_pic="+voter_pic_name; /* STORE THAT TO A DATA STRING */
      

               
      
       }
       else{
        $('#centralModalDangerage').modal('show');
       }  
      
          }, 
        fields: {
            voter_id: {
                validators: {
                        stringLength: {
                        min: 1,
                    },
                    
                        notEmpty: {
                        message: 'Please enter voter id'
                    }
                }
            },
            voter_dob: {
                validators: {
                        
                    
                        notEmpty: {
                        message: 'Please enter voter date of birth'
                    }
                }
            },
           
             voter_name: {
                validators: {
                     stringLength: {
                        min: 3,
                    },
                    notEmpty: {
                        message: 'Please enter voter name'
                    }
                }
            },
         voter_password: {
                validators: {
                     stringLength: {
                        min: 3,
                    },
                    notEmpty: {
                        message: 'Please enter voter password'
                    }
                }
            },
             voter_address: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                     
                        notEmpty: {
                        message: 'Please supply your address'
                    }
                    

                }
            },
            
            voter_mail: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
            voter_phone: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
                    },
                    
                }
            },
           voter_address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please supply your street address'
                    }
                }
            },
            city: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Please supply your city'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Please select your state'
                    }
                }
            },
            zip: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your zip code'
                    },
                    zipCode: {
                        country: 'US',
                        message: 'Please supply a vaild zip code'
                    }
                }
            }
            
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});


    </script>
    
   
                

</body>

</html>
