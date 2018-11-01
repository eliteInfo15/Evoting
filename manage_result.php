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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>


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
   // display: none;
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
     <form method="post" style="margin-bottom:100px;margin-top:50px" id="show_analytics">
           <div class="md-form">
               <div class="col-md-8 inputGroupContainer">
              <i class="fa fa-mortar-board prefix"></i>
             <div class="select-wrapper">
<span class="caret">▼</span>
<input type="text" class="select-dropdown" readonly="true" data-activates="select-options-d10efa92-7e52-007b-ec3a-57361a26ef36" value="Choose election id"><ul id="select-options-d10efa92-7e52-007b-ec3a-57361a26ef36" class="dropdown-content select-dropdown ">
  <li class="disabled "><span>Choose Election id</span></li>
  <?php 
       $qry="select distinct election_id from election ;";
       $rs=mysqli_query($conn,$qry);

        while($data=mysqli_fetch_assoc($rs)){
          ?>

<li class=""><span><?php echo $data["election_id"]; ?></span></li>

          <?php
        }
   ?>

</ul>
<select data-select-id="d10efa92-7e52-007b-ec3a-57361a26ef36" class="initialized" name="election_id">
                  <option value="" disabled="" selected="">Choose Election id</option>
                 <?php 
                            $qry="select distinct election_id from election;";
       $rs=mysqli_query($conn,$qry);

                          while ($data=mysqli_fetch_assoc($rs)) {
                           ?>
                          
        <option value="<?php echo $data["election_id"]; ?>"><?php echo $data["election_id"]; ?></option>
                           <?php

                          }

                  ?>
                  
                  
                </select></div>
                
            </div>
          </div>
           <div class="  col-lg-4 text-center">
                <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-2" style="margin-right: auto;margin-left: auto" name="btn_submit">Declare Result</button>
            </div>
       </form>

    
<?php 

if (isset($_POST["btn_submit"])) {
 $election_id=$_POST["election_id"];
    $election_data=mysqli_fetch_assoc(mysqli_query($conn,"select distinct end_date,election_ward,election_topic,election_position from election where election_id='".$election_id."'"));
    $end_date_election=$election_data["end_date"];
    $now = time(); // or your date as well
$elect_end_date = strtotime($end_date_election);
$datediff = $now - $elect_end_date;

$days=round($datediff / (60 * 60 * 24));
if ($days>=0) {
  $chk_qry="select * from voting_result";
$chkrs=mysqli_query($conn,$chk_qry);
$n_rows=mysqli_num_rows($chkrs);

if ($n_rows==0) {
   



  $insert_query="INSERT INTO voting_result (select count(*),candidate_id,election_id from vote_data where election_id='".$election_id."' group BY candidate_id,election_id);";
mysqli_query($conn,$insert_query);
}




$result_query="SELECT * FROM `voting_result` WHERE vote_count in (select max(vote_count) from voting_result GROUP BY election_id) and election_id='".$election_id."'";
$vote_result=mysqli_query($conn,$result_query);
$n=mysqli_num_rows($vote_result);

$winner_data=mysqli_fetch_assoc($vote_result);
?>

<div class="card col-lg-4 text-center" style="text-align: center;margin:4px auto">
    <h3>Winner of election: <?php echo $election_data["election_topic"]; ?> for Position <?php $pid= $election_data["election_position"]; 
          $pos_qry="select position_name from position where position_id='".$pid."'";
          $pos_rs=mysqli_query($conn,$pos_qry);
          $pos=mysqli_fetch_assoc($pos_rs);
          echo $pos["position_name"];
    ?></h3>
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

<center><h3 style="font-size: 25px;text-align:center;margin-top:20px" class="badge badge-pill green">Results for election <?php echo $election_id ?> can be genereted after completion of voting.</h3>
        </center>


<?php
}
}

 ?>


 


   
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
     <script type="text/javascript" src="js/upload.min.js"></script>
  
<script type="text/javascript" src="js/materialize.min.js"></script>
                <script type="text/javascript">
                   $(document).ready(function() {
    $('select').material_select();
  });
       
                </script>
</body>

</html>
