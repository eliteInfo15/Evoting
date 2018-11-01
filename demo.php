<?php 
session_start();
require 'db.php';
$select_qry="select candidate_id from election where election_id='e1'";
             $select_rs=mysqli_query($conn,$select_qry);
              $data=mysqli_fetch_assoc($select_rs);
             print_r($data);
 ?>