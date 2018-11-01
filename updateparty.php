<?php 
require 'db.php';
if($_GET['id']!="" )
{
	$id=$_GET['id'];
	
  $qry="select * from party where party_id='".$id."'";
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
            <form class="" method="post" id="update_candi" enctype="multipart/form-data">

             
            <div class="md-form">
              <div class="col-md-8 inputGroupContainer">
            <i class="fa fa-user prefix"></i>
                <input type="text" id="party_id" class="form-control" readonly required name="party_id" value="<?php echo $data['party_id'] ?>">
                <label for="party_id">party id</label>
              </div>
            </div>
            
            <div class="md-form">
              <div class="col-md-8 inputGroupContainer">
            <i class="fa fa-user prefix"></i>
                <input type="text" id="party_name" class="form-control"  required name="party_name" value="<?php echo $data['party_name'] ?>">
                <label for="party_name">party name</label>
              </div>
            </div>
             
         
            
               
            <div class="  col-lg-4 text-center">
                <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-2" style="margin-right: auto;margin-left: auto" name="update_btn">Update party</button>
            </div>
            
            </form>
            

        </div>

        <!--Footer-->
       

    </div>
    <!--/Form without header-->

  
<div class="modal fade" id="updated_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                  <h2>party Updated</h2>
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






 <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript <script type="text/javascript" src="js/compiled.min.js"></script>-->
    <script type="text/javascript" src="js/mdb.min.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
<script type="text/javascript">
          $(document).ready(function() {
    $('#update_candi').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
         
submitHandler: function(validator, form, submitButton) {

var party_id= $('#party_id').val();
var party_name= $('#party_name').val();


 /* GET THE VALUE OF THE SELECTED DATA */
      var dataString = "party_id="+party_id+"&party_name="+party_name; /* STORE THAT TO A DATA STRING */

      $.ajax({ /* THEN THE AJAX CALL */
        type: "POST", /* TYPE OF METHOD TO USE TO PASS THE DATA */
        url: "updateparty_ajax.php", /* PAGE WHERE WE WILL PASS THE DATA */
        data: dataString, /* THE DATA WE WILL BE PASSING */
        success: function(result){
             if(result) {
              //$('#update_modal_candidates').modal('hide');
              //$('#updated_modal').modal('show');
              window.parent.location.reload();

             }     /* GET THE TO BE RETURNED DATA */
            /* THE RETURNED DATA WILL BE SHOWN IN THIS DIV */
         
           
        }
      });


},




   



        fields: {
            pos_id: {
                validators: {
                        stringLength: {
                        min: 1,
                    },
                    
                        notEmpty: {
                        message: 'Please enter position_id'
                    }
                }
            },
             pos_name: {
                validators: {
                     stringLength: {
                        min: 3,
                    },
                    notEmpty: {
                        message: 'Please enter Position name'
                    }
                }
            },
         
             cnd_address: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                     
                        notEmpty: {
                        message: 'Please supply your address'
                    }
                    

                }
            },
            
            cnd_mail: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
            cnd_phone: {
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