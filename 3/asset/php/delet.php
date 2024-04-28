<?php
include('conn.php');
session_start();
$id=$_SESSION['user_id'];
$sql=mysqli_query($con,"DELETE FROM `user_table` WHERE id='$id'");
if($sql){
session_unset();
session_write_close();
session_destroy();
header("location: ../../login.php");
}