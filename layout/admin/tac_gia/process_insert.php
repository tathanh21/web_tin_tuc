<?php require('../check_super_admin_login.php') ?>

<?php

if(empty($_POST['name']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['photo'])){
    header('location:form_insert.php?error=Phải điền đầy đủ thông tin');
}

$ten= $_POST['ten'];
$mo_ta= $_POST['mo_ta'];

require('../connect.php');
$sql="insert into tac_gia(ten,mo_ta) 
values('$ten','$mo_ta')";
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php?success=Thêm thành công');
?>