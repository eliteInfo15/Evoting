
<?php
require 'db.php'; 
session_start();
if (!isset($_SESSION["voter_username_session"]) && !isset($_SESSION["voter_password_session"]))
{
    echo("<script>location.href = 'userlogin.php'</script>");
}
$qry="select * from voter where voter_id='".$_SESSION['voter_username_session']."'  ";
       $rs=mysqli_query($conn,$qry);
       $data=mysqli_fetch_assoc($rs);
$qry_election="select * from Election where starting_date=current_date() and election_ward='".$data['voter_ward']."'";

$qry_rs=mysqli_query($conn,$qry_election);
if ($qry_rs) {
    while ($res=mysqli_fetch_assoc($qry_rs)) {
         $qry_start="update election set election_status=1 where election_id='".$res["election_id"]."'  ";
         mysqli_query($conn,$qry_start);
    }
}
 $qry_election2="select * from Election where end_date=current_date() and election_ward='".$data['voter_ward']."'";

$qry_rs2=mysqli_query($conn,$qry_election2);
if ($qry_rs2) {
    while ($res2=mysqli_fetch_assoc($qry_rs2)) {
         $qry_stop1="update election set election_status=0 where election_id='".$res2["election_id"]."'  ";
         mysqli_query($conn,$qry_stop1);
       }
     }
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
    

    <!-- Your custom styles (optional) -->
   <style type="text/css">
       .chip.chip-md {
    height: 42px;
    line-height: 42px;
    border-radius: 21px;
}
chip{

}
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
  
   
   </style>
   
</head>

<body class="fixed-sn white-skin" data-gr-c-s-loaded="true" style="background:#eee;">

    <!--Main Navigation-->
    <header>

                <!-- Navbar -->
        <nav class="mb-1 navbar navbar-expand-lg z-depth-2 navbar-fixed-top">
                <a class="navbar-brand" href="#" style="color: black;"><img src="img/vote4.png">  Digital Election</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars" style="color: black;"></i>
                        </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <ul class="navbar-nav ml-auto">
                        
                        <li class="nav-item active"><a href="logoutuser.php" class="nav-link">
                           <div class="chip btn" style="color: rgba(0,0,0,.6) !important;">
    <i class="fa fa-sign-out" style="font-size: 20px"></i> Logout
