<?php

$redirectTo = '/authorized.php';
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
if($username == 'guest' && $password == 'password'){
	echo $username;
	echo $password;
	header("Location: $redirectTo");
} if($username == '' && $password == '')  {
	echo $username;
	echo $password;

}
else {
	echo "<script>
	alert('username or password invalid');
	</script>";
	
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class='container'>
		<h1>Sign in now!</h1>
	    <form method="POST">
	        <label>Username:</label>
	        <input type="text" name="username"><br>
	        <label>Password:</label>
	        <input type="password" name="password"><br>
	        <input type="submit" class='btn'>
	    </form>
	</div>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>