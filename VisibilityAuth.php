<?php 
require_once 'VisibilityLog.php';


class Auth{
	// bestguest's password is bestguest1
	// worstguest's password is ihatethis
	
	// public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';
	// public static $passwords = ['$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm'];

	// public static $usernames = [];

	private static $passwords = [
		'guest' => '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm', 
		'bestguest' => '$2y$10$2Hb4KETNdlcFKv2FMDU/g.dmZI6tLOUN1yPRaChif6pBnUhyD97LC', 
		'worstguest' => '$2y$10$DnUpH7OUKjhRbDxepGFSmeDndFvQL1SOeQYUW92D/ChViKDuFMCYC', 
		'fullguest' => '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm'

	];

	public static function attempt($username, $password) {
		if(isset(self::$passwords[$username]) && password_verify($password, self::$passwords[$username])) {
		// if(in_array($username, self::$usernames) && in_array(password_verify($password, self::$password), self::$passwords)) {
        	$_SESSION['LOGGED_IN_USER'] = $username;
        	$user = new Log();
            $user->setFilename(date("Y-m-d"));
        	$user->info("User $username logged in.");
        	// Log->info("this is a message");
        } else {
        	var_dump($password);
        	$user = new Log();
        	$user->error("User $username failed to log in");
        	// Log->info("User $username failed to log in!");    	s
        }
    }

    public static function check(){
   		return !empty($_SESSION['LOGGED_IN_USER']) ? true : false;
    	// boolean of whether a user is logged in or not;
    }

    public static function user(){
    	// return the username of the current logged in user
    	if(Auth::check() == 'TRUE'){
    		echo $_SESSION['LOGGED_IN_USER'];
    		// return USERNAME OF USER
    	} 
    }



}


?>