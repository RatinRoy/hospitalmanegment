<?php
if (isset($_POST['submit'])) {
$ip ='localhost';
$user ='root';
$password ='';
$dbname ='hpt';
$P_Name =$_POST['pname'];
$word =$_POST['bno'];
$Mobile =$_POST['mobile'];
$A_No =$_POST['text'];
$Gen=$_POST['gender'];
$Amount=$_POST['am'];
$Due=$_POST['du'];
$Total=$_POST['total'];
$Date =$_POST['date'];
$connection_write = mysqli_connect($ip,$user,$password,$dbname);
if (!mysqli_connect_errno()) {
$visibility=1;
$query ="INSERT INTO ppay(`Name`,`Word`,`Mobile`,`Address`,`Gender`,`Amount`,`Due`,`total`,`Date`,`visible`)
VALUES('{$P_Name}','{$word}','{$Mobile}','{$A_No}','{$Gen}','{$Amount}','{$Due}','{$Total}','{$Date}','{$visibility}')";
if(mysqli_query($connection_write,$query)){
  echo "<b><script>alert('SUCCESS:Doctor add successfully');</script></b>";
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
       <a href="">Back</a>
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
          <a href="">Doctor's</a>
          <a href="">Patients</a>
          <a class="visit" href="">Apointments</a>
          <a href="">Stuff</a>
          <a href="">Payment</a>
          <a href="">Report</a>
      </div>
      <div class="fm">
        <header>patient Payment Form</header>
        <br>
      <form action="#" method="post">
    Patient  Name :<br>
      <input type="text" name="pname" value="">
      <br>
      Word:<br>
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
      Amount  :<br>
        <input type="text" name="am" value="">
        <br>
        due :<br>
          <input type="text" name="du" value="">
          <br>
          total :<br>
            <input type="text" name="total" value="">
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
