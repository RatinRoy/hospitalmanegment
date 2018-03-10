<?php
if (isset($_POST['submit'])) {
$ip ='localhost';
$user ='root';
$password ='';
$dbname ='hpt';
$P_Name =$_POST['ppn'];
$R_Name =$_POST['rfn'];
$Mobile =$_POST['mobile'];
$R_No =$_POST['room'];
$Adr=$_POST['adr'];
$Date =$_POST['date'];
$Time =$_POST['time'];
$connection_write = mysqli_connect($ip,$user,$password,$dbname);
if (!mysqli_connect_errno()) {
$visibility=1;
$query ="INSERT INTO apointment(`PN`,`RD`,`MB`,`RN`,`AD`,`Date`,`Time`,`visible`)
VALUES('{$P_Name}','{$R_Name}','{$Mobile}','{$R_No}','{$Adr}','{$Date}','{$Time}','{$visibility}')";
if(mysqli_query($connection_write,$query)){
  echo "<b><script>alert('SUCCESS:apointment add successfully');</script></b>";
  echo "<script>window.location.href = 'apointment.php?'</script>";
}else {
  echo "Database Insert Failed";
}
}else {
  die("ERROR :".mysqli_connect_errno());
}
mysqli_close($connection_write);
}
?>
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
  <form action="#" method="post">
  Patient Name :<br>
  <input type="text" name="ppn" value="">
  <br>
  Refferance by Doctor Name :<br>
    <input type="text" name="rfn" value="">
    <br>
     Mobile:<br>
    <input type="text" name="mobile" value="">
  <br>
  Room.NO:<br>
  <input type="text" name="room" value="">
  <br>
  Adress:<br>
  <textarea name="adr">

  </textarea>
  <br>
    Date:<br>
  <input type="Date" name="date" value="">
  <br>
  Time:<br>
  <input type="time" name="time" value="">
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
