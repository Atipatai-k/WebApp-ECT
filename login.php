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
    <title>Login</title>
</head>
<body>
    <h1>Webboard Atipatai<br></h1>
    <hr>
    <center>
    <table  style="border:2px solid black; width:40%">
    <form action="verify.php" method="post">
        <tr style="background-color: #6CD2FE;"><th style="float:left">เข้าสู่ระบบ</th></tr></div>
        <br>
        <tr align="center"><td>Login &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="user"></td></tr>
        <br>
        <tr align="center"><td>Password 
        <input type="password" name="pass"></td></tr>
        <tr><td align="center">
        <input type="submit" value="login"></td></tr>
    </form>
</table></center>
    <center><p>ถ้ายังไม่ได้เป็นสมาชิก &nbsp;<a href= "register.php">กรุณาสมัครสมาชิก</a></p></center>
</body>
</html>