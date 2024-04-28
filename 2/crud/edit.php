<?php
// new data
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$age = $_POST['age'];
$id = $_POST['memids'];
// query
$sql = "UPDATE members 
        SET fname=$fname, lname=$lname, age=$age
		WHERE id=$id";
$q = mysqli_query($conn,$sql);
header("location: index.php");

?>