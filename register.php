<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h1 {text-align: center;}
        hr {
        margin: auto;
        }
        table {
        margin-top: -25px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <center><h1>สมัครสมาชิก<br></h1></center>
    <hr>
    <center>
    <table style="border:2px solid black; width:40">
    <form>
        <tr style="background-color: #6CD2FE;"><th style="float:left">กรอกข้อมูล</th></tr></div>
        <br>
        <tr style= text-align:right><td>ชื่อบัญชี :
        <input type="text" name="user"></td></tr>
        <br>
        <tr style= text-align:right><td>รหัสผ่าน :
        <input type="password" name="pass"></td></tr>
        <tr style= text-align:right><td>ชื่อ-นามสกุล :
            <input type="text" name="name-last"></td></tr>   
        <tr ><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="sex" value="ชาย" >ชาย<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        เพศ :<input type="radio" name="sex" value="หญิง" >หญิง<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="sex" value="อื่นๆ">อื่นๆ<br></td></tr>
        <tr style= text-align:right><td>อีเมล :
            <input type="text" name="user"></td></tr>

        <tr><td align="center">
        <input type="submit" value="สมัครสมาชิก"></td></tr>
    </form>
</table></center>
    <center><p><a href= "index.php">กลับไปหน้าหลัก</a></p></center>
</body>
</html>