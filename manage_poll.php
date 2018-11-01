<?php 
require 'db.php';
session_start();
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
                        <li class="nav-item active"><a href="#dash2"  class="nav-link js-scroll-trigger">
                           <div class="chip btn" style="color: rgba(0,0,0,.6) !important;">
    <i class="fa fa-pie-chart" style="font-size: 20px"></i>Show Elections
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
    



<section class="form-elegant container">

    <!--Form without header-->

    <div class="card" id="card" style="box-shadow: none">

        <div class="card-body">

            <!--Header-->
            
<form method="post" id="choose_ward_form"  style="margin:20px auto;">
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
<select data-select-id="d10efa92-7e52-007b-ec3a-57361a26ef36" class="initialized" name="election_ward" name="election_ward">
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
           <div class="  col-lg-4 text-center">
                <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-2" style="margin-right: auto;margin-left: auto" name="btn_submit1">Create Election</button>
            </div> 
</form>
<?php 
if (isset($_POST["btn_submit1"])) {
$election_ward=$_POST['election_ward']; 
?>

 <form class="" method="post" id="add_election_form" >
       <input type="text" id="election_ward" class="form-control" style="visibility: hidden"  required value="<?php echo $election_ward ?>" name="election_ward">
             
            <div class="md-form">
               <div class="col-md-8 inputGroupContainer">
            <i class="fa fa-user prefix"></i>
                <input type="text" id="election_id" class="form-control" required name="election_id">
                <label for="election_id">Election id</label>
                 <span id="eid" style="color: red"></span>
            </div>
          </div>
            
            <div class="md-form">
               <div class="col-md-8 inputGroupContainer">
            <i class="fa fa-user prefix"></i>
           
                <input type="text" id="election_name" class="form-control" required name="election_topic">
                <label for="election_name">Election topic</label>
            </div>
             </div>
    
            
             <div class="md-form">
               <div class="col-md-8 inputGroupContainer">
              <i class="fa fa-mortar-board prefix"></i>
             <div class="select-wrapper">
<span class="caret">▼</span>
<input type="text" class="select-dropdown" readonly="true" data-activates="select-options-d10efa92-7e52-007b-ec3a-57361a26ef36" value="Choose your option"><ul id="select-options-d10efa92-7e52-007b-ec3a-57361a26ef36" class="dropdown-content select-dropdown ">
  <li class="disabled "><span>Choose position</span></li>
  <?php 
       $qry="select * from position;";
       $rs=mysqli_query($conn,$qry);

        while($data=mysqli_fetch_assoc($rs)){
          ?>

<li class=""><span><?php echo $data["position_name"]; ?></span></li>

          <?php
        }
   ?>

</ul>
<select data-select-id="d10efa92-7e52-007b-ec3a-57361a26ef36" class="initialized" name="election_position">
                  <option value="" disabled="" selected="">Choose position</option>
                 <?php 
                            $qry="select * from position;";
       $rs=mysqli_query($conn,$qry);

                          while ($data=mysqli_fetch_assoc($rs)) {
                           ?>
                          
        <option value="<?php echo $data["position_id"]; ?>"><?php echo $data["position_name"]; ?></option>
                           <?php

                          }

                  ?>
                  
                  
                </select></div>
                
            </div>
          </div>

 



            <?php 

           $party_query="select * from party;";
              $rs_party  =mysqli_query($conn,$party_query);
              while ($result_party=mysqli_fetch_assoc($rs_party)) {
                
                 ?>

                         <div class="md-form">
                           <div class="col-md-8 inputGroupContainer">
              <i class="fa fa-users prefix"></i>
              <label style="margin-top: -21px;">Select Candidate from <?php echo $result_party["party_name"]; ?> party</label>
              <div class="select-wrapper">
<span class="caret">▼</span>
<input type="text" class="select-dropdown" readonly="true" data-activates="select-options-d10efa92-7e52-007b-ec3a-57361a26ef36" value="Choose your option"><ul id="select-options-d10efa92-7e52-007b-ec3a-57361a26ef36" class="dropdown-content select-dropdown ">
  <li class="disabled "><span>Choose candidate</span></li>
  <?php 
       $qry="select * from candidate where party_id='".$result_party["party_id"]."' and candidate_ward='".$election_ward."';";
       $rs=mysqli_query($conn,$qry);

        while($data=mysqli_fetch_assoc($rs)){
          ?>

<li class=""><span><?php echo $data["candidate_name"]; ?></span></li>

          <?php
        }
   ?>

</ul>
<select data-select-id="d10efa92-7e52-007b-ec3a-57361a26ef36" class="initialized" name="election_candidates[]">
                  <option value="" disabled="" selected="<?php echo $data["party_id"] ?>">Choose candidate</option>
                 <?php 
                            $qry="select * from candidate where party_id='".$result_party["party_id"]."' and candidate_ward='".$election_ward."';";
       $rs=mysqli_query($conn,$qry);

                          while ($data=mysqli_fetch_assoc($rs)) {
                           ?>
                          
        <option value="<?php echo $data["candidate_id"]; ?>"><?php echo $data["candidate_name"]; ?></option>
                           <?php

                          }

                  ?>
                  
                  
                </select>
              </div>

    
               
            </div>
          </div>
                 <?php 


              }
             ?>
                 
            <div class="md-form" id="container">
              
            </div>
           <div class="md-form" style="margin-top: 34px">
             <div class="col-md-8 inputGroupContainer">
     <i class="fa fa-calendar prefix"></i>       
    <input  type="date" name="election_start_date">
    <label for="date-picker-example" style="position: absolute;top: -17px">Starting date</label>
</div>
</div>
 <div class="md-form" style="margin-top: 34px">
   <div class="col-md-8 inputGroupContainer">
     <i class="fa fa-calendar prefix"></i>       
    <input  type="date"  name="election_end_date">
    <label for="date-picker-example" style="position: absolute;top: -17px">Ending date</label>
</div>
</div>
         

             
            <div class="  col-lg-4 text-center">
                <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-2" style="margin-right: auto;margin-left: auto" name="btn_submit">Create Election</button>
            </div>
            </form>

<?php
}


 ?>
            <!--Body-->
         
            

                

        </div>

        <!--Footer-->
       

    </div>
    <!--/Form without header-->

