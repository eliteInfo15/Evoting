<?php 
session_start();
require 'db.php';

$qry="select * from admin where admin_username='".$_SESSION["admin_username_session"]."' && admin_password='".$_POST["user_password"]."' ";

$rs=mysqli_query($conn,$qry);
$n=mysqli_num_rows($rs);

echo $n;
 ?>