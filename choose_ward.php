<?php 

session_start();

  $election_ward=$_POST['election_ward'];
  $_SESSION['ward_session']=$election_ward;
echo $_SESSION['ward_session'];
  


 ?>