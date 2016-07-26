<?php
	var_dump($_GET);
	var_dump($_POST);
?>
<!DOCTYPE>
<html>
	<body>
		<form>
			<input type="text" id="username" name="username" value="" placeholder="User Name">
				<br>
			<input type="password" id="password" name="password" placeholder="Enter Password Here">
				<br>
			<input type="checkbox" id="remember_me" name="remember_me" value="yes" checked>
			<label for="rememember_me">Remember...to Remember...to Remember me!</label>
				<br>
			<button>Login</button>
		</form>
	</body>

</html>
