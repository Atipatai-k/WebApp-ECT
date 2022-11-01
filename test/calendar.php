<?php   $month = $_POST['month'];
        $year = $_POST['year'];
        $day =  $_POST['day']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table{
            border:2px solid black;
            width:20%
        }
        th{
            border:1px solid black;
        }
        td{
            border:1px solid black;
            text-align:center;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
</head>
<body>
    <?php
        if($month == "มกราคม" || $month =="มีนาคม" || $month =="พฤษภาคม" || $month =="กรกฎาคม"
        || $month =="สิงหาคม" || $month =="ตุลาคม" || $month =="ธันวาคม")
            $dom = 31;
        elseif ($month == "เมษายน" || $month =="มิถุนายน" || $month =="กันยายน" || $month =="พฤศจิกายน")
            $dom = 30;
        elseif($month == "กุมภาพันธ์" && ($year % 4) != 3)
            $dom = 28;
        elseif($month == "กุมภาพันธ์" && ($year % 4) == 3)
            $dom = 29;
    ?>
    <?php echo "เดือน $month ปี $year มี $dom วัน" ;?><br>
    <?php echo "วันที่ 1 ของเดือนตรงกับวัน $day"?>
    <table>
        <th>จ.</th><th>อ.</th><th>พ.</th><th>พฤ.</th><th>ศ.</th><th>ส.</th><th>อ.</th>
        <tr><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td></tr>
        <tr><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td></tr>
        <tr><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td></tr>
        <tr><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td></tr>
    </table>
    
</body>
</html>