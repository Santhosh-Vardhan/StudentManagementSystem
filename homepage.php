<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ANISLogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: ANISLogin.php");
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
    
    <link rel="stylesheet" href="homepage.css">
   </head>
<body>
  <nav>
    <div class="menu">
      <div class="logo" >
        <a href="#" onclick="alert('ANIS stands for students');">ANIS</a>
      </div>
      <ul>
        <!-- <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li> -->
        <li><p>Hello world</p><li>
        <li><a href="aboutUs.html" >About us</a></li> 
        <li><a href="contactus.html">Contact us</a></li>
        <!--
        <form action="homepage.php" method="get">
        <li>
        <button name="logout" class="mx-3 my-0 btn btn-outline-light btn- btn-dark">Logout</button>  
      </li>
        </form> -->
      </ul>
    </div>
  </nav>
  <div class="img"></div>
  <div class="center">
    <div class="title">
      Welcome to ANIS, <?php echo $_SESSION['username']; ?><br><br>A dedicated platform for the students of ANITS<br><br>
      <div class="btns">
      
        <button onClick='window.location="#hpfoot"'>Know More</button>
        <button onClick='window.location="#depts"' >Depts</button><span>
        <form action="homepage.php" method="get" style="display:inline;">  
        <button name="logout"  >Logout</button>  
</span>
</form>
        <!--
    <form method="get" action="homepage.php">
    <button name="logout" >Logout</button>  
    </form>
-->
    </div>
    <div class="sub_title"></div>
    </div> 
  </div>
  <br>
  <div class="after-title">
    <div class="heading">Here's what you can do right away</div>
    <div class="chat">
      <div class="centered">Chat</div> 
      <div class="chatimg"></div>
    </div>
    <div class="chat">
      <div class="centered">Gallery</div> 
      <div class="gallimg"></div>
    </div>
    <div class="chat">
      <div class="centered">Notices</div> 
      <div class="notimg"></div>
    </div>
    
  </div>
  <div class="departments" id="depts">
    <div class="dept-txt">Choose your department:</div>
    
    <div class="d-grid gap-2 col-6 mx-auto">
      <button onclick="location.href='cse.html'" class="btn btn-primary btn-dark btn-outline-light" type="button">Computer Science & Engineering</button>
      <button onclick="location.href='mech.html'" class="btn btn-primary btn-dark btn-outline-light" type="button">Mechanical Engineering</button>
      <button onclick="location.href='IT.html'" class="btn btn-primary btn-dark btn-outline-light" type="button">Information Technology</button>
      <button onclick="location.href='chem.html'" class="btn btn-primary btn-dark btn-outline-light" type="button">Chemical Engineering</button>
      <button onclick="location.href='CIVIL.html'" class="btn btn-primary btn-dark btn-outline-light" type="button">Civil Engineering</button>
      <button onclick="location.href='ECE.html'" class="btn btn-primary btn-dark btn-outline-light" type="button">Electronics and Communication Engineering</button>
      <button onclick="location.href='EEE.html'" class="btn btn-primary btn-dark btn-outline-light" type="button">Electrical Engineering</button>
    </div>
  </div>
  <footer>
    <div class="footer-content" id="hpfoot">
        <h3>ANIS</h3>
        <p>We, at ANIS, try to ensure we are helping our community as much as we can. If there's anything you think you can contribute to us, feel free to contact us..</p>
        <ul class="socials">
            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://myaccount.google.com/profile?pli=1"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
            <li><a href="https://www.linkedin.com/signup"><i class="fa fa-linkedin-square"></i></a></li>
        </ul>
    </div>
    <div class="footer-bottom">
        <p>copyright &copy; <a href="#">ANIS</a> </p>
           
    </div>

</footer>
</body>
</html>
