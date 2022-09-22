<?php
    session_start();
    if($_SESSION['role'] != 'a' && $_SESSION['role'] != 'm'){
        header("location: index.php");
    }
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
    <center><h1>Webboard Atipatai<br></h1></center>
    <hr>
    <form>
    <table>
    <p>
    <?php
        if(isset($_SESSION['id'])){
        echo " ผู้ใช้ : ",$_SESSION['username'];
        }
    ?>
    </p>
    <tr><td>หมวดหมู่ :
        <select name="category">
        <option value="general">เรื่องทั่วไป</option>
        <option value="study">เรื่องเรียน</option>
        </select></tr></td> 
    <tr><td>หัวข้อ : &emsp;  
        <input type="text"></tr></td> 
    <tr><td>เนื้อหา :  &ensp;
        <textarea rows="3" cols="22" ></textarea></p></tr></td> 
    <tr><td>&emsp;&emsp;&emsp;&emsp;&nbsp;<input type="submit" value="บันทึกข้อความ"></tr></td>
    
    </table>
    </form>  
</body>
</html>