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
    Đây là khu vực quản lý tác giả
    <br>
    <?php
    include('../menu.php');
    include('../connect.php');
    $sql = "select * from tac_gia";
    $result = mysqli_query($connect, $sql);
    ?>
    <a href="form_insert.php">Thêm tác giả</a>

    <table border="1" width="100%">
        <tr>
            <th>Mã</th>
            <th>Tên</th>
            <th>Mô tả</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        <?php foreach ($result as $each) { ?>
            <tr>
                <td><?php echo $each['id'] ?></td>
                <td><?php echo $each['ten'] ?></td>
                <td><?php echo $each['mo_ta'] ?></td>
                <td> <a href="form_update.php?id=<?php echo $each['id'] ?>">X</a> </td>
                <td> <a href="delete.php?id=<?php echo $each['id'] ?>">X</a> </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>