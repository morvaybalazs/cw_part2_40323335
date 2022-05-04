<?php
//including the database connection file
include_once("config.php");
// if form submitted updata databese with the information below
if(isset($_POST['Submit'])) {	
	$fullname = mysqli_real_escape_string($mysqli, $_POST['fullname']);
	$address = mysqli_real_escape_string($mysqli, $_POST['address']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$username = mysqli_real_escape_string($mysqli, $_POST['username']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);

		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO users(fullname,address,email,username,password) VALUES('$fullname','$address','$email','$username','$password')");
		header("location: login.php");

}
?>
<!-- header -->
<?php 
include_once 'header.php'
?>
<!-- banner -->
<div id="picture">
  <div class="content container-fluid text-center">
  <div class="col-sm-12 text-center"> 
    <h1>Sign up</h1>
  </div>
</div>
</div>
<!-- signup form -->
<h2 class="content-head" id="signup"> Complete the form below to create your new account</h2>
<div>
<forms>
	<form class="form" action="signup.php" method="post" name="form1">

	<label for="fullname">Full Name: </label>
	<input type="text" placeholder="Enter full name..." name="fullname" required> <br>

	<label for="address">Address: </label>
	<input type="text" placeholder="Enter address..." name="address" required> <br>

	<label for="email">Email:</label>
	<input type="email" placeholder="Enter email..." name="email" required> <br>

	<label for="username">Username:</label>
	<input type="text" placeholder="Enter username..." name="username" required> <br>

	<label for="password">Password:</label> 
	<input type="password" placeholder="Enter password..." name="password" required><br>
	
	<label for="Submit"></label> 
	<button class="btn btn-success" type="submit" name="Submit">Sign Up</button><br>
	</forms>
</div>
<!-- footer -->
<?php 
include_once 'footer.php'
?>