</div></a>
                        </li>
                        
                        
                    </ul>
                </div>
            </nav>

    </header>
    <!--Main Navigation-->
    <!--Main layout-->
  <?php 

       
       
       $main_qry="select distinct election_id,election_status,starting_date,end_date from Election where Election_ward='".$data['voter_ward']."'";
     //echo $main_qry;
       $rsmain=mysqli_query($conn,$main_qry);
       if (mysqli_num_rows($rsmain)>0) {
        

       $datamain=mysqli_fetch_assoc($rsmain);
       
       //var_dump($datamain);
       //var_dump($datamain);
       $now = time(); // or your date as well
$elect_end_date = strtotime($datamain['end_date']);
$datediff1 = $now - $elect_end_date;

$days1=round($datediff1 / (60 * 60 * 24));


$elect_start_date = strtotime($datamain['starting_date']);
$datediff2 = $now - $elect_start_date;

$days2=round($datediff2 / (60 * 60 * 24));

       if ($days1>=0) {
         ?>
      <div class="container text-center">
            <h3 style="font-size: 25px;text-align:center;margin-top:20px" class="badge badge-pill green">Election has been ended</h3>


            <?php 
            $main_qry1="select distinct election_id,election_status,starting_date,end_date from Election where Election_ward='".$data['voter_ward']."' and election_status=0";
      
       $rsmain1=mysqli_query($conn,$main_qry1);
       $datamain1=mysqli_fetch_assoc($rsmain1);
             $election_id=$datamain1['election_id'];
            
             $q="select distinct end_date,election_ward,election_topic,election_position from election where election_id='".$election_id."' and Election_ward='".$data['voter_ward']."'";
             
             $election_data=mysqli_fetch_assoc(mysqli_query($conn,$q));
             
           $result_query="SELECT * FROM `voting_result` WHERE vote_count in (select max(vote_count) from voting_result GROUP BY election_id) and election_id='".$election_id."'";
$vote_result=mysqli_query($conn,$result_query);
$n=mysqli_num_rows($vote_result);
if ($n>0) {
  $winner_data=mysqli_fetch_assoc($vote_result);
  ?>
<div class="card col-lg-4 text-center" style="text-align: center;margin:4px auto;padding-top: 14px;">
    <h3><strong>Winner of election: <?php echo $election_data["election_topic"]; ?> for Position <?php $pid= $election_data["election_position"]; 
          $pos_qry="select position_name from position where position_id='".$pid."'";
          $pos_rs=mysqli_query($conn,$pos_qry);
          $pos=mysqli_fetch_assoc($pos_rs);
          echo $pos["position_name"];
    ?></strong></h3>
    <!--Card image-->
  
    <?php 
     $cnd_qry="select * from candidate where candidate_id='".$winner_data['candidate_id']."' ";
      $cnd_res=mysqli_query($conn,$cnd_qry);
      $cnd_data=mysqli_fetch_assoc($cnd_res);
     ?>
    <img style="margin:10px auto;" class="img-fluid" src="<?php echo $cnd_data["candidate_pic"] ?>" alt="Card image cap" width="150" height="200">

    <!--Card content-->
    <div class="card-body">
        <!--Title-->
        <h4 class="card-title"><strong><?php echo $cnd_data["candidate_name"]; ?></strong></h4>
        <h6 class="card-title"><strong>Candidate Party:<br> <?php 

                   $pid=$cnd_data["party_id"];
                      $p_qry="select * from party where party_id='".$pid."'";
                      $p_rs=mysqli_query($conn,$p_qry);
                      $p_data=mysqli_fetch_assoc($p_rs);
        echo $p_data["party_name"] ?></strong></h6>
        <h4 class="card-title"><strong>Total <?php echo $winner_data['vote_count']; ?> votes</strong></h4>
        <!--Text-->
        <div class="form-check">
    
</div>
        
    </div>

</div>

  <?php
}
else{
  ?>
<div class="container text-center">
            <h3 style="font-size: 25px;text-align:center;margin-top:20px" class="badge badge-pill green">Please wait for result!</h3>
        
      </div>
  <?php
}


             ?>
             
        
      </div>
      

         <?php
       }
       else if($days2<0 && $datamain['election_status']==0){
           ?>
<div class="container text-center">
            <h3 style="font-size: 25px;text-align:center;margin-top:20px" class="badge badge-pill green">Election is not yet started</h3>
        
      </div>
           <?php
       }
       else if($datamain['election_status']==1){

          ?>


 <div class="container text-center" style="margin-top:40px;margin-bottom: 40px;">
       <h2>Welcome <?php echo $data['voter_name']; ?></h2>
        <h2>You belongs to ward: <?php echo $data['voter_ward']; ?></h2>
       <h2>Current election for position:</h2>
       <?php 
       //select cnd id, count* from vote data grup by election id hving 
            $election_qry="select distinct election_position from election where election_status=1 and election_ward='".$data["voter_ward"]."';";
             $rs_election=mysqli_query($conn,$election_qry);
             while ($data_election=mysqli_fetch_assoc($rs_election)) {
                    $position_id=$data_election['election_position'];
                    $qry="select * from position where position_id='".$position_id."'  ";
       $rs=mysqli_query($conn,$qry);
       $data_position=mysqli_fetch_assoc($rs);
                ?>
<h2><strong><?php echo $data_position['position_name']; ?></strong></h2>
                <?php
             }
             
       
        ?>
       
   </div>

<?php 

$qry_check="select * from vote_data where voter_id='".$_SESSION["voter_username_session"]."' and election_id='".$datamain['election_id']."' ";

$rs_check=mysqli_query($conn,$qry_check);
$n=mysqli_num_rows($rs_check);

if ($n>0) {
    ?>
    <div class="container" style="text-align: center;">
        <h3 style="font-size: 25px;" class="badge badge-pill green">You had successfully voted please wait for results</h3>
         <h3 style="font-size: 25px;" class="badge badge-pill green">Result will be declared on <?php 
                $date_ending=date_create($datamain["end_date"]); 
                echo date_format($date_ending,"d M, Y");
                 
               
          ?></h3>
        <h4><strong></strong></h4>
    </div>



    <?php
}
else{

?>


<div class="container">
          <section class="form-elegant z-depth-2">

    <!--Form without header-->

    <div class="card" id="card" style="padding: 40px">

        <div class="card-body">

            <!--Header-->
            <div class="text-center" style="margin-top: -32px;margin-bottom: -45px;">
                <h3 class="dark-grey-text mb-5"><strong>Choose Candidate</strong></h3>

            </div>

            

            <form class="" method="post" id="election_data">
                <div class="container">
                    <div class="row">

                    <?php 
                      $cnd_qry="select * from election,candidate where candidate.candidate_id=election.candidate_id and election_status=1 and election_ward='".$data['voter_ward']."'";
                        $cnd_rs=mysqli_query($conn,$cnd_qry);
                        while ($cnd_data=mysqli_fetch_assoc($cnd_rs)) {

                           ?>

                           <div class="card col-lg-3" style="text-align: center;">

    <!--Card image-->
    <img class="img-fluid" src="<?php echo $cnd_data["candidate_pic"] ?>" alt="Card image cap" width="150" height="200">

    <!--Card content-->
    <div class="card-body">
        <!--Title-->
        <h4 class="card-title"><strong><?php echo $cnd_data["candidate_name"]; ?></strong></h4>
        <h6 class="card-title"><strong>Candidate Party:<br> <?php 

                   $pid=$cnd_data["party_id"];
                      $p_qry="select * from party where party_id='".$pid."'";
                      $p_rs=mysqli_query($conn,$p_qry);
                      $p_data=mysqli_fetch_assoc($p_rs);
        echo $p_data["party_name"] ?></strong></h6>
        <!--Text-->
        <div class="form-check">
    <input class="form-check-input" type="radio" value="<?php echo $cnd_data["candidate_id"] ?>" id="defaultCheckbox1" name="candidate_option" style="visibility: visible;position: static;left: 0">
    <input type="text" name="election_id_val" value="<?php echo $cnd_data["election_id"] ?>" style="visibility: hidden;">
                <input type="text" name="voter_id_val" value="<?php echo $_SESSION["voter_username_session"] ?>" style="visibility: hidden;">
                 <input type="text" name="voter_phn" value="<?php echo $data["voter_phone"] ?>" style="display: none" id="phn">
                 <input type="text" name="voter_name" value="<?php echo $data["voter_name"] ?>" style="display: none" id="nm">
</div>
        
    </div>

</div>
                       

                           <?php
                        }
                     ?>
                     <div class="card col-lg-3" style="text-align: center;">
                         <div class="card-body">
                              <h4 class="card-title"><strong>None of the above</strong></h4>
                              <div class="form-check">
    <input class="form-check-input" type="radio" value="none" id="defaultCheckbox1" name="candidate_option" style="visibility: visible;position: static;left: 0">
   
</div>
                         </div>
                     </div>
                </div>
                </div>
              
               
            <div class="  col-lg-4 text-center">
                <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-2" style="margin-right: auto;margin-left: auto;margin-top: 20px;" name="login_btn">Vote</button>
            </div>
            </form>
            

                

        </div>

        <!--Footer-->
       

    </div>
    <!--/Form without header-->

</section>

      </div>




<?php
}
 ?>

      


<?php
       }

   ?>
  


<?php

       }
       else{
        ?>
<div class="container text-center">
            <h3 style="font-size: 25px;text-align:center;margin-top:20px" class="badge badge-pill green">Currently no Elections are there in your ward</h3>
          </div>

        <?php
       }

