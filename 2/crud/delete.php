<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = mysqli_query($conn,"DELETE FROM members WHERE id= $id");
	
	header("location: index.php");
?>