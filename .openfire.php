<?php 
require_once ('OpenFireLib.php');
					
// Create the OpenFireUserService object.
$pofus = new OpenFireLib();
// Set the required config parameters
$pofus->secret = "lPXsFAX5";      // your openfire secret 
$pofus->host = "example.com";    // your host name 
$pofus->port = "9090";  		// default 9090
$pofus->useSSL = false;					

$pofus->plugin = "/plugins/userService/userservice";  // plugin folder location

// get currnet user info 
$userinfo = get_userDetail();
$uniqueName  = uniqid();
$uniqueEmail  = $uniqueName.'@remotetopc.com';
$password = rand();

// Add a new user to OpenFire and add him to a group
$result = $pofus->insertUser($uniqueEmail, $password, $current_user->user_login, $current_user->user_email, '');

?>
