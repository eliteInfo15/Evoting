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
    <title>Welcome to digital voting</title>
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

<body class="fixed-sn white-skin" data-gr-c-s-loaded="true" style="background:#eee;padding-right: -17px">

    <!--Main Navigation-->
    <header>

                <!-- Navbar -->
        <nav class="mb-1 navbar navbar-expand-lg z-depth-2 navbar-fixed-top">
                <a class="navbar-brand" href="#" style="color: black;"><img src="img/vote4.png">  digital Voting</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars" style="color: black;"></i>
                        </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="adminhome.php" class="nav-link js-scroll-trigger">
                           <div class="chip btn " style="color: rgba(0,0,0,.6) !important;">
    <i class="fa fa-dashboard" style="font-size: 20px"></i> Dashboard
</div></a>
                        </li>
                         <li class="nav-item active"><a href="adminhome.php#dash2"  class="nav-link js-scroll-trigger">
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
    
    <!--/Main layout-->
<div class="intro-text text-center">
    <h2>Control, protect and secure your account, all in one place</h2>
</div>
<!-- Nav tabs -->
<div class="container">
<div class="tabs-wrapper"> 
    <ul class="nav classic-tabs tabs-white nav-justified" role="tablist">
        <li class="nav-item" style="margin-left: 0">
            <a class="nav-link waves-light active" data-toggle="tab" href="#panel51" role="tab"><i class="fa fa-user" aria-hidden="true" style="font-size: 30px;vertical-align: middle;"></i> &nbsp;&nbsp;Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link waves-light" data-toggle="tab" href="#panel52" role="tab"><i class="fa fa-lock" aria-hidden="true" style="font-size: 30px;vertical-align: middle;"></i> &nbsp;&nbsp;Manage Password</a>
        </li>
        <li class="nav-item">
            <a class="nav-link waves-light" data-toggle="tab" href="#panel53" role="tab"><i class="fa fa-phone" aria-hidden="true" style="font-size: 30px;vertical-align: middle;"></i> &nbsp;&nbsp;Contact Details</a>
        </li>
        
    </ul>
</div>

<!-- Tab panels -->
<div class="tab-content card">

    <!--Panel 1-->
    <div class="tab-pane fade in show active" id="panel51" role="tabpanel">
        <section class="form-elegant">

    <!--Form without header-->

    <div class="card" id="card" style="box-shadow: none">

        <div class="card-body">

            <!--Header-->
            <div class="text-center"  style="margin-top: -32px;margin-bottom: -45px;">
                <p class=" mb-5" style="font-weight: 300;font-size: 20px;">Edit Details</p>
            </div>

            <!--Body-->
            <?php 

               $qry="select * from admin where admin_username='".$_SESSION["admin_username_session"]."'";
               $result=mysqli_query($conn,$qry);
               $data=mysqli_fetch_assoc($result);
             ?>
            <form class="" method="post" id="update_info_form">
            <div class="md-form">
               <div class="col-md-8 inputGroupContainer">
            <i class="fa fa-user prefix"></i>
                <input type="text" name="admin_name" id="admin_name" class="form-control"  required value="<?php echo $data["admin_name"] ?>" >
                <label for="admin_name">Admin name</label>
              </div>
            </div>
             <div class="md-form">
               <div class="col-md-8 inputGroupContainer">
              <i class="fa fa-id-card-o prefix"></i>
                <input type="text" id="admin_username" name="admin_username" class="form-control" required value="<?php echo $data["admin_username"] ?>">
                <label for="admin_username">Admin username</label>
              </div>
            </div>
           <?php  ?>
            <div class="md-form">
               <div class="col-md-8 inputGroupContainer">
                <input name="group2" type="radio" value="male" class="with-gap" id="malerb" <?php 

                    if ($data["admin_gender"]=="male") {
               echo "checked";
           }
                 ?>>
    <label for="malerb">Male </label>
    <input name="group2" type="radio" value="female" class="with-gap" id="femalerb" <?php 

                    if ($data["admin_gender"]=="female") {
               echo "checked";
           }
                 ?>>
    <label for="femalerb">Female  </label>
  </div>
            </div>

            
           
             <div class="md-form pb-3" style="margin-bottom: 0">
               <div class="col-md-8 inputGroupContainer">
               <i class="fa fa-home prefix"></i>  
    <textarea type="text" id="form8" class="md-textarea" name="admin_address"><?php echo $data["admin_address"]; ?></textarea>
    <label for="form8">Admin address</label>
                </div>
            </div>
            <div class="  col-lg-4 text-center">
                <button type="submit" name="update_btn" class="btn blue-gradient btn-block btn-rounded z-depth-2" style="margin-right: auto;margin-left: auto">Update Profile</button>
            </div>
            </form>
            <?php 

                 if (isset($_POST["update_btn"])) {

             $admin_name=$_POST["admin_name"];
              $admin_username=$_POST["admin_username"];
            
                
                 $admin_address=$_POST["admin_address"];
              
                    $admin_gender=$_POST["group2"];
                    $qry="update admin set admin_name='".$admin_name."', admin_username='".$admin_username."',admin_gender='".$admin_gender."',admin_address='".$admin_address."' where admin_username='".$_SESSION["admin_username_session"]."'";
                   mysqli_query($conn,$qry);
                    
        echo("<script>location.href = 'admin_manage_account.php'</script>");
           }
             ?>


          

                

        </div>

        <!--Footer-->
       

    </div>
    <!--/Form without header-->

