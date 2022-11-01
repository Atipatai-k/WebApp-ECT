<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("Location: index.php");
    }
    $user = $_POST['user'];
    $password = $_POST['pass'];
?>
<?php
    if($user == 'admin' && $password == 'ad1234'){
        $_SESSION['username'] = 'admin';
        $_SESSION['role'] = 'a';
        $_SESSION['id'] = session_id();
        header("Location: index.php");
        die();
    }
    elseif($user == 'member' && $password == 'mem1234'){
        $_SESSION['username'] = 'member';
        $_SESSION['role'] = 'm';
        $_SESSION['id'] = session_id();
        header("Location: index.php");
        die();
    }
    else{
        $_SESSION['error'] = 'error';
        header("Location: login.php");
        die();
    }
?>
</body>
</html>