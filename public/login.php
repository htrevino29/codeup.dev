<?php
require_once '../auth.php';
session_start();


function pageController()
{
	$redirectTo = '/authorized.php';
	$username = isset($_POST['username']) ? $_POST['username'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';

	Auth::attempt($username, $password);

	if($username == 'guest' && $password == 'password'){
		$_SESSION['logged_in_user'] = $username;
		$_SESSION['user_is_logged_in'] = true;
		header("Location: $redirectTo");
		die();
	} if($username == '' && $password == '')  {
		echo $username;
		echo $password;
	}
	else {
		echo "<script>
		alert('username or password invalid');
		</script>";	
	}
	return [
		'username' => $username,
		'password' => $password,

	];

	if(isset($_SESSION['username']))
	{
		header("Location: auth.php");
		die();
	}

}
extract(pageController());

?>
<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class='container'>
		<h1>Sign in </h1>
	    <form method="POST">
	        <label>Username:</label><br>
	        <input type="text" name="username"><br>
	        <label>Password:</label><br>
	        <input type="password" name="password"><br>
	        <input type="submit" class=' btn btn-default'>
	    </form>
	</div>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>