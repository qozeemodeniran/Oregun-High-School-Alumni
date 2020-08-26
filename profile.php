<?php 
  session_start(); 
 $name = "";
 $email = "";
 $phone = "";

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>profile page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon" type="image/jpg" href="images/favicon.JPG" />

</head>
<body>
<section id="loginReg">
    <div>
    <img src="images/favicon.JPG" width="200px" height="200px" style="float: left;">
    <h1>OREGUN HIGH SCHOOL</h1>
    <h1>Alumni Network.</h1>
    <p>Pioneered by 2013 Set.</p>
    </div>
  </section>


<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3> 
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

<!-- LOGIN INFORMATION -->
<div id="info">
  <?php  if (isset($_SESSION['username'])) : ?>
<p id="welcome">Welcome<strong> @<?php echo $_SESSION['username']; ?></strong></p><br>
<button id="course"><a href="#">Begin Course Regigstration</a></button>
<p><button id="logout"><a href="login.php?logout='1'">logout</a></button></p>
<?php endif ?>
<p><button id="comment"><a href="http://www.ohsalumninetwork.byethost11.com/contact.php">Feedback</a></button></p>
</div>

<p id="last"></p>
<button onclick="showText()">See developer's details</button>
<script src="web01.js"></script>
<br>
<p id="date"></p>
<script>document.getElementById("date").innerHTML = Date();</script>
<footer>
  &copy; Oregun High School Alumni Association 2020. All rights reserved. <!-- <a style="color: Red;" href="http://localhost/ohs_alumni/index.php">Go back Home</a> --> 
</footer>
</body>
</html>