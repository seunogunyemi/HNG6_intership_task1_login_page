<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<head>
	<title>Sign in Page</title>
</head>
<body>

	<div class="framework">
		<form action="index.php" method="POST">
		<img src="team_greatness.png">
		<input class="name" type="name" name="name" placeholder=" username" required>
<br>
		<input class="email" style=" " type="password" name="password" placeholder=" enter password" required>
<br>
		<table>
			<tr>
				<td class="flush_left">not a member? <a href="#">sign up</a> here</td>
				<td class="flush_right">forgot password? <a href="#">click here</a></td>
			</tr>
		</table>

		<button>LOG IN</a></button>

		<input style="" type="checkbox" name="remember" checked="checked"> remember me
		</form>	
	</div>


</body>
<?php
				if (isset($_POST['submit'])) {
					$name = $_POST['name'];
					$password = $_POST['password'];
				}
				if ($name=='name' && $password=='password') {
					header("location: welcome.php");
					exit();
				}
				else
					echo "username or password invalid";


	?>
</html>
