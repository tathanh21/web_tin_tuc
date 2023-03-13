<?php require('../check_super_admin_login.php') ?>

<?php
if(empty($_POST['id']) ){
    header('location:index.php?error=Phải truyền mã để sửa');
    exit();
}
$id= $_POST['id'];
if(empty($_POST['ten']) || empty($_POST['mo_ta'])){
    header("location:form_update.php?id=$id&error=Phải điền đầy đủ thông tin");
    exit();
}

$ten= $_POST['ten'];
$mo_ta= $_POST['mo_ta'];

require('../connect.php');
$sql="update  tac_gia
set ten='$ten',mo_ta='$mo_ta' where id =$id";
mysqli_query($connect,$sql);
$error= mysqli_error($connect);
if(empty($error)){
    header('location:index.php?success=Sửa thành công');
}else{
    header("location:index.php?id=$id&error=Lỗi truy vấn");

}
mysqli_close($connect);
?>