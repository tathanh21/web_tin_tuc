<?php
$ten= $_POST['ten'];
$mat_khau= $_POST['mat_khau'];

require('admin/connect.php');
$sql="select count(*) from  khach_hang where ten='$ten'";
$result= mysqli_query($connect,$sql);
$number_rows= mysqli_fetch_array($result)['count(*)'];
if($number_rows == 1){
    session_start();
    $_SESSION['error']='Trùng tên rồi';
    header('location:signup.php');
    exit;
}

$sql="insert into khach_hang(ten,mat_khau) values('$ten','$mat_khau')";
mysqli_query($connect,$sql);

$sql="select id from  khach_hang where ten='$ten'";
$result=mysqli_query($connect,$sql);
$id= mysqli_fetch_array($result)['id'];
session_start();
$_SESSION['id']=$id;
$_SESSION['ten']=$ten;
mysqli_close($connect);


?>