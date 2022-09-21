<?php
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h1 {text-align: center;}
        ul {
        margin: auto;
    }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard</title>
    
</head>
<body>
    
    <h1>Webboard Atipatai</h1>
    <hr>
    <form action="post.php" method="get">
        หมวดหมู่ : 
        <select name="เลือก">
        <option value="-- ทั้งหมด --">-- ทั้งหมด --</option>
        <option value="เรื่องทั่วไป">เรื่องทั่วไป</option>
        <option value="เรื่องเรียน">เรื่องเรียน</option>
        </select>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    
    <?php
        if(isset($_SESSION['id'])){
        echo "ผู้ใช้งานระบบ : ",$_SESSION['username'];
        }
    ?>

    <?php
    if(isset($_SESSION['username'])){
        echo "<span style='float:right'><a href='logout.php'>ออกจากระบบ</a></span>";
        }
    else{
        echo "<span style='float:right'><a href='login.php'>เข้าสู่ระบบ</a></span>";
        }
    ?>
    <br>
        <a href='newpost.php'>สร้างกระทู้ใหม่</a>
    <br><br>
    <ul><span>
    <?php
    if(isset($_SESSION['id'])){
        if($_SESSION['role'] == 'a'){
        for($i=1 ;$i < 11;$i++){
            echo '<span><li><a href="post.php?id=' . $i . '">กระทู้ที่ ' . $i . '
            </a>&nbsp;&nbsp;<a href="delete.php?id=' . $i . '">ลบ</a></li></span>';  
    }
    }
        elseif($_SESSION['role'] == 'm'){
        for($i=1 ;$i < 11;$i++){
            echo '<span><li><a href="post.php?id=' . $i . '">กระทู้ที่ ' . $i . ' </a></li></span>';
    }
    }
    }
    else
        for($i=1 ;$i < 11;$i++){
        echo '<span><li><a href="post.php?id=' . $i . '">กระทู้ที่ ' . $i . ' </a></li></span>';  
    }
    ?>
    </span></ul>
</form>
</body>
</html>

