<?php
include('asset/php/conn.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>account</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card{
            width: 500px;
            height: 100vh;
            background: rgb(68, 68, 68);
            border-radius: 19px;
            display: flex;
            flex-direction:column ;
            justify-content: center;
            align-items: center;
        }
        img{
            width: 160px;
            border-radius: 50%;
        }
        .dattiles{
            margin-top: 8px;
            white-space: nowrap;
            color: #dcdcdc;
            font-size: 24px;
            font-weight: bold;
        }
        button{
            width: 80px;
            padding: 8px;
            font-weight: 500;
            color: rgb(68, 68, 68);
            background: #dcdcdc;
            cursor: pointer;
            border-radius: 15px;
        }

    </style>
</head>
<body>
    <?php
$id=$_SESSION['user_id'];

$sql=mysqli_query($con,"SELECT * FROM `user_table` WHERE id='$id'");
$row = mysqli_fetch_array($sql);
    ?>
    <div class="card">
        <div class="image">
            <?php
            if($row['gender']==="male"){
?>
                <img src="male.jfif" alt="">
<?php
            }elseif($row['gender']==="fmale"){
                ?>
                <img src="fma.png" alt="">
                <?php
            }else{
                ?>
                <img src="mal.svg" alt="">
                <?php
            }
            ?>
        </div>
        <div class="dattiles"><span>Name: </span><?php echo$row['first_name']." ".$row['last_name'];?></div>
        <div class="dattiles"><span>Password: </span><?php echo$row['password'];?></div>
        <div class="dattiles"><span>Email:</span><?php echo$row['email'];?></div>
        <div class="dattiles"><span>Birthday:</span><?php echo$row['Birthday'];?></div>
        <div class="dattiles"><span>Date join:</span><?php echo$row['data_join'];?></div>
        <div class="dattiles"><span>gender:</span><?php echo$row['gender'];?></div>
        <div class="dattiles"><span>Country:</span><?php echo$row['country'];?></div>
        <div class="dattiles"><span>Phone:</span><?php echo$row['phone'];?></div>
        <div class="dattiles"><a href="asset/php/delet.php"><button>Delet</button></a></div>
        <div class="dattiles"><a href="update.php"><button>Update</button></a></div>
        <div class="dattiles"><a href="asset/php/logout.php"><button>logout</button></a></div>

    </div>
</body>
</html>