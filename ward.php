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
            <a class="nav-link waves-light active" data-toggle="tab" href="#panel51" role="tab"><i class="fa fa-eye" aria-hidden="true" style="font-size: 30px;vertical-align: middle;"></i> &nbsp;&nbsp;View ward</a>
        </li>
        <li class="nav-item">
            <a class="nav-link waves-light" data-toggle="tab" href="#panel52" role="tab"><i class="fa  fa-user-plus" aria-hidden="true" style="font-size: 30px;vertical-align: middle;"></i> &nbsp;&nbsp;Add ward</a>
        </li>
       
        
    </ul>
</div>

<!-- Tab panels -->
<div class="tab-content card">

    <!--Panel 1-->
    <div class="tab-pane fade in show active" id="panel51" role="tabpanel">
     
<div class="card" style="//margin: 0px auto; //width: 50%;box-shadow: none">

        <!--Card image-->
        

        <!--Card content-->
        <div class="card-body">
            <!--Title-->
    
             <?php 

             $select_qry="select * from ward;";
            $result_data= mysqli_query($conn,$select_qry);
         ?>
            <table class="table">

    <!--Table head-->
    <thead style="background: #0D47A1" align="center">
        <tr class="text-white">
            <th>Id</th>
            <th>ward Name</th>
           
           
            <th>Options</th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody align="center">
        <?php while ($row=mysqli_fetch_assoc($result_data)) {
                    ?>
                      
                       <tr>
                        <th scope="row"><?php echo $row["ward_id"]; ?></th>
                        <td><?php echo $row["ward_name"]; ?></td>
                        
                        
                        <td>
                          
              <a href="" data-toggle="modal" data-target="#update_modal_position"  class="btn btn-success btn-sm" onclick="modal_update_ward('Update','<?php echo $row['ward_id'];?>')"><i class="fa fa-pencil"></i> Edit</a>
              
              <a  href="#" data-toggle="modal" data-target="#centralModalDanger" class="btn btn-danger btn-sm" onclick="modal_delete_ward('Update','<?php echo $row['ward_id'];?>')"  ><i class="fa fa-times"></i> Remove</a>
            </td>
        </tr>
<?php } ?>
        
        
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
             <form class="" method="post" id="add_ward">

             
            <div class="md-form">
               <div class="col-md-8 inputGroupContainer">
            <i class="fa fa-user prefix"></i>
                <input type="text" id="ward_id_val" class="form-control" required name="ward_id">
                <label for="ward_id_val">ward id</label>
            </div>
            </div>
            <div class="md-form">
               <div class="col-md-8 inputGroupContainer">
            <i class="fa fa-user prefix"></i>
                <input type="text" id="ward_name_val" class="form-control" required name="ward_name">
                <label for="ward_name_val">ward name</label>
            </div>
             </div>
            
             
            <div class="  col-lg-4 text-center">
                <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-2" style="margin-right: auto;margin-left: auto">Add ward</button>
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
  <div class="modal fade" id="centralModalSuc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-success" role="document">
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
                  <i class="fa fa-check fa-4x mb-3 animated rotateIn"></i>
                  <p>Successfuly Added</p>
              </div>
          </div>
  
          <!--Footer-->
          <div class="modal-footer justify-content-center">
              
              <a href="ward.php" type="button" class="btn btn-outline-success waves-effect" >Close</a>
          </div>
      </div>
      <!--/.Content-->
  </div>
  </div>
  <!-- Central Modal Medium Danger-->
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
                <h3>Do you really want to remove?</h3>
                 
              </div>
          </div>
  
          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <form method="post" id="deleteForm">
              <input type="text" name="delete_candidate_name" id="modal-input-delete" style="visibility: hidden;" >
              <button type="submit" name="delete_btn" class="btn btn-danger">Remove <i class="fa fa-times ml-1"></i></button>
            </form>
            
              <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Close</a>
          </div>
      </div>
      <!--/.Content-->
  </div>
  </div>
  <!-- Central Modal Medium Danger-->
  <div class="modal fade" id="update_modal_position" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
        

         function modal_delete_ward(param1 ,param2)
{
  document.getElementById('modal-input-delete').value = param2;
  ;
  document.getElementById('modal-tablesLabel_question').innerHTML = param1.replace("_"," ");
}

function modal_update_ward(param1 ,param2)
{
  document.getElementById('modal-body-update').innerHTML = 
    '<iframe id="frame1" src="updateward.php?id='+param2+'" width="100%" height="400" frameborder="0"></iframe>';
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
               var ward_id= $('#modal-input-delete').val();

 /* GET THE VALUE OF THE SELECTED DATA */
      var dataString = "ward_id="+ward_id; /* STORE THAT TO A DATA STRING */

      $.ajax({ /* THEN THE AJAX CALL */
        type: "POST", /* TYPE OF METHOD TO USE TO PASS THE DATA */
        url: "deleteward_ajax.php", /* PAGE WHERE WE WILL PASS THE DATA */
        data: dataString, /* THE DATA WE WILL BE PASSING */
        success: function(result){
             if(result) {
              //$('#update_modal_position').modal('hide');
              //$('#updated_modal').modal('show');
             $('#centralModalDanger').modal('hide');
             
             location.href="ward.php";
             }     /* GET THE TO BE RETURNED DATA */
            /* THE RETURNED DATA WILL BE SHOWN IN THIS DIV */
         
           
        }
      });
          },
        fields: {
            cnd_id: {
                validators: {
                        stringLength: {
                        min: 1,
                    },
                    
                        notEmpty: {
                        message: 'Please enter candidate id'
                    }
                }
            },
             cnd_name: {
                validators: {
                     stringLength: {
                        min: 3,
                    },
                    notEmpty: {
                        message: 'Please enter candidate name'
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
    $('#add_ward').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
          submitHandler: function(validator, form, submitButton) {

               var ward_id= $('#ward_id_val').val();
                 var ward_name= $('#ward_name_val').val();

 /* GET THE VALUE OF THE SELECTED DATA */
      var dataString = "ward_id="+ward_id+"&ward_name="+ward_name; /* STORE THAT TO A DATA STRING */

      $.ajax({ /* THEN THE AJAX CALL */
        type: "POST", /* TYPE OF METHOD TO USE TO PASS THE DATA */
        url: "add_ward.php", /* PAGE WHERE WE WILL PASS THE DATA */
        data: dataString, /* THE DATA WE WILL BE PASSING */
        success: function(result){

             if(result==1) {
              //$('#update_modal_position').modal('hide');
              //$('#updated_modal').modal('show');
              $('#ward_id_val').val("");
                 $('#ward_name_val').val("");
             $('#centralModalSuc').modal('show');
             
             
             } 
             else if (result==20) {
              alert('ward already exists');
             }    /* GET THE TO BE RETURNED DATA */
            /* THE RETURNED DATA WILL BE SHOWN IN THIS DIV */
         
           
        }
      });
          },
        fields: {
            ward_id: {
                validators: {
                        stringLength: {
                        min: 1,
                    },
                    
                        notEmpty: {
                        message: 'Please enter ward id'
                    }
                }
            },
            ward_name: {
                validators: {
                     stringLength: {
                        min: 3,
                    },
                    notEmpty: {
                        message: 'Please enter ward name'
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
