<?php include('hodserver.php') ?>

<!DOCTYPE html>
<html>
<head>
<title> HOD's LOGIN </title>
<link rel="stylesheet" href="HODlog.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="login-box">
  <h2>Login</h2>
  <form method="post" action="HODLogin.php">
	<?php include('errors.php'); ?>
    <div class="user-box">
        <input type="text" name="username" placeholder="" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
					<input type="password" name="password" placeholder="Password" required="">
      <label>Password</label>
    </div>
    <button type="submit" class="btn btn-light btn-outline-dark"  name="login_hod">Login</button>
  </form>
</div>
</body>
</html>

