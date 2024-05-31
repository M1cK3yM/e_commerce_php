<?php

// Host Name
$dbhost = 'localhost';

// Database Name
$dbname = 'ecommerce';

// Database Username
$dbuser = 'root';

// Database Password
$dbpass = '';

// Defining base url
define("BASE_URL", "");

// Getting Admin url
define("ADMIN_URL", BASE_URL . "admin" . "/");

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


define("TOKEN_EXPIRAION_TIME", 60 * 60);

if(mysqli_connect_errno()) {
	echo "There was un error: ". mysqli_connect_errno()."<br>";
	echo "Error Message: " . mysqli_connect_error();
	exit();
}

if(!mysqli_select_db($conn, "ecommerce")) {
	die("Unable to select the database: " . mysqli_error($conn));
}

