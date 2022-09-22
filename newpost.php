<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h1 {text-align: center;}
        p {
        margin:3px;
    }
        
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newpost</title>
</head>
<body>
    <?php
    if($_SESSION['username'] != 'admin' && $_SESSION['username'] != 'member'){
        header("Location: index.php");
    }
    ?>
    <center><h1>Webboard Atipatai<br></h1></center>
    <hr>
    <p>
    <?php
        if(isset($_SESSION['id'])){
        echo " ผู้ใช้ : ",$_SESSION['username'];
        }
    ?>
    <p>หมวดหมู่ : 
        <select name="เลือก">
        <option value="เรื่องทั่วไป">เรื่องทั่วไป</option>
        <option value="-- ทั้งหมด --">-- ทั้งหมด --</option>
        <option value="เรื่องเรียน">เรื่องเรียน</option>
        </select></p>
    <p>หัวข้อ : &emsp;  
        <input type="text"></p>
    <p>เนื้อหา :  &ensp;
        <label for="message"></label>
        <textarea id="message" name="message" rows="3" cols="22"></textarea></p>
        <p>&emsp;&emsp;&emsp;&emsp;&nbsp;<input type="submit" value="บันทึกข้อความ"></p>

</body>
</html>