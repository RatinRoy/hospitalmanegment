<?php
require('session.php');
?>
<?php
//PROGRAM : PHP program to UPDATE a Record in MySQL database for the CRUD App
//CODED BY : prodip roy
//DATABASE NAME : php_mysqli
//Table Name : userinfo
//DATE : 20-feb-2018
include('db.php');
$id = $_GET['id'];
if (!mysqli_connect_errno()){
  $query = "SELECT `name`,`user`,`password` FROM login_system WHERE `id`='{$id}'";
  $result = mysqli_query($connection,$query);
  if ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    $name=$row['name'];
    $login_id=$row['user'];
    $user_password=$row['password'];
  }
}else{
  echo "ERROR : Database connection failed !"."<br>";
}
mysqli_close($connection);
require('conf.html');
//Update the data and Save it into the MySQL database;
if (isset($_POST['submit'])) {
include('db.php');
  $name = $_POST['name'];
  $login = $_POST['userid'];
  $psw = $_POST['password'];
  if (!mysqli_connect_errno()) {
    $visibility = 1;
    $query = "UPDATE login_system SET `name`='{$name}',`user`='{$login}',
             `password`='{$psw}' WHERE `id`='{$id}' ";
    if(mysqli_query($connection, $query)){
      header("location:conf.php");
    }else{
      echo "<script>alert('ERROR : Database Insert Failed because login name exists');</script>";
    }
  }else{
    die("ERROR : ".mysqli_connect_error());
  }
  mysqli_close($connection);
}
?>
