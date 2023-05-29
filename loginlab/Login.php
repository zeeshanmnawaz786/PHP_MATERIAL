<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form  autocomplete="off" action="Login_action.php" method="POST">
					<span>
						Welcome To Login 
					</span><br>
						<input class="input100" type="text" name="email" autocomplete="off"><br>

						<input class="input100" type="password" name="pass"  autocomplete="off"><br>

							<button class="login100-form-btn" type="submit" name="button">
								Login
							</button><br>

						<span >
							Don’t have an account?
						</span><br>

						<a  href="index.php">
							Sign Up
						</a>
				</form>
</body>
</html>