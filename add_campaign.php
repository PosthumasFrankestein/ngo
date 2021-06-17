<?php

session_start();

if (!isset($_SESSION['uid'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: account.php');
}
if (!isset($_SESSION['msg'])) {
    $_SESSION['msg'] = "OK";
}
$uid = $_SESSION['uid'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Send Mail</title>
    <link rel="stylesheet" type="text/css" href="style/campaign.css">
</head>

<body>
    <div class="container">
        <br><br>
        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        <b>Campaign Name:</b>
                    </td>
                    <td>
                        <input class="subject" name="cname" type="text" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Campaign Details</b>
                    </td>
                    <td>
                        <textarea name="cdetail" rows="6" cols="56" placeholder="Start typing" required></textarea>
                    </td>
                </tr>
            </table>
            <input class="btn" type="submit" value="Add campaign" name="add">
            <button type="button" onclick="window.location='user_login.php';return false;" class="btn1">Cancel</button>
        </form>
        <?php
        if (isset($_POST['add'])) {
            $link = mysqli_connect("localhost", "root", "", "lonee_list");
            $result=mysqli_query($link,"SELECT name from login where uid='$uid'");
            $name = $result->fetch_array()[0] ?? '';
            $query = "INSERT INTO campaigns (cname,cdetail,cby,uid) VALUES('$_POST[cname]','$_POST[cdetail]','$name','$uid')";
            $query_run = mysqli_query($link, $query);
        }
        ?>
    </div>
</body>

</html>