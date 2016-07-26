<?php
	var_dump($_GET);
	var_dump($_POST);
?>
<!DOCTYPE>
<html>
	<body>
		<form>
			<input type="text" id="qty" name="qty" value="" placeholder="How Many Pies?">
			<label for="crust">Select crust type:</label>
			<select id="crust" name="crust">
				<option>Original</option>
				<option>Pan</option>
			<p>Toppings?</p>
			<label><input type="checkbox" id="pepperoni" name="toppings[]" value="pepperoni">Pepperoni</label>
			<label><input type="checkbox" id="ham" name="toppings[]" value="hame">Ham</label>
			<label><input type="checkbox" id="olives" name="toppings[]" value="olives">Olives</label>
			<label><input type="checkbox" id="onions" name="toppings[]" value="onions">Onions</label>
			<label><input type="checkbox" id="mushrooms" name="toppings[]" value="mushrooms">mushrooms</label>
		</form>
	</body>
</html>