<div id ="intro">
<?php
require_once("config/db.php");

// load the login class
require_once("classes/Login.php");

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process. in consequence, you can simply ...
$login = new Login();

echo "Welcome";

// ... ask if we are logged in here:
if ($login->isUserLoggedIn() == true) { 
	echo $_SESSION['user_name'];
} else {
	echo "Guest";
}
?>
</div>
