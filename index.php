
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
        </select>
    <p style="float:right"><a href= "login.html">เข้าสู่ระบบ</a></p>
    <br><br>

    <?php
    
    for($i=1 ;$i < 11;$i++){

    echo '<ul><li><a href="post.php?id=' . $i . '">กระทู้ที่ ' . $i . '</a></li></ul>'; 
    
    }

    ?>

</form>
</body>
</html>