</section>

    </div>
    <!--/.Panel 1-->

    <!--Panel 2-->
    <div class="tab-pane fade" id="panel52" role="tabpanel">
        <div class="card" style="//margin: 0px auto; //width: 50%;box-shadow: none">

        <!--Card image-->
        

        <!--Card content-->
        <div class="card-body" id="chng_pwd"> 
            <!--Title-->
            <h4 class="card-title">Change Password</h4><br>
            <form method="post" id="change_pwd_form">
             <div class="md-form" >
             <div class="col-md-8 inputGroupContainer">
                <input type="password" id="password-field" class="form-control" required data-toggle="password" name="admin_new_password" >
                <label for="password-field">New password</label>
                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
              </div>
            </div>
            <p style="font-weight: 400;font-size: 14px;margin-left: 1rem"><span>Password strength:</span><br>
Use at least 8 characters. Don’t use a password from another site or something too obvious like your pet’s name. </p>
             <div class="md-form">
               <div class="col-md-8 inputGroupContainer">
                <input type="password" id="admin_name1" class="form-control" required name="confirm_new_password">
                <label for="admin_name1">Confirm new password</label>
              </div>
            </div>
            <div class="  col-lg-4 text-center">
                <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-2" id="btn_submit">Change password</button>
            </div>
            </form>
          
        </div>

    </div>

    </div>
    <!--/.Panel 2-->

    <!--Panel 3-->
    <div class="tab-pane fade" id="panel53" role="tabpanel">
        
         <section class="form-elegant">

    <!--Form without header-->

    <div class="card" id="card" style="box-shadow: none">

        <div class="card-body">

            <!--Header-->
            <div class="text-center"  style="margin-top: -32px;margin-bottom: -45px;">
                <p class=" mb-5" style="font-weight: 300;font-size: 20px;">Edit Details</p>
            </div>

            <!--Body-->
            <form class="" method="post" id="update_contact_form">
            <div class="md-form">
               <div class="col-md-8 inputGroupContainer">
            <i class="fa fa-envelope prefix"></i>
                <input type="text" id="admin_email" name="admin_email" class="form-control" required value="<?php echo $data["admin_email"] ?>">
                <label for="admin_email">Email</label>
              </div>
            </div>
             <div class="md-form">
               <div class="col-md-8 inputGroupContainer">
              <i class="fa fa-phone prefix"></i>
                <input type="text" id="admin_phone" name="admin_phone" class="form-control" required value="<?php echo $data["admin_mobile"] ?>">
                <label for="admin_phone">Phone</label>
              </div>
            </div>
           
        <div class="  col-lg-4 text-center">
                <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-2" style="margin-right: auto;margin-left: auto">Update Conatct Details</button>
            </div>
            </form>
            

                

        </div>

        <!--Footer-->
       

    </div>
    <!--/Form without header-->

</section>

    </div>
    <!--/.Panel 3-->

   

</div>
</div>
<!--/Main layout-->
    <!--Footer-->
    <footer class="page-footer  center-on-small-only" style="background: #eee;">
        <div class="footer-copyright primary-color-dark" id="footer_content">
        <div class="container-fluid">
            © 2018 Copyright:  <a>digital voting System</a> 

        </div>
    </div>
    </footer>
    <!--/.Footer-->

    <!-- Modal -->
<div class="modal fade" id="change_password_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Enter your current password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" id="current_password">
                   <div class="md-form">
               <div class="col-md-8 inputGroupContainer">
            <i class="fa fa-key prefix"></i>
                <input type="password" id="admin_verify_pwd" name="admin_verify_pwd" class="form-control">
                <label for="admin_verify_pwd">Your Password</label>
              </div>
              <div class="md-form" id="container_pwd" style="display: none" >
              
            </div>
            </div>
            <div class="  col-lg-4 text-center">
                <button type="submit" name="change_password_btn" class="btn btn-primary btn-block btn-rounded z-depth-1" style="margin-right: auto;margin-left:auto">Change</button>
            </div>
                </form>
            </div>
            <div class="modal-footer">
               
               
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="password_changed" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                  <h2>Password Changed</h2>
              </div>
          </div>
  
          <!--Footer-->
          <div class="modal-footer justify-content-center">
              
              <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">OK</a>
          </div>
      </div>
      <!--/.Content-->
  </div>
  </div>
  <!-- Central Modal Medium Success-->
  

