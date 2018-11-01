<?php 
session_start();
unset($_SESSION["voter_username_session"]);
unset($_SESSION["voter_password_session"]);
session_destroy();
echo("<script>location.href = 'userlogin.php'</script>");
 ?>