<?php
$ten= $_POST['ten'];
$mat_khau= $_POST['mat_khau'];
if(isset($_POST['remember'])){
    $remember= true;
}else{
    $remember= false;
}

require('admin/connect.php');
$sql="select * from  khach_hang where ten='$ten' and mat_khau='$mat_khau'";
$result= mysqli_query($connect,$sql);
$number_rows= mysqli_num_rows($result);
if($number_rows == 1 ){
    echo 'Đăng nhập thành công';
    session_start();
    $each=mysqli_fetch_array($result);
    $_SESSION['id']=$each['id'];
    $_SESSION['ten']=$each['ten'];
   if($remember){
    setcookie('remember',$each['id'], time() + 60*60*24);
   }else{
    echo "đăng nhập sai rồi";
   }
    header('location:index.php');
    exit;
   
}
header('location:signin.php?error=Đăng Nhập sai rồi');
?>