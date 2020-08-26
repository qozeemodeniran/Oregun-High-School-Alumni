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
	<ul id="menu">
	<section id="nav_butt">
  <button><a href="http://localhost/PROJECTS/Oregun-High-School-Alumni/index.php">Home</a></button>
	<button><a href="http://localhost/PROJECTS/Oregun-High-School-Alumni/abt.htm">About</a></button>
	<button><a href="http://localhost/PROJECTS/Oregun-High-School-Alumni/contact_us.php">Contact</a></button>
  </section>

 	<br><br><br>

    <div id="header">
    <h1>Oregun High School Alumni</h1>
	</div><br><br><br><br>

<section id="events">
  <center>
    <h2>List of past events.</h2>
    <pre>
      <a style="color: white;" href="">2020 Reuinon party</a>

    <a style="color: white;" href="">Visit to Ibadan on Qudus Adebayo's burial.</a>

    <a style="color: white;" href="">Excos meet to organize prayer for late members.</a>

      <details>
      <summary>View more...</summary>
    <a style="color: white;" href="">2020 Reuinon party</a>

    <a style="color: white;" href="">Visit to Ibadan on Qudus Adebayo's burial.</a>

    <a style="color: white;" href="">Excos meet to organize prayer for late members.</a>

    <a style="color: white;" href=""><button>View less</button></a>
    </details>
    </pre> 
  </center>
</section>


<br><br><br>

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