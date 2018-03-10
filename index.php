<?php
session_start();
if(isset($_POST['submit'])) {
  include('db.php');
  $myusername = mysqli_real_escape_string($connection,$_POST['username']);
  $mypassword = mysqli_real_escape_string($connection,$_POST['password']);
  $sql = "SELECT `id` FROM login_system WHERE `user`= '{$myusername}' and `password` = '{$mypassword}' AND `visible` = '{$visibility}'";
  $result = mysqli_query($connection,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $active = $row['active'];
  $count = mysqli_num_rows($result);
  // If result matched $myusername and $mypassword, table row must be 1 row
  if($count == 1) {
    $_SESSION['login_user'] = $myusername;
    header("location: home.php");
  }else {
    echo "<script>alert('Your Login Name or Password is invalid');</script>";
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
h1{
  border: 1px solid blue;
  background-color: lightgray;
  padding: 5px;
  font-weight:lighter;
  color: red;
  text-align: center;
  margin: 0 auto;
  width: 180px;
}
 .email{
  border: 1px solid blue;
  background-color: white;
  margin: 0 auto;
  width: 180px;
  padding: 1px;
}
 .sub{
  border: 1px solid blue;
  background-color: green;
  margin: 0 auto;
  width: 50px;
  color: white;
  padding: 1px;
  border-radius: 5px;
}
.new {
  border: 1px solid blue;
  background-color:green;
  color: white;
  margin: 0 auto;
  width: 65px;
  color: white;
  padding: 1px;
  border-radius: 5px;
  margin-left: 50px;
  text-decoration: none;
}
.pws{
  border: 1px solid blue;
  background-color: white;
  margin: 0 auto;
  width: 180px;
  padding: 1px;
}
.sub:hover{
  background-color: pink;
}
form{
  border: 1px solid blue;
  margin: 0 auto;
  width: 180px;
  padding: 5px;
  background-color: lightgray;
}
body{
  display: block;
}
.new:hover{
  background-color: red;
}
div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
    </style>
  </head>
  <body>
    <h1> Admin Login</h1>
    <form method="post" action="#" >
      <input class="email" type="text" name="username" placeholder="User Id" value=""></input>
      <br><br>
      <input class="pws" type="text" name="password" placeholder="Password" value=""></input>
      <br><br>
      <input class="sub" type="submit" name="submit" value="Sign In" ></input>
      <a href="conf.php" class="new" name="new">Create Id</a>
      <br><br>
      <p>user id: admin<br>password: admin</p>
    </form>
    <div style="margin-left:25%;">
      <h3>Our Team members</h3>
    <div class="gallery">
  <a target="_blank" href="#">
    <img src="image/p.jpg" alt="Fjords" width="300" height="200">
  </a>
  <h2>Prodip Roy</h2>
  <div class="desc">Team Leader</div>
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="image/r.jpg" alt="Forest" style="height:170px;">
  </a>
  <h2>Ratin Roy</h2>
  <div class="desc">Team members</div>
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="image/z.jpg" alt="Northern Lights" style="height:170px;">
  </a>
  <h2>Zakia Khanam</h2>
  <div class="desc">Team members</div>
</div>
</div>
  </body>
</html>
