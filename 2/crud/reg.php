<?php
session_start();
$errmsg_arr = array();
$errflag = false;
// configuration
$dbhost 	= "localhost";
$dbname		= "pdo_ret";
$dbuser		= "root";
$dbpass		= "";

// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

// new data

if(isset($_POST['send'])){

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$age = $_POST['age'];
// query
$sql = "INSERT INTO members (fname,lname,age) VALUES ($fname,$lname,$age)";
$q = mysqli_query($conn,$sql);
header("location: index.php");
}

?>