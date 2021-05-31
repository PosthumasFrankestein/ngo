<?php
session_start();
if ((!isset($_SESSION['email']))) {
  header('location: account.php');
}
if (!isset($_SESSION['perm'])) {
  session_destroy();
  header('location: account.php');
}

$link = mysqli_connect("localhost", "root", "", "lonee_list");
$no = mysqli_query($link, "SELECT COUNT(uid) FROM register");
$no1 = mysqli_query($link, "SELECT COUNT(SN) FROM subscribe");
$no2 = mysqli_query($link, "SELECT sum(amount) FROM donation");
$row = $no->fetch_row();
$row1 = $no1->fetch_row();
$row2 = $no2->fetch_row();
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
  <link rel="stylesheet" href="bootstrap/3_4_1.css">
  <script src="bootstrap/ajax_3_5_1.js"></script>
  <script src="bootstrap/bootstrap_3_4_1.js"></script>
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
          <li><a href="review.php">Donation under review</a></li>
          <li><a href="accepted.php">Donation Accepted</a></li>
          <li><a href="rejected.php">Donation rejected</a></li>
          <button class="btn" onclick="window.location='add_admin.php'">Add new admin</button>
          <button class="btn" onclick="window.location='script/mail.php'">Send email</button>
          <button class="btn1" onclick="window.location='admin_login.php?logout=1';return false;">logout</button>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row content">
      <div class="col-sm-3 sidenav hidden-xs">
        <img src="img/logo.png" style="background-color:skyblue;width: 328px;height:110px;padding-left: 20px;">
        <ul class="nav nav-pills nav-stacked">
          <li class="active"><a href="#">Dashboard</a></li>
          <li><a href="review.php">Donation under review</a></li>
          <li><a href="accepted.php">Donation Accepted</a></li>
          <li><a href="rejected.php">Donation Rejected</a></li>
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
              <h4>Total subscriber</h4>
              <p><?php
                  echo $row1[0];
                  ?></p>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="well">
              <h4>Total donation</h4>
              <p><?php
                  echo $row2[0];
                  ?></p>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="well">
              <h4>Goal</h4>
              <p>30000$</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>