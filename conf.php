<?php
require('session.php');
?>
<?php
//PROGRAM : PHP program to Insert and Read from MySQL database
//CODED BY : prodip roy
//DATE : 18-feb-2014
//DATABASE NAME : ppp
//Table Name : userinfo
//WRITE INTO THE DATABASE
if (isset($_POST['submit'])) {
  include('db.php');
  $fname = $_POST['name'];
  $login = $_POST['userid'];
  $psw = $_POST['password'];
  if (!mysqli_connect_errno()) {
    $visibility = 1;
    $query = "INSERT INTO login_system (`name`, `user`, `password`,`visible`)
             VALUES('{$fname}', '{$login}', '{$psw}', '{$visibility}')";
    if(mysqli_query($connection, $query)){
      echo "";
    }else{
      echo "Database Insert Failed";
    }
  }else{
    die("ERROR : ".mysqli_connect_error());
  }
  mysqli_close($connection);
}
require 'conf.html';
//READ DATA FROM DATABASE USING PHP
include('db.php');
  if (!mysqli_connect_errno()) {
    $query = "SELECT * FROM login_system WHERE `visible` = 1";
    $result = mysqli_query($connection, $query);
    if($result){
      echo "<table id='tbl'>
    <tr>
      <th>Sl. No.</th>
      <th>Unique ID</th>
      <th>Name</th>
      <th>Login ID</th>
      <th>Password</th>
      <th>Update Record</th>
      <th>Delete Record</th>
    </tr>";
    $sl_no = 0;
    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
      $sl_no = $sl_no + 1;
      $id = $row['id'];
      echo "<tr>";
      echo "<td>".$sl_no."</td>";
      echo "<td>".$row['id']."</td>";
      echo "<td>".ucwords($row['name'])."</td>";
      echo "<td>".$row['user']."</td>";
      echo "<td>".$row['password']."</td>";
      echo "<td>"."<a href = 'update.php?id=$id' id='update'>EDIT</a>"."</td>";
      echo "<td>"."<a href = 'delete.php?id=$id' id='delete'>DEL</a>"."</td>";
      echo "</tr>";
  }
  echo "</table>";
    }
  }else{
    die("ERROR : ".mysqli_connect_error());
  }
  mysqli_close($connection);
?>
