
<?php
$id= $_POST['id'];
$tieu_de= $_POST['tieu_de'];
$noi_dung= $_POST['noi_dung'];
$anh_moi= $_FILES['anh_moi'];
if($anh_moi['size'] > 0){
    $folder='photos/';
    $file_extension= explode('.',$anh_moi['name'])[1];
    $file_name= time() . '.' . $file_extension;
    $path_file = $folder . $file_name;
    move_uploaded_file($anh_moi["tmp_name"], $path_file);
}else{
    $file_name= $_POST['anh_cu'];
}
$id_tac_gia= $_POST['id_tac_gia'];

require('admin/connect.php');
$sql= "update ban_tin
 set
  tieu_de='$tieu_de',
  noi_dung='$noi_dung',
  anh='$file_name',
  id_tac_gia='$id_tac_gia' 
  where id = '$id' ";
mysqli_query($connect,$sql);
mysqli_close($connect);
?>