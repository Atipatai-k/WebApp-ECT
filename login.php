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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>
<body>
    <div class="container">
    <h1 style="text-align: center;">Webboard Atipatai</h1>
    <?php include "nav.php"; ?>
    <br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <?php if(isset($_SESSION['error'])){
                echo "<div class='alert alert-danger'>ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง</div>";    
            }
            unset($_SESSION['error']);
            ?>
            <div class="card text-dark bg-light">
                <div class="card-header">เข้าสู่ระบบ</div>
                <div class="card-body">
                    <form action="verify.php" method="POST">
                        <div class="form-group">
                            <label for="user">Login:</label>
                            <input type="text" name="user" class="form-control mt-1 mb-3">
                        </div>
                        <div class="form-group">
                            <label for="pass">Password:</label>
                            <input type="text" name="pass" class="form-control mt-1 mb-3">
                        </div>
                        <center><button type="submit" class="btn btn-secondary btn-sm">
                        Login</button></center>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    <br>
    <center><p>ถ้ายังไม่ได้เป็นสมาชิก &nbsp;<a href= "register.php">กรุณาสมัครสมาชิก</a></p></center>
    </div>
</body>
</html>