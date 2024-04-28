<?php
date_default_timezone_set('Asia/Damascus');
include('conn.php');
session_start();
if(isset($_POST['join'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];
    $country=$_POST['Country'];
    $gender=$_POST['Gender'];
    $birth=$_POST['data'];
    $massage=$_POST['message'];
    $phon=$_POST['phone'];
    $data=date('Y-m-d');
    $email_check = "SELECT * FROM user_table WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if($password===$repassword){
        if(mysqli_num_rows($res) > 0){
            header("Location: ../../index.php?rn=The Email Used");
        }else{
            if(strlen($password)>=8){
                if(strlen($phon)>=10){ 
                    $sql=mysqli_query($con,"INSERT INTO `user_table`(`first_name`, `last_name`, `email`, `phone`, `password`, `gender`, `Birthday`, `country`, `massage`, `data_join`) 
                    VALUES ('$firstname','$lastname','$email','$phon','$password','$gender','$birth','$country','$massage','$data')");
                    if($sql){
                        header("Location: ../../index.php?rn=User registration successful");

                    }else{
                        header("Location: ../../index.php?rn=Not User registration successful");
                    }
                }else{
                    header("Location: ../../index.php?rn=the phon not Enough");
                    
                }
            }else{
                header("Location: ../../index.php?rn=the password not Enough");

            }
        }
    }else{
        header("Location: ../../index.php?rn=password not corect");
    }
}

if(isset($_POST['update'])){
    $id=$_SESSION['user_id'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];
    $country=$_POST['Country'];
    $gender=$_POST['Gender'];
    $birth=$_POST['data'];
    $phon=$_POST['phone'];
    
    if($password===$repassword){

            if(strlen($password)>=8){
                if(strlen($phon)>=10){
                    $sql=mysqli_query($con,"UPDATE `user_table` SET 
                    `first_name`='$firstname',
                    `last_name`='$lastname',
                    `email`='$email',
                    `phone`='$phon',
                    `password`='$password',
                    `gender`='$gender',
                    `Birthday`='$birth',
                    `country`='$country' 
                    WHERE id='$id'");
                    if($sql){
                        header("Location: ../../update.php?rn=User update successful");

                    }else{
                        header("Location: ../../update.php?rn=Not User update successful");
                    }
                }else{
                    header("Location: ../../update.php?rn=the phon not Enough");
                    
                }
            }else{
                header("Location: ../../update.php?rn=the password not Enough");

            }
        }
    else{
        header("Location: ../../update.php?rn=password not corect");
    }
}
