<?php 
  session_start(); 

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
	<title>OHS Alumni Network</title>
	<link rel="stylesheet" type="text/css" href="web01.css">
	<link rel="icon" type="image/jpg" href="images/logo2.jpg" />
</head>
<body>
  <link rel="JavaScript" type="text/js" href="web01.js">
  
	<section id="nav_butt">
  <button><a href="http://localhost/PROJECTS/Oregun-High-School-Alumni/index.php">Home</a></button>
	<button><a href="http://localhost/PROJECTS/Oregun-High-School-Alumni/abt.htm">About</a></button>
	<button><a href="http://localhost/PROJECTS/Oregun-High-School-Alumni/contact_us.php">Contact</a></button>
  </section>

 	<br><br><br>

    <div id="header">
    <h1>Oregun High School Alumni</h1>
	</div><br><br><br><br>

  <center>
  <section id="gallery">
    <h2>Welcome to our Media home</h2>

    <video id="video01" width="500" height="240" controls="">
      <source src="video/funny.mp4" type="video/mp4">
    </video>

  </section>  
  </center>
  

  <p id="last"></p>
<button onclick="showText()">See developer's details</button>
<script src="web01.js"></script>
<br>

<p id="date"></p>
<script>document.getElementById("date").innerHTML = Date();</script>

<div id="footer">
<footer>
  &copy; Oregun High School Alumni Association 2020. All rights reserved.
</footer>
</div>
</body>
</html>