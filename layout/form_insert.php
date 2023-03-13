
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
    $sql= "select * from tac_gia";
    $result= mysqli_query($connect,$sql);
    ?>
    <form method="post" action="process_insert.php" enctype="multipart/form-data" >
        Tiêu đề
        <input type="text" name="tieu_de" id="">
        <br>
        Nội dung
        <input type="text" name="noi_dung">
        <br>
        Ảnh
        <input type="file" name="anh" id="">
        <br>
      Tác giả
        <select name="id_tac_gia" id="">
         <?php foreach($result as $each){ ?>
            <option value="<?php echo $each['id'] ?>">
            <?php echo $each['ten'] ?>
            </option>
        <?php } ?>
        </select>
        <br>
        <button>Thêm bản tin</button>
    </form>
</body>
</html>