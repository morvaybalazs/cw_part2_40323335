<?php
// including the database connection file
include_once 'config.php';

// sending form information to the database
if(isset($_POST['update']))
{	
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$fullname = mysqli_real_escape_string($mysqli, $_POST['fullname']);
	$address = mysqli_real_escape_string($mysqli, $_POST['address']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$username = mysqli_real_escape_string($mysqli, $_POST['username']);	
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);	
	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE users SET fullname='$fullname',address='$address',email='$email',username='$username',password='$password' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: admin.php");
	}

//getting id from url
$id = $_GET['id'];

//selecting data associated with a particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$fullname = $res['fullname'];
	$address = $res['address'];
	$email = $res['email'];
	$username = $res['username'];
	$password = $res['password'];

}
?>
<!-- header -->
<?php 
include_once 'header.php';
?>
<!-- banner -->
<div id="picture">
  <div class="content container-fluid text-center">
  <div class="col-sm-12 text-center"> 
    <h1>Edit User Info</h1>
  </div>
</div>
</div>
<!-- CRUD table for admin -->
<h2 class="content-head" id="EDIT"> Update user info</h2>
<div>
<forms>
	<form name="form1" method="post" action="edit2.php">
	<label for="fullname">Full Name: </label>
	<input type="text" name="fullname" value="<?php echo $fullname;?>" required><br>

    <label for="address">Address: </label>
    <input type="text" name="address" value="<?php echo $address;?>" required><br>
 
	<label for="email">Email:</label>
	<input type="text" name="email" value="<?php echo $email;?>" required><br>
	
    <label for="username">Username:</label>
	<input type="text" name="username" value="<?php echo $username;?>" required><br>

    <label for="password">Password:</label> 
	<input type="text" name="password" value="<?php echo $password;?>"required><br>

	<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>

    <label for="update"></label> 
	<button class="btn btn-success" type="submit" name="update">Update</button><br>
	</forms>
</div>
<!-- footer -->
<?php 
include_once 'footer.php'
?>