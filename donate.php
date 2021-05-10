<?php
session_start();
if (!isset($_SESSION['msg'])) {
    $_SESSION['msg'] = "Ready to signup";
}
if (!isset($_SESSION['uid'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: account.php');
}
if (isset($_GET['cancel'])) {
    unset($_SESSION['msg']);
    header("location:user_login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignUp </title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#datepicker").datepicker();
        });
    </script>

    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="style/signup.css">
</head>

<body>

    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form action="script/add_donate.php" method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Donate Form</h2>
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-input" placeholder="Full Name" required />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" minlength="16" maxlength="16" placeholder="Card No" required />
                        </div>
                        <div class="form-group">
                            <input type="CVV" class="form-input" minlength="3" maxlength="4" placeholder="Your security code" required />
                        </div>
                        <div class="form-group">
                            <input name="date" id="datepicker" class="form-input" placeholder="Expiry date" required/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" placeholder="Pin code" required />
                        </div>
                        <div class="form-group">
                            <input type="int" class="form-input" placeholder="Amount" name="amount" required />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Donate" />
                        </div>
                        <?php
                        if ($_SESSION['msg'] == '1') {
                            echo '<p style="color:green;font-size:large">
                            Donation Succeded
                            </p>';
                        }
                         elseif ($_SESSION['msg'] == '2') {
                            echo '<p style="color:red;font-size:large">
                            Donation failed
                            </p>';
                        }
                        elseif ($_SESSION['msg'] == '3') {
                            echo '<p style="color:red;font-size:large">
                            Your card is expired
                            </p>';
                        }
                        ?>
                    </form>
                    <p class="loginhere">
                        Done with donation ? <a href="donate.php?cancel=1;return false;" class="loginhere-link">Cancel</a>
                    </p>
                </div>
            </div>
        </section>

    </div>


</body>

</html>