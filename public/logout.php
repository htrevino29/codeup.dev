<?php 
session_start();
// 
function logout()
{
	session_unset();
	session_destroy();
	session_regenerate_id();
	session_start();
	// clear the session
	// destroy session
	// obliterate info
	header("Location: login.php");
	die();
}
logout();
?>
 