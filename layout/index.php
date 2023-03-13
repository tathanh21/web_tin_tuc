<?php session_start(); ?>
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
    require('admin/connect.php');
    $sql= "select ban_tin.* ,tac_gia.ten as ten_tac_gia
    from ban_tin
    join  tac_gia on  ban_tin.id_tac_gia = tac_gia.id where trang_thai='1'";
    $result= mysqli_query($connect,$sql);
    ?>
     <ol>
                <li>
                    <a href="index.php">Trang chủ</a>
                </li>
                <?php if(empty($_SESSION['id'])){ ?>
                    <li>
                    <a href="signin.php">Đăng Nhập</a>
                </li>
                <li>
                    <a href="signup.php">Đăng Ký</a>
                </li>
                <?php } else {?>
                
                <li>
                    Chào <?php echo $_SESSION['ten'] ?>,
                    <br>
                    <a href="signout.php">Đăng xuất</a>
                </li>
                <?php } ?>
            </ol>
    <h1>Quản lý bản tin</h1>
    <a href="form_insert.php">Thêm bản tin</a>
    <table border="1" , width="100%">
        <tr>
        <th>Mã</th>
        <th>Tiêu đề</th>
        <th>Nội dung</th>
        <th>Ảnh</th>
        <th>Tên tác giả</th>
        <?php if(!empty($_SESSION['id'])){ ?>
        <th>Sửa</th>
        <th>Xóa</th>
        <?php } ?>
        </tr>
        <?php foreach ($result as $each) { ?>
           <tr>
            <td><?php echo $each['id'] ?></td>
            <td><?php echo $each['tieu_de'] ?></td>
            <td><?php echo $each['noi_dung'] ?></td>
            <td><img width="100px" src="photos/<?php echo $each['anh'] ?>" alt=""></td>
            <td><?php echo $each['ten_tac_gia'] ?></td>
            <?php if(!empty($_SESSION['id'])){ ?>
            <td>
                <a href="form_update.php?id=<?php echo $each['id'] ?>">Sửa</a>             
            </td>
            <td>
                <a href="delete.php?id=<?php echo $each['id'] ?>">Xóa</a>
            </td>
            <?php } ?>
           </tr>
      <?php  } ?>
    </table>
</body>
</html>