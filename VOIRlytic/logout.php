<?php
//start a session
 session_start();
	
 unset($_SESSION['email']);
 unset($_SESSION['pass']);

 session_unset();
	
//destroy the session to logout
 session_destroy();
 session_write_close();

header("Location: home.php");
exit;

?>