<?php 
require 'db.php';
session_start();

$qry_election="select * from Election where starting_date=current_date();";

$qry_rs=mysqli_query($conn,$qry_election);
if ($qry_rs) {
    while ($res=mysqli_fetch_assoc($qry_rs)) {
         $qry_start="update election set election_status=1 where election_id='".$res["election_id"]."'  ";
         mysqli_query($conn,$qry_start);
    }
}

 if (isset($_SESSION["admin_username_session"]) && isset($_SESSION["admin_password_session"]))
{
    echo("<script>location.href = 'adminhome.php'</script>");
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
small{
    color: red;
    margin-left: 3rem;
}
.md-form .prefix~label {
    margin-left: 4rem;
}




    </style>

   
</head>

<body>

  <!--<div class="row text-center" id="heading">
       <img src="img/logo1.png" class="img-fluid" style="margin-left: auto;margin-right: auto;">
      
  </div>-->
  <div class="container text-center" style="margin-top: 20px">
      <img src="img/vote1.png" style="vertical-align: middle;display: inline">
      <h1 style="vertical-align: middle;display: inline">Digital Voting</h1>
  </div>
  <div class="container" id="box">
           <!-- Nav tabs -->
<ul class="nav nav-tabs nav-justified indigo" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#panel5" role="tab"><i class="fa fa-user"></i>  Login</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel6" role="tab"><i class="fa fa-pencil"></i>  Register</a>
    </li>
   
</ul>
<!-- Tab panels -->
<div class="tab-content z-depth-2" style="background: white">
    <!--Panel 1-->
    <div class="tab-pane fade in show active " id="panel5" role="tabpanel">
        <br>
        <section class="form-elegant">

    <!--Form without header-->

    <div class="card" id="card">

        <div class="card-body">

            <!--Header-->
            <div class="text-center" style="margin-top: -32px;margin-bottom: -45px;">
                <h3 class="dark-grey-text mb-5"><strong>Sign in</strong></h3>

            </div>
            
            <!--Body-->
            <form class="" method="post">
            <div class="md-form">
            <i class="fa fa-id-card-o prefix" style="color: rgb(66,66,66)"></i>
                <input type="text" id="Form-email1" class="form-control" required name="admin_unm">
                <label for="Form-email1">Your Username</label>
            </div>
            
            <div class="md-form pb-3" style="margin-bottom: 0">
            <i class="fa fa-key prefix" style="color: rgb(66,66,66)"></i>
                <input type="password" id="Form-pass1" class="form-control" required name="admin_pwd">
                <label for="Form-pass1">Your password</label>
                
            </div>
            <div class="md-form">
                <input type="checkbox" id="checkbox1">
    <label for="checkbox1"> Remember Me</label>
            </div>

            <div class="  col-lg-4 text-center">
                <button type="submit" name="login_btn" class="btn blue-gradient btn-block btn-rounded z-depth-2" style="margin-right: auto;margin-left: auto">Login</button>
            </div>
            </form>
            

            <?php 


                   if (isset($_POST["login_btn"])) {
            
             $username=$_POST["admin_unm"];
             $Password=$_POST["admin_pwd"];
            
             $qry="select * from admin where admin_username='".$username."' and admin_password='".$Password."' ;";
             //echo $qry;
      $result=mysqli_query($conn,$qry);
      $n=mysqli_num_rows($result);
      $data=mysqli_fetch_assoc($result);
      
      
      if ($n>0) {
           
        $_SESSION["admin_username_session"]=$username;
        $_SESSION["admin_password_session"]=$Password;

        echo("<script>location.href = 'adminhome.php'</script>");
           }
           


          }   ?>    

        </div>
           
        <!--Footer-->
       

    </div>
    <!--/Form without header-->

</section>
    </div>
    <!--/.Panel 1-->
    <!--Panel 2-->
    <div class="tab-pane fade" id="panel6" role="tabpanel">
        <br>
            <section class="form-elegant">

    <!--Form without header-->

    <div class="card" id="card">

        <div class="card-body">

            <!--Header-->
            <div class="text-center"  style="margin-top: -32px;margin-bottom: -45px;">
                <h3 class="dark-grey-text mb-5"><strong>Register admin</strong></h3>
            </div>

            <!--Body-->
            <form class="" method="post" name="registration" id="contact_form">
            <div class="md-form">
                 <div class="col-md-8 inputGroupContainer">
            <i class="fa fa-user prefix"></i>
                <input type="text" id="admin_name" class="form-control"  name="admin_name">
                <label for="admin_name">Admin name</label>
            </div>
            </div>
             <div class="md-form">
                <div class="col-md-8 inputGroupContainer">
              <i class="fa fa-id-card-o prefix"></i>
                <input type="text" id="admin_username" class="form-control"  name="admin_username">
                <label for="admin_username">Admin username</label>
            </div>
            </div>
            <div class="md-form">
                <div class="col-md-8 inputGroupContainer">
            <i class="fa fa-envelope prefix"></i>
                <input type="email" id="admin_email" class="form-control"  name="admin_email">
                <label for="admin_email">Admin email</label>
            </div>
            </div>
            <div class="md-form">
                <div class="col-md-8 inputGroupContainer">
            <i class="fa fa-phone prefix"></i>
                <input type="text" id="admin_mobile" class="form-control"  name="admin_mobile">
                <label for="admin_mobile">Admin mobile</label>
            </div>
            </div>
            <div class="md-form">
                <div class="col-md-8 inputGroupContainer">
                <input name="group" type="radio" class="with-gap" id="malerb" value="male">
    <label for="malerb">Male </label>
     <input name="group" type="radio" class="with-gap" id="femalerb" value="female">
    <label for="femalerb">Female </label>
</div>
            </div>

           <div class="md-form pb-3" style="margin-bottom: 0">
            <div class="col-md-8 inputGroupContainer">
            <i class="fa fa-key prefix"></i>
                <input type="password" id="Form-pass23" class="form-control"  name="admin_password">
                <label for="Form-pass23">Your password</label>
                </div>
            </div>
            <div class="md-form pb-3" style="margin-bottom: 0">
                <div class="col-md-8 inputGroupContainer">
            <i class="fa fa-key prefix"></i>
                <input type="password" id="Form-pass2" class="form-control"  name="confirm_password">
                <label for="Form-pass2">Confirm password</label>
                </div>
            </div>
             <div class="md-form pb-3" style="margin-bottom: 0">
                <div class="col-md-8 inputGroupContainer">
               <i class="fa fa-home prefix"></i>  
    <textarea type="text" id="form8" class="md-textarea" name="admin_address"></textarea>
    <label for="form8">Admin address</label>
              </div>  
            </div>
            <div class="  col-lg-4 text-center">
                <button name="Register_btn" type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-2" style="margin-right: auto;margin-left: auto">Sign in</button>
            </div>
            </form>
            <?php 


           if (isset($_POST["Register_btn"])) {

             $admin_name=$_POST["admin_name"];
              $admin_username=$_POST["admin_username"];
               $admin_email=$_POST["admin_email"];
                $admin_mobile=$_POST["admin_mobile"];
                 $admin_address=$_POST["admin_address"];
                  $admin_password=$_POST["admin_password"];
                   $admin_name=$_POST["admin_name"];
                    $admin_gender=$_POST["group2"];
                    $qry="insert into admin values('".$admin_name."','".$admin_username."','".$admin_password."','".$admin_email."','".$admin_mobile."','".$admin_gender."','".$admin_address."')";
                   mysqli_query($conn,$qry);
                     $_SESSION["admin_username_session"]=$admin_username;
        $_SESSION["admin_password_session"]=$admin_password;

        echo("<script>location.href = 'adminhome.php'</script>");
           }
             ?>

                

        </div>

        <!--Footer-->
       

    </div>
    <!--/Form without header-->

</section>
    </div>
    <!--/.Panel 2-->
    
</div>      
  </div>

    <footer class="page-footer  center-on-small-only">
        <div class="footer-copyright primary-color-dark" id="footer_content">
        <div class="container-fluid">
            © 2018 Copyright: <a href=""> Digital Voting System </a>

        </div>
    </div>
    </footer>
    <!-- SCRIPTS -->
    <!-- JQuery -->
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
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
    <script type="text/javascript">
          $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            admin_name: {
                validators: {
                        stringLength: {
                        min: 5,
                    },
                    regexp: {
                        regexp: /^[a-zA-Z ]*$/,
                        message: 'Only alphabets are allowed'
                    },
                        notEmpty: {
                        message: 'Please enter admin name'
                    }
                }
            },
             admin_username: {
                validators: {
                     stringLength: {
                        min: 5,
                    },
                    notEmpty: {
                        message: 'Please enter admin username'
                    }
                }
            },
         
             admin_password: {
                validators: {
                        stringLength: {
                        min: 8,
                    },
                     regexp: {
                        regexp: /^[a-zA-Z ]*$/,
                        message: 'Only alphabets are allowed'
                    },
                        notEmpty: {
                        message: 'Please supply your password'
                    }
                    

                }
            },
            confirm_password: {
                validators: {
                        stringLength: {
                        min: 8,
                    },
                        notEmpty: {
                        message: 'Please supply your password'
                    },
                    identical: {
                    field: 'admin_password',
                    message: 'Password is invalid'
                }
                }
            },
            admin_email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
            admin_mobile: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
                    },
                    phone: {
                        country: 'US',
                        message: 'Please supply a vaild phone number with area code'
                    }
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
            },
            comment: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Please enter at least 10 characters and no more than 200'
                    },
                    notEmpty: {
                        message: 'Please supply a description of your project'
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
