<?php
include('db.php');
if (isset($_POST['submit'])) {
$D_Name =$_POST['dname'];
$Specitailist =$_POST['spc'];
$Mobile =$_POST['mbl'];
$Chember=$_POST['chn'];
$Date =$_POST['date'];
if (!mysqli_connect_errno()) {
$visibility=1;
$query ="INSERT INTO doctor(`DN`,`SPC`,`MB`,`CHN`,`Date`,`visible`)
VALUES('{$D_Name}','{$Specitailist}','{$Mobile}','{$Chember}','{$Date}','{$visibility}')";
if(mysqli_query($connection,$query)){
  echo "<b><script>alert('SUCCESS:Doctor add successfully');</script></b>";
  echo "<script>window.location.href = 'doctor.php'</script>";
}else {
  echo "Database Insert Failed";
}
}else {
  die("ERROR :".mysqli_connect_errno());
}
mysqli_close($connection);
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
        <a href="index.php">Logout</a>
      </div>
    </div>
      <div class="f2">
        <h1>HOSPITAL MANGMENT SYSTEM </h1>
      </div>
      <div class="menu">
          <a href="doctor.php">Doctor's</a>
          <a href="patient.php">Patients</a>
          <a class="visit" href="apointment.php?">Apointments</a>
  
      </div>
	<div class="fm">
    <header>Doctor's Form</header>
    <br>
  <form action="#" method="post">
  Doctor Name :<br>
  <input type="text" name="dname" value="">
  <br>
  Specitialist:<br>
    <input type="text" name="spc" value="">
    <br>
     Mobile:<br>
    <input type="text" name="mbl" value="">
  <br>
  Chember No:<br>
  <input type="text" name="chn" value="">
  <br>
    Date:<br>
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
