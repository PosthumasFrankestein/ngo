<?php
session_start();
if (!isset($_SESSION['msg'])) {
    $_SESSION['msg'] = "Ready to signup";
}
if (isset($_GET['login'])) {
    unset($_SESSION['msg']);
    header("location:account.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignUp </title>
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="style/signup.css">
</head>

<body>
    <div class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form action="script/process.php" method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">SignUp here</h2>
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-input" placeholder="Full Name"
                                required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" id="phone" class="form-input" placeholder="Phone"
                                required />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"
                                required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="street" id="street" class="form-input" placeholder="Street"
                                required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="city" id="city" class="form-input" placeholder="City"
                                required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="state" id="state" class="form-input" placeholder="State"
                                required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="zipcode" id="zipcode" class="form-input" placeholder="Zip Code"
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
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required/>
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                statements in <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up" />
                        </div>
                        <?php
                        if ($_SESSION['msg']=='1' ){
                            echo '<p style="color:red;font-size:large">
                            Signup failed
                            </p>';
                        }
                        elseif ($_SESSION['msg']=='2' ){
                            echo '<p style="color:red;font-size:large">
                            Password dont match
                            </p>';
                        }
                        ?>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="add_admin.php?cancel=1;return false;" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>
    </div>
</body>
</html>