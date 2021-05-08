<?php
	session_destroy();
    unset($_SESSION['email']);
    header("location: ../account.php");
?>