<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    
<form action="calendar.php" method="post">
        <?php
        echo "กรุณากรอกเดือน :";
        ?>
        <select name="month">
        <option value="มกราคม">1</option>
        <option value="กุมภาพันธ์">2</option>
        <option value="มีนาคม">3</option>
        <option value="เมษายน">4</option>
        <option value="พฤษภาคม">5</option>
        <option value="มิถุนายน">6</option>
        <option value="กรกฎาคม">7</option>
        <option value="สิงหาคม">8</option>
        <option value="กันยายน">9</option>
        <option value="ตุลาคม">10</option>
        <option value="พฤศจิกายน">11</option>
        <option value="ธันวาคม">12</option>
        </select><br>
    <?php
        echo "กรุณากรอกปี(พ.ศ.) :";
    ?>
        <input type="text" name="year"> <br>

    <?php
        echo "วันที่ 1 ของเดือนตรงกับ ";
    ?>
    <select name="day">
        <option value="จันทร์">วันจันทร์</option>
        <option value="อังคาร">วันอังคาร</option>
        <option value="พุธ">วันพุธ</option>
        <option value="พฤหัสบดี">วันพฤหัสบดี</option>
        <option value="ศุกร์">วันศุกร์</option>
        <option value="เสาร์">วันเสาร์</option>
        <option value="อาทิตย์">วันอาทิตย์</option>
        </select><br>
        <input type="submit" value="ตกลง">
        <input type="reset" value="ล้างข้อมูล">
</form>
</body>
</html>