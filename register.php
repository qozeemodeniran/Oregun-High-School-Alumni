<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>registration page</title>
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
 <form method="post" action="register.php" >
 <?php include('error.php'); ?>
 <fieldset>
 <legend><h2>New User's Registration</h2></legend>
 <nav style="float: right;">
 	Let's see your beautiful face<br /><br />
 	<img src="images/lighter.JPG" height="200" width="200" / alt="Profile Photo"><br />
 	<input type="file" name="image"><br/>
 	<input type="submit" name="Submit" value="Upload photo">
 </nav>
 Name<br>
 <input type="text" name="name" placeholder="first and lastnames only" value="<?php echo $name; ?>">
 <br><br>
 Email<br>
 <input type="email" name="email" placeholder="valid email" value="<?php echo $email; ?>">
 <br><br>
 Phone<br>
 <input type="text" name="phone" placeholder="Mobile phone number" value="<?php echo $phone; ?>">
 <br><br>
 Prefered Username<br>
 <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
 <br><br>
 Password<br>
 <input type="password" name="password_1" placeholder="password">
 <br><br>
 Retype password<br>
 <input type="password" name="password_2" placeholder="password">
 <br><br>
 <pre><input type="submit" name="reg">    <button><a href="http://localhost/ohs_alumni/PROJECTS/Oregun-High-School-Alumni/staff_reg.php">New staff?</a></button></pre>
</fieldset>
</form> 
<p id="last"></p>
<button onclick="showText()">See developer's details</button>
<script src="web01.js"></script>
<br>
	<p id="date"></p>
<script>document.getElementById("date").innerHTML = Date();</script>
<br>
<footer>
	&copy; Oregun High School Alumni Association 2020. All rights reserved. <a style="color: Red;" href="http://localhost/PROJECTS/Oregun-High-School-Alumni/index.php">Go back Home</a> 
</footer>
</body>
</html>