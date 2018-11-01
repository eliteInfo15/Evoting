<?php 
require 'db.php';
session_start();



 if (!isset($_SESSION["admin_username_session"]) && !isset($_SESSION["admin_password_session"]))
{
    echo("<script>location.href = 'adminlogin.php'</script>");
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
                <a class="navbar-brand" href="#" style="color: black;"><img src="img/vote4.png">  Digital Voting</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars" style="color: black;"></i>
                        </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="#dash1" class="nav-link js-scroll-trigger">
                           <div class="chip btn " style="color: rgba(0,0,0,.6) !important;">
    <i class="fa fa-dashboard" style="font-size: 20px"></i> Dashboard
</div></a>
                        </li>
                         <li class="nav-item active"><a href="#dash2"  class="nav-link js-scroll-trigger">
                           <div class="chip btn" style="color: rgba(0,0,0,.6) !important;">
    <i class="fa fa-pie-chart" style="font-size: 20px"></i> Analytics
</div></a>
                        </li>
                        <li class="nav-item active"><a href="logout.php" class="nav-link">
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
    <div class="container">
        <h1><?php echo "welcome ".$_SESSION["admin_username_session"]; ?></h1>
    </div>
    <main id="dash1" class="smooth">

        <div class="container-fluid">

            <!-- First row -->
            <div class="row mt-lg-5" style="margin-top: 0px !important">
                <!-- First column -->
                <div class="col-xl-3 col-md-6 mb-r wow fadeIn" data-wow-delay="0.4s">
                    <!--Card-->
                    <div class="card card-cascade cascading-admin-card">

                        <!--Card Data-->
                        <div class="admin-up">
                            <i class="fa fa-id-card-o primary-color"></i>
                            <div class="data">
                                <p style="font-size: 15px;">ADMINS</p>
                                <h1 class="font-bold dark-grey-text"> <?php
                                                  $rs=mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from admin;"));
                                                  echo $rs['count(*)'];
                                       ?></h1>
                            </div>
                        </div>
                        <!--/.Card Data-->

                        <!--Card content-->
                        <div class="card-body text-center">
                            
                            <!--Text-->
                            <h5 class=""><a href="admin_manage_account" style="color: black;" class="btn blue-gradient">Manage Account</a></h5>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                    <div class="col-xl-3 col-md-6 mb-r wow fadeIn" data-wow-delay="0.6s">
                    <!--Card-->
                    <div class="card card-cascade cascading-admin-card">

                        <!--Card Data-->
                        <div class="admin-up">
                           <i class="fa fa-user-plus warning-color"></i>
                            <div class="data">
                                <p style="font-size: 15px;">Candidates</p>
                                <h1 class="font-bold dark-grey-text"> <?php
                                                  $rs=mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from candidate;"));
                                                  echo $rs['count(*)'];
                                       ?></h1>
                            </div>
                        </div>
                        <!--/.Card Data-->

                        <!--Card content-->
                        <div class="card-body text-center">
                            
                            <!--Text-->
                            <h5 class=""><a href="manage_candidate" style="color: black;" class="btn blue-gradient">Candidates</a></h5>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                <!-- Second column -->
               <div class="col-xl-3 col-md-6 mb-r wow fadeIn" data-wow-delay="0.8s">
                    <!--Card-->
                    <div class="card card-cascade cascading-admin-card">

                        <!--Card Data-->
                        <div class="admin-up">
                            <i class="fa fa-flag light-blue lighten-1"></i>
                            <div class="data">
                                <p style="font-size: 15px;">Positions</p>
                                <h1 class="font-bold dark-grey-text"> <?php
                                                  $rs=mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from position;"));
                                                  echo $rs['count(*)'];
                                       ?></h1>
                            </div>
                        </div>
                        <!--/.Card Data-->

                        <!--Card content-->
                        <div class="card-body text-center">
                            
                            <!--Text-->
                            <h5 class=""><a href="manage_position" style="color: black;" class="btn blue-gradient">Positions</a></h5>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
<div class="col-xl-3 col-md-6 mb-r wow fadeIn" data-wow-delay="0.8s">
                    <!--Card-->
                    <div class="card card-cascade cascading-admin-card">

                        <!--Card Data-->
                        <div class="admin-up">
                            <i class="fa fa-flag danger-color"></i>
                            <div class="data">
                                <p style="font-size: 15px;">Parties</p>
                                <h1 class="font-bold dark-grey-text"> <?php
                                                  $rs=mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from party;"));
                                                  echo $rs['count(*)'];
                                       ?></h1>
                            </div>
                        </div>
                        <!--/.Card Data-->

                        <!--Card content-->
                        <div class="card-body text-center">
                            
                            <!--Text-->
                            <h5 class=""><a href="manage_party" style="color: black;" class="btn blue-gradient">Manage Parties</a></h5>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>

                <!-- Third column -->
                <div class="col-xl-3 col-md-6 mb-r wow fadeIn" data-wow-delay="1.0s">
                    <!--Card-->
                    <div class="card card-cascade cascading-admin-card">

                        <!--Card Data-->
                        <div class="admin-up">
                            <i class="fa fa-signal danger-color"></i>
                            <div class="data">
                                <p style="font-size: 15px;">Polls</p>
                                <h1 class="font-bold dark-grey-text">

                                 <?php
                                                  $rs=mysqli_fetch_assoc(mysqli_query($conn,"select count(distinct election_id) from election;"));
                                                  echo $rs['count(distinct election_id)'];
                                       ?>
                                </h1>
                            </div>
                        </div>
                        <!--/.Card Data-->

                        <!--Card content-->
                        <div class="card-body text-center">
                            
                            <!--Text-->
                            <h5 class=""><a href="manage_poll" style="color: black;" class="btn blue-gradient"> Polls</a></h5>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
 <div class="col-xl-3 col-md-6 mb-r wow fadeIn" data-wow-delay="1.2s">
                    <!--Card-->
                    <div class="card card-cascade cascading-admin-card">

                        <!--Card Data-->
                        <div class="admin-up">
                            <i class="fa fa-users primary-color"></i>
                            <div class="data">
                                <p style="font-size: 15px;">Wards</p>
                                <h1 class="font-bold dark-grey-text">

                                       <?php
                                                  $rs=mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from ward;"));
                                                  echo $rs['count(*)'];
                                       ?>
                                </h1>
                            </div>
                        </div>
                        <!--/.Card Data-->

                        <!--Card content-->
                        <div class="card-body text-center">
                            
                            <!--Text-->
                            <h5 class=""><a href="ward" style="color: black;" class="btn blue-gradient">Wards</a></h5>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->

                </div>
                <!-- Fourth column -->
                <div class="col-xl-3 col-md-6 mb-r wow fadeIn" data-wow-delay="1.2s">
                    <!--Card-->
                    <div class="card card-cascade cascading-admin-card">

                        <!--Card Data-->
                        <div class="admin-up">
                            <i class="fa fa-users primary-color"></i>
                            <div class="data">
                                <p style="font-size: 15px;">Voters</p>
                                <h1 class="font-bold dark-grey-text">

                                       <?php
                                                  $rs=mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from voter;"));
                                                  echo $rs['count(*)'];
                                       ?>
                                </h1>
                            </div>
                        </div>
                        <!--/.Card Data-->

                        <!--Card content-->
                        <div class="card-body text-center">
                            
                            <!--Text-->
                            <h5 class=""><a href="manage_voter" style="color: black;" class="btn blue-gradient">Voters</a></h5>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->

                </div>
                <div class="col-xl-3 col-md-6 mb-r wow fadeIn" data-wow-delay="1.4s">
                    <!--Card-->
                    <div class="card card-cascade cascading-admin-card">

                        <!--Card Data-->
                        <div class="admin-up">
                            <i class="fa fa-trophy danger-color"></i>
                            <div class="data">
                                <p style="font-size: 15px;">Result</p>
                                 <h3>Click below</h3>
                            </div>
                        </div>
                        <!--/.Card Data-->

                        <!--Card content-->
                        <div class="card-body text-center">
                            
                            <!--Text-->
                            <h5 class=""><a href="manage_result" class="btn blue-gradient" style="color: black;">Declare Result</a></h5>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
            </div>
            <!-- /.First row -->

            <!-- Second row -->

           
                <!-- /.Second row -->

            

    </div>
    </main>
    <!--Main layout-->
    <main id="dash2" class="smooth">

        <div class="">
       <form method="post" style="margin-bottom:100px" id="show_analytics">
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
                <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-2" style="margin-right: auto;margin-left: auto" name="btn_submit">Show Analytics</button>
            </div>
       </form>



       <?php 

      if (isset($_POST["btn_submit"])) {
             $election_id=$_POST["election_id"];
?>

<?php 

$ward_qry="select distinct election_ward from election where election_id='".$election_id."'";
$ward_rs=mysqli_query($conn,$ward_qry);
$ward_data=mysqli_fetch_assoc($ward_rs);
$ward=$ward_data['election_ward'];

$voter_qry="select voter_voting_status, count(*) as number from voter where voter_ward='".$ward."' group by voter_voting_status ";
$result_qry=mysqli_query($conn,$voter_qry);
 ?>

             <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  

           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Status', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result_qry))  
                          {  
                               echo "['".$row["voter_voting_status"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of voters who has given votes',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart1'));  
                chart.draw(data, options);  
           }  
           </script> 

<?php 



$voter_gender="select voter_gender, count(*) as number from voter where voter_ward='".$ward."' group by voter_gender ";
$result_gender=mysqli_query($conn,$voter_gender);
 ?>

            <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Status', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result_gender))  
                          {  
                               echo "['".$row["voter_gender"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of male and female voters',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart2'));  
                chart.draw(data, options);  
           }  
           </script> 


