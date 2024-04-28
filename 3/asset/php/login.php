<?php
session_start();
include('conn.php');
if(isset($_POST['log'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $check_email="SELECT * FROM user_table WHERE email = '$email'";
    $res = mysqli_query($con, $check_email);
    if(mysqli_num_rows($res) > 0){
        $row = mysqli_fetch_array($res);
        if($password===$row['password']){
            header("Location: ../../account.php");
            $_SESSION['user_id']=$row['id'];

        }else{
            header("Location: ../../login.php?rn=The Password Not corect");
        }
    }else{
        header("Location: ../../login.php?rn=The Email Not Used");
    }
}