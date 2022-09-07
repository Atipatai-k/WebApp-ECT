<?php
    $user = $_POST['user'];
    $password = $_POST['pass'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h1 {text-align: center;}
        p {
        margin: auto;
    }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Webboard Atipatai<br></h1>
    <hr>

<?php

    if($user == 'admin' && $password == 'ad1234')
    echo "<p align='center'>ยินดีต้อนรับคุณ ADMIN";

    elseif($user == 'member' && $password == 'mem1234')
    echo "<p align='center'>ยินดีต้อนรับคุณ MEMBER";

    else
    echo "<p align='center'>ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";

?>
    <br><center>
        <p><a href= "login.html">กลับไปหน้าหลัก</a></p>
    </center>
</body>
</html>