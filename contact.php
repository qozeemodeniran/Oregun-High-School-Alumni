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
	<title>contact page</title>
	<link rel="stylesheet" type="text/css" href="web01.css">
	<link rel="icon" type="image/jpg" href="images/logo2.jpg" />
</head>
<body>
	<script src="web01.js"></script>
	<ul id="menu">
	<li><a href="http://localhost/PROJECTS/Oregun-High-School-Alumni/index.php">Home |</a></li>
	<li><a href="http://localhost/PROJECTS/Oregun-High-School-Alumni/abt.htm">About |</a></li>
	<li><a href="http://localhost/PROJECTS/Oregun-High-School-Alumni/contact.php">Contact</a></li>
	</ul>
	<br><br><br>
	<div id="header">
		<h1>Oregun High School Alumni</h1>
	</div><br><br><br>
<form action="MAILTO:oshs13alumni@gmail.com" method="POST" enctype="text/plain">
	<fieldset>
		<legend><h2>Send us an Email</h2></legend>
	 	Name<br>
		<input type="text" name="user_name" required="">
		<br><br>
		Email<br>
		<input type="email" name="email" required="">
		<br><br>
		Comment<br>
		<textarea rows="10" cols="30" placeholder="Type your comment"></textarea>
		<br><br>
		<input type="submit" name="submit" value="send">
</fieldset>
</form>





<p id="last"></p>
<button onclick="showText()">See dveloper's details</button>
<script src="web01.js"></script>
<br><br><br>
<p id="date"></p>
<script>document.getElementById("date").innerHTML = Date();</script>
<div id="footer">
<footer>&copy; Oregun High School Alumni Association 2020. All rights reserved.</footer>
</div>


</body>
</html>