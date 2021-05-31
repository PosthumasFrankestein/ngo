<?php
session_start();
if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: ../account.php');
}
$link = mysqli_connect("localhost", "root", "", "lonee_list");
$no=mysqli_query($link,"SELECT * FROM subscribe");
$result = array();
while($row = mysqli_fetch_array($no)) {
    $result[] = $row['email'];
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Send Mail</title>
    <link rel="stylesheet" type="text/css" href="../style/sendmail.css">
</head>

<body>
        <div class="container">
            <br><br>
            <form action="" method="post">
            <center>
                <table>
                    <tr>
                        <td>
                            <b>Subject:</b>
                        </td>
                        <td>
                            <input class="subject" name="Subject" type="text" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Message:</b>
                        </td>
                        <td>
                            <textarea name="Body" rows="6" cols="56" placeholder="Your message!!!" required></textarea>
                        </td>
                    </tr>        
                </table>
                </center>
                <input class="btn" type="submit" value="Send" name="send">
                <button type="button" onclick="window.location='../admin_login.php';return false;" class="btn1">Cancel</button>
            </form>
        </div>
        <?php 

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;

        if (isset($_POST['send'])) {
            require 'PHPMailer/src/Exception.php';
            require 'PHPMailer/src/PHPMailer.php';
            require 'PHPMailer/src/SMTP.php';
            $mail = new PHPMailer(true);
            foreach($result as $emails){
            $mail->setFrom('do.not.reply@gmail.com');
            $mail->addAddress($emails);
            $mail->Subject = $_POST['Subject'];
            $mail->Body = $_POST['Body'];
            $mail->IsSMTP();
            $mail->SMTPSecure = 'ssl';
            $mail->Host = 'ssl://smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Port = 465;

            $mail->Username = 'e.f.all.ngo@gmail.com';

            $mail->Password = 'ngoefall';

            if (!$mail->send()) {
                echo 'Email is not sent.';
                echo 'Email error: ' . $mail->ErrorInfo;
            } else {
                echo 'Email has been sent.';
            }
        }
    }
?>
    