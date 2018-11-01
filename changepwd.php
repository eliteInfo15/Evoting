<?php 

session_start();
require 'db.php';
$qry="update admin set admin_password ='".$_POST["admin_cnfrm_pwd"]."' where admin_username='".$_SESSION["admin_username_session"]."'";
mysqli_query($conn,$qry);
 $n=mysqli_affected_rows($conn);
echo $n;
 ?>