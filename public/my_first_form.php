<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<a href="#username">Click me to focus the username field</a>
<hr>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<form method="post" action="/my_first_form.php">
	<h4>User Login</h4>
	<p>
		<label id="login" name="username" placeholder="Input user name">Username</label>
		<input id="username" name="username" type="text">
	</p>
	<p>
		<label for="password">Password</label>
		<input id="password" name="password" type="password">
	</p>
	<p>
		<button type="submit">Login</button>
	</p>
</form>
<form method="GET" action="http://duckduckgo.com">
	<input type="text" name="q">
	<input type="submit">
</form>
<form>
	<h4>Compose an Email</h4>
	<textarea id="email_to" name="email_to" rows="1" cols="40" placeholder="To"></textarea>
	 <br>
	 <br>
	<textarea id="email_from" name="email_from" rows="1" cols="40" placeholder="From"></textarea>
	 <br>
	 <br>
		<textarea id="email_body" name="email_body" rows="5" cols="40" placeholder="Body"></textarea>

		<input type="checkbox" id="mailing_list" name="mailing_list" value="yes" checked>
		<label for="mailling_list">Send Me Junk Mail!!!! plzzzz!</label>
		<button type"submit">Send</button>
</form>
	<hr>
		<br>
	<a href="https://reddit.com/search?q=javascript&sort=top">Search reddit for 'javascript' and sort results by 'top'</a>
	<hr>
	 <h3>Search Reddit, and sort results by 'top'</h3>
<form target="_blank" method="GET" action="http://www.reddit.com/search">
	<input type="text" name="q">
	<input type="hidden" name="sort" value="top">
	<input type="submit">
</form>
<form>
	<h2>MC Test</h2>
		
		<p>What color is lukes light saber?</p>
		<label>
			<input type="radio" name="q1" value="green">
			GREEN
		</label>
		<label>
			
			<input type="radio" name="q1" value="blue">
			BLUE
		</label>
		<label>
			
			<input type="radio" name="q1" value="orange">
			ORANGE
		</label>
		<label>
			
			<input type="radio" name="q1" value="what is a light saber?">
			WHAT IS A LIGHT SABER?
		</label>
		<p>who is lukes father?</p>
			<label>
				<input type="radio" name="q2" value="yoda">
				YODA
			</label>
			<label>
				<input type="radio" name="q2" value="indiana jones">
				INDIANA JONES
			</label>
			<label>
				<input type="radio" name="q2" value="anakin">
				ANAKIN
			</label>
			<label>
				<input type="radio" name="q2" value="darth vader">
				DARTH VADER
			</label>
			<BR>
		<label for="sw">Which is your favourite Star Wars movie ever?</label>
		<select id="sw" name="sw[]" multiple>
			<option value="EPISODE IV">EPISODE IV</option>
			<option value="EPISODE V">EPISODE V</option>
			<option value="EPISODE VI">EPISODE VI</option>
		</select>
			
	<h2>Select Testing</h2>
		<p>Did you eat lunch?</p>
		<label for="lunch">Food: </label>
		<select id="food" name="food">
    		<option>Yes</option>
    		<option>No</option>
</select>



</form>


	