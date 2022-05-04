<!-- database  connection -->
<?php
$$databaseHost = 'localhost';
$databaseName = 'test';
$databaseUsername = 'test';
$databasePassword = '';

// connection string
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
