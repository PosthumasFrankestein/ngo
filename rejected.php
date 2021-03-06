<?php
session_start();
if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: account.php');
}
if (!isset($_SESSION['perm'])) {
    session_destroy();
    header('location: account.php');
  }
$link = mysqli_connect("localhost", "root", "", "lonee_list");
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
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <li><a href="admin_login.php">Dashboard</a></li>
                    <li><a href="review.php">Donation under review</a></li>
                    <li><a href="accepted.php">Donation Accepted</a></li>
                    <li class="active"><a href="#">Donation rejected</a></li>
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
            <img src="img/logo.png" style="background-color:skyblue;width: 300px;height:110px;padding-left: 20px;">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="admin_login.php">Dashboard</a></li>
                    <li><a href="review.php">Donation under review</a></li>
                    <li><a href="accepted.php">Donation Accepted</a></li>
                    <li class="active"><a href="#">Donation Rejected</a></li>
                    <button class="btn" onclick="window.location='add_admin.php'">Add new admin</button>
                    <button class="btn" onclick="window.location='script/mail.php'">Send email</button>
                    <button class="btn1" onclick="window.location='admin_login.php?logout=1';return false;">logout</button>
                </ul><br>
            </div>
            <br>
            <div class="col-sm-9">
                <section id="main-content">
                    <section class="wrapper">
                        <h3><i class="fa fa-angle-right"></i>Donation</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="content-panel">
                                    <table class="table table-striped table-advance table-hover">
                                        <h4><i class="fa fa-angle-right"></i>Rejected</h4>
                                        <hr>
                                        <thead>
                                            <tr>
                                                <th>Sno.</th>
                                                <th>User id</th>
                                                <th>Donater No</th>
                                                <th>Name</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                            <?php $query = "select * from donation";
                                            $query_run = mysqli_query($link, $query);
                                            $cnt = 1;
                                            while (($row = mysqli_fetch_array($query_run))) { ?>
                                                <?php if($row['status']=='3'){?>
                                                <tr>
                                                    <td><?php echo $cnt; ?></td>
                                                    <td><?php echo $row['uid']; ?></td>
                                                    <td><?php echo $row['SN']; ?></td>
                                                    <td><?php echo $row['name']; ?></td>
                                                    <td><?php echo $row['amount']; ?></td>
                                                    <td><?php echo $row['date']; ?></td>
                                                    <td><?php echo $row['status']; ?></td>
                                                </tr>
                                                <?php
                                                }?>
                                            <?php $cnt = $cnt + 1;
                                            } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
            </div>
</body>

</html>