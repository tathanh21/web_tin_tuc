<?php require('../check_super_admin_login.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php include('../menu.php') ?>
    <form action="process_insert.php" method="post">
        Tên 
        <input type="text" name="ten" id="">
        <br>
       Mô tả
        <input type="text" name="mo_ta" id="">
        <br>
        <button>Thêm Tác giả</button>
    </form>
</body>
</html>