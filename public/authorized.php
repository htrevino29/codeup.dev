<?php  
	session_start();

	$redirectTo = '/login.php';
	$stay = '/authorized.php';
	if ($_SESSION['user_is_logged_in'] == false){
		// echo 'go die';
	header("Location: $redirectTo");
	die();
	}

?>
<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>authorized</title>
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>
	<body>
		<div class='container col-lg-12'>
			<h1 class='text-centered'>AUTHORIZED</h1>
			<a href="logout.php">done!? click here!</a>
		</div>
	</body>
	<script src="/js/bootstrap.min.js"></script>
</html>
