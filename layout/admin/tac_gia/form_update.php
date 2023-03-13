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
   <?php
       if(empty($_GET['id'])) {
        header('location:index.php?error=Phải truyền mã để sửa');
       }
       $id= $_GET['id'];
        include('../menu.php');
        require('../connect.php');
        $sql= "select * from tac_gia where id = $id";
        $result= mysqli_query($connect,$sql);
        $each= mysqli_fetch_array($result);
   ?>
    <form action="process_update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $each['id'] ?>" id="">
        Tên 
        <input type="text" name="ten" id="" value="<?php echo $each['ten'] ?>">
        <br>
        Mô tả
        <input type="text" name="mo_ta" id="" value="<?php echo $each['mo_ta'] ?>">
        <br>
        <button>Sửa tác giả</button>
    </form>
</body>
</html>