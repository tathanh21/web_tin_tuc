<?php
$id= $_GET['id'];
$trang_thai=$_GET['trang_thai'];

require('../connect.php');
$sql="update ban_tin set trang_thai = $trang_thai where id='$id'";
mysqli_query($connect,$sql);
?>