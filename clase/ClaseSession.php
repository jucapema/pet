<?php 
session_start();

class SessionesPet
{
		
	public static function session_active(){
		// session_start();
		return (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true);
	}

	public static function session_info(){		
		return $_SESSION['user'];
	}

	public static function is_expired(){
		// session_start();
		time()>$_SESSION['expire'] ? true : false;		
	}
}

 ?>