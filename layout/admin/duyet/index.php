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
    require('../connect.php');
    $sql = "select ban_tin.* ,tac_gia.ten as ten_tac_gia
    from ban_tin
    join  tac_gia on  ban_tin.id_tac_gia = tac_gia.id";
    $result = mysqli_query($connect, $sql);
    ?>
    <table border="1" width="100%">
        <tr>
            <th>Mã</th>
            <th>Thời gian đặt</th>
            <th>Nội dung</th>
            <th>anh</th>
            <th>Trạng thái</th>
            <th>Tác giả</th>
            <th>Hành động</th>
        </tr>
        <?php foreach ($result as $each) { ?>
            <tr>
                <td><?php echo $each['id'] ?></td>
                <td><?php echo $each['thoi_gian_tao'] ?></td>
                <td> <?php echo $each['noi_dung'] ?> </td>
                <td> <img height="100px" src="../../photos/<?php echo $each['anh'] ?>" alt=""> </td>
                <td>
                    <?php
                    switch ($each['trang_thai']) {
                        case '0':
                            echo "Mới đặt";
                            break;
                        case '1':
                            echo "Đã duyệt";
                            break;
                        case '2':
                            echo "Đã hủy";
                            break;
                    }
                    ?>
                </td>
                <td><?php echo $each['ten_tac_gia'] ?></td>
                </td>
                <td>
                    <a href="update.php?id=<?php echo $each['id'] ?>&trang_thai=1">Duyệt</a>
                    <br>
                    <a href="update.php?id=<?php echo $each['id'] ?>&trang_thai=2">Hủy</a>
                </td>
            </tr>
        <?php }   ?>
    </table>

</body>

</html>