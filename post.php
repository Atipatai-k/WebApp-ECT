<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>Webboard Atipatai<br></h1></center>
    <hr>

<?php
        echo "<p align='center'>ต้องการดูกระทู้หมายเลข" . $_GET['post'];
?>
    <center>
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
</table></center>
    <center><p><a href= "index.html">กลับไปหน้าหลัก</a></p></center>

</body>
</html>