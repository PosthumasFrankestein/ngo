<!DOCTYPE html>
<html lang="en">

<head>
    <title>NGO</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <link rel="stylesheet" type="text/css" href="style/user.css">
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
    <div class="selection">
        <form method="post">
            <table>
                <tr>
                    <td>
                        <input type="submit" name="dashboard" value="Account Dashboard" onchange="this.className=(this.value=='')?'':'visited';">
                    </td>
                    <td>
                        <input type="submit" name="edit_profile" value="Edit Profile" onchange="this.className=(this.value=='')?'':'visited';">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <!-- <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">
                <div class="sign-in-htm">
                    
                </div>
                <div class="sign-up-htm">
                    </div>
            </div>
        </div>
    </div> -->
        <?php
        if (isset($_POST['edit_profile'])) {
        ?>
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
                                            <input type="text" class="form-control" id="fullName" placeholder="Enter full name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="eMail">Email</label>
                                            <input type="email" class="form-control" id="eMail" placeholder="Enter email ID">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control" id="phone" placeholder="Enter phone number">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="website">Website URL</label>
                                            <input type="url" class="form-control" id="website" placeholder="Website url">
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
                                            <input type="name" class="form-control" id="Street" placeholder="Enter Street">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="ciTy">City</label>
                                            <input type="name" class="form-control" id="ciTy" placeholder="Enter City">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="sTate">State</label>
                                            <input type="text" class="form-control" id="sTate" placeholder="Enter State">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="zIp">Zip Code</label>
                                            <input type="text" class="form-control" id="zIp" placeholder="Zip Code">
                                        </div>
                                    </div>
                                </div>
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="text-right">
                                            <button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button>
                                            <button type="button" id="submit" name="submit" class="btn btn-primary">Update</button>
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
        <?php
        }
        ?>
        <footer>
            <div>
                <P>SUBSCRIPTION</P>
                <form action="mail.php" method="post">
                    <table>
                        <tr>
                            <td style="width:70%">
                                <input class="email" type="email" placeholder="your email here " name="email" required>
                            </td>
                            <td>
                                <input class="send" type="submit" name="mail" value="Subscribe">
                            </td>
                        </tr>
                    </table>
                </form>
                <p>Connect With Us</p></button>
                <a class="fa fa-facebook" href="https://www.facebook.com/charitywater"></a>
                <a class="fa fa-twitter" href="https://twitter.com/charitywater"></a>
                <a class="fa fa-instagram" href="https://www.instagram.com/charitywater/"></a>
                <a class="fa fa-snapchat" href="https://www.snapchat.com/add/charitywater"></a>
                <a class="fa fa-linkedin" href="https://www.linkedin.com/company/charity-water"></a>
                <a class="fa fa-youtube" href="https://www.youtube.com/user/charitywater"></a>
            </div>
            <div>
                <p>Get to know us</p>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">See our finances</a></li>
                    <li><a href="#">careers</a></li>
                </ul>
            </div>
            <div>
                <p>Connect</p>
                <ul>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Help center</a></li>
                    <li><a href="#">Request a speaker</a></li>
                    <li><a href="#">Shop our store</a></li>
                </ul>
            </div>
            <div id="get_involved">
                <p>Get involved</p>
                <ul>
                    <li><a id="fund" href="#">Fundraise</a></li>
                    <li><a id="bp" href="#">Brand Partnership</a></li>
                    <li><a id="lg" href="#">Legacy giving</a></li>
                    <li><a id="st" href="#">Students and teacher</a></li>
                </ul>
            </div>
            <div>
                <p>Contact</p>
                <ul>
                    <li><a href="#">9787-address city state</a></li>
                    <li><a href="#">+9779809867532 </a></li>
                    <li><a href="#">contact@gmail.com</a></li>
                </ul>
            </div>
        </footer>
        <p class="paragraph"><span>© 2018 NGO Federation of Nepal.</span></p>
        <br>
        <br>
</body>

</html>