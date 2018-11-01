<?php 
session_start();
unset($_SESSION["admin_username_session"]);
unset($_SESSION["admin_password_session"]);
session_destroy();
echo("<script>location.href = 'adminlogin.php'</script>");
 ?>