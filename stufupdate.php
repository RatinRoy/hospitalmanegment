<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/patientform.css">
  </head>
  <body>
   <div class="all">
    <div class="head">
      <div class="back">
       <a href="home.php">Home</a>
     </div>
      <div class="ad">
      <h1>Hello Admin ! </h1>
    </div>
      <div class="f1">
        <a href="index.php?">Logout</a>
      </div>
    </div>
      <div class="f2">
        <h1>HOSPITAL MANGMENT SYSTEM </h1>
      </div>
      <div class="menu">
          <a href="doctor.php">Doctor's</a>
          <a href="patient.php?">Patients</a>
          <a class="visit" href="apointment.php?">Apointments</a>
          <a href="stuf.php?">Stuff</a>
          <a href="">Payment</a>
          <a href="">Report</a>
      </div>
      <div class="fm">
        <header>Struff Form</header>
        <br>
      <form action="#" method="post">
      Name :<br>
      <input type="text" name="pname" value="">
      <br>
      Gradiation:<br>
        <input type="text" name="bno" value="">
        <br>
         Mobile:<br>
        <input type="text" name="mobile" value="">
      <br>
      Adrress:<br>
      <textarea  name="text"></textarea>
    <br><br>
      Gender:
      <select name="gender">
        <option>female</option>
        <option>male</option>
      </select>
      <br>
      Joint  Date:<br>
      <input type="Date" name="date" value="">
      <br><br>
    <div class="btn">
    <input style="border-radius: 5px;" type="submit" name="submit" value="Add">
    <input style="border-radius: 5px;" type="reset" name="reset" value="Clear">
    </div>
    </form>
    </div>
 <div class="footer">
        <h1>copyright&copy;prodip roy lict batch-29</h1>
        </div>
        </div>

</body>
</html>
<?php
//PROGRAM : PHP program to UPDATE a Record in MySQL database for the CRUD App
//CODED BY : prodip roy
//DATABASE NAME : php_mysqli
//Table Name : userinfo
//DATE : 20-feb-2018
include('db.php');
$id = $_GET['id'];
if (!mysqli_connect_errno()){
  $query = "SELECT `N`,`WN`,`MB`,`AD`,`GN`,`DT` FROM stuff WHERE `id`='{$id}'";
  $result = mysqli_query($connection,$query);
  if ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    $P_Name =$row['N'];
    $Bed_No=$row['WN'];
    $Mobile =$row['MB'];
    $Adrress=$row['AD'];
    $Gender=$row['GN'];
    $Date =$row['DT'];
  }
}else{
  echo "ERROR : Database connection failed !"."<br>";
}
mysqli_close($connection);
//Update the data and Save it into the MySQL database;
include ('db.php');
if (isset($_POST['submit'])) {
  $P_Name =$_POST['pname'];
  $Bed_No=$_POST['bno'];
  $Mobile =$_POST['mobile'];
  $Adrress=$_POST['text'];
  $Gender=$_POST['gender'];
  $Date =$_POST['date'];
  $visibility=1;
  if (!mysqli_connect_errno()) {
    $query = "UPDATE stuff SET `N`='{$P_Name}',`WN`='{$Bed_No}',
             `MB`='{$Mobile}',`AD`='{$Adrress}',`GN`='{$Gender}',`DT`='{$Date}', WHERE `id`='{$id}' ";
    if(mysqli_query($connection, $query)){
      header("location:stuf.php");
    }else{
      echo "<script>alert('ERROR : Database Insert Failed ');</script>";
    }
  }else{
    die("ERROR : ".mysqli_connect_error());
  }
  mysqli_close($connection);
}
?>
