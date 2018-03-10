<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="css/patientform.css">
  <link rel="stylesheet" type="text/css" href="css/home.css">
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
          <a href="doctor.php?">Doctor's</a>
          <a href="patient.php?">Patients</a>
          <a class="visit" href="apointment.php?">Apointments</a>

      </div>
  <div class="fm">
    <header>Apointments Form</header>
    <br>
    <?php
    //PROGRAM : PHP program to UPDATE a Record in MySQL database for the CRUD App
    //CODED BY : prodip roy
    //DATABASE NAME : php_mysqli
    //Table Name : userinfo
    //DATE : 20-feb-2018
    include('db.php');
    $id = $_GET['id'];
    if (!mysqli_connect_errno()){
      $query = "SELECT `PN`,`RD`,`MB`,`RN`,`AD`,`Date`,`Time` FROM apointment WHERE `id`='{$id}'";
      $result = mysqli_query($connection,$query);
      if ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        $P_Name =$row['PN'];
        $R_Name=$row['RD'];
        $Mobile =$row['MB'];
        $R_No=$row['RN'];
        $Adr=$row['AD'];
        $Date =$row['Date'];
        $Time=$row['Time'];
      }
    }else{
      echo "ERROR : Database connection failed !"."<br>";
    }
    mysqli_close($connection);
    //Update the data and Save it into the MySQL database;
    if (isset($_POST['submit'])) {
    include('db.php');
      $P_Name =$_POST['ppn'];
      $R_Name =$_POST['rfn'];
      $Mobile =$_POST['mobile'];
      $R_No =$_POST['room'];
      $Adr=$_POST['adr'];
      $Date =$_POST['date'];
      $Time =$_POST['time'];
      if (!mysqli_connect_errno()) {
        $visibility = 1;
        $query = "UPDATE apointment SET `PN`='{$P_Name}',`RD`='{$R_Name}',
                 `MB`='{$Mobile}',`RN`='{$R_No}',`AD`='{$Adr}',`Date`='{$Date}',`Time`='{$Time}' WHERE `id`='{$id}' ";
        if(mysqli_query($connection, $query)){
          header("location:apointment.php");
        }else{
          echo "<script>alert('ERROR : Database Insert Failed because login name exists');</script>";
        }
      }else{
        die("ERROR : ".mysqli_connect_error());
      }
      mysqli_close($connection);
    }
    ?>

  <form action="#" method="post">
  Patient Name :<br>
  <input type="text" name="ppn" value="<?php echo $P_Name;?>">
  <br>
  Refferance by Doctor Name :<br>
    <input type="text" name="rfn" value="<?php echo $R_Name;?>">
    <br>
     Mobile:<br>
    <input type="text" name="mobile" value="<?php echo $Mobile;?>">
  <br>
  Room.NO:<br>
  <input type="text" name="room" value="<?php echo $R_No;?>">
  <br>
  Adress:<br>
  <textarea name="adr" value="<?php echo $Adr;?>">

  </textarea>
  <br>
    Date:<br>
  <input type="Date" name="date" value="<?php echo $Date;?>">
  <br>
  Time:<br>
  <input type="time" name="time" value="<?php echo $Time;?>">
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
