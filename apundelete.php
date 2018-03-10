<?php
//PROGRAM : To make data delete (invisible) from user but not from MySQL Database
//CODED BY : prodip roy
//DATABASE NAME : hpt
//Table Name : apointment
//DATE : 28-feb-2014
include('db.php');
$id = $_GET['id'];
if (!mysqli_connect_errno()){
$visibility = 1;
$update_query = "UPDATE apointment SET `visible`= '{$visibility}' WHERE `id`='{$id}' ";
if (mysqli_query($connection,$update_query)) {
  echo "<script>window.location.href = 'apointment.php'</script>";
}else{
  echo "ERROR : failed to Delete data"."<br>";
}
}else{
echo "ERROR : Database connection failed !"."<br>";
}
mysqli_close($connection);
?>
