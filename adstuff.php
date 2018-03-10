<?php
include('db.php');
if (isset($_POST['submit'])) {
$Name =$_POST['pname'];
$work_Name =$_POST['bno'];
$Mobile =$_POST['mobile'];
$A_No =$_POST['text'];
$Gen=$_POST['gender'];
$Date =$_POST['date'];
if (!mysqli_connect_errno()) {
$query ="INSERT INTO stuff(`N`,`WN`,`MB`,`AD`,`GN`,`DT`,`visible`)
VALUES('{$Name}','{$work_Name}','{$Mobile}','{$A_No}','{$Gen}','{$Date}','{$visibility}')";
if(mysqli_query($connection,$query)){
  echo "<b><script>alert('SUCCESS:Stuff add successfully');</script></b>";
  echo "<script>window.location.href = 'stuf.php?'</script>";
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
