<?php 

$email = $_POST['email'];
$password = $_POST['password'];

if ($email=='name@gmail.com' AND $password=='pass') {
	echo "you are logged in to <h1>greatness</h1>";
}
else {
	echo "password and username incorrect";
 
}

?>