<?php
session_start();
if(isset($_COOKIE['remember'])){
    $id= $_COOKIE['remember'];
    require('admin/connect.php');
    $sql="select * from customers where id='$id'";
    $result= mysqli_query($connect,$sql);
    $each= mysqli_fetch_array($result);
    $_SESSION['id']=$each['id'];
    $_SESSION['name']=$each['name'];
}
if(isset($_SESSION['id'])){
    header('location:user.php');
    exit;
}

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
   <?php
    if(isset($_GET['error'])){
        echo  $_GET['error'];
    }
    ?>
    <form method="post" action="process_signin.php">
        Email 
        <input type="text" name="ten">
        <br>
        Mật khẩu 
        <input type="password" name="mat_khau">
        <br>
        Ghi nhớ đăng nhập 
        <input type="checkbox" name="remember">
        <button>Đăng Nhập</button>
    </form>
</body>
</html>