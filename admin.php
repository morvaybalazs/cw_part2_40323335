<?php
include_once("config.php");

// retrieving data in descending order
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); 
?>
<!-- header -->
<?php 
include_once 'header.php'
?>

<div id="picture">
  <div class="content container-fluid text-center">
  <div class="col-sm-12 text-center"> 
    <h1>Admin</h1>
  </div>
</div>
</div>

<h2 class="content-head" id="admin">Edit or delete users</h2>

<!-- Admin table -->
<div class = "admintable">
	<table>
	<tr>
		<td><h4>Name</h4></td>
		<td><h4>Address</h4></td>
		<td><h4>Email</h4></td>
		<td><h4>Username</h4></td>
		<td><h4>Password</h4></td>
		<td><h4>Edit & Delete</h4></td>
	</tr>
<!-- display user information in table retrieved from database -->
	<?php 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['fullname']."</td>";
		echo "<td>".$res['address']."</td>";
		echo "<td>".$res['email']."</td>";	
		echo "<td>".$res['username']."</td>";	
		echo "<td>".$res['password']."</td>";	
		echo "<td><a href=\"edit2.php?id=$res[id]\" class='btn btn-info' role='button'>Edit</a> <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\"class='btn btn-danger' role='button'>Delete</a></td>";		
	}
	?>
	</table>
</div>
<!-- footer -->
<?php 
include_once 'footer.php'
?>