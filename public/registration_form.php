<?php
	var_dump($_GET);
	var_dump($_POST);
?>
<!DOCTYPE>
<html>
	<body>



		<header id=".fancyheader">give me your info</header>
		<link rel="stylesheet" href="site.css">
		<form>
			<input type="text" id="firstname" name="firstname" value="" placeholder="First Name">
				<br>
			<input type="text" id="lastname" name="lastname" value="" placeholder="Last Name">
				<br>
			<input type="text" id="username" name="username" value="" placeholder="Username">
				<br>
			<input type="password" id="password" name="password" value="" placeholder="Password">
				<br>
			<input type="passwordconfirm" id="passwordconfirm" name="" value="" placeholder="Password confirm">
				<br>
			<input type="checkbox" id="newsletter" name="newsletter" value="yes" checked>
				<br>
			<label for="newsletter">I love junk mail!</label>
				<br>
			<button>Submit</button>
		
		</form>
	</body>
</html>	