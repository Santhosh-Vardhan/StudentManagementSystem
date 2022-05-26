<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: HODLogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: HODLogin.php");
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Website Layout | ANIS</title>
    <script type="text/javascript">
    </script>
    <link rel="icon" href="favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="hodhomepage.css">
   </head>
<body>
<div class="container-fluid text-center">
<h1 class="display-2 d-block">Welcome Mr/Mrs. <?php echo $_SESSION['username']; ?></h1>
        <form action="homepage.php" method="get" style="display:inline;">  
        <button name="logout" class="btn btn-primary btn-lg btn-block btn-dark btn-outline-light ">Logout</button>  
    </form>
    <br><br>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Sender</th>
      <th scope="col">Message</th>
      <th scope="col">Timestamp</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $conn = mysqli_connect('localhost', 'root', '', 'registration');
  $usernameNW = mysqli_real_escape_string($conn,$_SESSION['username']);
  $qry = "SELECT sender,message,timestamp from messages where reciever='$usernameNW'";
$result = $conn->query($qry);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     @$status = $_POST['status'];
    if(isset($_POST["go"]))
    {
    $qry1 = "UPDATE `messages` SET `status`='@$status'";
    $conn->query($qry1);
        }
      echo '<tr>
      <td>'. $row["sender"].'</td>
      <td>'. $row["message"].'</td>
      <td>'. $row["timestamp"].'</td>
      <td>
      <form method="post" action="hodhomepage.php">
      <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="Approved">
  <label class="form-check-label" for="inlineRadio1">Approve</label>
</div>
</td><td>
      <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="Rejected">
  <label class="form-check-label" for="inlineRadio1">Reject</label>
</div>
</td>
<td>
      <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="Meet in person">
  <label class="form-check-label" for="inlineRadio1">Meet in person</label>
</div>
</td>
      <td><button type="button" name="go" class="btn btn-primary btn-block btn-dark btn-outline-light ">Go</button></td>
    </form>
    </tr>';
 
}} else {
    echo "0 Messages";
};
?>
    
  </tbody>
</table>
     </div>
</body>
</html>
