<?php
$link = mysqli_connect("localhost", "root", "", "lonee_list");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="bootstrap/3_4_1.css">
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <style>
        body {
            background-color: black;
        }

        .logo img {
            float: left;
            width: 150px;
            height: 60px;
            padding-left: 20px;
        }

        .content {
            padding-top: 20px;
            height: 60px;
        }

        .campaign {
            padding-top: 20px;
            padding-left: 30px;
            padding-right: 30px;
        }

        .well {
            padding: 5px;
            border-radius: 0 !important;
            border: 1px solid #9e9e9e;
            vertical-align: middle;
            min-height: 250px;
            max-height: 250px;
            overflow: hidden
        }

        .well:hover {
            background: #fefcea;
            background: -moz-linear-gradient(-45deg, rgba(254, 252, 234, 1) 0%, rgba(239, 217, 71, 1) 100%);
            background: -webkit-gradient(linear, left top, right bottom, color-stop(0%, rgba(254, 252, 234, 1)), color-stop(100%, rgba(239, 217, 71, 1)));
            background: -webkit-linear-gradient(-45deg, rgba(254, 252, 234, 1) 0%, rgba(239, 217, 71, 1) 100%);
            background: -o-linear-gradient(-45deg, rgba(254, 252, 234, 1) 0%, rgba(239, 217, 71, 1) 100%);
            background: -ms-linear-gradient(-45deg, rgba(254, 252, 234, 1) 0%, rgba(239, 217, 71, 1) 100%);
            background: linear-gradient(135deg, rgba(254, 252, 234, 1) 0%, rgba(239, 217, 71, 1) 100%);
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#fefcea', endColorstr='#efd947', GradientType=1)
        }

        .well a {
            color: #000
        }

        .row {
            padding-left: 20px;
            padding-right: 20px;
            padding-bottom: 20px;
        }

        .latestanime-title {
            font-size: 20px;
        }

        .small-title a {
            font-size: .9em
        }

        .latestanime-subtitle {
            height:141px;
            position: inherit;
            font-size: .9em;
            font-weight: 700;
            color: #5e5e5e;
            word-wrap: break-word;
        }

        .latest-parent {
            color: #457799 !important;
            font-weight: 700;
            font-size: 1em;
            word-wrap: break-word;
            margin-right: 2px;
            float: right;
        }
    </style>
</head>

<body>
    <div class="content">
        <div class="logo">
            <a href="home.php"><img src="img/logo.png">
            </a>
        </div>
        <div class="cx">
            <div class="head" id="head">
                <ul>
                    <li><a href="#article">Why E-F-ALL?</a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn">Our Work</a>
                        <div class="dropdown-content">
                            <a href="#article">Lebanon</a>
                            <a href="#article">Africa</a>
                            <a href="#article">Covid-19</a>
                        </div>
                    </li>
                    <li><a href="#about">About Us</a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn">Get Involved</a>
                        <div class="dropdown-content">
                            <a href="#fund">Fundraise</a>
                            <a href="#bp">Brand Partnership</a>
                            <a href="#lg">Legacy giving</a>
                            <a href="#st">Student and teacher</a>
                        </div>
                    </li>
                    <li><a href="account.php"><i></i>Add campaigns</a></li>
                    <li><a href="#"><i Class="fa fa-map-marker"></i>Donate</a></li>
                    <li><a href="account.php"><i Class="fa fa-shopping-cart"></i>My-Account</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="campaign">
        <div class="hidden-xs"><br></div>
        <div class="tab-content">
            <div class="tab-pane fade active in" id="new"><br>
                <?php $query1 = "select * from campaigns";
                $query_run = mysqli_query($link, $query1);
                $cnt = 1;

                while (($row = mysqli_fetch_array($query_run))) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="well">
                            <div class="row">
                                <div class="col-xs-12"><br>
                                    <div class="latestanime-title">
                                    <?php echo $row['cname']; ?>
                                    </div>
                                    <br>
                                    <div class="latestanime-subtitle">
                                    <?php echo $row['cdetail']; ?>
                                    </div>
                                    <a href="#" class="latest-parent" title="Mewkledreamy"><i class="fas fa-indent" aria-hidden="true"></i>By <?php echo $row['cby']; ?>
                                    </a><br>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                } ?>
            </div>
        </div>
    </div>

</body>

</html>