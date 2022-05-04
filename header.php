<!-- session start if user logged in -->
<?php
session_start()
?>
<!-- html css bootsrap -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="css/style.css" type="text/css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <!-- display if user is logged in -->
        <?php
         if (isset($_SESSION["username"])) {
            echo "<li><a class='navbar-brand' href=''>Welcome: ". $_SESSION["username"] ."</a></li>";
            echo "<li><a href='admin.php'>Admin</a></li>";
            echo "<li><a href='index.php'>Home</a></li>";
            echo "<li><a href='drinks.php'>Beverages</a></li>";
            echo "<li><a href='index.php#contact'>Contact</a></li>";
            echo "<li><a href='#'><span class='glyphicon glyphicon-shopping-cart'></span> Cart</a></li>";
            echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-in'></span> Logout</a></a></li>";
   
         }
        //  else display these 
         else{
          echo "<li><a href='index.php'>Home</a></li>";
          echo "<li><a href='drinks.php'>Beverages</a></li>";
          echo "<li><a href='index.php#contact'>Contact</a></li>";
          echo "<li><a href='login.php'>Login</a></li>";
          echo "<li><a href='signup.php'>Sign Up</a></li>"; 
         }
         ?>
      </ul>
    </div>
  </div>
</nav>