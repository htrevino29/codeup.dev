<?php 
require_once 'log.php';

class auth
{

	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';
	// public static $userInput = ;
	public static function attempt($username, $password)
	{
		if($username == 'guest' && $password == 'password')
		{
			$_SESSION['logged_in_user'] = $username;
			$_SESSION['user_is_logged_in'] = true;
		}

		

	}

	// Auth::attempt($username, $password)
	// // if Auth::attempt($username, $password) = true then set the LOGGED_IN_USER session variable as before.
	// // Use the Log class to log an info message: "User $username logged in."
	// // use the PHP method password_verify() to check the password hash.
	// Auth::check()
	// // will return a boolean whether or not a user is logged in.
	// Auth::user()
	// // will return the username of the currently logged in user.
	// Auth::logout(). 
	// // will end the session, just like we did in the sessions exercise.


}



 ?>