</section>



<?php 

if (isset($_POST["btn_submit"])) {
       $election_id=$_POST["election_id"];
       $same_id_status=0;
       $qry_id="select * from election where election_id='".$election_id."'";
                  $rsid=mysqli_query($conn,$qry_id);
                     $n_id=mysqli_num_rows($rsid);
                     if ($n_id>0) {
                       $same_id_status=1;
                        ?>
                <script type="text/javascript">alert('Election id already regsitered');
                document.getElementById('eid').innerHTML='';
              </script>
                    <?php
                     }
        $election_topic=$_POST["election_topic"];
         $election_position=$_POST["election_position"];
        $election_ward=$_POST["election_ward"];
          $election_start_date=$_POST["election_start_date"];
          $curdate=Date('Y-m-d');
          $now = time(); // or your date as well
$start_date = strtotime($election_start_date);
$datediff = $now - $start_date;

$days=round($datediff / (60 * 60 * 24));
       //  $diff= date_diff($election_start_date,$curdate);
          if ($days==0) {
            $status=1;
          }
          else{
            $status=0;
          }


        

          $election_end_date=$_POST["election_end_date"];
          $election_candidates_ids=$_POST["election_candidates"];;
           $n=count($election_candidates_ids);

                if ($election_start_date==$election_end_date) {
                  ?>
             <script type="text/javascript">alert('starting and ending date cannot be the same')</script>

                  <?php
                }
                else if($election_start_date>=$election_end_date){
 
          echo "<script>alert('Ending date cannot be previous of starting date')</script>";   

                 
                }
               
                else{


                      $check_qry="select distinct starting_date,end_date from election where election_ward='".$election_ward."';";
               $ward_status=0;
             $chk_rs= mysqli_query($conn,$check_qry);
             
              $n_rows=mysqli_num_rows($chk_rs);
                  
             while($prev_election_data_of_ward=mysqli_fetch_assoc($chk_rs)){
               if (($election_start_date>=$prev_election_data_of_ward['starting_date'] && $election_start_date<=$prev_election_data_of_ward['end_date']) || ( $election_end_date>=$prev_election_data_of_ward['starting_date'] && $election_end_date<=$prev_election_data_of_ward['end_date'] ) ) {
                 $ward_status=1;
               }
             }
            
             
             
             
             
             

             if ($ward_status==1) {
               ?>
<script type="text/javascript">alert('election for selected ward already exists for selected dates')</script>
               <?php
             }
           
          else{
              $check_qry_pos="select distinct starting_date,end_date from election where election_ward='".$election_ward."' and election_position='".$election_position."';";

            $ward_position_election_status=0;
             $chk_rs_pos= mysqli_query($conn,$check_qry_pos);
             $nn=mysqli_num_rows($chk_rs_pos);
             if ($nn>0) {
                $pos_data=mysqli_fetch_assoc($chk_rs_pos);
              
             
              $date_start = new DateTime($pos_data['starting_date']);
              $date_end = new DateTime($pos_data['end_date']);

$date_start->add(new DateInterval('P2Y'));
$start_date_p_2y= $date_start->format('Y-m-d');
$date_end->add(new DateInterval('P2Y'));
$end_date_p_2y= $date_end->format('Y-m-d');
if ($election_start_date<=$start_date_p_2y && $election_end_date<=$end_date_p_2y) {
  ?>
<script type="text/javascript">alert('election for selected post already created and it can be conducted once in 2 Years')</script>

  <?php
}
else if($same_id_status==0){
   for ($i=0; $i <$n ; $i++) { 
            $qry="insert into election values('".$election_id."','".$election_topic."','".$election_candidates_ids[$i]."','".$election_position."','".$election_start_date."','".$election_end_date."','".$status."','".$election_ward."')";
            
              mysqli_query($conn,$qry);
           }

            ?>
<script type="text/javascript">alert('election created')</script>
               <?php
}
   
             }
             else if($same_id_status==0){



             
 for ($i=0; $i <$n ; $i++) { 
            $qry="insert into election values('".$election_id."','".$election_topic."','".$election_candidates_ids[$i]."','".$election_position."','".$election_start_date."','".$election_end_date."','".$status."','".$election_ward."')";
            
              mysqli_query($conn,$qry);
           }

            ?>
<script type="text/javascript">alert('election created')</script>
               <?php


             }
                     
          }


                }


        
}


 ?>

