<?php
error_reporting(0);
$error=$_GET['rn'];
if($error!=null){
  echo"<script>alert('".$error.".');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/style/stylelogin.css">
    <title>login</title>
</head>
<body>
<div class='bold-line'></div>
<div class='container'>
  <div class='window'>
    <div class='overlay'></div>
    <div class='content'>
      <div class='welcome'>Hello There!</div>
      <div class='subtitle'>We're almost done. Before using our services you need to create an account.</div>
      <form method="POST" action="asset/php/login.php" class='input-fields'>
        <input type='email' placeholder='Email' name="email" class='input-line full-width'></input>
        <input type='password' placeholder='Password' name="password" class='input-line full-width'></input>

        <div><input type='submit' name="log" value="login" class='ghost-round full-width'></div>
      </form>
      <div><a href="index.php"><button class='ghost-round full-width'>Create Account</button></a></div>
    </div>
  </div>
</div>
</body>
</html>