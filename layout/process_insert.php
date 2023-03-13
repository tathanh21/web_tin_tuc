
<?php
$tieu_de= $_POST['tieu_de'];
$noi_dung= $_POST['noi_dung'];
$anh= $_FILES['anh'];
$id_tac_gia= $_POST['id_tac_gia'];
$folder='photos/';
$file_extension= explode('.',$anh['name'])[1];
$file_name= time() . '.' . $file_extension;
$path_file = $folder . $file_name;
move_uploaded_file($anh["tmp_name"], $path_file);

require('admin/connect.php');
$sql= "insert into ban_tin(tieu_de,noi_dung,anh,id_tac_gia)
values('$tieu_de','$noi_dung','$file_name','$id_tac_gia')";
mysqli_query($connect,$sql);
mysqli_close($connect);
?>