<?php 



$vote_count_qry="select candidate_id, count(*) as number from vote_data where election_id='".$election_id."' GROUP BY candidate_id";

$result_vote=mysqli_query($conn,$vote_count_qry);
 ?>

            <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Status', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result_vote))  
                          {  
                            $cnd_qry="select * from candidate where candidate_id='".$row['candidate_id']."'";
                            $cnd_rs=mysqli_query($conn,$cnd_qry);
                            $cnd_data = mysqli_fetch_array($cnd_rs);
                               echo "['".$cnd_data["candidate_name"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of vote count for each candidate',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart3'));  
                chart.draw(data, options);  
           }  
           </script> 




 <div id="piechart1" style="width: 330px; height: 200px;float:left"></div>
<div id="piechart2" style="width: 330px; height: 200px;float:left"></div>
<div id="piechart3" style="width: 320px; height: 200px;float:left"></div>
<?php
      }
      
        ?>
           
          





             
          




             
           
    </div>
    </main>
    <!--/Main layout-->

    <!--Footer
    <footer class="page-footer  center-on-small-only" style="background: #eee;">
        <div class="footer-copyright primary-color-dark" id="footer_content">
        <div class="container-fluid">
            © 2018 Copyright:  <a>Digital Voting System</a> 

        </div>
    </div>
    </footer>-->
    <!--/.Footer-->


  
    <!-- SCRIPTS -->
   
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">

    </script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript <script type="text/javascript" src="js/compiled.min.js"></script>-->
    <script type="text/javascript" src="js/mdb.min.js"></script>
     <script type="text/javascript" src="js/materialize.min.js"></script>
                <script type="text/javascript">
                   $(document).ready(function() {
    $('select').material_select();
  });
       
                </script>
    <script type="text/javascript">
        new WOW().init();
    </script>
      <script type="text/javascript">
          $('a[href*="#"]:not([href="#"]):not([href="#show"]):not([href="#hide"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
      </script>
   

</body>

</html>
