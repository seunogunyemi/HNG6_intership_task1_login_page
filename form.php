<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Welcome to Greatness</h1>


<?php
$email = ["name@gmail.com", "gmail@gmail.com", "yahoo@yahoo.com"];
$password = ["password", "pass", "word"];

if (isset($username) && isset($password) == true) {
	header("location: success.php");
}

if (isset($username) && isset($password) ==false) {
		header("location: index.html");
}

?>
</body>
</html>

