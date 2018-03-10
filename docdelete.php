<?php
//PROGRAM : To make data delete (invisible) from user but not from MySQL Database
//CODED BY : prodip roy
//DATABASE NAME : ppp
//Table Name : userinfo
//DATE : 18-feb-2014
include('db.php');
$id = $_GET['id'];
if (!mysqli_connect_errno()){
$visibility = 0;
$update_query = "UPDATE doctor SET `visible`= '{$visibility}' WHERE `id`='{$id}' ";
if (mysqli_query($connection,$update_query)) {
  echo "<script>window.location.href = 'doctor.php'</script>";
}else{
  echo "ERROR : failed to Delete data"."<br>";
}
}else{
echo "ERROR : Database connection failed !"."<br>";
}
mysqli_close($connection);
?>