<div id="dash2" class="smooth">
<!--Card image-->
        <?php 

             $select_qry="select distinct election_id,  starting_date,  end_date,  election_ward,  election_topic, election_position from election;";
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
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Election Ward</th>
                        <th>election topic</th>
                        <th>Election position</th>
                    </tr>
                </thead>
                <!--Table head-->
            
                <!--Table body-->
                <tbody align="center">
                  <?php while ($row=mysqli_fetch_assoc($result_data)) {
                    ?>
                      
                       <tr>
                        <th scope="row"><?php echo $row["election_id"]; ?></th>
                        <td><?php $date_starting=date_create($row["starting_date"]); 
                                     echo date_format($date_starting,"d M, Y"); ?></td>
                        <td><?php $date_ending=date_create($row["end_date"]); 
                                     echo date_format($date_ending,"d M, Y");
                         ?></td>
                        <td><?php echo $row["election_ward"]; ?></td>
                        <td><?php echo $row["election_topic"]; ?></td>
                        <td><?php $pid= $row["election_position"]; 
                                  $qry1="select position_name from position where position_id='".$pid."'";
                                  $rs1=mysqli_query($conn,$qry1);
                                 $pos=mysqli_fetch_assoc($rs1);
                                 echo $pos['position_name']; 
                        ?></td>
                        
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
                  <p>Do you really want to remove candidate?</p>
              </div>
          </div>
  
          <!--Footer-->
          <div class="modal-footer justify-content-center">
              <a type="button" class="btn btn-danger">Remove <i class="fa fa-diamond ml-1"></i></a>
              <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Close</a>
          </div>
      </div>
      <!--/.Content-->
  </div>
  </div>
  <!-- Central Modal Medium Danger-->

  
    <!-- SCRIPTS -->
   
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
  
    </script>
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
                <script type="text/javascript">
                  // Data Picker Initialization
$('.datepicker').pickadate();
                </script>
                 <script type="text/javascript">
       function addFields(){
            var number = document.getElementById("member").value;
            var container = document.getElementById("container");
            while (container.hasChildNodes()) {
                container.removeChild(container.lastChild);
            }
            for (i=0;i<number;i++){
                //container.appendChild(document.createTextNode("Member " + (i+1)));
                var div_container = document.createElement("div");
                div_container.classList.add("md-form");
                while (div_container.hasChildNodes()) {
                div_container.removeChild(div_container.lastChild);
            }
               // div_container.class="md-form";
                 container.appendChild(div_container);
                 var icon = document.createElement("i"); 
                 icon.classList.add("fa");
                 icon.className+=" fa-user prefix";
                 div_container.appendChild(icon);
                var input = document.createElement("input");
                 
                input.type = "text";
                input.name="name"+(i+1);
                input.id="member"+(i+1);
                input.class="form-control"; 
                div_container.appendChild(input);
                var label = document.createElement("label");
                 label.htmlFor="member"+(i+1);
                 label.innerHTML="name"+(i+1);
                 div_container.appendChild(label);
                //container.appendChild(document.createElement("br"));
                var suggestions_div = document.createElement("div");
                  suggestions_div.classList.add("searchBarResults");
                  suggestions_div.setAttribute("id","result");
                  div_container.appendChild(suggestions_div);
            }
        }
    </script>
<script type="text/javascript">
  

$(document).ready(function(){
    $('#member1').on("keyup input", function(){
      alert('hi');
        /* Get input value on change */
        var term = $(this).val();
        var resultDropdown = $("#result");
        if(term.length){
            $.get("backend-search.php?dataaa="+term, {query: term}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });

    // Set search input value on click of result item
    $("#result").on("click", "p", function(){
        $("#searchBar").val($(this).text());
        $("#result").empty();
    });
});




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