<!-- Central Modal Medium Danger -->
  <div class="modal fade" id="password_not_changed" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-danger" role="document">
      <!--Content-->
      <div class="modal-content">
          <!--Header-->
          <div class="modal-header">
              <p class="heading lead">Failed</p>
  
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="white-text">&times;</span>
              </button>
          </div>
  
          <!--Body-->
          <div class="modal-body">
              <div class="text-center">
                  <i class="fa fa-times fa-4x mb-3 animated rotateIn"></i>
                  <h2>Password not matched</h2>
              </div>
          </div>
  
          <!--Footer-->
          <div class="modal-footer justify-content-center">
             
              <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">OK</a>
          </div>
      </div>
      <!--/.Content-->
  </div>
  </div>
  <!-- Central Modal Medium Danger-->




    <!-- SCRIPTS -->
   
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript <script type="text/javascript" src="js/compiled.min.js"></script>-->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript">
        new WOW().init();
    </script>
     
   <script type="text/javascript">
       $(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
   </script>
   
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
    <script type="text/javascript">
          $(document).ready(function() {
    $('#update_info_form').bootstrapValidator({
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



<script type="text/javascript">
          $(document).ready(function() {
    $('#update_contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            
         
           
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
            admin_phone: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
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
  
          $(document).ready(function() {

    $('#change_pwd_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        submitHandler: function(validator, form, submitButton) {
            var container = document.getElementById("container_pwd");
            while (container.hasChildNodes()) {
                container.removeChild(container.lastChild);
            }
            var input = document.createElement("input");
                 
                input.type = "text";
                input.id="admin_password_new";
                input.value=$('#password-field').val();
                container.appendChild(input);
            $('#change_password_modal').modal('show');
      },
        fields: {
            
           admin_new_password: {
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
            confirm_new_password: {
                validators: {
                        stringLength: {
                        min: 8,
                    },
                        notEmpty: {
                        message: 'Please supply your password'
                    },
                    identical: {
                    field: 'admin_new_password',
                    message: 'Password is invalid'
                }
                }
            }
           
            
            }/*,
              submitHandler: function(form) {
                  
                   
  //
 //e.preventDefault();


    }*/
             

        })
      .on('success.form.fv', function(e) {
    e.preventDefault();
    var $form = $(e.target);

    // Enable the submit button
    $form.formValidation('disableSubmitButtons', false);
});
      
       
});


    </script>



<script type="text/javascript">
  
          $(document).ready(function() {

    $('#current_password').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        submitHandler: function(validator, form, submitButton) {
           var pwd= $('#admin_verify_pwd').val(); /* GET THE VALUE OF THE SELECTED DATA */
      var dataString = "user_password="+pwd; /* STORE THAT TO A DATA STRING */

      $.ajax({ /* THEN THE AJAX CALL */
        type: "POST", /* TYPE OF METHOD TO USE TO PASS THE DATA */
        url: "getcurrentpassword.php", /* PAGE WHERE WE WILL PASS THE DATA */
        data: dataString, /* THE DATA WE WILL BE PASSING */
        success: function(result){ /* GET THE TO BE RETURNED DATA */
          
          if (result==1) {
      var pwd1= $('#admin_password_new').val(); /* GET THE VALUE OF THE SELECTED DATA */
      var dataString = "admin_cnfrm_pwd="+pwd1; /* STORE THAT TO A DATA STRING */

      $.ajax({ /* THEN THE AJAX CALL */
        type: "POST", /* TYPE OF METHOD TO USE TO PASS THE DATA */
        url: "changepwd.php", /* PAGE WHERE WE WILL PASS THE DATA */
        data: dataString, /* THE DATA WE WILL BE PASSING */
        success: function(result){
             if(result==1) {
              $('#change_password_modal').modal('hide');
              $('#password_changed').modal('show'); 
             }     /* GET THE TO BE RETURNED DATA */
            /* THE RETURNED DATA WILL BE SHOWN IN THIS DIV */
         
           
        }
      });    
 }
          else{
             $('#change_password_modal').modal('hide');
            $('#password_not_changed').modal('show');
          }

           /* THE RETURNED DATA WILL BE SHOWN IN THIS DIV */
        }
      });
      },
        fields: {
            
           admin_verify_pwd: {
                validators: {
                        stringLength: {
                        min: 2,
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
            
           
            
            }/*,
              submitHandler: function(form) {
                  
                   
  //
 //e.preventDefault();


    }*/
             

        })
     
      
       
});


    </script>



</body>

</html>
