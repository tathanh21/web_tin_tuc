
<?php
if(empty($_GET['id']) ){
    header('location:index.php?error=Phải truyền mã để sửa');
    exit();
}
$id= $_GET['id'];


require('admin/connect.php');
$sql="delete from ban_tin where id =$id";
mysqli_query($connect,$sql);
$error= mysqli_error($connect);
if(empty($error)){
    header('location:index.php?success=Xóa thành công');
}else{
    header("location:index.php?id=$id&error=Lỗi truy vấn");

}
mysqli_close($connect);
?>