<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
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
<form method="post" action="staff_login.php" id="log">
<?php include('error.php');?>
<fieldset>
<legend><h2>Staff Login</h2></legend>
Staff ID<br>
<input type="text" name="stfid">
<br><br>
Password<br>
<input type="password" name="password">
<br><br>
<input type="submit" name="stf_login" >
<br/><br/>
<p><a href="" style="color: white; text-decoration: none">Forget Password?</a></p>
</fieldset>
</form>
	
	



<p id="last"></p>
<button onclick="showText()">See developer's details</button>
<script src="web01.js"></script>
<br>
<p id="date"></p>
<script>document.getElementById("date").innerHTML = Date();</script>
<footer>
	&copy; Oregun High School Alumni Association 2020. All rights reserved. <a style="color: Red;" href="http://localhost/PROJECTS/Oregun-High-School-Alumni/index.php">Go back Home</a> 
</footer>
</body>
</html>