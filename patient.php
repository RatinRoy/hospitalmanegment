<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/patientform.css ">
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
          <a class="now" href="patient.php?">Patients</a>
          <a href="apointment.php?">Apointments</a>
          
      </div>
      <div class="add">
        <a href="adpatient.php">Add Patient's</a>
        </div>
        <div class="list">
        <h1>Patient's list</h1>
        </div>
        <?php
        //PROGRAM : CRUD operation on hospital management project
        //CODED BY : PRODIP
        //DATE : 2-Feb-2018
        //DATABASE NAME : project
        //Table Name : doctors
        //Read INTO THE DATABASE
        session_start();
        include('db.php');
          if (!mysqli_connect_errno()) {
            $query = "SELECT * FROM patient WHERE `visible` = 1";
            $result = mysqli_query($connection, $query);

            if($result){
              echo "<table id='tb1'>
            <tr>
              <th>Sl. No.</th>
              <th>ID</th>
              <th>Patient Name</th>
              <th>Bed No</th>
              <th>Mobile No</th>
              <th>Adrress</th>
              <th>Word</th>
              <th>Gender</th>
              <th>Joint Date</th>
              <th>Time</th>
              <th>Update</th>
              <th>Delete</th>
            </tr>";
            $sl_no = 0;
            while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
              $sl_no = $sl_no + 1;
              $id = $row['id'];
              echo "<tr>";
              echo "<td>".$sl_no."</td>";
              echo "<td>".$row['id']."</td>";
              echo "<td>".ucwords($row['PN'])."</td>";
              echo "<td>".$row['BN']."</td>";
              echo "<td>".$row['MB']."</td>";
              echo "<td>".$row['TX']."</td>";
              echo "<td>".$row['WRD']."</td>";
              echo "<td>".$row['GEN']."</td>";
              echo "<td>".$row['Date']."</td>";
              echo "<td>".$row['Time']."</td>";
              echo "<td>"."<a href = 'pupdate.php?id=$id' id='update'>Edit</a>"."</td>";
              echo "<td>"."<a href = 'pdelete.php?id=$id' id='delete'>Delete</a>"."</td>";
              echo "</tr>";
          }
          echo "</table>";
            }
          }else{
            die("ERROR : ".mysqli_connect_error());
          }
          mysqli_close($connection);
         ?>
        <div class="del">
        <h1>Delete record</h1>
        </div>
        <?php
        //PROGRAM : CRUD operation on hospital management project
        //CODED BY : PRODIP
        //DATE : 2-Feb-2018
        //DATABASE NAME : project
        //Table Name : doctors
        //Read INTO THE DATABASE
      include('db.php');
          if (!mysqli_connect_errno()) {
            $query = "SELECT * FROM patient WHERE `visible` = 0";
            $result = mysqli_query($connection, $query);

            if($result){
              echo "<table id='tb1'>
            <tr>
              <th>Sl. No.</th>
              <th>ID</th>
              <th>Patient Name</th>
              <th>Bed No</th>
              <th>Mobile No</th>
              <th>Adrress</th>
              <th>Word</th>
              <th>Gender</th>
              <th>Joint Date</th>
              <th>Time</th>
              <th>Undelete</th>
            </tr>";
            $sl_no = 0;
            while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
              $sl_no = $sl_no + 1;
              $id = $row['id'];
              echo "<tr>";
              echo "<td>".$sl_no."</td>";
              echo "<td>".$row['id']."</td>";
              echo "<td>".ucwords($row['PN'])."</td>";
              echo "<td>".$row['BN']."</td>";
              echo "<td>".$row['MB']."</td>";
              echo "<td>".$row['TX']."</td>";
              echo "<td>".$row['WRD']."</td>";
              echo "<td>".$row['GEN']."</td>";
              echo "<td>".$row['Date']."</td>";
              echo "<td>".$row['Time']."</td>";
              echo "<td>"."<a href = 'pundelete.php?id=$id' id='delete'>Undelete</a>"."</td>";
              echo "</tr>";
          }
          echo "</table>";
            }
          }else{
            die("ERROR : ".mysqli_connect_error());
          }
          mysqli_close($connection);
         ?>
        <div class="footer">
        <h1>copyright&copy;prodip roy lict batch-29</h1>
        </div>
      </div>

  </body>
</html>
