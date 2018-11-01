<?php 
require 'db.php';
          $count=1;
            $cnd_id=$_POST["candidate_option"];
            $e_id=$_POST["election_id_val"];
            $v_id=$_POST["voter_id_val"];
            $update_voting_status="update voter set voter_voting_status='voted' where voter_id='".$v_id."'";
            mysqli_query($conn,$update_voting_status);
            $q="insert into vote_data values('".$v_id."','".$cnd_id."','".$e_id."');";
            $rs=mysqli_query($conn,$q);
             $select_qry="select candidate_id from election where election_id='".$e_id."'";
             $select_rs=mysqli_query($conn,$select_qry);
             while($data=mysqli_fetch_assoc($select_rs)){
             	$qry="update voting_result set election_id='".$e_id."' where candidate_id='".$data['candidate_id']."' ";
             	mysqli_query($conn,$qry);
             }
            
            $qry_update="update voting_result set vote_count=vote_count+1 where candidate_id='".$cnd_id."' and election_id='".$e_id."'";
            mysqli_query($conn,$qry_update);
          //$getcount_qry="select vote_count from voting_result where candidate_id='".$cnd_id."' and election_id='".$e_id."'";
              //$res=mysqli_query($conn,$getcount_qry);
             
            //$count_qry="insert into voting_result values('".$cnd_id."','".$count."','".$e_id."');";
             echo $rs;
 ?>