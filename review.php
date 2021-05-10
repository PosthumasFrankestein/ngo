<?php
session_start();
if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: account.php');
}
$link = mysqli_connect("localhost", "root", "", "lonee_list");
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: account.php");
}
if (isset($_GET['accept'])) {
    $SN=$_GET['SN'];
    echo "accepted";
    $query2=mysqli_query($link,"update Donation set status='1' where SN='$SN'");
}
if (isset($_GET['reject'])) {
    $SN=$_GET['SN'];
    echo "rejected";
    $query3=mysqli_query($link,"update Donation set status='3' where SN='$SN'");
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
                    <li class="active"><a href="#">Donation under review</a></li>
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
                    <li><a href="admin_login.php">Dashboard</a></li>
                    <li class="active"><a href="#">Donation under review</a></li>
                    <li><a href="accepted.php">Donation Accepted</a></li>
                    <li><a href="rejected.php">Donation Rejected</a></li>
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
                                        <h4><i class="fa fa-angle-right"></i>Under review</h4>
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
                                            <?php $query1 = "select * from donation";
                                            $query_run = mysqli_query($link, $query1);
                                            $cnt = 1;

                                            while (($row = mysqli_fetch_array($query_run))) { ?>
                                                <?php if($row['status']=='2'){?>
                                                <tr>
                                                    <td><?php echo $cnt; ?></td>
                                                    <td><?php echo $row['uid']; ?></td>
                                                    <td><?php echo $row['SN']; ?></td>
                                                    <td><?php echo $row['name']; ?></td>
                                                    <td><?php echo $row['amount']; ?></td>
                                                    <td><?php echo $row['date']; ?></td>
                                                    <td><?php echo $row['status']; ?></td>
                                                    <td>
                                                
                                                        <a href="review.php?accept&SN=<?php echo $row['SN']; ?>">
                                                            <button class="btn btn-primary btn-xs"><i class="fa fa-check"></i></button></a>
                                                        <a href="review.php?reject&SN=<?php echo $row['SN']; ?>">
                                                            <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to reject');"><i class="fa fa-times"></i></button></a>
                                                    </td>
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