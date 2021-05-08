<?php
session_start();
if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: account.php');
}
$link = mysqli_connect("localhost", "root", "", "lonee_list");
$no=mysqli_query($link,"SELECT COUNT(uid) FROM register");
$row = $no->fetch_row();
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['email']);
  header("location: account.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style/admin.css">
</head>
<body>
<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard</a></li>
        <li><a href="#">Age</a></li>
        <li><a href="#">Gender</a></li>
        <li><a href="#">Geo</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
    <img src="img/logo.png" style="background-color:skyblue;width: 150px;height:60px;padding-left: 20px;">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard</a></li>
        <li><a href="#section2">Age</a></li>
        <li><a href="#section3">Gender</a></li>
        <li><a href="#section3">Geo</a></li>
        <button class="btn" onclick="window.location='add_admin.php'">Add new admin</button>
        <button class="btn" onclick="window.location='script/mail.php'">Send email</button>
        <button class="btn1" onclick="window.location='admin_login.php?logout=1';return false;">logout</button>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
      <div class="well">
        <h4>Dashboard</h4>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <h4>Users</h4>
            <p><?php
              echo $row[0];
            ?></p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Fund collected</h4>
            <p>$10000</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Program</h4>
            <p>10</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Goal</h4>
            <p>30</p> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>

