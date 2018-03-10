<?php
session_start();
include('db.php');
$user_check = $_SESSION['login_user'];
$ses_sql = mysqli_query($connection,"SELECT `user` FROM login_system WHERE `user` = '{$user_check}' ");
$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_session = $row['user'];
if(!isset($_SESSION['login_user'])){
  header("location:index.php");
}
?>
