<?php 

require 'db.php';
session_start();
if (isset($_SESSION["voter_username_session"]) && isset($_SESSION["voter_password_session"]))
{
    echo("<script>location.href = 'userhome.php'</script>");
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
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/compiled.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <style type="text/css">
    body{
    	background: #eee;
    }
        #logo_text{
            //color: white;
            font-size: 2em;
            //margin: 5px auto;
        }
        .alignment-center{
            text-align: center;
        }
        #heading{
            margin: 0;
            padding: 10px;
            text-align: center;
            
        }
        #box{
            margin-top: 30px;
            margin-bottom: 30px;
        }
        .form-elegant .font-small {
  font-size: 0.8rem; }
#card{
    box-shadow: none;
}
body{
//background-color: #eee;
}

    </style>

   
</head>

<body>

   <div class="container text-center" style="margin-top: 20px">
      <img src="img/vote1.png" style="vertical-align: middle;display: inline">
      <h1 style="vertical-align: middle;display: inline">Digital Election</h1>
  </div>
  <div class="container" style="margin-top: 40px;">
  	<section class="form-elegant z-depth-2">

    <!--Form without header-->

    <div class="card" id="card" style="padding: 40px">

        <div class="card-body">

            <!--Header-->
            <div class="text-center" style="margin-top: -32px;margin-bottom: -45px;">
                <h3 class="dark-grey-text mb-5"><strong>Sign in</strong></h3>

            </div>

            <!--Body-->
            <form class="" method="post">
            <div class="md-form">
            <i class="fa fa-id-card-o prefix" style="color: rgb(66,66,66)"></i>
                <input type="text" id="Form-email1" class="form-control" required name="voter_id">
                <label for="Form-email1">Your voter id</label>
            </div>
            
            <div class="md-form pb-3" style="margin-bottom: 0">
            <i class="fa fa-key prefix" style="color: rgb(66,66,66)"></i>
                <input type="password" id="Form-pass1" class="form-control" required name="voter_password">
                <label for="Form-pass1">Your password</label>
                
            </div>
            <div class="md-form">
                <input type="checkbox" id="checkbox1">
    <label for="checkbox1"> Remember Me</label>
            </div>

            <div class="  col-lg-4 text-center">
                <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-2" style="margin-right: auto;margin-left: auto" name="login_btn">Sign in</button>
            </div>
            </form>
            

                

        </div>

        <!--Footer-->
       

    </div>
    <!--/Form without header-->

</section>

  </div>
  <?php 
if (isset($_POST["login_btn"])) {
            
             $vid=$_POST["voter_id"];
             $vPassword=$_POST["voter_password"];
            
             $qry="select * from voter where voter_id='".$vid."' and voter_password='".$vPassword."' ;";
             //echo $qry;
      $result=mysqli_query($conn,$qry);
      $n=mysqli_num_rows($result);
      
      
      
      if ($n>0) {
           
        $_SESSION["voter_username_session"]=$vid;
        $_SESSION["voter_password_session"]=$vPassword;
        

     


        echo("<script>location.href = 'userhome.php'</script>");
           }
           else
           {
           	echo("<script>alert('invalid username or password')</script>");
           }
           


          }


   ?>
    <footer class="page-footer  center-on-small-only">
        <div class="footer-copyright primary-color-dark" id="footer_content">
        <div class="container-fluid">
            © 2018 Copyright: <a href=""> Digital Voting System </a>

        </div>
    </div>
    </footer>
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript" src="js/compiled.min.js"></script>
</body>

</html>
