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
    <center><h1>Webboard Atipatai<br></h1></center>
    <hr>

<?php
       
    echo "<p align='center'>ต้องการดูกระทู้หมายเลข " . $_GET['id'];
    
    $n = $_GET['id'];
    if(($n % 2) == 0)
        echo "<p align='center'>เป็นกระทู้หมายเลขคู่";
    else
        echo "<p align='center'>เป็นกระทู้หมายเลขคี่";
?>
    <center><br>
    <table style="border:2px solid black; width:40%">
    <form action="verify.php" method="post">
        <tr style="background-color: #6CD2FE;"><th style="float:left">แสดงความคิดเห็น</th></tr></div>
        <tr align="center"><td>
        <label for="message"></label>
        <textarea id="message" name="message" rows="4" cols="69">
        </textarea>
        <tr><td align="center">
        <input type="submit" value="ส่งข้อความ"></td></tr>
    </form>
</table></center><br>
    <center><p><a href= "index.php">กลับไปหน้าหลัก</a></p></center>

</body>
</html>