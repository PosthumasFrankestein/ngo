<?php
session_start();
$link = mysqli_connect("localhost" , "root" , "" , "lonee_list");
if($link == false){
    die("Error : could not connect." .mysqli_connect_error());
}
$name=mysqli_real_escape_string($link,$_POST['name']);
$date = mysqli_real_escape_string($link,$_POST['date']);
$date1=date("Y-m-d");
$amount = mysqli_real_escape_string($link,$_POST['amount']);	
if ($date>date("m/d/Y")){
    $sql = mysqli_query($link,"INSERT INTO  Donation (uid,name,date,amount) VALUES('$_SESSION[uid]','$name','$date1','$amount')");
    if(($sql==true)){
        $_SESSION['msg'] = "1";
        header("Location:../donate.php");
        echo "donation:";
    }else{
        $_SESSION['msg'] = "2";
        echo("Error description: " . $link -> error);
        header("Location:../donate.php");
    }
}else{
    $_SESSION['msg'] = "3";
    header("Location:../donate.php");
}

?>