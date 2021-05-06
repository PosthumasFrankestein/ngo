<?php
session_start();

$email = $_SESSION['email'];
$link = mysqli_connect("localhost", "root", "", "lonee_list");
$query = "select * from register where email = '$email'";
$query_run = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($query_run);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>NGO</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <link rel="stylesheet" type="text/css" href="main1.css">
    <style>
        /* Style the buttons */
        .btn {
            border: none;
            outline: none;
            padding: 10px 16px;
            background-color: #f1f1f1;
            cursor: pointer;
            font-size: 18px;
        }

        /* Style the active class, and buttons on mouse-over */
        .active,
        .btn:hover {
            background-color: #666;
            color: white;
        }

        #myDIV {
            width: 100%;
            padding: 50px 0;
            text-align: center;
            background-color: lightblue;
            margin-top: 20px;
        }

        #myDIV1 {
            width: 100%;
            padding: 50px 0;
            text-align: center;
            background-color: lightblue;
            margin-top: 20px;
        }
    </style>
</head>

<body>
<div class="container1">
        <img src="img/background.jpg" style="width: 1430px;">
        <div class="overlay">
            <div class="logo">
                <img src="img/logo.png" style="width: 150px;height:60px;padding-left: 20px;">
            </div>
            <div class="cx">
                <div class="head" id="head">
                    <ul>
                        <li><a href="home.php#article">Why E-F-ALL?</a></li>
                        <li><a href="#our_work">Our work</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#get_involved">Get involved</a></li>
                        <li><a href="#"><i Class="fa fa-phone"></i> Call-Us: +9779809867532</a></li>
                        <li><a href="account.php"><i Class="fa fa-shopping-cart"></i>My-Account</a></li>
                    </ul>
                </div>
            </div>
            <center>
                <div class="goal">

                    <p style="font-size:40px;">We believe in a world where everyone has access to good education. Join us.
                    </p>
                    <p style="padding-top:20px ;font-size: 20px;">The education crisis is massive. But together, we can
                        solve it. Join The Spring, our community of monthly
                        givers, to bring clean and safe water to families around the world every single month.</p>

                </div>
            </center>
        </div>
    </div>
    <div id="myDIV3">
        <input type="submit" class="btn active" value="Account Dashboard" onclick="myFunction()">
        <input type="submit" class="btn" value="Edit profile" onclick="myFunction()">
    </div>
    <div id="dash">
        <div class="container">
            <div class="row gutters">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="account-settings">
                                <div class="user-profile">
                                    <div class="user-avatar">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                                    </div>
                                    <h5 class="user-name">User 1</h5>
                                    <h6 class="user-email">admin@gmail.com</h6>
                                </div>
                                <div class="about">
                                    <h5>About</h5>
                                    <p>I enjoy helping to promote education.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-2 text-primary">Personal Details</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">Full Name</label>
                                        <input type="text" class="form-control" id="fullName" value="<?php echo
                                                                                                        $row['name'] ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="eMail">Email</label>
                                        <input type="email" class="form-control" id="eMail" value="<?php echo
                                                                                                    $row['email'] ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" value="<?php echo
                                                                                                    $row['phone'] ?>" disabled>
                                    </div>
                                </div>
                                <div class=" col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="website">Website URL</label>
                                            <input type="url" class="form-control" id="website" value="<?php echo
                                                                                                        $row['url'] ?>" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h6 class="mt-3 mb-2 text-primary">Address</h6>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="Street">Street</label>
                                            <input type="name" class="form-control" id="Street" value="<?php echo
                                                                                                        $row['street'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="ciTy">City</label>
                                            <input type="name" class="form-control" id="ciTy" value="<?php echo
                                                                                                        $row['city'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="sTate">State</label>
                                            <input type="text" class="form-control" id="sTate" value="<?php echo
                                                                                                        $row['state'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="zIp">Zip Code</label>
                                            <input type="text" class="form-control" id="zIp" value="<?php echo
                                                                                                    $row['zipcode'] ?>" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="text-right">
                                            <button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button>
                                            <button type="button" id="submit" name="submit" class="btn btn-primary">Update</button>
                                            <a href="user_login.php?logout='1'" style="color: red;">
                                                Click here to Logout
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
            <script src="http://netdna.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
            <script type="text/javascript">

            </script>
        </div>
    </div>
    <div id="edit" style="display:none">
        <div class="container">
            <div class="row gutters">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="account-settings">
                                <div class="user-profile">
                                    <div class="user-avatar">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                                    </div>
                                    <h5 class="user-name">User 1</h5>
                                    <h6 class="user-email">admin@gmail.com</h6>
                                </div>
                                <div class="about">
                                    <h5>About</h5>
                                    <p>I enjoy helping to promote education.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-2 text-primary">Personal Details</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">Full Name</label>
                                        <input type="text" class="form-control" id="fullName" value="<?php echo
                                                                                                        $row['name'] ?>">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="eMail">Email</label>
                                        <input type="email" class="form-control" id="eMail" value="<?php echo
                                                                                                    $row['email'] ?>">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" value="<?php echo
                                                                                                    $row['phone'] ?>"">
                                    </div>
                                </div>
                                <div class=" col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="website">Website URL</label>
                                            <input type="url" class="form-control" id="website" value="<?php echo
                                                                                                        $row['url'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h6 class="mt-3 mb-2 text-primary">Address</h6>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="Street">Street</label>
                                            <input type="name" class="form-control" id="Street" value="<?php echo
                                                                                                        $row['street'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="ciTy">City</label>
                                            <input type="name" class="form-control" id="ciTy" value="<?php echo
                                                                                                        $row['city'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="sTate">State</label>
                                            <input type="text" class="form-control" id="sTate" value="<?php echo
                                                                                                        $row['state'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="zIp">Zip Code</label>
                                            <input type="text" class="form-control" id="zIp" value="<?php echo
                                                                                                    $row['zipcode'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="text-right">
                                            <button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button>
                                            <button type="button" id="submit" name="submit" class="btn btn-primary">Update</button>
                                            <a href="user_login.php?logout='1'" style="color: red;">
                                                Click here to Logout
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
            <script src="http://netdna.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
            <script type="text/javascript">

            </script>
        </div>
    </div>
    <script>
        function myFunction() {
            var x = document.getElementById("dash");
            var y = document.getElementById("edit");
            if (x.style.display === "none") {
                x.style.display = "block";
                y.style.display = "none";
            } else {
                x.style.display = "none";
                y.style.display = "block";
            }
        }
    </script>
    <script>
        // Add active class to the current button (highlight it)
        var header = document.getElementById("myDIV3");
        var btns = header.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>


</body>

</html>