<!-- header -->
<?php 
include_once 'header.php'
?>
<!-- banner -->
<div id="picture">
  <div class="content container-fluid text-center">
  <div class="col-sm-12 text-center"> 
    <h1>Log In</h1>
  </div>
</div>
</div>

<!-- login form -->
<h2 class="content-head" id="signup"> Log into your account</h2>
<div>
<forms>
	<form class="form" action="login.php" method="post" name="form2">

	<label for="username">Username:</label>
	<input type="text" placeholder="Enter username..." name="username" required> <br>

	<label for="password">Password:</label> 
	<input type="password" placeholder="Enter password..." name="password" required><br>
	
	<label for="login"></label> 
	<button class="btn btn-success" type="submit" name="login">Login</button><br>
	</forms>
</div>

<!-- dbconnection file -->
<?php
include "config.php";

// if login form submitted
if(isset($_POST['login'])){

    $username = mysqli_real_escape_string($mysqli,$_POST['username']);
    $password = mysqli_real_escape_string($mysqli,$_POST['password']);

    if ($username != "" && $password != ""){
      // count if info input info matches with the information stored in the database
        $sql_query = "SELECT COUNT(*) AS cntUser FROM users WHERE username='".$username."' and password='".$password."'";
        $result = mysqli_query($mysqli,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];
// if there is a match start session for the user
        if($count > 0){
            session_start();
            $_SESSION['username'] = $username;
            
            header('Location: index.php');
            // if information incorrect display error message
        }else{
            echo "<div class ='invalid'> Invalid username or password </div>";
        }

    }

}
?>
<!-- footer -->
<?php 
include_once 'footer.php'
?>