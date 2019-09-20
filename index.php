<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<head>
	<title>Sign in Page</title>
</head>
<body>

	<div class="container-fluid">
				<div class="row">
						<div class="col-sm-12 col-md-push-3">
							<center>
							<img src="team_greatness.png">
							</center>
<center>
		<form action="index.php" method="POST">

			<label>Username</label>
			<br>
			<input class="text" type="text" name="name" placeholder="name" required>
			<br>

			<label>Password</label>
			<br>
			<input class="text" type="password" name="password" placeholder="password" required>
			<br>
													<table class="responsive">
															<tr>
																<td>not registered?<a href="#">sign up</a></td>
																<td>forgot login details?<a href="#">click here</a></td>
															</tr>		
													</table>
			
			<input type="submit" name="submit">
			<br>

			<input type="checkbox" name="checkbox"> keep me signed in
			
	</form>	
</center>
						</div>
				</div>
			</div>

	
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
</body>
</html>
