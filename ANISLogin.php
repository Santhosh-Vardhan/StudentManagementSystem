<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="ANISLogin.css">
</head>
<body>
	 <div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method="post" action="ANISLogin.php">
				<?php include('errors.php'); ?>
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="username"  placeholder="User name" required="" value="<?php echo $username; ?>">
					<input type="email" name="email" placeholder="Email" required="" value="<?php echo $email; ?>">
					<input type="password" name="password_1" placeholder="Password" required="">
					<input type="password" name="password_2" placeholder="Password" required="">
					<button type="submit" class="btn" name="reg_user">Register</button>
					<!--<button>Sign up</button>-->
				</form>
			</div>
<br>
			<div class="login">
			<!--	<form >-->
			<?php include('errors.php'); ?>
				<form method="post" action="ANISLogin.php">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="username" placeholder="Username" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<!--<button>Login</button>-->
					<button type="submit" class="btn" name="login_user">Login</button>
				</form>
			</div>
	</div>
	
</body>
</html>