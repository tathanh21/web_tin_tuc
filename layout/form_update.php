
<?php require('../check_admin_login.php') ?>
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
    require('../menu.php');
    require('../connect.php');
    $id= $_GET['id'];
    $sql= "select * from ban_tin where id = $id ";
    $result= mysqli_query($connect,$sql);
    $each= mysqli_fetch_array($result);

    $sql= "select * from tac_gia";
    $tac_giaa= mysqli_query($connect,$sql);
    ?>
    <form method="post" action="process_update.php" enctype="multipart/form-data" >
        
        <input type="hidden" value="<?php echo $each['id'] ?>" name="id" id="">
        <br>
        Tên 
        <input type="text" name="tieu_de" id="" value="<?php echo $each['tieu_de'] ?>">
        <br>
        Nội dung
        <input type="text" name="noi_dung"  value="<?php echo $each['noi_dung'] ?>">
        <br>
        Đổi ảnh mới 
        <input type="file" name="anh_moi" id="">
        <br>
        hoặc giữ ảnh cũ
        <img width="100px" src="photos/<?php echo $each['anh'] ?>" alt="">
        <input  type="hidden" name="anh_cu" value="<?php echo $each['anh'] ?>" id="">
        <br>
       
        Tác giả
        <select name="id_tac_gia" id="">
         <?php foreach($tac_giaa as $tac_gia){ ?>
            <option 
            value="<?php echo $tac_gia['id'] ?>"
            <?php if($each['id_tac_gia'] == $tac_gia['id']){ ?>
                   selected
            <?php } ?>
            >
            <?php echo $tac_gia['ten'] ?>
            </option>
        <?php } ?>
        </select>
        <br>
        <button>Sửa tin tức</button>
    </form>
</body>
</html>