?>


   <div class="container z-depth-2">
         
   </div>
    <!--Footer-->
    <footer class="page-footer  center-on-small-only" style="background: #eee;width: 100%;">
        <div class="footer-copyright primary-color-dark" id="footer_content">
        <div class="container-fluid">
            © 2018 Copyright:  <a>Digital Voting System</a> 

        </div>
    </div>
    </footer>
    <!--/.Footer-->

<!-- Modal -->
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
            <div class="modal-footer">
               
               
            </div>
        </div>
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
                <script type="text/javascript">
                    

$(document).ready(function (e) {



  $("#election_data").on('submit',(function(e) {
    var formElement = document.querySelector("#election_data");

    var voter_phone=$('#phn').val();
    var voter_name=$('#nm').val();
    e.preventDefault();
    $.ajax({
          url: "send_sms.php",
      type: "POST",
      data: "voter_phone="+voter_phone+"&voter_name="+voter_name ,
      
     
      success: function(data)
        {
         alert(data);
         $('#OTPmodal').modal('show'); 

                $("#verify_otp_form").on('submit',(function(e) {
    //var formElement = document.querySelector("#add_voter");
    var voter_otp= $('#voter_verify_otp').val();
    if (data==voter_otp) {
      

        var formElement = document.querySelector("#election_data");
    
         

$.ajax({
          url: "election_data.php",
      type: "POST",
      data:  new FormData(formElement),
      
      contentType: false,
          processData:false,
      success: function(data)
        {
            $('#OTPmodal').modal('hide'); 
         //alert("you elected succesfully");
         window.location.reload(true);
      },
        error: function() 
        {
        }           
     });



    }
    else{
      alert('invalid otp'); 
    }
    
  
  }));
      },
        error: function() 
        {
        }           
     });
  }));
});
                </script>
   

</body>

</html>
