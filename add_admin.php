<?php
session_start();
if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: ../account.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Admin </title>
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="style/signup.css">
</head>

<body>

    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form action="script/process1.php" method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Add admin</h2>
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-input" placeholder="Full Name"
                                required />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"
                                required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" id="phone" class="form-input" placeholder="Phone"
                                required />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password"
                                placeholder="Password" required />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password1" id="password1"
                                placeholder="Confirm Password" required />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Add Admin" />
                        </div>
                        <?php
                        if ($_SESSION['msg']=='1' ){
                            echo '<p style="color:green;font-size:large">
                            Added sucessfully
                            </p>';
                        }
                        elseif ($_SESSION['msg']=='2' ){
                            echo '<p style="color:red;font-size:large">
                            Adding failed
                            </p>';
                        }
                        elseif ($_SESSION['msg']=='3' ){
                            echo '<p style="color:red;font-size:large">
                            Password dont match
                            </p>';
                        }
                        ?>
                    </form>
                    <p class="loginhere">
                        Are you done? <a href="admin_login.php" class="loginhere-link">Return Back</a>
                    </p>
                </div>
            </div>
        </section>

    </div>


</body>

</html>