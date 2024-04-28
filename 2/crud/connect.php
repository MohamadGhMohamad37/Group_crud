<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'pdo_ret'; 

/* End config */

$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$conn=mysqli_connect("localhost", "root", "", "pdo_ret");
if(mysqli_connect_errno())
{
echo "Connection Fail".mysqli_connect_error();
}