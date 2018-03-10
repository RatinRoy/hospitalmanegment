<?php
//PROGRAM : PHP program to UPDATE a Record in MySQL database for the CRUD App
//CODED BY : prodip roy
//DATABASE NAME : php_mysqli
//Table Name : userinfo
//DATE : 20-feb-2018
include('db.php');
$id = $_GET['id'];
if (!mysqli_connect_errno()){
  $query = "SELECT `DN`,`SPC`,`MB`,`CHN`,`Date` FROM doctor WHERE `id`='{$id}'";
  $result = mysqli_query($connection,$query);
  if ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    $D_Name=$row['DN'];
    $Specitailist=$row['SPC'];
    $Mobile=$row['MB'];
    $Chember=$row['CHN'];
    $Date=$row['Date'];
  }
}else{
  echo "ERROR : Database connection failed !"."<br>";
}
mysqli_close($connection);
require('addoctors.php');
//Update the data and Save it into the MySQL database;
if (isset($_POST['submit'])) {
include('db.php');
  $D_Name =$_POST['dname'];
  $Specitailist =$_POST['spc'];
  $Mobile =$_POST['mbl'];
  $Chember=$_POST['chn'];
  $Date =$_POST['date'];
  if (!mysqli_connect_errno()) {
    $visibility = 1;
    $query = "UPDATE doctor SET `DN`='{$D_Name}',`SPC`='{$Specitailist}',
             `MB`='{$Mobile}',`CHN`='{$Chember}',`Date`='{$Date}' WHERE `id`='{$id}' ";
    if(mysqli_query($connection, $query)){
      header("location:doctor.php");
    }else{
      echo "<script>alert('ERROR : Database Insert Failed because login name exists');</script>";
    }
  }else{
    die("ERROR : ".mysqli_connect_error());
  }
  mysqli_close($connection);
}
?>
