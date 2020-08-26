<?php
session_start();

//INITIALIZING VARIABLES
$name = "";
$email = "";
$phone = "";
$username = "";
$errors = array();

//CONNECTING TO DB
$db = mysqli_connect('localhost', 'root', '', 'ohs');

//USER REGISTRATION
if (isset($_POST['reg'])) 
{
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

// FORM VALIDATION AND ERROR CHECKING
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  //CHECKING IF USER WITH SAME INFORMATION (USERNAME AND EMAIL) DOES NOT ALREADY EXIST.
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  //PROCEED WITH USER REGISTRATION IF NO ERROR RECORDED.
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (name, email, phone, username, password) 
  			  VALUES('$name', '$email', '$phone', '$username', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: profile.php');
  }
}


// LOGIN USER
if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['name'] = $name;
      $_SESSION['success'] = "You are now logged in.";
      header('location: profile.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

//---------------------------------------STAFF REG-----------------------------------------------

//STAFF REGISTRATION
if (isset($_POST['stf_reg'])) {
  //receive all inputs from the form...
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $stfid = mysqli_real_escape_string($db, $_POST['stfid']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // FORM VALIDATION AND ERROR CHECKING
  if (empty($stfid)) { array_push($errors, "Staff ID is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  }

  //CHECKING IF USER WITH SAME INFORMATION (USERNAME AND EMAIL) DOES NOT ALREADY EXIST.
  $staff_check_query = "SELECT * FROM staff WHERE stfid='$stfid' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $staff_check_query);
  $staff = mysqli_fetch_assoc($result);

  if ($staff) { // if user exists
    if ($staff['stfid'] === $stfid) {
      array_push($errors, "Staff ID already exists");
    }

    if ($staff['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

//PROCEED WITH USER REGISTRATION IF NO ERROR RECORDED.
  if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO staff (name, email, staff_ID, phone, password) 
          VALUES('$name', '$email', '$stfid', '$phone', '$password')";
    mysqli_query($db, $query);
    $_SESSION['staff_ID'] = $stfid;
    $_SESSION['success'] = "You are now logged in as a Staff";
    header('location: staff_profile.php');
  }
}

// LOGIN STAFF
if (isset($_POST['stf_login'])) {
  $stfid = mysqli_real_escape_string($db, $_POST['stfid']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($staff_ID)) {
    array_push($errors, "Staff ID is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM staff WHERE staff_ID='$stfid' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['staff_ID'] = $stfid;
      $_SESSION['success'] = "You are now logged in";
      header('location: staff_profile.php');
    }else {
      array_push($errors, "Wrong Staff/password combination");
    }
  }
}



?>